<?php

require_once "autoload.php";

$Funcionario = new Funcionario;

$Funcionario->setCodigo(1);
$Funcionario->setNome("Francisco");
$Funcionario->setEmail("francisco_fra@gmail.com");
$Funcionario->setSenha("47fra96");
$Funcionario->setTipoUsuario(2);


echo "--> Funcionario  <br />";
echo $Funcionario;


echo "<br />----------------------------------------------------------";
echo "<br /><br />";

$Vaga = new Vaga;

$Vaga->setCodigo(1);
$Vaga->setDescricao("Idoso");
$Vaga->setIdentificacao("E - 69");
$Vaga->setSituacao(0);


echo "--> Vaga  <br />";
echo $Vaga;



echo "<br />-----------------------------------------------------------";
echo "<br /><br />";

$Cliente = new Cliente;

$Cliente->setCodigo(1);
$Cliente->setNome("João");
$Cliente->setFone("99986-2578");
$Cliente->setEmail("jj@gmail.com");


echo "--> Cliente  <br />";
echo $Cliente;



echo "<br />-----------------------------------------------------------";
echo "<br /><br />";


$marca1 = new Marca;

$marca1->setCodigo(1);
$marca1->setDescricao("Audi");

echo "--> Marca 1<br />";
echo $marca1;

echo "<br /><br />";

$marca2 = new Marca;

$marca2->setCodigo(2);
$marca2->setDescricao("Volkswagen");

echo "--> Marca 2<br />";
echo $marca2;



echo "<br />--------------------------------------------------------";
echo "<br /><br />";


$cor1 = new Cor;

$cor1->setCodigo(1);
$cor1->setDescricao("Vermelho");

echo "--> Cor 1<br />";
echo $cor1;

echo "<br /><br />";

$cor2 = new Cor;

$cor2->setCodigo(2);
$cor2->setDescricao("Verde");

echo "--> Cor 2<br />";
echo $cor2;

echo "<br />-------------------------------------------------------";
echo "<br /><br />";


$modelo1 = new Modelo;

$modelo1->setCodigo(1);
$modelo1->setDescricao("TT Race");
$modelo1->setMarca($marca1);

echo "--> Modelo 1<br />";
echo $modelo1;

echo "<br /><br />";

$modelo2 = new Modelo;

$modelo2->setCodigo(2);
$modelo2->setDescricao("Jetta");
$modelo2->setMarca($marca2);

echo "--> Modelo 2<br />";
echo $modelo2;

echo "<br />-------------------------------------------------------";
echo "<br /><br />";


$preco1 = new Preco;

$preco1->setCodigo(1);
$preco1->setData("20/03/2019");
$preco1->setValorHora(30.50);

echo "-->Preco 1<br />";
echo $preco1;

echo "<br /><br />";

$preco2 = new Preco;

$preco2->setCodigo(2);
$preco2->setData("22/03/2019");
$preco2->setValorHora(30.50);

echo "-->Preco 2<br />";
echo $preco2;



echo "<br />-------------------------------------------------------";
echo "<br /><br />";


$Veiculo = new Veiculo;

$Veiculo->setCodigo(1);
$Veiculo->setPlaca("LKP-6598");
$Veiculo->setModelo($modelo1);
$Veiculo->setCor($cor1);
$Veiculo->setCliente($Cliente);

echo "--> Veiculo  <br />";
echo $Veiculo;

echo "<br />---------------------------------------------------------------";
echo "<br /><br />";


$EntrSaida1 = new EntradaSaida;

$EntrSaida1->setCodigo(1);
$EntrSaida1->setDataEntrada("03/05/2019");
$EntrSaida1->setDataSaida("07/03/2019");
$EntrSaida1->setVeiculo($Veiculo);
$EntrSaida1->setPreco($preco1);
$EntrSaida1->setVaga($Vaga);
$EntrSaida1->setFuncionario($Funcionario);

echo "--> Entrada Saida 1 <br />";
echo $EntrSaida1;

echo "<br /><br />";

$EntrSaida2 = new EntradaSaida;

$EntrSaida2->setCodigo(1);
$EntrSaida2->setDataEntrada("30/03/2019");
$EntrSaida2->setDataSaida("01/04/2019");
$EntrSaida2->setVeiculo($Veiculo);
$EntrSaida2->setPreco($preco2);
$EntrSaida2->setVaga($Vaga);
$EntrSaida2->setFuncionario($Funcionario);

echo "--> Entrada Saida 2 <br />";
echo $EntrSaida2;

?>
