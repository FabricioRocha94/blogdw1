<?php
$dir = $_SERVER['DOCUMENT_ROOT'];
require_once 'dataBase.php';
require_once $dir . '/blogdw1/Model/comentario.php';

function insertComentario($comment)
{
    $pdo = conectar();
  // Prepared Statement para evitar SQL injection
    $stmt = $pdo->prepare('INSERT INTO COMENTARIO(AUTOR, TEXTO, IDPOSTAGEM) VALUES (:autor, :texto, :idpost);');

  // Substitui os valores no SQL e já executa
    $stmt->execute(array(
        ':autor' => $comment->getAutor(),
        ':texto' => $comment->getTexto(),
        ':idpost' => $comment->getIdPost()
    ));
}

function updateComentario($post)
{
    $pdo = conectar();
  // Prepared Statement para evitar SQL injection
    $stmt = $pdo->prepare('UPDATE COMENTARIO SET AUTOR = :autor, TEXTO = :texto, IDPOSTAGEM = :idPost WHERE ID = :id;');

  // Substitui os valores no SQL e já executa
    $stmt->execute(array(
        ':autor' => $comment->getAutor(),
        ':texto' => $comment->getTexto(),
        ':idPost' => $comment->getIdPost(),
        ':id' => $comment->getId()
    ));
}

function getComentario($id)
{
    $pdo = conectar();

    $stmt = $pdo->query('SELECT * FROM COMENTARIO WHERE ID=' . $id . " AND DELETADO = FALSE;");

    $select = $stmt->fetch();

    $comment = new Comentario();
    $comment->setId($select['ID']);
    $comment->setAutor($select['AUTOR']);
    $comment->setTexto($select['TEXTO']);
    $comment->setData($select['DATA']);
    $comment->setIdPost($select['IDPOSTAGEM']);

    return $comment;
}

function deleteComentario($id)
{
    $pdo = conectar();
  // Prepared Statement para evitar SQL injection
    $stmt = $pdo->prepare('UPDATE COMENTARIO SET DELETADO = TRUE WHERE ID = :id;');

  // Substitui os valores no SQL e já executa
    $stmt->execute(array(
        ':id' => $id
    ));
}

function readComentarios($id)
{
    $pdo = conectar();

    $stmt = $pdo->query('SELECT * FROM COMENTARIO WHERE IDPOSTAGEM =' . $id . " AND DELETADO = FALSE;");

    return $stmt;
}

?>