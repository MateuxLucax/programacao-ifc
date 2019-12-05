<?php

include_once "televisao.class.php";
include_once "controleRemoto.class.php";

$televisao = new Televisao;

$televisao->setEstado(true);
$televisao->setCanal(10);
$televisao->setVolume(50);

echo "--> Televisão <br/>";
echo $televisao;

$televisao->ligarDesligar();
$televisao->aumentarVolume();
$televisao->diminuirVolume();

echo "<br/><br/>--> Televisão <br/>";
echo $televisao;

$controleRemoto = new ControleRemoto($televisao);

$controleRemoto->ligarDesligar();
$controleRemoto->aumentarVolume();
$controleRemoto->diminuirVolume();

echo "<br/><br/>--> Televisão <br/>";
echo $televisao;

echo "<br/><br/>--> Controle remoto <br/>";
echo $controleRemoto;


?>