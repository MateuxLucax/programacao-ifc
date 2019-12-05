<?php

include_once "abstractCodigoNome.class.php";

class jogador extends nomeCodigo {

    private $time;
    private $posicao;
    private $numeroGols;

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

    public function __toString() {
        return parent::__toString(). " | Time: ". $this->time. " | Posição: ". $this->posicao. " | Numero de Gols: ". $this->numeroGols;
    }

}
?>
