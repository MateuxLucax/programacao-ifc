<!DOCTYPE html>
<html lang="pt-BR" />

<head>
  <meta charset="UTF-8" />
  <title>Exercício 6</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form>
    <h5>Resultado</h5>
    <hr class="dividir" />
    <?php
      echo "<ul>";
      for ($i = 1; $i < 51 ; $i++) {
        if ($i % 2 == 0) {
          
        } else {
          echo "<li>". $i . "</li>";
        }
      }
      echo "</ul>";
    ?>
  </form>
</body>

</html>
