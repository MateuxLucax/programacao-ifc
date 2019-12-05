<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  $matriz = array(array(mt_rand(0, 20), mt_rand(0, 20), mt_rand(0, 20)),
                  array(mt_rand(0, 20), mt_rand(0, 20), mt_rand(0, 20)),
                  array(mt_rand(0, 20), mt_rand(0, 20), mt_rand(0, 20)));
?>

<head>
  <meta charset="UTF-8" />
  <title>Exemplo 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Matriz</h5>
    <hr class="dividir" />
    <p>
    <center>
    <?php
      $soma = 0;
      $menor = 21;
      $maior = -1;
      foreach ($matriz as $linha) {
        echo "<br />";
        foreach ($linha as $item) {
          echo $item. "\n";
          $soma += $item;
          if ($item > $maior) {
            $maior = $item;
          }
          if ($item < $menor) {
            $menor = $item;
          }
        }
      }
      $somaDiagonalPrincipal = 0;
      $somaDiagonalSecundaria = 0;
      for ($i = 0; $i < 3; $i++) { 
        $somaDiagonalPrincipal += $matriz[$i][$i];
      }
      for ($i = 0 ; $i < 3 ; $i ++ ){
        for($j = 0; $j < 3 ; $j++){
          if($j == (2 - $i)){
            $somaDiagonalSecundaria += $matriz[$i][$j];
          }
        }
     }
      $somaDiagonal = $somaDiagonalPrincipal - $somaDiagonalSecundaria;
      $media = $soma / 9;
      echo "<br /><br />";
      echo "A soma dos itens é: ". $soma;
      echo "<br /><br />";
      echo "A média dos itens é: ". number_format($media, 2, ",", ".");
      echo "<br /><br />";
      echo "Diagonal: ". $somaDiagonal;
      echo "<br /><br />";
      echo "Pares e Ímpares:";
      foreach ($matriz as $linha) {
        echo "<br />";
        foreach ($linha as $item) {
          $soma += $item;
          if ($item % 2 == 0) {
            echo " | *". $item. " | ";
          } else {
            echo " | #". $item. " | ";
          }
        }
      }
      echo "<br /><br />";
      echo "Maior número: ".$maior;
      echo "<br /><br />";
      echo "Menor número: ".$menor;
      echo "<br /><br />";
      $somaLinha = array(0, 0, 0);
      $somaColuna = array(0, 0, 0);
      for ($i = 0; $i < 3; $i++) { 
        $somaA = 0;
        for ($j = 0; $j < 3; $j++) { 
          echo $matriz[$i][$j]. " : ";
          $somaLinha[$i] += $matriz[$i][$j];
          $somaA += $matriz[$i][$j];
          for ($y = 0; $y < $matriz[$i][$j]; $y++) { 
            echo "#";
          }
          $somaColuna[$i] = $somaA; 
          echo "<br />";
        }
      }
      echo "<br /><br />";
      $cont = 1;
      for ($i = 0; $i < 3; $i++) { 
        echo "Soma Linha ".$cont." : ".$somaLinha[$i]. "<br />";
        $cont++;
      }
      $cont = 1;
      echo "<br /><br />";
      for ($i = 0; $i < 3; $i++) { 
        echo "Soma Coluna ".$cont." : ".$somaColuna[$i]. "<br />";
        $cont++;
      }
    ?>
    </center>
    </p>
  </form>
</body>

</html>
