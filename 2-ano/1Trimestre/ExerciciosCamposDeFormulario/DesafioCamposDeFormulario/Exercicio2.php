<!DOCTYPE html>
<html lang="pt-BR" />

<?php
  $contador = 1;  
  $quantidade = isset($_POST['qtd'])?$_POST['qtd']:"";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post" action="Exercicio3.php">
    <h5>Inserir Valores</h5>
    <?php 
      for ($i = 0; $i < $quantidade; $i++) { 
        echo '
          <div class="input">
            <input type="text" name="t'.$i.'" id="t'.$i.'" required />
            <label for="t'.$i.'">Valor '.$contador.'</label>
          </div>';
        $contador++;
      }
    ?>
    <input type="hidden" name="qtd" value="<?php echo $quantidade; ?>">
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
</body>

</html>
