<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $metros = isset($_POST['m'])?$_POST['m']:"0";
  $centimetros = 0;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 5</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Conversor de Metros para Centímetros</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="m" id="m"/>
      <label for="m">Metros</label>
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
      $centimetros = $metros * 100;
    ?>
    <h1><?php echo $metros." metros são <br />". $centimetros ." centimetros" ; ?></h1>
  </form>
</body>

</html>
