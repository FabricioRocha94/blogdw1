<?php
$dir = $_SERVER['DOCUMENT_ROOT'];
require_once $dir . '/blogdw1/dataBase.php';

function readPageEventos($pc)
{
    $total_reg = "3";

    $inicio = $pc - 1;

    $inicio = $inicio * $total_reg;

    $pdo = conectar();

    $stmt = $pdo->query('SELECT * FROM POSTAGEM WHERE DELETADO = FALSE ORDER BY DATA DESC LIMIT ' . $inicio . ', ' . $total_reg . ';');

    $todos = readPost();

    $tr = $todos->rowCount(); // verifica o número total de registros

    $tp = $tr / $total_reg; // verifica o número total de páginas

    return $array = array($stmt, $tp);
}

?>