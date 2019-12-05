<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  for ($i = 0; $i < 5; $i++) { 
    $numero[$i] = isset($_POST['n'.$i])?$_POST['n'.$i]:$i;
  }
  $contadorA = 1;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exrcicio 8</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Soma e Multiplicação de Números</h5>
    <hr class="dividir" />
    <?php
      for ($i = 0; $i < 5; $i++) { 
        echo '<div class="input">
                <input type="number" name="n'.$i.'" id="n'.$i.'" value="'.$numero[$i].'" required step="0.01" />
                <label for="n'.$i.'">Número '.$contadorA.'</label>
              </div>';
        $contadorA++;
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
    <h5>Números: </h5>
    <ul>
    <?php
      $soma = 0;
      $multiplicacao = 1;
      for ($i = 0; $i < 5; $i++) { 
        $soma += $numero[$i];
        $multiplicacao = $multiplicacao * $numero[$i];
        echo "<li>".$numero[$i]."</li>";
      }
    ?>
    </ul>
    <h5>Soma: <?php echo $soma; ?></h5>
    <h5>Multiplicação: <?php echo $multiplicacao; ?></h5>
  </form>
</body>

</html>
