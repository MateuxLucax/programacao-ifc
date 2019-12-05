<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  require 'connect/connect.php';
  $busca = isset($_POST['busca'])?$_POST['busca']:'';
  $select = isset($_POST['select'])?$_POST['select']:'nenhum';
  $somaQuantidade = 0;
  $valorTotal = 0;
?>

<head>
  <meta charset="UTF-8" />
  <title>Prova 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Produtos</h5>
    <hr class="dividir" />
    <br />
  <div>
      <div class="input">
        <input type="text" name="busca" value="<?php echo $busca; ?>" />
        <label>Pesquisa</label>
      </div>
      <select name="select">
        <option value="nenhum" disabled <?php echo $select == 'nenhum' ? 'selected ' : ' '; ?>>Filtro de Pesquisa</option>
        <option value="codigo" <?php echo $select == 'codigo' ? 'selected ' : ' '; ?>>Código</option>
        <option value="descricao" <?php echo $select == 'descricao' ? 'selected ' : ' '; ?>>Descrição</option>
        <option value="dataVenda" <?php echo $select == 'dataVenda' ? 'selected ' : ' '; ?>>Data da Venda</option>
      </select>
  </div>
  <div class="input">
    <input type="submit" value="Enviar" />
    <input type="reset" value="Limpar" />
  </div>
  </form>
  <form>
  <br /><br /><br />
  <h5>Tabela</h5>
  <hr class="dividir" />
  </form>
  <div class="container">  
    <table>
      <thead>
        <th scope="col">Código</th>
        <th scope="col">Descrição</th>
        <th scope="col">Data da Venda</th>
        <th scope="col">Valor Unitário</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Valor Item</th>
      </thead>
      <tbody>
      <?php
        if ($select == 'nenhum') {
            if ($busca == '') {
                $busca = '';
            } else {
                $busca = ' where '. $select.' = '. $busca. ' order by '.$select;
            }
            $sql = 'select * from '. $tabela. $busca;
        } elseif ($select == 'codigo' or $select == 'nenhum') {
            if ($busca == '') {
                $busca = ' order by '. $select;
            } else {
                $busca = ' where '. $select.' = '. $busca. ' order by '.$select;
            }
            $sql = 'select * from '. $tabela. $busca;
        } elseif ($select == 'descricao') {
            $sql = 'select * from '. $tabela. ' where '. $select.' like "'. $busca. '%" order by '.$select;
        } elseif($select == 'dataVenda'){
          if ($busca == '') {
            $busca = ' order by '. $select;
          } else {
            $data = date('Y-m-d', strtotime(str_replace("/", "-",  $busca)));
            $busca = ' where '.$select.' like "'.$data .'%" order by '. $select;
          }
          $sql = 'select * from '. $tabela. $busca;
        }
        $resultado = mysqli_query($conexao, $sql);
        while ($row = mysqli_fetch_array($resultado)) { 
          $somaQuantidade += $row['quantidade'];
          $valorItem = $row['valorUnitario'] * $row['quantidade'];
          $valorTotal += $valorItem;
        ?>
        <tr>
            <td><?php echo $row['codigo']; ?></td>
            <td><?php echo $row['descricao']; ?></td>
            <td><?php echo date('d/m/Y', strtotime(str_replace("/","-", $row['dataVenda']))); ?></td>
            <td><?php echo number_format($row['valorUnitario'] ,2 ,',', '.'); ?></td>
            <td><?php echo $row['quantidade']; ?></td>
            <td><?php echo number_format($valorItem ,2 ,',', '.'); ?></td>
        </tr>
        <?php } ?>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><?php echo $somaQuantidade; ?></td>
          <td><?php echo number_format($valorTotal ,2 ,',', '.'); ?></td>
        </tr>
      </tbody>
    </table>
</body>

</html>
