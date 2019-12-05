<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $turno = isset($_POST['t'])?$_POST['t']:"m";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 11</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Turno</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="t" id="t"/>
      <label for="t">Turno</label>
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
      $turno = strtoupper($turno);
      if ($turno == "M") {
        $resposta = "Bom Dia!";
      } elseif ($turno == "V") {
        $resposta = "Boa Tarde!";
      } elseif ($turno == "N") {
        $resposta = "Boa Noite!";
      } else {
        $resposta = "Turno Inválido";
      }
    ?>
    <h1><?php echo $resposta; ?></h1>
  </form>
</body>

</html>
