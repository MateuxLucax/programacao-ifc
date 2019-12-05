<?php 
	function funcaoExercicio1($quantidadeDeNumeros) {
		echo "<ul>";
		for ($i = 1; $i <= $quantidadeDeNumeros; $i++) {
			echo "<li>";
			for ($j = 1; $j <= $i; $j++) { 
				echo $i." ";
			}
			echo "</li>";
		}
		echo "</ul>";
	}

	function funcaoExercicio2($quantidadeDeNumeros) {
		echo "<ul>";
		for ($i = 1; $i <= $quantidadeDeNumeros ; $i++) {
	    	echo "<li>";
	    	for ($j = 1; $j <= $i ; $j++) {
	        	echo $j." ";
	      	}
	     echo "</li>";
	  	}
		echo "</ul>";
	}

	function funcaoExercicio3($n1, $n2, $n3) {
		return $n1 + $n2 + $n3;
	}

	function funcaoExercicio4($valor) {
		if ($valor > 0) {
			return "P";
		} elseif ($valor < 0) {
			return "N";
		}
	}

	function somaImposto($custo, $taxaImposto) {
		$taxa = 1 + ($taxaImposto / 100);
		$somaImposto = $custo * $taxa;
		echo "<h5>Preço com Imposto: ".$somaImposto."</h5>";
	}

	function funcaoExercicio6A($hora) {
		if ($hora > 12) {
			$tempo = "P";
		} elseif ($hora <= 12) {
			$tempo = "A";
		}
		return $tempo;
	}

	function funcaoExercicio6B($tempo, $hora) {
		if ($tempo == "P") {
			$hora -= 12;
			echo number_format($hora, 2, ":", "")." P.M.";
		} else {
			echo number_format($hora, 2, ":", "")." A.M.";
		}
	}

	function funcaoExercicio7($valor, $dias) {
		if ($dias > 0) {
			$valor += ($valor * 0.03);
			for ($i = 1; $i <= $dias ; $i++) {
			  $valor += ($valor * 0.01);
			}
			return $valor;
      	} else {
      		return $valor;
      	}
	}

	function funcaoExercicio8($numero) {
		return strlen($numero);
	}

	function funcaoExercicio9($numero) {
		echo $numero. " -> ";
		$cont = strlen($numero);
		for($i = 0; $i < $cont; $i++) {
		   	$numeros[$i] = $numero % 10;
		   	$numero /= 10;
			echo $numeros[$i];
		}
	}

	function funcaoExercicio10A() {
      $dado1 = rand(1, 6);
      $dado2 = rand(1, 6);
      return $dado1 + $dado2;
  	}
  	function funcaoExercicio10B($valor) {
      switch ($valor) {
      	case 7:
      	case 11:
        	return "Você ganhou, pois tirou $valor";
        	break;
      	case 12:
      	case 2:
      	case 3:
        	return "Você perdeu, pois tirou $valor";
        	break;
      	default:
          	return $valor;
        break;
    	}
  	}	
  	function Exercicio10C($dado, $valor) {
      	if ($dado == 7) {
          	echo "Você perdeu pois você tirou 7";
      	} elseif ($dado == $valor) {
          	echo "Você ganhou pois você tirou seu ponto novamente";
      	} else {
          	echo "Jogue de novo, pois você tirou $dado e esse não é seu ponto";
      	}
  	}

	function funcaoExercicio11($data) {
		$meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
		$dataNova = explode("/", $data);
		if ($dataNova[1] == '01') {
			if ($dataNova[0] >= 1 && $dataNova[0] <= 31) {
				$dataNova[1] = $meses[0];
			} else {
				$dataNova[0] = 'NULL';
			}
		} elseif ($dataNova[1] == '02') {
			if ($dataNova[0] >= 1 && $dataNova[0] <= 28) {
				$dataNova[1] = $meses[1];
			} else {
				$dataNova[0] = 'NULL';
			}
		} elseif ($dataNova[1] == '03') {
			if ($dataNova[0] >= 1 && $dataNova[0] <= 31) {
				$dataNova[1] = $meses[2];
			} else {
				$dataNova[0] = 'NULL';
			}
		} elseif ($dataNova[1] == '04') {
			if ($dataNova[0] >= 1 && $dataNova[0]<= 30) {
				$dataNova[1] = $meses[3];
			} else {
				$dataNova[0] = 'NULL';
			}
		} elseif ($dataNova[1] == '05') {
			if ($dataNova[0] >= 1 && $dataNova[0] <= 31) {
				$dataNova[1] = $meses[4];
			} else {
				$dataNova[0] = 'NULL';
			}
		} elseif ($dataNova[1] == '06') {
			if ($dataNova[0] >= 1 && $dataNova[0] <= 30) {
				$dataNova[1] = $meses[5];
			} else {
				$dataNova[0] = 'NULL';
			}
		} elseif ($dataNova[1] == '07') {
			if ($dataNova[0] >= 1 && $dataNova[0] <= 31) {
				$dataNova[1] = $meses[6];
			} else {
				$dataNova[0] = 'NULL';
			}
		} elseif ($dataNova[1] == '08') {
			if ($dataNova[0] >= 1 && $dataNova[0] <= 30) {
				$dataNova[1] = $meses[7];
			} else {
				$dataNova[0] = 'NULL';
			}
		} elseif ($dataNova[1] == '09') {
			if ($dataNova[0] >= 1 && $dataNova[0] <= 31) {
				$dataNova[1] = $meses[8];
			} else {
				$dataNova[0] = 'NULL';
			}
		} elseif ($dataNova[1] == '10') {
			if ($dataNova[0] >= 1 && $dataNova[0] <= 30) {
				$dataNova[1] = $meses[9];
			} else {
				$dataNova[0] = 'NULL';
			}
		} elseif ($dataNova[1] == '11') {
			if ($dataNova[0] >= 1 && $dataNova[0] <= 31) {
				$dataNova[1] = $meses[10];
			} else {
				$dataNova[0] = 'NULL';
			}
		} elseif ($dataNova[1] == '12') {
			if ($dataNova[0] >= 1 && $dataNova[0] <= 30) {
				$dataNova[1] = $meses[11];
			} else {
				$dataNova[0] = 'NULL';
			}
		} else {
			$dataNova[1] = 'NULL';
			if ($dataNova[0] <= 1 || $dataNova >= 31) {
				$dataNova[0] = 'NULL';
			}
		}
		return $dataNova[0]." de ".$dataNova[1]." de ".$dataNova[2];
	}

	function funcaoExercicio12($palavra) {
		return str_shuffle($palavra);
	}

	function funcaoExercicio13($linhas, $colunas) {
        if ($linhas < 1 || $colunas > 20) {
        	echo "Valores Inválidos";
        } else {
	        for ($i = 1; $i <= $linhas; $i++) { 
	        	if ($i == 1 || $i == $linhas) {
					for ($j = 1; $j <= $colunas; $j++) { 
						if ($j == 1 || $j == $colunas) {
						  echo "+";
						} else {
						  echo "-";
						}
					}
					echo "\n<br />";
				} else {
					for ($j = 1; $j <= $colunas; $j++) { 
						if ($j == 1 || $j == $colunas) {
							echo " | ";
						} else {
						    echo "-";
						}
					}
					echo "\n<br />";
				}
			}
        }
    }
?>