<?php
  include 'connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:$_POST['acao'];
  $link = isset($_GET['link'])?$_GET['link']:$_POST['link'];
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:$_POST['tabela'];
  $codigo = isset($_POST['codigo'])?$_POST['codigo']:$_GET['codigo'];

  if ($acao == 'excluir') {
    $sql = 'DELETE FROM '. $GLOBAL['tbJogador']. ' WHERE empresario = '.$codigo;
    $result = mysqli_query($GLOBALS['conexao'],$sql);
    $sql = 'DELETE FROM '. $tabela. ' WHERE codigo = '. $codigo;
    if ($tabela == $GLOBAL['tbJogador']) {
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigoJogador = '. $codigo;
    }
  }

  if ($acao == 'inserir' || $acao == 'alterar') {
    if ($tabela == $GLOBAL['tbEmpresario']) {
      $nome = isset($_POST['nome'])?$_POST['nome']:'Não Informado';
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "  ' )";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "' WHERE codigo = ". $codigo;
      }
    } elseif ($tabela == $GLOBAL['tbJogador']) {
      $codigo = isset($_POST['codigoJogador'])?$_POST['codigoJogador']:'';
      $nome = isset($_POST['nome'])?$_POST['nome']:'Não Informado';
      $clube = isset($_POST['clube'])?$_POST['clube']:'Não Informado';
      $posicao = isset($_POST['posicao'])?$_POST['posicao']:'Não Informado';
      $numeroGols = isset($_POST['numeroGols'])?$_POST['numeroGols']:0;
      $empresario = isset($_POST['empresario'])?$_POST['empresario']:1;
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "', '".$clube ."', '". $posicao. "', ". $numeroGols. ", ". $empresario. ")";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "', clube = '".$clube ."', posicao = '". $posicao. "', numeroGols = ". $numeroGols. ", empresario = ". $empresario. " WHERE codigoJogador = ". $codigo;
      }
    }
  }
  $result = mysqli_query($GLOBALS['conexao'],$sql);
  header('location: '. $link);
?>
