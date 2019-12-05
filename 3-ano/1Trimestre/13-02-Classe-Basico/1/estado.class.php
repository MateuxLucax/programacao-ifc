<?php

class estado {
    private $codigo;
    private $nome;
    private $sigla;

    public function setCodigo($codigo) {
        if ($codigo >= 0) {
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

    public function setSigla($sigla) {
        if (strlen($sigla) > 1) {
            $this->sigla = $sigla;
        }
    }

    public function getSigla() {
        return $this->sigla;
    }

}

?>
