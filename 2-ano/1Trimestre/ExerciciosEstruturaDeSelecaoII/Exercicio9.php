<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $dia = isset($_POST['a'])?$_POST['a']:"02";
  $mes = isset($_POST['b'])?$_POST['b']:"12";
  $ano = isset($_POST['c'])?$_POST['c']:"2012";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 9</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Verificador de Data</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="a" id="a" />
      <label for="a">Dia</label>
    </div>
    <div class="input">
      <input type="text" name="b" id="b" />
      <label for="b">Mês</label>
    </div>
    <div class="input">
      <input type="text" name="c" id="c" />
      <label for="c">Ano</label>
    </div>
    <div class="input">
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
      if (checkdate($mes, $dia, $ano)) {
        $resultado = "Data Válida.";
      } else {
        $resultado = "Data Inválida.";
      }
    ?>
    <h5><?php echo $resultado; ?></h5>
  </form>
</body>

</html>
