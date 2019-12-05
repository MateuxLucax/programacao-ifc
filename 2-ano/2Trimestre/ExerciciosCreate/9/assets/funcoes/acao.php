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
    $AnoDeFabricacao = isset($_GET['anoDeFabricacao'])?$_GET['anoDeFabricacao']:'';
    $dataDeVenda = isset($_GET['dataDeVenda'])?$_GET['dataDeVenda']:'';
    $valor = isset($_GET['valor'])?$_GET['valor']:'';
  	$sql = "INSERT INTO ". $tabela. " VALUES (null, '". converterDataYmd($AnoDeFabricacao) . "', '". converterDataYmd($dataDeVenda) . "' , ". $valor. ")";
    echo $sql;
  	$result = mysqli_query($conexao,$sql);
    header('location: '. $link);
  }
?>
