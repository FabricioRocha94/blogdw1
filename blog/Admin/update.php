<?php

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();
$admin = true;

      // Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID']) or ($_SESSION['UsuarioAdmin'] == !$admin)) {
      // Destrói a sessão por segurança
    session_destroy();
      // Redireciona o visitante de volta pro login
    header("Location: ../index.php");
    exit;
}

$dir = $_SERVER['DOCUMENT_ROOT'];
require_once $dir . "/blogdw1/blog/DAO/postagemDAO.php";
require_once $dir . "/blogdw1/blog/DAO/usuarioDAO.php";
require_once $dir . "/blogdw1/blog/Model/post.php";
require_once $dir . "/blogdw1/blog/Model/usuario.php";

$action = $_GET["acao"];

if ($action == "post") {
    $id = $_GET["id"];
    deletePost($id);
    header("Location:admin.php");

} else if ($action == "user") {
    $id = $_GET["id"];
    deleteUsuario($id);
    header("Location:admin.php");

} else if ($action == "comment") {
    $id = $_GET["id"];
    $idPost = $_GET["post"];
    deleteComentario($id);
    header("Location:../index.php?id=" . $idPost);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($action == "updatePost") {
        $post = new Post();
        $autor = new Usuario();
        $post->setId($_POST["id"]);
        $post->setTitulo($_POST["titulo"]);
        $post->setTexto($_POST["texto"]);
        $post->setAutor($_POST["autor"]);
        $post->setData($_POST["data"]);
        updatePost($post);
        header("Location:admin.php?acao=posts");

    } else if ($action == "updateUser") {
        $user = new Usuario();
        $user->setId($_POST["id"]);
        $user->setNome($_POST["nome"]);
        $user->setSobrenome($_POST["sobrenome"]);
        $user->setTelefone($_POST["telefone"]);
        $user->setLogin($_POST["login"]);
        $user->setSenha($_POST["senha"]);
        $user->setAdmin($_POST["admin"] == true ? 1 : 0);
        updateUsuario($user);
        header("Location:admin.php?acao=users");

    } else if ($action == "criarPost") {
        $post = new Post();
        $post->setTitulo($_POST['titulo']);
        $post->setTexto($_POST['texto']);
        $post->setAutor($_SESSION['UsuarioID']);
        insertPost($post);
        header("Location:admin.php?acao=posts");
    }
}

?>