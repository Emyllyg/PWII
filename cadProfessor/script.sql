create database cadprofessor;
use cadprofessor;

create table professor(
	id int not null auto_increment primary key,
	nome varchar(100) not null,
	idade int not null,
	disciplina varchar(100) not null,
	foto varchar(50)
);

INSERT INTO professor (nome, idade, disciplina , foto) VALUES 
('Danilo Ferreira Lima', 38, 'História', 'prof1.png'),
('Fernando Soares Costa', 52, 'Matemátioca', 'prof2.jpg'),
('Angelina Fernandes Silva', 32, 'Português', 'profa1.webp'),
('Ana Garcia Pereira', 34, 'Inglês', 'profa2.jpg');
