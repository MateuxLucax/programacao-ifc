<?php
  include 'connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:$_POST['acao'];
  $link = isset($_GET['link'])?$_GET['link']:$_POST['link'];
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:$_POST['tabela'];
  $codigo = isset($_POST['codigo'])?$_POST['codigo']:$_GET['codigo'];

  if ($acao == 'excluir') {
    if ($tabela == $GLOBAL['tbEstadoPais']) {
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigoEstados = '. $codigo;
    } else {
      $sql = 'DELETE FROM '. $GLOBAL['tbEstadoPais']. ' WHERE pais = '.$codigo;
      $result = mysqli_query($GLOBALS['conexao'],$sql);
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigo = '. $codigo;
    }
  }

  if ($acao == 'inserir' || $acao == 'alterar') {
    if ($tabela == $GLOBAL['tbPais']) {
      $nome = isset($_POST['nome'])?$_POST['nome']:'Não Informado';
      $sigla = isset($_POST['sigla'])?$_POST['sigla']:'Não Informado';
      $continente = isset($_POST['continente'])?$_POST['continente']:'Não Informado';
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "', '". $sigla. "', '". $continente. "' )";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "', continente = '". $continente. "', sigla = '". $sigla. "' WHERE codigo = ". $codigo;
      }
    } elseif ($tabela == $GLOBAL['tbEstadoPais']) {
      $codigo = isset($_POST['codigoEstados'])?$_POST['codigoEstados']:$_GET['codigoEstados'];
      $nome = isset($_POST['nome'])?$_POST['nome']:'Não Informado';
      $pais = isset($_POST['pais'])?$_POST['pais']:1;
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "', ". $pais. ")";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "', pais = ". $pais. " WHERE codigoEstados = ". $codigo;
      }
    }
  }
  $result = mysqli_query($GLOBALS['conexao'],$sql);
  header('location: '. $link);
?>
