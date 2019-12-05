<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $altura = isset($_POST['h'])?$_POST['h']:"0";
  $sexo = isset($_POST['sexo'])?$_POST['sexo']:"1";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 12</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Peso Ideal</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="h" id="h" step="0.01"/>
      <label for="h">Altura</label>
    </div>
    <h4>Sexo:</h4>
    <div class="radio radio-horizontal">
      <input id="m" type="radio" name="sexo" value="1" checked>
      <label for="m">Masculino</label>
    </div>
    <div class="radio radio-horizontal">
      <input id="f" type="radio" name="sexo" value="2">
      <label for="f">Feminino</label>
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
    <h5>Resultados</h5>
    <hr class="dividir" />
    <?php
      if ($sexo == 1) {
        $pesoIdeal = (72.7 * $altura) - 58;
      } else {
        $pesoIdeal = (62.1 * $altura) - 44.7;
      }
    ?>
    <h1><?php echo "Peso ideal: ".$pesoIdeal."Kg"; ?></h1>
  </form>
</body>

</html>
