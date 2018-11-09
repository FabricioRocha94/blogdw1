<?php
require_once 'dataBase.php';
require_once 'Model/usuario.php';

function insertUsuario($usuario)
{
    $pdo = conectar();
  // Prepared Statement para evitar SQL injection
    $stmt = $pdo->prepare('INSERT INTO USUARIO (NOME, SOBRENOME, TELEFONE, LOGIN, SENHA) 
    VALUES (:nome, :sobrenome, :telefone, :login, :senha);');

  // Substitui os valores no SQL e já executa
    $stmt->execute(array(
        ':nome' => $usuario->getNome(),
        ':sobrenome' => $usuario->getSobrenome(),
        ':telefone' => $usuario->getTelefone(),
        ':login' => $usuario->getLogin(),
        ':senha' => $usuario->getSenha()
    ));
}

function update($usuario)
{
    $pdo = conectar();
  // Prepared Statement para evitar SQL injection
    $stmt = $pdo->prepare('UPDATE USUARIO SET NOME = :nome, 
                                SOBRENOME = :texto, 
                                TELEFONE = :autor, 
                                LOGIN = :login, 
                                SENHA = :senha
                                 WHERE ID = :id;');

  // Substitui os valores no SQL e já executa
    $stmt->execute(array(
        ':nome' => $usuario->getNome(),
        ':sobrenome' => $usuario->getSobrenome(),
        ':telefone' => $usuario->getTelefone(),
        ':login' => $usuario->getLogin(),
        ':senha' => $usuario->getSenha()
    ));
}

function listarUsuario()
{
    $pdo = conectar();

    $stmt = $pdo->query('SELECT * FROM USUARIO;');

    return $stmt;
}

function getUsuario($id)
{
    $pdo = conectar();
    $select = $pdo->query("SELECT * FROM USUARIO WHERE ID = " . $id);

    $select = $select->fetch();

    $usuario = new Usuario();
    $usuario->setId($select['ID']);
    $usuario->setNome($select['NOME']);
    $usuario->setSobrenome($select['SOBRENOME']);
    $usuario->setTelefone($select['TELEFONE']);
    $usuario->setLogin($select['LOGIN']);
    $usuario->setSenha($select['SENHA']);

    return $usuario;
}

function verificaLogin($login, $senha)
{
    $pdo = conectar();
    $select = $pdo->query("SELECT * FROM USUARIO WHERE LOGIN = '" . $login . "' AND SENHA = '" . $senha . "'");

    $select = $select->fetch();
    if ($select == false) {
        return false;
    } else {
        $usuario = new Usuario();
        $usuario->setId($select['ID']);
        $usuario->setNome($select['NOME']);
        $usuario->setSobrenome($select['SOBRENOME']);
        $usuario->setTelefone($select['TELEFONE']);
        $usuario->setLogin($select['LOGIN']);
        $usuario->setSenha($select['SENHA']);
        $usuario->setAdmin($select['ADMIN']);

        return $usuario;
    }
}
?>