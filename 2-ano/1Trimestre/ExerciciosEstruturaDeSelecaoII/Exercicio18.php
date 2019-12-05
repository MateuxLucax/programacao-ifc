<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $l = isset($_POST["l"])?$_POST["l"]:"20";
  $t = isset($_POST["t"])?$_POST["t"]:"E";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 18</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Abastecimento de Combústivel</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="l" id="l" step="0.001" />
      <label for="l">Litros</label>
    </div>
    <h4>Tipo do Combústivel</h4>
    <div class="radio radio-horizontal">
      <input id="r1a" type="radio" name="t" value="G" />
      <label for="r1a">Gasolina</label>
    </div>
    <div class="radio radio-horizontal">
      <input id="r1b" type="radio" name="t" value="E" />
      <label for="r1b">Etanol</label>
    </div>
    <br />
    <br />
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
      $preco=0;
        if ($t=="E") {
            if ($l<=20) {
                $preco=($l*1.90)*0.97;
            } else {
                $preco=($l*1.90)*0.95;
            }
        }
        if ($t=="G") {
            if ($l<=20) {
                $preco=($l*2.50)*0.96;
            } else {
                $preco=($l*2.50)*0.94;
            }
        }
    ?>
    <h5><?php echo "O total é R$" . number_format($preco, 2, ",", "."); ?></h5>
  </form>
</body>

</html>
