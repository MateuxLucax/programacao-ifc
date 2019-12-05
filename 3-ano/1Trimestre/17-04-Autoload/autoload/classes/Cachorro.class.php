<?php 

include_once "autoload.php";

class Cachorro extends Animal implements IComunicar {

    public function comunicar() {
        return "AU AU";
    }
    
}

?>