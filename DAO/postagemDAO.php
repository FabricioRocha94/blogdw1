<?php
require "dataBase.php";

function inserir($post)
{
    $conexao = conectar();
    $insert = executar($conexao, "INSERT INTO POSTAGEM (TEXTO, AUTOR) VALUES ('" . $post->getTexto . "', " . $post->getAutor . ")");
    $desconectar = desconectar($conexao);
}

function listarPosts()
{
    $conexao = conectar();
    $select = executar($conexao, "SELECT * FROM POSTAGEM");
    $desconectar = desconectar($conexao);
    return $select;
}
?>