/*
SQLyog Community v12.4.3 (64 bit)
MySQL - 5.7.21-log : Database - smca
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`smca` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `smca`;

/*Table structure for table `devices` */

DROP TABLE IF EXISTS `devices`;

CREATE TABLE `devices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `serie` varchar(150) DEFAULT NULL,
  `ubicacion` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `devices` */

insert  into `devices`(`id`,`name`,`serie`,`ubicacion`) values 
(1,'Arduino UNO','125896',1),
(2,'Arduino UNO','582369',2),
(3,'Rasberry PI','586985',1),
(4,'Rasberry PI ',NULL,2);

/*Table structure for table `measures` */

DROP TABLE IF EXISTS `measures`;

CREATE TABLE `measures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sensor_id` int(11) NOT NULL,
  `value` double DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `measures` */

insert  into `measures`(`id`,`sensor_id`,`value`,`fecha`) values 
(1,1,3.5,'2018-07-23 22:25:48');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `sensors` */

DROP TABLE IF EXISTS `sensors`;

CREATE TABLE `sensors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `device_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_device_sensor` (`device_id`),
  CONSTRAINT `fk_device_sensor` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `sensors` */

insert  into `sensors`(`id`,`name`,`device_id`) values 
(1,'Temperatura',1),
(2,'Humedad',1),
(3,'CO2',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(1500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`last_name`,`email`,`login`,`password`,`remember_token`,`image`,`created_at`,`updated_at`) values 
(1,'Demo','1','demo@correo.com','mtrujillo','123456',NULL,'foto1.jpg',NULL,NULL);

/* Procedure structure for procedure `deleteUser` */

/*!50003 DROP PROCEDURE IF EXISTS  `deleteUser` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteUser`(IN user_id int(11))
begin
			DELETE FROM users where id = user_id;
			end */$$
DELIMITER ;

/* Procedure structure for procedure `selectUser` */

/*!50003 DROP PROCEDURE IF EXISTS  `selectUser` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `selectUser`()
begin
		select * from users order by id desc;
		end */$$
DELIMITER ;

/* Procedure structure for procedure `updateUser` */

/*!50003 DROP PROCEDURE IF EXISTS  `updateUser` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUser`(IN user_id int(11),firstName varchar(250),lastName varchar(250))
begin
			update users set first_name = firstName,last_name=lastName
			where id = user_id;
			end */$$
DELIMITER ;

/* Procedure structure for procedure `whereUser` */

/*!50003 DROP PROCEDURE IF EXISTS  `whereUser` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `whereUser`(IN user_id int(11))
begin
		select * from users where id=user_id;
		end */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
