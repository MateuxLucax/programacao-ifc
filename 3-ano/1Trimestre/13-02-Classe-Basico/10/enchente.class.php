<?php
class enchente {

    private $codigo;
    private $data;
    private $nivelRio;

    public function setCodigo($codigo) {
        if ($codigo > 0) {
            $this->codigo = $codigo;
        }
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setData($data) {
        if (strlen($data) >= 10) {
            $this->data = $data;
        }
    }

    public function getData() {
        return $this->data;
    }

    public function setNivelRio($nivelRio) {
        if ($nivelRio > 0) {
            $this->nivelRio = $nivelRio;
        }
    }

    public function getNivelRio() {
        return $this->nivelRio;
    }

}
?>