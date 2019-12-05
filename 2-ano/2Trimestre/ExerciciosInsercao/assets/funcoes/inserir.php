<?php  
	include '../conf/conf.inc.php';
  	include '../connect/connect.php';
	$nome = $_POST['nome'];
	$fabricante = $_POST['fabricante'];
	$capacidadeLEO = $_POST['capacidadeLEO'];
	$link = $_POST['link'];
	$tabela = $_POST['tabela'];
	$sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "', '". $fabricante. "', ". $capacidadeLEO. ")"; 
	$result = mysqli_query($conexao,$sql);
    header('location: '. $link);
?>