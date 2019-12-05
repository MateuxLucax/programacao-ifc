<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  require 'connect/connect.php';
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $radio = isset($_POST['radio'])?$_POST['radio']:'codigo';
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 5</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Times de Futebol</h5>
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
      <input id="2" type="radio" name="radio" value="nome" <?php echo $radio == 'nome' ? 'checked ' : ' '; ?>/>
      <label for="2">Nome</label>
    </div>
    <div class="radio radio-inline">
      <input id="3" type="radio" name="radio" value="numero_torcedores" <?php echo $radio == 'numero_torcedores' ? 'checked ' : ' '; ?>/>
      <label for="3">Número de Torcedores</label>
    </div>
    <div class="radio radio-inline">
      <input id="4" type="radio" name="radio" value="cidade" <?php echo $radio == 'cidade' ? 'checked ' : ' '; ?>/>
      <label for="4">Cidade</label>
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
        <th scope="col">Nome</th>
        <th scope="col">Número de Torcedores</th>
        <th scope="col">Cidade</th>
      </thead>
      <?php 
        if ($radio == 'codigo') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio.' = '. $pesquisa. ' order by '.$radio;
          }
          $sql = 'select * from '. $tb_Time_futebol. $pesquisa;
        } elseif ($radio == 'nome') {
          $sql = 'select * from '. $tb_Time_futebol. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'cidade') {
          $sql = 'select * from '. $tb_Time_futebol. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } 
        if ($radio == 'numero_torcedores') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio.' = '. $pesquisa. ' order by '.$radio;
          }
          $sql = 'select * from '. $tb_Time_futebol. $pesquisa;
        }
        $resultado = mysqli_query($conexao, $sql);
        while ($row = mysqli_fetch_array($resultado)) {
          echo '<tr>';
          echo '<td>'. $row['codigo']. '</td>';
          echo '<td>'. $row['nome']. '</td>';
          echo '<td>'. $row['numero_torcedores']. '</td>';
          echo '<td>'. $row['cidade']. '</td>';
          echo '</tr>';
        }
      ?>
    </table>
</body>

</html>
