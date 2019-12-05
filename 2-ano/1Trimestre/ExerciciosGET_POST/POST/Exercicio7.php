<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $lado = isset($_POST['l'])?$_POST['l']:"0";
  $area = 0;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 7</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Calculadora de área de um quadrado</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="l" id="l"/>
      <label for="l">Lado em M²</label>
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
    <h5>Calculo</h5>
    <hr class="dividir" />
    <?php
      $area = $lado * $lado;
    ?>
    <h1><?php echo "A área desse<br /> quadrado é: <br />". $area."m²" ; ?></h1>
  </form>
</body>

</html>
