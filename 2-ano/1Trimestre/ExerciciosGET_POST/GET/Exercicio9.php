<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $farenheit = isset($_GET['f'])?$_GET['f']:"32";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 9</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form>
    <h5>Conversor de Farenheit para Celsius</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="f" id="f"/>
      <label for="f">Temperatura em Farenheit</label>
    </div>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
  <br />
  <br />
  <br />
  <br />
  <form>
    <h5>Conversão</h5>
    <hr class="dividir" />
    <?php
      $celsius = ($farenheit - 32) / 1.8;
    ?>
    <h1><?php echo "A temperatura em<br />Celsius é ". $celsius."°" ; ?></h1>
  </form>
</body>

</html>
