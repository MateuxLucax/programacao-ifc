<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  $dataDeVencimento = isset($_POST['dataDeVencimento'])?str_replace("/", "-", $_POST['dataDeVencimento']):'24-04-1978';
  $dataDePagamento = isset($_POST['dataDePagamento'])?str_replace("/", "-", $_POST['dataDePagamento']):'24-05-1978';
  $precoDaConta = isset($_POST['precoDaConta'])?$_POST['precoDaConta']:1000;
  $valorDaMulta = isset($_POST['valorDaMulta'])?$_POST['valorDaMulta']:100;
  $jurosDiarios = isset($_POST['jurosDiarios'])?$_POST['jurosDiarios']:10;
  $sabadoEDomingo = isset($_POST['sabadoEDomingo'])?$_POST['sabadoEDomingo']:true;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 7</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exercício 7</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="dataDeVencimento" value="<?php echo date("d/m/Y", strtotime($dataDeVencimento));?>" />
      <label>Data de Vencimento: </label>
    </div>
    <div class="input">
      <input type="text" name="dataDePagamento" value="<?php echo date("d/m/Y", strtotime($dataDePagamento));?>" />
      <label>Data de Pagamento: </label>
    </div>
    <div class="input">
      <input type="text" name="precoDaConta" value="<?php echo $precoDaConta;?>" step="0.01" />
      <label>Preço da Conta: </label>
    </div>
    <div class="input">
      <input type="text" name="valorDaMulta" value="<?php echo $valorDaMulta;?>" step="0.01" />
      <label>Valor da Multa: </label>
    </div>
    <div class="input">
      <input type="text" name="jurosDiarios" value="<?php echo $jurosDiarios;?>" step="0.01" />
      <label>Valor do Juros diário: </label>
    </div>
    <div>
      <div class="radio radio-inline">
        <input id="1" type="radio" name="sabadoEDomingo"  value="true" <?php echo $sabadoEDomingo == 'true' ? 'checked ' : ' '; ?> />
        <label for="1">Contar Sabados e Domingos</label>
      </div>
      <div class="radio radio-inline">
        <input id="2" type="radio" value="false" name="sabadoEDomingo" <?php echo $sabadoEDomingo == 'false' ? 'checked ' : ' '; ?> />
        <label for="2">Não Contar Sabados e Domingos</label>
      </div>
    </div>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
    </form>
    <form>
    <br /><br /><br />
    <h5>Resultados</h5>
    <hr class="dividir" />
    <h5>
      <?php
	       require 'Funcoes.php';
         echo exercicio7($dataDeVencimento, $dataDePagamento, $precoDaConta, $valorDaMulta, $jurosDiarios, $sabadoEDomingo);
      ?>
    </h5>
  </form>
</body>

</html>
