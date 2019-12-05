<?php

include_once "autoload.php";

$pato = new Pato;
$pato->setTipo("Ave");
echo "--> Pato <br/>";
echo $pato;

$cachorro = new Cachorro;
$cachorro->setTipo("Mamífero");
echo "<br/><br/>--> Cachorro <br/>";
echo $cachorro;

$gato = new Gato;
$gato->setTipo("Felino");
echo "<br/><br/>--> Gato <br/>";
echo $gato;

?>