<!DOCTYPE html>
<html lang="pt-BR" />

<?php
  for ($i = 0; $i < 10; $i++) {
    $texto[] = isset($_POST['t'.$i])?$_POST['t'.$i]:"";
  }
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post" action="Exercicio2_3.php">
    <h5>Exercício 2 | Página 2</h5>
    <hr class="dividir" />
    <br />
    <h4>Escolha alguma(s) opção(ões):</h4>
    <select multiple="multiple" name="selecao[]" id="selecao[]">
    <?php
      for ($i = 0; $i < count($texto); $i++) {
        echo  '<option value="'.$texto[$i].'" name="checkbox['.$i.']">'.$texto[$i].'</option>';
      }
    ?>
    </select>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
</body>

</html>
