# Host: localhost  (Version: 5.7.26)
# Date: 2022-09-25 14:42:44
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "wordlist"
#

DROP TABLE IF EXISTS `wordlist`;
CREATE TABLE `wordlist` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) DEFAULT NULL,
  `text` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "wordlist"
#

/*!40000 ALTER TABLE `wordlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `wordlist` ENABLE KEYS */;
