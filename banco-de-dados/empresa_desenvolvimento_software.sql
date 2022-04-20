-- Seguradora

DROP DATABASE `sicherheit`;
CREATE DATABASE `sicherheit`;

USE `sicherheit`;

CREATE TABLE IF NOT EXISTS `Clientes` (
  `RG` VARCHAR(15) PRIMARY KEY,
  `CPF` VARCHAR(15) NOT NULL,
  `Nome` VARCHAR(150) NOT NULL,
  `Endereco` VARCHAR(200) NOT NULL,
  `Telefone` VARCHAR(25) NOT NULL
);

CREATE TABLE IF NOT EXISTS `Carros` (
  `Placa` VARCHAR(8) PRIMARY KEY,
  `Fabricante` VARCHAR(40) NOT NULL,
  `Modelo` VARCHAR(120) NOT NULL,
  `Ano` INT(4) NOT NULL,
  `RG_Cliente` VARCHAR(15) NOT NULL,
  FOREIGN KEY (`RG_Cliente`) REFERENCES `Clientes`(`RG`)
    ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS `Ocorrencias` (
  `Codigo` INT PRIMARY KEY AUTO_INCREMENT,
  `Placa_Carro` VARCHAR(8) NOT NULL,
  `Data` DATE NOT NULL,
  `Local` VARCHAR(120) NOT NULL,
  `Valor_Multa` DECIMAL(6, 2) NOT NULL,
  `Descricao` VARCHAR(240) NOT NULL,
  FOREIGN KEY (`Placa_Carro`) REFERENCES `Carros`(`Placa`)
    ON DELETE CASCADE
);

-- Bibilioteca

CREATE DATABASE `biblioteca`;

USE `biblioteca`;

CREATE TABLE IF NOT EXISTS `editoras` (
	`codEditora` INT AUTO_INCREMENT PRIMARY KEY,
  `nome` VARCHAR(80)
);

CREATE TABLE IF NOT EXISTS `assuntos` (
	`sigla` CHAR PRIMARY KEY,
  `descricao` VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS `autores` (
	`matricula` INT PRIMARY KEY,
  `nome` VARCHAR(80) NOT NULL,
  `CPF` CHARACTER(11) NOT NULL,
  `endereco` VARCHAR(100) NOT NULL,
  `dataNascimento` DATE NOT NULL,
  `nacionalidade` VARCHAR(30) NOT NULL
);

CREATE TABLE IF NOT EXISTS `livros` (
  `codLivro` INT AUTO_INCREMENT PRIMARY KEY,
  `titulo` VARCHAR(80) NOT NULL,
  `preco` FLOAT,
  `lancamento` DATE,
  `assunto` CHAR NOT NULL,
  `editora` INT NOT NULL,
  FOREIGN KEY (`assunto`) REFERENCES `assuntos`(`sigla`),
  FOREIGN KEY (`editora`) REFERENCES `editoras`(`codEditora`)
);

CREATE TABLE IF NOT EXISTS `autores_livros` (
	`codLivro` INT NOT NULL,
  `matriculaAutor` INT NOT NULL,
  PRIMARY KEY (`codLivro`, `matriculaAutor`),
  FOREIGN KEY (`codLivro`) REFERENCES `livros`(`codLivro`),
  FOREIGN KEY (`matriculaAutor`) REFERENCES `autores`(`matricula`)
);

CREATE USER dani@localhost;
CREATE USER dai@localhost;
CREATE USER mateus@localhost;
CREATE USER rian@localhost;
CREATE USER martina@localhost;
CREATE USER julia@localhost;

CREATE ROLE 'administrador', 'desenvolvedor', 'suporte';

GRANT ALTER, CREATE
ON `sicherheit`.*
TO 'desenvolvedor';

GRANT SELECT, INSERT, UPDATE, DELETE
ON `sicherheit`.`Ocorrencias`
TO 'suporte';
