<!DOCTYPE html>
<?php
    include('_css/cursor.php');
    include 'connect/connect.php';
    $titulo = "Integração com BD";
    $busca = isset($_POST['busca'])?$_POST['busca']:"";
    $botao = isset($_POST['botao'])?$_POST['botao']:0;
?>
<html>
<head>
	<title><?php echo $titulo ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<link rel="icon" type="x-icon" href="img/icon1.png">
  <style media="screen">
    table{
      border: 1px solid black;
    }
    .oi{
      border-right: 1px solid black;
    }
    tr:nth-child(even){
      background-color: darkgray;
    }
    tr:hover{
      background-color: gray;
    }
  </style>
  <script>
		function excluirRegistro(url){
			if (confirm("Confirmar exclusão?")) {
				location.href = url ;
			}
		}
	</script>
</head>
<body>
	<center>
		<div class="php">
      <h1>Banco de Dados de Consultas</h1>
      <hr>
      <form method="post">
        <label for="busca">Pesquise:</label><br>
        <input type="text" name="busca" value="<?php echo $busca ?>"><br>
        <input type="radio" name="botao" value="codigo" <?php if ($botao == 'codigo'): echo "checked"; ?>
        <?php endif; ?>>Código
        <input type="radio" name="botao" value="paciente" <?php if ($botao == 'paciente'): echo "checked"?>
        <?php endif; ?>>Paciente
        <input type="radio" name="botao" value="dataC" <?php if ($botao == 'dataC'):echo "checked" ?>
        <?php endif; ?>>Data da Consulta
        <br>
        <input type="submit" name="" value="Enviar" class="button">
      </form>
      <table>
        <tr>
          <th>Código</th>
          <th>Paciente</th>
          <th>Médico</th>
          <th>Data Consulta</th>
          <th>Tipo</th>
          <th>Valor</th>
          <th>Excluir</th>
        </tr>
    <?php
    if ($busca == '') {
        $sql = 'SELECT * FROM '. $tb_consulta;
    } else {
        if ($botao == 'codigo') {
            $sql = 'SELECT * FROM '. $tb_consulta. " WHERE ".$botao." = ".$busca." ORDER BY ".$botao;
        } elseif ($botao == 'dataC') {
            $busca = str_replace("/", "-", $busca);
            $sql = 'SELECT * FROM '. $tb_consulta. " WHERE ".$botao." = date('".date("Y-m-d", strtotime($busca))."') ORDER BY ".$botao;
        } elseif ($botao == 'paciente') {
            $sql = 'SELECT * FROM '. $tb_consulta. " WHERE ".$botao." LIKE '".$busca."%' ORDER BY ".$botao;
        }
    }
    $resultado = mysqli_query($conexao, $sql);
        while ($row = mysqli_fetch_array($resultado)) {
            echo "<tr><td>".$row[0]."</td><td>". $row[1] ."</td><td>".$row[2]."</td><td>".date('d/m/Y', strtotime($row[3]))."</td><td>".$row[4]."</td><td>".$row[5]."</td><td><a href =javascript:excluirRegistro('acao.php?acao=excluir&codigo=$row[0]&tabela=$tb_consulta&pagina=Consultas.php') class = 'errado'>Excluir</a></td></tr>";
        }
       ?>
       <a href="ConsultasS.php">Pesquisa de Tipos</a><br>
       <a href="ConsultasA.php">Pesquisa Avançada</a>
       </table>
		</div>
	</center>
</body>
</html>
