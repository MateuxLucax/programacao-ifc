<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $nota1 = isset($_GET['n1'])?$_GET['n1']:"0";
  $nota2 = isset($_GET['n2'])?$_GET['n2']:"0";
  $nota3 = isset($_GET['n3'])?$_GET['n3']:"0";
  $nota4 = isset($_GET['n4'])?$_GET['n4']:"0";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 4</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form>
    <h5>Digite suas notas para saber sua média</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n1" id="n1" step="0.1"/>
      <label for="n1">Nota 1</label>
    </div>
    <div class="input">
      <input type="number" name="n2" id="n2" step="0.1"/>
      <label for="n2">Nota 2</label>
    </div>
    <div class="input">
      <input type="number" name="n3" id="n3" step="0.1" />
      <label for="n3">Nota 3</label>
    </div>
    <div class="input">
      <input type="number" name="n4" id="n4" step="0.1" />
      <label for="n4">Nota 4</label>
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
    <h5>Sua média é</h5>
    <hr class="dividir" />
    <?php
      $media = ($nota1 + $nota2 + $nota3 +$nota4) / 4;
    ?>
    <h1><?php echo $media ; ?></h1>
  </form>
</body>

</html>
