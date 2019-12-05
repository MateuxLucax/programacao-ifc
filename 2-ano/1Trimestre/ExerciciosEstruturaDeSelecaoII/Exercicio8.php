<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $ano = isset($_POST['a'])?$_POST['a']:2012;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 8</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Ano Bissexto</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="a" id="a" />
      <label for="a">Ano</label>
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
      if ($ano % 4 == 0) {
        $resultado = "$ano é um ano bissexto.";
      } else {
        $resultado = "$ano não é um ano bissexto.";
      }
    ?>
    <h5><?php echo $resultado; ?></h5>
  </form>
</body>

</html>
