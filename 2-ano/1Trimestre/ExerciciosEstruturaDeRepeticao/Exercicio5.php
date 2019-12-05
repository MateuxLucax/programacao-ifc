<!DOCTYPE html>
<html lang="pt-BR" />

<head>
  <meta charset="UTF-8" />
  <title>Exercício 5</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form>
    <h5>Resultado</h5>
    <hr class="dividir" />
    <?php
      echo "<h5>1 --> 20</h5>";
      for ($i = 1; $i < 21 ; $i++) {
        if ($i < 20) {
          echo $i. " -> ";
        } else {
          echo $i;
        }
      }
    ?>
  </form>
</body>

</html>
