-- DROP DATABASE 1paraN;

CREATE DATABASE 1paraN;

USE 1paraN;

-- Produtos

CREATE TABLE Marcas(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150)
);

CREATE TABLE Produtos(
  codigoProduto INT PRIMARY KEY AUTO_INCREMENT,
  descricao VARCHAR(150),
  valor DECIMAL(16, 2),
  codigoDeBarra VARCHAR(45),
  marca INT,
  FOREIGN KEY (marca) REFERENCES Marcas(codigo)
);

INSERT INTO Marcas (nome)
VALUES ('Microsoft'),
       ('Razer'),
       ('DELL'),
       ('Apple');

INSERT INTO Produtos (descricao, valor, codigoDeBarra, marca)
VALUES ('Surface Pro 6', 899.99, 'QWER123NV', 1)
      ,('Razer Blade 15', 1599.99, 'IRTYE345NS',  2);

SELECT *
FROM Marcas;

SELECT *
FROM Produtos;
