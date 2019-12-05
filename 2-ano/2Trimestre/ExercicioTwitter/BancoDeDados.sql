create database Twitter;

use Twitter;

create table postagens (
  id int primary key auto_increment,
  comentario int,
  retweets int,
  curtidas int,
  data date,
  usuario varchar(50),
  postagem varchar(280)
);

insert into postagens values
(null, 423, 32, 2344, '2018-07-05', '@realDonaldTrump', 'I love the rocket guy...'),
(null, 2, 4, 32, '2018-07-05', '@matteussluccass', 'Jag vill aldrig alska nagon igen...'),
(null, 3, 24, 22, '2018-07-03', '@matteussluccass', 'Jag talar inte svenska'),
(null, 4, 2, 6, '2018-07-04', '@dnvoigt', 'VAI MARXXXXXXXXX!!!!!!!!!'),
(null, 4321, 342, 623, '2018-07-04', '@zevlaonurb', 'Odeio 51...'),
(null, 0, 0, 0, '2018-07-04', '@pieCristian', 'Eu amo o Trump...'),
(null, 10, 32, 126, '2018-07-02', '@curvellorodrigo', 'Eu adoro passar tarefas de PHP'),
(null, 11, 43, 154, '2018-07-02', '@slaterheck', 'Eu adoro passar tarefas de PHP'),
(null, 3, 2, 232, '2018-07-02', '@zevlaonurb', 'Eu amo PHP tanto quanto eu amo violão...Eu odeio violão'),
(null, 432, 234, 432, '2018-07-04', '@cellbit', 'Meu cachorro é um lobinho :O'),
(null, 15, 54, 1123, '2018-07-03', '@otariano', 'Se a vida ta difícil pra você imagina pra quem tem que te ouvir :)');

create table assuntos (
	id int primary key auto_increment,
	titulo varchar(50),
	descricao varchar(100)
);

insert into assuntos values
(null, 'Fernandinho', 'Fernandinho marcou gol contra na eliminação do Brasil para a Bélgica'),
(null, 'Douglas Costa', '110 mil Tweets'),
(null, 'Renato Augusto', '66,2 mil Tweets'),
(null, 'Em 2022', '142 mil Tweets'),
(null, 'Catar', '8.318 Tweets'),
(null, '#BRABEL', 'Brasil perde para a Bélgica e está fora da copa da Rússia'),
(null, 'Taison', '24,7 mil Tweets'),
(null, 'Croácia', '45,3 mil Tweets');

create table usuario (
	id int primary key auto_increment,
	usuario varchar(50),
	tweets int,
	seguindo int,
	seguidores int
);

insert into usuario values
(null, '@matteussluccass', 687, 84, 234);