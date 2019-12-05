<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $nota1 = isset($_POST['n1'])?$_POST['n1']:7;
  $nota2 = isset($_POST['n2'])?$_POST['n2']:7;
  $nota3 = isset($_POST['n3'])?$_POST['n3']:7;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 12</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Médias Parciais </h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n1" id="n1" />
      <label for="n1">Nota 1</label>
    </div>
    <div class="input">
      <input type="number" name="n2" id="n2" />
      <label for="n2">Nota 2</label>
    </div>
    <div class="input">
      <input type="number" name="n3" id="n3" />
      <label for="n3">Nota 3</label>
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
      $media = ($nota1 + $nota2 + $nota3) / 3;
      if ($media > 0 && $media < 7) {
        $resultado = "REPROVADO";
      } elseif ($media >= 7 && $media < 10) {
        $resultado = "APROVADO";
      } elseif ($media == 10) {
        $resultado = "APROVADO COM DISTINÇÃO";
      }
    ?>
    <h5><?php echo "Média: ".$media; ?></h5>
    <h5><?php echo $resultado; ?></h5>
  </form>
</body>

</html>
