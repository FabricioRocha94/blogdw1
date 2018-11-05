<?php
// Para verificar se o arquivo j� foi importado
if (!defined("CONST_BASE.PHP")) {
	define("CONST_BASE.PHP", "BASE.PHP importado");

// Constantes do servidor e do banco de dados
	define('S_SERVIDOR', '10.115.71.16');
	define('BD_USUARIO', 'dw1');
	define('BD_SENHA', 'dw1');
	define('BD_BASEDEDADOS', 'dw1');

//$conexao_sgbd = mysqli_connect(S_SERVIDOR, BD_USUARIO, BD_SENHA);
//$conexao_base = mysqli_select_db($conexao_sgbd, BD_BASEDEDADOS);
// Conecta ao MySQL e � base de dados sitedfch
	function conectar()
	{
	// Realiza uma conexao com o MySQL
		$conexao_sgbd = mysqli_connect(S_SERVIDOR, BD_USUARIO, BD_SENHA);
		if (!$conexao_sgbd)
			die('Não foi possível conectar ao banco de dados: ' . mysql_error());

	// Conecta � base de dados
		$conexao_base = mysqli_select_db($conexao_sgbd, BD_BASEDEDADOS);
		if (!$conexao_base)
			die('Não foi possível conectar à base de dados: ' . mysql_error());

	// Retorna a base de dados
		return $conexao_sgbd;
	}

// Fecha conex�o com MySQL
	function desconectar($conexao)
	{
		mysqli_close($conexao);
	}

// Executa uma consulta e retorna o resultado, se houver
	function executar($conexao, $SQL)
	{
		$resultado = mysqli_query($conexao, $SQL);
	
	//$resultado = mysql_query($SQL);
		if (!$resultado)
			die('Não foi possível realizar a consulta: ' . mysql_error());

	// Retorna o resultado da consulta
		return $resultado;
	}

// Verifica se a consulta gerou algum resultado
	function verifica_resultado($resultado)
	{
		return (mysqli_num_rows($resultado));
	}

// Coloca uma tupla de uma consulta em um array associativo
	function retorna_linha($consulta)
	{
		return mysqli_fetch_assoc($consulta);
	}

// Conecta ao banco de dados
	$conexao = conectar();

} // Fim o if(!defined("CONST_BASE.PHP")){
?>
