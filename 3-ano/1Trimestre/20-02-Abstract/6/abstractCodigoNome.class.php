<?php

include_once "abstractCodigo.class.php";

abstract class nomeCodigo extends codigo {

    private $nome;

    public function setNome($nome) {
        if (strlen($nome) > 1) {
            $this->nome = $nome;
        }
    }

    public function getNome() {
        return $this->nome;
    }

    public function __toString() {
        return parent::__toString(). " | Nome : ". $this->nome;
    }

}

?>
