<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $sexo = isset($_POST['s'])?$_POST['s']:"M";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Descubra seu sexo</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="s" id="s"/>
      <label for="s">Sexo</label>
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
    	if ($sexo == "M") {
    		$resposta = "Seu sexo é masculino";
    	} elseif ($sexo == "F") {
    		$resposta = "Seu sexo é feminino";
    	} else {
    		$resposta = "Sexo diferenciado";
    	}
    ?>
    <h1><?php echo $resposta; ?></h1>
  </form>
</body>

</html>
