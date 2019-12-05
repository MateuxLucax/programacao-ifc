<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $raio = isset($_POST['r'])?$_POST['r']:"0";
  $pi = 3.14159265358979323846;
  $area = 0;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 6</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Calculadora de Área de um Circulo</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="r" id="r"/>
      <label for="r">Raio em M²</label>
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
      $area = $pi * ($raio * $raio);
    ?>
    <h1><?php echo "A área desse<br /> circulo é: <br />". $area."m²" ; ?></h1>
  </form>
</body>

</html>
