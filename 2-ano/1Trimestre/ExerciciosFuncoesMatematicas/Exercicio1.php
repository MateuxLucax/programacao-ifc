<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $comprimento = isset($_POST['c'])?$_POST['c']:false;
  $modelo = isset($_POST['m'])?$_POST['m']:false;
  $opcao = isset($_POST['o'])?$_POST['o']:false;
?>

<head>
  <meta charset="UTF-8" />
  <title>Decolagem de Avião</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Decolagem de Avião</h5>
    <p>João Papo-de-Pescador fundou a Peixeira Airlines, e comprou 14 diferentes modelos de aviões, todos modelos da BOEING, e agora precisa de um "Programa" para auxiliar os pilotos na decolagem, onde o "Programa" deve receber o modelo do avião, a altura que deseja estar no vôo ou uma distancia percorrida em relaçao ao solo, e depois mostrar a distância que o avião percorrera até chegar a essa altura e também o ângulo de subida do avião conforme o modelo selecionado.</p>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="c" id="c" min="1" step="0.01" value="<?php echo $comprimento; ?>" />
      <label for="c">Comprimento</label>
    </div>
    <div class="radio radio-horizontal">
      <input id="1" type="radio" name="o" value="1" checked>
      <label for="1">Altura</label>
    </div>
    <div class="radio radio-horizontal">
      <input id="2" type="radio" name="o" value="2">
      <label for="2">Distância Percorrida</label>
    </div>
    <br />
    <select name="m">
          <option value="0" disabled selected>Modelo do avião:</option>
          <option value="1">737 - 300</option>
          <option value="2">737 - 400</option>
          <option value="3">737 - 500</option>
          <option value="4">737 - 600</option>
          <option value="5">737 - 900ER</option>
          <option value="6">747 - 400</option>
          <option value="7">757 - 200</option>
          <option value="8">767 - 400</option>
          <option value="9">777 - 200</option>
          <option value="10">777 - 300ER</option>
          <option value="11">717</option>
          <option value="12">MD - 80</option>
          <option value="13">MD - 90</option>
          <option value="14">MD - 11</option>
    </select>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
  <br />
  <br />
  <br />
  <br />
  <?php
    if ($comprimento == false || $modelo == false || $opcao == false) {
    } else {
      if ($comprimento != 0 && $modelo != 0) {
        echo "<form>
            <h5>Resultado</h5>
            <hr class='dividir' />";
        switch ($modelo) {
          case '1':
            $modelo = "737 - 300";
          case '2':
            $modelo = "737 - 400";
          case '3':
            $modelo = "737 - 500";
            $angulo = 17;
            break;
          case '4':
            $modelo = "737 - 600";
          case '5':
            $modelo = "737 - 900ER";
          case '6':
            $modelo = "747 - 400";
          case '7':
            $modelo = "757 - 200";
          case '8':
            $modelo = "767 - 400";
            $angulo = 15;
            break;
          case '9':
            $modelo = "777 - 200";
          case '10':
            $modelo = "777 - 300ER";
            $angulo = 14;
            break;
          case '11':
            $modelo = "717";
          case '12':
            $modelo = "MD - 80";
          case '13':
            $modelo = "MD - 90";
            $angulo = 20;
            break;
          case '14':
            $modelo = "MD - 11";
            $angulo = 25;
            break;
          default:
            $angulo = 30;
            break;
          }
        }
        if ($angulo > 0 && $angulo < 26) {
          if ($opcao == 1) {
            $seno = sin($angulo);
            $hipotenusa = abs($comprimento / $seno);
            echo "<h5>Valores para o modelo ".$modelo." :";
            echo "<br /><br />Ângulo de subida: ".$angulo."°";
            echo "<br /><br />Distância que percorrerá até chegar aos ".$comprimento."<small>m</small> de altura:<br /> ".number_format($hipotenusa,2,',','.')."<small>m</small>";
          } elseif ($opcao == 2) {
            $cosseno = cos($angulo);
            $hipotenusa = abs($comprimento / $cosseno);
            echo "<h5>Valores para o modelo ".$modelo." :";
            echo "<br /><br />Ângulo de subida: ".$angulo."°";
            echo "<br /><br />Distância que percorrerá até chegar aos ".$comprimento."<small>m</small> de distancia:<br /> ".number_format($hipotenusa,2,',','.')."<small>m</small>";
          }
        } else {
            echo "<h5>ERROR</h5>";
        }
          echo "</form>";
      }
  ?>
</body>

</html> 