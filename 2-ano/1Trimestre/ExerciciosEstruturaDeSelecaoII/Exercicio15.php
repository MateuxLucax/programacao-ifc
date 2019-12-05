<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $numero = isset($_POST['n'])?$_POST['n']:100;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 15</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Saber se é decimal</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n" id="n" step="0.01" />
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
    <?php
      $numero += 0;
      if (is_float($numero)) {
        $resultado = "$numero é decimal";
      } else {
        $resultado = "$numero é inteiro";
      }
    ?>
    <h5><?php echo $resultado; ?></h5>
  </form>
</body>

</html>
