<!DOCTYPE html>
<html lang="pt-BR">
<?php 
  $data = isset($_POST['d'])?$_POST['d']:'02/08/2001';
?>
<head>
  <meta charset="UTF-8" />
  <title>Exercício 11</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exercício 11</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="d" value="<?php echo $data; ?>" />
      <label>Data</label>
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
    <h5>
    <?php 
      require 'Funcoes.php';
      $dataNova = funcaoExercicio11($data);
      echo $dataNova;
    ?>
    </h5>
  </form>
</body>

</html>
