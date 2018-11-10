<?php
require_once 'DAO/usuarioDAO.php';
require_once 'Model/usuario.php';
header('Content-Type: application/json; charset=utf8');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $msg = "Login ou senha inválidos!";
    $msg2 = "Logado com sucesso!";
    $user = new Usuario();
    $user = verificaLogin($login, $senha);

    if ($user) {

        if (!isset($_SESSION))
            session_start();
    
      // Salva os dados encontrados na sessão
        $_SESSION['UsuarioID'] = $user->getId();
        $_SESSION['UsuarioNome'] = $user->getNome();
        $_SESSION['UsuarioAdmin'] = $user->getAdmin();

        $login = json_encode(array('logado' => true, 'admin' => $_SESSION['UsuarioAdmin'], 'msg' => $msg2));
        header("Location:index.php?login=" . $login);
    } else {
        header("Location:index.php?msg=" . $msg);
    }

    function logout()
    {
        session_destroy();
        header("Location: index.php");
        exit;
    }

}
?>