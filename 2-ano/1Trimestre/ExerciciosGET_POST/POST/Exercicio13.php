<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $peso = isset($_POST['p'])?$_POST['p']:"0";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 13</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>João Papo-de-Pescador</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="p" id="p" />
      <label for="p">Peso</label>
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
    if ($peso > 50) {
      $excesso = $peso - 50;
      $multa = $excesso * 4;
      $resposta = "Você tem uma multa de R$$multa,00";
    } else {
      $resposta = "Você não tem uma multa!";
    }
    ?>
    <h1><?php echo $resposta ; ?></h1>
  </form>
</body>

</html>
