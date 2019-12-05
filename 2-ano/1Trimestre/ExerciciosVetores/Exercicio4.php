<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $valoresEntrada = strtoupper(isset($_POST['v'])?$_POST['v']:"Texto de Exemplo");
?>

<head>
  <meta charset="UTF-8" />
  <title>Exrcicio 4</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Consoantes</h5>
    <hr class="dividir" />
    <div class="input">
      <textarea type="textarea" rows="5" name="v" required><?php echo $valoresEntrada; ?></textarea>
      <label>Mensagem</label>
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
    <?php 
      $letras = str_split($valoresEntrada);
      $consoantes = 0;
      foreach ($letras as $letra) {
        if ($letra != "A" && $letra != "E" && $letra != "I" && $letra != "O" && $letra != "U" && $letra != " ") {
          $consoantes++;
          $consoante[] = $letra;
        }
      }
    ?>
    <h5>Número de Consoantes: <?php echo $consoantes; ?></h5>
    <ul>
    <?php 
      foreach ($consoante as $letra) {
        echo "<li>".$letra."</li>";
      }
    ?>
    </ul>
  </form>
</body>

</html>
