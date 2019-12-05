<!DOCTYPE html>
<html lang="pt-BR">
<?php 
  $hora = isset($_POST['h'])?$_POST['h']:13;
?>
<head>
  <meta charset="UTF-8" />
  <title>Exercício 6</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exercício 6</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="h" value="<?php echo $hora; ?>" step="0.01" />
      <label>Hora</label>
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
      $tempo = funcaoExercicio6A($hora);
      funcaoExercicio6B($tempo, $hora);
    ?>
  </form>
</body>

</html>
