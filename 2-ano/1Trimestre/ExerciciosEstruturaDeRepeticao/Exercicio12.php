<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $num = isset($_POST['n'])?$_POST['n']:10;
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
    <h5>Potência</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n" id="n" value="<?php echo $num; ?>" required />
      <label for="n">Número</label>
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
      for ($i = 0; $i <= $num; $i++) { 
        $c1 = pow(1.618034, $i);
        $c2 = pow((1 - 1.618034), $i);
        $c3 = sqrt(5);
        $fib = ($c1 - $c2) / $c3;
        if($i == $num){
          echo round($fib);
        }
        else{
          echo round($fib).", ";
        }
      }
    ?>
    </h5>
  </form>
</body>

</html>
