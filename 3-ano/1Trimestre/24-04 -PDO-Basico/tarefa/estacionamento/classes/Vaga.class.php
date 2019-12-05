<?php

require_once "autoload.php";


class Vaga extends AbsClassCodigoDescricao{

    private $identificacao, $situacao;
		
	public function getIdentificacao(){
		return $this->identificacao;
	}
	public function setIdentificacao($identificacao){
		$this->identificacao = $identificacao;
    }
    
    public function getSituacao(){
		return $this->situacao;
	}
	public function setSituacao($situacao){
		$this->situacao = $situacao;
    }

    public function __toString(){
        return parent::__toString()." | Identificação: ".$this->identificacao.
                                    " | Situação: ".$this->situacao;
    }
}


?>