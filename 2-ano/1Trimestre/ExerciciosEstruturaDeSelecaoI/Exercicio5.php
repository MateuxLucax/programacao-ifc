<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $letra = isset($_POST['a'])?$_POST['a']:"A";
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
    <h5>Descubra se a letra é vogal</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="a" id="a"/>
      <label for="a">Digite a letra</label>
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
    	$letra = strtoupper($letra);
    	if ($letra == "A" or $letra == "E" or $letra == "I" or $letra == "U" or $letra == "O") {
    		$resposta = "$letra é vogal";
    	} else {
    		$resposta = "$letra não é vogal";
    	}
    ?>
    <h1><?php echo $resposta; ?></h1>
  </form>
</body>

</html>
