/*
Navicat MySQL Data Transfer

Source Server         : adsfgcnbm
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : studentsorganizer

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-07-07 20:39:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for departments
-- ----------------------------
DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of departments
-- ----------------------------
INSERT INTO `departments` VALUES ('1', 'Practica');
INSERT INTO `departments` VALUES ('2', 'NSA');

-- ----------------------------
-- Table structure for department_organizes_event
-- ----------------------------
DROP TABLE IF EXISTS `department_organizes_event`;
CREATE TABLE `department_organizes_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `events_id` int(11) NOT NULL,
  `departments_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_events_has_departments_departments1_idx` (`departments_id`),
  KEY `fk_events_has_departments_events1_idx` (`events_id`),
  CONSTRAINT `fk_events_has_departments_departments1` FOREIGN KEY (`departments_id`) REFERENCES `departments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_events_has_departments_events1` FOREIGN KEY (`events_id`) REFERENCES `events` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of department_organizes_event
-- ----------------------------
INSERT INTO `department_organizes_event` VALUES ('1', '1', '2');
INSERT INTO `department_organizes_event` VALUES ('2', '2', '1');

-- ----------------------------
-- Table structure for events
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remarks` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of events
-- ----------------------------
INSERT INTO `events` VALUES ('1', '2014-07-06 00:00:00', '2015-09-20 00:00:00', 'PHP');
INSERT INTO `events` VALUES ('2', '2015-07-07 17:59:13', '2015-06-20 00:00:00', 'Java');

-- ----------------------------
-- Table structure for faculties
-- ----------------------------
DROP TABLE IF EXISTS `faculties`;
CREATE TABLE `faculties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of faculties
-- ----------------------------
INSERT INTO `faculties` VALUES ('1', 'Informatica');
INSERT INTO `faculties` VALUES ('2', 'Automatica');

-- ----------------------------
-- Table structure for faculties_has_students
-- ----------------------------
DROP TABLE IF EXISTS `faculties_has_students`;
CREATE TABLE `faculties_has_students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faculties_id` int(11) NOT NULL,
  `students_id` int(11) NOT NULL,
  `faculty_start_year` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_faculties_has_students_students1_idx` (`students_id`),
  KEY `fk_faculties_has_students_faculties1_idx` (`faculties_id`),
  CONSTRAINT `fk_faculties_has_students_faculties1` FOREIGN KEY (`faculties_id`) REFERENCES `faculties` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_faculties_has_students_students1` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of faculties_has_students
-- ----------------------------
INSERT INTO `faculties_has_students` VALUES ('1', '1', '1', '2012');
INSERT INTO `faculties_has_students` VALUES ('2', '2', '2', '2013');

-- ----------------------------
-- Table structure for phone_number_types
-- ----------------------------
DROP TABLE IF EXISTS `phone_number_types`;
CREATE TABLE `phone_number_types` (
  `id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of phone_number_types
-- ----------------------------
INSERT INTO `phone_number_types` VALUES ('1', 'Orange');
INSERT INTO `phone_number_types` VALUES ('2', 'Cossmote');

-- ----------------------------
-- Table structure for students
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of students
-- ----------------------------
INSERT INTO `students` VALUES ('1', 'Voicu', 'Florentin', '1', '1994-05-04', 'voicu@yahoo.com');
INSERT INTO `students` VALUES ('2', 'Ion', 'Dan', '1', '1994-01-01', 'iondan@yahoo.com');
INSERT INTO `students` VALUES ('3', 'John', 'Doe', '1', '1994-01-01', 'john@example.com');
INSERT INTO `students` VALUES ('4', 'John', 'Doe', '1', '1994-01-01', 'john@example.com');
INSERT INTO `students` VALUES ('5', 'John', 'Doe', '1', '1994-01-01', 'john@example.com');
INSERT INTO `students` VALUES ('6', 'Alina', 'Maria', '2', '1990-01-01', 'john@example.com');
INSERT INTO `students` VALUES ('7', 'Alina', 'Maria', '2', '1990-01-01', 'john@example.com');

-- ----------------------------
-- Table structure for students_participates
-- ----------------------------
DROP TABLE IF EXISTS `students_participates`;
CREATE TABLE `students_participates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `events_id` int(11) NOT NULL,
  `students_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_events_has_students_students1` (`students_id`),
  KEY `fk_events_has_students_events1` (`events_id`),
  CONSTRAINT `fk_events_has_students_events1` FOREIGN KEY (`events_id`) REFERENCES `events` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_events_has_students_students1` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of students_participates
-- ----------------------------
INSERT INTO `students_participates` VALUES ('1', '2', '1');
INSERT INTO `students_participates` VALUES ('2', '1', '2');

-- ----------------------------
-- Table structure for tasks
-- ----------------------------
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `events_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tasks_events1_idx` (`events_id`),
  CONSTRAINT `fk_tasks_events1` FOREIGN KEY (`events_id`) REFERENCES `events` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tasks
-- ----------------------------
INSERT INTO `tasks` VALUES ('1', 'PHP', 'Programming Language', '1');
INSERT INTO `tasks` VALUES ('2', 'Java', 'Java Swing', '2');
