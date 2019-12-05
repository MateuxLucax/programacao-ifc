create database marcas;

use marcas;

create table marcas (
	codigo int primary key auto_increment,
    descricao varchar(45) not null
);

insert into marcas (descricao) values
('LG'),
('SONY'),
('APPLE'),
('POSITIVO'),
('MICROSOFT'),
('ORACLE'),
('TOTVS'),
('NOKIA'),
('IFC'),
('SAMSUNG');

-- drop table marcas;
