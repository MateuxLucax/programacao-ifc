<?php

abstract class AbsClassCodigo{
	
	private $codigo;

	public function getCodigo(){
		return $this->codigo;
	}

	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}

	function __toString(){
		return "Código: ".$this->codigo;
	}
	
}
?>