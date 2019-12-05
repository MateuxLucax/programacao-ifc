<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
	$numIni = 1;
  $numFi = isset($_POST['nf'])?$_POST['nf']:7;
  $divisores = 0;
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
        <input type="number" name="nf" id="nf" required value="<?php echo $numFi;?>"/>
         <label for="nf">Número Final</label>
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
      $i = $numIni;
      while ($i <= $numFi) {
        if ($i % $i == 0) {
          $divisores = $divisores + 1;
          echo "<li>Ele é divisivel por: ". $i. "</li>";
          if ($divisores == 2) {
            echo "<h5>É primo</h5>";
          } else {
            echo "<h5>Não é primo</h5>";
          }
        }
        $i = $i + 1;
      }
      echo "</ul>";
    ?>
  </form>
</body>

</html>
