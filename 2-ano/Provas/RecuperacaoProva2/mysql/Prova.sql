use crud;
-- drop table consultas;
create table consultas(
codigo int primary key auto_increment,
paciente varchar(200),
medico varchar(200),
dataC date,
tipo varchar(50),
valor decimal(10,2) 
);

insert into consultas (paciente, medico, dataC, tipo, valor)
values ('João Meireles', 'Dr. Aldo', '2002-12-12', 'SUS', 100.25),
	   ('Juca Campos', 'Dr. Curvello', '2018-08-23', 'Particular', 100000.99),
       ('Manoela Ciro', 'Dra. Kella', '1993-01-22', 'Social', 1000.30),
       ('Kelly Pereira', 'Dr. Curvello', '2017-03-12', 'Plano de Saude', 122000.33),
       ('Joana Silva', 'Dr. Felipe', '2020-09-12', 'Social', 2000.21);
       
select * from consultas;