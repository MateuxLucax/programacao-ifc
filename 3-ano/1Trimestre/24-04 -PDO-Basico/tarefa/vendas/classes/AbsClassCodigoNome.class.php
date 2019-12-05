<?php

require_once "autoload.php";

abstract class AbsClassCodigoNome extends AbsClassCodigo{

	private $nome;

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function __toString(){
		return parent::__toString()." | Nome: ".$this->nome;
	}

}
?>