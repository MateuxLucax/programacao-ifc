<!DOCTYPE html>
<html lang="pt-BR" />

<?php
  for ($i = 0; $i < 10; $i++) { 
    if (isset($_POST['ckb'.$i])) {
      $checkbox[] = $_POST['ckb'.$i];
    }
  }
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post" action="Exercicio1_4.php">
    <h5>Exercício 1 | Página 3</h5>
    <hr class="dividir" />
    <br />
    <h4>Escolha alguma(s) opção(ões):</h4>
    <select multiple="multiple" name="selecao[]" id="selecao[]">
    <?php
      for ($i = 0; $i < count($checkbox); $i++) {
        echo  '<option value="'.$checkbox[$i].'" name="selecao['.$i.']">'.$checkbox[$i].'</option>';
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
