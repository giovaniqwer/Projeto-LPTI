-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 21-Set-2016 às 17:08
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
  `idCategoria` int(255) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
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
  `idComentario` int(255) NOT NULL AUTO_INCREMENT,
  `idPost` int(255) DEFAULT NULL,
  `idUsuario` int(255) DEFAULT NULL,
  `textoComentario` longtext,
  `dataComentario` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idComentario`),
  KEY `fk_ComentPost_PostPost_idx` (`idPost`),
  KEY `fk_ComentUsr_UserUsr_idx` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Extraindo dados da tabela `Comentario`
--

INSERT INTO `Comentario` (`idComentario`, `idPost`, `idUsuario`, `textoComentario`, `dataComentario`) VALUES
(6, 59, 8, 'comentario 1', '20/09/2016 13:46'),
(7, 58, 8, 'comentario 2', '20/09/2016 13:47'),
(8, 56, 8, 'teste', '20/09/2016 13:56'),
(9, 59, 8, 'oi', '20/09/2016 14:23'),
(10, 59, 8, 'rea', '20/09/2016 14:23'),
(12, 58, 8, 'hha', '20/09/2016 14:35'),
(13, 48, 8, 'teste', '20/09/2016 15:46'),
(14, 48, 9, 'oioi gente', '20/09/2016 15:48'),
(15, 48, 9, 'teste', '20/09/2016 15:48'),
(16, 48, 9, 'teste5', '20/09/2016 15:48'),
(17, 60, 8, 'oioi gente\r\n', '20/09/2016 15:51'),
(18, 60, 9, 'teste comentario grande', '20/09/2016 16:04'),
(19, 60, 9, 'gags', '20/09/2016 16:05'),
(20, 59, 9, 'fdsa', '20/09/2016 16:05'),
(21, 60, 8, 'jhfd', '20/09/2016 16:06'),
(22, 60, 9, 'hahahaha', '20/09/2016 16:07'),
(23, 60, 9, 'vssfg', '20/09/2016 16:09'),
(24, 48, 9, 'hfs', '20/09/2016 16:09'),
(25, 47, 9, 'teste', '20/09/2016 16:11'),
(26, 60, 9, 'fads', '20/09/2016 16:13'),
(27, 60, 9, 'fdsa', '20/09/2016 16:13'),
(29, 54, 9, 'haha', '20/09/2016 16:21'),
(30, 60, 8, 'haha', '21/09/2016 15:56'),
(31, 62, 8, 'teste', '21/09/2016 15:57'),
(32, 52, 9, 'safdsa', '21/09/2016 15:58'),
(33, 56, 9, 'fdsafdsa', '21/09/2016 15:58'),
(34, 54, 9, 'fdsafdsa', '21/09/2016 15:58'),
(35, 62, 9, 'fafsda', '21/09/2016 15:59'),
(36, 62, 9, 'n', '21/09/2016 16:13'),
(37, 62, 9, 'kjhf', '21/09/2016 16:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
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
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`idcontato`, `nomeContato`, `emailContato`, `comentarioContato`, `data`) VALUES
(3, 'Empresa Verde', 'verde@hotmail.com', 'Gostaria de divulgar uma vaga de estágio em nossa empresa!', '13/09/2016 22:14'),
(4, 'José da Silva', 'jose@gmail.com', 'Alugo casa para republica e gostaria de divulgar para os alunos da universidade!', '13/09/2016 22:15'),
(5, 'Maria Gomes', 'maria@yahoo.com', 'Adorei o site, parabéns!', '13/09/2016 22:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Curso`
--

CREATE TABLE IF NOT EXISTS `Curso` (
  `idCurso` int(255) NOT NULL AUTO_INCREMENT,
  `nomeCurso` varchar(50) NOT NULL,
  PRIMARY KEY (`idCurso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Disciplina`
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
  `idUsuario` int(255) DEFAULT NULL,
  `dataPost` varchar(50) DEFAULT NULL,
  `conteudoPost` longtext,
  `Tag` varchar(50) DEFAULT NULL,
  `Categoria_idCategoria` int(255) DEFAULT NULL,
  PRIMARY KEY (`idPost`),
  KEY `fk_Post_1_idx` (`idUsuario`),
  KEY `fk_Post_Categoria1_idx` (`Categoria_idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Extraindo dados da tabela `Post`
--

INSERT INTO `Post` (`idPost`, `idUsuario`, `dataPost`, `conteudoPost`, `Tag`, `Categoria_idCategoria`) VALUES
(47, 9, '13/09/2016 22:55', 'Nesta segunda-feira haverá jogo de volei as 8:30 na universidade, conto com a presenca de todos', 'volei', 3),
(48, 9, '13/09/2016 22:56', 'Vendo 900000000 xerox por apenas 30 reais, quem tiver interesse favor liga para o numero 5555-5555', 'xerox', 5),
(49, 9, '13/09/2016 22:59', 'quarta feira dia 32/13/1999 haverá mini curso na sala 111 sobre "Vender artes na praia"', 'vender artes na praia', 1),
(52, 8, '13/09/2016 23:07', 'Iniciacao cientifica: descobrir que vem primeiro o ovo ou a galinha', 'ovo', 7),
(54, 9, '13/09/2016 23:13', 'Galera amanha dia 15/01/2051 havera monitoria de calculo 2 na sala 555', 'calculo', 8),
(55, 8, '13/09/2016 23:15', 'Projeto de pesquisa e extensao para alunos de economia, professora maria da silva, email: maria@silva.com', 'economia', 6),
(56, 9, '13/09/2016 23:18', 'Estou fazendo uma pesquisa do projeto de pesquisa e extensao do prof joao da costa, e preciso que respondam o seguinte formulario.. xxxxx.com, obrigada', 'formulario', 6),
(58, 9, '13/09/2016 23:31', 'Carona para universidade todos os dias', 'carona', 9),
(59, 9, '13/09/2016 23:50', 'Palestra; Como ser um jovem empreendedor', 'jovem', 2),
(60, 8, '20/09/2016 15:51', 'Uma linguagem de programação é um método padronizado para comunicar instruções para um computador.[1] É um conjunto de regras sintáticas e semânticas usadas para definir um programa de computador.[2][Nota 1] Permite que um programador especifique precisamente sobre quais dados um computador vai atuar, como estes dados serão armazenados ou transmitidos e quais ações devem ser tomadas sob várias circunstâncias. Linguagens de programação podem ser usadas para expressar algoritmos com precisão.\r\n\r\nO conjunto de palavras (lexemas classificados em tokens), compostos de acordo com essas regras, constituem o código fonte de um software.[3] Esse código fonte é depois traduzido para código de máquina, que é executado pelo processador.[3]\r\n\r\nUma das principais metas das linguagens de programação é que programadores tenham uma maior produtividade, permitindo expressar suas intenções mais facilmente do que quando comparado com a linguagem que um computador entende nativamente (código de máquina).[4] Assim, linguagens de programação são projetadas para adotar uma sintaxe de nível mais alto, que pode ser mais facilmente entendida por programadores humanos. Linguagens de programação são ferramentas importantes para que programadores e engenheiros de software possam escrever programas mais organizados e com maior rapidez.\r\n\r\nLinguagens de programação também tornam os programas menos dependentes de computadores ou ambientes computacionais específicos (propriedade chamada de portabilidade[5]). Isto acontece porque programas escritos em linguagens de programação são traduzidos para o código de máquina do computador no qual será executado em vez de ser diretamente executado. Uma meta ambiciosa do Fortran, uma das primeiras linguagens de programação, era esta independência da máquina onde seria executada.[6][7]', 'haha', 4),
(62, 8, '21/09/2016 15:57', 'hahahaha', 'fjkdsfhajsd', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `TipoUsuario`
--

CREATE TABLE IF NOT EXISTS `TipoUsuario` (
  `idTipoUsuario` int(255) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) DEFAULT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `Usuario`
--

INSERT INTO `Usuario` (`idUsuario`, `nome`, `sobrenome`, `senha`, `email`, `identificacao`, `TipoUsuario_idTipoUsuario`, `Atividade`) VALUES
(8, 'Rafaela Custódio', 'Admin', '123456', 'admin@email.com', 201010, 1, 0),
(9, 'Rafaela', 'Aluno', '123456', 'aluno@email.com', 201301, 2, 0);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `Comentario`
--
ALTER TABLE `Comentario`
  ADD CONSTRAINT `fk_ComentPost_PostPost` FOREIGN KEY (`idPost`) REFERENCES `Post` (`idPost`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ComentUsr_UserUsr` FOREIGN KEY (`idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `Disciplina`
--
ALTER TABLE `Disciplina`
  ADD CONSTRAINT `fk_Disciplina_Curso1` FOREIGN KEY (`Curso_idCurso`) REFERENCES `Curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Disciplina_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
