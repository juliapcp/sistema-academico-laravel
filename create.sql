CREATE DATABASE `sistemaacademico` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

CREATE TABLE `disciplina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `cargaHoraria` float NOT NULL,
  `idProfessor` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `disciplina_FK` (`idProfessor`),
  CONSTRAINT `disciplina_FK` FOREIGN KEY (`idProfessor`) REFERENCES `professor` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `professor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `matricula` varchar(8) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `alunodisciplina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idAluno` int(11) NOT NULL,
  `idDisciplina` int(11) NOT NULL,
  `frequencia` float DEFAULT NULL,
  `media` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alunoDisciplina_un` (`idAluno`,`idDisciplina`),
  KEY `alunodisciplina_FK_1` (`idDisciplina`),
  CONSTRAINT `alunodisciplina_FK` FOREIGN KEY (`idAluno`) REFERENCES `aluno` (`id`),
  CONSTRAINT `alunodisciplina_FK_1` FOREIGN KEY (`idDisciplina`) REFERENCES `disciplina` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
