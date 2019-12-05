<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $ganhoPorHora = isset($_POST['gph'])?$_POST['gph']:"0";
  $horasTrabalhadas = isset($_POST['ht'])?$_POST['ht']:"0";
  $salario = 0;
?>
																											
<head>
  <meta charset="UTF-8" />
  <title>Exercicio 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Calculadora de Descontos</h5>
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
      $inss = $salario * 0.10;										
      $fgts = $salario * 0.11;
      $sindicato = $salario * 0.03;
      if ($salario <= 900) {
      	$ir = 0;
      } elseif ($salario > 900 && $salario <= 1500) {
      	$ir = $salario * 0.05;
      } elseif ($salario > 1500 && $salario <= 2500) {
      	$ir = $salario * 0.10;
      } elseif ($salario > 2500) {
      	$ir = $salario * 0.20;
      } else {
      	$ir = 0;
      }
      $totalDeDescontos = $inss + $ir + $sindicato;
      $salarioLiquido = $salario - $totalDeDescontos;
    ?>
    <ul>
      <li><?php echo "Salário Bruto: R$".number_format($salario,2,",","."); ?></li>
      <li><?php echo "Salário Liquído: R$".number_format($salarioLiquido,2,",","."); ?></li>
      <li><?php echo "Descontos Imposto de Renda: R$".number_format($ir,2,",","."); ?></li>
      <li><?php echo "Descontos INSS: R$".number_format($inss,2,",","."); ?></li>
      <li><?php echo "Descontos Sindicato: R$".number_format($sindicato,2,",","."); ?></li>
      <li><?php echo "Descontos FGTS: R$".number_format($fgts,2,",","."); ?></li>
      <li><?php echo "Descontos Total de Descontos: R$".number_format($totalDeDescontos,2,",","."); ?></li>
    </ul>
  </form>
</body>

</html>
