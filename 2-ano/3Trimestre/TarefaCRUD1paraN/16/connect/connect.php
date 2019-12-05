<?php
	include 'conf/conf.inc.php';

	header('Content-Type: text/html; charset=UTF-8');

	$GLOBALS['conexao'] = mysqli_connect($url, $usuario, $password, $dbname);

	mysqli_set_charset($GLOBALS['conexao'], 'utf8');

	if (mysqli_connect_errno()) {
		echo mysqli_connect_error();
	}
?>
