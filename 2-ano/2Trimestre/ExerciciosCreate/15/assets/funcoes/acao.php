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
    $origem = isset($_GET['origem'])?$_GET['origem']:'';
    $destino = isset($_GET['destino'])?$_GET['destino']:'';
    $assunto = isset($_GET['assunto'])?$_GET['assunto']:'';
    $dataEnvio = isset($_GET['data_envio'])?$_GET['data_envio']:'';
  	$sql = "INSERT INTO ". $tabela. " VALUES (null, '". $origem. "', '". $destino. "', '". $assunto. "', '". converterDataYmd($dataEnvio) . ")";
  	$result = mysqli_query($conexao,$sql);
    header('location: '. $link);
  }
?>
