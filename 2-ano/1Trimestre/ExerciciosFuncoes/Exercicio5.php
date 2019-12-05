<!DOCTYPE html>
<html lang="pt-BR">
<?php 
  $taxaImposto = isset($_POST['ti'])?$_POST['ti']:10;
  $custo = isset($_POST['c'])?$_POST['c']:100;
?>
<head>
  <meta charset="UTF-8" />
  <title>Exercício 5</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exercício 5</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="ti" value="<?php echo $taxaImposto; ?>" />
      <label>Taxa de Imposto</label>
    </div>
    <div class="input">
      <input type="number" name="c" value="<?php echo $custo; ?>" />
      <label>Custo</label>
    </div>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
  <form>
    <br /><br /><br />
    <h5>Resultados</h5>
    <hr class="dividir" />
    <?php 
      require 'Funcoes.php';
      somaImposto($custo, $taxaImposto);
    ?>
  </form>
</body>

</html>
