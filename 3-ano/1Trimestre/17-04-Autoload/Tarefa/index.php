<?php

include_once "autoload.php";

$pai = new Pai;

$pai->setCodigo(1);
$pai->setNome("Carlos");
$pai->setDataNascimento("10/04/2001");

echo "--> Pai <br/>". $pai;


$mae = new Mae;

$mae->setCodigo(1);
$mae->setNome("Jubinas");
$mae->setDataNascimento("10/04/1998");

echo "<br/><br/> --> Mãe <br/>". $mae;

?>