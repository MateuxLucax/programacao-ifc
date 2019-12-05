<!DOCTYPE html>
<html lang="pt-BR" />

<head>
  <meta charset="UTF-8" />
  <title>Exercício 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form method="post" action="Exercicio1_2.php">
    <h5>Exercício 1 | Página 1</h5>
    <hr class="dividir" />
    <?php
    $cont = 1;
    for ($i = 0; $i < 10; $i++) { 
      echo '<div class="input">
              <input type="text" name="t'.$i.'" id="t'.$i.'" required />
              <label for="t'.$i.'">Texto '.$cont.'</label>
            </div>';
      $cont++;
    } 
    ?>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
</body>

</html>
