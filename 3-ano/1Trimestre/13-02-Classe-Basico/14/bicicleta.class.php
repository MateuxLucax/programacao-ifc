<?php
class bicicleta {

    private $codigo;
    private $fabricante;
    private $numeroMarchas;
    private $formacaoQuadro;

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

    public function setNumeroMarchas($numeroMarchas) {
        if ($numeroMarchas > 0) {
            $this->numeroMarchas = $numeroMarchas;
        }
    }

    public function getNumeroMarchas() {
        return $this->numeroMarchas;
    }

    public function setFormacaoQuadro($formacaoQuadro) {
        if (strlen($formacaoQuadro) > 1) {
            $this->formacaoQuadro = $formacaoQuadro;
        }
    }

    public function getFormacaoQuadro() {
        return $this->formacaoQuadro;
    }

}
?>