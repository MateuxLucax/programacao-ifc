<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $saque = isset($_POST['n'])?$_POST['n']:100;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 13</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Saque de Dinheiro</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n" id="n" min="1" />
      <label for="n">Saque</label>
    </div>
    <div>
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
    <ul>
    <?php
      if ($saque >= 100) {
        $nota100 = floor($saque / 100);
        $saque = $saque % 100;
        echo "<li>Nota(s) de R$100: ".$nota100;
      }
      if ($saque >= 50) {
        $nota50 = floor($saque / 50);
        $saque = $saque % 50;
        echo "<li>Nota(s) de R$50: ".$nota50;
      }
      if ($saque >= 10) {
        $nota10 = floor($saque / 10);
        $saque = $saque % 10;
        echo "<li>Nota(s) de R$10: ".$nota10;
      }
      if ($saque >= 5) {
        $nota5 = floor($saque / 5);
        $saque = $saque % 5;
        echo "<li>Nota(s) de R$5: ".$nota5;
      }
      if ($saque >= 1) {
        $nota1 = floor($saque / 1);
        echo "<li>Nota(s) de R$1: ".$nota1;
      }
    ?>
    </ul>
  </form>
</body>

</html>
