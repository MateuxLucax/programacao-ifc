<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $num1 = isset($_GET['n1'])?$_GET['n1']:"0";
  $num2 = isset($_GET['n2'])?$_GET['n2']:"0";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form>
    <h5>Digite dois números para saber a sua soma</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n1" id="n1" />
      <label for="n1">Número A</label>
    </div>
    <div class="input">
      <input type="number" name="n2" id="n2" />
      <label for="n2">Número B</label>
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
    <h5>O resultado é</h5>
    <hr class="dividir" />
    <?php
      $resultado = $num1 + $num2;
    ?>
    <h1><?php echo $resultado ; ?></h1>
  </form>
</body>

</html>
