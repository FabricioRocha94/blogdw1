<?php
        //HEADER
$dir = $_SERVER['DOCUMENT_ROOT'];

require_once $dir . '/blogdw1/header.php';
require_once $dir . '/blogdw1/blog/Model/usuario.php';
require_once $dir . '/blogdw1/blog/DAO/usuarioDAO.php';
$user = new Usuario();
$user = getUsuario($_SESSION['UsuarioID']);

?>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="perfil-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="perfil" aria-selected="true">Perfil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="false">Meus Comentarios</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="perfil" role="tabpanel" aria-labelledby="perfil-tab">
      <form method="post" action="Admin/gerenciarUsuario.php?action=update" class="p-5">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Nome</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Nome" name="nome" value="<?= $user->getNome() ?>" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault03">Sobrenome</label>
      <input type="text" class="form-control" id="validationDefault03" placeholder="Sobrenome" name="sobrenome" value="<?= $user->getSobrenome() ?>" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault03">Telefone</label>
      <input type="text" class="form-control" id="validationDefault03" placeholder="Telefone" name="telefone" value="<?= $user->getTelefone() ?>" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault05">Login</label>
      <input type="text" class="form-control" readonly id="validationDefault05" placeholder="Login" name="login" value="<?= $user->getLogin() ?>" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault05">Senha</label>
      <input type="password" class="form-control" id="validationDefault05" placeholder="Senha" name="senha" value="<?= $user->getSenha() ?>" required>
    </div>
  </div>
  <br>
    <button class="btn btn-primary" type="submit">Salvar</button>
</form>
  </div>


  <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">

        <?php
        $pc;
        if (!isset($_GET['page'])) {
            $pc = "1";
        } else {
            $pc = $_GET["page"];
        }

        $select = readComentsUserPage($pc, $user);
        $count = (int)$select[0]->fetch(PDO::FETCH_ASSOC);
        if ($count == 0) {
            while ($linha = $select[0]->fetch(PDO::FETCH_ASSOC)) {

                $post = new Post();
                $post = getPost($linha['IDPOSTAGEM']);

                ?>
            <div><?= "Titulo da postagem: " . $post->getTitulo() ?></div>
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
                </div>
            </div>
                <?php

            }

            $anterior = $pc - 1;
            $proximo = $pc + 1;
            echo "<div class='text-center'>";
            if ($page > 1) {
                echo "<a href='perfil.php#comments?&page=" . $anterior . "' class='btn btn-primary m-2'><- Página Anterior</a>";
            }

            echo "<button type='button' class='btn btn-danger'>" . $page . "</button>";

            if ($page < $select[1]) {
                echo "<a href='perfil.php#comments?page=" . $proximo . "' class='btn btn-primary m-2'>Próxima Página -></a>";
            }
            echo "</div>";
        } else {
            echo "Você não comentou!";
        }
        ?>
  </div>
</div>

<?php
require_once $dir . '/blogdw1/footer.php';
?>