<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $idade = isset($_POST['i'])?$_POST['i']:18;
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
    <h5>Turma</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="i" id="i" />
      <label for="i">Idade</label>
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
      if ($idade > 0 && $idade < 25) {
        $resultado = "Turma Jovem.";
      } elseif ($idade >= 25 && $idade <= 40) {
        $resultado = "Turma Adulta.";
      } elseif ($idade > 40) {
        $resultado = "Turma Idosa.";
      }
    ?>
    <h1><?php echo $resultado; ?></h1>
  </form>
</body>

</html>
