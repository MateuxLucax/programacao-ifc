<?php

class Quadrado {

    private $lado;

    public function getLado() {
        return $this->lado;
    }

    public function setLado($lado) {
        $this->lado = $lado;
    }
    
    public function calculaArea() {
        return $this->lado * $this->lado;
    }
    
    public function calculaPerimetro() {
        return $this->lado * 4;
    }
    
    public function corParaPintar() {
        if ($this->calculaArea() > 30) {
            return "Azul";
        } else {
            return "Rosa";
        }
    }

    public function __toString() {
        return "Lado: ". $this->lado. "<br/>
                Área: ". $this->calculaArea(). "<br/>
                Perímetro: ". $this->calculaPerimetro(). "<br/>
                Cor para pintar: ". $this->corParaPintar();
    }

}

?>