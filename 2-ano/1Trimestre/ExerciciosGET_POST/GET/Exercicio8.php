<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $ganhoPorHora = isset($_GET['gph'])?$_GET['gph']:"0";
  $horasTrabalhadas = isset($_GET['ht'])?$_GET['ht']:"0";
  $salario = 0;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 8</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form>
    <h5>Calculadora de salário</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="gph" id="gph"/>
      <label for="gph">Ganho por hora</label>
    </div>
    <div class="input">
      <input type="number" name="ht" id="ht"/>
      <label for="ht">Horas Trabalhadas</label>
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
    <h5>Calculo</h5>
    <hr class="dividir" />
    <?php
      $salario = $horasTrabalhadas * $ganhoPorHora;
    ?>
    <h1><?php echo "O seu salário é: <br />R$". $salario.",00" ; ?></h1>
  </form>
</body>

</html>
