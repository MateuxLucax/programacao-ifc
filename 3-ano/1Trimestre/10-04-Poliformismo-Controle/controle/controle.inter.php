<?php

interface Controle {

    public function ligarDesligar();
    public function mudarCanal($canal);
    public function aumentarVolume();
    public function diminuirVolume();
    public function aumentarCanal();
    public function diminuirCanal();  
}

?>