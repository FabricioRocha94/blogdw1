<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    echo "Login: " . $login . " - Senha: " . $senha;

}
?>