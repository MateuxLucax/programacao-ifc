<?php 
	function checarData($x) {
	    return (date('d/m/Y', strtotime(str_replace("/", "-",  $x))) == $x);
	}

	function checarUsuario($x) {
        $busca = str_split($x);
		return $busca[0] == '@';
	}

	function converterData($x) {
		return date('d/m/Y', strtotime(str_replace("/", "-",  $x)));
	}

	function converterDataYmd($x) {
		return date('Y-m-d', strtotime(str_replace("/", "-",  $x)));
	}
?>