<?php 

class Musica
{
    private $musica; 
    private $tonalidadeNova = array();

    public function Musica($musica) {
        $this->musica = $musica;
    }

    private function converterNumeroTexto($numero) {
        switch ($numero) {
            case 0:
                $numero = 'C';
                break;
            case 0.5:
                $numero = 'C#/Db';
                break;
            case 1:
                $numero = 'D';
                break;
            case 1.5:
                $numero = 'D#/Eb';
                break;
            case 2:
                $numero = 'E';
                break;
            case 2.5:
                $numero = 'F';
                break;
            case 3:
                $numero = 'F#/Gb';
                break;
            case 3.5:
                $numero = 'G';
                break;
            case 4:
                $numero = 'G#/Ab';
                break;
            case 4.5:
                $numero = 'A';
                break;
            case 5:
                $numero = 'A#/Bb';
                break;
            case 5.5:
                $numero = 'B';
                break;
        }
        return $numero;
    }

    public function tonalidade($tonalidade) {		
        for ($i = 0; $i < count($this->musica); $i++) { 
            $this->tonalidadeNova[$i] = $this->musica[$i]->getValorNota() + $tonalidade;
            while ($this->tonalidadeNova[$i] >= 6) {
                $this->tonalidadeNova[$i] -= 6;
            }
            while ($this->tonalidadeNova[$i] < 0) {
                $this->tonalidadeNova[$i] += 6;
            }
            $this->tonalidadeNova[$i] = $this->converterNumeroTexto($this->tonalidadeNova[$i]);
        }
        return join('&nbsp;', $this->tonalidadeNova);
    }

    public function __toString() {
        return join($this->musica, '&nbsp;');
    }
    
}

?>