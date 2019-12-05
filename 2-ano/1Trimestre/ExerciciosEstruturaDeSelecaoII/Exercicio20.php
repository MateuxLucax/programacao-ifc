<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $tic = isset($_POST["tic"])?$_POST["tic"]:"Picanha";
  $kg = isset($_POST["kg"])?$_POST["kg"]:"2";
  $ti = isset($_POST["ti"])?$_POST["ti"]:"dinheiro";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 20</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Feira</h5>
    <hr class="dividir" />
    <h4>Carne</h4>
    <div class="radio radio-horizontal">
      <input id="r1a" type="radio" name="tic" value="File_Duplo" />
      <label for="r1a">Filé Duplo</label>
    </div>
    <div class="radio radio-horizontal">
      <input id="r1b" type="radio" name="tic" value="Alcatra" />
      <label for="r1b">Alcatra</label>
    </div>
    <div class="radio radio-horizontal">
      <input id="r1c" type="radio" name="tic" value="Picanha" />
      <label for="r1c">Picanha</label>
    </div>
    <div class="input">
      <input type="number" name="kg" id="kg" />
      <label for="kg">Carne Kg</label>
    </div>
    <h4>Tipo de Pagamento</h4>
    <div class="radio radio-horizontal">
      <input id="r2a" type="radio" name="ti" value="dinheiro" />
      <label for="r2a">Dinheiro</label>
    </div>
    <div class="radio radio-horizontal">
      <input id="r2b" type="radio" name="ti" value="cartao_tabajara" />
      <label for="r2b">Cartão Tabajara</label>
    </div>
    <div>
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
    <?php 
      $preco = 0;
      $precofinal = 0;
      $desconto = 0;
      if ($kg > 0) {
        if ($tic == "File_Duplo") {
          if ($kg <= 5) {
            $preco = $kg * 4.90;
            } else {
              $preco = $kg * 5.80;
            }
        } elseif ($tic == "Alcatra") {
          if ($kg <= 5) {
            $preco = $kg * 5.90;
          } else {
            $preco = $kg * 6.80;
          }
        } elseif ($tic = "Picanha") {
          if ($kg <= 5) {
            $preco = $kg * 6.90;
          } else {
            $preco = $kg * 7.80;
          }
        }
        if ($ti == "cartao_tabajara") {
          $desconto = 5;
          $precofinal = $preco * 0.95;
        } else {
          $precofinal = $preco;
        }
      }
    ?>
    <h5><?php echo "Tipo: $tic <br />".
            "Quantidade: ".$kg."Kg <br />".
            "Preço Total: R$".number_format($preco, 2, ",", ".")."<br />".
            "Tipo de pagamento: $ti <br />".
            "Desconto: ".$desconto."% <br />".
            "Valor a Pagar: R$".number_format($precofinal, 2, ",", "."); ?></h5>
  </form>
</body>

</html>
