<?php

include_once "autoload.php";

abstract class AbsClassCodigoDescricao extends AbsClassCodigo {
    
    private $descricao;

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function __toString() {
        return parent::__toString(). " | Descrição: ". $this->descricao;
    }

}

?>
