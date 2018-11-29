<?php

if (!isset($_SESSION))
    session_start();

function listEventos($page)
{

    $select = readPageEventos($page);
    while ($linha = $select[0]->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <div class="card text-center">
            <div class="card-header">
                <?= $linha['TITULO'] ?>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $linha['ENDERECO'] ?></h5>
                <p class="card-text"><?= $linha['DESCRICAO'] ?></p>
                <a href="#" class="btn btn-primary">Saiba Mais</a>
            </div>
            <div class="card-footer text-muted">
                <?= $linha['DATA'] ?>
            </div>
        </div>
            <?php

        }

        $anterior = $page - 1;
        $proximo = $page + 1;
        echo "<div class='text-center'>";
        if ($page > 1) {
            echo "<a href='index.php?page=" . $anterior . "' class='btn btn-primary m-2'><- Página Anterior</a>";
        }

        echo "<button type='button' class='btn btn-danger'>" . $page . "</button>";

        if ($page < $select[1]) {
            echo "<a href='index.php?page=" . $proximo . "' class='btn btn-primary m-2'>Próxima Página -></a>";
        }
        echo "</div>";
    }

    ?>