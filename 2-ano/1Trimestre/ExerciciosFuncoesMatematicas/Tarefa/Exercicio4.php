<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $opcao = isset($_POST['o'])?$_POST['o']:1;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 6</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
  <style type="text/css">
  	img {
  		width: 200px;
  	}
  </style>
</head>

<body>
  <form method="post">
    <h5>Pedra, Papel ou Tesoura</h5>
    <hr class="dividir" />
  	<br />
  	<br />
    <br />
    <br /> 	
    <center>
    <div class="radio radio-horizontal">
      <input id="1" type="radio" name="o" value="1" <?php echo ($opcao == 1)?'checked':'' ?> >
      <label for="1">Pedra</label>
    </div>
    <div class="radio radio-horizontal">
      <input id="2" type="radio" name="o" value="2" <?php echo ($opcao == 2)?'checked':'' ?> >
      <label for="2">Papel</label>
    </div>
    <div class="radio radio-horizontal">
      <input id="3" type="radio" name="o" value="3" <?php echo ($opcao == 3)?'checked':'' ?> >
      <label for="3">Tesoura</label>
    </div>
	</center>
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
    	$pc = mt_rand(1, 3); // 1 = Pedra, 2 = Papel e 3 = Tesoura
    	if ($opcao == 1 && $pc == 3) {
    		$resultado = "Jogador Vencedor: <br /><img src='assets/Maos/pedra.png'><br /><br /> Computador Perdedor: <br /><img src='assets/Maos/tesoura.png'>";
    	} elseif ($opcao == 2 && $pc == 3) {
    		$resultado = "Jogador Perdedor: <br /><img src='assets/Maos/papel.png'><br /><br /> Computador Vencedor: <br /><img src='assets/Maos/tesoura.png'>";
    	} elseif ($opcao == 3 && $pc == 3) {
    		$resultado = "Empate: <br /><img src='assets/Maos/tesoura.png'><br /><br /><img src='assets/Maos/tesoura.png'>";
    	} elseif ($opcao == 1 && $pc == 2) {
    		$resultado = "Jogador Perdedor: <br /><img src='assets/Maos/pedra.png'><br /><br /> Computador Vencedor: <br /><img src='assets/Maos/papel.png'>";
    	} elseif ($opcao == 2 && $pc == 2) {
    		$resultado = "Empate: <br /><img src='assets/Maos/papel.png'><br /><br /><img src='assets/Maos/papel.png'>";
    	} elseif ($opcao == 3 && $pc == 2) {
    		$resultado = "Jogador Vencedor: <br /><img src='assets/Maos/tesoura.png'><br /><br /> Computador Perdedor: <br /><img src='assets/Maos/papel.png'>";
    	} elseif ($opcao == 1 && $pc == 1) {
    		$resultado = "Empate: <br /><img src='assets/Maos/pedra.png'><br /><br /><img src='assets/Maos/pedra.png'>";
    	} elseif ($opcao == 2 && $pc == 1) {
    		$resultado = "Jogador Vencedor: <br /><img src='assets/Maos/papel.png'><br /><br /> Computador Perdedor: <br /><img src='assets/Maos/pedra.png'>";
    	} elseif ($opcao == 3 && $pc == 1) {
    		$resultado = "Jogador Perdedor: <br /><img src='assets/Maos/tesoura.png'><br /><br /> Computador Vencedor: <br /><img src='assets/Maos/pedra.png'>";

    	}
    ?>
    <h5><?php echo $resultado; ?></h5>
    </center>
  </form>
</body>

</html>
