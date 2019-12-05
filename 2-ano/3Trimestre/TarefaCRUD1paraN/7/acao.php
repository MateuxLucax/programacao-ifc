<?php
  include 'connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:$_POST['acao'];
  $link = isset($_GET['link'])?$_GET['link']:$_POST['link'];
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:$_POST['tabela'];
  $codigo = isset($_POST['codigo'])?$_POST['codigo']:$_GET['codigo'];

  if ($acao == 'excluir') {
    if ($tabela == $GLOBAL['tbAluno']) {
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigoAluno = '. $codigo;
    } else {
      $sql = 'DELETE FROM '. $GLOBAL['tbAluno']. ' WHERE responsavel = '.$codigo;
      $result = mysqli_query($GLOBALS['conexao'],$sql);
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigo = '. $codigo;
    }
  }

  if ($acao == 'inserir' || $acao == 'alterar') {
    if ($tabela == $GLOBAL['tbResponsavel']) {
      $nome = isset($_POST['nome'])?$_POST['nome']:'Não Informado';
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "' )";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "' WHERE codigo = ". $codigo;
      }
    } elseif ($tabela == $GLOBAL['tbAluno']) {
      $codigo = isset($_POST['codigoAluno'])?$_POST['codigoAluno']:$_GET['codigoAluno'];
      $nome = isset($_POST['nome'])?$_POST['nome']:'Não Informado';
      $dataNascimento = isset($_POST['dataNascimento'])?converterDataYmd($_POST['dataNascimento']):1;
      $curso = isset($_POST['curso'])?$_POST['curso']:'Não Informado';
      $responsavel = isset($_POST['responsavel'])?$_POST['responsavel']:1;
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "', '". $dataNascimento. "', '". $curso. "', ". $responsavel.")";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "', dataNascimento = '". $dataNascimento. "', curso = '". $curso. "', responsavel = ". $responsavel. " WHERE codigoAluno = ". $codigo;
      }
    }
  }
  $result = mysqli_query($GLOBALS['conexao'],$sql);
  header('location: '. $link);
?>
