<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  require 'connect/connect.php';
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $radio = isset($_POST['radio'])?$_POST['radio']:'codigo';
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 4</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Jogadores</h5>
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
      <input id="3" type="radio" name="radio" value="timeFutebol" <?php echo $radio == 'timeFutebol' ? 'checked ' : ' '; ?>/>
      <label for="3">Time de Futebol</label>
    </div>
    <div class="radio radio-inline">
      <input id="4" type="radio" name="radio" value="posicao" <?php echo $radio == 'posicao' ? 'checked ' : ' '; ?>/>
      <label for="4">Posição</label>
    </div>
    <div class="radio radio-inline">
      <input id="5" type="radio" name="radio" value="numeroGols" <?php echo $radio == 'numeroGols' ? 'checked ' : ' '; ?>/>
      <label for="5">Números de Gols</label>
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
        <th scope="col">Time de Futebol</th>
        <th scope="col">Posição</th>
        <th scope="col">Número de Gols</th>
      </thead>
      <?php 
        if ($radio == 'codigo') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio.' = '. $pesquisa. ' order by '.$radio;
          }
          $sql = 'select * from '. $tb_jogador. $pesquisa;
        } elseif ($radio == 'nome') {
          $sql = 'select * from '. $tb_jogador. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'timeFutebol') {
          $sql = 'select * from '. $tb_jogador. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'posicao') {
          $sql = 'select * from '. $tb_jogador. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        }
        if ($radio == 'numeroGols') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio.' = '. $pesquisa. ' order by '.$radio;
          }
          $sql = 'select * from '. $tb_jogador. $pesquisa;
        }
        $resultado = mysqli_query($conexao, $sql);
        while ($row = mysqli_fetch_array($resultado)) {
          echo '<tr>';
          echo '<td>'. $row['codigo']. '</td>';
          echo '<td>'. $row['nome']. '</td>';
          echo '<td>'. $row['timeFutebol']. '</td>';
          echo '<td>'. $row['posicao']. '</td>';
          echo '<td>'. $row['numeroGols']. '</td>';
          echo '</tr>';
        }
      ?>
    </table>
</body>

</html>
