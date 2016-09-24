-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 24/09/2016 às 01:26
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Fazendo dump de dados para tabela `Comentario`
--

INSERT INTO `Comentario` (`idComentario`, `idPost`, `idUsuario`, `textoComentario`, `dataComentario`) VALUES
(1, 9, 2, 'comentario 1', '24/09/2016 01:09'),
(2, 7, 2, 'comentario 2', '24/09/2016 01:09'),
(3, 4, 2, 'Comentario 3', '24/09/2016 01:10'),
(4, 9, 3, 'Comentario 5', '24/09/2016 01:12'),
(5, 10, 3, 'Comentario 7', '24/09/2016 01:13'),
(6, 13, 3, 'Comentario 3', '24/09/2016 01:13'),
(7, 4, 3, 'Comentario 4', '24/09/2016 01:13'),
(8, 13, 4, 'comentario 10', '24/09/2016 01:14'),
(9, 12, 4, 'Comentario 4', '24/09/2016 01:14'),
(10, 10, 4, 'Comentario 6', '24/09/2016 01:15'),
(11, 10, 5, 'Comentario 5', '24/09/2016 01:19'),
(12, 1, 5, 'Comentario 1', '24/09/2016 01:19'),
(13, 11, 5, 'Comentario 1', '24/09/2016 01:20'),
(14, 5, 5, 'Comentario 15', '24/09/2016 01:20'),
(15, 6, 5, 'Comentario 7', '24/09/2016 01:20'),
(16, 18, 4, 'Comentario 9', '24/09/2016 01:21'),
(17, 10, 4, 'Comentario 11', '24/09/2016 01:22'),
(18, 1, 4, 'Comentario 2', '24/09/2016 01:23'),
(19, 9, 4, 'Comentario 13', '24/09/2016 01:23'),
(20, 15, 4, 'Comentario 1', '24/09/2016 01:23'),
(21, 18, 3, 'Comentario 2', '24/09/2016 01:24'),
(22, 18, 3, 'Comentario 15', '24/09/2016 01:25');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Fazendo dump de dados para tabela `contatos`
--

INSERT INTO `contatos` (`idcontato`, `nomeContato`, `emailContato`, `comentarioContato`, `data`) VALUES
(3, 'Empresa Verde', 'verde@hotmail.com', 'Gostaria de divulgar uma vaga de estágio em nossa empresa!', '13/09/2016 22:14'),
(4, 'José da Silva', 'jose@gmail.com', 'Alugo casa para republica e gostaria de divulgar para os alunos da universidade!', '13/09/2016 22:15'),
(5, 'Maria Gomes', 'maria@yahoo.com', 'Adorei o site, parabéns!', '13/09/2016 22:17'),
(6, 'diloka', 'diloka@gmail.com', 'd', '24/09/2016 00:16');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Fazendo dump de dados para tabela `Post`
--

INSERT INTO `Post` (`idPost`, `idUsuario`, `dataPost`, `conteudoPost`, `Tag`, `Categoria_idCategoria`) VALUES
(1, 2, '24/09/2016 01:04', 'Mini Curso 01', 'Mini Curso 01', 1),
(2, 2, '24/09/2016 01:04', 'Palestra 01', 'Palestra 01', 2),
(3, 2, '24/09/2016 01:05', 'Entretenimento 01', 'Entretenimento 01', 3),
(4, 2, '24/09/2016 01:05', 'Estagio 01', 'Estagio 01', 4),
(5, 2, '24/09/2016 01:05', 'Anuncio 01', 'Anuncio 01', 5),
(6, 2, '24/09/2016 01:06', 'Pesquisa e Extensão 01', 'Pesquisa e Extensão 01', 6),
(7, 2, '24/09/2016 01:07', 'Iniciacao Cientifica 01', 'Iniciacao Cientifica 01', 7),
(8, 2, '24/09/2016 01:07', 'Monitorias 01', 'Monitorias 01', 8),
(9, 2, '24/09/2016 01:07', 'Outros 01', 'Outros 01', 8),
(10, 3, '24/09/2016 01:11', 'Mini Curso 02', 'Mini Curso 02', 1),
(11, 3, '24/09/2016 01:11', 'Anuncio 02', 'Anuncio 02', 5),
(12, 3, '24/09/2016 01:12', 'Entretenimento 02', 'Entretenimento 02', 3),
(13, 3, '24/09/2016 01:12', 'Outros 02', 'Outros 02', 9),
(14, 4, '24/09/2016 01:15', 'Palestra 03', 'Palestra 03', 2),
(15, 4, '24/09/2016 01:15', 'Monitoria 03', 'Monitoria 03', 8),
(16, 5, '24/09/2016 01:17', 'Iniciacao Cientifica 04', 'Iniciacao Cientifica 04', 7),
(18, 5, '24/09/2016 01:18', 'Mini Curso 04', 'Mini Curso 04', 1);

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
  `Atividade` int(1) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_Usuario_TipoUsuario1_idx` (`TipoUsuario_idTipoUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Fazendo dump de dados para tabela `Usuario`
--

INSERT INTO `Usuario` (`idUsuario`, `nome`, `sobrenome`, `senha`, `email`, `identificacao`, `TipoUsuario_idTipoUsuario`, `Atividade`) VALUES
(2, 'Rafaela ', 'Custódio', '123456', 'adm1@email.com', 2010, 1, 0),
(3, 'Giovani', 'Junior', '123456', 'adm2@email.com', 2012, 1, 0),
(4, 'Caio ', 'Lopes', '123456', 'aluno1@email.com', 2011, 2, 0),
(5, 'Vitor', 'Melo', '123456', 'aluno2@email.com', 2013, 2, 0);

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `Comentario`
--
ALTER TABLE `Comentario`
  ADD CONSTRAINT `fk_ComentPost_PostPost` FOREIGN KEY (`idPost`) REFERENCES `Post` (`idPost`) ON DELETE CASCADE ON UPDATE NO ACTION,
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
