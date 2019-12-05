-- DROP DATABASE 1paraN;

CREATE DATABASE 1paraN;

USE 1paraN;

-- 1

CREATE TABLE Estado(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150),
  sigla VARCHAR(2)
);

CREATE TABLE Municipio(
  codigoMunicipio INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150),
  estado INT,
  FOREIGN KEY (estado) REFERENCES Estado(codigo)
);

INSERT INTO Estado (nome, sigla)
VALUES ('Santa Catarina', 'SC');

INSERT INTO Municipio (nome, estado)
VALUES ('Blumenau', 1)
      ,('Rio do Sul', 1);

SELECT *
FROM Estado;

SELECT *
FROM Municipio;

-- 2

CREATE TABLE Cliente(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150),
  email VARCHAR(150),
  telefone VARCHAR(150)
);

CREATE TABLE Compra(
  codigoCompra INT PRIMARY KEY AUTO_INCREMENT,
  valor DECIMAL(16 ,2),
  cliente INT,
  FOREIGN KEY (cliente) REFERENCES Cliente(codigo)
);

INSERT INTO Cliente(nome, email, telefone)
VALUES ('Mateus', 'mateusslucass840@gmail.com', '(47) 98881-9255');

INSERT INTO Compra(valor, cliente)
VALUES (100.00, 1)
      ,(69.99, 1);

SELECT *
FROM Cliente;

SELECT *
FROM Compra;

-- 3

CREATE TABLE Vendedor(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  login VARCHAR(150),
  senha VARCHAR(150),
  nome VARCHAR(150),
  email VARCHAR(150),
  telefone VARCHAR(150)
);

CREATE TABLE Venda(
  codigoVenda INT PRIMARY KEY AUTO_INCREMENT,
  valor DECIMAL(16, 2),
  vendedor INT,
  FOREIGN KEY (vendedor) REFERENCES Vendedor(codigo)
);

INSERT INTO Vendedor(login, senha, nome, email, telefone)
VALUES ('mateus.brandt', 'nemteconto', 'Mateus Brandt', 'mateusslucass840', '(47) 98881-9255');

INSERT INTO Venda(valor, vendedor)
VALUES (79.99, 1)
      ,(69.99, 1);

SELECT *
FROM Vendedor;

SELECT *
FROM Venda;

-- 4

CREATE TABLE Empresario(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150)
);

CREATE TABLE Jogador(
  codigoJogador INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150),
  clube VARCHAR(150),
  posicao VARCHAR(150),
  numeroGols INT,
  empresario INT,
  FOREIGN KEY (empresario) REFERENCES Empresario(codigo)
);

INSERT INTO Empresario(nome)
VALUES ('Carlitos Pitolomeu');

INSERT INTO Jogador(nome, clube, posicao, numeroGols, empresario)
VALUES ('Joaquim Pé de Ouro', 'Flamengo', 'Atacante', 243, 1);

SELECT *
FROM Empresario;

SELECT *
FROM Jogador;

-- 5

CREATE TABLE PaisClube(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150)
);


CREATE TABLE Clube(
  codigoTime INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150),
  numeroTorcedores INT,
  cidade VARCHAR(150),
  pais INT,
  FOREIGN KEY (pais) REFERENCES PaisClube(codigo)
);

INSERT INTO PaisClube(nome)
VALUES ('Brasil');

INSERT INTO Clube(nome, numeroTorcedores, cidade, pais)
VALUES ('Flamengo', 987680, 'Rio de Janeiro', 1);

SELECT *
FROM PaisClube;

SELECT *
FROM Clube;

-- 6

CREATE TABLE Pais(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150),
  sigla VARCHAR(20),
  continente VARCHAR(150)
);

CREATE TABLE EstadoPais(
  codigoEstados INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150),
  pais INT,
  FOREIGN KEY (pais) REFERENCES Pais(codigo)
);

INSERT INTO Pais(nome, sigla, continente)
VALUES ('Brasil', 'BR', 'América do Sul');

INSERT INTO EstadoPais(nome, pais)
VALUES ('Santa Catarina', 1);

SELECT *
FROM Pais;

SELECT *
FROM EstadoPais;

-- 7

CREATE TABLE Responsavel(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150)
);

CREATE TABLE Aluno(
  codigoAluno INT PRIMARY KEY AUTO_INCREMENT,
  nome varchar(150),
  dataNascimento DATE,
  curso VARCHAR(150),
  responsavel INT,
  FOREIGN KEY (responsavel) REFERENCES Responsavel(codigo)
);

INSERT INTO Responsavel(nome)
VALUES ('Pedro Augusto');

INSERT INTO Aluno(nome, dataNascimento, curso, responsavel)
VALUES ('Pedro Augusto Jr.', '2001-08-20', 'Programação I', 1);

SELECT *
FROM Responsavel;

SELECT *
FROM Aluno;

-- 8

CREATE TABLE Funcao(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150)
);

CREATE TABLE Funcionario(
  codigoFuncionario INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150),
  salario DECIMAL(16, 2),
  dataAdmissao DATE,
  funcao INT,
  FOREIGN KEY (funcao) REFERENCES Funcao(codigo)
);

INSERT INTO Funcao(nome)
VALUES ('Programador');

INSERT INTO Funcionario(nome, salario, dataAdmissao, funcao)
VALUES ('Pedro Augusto', 1999.99, '2015-08-09', 1);

SELECT *
FROM Funcao;

SELECT *
FROM Funcionario;

-- 9

CREATE TABLE Fabricante(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150)
);

CREATE TABLE Carro(
  codigoCarro INT PRIMARY KEY AUTO_INCREMENT,
  anoFabricacao DATE,
  dataVenda DATE,
  valor DECIMAL(16, 2),
  fabricante INT,
  FOREIGN KEY (fabricante) REFERENCES Fabricante(codigo)
);

INSERT INTO Fabricante(nome)
VALUES ('Volkswagen');

INSERT INTO Carro(anoFabricacao, dataVenda, valor, fabricante)
VALUES ('2018-08-20', '2018-10-16', 99999, 1);

SELECT *
FROM Fabricante;

SELECT *
FROM Carro;

-- 10

CREATE TABLE CidadeEnchente(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150)
);

CREATE TABLE Enchente(
  codigoEnchente INT PRIMARY KEY AUTO_INCREMENT,
  data DATE,
  nivelRio DECIMAL(16, 2),
  cidade INT,
  FOREIGN KEY (cidade) REFERENCES CidadeEnchente(codigo)
);

INSERT INTO CidadeEnchente(nome)
VALUES ('Rio do Sul');

INSERT INTO Enchente(data, nivelRio, cidade)
VALUES ('2018-09-09', 6.89, 1);

SELECT *
FROM CidadeEnchente;

SELECT *
FROM Enchente;

-- 11

CREATE TABLE Estilo(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  descricao VARCHAR(150)
);

CREATE TABLE Jogo(
  codigoJogo INT PRIMARY KEY AUTO_INCREMENT,
  anoLancamento DATE,
  classificacao VARCHAR(150),
  estilo INT,
  FOREIGN KEY (estilo) REFERENCES Estilo(codigo)
);

INSERT INTO Estilo(descricao)
VALUES ('Terror');

INSERT INTO Jogo(anoLancamento, classificacao, estilo)
VALUES ('2016-08-20', '+16', 1);

SELECT *
FROM Estilo;

SELECT *
FROM Jogo;

-- 12

CREATE TABLE Computador(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  fabricante VARCHAR(150),
  processador VARCHAR(150),
  memoria VARCHAR(150),
  hd VARCHAR(150)
);

CREATE TABLE Comprador(
  codigoComprador INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150),
  email VARCHAR(150),
  computador INT,
  FOREIGN KEY (computador) REFERENCES Computador(codigo)
);

INSERT INTO Computador(fabricante, processador, memoria, hd)
VALUES ('DELL', 'I5', '8 GB', '1 TB');

INSERT INTO Comprador(nome, email, computador)
VALUES ('Mateus', 'mateusslucass840@gmail.com', 1);

SELECT *
FROM Computador;

SELECT *
FROM Comprador;

-- 13

CREATE TABLE Construtora(
  codigo  INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150)
);

CREATE TABLE Predio(
  codigoPredio INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150),
  numeroSalas INT,
  numeroAndares INT,
  construtora INT,
  FOREIGN KEY (construtora) REFERENCES Construtora(codigo)
);

INSERT INTO Construtora(nome)
VALUES ('QueroTijolo');

INSERT INTO Predio(nome, numeroSalas, numeroAndares, construtora)
VALUES ('Ludwig von Mises', 48, 12, 1);

SELECT *
FROM Construtora;

SELECT *
FROM Predio;

-- 14

CREATE TABLE Modelo(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  descricao VARCHAR(150)
);

CREATE TABLE Bicicleta(
  codigoBicicleta INT PRIMARY KEY AUTO_INCREMENT,
  fabricante  VARCHAR(150),
  numeroMarchas VARCHAR(150),
  formacaoQuadro VARCHAR(150),
  modelo INT,
  FOREIGN KEY (modelo) REFERENCES Modelo(codigo)
);

INSERT INTO Modelo(descricao)
VALUES ('Zupt');

INSERT INTO Bicicleta(fabricante, numeroMarchas, formacaoQuadro, modelo)
VALUES ('Kahloy', 4, 'Ouro', 1);

SELECT *
FROM Modelo;

SELECT *
FROM Bicicleta;

-- 15

CREATE TABLE Provedor(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  descricao VARCHAR(150)
);

CREATE TABLE Email(
  codigoEmail INT PRIMARY KEY AUTO_INCREMENT,
  origem VARCHAR(150),
  destino VARCHAR(150),
  assunto VARCHAR(150),
  data DATE,
  provedor INT,
  FOREIGN KEY (provedor) REFERENCES Provedor(codigo)
);

INSERT INTO Provedor(descricao)
VALUES ('Gmail');

INSERT INTO Email(origem, destino, assunto, data, provedor)
VALUES ('mateusslucass840@gmail.com', 'daniborbavoigt@gmail.com', '#ELESIM', '2018-10-13', 1);

SELECT *
FROM Provedor;

SELECT *
FROM Email;

-- 16

CREATE TABLE CidadeEscola(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150)
);

CREATE TABLE Escola(
  codigoEscola INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150),
  cidade INT,
  numeroAlunos INT,
  nomeDiretora VARCHAR(150),
  FOREIGN KEY (cidade) REFERENCES CidadeEscola(codigo)
);

INSERT INTO CidadeEscola(nome)
VALUES ('Rio do Sul');

INSERT INTO Escola(nome, cidade, numeroAlunos, nomeDiretora)
VALUES ('Henrique Fonte', 1, 800, 'Cláudia');

SELECT *
FROM CidadeEscola;

SELECT *
FROM Escola;

-- 17

CREATE TABLE Federacao(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150)
);

CREATE TABLE Esporte(
  codigoEsporte INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150),
  numeroPraticantes BIGINT,
  federacao INT,
  FOREIGN KEY (federacao) REFERENCES Federacao(codigo)
);

INSERT INTO Federacao(nome)
VALUES ('FIFA');

INSERT INTO Esporte(nome, numeroPraticantes, federacao)
VALUES ('Futebol', 100000, 1);

SELECT *
FROM federacao;

SELECT *
FROM Esporte;
