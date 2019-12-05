create database Foguetes;

use Foguetes;

create table dados(
	codigo int primary key auto_increment,
    nome varchar(150),
    fabricante varchar(150),
    capacidadeLEO decimal(16,2),
    ultimoLancamento date
);

insert into dados values
(null, 'Falcon 9', 'SpaceX', 22.8, '2018-06-29'),
(null, 'Falcon Heavy', 'SpaceX', 63.8, '2018-06-02'),
(null, 'Delta II', 'ULA', 6.1, '2017-11-18'),
(null, 'Delta IV', 'ULA', 13.7, '2018-01-12'),
(null, 'Delta IV Heavy', 'ULA', 28.4, '2018-06-11'),
(null, 'Atlas V', 'ULA', 18.8, '2018-03-01'),
(null, 'Antares 110', 'Orbital ATK', 8, '2013-04-21'),
(null, 'Soyuz', 'Russian Federation', 6.9, '2018-06-06'),
(null, 'Soyuz-2', 'Russian Federation', 8.2, '2018-06-16'),
(null, 'Ariane 5', 'Arianespace', 20, '2018-04-05');