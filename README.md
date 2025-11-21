Projeto Biblioteca MVC

Este projeto foi desenvolvido utilizando a arquitetura **MVC (Model-View-Controller)** com **PHP** e **MySQL**. O objetivo é gerenciar um acervo de livros com operações CRUD completas.

## 👥 Integrantes da Equipe

Trabalho realizado por:
* **Caio Amaral Pieri**
* **Erika Rodrigues Couto**
* **Leonardo Gonçalves Jorge**

---

## 🗄️ Configuração do Banco de Dados

Para rodar o projeto, execute os comandos abaixo no seu cliente MySQL (como MySQL Workbench) para criar o banco e a tabela necessária.

```sql
-- 1. Criar o Banco de Dados
CREATE DATABASE biblioteca_mvc;

-- 2. Selecionar o Banco
USE biblioteca_mvc;

-- 3. Criar a Tabela 'livros'
CREATE TABLE livros ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    titulo VARCHAR(255) NOT NULL, 
    autor VARCHAR(255) NOT NULL, 
    ano INT NOT NULL 
);

-- 4. Inserir dados de exemplo
INSERT INTO livros (titulo, autor, ano) VALUES ('Dom Casmurro', 'Machado de Assis', 1899);
