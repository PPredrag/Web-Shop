-- MySQL Script generated by MySQL Workbench
-- 03/24/16 12:35:58
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema automobili
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `automobili` ;

-- -----------------------------------------------------
-- Schema automobili
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `automobili` DEFAULT CHARACTER SET utf8 ;
USE `automobili` ;

-- -----------------------------------------------------
-- Table `automobili`.`Model`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `automobili`.`Model` ;

CREATE TABLE IF NOT EXISTS `automobili`.`Model` (
  `idModel` INT NOT NULL AUTO_INCREMENT,
  `Ime` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idModel`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `automobili`.`Tip`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `automobili`.`Tip` ;

CREATE TABLE IF NOT EXISTS `automobili`.`Tip` (
  `idTip` INT NOT NULL AUTO_INCREMENT,
  `idModel` INT NOT NULL,
  `Model` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTip`),
  INDEX `idTip_Auto_idx` (`idModel` ASC),
  CONSTRAINT `idTip_Auto`
    FOREIGN KEY (`idModel`)
    REFERENCES `automobili`.`Model` (`idModel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;