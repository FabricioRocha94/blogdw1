<?php

class ConnectionFactory() {
	const USER_BANCO = '';
	const SENHA_BANCO = '';

	protected static $conn;

	public function getConnection() {
		$conn = mysql_connect('localhost', $USER_BANCO, $SENHA_BANCO);
		if (!$conn) {
			die('Não foi possível conectar: ' . mysql_error());
		} else {
			return $conn;
		}
	}
}

?>