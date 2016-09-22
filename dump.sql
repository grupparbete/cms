-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `coffeshop`;
CREATE DATABASE `coffeshop` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `coffeshop`;

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `aID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `text` mediumtext NOT NULL,
  `img` varchar(40) NOT NULL DEFAULT 'default.jpg',
  `userID` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`aID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `articles`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privileges` smallint(6) NOT NULL DEFAULT '1',
  PRIMARY KEY (`uID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2016-03-01 10:34:41