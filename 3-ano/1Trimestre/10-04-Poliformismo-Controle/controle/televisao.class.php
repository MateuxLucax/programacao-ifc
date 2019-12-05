<?php 

include_once "controle.inter.php";

class Televisao  implements Controle {
    
    private $estado, $canal, $volume;

    public function setEstado($valor) {
        $this->estado = $valor;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setCanal($valor) {
        $this->canal = $valor;
    }

    public function getCanal() {
        return $this->canal;
    }
    
    public function setVolume($valor) {
        $this->volume = $valor;
    }

    public function getVolume() {
        return $this->volume;
    }

    public function ligarDesligar() {
        $this->estado = !$this->estado;
    }

    public function mudarCanal($canal) {
        $this->canal = $canal;
    }

    public function aumentarVolume() {
        $this->volume += 1;
    }

    public function diminuirVolume() {
        $this->volume -= 1;
    }

    public function aumentarCanal() {
        $this->canal += 1;
    }

    public function diminuirCanal() {
        $this->canal -= 1;
    }

    public function __toString() {
        $ligado = $this->estado == true ? "Ligada" : "Desligada";
        return "Estado: ". $ligado. "<br/>".
               "Canal: ". $this->canal. "<br/>".
               "Volume: ". $this->volume;
    }

}


?>