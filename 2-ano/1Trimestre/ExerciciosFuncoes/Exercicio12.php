<!DOCTYPE html>
<html lang="pt-BR">
<?php 
  $palavra = isset($_POST['p'])?$_POST['p']:"python";
?>
<head>
  <meta charset="UTF-8" />
  <title>Exercício 12</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exercício 12</h5>
    <hr class="dividir" />
    <div class="input">
      <textarea type="textarea" name="p" rows="5"><?php echo $palavra; ?></textarea>
      <label>Palavra</label>
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
    <h5>
    <?php 
      require 'Funcoes.php';
      echo funcaoExercicio12($palavra);
    ?>
    </h5>
  </form>
</body>

</html>
