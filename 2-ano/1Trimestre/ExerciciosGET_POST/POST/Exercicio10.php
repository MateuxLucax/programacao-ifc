<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $int1 = isset($_POST['i1'])?$_POST['i1']:"0";
  $int2 = isset($_POST['i2'])?$_POST['i2']:"0";
  $real = isset($_POST['r'])?$_POST['r']:"0";
  $a = 0;
  $b = 0;
  $c = 0;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 10</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exercicio 10</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="i1" id="i1"/>
      <label for="i1">Número inteiro</label>
    </div>
    <div class="input">
      <input type="number" name="i2" id="i2"/>
      <label for="i2">Número inteiro</label>
    </div>
    <div class="input">
      <input type="number" name="r" id="r" step="0.1"/>
      <label for="r">Número real</label>
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
      $a = ($int1 * 2) * ($int2 / 2);
      $b = ($int1 * 3)+ $real;
      $c = ($real * $real * $real);
    ?>
    <ul>
      <li><?php echo "A: ".$a; ?></li>
      <li><?php echo "B: ".$b; ?></li>
      <li><?php echo "C: ".$c; ?></li>
    </ul>
  </form>
</body>

</html>
