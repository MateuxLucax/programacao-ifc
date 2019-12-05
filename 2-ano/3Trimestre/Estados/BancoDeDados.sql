CREATE DATABASE CRUD;

USE CRUD;

CREATE TABLE estados(
	codigo INT PRIMARY KEY AUTO_INCREMENT,
	sigla VARCHAR(2),
	nome VARCHAR(100)
);

INSERT INTO estados (sigla,nome) VALUES ('AC','Acre')
																			 ,('AL','Alagoas')
																			 ,('AM','Amazonas')
																			 ,('AP','Amapá')
																			 ,('BA','Bahia')
																			 ,('CE','Ceará')
																			 ,('DF','Distrito Federal')
																			 ,('ES','Espírito Santo')
																			 ,('GO','Goiás')
																			 ,('MA','Maranhão')
																			 ,('MG','Minas Gerais')
																			 ,('MS','Mato Grosso do Sul')
																			 ,('MT','Mato Grosso')
																			 ,('PA','Pará')
																			 ,('PB','Paraíba')
																			 ,('PE','Pernambuco')
																			 ,('PI','Piauí')
																			 ,('PR','Paraná')
																			 ,('RJ','Rio de Janeiro')
																			 ,('RN','Rio Grande do Norte')
																			 ,('RO','Rondônia')
																			 ,('RR','Roraima')
																			 ,('RS','Rio Grande do Sul')
																			 ,('SC','Santa Catarina')
																			 ,('SE','Sergipe')
																			 ,('SP','São Paulo')
																			 ,('TO','Tocantins');
