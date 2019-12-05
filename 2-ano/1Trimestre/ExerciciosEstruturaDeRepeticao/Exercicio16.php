<!DOCTYPE html>
<html lang="pt-BR" />

<?php
  $numGerados = isset($_POST['n'])?$_POST['n']:2;
  $soma = 0;
  $maior = 0;
  $menor = 0;
 ?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 16</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form method="post">
    <h5>Gerar entradas</h5>
    <hr class="dividir" />
    <div class="input">
        <input type="number" name="n" id="n" required />
         <label for="n">Número de entradas</label>
    </div>
    <div class="input">
      <input type="submit" name="gerar" value="Gerar entradas" />
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
          $acumulador = 0;
          $maior = 0;
          if (isset($_GET['gerar']) || isset($_GET['Enviar'])) {
              for ($i = 1; $i <= $numGerados ; $i++) {
              echo "<div class='input'>
                        <input type='number' name='n".$i."' id='n".$i."' required />
                        <label for='n".$i."'>Número ".$i."</label>
                    </div>";
              }
              echo "<div class='input'>
                      <input type='submit' name='Enviar' value='Enviar Dados' />
                      <input type='reset' value='Limpar' />
                    </div>";
              echo "<h5>Clique em enviar não aperte enter</h5>";
          }
          if (isset($_GET['Enviar'])) {
              for ($i = 1; $i <= $numGerados ; $i++) {
                  $n[$i] = isset($_GET['n'.$i])?$_GET['n'.$i]:0;
              }
              $menor = $n[1];
              foreach ($n as $z) {
                  $acumulador += $z;
                  if ($maior < $z) {
                      $maior = $z;
                  } elseif ($menor > $z) {
                      $menor = $z;
                  }
              }
              echo "<hr class='dividir' />
                    <br />
                    <h5>O maior é ".$maior.", O menor é $menor e a Soma de todos é ".$acumulador."</h5>";
          }

        ?>
  </form>
</body>

</html>
