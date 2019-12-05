<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  require 'connect/connect.php';
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $radio = isset($_POST['radio'])?$_POST['radio']:'codigo';
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 15</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>E-Mail</h5>
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
      <input id="2" type="radio" name="radio" value="origem" <?php echo $radio == 'origem' ? 'checked ' : ' '; ?>/>
      <label for="2">Origem</label>
    </div>
    <div class="radio radio-inline">
      <input id="3" type="radio" name="radio" value="destino" <?php echo $radio == 'destino' ? 'checked ' : ' '; ?>/>
      <label for="3">Destino</label>
    </div>
    <div class="radio radio-inline">
      <input id="4" type="radio" name="radio" value="assunto" <?php echo $radio == 'assunto' ? 'checked ' : ' '; ?>/>
      <label for="4">Assunto</label>
    </div>
    <div class="radio radio-inline">
      <input id="5" type="radio" name="radio" value="data_envio" <?php echo $radio == 'data_envio' ? 'checked ' : ' '; ?>/>
      <label for="5">Data de Envio</label>
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
        <th scope="col">Origem</th>
        <th scope="col">Destino</th>
        <th scope="col">Assunto</th>
        <th scope="col">Data de Envio</th>
        <th scope="col">Exclusão</th>
      </thead>
      <?php 
        if ($radio == 'codigo') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio.' = '. $pesquisa. ' order by '.$radio;
          }
          $sql = 'select * from '. $tb_email. $pesquisa;
        } elseif ($radio == 'origem') {
          $sql = 'select * from '. $tb_email. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'destino') {
          $sql = 'select * from '. $tb_email. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'assunto') {
          $sql = 'select * from '. $tb_email. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'data_envio') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio.' = "'. $pesquisa. '" order by '.$radio;
          }
          $sql = 'select * from '. $tb_email. $pesquisa;
        }
        $resultado = mysqli_query($conexao, $sql);
        while ($row = mysqli_fetch_array($resultado)) {
          echo '<tr>';
          echo '<td>'. $row['codigo']. '</td>';
          echo '<td>'. $row['origem']. '</td>';
          echo '<td>'. $row['destino']. '</td>';
          echo '<td>'. $row['assunto']. '</td>';
          echo '<td>'. $row['data_envio']. '</td>';
          echo '<td><a href="exclusao.php?acao=excluir&codigo='.$row[0]. '&tabela='. $tb_email. '&url=Exercicio15">Excluir</a></td></tr>';
          echo '</tr>';
        }
      ?>
    </table>
</body>

</html>
