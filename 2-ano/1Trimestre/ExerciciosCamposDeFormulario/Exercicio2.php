<!DOCTYPE html>
<html lang="pt-BR" />

<?php
  $lazersc = array();
  $lazersc = isset($_POST['sellazer'])?$_POST['sellazer']:"";
  $lazer = array("Informática", "Música", "Basquete", "Tenis", "Volei");
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
    <h5>Campos de Formulário | Select Multiple</h5>
    <select name="sellazer[]" id="sellazer[]" size="6" multiple>
      <option value="0" disabled>Selecione uma opção</option>
      <option value="1">Nada</option>
      <?php 
        for ($i = 0; $i < count($lazer); $i++) { 
          if (in_array($lazer[$i], $lazersc)) {
            echo "<option value\"",$lazer[$i],"\" >",$lazer[$i],"</option>\n";
          } else{
            echo "<option value\"",$lazer[$i],"\" selected >",$lazer[$i],"</option>\n";
          }
        }
      ?>
    </select>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
</body>

</html>
