<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $lado1 = isset($_POST['l1'])?$_POST['l1']:3;
  $lado2 = isset($_POST['l2'])?$_POST['l2']:4;
  $lado3 = isset($_POST['l3'])?$_POST['l3']:5;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 6</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Tipo de Triângulo</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="l1" id="l1"/>
      <label for="n1">Lado 1</label>
    </div>
    <div class="input">
      <input type="number" name="l2" id="l2"/>
      <label for="l2">Lado 2</label>
    </div>
    <div class="input">
      <input type="number" name="l3" id="l3"/>
      <label for="l3">Lado 3</label>
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
      if($lado1 + $lado2 > $lado3 or $lado1 + $lado3 > $lado2 or $lado2 + $lado3 > $lado1) {
        $triangulo = 1;
        if ($triangulo == 1) {
          if ($lado1 == $lado2 && $lado1 == $lado3) {
            $tipoTriangulo = "Equilátero";
          } elseif ($lado1 == $lado2 or $lado1 == $lado3) {
            $tipoTriangulo = "Isóceles";
          } elseif ($lado1 != $lado2 and $lado1 != $lado3) {
            $tipoTriangulo = "Escaleno";
          }
        }
      } else {
        $tipoTriangulo = "Valores não formam um triângulo";
      }
    ?>
    <h5><?php echo "Tipo do Triângulo: ".$tipoTriangulo; ?></h5>
  </form>
</body>

</html>