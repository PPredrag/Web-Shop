-- MySQL Script generated by MySQL Workbench
-- 04/02/16 15:17:18
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema web
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `web` ;

-- -----------------------------------------------------
-- Schema web
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `web` DEFAULT CHARACTER SET utf8 ;
USE `web` ;

-- -----------------------------------------------------
-- Table `web`.`movies`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `web`.`movies` ;

CREATE TABLE IF NOT EXISTS `web`.`movies` (
  `idmovie` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `price` DECIMAL(6,2) NOT NULL,
  `image` VARCHAR(45) NOT NULL,
  `availability` TINYINT(1) NOT NULL,
  `supersaver` TINYINT(1) NULL,
  `idcategories` INT NOT NULL,
  PRIMARY KEY (`idmovie`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `web`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `web`.`categories` ;

CREATE TABLE IF NOT EXISTS `web`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(400) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;