<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  for ($i = 0; $i < 30; $i++) { 
    $temperatura[$i] = isset($_POST['t'.$i])?$_POST['t'.$i]:$i;
  }
  $contador = 1;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exrcicio 19</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Média de Temperatura</h5>
    <hr class="dividir" />
    <?php 
      for ($i = 0; $i < 30; $i++) { 
        echo '<div class="input">
                <input type="number" name="temp'.$i.'" id="temp'.$i.'" value="'.$temperatura[$i].'" required />
                <label for="temp'.$i.'">Dia '.$contador.'</label>
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
      $acimaMedia = 0;
      for ($i = 0; $i < 30; $i++) { 
        $soma += $temperatura[$i];
      }
      $media = $soma / 30;
      for ($i = 0; $i < 30; $i++) { 
        if ($temperatura[$i] > $media) {
          $acimaMedia++;
        }
      }
    ?>
    <h5>Temperatura Média: <?php echo $media; ?></h5>
    <h5>Quantidade de dias com temperatura acima da média <?php echo $acimaMedia; ?></h5>
  </form>
</body>

</html>
