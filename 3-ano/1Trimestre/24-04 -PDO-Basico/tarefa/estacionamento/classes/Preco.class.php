<?php

require_once "autoload.php";

class Preco extends AbsClassCodigo {

	private $valorHora, $data;
	
	public function getValorHora() {
		return $this->valorHora;
	}
	public function setValorHora($valorHora) {
		$this->valorHora = $valorHora;
	}

	public function getData() {
		return $this->data;
	}
	public function setData($data) {
		$this->data = $data;
	}

	public function __toString() {
		return parent::__toString()." | Preço: ".$this->valorHora.
		" | Data: ".$this->data;
	}

}
?>
