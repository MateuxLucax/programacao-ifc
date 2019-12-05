<?php 

include_once "autoload.php";

class Pato extends Animal implements IComunicar {

    public function comunicar() {
        return "QUAC QUAC";
    }
    
}

?>