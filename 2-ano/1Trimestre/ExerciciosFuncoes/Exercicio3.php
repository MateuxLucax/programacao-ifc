<!DOCTYPE html>
<html lang="pt-BR">
<?php 
  $n1 = isset($_POST['n1'])?$_POST['n1']:10;
  $n2 = isset($_POST['n2'])?$_POST['n2']:40;
  $n3 = isset($_POST['n3'])?$_POST['n3']:30;
?>
<head>
  <meta charset="UTF-8" />
  <title>Exercício 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exercício 3</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n1" value="<?php echo $n1; ?>" />
      <label>Número A</label>
    </div>
    <div class="input">
      <input type="number" name="n2" value="<?php echo $n2; ?>" />
      <label>Número B</label>
    </div>
    <div class="input">
      <input type="number" name="n3" value="<?php echo $n3; ?>" />
      <label>Número C</label>
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
      $resultado = funcaoExercicio3($n1, $n2, $n3);
      echo $n1." + ".$n2." + ".$n3." = ".$resultado;
    ?>
  </form>
</body>

</html>
