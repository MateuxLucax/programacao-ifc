<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
	$a = isset($_POST['a'])?$_POST['a']:1;
	$b = isset($_POST['b'])?$_POST['b']:10;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 8</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form method="post">
    <h5>Intervalo entre números</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="a" id="a" value="<?php echo $a; ?>" required />
      <label for="a">Valor 1</label>
    </div>
    <div class="input">
      <input type="number" name="b" id="b" value="<?php echo $b; ?>" required />
      <label for="b">Valor 2</label>
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
    <?php
      echo "<ul>";
      if ($a < $b) {
      	for ($i = $a; $i <= $b ; $i++) { 
          echo "<li>$i</li>";
          $som = $i + $i;
        }
      } else {
        for ($i = $b; $i <= $a ; $i++) { 
          echo "<li>$i</li>";
          $som = $i + $i;
        }
      }
      echo "</ul>";
    ?>
    <h5>A soma dos números é: <?php echo $som; ?></h5>
  </form>
</body>

</html>
