create database companhiaAerea;

use companhiaAerea;

create table passagem(
	codigo int primary key auto_increment,
    passageiro varchar(150),
    poltrona int,
    dataVoo date,
    origem varchar(150),
    destino varchar(150),
    valorPassagem decimal(16, 2)
);

insert into passagem values
(null, 'Pedro Almeida', 1, '2018-06-29', 'Florianópolis', 'São Paulo', 299.99),
(null, 'Mateus Lucas', 53, '2018-08-02', 'Rio de Janeiro', 'São Paulo', 199.99),
(null, 'Murray Rothbard', 54, '2018-08-02', 'Rio de Janeiro', 'São Paulo', 199.99),
(null, 'Lucas Afonso', 10, '2018-04-23', 'Recife', 'Manaus', 399.99),
(null, 'Daniele Voigt', 13, '2018-03-13', 'Florianópolis', 'Curitiba', 99.99),
(null, 'Cristian Piehowak', 89, '2018-03-22', 'Florianópolis', 'Porto Alegre', 99.99),
(null, 'Pedro Kurth', 34, '2018-01-10', 'Navegates', 'Buenos Aires', 599.99),
(null, 'Pedro Afonso', 67, '2019-03-29', 'Salvador', 'São Paulo', 299.99),
(null, 'Rodrigo Curvello', 19, '2018-08-10', 'Florianópolis', 'Moscow', 1499.99),
(null, 'Lucas Cruz', 78, '2018-08-02', 'Florianópolis', 'Estocolmo', 1199.99);