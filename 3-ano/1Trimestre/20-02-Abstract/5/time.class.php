<?php

include_once "abstractCodigoNome.class.php";

class time extends nomeCodigo {

    private $numeroTorcedores;
    private $cidade;

    public function setNumeroTorcedores($numeroTorcedores) {
        if ($numeroTorcedores > 0) {
            $this->numeroTorcedores = $numeroTorcedores;
        }
    }

    public function getNumeroTorcedores() {
        return $this->numeroTorcedores;
    }

    public function setCidade($cidade) {
        if (strlen($cidade) > 1) {
            $this->cidade = $cidade;
        }
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function __toString() {
        return parent::__toString(). " | Numero de Torcedores: ". $this->numeroTorcedores. " | Cidade: ". $this->cidade;
    }

}
?>
