<?php

require_once "autoload.php";

class Veiculo extends AbsClassCodigo {

	private $placa, $cliente, $modelo, $cor;

	public function getPlaca() {
		return $this->placa;
	}
	public function setPlaca($placa) {
		$this->placa = $placa;
	}


	public function getCliente() {
		return $this->cliente;
	}
	public function setCliente($cliente) {
		if ($cliente instanceof Cliente) {
			$this->cliente = $cliente;
		}
	}

	public function getModelo() {
		return $this->modelo;
	}
	public function setModelo($modelo) {
		if ($modelo instanceof Modelo) {
			$this->modelo = $modelo;
		}
    }
    
    public function getCor() {
		return $this->cor;
	}
	public function setCor($cor) {
		if ($cor instanceof Cor) {
			$this->cor = $cor;
		}
	}

	public function __toString() {
		return parent::__toString()." Placa: ".$this->placa.
																" | #Cliente# ".$this->cliente.
																" | #Cor# ".$this->cor.
																" | #Modelo# ".$this->modelo;
	}
}




?>
