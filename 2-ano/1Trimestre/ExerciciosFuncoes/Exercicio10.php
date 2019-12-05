<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  $dados = isset($_POST['d'])?$_POST['d']:"";
  $valorf=isset($_GET['vi'])?$_GET['vi']:0;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 10</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exercício 10</h5>
    <hr class="dividir" />
    <br /><br />
    <button name="d" value="jogar">Jogar Dados</button>
  </form>
  <form>
    <h5>Resultados</h5>
    <hr class="dividir" />
    <h5>
    <?php
      require 'Funcoes.php';
      if ($dados == "jogar" && $valorf == 0) {
          $dadot = funcaoExercicio10A();
          $valorf = funcaoExercicio10B($dadot);
          if (is_numeric($valorf)) {
              echo "Seu ponto é ". $valorf;
              echo "<br /><input type='hidden' name='vi' value='".$valorf."' />";
              echo "</form>";
          } else {
              echo "</form>";
              echo $valorf;
          }
      } elseif ($dados == "jogar" && $valorf > 0) {
          $dadot= funcaoExercicio10A();
          exercicio10B($dadot, $valorf);
          echo "<br /><input type='hidden' name='vi' value='".$valorf."' />";
      }
    ?>
    </h5>
  </form>
</body>

</html>
