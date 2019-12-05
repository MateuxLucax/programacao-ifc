<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $n1 = isset($_POST['n1'])?$_POST['n1']:5;
  $opcao = isset($_POST['o'])?$_POST['o']:1;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 5</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Par ou Ímpar</h5>
    <hr class="dividir" />
  	<br />
  	<br />
    <select name="n1">
          <option value="" disabled>Escolha um número:</option>
          <option <?php if ($n1 == 0) { echo " selected "; } ?> value="0">0</option>
          <option <?php if ($n1 == 1) { echo " selected "; } ?> value="1">1</option>
          <option <?php if ($n1 == 2) { echo " selected "; } ?> value="2">2</option>
          <option <?php if ($n1 == 3) { echo " selected "; } ?> value="3">3</option>
          <option <?php if ($n1 == 4) { echo " selected "; } ?> value="4">4</option>
          <option <?php if ($n1 == 5) { echo " selected "; } ?> value="5">5</option>
          <option <?php if ($n1 == 6) { echo " selected "; } ?> value="6">6</option>
          <option <?php if ($n1 == 7) { echo " selected "; } ?> value="7">7</option>
          <option <?php if ($n1 == 8) { echo " selected "; } ?> value="8">8</option>
          <option <?php if ($n1 == 9) { echo " selected "; } ?> value="9">9</option>
          <option <?php if ($n1 == 10) { echo " selected "; } ?> value="10">10</option>
    </select>
    <br />
    <br /> 	
    <div class="radio radio-horizontal">
      <input id="1" type="radio" name="o" value="1" <?php echo ($opcao == 1)?'checked':'' ?> >
      <label for="1">Par</label>
    </div>
    <div class="radio radio-horizontal">
      <input id="2" type="radio" name="o" value="2" <?php echo ($opcao == 2)?'checked':'' ?> >
      <label for="2">Ímpar</label>
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
    <br />
    <center>
    <?php
    	$n2 = mt_rand(0, 10);
   		$soma = $n1 + $n2;
    	if ($opcao == 1) {
    		if ($soma % 2 == 0) {
    			$resultado = "Jogador ganhou";
    		} else {
    			$resultado = "Computador ganhou";
    		}
    	} if ($opcao == 2) {
    		if ($soma % 2 == 0) {
    			$resultado = "Computador ganhou";
    		} else {
    			$resultado = "Jogador ganhou";
    		}
    	}
    ?>
    <h5><?php echo "Jogador jogou $n1"; ?></h5>
    <h5><?php echo "Computador jogou $n2"; ?></h5>
    <h5><?php echo "A soma é $soma"; ?></h5>
    <h5><?php echo $resultado; ?></h5>
    </center>
  </form>
</body>

</html>
