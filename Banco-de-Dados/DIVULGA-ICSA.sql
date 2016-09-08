-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 01-Set-2016 às 12:07
-- Versão do servidor: 5.5.47-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `LPTI`
--
CREATE DATABASE IF NOT EXISTS `LPTI` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `LPTI`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Categoria`
--

CREATE TABLE IF NOT EXISTS `Categoria` (
  `idCategoria` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `Categoria`
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
-- Estrutura da tabela `Comentario`
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
-- Estrutura da tabela `contatos`
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
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`idcontato`, `nomeContato`, `emailContato`, `comentarioContato`, `data`) VALUES
(1, 'PEDRO', 'empresa@empresa.com', '4', '28/08/2016 12:55'),
(2, 'Rafaela', 'rafaela011_custodio@hotmail.com', 'HAHA', '28/08/2016 14:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Curso`
--

CREATE TABLE IF NOT EXISTS `Curso` (
  `idCurso` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCurso` varchar(45) NOT NULL,
  PRIMARY KEY (`idCurso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Disciplina`
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
-- Estrutura da tabela `Evento`
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
-- Estrutura da tabela `Post`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Extraindo dados da tabela `Post`
--

INSERT INTO `Post` (`idPost`, `idUsuario`, `dataPost`, `conteudoPost`, `Tag`, `Categoria_idCategoria`) VALUES
(42, 3, '01/09/2016 10:2', 'Olá', 'oi', 1),
(43, 3, '01/09/2016 10:2', 'carai', 'Oi', 4),
(45, 3, '01/09/2016 11:0', 'hsahahahshsjfsdja', 'dfsdfsdfsd', 5),
(46, 3, '01/09/2016 11:0', 'hsfdhasjdhj', 'dfsdfsdfsd', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `TipoUsuario`
--

CREATE TABLE IF NOT EXISTS `TipoUsuario` (
  `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTipoUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `TipoUsuario`
--

INSERT INTO `TipoUsuario` (`idTipoUsuario`, `tipo`) VALUES
(1, 'admin'),
(2, 'aluno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `identificacao` int(11) NOT NULL,
  `Atividade` int(1) NOT NULL,
  `TipoUsuario_idTipoUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_Usuario_TipoUsuario1_idx` (`TipoUsuario_idTipoUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `Usuario`
--

INSERT INTO `Usuario` (`idUsuario`, `nome`, `sobrenome`, `senha`, `email`, `identificacao`, `Atividade`, `TipoUsuario_idTipoUsuario`) VALUES
(3, 'Rafaela', 'Custódio', '123456', 'rafa@gmail.com', 1, 0, 1),
(4, 'Ráfãélâ', 'Silva', '123456', 'rafaela@gmail.com', 2, 0, 1),
(5, 'Vítor', 'Melo', '123456', 'vitor@gmail.com', 2, 0, 1);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `Comentario`
--
ALTER TABLE `Comentario`
  ADD CONSTRAINT `fk_ComentPost_PostPost` FOREIGN KEY (`idPost`) REFERENCES `Post` (`idPost`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ComentUsr_UserUsr` FOREIGN KEY (`idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `Disciplina`
--
ALTER TABLE `Disciplina`
  ADD CONSTRAINT `fk_Disciplina_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Disciplina_Curso1` FOREIGN KEY (`Curso_idCurso`) REFERENCES `Curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `Evento`
--
ALTER TABLE `Evento`
  ADD CONSTRAINT `fk_Evento_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `Post`
--
ALTER TABLE `Post`
  ADD CONSTRAINT `fk_PostUsr_UserUsr` FOREIGN KEY (`idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Post_Categoria1` FOREIGN KEY (`Categoria_idCategoria`) REFERENCES `Categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `fk_Usuario_TipoUsuario1` FOREIGN KEY (`TipoUsuario_idTipoUsuario`) REFERENCES `TipoUsuario` (`idTipoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
