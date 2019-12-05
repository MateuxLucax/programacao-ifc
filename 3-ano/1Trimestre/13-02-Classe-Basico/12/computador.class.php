<?php
class computador {

    private $codigo;
    private $fabricante;
    private $processador;
    private $memoria;
    private $hd;

    public function setCodigo($codigo) {
        if ($codigo > 0) {
            $this->codigo = $codigo;
        }
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setFabricante($fabricante) {
        if (strlen($fabricante) > 1) {
            $this->fabricante = $fabricante;
        }
    }

    public function getFabricante() {
        return $this->fabricante;
    }

    public function setProcessador($processador) {
        if (strlen($processador) > 1) {
            $this->processador = $processador;
        }
    }

    public function getProcessador() {
        return $this->processador;
    }

    public function setMemoria($memoria) {
        if ($memoria > 0) {
            $this->memoria = $memoria;
        }
    }

    public function getMemoria() {
        return $this->memoria;
    }

    public function setHd($hd) {
        if ($hd > 0) {
            $this->hd = $hd;
        }
    }

    public function getHd() {
        return $this->hd;
    }

}
?>