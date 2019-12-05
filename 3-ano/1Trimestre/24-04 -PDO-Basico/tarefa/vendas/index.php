<?php

require_once "autoload.php";

$marca1 = new Marca;

$marca1->setCodigo(1);
$marca1->setDescricao("LG");

echo "--> Marca 1<br />";
echo $marca1;

echo "<br /><br />";

$marca2 = new Marca;

$marca2->setCodigo(2);
$marca2->setDescricao("LG");

echo "--> Marca 2<br />";
echo $marca2;

echo "<br /><br />";

$prod1 = new Produto;

$prod1->setCodigo(2);
$prod1->setDescricao("Computador");
$prod1->setPreco(2500.75);
$prod1->setEstoque("965874");
$prod1->setImagem("computador.png");

echo "--> Produto 1 <br />";
echo $prod1;

echo "<br /><br />";

$prod2 = new Produto;

$prod2->setCodigo(3);
$prod2->setDescricao("Mouse");
$prod2->setPreco(190.87);
$prod2->setEstoque("222222");
$prod2->setImagem("mouse.png");

echo "--> Produto 2 <br />";
echo $prod2;

echo "<br />---------------------------";
echo "<br /><br />";

$Cliente = new Cliente;

$Cliente->setCodigo(1);
$Cliente->setNome("João");
$Cliente->setCPF("200.698.259-22");
$Cliente->setRG("222222-6");
$Cliente->setFone("99986-2578");
$Cliente->setEmail("jj@gmail.com");
$Cliente->setUsuario("JoaoJock");
$Cliente->setSenha("jjmaloko");
$Cliente->setNumero("254");
$Cliente->setEndereco("Rua das Pedras");
$Cliente->setBairro("Galo véio");
$Cliente->setCidade("Campo Fraco");
$Cliente->setEstado("Ancapsted");



echo "--> Cliente  <br />";
echo $Cliente;



echo "<br />---------------------------";
echo "<br /><br />";

$Vendedor = new Vendedor;

$Vendedor->setCodigo(1);
$Vendedor->setNome("Pedro");
$Vendedor->setUsuario("Pedro_Pedroca");
$Vendedor->setSenha("25pedro99");

echo "--> Vendedor  <br />";
echo $Vendedor;


echo "<br />---------------------------";
echo "<br /><br />";

$Vendedor2 = new Vendedor;

$Vendedor2->setCodigo(2);
$Vendedor2->setNome("Felipe");
$Vendedor2->setUsuario("FelipeMané");
$Vendedor2->setSenha("Felipex");

echo "--> Vendedor  <br />";
echo $Vendedor2;



echo "<br />---------------------------";
echo "<br /><br />";

$Venda = new Venda;

$Venda->setCodigo(1);
$Venda->setData("07/08/2015");
$Venda->setDataVencimento("06/08/2015");
$Venda->setDataPagamento("06/09/2015");
$Venda->setCliente($Cliente);
$Venda->setVendedor($Vendedor);

echo "--> Venda:  <br />";
echo $Venda;








?>
