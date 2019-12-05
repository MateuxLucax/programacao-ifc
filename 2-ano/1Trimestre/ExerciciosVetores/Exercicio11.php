<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $vetorEntrada = strtoupper(isset($_POST['v'])?$_POST['v']:"1-2-3-4-5-6-7-8-9-10");
?>

<head>
  <meta charset="UTF-8" />
  <title>Exrcicio 11</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Par ou Ímpar</h5>
    <hr class="dividir" />
    <div class="input">
      <textarea type="textarea" rows="5" name="v" required><?php echo $vetorEntrada; ?></textarea>
      <label>Números (Separe eles por "-")</label>
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
      $vetorNumeros = explode("-", $vetorEntrada);
      $contador = 1;
      for ($i = 0; $i < count($vetorNumeros) ; $i++) { 
        if ($vetorNumeros[$i] % 2 == 0) {
          echo "<li>".$contador." - ".$vetorNumeros[$i]." - Par</li>";
        } else {
          echo "<li>".$contador." - ".$vetorNumeros[$i]." - Ímpar</li>";
        }
        $contador++;
      }
    ?>
    </ul>
  </form>
</body>

</html>
