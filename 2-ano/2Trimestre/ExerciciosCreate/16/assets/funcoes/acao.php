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
    $cidade = isset($_GET['cidade'])?$_GET['cidade']:'';
    $numeroAlunos = isset($_GET['numero_alunos'])?$_GET['numero_alunos']:'';
    $nomeDiretora = isset($_GET['nome_diretora'])?$_GET['nome_diretora']:'';
  	$sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome . "', '". $cidade . "', ". $numeroAlunos . ", '". $nomeDiretora . "')";
  	$result = mysqli_query($conexao,$sql);
    header('location: '. $link);
  }
?>
