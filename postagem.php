<?php

require_once 'Model/post.php';
require_once 'DAO/postagemDAO.php';
require_once 'DAO/usuarioDAO.php';

function posts()
{
    $select = readPost();
    //$id = $_GET["id"];
    //if ($id == 0) {
    while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <div class="card-header bg-light">
                    <h3><a href="index.php?id=<?php echo $linha['ID'] ?>" ><?= $linha['TITULO'] ?></a></h3>
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

        }/*

    } else if ($id > 0) {
        $comentario = readComentarios($linha['ID'])
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
            <br>
            
            <?php 
            while ($comentario = $comentario->fetch(PDO::FETCH_ASSOC)) { ?>

            <div class="card-header bg-light">
                    <h3><?= "Autor:" . $comentario['NOME'] ?></h3>
            </div>
            <div class="card-body bg-light">
                    <ul class="list-unstyled text-white text-muted">
                        <?= $comentario['TEXTO'] ?>
                    </ul>
                    <ul class="list-unstyled text-white text-muted">
                        <?php $autor = getUsuario($linha['AUTOR']); ?>
                        <b><?= "Postado em: ", $linha['DATA'] ?></b>
                    </ul>
            </div>
            <?php 
        }*/
    }
//}

    ?>
