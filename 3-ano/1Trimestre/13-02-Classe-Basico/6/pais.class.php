<?php
class pais {

    private $codigo;
    private $nome;
    private $sigla;
    private $continente;

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

}
?>