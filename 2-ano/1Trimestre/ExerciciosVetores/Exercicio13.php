<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $vetorEntradaA = isset($_POST['va'])?$_POST['va']:"1.89-1.78-1.90";
  $vetorEntradaB = isset($_POST['vb'])?$_POST['vb']:"32-49-25";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exrcicio 13</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Altura e Idade</h5>
    <hr class="dividir" />
    <div class="input">
      <textarea type="textarea" rows="5" name="va" required><?php echo $vetorEntradaA; ?></textarea>
      <label>Altura (Separe com "-")</label>
    </div>
    <div class="input">
      <textarea type="textarea" rows="5" name="vb" required><?php echo $vetorEntradaB; ?></textarea>
      <label>Idade (Separe com "-")</label>
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
    <?php
      $altura = explode("-", $vetorEntradaA);
      $idade = explode("-", $vetorEntradaB);
      echo "<h4>Altura:</h4>";
      echo "<ul>";
      for ($i = (count($altura) - 1); $i >= 0 ; $i--) { 
        echo "<li>".($i + 1)." ª Posição: ". number_format($altura[$i], 2, ",", "."). "</li>";
      }
      echo "</ul>";
      echo "<h4>Idade:</h4>";
      echo "<ul>";
      for ($i = (count($idade) - 1); $i >= 0 ; $i--) { 
        echo "<li>".($i + 1)." ª Posição: ". $idade[$i]."</li>";
      }
      $maisAlto = 0;
      $maisBaixo = 0;
      $maisVelho = 0;
      $maisNovo = 0;
      $chaveA = 0;
      $maisAlto = max($altura);
      $chaveA = array_search($maisAlto, $altura);
      echo "<h4>Mais Alto: ". $maisAlto. " cm, com ". $idade[$chaveA]. " anos</h4>";
      $maisBaixo = min($altura);
      $chaveA = array_search($maisBaixo, $altura);
      echo "<h4>Mais Baixo: ". $maisBaixo. " cm, com ". $idade[$chaveA]. " anos</h4>";
      $maisVelho = max($idade);
      $chaveA = array_search($maisVelho, $idade);
      echo "<h4>Mais Velho: ". $maisVelho. " anos, com ". $altura[$chaveA]. " cm</h4>";
      $maisNovo = min($idade);
      $chaveA = array_search($maisNovo, $idade);
      echo "<h4>Mais Novo: ". $maisNovo. " anos, com ". $altura[$chaveA]. " cm</h4>";
      $mediaAltura = 0;
      $somaA = 0;
      $totalA = count($altura);
      foreach ($altura as $h) {
        $somaA += $h;
      }
      $mediaAltura = ( $somaA / $totalA);
      echo "<h4>Média altura: ". number_format($mediaAltura, 2, ",", "."). " cm</h4>";
      $mediaIdade = 0;
      $somaB = 0;
      foreach ($idade as $i) {
        $somaB += $i;
      }
      $mediaIdade = floor(( $somaB / count($idade)));
      echo "<h4>Média idade: ". $mediaIdade. " anos</h4>";
      echo "<h4>Estão acima da média de idade: </h4>";
      echo "<ul>";
      for ($i = 0; $i <= (count($idade) - 1) ; $i++) { 
        if ($idade[$i] > $mediaIdade){
          echo "<li>". $idade[$i]. " anos com ". $altura[$i]. " cm de Altura</li>";
        }
      }
      echo "</ul>";
      echo "<h4>Estão acima da média de altura:</h4>";
      echo "<ul>";
      for ($i=0; $i <= (count($altura) - 1) ; $i++) { 
        if ($altura[$i] > $mediaAltura){
          echo "<li>". $idade[$i]. " anos com ". $altura[$i]. " cm de Altura</li>";
        }
      }
      echo "</ul>";
      echo "<h4>Estão abaixo da média de idade:</h4>";
      echo "<ul>";
      for ($i = 0; $i <= (count($idade) - 1) ; $i++) { 
        if ($idade[$i] < $mediaIdade){
          echo "<li>". $idade[$i]. " anos com ". $altura[$i]. " cm de Altura</li>";
        }
      }
      echo "</ul>";
      echo "<h4>Estão abaixo da média de altura:</h4>";
      echo "<ul>";
      for ($i=0; $i <= (count($altura) - 1) ; $i++) { 
        if ($altura[$i] < $mediaAltura){
          echo "<li>". $idade[$i]. " anos com ". $altura[$i]. " cm de Altura </li>";
        }
      }
      echo "</ul>";
    ?>
  </form>
</body>

</html>
