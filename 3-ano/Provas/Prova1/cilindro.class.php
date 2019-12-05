<?php

class cilindro {

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

    public function precoLata($nivelSeguranca) {
        if ($nivelSeguranca == 1) {
            return 342.49;
        } elseif ($nivelSeguranca == 2) {
            return 479.27;
        } elseif ($nivelSeguranca == 3) {
            return 623.54;
        } else {
            return 0;
        }
    }

    public function corTexto($nivelSeguranca) {
        if ($nivelSeguranca == 1) {
            return "#ff2a2a";
        } elseif ($nivelSeguranca == 2) {
            return "orange";
        } elseif ($nivelSeguranca == 3) {
            return "green";
        } else {
            return "white";
        }
    }

    public function imagem($nivelSeguranca) {
        if ($nivelSeguranca == 1) {
            return "<img src='assets/images/NivelBaixo.png' class='cilindros' />";
        } elseif ($nivelSeguranca == 2) {
            return "<img src='assets/images/NivelMedio.png' class='cilindros' />";
        } elseif ($nivelSeguranca == 3) {
            return "<img src='assets/images/NivelAlto.png' class='cilindros' />";
        } else {
            return"null";
        }
    }

    public function NivelSegurancaTexto($nivelSeguranca) {
        if ($nivelSeguranca == 1) {
            return "Nível Baixo";
        } elseif ($nivelSeguranca == 2) {
            return "Nível Médio";
        } elseif ($nivelSeguranca == 3) {
            return "Nível Alto";
        } else {
            return "<h5>Erro! Nível de segurança não indentificado</h5>";
        }
    }

    public function areaCirculo() {
        return $this->pi * pow($this->raio, 2);
    }

    public function circunferenciaCirculo() {
        return 2 * $this->pi * $this->raio;
    }

    public function areaCilindro() {
        return $this->altura * $this->circunferenciaCirculo();
    } 

    public function areaTotal() {
        return ($this->areaCirculo() * 3) + ($this->areaCilindro() * 2);
    }

    public function litros() {
        return $this->areaTotal() * 4;
    }

    public function latas() {
        return ceil($this->litros() / 100);
    }

    public function custoTotal() {
        return $this->precoLata($this->nivelSeguranca) * $this->latas();
    }

}

?>