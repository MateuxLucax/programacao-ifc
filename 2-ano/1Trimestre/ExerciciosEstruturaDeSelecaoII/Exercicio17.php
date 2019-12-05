<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $r1 = isset($_POST["r1"])?$_POST["r1"]:"sim";
  $r2 = isset($_POST["r2"])?$_POST["r2"]:"sim";
  $r3 = isset($_POST["r3"])?$_POST["r3"]:"sim";
  $r4 = isset($_POST["r4"])?$_POST["r4"]:"sim";
  $r5 = isset($_POST["r5"])?$_POST["r5"]:"sim";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 17</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Investigatório</h5>
    <hr class="dividir" />
    <h4>Telefonou para a vítima?</h4>
    <div class="radio radio-horizontal">
      <input id="r1a" type="radio" name="r1" value="sim" />
      <label for="r1a">Sim</label>
    </div>
    <div class="radio radio-horizontal">
      <input id="r1b" type="radio" name="r1" value="nao" />
      <label for="r1b">Não</label>
    </div>
    <h4>Mora perto da vítima?</h4>
    <div class="radio radio-horizontal">
      <input id="r2a" type="radio" name="r2" value="sim" />
      <label for="r2a">Sim</label>
    </div>
    <div class="radio radio-horizontal">
      <input id="r2b" type="radio" name="r2" value="nao" />
      <label for="r2b">Não</label>
    </div>
    <h4>Esteve no local do crime?</h4>
    <div class="radio radio-horizontal">
      <input id="r3a" type="radio" name="r3" value="sim" />
      <label for="r3a">Sim</label>
    </div>
    <div class="radio radio-horizontal">
      <input id="r3b" type="radio" name="r3" value="nao" />
      <label for="r3b">Não</label>
    </div>
    <h4>Devia para a vítima?</h4>
    <div class="radio radio-horizontal">
      <input id="r4a" type="radio" name="r4" value="sim" />
      <label for="r4a">Sim</label>
    </div>
    <div class="radio radio-horizontal">
      <input id="r4b" type="radio" name="r4" value="nao" />
      <label for="r4b">Não</label>
    </div>
    <h4>Já trabalhou com a vítima?</h4>
    <div class="radio radio-horizontal">
      <input id="r5a" type="radio" name="r5" value="sim" />
      <label for="r5a">Sim</label>
    </div>
    <div class="radio radio-horizontal">
      <input id="r5b" type="radio" name="r5" value="nao" />
      <label for="r5b">Não</label>
    </div>
    <br />
    <br />
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
      $cont = 0;
      if ($r1 == "sim") {
        $cont += 1;
      }
      if ($r2 == "sim") {
        $cont += 1;
      }
      if ($r3 == "sim") {
        $cont += 1;
      }
      if ($r4 == "sim") {
        $cont += 1;
      }
      if ($r5 == "sim") {
        $cont += 1;
      }
      if ($cont == 2) {
        $resultado = "Você é Suspeito(a)";
      } elseif ($cont > 2 && $cont < 5) {
        $resultado = "Você é Cumplice";
      } elseif ($cont == 5) {
        $resultado = "Você é o Assasino";
      } else {
        $resultado = "Você é Inocente";
      }
    ?>
    <h5><?php echo $resultado; ?></h5>
  </form>
</body>

</html>
