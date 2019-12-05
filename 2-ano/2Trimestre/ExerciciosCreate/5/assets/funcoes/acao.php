<?php
  include '../conf/conf.inc.php';
  include '../connect/connect.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:'';
  $link = isset($_GET['link'])?$_GET['link']:'';
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:'nada';

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
    $numeroTorcedores = isset($_GET['numero_torcedores'])?$_GET['numero_torcedores']:'';
    $cidade = isset($_GET['cidade'])?$_GET['cidade']:'';
  	$sql = "INSERT INTO ". $tabela. " VALUES (null,'". $nome."', ". $numeroTorcedores. " , '". $cidade. "')";
  	$result = mysqli_query($conexao,$sql);
    header('location: '. $link);
  }
?>
