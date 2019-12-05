<!DOCTYPE html>
<html lang="pt-BR" />

<?php
  $quantidade = isset($_POST['qtd'])?$_POST['qtd']:"";
  for ($i = 0; $i < $quantidade; $i++) { 
    $texto[$i] = isset($_POST['t'.$i])?$_POST['t'.$i]:"";
  }
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Texto | Checkbox</h5>
    <center>
    <?php 
      for ($i = 0; $i < count($texto); $i++) { 
        echo '<input type="checkbox" /><h5>'.$texto[$i].'</h5>';
      }
    ?>
    </center>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
</body>

</html>
