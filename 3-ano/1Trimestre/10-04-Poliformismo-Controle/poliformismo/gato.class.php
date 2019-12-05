<?php 

include_once "animal.class.php";

class Gato extends Animal {

    public function comunicar() {
        return "MIAU";
    }
    
}

?>