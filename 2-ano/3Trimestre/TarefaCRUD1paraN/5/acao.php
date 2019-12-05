<?php
  include 'connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:$_POST['acao'];
  $link = isset($_GET['link'])?$_GET['link']:$_POST['link'];
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:$_POST['tabela'];
  $codigo = isset($_POST['codigo'])?$_POST['codigo']:$_GET['codigo'];

  if ($acao == 'excluir') {
    $sql = 'DELETE FROM '. $GLOBAL['tbClube']. ' WHERE pais = '.$codigo;
    $result = mysqli_query($GLOBALS['conexao'],$sql);
    $sql = 'DELETE FROM '. $tabela. ' WHERE codigo = '. $codigo;
    if ($tabela == $GLOBAL['tbClube']) {
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigoClube = '. $codigo;
    }
  }

  if ($acao == 'inserir' || $acao == 'alterar') {
    if ($tabela == $GLOBAL['tbPaisClube']) {
      $nome = isset($_POST['nome'])?$_POST['nome']:'Não Informado';
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "  ' )";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "' WHERE codigo = ". $codigo;
      }
    } elseif ($tabela == $GLOBAL['tbClube']) {
      $codigo = isset($_POST['codigoTime'])?$_POST['codigoTime']:'';
      $nome = isset($_POST['nome'])?$_POST['nome']:'Não Informado';
      $cidade = isset($_POST['cidade'])?$_POST['cidade']:'Não Informado';
      $numeroTorcedores = isset($_POST['numeroTorcedores'])?$_POST['numeroTorcedores']:0;
      $pais = isset($_POST['pais'])?$_POST['pais']:1;
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "', ". $numeroTorcedores. ", '".$cidade ."', ". $pais. ")";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "', cidade = '".$cidade ."', numeroTorcedores = ". $numeroTorcedores. ", pais = ". $pais. " WHERE codigoTime = ". $codigo;
      }
    }
  }
  $result = mysqli_query($GLOBALS['conexao'],$sql);
  header('location: '. $link);
?>
