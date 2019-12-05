<?php

include_once "abstractCodigoNome.class.php";

class pais extends nomeCodigo {

    private $sigla;
    private $continente;

    public function setSigla($sigla) {
        if (strlen($sigla) > 1) {
            $this->sigla = $sigla;
        }
    }

    public function getSigla() {
        return $this->sigla;
    }

    public function setContinente($continente) {
        if (strlen($continente) > 1) {
            $this->continente = $continente;
        }
    }

    public function getContinente() {
        return $this->continente;
    }


    public function __toString() {
        return parent::__toString(). " | Sigla: ". $this->sigla. " | Continente: ". $this->continente;
    }

}
?>
