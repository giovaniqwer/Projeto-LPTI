-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 15/09/2016 às 18:37
-- Versão do servidor: 5.5.50-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `LPTI`
--
CREATE DATABASE IF NOT EXISTS `LPTI` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `LPTI`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Categoria`
--

CREATE TABLE IF NOT EXISTS `Categoria` (
  `idCategoria` int(255) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Categoria`
--

INSERT INTO `Categoria` (`idCategoria`, `nome`) VALUES
(1, 'Mini Curso'),
(2, 'Palestra'),
(3, 'Entreterimento'),
(4, 'Estágio'),
(5, 'Anuncio'),
(6, 'Pesquisa e Extensão'),
(7, 'Iniciacão Cientifica'),
(8, 'Monitorias'),
(9, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Comentario`
--

CREATE TABLE IF NOT EXISTS `Comentario` (
  `idComentario` int(255) NOT NULL AUTO_INCREMENT,
  `idPost` int(255) DEFAULT NULL,
  `idUsuario` int(255) DEFAULT NULL,
  `textoComentario` longtext,
  `dataComentario` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idComentario`),
  KEY `fk_ComentPost_PostPost_idx` (`idPost`),
  KEY `fk_ComentUsr_UserUsr_idx` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
--

CREATE TABLE IF NOT EXISTS `contatos` (
  `idcontato` int(255) NOT NULL AUTO_INCREMENT,
  `nomeContato` varchar(1000) DEFAULT NULL,
  `emailContato` varchar(1000) DEFAULT NULL,
  `comentarioContato` longtext,
  `data` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idcontato`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Fazendo dump de dados para tabela `contatos`
--

INSERT INTO `contatos` (`idcontato`, `nomeContato`, `emailContato`, `comentarioContato`, `data`) VALUES
(3, 'Empresa Verde', 'verde@hotmail.com', 'Gostaria de divulgar uma vaga de estágio em nossa empresa!', '13/09/2016 22:14'),
(4, 'José da Silva', 'jose@gmail.com', 'Alugo casa para republica e gostaria de divulgar para os alunos da universidade!', '13/09/2016 22:15'),
(5, 'Maria Gomes', 'maria@yahoo.com', 'Adorei o site, parabéns!', '13/09/2016 22:17');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Curso`
--

CREATE TABLE IF NOT EXISTS `Curso` (
  `idCurso` int(255) NOT NULL AUTO_INCREMENT,
  `nomeCurso` varchar(50) NOT NULL,
  PRIMARY KEY (`idCurso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Disciplina`
--

CREATE TABLE IF NOT EXISTS `Disciplina` (
  `idDisciplina` int(255) NOT NULL AUTO_INCREMENT,
  `ementa` longtext,
  `Usuario_idUsuario` int(255) NOT NULL,
  `nome` varchar(1000) NOT NULL,
  `cargaHoraria` varchar(50) NOT NULL,
  `Curso_idCurso` int(255) NOT NULL,
  PRIMARY KEY (`idDisciplina`),
  KEY `fk_Disciplina_Usuario1_idx` (`Usuario_idUsuario`),
  KEY `fk_Disciplina_Curso1_idx` (`Curso_idCurso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Evento`
--

CREATE TABLE IF NOT EXISTS `Evento` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `local` varchar(100) NOT NULL,
  `horarioEvento` time NOT NULL,
  `palestrante` varchar(50) NOT NULL,
  `tema` varchar(45) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `Classificacao_Categoria_idCategoria` int(11) NOT NULL,
  `Classificacao_Post_idPost` int(11) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idEvento`),
  KEY `fk_Evento_Usuario1_idx` (`Usuario_idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Post`
--

CREATE TABLE IF NOT EXISTS `Post` (
  `idPost` int(255) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(255) DEFAULT NULL,
  `dataPost` varchar(50) DEFAULT NULL,
  `conteudoPost` longtext,
  `Tag` varchar(50) DEFAULT NULL,
  `Categoria_idCategoria` int(255) DEFAULT NULL,
  PRIMARY KEY (`idPost`),
  KEY `fk_Post_1_idx` (`idUsuario`),
  KEY `fk_Post_Categoria1_idx` (`Categoria_idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=60 ;

--
-- Fazendo dump de dados para tabela `Post`
--

INSERT INTO `Post` (`idPost`, `idUsuario`, `dataPost`, `conteudoPost`, `Tag`, `Categoria_idCategoria`) VALUES
(47, 9, '13/09/2016 22:55', 'Nesta segunda-feira haverá jogo de volei as 8:30 na universidade, conto com a presenca de todos', 'volei', 3),
(48, 9, '13/09/2016 22:56', 'Vendo 900000000 xerox por apenas 30 reais, quem tiver interesse favor liga para o numero 5555-5555', 'xerox', 5),
(49, 9, '13/09/2016 22:59', 'quarta feira dia 32/13/1999 haverá mini curso na sala 111 sobre "Vender artes na praia"', 'vender artes na praia', 1),
(51, 8, '13/09/2016 23:04', 'Vaga de estágio no banco itau', 'itau', 4),
(52, 8, '13/09/2016 23:07', 'Iniciacao cientifica: descobrir que vem primeiro o ovo ou a galinha', 'ovo', 7),
(54, 9, '13/09/2016 23:13', 'Galera amanha dia 15/01/2051 havera monitoria de calculo 2 na sala 555', 'calculo', 8),
(55, 8, '13/09/2016 23:15', 'Projeto de pesquisa e extensao para alunos de economia, professora maria da silva, email: maria@silva.com', 'economia', 6),
(56, 9, '13/09/2016 23:18', 'Estou fazendo uma pesquisa do projeto de pesquisa e extensao do prof joao da costa, e preciso que respondam o seguinte formulario.. xxxxx.com, obrigada', 'formulario', 6),
(58, 9, '13/09/2016 23:31', 'Carona para universidade todos os dias', 'carona', 9),
(59, 9, '13/09/2016 23:50', 'Palestra; Como ser um jovem empreendedor', 'jovem', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `TipoUsuario`
--

CREATE TABLE IF NOT EXISTS `TipoUsuario` (
  `idTipoUsuario` int(255) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idTipoUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Fazendo dump de dados para tabela `TipoUsuario`
--

INSERT INTO `TipoUsuario` (`idTipoUsuario`, `tipo`) VALUES
(1, 'admin'),
(2, 'aluno');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `idUsuario` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(1000) DEFAULT NULL,
  `sobrenome` varchar(1000) DEFAULT NULL,
  `senha` longtext,
  `email` varchar(1000) DEFAULT NULL,
  `identificacao` int(50) DEFAULT NULL,
  `TipoUsuario_idTipoUsuario` int(255) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_Usuario_TipoUsuario1_idx` (`TipoUsuario_idTipoUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Fazendo dump de dados para tabela `Usuario`
--

INSERT INTO `Usuario` (`idUsuario`, `nome`, `sobrenome`, `senha`, `email`, `identificacao`, `TipoUsuario_idTipoUsuario`) VALUES
(8, 'Rafaela', 'Admin', '123456', 'admin@email.com', 201010, 1),
(9, 'Rafaela', 'Aluno', '123456', 'aluno@email.com', 201301, 2);

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `Comentario`
--
ALTER TABLE `Comentario`
  ADD CONSTRAINT `fk_ComentPost_PostPost` FOREIGN KEY (`idPost`) REFERENCES `Post` (`idPost`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ComentUsr_UserUsr` FOREIGN KEY (`idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `Disciplina`
--
ALTER TABLE `Disciplina`
  ADD CONSTRAINT `fk_Disciplina_Curso1` FOREIGN KEY (`Curso_idCurso`) REFERENCES `Curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Disciplina_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `Evento`
--
ALTER TABLE `Evento`
  ADD CONSTRAINT `fk_Evento_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `Post`
--
ALTER TABLE `Post`
  ADD CONSTRAINT `fk_PostUsr_UserUsr` FOREIGN KEY (`idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Post_Categoria1` FOREIGN KEY (`Categoria_idCategoria`) REFERENCES `Categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `fk_Usuario_TipoUsuario1` FOREIGN KEY (`TipoUsuario_idTipoUsuario`) REFERENCES `TipoUsuario` (`idTipoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
