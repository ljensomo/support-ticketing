/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - ticketing
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ticketing` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `ticketing`;

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `commentID` bigint(20) NOT NULL AUTO_INCREMENT,
  `comments` varchar(255) NOT NULL,
  `ticket_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`commentID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `comments` */

insert  into `comments`(`commentID`,`comments`,`ticket_id`) values 
(1,'Basic lang naman ang problema',1);

/*Table structure for table `companies` */

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `contact_no` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `priority_level_id` tinyint(1) NOT NULL DEFAULT 3,
  `date_created` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `companies` */

insert  into `companies`(`id`,`company_name`,`contact_no`,`email`,`priority_level_id`,`date_created`) values 
(1,'Emmerson Electric Co.',NULL,NULL,3,'2025-08-24 12:41:45'),
(6,'sample','09','sample@client.com',3,'2025-08-24 12:41:45'),
(7,'client','09','sample@client.com',3,'2025-08-24 12:41:45'),
(8,'Fortis Technologies Corp','09','fortis@mail.com',3,'2025-08-24 12:41:45'),
(9,'a','09','09',3,'2025-08-24 12:41:45'),
(10,'a','a','a',3,'2025-08-24 12:41:45'),
(11,'b','b','b',3,'2025-08-24 12:41:45'),
(12,'Kurth\'s Spa','09','kurthjohnquimora@gmail.com',3,'2025-08-24 12:41:45'),
(15,'client1','09','client1@mail.com',3,'2025-08-24 12:41:45'),
(16,'client2','0922','client2@mail.com',3,'2025-08-24 12:41:45'),
(17,'ins','09','ins@mail.com',3,'2025-08-24 12:41:45'),
(18,'qui','09','quimora85@gmail.com',3,'2025-08-24 12:41:45'),
(19,'Go\'s Bulalohan','098','go123@mail.com',3,'2025-08-24 12:41:45'),
(20,'Proserve','091234435','proserve@gmail.com',3,'2025-08-24 12:41:45'),
(21,'bless company','143','libisensomo@yahoo.com',3,'2025-08-24 12:41:45'),
(22,'Add Client','098908098','client@emai.com',3,'2025-08-24 12:41:45'),
(23,'Facebook Inc','098','facebook@email.com',3,'2025-08-24 12:41:45'),
(24,'Globe Telecom','098','gt@email.com',3,'2025-08-24 12:41:45'),
(25,'Robe Corp','098','robe-corp@gmail.com',3,'2025-08-24 12:41:45'),
(26,'Alaska Corporation','09752731061','alaska@gmail.com',3,'2025-08-24 12:41:45'),
(27,'Test Company','','test@asd',3,'2025-08-24 13:00:03');

/*Table structure for table `company_projects` */

DROP TABLE IF EXISTS `company_projects`;

CREATE TABLE `company_projects` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `date_implemented` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `company_projects` */

insert  into `company_projects`(`id`,`company_id`,`project_id`,`date_implemented`) values 
(1,11,0,NULL),
(2,11,0,NULL),
(3,16,1,NULL),
(4,16,2,NULL),
(5,16,3,NULL),
(6,0,0,NULL),
(7,20,0,NULL),
(8,1,0,NULL),
(9,0,0,NULL),
(10,0,0,NULL),
(11,0,0,NULL),
(12,2,0,NULL),
(13,24,0,NULL),
(14,24,0,NULL),
(15,24,0,NULL),
(16,16,4,NULL),
(17,16,5,NULL),
(18,16,6,NULL),
(19,16,7,NULL),
(20,16,8,NULL),
(21,16,9,NULL),
(22,20,0,NULL),
(23,20,0,NULL),
(24,20,0,NULL),
(25,20,0,NULL),
(26,20,0,NULL),
(27,20,0,NULL),
(28,20,0,NULL),
(29,1,0,NULL),
(30,1,0,NULL),
(31,25,0,NULL),
(32,26,0,NULL),
(33,26,0,NULL),
(34,26,0,NULL),
(35,1,1,'2025-08-22'),
(37,6,1,'2025-08-09');

/*Table structure for table `company_users` */

DROP TABLE IF EXISTS `company_users`;

CREATE TABLE `company_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `company_users` */

insert  into `company_users`(`id`,`company_id`,`user_id`) values 
(1,1,1);

/*Table structure for table `issue` */

DROP TABLE IF EXISTS `issue`;

CREATE TABLE `issue` (
  `issue_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Issue_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`issue_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `issue` */

insert  into `issue`(`issue_id`,`Issue_desc`) values 
(1,'Bug'),
(2,'minor'),
(5,'test');

/*Table structure for table `projects` */

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `date_implemented` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `projects` */

insert  into `projects`(`id`,`project_name`,`description`,`date_implemented`) values 
(1,'Test Project','This is a test project','2025-08-22');

/*Table structure for table `reporters` */

DROP TABLE IF EXISTS `reporters`;

CREATE TABLE `reporters` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` tinyint(4) NOT NULL,
  `project_id` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `reporters` */

insert  into `reporters`(`id`,`user_id`,`project_id`) values 
(1,38,NULL),
(2,39,NULL),
(3,47,13),
(4,49,31);

/*Table structure for table `resolution` */

DROP TABLE IF EXISTS `resolution`;

CREATE TABLE `resolution` (
  `resolution_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `resolution` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`resolution_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `resolution` */

insert  into `resolution`(`resolution_id`,`resolution`,`description`) values 
(1,'Fixed',' '),
(2,'Won\'t Fixed',''),
(3,'Duplicate',''),
(4,'Incomplete',''),
(5,'Cannot Reproduce',''),
(6,'Invalid',''),
(7,'Endorse done',''),
(8,'qwert','qwerty');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `role_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`role_desc`) values 
(1,'Administrator'),
(2,'User'),
(3,'Watcher'),
(4,'Client'),
(5,'Reporter');

/*Table structure for table `severity` */

DROP TABLE IF EXISTS `severity`;

CREATE TABLE `severity` (
  `severity_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `severity` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`severity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `severity` */

insert  into `severity`(`severity_id`,`severity`,`description`) values 
(1,'Fixed',' '),
(2,'Severe',NULL),
(3,'Normal',NULL),
(4,'Minor',''),
(6,' Bug',''),
(8,'Damaged','Unidentified');

/*Table structure for table `status` */

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `status_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `status_desc` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `status` */

insert  into `status`(`status_id`,`status_desc`,`description`) values 
(1,'Open','Closed'),
(2,'Pending',''),
(3,'Resolved',''),
(4,'Reopened',''),
(5,'In Progress',''),
(6,'Waiting for Customer',''),
(7,'Closed with Pending Issues',''),
(8,'Endorsed',''),
(14,'qwer','qwert'),
(15,'Ayos','Sira');

/*Table structure for table `ticket_details` */

DROP TABLE IF EXISTS `ticket_details`;

CREATE TABLE `ticket_details` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ticket_id` tinyint(4) NOT NULL,
  `problem_subject` text NOT NULL,
  `problem_desc` text NOT NULL,
  `attachment` text NOT NULL,
  `issue_status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `ticket_details` */

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `ticket_progress` */

insert  into `ticket_progress`(`Ticketid`,`DateReceived`,`assignto_id`,`resolution_id`,`comment_id`,`assign_from_id`) values 
(1,'just now',1,1,1,NULL);

/*Table structure for table `tickets` */

DROP TABLE IF EXISTS `tickets`;

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_by` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `subject` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `severity_id` tinyint(1) NOT NULL,
  `issue_type_id` tinyint(1) DEFAULT NULL,
  `transactionID` varchar(100) NOT NULL DEFAULT '',
  `date_created` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tickets` */

insert  into `tickets`(`id`,`created_by`,`email`,`contact_no`,`subject`,`description`,`status`,`severity_id`,`issue_type_id`,`transactionID`,`date_created`) values 
(1,1,'nigel@gmail.com','09090909','','problem ',1,0,NULL,'#45456','0000-00-00 00:00:00'),
(2,0,'@mail.com','34596','','problem 2',1,0,NULL,'34534','0000-00-00 00:00:00'),
(3,0,'@bundok.com','345','','problem 3',2,0,NULL,'345345','0000-00-00 00:00:00'),
(6,0,'09124759121','kurth@mail.com','','problem 4',2,0,NULL,'#23424098','2017-02-21 00:00:00'),
(7,0,'09124759121','J@fortis.com','','can\'t upload',2,0,NULL,'#0909999','2017-02-24 00:00:00'),
(8,0,'09124759121','k@fortis.com','','slow internet connection',3,0,0,'#343434','2017-03-01 00:00:00'),
(9,0,'09999878666','hjfhj@mail.com','','problem of keyboard',3,0,0,'jhfhjfjfj','2017-03-07 00:00:00'),
(10,0,'09009909766','terrence@yahoo.com','','Unfinished Championship',3,0,0,'#07','2017-03-07 00:00:00'),
(11,0,'09123412736','kharwyn09@gmail.com','','login',4,0,0,'2534162','2017-03-08 00:00:00'),
(12,0,'09090909095','lj@fortis.com','','Crashed',4,0,0,'#454544','2017-03-08 00:00:00'),
(13,0,'09098098123','lj@fortis.com','','login',4,0,0,'234324','2017-03-08 00:00:00'),
(14,0,'09809888777','lj@fortis.com','','Cannot Process',5,0,0,'#3465','2017-03-08 00:00:00'),
(15,0,'90072334245','Hen@sm.com','','Cannot find data.',5,0,0,'7897','2017-03-08 00:00:00'),
(16,0,'09292929225','sdfsdfsdfdsf@dfgf.hg','','can\'t connect internet connection',5,0,0,'452255','2017-03-08 00:00:00'),
(17,0,'09444434343','sdfsdfsdfdsf@dfgf.hg','','can\'t open file',6,0,0,'353455','2017-03-08 00:00:00'),
(18,0,'1134','assd@yahoo.com','','asd',1,0,0,'12212121','2017-03-29 00:00:00'),
(19,0,'09094631878','raffy@kahitAno.com','','We Can\'t Login ',1,0,0,'234567890','2017-03-31 00:00:00'),
(20,0,'0935-7979-5','noelg1000@gmail.com','','PC in lab2 dilapidated',1,0,0,'201703311301','2017-03-31 00:00:00'),
(21,0,'444444','banag@gmail.com','','no connection',1,0,0,'444444','2017-04-24 00:00:00'),
(22,0,'098','ens@fortis.com','','sub',1,0,0,'098988','2017-05-04 00:00:00'),
(23,0,'1234','qwerty2@QWERTY','','WERTY',1,0,0,'QWER','2017-07-07 00:00:00');

/*Table structure for table `user_accounts` */

DROP TABLE IF EXISTS `user_accounts`;

CREATE TABLE `user_accounts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `user_accounts` */

insert  into `user_accounts`(`id`,`user_id`,`username`,`password`) values 
(1,2,'jason','$2y$11$.uQNK3axHeJxBmjGmjxaCennpbsqc5.L5kfJ8T5OaI9n69qFsv0ZK'),
(8,1,'lj@fortis.com','$2y$11$Mm6AYbrIMcL6/iJa/u5sQ.rpU6h7lrFo5ZniLGdJl3sOnNczAZz4O'),
(11,0,'kurthjohnquimora@gmail.com','$2y$11$loXFKo2CYBuoiCEYlGBSues1AAg5Q.SpuBsduqNX1ZWJJX.ml48ZK'),
(12,0,'admin','$2y$11$l4PZrjZMvOFI0ppTQthRf.sIxySPPhw/4FlrAQBENCm78Xt4Jksg6'),
(13,0,'watcher','$2y$11$4yPY6RCRWfHGMjVdUhwJjen/t07zBfp6XRCeF7udKG.PQiaKSBUr6'),
(17,0,'ss@duaso.com','$2y$11$pFuyW2T9GZ2L3xWw60qn.OjVdYnbfqX6HH6xlGmCGSBNfybxJmvNS'),
(18,0,'emmerson@fortis.com','$2y$11$RDevXM5hkPa3BTBaV48cxu/CKauT4kJzpkI8WtXq4iT9cHZkWk1AG'),
(19,0,'novet@fortis.com','$2y$11$15d5FcWSzdNH/SqlLOBpq.8QoxYNTymI7e1I/iapypIVncCobjmCe'),
(20,0,'pag_ibig@fortis..com','$2y$11$1V391wSY2s6zzLKd.ba6bOgIW2fDR5KIIvBtkpw64wUrZQ3ZXYzR.'),
(27,13,'micah','$2y$11$Zp0sal10T9bWRE41nJmbVuSgvUkngP1a1Kuj/1ESS4oYK4YEk.Q5q'),
(28,14,'143','$2y$11$BjzImzHNBSMn5m02c99CmOqDz127iNoyL06PPSoUk3jhJsynFp.r6'),
(31,4,'client','$2y$11$hp1xeoh5mG.dikt/OELizOQo1OIwtoz5BAPhDzPPb/ZcxPnsrjhuy'),
(33,10,'a','$2y$11$KDkoP7SAmkEiaZlQ7pjUw.qXA4G/2tsqJEE0uxCoQj1ADNTFW2qoi'),
(34,24,'b','$2y$11$CgtIi6l38yVtA1jGx.0ZQOOiMPS6iG6tJzxeHZzvbtpdOzk7WfhTO'),
(35,25,'a','a'),
(36,26,'kurth@mail.com','$2y$11$gB0ugftjhWmqth4ttlbZD.WWH20anXP93nbOaJTa8jGGZ9L7DKH0K'),
(37,28,'client2','$2y$11$Jyh8ANFVV2Ju8PawE0Vijul19sFKmO4Nlwn2Odd34igLOrKRbCrZ.'),
(38,29,'ins','$2y$11$fmQ0Bixjt1./yInCL831qufMKJYsi435bEfVIOJxSp6WUFALdz7zK'),
(39,30,'qui','$2y$11$YfiOZ4tOeEpH4eVN5uSgYeJfVmNlMJtU3OKMUA1cS1zKM/y4QDs8K'),
(40,38,'master','$2y$11$K815fJp3vMK25/ySJ..ZG.mylPUVOBadEuV5eV8A1j/KCfEi/ONiG'),
(41,39,'go','$2y$11$lL8dA8KXwb9rTvo575h1eO5M1ARcZTRpL7uZEVb1THB.kUpizvag.'),
(42,40,'gobulalo','$2y$11$HzuahmXpWKGmYuR5uR0zZeTYUwdHelLlqxGTFFQEKZJySqAveHXSC'),
(43,41,'proserve','$2y$11$0P0yGRd/loxu2JYUhNaslepqO1skzs0cRKucQPTN0p0JPRhFgbuwy'),
(44,42,'blessyou','$2y$11$buQjZDIT961l3pPjVedAhuARc.5lUc1vapWg9dcpqC/HEWv.PofVC'),
(45,43,'sample client','$2y$11$xmFOl5/mcjqxi1QN0GuZP.TllAHT3IRgQYoq1FRaBvzbgZZLS/lUO'),
(46,44,'doli','$2y$11$QMB79ALVdg0Q53zZaHrWs.Nq8BD0QzcV613XKd89hCnWGCcSt8KGC'),
(47,45,'facebook','$2y$11$iCMSkGPvY9vaiB4yPMay0e.LMjHy0yJDHSQS9Os3Su8wDfu7e7h8m'),
(48,46,'globe','$2y$11$RsS9xqTdaoHXRNFyERKz5uM4ODNdoB7czp2B.GmOpn8CwLYSprVE2'),
(49,47,'bryant','$2y$11$6Ra6Glgt0tshJ/5nAXyDm.sArlTZ3eQ9.lOGuqr..v/HPYnkHtp6W'),
(50,48,'robe','$2y$11$Gh5FdUZdSde7jrYYXzzTvu5N7w.2VcWlnDdnT/RcftXlMrpb3fgj.'),
(51,49,'robee','$2y$11$UcG//AmBKAzMooXZXAmCYOHj7wlUaPZPxvuvD27Gy6Z3bvLEFmt4W'),
(52,50,'alaska','$2y$11$tkQaoR7zYUeKzLevYGOGqOQuGQJMC1VgpjSVCwT0wdYuUPw3KIv8m');

/*Table structure for table `user_roles` */

DROP TABLE IF EXISTS `user_roles`;

CREATE TABLE `user_roles` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `user_roles` */

insert  into `user_roles`(`id`,`user_id`,`role_id`) values 
(1,1,1),
(2,2,1),
(3,13,2),
(4,14,1),
(9,10,4),
(10,24,4),
(11,25,4),
(12,26,4),
(13,28,4),
(14,29,4),
(15,30,4),
(16,38,5),
(17,39,5),
(18,40,4),
(19,41,4),
(20,42,4),
(21,43,4),
(22,44,1),
(23,45,4),
(24,46,4),
(25,47,5),
(26,48,4),
(27,49,5),
(28,50,4),
(29,56,2);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `contact_no` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_online` tinyint(1) NOT NULL DEFAULT 1,
  `avatar` varchar(150) DEFAULT 'andrian6.jpg',
  `date_created` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`fname`,`mname`,`lname`,`contact_no`,`email`,`username`,`password`,`is_active`,`is_online`,`avatar`,`date_created`) values 
(1,'LJ','','Ensomo','09124759121','ensomolj@gmail.com','ljensomo','',1,1,'andrian6.jpg','2025-08-23 22:32:23'),
(2,'Jason','L','Gicha','09','jason@gmail.com','','',1,0,'andrian6.jpg','2025-08-23 22:32:23'),
(13,'Blessie Micah','P','Mativo','09','micah@gmail.com','','',1,0,'andrian6.jpg','2025-08-23 22:32:23'),
(14,'Andrian','G.','Andanar','0945969302','ffffff@fortis.com','','',1,0,'andrian6.jpg','2025-08-23 22:32:23'),
(19,'sample',NULL,NULL,NULL,NULL,'','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(23,'a',NULL,NULL,NULL,NULL,'','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(24,'b',NULL,NULL,NULL,NULL,'','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(25,'Emmerson Electric Co.',NULL,NULL,NULL,NULL,'','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(26,'Kurth\'s Spa',NULL,NULL,NULL,NULL,'','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(27,'client1',NULL,NULL,NULL,NULL,'','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(28,'client2',NULL,NULL,NULL,NULL,'','',1,0,'andrian6.jpg','2025-08-23 22:32:23'),
(29,'ins',NULL,NULL,NULL,NULL,'','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(30,'qui',NULL,NULL,NULL,NULL,'','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(31,'Mark James','J','Escalante','0988','esc@email.com','','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(32,'Jonel','M','Navarro','0988','jonel@fortis.com','','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(33,'a','a','a','a','a','','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(34,'b','b','b','b','b','','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(35,'b','b','b','b','b','','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(36,'c','c','c','c','c','','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(37,'Mac','C','Lucero','098','mac@mailc.com','','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(38,'Harold','M','Lucero','098','master@mail.com','','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(39,'Reymart','C','Go','0988','go@mail.com','','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(40,'Go\'s Bulalohan',NULL,NULL,NULL,NULL,'','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(41,'Proserve',NULL,NULL,NULL,NULL,'','',1,0,'andrian6.jpg','2025-08-23 22:32:23'),
(42,'bless company',NULL,NULL,NULL,NULL,'','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(43,'Add Client',NULL,NULL,NULL,NULL,'','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(44,'Juan','','Doli','098','doli@email.com','','',1,0,'andrian6.jpg','2025-08-23 22:32:23'),
(45,'Facebook Inc',NULL,NULL,NULL,NULL,'','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(46,'Globe Telecom',NULL,NULL,NULL,NULL,'','',1,0,'andrian6.jpg','2025-08-23 22:32:23'),
(47,'qwer','qwer','qwer','1234','qwert@wert','','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(48,'Robe Corp',NULL,NULL,NULL,NULL,'','',1,0,'andrian6.jpg','2025-08-23 22:32:23'),
(49,'robe ','','robe','098','robe@robe.com','','',0,0,'andrian6.jpg','2025-08-23 22:32:23'),
(50,'Alaska Corporation',NULL,NULL,NULL,NULL,'','',1,0,'andrian6.jpg','2025-08-23 22:32:23'),
(51,'test','','test','123','test@test','test','$2y$11$zI4d47JdLCHYe8/AmPM86ee1xx.uZTpzGhPTXTwFAOWpzIESzNfpG',1,1,'andrian6.jpg','2025-08-24 12:11:21'),
(52,'test','','test','123','test@test','test2','$2y$11$ouBxlNbdTkpsm9Q4q3Rr1uvW.Xxew99T33ZgX7fWxXfUWpcYrz6aO',1,1,'andrian6.jpg','2025-08-24 12:12:18'),
(53,'test','','test','123','test@test','test23','$2y$11$9vZzK4njo617fhSXy8cmxuTZB1wPZX4j3v3pmJ08SEUeqLlIjmfh6',1,1,'andrian6.jpg','2025-08-24 12:12:38'),
(54,'test','','test','123','test@test','test233','$2y$11$0ktHPIGcHuK9MP0BJnt1zeOPgVkLGU1aPMmBoG0R660VHSyQ5YYoG',1,1,'andrian6.jpg','2025-08-24 12:13:02'),
(55,'test','','test','123','test@test','test2333','$2y$11$2ap5gH55H0f4tZxbNWFJU.r0rGL2owjbVOJ4Uw0QKmgCE8ooZtRbu',1,1,'andrian6.jpg','2025-08-24 12:13:18'),
(56,'test','','test','123','test@testtest2','test23333','$2y$11$bB.XUMexhsjLPJ3P9RJ0KeIr35LZo8ZPiFOUF6xgwC4y3Q/xpOrXy',0,0,'andrian6.jpg','2025-08-24 12:13:44');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
