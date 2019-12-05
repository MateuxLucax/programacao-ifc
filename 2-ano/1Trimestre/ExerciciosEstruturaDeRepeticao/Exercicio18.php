<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
	$num = isset($_POST['n'])?$_POST['n']:3;
  $divisores = 0;
  $i = 1;
?>


<head>
  <meta charset="UTF-8" />
  <title>Exercício 19</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form method="post">
    <h5>Saber se é primo</h5>
    <hr class="dividir" />
    <div class="input">
        <input type="number" name="n" id="n" required />
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
    <?php 
      echo "<ul>";
      while ($i <= $num) {
        if ($num % $i == 0) {
          $divisores = $divisores + 1;
          echo "<li>Ele é divisivel por: ". $i. "</li>";
        }
        $i = $i + 1;
      }
      echo "</ul>";
      if ($divisores == 2) {
        echo "<h5>É primo</h5>";
      } else {
        echo "<h5>Não é primo</h5>";
      }
    ?>
  </form>
</body>

</html>
