<?php
class predio {

    private $codigo;
    private $nome;
    private $numeroSalas;
    private $numeroAndares;

    public function setCodigo($codigo) {
        if ($codigo > 0) {
            $this->codigo = $codigo;
        }
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setNome($nome) {
        if (strlen($nome) > 1) {
            $this->nome = $nome;
        }
    }

    public function getNome() {
        return $this->nome;
    }

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

}
?>