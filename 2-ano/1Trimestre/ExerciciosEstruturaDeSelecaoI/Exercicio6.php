<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $n = isset($_POST['n'])?$_POST['n']:"2";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 6</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Transformar Ímpar em Par ou Par em Ímpar</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n" id="n"/>
      <label for="n">Digite a letra</label>
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
    	if ($n % 2 == 0) {
    		$resposta = "$n é par, então agora será: ".++$n;
    	} else {
        $resposta = "$n é ímpar, então agora será: ".++$n;
    	}
    ?>
    <h1><?php echo $resposta; ?></h1>
  </form>
</body>

</html>
