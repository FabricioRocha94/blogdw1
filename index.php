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
  <body class="mt-5">

<?php
          //FOOTER
$dir = $_SERVER['DOCUMENT_ROOT'];

require_once $dir . '/blogdw1/menu.php';

?> 

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://www.causaoperaria.org.br/wp-content/uploads/2018/07/cabo-daciolo-2-1024x768-1024x585.jpg" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.gazetadopovo.com.br/ra/mega/Pub/GP/p4/2018/03/28/Republica/Imagens/Vivo/Cabo%20Daciolo%20Evandro%20Eboli.jpg" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://cdn-istoe-ssl.akamaized.net/wp-content/uploads/sites/14/2018/08/56-1.png" alt="Terceiro Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>

    <div class="container-fluid bg-dark">
      <div class="container">
        <div class="row">
          <div class="col">
            <div
              class="card bg-dark border-dark text-center mb-3"
              style="width: 18rem;"
            >
              <div class="card-body bg-dark">
                <ul class="list-unstyled text-white text-muted">
                  <li class="mb-2">Desenvolvimento</li>
                  <li>Thon C. Ataide</li>
                  <li>Rafael Giro</li>
                  <li>Fabrício Rocha</li>
                  <li>Jonathan</li>
                  <li>João Pedro Guimarães</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col">
            <div
              class="card bg-dark text-center border-dark mt-3 mb-3"
              style="width: 18rem;"
            >
              <div class="card-body bg-dark">
                <ul class="list-unstyled text-white text-muted">
                  <li class="mb-2">Orientação</li>
                  <li>Erinaldo</li>
                  <li>Rafael Lang</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col">
            <div
              class="card bg-dark text-center border-dark mt-3 mb-3"
              style="width: 18rem;"
            >
              <div class="card-body bg-dark">
                <ul class="list-unstyled text-white text-muted">
                  <li class="mb-2">Patrocinio</li>
                  <li>Dolly</li>
                  <li>Trivago</li>
                  <li>Posto Ipiranga</li>
                  <li>Hotel Monte Verde</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>