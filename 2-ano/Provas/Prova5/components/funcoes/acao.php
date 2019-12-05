<?php
  include '../conf/conf.inc.php';
  include '../connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:$_POST['acao'];
  $link = isset($_GET['link'])?$_GET['link']:$_POST['link'];
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:$_POST['tabela'];

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
    $nome = isset($_POST['nome'])?$_POST['nome']:'';
    $posicao = isset($_POST['posicao'])?$_POST['posicao']:'Goleiro';
    $salario = isset($_POST['salario'])?$_POST['salario']:'';
    if ($salario == '') {
      $salario = 100;
    }
    $dataNascimento = isset($_POST['dataNascimento'])?$_POST['dataNascimento']:'03/08/2000';
    $clube = isset($_POST['clube'])?$_POST['clube']:1;
    $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "', '".$posicao ."', ".$salario .", '". converterDataYmd($dataNascimento)."', ". $clube. ")";
    $result = mysqli_query($conexao,$sql);
    echo $sql;
    header('location: '. $link);
  }

  if ($acao == 'alterar') {
    $codigo = isset($_POST['codigo'])?$_POST['codigo']:'';
    $nome = isset($_POST['nome'])?$_POST['nome']:'';
    $posicao = isset($_POST['posicao'])?$_POST['posicao']:'';
    $salario = isset($_POST['salario'])?$_POST['salario']:'';
    $dataNascimento = isset($_POST['dataNascimento'])?$_POST['dataNascimento']:'';
    $clube = isset($_POST['clube'])?$_POST['clube']:'';
    $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "', posicao =  '".$posicao ."', salario = ".$salario .", dataNascimento =  '". converterDataYmd($dataNascimento)."', clubeCodigo = ". $clube." WHERE codigo = ". $codigo;
    $result = mysqli_query($conexao,$sql);
    header('location: '. $link);
  }
?>
