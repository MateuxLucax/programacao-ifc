create database Prova2;

use Prova2;

create table produtos(
	codigo int primary key auto_increment,
	descricao varchar(45),
    dataVenda date,
    valorUnitario decimal(8, 2),
	quantidade int
);

insert into produtos(descricao, dataVenda, valorUnitario, quantidade) values
	('Teclado', '2017-09-22', 34.00, 3),
    ('Mouse', '2016-06-10', 45.67, 56),
    ('Monitor', '2015-05-22', 123.34, 745);

select * from produtos;