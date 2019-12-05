<?php
  include 'connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:$_POST['acao'];
  $link = isset($_GET['link'])?$_GET['link']:$_POST['link'];
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:$_POST['tabela'];
  $codigo = isset($_POST['codigo'])?$_POST['codigo']:$_GET['codigo'];

  if ($acao == 'excluir') {
    $sql = 'DELETE FROM '. $GLOBAL['tbCompra']. ' WHERE cliente = '.$codigo;
    $result = mysqli_query($GLOBALS['conexao'],$sql);
    $sql = 'DELETE FROM '. $tabela. ' WHERE codigo = '. $codigo;
    if ($tabela == $GLOBAL['tbCompra']) {
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigoCompra = '. $codigo;
    }
  }

  if ($acao == 'inserir' || $acao == 'alterar') {
    if ($tabela == $GLOBAL['tbCliente']) {
      $nome = isset($_POST['nome'])?$_POST['nome']:'Não Informado';
      $email = isset($_POST['email'])?$_POST['email']:'Não Informado';
      $telefone = isset($_POST['telefone'])?$_POST['telefone']:'Não Informado';
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "', '".$email ."', '". $telefone. "')";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "', email = '".$email ."', telefone = '". $telefone. "' WHERE codigo = ". $codigo;
      }
    } elseif ($tabela == $GLOBAL['tbCompra']) {
      $codigo = isset($_POST['codigoCompra'])?$_POST['codigoCompra']:'';
      $valor = isset($_POST['valor'])?$_POST['valor']:0;
      $cliente = isset($_POST['cliente'])?$_POST['cliente']:'Não Informado';
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $valor. "', '".$cliente ."')";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET valor = ". $valor. ", cliente = ".$cliente ." WHERE codigoCompra = ". $codigo;
      }
    }
  }
  $result = mysqli_query($GLOBALS['conexao'],$sql);
  header('location: '. $link);
?>
