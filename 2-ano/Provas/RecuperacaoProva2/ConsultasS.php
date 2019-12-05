<!DOCTYPE html>
<?php
    include('_css/cursor.php');
    include 'connect/connect.php';
    $titulo = "Integração com BD";
    $busca = isset($_POST['busca'])?$_POST['busca']:"";
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
        <select name="busca">
          <option value="Social"  <?php if ($busca == 'Social'): echo "selected"; ?><?php endif; ?>>Social</option>
          <option value="Plano de Saude"  <?php if ($busca == 'Plano de Saude'): echo "selected"; ?><?php endif; ?>>Plano de Saúde</option>
          <option value="SUS"  <?php if ($busca == 'SUS'): echo "selected"; ?><?php endif; ?>>SUS</option>
          <option value="Particular"  <?php if ($busca == 'Particular'): echo "selected"; ?><?php endif; ?>>Particular</option>
        </select>
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
            $sql = 'SELECT * FROM '. $tb_consulta. " WHERE tipo = '".$busca."'";
    }
    $resultado = mysqli_query($conexao, $sql);
        while ($row = mysqli_fetch_array($resultado)) {
            echo "<tr><td>".$row[0]."</td><td>". $row[1] ."</td><td>".$row[2]."</td><td>".date('d/m/Y', strtotime($row[3]))."</td><td>".$row[4]."</td><td>".$row[5]."</td><td><a href =javascript:excluirRegistro('acao.php?acao=excluir&codigo=$row[0]&tabela=$tb_consulta&pagina=ConsultasS.php') class = 'errado'>Excluir</a></td></tr>";
        }
       ?>
       <a href="Consultas.php">Simples</a>
       </table>

		</div>
	</center>
</body>
</html>
