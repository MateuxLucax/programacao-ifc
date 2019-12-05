drop database clinica;

create database clinica;

use clinica;

create table consultas(
  codigo int primary key auto_increment,
  paciente varchar(150),
  medico varchar(150),
  dataConsulta date,
  medicamento boolean,
  tipoConsulta varchar(20),
  valorConsulta decimal(16, 2)
);

insert into consultas
    values(null, 'Joazinho', 'Clodoaldo', '2018-09-26', true, 'Particular', 199.99),
          (null, 'Ruanito', 'Claudinho', '2018-010-22', true,'SUS', 299.99),
          (null, 'Mateusito', 'Amoedinho', '2018-09-06', true, 'Social', 149.99),
          (null, 'Cirito', 'Lulito', '2018-09-20', false,'Plano de Saúde', 199.99),
          (null, 'Carlitos', 'Josisval', '2018-10-26', false, 'Particular', 599.99),
          (null, 'Pedroso', 'Carlosvaldo', '2018-11-01', true, 'SUS', 199.99);

select * from consultas;  