create database ExercicioCRUD;

use ExercicioCRUD;

-- Exercício 1

create table estado (
    codigo int primary key auto_increment,
    nome varchar(150),
    sigla varchar(2)
);

insert into estado values
(null, 'Santa Catarina', 'SC'),
(null, 'Rio Grande do Sul', 'RS'),
(null, 'Paraná', 'PR'),
(null, 'São Paulo', 'SP'),
(null, 'Rio de Janeiro', 'RJ'),
(null, 'Espírito Santo', 'ES'),
(null, 'Bahia', 'BA'),
(null, 'Amazonas', 'AM'),
(null, 'Mato Grosso', 'MT'),
(null, 'Minas Gerais', 'MG');

-- Exercício 2

create table cliente(
    codigo int primary key auto_increment,
    nome varchar(150),
    email varchar(150),
    telefone varchar(15)
);

insert into cliente values
(default, 'Daniele Voigt', 'daniborbavoigt@gmail.com', '9999-9999'),
(default, 'Daiane Carl', 'daianecarl@gmail.com', '9999-9998'),
(default, 'Mateus Brandt', 'mateusbrandt@gmail.com', '9999-9997'),
(default, 'Julia Krambeck', 'juliakrambeck@gmail.com', '9999-9996'),
(default, 'Rian Dziuba', 'riandziuba@gmail.com', '9999-9995'),
(default, 'Martina Cascaes', 'martinacascaes@gmail.com', '9999-9994'),
(default, 'Bruno Martendal', 'brunomartendal@gmail.com', '9999-9993'),
(default, 'Bruno Alvez', 'brunoalvez@gmail.com', '9999-9992'),
(default, 'Leonardo Vieira', 'leonardovieira@gmail.com', '9999-9991'),
(default, 'Yuri Gracietti', 'yurigracietti@gmail.com', '9999-9990');

-- Exercício 3

create table vendedor (
    codigo int primary key auto_increment,
    login varchar(50),
    senha varchar(100),
    nome varchar(150),
    email varchar(150),
    telefone varchar(15)    
);

insert into vendedor values
(default, 'daniele.voigt', 'abcde', 'Daniele Voigt', 'daniborbavoigt@gmail.com', '9999-9999'),
(default, 'daiane.carl', 'abcdef', 'Daiane Carl', 'daianecarl@gmail.com', '9999-9998'),
(default, 'mateus.brandt', 'abcdefg', 'Mateus Brandt', 'mateusbrandt@gmail.com', '9999-9997'),
(default, 'julia.krambeck', 'abcdefgh', 'Julia Krambeck', 'juliakrambeck@gmail.com', '9999-9996'),
(default, 'rian.dziuba', 'edcba', 'Rian Dziuba', 'riandziuba@gmail.com', '9999-9995'),
(default, 'martina.cascaes', 'fedcba', 'Martina Cascaes', 'martinacascaes@gmail.com', '9999-9994'),
(default, 'bruno.martendal', 'gfedcba', 'Bruno Martendal', 'brunomartendal@gmail.com', '9999-9993'),
(default, 'bruno.alvez', '1234', 'Bruno Alvez', 'brunoalvez@gmail.com', '9999-9992'),
(default, 'leonardo.vieira', '2468', 'Leonardo Vieira', 'leonardovieira@gmail.com', '9999-9991'),
(default, 'yuri.gracietti', '1357', 'Yuri Gracietti', 'yurigracietti@gmail.com', '9999-9990');

-- Exercício 4

create table jogador (
    codigo int primary key auto_increment,
    nome varchar(150),
    timeFutebol varchar(150),
    posicao varchar(100),
    numeroGols int
);

insert into jogador values 
(null, 'Yuri Gracietti', 'Manchester United', 'Goleiro', 50),
(null, 'Leonardo Vieira', 'Manchester United', 'Atacante', 74),
(null, 'Bruno Alvez', 'Barcelona', 'Atacante', 45),
(null, 'Bruno Martendal', 'Real Madrid', 'Zagueiro', 67),
(null, 'Martina Cascaes', 'Manchester United', 'Lateral', 78),
(null, 'Rian Dziuba', 'Manchester City', 'Lateral', 58),
(null, 'Julia Krambeck', 'Liverpool', 'Meio Campo', 66),
(null, 'Mateus Brandt', 'Barcelona', 'Goleiro', 51),
(null, 'Daiane Carl', 'Liverpool', 'Goleiro', 49),
(null, 'Daniele Voigt', 'Paris Saint-Germain', 'Meio Campo', 63);

-- Exercicio 5

create table Time_futebol(
    codigo int primary key auto_increment,
    nome varchar(45),
    numero_torcedores int,
    cidade varchar(45)
);

insert into Time_futebol (nome, numero_torcedores, cidade) values
('Chelsea', 500, 'Londres'),
('Real Madrid', 700, 'São Paulo'),
('Vitória', 800, 'Cruzeiro'),
('Flamengo', 600, 'Pirajuí'),
('Grêmio', 900, 'Porto Alegre'),
('Palmeiras', 850, 'São Paulo'),
('Corinthians', 720, 'Madrid'),
('São Paulo', 910, 'São Paulo'),
('Cruzeiro', 680, 'Salvador'),
('Internacional',1000, 'Porto Alegre');

-- Exercicio 6

create table Paises(
    codigo int primary key auto_increment,
    nome varchar(45),
    sigla varchar(2),
    continente varchar(45)
);

insert into Paises (nome, sigla, continente) values
('Alemanha', 'DE', 'Europa'),
('França', 'FR', 'Europa'),
('Canadá', 'CA', 'América do Norte'),
('Peru', 'PE', 'América do Sul'),
('Portugal', 'PT', 'Europa'),
('Síria', 'SY', 'Ásia'),
('Grécia', 'GR', 'Europa'),
('Estados Unidos', 'US', 'América do Norte'),
('Suécia', 'SE', 'Europa'),
('Noruega', 'NO', 'Europa');


-- Exercicio 7

create table Aluno(
    codigo int primary key auto_increment,
    nome varchar(45),
    data_nascimento varchar(45),
    curso varchar(45)
);

insert into Aluno (nome, data_nascimento, curso) values
('Júlia Isabeli Krambeck', '26/03/2002', 'Engenharia Civil'),
('Katia Krambeck', '03/07/1972', 'Pedagogia'),
('Daiane Carl', '12/08/2002', 'Ciências Biológicas'),
('Daniele Borba Voigt', '20/04/2002', 'História'),
('Edilson Krambeck', '07/08/1971', 'Ciências Contábeis'),
('Rian Dziuba', '12/01/2001', 'Ciência da Computação'),
('Anne Jeremias', '28/03/1988', 'Matemática'),
('Marcela Verga', '20/05/1970', 'Administração'),
('Lucas Eduardo', '26/04/2002', 'Gastronomia'),
('Bruna Carolini Krambeck', '21/08/1997', 'Ciências Contábeis');

-- Exercício 8

create table funcionario(
	codigo int auto_increment primary key,
    nome varchar(150),
    salario decimal(16,2),
    dataDeAdmissao varchar(45)
);

insert into funcionario(nome, salario, dataDeAdmissao)
values ('João', 1500, '01/01/2001'),
	   ('Pedro', 2000,'01/02/2001'),
       ('Júlia', 3000, '01/03/2001'),
       ('Daniele', 400, '01/04/2001'),
       ('Rian', 1000, '01/05/2001'),
       ('Mateus', 10000, '01/06/2001'),
       ('Daiane', 300, '01/07/2001'),
       ('Cristian', 4000, '01/08/2001'),
       ('Lucas', 5000, '01/09/2001'),
       ('Curvelo', 40.5, '01/10/2001');

-- Exercício 9

create table carro(
	codigo int auto_increment primary key,
    anoDeFabricacao varchar(50),
    dataDeVenda varchar(50),
    valor decimal(16,2)
);

insert into carro(anoDeFabricacao, dataDeVenda, valor)
values ('01/01/2001', '01/02/2001', 35.500),
	   ('01/02/2001', '01/03/2001', 45.500),
       ('01/03/2001', '01/04/2001', 55.500),
       ('01/04/2001', '01/05/2001', 65.500),
       ('01/05/2001', '01/06/2001', 75.500),
       ('01/06/2001', '01/07/2001', 85.500),
       ('01/07/2001', '01/08/2001', 95.500),
       ('01/08/2001', '01/09/2001', 105.500),
       ('01/09/2001', '01/10/2001', 115.500),
       ('01/10/2001', '01/11/2001', 125.500);

-- Exercício 10

create table enchente(
	codigo int auto_increment primary key,
    dataAtual varchar(50),
    nivelDoRio decimal(16,2)
);
insert into enchente(dataAtual, nivelDoRio)
values ('01/01/2001', 3.5),
	   ('02/01/2001', 3.8),
       ('03/01/2001', 4),
       ('04/01/2001', 4.2),
       ('05/01/2001', 4.6),
       ('06/01/2001', 4.9),
       ('07/01/2001', 5.2),
       ('08/01/2001', 6),
       ('09/01/2001', 6.5),
       ('10/01/2001', 6.1);

-- Exercício 11

create table jogo(
	codigo int auto_increment not null primary key,
    anoDeLancamento varchar(50),
    classificacao varchar(150)
);

insert into Jogo(anoDeLancamento, classificacao)
values ('03/26/2002', 'Terror'),
       ('02/24/2002', 'Ação'),
       ('10/05/2009', 'Ação'),
       ('06/03/2003', 'Arcade'),
       ('02/08/2008', 'Simulação'),
       ('04/06/2013', 'Terror'),
       ('03/02/1999', 'Estratégia'),
       ('10/09/2006', 'Casual'),
       ('10/12/2006', 'Casual'),
       ('01/04/2005', 'Ação');

-- Exercício 12

create table computador(
 codigo int auto_increment not null primary key,
    fabricante varchar(150),
    processador varchar(150),
    memoria int,
    hd int
);
insert into computador(fabricante, processador, memoria, hd)
values ('DELL', 'Intel Core I3', 4, 500),
       ('DELL', 'Intel Core I5', 8, 500),
       ('DELL', 'Intel Core I5', 8, 1000),
       ('DELL', 'Intel Core I7', 8, 1000),
       ('DELL', 'Intel Core I7', 16, 1000),
       ('DELL', 'Intel Core I9', 16, 1000),
       ('ACER', 'Intel Core I5', 8, 1000),
       ('ASUS', 'Intel Core I5', 8, 1000),
       ('SAMSUNG', 'Intel Core I5', 8, 1000),
       ('HP', 'Intel Core I5', 8, 1000);

-- Exercicio 13

create table predio (
	codigo int primary key auto_increment,
	nome varchar(100),
	numero_salas int,
	numero_andares int
);

insert into predio (nome, numero_salas, numero_andares)
values ('Joana', 3, 4),
	   ('Mateus', 5, 5),
       ('Karl', 2,  13),
       ('Pedro', 7, 5),
       ('Marte', 2, 1),
       ('Junivos', 4, 9),
       ('Daiane', 5, 2),
       ('Filó', 3, 6),
       ('Jiji', 2, 4),
       ('São José', 4, 5);

-- Exercicio 14

create table bicicleta (
	codigo int primary key auto_increment,
	fabricante varchar(100),
	numero_marchas int,
	formacao_quadro varchar(100)
);

insert into bicicleta(fabricante,numero_marchas,formacao_quadro)
values ('Caloi', 4, 'Alumínio'),
       ('Blitz', 3, 'Aço'),
       ('Bichiclo', 1, 'Madeira'),
       ('Blitz', 6, 'Cobre'),
       ('Caloi', 3, 'Ouro'),
       ('Bichiclo', 2, 'Prata'),
       ('Caloi', 4, 'Ferro'),
       ('Bichiclo', 5, 'Bambu'),
       ('Tito', 3, 'Aluminio'),
       ('Tito', 6, 'Ferro');

-- Exercicio 15

create table email (
	codigo int primary key auto_increment,
	origem varchar(100),
	destino varchar(100),
	assunto varchar(150),
	data_envio varchar(50)
);

insert into email (origem, destino, assunto, data_envio)
values ('rian@teste.com', 'dani@teste,com', 'Aula', '24/03/2017'),
       ('dani@teste.com', 'mateus@teste.com', 'PHP', '25/12/2017'),
       ('bruno_a@teste.com', 'leo@teste.com', 'Festa', '26/05/2018'),
       ('julia@teste.com', 'daine@teste.com', 'Trabalho', '27/06/2017'),
       ('martina@teste.com', 'rian@teste.com', 'TCC', '28/08/2018'),
       ('gabriel_v@teste.com', 'mateus@teste.com', 'Paródia', '04/03/2016'),
       ('mateus@teste.com', 'dani@teste.com', 'CSS', '25/12/2017'),
       ('julio@teste.com', 'paulo@teste.com', 'HTML', '25-12-2017'),
       ('sara@teste.com', 'vitória@teste.com', 'Geografia', '25-12-2017'),
       ('marcela@teste.com', 'rodrigo@teste.com', 'Matemática', '25-12-2017');
      
-- Exercicio 16

create table escola (
	codigo int primary key auto_increment,
	nome varchar(100),
	cidade varchar(100),
	numero_alunos int,
	nome_diretora varchar(100)
);
insert into escola (nome, cidade, numero_alunos, nome_diretora)
values ('EEFP Erna heidrich', 'Taió', 900, 'Katia'),
       ('EEB Paulo Zimmerman', 'Rio do Sul', 1500, 'Joana'),
       ('EEB Paulo Cordeiro', 'Rio do Sul', 700, 'Jertrudes'),
       ('EEB Luiz Bertoli', 'Rio do Sul', 1000, 'Joana'),
       ('EEB Arno', 'Pouso Redondo', 300, 'Joana'),
       ('EEF Yolanda Marinho Lesss', 'Pirajú', 150, 'Jaine'),
       ('EEB João Caldo', 'Óleo', 200, 'Gisele'),
       ('EEB Ruy Barbosa', 'Rio do Sul', 600, 'Marcela'),
       ('EEF Capitão Maximiniano', 'São Paulo', 400, 'Sabrina'),
       ('EEF Coronel Jão Carlos', 'Manduri', 800, 'Larissa');
      
-- Exercicio 17
	
create table esporte (
	codigo int primary key auto_increment,
	nome varchar(100),
	numero_praticantes int
);

insert into esporte (nome, numero_praticantes)
values ('Volei', 12),
       ('Futebol', 48),
       ('Tênis', 4),
       ('Xadrez', 2),
       ('Ginastica', 12),
       ('Handebol', 38),
       ('Basquete', 24),
       ('Futebol Americano', 105),
       ('Karate', 14),
       ('Circuito', 9);
