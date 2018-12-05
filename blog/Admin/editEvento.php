<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
<?php

$dir = $_SERVER['DOCUMENT_ROOT'];
require_once $dir . "/blogdw1/eventos/Model/evento.php";
require_once $dir . "/blogdw1/eventos/DAO/eventoDAO.php";

$evento = new Evento();
$evento = getEvento($_GET["id"]);

?>
<div class="container mt-5">
<form method="post" action="update.php?acao=updatePost">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">ID</label>
      <input type="text" class="form-control" id="validationDefault01" name="id" readonly value="<?= $post->getId() ?>" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Nome</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Nome" name="nome" value="<?= $evento->getNome() ?>" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault03">Descrição</label>
      <input type="text" class="form-control" readonly id="validationDefault03" placeholder="Descrição" name="descricao" value="<?= $evento->getDescricao() ?>" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Endereço</label>
      <input type="text" class="form-control" readonly id="validationDefault03" placeholder="Endereço" name="endereco" value="<?= $evento->getEndereco() ?>" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Data</label>
      <input type="text" class="form-control" id="validationDefault05" readonly placeholder="Data" name="data" value="<?= $evento->getData() ?>" required>
    </div>
  </div>
    <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Latitude</label>
      <input type="text" class="form-control" readonly id="validationDefault03" placeholder="Latitude" name="latitude" value="<?= $evento->getLat() ?>" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Longitude</label>
      <input type="text" class="form-control" id="validationDefault05" readonly placeholder="Loingitude" name="longitude" value="<?= $evento->getLng() ?>" required>
    </div>
  </div>
    <button class="btn btn-primary" type="submit">Enviar</button>
    <a href="update.php?id=<?= $evento->getId(), "&acao=evento" ?>" class="btn btn-danger">Excluir</a>
    <a href="admin.php" class="btn btn-primary">Voltar</a>
</form>
</div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>