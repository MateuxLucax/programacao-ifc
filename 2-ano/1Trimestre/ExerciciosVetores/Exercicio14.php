<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $vetorEntradaA = isset($_POST['va'])?$_POST['va']:"1-3-5-7";
  $vetorEntradaB = isset($_POST['vb'])?$_POST['vb']:"2-4-6-8";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 14</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Vetor 1 + Vetor 2 = Vetor 3</h5>
    <hr class="dividir" />
    <div class="input">
      <textarea type="textarea" rows="5" name="va" required><?php echo $vetorEntradaA; ?></textarea>
      <label>Vetor 1 (Separe com "-")</label>
    </div>
    <div class="input">
      <textarea type="textarea" rows="5" name="vb" required><?php echo $vetorEntradaB; ?></textarea>
      <label>Vetor 2 (Separe com "-")</label>
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
    <ul>
    <?php
      $vetor1 = explode("-", $vetorEntradaA);
      $vetor2 =  explode("-", $vetorEntradaB);
      if (count($vetor1) > count($vetor2)) {
        $vetorMaior = count($vetor1);
      } else {
        $vetorMaior = count($vetor2);
      }
      $cont = 0;
      $contB = 1;
      for ($i = 0; $i < $vetorMaior; $i++) { 
        if (isset($vetor1[$i])) {
          $vetor3[] = $vetor1[$i];
          echo "<li>".$contB . "° Posição: ". $vetor3[$cont]. "</li>";
          $cont++;
          $contB++;
        }
        if (isset($vetor2[$i])) {
          $vetor3[] = $vetor2[$i];
          echo "<li>".$contB . "° Posição: ". $vetor3[$cont]. "</li>";
          $cont++;
          $contB++;
        }
      }
    ?>
    </ul>
  </form>
</body>

</html>
