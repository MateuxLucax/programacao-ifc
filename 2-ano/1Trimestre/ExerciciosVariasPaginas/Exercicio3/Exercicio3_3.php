<!DOCTYPE html>
<html lang="pt-BR" />

<?php
  $quantidade = isset($_POST['qtd'])?$_POST['qtd']:10;
  for ($i = 0; $i < $quantidade; $i++) { 
    if (isset($_POST['ckb'.$i])) {
      $checkbox[] = $_POST['ckb'.$i];
    }
  }
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post" action="Exercicio3_4.php">
    <h5>Exercício 3 | Página 3</h5>
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
    <input type="hidden" name="qtd" value="<?php echo $quantidade; ?>">
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
</body>

</html>
