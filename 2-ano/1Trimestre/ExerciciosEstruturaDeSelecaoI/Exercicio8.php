<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $n1 = isset($_POST['n1'])?$_POST['n1']:"7";
  $n2 = isset($_POST['n2'])?$_POST['n2']:"7";
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
    <h5>Média Parcial</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n1" id="n1"/>
      <label for="n1">Nota 1</label>
    </div>
    <div class="input">
      <input type="number" name="n2" id="n2"/>
      <label for="n2">Nota 2</label>
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
    <h5>Resultados</h5>
    <hr class="dividir" />
    <?php
      $media = ($n1 + $n2) / 2;
      if ($media >= 7) {
        $resposta = "APROVADO";
      } else {
        $resposta = "REPROVADO";
      }
    ?>
    <h1><?php echo $resposta; ?></h1>
  </form>
</body>

</html>
