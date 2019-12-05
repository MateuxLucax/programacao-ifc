<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $x = isset($_POST['x'])?$_POST['x']:1;
  $y = isset($_POST['y'])?$_POST['y']:10;
  $z = isset($_POST['z'])?$_POST['z']:1;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 38</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Série X,Y E Z</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="x" id="x" value="<?php echo $x; ?>" required />
      <label for="x">Número inicial:</label>
    </div>
    <div class="input">
      <input type="number" name="y" id="y" value="<?php echo $y; ?>" required />
      <label for="y">Número final:</label>
    </div>
    <div class="input">
      <input type="number" name="z" id="z" value="<?php echo $z; ?>" required />
      <label for="z">Intervalo</label>
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
      $soma = 0;
          $cont = 0;
          echo "Números da série: ";
          if($x < $y){
            for ($i = $x; $i <= $y ; $i = $i + $z) { 
              if($i == $y){
                echo $i;
              }
              else{
                echo $i.", ";
              }
              $cont++;
              $soma = $soma + $i;
            }
            $media = $soma/$cont;
            echo "<br />Quantidade de números da série = ".$cont;
            echo "<br />Soma = ".$soma;
            echo "<br />Média = ".$media;
          }
          elseif($x > $y){
            for ($i = $x; $i >= $y; $i = $i - $z) { 
              if($i == $y){
                echo $i;
              }
              else{
                echo $i.", ";
              }
              $cont++;
              $soma = $soma + $i;
            }
            $media = $soma/$cont;
            echo "<br />Quantidade de números da série = ".$cont;
            echo  "<br />Soma = ".$soma;
            echo "<br />Média = ".$media;
          }
    ?>
    </h5>
  </form>
</body>

</html>
