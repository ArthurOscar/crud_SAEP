CREATE DATABASE crud_SAEP;

USE crud_SAEP;

CREATE TABLE turmas (
    id_turma INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45) NOT NULL,
    serie VARCHAR(20) NOT NULL,
    quantidade_aluno INT NOT NULL DEFAULT(0)
);

CREATE TABLE professores (
    id_professor INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45) NOT NULL,
    email VARCHAR(120) NOT NULL,
    materia VARCHAR(45) NOT NULL,
    fk_turma INT NOT NULL,
    FOREIGN KEY (fk_turma) REFERENCES turmas(id_turma)
);

CREATE TABLE alunos (
    id_aluno INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45) NOT NULL,
    fk_turma INT NOT NULL,
    FOREIGN KEY (fk_turma) REFERENCES turmas(id_turma)
);

CREATE TABLE atividades (
    id_atividade INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(100) NOT NULL,
    fk_turma INT NOT NULL,
    FOREIGN KEY (fk_turma) REFERENCES turmas(id_turma),
    fk_professor INT NOT NULL,
    FOREIGN KEY (fk_professor) REFERENCES professores(id_professor)
);