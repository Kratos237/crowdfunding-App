/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.13-MariaDB : Database - api
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`api` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_croatian_mysql561_ci */;

USE `api`;

/*Table structure for table `compte` */

DROP TABLE IF EXISTS `compte`;

CREATE TABLE `compte` (
  `id` varchar(35) COLLATE utf8_croatian_mysql561_ci NOT NULL,
  `solde` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `compte_ibfk_1` FOREIGN KEY (`id`) REFERENCES `utilisateur` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_mysql561_ci;

/*Data for the table `compte` */

/*Table structure for table `utilisateur` */

DROP TABLE IF EXISTS `utilisateur`;

CREATE TABLE `utilisateur` (
  `nom` varchar(250) COLLATE utf8_croatian_mysql561_ci NOT NULL,
  `phone` varchar(35) COLLATE utf8_croatian_mysql561_ci NOT NULL,
  PRIMARY KEY (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_mysql561_ci;

/*Data for the table `utilisateur` */

insert  into `utilisateur`(`nom`,`phone`) values ('8uuikigkuik','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
