<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $altura = isset($_GET['h'])?$_GET['h']:"0";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 11</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form>
    <h5>Peso Ideal</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="h" id="h" step="0.01"/>
      <label for="h">Altura</label>
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
      $pesoIdeal = (72.7 * $altura) - 58;
    ?>
    <h1><?php echo "Peso ideal: ".$pesoIdeal."Kg"; ?></h1>
  </form>
</body>

</html>
