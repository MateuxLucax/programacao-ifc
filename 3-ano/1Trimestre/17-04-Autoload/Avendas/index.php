]<?php

include_once "autoload.php";

$marca1 = new Marca;

$marca1->setCodigo(1);
$marca1->setDescricao("HP");

echo "--> Marca 1 <br/>";
echo $marca1;

echo "<br/><br/>";

$marca2 = new Marca;

$marca2->setCodigo(2);
$marca2->setDescricao("DELL");

echo "--> Marca 2 <br/>";
echo $marca2;

echo "<br/><br/>";

$produto1 = new Produto;

$produto1->setCodigo(2);
$produto1->setDescricao("Teclado");
$produto1->setPreco(140.25);
$produto1->setcodigoDeBarra("489675634");
$produto1->setMarca($marca1);

echo "--> Produto 1 <br/>";
echo $produto1;

echo "<br/><br/>";

$produto2 = new Produto;

$produto2->setCodigo(3);
$produto2->setDescricao("Mouse");
$produto2->setPreco(200.87);
$produto2->setcodigoDeBarra("932847");
$produto2->setMarca($marca2);

echo "--> Produto 2 <br/>";
echo $produto2;

echo "<br/><br/>";

?>