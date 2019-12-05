<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  for ($j = 0; $j < 10; $j++) {
    for ($i = 0; $i < 4; $i++) { 
      $nota[$j][$i] = isset($_POST['n'.$j.$i])?$_POST['n'.$j.$i]:7;
    }
  }
  $contadorB = 1;
  $contadorAlunosAcimaMedia = 0;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exrcicio 7</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Calcular Média</h5>
    <hr class="dividir" />
    <?php 
      for ($j = 0; $j < 10; $j++) {
        $contadorA = 1;
        echo "<h4>Aluno ".$contadorB.":";
        for ($i = 0; $i < 4; $i++) { 
          echo '<div class="input">
                  <input type="number" name="n'.$j.$i.'" id="n'.$j.$i.'" value="'.$nota[$j][$i].'" required step="0.01" />
                  <label for="n'.$j.$i.'">Nota '.$contadorA.'</label>
                </div>';
          $contadorA++;
        }
        $contadorB++;
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
      for ($j = 0; $j < 10; $j++) {
        $soma[] = 0;
        $media[] = 0;
        for ($i = 0; $i < 4; $i++) { 
          $soma[$j] += $nota[$j][$i];
        }
        $media[$j] = $soma[$j] / 4;
        if ($media[$j] >= 7) {
          $contadorAlunosAcimaMedia++;
        }
      }
    ?>
    <h5>Número de Alunos acima da média: <?php echo $contadorAlunosAcimaMedia; ?></h5>
  </form>
</body>

</html>
