<?php

require_once 'Model/post.php';
require_once 'DAO/postagemDAO.php';
require_once 'DAO/usuarioDAO.php';
require_once 'DAO/comentarioDAO.php';

if (!isset($_SESSION))
    session_start();

function posts()
{
    $select = readPost();
    while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
        ?>
    <div class="card bg-dark border-light text-center ml-5 mt-3 mb-3">
            <div class="card-header bg-light">
                    <h3><b><a href="index.php?id=<?php echo $linha['ID'] ?>" ><?= $linha['TITULO'] ?></a></b></h3>
            </div>
            <div class="card-body bg-light">
                    <ul class="list-unstyled text-white text-muted">
                        <?= $linha['TEXTO'] ?>
                    </ul>
            </div>
            <div class="card-footer bg-light">
                    <ul class="list-unstyled text-white text-muted">
                        <?php $autor = getUsuario($linha['AUTOR']); ?>
                        <b><?= "Autor: ", $autor->getNome(), " - Postado em: ", $linha['DATA'] ?></b>
                    </ul>
            </div>
    </div>
            <?php

        }
    }

    function comentarios($id)
    {
        $post = new Post();
        $post = getPost($id);
        ?>
    <div class="card bg-dark border-light text-center ml-5 mt-3 mb-3">
        <div class="card-header bg-light">
                    <h3><b><?= $post->getTitulo() ?></b></h3>
        </div>
        <div class="card-body bg-light">
            <ul class="list-unstyled text-white text-muted">
                <?= $post->getTexto() ?>
            </ul>
        </div>
        <div class="card-footer bg-light">
            <ul class="list-unstyled text-white text-muted">
                 <?php $autor = getUsuario($post->getAutor()); ?>
                 <b><?= "Autor: ", $autor->getNome(), " - Postado em: ", $post->getData() ?></b>
                    </ul>
            <?php 
            if (isset($_SESSION['UsuarioID'])) { ?>
                <a href="index.php?comment=<?= $post->getId() ?>" class="btn btn-primary">Comentar</a>
                <?php

            }
            ?>
        </div>
        
    </div>

        <?php

        $select = readComentarios($id);

        echo "<br><div class='card bg-light border-light text-center ml-5 mt-3 mb-3'>
                <h3><b>Comentarios</b></h3></div>";

        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            ?>
        <div class="card bg-dark border-light text-center ml-5 mt-3 mb-3">
            <div class="card-header bg-light">
                    <?php $autor = getUsuario($linha['AUTOR']); ?>
                    <h4><?= "Autor: " . $autor->getNome() ?></h4>
            </div>
            <div class="card-body bg-light">
                    <ul class="list-unstyled text-white text-muted">
                        <?= $linha['TEXTO'] ?>
                    </ul>
            </div>
            <div class="card-footer bg-light">
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
        </div>
            <?php

        }
    }

    function comentar($idPostagem)
    {
        ?>
    <div class="container">
        <div class="card bg-white border-light text-center ml-5 mt-3 mb-3">
        <h4 class="text-center">Comentar</h4>
        <form method="post" action="Admin/criarComentario.php" class="p-5 text-center">
            <div class="form-row">
                <div class="col-md-12 mb-3 text-center">
                    <label for="validationDefault02">Autor</label>
                    <input type="hidden" class="form-control" id="validationDefault02" readonly value="<?= $idPostagem ?>" name="idPost" required>
                    <input type="text" class="form-control text-center" id="validationDefault02" readonly placeholder="Autor" value="<?= $_SESSION["UsuarioNome"] ?>" name="autor" required>
                </div>
            </div>
        <div class="form-row">
            <div class="col-md-12 mb-3 text-center">
                <label for="validationDefault05">Texto</label>
                <textarea class="form-control" id="validationDefault05" placeholder="Comentario" name="texto" required></textarea>
            </div>
        </div>
        <br>
        <button class="btn btn-primary" type="submit">Comentar</button>
        <button class="btn btn-primary" type="reset">Limpar</button>
        </form>
        </div>
    </div>

<?php 
}
?>