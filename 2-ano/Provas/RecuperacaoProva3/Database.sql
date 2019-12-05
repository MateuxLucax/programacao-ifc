-- DROP DATABASE Keep;

CREATE DATABASE Keep;

USE Keep;

-- Anotações

CREATE TABLE Anotacoes(
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  titulo VARCHAR(150),
  texto VARCHAR(150),
  cor VARCHAR(150),
  excluir BOOLEAN,
  estrela BOOLEAN
);

INSERT INTO Anotacoes 
VALUES (null, 'Tarefas', 'Nao tenho tarefas', '#FFFFFF', true, false);

SELECT *
FROM Anotacoes	;
