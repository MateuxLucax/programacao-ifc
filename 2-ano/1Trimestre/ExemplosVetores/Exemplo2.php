<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $inicio = 10;
	$vetor = array();
  for ($i=0; $i < 10; $i++) { 
    $vetor[$i] = $inicio;
    $inicio = $inicio + 10;
  }
?>

<head>
  <meta charset="UTF-8" />
  <title>Exemplo 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form>
    <h5>Array - Vetor</h5>
    <ul>
    <?php
    	for ($i = 0; $i < count($vetor); $i++) { 
        echo "<li>".$vetor[$i]."</li>";
      }
    ?>
    <br />
    </ul>
  </form>
</body>

</html>
