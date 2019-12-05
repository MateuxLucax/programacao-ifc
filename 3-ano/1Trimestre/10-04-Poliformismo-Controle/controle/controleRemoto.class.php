<?php

include_once "controle.inter.php";

class ControleRemoto implements Controle {

    private $tv;

    public function ControleRemoto($tv) {
        $this->tv = $tv;
    }

    public function setTv($tv) {
        $this->tv = $tv;
    }

    public function getTv() {
        return $this->tv;
    }

    public function ligarDesligar() {
        $this->tv->setEstado(!$this->tv->getEstado());
    }

    public function mudarCanal($canal) {
        $this->tv->setCanal($canal);
    }

    public function aumentarVolume() {
        $this->tv->setVolume($this->tv->getVolume() + 5);
    }

    public function diminuirVolume() {
        $this->tv->setVolume($this->tv->getVolume() - 5);
    }

    public function aumentarCanal() {
        $this->tv-setCanal($this->tv->getCanal() + 1);
    }

    public function diminuirCanal() {
        $this->tv->setCanal($this->tv->getCanal() - 1);
    }

    public function __toString() {
        return $this->tv->__toString();
    }

}

?>