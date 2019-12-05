<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $numero = isset($_POST['n'])?$_POST['n']:1000;
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
    <h5>Centenas, Dezenas e Unidades</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n" id="n" min="0" max="1000"/>
      <label for="n">Número</label>
    </div>
    <div>
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
      $centenas = floor($numero / 100);
      $dezenas = floor(($numero % 100) / 10);
      $unidades = (($numero % 100) % 10);
      if ($centenas > 0) {
        echo "<li>Centenas: $centenas</li>";
      } 
      if ($dezenas > 0) {
        echo "<li>Dezenas: $dezenas</li>";
      } 
      if ($unidades > 0) {
        echo "<li>Unidade: $unidades</li>";
      }
    ?>
    </ul>
  </form>
</body>

</html>
