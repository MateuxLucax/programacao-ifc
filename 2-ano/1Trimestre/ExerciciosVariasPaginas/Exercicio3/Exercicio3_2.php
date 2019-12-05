<!DOCTYPE html>
<html lang="pt-BR" />

<?php
  $txt = isset($_POST['txt'])?$_POST['txt']:'';
  $texto = explode(";", $txt);
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post" action="Exercicio3_3.php">
    <h5>Exercício 3 | Página 2</h5>
    <hr class="dividir" />
    <br />
    <center>
    <?php
      for ($i = 0; $i < count($texto); $i++) {
        echo  '<div class="checkbox">
                 <input type="checkbox" id="ckb'.$i.'" name="ckb'.$i.'" value="'.$texto[$i].'" class="checkboxInput" />
                 <label for="ckb'.$i.'" class="checkboxLabel">'.$texto[$i].'</label>
               </div>
               <br />';
      }
      $quantidade = count($texto);
    ?>
    <input type="hidden" name="qtd" value="<?php echo $quantidade; ?>">
    </center>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
</body>

</html>
