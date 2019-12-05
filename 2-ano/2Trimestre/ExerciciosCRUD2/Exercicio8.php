<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  require 'connect/connect.php';
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $radio = isset($_POST['radio'])?$_POST['radio']:'codigo';

?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 8</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Funcionários</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="pesquisa" value="<?php echo $pesquisa; ?>" />
      <label>Nome do funcionário</label>
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
      <input id="3" type="radio" name="radio" value="data_nascimento" <?php echo $radio == 'dataDeAdmissao' ? 'checked ' : ' '; ?>/>
      <label for="3">Salário</label>
    </div>
    <div class="radio radio-inline">
      <input id="4" type="radio" name="radio" value="dataDeAdmissao" <?php echo $radio == 'dataDeAdmissao' ? 'checked ' : ' '; ?>/>
      <label for="4">Data de Admissão</label>
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
        <th scope="col">Salário</th>
        <th scope="col">Data de Admissão</th>
      </thead>
      <?php 
        if ($radio == 'codigo') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio.' = '. $pesquisa. ' order by '.$radio;
          }
          $sql = 'select * from '. $tb_funcionario. $pesquisa;
        } elseif ($radio == 'nome') {
          $sql = 'select * from '. $tb_funcionario. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'salario') {
          $sql = 'select * from '. $tb_funcionario. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'dataDeAdmissao') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio." = '". $pesquisa. "' order by ".$radio;
          }
          $sql = 'select * from '. $tb_funcionario. $pesquisa;
        }
        $resultado = mysqli_query($conexao, $sql);
        while ($row = mysqli_fetch_array($resultado)) {
          echo '<tr>';
          echo '<td>'. $row['codigo']. '</td>';
          echo '<td>'. $row['nome']. '</td>';
          echo '<td> R$ '. $row['salario']. '</td>';
          echo '<td>'. $row['dataDeAdmissao']. '</td>';
          echo '</tr>';
        }
      ?>
    </table>
</body>

</html>
