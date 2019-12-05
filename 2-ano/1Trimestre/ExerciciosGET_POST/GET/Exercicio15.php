<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $metros = isset($_GET['m'])?$_GET['m']:"0";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 15</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form>
    <h5>Calculo de Tintas v1.0</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="m" id="m"/>
      <label for="m">Área pintada em M²</label>
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
    <h5>Resultado</h5>
    <hr class="dividir" />
    <?php
      $lata = ceil($metros / 54);
      $custo = $lata * 80;
    ?>
    <h1><?php echo "O custo será<br />R$".$custo.",00"; ?></h1>
  </form>
</body>

</html>
