<?php
  include 'connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:$_POST['acao'];
  $link = isset($_GET['link'])?$_GET['link']:$_POST['link'];
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:$_POST['tabela'];
  $codigo = isset($_POST['codigo'])?$_POST['codigo']:$_GET['codigo'];

  if ($acao == 'excluir') {
    $sql = 'DELETE FROM '. $GLOBAL['tbVenda']. ' WHERE cliente = '.$codigo;
    $result = mysqli_query($GLOBALS['conexao'],$sql);
    $sql = 'DELETE FROM '. $tabela. ' WHERE codigo = '. $codigo;
    if ($tabela == $GLOBAL['tbVenda']) {
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigoVenda = '. $codigo;
    }
  }

  if ($acao == 'inserir' || $acao == 'alterar') {
    if ($tabela == $GLOBAL['tbVendedor']) {
      $nome = isset($_POST['nome'])?$_POST['nome']:'Não Informado';
      $email = isset($_POST['email'])?$_POST['email']:'Não Informado';
      $senha = isset($_POST['senha'])?$_POST['senha']:'Não Informado';
      $login = isset($_POST['login'])?$_POST['login']:'Não Informado';
      $telefone = isset($_POST['telefone'])?$_POST['telefone']:'Não Informado';
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $login. "', '". $senha. "', '". $nome. "', '".$email ."', '". $telefone. "' )";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "', email = '".$email ."', telefone = '". $telefone. "', senha = '". $senha. "', login = '". $login."' WHERE codigo = ". $codigo;
      }
    } elseif ($tabela == $GLOBAL['tbVenda']) {
      $codigo = isset($_POST['codigoVenda'])?$_POST['codigoVenda']:'';
      $valor = isset($_POST['valor'])?$_POST['valor']:0;
      $vendedor = isset($_POST['vendedor'])?$_POST['vendedor']:'Não Informado';
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $valor. "', '".$vendedor ."')";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET valor = ". $valor. ", vendedor = ".$vendedor ." WHERE codigoVenda = ". $codigo;
      }
    }
  }
  $result = mysqli_query($GLOBALS['conexao'],$sql);
  header('location: '. $link);
?>
