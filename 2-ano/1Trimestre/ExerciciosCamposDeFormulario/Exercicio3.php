<!DOCTYPE html>
<html lang="pt-BR" />

<?php
  $lazersc = array();
  $lazersc = isset($_POST['sellazer'])?$_POST['sellazer']:"";
  $lazer = array("Informática", "Música", "Basquete", "Tenis", "Volei");
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Campos de Formulário | Checkbox</h5>
      <?php 
        for ($i = 0; $i < count($lazer); $i++) { 
          if (in_array($lazer[$i], $lazersc)) {
            echo "<input name=\"sellazer[]\" id=\"sellazer[]\" type=\"checkbox\" value=\"".$lazer[$i]."\" checked>".$lazer[$i]."\n";
          } else{
            echo "<input name=\"sellazer[]\" id=\" sellazer[] \" type=\"checkbox\" value=\"".$lazer[$i]."\">".$lazer[$i]."\n";
          }
        }
      ?>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
</body>

</html>
