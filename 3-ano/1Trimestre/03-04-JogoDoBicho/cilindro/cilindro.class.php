<?php

class Cilindro {

    private $raio, $altura, $nivelSeguranca;

    private $pi = 3.14;

    public function setRaio($valorInserido) {
        $this->raio = $valorInserido;
    }

    public function getRaio() {
        return $this->raio;
    }

    public function setAltura($valorInserido) {
        $this->altura = $valorInserido;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setNivelSeguranca($valorInserido) {
        $this->nivelSeguranca = $valorInserido;
    }

    public function getNivelSeguranca() {
        return $this->nivelSeguranca;
    }

    public function precoLata() {
        if ($this->nivelSeguranca == 1) {
            return 342.49;
        } elseif ($this->nivelSeguranca == 2) {
            return 479.27;
        } elseif ($this->nivelSeguranca == 3) {
            return 623.54;
        } else {
            return 0;
        }
    }

    public function areaTampa() {
        return $this->pi * pow($this->raio, 2);
    }

    public function areaLateral() {
        return 2 * $this->pi * $this->raio;
    }

    public function areaCilindro() {
        return $this->altura * $this->areaLateral();
    } 

    public function areaTotal() {
        return ($this->areaTampa() * 3) + ($this->areaCilindro() * 2);
    }

    public function litros() {
        return $this->areaTotal() * 4;
    }

    public function latas() {
        return ceil($this->litros() / 100);
    }

    public function custoTotal() {
        return $this->precoLata() * $this->latas();
    }

    public function __toString() {
        return "Raio: ". $this->raio. "<br/>
                Altura: ". $this->altura. "<br/>
                Nível de segurança: ". $this->nivelSeguranca. "<br/>
                Área da tampa: ". $this->areaTampa(). "<br/>
                Circunferência da tampa: ". $this->areaLateral(). "<br/>
                Área do cilindro: ". $this->areaCilindro(). "<br/>
                Área total: ". $this->areaTotal(). "<br/>
                Litros: ". $this->litros(). "<br/>
                Latas: ". $this->latas(). "<br/>
                Custo total: ". $this->custoTotal();
    }

}

?>