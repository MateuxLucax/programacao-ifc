<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  for ($i = 0; $i < 4; $i++) { 
    $nota[$i] = isset($_POST['n'.$i])?$_POST['n'.$i]:7;
  }
  $contador = 1;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exrcicio 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Calcular Média</h5>
    <hr class="dividir" />
    <?php 
      for ($i = 0; $i < 4; $i++) { 
        echo '<div class="input">
                <input type="number" name="n'.$i.'" id="n'.$i.'" value="'.$nota[$i].'" required step="0.01" />
                <label for="n'.$i.'">Nota '.$contador.'</label>
              </div>';
        $contador++;
      }
    ?>
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
    <?php
      $soma = 0;
      for ($i = 0; $i <  4; $i++) {
        $soma += $nota[$i];
      }
      $media = $soma / 4;
    ?>
    <h5>Média : <?php echo $media; ?></h5>
  </form>
</body>

</html>
