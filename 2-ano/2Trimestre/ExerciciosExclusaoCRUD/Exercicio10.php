<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  require 'connect/connect.php';
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $radio = isset($_POST['radio'])?$_POST['radio']:'codigo';
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 10</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Enchente</h5>
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
      <input id="2" type="radio" name="radio" value="dataAtual" <?php echo $radio == 'dataAtual' ? 'checked ' : ' '; ?>/>
      <label for="2">Data</label>
    </div>
    <div class="radio radio-inline">
      <input id="3" type="radio" name="radio" value="nivelDoRio" <?php echo $radio == 'nivelDoRio' ? 'checked ' : ' '; ?>/>
      <label for="3">Nível do Rio</label>
    </div>
    <div class="input">
      <input type="submit" value="Pesquisar" />
      <input type="reset" value="Limpar" />
    </div>
    </form>
    <form>
    <br /><br /><br />
    <hr class="dividir" />
    <br />
  </form>
    <table>
      <thead>
        <th scope="col">Código</th>
        <th scope="col">Data</th>
        <th scope="col">Nível do Rio</th>
        <th scope="col">Exclusão</th>
      </thead>
      <?php 
        if ($radio == 'codigo') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio.' = '. $pesquisa. ' order by '.$radio;
          }
          $sql = 'select * from '. $tb_enchente. $pesquisa;
        } elseif ($radio == 'nivelDoRio') {
          $sql = 'select * from '. $tb_enchente. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'dataAtual') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio.' = "'. $pesquisa. '" order by '.$radio;
          }
          $sql = 'select * from '. $tb_enchente. $pesquisa;
        }
        $resultado = mysqli_query($conexao, $sql);
        while ($row = mysqli_fetch_array($resultado)) {
          echo '<tr>';
          echo '<td>'. $row['codigo']. '</td>';
          echo '<td>'. $row['dataAtual']. '</td>';
          echo '<td>'. $row['nivelDoRio']. 'm</td>';
          echo '<td><a href="exclusao.php?acao=excluir&codigo='.$row[0]. '&tabela='. $tb_enchente. '&url=Exercicio10">Excluir</a></td></tr>';
          echo '</tr>';
        }
      ?>
    </table>
</body>

</html>
