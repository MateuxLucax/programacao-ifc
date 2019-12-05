<!DOCTYPE html>
<html lang="pt-br">
<?php $numAtributos = isset($_POST['numAtributos']) ? $_POST['numAtributos'] : 4; $nomeClasse = isset($_POST['nomeClasse']) ? $_POST['nomeClasse'] : "teste";?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gerador de objetos</title>
    <link rel="stylesheet" href="css/bulma.css" />
    <link rel="icon" href="css/favicon.png">
</head>

<body>
    <section class="section" style="margin-top: -1.5%;">
        <a href="index.html" class="button is-primary is-outlined" style="float:right;">Novo objeto</a>
        <div style="float: right;">&nbsp;&nbsp;&nbsp;</div>
        <button onclick="copiarTexto('codigo')" class="button is-primary is-outlined" style="float:right;">Copiar</button>
        <div class="row is-family-code" id="codigo">
            <?php
                echo htmlspecialchars("<?php"). "<br/> class ". $nomeClasse. " {<br /><br/>";

                for ($i = 1; $i <= $numAtributos; $i++) {
                    $atributo = $_POST['atributo'. $i];
                    $tipoAtributo = $_POST['tipoAtributo'. $i];
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;
                          private $". $atributo. ";<br/>";
                }
                echo "<br/>";
                for ($i = 1; $i <= $numAtributos; $i++) {
                    $atributo = $_POST['atributo'. $i];
                    $tipoAtributo = $_POST['tipoAtributo'. $i];

                    // Public function set
                    echo "&nbsp;&nbsp;&nbsp;
                          public function set".ucfirst($atributo)."($".$atributo.") {<br/>";
                    if ($tipoAtributo == 1) {
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              if (strlen($". $atributo. ") > 1) {<br/>";
                    }
                    else if ($tipoAtributo == 2) {
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              if ($". $atributo. " > 0) {<br/>";
                    }
                    else if ($tipoAtributo == 3) {
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              if (strlen($". $atributo. ") >= 10) {<br/>";
                    }
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                          .htmlspecialchars("$"). "this->". $atributo. " = $". $atributo. ";<br/>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          }<br/>
                          &nbsp;&nbsp;&nbsp;&nbsp;
                          }<br/><br/>";

                    // Public function get

                    echo "&nbsp;&nbsp;&nbsp;
                          public function get". ucfirst($atributo). "() {<br/>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                          return ". htmlspecialchars("$"). "this->". $atributo. ";<br/>
                          &nbsp;&nbsp;&nbsp;&nbsp
                          }<br/><br/>";
                }

                // __toString

                echo "&nbsp;&nbsp;&nbsp;
                      public function __toString() {<br/>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      return";
                for ($i = 1; $i <= $numAtributos; $i++) {
                    $atributo = $_POST['atributo'. $i];
                    if ($atributo == $_POST['atributo1']) {
                        echo ' "['. ucfirst($nomeClasse) . '] '. $atributo. ': ". '. htmlspecialchars("$"). 'this->'. $atributo;
                    } else {
                        echo '. " | '. $atributo. ': ". '. htmlspecialchars("$"). 'this->'. $atributo;
                    }
                }
                echo ";<br/>&nbsp;&nbsp;&nbsp&nbsp;}";

                echo "<br/><br/>}<br/>?>";
            ?>
        </div>
    </section>
</body>

<script>

function copiarTexto(idContainer) {
  if (document.selection) {
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById(idContainer));
    range.select().createTextRange();
    document.execCommand("copy");

  } else if (window.getSelection) {
    var range = document.createRange();
    range.selectNode(document.getElementById(idContainer));
    window.getSelection().addRange(range);
    document.execCommand("copy");
  }
}

</script>

</html>