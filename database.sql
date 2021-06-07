CREATE DATABASE `testeclientes` COLLATE 'utf8_general_ci';

USE testeclientes;

CREATE TABLE Clientes (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(255) NOT NULL,
    Nascimento DATE NOT NULL,
    Sexo ENUM('M','F') NULL,
    CEP VARCHAR(9),
    Endereco VARCHAR(255),
    Numero VARCHAR(10),
    Complemento VARCHAR(255),
    Bairro VARCHAR(255),
    UF CHAR(2),
    Cidade VARCHAR(255)
);