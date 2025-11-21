Trabalho feito por: Caio Amaral Pieri, Erika Rodrigues Couto e Leonardo Gonçalves jorge

Código pra criar banco de dados:

CREATE DATABASE biblioteca_mvc;

USE biblioteca_mvc;

CREATE TABLE livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    ano INT NOT NULL
);

INSERT INTO livros (titulo, autor, ano) VALUES ('Dom Casmurro', 'Machado de Assis', 1899);
