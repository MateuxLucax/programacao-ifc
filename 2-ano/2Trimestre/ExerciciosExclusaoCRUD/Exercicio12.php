]<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  require 'connect/connect.php';
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $radio = isset($_POST['radio'])?$_POST['radio']:'codigo';
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 12</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Computadores</h5>
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
      <input id="2" type="radio" name="radio" value="fabricante" <?php echo $radio == 'fabricante' ? 'checked ' : ' '; ?>/>
      <label for="2">Fabricante</label>
    </div>
    <div class="radio radio-inline">
      <input id="3" type="radio" name="radio" value="processador" <?php echo $radio == 'processador' ? 'checked ' : ' '; ?>/>
      <label for="3">Processador</label>
    </div>
    <div class="radio radio-inline">
      <input id="4" type="radio" name="radio" value="memoria" <?php echo $radio == 'memoria' ? 'checked ' : ' '; ?>/>
      <label for="4">Memória</label>
    </div>
    <div class="radio radio-inline">
      <input id="5" type="radio" name="radio" value="hd" <?php echo $radio == 'hd' ? 'checked ' : ' '; ?>/>
      <label for="5">HD</label>
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
        <th scope="col">Fabricante</th>
        <th scope="col">Processador</th>
        <th scope="col">Memória</th>
        <th scope="col">HD</th>
        <th scope="col">Exclusão</th>
      </thead>
      <?php
        if ($radio == 'codigo') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio.' = '. $pesquisa. ' order by '.$radio;
          }
          $sql = 'select * from '. $tb_computador. $pesquisa;
        } elseif ($radio == 'nome') {
          $sql = 'select * from '. $tb_computador. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'processador') {
          $sql = 'select * from '. $tb_computador. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'memoria') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio.' = '. $pesquisa. ' order by '.$radio;
          }
          $sql = 'select * from '. $tb_computador. $pesquisa;
        } elseif ($radio == 'hd') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio.' = '. $pesquisa. ' order by '.$radio;
          }
          $sql = 'select * from '. $tb_computador. $pesquisa;
        }
        $resultado = mysqli_query($conexao, $sql);
        while ($row = mysqli_fetch_array($resultado)) {
          echo '<tr>';
          echo '<td>'. $row['codigo']. '</td>';
          echo '<td>'. $row['fabricante']. '</td>';
          echo '<td>'. $row['processador']. '</td>';
          echo '<td>'. $row['memoria']. ' Gb</td>';
          echo '<td>'. $row['hd']. ' Gb</td>';
          echo '<td><a href="exclusao.php?acao=excluir&codigo='.$row[0]. '&tabela='. $tb_computador. '&url=Exercicio12">Excluir</a></td></tr>';
          echo '</tr>';
        }
      ?>
    </table>
</body>

</html>
