<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
	$numUsu = isset($_POST['n'])?$_POST['n']:5;
	define("INICIAL", "1");
	define("MAXIMO", "10");
?>

<head>
  <meta charset="UTF-8" />
  <title>Números Aleatórios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form method="post">
    <h5>Jogo da Adivinhação</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n" id="n" value="<?php echo $numUsu; ?>" min="1" max="10" required />
      <label for="n">Opção da Pessoa</label>
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
    <h5>Resposta</h5>
    <hr class="dividir" />
    <?php
    	mt_srand();
    	$numComp = mt_rand(INICIAL, MAXIMO);
    	if ($numUsu == $numComp) {
    		$resultado = "Parabéns, você acertou!!!";
    	} elseif ($numUsu > $numComp) {
    		$resultado = "É uma pena, você errou, o número era maior :,(";
    	} elseif ($numUsu < $numComp) {
    		$resultado = "É uma pena, você errou, o número era menor :,(";
    	} else {
    		$resultado = "Algume erro ocorreu no programa";
    	}
    ?>
    <br />
    <h4>
    	<?php echo "Número do Usuário: ".$numUsu."<br />Número do Computador: ".$numComp; ?>
    </h4>
    <h5><?php echo $resultado; ?></h5>
  </form>
</body>

</html>
