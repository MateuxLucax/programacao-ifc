<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $altura = isset($_POST['h'])?$_POST['h']:"1.70";
  $sexo = isset($_POST['sexo'])?$_POST['sexo']:"1";
  $peso = isset($_POST['p'])?$_POST['p']:"56";
  $nome = isset($_POST['n'])?$_POST['n']:"Joscelino";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 9</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Peso Ideal</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="h" id="h" step="0.01"/>
      <label for="h">Altura</label>
    </div>
    <div class="input">
      <input type="number" name="p" id="p" />
      <label for="p">Peso</label>
    </div>
    <h4>Sexo:</h4>
    <div class="radio radio-horizontal">
      <input id="m" type="radio" name="sexo" value="1" checked>
      <label for="m">Masculino</label>
    </div>
    <div class="radio radio-horizontal">
      <input id="f" type="radio" name="sexo" value="2">
      <label for="f">Feminino</label>
    </div>
    <div class="input">
      <input type="text" name="n" id="n"/>
      <label for="n">Nome</label>
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
      if ($sexo == 1) {
        $pesoIdeal = (72.7 * $altura) - 58;
      } else {
        $pesoIdeal = (62.1 * $altura) - 44.7;
      }
      if ($peso >= $pesoIdeal) {
        $msg = "Você está acima do peso ideal";
      } elseif ($peso == $pesoIdeal) {
        $msg = "Seu peso está correto";
      } else {
        $msg = "Você está abaixo do peso ideal";
      }
    ?>
    <h1><?php echo "Nome: ".$nome; ?></h1>
    <h1><?php echo "Altura:".$altura."m"; ?></h1>
    <h1><?php echo "Peso ideal: ".$pesoIdeal."Kg"; ?></h1>
    <h1><?php echo "Peso: ".$peso."Kg"; ?></h1>
    <h1><?php echo $msg; ?></h1>
  </form>
</body>

</html>
