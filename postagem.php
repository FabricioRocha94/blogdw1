<?php

require_once 'Model/post.php';
require_once 'DAO/postagemDAO.php';
require_once 'DAO/usuarioDAO.php';

if (!isset($_SESSION))
    session_start();

function posts()
{
    $select = readPost();
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

        }
    }

    function comentarios($id)
    {
        $post = new Post();
        $post = getPost($id);
        ?>
                    <div class="card-header bg-light">
                    <h3><?= $post->getTitulo() ?></h3>
            </div>
            <div class="card-body bg-light">
                    <ul class="list-unstyled text-white text-muted">
                        <?= $post->getTexto() ?>
                    </ul>
                    <ul class="list-unstyled text-white text-muted">
                        <?php $autor = getUsuario($post->getAutor()); ?>
                        <b><?= "Autor: ", $autor->getNome(), " - Postado em: ", $post->getData() ?></b>
                    </ul>
                    <br>

                                <h4>Comentarios</h4>
            </div>
            
        <?php

        $select = readComentarios($id);

        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="card-header bg-light">
                            <hr>
                    <?php $autor = getUsuario($linha['AUTOR']); ?>
                    <h3><?= "Autor: " . $autor->getNome() ?></h3>
            </div>
            <div class="card-body bg-light">
                    <ul class="list-unstyled text-white text-muted">
                        <?= $linha['TEXTO'] ?>
                    </ul>
                    <ul class="list-unstyled text-white text-muted">
    
                        <b><?= "Postado em: ", $linha['DATA'] ?></b>
                    </ul>
                    
                    <?php
                    if (isset($_SESSION['UsuarioAdmin'])) {
                        if ($_SESSION['UsuarioAdmin'] == true) { ?>
                        <a href="Admin/update.php?id=<?= $linha['ID'], "&acao=comment&post=", $linha['IDPOSTAGEM'] ?>" class="btn btn-danger">Excluir</a>
                    <?php 
                }
            } ?>

            </div>
            <?php

        }
    }
    ?>