<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $vetorEntrada = isset($_POST['v'])?$_POST['v']:"1,2,3,4,5,6,7,8,9,10";
  $vetorGrafico = array("#", "##", "###", "####", "#####", "######", "#######", "########", "#########", "##########", "###########", "############", "#############", "##############", "###############", "################", "#################", "##################", "###################", "####################",)
?>

<head>
  <meta charset="UTF-8" />
  <title>Exrcicio 19</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Gráfico</h5>
    <hr class="dividir" />
    <div class="input">
      <textarea type="textarea" rows="5" name="v" required><?php echo $vetorEntrada; ?></textarea>
      <label>Números entre 0 de a 20 (Separe eles por ",")</label>
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
      $numeros = explode(",", $vetorEntrada);
      for ($i = 0; $i < count($numeros); $i++) { 
        if ($numeros[$i] < 0 || $numeros[$i] > 20 ) {
          echo "<h5>Digite novamente os números devem ser de 0 a 20</h5>";
          $numerosCorretos = false;
          break;
        } else {
          $numerosCorretos = true;
        }
      }
      if ($numerosCorretos == true) {
        echo "<ul>";
        for ($i = 0; $i < count($numeros); $i++) { 
          echo "<li>".$numeros[$i].": ".$vetorGrafico[$i]."</li>";
        }
        echo "</ul>";
      }
    ?>
  </form>
</body>

</html>
