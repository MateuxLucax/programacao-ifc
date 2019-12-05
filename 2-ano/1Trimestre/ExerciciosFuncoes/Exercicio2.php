<!DOCTYPE html>
<html lang="pt-BR">
<?php 
  $quantidadeDeNumeros = isset($_POST['n'])?$_POST['n']:5;
?>
<head>
  <meta charset="UTF-8" />
  <title>Exercício 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exercício 2</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n" value="<?php echo $quantidadeDeNumeros; ?>" />
      <label>Número</label>
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
    <?php 
      require 'Funcoes.php';
      funcaoExercicio2($quantidadeDeNumeros);
    ?>
  </form>
</body>

</html>
