/*
SQLyog Community v13.0.1 (32 bit)
MySQL - 10.1.21-MariaDB : Database - smca
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

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `image` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`first_name`,`last_name`,`image`) values 
(6,'Martin','Trujillo Bustamnte','foto1.jpg'),
(7,'Josepht','Haman','foto2.jpg'),
(10,'Charles','Correa','foto5.jpg'),
(11,'Clara','Vasquez','foto6.jpg'),
(12,'Luis','Alva Castro','foto7.jpg'),
(13,'2','2','18789.jpg');

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
