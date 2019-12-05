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
		$sql = 'SELECT * FROM '. $tabela. ' ORDER BY '.$descricao;
		$resultado = mysqli_query($GLOBALS['conexao'], $sql);
		echo '<select name="', $nomeSelect,'">';
		while ($tupla = mysqli_fetch_array($resultado)) {
			$aux = '';
			if ($contexto == $tupla['codigo']) {
				$aux = ' selected';
			}
			echo '<option value="', $tupla[$valor],'" ', $aux,'>', $tupla[$descricao], '</option>';
		}
		echo '</select>';
	}

	function Query1paraN($tabela, $codigo, $coluna, $descricao) {
		$query = 'SELECT * FROM '. $tabela.' WHERE '. $coluna.' = '. $codigo;
		$resultadoB = mysqli_query($GLOBALS['conexao'], $query);
		while ($row = mysqli_fetch_array($resultadoB)) {
			echo $row[$descricao];
		}
	}
?>
