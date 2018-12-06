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
                <a href="index.php?id=<?= $linha['ID'] ?>"><h3><?= utf8_encode($linha['NOME']) ?></h3></a>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= utf8_encode($linha['DESCRICAO']) ?></h5>
                <p class="card-text">Local: <?= utf8_encode($linha['ADDRESS']) ?></p>
                <?php
                if (isset($_SESSION['UsuarioID'])) {
                    if ($presenca->fetch(PDO::FETCH_ASSOC) == false) {
                        echo "<a href='/blogdw1/eventos/index.php?confirmar=" . $linha['ID'] . "' class='btn btn-primary'>Confirmar Presença</a>";
                    } else {
                        echo "<a href='/blogdw1/eventos/index.php?remover=" . $linha['ID'] . "' class='btn btn-danger'>Remover Presença</a>";
                    }
                } else {
                    echo "<a href='#' class='btn disabled btn-secondary'>Confirmar Presença</a>";
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

    function mostrarEvento($id)
    {
        $evento = new Evento();
        $evento = getEvento($id);

        if (isset($_SESSION['UsuarioID'])) {
            $presenca = verificaPresenca($evento->getId());
        }
        ?>
        <br>
        <div class="card text-center">
            <div class="card-header">
                <h3><?= utf8_encode($evento->getNome()) ?></h3>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= utf8_encode($evento->getDescricao()) ?></h5>
                <p class="card-text">Local: <?= utf8_encode($evento->getEndereco()) ?></p>
                <?php
                if (isset($_SESSION['UsuarioID'])) {
                    if ($presenca->fetch(PDO::FETCH_ASSOC) == false) {
                        echo "<a href='/blogdw1/eventos/index.php?confirmar=" . $evento->getId() . "' class='btn btn-primary'>Confirmar Presença</a>";
                    } else {
                        echo "<a href='/blogdw1/eventos/index.php?remover=" . $evento->getId() . "' class='btn btn-danger'>Remover Presença</a>";
                    }
                } else {
                    echo "<a href='#' class='btn disabled btn-secondary'>Confirmar Presença</a>";
                }
                echo "<br><a href='/blogdw1/eventos/index.php' class='btn btn-success m-3'>Voltar</a>";
                ?>
            </div>
            <div class="card-footer text-muted">
                Data: <?= $evento->getData() ?>
            </div>
        </div>

    <?php

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