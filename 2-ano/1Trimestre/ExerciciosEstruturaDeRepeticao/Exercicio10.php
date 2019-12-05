<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
	$base = isset($_POST['b'])?$_POST['b']:2;
  $expoente = isset($_POST['e'])?$_POST['e']:2;
  $potencia = 1;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 10</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form method="post">
    <h5>Potência</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="b" id="b" value="<?php echo $base; ?>" required />
      <label for="b">Base</label>
    </div>
    <div class="input">
      <input type="number" name="e" id="e" value="<?php echo $expoente; ?>" required />
      <label for="e">Expoente</label>
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
    <ul>
    <?php
      for ($i = 1; $i <= $expoente; $i++) { 
        $potencia = $potencia * $base;
      }
    ?>
    <h5><?php echo $potencia; ?></h5>
  </form>
</body>

</html>
