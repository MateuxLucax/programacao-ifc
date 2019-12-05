<!DOCTYPE html>
<html lang="pt-BR" />

<?php
  for ($i = 0; $i < 10; $i++) { 
    if (isset($_POST['ckb'.$i])) {
      $checkbox[] = $_POST['ckb'.$i];
    }
  }
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post" action="Exercicio3_6.php">
    <h5>Exercício 3 | Página 5</h5>
    <hr class="dividir" />
    <br />
    <section>
    <h4>Escolha uma opção:</h4>
    <div>
    <?php
      for ($i = 0; $i < count($checkbox); $i++) { 
        echo '<div class="radio">
                <input id="'.$i.'" type="radio" value="'.$checkbox[$i].'" name="radio" />
                <label for="'.$i.'">'.$checkbox[$i].'</label>
              </div>';
      }
    ?>
    </div>
    </section>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
</body>

</html>
