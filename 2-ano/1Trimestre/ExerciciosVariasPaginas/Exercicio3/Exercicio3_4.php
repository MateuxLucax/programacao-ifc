<!DOCTYPE html>
<html lang="pt-BR" />

<?php
  $quantidade = isset($_POST['qtd'])?$_POST['qtd']:10;
  $selecao = array();
  $selecao = isset($_POST['selecao'])?$_POST['selecao']:'';
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post" action="Exercicio3_5.php">
    <h5>Exercício 3 | Página 4</h5>
    <hr class="dividir" />
    <br />
    <center>
    <?php
      for ($i = 0; $i < count($selecao); $i++) {
        echo  '<div class="checkbox">
                 <input type="checkbox" id="ckb'.$i.'" name="ckb'.$i.'" value="'.$selecao[$i].'" class="checkboxInput" />
                 <label for="ckb'.$i.'" class="checkboxLabel">'.$selecao[$i].'</label>
               </div>
               <br />';
      }
    ?>
    </center>
    <div class="input">
    <input type="hidden" name="qtd" value="<?php echo $quantidade; ?>">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
</body>

</html>
