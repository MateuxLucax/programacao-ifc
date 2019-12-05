<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $vetorEntradaA = isset($_POST['va'])?$_POST['va']:"13-14-15-16";
  $vetorEntradaB = isset($_POST['vb'])?$_POST['vb']:"1.60-1.70-1.75-1.80";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 15</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Idade e altura de alunos</h5>
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
    <ul>
    <?php
      $idade = explode("-", $vetorEntradaA);
      $altura =  explode("-", $vetorEntradaB);
      $somaAltura = 0;
      for ($i = 0; $i < count($altura); $i++) { 
        $somaAltura += $altura[$i];
      }
      $mediaAltura = $somaAltura / count($altura);
      echo "<h5>Média de altura: ".number_format($mediaAltura,2,",", "."). "<small>m</small></h5>";
      $cont = 1;
      for ($i = 0; $i < count($idade); $i++) { 
        if ($idade[$i] >= 13) {
          if ($altura[$i] < $mediaAltura) {
            echo "<li> Aluno com ". number_format($altura[$i],2,",","."). "m possui uma altura inferior à média de altura</li>";
            $cont++;
          }
        }
      }
    ?>
    </ul>
  </form>
</body>

</html>
