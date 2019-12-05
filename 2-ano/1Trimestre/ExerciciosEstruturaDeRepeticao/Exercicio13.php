<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
	$fatorial = isset($_POST['f'])?$_POST['f']:5;
  $resultado = 1;
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
    <h5>Potência</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="f" id="f" value="<?php echo $fatorial; ?>" required />
      <label for="f">Fatorial</label>
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
    <h5>
    <?php
      $resultado = 1;
      echo $fatorial. " != ";
      for($i = $fatorial; $i > 1; $i--){
        echo $i. " <small>x</small> ";
        $resultado *= $fatorial; 
        $fatorial--;
      }
    ?>
    <?php echo "1 = ". $resultado; ?></h5>
  </form>
</body>

</html>
