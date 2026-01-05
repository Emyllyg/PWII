create database cadaluno;
use cadaluno;

create table aluno(
	id int not null auto_increment primary key,
	nome varchar(100) not null,
	idade int not null,
	serie varchar(100) not null,
	foto varchar(50)
);

INSERT INTO aluno (nome, idade, serie, foto) VALUES 
('Ana Beatriz Silva', 14, '8º Ano', 'foto1.jpg');
INSERT INTO aluno (nome, idade, serie, foto) VALUES 
('Lucas Pereira', 16, '2º Ano Ensino Médio', 'foto2.jpg');
INSERT INTO aluno (nome, idade, serie, foto) VALUES 
('Mariana Costa', 13, '7º Ano', 'foto3.jpg');
INSERT INTO aluno (nome, idade, serie, foto) VALUES 
('João Vitor Almeida', 15, '1º Ano Ensino Médio', 'foto4.jpg');
INSERT INTO aluno (nome, idade, serie, foto) VALUES 
('Fernanda Rocha', 12, '6º Ano', 'foto5.jpg');