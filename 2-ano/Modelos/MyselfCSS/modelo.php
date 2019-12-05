<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  $text = isset($_POST['text'])?$_POST['text']:false;
?>

<head>
  <meta charset="UTF-8" />
  <title>Modelo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Modelo</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="text" value="<?php echo $text; ?>" />
      <label>Nome</label>
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
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu aliquam felis. Mauris ultricies gravida facilisis. In nec molestie justo. Proin fringilla vulputate diam, in iaculis augue accumsan vel. Maecenas finibus, justo id congue tristique, mi nibh convallis purus, ut mattis justo neque id risus.
    </p>
  </form>
</body>

</html>
