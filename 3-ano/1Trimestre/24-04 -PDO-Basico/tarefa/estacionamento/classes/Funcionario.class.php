<?php

require_once "autoload.php";

class Funcionario extends AbsClassCodigoNome{

	private $email, $usuario, $senha, $tipoUsuario;
		
	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}
    
  public function getUsuario(){
		return $this->usuario;
	}
	public function setUsuario($usuario){
		$this->usuario = $usuario;
  }
    
    public function getSenha(){
		return $this->senha;
	}
	public function setSenha($senha){
		$this->senha = $senha;
    }

 
		public function getTipoUsuario(){
			return $this->tipoUsuario;
		}
		public function setTipoUsuario($tipoUsuario){
			$this->tipoUsuario = $tipoUsuario;
		}
		
	public function __toString(){
				return parent::__toString()." | Email: ".$this->email.
																		" | Usuario: ".$this->usuario.
																		" | Senha: ".$this->senha.
																		" | Tipo Usuário: ".$this->tipoUsuario;
	}

}
?>