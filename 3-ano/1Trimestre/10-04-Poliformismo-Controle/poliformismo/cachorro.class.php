<?php 

include_once "animal.class.php";

class Cachorro extends Animal {

    public function comunicar() {
        return "AU AU";
    }
    
}

?>