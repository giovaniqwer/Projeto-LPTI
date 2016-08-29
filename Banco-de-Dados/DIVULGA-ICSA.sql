-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 28/08/2016 às 21:00
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
  `idCategoria` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
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
(8, 'Monitorias');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Comentario`
--

CREATE TABLE IF NOT EXISTS `Comentario` (
  `idComentario` int(11) NOT NULL AUTO_INCREMENT,
  `idPost` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `textoComentario` varchar(1000) DEFAULT NULL,
  `dataComentario` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idComentario`),
  KEY `fk_ComentPost_PostPost_idx` (`idPost`),
  KEY `fk_ComentUsr_UserUsr_idx` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
--

CREATE TABLE IF NOT EXISTS `contatos` (
  `idcontato` int(11) NOT NULL AUTO_INCREMENT,
  `nomeContato` varchar(45) DEFAULT NULL,
  `emailContato` varchar(45) DEFAULT NULL,
  `comentarioContato` varchar(300) DEFAULT NULL,
  `data` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idcontato`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Fazendo dump de dados para tabela `contatos`
--

INSERT INTO `contatos` (`idcontato`, `nomeContato`, `emailContato`, `comentarioContato`, `data`) VALUES
(1, 'PEDRO', 'empresa@empresa.com', '4', '28/08/2016 12:55'),
(2, 'Rafaela', 'rafaela011_custodio@hotmail.com', 'HAHA', '28/08/2016 14:32');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Curso`
--

CREATE TABLE IF NOT EXISTS `Curso` (
  `idCurso` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCurso` varchar(45) NOT NULL,
  PRIMARY KEY (`idCurso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Disciplina`
--

CREATE TABLE IF NOT EXISTS `Disciplina` (
  `idDisciplina` int(11) NOT NULL AUTO_INCREMENT,
  `ementa` varchar(45) DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cargaHoraria` varchar(45) NOT NULL,
  `Curso_idCurso` int(11) NOT NULL,
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
  `idUsuario` int(50) DEFAULT NULL,
  `dataPost` varchar(15) DEFAULT NULL,
  `conteudoPost` varchar(255) DEFAULT NULL,
  `Tag` varchar(15) NOT NULL,
  `Categoria_idCategoria` int(11) NOT NULL,
  PRIMARY KEY (`idPost`),
  KEY `fk_Post_1_idx` (`idUsuario`),
  KEY `fk_Post_Categoria1_idx` (`Categoria_idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Fazendo dump de dados para tabela `Post`
--

INSERT INTO `Post` (`idPost`, `idUsuario`, `dataPost`, `conteudoPost`, `Tag`, `Categoria_idCategoria`) VALUES
(26, 2, '28/08/2016 17:2', 'PALESTRA', 'PALESTRA', 2),
(30, 2, '28/08/2016 19:3', 'ESTE POST DEVERIA ESTAR SOMENTE EM MONITORIA', 'MONITORIA', 8),
(31, 2, '28/08/2016 19:3', 'ESTE POST DEVERIA ESTAR SOMENTE EM MINICURSO', 'mini curso', 1),
(32, 2, '28/08/2016 19:3', 'ESTE POST DEVERIA ESTAR SOMENTE EM PALESTRAS', 'PALESTRA', 2),
(33, 2, '28/08/2016 19:3', 'ESTE POST DEVERIA ESTAR SOMENTE EM ENTRETERIMENTO', 'ENTRETERIMENTO', 3),
(34, 2, '28/08/2016 19:3', 'ESTE POST DEVERIA ESTAR SOMENTE EM ESTAGIO', 'estágio', 4),
(35, 2, '28/08/2016 19:3', 'ESTE POST DEVERIA ESTAR SOMENTE EM ANUNCIO', 'anuncio', 5),
(36, 2, '28/08/2016 19:3', 'ESTE POST DEVERIA ESTAR SOMENTE EM PESQUISA E EXTENSÃO', 'PESQUISA E EXTE', 6),
(37, 2, '28/08/2016 19:3', 'ESTE POST DEVERIA ESTAR SOMENTE EM INICIACAO CIENTIFICA', 'IC', 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `TipoUsuario`
--

CREATE TABLE IF NOT EXISTS `TipoUsuario` (
  `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
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
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `identificacao` int(11) NOT NULL,
  `TipoUsuario_idTipoUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_Usuario_TipoUsuario1_idx` (`TipoUsuario_idTipoUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Fazendo dump de dados para tabela `Usuario`
--

INSERT INTO `Usuario` (`idUsuario`, `nome`, `sobrenome`, `senha`, `email`, `identificacao`, `TipoUsuario_idTipoUsuario`) VALUES
(1, 'Giovani', 'junior', '123456', 'gigi@123.com', 2, 1),
(2, 'Rafaela', 'CustÃ³dio', '123456', 'rafa@gmail.com', 1, 1);

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
  ADD CONSTRAINT `fk_Disciplina_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Disciplina_Curso1` FOREIGN KEY (`Curso_idCurso`) REFERENCES `Curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
