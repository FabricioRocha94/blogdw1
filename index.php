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
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />

    <title>Olá, mundo!</title>
  </head>
  <body>
    <div class="container-fluid mt-5 text-center">
      <img
        src="Daciolo_Banner.png"
        class="text-center "
        alt=""
        width="70%"
        height="220px"
      />
    </div>
    <div class="container">
      <nav
        class="navbar navbar-expand-lg navbar-light bg-light navbar-border mt-4"
      >
        <a class="navbar-brand" href="#">Home</a>
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
                <a class="dropdown-item" href="#">Ursal</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Maçonaria</a>
              </div>
            </li>

            <li class="nav-item "><a class="nav-link" href="#">Contato</a></li>

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
              <div class="dropdown-menu">
                <form class="px-4 py-3">
                  <div class="form-group">
                    <label for="exampleDropdownFormEmail1"
                      >Endereço de email</label
                    >
                    <input
                      type="email"
                      class="form-control"
                      id="exampleDropdownFormEmail1"
                      placeholder="email@exemplo.com"
                    />
                  </div>
                  <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Senha</label>
                    <input
                      type="password"
                      class="form-control"
                      id="exampleDropdownFormPassword1"
                      placeholder="Senha"
                    />
                  </div>
                  <div class="form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="dropdownCheck"
                    />
                    <label class="form-check-label" for="dropdownCheck">
                      Remember me
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"
                  >Novo, por aqui? Regitre-se.</a
                >
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Busque a Deus"
              aria-label="Search"
            />
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
              Search
            </button>
          </form>
        </div>
      </nav>
    </div>

    <div class="container-fluid mt-4 text-center">
      <div class="row">
        <div class="col-9  ">
          <div class="row">
            <div class="col">
              <div class="card bg-dark border-light text-center ml-5 mt-3 mb-3">
                <?php 
                require "postagem.php";
                posts();
                ?>
            </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="card bg-dark border-light text-center ml-5 mt-3 mb-3">
                <div class="card-header bg-light">Título</div>
                <div class="card-body bg-light">
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
          </div>
        </div>
        <div class="col-3 bg-success sideBarPropaganda"><p>ksdljk</p></div>
      </div>
    </div>

    <div class="container-fluid bg-dark">
      <div class="container mt-5">
        <div class="row mt-3">
          <div class="col">
            <div
              class="card bg-dark border-dark text-center mt-3 mb-3"
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
