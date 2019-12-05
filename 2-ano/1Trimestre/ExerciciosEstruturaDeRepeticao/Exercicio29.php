<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $num = isset($_POST['n'])?$_POST['n']:1;
  $numIni = isset($_POST['ni'])?$_POST['ni']:1;
  $numFin = isset($_POST['nf'])?$_POST['nf']:10;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 29</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Gerador de Tabuada</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n" id="n" value="<?php echo $num; ?>" required />
      <label for="n">Número da Tabuada</label>
    </div>
    <div class="input">
      <input type="number" name="ni" id="ni" value="<?php echo $numIni; ?>" required />
      <label for="ni">Número Inicial</label>
    </div>
    <div class="input">
      <input type="number" name="nf" id="nf" value="<?php echo $numFin; ?>" required />
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
    <ul>
    <?php
      if ($numIni > $numFin) {
        echo "<h5>Número Inicial maior que o final</h5>";
      } else {
        for ($i = $numIni; $i <= $numFin; $i++) { 
          echo "<li>". $i. " x ". $num. " = ". ($num * $i). "</li>";
        }
      }
    ?>
    </ul>
  </form>
</body>

</html>
