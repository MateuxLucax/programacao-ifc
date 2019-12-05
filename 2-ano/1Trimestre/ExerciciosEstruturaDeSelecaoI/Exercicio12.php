<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $s = isset($_POST['s'])?$_POST['s']:"1800";
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
    <h5>Calculo de aumento de salário</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="s" id="s" step="0.01" />
      <label for="s">Salário Atual</label>
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
      $sn = $s;
      $a = 0;
      $p = 0;
      if ($s <= 280) {
        $sn = $s + ($s * 0.2);
        $a = $s * 0.2;
        $p = 20;
      } elseif ($s > 280 && $s < 700) {
        $sn = $s + ($s * 0.15);
        $a = $s * 0.15;
        $p = 15;
      } elseif ($s >= 700 && $s < 1500) {
        $sn = $s + ($s * 0.1);
        $a = $s * 0.1;
        $p = 10;
      } elseif ($s >= 1500) {
        $sn = $s + ($s * 0.05);
        $a = $s * 0.05;
        $p = 5;
      } else {
        $sn = "Valor Inválido";
      }
    ?>
    <ul>
      <li><?php echo "Salário Atual: R$".number_format($s,2,",","."); ?></li>
      <li><?php echo "Salário Novo: R$".number_format($sn,2,",","."); ?></li>
      <li><?php echo "Valor do Aumento: R$".number_format($a,2,",","."); ?></li>
      <li><?php echo "Percentual do Aumento: ".$p."%"; ?></li>
    </ul>
  </form>
</body>

</html>
