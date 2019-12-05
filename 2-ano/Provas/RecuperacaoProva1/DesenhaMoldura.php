<!DOCTYPE html>
<html lang="pt-BR" />

<?php
  $primeiroCaracter = isset($_POST['p'])?$_POST['p']:null;
  $segundoCaracter = isset($_POST['s'])?$_POST['s']:null;
  $terceiroCaracter = isset($_POST['t'])?$_POST['t']:null;
  $corA = isset($_POST['ca'])?$_POST['ca']:null;
  $corB = isset($_POST['cb'])?$_POST['cb']:null;
  $linhas = isset($_POST['l'])?$_POST['l']:null;
  $colunas = isset($_POST['c'])?$_POST['c']:null;
?>

<head>
  <meta charset="UTF-8" />
  <title>Desenha Moldura | Versão Top</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
  <style type="text/css">img { width: 25px; }</style>
  <style type="text/css">.texto { font-size: 25px; font-family: 'Roboto Mono', monospace; }</style>
</head>

<body>
  <form method="post">
    <h5>Desenha Moldura | Versão Top</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" id="p" name="p" value="<?php echo $primeiroCaracter; ?>" required/>
      <label for="p">Primeiro Caracter</label>
    </div>
    <div class="input">
      <input type="text" id="s" name="s" value="<?php echo $segundoCaracter; ?>" required/>
      <label for="s">Segundo Caracter</label>
    </div>
    <div class="input">
      <input type="text" id="t" name="t" value="<?php echo $terceiroCaracter; ?>" required/>
      <label for="t">Terceiro Caracter</label>
    </div>
    <div class="input">
      <input type="text" id="ca" name="ca" value="<?php echo $corA; ?>" required/>
      <label for="ca">Cor A</label>
    </div>
    <div class="input">
      <input type="text" id="cb" name="cb" value="<?php echo $corB; ?>" required/>
      <label for="cb">Cor B</label>
    </div>
    <div class="input">
      <input type="number" id="l" name="l" value="<?php echo $linhas; ?>" required/>
      <label for="l">Linhas</label>
    </div>
    <div class="input">
      <input type="number" id="c" name="c" value="<?php echo $colunas; ?>" required/>
      <label for="c">Colunas</label>
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
    <center>
    <br />
    <br />
    <?php
      for ($i = 1; $i <= $linhas; $i++) { 
        if ($i % 2 == 0) {
          $cor = $corA;
        } else {
          $cor = $corB; 
        }
        echo "\n<span style='color: #". $cor. ";' class='texto'>";
        if ($i == 1 || $i == $linhas) {
          for ($j = 1; $j <= $colunas; $j++) { 
            if ($j == 1 || $j == $colunas) {
              echo $primeiroCaracter;
            } else {
              echo $segundoCaracter;
            }
          }
          echo "\n<br />";
        } else {
            for ($j = 1; $j <= $colunas; $j++) { 
              if ($j == 1 || $j == $colunas) {
                echo $terceiroCaracter;
              } else {
                if ($j % 2 == 0) {
                  echo "<img src='assets/images/SorrisoInvertido.png' />";
                } else {
                  echo "<img src='assets/images/Sorriso.png' />";
                }
              }
            }
          echo "\n<br />";
        }
        echo "\n</span>";
      }
    ?>
    </center>
  </form>
</body>

</html>
