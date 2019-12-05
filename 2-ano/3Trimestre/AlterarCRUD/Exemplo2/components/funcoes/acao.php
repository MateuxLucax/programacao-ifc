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
    $fabricante = isset($_POST['fabricante'])?$_POST['fabricante']:'';
    $capacidadeLEO = isset($_POST['capacidadeLEO'])?$_POST['capacidadeLEO']:'';
    $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "', '".$fabricante ."', ".$capacidadeLEO .")";
    $result = mysqli_query($conexao,$sql);
    header('location: '. $link);
  }

  if ($acao == 'alterar') {
    $codigo = isset($_POST['codigo'])?$_POST['codigo']:'';
    $nome = isset($_POST['nome'])?$_POST['nome']:'';
    $fabricante = isset($_POST['fabricante'])?$_POST['fabricante']:'';
    $capacidadeLEO = isset($_POST['capacidadeLEO'])?$_POST['capacidadeLEO']:'';
    $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "', fabricante = '".$fabricante ."', capacidadeLEO = ".$capacidadeLEO ." WHERE codigo = ". $codigo;
    $result = mysqli_query($conexao,$sql);
    header('location: '. $link);
  }
?>
