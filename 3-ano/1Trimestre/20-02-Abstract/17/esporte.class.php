<?php

include_once "abstractCodigoNome.class.php";

class esporte extends nomeCodigo {

    private $numeroPraticantes;

    public function setNumeroPraticantes($numeroPraticantes) {
        if ($numeroPraticantes > 0) {
            $this->numeroPraticantes = $numeroPraticantes;
        }
    }

    public function getNumeroPraticantes() {
        return $this->numeroPraticantes;
    }

    public function __toString() {
        return parent::__toString(). " | Numero de Praticantes: ". $this->numeroPraticantes;
    }

}
?>
