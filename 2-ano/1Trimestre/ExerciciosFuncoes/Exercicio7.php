<!DOCTYPE html>
<html lang="pt-BR">
<?php 
  $valor = isset($_POST['v'])?$_POST['v']:500;
  $dias = isset($_POST['d'])?$_POST['d']:7;
?>
<head>
  <meta charset="UTF-8" />
  <title>Exercício 13</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exercício 13</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="v" value="<?php echo $valor; ?>" step="0.01" />
      <label>Valor</label>
    </div>
    <div class="input">
      <input type="number" name="d" value="<?php echo $dias; ?>" />
      <label>Dias em atraso</label>
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
      $valorComAtraso = funcaoExercicio7($valor, $dias);
      echo "<h5>Valor com acrésimo do atraso: R$". number_format($valorComAtraso, 2, ",", "."). "</h5>";
    ?>
  </form>
</body>

</html>
