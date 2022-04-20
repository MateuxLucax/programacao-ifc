-- Banco de dados para teste
CREATE DATABASE `Teste`;
USE `Teste`;

CREATE TABLE `pessoa` (
  `ID` INT PRIMARY KEY AUTO_INCREMENT,
  `nome` VARCHAR(255),
  `data_nascimento` DATE
);

-- 1
CREATE USER usuario1@localhost IDENTIFIED BY “usuario1”;
CREATE USER usuario2@localhost IDENTIFIED BY “usuario2”;
CREATE USER usuario3@localhost IDENTIFIED BY “usuario3”;
CREATE USER usuario4@localhost IDENTIFIED BY “usuario4”;
CREATE USER usuario5@localhost IDENTIFIED BY “usuario5”;
CREATE USER usuario6@localhost IDENTIFIED BY “usuario6”;

-- 2
RENAME USER usuario1@localhost TO tars@localhost;
RENAME USER usuario2@localhost TO kipp@localhost;

--3
ALTER USER tars@localhost IDENTIFIED BY ‘tars’;
ALTER USER kipp@localhost IDENTIFIED BY ‘kipp’;

-- 4
GRANT ALL
ON `Teste`.*
TO mateux@localhost;
GRANT DELETE, INSERT
ON `Teste`.*
TO kipp@localhost;
GRANT CREATE USER, SHUTDOWN
ON `Teste`.*
TO usuario3@localhost;
GRANT SHOW DATABASES, RELOAD
ON `Teste`.*
TO usuario4@localhost;
GRANT SELECT, UPDATE
ON `Teste`.*
TO usuario5@localhost;
GRANT GRANT OPTION, USAGE
ON `Teste`.*
TO usuario6@localhost;

-- 5
REVOKE ALL
ON `Teste`.*
TO mateux@localhost;
REVOKE DELETE
ON `Teste`.*
TO kipp@localhost;
REVOKE CREATE USER
ON `Teste`.*
TO usuario3@localhost;
REVOKE SHOW DATABASES
ON `Teste`.*
TO usuario4@localhost;
REVOKE SELECT
ON `Teste`.*
TO usuario5@localhost;
REVOKE GRANT OPTION
ON `Teste`.*
TO usuario6@localhost;