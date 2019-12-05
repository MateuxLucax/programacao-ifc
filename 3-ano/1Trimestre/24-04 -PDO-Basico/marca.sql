CREATE DATABASE IF NOT EXISTS vendaSimples;

USE vendaSimples;

CREATE TABLE marca (
	codigo INT PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(45) NOT NULL
);

INSERT INTO marca (descricao) VALUES
('LG'),
('SONY'),
('APPLE'),
('POSITIVO'),
('MICROSOFT'),
('ORACLE'),
('TOTVS'),
('NOKIA'),
('SAMSUNG');