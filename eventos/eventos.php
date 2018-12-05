<?php

$dir = $_SERVER['DOCUMENT_ROOT'];
require_once $dir . '/blogdw1/eventos/DAO/eventoDAO.php';

if (!isset($_SESSION))
    session_start();


function listEventos($page)
{
    $select = readPageEventos($page);

    while ($linha = $select[0]->fetch(PDO::FETCH_ASSOC)) {
        if (isset($_SESSION['UsuarioID'])) {
            $presenca = verificaPresenca($linha['ID']);
        }
        ?>
        <br>
        <div class="card text-center">
            <div class="card-header">
                <?= $linha['NOME'] ?>
            </div>
            <div class="card-body">
                <h5 class="card-title">Local: <?= $linha['ADDRESS'] ?></h5>
                <p class="card-text"><?= $linha['DESCRICAO'] ?></p>
                <?php
                if (isset($_SESSION['UsuarioID'])) {
                    if ($presenca->fetch(PDO::FETCH_ASSOC) == false) {
                        echo "<a href='/blogdw1/eventos/index.php?confirmar=" . $linha['ID'] . "' class='btn btn-primary'>Confirmar Presença</a>";
                    } else {
                        echo "<a href='/blogdw1/eventos/index.php?remover=" . $linha['ID'] . "' class='btn btn-danger'>Remover Presença</a>";
                    }
                } else {
                    echo "<a href='#' class='btn disabled btn-primary'>Confirmar Presença</a>";
                }
                ?>
            </div>
            <div class="card-footer text-muted">
                Data: <?= $linha['DATA'] ?>
            </div>
        </div>
            <?php

        }

        $anterior = $page - 1;
        $proximo = $page + 1;
        echo "<br><div class='text-center'>";
        if ($page > 1) {
            echo "<a href='index.php?page=" . $anterior . "' class='btn btn-primary m-2'><- Página Anterior</a>";
        }

        echo "<button type='button' class='btn btn-danger'>" . $page . "</button>";

        if ($page < $select[1]) {
            echo "<a href='index.php?page=" . $proximo . "' class='btn btn-primary m-2'>Próxima Página -></a>";
        }
        echo "</div><br>";
    }

    function popularMapa()
    {

        $select = readLocalEventos();

        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "var ponto = new google.maps.LatLng(" . $linha['LAT'] . "," . $linha['LNG'] . ");
            var marker = new google.maps.Marker({
                position: ponto,
                map: map,//Objeto mapa
                clicklable: true,
                title:'" . $linha['NOME'] . "'
        });";

        }
    }

    function confirmarPresenca($idEvento)
    {
        criarPresenca($idEvento);
        header("Location:index.php");
    }

    function removerPresenca($idEvento)
    {
        deletarPresenca($idEvento);
        header("Location:index.php");
    }

    ?>