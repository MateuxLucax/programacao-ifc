<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  $numero1 = isset($_POST['n1'])?$_POST['n1']:false;
  $numero2 = isset($_POST['n2'])?$_POST['n2']:false;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exemplo 4</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Retorno de Soma</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n1" value="<?php echo $numero1; ?>" />
      <label>Número A</label>
    </div>
    <div class="input">
      <input type="number" name="n2" value="<?php echo $numero2; ?>" />
      <label>Número B</label>
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
    <h5>
      <?php
        header('Content-Type: text/html; charset=UTF-8');

        $resultado = soma($numero1, $numero2);

        function soma($n1, $n2){
          return $n1 + $n2;
        }

        echo $numero1." + ".$numero2." = ".$resultado;
      ?>
    </h5>
  </form>
</body>

</html>
