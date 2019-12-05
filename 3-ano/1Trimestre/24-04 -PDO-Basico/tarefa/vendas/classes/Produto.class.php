<?php

require_once "autoload.php";

class Produto extends AbsClassCodigoDescricao {

	private $preco, $estoque, $imagem;

	public function getPreco() {
		return $this->preco;
	}
	public function setPreco($preco) {
		$this->preco = $preco;
	}

	public function getEstoque() {
		return $this->estoque;
	}
	public function setEstoque($estoque) {
		$this->estoque = $estoque;
	}

	public function getImagem() {
		return $this->imagem;
	}
	public function setImagem($imagem) {
		$this->imagem = $imagem;
	}

	public function __toString() {
		return parent::__toString()." | Preço: ".$this->preco.
		" | Estoque: ".$this->estoque.
		" | Imagem ".$this->imagem;
	}

}
?>
