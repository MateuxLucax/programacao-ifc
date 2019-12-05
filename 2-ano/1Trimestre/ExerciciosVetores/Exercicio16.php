<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $vetorEntradaA = isset($_POST['va'])?$_POST['va']:"Fusca-Gol-Ka";
  $vetorEntradaB = isset($_POST['vb'])?$_POST['vb']:"15-12-14";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exrcicio 16</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Consumo de Combustível</h5>
    <hr class="dividir" />
    <div class="input">
      <textarea type="textarea" rows="5" name="va" required><?php echo $vetorEntradaA; ?></textarea>
      <label>Modelo do Veículo (Separe com "-")</label>
    </div>
    <div class="input">
      <textarea type="textarea" rows="5" name="vb" required><?php echo $vetorEntradaB; ?></textarea>
      <label>Consumo do Veículo (Separe com "-")</label>
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
      $modelo = explode("-", $vetorEntradaA);
      $consumo =  explode("-", $vetorEntradaB);
      if (count($modelo) == count($consumo)) {
          $menor = $consumo[1];
          for ($i = 0; $i < count($modelo) ; $i++) {
              if ($menor < $consumo[$i]) {
                  $menorConsumo = $consumo[$i];
                  $menorModelo = $modelo[$i];
              }
          }
          echo "<h5>O carro mais econômico é o ". $menorModelo. ", pois consome ". $menorConsumo. "<small>L</small> por Km</h5>";
          echo "<h4>Lista dos modelos com seus respectivos consumos de combustível por 1000K<small>m</small> rodados:<br /><br />";
          echo " <ul>";
          for ($contador = 0; $contador < count($modelo) ; $contador++) {
              echo "<li>O ".$modelo[$contador] ." consome ". number_format(1000 / $consumo[$contador], 2, ",", "."). "L à cada 1000K<small>m</small> rodados </li>";
          }
          echo " </ul>";
      } else {
          echo "Os vetores não tem o mesmo tamanho";
      }
    ?>
    </ul>
  </form>
</body>

</html>
