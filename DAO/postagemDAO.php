<?php
require "dataBase.php";
require_once 'Model/post.php';

function inserirPost($post)
{
    $conexao = conectar();
    $insert = executar($conexao, "INSERT INTO POSTAGEM (TITULO, TEXTO, AUTOR) VALUES ('" . $post - getTitulo . "', '" . $post->getTexto . "', " . $post->getAutor . ")");
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