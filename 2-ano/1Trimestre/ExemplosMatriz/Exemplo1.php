<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>Exemplo 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exemplo 1</h5>
    <hr class="dividir" />
    <h1>
    <?php  
      for ($i = 0; $i < 3; $i++) { 
        for ($j = 0; $j < 3; $j++) { 
          echo $i.$j." ";
        }
        echo "<br />";
      }
    ?>
    </h1>
  </form>
</body>

</html>
