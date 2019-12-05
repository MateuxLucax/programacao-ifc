<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
	$vetor = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
?>

<head>
  <meta charset="UTF-8" />
  <title>Exemplo 1</title>
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
