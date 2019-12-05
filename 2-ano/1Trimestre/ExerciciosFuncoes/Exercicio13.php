<!DOCTYPE html>
<html lang="pt-BR">
<?php 
  $linhas = isset($_POST['l'])?$_POST['l']:3;
  $colunas = isset($_POST['c'])?$_POST['c']:3;
?>
<head>
  <meta charset="UTF-8" />
  <title>Exercício 13</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exercício 13</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="l" value="<?php echo $linhas; ?>" />
      <label>Linhas</label>
    </div>
    <div class="input">
      <input type="number" name="c" value="<?php echo $colunas; ?>" />
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
    <hr class="dividir" />
    <br />
    <center> 
    <?php 
      require 'Funcoes.php';
      $valorComAtraso = funcaoExercicio13($linhas, $colunas);
    ?>
    </center>
  </form>
</body>

</html>
