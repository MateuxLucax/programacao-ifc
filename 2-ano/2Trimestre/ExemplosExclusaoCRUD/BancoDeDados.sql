create database CRUD;

use CRUD;

create table marca(
	codigo int primary key auto_increment,
    descricao varchar(45)
);

insert into marca(descricao) values
	('ASUS'),
    ('SONY'),
    ('APPLE'),
    ('SAMSUNG'),
    ('LG'),
    ('OPPO'),
    ('ONEPLUS'),
    ('XIAOMI'),
    ('REDMI'),
    ('HUAWEI'),
    ('BLU'),
    ('HTC'),
    ('LEECO');