<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $numero = isset($_POST['n'])?$_POST['n']:7;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 14</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Par ou Ímpar</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n" id="n" />
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
      if ($numero % 2 == 0) {
        $resultado = "Par";
      } else {
        $resultado = "Ímpar";
      }
    ?>
    <h1><?php echo $resultado; ?></h1>
  </form>
</body>

</html>
