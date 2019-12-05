<?php

abstract class codigo {
    private $codigo;
    private $nome;
    private $sigla;

    public function setCodigo($codigo) {
        if ($codigo >= 0) {
            $this->codigo = $codigo;
        }
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function __toString() {
        return "Código : ". $this->codigo;
    }

}

?>
