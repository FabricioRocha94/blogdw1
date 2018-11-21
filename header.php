<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="public/styles/css/style.css"
    />

    <title>Daciblogo</title>

    <?php

    if (!isset($_SESSION)) session_start();

    if (isset($_GET["logout"])) {
      require_once "login.php";

      logout();
    }

    if (isset($_GET["msg"])) {
      echo "<div class='alert alert-danger text-center' role='alert'>" . $_GET["msg"] . "</div>";
    }

    if (isset($_GET["msg2"])) {
      echo "<div class='alert alert-primary text-center' role='alert'>" . $_GET["msg2"] . "</div>";
    }

    if (isset($_GET["msg3"])) {
      echo "<div class='alert alert-danger text-center' role='alert'>" . $_GET["msg3"] . "</div>";
    }

    if (isset($_GET["msg4"])) {
      echo "<div class='alert alert-primary text-center' role='alert'>" . $_GET["msg4"] . "</div>";
    }
    ?>

 </head>

  <body>
    <?php

    $dir = $_SERVER['DOCUMENT_ROOT'];

    require_once $dir . '/blogdw1/menu.php';
    ?>
        <div class="header">
          <h1 class="header__title">DACIBLOGO</h1>
        </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 mainblog">