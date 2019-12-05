<?php
  include 'connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:$_POST['acao'];
  $link = isset($_GET['link'])?$_GET['link']:$_POST['link'];
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:$_POST['tabela'];
  $codigo = isset($_POST['codigo'])?$_POST['codigo']:$_GET['codigo'];

  if ($acao == 'excluir') {
    if ($tabela == $GLOBAL['tbPredio']) {
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigoPredio = '. $codigo;
    } else {
      $sql = 'DELETE FROM '. $GLOBAL['tbPredio']. ' WHERE cidade = '.$codigo;
      $result = mysqli_query($GLOBALS['conexao'],$sql);
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigo = '. $codigo;
    }
  }

  if ($acao == 'inserir' || $acao == 'alterar') {
    if ($tabela == $GLOBAL['tbConstrutora']) {
      $nome = isset($_POST['nome'])?$_POST['nome']:'Não Informado';
      if ($acao ==se 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "' )";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "' WHERE codigo = ". $codigo;
      }
    } elseif ($tabela == $GLOBAL['tbPredio']) {
      $codigo = isset($_POST['codigoPredio'])?$_POST['codigoPredio']:$_GET['codigoPredio'];
      $nivelRio = isset($_POST['nivelRio'])?$_POST['nivelRio']:0;
      $cidade = isset($_POST['cidade'])?$_POST['cidade']:1;
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $data. "', ". $nivelRio. ",". $cidade.")";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET data = '". $data. "', nivelRio = ". $nivelRio. ", cidade = ". $cidade. " WHERE codigoPredio = ". $codigo;
      }
    }
  }
  echo $sql;
  $result = mysqli_query($GLOBALS['conexao'],$sql);
  header('location: '. $link);
?>
