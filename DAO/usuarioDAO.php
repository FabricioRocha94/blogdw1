<?php
require "dataBase.php";
require_once 'Model/usuario.php';

function inserirUsuario($usuario)
{
    $conexao = conectar();
    $insert = executar(
        $conexao,
        "INSERT INTO USUARIO (NOME, SOBRENOME, TELEFONE, LOGIN, SENHA) 
    VALUES ('" . $usuario - getNome . "', '" . $usuario->getSobrenome . "',
     '" . $usuario->getTelefone . "', '" . $usuario->getLogin() . "', '" . $usuario->getSenha() . "')"
    );
    $desconectar = desconectar($conexao);
}

function listarUsuario()
{
    $conexao = conectar();
    $select = executar($conexao, "SELECT * FROM USUARIO");
    $desconectar = desconectar($conexao);
    return $select;
}

function getUsuario($id)
{
    $conexao = conectar();
    $select = executar($conexao, "SELECT * FROM USUARIO WHERE ID = " . $id);
    $desconectar = desconectar($conexao);

    $linha = retorna_linha($select);

    $usuario = new Usuario();
    $usuario->setId($linha['ID']);
    $usuario->setNome($linha['NOME']);
    $usuario->setSobrenome($linha['SOBRENOME']);
    $usuario->setTelefone($linha['TELEFONE']);
    $usuario->setLogin($linha['LOGIN']);
    $usuario->setSenha($linha['SENHA']);

    return $usuario;
}
?>