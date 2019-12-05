<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $valoresEntrada = isset($_POST['v'])?$_POST['v']:0;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exrcicio 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Separador de Valores</h5>
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
    <ul>
    <?php 
      $numeros = explode(";", $valoresEntrada);
      $cont = 1;
      for ($i = count($numeros) - 1; $i >=  0; $i--) {
        echo "<li>".$cont."ª Posição: ".$numeros[$i]."</li>";
        $cont++;
      }
    ?>
    </ul>
  </form>
</body>

</html>
