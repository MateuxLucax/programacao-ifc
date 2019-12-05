		<?php
	include 'connect/connect.php';

	function checarData($x) {
	    return (date('d/m/Y', strtotime(str_replace("/", "-",  $x))) == $x);
	}

	function converterData($x) {
		return date('d/m/Y', strtotime(str_replace("/", "-",  $x)));
	}

	function converterDataYmd($x) {
		return date('Y-m-d', strtotime(str_replace("/", "-",  $x)));
	}

	function geradorSelect($tabela, $contexto, $valor, $descricao, $nomeSelect) {
		$sql = 'select * from '. $tabela. ' order by '.$descricao;
		$resultado = mysqli_query($GLOBALS['conexao'], $sql);
		echo '<select name="', $nomeSelect,'">';
		while ($tupla = mysqli_fetch_array($resultado)) {
			$aux = '';
			if ($contexto == $tupla['cor']) {
				$aux = ' selected';
			}
			$cor = '';
			if ($tupla['excluir'] == false) {
				if ($tupla['cor'] != $coloracao) {
				echo '<option value="', $tupla[$valor],'" ', $aux,' style="color:'. $tupla['cor'].'">', $tupla[$descricao], '</option>';
				$coloracao = $tupla['cor'];
				}
			}
		}
		echo '</select>';
	}

	function Query1paraN($tabela, $codigo, $coluna, $tupla) {
		$query = 'select * from '. $tabela.' where '. $coluna.' = '. $codigo;
		$resultadoB = mysqli_query($GLOBALS['conexao'], $query);
		while ($row = mysqli_fetch_array($resultadoB)) {
			return $row[$tupla];
		}
	}
?>
