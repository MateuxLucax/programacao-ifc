<?php
  include 'connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:$_POST['acao'];
  $link = isset($_GET['link'])?$_GET['link']:$_POST['link'];
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:$_POST['tabela'];
  $codigo = isset($_POST['codigo'])?$_POST['codigo']:$_GET['codigo'];

  if ($acao == 'excluir') {
    if ($tabela == $GLOBAL['tbVenda']) {
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigo = '. $codigo;
    }
  }

  if ($acao == 'inserir' || $acao == 'alterar') {
    if ($tabela == $GLOBAL['tbVenda']) {
      $dataVenda = converterDataYmd(isset($_POST['dataVenda'])?$_POST['dataVenda']:'');
      $dataVencimento = converterDataYmd(isset($_POST['dataVencimento'])?$_POST['dataVencimento']:'');
      $dataPagamento = converterDataYmd(isset($_POST['dataPagamento'])?$_POST['dataPagamento']:'');
      if ($acao == 'inserir') {
        $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $dataVenda. "', '". $dataVencimento. "', '". $dataPagamento. "')";
        $acao = 'alterar';
      } elseif ($acao == 'alterar') {
        $sql = "UPDATE ". $tabela. " SET dataVenda = '". $dataVenda. "', dataVencimento = '". $dataVencimento. "', dataPagamento = '". $dataPagamento. "' WHERE codigo = ". $codigo;
      }
    }
  }
  $codigo = mysqli_insert_id($GLOBALS['conexao']);
  $result = mysqli_query($GLOBALS['conexao'],$sql);
echo $sql. '<br>'. $codigo;
  //header('location: '. $link.'?acao='. $acao.'&codigo='. $codigo);
?>
