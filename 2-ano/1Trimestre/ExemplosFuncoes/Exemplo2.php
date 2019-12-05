<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  $text = isset($_POST['text'])?$_POST['text']:false;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exemplo 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exemplo de Saída de Texto</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="text" value="<?php echo $text; ?>" />
      <label>Texto</label>
    </div>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
    </form>
    <form>
    <br /><br /><br />
    <h5>Resultados</h5>
    <hr class="dividir" />
    <h5>
      <?php
        header('Content-Type: text/html; charset=UTF-8');

        mensagem($text);

        function mensagem($msg){
          echo $msg;
        }
      ?>
    </h5>
  </form>
</body>

</html>
