<?php
$dir = $_SERVER['DOCUMENT_ROOT'];
require_once $dir . "/blogdw1/DAO/postagemDAO.php";
require_once $dir . "/blogdw1/DAO/usuarioDAO.php";

$action = $_GET["acao"];

if ($action == "post") {
    $id = $_GET["id"];
    deletePost($id);
    header("Location:admin.php");

} else if ($action == "user") {
    $id = $_GET["id"];
    deleteUsuario($id);
    header("Location:admin.php");
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
        header("Location:admin.php");

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
        header("Location:admin.php");
    }
}

?>