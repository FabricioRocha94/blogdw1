<?php
require_once 'DAO/usuarioDAO.php';
require_once 'Model/usuario.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $msg = "Usuario ou senha inválidos!";
    $msg2 = "Logado com sucesso!";
    $logout = false;
    $user = new Usuario();
    $user = verificaLogin($login, $senha);

    if ($user) {

        if (!isset($_SESSION))
            session_start();
    
      // Salva os dados encontrados na sessão
        $_SESSION['UsuarioID'] = $user->getId();
        $_SESSION['UsuarioNome'] = $user->getNome();
        $_SESSION['UsuarioAdmin'] = $user->getAdmin();
    
      // Redireciona o visitante
        //header("Location: restrito.php");

        if ($_SESSION['UsuarioAdmin'] == true) {
            header("Location:index.php?msg2=" . $msg2);
        } else if ($_SESSION['UsuarioAdmin'] == false) {
            //$response = json_encode(array('success' => true, 'nota' => $notapost, 'cnpjpost' => $cnpjpost));
            header("Location:index.php?response=" . $response);
        }
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