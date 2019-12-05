<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  $n1 = isset($_POST['l'])?$_POST['l']:3;
  $n2 = isset($_POST['c'])?$_POST['c']:3;
  $matriz = array();
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exercicio 3</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="l" value="<?php echo $n1; ?>" />
      <label>Linhas</label>
    </div>
    <div class="input">
      <input type="number" name="c" value="<?php echo $n2; ?>" />
      <label>Colunas</label>
    </div>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
    </form>
    <form>
    <br /><br /><br />
    <h5>Resultados</h5>
    <p><center>
    <?php  
      $alei = 0;
      $tem = true;
      for ($i = 0; $i < $n1 ; $i++) {
          echo "<br />";
          for ($x = 0; $x < $n2 ; $x++) {
              $alei = aleatorio($n1, $n2);
              $tem = escolha($matriz, $alei);
              if ($tem == false) {
                  $matriz[$i][$x] = $alei;
                  echo " ". $matriz[$i][$x];
              } else {
                  $x--;
              }
          }
      }
      function aleatorio($n1, $n2) {
          $mul = $n1 * $n2;
          $alei = rand(0, $mul);
          return $alei;
      }
      function escolha($matriz, $alei) {
          $foi = false;
          foreach ($matriz as $linhas) {
              foreach ($linhas as $value) {
                  if ($alei == $value) {
                      $foi = true;
                      return true;
                      break;
                  }
              }
          }
          if ($foi == false) {
              return false;
          }
      }
    ?>
    </center></p>
  </form>
</body>

</html>
