create database CRUD;
use CRUD;

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

-- Exercicio 4

create table jogador (
codigo int primary key auto_increment,
nome varchar(100),
time_futebol varchar(50),
posicao int,
numero_gols int
);
insert into jogador (nome, time_futebol, posicao, numero_gols)
values ('Neymar', 'Barcelona', 3, 100)
	  ,('Hulk', 'Brasil', 7, 15)
      ,('Kaka', 'Argentina', 1, 25)
      ,('Jingos', 'Russia', 4, 1)
      ,('João', 'Flamengo', 3, 5)
      ,('Salvador', 'Fluminense', 2, 10)
      ,('Wally', 'Vasco', 5, 28)
      ,('Pelé', 'Brasil', 8, 150)
      ,('Junior', 'São Paulo', 9, 70)
      ,('Jailson', 'Internacional', 8, 90);

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
('Júlia Isabeli Krambeck', str_to_date('26-03-2002', '%d-%m-%Y'), 'Engenharia Civil'),
('Katia Krambeck', str_to_date('03-07-1972', '%d-%m-%Y'), 'Pedagogia'),
('Daiane Carl', str_to_date('12-08-2002', '%d-%m-%Y'), 'Ciências Biológicas'),
('Daniele Borba Voigt', str_to_date('20-04-2002', '%d-%m-%Y'), 'História'),
('Edilson Krambeck', str_to_date('07-08-1971', '%d-%m-%Y'), 'Ciências Contábeis'),
('Rian Dziuba', str_to_date('12-01-2001', '%d-%m-%Y'), 'Ciência da Computação'),
('Anne Jeremias', str_to_date('28-03-1988', '%d-%m-%Y'), 'Matemática'),
('Marcela Verga', str_to_date('20-05-1970', '%d-%m-%Y'), 'Administração'),
('Lucas Eduardo', str_to_date('26-04-2002', '%d-%m-%Y'), 'Gastronomia'),
('Bruna Carolini Krambeck', str_to_date('21-08-1997', '%d-%m-%Y'), 'Ciências Contábeis');

-- Exercício 8

create table funcionario(
 codigo int auto_increment primary key,
    nome varchar(150),
    salario decimal(16,2),
    dataDeAdmissao date
);

insert into funcionario(nome, salario, dataDeAdmissao)
values ('João', 1500, str_to_date('01/01/2001', '%m/%d/%Y')),
    ('Pedro', 2000,str_to_date('01/02/2001', '%m/%d/%Y')),
       ('Júlia', 3000, str_to_date('01/03/2001', '%m/%d/%Y')),
       ('Daniele', 400, str_to_date('01/04/2001', '%m/%d/%Y')),
       ('Rian', 1000, str_to_date('01/05/2001', '%m/%d/%Y')),
       ('Mateus', 10000, str_to_date('01/06/2001', '%m/%d/%Y')),
       ('Daiane', 300, str_to_date('01/07/2001', '%m/%d/%Y')),
       ('Cristian', 4000, str_to_date('01/08/2001', '%m/%d/%Y')),
       ('Lucas', 5000, str_to_date('01/09/2001', '%m/%d/%Y')),
       ('Curvelo', 40.5, str_to_date('01/10/2001', '%m/%d/%Y'));

-- Exercício 9
create table carro(
 codigo int auto_increment primary key,
    anoDeFabricacao date,
    dataDeVenda date,
    valor decimal(16,2)
);
insert into carro(anoDeFabricacao, dataDeVenda, valor)
values (str_to_date('01/01/2001', '%m/%d/%Y'), str_to_date('01/02/2001', '%m/%d/%Y'), 35.500),
    (str_to_date('01/02/2001', '%m/%d/%Y'), str_to_date('01/03/2001', '%m/%d/%Y'), 45.500),
       (str_to_date('01/03/2001', '%m/%d/%Y'), str_to_date('01/04/2001', '%m/%d/%Y'), 55.500),
       (str_to_date('01/04/2001', '%m/%d/%Y'), str_to_date('01/05/2001', '%m/%d/%Y'), 65.500),
       (str_to_date('01/05/2001', '%m/%d/%Y'), str_to_date('01/06/2001', '%m/%d/%Y'), 75.500),
       (str_to_date('01/06/2001', '%m/%d/%Y'), str_to_date('01/07/2001', '%m/%d/%Y'), 85.500),
       (str_to_date('01/07/2001', '%m/%d/%Y'), str_to_date('01/08/2001', '%m/%d/%Y'), 95.500),
       (str_to_date('01/08/2001', '%m/%d/%Y'), str_to_date('01/09/2001', '%m/%d/%Y'), 105.500),
       (str_to_date('01/09/2001', '%m/%d/%Y'), str_to_date('01/10/2001', '%m/%d/%Y'), 115.500),
       (str_to_date('01/10/2001', '%m/%d/%Y'), str_to_date('01/11/2001', '%m/%d/%Y'), 125.500);

-- Exercício 10

create table enchente(
 codigo int auto_increment primary key,
    dataAtual date,
    nivelDoRio decimal(16,2)
);
insert into enchente(dataAtual, nivelDoRio)
values (str_to_date('01/01/2001', '%m/%d/%Y'), 3.5),
    (str_to_date('02/01/2001', '%m/%d/%Y'), 3.8),
       (str_to_date('03/01/2001', '%m/%d/%Y'), 4),
       (str_to_date('04/01/2001', '%m/%d/%Y'), 4.2),
       (str_to_date('05/01/2001', '%m/%d/%Y'), 4.6),
       (str_to_date('06/01/2001', '%m/%d/%Y'), 4.9),
       (str_to_date('07/01/2001', '%m/%d/%Y'), 5.2),
       (str_to_date('08/01/2001', '%m/%d/%Y'), 6),
       (str_to_date('09/01/2001', '%m/%d/%Y'), 6.5),
       (str_to_date('10/01/2001', '%m/%d/%Y'), 6.1);

-- Exercício 11
create table jogo(
 codigo int auto_increment not null primary key,
    anoDeLancamento date,
    classificacao varchar(150)
);
insert into jogo(anoDeLancamento, classificacao)
values (str_to_date('03/26/2002', '%m/%d/%Y'), 'Terror'),
    (str_to_date('02/24/2002', '%m/%d/%Y'), 'Ação'),
       (str_to_date('10/05/2009', '%m/%d/%Y'), 'Ação'),
       (str_to_date('06/03/2003', '%m/%d/%Y'), 'Arcade'),
       (str_to_date('02/08/2008', '%m/%d/%Y'), 'Simulação'),
       (str_to_date('04/06/2013', '%m/%d/%Y'), 'Terror'),
       (str_to_date('03/02/1999', '%m/%d/%Y'), 'Estratégia'),
       (str_to_date('10/09/2006', '%m/%d/%Y'), 'Casual'),
       (str_to_date('10/12/2006', '%m/%d/%Y'), 'Casual'),
       (str_to_date('01/04/2005', '%m/%d/%Y'), 'Ação');

-- Exercício 12

create table computador(
 codigo int auto_increment not null primary key,
    fabricante varchar(150),
    processador varchar(150),
    memoria int,
    hd int
);
insert into computador(fabricante, processador, memoria, hd)
values ('DELL', 'Intel Core I3', 4096, 512000),
    ('DELL', 'Intel Core I5', 8192, 512000),
       ('DELL', 'Intel Core I5', 8192, 1024000),
       ('DELL', 'Intel Core I7', 8192, 1024000),
       ('DELL', 'Intel Core I7', 16348, 1024000),
       ('DELL', 'Intel Core I9', 16248, 2048000),
       ('ACER', 'Intel Core I5', 8192, 1024000),
       ('ASUS', 'Intel Core I5', 8192, 1024000),
       ('SAMSUNG', 'Intel Core I5', 8192, 1024000),
       ('HP', 'Intel Core I5', 8192, 1024000);


create table predio ( -- 13
codigo int primary key auto_increment,
nome varchar(100),
numero_salas int,
numero_andares int
);

insert into predio (nome,numero_salas,numero_andares) 
values ('Joana', 3, 4)
	  ,('Mateus',5,5)
      ,('Karl', 2, 13)
      ,('Pedro',7,5)
      ,('Marte',2,1)
      ,('Junivos',4,9)
      ,('Daiane',5,2)
      ,('Filó',3,6)
      ,('Jiji',2,4)
      ,('São José',4,5);

create table bicicleta ( -- 14
codigo int primary key auto_increment,
fabricante varchar(100),
numero_marchas int,
formacao_quadro varchar(100)
);
insert into bicicleta(fabricante,numero_marchas,formacao_quadro)
values ('Caloi', 4, 'Alumínio')
	  ,('Blitz', 3, 'Aço')
      ,('Bichiclo', 1, 'Madeira')
      ,('Blitz', 6, 'Cobre')
      ,('Caloi', 3, 'Ouro')
      ,('Bichiclo', 2, 'Prata')
      ,('Caloi', 4, 'Ferro')
      ,('Bichiclo', 5, 'Bambu')
      ,('Tito', 3, 'Aluminio')
      ,('Tito', 6, 'Ferro');

create table email ( -- 15
codigo int primary key auto_increment,
origem varchar(100),
destino varchar(100),
assunto varchar(150),
data_envio date
);
insert into email (origem, destino, assunto, data_envio)
values ('rian@teste.com', 'dani@teste,com', 'Aula', str_to_date('24-03-2017', '%d-%m-%Y'))
	  ,('dani@teste.com', 'mateus@teste.com', 'PHP', str_to_date('25-12-2017', '%d-%m-%Y'))
      ,('bruno_a@teste.com', 'leo@teste.com', 'Festa', str_to_date('26-05-2018', '%d-%m-%Y'))
      ,('julia@teste.com', 'daine@teste.com', 'Trabalho', str_to_date('27-06-2017', '%d-%m-%Y'))
      ,('martina@teste.com', 'rian@teste.com', 'TCC', str_to_date('28-08-2018', '%d-%m-%Y'))
      ,('gabriel_v@teste.com', 'mateus@teste.com', 'Paródia', str_to_date('04-03-2016', '%d-%m-%Y'))
      ,('mateus@teste.com', 'dani@teste.com', 'CSS', str_to_date('25-12-2017', '%d-%m-%Y'))
      ,('julio@teste.com', 'paulo@teste.com', 'HTML', str_to_date('25-12-2017', '%d-%m-%Y'))
      ,('sara@teste.com', 'vitória@teste.com', 'Geografia', str_to_date('25-12-2017', '%d-%m-%Y'))
      ,('marcela@teste.com', 'rodrigo@teste.com', 'Matemática', str_to_date('25-12-2017', '%d-%m-%Y'));
      
create table escola ( -- 16
codigo int primary key auto_increment,
nome varchar(100),
cidade varchar(100),
numero_alunos int,
nome_diretora varchar(100)
);
insert into escola (nome, cidade, numero_alunos, nome_diretora)
values ('EEFP Erna heidrich', 'Taió', 900, 'Katia')
	  ,('EEB Paulo Zimmerman', 'Rio do Sul', 1500, 'Joana')
      ,('EEB Paulo Cordeiro', 'Rio do Sul', 700, 'Jertrudes')
      ,('EEB Luiz Bertoli', 'Rio do Sul', 1000, 'Joana')
      ,('EEB Arno', 'Pouso Redondo', 300, 'Joana')
      ,('EEF Yolanda Marinho Lesss', 'Pirajú', 150, 'Jaine')
      ,('EEB João Caldo', 'Óleo', 200, 'Gisele')
      ,('EEB Ruy Barbosa', 'Rio do Sul', 600, 'Marcela')
      ,('EEF Capitão Maximiniano', 'São Paulo', 400, 'Sabrina')
      ,('EEF Coronel Jão Carlos', 'Manduri', 800, 'Larissa');
      
create table esporte ( -- 17
codigo int primary key auto_increment,
nome varchar(100),
numero_praticantes int
);
insert into esporte (nome, numero_praticantes)
values ('Volei', 12)
	  ,('Futebol', 48)
      ,('Tênis', 4)
      ,('Xadrez', 2)
      ,('Ginastica', 12)
      ,('Handebol', 38)
      ,('Basquete', 24)
      ,('Futebol Americano', 105)
      ,('Karate', 14)
      ,('Circuito', 9);
	
