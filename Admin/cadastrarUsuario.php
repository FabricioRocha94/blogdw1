<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dir = $_SERVER['DOCUMENT_ROOT'];
    require_once $dir . "/blogdw1/DAO/usuarioDAO.php";
    $msg4 = "Cadastrado com sucesso!";

    $user = new Usuario();
    $user->setNome($_POST["nome"]);
    $user->setSobrenome($_POST["sobrenome"]);
    $user->setTelefone($_POST["telefone"]);
    $user->setLogin($_POST["login"]);
    $user->setSenha($_POST["senha"]);
    insertUsuario($user);
    header("Location:../index.php?msg4=" . $msg4);
}
?>