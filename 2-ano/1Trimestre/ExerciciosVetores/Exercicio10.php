<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $valoresEntrada = isset($_POST['v'])?$_POST['v']:"Texto de Exemplo";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exrcicio 10</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Texto para Vetor</h5>
    <hr class="dividir" />
    <div class="input">
      <textarea type="textarea" rows="5" name="v" required><?php echo $valoresEntrada; ?></textarea>
      <label>Texto</label>
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
    <h5>Vetor:</h5>
    <ul>
    <?php 
      $letras = str_split($valoresEntrada);
      foreach ($letras as $letra) {
        if ($letra == " ") {
          echo "<li> &nbsp; </li>"; 
        }
        echo "<li>".$letra."</li>";
      }
    ?>
    </ul>
  </form>
</body>

</html>
