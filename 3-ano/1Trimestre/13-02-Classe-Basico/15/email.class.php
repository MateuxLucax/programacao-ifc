<?php
class email {

    private $codigo;
    private $origem;
    private $destino;
    private $assunto;
    private $data;

    public function setCodigo($codigo) {
        if ($codigo > 0) {
            $this->codigo = $codigo;
        }
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setOrigem($origem) {
        if (strlen($origem) > 1) {
            $this->origem = $origem;
        }
    }

    public function getOrigem() {
        return $this->origem;
    }

    public function setDestino($destino) {
        if (strlen($destino) > 1) {
            $this->destino = $destino;
        }
    }

    public function getDestino() {
        return $this->destino;
    }

    public function setAssunto($assunto) {
        if (strlen($assunto) > 1) {
            $this->assunto = $assunto;
        }
    }

    public function getAssunto() {
        return $this->assunto;
    }

    public function setData($data) {
        if (strlen($data) >= 10) {
            $this->data = $data;
        }
    }

    public function getData() {
        return $this->data;
    }

}
?>