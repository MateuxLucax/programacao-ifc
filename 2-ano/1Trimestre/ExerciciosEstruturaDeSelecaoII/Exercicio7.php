<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $a = isset($_POST['a'])?$_POST['a']:0;
  $b = isset($_POST['b'])?$_POST['b']:0;
  $c = isset($_POST['c'])?$_POST['c']:0;
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
    <h5>Equação de Segundo Grau</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="a" id="a" <?php echo "value='$a'"; ?>/>
      <label for="a">A</label>
    </div>
    <?php
    if ($a != 0) {
    echo 
    "<div class='input'>
      <input type='number' name='b' id='b' value='$b'/>
      <label for='b'>B</label>
    </div>
    <div class='input'>
      <input type='number' name='c' id='c' value='$c' />
      <label for='c'>C</label>
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
  <br />
  <br />
  <form>
    <h5>Resultado</h5>
    <hr class="dividir" />
    <?php
      if ($a != 0) {
        $delta = (pow($b, 2)) - (4 * $a * $c);
        $delta = sqrt($delta);
        if ($delta < 0) {
          $resultado = "A equação não possui raizes reais.";
        } elseif ($delta == 0) {
          $x = (-$b + sqrt(pow($delta,2)))/(2*$a);
          $resultado = "O delta calculado foi igual a zero, logo possui apenas x¹ = $x.";
        } elseif ($delta > 0) {
          $x1 = ((-$b + sqrt(pow($delta,2)))/(2*$a));
          $x2 = ((-$b - sqrt(pow($delta,2)))/(2*$a));
          $resultado = "O delta calculado foi maior que zero, logo possui x¹ = ".number_format($x1,2,',','.')." e x² = ".number_format($x2,2,',','.');
        } else {
          $resultado = "Houve algum erro no processo de calculo, tente novamente.";
        }
      }
    ?>
    <h5><?php echo $a."<small>x</small>² + ".$b."<small>x</small> + ".$c; ?></h5>
    <h5><?php echo $resultado; ?></h5>
  </form>
</body>

</html>
