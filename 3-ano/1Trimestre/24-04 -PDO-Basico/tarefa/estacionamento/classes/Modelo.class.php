<?php

require_once "autoload.php";

class Modelo extends AbsClassCodigoDescricao {

	private $marca;

	function __construct() {
		$marca = new Marca;
	}

	public function setModelo($marca) {
		$this->setCodigo($marca->getCodigo());
		$this->setDescricao($marca->getDescricao());
  	}
     
	public function getMarca() {
		return $this->marca;
	}

	public function setMarca($marca) {
		if ($marca instanceof Marca) {
			$this->marca = $marca;
		}
  	}
    
	public function __toString() {
		return parent::__toString()." | #Marca# ".$this->marca;
	}
}




?>
