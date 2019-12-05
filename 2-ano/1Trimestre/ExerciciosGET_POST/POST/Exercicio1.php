<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $texto = isset($_POST['txt'])?$_POST['txt']:"";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Digite um texto aleatório</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="txt" id="txt" required>
      <label for="txt">Texto</label>
    </div>
    <div class="input">
      <input type="submit" value="Enviar Dados"/>
      <input type="reset" value="Limpar" />
    </div>
   </form>
   <br />
   <br />
   <br />
   <br />
   <form>
     <h5>Texto inserido</h5>
     <hr class="dividir" />
     <h3><?php echo $texto; ?></h3>
   </form>
</body>

</html>
