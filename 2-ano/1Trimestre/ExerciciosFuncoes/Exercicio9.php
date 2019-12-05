<!DOCTYPE html>
<html lang="pt-BR">
<?php 
  $numero = isset($_POST['n'])?$_POST['n']:100;
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
    <h5>Exercício 8</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n" value="<?php echo $numero; ?>" />
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
      funcaoExercicio9($numero);
    ?>
  </form>
</body>

</html>
