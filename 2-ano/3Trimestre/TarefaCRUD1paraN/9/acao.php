<?php
  include 'connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:$_POST['acao'];
  $link = isset($_GET['link'])?$_GET['link']:$_POST['link'];
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:$_POST['tabela'];
  $codigo = isset($_POST['codigo'])?$_POST['codigo']:$_GET['codigo'];

  if ($acao == 'excluir') {
    if ($tabela == $GLOBAL['tbCarro']) {
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigoCarro = '. $codigo;
    } else {
      $sql = 'DELETE FROM '. $GLOBAL['tbCarro']. ' WHERE fabricante = '.$codigo;
      $result = mysqli_query($GLOBALS['conexao'],$sql);
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigo = '. $codigo;
    }
  }

  if ($acao == 'inserir' || $acao == 'alterar') {
    if ($tabela == $GLOBAL['tbFabricante']) {
      $nome = isset($_POST['nome'])?$_POST['nome']:'Não Informado';
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "' )";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "' WHERE codigo = ". $codigo;
      }
    } elseif ($tabela == $GLOBAL['tbCarro']) {
      $codigo = isset($_POST['codigoCarro'])?$_POST['codigoCarro']:$_GET['codigoCarro'];
      $anoFabricacao = isset($_POST['anoFabricacao'])?converterDataYmd($_POST['anoFabricacao']):'';
      $dataVenda = isset($_POST['dataVenda'])?converterDataYmd($_POST['dataVenda']):'';
      $valor = isset($_POST['valor'])?$_POST['valor']:0;
      $fabricante = isset($_POST['fabricante'])?$_POST['fabricante']:1;
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $anoFabricacao. "', '". $dataVenda. "', ". $valor. ",". $fabricante.")";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET anoFabricacao = '". $anoFabricacao. "', dataVenda = '". $dataVenda. "', valor = ". $valor. ", fabricante = ". $fabricante. " WHERE codigoCarro = ". $codigo;
      }
    }
  }
  echo $sql;
  $result = mysqli_query($GLOBALS['conexao'],$sql);
  header('location: '. $link);
?>
