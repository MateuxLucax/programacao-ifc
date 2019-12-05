<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  $numeroDeLinhas = isset($_POST['l'])?$_POST['l']:3;
  $numeroDeColunas = isset($_POST['c'])?$_POST['c']:3;
  for ($i = 0; $i < $numeroDeLinhas; $i++) { 
    for ($j = 0; $j < $numeroDeColunas; $j++) { 
      $matriz[$i][$j] = mt_rand();
    }
  }
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exercicio 2</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="l" value="<?php echo $numeroDeLinhas; ?>" />
      <label>Linhas</label>
    </div>
    <div class="input">
      <input type="number" name="c" value="<?php echo $numeroDeColunas; ?>" />
      <label>Colunas</label>
    </div>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
    </form>
    <form>
    <br /><br /><br />
    <h5>Resultados</h5>
    <p><center>
    <?php  
      for ($i = 0; $i < 3; $i++) { 
        for ($j = 0; $j < 3; $j++) { 
          echo " | ". $matriz[$i][$j]. " | ";
        }
        echo "<br />";
      }
    ?>
    </center></p>
  </form>
</body>

</html>
