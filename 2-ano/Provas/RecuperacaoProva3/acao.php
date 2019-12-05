<?php
  include 'connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:$_POST['acao'];
  $link = isset($_GET['link'])?$_GET['link']:$_POST['link'];
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:$_POST['tabela'];
  $codigo = isset($_POST['codigo'])?$_POST['codigo']:$_GET['codigo'];

  if ($acao == 'excluir') {
    $sql = "UPDATE ". $tabela. " SET excluir = 1 WHERE codigo = ". $codigo;
  }

  if ($acao == 'inserir' || $acao == 'alterar') {
    $titulo = isset($_POST['titulo'])?$_POST['titulo']:'Não Informado';
    $texto = isset($_POST['texto'])?$_POST['texto']:'Não Informado';
    $cor = isset($_POST['cor'])?$_POST['cor']:'Não Informado';
    if ($acao == 'inserir') {
      $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $titulo. "','". $texto. "','". $cor. "', false, false)";
    } elseif ($acao == 'alterar') {
      $sql = "UPDATE ". $tabela. " SET titulo = '". $titulo. "', texto = '". $texto ."', cor = '". $cor."' WHERE codigo = ". $codigo;
    }
  }

  if ($acao == 'estrela') {
    $estrela = $_GET['star'];
    $sql = "UPDATE ". $tabela. " SET estrela = ". $estrela. " WHERE codigo = ". $codigo;
  }
  $result = mysqli_query($GLOBALS['conexao'],$sql);
  header('location: '. $link);
?>
