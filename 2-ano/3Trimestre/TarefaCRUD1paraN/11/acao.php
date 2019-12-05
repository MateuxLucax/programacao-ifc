<?php
  include 'connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:$_POST['acao'];
  $link = isset($_GET['link'])?$_GET['link']:$_POST['link'];
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:$_POST['tabela'];
  $codigo = isset($_POST['codigo'])?$_POST['codigo']:$_GET['codigo'];

  if ($acao == 'excluir') {
    if ($tabela == $GLOBAL['tbJogo']) {
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigoJogo = '. $codigo;
    } else {
      $sql = 'DELETE FROM '. $GLOBAL['tbJogo']. ' WHERE estilo = '.$codigo;
      $result = mysqli_query($GLOBALS['conexao'],$sql);
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigo = '. $codigo;
    }
  }

  if ($acao == 'inserir' || $acao == 'alterar') {
    if ($tabela == $GLOBAL['tbEstilo']) {
      $descricao = isset($_POST['descricao'])?$_POST['descricao']:'Não Informado';
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $descricao. "' )";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET descricao = '". $descricao. "' WHERE codigo = ". $codigo;
      }
    } elseif ($tabela == $GLOBAL['tbJogo']) {
      $codigo = isset($_POST['codigoJogo'])?$_POST['codigoJogo']:$_GET['codigoJogo'];
      $anoLancamento = isset($_POST['anoLancamento'])?converterDataYmd($_POST['anoLancamento']):'';
      $classificacao = isset($_POST['classificacao'])?$_POST['classificacao']:'Não informado';
      $estilo = isset($_POST['estilo'])?$_POST['estilo']:1;
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $anoLancamento. "', '". $classificacao. "', ". $estilo.")";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET anoLancamento = '". $anoLancamento. "', classificacao = ". $classificacao. ", estilo = ". $estilo. " WHERE codigoJogo = ". $codigo;
      }
    }
  }
  $result = mysqli_query($GLOBALS['conexao'],$sql);
  header('location: '. $link);
?>
