    <?php

    if (!isset($_SESSION)) session_start();

    if (isset($_GET["logout"])) {
      require_once "login.php";

      logout();
    }
    ?>
      <nav
        class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"
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
              <a class="nav-link" href="conheca.php"
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