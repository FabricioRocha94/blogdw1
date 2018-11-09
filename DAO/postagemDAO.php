<?php

require_once 'dataBase.php';
require_once 'Model/post.php';

function insertPost($post)
{
  $pdo = conectar();
  // Prepared Statement para evitar SQL injection
  $stmt = $pdo->prepare('INSERT INTO POSTAGEM(TITULO, TEXTO, AUTOR) VALUES(:titulo, :texto, :autor);');

  // Substitui os valores no SQL e já executa
  $stmt->execute(array(
    ':titulo' => $post->getTitulo(),
    ':texto' => $post->getTexto(),
    ':autor' => $post->getAutor()
  ));
}

function updatePost($post)
{
  $pdo = conectar();
  // Prepared Statement para evitar SQL injection
  $stmt = $pdo->prepare('UPDATE POSTAGEM SET TITULO = :titulo, TEXTO = :texto, AUTOR = :autor WHERE ID = :id;');

  // Substitui os valores no SQL e já executa
  $stmt->execute(array(
    ':titulo' => $post->getTitulo(),
    ':texto' => $post->getTexto(),
    ':autor' => $post->getAutor(),
    ':id' => $post->getId()
  ));
}

function readPost()
{
  $pdo = conectar();

  $stmt = $pdo->query('SELECT * FROM POSTAGEM;');

  return $stmt;
}

function deletePost($post)
{
  $pdo = conectar();
  // Prepared Statement para evitar SQL injection
  $stmt = $pdo->prepare('DELETE FROM POSTAGEM WHERE ID = :id;');

  // Substitui os valores no SQL e já executa
  $stmt->execute(array(
    ':id' => $post->getId()
  ));
}

function readComentarios($id)
{
  $pdo = conectar();

  $stmt = $pdo->prepare('SELECT * FROM COMENTARIO WHERE IDPOSTAGEM = :id;');

  $stmt->query(array(
    ':id' => $id
  ));

  return $stmt;
}

?>