create database ListagemCRUD;

use ListagemCRUD;

-- Exercício 1

create table saltos (
  codigo int primary key auto_increment,
  nome varchar(50),
  salto1 decimal(4, 2),
  salto2 decimal(4, 2),
  salto3 decimal(4, 2)
);

insert into saltos(nome, salto1, salto2, salto3)
values ('Rodrigo', 4.5, 5.6, 7),
       ('Cristhian', 4, 5, 6),
       ('Michael', 5, 6, 9);

-- Exercício 2

create table alunos (
  matricula bigint,
  aluno varchar(50),
  nota1 decimal(3, 2),
  nota2 decimal(3, 2),
  nota3 decimal(3, 2)
);

insert into alunos
values (12121243, 'Rodrigo', 4, 5, 6),
       (543534323, 'Cristhian', 7, 8, 9),
       (5675675, 'Michael', 1, 2, 3);

-- Exercício 3

create table jogadores (
  codigo int primary key auto_increment,
  nome varchar(50),
  selecao varchar(50),
  gols int,
  jogos int,
  copas int
);

insert into jogadores(nome, selecao, gols, jogos, copas)
values ('Miroslav Klose', 'Alemanha', 16, 24, 4),
       ('Ronaldo', 'Brasil', 15, 19, 4),
       ('Gerd Muller', 'Alemanha Ocidental', 14, 13, 2),
       ('Just Fontaine', 'França', 13, 6, 4),
       ('Pelé', 'Brasil', 12, 14, 4);