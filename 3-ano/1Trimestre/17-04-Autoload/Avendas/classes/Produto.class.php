<?php

include_once "autoload.php";

class Produto extends AbsClassCodigoDescricao {
    
    private $preco, $codigoDeBarra, $marca;

    function __construct() {
        $marca = new Marca;
    }

    public function setProduto($prod) {
        $this->setCodigo($prdo->getCodigo());
        $this->setDescricao($prdo->getDescricao());
        $this->setCodigoDeBarra($prdo->getCodigoDeBarra());
        $this->setPreco($prdo->getPreco());
        $this->setMarca($prdo->getMarca());
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getMarca() {
        if ($marca instanceof Marca)
            return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getCodigoDeBarra() {
        return $this->codigoDeBarra;
    }

    public function setcodigoDeBarra($codigoDeBarra) {
        $this->codigoDeBarra = $codigoDeBarra;
    }

    public function __toString() {
        return parent::__toString().
            " | Preço: ". $this->preco.
            " | Código de barras: ". $this->codigoDeBarra.
            " | #Marca# ". $this->marca->__toString();
    }

}

?>