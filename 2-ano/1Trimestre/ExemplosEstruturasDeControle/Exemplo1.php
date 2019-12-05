<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $n1 = isset($_POST['n1'])?$_POST['n1']:0;
  $n2 = isset($_POST['n2'])?$_POST['n2']:0;
?>
<head>
  <meta charset="UTF-8" />
  <title>Exemplo 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form action="" method="post">
    <h1>Estrutura de Controle</h1>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n1" id="n1" value="" />
      <label for="n1">Número 1</label>
    </div>
    <div class="input">
      <input type="number" name="n2" id="n2" value="" />
      <label for="n2">Número 2</label>
    </div>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
  <br />
  <br />
  <br />
  <form>
    <br />
    <h1>Resultado</h1>
    <hr class="dividir" />
    <br />
    <?php
      if ($n1 > $n2) {
        echo "<h3>$n1 > $n2</h3>";
      } else if ($n2 > $n1){
        echo "<h3>$n2 > $n1</h3>";
      } else {
        echo "<h3>$n1 == $n2</h3>";
      }
    ?>
  </form>
</body>

</html>
