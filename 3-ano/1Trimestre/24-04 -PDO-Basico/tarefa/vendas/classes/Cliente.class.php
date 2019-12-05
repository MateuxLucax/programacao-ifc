<?php

require_once "autoload.php";

class Cliente extends AbsClassCodigoNome{


    private $CPF, $RG, $fone, $email, $usuario, $senha, $endereco, $numero, $bairro, $cidade, $estado;

    public function getCPF(){
			return $this->CPF;
		}
		public function setCPF($CPF){
			$this->CPF = $CPF;
    }

    public function getRG(){
			return $this->RG;
		}
		
		public function setRG($RG){
			$this->RG = $RG;
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
    
    public function getEndereco(){
		return $this->endereco;
	}
	public function setEndereco($endereco){
		$this->endereco = $endereco;
    }
    
    public function getNumero(){
		return $this->numero;
	}
	public function setNumero($numero){
		$this->numero = $numero;
    }
    
    public function getBairro(){
		return $this->bairro;
	}
	public function setBairro($bairro){
		$this->bairro = $bairro;
    }
    
    public function getCidade(){
		return $this->cidade;
	}
	public function setCidade($cidade){
		$this->cidade = $cidade;
    }
    
    public function getEstado(){
		return $this->estado;
	}
	public function setEstado($estado){
		$this->estado = $estado;
    }
    


	public function __toString(){
        return parent::__toString()." | CPF: ".$this->CPF.
                                    " | RG: ".$this->RG.
                                    " | Fone: ".$this->fone.
                                    " | Email: ".$this->email.
                                    " | Usuario: ".$this->usuario.
                                    " | Senha: ".$this->senha.
                                    " | Endereço: ".$this->endereco.
                                    " | Número: ".$this->numero.
                                    " | Cidade: ".$this->cidade.
                                    " | Bairro: ".$this->bairro.
                                    " | Estado: ".$this->estado;
	}

}
?>