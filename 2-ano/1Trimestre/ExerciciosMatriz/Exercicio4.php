<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  $certos = 1;
  for ($i = 0; $i < 4 ; $i++) {
      for ($x = 0; $x < 2 ; $x++) {
          $matriz[$i][$x] = isset($_POST['n'. $i. $x])?$_POST['n'. $i. $x]:' ';
      }
  }
  for ($i=0; $i < 4 ; $i++) {
      if ($matriz[$i][1] != 'input' && $matriz[$i][1] != 'checkbox' && $matriz[$i][1] != 'radio') {
          $certos = 0;
      }
  }
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 4</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exercicio 4</h5>
    <hr class="dividir" />
    <?php 
      for ($i = 0; $i < 4 ; $i++) {
        for ($x = 0; $x < 2 ; $x++) {
            if ($x % 2 == 0) {
              echo '<div class="input">
                      <input type="text" name="n.'. $i. $x. '" value="'. $matriz[$i][$x]. '" />
                      <label>Nome '. $i. '</label>
                    </div>';
            } else {
                '<div class="input">
                  <input type="text" name="n.'. $i. $x. '" value="'. $matriz[$i][$x]. '" />
                  <label>Tipo '. $i. '</label>
                </div>';
            }
        }
      }
    ?>
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
      if (isset($_POST['Enviar Dados']) && $certos == 1) {
          echo "<form>
          <fieldset>";
          for ($i = 0; $i < 4 ; $i++) {
              echo "<input type='". $matriz[$i][1]. "' name='". $matriz[$i][0]. "' value=''><br />";
          }
          echo "</fieldset>
        </form>";
      } elseif (isset($_POST['Enviar Dados'])) {
          echo "Você digitou tipos além de checkbox, radio ou input! Arrume-os e reenvie";
      }
    ?>
    </center></p>
  </form>
</body>

</html>
