<?php

class Nota
{

    private $nota, $valorNota;

    public function Nota($nota) {
        $this->nota = $nota;
        if ($nota == 'C') {
            $this->valorNota = 0;
        } else if ($nota == 'C#' || $nota == 'Db') {
            $this->valorNota = 0.5;
        } else if ($nota == 'D') {
            $this->valorNota = 1;
        } else if ($nota == 'D#' || $nota == 'Eb') {
            $this->valorNota = 1.5;
        } else if ($nota == 'E') {
            $this->valorNota = 2;
        } else if ($nota == 'F') {
            $this->valorNota = 2.5;
        } else if ($nota == 'F#' || $nota == 'Gb') {
            $this->valorNota = 3;
        } else if ($nota == 'G') {
            $this->valorNota = 3.5;
        } else if ($nota == 'G#' || $nota == 'Ab') {
            $this->valorNota = 4;
        } else if ($nota == 'A') {
            $this->valorNota = 4.5;
        } else if ($nota == 'A#' || $nota == 'Bb') {
            $this->valorNota = 5;
        } else if ($nota == 'B') {
            $this->valorNota = 5.5;
        }
    }    

    public function getNota() {
        return $this->nota;
    }

    public function getValorNota() {
        return $this->valorNota;
    }

    public function __toString() {
        return $this->nota;
    }

}

?>