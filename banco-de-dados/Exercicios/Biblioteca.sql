CREATE DATABASE biblioteca;

USE biblioteca;

CREATE TABLE IF NOT EXISTS editoras (
	codEditora INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(80)
);

CREATE TABLE IF NOT EXISTS assuntos (
	sigla CHAR PRIMARY KEY,
    descricao VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS autores (
	matricula INT PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    CPF CHARACTER(11) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    dataNascimento DATE NOT NULL,
    nacionalidade VARCHAR(30) NOT NULL
);

CREATE TABLE IF NOT EXISTS livros (
	codLivro INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(80) NOT NULL,
    preco FLOAT,
    lancamento DATE,
    assunto CHAR NOT NULL,
    editora INT NOT NULL,
    FOREIGN KEY (assunto) REFERENCES assuntos(sigla),
    FOREIGN KEY (editora) REFERENCES editoras(codEditora)
);

CREATE TABLE IF NOT EXISTS autores_livros (
	codLivro INT NOT NULL,
    matriculaAutor INT NOT NULL,
    PRIMARY KEY (codLivro, matriculaAutor),
    FOREIGN KEY (codLivro) REFERENCES livros(codLivro),
    FOREIGN KEY (matriculaAutor) REFERENCES autores(matricula)
);

INSERT INTO editoras(nome) VALUES('Mirandela Editora');
INSERT INTO editoras(nome) VALUES('Editora Via-Norte');
INSERT INTO editoras(nome) VALUES('Editora Ilhas Tijucas');
INSERT INTO editoras(nome) VALUES('MJ Editora');

INSERT INTO assuntos(sigla, descricao) VALUES('B', 'Banco de Dados');
INSERT INTO assuntos(sigla, descricao) VALUES('P', 'Programação');
INSERT INTO assuntos(sigla, descricao) VALUES('R', 'Redes');
INSERT INTO assuntos(sigla, descricao) VALUES('S', 'Sistemas Operacionais');

INSERT INTO livros(titulo, preco, lancamento, assunto, editora)
	VALUES('Banco de Dados para a Web', 131.2, '2015-01-10', 'B', 1);
INSERT INTO livros(titulo, preco, lancamento, assunto, editora)
	VALUES('Programando em Linguagem C', 130, '2007-10-01', 'P', 1);
INSERT INTO livros(titulo, preco, lancamento, assunto, editora)
	VALUES('Programando em Linguagem C++', 110.5, '2002-11-01', 'P', 3);
INSERT INTO livros(titulo, preco, assunto, editora)
	VALUES('Bancos de Dados na Bioinformática', 90, 'B', 2);
INSERT INTO livros(titulo, preco, lancamento, assunto, editora)
	VALUES('Redes de Computadores', 72, '2011-03-07', 'R', 2);

INSERT INTO autores(matricula, nome, CPF, endereco, dataNascimento, nacionalidade)
	VALUES(123, 'John Smith', '11111111111', 'Rua Brasil', '1963-04-03', 'Canadense');
INSERT INTO autores(matricula, nome, CPF, endereco, dataNascimento, nacionalidade)
	VALUES(456, 'Adam Silva', '22222222222', 'Rua Canadá', '1983-06-13', 'Brasileira');
INSERT INTO autores(matricula, nome, CPF, endereco, dataNascimento, nacionalidade)
	VALUES(789, 'Matias Rodriguez', '33333333333', 'Rua Argentina', '1976-08-06', 'Argentina');

INSERT INTO autores_livros(codLivro, matriculaAutor)
	VALUES(1, 456); 
INSERT INTO autores_livros(codLivro, matriculaAutor)
	VALUES(1, 789); 
INSERT INTO autores_livros(codLivro, matriculaAutor)
	VALUES(2, 123); 
INSERT INTO autores_livros(codLivro, matriculaAutor)
	VALUES(3, 123); 
INSERT INTO autores_livros(codLivro, matriculaAutor)
	VALUES(4, 456); 
INSERT INTO autores_livros(codLivro, matriculaAutor)
	VALUES(5, 789); 
    
-- Exemplos consultas correlacionas e não correlacionadas

SELECT nome
FROM editoras 
WHERE codEditora IN (SELECT editora
					 FROM livros);
      
SELECT descricao
FROM assuntos
WHERE NOT sigla IN (SELECT assunto
					FROM livros
					WHERE lancamento IS NOT NULL);

SELECT nome FROM editoras e 
WHERE EXISTS (SELECT editora
			  FROM livros
			  WHERE lancamento IS NOT NULL
			  AND e.codEditora = editora);

SELECT descricao
FROM assuntos a
WHERE NOT EXISTS (SELECT assunto
				  FROM livros
				  WHERE lancamento IS NOT NULL
				  AND a.sigla = assunto);

-- Exercícios

-- A)

SELECT nome FROM editoras e 
WHERE NOT EXISTS (SELECT editora
				  FROM livros
				  WHERE lancamento IS NOT NULL
				  AND e.codEditora = editora);

-- B)

SELECT nome
FROM autores
WHERE dataNascimento IN (SELECT MIN(dataNascimento)
		                 FROM autores);

-- C)

SELECT nome FROM editoras e 
WHERE codEditora IN (SELECT editora
					 FROM livros
					 WHERE lancamento IS NULL
					 AND e.codEditora = editora);

-- D)

SELECT nome
FROM editoras
WHERE codEditora IN (SELECT editora
					 FROM livros
					 WHERE assunto IN (SELECT sigla
					 				   FROM assuntos
									   WHERE descricao = 'Banco de Dados'));

-- E)

SELECT nome
FROM autores
WHERE matricula IN (SELECT matriculaAutor
					FROM autores_livros
					WHERE codLivro IN (SELECT codLivro
									   FROM livros
									   WHERE preco IN (SELECT MAX(preco)
									   				   FROM livros)));

-- Subconsultas Substituindo Valores

SELECT descricao AS assuntos, (SELECT COUNT(*)
							   FROM livros v
							   WHERE v.assunto = a.sigla
							   AND lancamento IS NOT NULL) AS livros_lancados
FROM assuntos a;

SELECT nome, (SELECT AVG(preco)
			  FROM livros l
			  WHERE l.editora = e.codEditora
			  AND lancamento IS NOT NULL) AS preco_medio_publicacoes
FROM editoras e
ORDER BY nome;

-- Exercícios

-- A)

SELECT descricao AS Assuntos, (SELECT AVG(preco)
							   FROM livros l
		 					   WHERE l.assunto = a.sigla) AS Preco_Medio
FROM assuntos a;

-- B)

SELECT nome AS Nome_autor, (SELECT COUNT(*) 
							FROM livros l, autores_livros al 
							WHERE a.matricula = al.matriculaAutor 
							AND l.codLivro = al.codLivro 
							AND lancamento IS NOT NULL) AS Livros_Publicados 
FROM autores a; 

-- C)

SELECT nome, (SELECT MAX(preco) 
			  FROM livros l, autores_livros al 
			  WHERE a.matricula = al.matriculaAutor 
			  AND l.codLivro = al.codLivro 
			  AND lancamento IS NOT NULL) AS Maior_Preco 
FROM autores a
ORDER BY nome; 

-- D)

SELECT nome, (SELECT COUNT(*)
			  FROM livros l, autores_livros al, autores a
			  WHERE l.editora = e.codEditora
			  AND a.matricula = al.matriculaAutor
			  AND l.codLivro = al.codLivro) AS Qtde_Autores
FROM editoras e;

-- Tabelas aninhadas

-- Exemplos

SELECT titulo, descricao
FROM livros
	 INNER JOIN assuntos
     ON assunto = sigla
WHERE lancamento IS NOT NULL;

SELECT titulo, nome, descricao
FROM livros
	  INNER JOIN editoras E
      ON editora = E.codEditora
		 INNER JOIN assuntos
         ON assunto = sigla;

-- Exercícios

-- A)

SELECT titulo, preco, nome
FROM livros l
	 INNER JOIN editoras e
     WHERE e.codEditora = l.editora;

-- B)

SELECT count(l.codLivro)
FROM livros l
	 INNER JOIN autores a
		   INNER JOIN autores_livros h
           WHERE a.matricula = h.matriculaAutor
           AND h.codLivro = l.codLivro
           AND a.nome like "% Smith";
        
-- C)

SELECT nome
FROM editoras e
	 INNER JOIN livros l
     WHERE e.codEditora = l.editora
     AND l.lancamento IS NULL;
    
-- D)

SELECT Autores_livros.nome, Autores_livros.matricula
FROM (SELECT a.nome, a.matricula, l.codLivro
	  FROM autores a, livros l, autores_livros h
	  WHERE a.matricula = h.matriculaAutor
      AND h.codLivro = l.codLivro) Autores_livros
INNER JOIN livros v
WHERE Autores_livros.codLivro = v.codLivro
GROUP BY Autores_livros.nome
HAVING count(Autores_livros.codLivro) >= 2;
    
-- E)

SELECT l.titulo AS Título_Livro, a.nome AS Autor
FROM livros l
	INNER JOIN autores a
		  INNER JOIN autores_livros h
		  WHERE h.codLivro = l.codLivro
          AND h.matriculaAutor = a.matricula
HAVING max(l.preco) > 130;
use biblioteca;

-- Procedimentos armazenados

-- Exemplos

-- 1

DELIMITER $$

CREATE PROCEDURE  preco_livros()
BEGIN
  SELECT titulo, preco FROM livros;
END $$

DELIMITER ;

CALL preco_livros();

-- 2

DELIMITER $$
CREATE PROCEDURE selecionar_livros(IN quantidade INT)
BEGIN
  SELECT * FROM livros LIMIT quantidade;
END $$

DEIMITER ;

CALL selecionar_livros(2);

-- 3

DELIMITER $$
CREATE PROCEDURE verificar_qtd_livros(OUT quantidade INT)
BEGIN
  SELECT COUNT(*) INTO quantidade FROM livros;
END $$

DELIMITER ;

CALL verificar_qtd_livros(@total);

SELECT @total;

-- Exercicios

-- 1
DELIMITER $$
CREATE PROCEDURE preco_medio(IN quantidade INT, OUT preco_medio FLOAT)
BEGIN
  DECLARE valor_total FLOAT;
  DECLARE preco_livro FLOAT;
  DECLARE finished INT default 0;

  DECLARE livro_cursor cursor for SELECT preco FROM livros;

  DECLARE CONTINUE HANDLER FOR NOT FOUND SET finished = 1;

  OPEN livro_cursor;

  SET valor_total = 0;
  SET preco_medio = 0;

  get_preco : LOOP FETCH livro_cursor INTO preco_livro;
    IF finished = 1 THEN
      leave get_preco;
    END IF;

    SET valor_total = valor_total + preco_livro;
  END LOOP;

  CLOSE livro_cursor;

  SET preco_medio = valor_total / quantidade;
END $$

DELIMITER ;
CALL preco_medio(2, @precomedio)
SELECT @precomedio;

-- Funções armazenadas

-- Exemplos

-- 1

DELIMITER $$

CREATE FUNCTION hello(s CHAR(20))
RETURNS CHAR(50) deterministic
RETURN CONCAT('hello, ', s, '!' );
$$

DELIMITER ;
SELECT hello('world');

-- Exercicíos

-- 1

DELIMITER $$
CREATE PROCEDURE preco_total(OUT valor_total FLOAT)
BEGIN
  DECLARE preco_livro FLOAT;
  DECLARE finished INT default 0;

  DECLARE livro_cursor cursor for SELECT preco FROM livros;

  DECLARE CONTINUE HANDLER FOR NOT FOUND SET finished = 1;

  OPEN livro_cursor;

  SET valor_total = 0;

  get_preco : LOOP FETCH livro_cursor into preco_livro;
    IF finished = 1 THEN
      leave get_preco;
    END IF;

    SET valor_total = valor_total + preco_livro;
  END LOOP;

  CLOSE livro_cursor;

END $$
DELIMITER ;
CALL preco_total(@valor_total);
SELECT @valor_total;

-- 2

DELIMITER $$
CREATE PROCEDURE altera_data(IN data_lancamento DATE, IN codigo INT )
BEGIN
    UPDATE livros 
	SET lancamento = data_lancamento 
	WHERE codLivro = codigo;
END $$
DELIMITER ;
CALL altera_data('2018-01-12',1);
SELECT * FROM livros;

-- 3

DELIMITER $$
CREATE FUNCTION qtd_livros_CPF(cpf_autor CHAR(11)) 
RETURNS FLOAT DETERMINISTIC
BEGIN
    DECLARE codigo, quantidade INT;
    SELECT matricula INTO codigo 
	FROM autores 
	WHERE CPF = cpf_autor;
    SELECT COUNT(*) INTO quantidade 
	FROM autores_livros 
	WHERE matriculaAutor = codigo 
	GROUP BY CPF;
    RETURN quantidade;
END $$
DELIMITER ;
SELECT qtd_livros_CPF('111111111111');

-- 4

-- a)

DELIMITER $$
CREATE PROCEDURE inserir_assunto(sigla_var CHAR(1), descricao_var VARCHAR(50))
BEGIN
    INSERT INTO assuntos 
	VALUES (sigla_var, descricao_var);
END $$
DELIMITER ;
CALL inserir_assunto('M', 'Multimídia');

-- b)

DELIMITER $$
CREATE PROCEDURES remover_assunto(sigla_assunto CHAR(1))
BEGIN
    DELETE FROM assuntos 
	WHERE sigla = sigla_assunto;
END $$
DELIMITER ;
CALL remover_assunto('M');

-- c)

DELIMITER $$
CREATE PROCEDURE alterar_assunto(assunto_var CHAR(1), descricao_var VARCHAR(50))
BEGIN
    UPDATE assuntos 
	SET descricao = descricao_var 
	WHERE sigla = assunto_var;
END $$
DELIMITER ;
CALL alterar_assunto('F', 'Fausto Silva');

-- Gatilhos

-- Exemplos

-- Sintaxe básica

/*
CREATE TRIGGER nome_gatilho
		momento_execucao
		evento_disparador
	ON nome_tabela
	FOR EACH ROW
*/


-- 1

CREATE TABLE auditoria (
	codigo_livro INT,
	valor_antigo FLOAT,
	valor_novo FLOAT
);

SELECT * FROM auditoria;

DELIMITER $$
CREATE TRIGGER testa_aumento
AFTER UPDATE ON livros FOR EACH ROW
BEGIN
	IF (NEW.preco > 1.2 * OLD.preco) THEN
		INSERT INTO auditoria (codigo_livro, valor_antigo, valor_novo)
		VALUES (NEW.codLivro, OLD.preco, NEW.preco)
	END IF;
END
$$
DELIMITER ;

UPDATE livros SET preco = 159
WHERE codLivro = 1;

SELECT * FROM auditoria;

-- Exercicios

-- 1

ALTER TABLE autores
ADD qtd_livros INT;

UPDATE autores
SET qtd_livros = 2
WHERE matricula = 123;
UPDATE autores
SET qtd_livros = 2
WHERE matricula = 456;
UPDATE autores
SET qtd_livros = 2
WHERE matricula = 789;

DELIMITER $$
CREATE TRIGGER conta_qtd_autores_livros
AFTER UPDATE ON livros FOR EACH ROW
BEGIN
	UPDATE autores_livros
	SET qtd_livros = ((SELECT al.qtd_livros FROM autores_livros) + 1);
END
$$
DELIMITER ;

-- a)

DELIMITER $$
CREATE TRIGGER atualizar
AFTER UPDATE ON livros FOR EACH ROW
BEGIN

	IF (NEW.preco > 1.2 * OLD.preco) THEN
		INSERT INTO auditoria (codigo_livro, valor_antigo, valor_novo)
		VALUES (NEW.codLivro, OLD.preco, NEW.preco)
	END IF;
END
$$
DELIMITER ;
