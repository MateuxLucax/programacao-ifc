<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  $data1 = isset($_POST['data1'])?str_replace("/", "-", $_POST['data1']):'24-04-1978';
  $data2 = isset($_POST['data2'])?str_replace("/", "-", $_POST['data2']):'24-05-1978';
  $sabadoEDomingo = isset($_POST['sabadoEDomingo'])?$_POST['sabadoEDomingo']:true;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 6</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exercício 6</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="data1" value="<?php echo date("d/m/Y", strtotime($data1));?>" />
      <label>Data 1: </label>
    </div>
    <div class="input">
      <input type="text" name="data2" value="<?php echo date("d/m/Y", strtotime($data2));?>" />
      <label>Data 2: </label>
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
        echo exercicio6($data1, $data2, $sabadoEDomingo);
      ?>
    </h5>
  </form>
</body>

</html>
