<?php
  include 'connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:$_POST['acao'];
  $link = isset($_GET['link'])?$_GET['link']:$_POST['link'];
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:$_POST['tabela'];
  $codigo = isset($_POST['codigo'])?$_POST['codigo']:$_GET['codigo'];

  if ($acao == 'excluir') {
    $sql = 'DELETE FROM '. $GLOBAL['tbMunicipios']. ' WHERE estado = '. $codigo;
    $result = mysqli_query($GLOBALS['conexao'],$sql);
    $sql = 'DELETE FROM '. $tabela. ' WHERE codigo = '. $codigo;
    if ($tabela == $GLOBAL['tbMunicipios']) {
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigoMunicipio = '. $codigo;
    }
  }

  if ($acao == 'inserir' || $acao == 'alterar') {
    if ($tabela == $GLOBAL['tbEstado']) {
      $nome = isset($_POST['nome'])?$_POST['nome']:'Não Informado';
      $sigla = isset($_POST['sigla'])?$_POST['sigla']:'Não Informado';
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "', '".$sigla ."')";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "', sigla = '".$sigla ."' WHERE codigo = ". $codigo;
      }
    } elseif ($tabela == $GLOBAL['tbMunicipios']) {
      $codigo = isset($_POST['codigoMunicipio'])?$_POST['codigoMunicipio']:'';
      $nome = isset($_POST['nome'])?$_POST['nome']:'Não Informado';
      $estado = isset($_POST['estado'])?$_POST['estado']:'Não Informado';
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "', '".$estado ."')";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "', estado = ".$estado ." WHERE codigoMunicipio = ". $codigo;
      }
    }
  }
  $result = mysqli_query($GLOBALS['conexao'],$sql);
  header('location: '. $link);
?>
