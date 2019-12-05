<?php

require_once "autoload.php";

abstract class Animal implements IComunicar{

    private $tipo;

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function comunicar() {
        return "";
    }

    public function __toString() {
        return "Tipo: ". $this->tipo.
               "<br/>Comunicar: ". $this->comunicar();
    }

}

?>