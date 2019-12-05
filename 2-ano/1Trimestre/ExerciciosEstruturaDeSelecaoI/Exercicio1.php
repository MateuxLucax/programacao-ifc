<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $n1 = isset($_POST['n1'])?$_POST['n1']:"5";
  $n2 = isset($_POST['n2'])?$_POST['n2']:"10";
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
    <h5>Descubra qual número é maior</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n1" id="n1"/>
      <label for="n1">Número 1</label>
    </div>
    <div class="input">
      <input type="number" name="n2" id="n2"/>
      <label for="n2">Número 2</label>
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
    	if ($n1 > $n2) {
    		$resposta = "O número $n1 é maior que $n2";
    	} else {
    		$resposta = "O número $n2 é maior que $n1";
    	}
    ?>
    <h1><?php echo $resposta; ?></h1>
  </form>
</body>

</html>
