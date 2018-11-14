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

    ?>
 </head>

  <body>
    <?php

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
      <nav
        class="navbar navbar-expand-lg navbar-dark bg-dark navbar-static-top"
      >
        <a class="navbar-brand" href="index.php">Daciblogo
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="#"
                >Conheça Daciolo<span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item"><a class="nav-link" href="#"></a></li>
            <li class="nav-item  dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Planos illuminati
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="ursal.php">Ursal</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Maçonaria</a>
              </div>
            </li>

            <li class="nav-item "><a class="nav-link" href="#">Contato</a></li>

            <?php

            if (!isset($_SESSION['UsuarioID'])) {
              session_destroy();
              ?>

              <li class="nav-item  dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Entrar
              </a>
              <div id="formLogin" class="dropdown-menu">
                <form class="px-4 py-3 " method="post" action="login.php">
                  <div class="form-group">
                    <label for="login"
                      >Login</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="login"
                      placeholder="Login"
                      name="login"/>
                  </div>
                  <div class="form-group">
                    <label for="senha">Senha</label>
                    <input
                      type="password"
                      class="form-control"
                      id="senha"
                      placeholder="Senha"
                      name="senha"/>
                  </div>
                  <div class="form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="dropdownCheck"
                    />
                    <label class="form-check-label" for="dropdownCheck">
                      Lembrar
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?cadastrar=true"
                  >Cadastrar</a
                >
              </div>
            </li>

            <?php

          } else
            if (isset($_SESSION['UsuarioID'])) {
            ?>

              <li class="nav-item "><a class="nav-link" href="index.php?logout=true">Sair</a></li>

              <?php
              if ($_SESSION['UsuarioAdmin'] == 1) {
                ?>
                <li class="nav-item "><a class="nav-link" href="Admin/admin.php">Painel Admin</a></li>
              <?php

            }
            ?>
            <?php

          }
          ?>

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Busque a Deus"
              aria-label="Search"
            />
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
              Procurar versículo
            </button>
          </form>
        </div>
        </nav>

        <div class="header">
          <h1 class="header__title">DACIBLOGO</h1>
        </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 mainblog">
              <div class="card bg-dark border-light text-center ml-5 mt-3 mb-3">
        <div class="card-header bg-light">
          <h3><b>Ursal</b></h3>
        </div>
                <div class="card-body bg-light">
            <ul class="list-unstyled text-white text-muted">
        <h3 class="text-danger"><strong>Estamos falando aqui de um plano de nova ordem mundial. É a União das Repúblicas Socialistas da América Latina, que seria para unir a América do Sul, formando uma única nação. Quero deixar claro que em nosso governo o comunismo não vai ter vez.</strong></h3><br>
                <h1><strong>GLÓRIA A DEUXXX</strong></h1><br>
                <img
                    src="ursal.jpg"
                    width=500px;
                /><br>
                <h3><strong>Hino da URSAL:</strong><br><br>URSAL, URSAL<br>Nessa terra em novembro já começa o carnaval<br>URSAL, URSAL<br>Você entra no museu, tá rolando bacanal<br>URSAL, URSAL<br>O seu carro, a geladeira, sua alma é estatal<br>URSAL, URSAL<br>George Soros é quem paga pra gente fazer sarau</h3><br>
                <h1>Vamos juntos <strong class="text-success">nação brasileira</strong><strong>!!!!!</strong> Lutemos a favor da democracia, com a palavra de Deuxxx.</h1>
                <h1><strong>Com a glória e honra do senhor Jesuixxx!!!</strong></h1>     
            </ul>
                </div>
              </div>
</div>
        <div class="col-md-4 sidebar">
          <div class="anuncio">
            <img src="public/images/ad1.jpg" alt="anuncio" class="anuncio__image">
            <h3 class="anuncio__title">A bíblia da constituição</h3>
            <p class="anuncio__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam doloremque amet blanditiis, fugit itaque fugiat veniam, aliquam adipisci harum, impedit eligendi corporis architecto voluptate quisquam doloribus! Necessitatibus accusantium cupiditate et!</p>
            <a href="#" class="button button--gold mt-3">COMPRAR</a>
          </div>
          <hr >
          <div class="anuncio">
            <img src="public/images/monte.jpg" alt="anuncio" class="anuncio__image">
            <h3 class="anuncio__title">O monte</h3>
            <p class="anuncio__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam doloremque amet blanditiis, fugit itaque fugiat veniam, aliquam adipisci harum, impedit eligendi corporis architecto voluptate quisquam doloribus! Necessitatibus accusantium cupiditate et!</p>
            <a href="#" class="button button--gold mt-3">QUERO VISITAR</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-dark">
      <img class="footer__img" src="public/images/Daciolo_Banner.png" alt="daciolo 51">
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
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>