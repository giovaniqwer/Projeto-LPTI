-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 27/06/2016 às 14:47
-- Versão do servidor: 5.5.49-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `LPTI`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Categoria`
--

CREATE TABLE IF NOT EXISTS `Categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Classificacao`
--

CREATE TABLE IF NOT EXISTS `Classificacao` (
  `Categoria_idCategoria` int(11) NOT NULL,
  `Post_idPost` int(11) NOT NULL,
  PRIMARY KEY (`Categoria_idCategoria`,`Post_idPost`),
  KEY `fk_Categoria_has_Post_Post1_idx` (`Post_idPost`),
  KEY `fk_Categoria_has_Post_Categoria1_idx` (`Categoria_idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Comentario`
--

CREATE TABLE IF NOT EXISTS `Comentario` (
  `idComentario` int(11) NOT NULL AUTO_INCREMENT,
  `idPost` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `textoComentario` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idComentario`),
  KEY `fk_ComentPost_PostPost_idx` (`idPost`),
  KEY `fk_ComentUsr_UserUsr_idx` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
--

CREATE TABLE IF NOT EXISTS `contatos` (
  `idContato` int(11) NOT NULL AUTO_INCREMENT,
  `nomeContato` varchar(45) NOT NULL,
  `emailContato` varchar(100) NOT NULL,
  `comentarioContato` varchar(1000) NOT NULL,
  PRIMARY KEY (`idContato`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

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
-- Estrutura para tabela `Post`
--

CREATE TABLE IF NOT EXISTS `Post` (
  `idPost` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) DEFAULT NULL,
  `dataPost` date DEFAULT NULL,
  `conteudoPost` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPost`),
  KEY `fk_Post_1_idx` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
(1, 'Administrador'),
(2, 'Aluno');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `identificacao` int(11) NOT NULL,
  `TipoUsuario_idTipoUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_Usuario_TipoUsuario1_idx` (`TipoUsuario_idTipoUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `Classificacao`
--
ALTER TABLE `Classificacao`
  ADD CONSTRAINT `fk_Categoria_has_Post_Categoria1` FOREIGN KEY (`Categoria_idCategoria`) REFERENCES `Categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Categoria_has_Post_Post1` FOREIGN KEY (`Post_idPost`) REFERENCES `Post` (`idPost`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Restrições para tabelas `Post`
--
ALTER TABLE `Post`
  ADD CONSTRAINT `fk_PostUsr_UserUsr` FOREIGN KEY (`idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `fk_Usuario_TipoUsuario1` FOREIGN KEY (`TipoUsuario_idTipoUsuario`) REFERENCES `TipoUsuario` (`idTipoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
