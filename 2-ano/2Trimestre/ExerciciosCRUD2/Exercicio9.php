<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  require 'connect/connect.php';
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $radio = isset($_POST['radio'])?$_POST['radio']:'codigo';
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
    <h5>Carros</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="pesquisa" value="<?php echo $pesquisa; ?>" />
      <label>Pesquisa</label>
    </div>
    <center>
    <div class="radio radio-inline">
      <input id="1" type="radio" name="radio" value="codigo" <?php echo $radio == 'codigo' ? 'checked ' : ' '; ?>/>
      <label for="1">Código</label>
    </div>
    <div class="radio radio-inline">
      <input id="2" type="radio" name="radio" value="anoDeFabricacao" <?php echo $radio == 'anoDeFabricacao' ? 'checked ' : ' '; ?>/>
      <label for="2">Ano de Fabricação</label>
    </div>
    <div class="radio radio-inline">
      <input id="3" type="radio" name="radio" value="dataDeVenda" <?php echo $radio == 'dataDeVenda' ? 'checked ' : ' '; ?>/>
      <label for="3">Data de Venda</label>
    </div>
    <div class="radio radio-inline">
      <input id="4" type="radio" name="radio" value="valor" <?php echo $radio == 'valor' ? 'checked ' : ' '; ?>/>
      <label for="4">Valor</label>
    </div>
    </center>
    <div class="input">
      <input type="submit" value="Pesquisar" />
      <input type="reset" value="Limpar" />
    </div>
    </form>
    <form>
    <br /><br /><br /><br />
    <hr class="dividir" />
  </form>
    <table>
      <thead>
        <th scope="col">Código</th>
        <th scope="col">Ano de Fabricação</th>
        <th scope="col">Data de Venda</th>
        <th scope="col">Valor</th>
      </thead>
      <?php 
        if ($radio == 'codigo') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio.' = '. $pesquisa. ' order by '.$radio;
          }
          $sql = 'select * from '. $tb_carro. $pesquisa;
        } elseif ($radio == 'valor') {
          $sql = 'select * from '. $tb_carro. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'dataDeVenda') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio." = '". $pesquisa. "' order by ".$radio;
          }
          $sql = 'select * from '. $tb_carro. $pesquisa;
        } elseif ($radio == 'anoDeFabricacao') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio." = '". $pesquisa. "' order by ".$radio;
          }
          $sql = 'select * from '. $tb_carro. $pesquisa;
        }
        $resultado = mysqli_query($conexao, $sql);
        while ($row = mysqli_fetch_array($resultado)) {
          echo '<tr>';
          echo '<td>'. $row['codigo']. '</td>';
          echo '<td>'. $row['anoDeFabricacao']. '</td>';
          echo '<td>'. $row['dataDeVenda']. '</td>';
          echo '<td>R$ '. $row['valor']. '</td>';
          echo '</tr>';
        }
      ?>
    </table>
</body>

</html>
