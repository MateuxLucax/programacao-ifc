<!DOCTYPE html>
<html lang="pt-BR" />

<?php
  $selecao = array();
  $selecao = isset($_POST['selecao'])?$_POST['selecao']:'';
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post" action="Exercicio1_5.php">
    <h5>Exercício 1 | Página 4</h5>
    <hr class="dividir" />
    <br />
    <section>
    <h4>Escolha uma opção:</h4>
    <div>
    <?php
      for ($i = 0; $i < count($selecao); $i++) { 
        echo '<div class="radio">
                <input id="'.$i.'" type="radio" value="'.$selecao[$i].'" name="radio" />
                <label for="'.$i.'">'.$selecao[$i].'</label>
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
