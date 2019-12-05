<!DOCTYPE html>
<html lang="pt-BR" />

<head>
  <meta charset="UTF-8" />
  <title>Exercício 15</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form>
    <h5>Série S</h5>
    <hr class="dividir" />
    <p>
    <?php
      echo "S = ";
          $contA = 37;
          $contB = 38;
          $soma = 0;
          for ($i = 1; $i <= 37 ; $i++) { 
            if($i != 37){
              echo "(".$contA."*".$contB.")/".$i." + ";
              $soma = (($contA*$contB)/$i) + $soma;
              $contA--;
              $contB--; 
            }
            else{
              echo "(".$contA."*".$contB.")/".$i;
              $soma = (($contA*$contB)/$i) + $soma;
              $contA--;
              $contB--;
            }
          }
          echo "<br /><b>SOMA = ".$soma."</b>";
    ?>
    </p>
  </form>
</body>

</html>
