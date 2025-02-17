# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.43)
# Database: kate_portfolio
# Generation Time: 2019-03-21 14:57:52 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table about_me
# ------------------------------------------------------------

DROP TABLE IF EXISTS `about_me`;

CREATE TABLE `about_me` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(400) NOT NULL DEFAULT '',
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `about_me` WRITE;
/*!40000 ALTER TABLE `about_me` DISABLE KEYS */;

INSERT INTO `about_me` (`id`, `content`, `deleted`)
VALUES
	(1,'Someone told me that once you know how to code, the only limit is your imagination; I was captivated by that idea. Now that I\'m learning, I\'m hooked on the process.',0),
	(2,'Hi, I\'m Kate, a full stack developer in training. Learning to code is a career change for me. I was looking for a tangible, vocational skill to complement the \'soft\' skills I\'ve picked up. ',0),
	(10,'stuff  to edit and the stuff is edited',1),
	(11,'Content editing with extra things',1),
	(40,'More added text and edited on Thurs',1),
	(41,'Thursday things with more things',1),
	(42,'&lt;remove',1),
	(43,'More text to edit which has been edited',0),
	(44,'Add more text on',0);

/*!40000 ALTER TABLE `about_me` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table credentials
# ------------------------------------------------------------

DROP TABLE IF EXISTS `credentials`;

CREATE TABLE `credentials` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `credentials` WRITE;
/*!40000 ALTER TABLE `credentials` DISABLE KEYS */;

INSERT INTO `credentials` (`id`, `username`, `password`)
VALUES
	(1,'katestarks','$2y$10$PBzZpRZGz9md2Zj/JQGFhuQeXYavmOrVruNGgjJfM.cYse/sXi5le');

/*!40000 ALTER TABLE `credentials` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
