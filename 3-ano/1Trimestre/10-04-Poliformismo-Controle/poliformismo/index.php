<?php

include_once "cachorro.class.php";
include_once "gato.class.php";
include_once "pato.class.php";

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