<!DOCTYPE html>
<html lang="pt-BR" />

<?php
  $resultado = isset($_POST['radio'])?$_POST['radio']:'';
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exercício 1 | Página 6</h5>
    <hr class="dividir" />
    <br />
    <h1><?php echo $resultado; ?></h1>
  </form>
</body>

</html>
