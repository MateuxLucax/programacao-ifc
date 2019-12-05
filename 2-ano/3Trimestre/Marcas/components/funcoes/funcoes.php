<?php
	include 'connect.php';

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
			if ($contexto == $tupla['codigo']) {
				$aux = ' selected';
			}
			echo '<option value="', $tupla[$valor],'" ', $aux,'>', $tupla[$descricao], '</option>';
		}
		echo '</select>';
	}
?>
