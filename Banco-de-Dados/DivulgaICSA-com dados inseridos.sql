-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 31-Maio-2016 às 14:51
-- Versão do servidor: 5.5.47-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `DivulgaICSA`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Categoria`
--

CREATE TABLE IF NOT EXISTS `Categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `Categoria`
--

INSERT INTO `Categoria` (`idCategoria`, `nome`) VALUES
(1, 'Anuncio'),
(2, 'Lazer'),
(3, 'Estagio'),
(4, 'Pesquisa e Extensão');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Classificacao`
--

CREATE TABLE IF NOT EXISTS `Classificacao` (
  `Categoria_idCategoria` int(11) NOT NULL,
  `Post_idPost` int(11) NOT NULL,
  PRIMARY KEY (`Categoria_idCategoria`,`Post_idPost`),
  KEY `fk_Categoria_has_Post_Post1_idx` (`Post_idPost`),
  KEY `fk_Categoria_has_Post_Categoria1_idx` (`Categoria_idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `Classificacao`
--

INSERT INTO `Classificacao` (`Categoria_idCategoria`, `Post_idPost`) VALUES
(3, 1),
(2, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Comentario`
--

CREATE TABLE IF NOT EXISTS `Comentario` (
  `idComentario` int(11) NOT NULL AUTO_INCREMENT,
  `idPost` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `textoComentario` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idComentario`),
  KEY `fk_ComentPost_PostPost_idx` (`idPost`),
  KEY `fk_ComentUsr_UserUsr_idx` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `Comentario`
--

INSERT INTO `Comentario` (`idComentario`, `idPost`, `idUsuario`, `textoComentario`) VALUES
(1, 1, 4, 'Estou interessado'),
(2, 3, 2, 'Qual a localização ?');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Curso`
--

CREATE TABLE IF NOT EXISTS `Curso` (
  `idCurso` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCurso` varchar(45) NOT NULL,
  PRIMARY KEY (`idCurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `Curso`
--

INSERT INTO `Curso` (`idCurso`, `nomeCurso`) VALUES
(1, 'Economia'),
(2, 'Ciências Atuariais '),
(3, 'Administração');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `Disciplina`
--

INSERT INTO `Disciplina` (`idDisciplina`, `ementa`, `Usuario_idUsuario`, `nome`, `cargaHoraria`, `Curso_idCurso`) VALUES
(1, 'Integral e derivada', 3, 'Calculo I', '100h', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Post`
--

CREATE TABLE IF NOT EXISTS `Post` (
  `idPost` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) DEFAULT NULL,
  `dataPost` date DEFAULT NULL,
  `conteudoPost` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPost`),
  KEY `fk_Post_1_idx` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `Post`
--

INSERT INTO `Post` (`idPost`, `idUsuario`, `dataPost`, `conteudoPost`) VALUES
(1, 1, '2016-05-31', 'Estagio no cefet-mg'),
(2, 2, '2016-05-30', 'Evento do Levante Popular da juventude'),
(3, 3, '2016-05-28', 'Vaga em republica');

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
  `senha` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `cpf` int(11) DEFAULT NULL,
  `identificacao` int(11) NOT NULL,
  `TipoUsuario_idTipoUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_Usuario_TipoUsuario1_idx` (`TipoUsuario_idTipoUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `Usuario`
--

INSERT INTO `Usuario` (`idUsuario`, `nome`, `senha`, `email`, `cpf`, `identificacao`, `TipoUsuario_idTipoUsuario`) VALUES
(1, 'Rafaela Bárbara Custódio', '123', 'rafa@gmail.com', 0, 2147483647, 2),
(2, 'Giovani Junior', '321', 'gigi@yahoo.com', 4444, 2147483647, 1),
(3, 'Vitor', '333', 'vitao@hotmail.com', 33333, 748937930, 2),
(4, 'Caio', '0909090', 'caio@outlookl.com', 8776, 467568478, 1);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `Classificacao`
--
ALTER TABLE `Classificacao`
  ADD CONSTRAINT `fk_Categoria_has_Post_Categoria1` FOREIGN KEY (`Categoria_idCategoria`) REFERENCES `Categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Categoria_has_Post_Post1` FOREIGN KEY (`Post_idPost`) REFERENCES `Post` (`idPost`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Limitadores para a tabela `Post`
--
ALTER TABLE `Post`
  ADD CONSTRAINT `fk_PostUsr_UserUsr` FOREIGN KEY (`idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `fk_Usuario_TipoUsuario1` FOREIGN KEY (`TipoUsuario_idTipoUsuario`) REFERENCES `TipoUsuario` (`idTipoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
