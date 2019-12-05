<?php
  include 'connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:$_POST['acao'];
  $link = isset($_GET['link'])?$_GET['link']:$_POST['link'];
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:$_POST['tabela'];
  $codigo = isset($_POST['codigo'])?$_POST['codigo']:$_GET['codigo'];

  if ($acao == 'excluir') {
    if ($tabela == $GLOBAL['tbComprador']) {
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigoJogo = '. $codigo;
    } else {
      $sql = 'DELETE FROM '. $GLOBAL['tbComprador']. ' WHERE estilo = '.$codigo;
      $result = mysqli_query($GLOBALS['conexao'],$sql);
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigo = '. $codigo;
    }
  }

  if ($acao == 'inserir' || $acao == 'alterar') {
    if ($tabela == $GLOBAL['tbComputador']) {
      $fabricante = isset($_POST['fabricante'])?$_POST['fabricante']:'Não Informado';
      $processador = isset($_POST['processador'])?$_POST['processador']:'Não Informado';
      $memoria = isset($_POST['memoria'])?$_POST['memoria']:'Não Informado';
      $hd = isset($_POST['hd'])?$_POST['hd']:'Não Informado';
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $fabricante. "', '". $processador. "', '". $memoria. "', '". $hd. "' )";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET fabricante = '". $fabricante. "', processador = '". $processador. "', memoria = '". $memoria. "', hd = '". $hd. "' WHERE codigo = ". $codigo;
      }
    } elseif ($tabela == $GLOBAL['tbComprador']) {
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
  echo $sql;
  $result = mysqli_query($GLOBALS['conexao'],$sql);
  header('location: '. $link);
?>
