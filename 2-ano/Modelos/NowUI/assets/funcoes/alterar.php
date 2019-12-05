<?php  
	include '../conf/conf.inc.php';
  	include '../connect/connect.php';
  	$codigo	 = $_POST['codigo'];
	$nome = $_POST['nome'];
	$fabricante = $_POST['fabricante'];
	$capacidadeLEO = $_POST['capacidadeLEO'];
	$link = $_POST['link'];
	$tabela = $_POST['tabela'];
	$sql = "update ". $tabela. " set nome = '". $nome. "', fabricante = '". $fabricante. "', capacidadeLEO = ". $capacidadeLEO. " where  codigo = ". $codigo; 
	$result = mysqli_query($conexao,$sql);
    header('location: '. $link);
?>