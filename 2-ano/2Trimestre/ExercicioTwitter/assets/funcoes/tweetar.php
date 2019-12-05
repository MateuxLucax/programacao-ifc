<?php 
	include 'conf.inc.php';
	include 'connect.php';
	$postagem = isset($_POST['postagem'])?$_POST['postagem']:'';
	$sql = "INSERT INTO postagens VALUES (null, ". rand(15, 30).", ". rand(5, 15).", ".rand(5, 25).", '". date('Y-m-d'). "', '@matteussluccass', '". $postagem."' )"; 
	$result = mysqli_query($conexao, $sql);
	header('location:../../');
?>