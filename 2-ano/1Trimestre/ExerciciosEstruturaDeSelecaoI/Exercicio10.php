<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $n1 = isset($_POST['n1'])?$_POST['n1']:"1";
  $n2 = isset($_POST['n2'])?$_POST['n2']:"2";
  $n3 = isset($_POST['n3'])?$_POST['n3']:"3";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 10</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Colocando números em ordem</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n1" id="n1"/>
      <label for="n1">Número 1</label>
    </div>
    <div class="input">
      <input type="number" name="n2" id="n2"/>
      <label for="n2">Número 2</label>
    </div>
    <div class="input">
      <input type="number" name="n3" id="n3"/>
      <label for="n3">Número 3</label>
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
    <h5>Resultados</h5>
    <hr class="dividir" />
    <?php
    $maior = 0;
    $menor = 0;
  
    if($n1 >= $n2 && $n1 >= $n3) {
      $maior = $n1;
      if($n2 <= $n3) {
        $menor = $n2;
      } 
      else {
        $menor = $n3;
      }
    }
     
    if($n2 >= $n1 && $n2 >= $n3) {
      $maior = $n2;
      if($n1 <= $n3) {
        $menor = $n1;
      } else {
        $menor = $n3;
      }
    }
     
    if($n3 >= $n1 && $n3 >= $n2) {
      $maior = $n3;
      if($n2 <= $n1) {
        $menor = $n2;
      } else {
        $menor = $n1;
      }
    }

    ?>
    <h1><?php echo "Maior:".$maior."<br />Menor: ".$menor; ?></h1>
  </form>
</body>

</html>
