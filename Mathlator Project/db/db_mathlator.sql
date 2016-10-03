-- MySQL Script generated by MySQL Workbench
-- 09/26/16 19:49:18
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`country`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`country` (
  `idt_country` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nme_country` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`idt_country`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`avatar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`avatar` (
  `idt_avatar` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nme_avatar` VARCHAR(45) NOT NULL COMMENT '',
  `url_avatar` VARCHAR(200) NOT NULL COMMENT '',
  PRIMARY KEY (`idt_avatar`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user` (
  `idt_user` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nme_user` VARCHAR(45) NOT NULL COMMENT '',
  `nick_user` VARCHAR(45) NOT NULL COMMENT '',
  `gender_user` VARCHAR(1) NOT NULL COMMENT '',
  `email_user` VARCHAR(45) NOT NULL COMMENT '',
  `pass_user` VARCHAR(45) NOT NULL COMMENT '',
  `col_country` INT NOT NULL COMMENT '',
  `col_avatar` INT NULL COMMENT '',
  PRIMARY KEY (`idt_user`)  COMMENT '',
  INDEX `fk_user_country_idx` (`col_country` ASC)  COMMENT '',
  INDEX `fk_user_avatar1_idx` (`col_avatar` ASC)  COMMENT '',
  CONSTRAINT `fk_user_country`
    FOREIGN KEY (`col_country`)
    REFERENCES `mydb`.`country` (`idt_country`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_avatar1`
    FOREIGN KEY (`col_avatar`)
    REFERENCES `mydb`.`avatar` (`idt_avatar`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`firewall`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`firewall` (
  `idt_firewall` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `ip_user` VARCHAR(45) NOT NULL COMMENT '',
  `time` DATETIME NOT NULL COMMENT '',
  `count` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idt_firewall`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tool_is_prime`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tool_is_prime` (
  `idt_tool_is_prime` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `idt_user` INT NOT NULL COMMENT '',
  `nme_user` VARCHAR(45) NOT NULL COMMENT '',
  `rate_value` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idt_tool_is_prime`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tool_prime_number_interval`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tool_prime_number_interval` (
  `idt_tool_prime_number_interval` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `idt_user` INT NOT NULL COMMENT '',
  `nme_user` VARCHAR(45) NOT NULL COMMENT '',
  `rate_value` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idt_tool_prime_number_interval`)  COMMENT '')
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
