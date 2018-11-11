<?php
$dir = $_SERVER['DOCUMENT_ROOT'];
require_once 'dataBase.php';
require_once $dir . '/blogdw1/Model/post.php';

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

function getPost($id)
{
  $pdo = conectar();

  $stmt = $pdo->query('SELECT * FROM POSTAGEM WHERE ID=' . $id . " AND DELETADO = FALSE;");

  $select = $stmt->fetch();

  $post = new Post();
  $post->setId($select['ID']);
  $post->setTitulo($select['TITULO']);
  $post->setAutor($select['AUTOR']);
  $post->setTexto($select['TEXTO']);
  $post->setData($select['DATA']);

  return $post;
}


function readPost()
{
  $pdo = conectar();

  $stmt = $pdo->query('SELECT * FROM POSTAGEM WHERE DELETADO = FALSE ORDER BY DATA DESC;');

  return $stmt;
}

function deletePost($post)
{
  $pdo = conectar();
  // Prepared Statement para evitar SQL injection
  $stmt = $pdo->prepare('UPDATE POSTAGEM SET DELETADO = TRUE WHERE ID = :id;');

  // Substitui os valores no SQL e já executa
  $stmt->execute(array(
    ':id' => $post
  ));
}



?>