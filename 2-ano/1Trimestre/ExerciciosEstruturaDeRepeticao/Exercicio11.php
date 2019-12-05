<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
	$num1 = isset($_POST['n1'])?$_POST['n1']:0;
  $num2 = isset($_POST['n2'])?$_POST['n2']:0;
  $num3 = isset($_POST['n3'])?$_POST['n3']:0;
  $num4 = isset($_POST['n4'])?$_POST['n4']:0;
  $num5 = isset($_POST['n5'])?$_POST['n5']:0;
  $num6 = isset($_POST['n6'])?$_POST['n6']:0;
  $num7 = isset($_POST['n7'])?$_POST['n7']:0;
  $num8 = isset($_POST['n8'])?$_POST['n8']:0;
  $num9 = isset($_POST['n9'])?$_POST['n9']:0;
  $num10 = isset($_POST['n10'])?$_POST['n10']:0;
  $pares = 0;
  $impares = 0;
?>


<head>
  <meta charset="UTF-8" />
  <title>Exercício 11</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form method="post">
    <h5>Par ou Impar</h5>
    <hr class="dividir" />
    <?php
    for ($i = 1; $i < 11; $i++) { 
      echo "<div class='input'>
        <input type='number' name='n$i' id='n$i' required />
        <label for='n$i'>Número $i</label>
      </div>";
    }
    ?>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
  <br />
  <br />
  <?php 
    if ($num1 % 2 == 0) {
      $pares = $pares + 1;
    } else {
      $impares =  $impares + 1;
    }
    if ($num2 % 2 == 0) {
      $pares = $pares + 1;
    } else {
      $impares = $impares + 1;
    }
    if ($num3 % 2 == 0) {
      $pares = $pares + 1;
    } else {
      $impares = $impares + 1;
    }
    if ($num4 % 2 == 0) {
      $pares = $pares + 1;
    } else {
      $impares = $impares + 1;
    }
    if ($num5 % 2 == 0) {
      $pares = $pares + 1;
    } else {
      $impares = $impares + 1;
    }
    if ($num6 % 2 == 0) {
      $pares = $pares + 1;
    } else {
      $impares = $impares + 1;
    }
    if ($num7 % 2 == 0) {
      $pares = $pares + 1;
    } else {
      $impares = $impares + 1;
    }
    if ($num8 % 2 == 0) {
      $pares = $pares + 1;
    } else {
      $impares = $impares + 1;
    }
    if ($num9 % 2 == 0) {
      $pares = $pares + 1;
    } else {
      $impares = $impares + 1;
    }
    if ($num10 % 2 == 0) {
      $pares = $pares + 1;
    } else {
      $impares = $impares + 1;
    }
  ?>
  <br />
  <br />
  <form>
    <h5>Resultado</h5>
    <hr class="dividir" />
    <h5><?php echo "Pares: ".$pares; ?></h5>
    <h5><?php echo "Impares: ".$impares; ?></h5>
  </form>
</body>

</html>
