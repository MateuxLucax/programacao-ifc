<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $padrao = 10;
  $contadorB = 1;
  for ($j = 0; $j < 10; $j++) {
    $valorUnitario[$j] = isset($_POST['q'.$j])?$_POST['v'.$j]:$padrao;
    $quantidadeVendida[$j] = isset($_POST['q'.$j])?$_POST['q'.$j]:$contadorB;
    $padrao *= 2;
    $contadorB++;
  }
  $contadorA = 1;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 17</title>
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
        echo '<div class="input">
                <input type="number" name="n'. $j. '" id="n'. $j. '" value="'. $valorUnitario[$j].'" required step="0.01" />
                <label for="n'. $j. '">Valor Unitario do Produto '.$contadorA.'</label>
              </div>';
        echo '<div class="input">
                <input type="number" name="n'. $j. '" id="n'. $j. '" value="'. $quantidadeVendida[$j].'" required />
                <label for="n'. $j. '">Quantidade Vendida do Produto '.$contadorA.'</label>
              </div>';
        echo "<hr class='dividir' /><br />";
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
    <?php
      $valorGeral = 0;
      for ($i = 0; $i < 10; $i++){
        $valorTotal[] = $valorUnitario[$i] * $quantidadeVendida[$i];
      }
      for ($i = 0; $i < 10; $i++){
        $valorGeral += $valorTotal[$i];
      }
      $acrescimo = $valorGeral * 0.05;
      $maisVendido = 0;
      for ($i = 0; $i < 10; $i++){
        if($quantidadeVendida[$i] > $maisVendido){
          $maisVendido = $quantidadeVendida[$i];
        }
      }
      $x = 1;
      for ($i = 0; $i < 10; $i++){
        echo "<h4>Produto ".$x."</h4>";
        echo "<ul>";
        echo "<li>Quantidade vendida: ".$quantidadeVendida[$i]."</li>";
        echo "<li>Valor unitário: R$ ".number_format($valorUnitario[$i],2,",",".")."</li>";
        echo "<li>Valor Total: R$ ".number_format($valorTotal[$i],2,",",".")."</li>";
        echo "</ul>";
        $x++;
      }
      echo "<h4>Valor Geral das vendas: R$ ".number_format($valorGeral,2,",",".")."</h4>";
      echo "<h4>Comissão paga ao vendedor: R$ ".number_format($acrescimo,2,",",".")."</h4>";
      $y = 1;
      for ($i = 0; $i < 10; $i++){
        if($quantidadeVendida[$i] == $maisVendido){
          echo "<h4>Produto ".$y." é o mais vendido, tem valor de R$ ".number_format($valorUnitario[$i],2,",",".")." e está na ".$i." posição no vetor<h4>";
        }
        $y++;
      }
      echo "</b>";
    ?>
  </form>
</body>

</html>
