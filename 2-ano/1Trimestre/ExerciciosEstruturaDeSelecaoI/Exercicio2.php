<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $n = isset($_POST['n'])?$_POST['n']:"5";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Descubra se o número é positivo, negativo ou zero</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n" id="n"/>
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
    <?php
    	if ($n > 0) {
    		$resposta = "O número $n é positivo";
    	} elseif ($n == 0) {
    		$resposta = "O número $n é zero";
    	} else {
    		$resposta = "O número $n é negativo";
    	}
    ?>
    <h1><?php echo $resposta; ?></h1>
  </form>
</body>

</html>
