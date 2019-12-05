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
    $nome = isset($_GET['nome'])?$_GET['nome']:'';
    $numeroPraticantes= isset($_GET['numero_praticantes'])?$_GET['numero_praticantes']:'';
  	$sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome . "', ". $numeroPraticantes . ")";
  	$result = mysqli_query($conexao,$sql);
    header('location: '. $link);
  }
?>
