<?php 

include_once "autoload.php";

class Gato extends Animal implements IComunicar {

    public function comunicar() {
        return "MIAU";
    }
    
}

?>