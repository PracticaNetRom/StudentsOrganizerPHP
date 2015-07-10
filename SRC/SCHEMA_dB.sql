-- MySQL Workbench Synchronization
-- Generated: 2015-07-03 17:01
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: b.v.lapadat

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER SCHEMA `studentsorganizer`  DEFAULT COLLATE utf8_general_ci ;

CREATE TABLE IF NOT EXISTS `studentsorganizer`.`students` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `first_name` VARCHAR(45) NOT NULL COMMENT '',
  `last_name` VARCHAR(45) NOT NULL COMMENT '',
  `gender` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `birth_date` DATE NULL DEFAULT NULL COMMENT '',
  `email` VARCHAR(254) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `studentsorganizer`.`phone_numbers` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `number` VARCHAR(12) NOT NULL COMMENT '',
  `students_id` INT(11) NOT NULL COMMENT '',
  `phone_number_types_id` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_phone_numbers_students` (`students_id` ASC)  COMMENT '',
  INDEX `fk_phone_numbers_phone_number_types1` (`phone_number_types_id` ASC)  COMMENT '',
  CONSTRAINT `fk_phone_numbers_students`
    FOREIGN KEY (`students_id`)
    REFERENCES `studentsorganizer`.`students` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_phone_numbers_phone_number_types1`
    FOREIGN KEY (`phone_number_types_id`)
    REFERENCES `studentsorganizer`.`phone_number_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `studentsorganizer`.`phone_number_types` (
  `id` INT(11) NOT NULL COMMENT '',
  `type` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `studentsorganizer`.`events` (
  `id` INT(11) NOT NULL COMMENT '',
  `start_date` TIMESTAMP NOT NULL DEFAULT NOW() COMMENT '',
  `end_date` TIMESTAMP NOT NULL DEFAULT NOW() COMMENT '',
  `remarks` TEXT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `studentsorganizer`.`departments` (
  `id` INT(11) NOT NULL COMMENT '',
  `name` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `studentsorganizer`.`students_participates` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `events_id` INT(11) NOT NULL COMMENT '',
  `students_id` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_events_has_students_students1` (`students_id` ASC)  COMMENT '',
  INDEX `fk_events_has_students_events1` (`events_id` ASC)  COMMENT '',
  CONSTRAINT `fk_events_has_students_events1`
    FOREIGN KEY (`events_id`)
    REFERENCES `studentsorganizer`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_events_has_students_students1`
    FOREIGN KEY (`students_id`)
    REFERENCES `studentsorganizer`.`students` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `studentsorganizer`.`department_organizes_event` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `events_id` INT(11) NOT NULL COMMENT '',
  `departments_id` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_events_has_departments_departments1_idx` (`departments_id` ASC)  COMMENT '',
  INDEX `fk_events_has_departments_events1_idx` (`events_id` ASC)  COMMENT '',
  CONSTRAINT `fk_events_has_departments_events1`
    FOREIGN KEY (`events_id`)
    REFERENCES `studentsorganizer`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_events_has_departments_departments1`
    FOREIGN KEY (`departments_id`)
    REFERENCES `studentsorganizer`.`departments` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `studentsorganizer`.`tasks` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NOT NULL COMMENT '',
  `description` TEXT NOT NULL COMMENT '',
  `events_id` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_tasks_events1_idx` (`events_id` ASC)  COMMENT '',
  CONSTRAINT `fk_tasks_events1`
    FOREIGN KEY (`events_id`)
    REFERENCES `studentsorganizer`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `studentsorganizer`.`faculties` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `studentsorganizer`.`faculties_has_students` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `faculties_id` INT(11) NOT NULL COMMENT '',
  `students_id` INT(11) NOT NULL COMMENT '',
  `faculty_start_year` YEAR NULL DEFAULT NULL COMMENT '',
  INDEX `fk_faculties_has_students_students1_idx` (`students_id` ASC)  COMMENT '',
  INDEX `fk_faculties_has_students_faculties1_idx` (`faculties_id` ASC)  COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  CONSTRAINT `fk_faculties_has_students_faculties1`
    FOREIGN KEY (`faculties_id`)
    REFERENCES `studentsorganizer`.`faculties` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_faculties_has_students_students1`
    FOREIGN KEY (`students_id`)
    REFERENCES `studentsorganizer`.`students` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
