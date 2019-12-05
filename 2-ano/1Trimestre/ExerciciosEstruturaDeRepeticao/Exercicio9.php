<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
	$num = isset($_POST['n'])?$_POST['n']:1;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 9</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form method="post">
    <h5>Gerador de Tabuada</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n" id="n" value="<?php echo $num; ?>" required min="0" max="10" />
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
    <h5>Resultado</h5>
    <hr class="dividir" />
    <ul>
    <?php
      for ($i = 0; $i < 11; $i++) { 
        echo "<li>". $i. " x ". $num. " = ". ($num * $i). "</li>";
      }
    ?>
    </ul>
  </form>
</body>

</html>
