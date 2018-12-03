<?php
$dir = $_SERVER['DOCUMENT_ROOT'];
require_once $dir . '/blogdw1/dataBase.php';

function readPageEventos($pc)
{
    $total_reg = "3";

    $inicio = $pc - 1;

    $inicio = $inicio * $total_reg;

    $pdo = conectar();

    $stmt = $pdo->query('SELECT E.*, LE.ADDRESS FROM (EVENTO E JOIN LOCALEVENTO LE ON E.ENDERECO = LE.ID) WHERE E.DELETADO = FALSE ORDER BY E.DATA DESC LIMIT ' . $inicio . ', ' . $total_reg . ';');

    $todos = readEventos();

    $tr = $todos->rowCount(); // verifica o número total de registros

    $tp = $tr / $total_reg; // verifica o número total de páginas

    return $array = array($stmt, $tp);
}

function readEventos()
{
    $pdo = conectar();

    $stmt = $pdo->query('SELECT * FROM EVENTO WHERE DELETADO = FALSE ORDER BY DATA DESC;');

    return $stmt;
}

function readLocalEventos()
{
    $pdo = conectar();

    $stmt = $pdo->query('SELECT LE.*, E.NOME FROM (LOCALEVENTO LE JOIN EVENTO E ON E.ENDERECO = LE.ID) WHERE E.DELETADO = FALSE ORDER BY E.DATA DESC;');

    return $stmt;
}

?>