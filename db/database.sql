/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.1.19-MariaDB : Database - ticketing
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ticketing` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ticketing`;

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `commentID` bigint(20) NOT NULL AUTO_INCREMENT,
  `comments` varchar(255) NOT NULL,
  PRIMARY KEY (`commentID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

insert  into `comments`(`commentID`,`comments`) values (1,'Basic lang naman ang problema');

/*Table structure for table `issue` */

DROP TABLE IF EXISTS `issue`;

CREATE TABLE `issue` (
  `issue_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Issue_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`issue_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `issue` */

insert  into `issue`(`issue_id`,`Issue_desc`) values (1,'Bug'),(2,'fffffffffffffffffff'),(3,'fffffffffffffffffff'),(4,'test'),(5,'test'),(6,'fffffffffffffffffff');

/*Table structure for table `resolution` */

DROP TABLE IF EXISTS `resolution`;

CREATE TABLE `resolution` (
  `resolution_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `resolution` varchar(255) NOT NULL,
  PRIMARY KEY (`resolution_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `resolution` */

insert  into `resolution`(`resolution_id`,`resolution`) values (1,'Fixed'),(2,'Won\'t Fixed'),(3,'Duplicate'),(4,'Incomplete'),(5,'Cannot Reproduce'),(6,'Invalid'),(7,'Endorse done');

/*Table structure for table `severity` */

DROP TABLE IF EXISTS `severity`;

CREATE TABLE `severity` (
  `severity_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `severity` varchar(255) NOT NULL,
  PRIMARY KEY (`severity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `severity` */

insert  into `severity`(`severity_id`,`severity`) values (1,'Critical'),(2,'Severe'),(3,'Normal'),(4,'Minor'),(5,'Bug');

/*Table structure for table `status` */

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `status_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `status_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `status` */

insert  into `status`(`status_id`,`status_desc`) values (1,'Open'),(2,'Pending'),(3,'Resolved'),(4,'Reopened'),(5,'In Progress'),(6,'Waiting for Customer'),(7,'Closed with Pending Issues'),(8,'Endorsed'),(9,'Done');

/*Table structure for table `ticket` */

DROP TABLE IF EXISTS `ticket`;

CREATE TABLE `ticket` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(255) NOT NULL,
  `Reporter` varchar(255) NOT NULL,
  `email_add` varchar(255) NOT NULL,
  `cnum` varchar(255) NOT NULL,
  `problem_desc` char(1) NOT NULL,
  `issuetype_id` tinyint(4) DEFAULT NULL,
  `severity_id` varchar(255) DEFAULT NULL,
  `ticketstatus_id` varchar(255) DEFAULT NULL,
  `transactionID` varchar(100) DEFAULT '',
  `Attachment` varchar(100) DEFAULT NULL,
  `date_created` varchar(255) DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `ticket` */

insert  into `ticket`(`ID`,`CompanyName`,`Reporter`,`email_add`,`cnum`,`problem_desc`,`issuetype_id`,`severity_id`,`ticketstatus_id`,`transactionID`,`Attachment`,`date_created`) values (1,'Gicha\'s Night Club','Nigel Kim Gocila','nigel@gmail.com','09090909','C',1,'2','5','#45456',NULL,'0000-00-00'),(2,'Andanar\'s Spa','Mary','@mail.com','34596','j',3,'4','5','34534',NULL,'234324'),(3,'Robe\'s Tribe Weapons','Alyssa','@bundok.com','345','d',127,'4','4','345345',NULL,'453545'),(4,'ASDASD','ASDASD','ADASD','DASDASD','A',NULL,NULL,NULL,'','ASDASD',''),(5,'asdasdas','asdasd','assdasd','asdasd','a',NULL,NULL,NULL,'',NULL,'');

/*Table structure for table `ticket_progress` */

DROP TABLE IF EXISTS `ticket_progress`;

CREATE TABLE `ticket_progress` (
  `Ticketid` bigint(20) NOT NULL AUTO_INCREMENT,
  `ID` tinyint(4) NOT NULL,
  `DateReceived` varchar(255) NOT NULL,
  `dev_id` tinyint(4) NOT NULL,
  `resolution_id` tinyint(4) NOT NULL,
  `comment_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`Ticketid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ticket_progress` */

insert  into `ticket_progress`(`Ticketid`,`ID`,`DateReceived`,`dev_id`,`resolution_id`,`comment_id`) values (1,1,'just now',1,1,1);

/*Table structure for table `user_level` */

DROP TABLE IF EXISTS `user_level`;

CREATE TABLE `user_level` (
  `userlevel_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`userlevel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user_level` */

insert  into `user_level`(`userlevel_id`,`user_desc`) values (1,'Administrator'),(2,'Users');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userId` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) NOT NULL,
  `userlevel_id` tinyint(4) NOT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`userId`,`username`,`password`,`fname`,`mname`,`lname`,`userlevel_id`,`is_active`) values (1,'jason','$2y$11$.uQNK3axHeJxBmjGmjxaCennpbsqc5.L5kfJ8T5OaI9n69qFsv0ZK','Jason','L','Gicha',1,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
