<?php

require_once "autoload.php";

class EntradaSaida extends AbsClassCodigo {

	private $dataEntrada, $dataSaida, $preco, $funcionario, $vaga, $veiculo;

	public function getDataEntrada() {
		return $this->dataEntrada;
	}
	public function setDataEntrada($dataEntrada) {
		$this->dataEntrada = $dataEntrada;
	}

	public function getDataSaida() {
		return $this->dataSaida;
	}
	public function setDataSaida($dataSaida) {
		$this->dataSaida = $dataSaida;
	}

	public function getVeiculo() {
		return $this->veiculo;
	}
	public function setVeiculo($veiculo) {
		if ($veiculo instanceof Veiculo) {
			$this->veiculo = $veiculo;
		}
  }

	public function getFuncionario() {
		return $this->funcionario;
	}
	public function setFuncionario($funcionario) {
		$this->funcionario = $funcionario;
	}

	public function getPreco() {
		return $this->preco;
	}
	public function setPreco($preco) {
		if ($preco instanceof Preco) {
			$this->preco = $preco;
		}
  }
    
    public function getVaga() {
		return $this->vaga;
	}
	public function setVaga($vaga) {
		if ($vaga instanceof Vaga) {
			$this->vaga = $vaga;
		}
	}

	public function __toString() {
		return parent::__toString()." | Entrada: ".$this->dataEntrada.
																" | Saida: ".$this->dataSaida.
																" | #Preco# ".$this->preco.
																" | #Veiculo# ".$this->veiculo.
																" | #Funcionario# ".$this->funcionario.
																" | #Vaga# ".$this->vaga;
	}
}




?>
