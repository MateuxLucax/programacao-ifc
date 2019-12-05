<?php

require_once "autoload.php";

class Cliente extends AbsClassCodigoNome{

	private $nome, $fone, $email;
    
  public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
  }
    
  public function getFone(){
		return $this->fone;
	}
	public function setFone($fone){
		$this->fone = $fone;
  }

  public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
  }

	public function __toString(){
        return parent::__toString()." | Nome: ".$this->nome.
                                    " | Email: ".$this->email.
                                    " | Fone: ".$this->fone;
	}
}


?>