<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $n1 = isset($_POST['n1'])?$_POST['n1']:0;
  $n2 = isset($_POST['n2'])?$_POST['n2']:0;
  $n3 = isset($_POST['n3'])?$_POST['n3']:0;
  $n4 = isset($_POST['n4'])?$_POST['n4']:0;
  $med = 0;
  $cor = "white";
?>
<head>
  <meta charset="UTF-8" />
  <title>Exemplo 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form action="" method="post">
    <h1>Média Aritimética</h1>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n1" id="n1" value="" step="0.1" />
      <label for="n1">Nota 1</label>
    </div>
    <div class="input">
      <input type="number" name="n2" id="n2" value="" step="0.1" />
      <label for="n2">Nota 2</label>
    </div>
    <div class="input">
      <input type="number" name="n3" id="n3" value="" step="0.1" />
      <label for="n3">Nota 3</label>
    </div>
    <div class="input">
      <input type="number" name="n4" id="n4" value="" step="0.1" />
      <label for="n4">Nota 4</label>
    </div>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
  <br />
  <form>
    <br />
    <h1>Resultado</h1>
    <hr class="dividir" />
    <br />
    <?php
      $med = ($n1 + $n2 + $n3 + $n4) / 4;
      if (($med >= 7) || ($n1 >= 7) || ($n2 >= 7) || ($n3 >= 7) || ($n4 >= 7) || ($med >= 7)) {
        $cor = "green";
        $sit = "Aprovado";
      } else {
        $cor = "red";
        $sit = "Reprovado";
      }
    ?>
    <style media="screen">
      .nota {
        color: <?php echo $cor; ?>;
      }
    </style>
    <h4>Notas</h4>
    <ul>
      <li class="nota"><?php echo "Nota 1: $n1"; ?></li>
      <li class="nota"><?php echo "Nota 2: $n2"; ?></li>
      <li class="nota"><?php echo "Nota 3: $n3"; ?></li>
      <li class="nota"><?php echo "Nota 4: $n4"; ?></li>
    </ul>
    <h4>Média</h4>
    <ul>
      <li class="nota"><?php echo "Média: $med "; ?></li>
    </ul>
    <h4>Situação</h4>
    <ul>
      <li class="nota"><?php echo $sit; ?></li>
    </ul>
  </form>
</body>

</html>
