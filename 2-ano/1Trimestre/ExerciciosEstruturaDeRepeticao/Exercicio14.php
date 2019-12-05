<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $num = isset($_POST['n'])?$_POST['n']:2;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 14</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Série N</h5>
    <hr class="dividir" />
    <div class="input">
        <input type="number" name="n" id="n" required />
         <label for="n">Número</label>
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
    <h5>Série</h5>
    <hr class="dividir" />
    <h5>
    <?php
      echo "S = ";
        $cont = 1;
        for ($i = 1; $i <= $num ; $i++) { 
          if($i != $num){
            echo $i."/".$cont." + ";
            $cont += 2;
          }
          else{
            echo $i."/".$cont;
          }
        }
        ?>
    </h5>
  </form>
</body>

</html>
