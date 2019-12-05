<!DOCTYPE html>
<?php
    include('_css/cursor.php');
    include 'connect/connect.php';
    $titulo = "Integração com BD";
    $busca = isset($_POST['busca'])?$_POST['busca']:"";
    $busca2 = isset($_POST['busca2'])?$_POST['busca2']:"";
    $botao = isset($_POST['botao'])?$_POST['botao']:0;
    $soma = 0;
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
        <input type="text" name="busca" value="<?php echo $busca ?>" placeholder="Incial">
        <input type="text" name="busca2" value="<?php echo $busca2 ?>" placeholder=" Final"><br>
        <select class="" name="botao">
          <option value="valor" <?php if ($botao == 'valor'): echo "selected"; ?><?php endif; ?>>Valor</option>
          <option value="dataC" <?php if ($botao == 'dataC'): echo "selected"; ?>

          <?php endif; ?>>Data de Consulta</option>
        </select><br>
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
        if ($botao == 'valor') {
            $sql = 'SELECT * FROM '. $tb_consulta. " WHERE ".$botao." >= ".$busca." and ".$botao." <= ".$busca2." ORDER BY ".$botao;
        } elseif ($botao == 'dataC') {
            $busca = str_replace("/", "-", $busca);
            $busca2 = str_replace("/", "-", $busca2);
            $sql = 'SELECT * FROM '. $tb_consulta. " WHERE ".$botao." >= '".date("Y-m-d", strtotime($busca))."' and ".$botao." <= '".date("Y-m-d", strtotime($busca2))."' ORDER BY ".$botao;
        }
    } 
        $resultado = mysqli_query($conexao, $sql);
        while ($row = mysqli_fetch_array($resultado)) {
            $soma += $row[5];
            echo "<tr><td>".$row[0]."</td><td>". $row[1] ."</td><td>".$row[2]."</td><td>".date('d/m/Y', strtotime($row[3]))."</td><td>".$row[4]."</td><td>".$row[5]."</td><td><a href =javascript:excluirRegistro('acao.php?acao=excluir&codigo=$row[0]&tabela=$tb_consulta&pagina=ConsultasA.php') class = 'errado'>Excluir</a></td></tr>";
        }
       ?>
       <tr>
         <td colspan="5">-</td>
         <td><?php echo "$soma";?></td>
       </tr>

       <a href="Consultas.php">Simples</a>
		</div>
	</center>
</body>
</html>
