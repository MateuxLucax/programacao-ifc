<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
	$n1 = isset($_POST['n'])?$_POST['n']:-3.45;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exemplo 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form method="post">
    <h5>Exemplos de Funções</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n" id="n" step="0.01" placeholder="<?php echo $n1; ?>" />
      <label for="n">Número</label>
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
	<h4>Valor Absoluto (abs)<br /><?php echo $n1. " --> ".abs(-3.45); ?></h4>
	<h4>Arredondamento (para cima) (ceil) <br /><?php echo $n1. " --> ".ceil(-3.45); ?></h4>
	<h4>Arredondamento (para baixo) (floor) <br /><?php echo $n1. " --> ".floor(-3.45); ?></h4>
	<h4>Arredondamento (para inteiro mais próximo) (round) <br /><?php echo $n1. " --> ".round(-3.45); ?></h4>
	<h4>Maior número de uma lista (max) (1,2,3,4,5) <br /><?php echo " --> ".max(1,2,3,4,5); ?></h4>
	<h4>Menor número de uma lista (min) (1,2,3,4,5) <br ><?php echo " --> ".min(1,2,3,4,5); ?></h4>
	<h4>Constante PI (pi) <br /><?php echo " --> ".pi(); ?></h4>
	<h4>Potência (pow) (2 elevador a 3) <br /><?php echo " --> ".pow(2, 3); ?></h4>
	<h4>Raiz Quadrada (sqrt) (Raiz Quadrada de 81) <br /><?php echo " --> ".sqrt(81); ?></h4>
	<h4>Casa decimais e trocar . por , - 3.141623<br /><?php echo number_format(3.141624, 2,',','.'); ?></h4>
  </form>
</body>

</html>
