<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $alfabeto = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");  
  $caracteres = isset($_POST['c'])?$_POST['c']:8;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 9</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Gerador de Senhas</h5>
    <hr class="dividir" />
    <div class="input">
        <input type="number" name="c" id="c" required value="<?php echo $caracteres; ?>" min="1" max="27" />
         <label for="c">Quantidade de Caracteres</label>
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
    <h5>Resultado</h5>
    <hr class="dividir" />
    <h5>Senha: </h5>
    <?php 
      $vogais = 0;
      $consoantes = 0;
      foreach ($alfabeto as $letra) {
        if ($letra != "a" && $letra != "e" && $letra != "i" && $letra != "o" && $letra != "u") {
          $consoantes++;
          $consoante[] = $letra;
        } else {
          $vogais++;
          $vogal[] = $letra;
        }
      }
      $caracteresSenha = 0;
      for ($i = 0; $i < $caracteres; $i ++) { 
        $numeroConsoante = mt_rand(0,20);
        $numeroVogal = mt_rand(0,4);
        if ($caracteres % 2 == 0) {
          $senha[] = $consoante[$numeroConsoante];
          $caracteresSenha++;
          if ($caracteresSenha == $caracteres) {
            break;
          } else {
            $senha[] = $vogal[$numeroVogal];
            $caracteresSenha++;
          }
        } else {
          $senha[] = $vogal[$numeroVogal];
          $caracteresSenha++;
          if ($caracteresSenha == $caracteres) {
            break;
          } else {
            $senha[] = $consoante[$numeroConsoante];
            $caracteresSenha++;
          }
        }
        if ($caracteresSenha == $caracteres) {
          break;
        }
      }
      echo "<h6><center>";
      foreach ($senha as $ser) {
        echo $ser;
      }
      echo "</center></h6>";
    ?>
  </form>
</body>

</html>
