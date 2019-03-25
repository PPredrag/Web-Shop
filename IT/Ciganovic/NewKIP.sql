-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema NewKIP
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema NewKIP
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `NewKIP` DEFAULT CHARACTER SET utf8 ;
USE `NewKIP` ;

-- -----------------------------------------------------
-- Table `NewKIP`.`OBLAST`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `NewKIP`.`OBLAST` (
  `ID_OBLAST` INT NOT NULL AUTO_INCREMENT,
  `NAZIV` VARCHAR(45) NULL,
  PRIMARY KEY (`ID_OBLAST`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `NewKIP`.`KNJIGA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `NewKIP`.`KNJIGA` (
  `ID_KNJIGA` INT NOT NULL AUTO_INCREMENT,
  `NASLOV` VARCHAR(45) NOT NULL,
  `ID_OBLAST` INT NOT NULL,
  PRIMARY KEY (`ID_KNJIGA`),
  INDEX `FK_KNJIGA_OBLAST_IDOBLAST_idx` (`ID_OBLAST` ASC),
  CONSTRAINT `FK_KNJIGA_OBLAST_IDOBLAST`
    FOREIGN KEY (`ID_OBLAST`)
    REFERENCES `NewKIP`.`OBLAST` (`ID_OBLAST`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `NewKIP`.`DRZAVA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `NewKIP`.`DRZAVA` (
  `ID_DRZAVA` INT NOT NULL AUTO_INCREMENT,
  `NAZIV` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID_DRZAVA`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `NewKIP`.`IZDAVAC_STATUS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `NewKIP`.`IZDAVAC_STATUS` (
  `ID_STATUS` INT NOT NULL AUTO_INCREMENT,
  `NAZIV` INT NOT NULL,
  PRIMARY KEY (`ID_STATUS`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `NewKIP`.`IZDAVAC`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `NewKIP`.`IZDAVAC` (
  `ID_IZDAVAC` INT NOT NULL AUTO_INCREMENT,
  `NAZIV` VARCHAR(45) NOT NULL,
  `ID_STATUS` INT NOT NULL,
  `ID_DRZAVA` INT NOT NULL,
  PRIMARY KEY (`ID_IZDAVAC`),
  INDEX `FK_IZDAVAC_DRZAVA_IDDRZAVA_idx` (`ID_DRZAVA` ASC),
  INDEX `FK_IZDAVAC_IZDAVACSTATUS_IDSTATUS_idx` (`ID_STATUS` ASC),
  CONSTRAINT `FK_IZDAVAC_DRZAVA_IDDRZAVA`
    FOREIGN KEY (`ID_DRZAVA`)
    REFERENCES `NewKIP`.`DRZAVA` (`ID_DRZAVA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_IZDAVAC_IZDAVACSTATUS_IDSTATUS`
    FOREIGN KEY (`ID_STATUS`)
    REFERENCES `NewKIP`.`IZDAVAC_STATUS` (`ID_STATUS`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `NewKIP`.`PISAC`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `NewKIP`.`PISAC` (
  `ID_PISAC` INT NOT NULL AUTO_INCREMENT,
  `IME` VARCHAR(45) NOT NULL,
  `PREZIME` VARCHAR(45) NOT NULL,
  `BR_NASLOVA` SMALLINT NULL,
  `ID_DRZAVA` INT NOT NULL,
  PRIMARY KEY (`ID_PISAC`),
  INDEX `FK_PISAC_DRZAVA_IDDRZAVA_idx` (`ID_DRZAVA` ASC),
  CONSTRAINT `FK_PISAC_DRZAVA_IDDRZAVA`
    FOREIGN KEY (`ID_DRZAVA`)
    REFERENCES `NewKIP`.`DRZAVA` (`ID_DRZAVA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `NewKIP`.`KNJIGA_IZDAVAC`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `NewKIP`.`KNJIGA_IZDAVAC` (
  `ID_KNJIGA` INT NOT NULL,
  `ID_IZDAVAC` INT NOT NULL,
  `IZDANJE` SMALLINT NOT NULL,
  `GODINA` SMALLINT NULL,
  `TIRAZ` INT(11) NULL,
  INDEX `FK_KI_K_KSIF_idx` (`ID_KNJIGA` ASC),
  INDEX `FK_KI_I_ISIF_idx` (`ID_IZDAVAC` ASC),
  CONSTRAINT `FK_KNJIGAIZDAVAC_KNJIGA_IDKNJIGA`
    FOREIGN KEY (`ID_KNJIGA`)
    REFERENCES `NewKIP`.`KNJIGA` (`ID_KNJIGA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_KNJIGAIZDAVAC_IZDAVAC_IDIZDAVAC`
    FOREIGN KEY (`ID_IZDAVAC`)
    REFERENCES `NewKIP`.`IZDAVAC` (`ID_IZDAVAC`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `NewKIP`.`KNJIGA_PISAC`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `NewKIP`.`KNJIGA_PISAC` (
  `ID_KNJIGA` INT NOT NULL,
  `ID_PISAC` INT NOT NULL,
  `R_BROJ` SMALLINT NOT NULL,
  INDEX `FK_KP_P_PSIF_idx` (`ID_PISAC` ASC),
  INDEX `FK_KP_K_KSIF_idx` (`ID_KNJIGA` ASC),
  CONSTRAINT `FK_KNJIGAPISAC_PISAC_IDPISAC`
    FOREIGN KEY (`ID_PISAC`)
    REFERENCES `NewKIP`.`PISAC` (`ID_PISAC`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_KNJIGAPISAC_KNJIGA_IDKNJIGA`
    FOREIGN KEY (`ID_KNJIGA`)
    REFERENCES `NewKIP`.`KNJIGA` (`ID_KNJIGA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;