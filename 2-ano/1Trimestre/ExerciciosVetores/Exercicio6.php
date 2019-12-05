<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $vetorEntrada = isset($_POST['v'])?$_POST['v']:"Carrinho;de;controle;remoto";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exrcicio 6</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Vetor Palavras</h5>
    <hr class="dividir" />
    <div class="input">
      <textarea type="textarea" rows="5" name="v" required><?php echo $vetorEntrada; ?></textarea>
      <label>Palavras (Separe eles por ";")</label>
    </div>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
  <br />
  <br />
  <br />
  <br />
  <form>
    <h5>Resultado</h5>
    <hr class="dividir" />
    <h5>Palavras: </h5>
    <ul>
    <?php 
      $vetorPalavras = explode(";", $vetorEntrada);
      foreach ($vetorPalavras as $palavra) {
        echo "<li>".$palavra."</li>";
      }
    ?>
    </ul>
  </form>
</body>

</html>
