<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $times = array("Palmeiras", "São Paulo", "Santos" );
?>

<head>
  <meta charset="UTF-8" />
  <title>Exemplo 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form>
    <h5>Times de Futebol</h5>
    <select>
    <option value="" disabled selected>Escolha uma opção:</option>
    <?php
    	for ($i = 0; $i < count($times); $i++) { 
        echo '<option value="'.$times[$i].'">'.$times[$i].'</option>';
      }
    ?>
    </select>
  </form>
</body>

</html>
