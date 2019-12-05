<?php

include_once "abstractCodigoNome.class.php";

class predio extends nomeCodigo {

    private $numeroSalas;
    private $numeroAndares;

    public function setNumeroSalas($numeroSalas) {
        if ($numeroSalas > 0) {
            $this->numeroSalas = $numeroSalas;
        }
    }

    public function getNumeroSalas() {
        return $this->numeroSalas;
    }

    public function setNumeroAndares($numeroAndares) {
        if ($numeroAndares > 0) {
            $this->numeroAndares = $numeroAndares;
        }
    }

    public function getNumeroAndares() {
        return $this->numeroAndares;
    }

    public function __toString() {
        return parent::__toString(). " | Numero de Salas: ". $this->numeroSalas. " | Numero de Andares: ". $this->numeroAndares;
    }

}
?>
