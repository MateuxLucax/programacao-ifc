CREATE DATABASE CRUDNparaN;

USE CRUDNparaN;

CREATE TABLE Marca(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(150)
);

CREATE TABLE Venda(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  dataAtual DATE,
  dataVencimento DATE,
  dataPagamento DATE
);

CREATE TABLE Produto(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  descricao VARCHAR(150),
  codigoBarras VARCHAR(150),
  valor DECIMAL(16, 2),
  marca INT,
  FOREIGN KEY (marca) REFERENCES Venda(codigo)
);

CREATE TABLE VendaProduto(
  codigoProduto INT,
  codigoVenda INT,
  PRIMARY KEY (codigoProduto, codigoVenda),
  FOREIGN KEY (codigoProduto) REFERENCES Produto(codigo),
  FOREIGN KEY (codigoVenda) REFERENCES Venda(codigo)
);

INSERT INTO Marca(nome)
VALUES ('DELL')
      ,('Apple')
      ,('Microsoft');

INSERT INTO Venda(data, dataVencimento, dataPagamento)
VALUES ('2018-10-26', '2018-10-30', '2018-10-28');

INSERT INTO Produto(descricao, codigoBarras, valor, marca)
VALUES ('Notebook', '#JDADNC', 1999.99, 1);

INSERT INTO VendaProduto
VALUES (1, 1);
