SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Usuario` (
  `idUsuario` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `cpf` INT NOT NULL,
  `curso` INT NULL,
  `matricula` INT NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Categoria` (
  `idCategoria` INT NOT NULL,
  `idPost` INT NULL,
  `idUsuario` INT NULL,
  PRIMARY KEY (`idCategoria`),
  INDEX `fk_CatPost_PostPost_idx` (`idPost` ASC),
  INDEX `fk_CatUsr_UserUsr_idx` (`idUsuario` ASC),
  CONSTRAINT `fk_CatPost_PostPost`
    FOREIGN KEY (`idPost`)
    REFERENCES `mydb`.`Post` (`idPost`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_CatUsr_UserUsr`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `mydb`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Post` (
  `idPost` INT NOT NULL,
  `idCatergoria` INT NULL,
  `idUsuario` INT NULL,
  `data_post` DATE NULL,
  `conteudoPost` VARCHAR(45) NULL,
  PRIMARY KEY (`idPost`),
  INDEX `fk_Post_1_idx` (`idUsuario` ASC),
  INDEX `fk_PostCat_CatCat_idx` (`idCatergoria` ASC),
  CONSTRAINT `fk_PostUsr_UserUsr`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `mydb`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PostCat_CatCat`
    FOREIGN KEY (`idCatergoria`)
    REFERENCES `mydb`.`Categoria` (`idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Comentario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Comentario` (
  `idComentario` INT NOT NULL,
  `idPost` INT NULL,
  `idUsuario` INT NULL,
  PRIMARY KEY (`idComentario`),
  INDEX `fk_ComentPost_PostPost_idx` (`idPost` ASC),
  INDEX `fk_ComentUsr_UserUsr_idx` (`idUsuario` ASC),
  CONSTRAINT `fk_ComentPost_PostPost`
    FOREIGN KEY (`idPost`)
    REFERENCES `mydb`.`Post` (`idPost`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ComentUsr_UserUsr`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `mydb`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
