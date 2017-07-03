/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.1.21-MariaDB : Database - ticketing
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `issue` */

insert  into `issue`(`issue_id`,`Issue_desc`) values (1,'Bug'),(2,'minor'),(5,'test');

/*Table structure for table `resolution` */

DROP TABLE IF EXISTS `resolution`;

CREATE TABLE `resolution` (
  `resolution_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `resolution` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`resolution_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `resolution` */

insert  into `resolution`(`resolution_id`,`resolution`,`description`) values (1,'Fixed',''),(2,'Won\'t Fixed',''),(3,'Duplicate',''),(4,'Incomplete',''),(5,'Cannot Reproduce',''),(6,'Invalid',''),(7,'Endorse done','');

/*Table structure for table `severity` */

DROP TABLE IF EXISTS `severity`;

CREATE TABLE `severity` (
  `severity_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `severity` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`severity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `severity` */

insert  into `severity`(`severity_id`,`severity`,`description`) values (1,'Critical',NULL),(2,'Severe',NULL),(3,'Normal',NULL),(4,'Minor','asdasdasd'),(6,' Bug','');

/*Table structure for table `status` */

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `status_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `status_desc` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `status` */

insert  into `status`(`status_id`,`status_desc`,`description`) values (1,'Open','Ens'),(2,'Pending',''),(3,'Resolved',''),(4,'Reopened',''),(5,'In Progress',''),(6,'Waiting for Customer',''),(7,'Closed with Pending Issues',''),(8,'Endorsed',''),(9,'Done','');

/*Table structure for table `ticket` */

DROP TABLE IF EXISTS `ticket`;

CREATE TABLE `ticket` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(255) NOT NULL,
  `Reporter` varchar(255) NOT NULL,
  `email_add` varchar(255) NOT NULL,
  `cnum` varchar(255) NOT NULL,
  `problem_sum` varchar(255) NOT NULL,
  `ticketstatus_id` varchar(255) DEFAULT NULL,
  `transactionID` varchar(100) NOT NULL DEFAULT '',
  `Attachment` varchar(100) DEFAULT NULL,
  `date_created` varchar(255) NOT NULL DEFAULT '',
  `problem_desc` varchar(255) NOT NULL,
  `severity_id` tinyint(4) DEFAULT NULL,
  `issue_type_id` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `ticket` */

insert  into `ticket`(`ID`,`CompanyName`,`Reporter`,`email_add`,`cnum`,`problem_sum`,`ticketstatus_id`,`transactionID`,`Attachment`,`date_created`,`problem_desc`,`severity_id`,`issue_type_id`) values (1,'Gicha\'s Night Club','Nigel Kim Gocila','nigel@gmail.com','09090909','t','5','#45456',NULL,'0000-00-00','',NULL,NULL),(2,'Andanar\'s Spa','Mary','@mail.com','34596','t','5','34534',NULL,'234324','',NULL,NULL),(3,'Robe\'s Tribe Weapons','Alyssa','@bundok.com','345','t','4','345345',NULL,'453545','',NULL,NULL),(6,'INS corp','Lorenz John Ensomo','09124759121','kurth@mail.com','t','1','#23424098','g.txt','2017-2-21','asdasdasdasdasd',NULL,NULL),(7,'Nigel\'s Footspa','Jason Gicha','09124759121','J@fortis.com','C','1','#0909999','g.txt','2017-2-24','We cannot login in the system',NULL,NULL),(8,'Kurth Spa','kurth morato','09124759121','k@fortis.com','N','1','#343434','g.txt','2017-3-1','I don\'t know how to use the system.',0,0),(9,'asdas`dtd`gdgd','hghj','hjfhj','hjfhj@mail.com','h','1','jhfhjfjfj','g.txt','2017-3-7','hjf',0,0),(10,'Globalport Batang Pier','Terrence Romeo','7','terrence@yahoo.com','Unfinished Championship','1','#07','daps.jpg','2017-3-7','Bad blood, because of the selfishness of terrence romeo on court.',0,0);

/*Table structure for table `ticket_progress` */

DROP TABLE IF EXISTS `ticket_progress`;

CREATE TABLE `ticket_progress` (
  `Ticketid` bigint(20) NOT NULL AUTO_INCREMENT,
  `DateReceived` varchar(255) NOT NULL,
  `assignto_id` tinyint(4) NOT NULL,
  `resolution_id` tinyint(4) NOT NULL,
  `comment_id` tinyint(4) NOT NULL,
  `assign_from_id` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`Ticketid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ticket_progress` */

insert  into `ticket_progress`(`Ticketid`,`DateReceived`,`assignto_id`,`resolution_id`,`comment_id`,`assign_from_id`) values (1,'just now',1,1,1,NULL);

/*Table structure for table `user_level` */

DROP TABLE IF EXISTS `user_level`;

CREATE TABLE `user_level` (
  `userlevel_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`userlevel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `user_level` */

insert  into `user_level`(`userlevel_id`,`user_desc`) values (1,'Administrator'),(2,'Users'),(3,'Watcher');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`userId`,`username`,`password`,`fname`,`mname`,`lname`,`userlevel_id`,`is_active`) values (1,'jason','$2y$11$.uQNK3axHeJxBmjGmjxaCennpbsqc5.L5kfJ8T5OaI9n69qFsv0ZK','Jason','L','Gicha',1,1),(4,'Helterbran@gmail.com','$2y$11$IJ9g1/g0RVLpGj1G2jt6YOjdwP7K5wT/.n05zgXtepNudIzzYokKq','Andrian','G','Andanar',1,1),(5,'pringle@yahoo.com','$2y$11$Z5fI7s.bXcCgwQBgtb5yCuljcYZnJ.jQEhGM4U2sfP5.qr9RqCPQy','Lorenz','John','Ensomo',2,0),(6,'bryantpascual@yahoo.com','$2y$11$nBepjmLRKTa9eIU2GgQep.2xcdeHhn.lSlxoP7G6oGU0g.QIMgutK','Bryant','b','Pascual',1,1),(8,'lj@fortis.com','$2y$11$Mm6AYbrIMcL6/iJa/u5sQ.rpU6h7lrFo5ZniLGdJl3sOnNczAZz4O','LJ','','Ensomo',2,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
