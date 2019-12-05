<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $po = isset($_POST["po"])?$_POST["po"]:"2";
  $pm = isset($_POST["pm"])?$_POST["pm"]:"2";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 19</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Feira</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="po" id="po" />
      <label for="po">Morango Kg</label>
    </div>
    <div class="input">
      <input type="number" name="pm" id="pm" />
      <label for="pm">Maça Kg</label>
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
    <?php 
      $precoo = 0;
      $precom = 0;
      $precototal = 0;
      $massat = $po + $pm;
      if ($po > 0 && $pm > 0) {
        if ($po <= 5) {
          $precoo = $po * 2.5;
        } else {
          $precoo = $po * 2.2;
        }
        if ($pm <= 5) {
          $precom = $pm * 1.8;
        } else {
          $precom = $pm * 1.5;
        }
        $precototal = $precoo + $precom;
        if ($precototal > 25 || $massat > 8) {
          $precototal *= 0.9;
        }
      }
    ?>
    <h5><?php echo "Comprando ".$po."Kg  de morango e ".$pm."Kg de maçã você ira pagar R$".number_format($precototal, 2, ",", "."); ?></h5>
  </form>
</body>

</html>
