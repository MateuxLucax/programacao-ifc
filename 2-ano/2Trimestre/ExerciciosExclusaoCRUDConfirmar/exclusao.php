<?php 
  require 'conf/conf.inc.php';
  require 'connect/connect.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:'';
  $url = isset($_GET['url'])?$_GET['url']:'';
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:'';
  if ($acao = 'excluir') {
    $codigo = 0;
    if (isset($_GET['codigo'])) {
      $codigo = $_GET['codigo'];
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigo = '. $codigo;
      $result = mysqli_query($conexao, $sql);
      echo $sql;
      header('location:'. $url. '.php');
    }
  }
?>