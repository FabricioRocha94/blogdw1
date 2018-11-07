<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
