<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  $data = isset($_POST['data'])?$_POST['data']:"02/08/2001";
  $dias = isset($_POST['dias'])?$_POST['dias']:2;
  $meses = isset($_POST['meses'])?$_POST['meses']:2;
  $anos = isset($_POST['anos'])?$_POST['anos']:2;
  $operacao = isset($_POST['operacao'])?$_POST['operacao']:1;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exercício 2</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="data" value="<?php echo date("d/m/Y", strtotime($data));?>" placeholder="Informe a data (dd/mm/aaaa)" />
      <label>Data</label>
    </div>
    <div class="input">
      <input type="number" name="data" value="<?php echo $dias;?>" />
      <label>Dias</label>
    </div>
    <div class="input">
      <input type="number" name="meses" value="<?php echo $meses;?>" />
      <label>Meses</label>
    </div>
    <div class="input">
      <input type="number" name="anos" value="<?php echo $anos;?>" />
      <label>Anos</label>
    </div>
    <center>
    <div>
      <div class="radio radio-inline">
        <input id="1" type="radio" name="operacao"  value="1" <?php echo $operacao == 1 ? 'checked ' : ' '; ?> />
        <label for="1">Somar</label>
      </div>
      <div class="radio radio-inline">
        <input id="2" type="radio" value="2" name="operacao" <?php echo $operacao == 2 ? 'checked ' : ' '; ?> />
        <label for="2">Subtrair</label>
      </div>
    </div>
    </center>
    <div>
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
        echo exercicio2($data, $dias, $meses, $anos, $operacao);
      ?>
    </h5>
  </form>
</body>

</html>
