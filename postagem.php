<?php

require_once 'Model/post.php';
require_once 'DAO/postagemDAO.php';
require_once 'DAO/usuarioDAO.php';

function posts()
{
    $select = readPost();

    while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <div class="card-header bg-light">
                    <h3><?= $linha['TITULO'] ?></h3>
            </div>
            <div class="card-body bg-light">
                    <ul class="list-unstyled text-white text-muted">
                        <?= $linha['TEXTO'] ?>
                    </ul>
                    <ul class="list-unstyled text-white text-muted">
                        <?php $autor = getUsuario($linha['AUTOR']); ?>
                        <b><?= "Autor: ", $autor->getNome(), " - Postado em: ", $linha['DATA'] ?></b>
                    </ul>
            </div>
            <?php

        }

    }
    ?>
