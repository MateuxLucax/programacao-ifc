<!DOCTYPE html>
<html lang="pt-BR">

<?php
  $tipo = isset($_POST['t'])?"hidden":"text";
  $valor = isset($_POST['t'])?$_POST['t']:""
?>

<head>
  <meta charset="UTF-8" />
  <title>Exrcicio 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Campos de Formulário | Hidden</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="<?php echo $tipo; ?>" name="t" value="<?php echo $valor; ?>" required/>
      <label>Nome</label>
    </div>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
</body>

</html>
