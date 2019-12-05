
<?php

require_once "autoload.php";

class Vendedor extends AbsClassCodigoNome{

    private $usuario, $senha;
    
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
    
	public function __toString(){
        return parent::__toString()." | Usuario: ".$this->usuario.
                                    " | Senha: ".$this->senha;
	}

}
?>