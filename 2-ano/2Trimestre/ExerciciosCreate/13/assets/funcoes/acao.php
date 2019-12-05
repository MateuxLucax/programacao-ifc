<?php
  include '../conf/conf.inc.php';
  include '../connect/connect.php';
  require 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:'';
  $link = isset($_GET['link'])?$_GET['link']:'';
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:'';

  if ($acao == 'excluir') {
    $codigo = 0;
    if (isset($_GET['codigo'])) {
      $codigo = $_GET['codigo'];
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigo = '. $codigo;
      $result = mysqli_query($conexao, $sql);
      header('location: '. $link);
    }
  }

  if ($acao == 'inserir') {
    $numeroSalas = isset($_GET['numero_salas'])?$_GET['numero_salas']:'';
    $numeroAndares = isset($_GET['numero_andares'])?$_GET['numero_andares']:'';
    $nome = isset($_GET['nome'])?$_GET['nome']:'';
  	$sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome . "', ". $numeroSalas. ", ". $numeroAndares. ")";
  	$result = mysqli_query($conexao,$sql);
    header('location: '. $link);
  }
?>
