<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $ganhoPorHora = isset($_GET['gph'])?$_GET['gph']:"0";
  $horasTrabalhadas = isset($_GET['ht'])?$_GET['ht']:"0";
  $salarioBruto = 0;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 14</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form>
    <h5>Salário</h5>
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
    <h5>Resultado</h5>
    <hr class="dividir" />
    <?php
      $salarioBruto = $horasTrabalhadas * $ganhoPorHora;
      $ir = $salarioBruto * 0.11;
      $inss = $salarioBruto * 0.08;
      $sindicato = $salarioBruto * 0.05;
      $descontos = $ir + $inss + $sindicato;
      $salarioLiquido = $salarioBruto - $descontos;
    ?>
    <h4><?php echo "Salário bruto: R$".$salarioBruto.",00"; ?></h4>
    <h4>Descontos:</h4>
    <ul>
      <li><?php echo "Imposto de Renda: R$".$ir.",00"; ?></li>
      <li><?php echo "INSS: R$".$inss.",00"; ?></li>
      <li><?php echo "Sindicato: R$".$sindicato.",00"; ?></li>
      <li><?php echo "Total descontos: R$".$descontos.",00"; ?></li>
    </ul>
    <h1>Salario Liquido: <br /> <?php echo "R$".$salarioLiquido.",00"; ?></h1>
  </form>
</body>

</html>
