create database Modelo;

use Modelo;

create table foguetes(
	codigo int primary key auto_increment,
    nome varchar(150),
    fabricante varchar(150),
    capacidadeLEO decimal(16,2)
);

insert into foguetes values
(null, 'Falcon 9', 'SpaceX', 22.8),
(null, 'Falcon Heavy', 'SpaceX', 63.8),
(null, 'Delta II', 'ULA', 6.1),
(null, 'Delta IV', 'ULA', 13.7),
(null, 'Delta IV Heavy', 'ULA', 28.4),
(null, 'Atlas V', 'ULA', 18.8),
(null, 'Antares 110', 'Orbital ATK', 8),
(null, 'Soyuz', 'Russian Federation', 6.9),
(null, 'Soyuz-2', 'Russian Federation', 8.2),
(null, 'Ariane 5', 'Arianespace', 20);

select * from foguetes;
