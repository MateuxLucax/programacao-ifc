<?php
class jogador {

    private $codigo;
    private $nome;
    private $time;
    private $posicao;
    private $numeroGols;

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

    public function setTime($time) {
        if (strlen($time) > 1) {
            $this->time = $time;
        }
    }

    public function getTime() {
        return $this->time;
    }

    public function setPosicao($posicao) {
        if (strlen($posicao) > 1) {
            $this->posicao = $posicao;
        }
    }

    public function getPosicao() {
        return $this->posicao;
    }

    public function setNumeroGols($numeroGols) {
        if ($numeroGols > 0) {
            $this->numeroGols = $numeroGols;
        }
    }

    public function getNumeroGols() {
        return $this->numeroGols;
    }

}
?>