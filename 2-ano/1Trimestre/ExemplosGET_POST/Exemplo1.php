<!DOCTYPE html>
<?php
    $metros = 0;
    if (isset($_POST['metros'])) {
      $metros = $_POST['metros'];
    }
?>
<html>
<head>
    <link rel="stylesheet" href="Assets/style.css"/>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" type="image/x-icon" href="Assets/php.png" />
    <title>Exemplo 1</title>
</head>
<body>
<div>
  <form action="" method="post">
    <fieldset>
      <legend>Exemplo 1</legend>
      <br />
      <label for="metros">Metros: </label>
      <input type="text" name="metros" id="metros" />
      <br />
      <input type="submit" value="Enviar Dados" />
      <br />
    </fieldset>
  </form>
</div>
</body>
</html>
