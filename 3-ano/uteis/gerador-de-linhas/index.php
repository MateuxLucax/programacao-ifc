<!DOCTYPE html>
<html lang="pt-br">

<?php 

  $qtdLinhas = isset($_POST['qtdLinhas']) ? $_POST['qtdLinhas'] : 0;

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Fira+Code&display=swap" rel="stylesheet"> 
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gerador de linhas</title>
</head>

<body>
  
    <?php 
    
      if ($qtdLinhas > 0) { 

    ?>
  <div class="container--generated">
    <div class="container--generated__item">
      <form class="form" method="POST">
        <input type="number" name="qtdLinhas" class="form__field" placeholder="Quantidade de linhas" />
        <button type="submit" class="btn btn--primary btn--inside uppercase">Gerar</button>
      </form>
    </div>
    <div class="container--generated__item--generated">
      <button type="button" onclick="CopyToClipboard('generated')" class="btn btn--primary uppercase">Copiar</button>
      <div class="generated" id="generated">
        <?php 
        
          for ($i = 1; $i <= $qtdLinhas; $i++) {
            echo $i. "<br/>";
          }

        ?>

      </div>
    </div>

    <?php

      } else {

        ?>
    <div class="container">
      <div class="container__item">
        <form class="form" method="POST" action="index.php">
          <input type="number" name="qtdLinhas" class="form__field" placeholder="Quantidade de linhas" />
          <button type="submit" class="btn btn--primary btn--inside uppercase">Gerar</button>
        </form>
      </div>
    </div>

        <?php

      }

    ?>
  </div>

  <script>
    function CopyToClipboard(containerid) {
      if (document.selection) { 
          var range = document.body.createTextRange();
          range.moveToElementText(document.getElementById(containerid));
          range.select().createTextRange();
          document.execCommand("copy"); 

      } else if (window.getSelection) {
          var range = document.createRange();
          range.selectNode(document.getElementById(containerid));
          window.getSelection().addRange(range);
          document.execCommand("copy");
      }
    }
  </script>

</body>

</html>