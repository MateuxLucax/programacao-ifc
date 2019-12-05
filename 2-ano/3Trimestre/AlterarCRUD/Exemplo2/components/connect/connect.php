<?php
	error_reporting(0);
	ini_set(“display_errors”, 0 );
	include 'components/conf/conf.inc.php';
	include '../conf/conf.inc.php';

	$conexao = mysqli_connect($url, $usuario, $password, $dbname);

	if (mysqli_connect_errno()) {
		echo mysqli_connect_error();
	}
?>
