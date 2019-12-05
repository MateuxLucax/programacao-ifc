<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  $matriz = array(array(1, 2, 3),
                  array(4, 5, 6),
                  array(7, 8, 9));
  define ("LIN", 3);
  define ("COL", 3);
?>

<head>
  <meta charset="UTF-8" />
  <title>Exemplo 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Matriz 3 x 3</h5>
    <hr class="dividir" />
    <p>
    <center>
    <?php  
      var_dump($matriz);
      echo "<br /><br />";
      for ($lin = 0; $lin < LIN; $lin++) { 
        for ($col = 0; $col < COL; $col++) { 
          echo $matriz[$lin][$col]. " ";
        }
        echo "<br />";
      }
    ?>
    </center>
  </p>
  </form>
</body>

</html>
