<?php
  include 'connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:$_POST['acao'];
  $link = isset($_GET['link'])?$_GET['link']:$_POST['link'];
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:$_POST['tabela'];
  $codigo = isset($_POST['codigo'])?$_POST['codigo']:$_GET['codigo'];

  if ($acao == 'excluir') {
    $sql = 'DELETE FROM '. $GLOBAL['tbProdutos']. ' WHERE marca = '. $codigo;
    $result = mysqli_query($GLOBALS['conexao'],$sql);
    $sql = 'DELETE FROM '. $tabela. ' WHERE codigo = '. $codigo;
    if ($tabela == $GLOBAL['tbProdutos']) {
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigoProduto = '. $codigo;
    }
  }

  if ($acao == 'inserir' || $acao == 'alterar') {
    if ($tabela == $GLOBAL['tbMarcas']) {
      $nome = isset($_POST['nome'])?$_POST['nome']:'Não Informado';
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $nome. "')";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET nome = '". $nome. "' WHERE codigo = ". $codigo;
      }
    } elseif ($tabela == $GLOBAL['tbProdutos']) {
      $codigo = isset($_POST['codigoProduto'])?$_POST['codigoProduto']:'';
      $descricao = isset($_POST['descricao'])?$_POST['descricao']:'Não Informado';
      $valor = isset($_POST['valor'])?$_POST['valor']:0;
      $codigoDeBarra = isset($_POST['codigoDeBarra'])?$_POST['codigoDeBarra']:'Não Informado';
      $marca = isset($_POST['marca'])?$_POST['marca']:1;
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $descricao. "', ". $valor. ", '". $codigoDeBarra. "', ".$marca .")";
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET descricao = '". $descricao. "', valor = ". $valor. ", codigoDeBarra = '". $codigoDeBarra. "' , marca = ".$marca ." WHERE codigoProduto = ". $codigo;
      }
    }
  }
  $result = mysqli_query($GLOBALS['conexao'],$sql);
  header('location: '. $link);
?>
