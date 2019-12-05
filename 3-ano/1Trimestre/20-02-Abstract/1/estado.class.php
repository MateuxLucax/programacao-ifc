<?php

include_once "abstractCodigoNome.class.php";

class estado extends nomeCodigo {

    private $sigla;

    public function setSigla($sigla) {
        if (strlen($sigla) > 1) {
            $this->sigla = $sigla;
        }
    }

    public function getSigla() {
        return $this->sigla;
    }

    public function __toString() {
        return parent::__toString(). " | Sigla : ". $this->sigla;
    }

}

?>
