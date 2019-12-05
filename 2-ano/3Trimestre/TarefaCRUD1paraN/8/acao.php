<?php
  include 'connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:$_POST['acao'];
  $link = isset($_GET['link'])?$_GET['link']:$_POST['link'];
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:$_POST['tabela'];
  $codigo = isset($_POST['codigo'])?$_POST['codigo']:$_GET['codigo'];

  if ($acao == 'excluir') {
    if ($tabela == $GLOBAL['tbFuncionario']) {
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigoFuncionario = '. $codigo;
    } else {
      $sql = 'DELETE FROM '. $GLOBAL['tbFuncionario']. ' WHERE funcao = '.$codigo;
      $result = mysqli_query($GLOBALS['conexao'],$sql);
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigo = '. $codigo;
    }
  }

  if ($acao == 'inserir' || $acao == 'alterar') {
    if ($tabela == $GLOBAL['tbFuncao']) {
      $nome = isset($_POST['nome'])?$_POST['nome']:'Não Informado';
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "' )";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "' WHERE codigo = ". $codigo;
      }
    } elseif ($tabela == $GLOBAL['tbFuncionario']) {
      $codigo = isset($_POST['codigoFuncionario'])?$_POST['codigoFuncionario']:$_GET['codigoFuncionario'];
      $nome = isset($_POST['nome'])?$_POST['nome']:'Não Informado';
      $dataAdmissao = isset($_POST['dataAdmissao'])?converterDataYmd($_POST['dataAdmissao']):1;
      $salario = isset($_POST['salario'])?$_POST['salario']:0;
      $funcao = isset($_POST['funcao'])?$_POST['funcao']:1;
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "', ". $salario. ", '". $dataAdmissao. "', ". $funcao.")";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "', dataAdmissao = '". $dataAdmissao. "', salario = ". $salario. ", funcao = ". $funcao. " WHERE codigoFuncionario = ". $codigo;
      }
    }
  }
  $result = mysqli_query($GLOBALS['conexao'],$sql);
  header('location: '. $link);
?>
