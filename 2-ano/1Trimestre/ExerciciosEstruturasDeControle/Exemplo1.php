<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $ganhoPorHora = isset($_POST['gph'])?$_POST['gph']:"0";
  $horasTrabalhadas = isset($_POST['ht'])?$_POST['ht']:"0";
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
  <form method="post">
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
      if ($salario <= 900 ) {
      	$ir = "Isento";
      } elseif ($salario >= 900 && $salario <= 1500) {
      	$ir = $salario * 0.05;
      } elseif ($salario >= 1500 && $salario <= 2500) {
      	$ir = $salario * 0.1;
      } elseif ($salario > 2500) {
      	$ir = $salario * 0.2;
      } else {
      	$ir = "Erro";
      }
      $sindicato = $salario * 0.03;
      $inss = $salario * 0.10;
      $fgts = $salario * 0.11;
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
