<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $metros = isset($_POST['m'])?$_POST['m']:"0";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 16</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Calculo de Tintas v2.0</h5>
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
      $lataA = ceil($metros / 108);
      $lataB = ceil($metros / 21.6);
      $custoA = $lataA * 80;
      $custoB = $lataB * 25;
    ?>
    <h5><?php echo "Custo em Latas de 18l<br />R$".$custoA.",00"; ?></h5>
    <h5><?php echo "Custo em Latas de 3,6l<br />R$".$custoB.",00"; ?></h5>
  </form>
</body>

</html>
