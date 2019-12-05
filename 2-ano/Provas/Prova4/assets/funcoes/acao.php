<?php
  include '../conf/conf.inc.php';
  include '../connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:'';
  $link = isset($_GET['link'])?$_GET['link']:'';
  $tabela = isset($_GET['tabela'])?$_GET['tabela']:'nada';

  if ($acao == 'excluir') {
    $codigo = 0;
    if (isset($_GET['codigo'])) {
      $codigo = $_GET['codigo'];
      $sql = 'DELETE FROM '. $tabela. ' WHERE codigo = '. $codigo;
      $result = mysqli_query($conexao, $sql);
      header('location: '. $link);
    }
  }

  if ($acao == 'inserir') {
    $paciente = isset($_GET['paciente'])?$_GET['paciente']:null;
    $medico = isset($_GET['medico'])?$_GET['medico']:null;
    $dataConsulta = isset($_GET['dataConsulta'])?converterDataYmd($_GET['dataConsulta']):null;
    $medicamento = isset($_GET['medicamento'])?$_GET['medicamento']:false;
    $tipoConsulta = isset($_GET['tipoConsulta'])?$_GET['tipoConsulta']:'Não informado';
    $valorConsulta = isset($_GET['valorConsulta'])?$_GET['valorConsulta']:'';
    $tipoConsulta = $tipoConsulta == ''?'Não informado':$tipoConsulta;
    $valorConsulta = $valorConsulta == ''?0:$valorConsulta;
    $sql = "INSERT INTO ". $tabela. " VALUES (null, '". $paciente. "', '".$medico ."', '".$dataConsulta ."', ".$medicamento .", '".$tipoConsulta ."', ".$valorConsulta .")";
    $result = mysqli_query($conexao,$sql);
    header('location: '. $link);
  }
?>
