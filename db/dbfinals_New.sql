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
  `ticket_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`commentID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

insert  into `comments`(`commentID`,`comments`,`ticket_id`) values (1,'Basic lang naman ang problema',1);

/*Table structure for table `companies` */

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `contact_no` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `companies` */

insert  into `companies`(`id`,`company_name`,`contact_no`,`email_address`) values (1,'Emmerson Electric Co.',NULL,NULL),(6,'sample','09','sample@client.com'),(7,'client','09','sample@client.com'),(8,'Fortis Technologies Corp','09','fortis@mail.com'),(9,'a','09','09'),(10,'a','a','a'),(11,'b','b','b'),(12,'Kurth\'s Spa','09','kurthjohnquimora@gmail.com'),(15,'client1','09','client1@mail.com'),(16,'client2','09','client2@mail.com'),(17,'ins','09','ins@mail.com'),(18,'qui','09','quimora85@gmail.com'),(19,'Go\'s Bulalohan','098','go123@mail.com'),(20,'Proserve','091234435','proserve@gmail.com');

/*Table structure for table `company_proj` */

DROP TABLE IF EXISTS `company_proj`;

CREATE TABLE `company_proj` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_id` tinyint(4) NOT NULL,
  `project_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `company_proj` */

insert  into `company_proj`(`id`,`company_id`,`project_desc`) values (1,11,'project_1'),(2,11,'project_2'),(3,16,'1'),(4,16,'2'),(5,16,'3'),(6,0,'project_A'),(7,20,'web portal');

/*Table structure for table `issue` */

DROP TABLE IF EXISTS `issue`;

CREATE TABLE `issue` (
  `issue_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Issue_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`issue_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `issue` */

insert  into `issue`(`issue_id`,`Issue_desc`) values (1,'Bug'),(2,'minor'),(5,'test');

/*Table structure for table `reporters` */

DROP TABLE IF EXISTS `reporters`;

CREATE TABLE `reporters` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` tinyint(4) NOT NULL,
  `project_id` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `reporters` */

insert  into `reporters`(`id`,`user_id`,`project_id`) values (1,38,NULL),(2,39,NULL);

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

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `userlevel_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`userlevel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `roles` */

insert  into `roles`(`userlevel_id`,`user_desc`) values (1,'Administrator'),(2,'User'),(3,'Watcher'),(4,'Client'),(5,'Reporter');

/*Table structure for table `severity` */

DROP TABLE IF EXISTS `severity`;

CREATE TABLE `severity` (
  `severity_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `severity` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`severity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `severity` */

insert  into `severity`(`severity_id`,`severity`,`description`) values (1,'Critical',NULL),(2,'Severe',NULL),(3,'Normal',NULL),(4,'Minor',''),(6,' Bug','');

/*Table structure for table `status` */

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `status_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `status_desc` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `status` */

insert  into `status`(`status_id`,`status_desc`,`description`) values (1,'Open',''),(2,'Pending',''),(3,'Resolved',''),(4,'Reopened',''),(5,'In Progress',''),(6,'Waiting for Customer',''),(7,'Closed with Pending Issues',''),(8,'Endorsed',''),(9,'Done','');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `ticket` */

insert  into `ticket`(`ID`,`CompanyName`,`Reporter`,`email_add`,`cnum`,`problem_sum`,`ticketstatus_id`,`transactionID`,`Attachment`,`date_created`,`problem_desc`,`severity_id`,`issue_type_id`) values (1,'Gicha\'s Night Club','Nigel Kim Gocila','nigel@gmail.com','09090909','problem ','1','#45456',NULL,'0000-00-00','',NULL,NULL),(2,'Andanar\'s Spa','Mary','@mail.com','34596','problem 2','1','34534',NULL,'234324','',NULL,NULL),(3,'Robe\'s Tribe Weapons','Alyssa','@bundok.com','345','problem 3','2','345345',NULL,'453545','',NULL,NULL),(6,'INS corp','Lorenz John Ensomo','09124759121','kurth@mail.com','problem 4','2','#23424098','g.txt','2017-2-21','asdasdasdasdasd',NULL,NULL),(7,'Nigel\'s Footspa','Jason Gicha','09124759121','J@fortis.com','can\'t upload','2','#0909999','g.txt','2017-2-24','We cannot login in the system',NULL,NULL),(8,'Kurth Spa','kurth morato','09124759121','k@fortis.com','slow internet connection','3','#343434','g.txt','2017-3-1','I don\'t know how to use the system.',0,0),(9,'asdas`dtd`gdgd','hghj','09999878666','hjfhj@mail.com','problem of keyboard','3','jhfhjfjfj','g.txt','2017-3-7','hjf',0,0),(10,'Globalport Batang Pier','Terrence Romeo','09009909766','terrence@yahoo.com','Unfinished Championship','3','#07','daps.jpg','2017-3-7','Bad blood, because of the selfishness of terrence romeo on court.',0,0),(11,'SM','kharlwyn','09123412736','kharwyn09@gmail.com','login','4','2534162','Screen Shot 2017-02-03 at 16.21.48.png','2017-3-8','can\'t log in',0,0),(12,'Ins corp','Lorenz John','09090909095','lj@fortis.com','Crashed','4','#454544','lesson01.doc','2017-3-8','We cannot use the system properly.',0,0),(13,'INs corp ','Jason gicha ','09098098123','lj@fortis.com','login','4','234324','Screen Shot 2017-02-03 at 16.21.48.png','2017-3-8','asddasdasd',0,0),(14,'Ins corp','LJ Ensomo','09809888777','lj@fortis.com','Cannot Process','5','#3465','FULLTEXT01.pdf','2017-3-8','We cannot start the process because of the errors!',0,0),(15,'SM','Henry Sy','90072334245','Hen@sm.com','Cannot find data.','5','7897','Proposal Letter.docx','2017-3-8','We cannot some data in the system.',0,0),(16,'colegio de sta teresa','novet','09292929225','sdfsdfsdfdsf@dfgf.hg','can\'t connect internet connection','5','452255','Screen Shot 2017-02-03 at 16.21.48.png','2017-3-8','We can\'t',0,0),(17,'555 Tuna','justin','09444434343','sdfsdfsdfdsf@dfgf.hg','can\'t open file','6','353455','Screen Shot 2017-02-03 at 16.21.48.png','2017-3-8','sdfsdfsdfsdf',0,0),(18,'asd','asd','1134','assd@yahoo.com','asd','1','12212121','Term Paper.docx','2017-3-29','asd',0,0),(19,'Colegio de Sta.Teresa de Avila','Raffy Tulfo','09094631878','raffy@kahitAno.com','We Can\'t Login ','1','234567890','dfdPaint.png','2017-3-31','May Error Ung System',0,0),(20,'CSTA','Noel','0935-7979-5','noelg1000@gmail.com','PC in lab2 dilapidated','1','201703311301','sudo-su-.png','2017-3-31','Not working, destroyed PC',0,0),(21,'Emmerson Service','banag','444444','banag@gmail.com','no connection','1','444444','cbo.txt','2017-4-24','how could we accees the internet using the system',0,0),(22,'client2','ensomo LJ','098','ens@fortis.com','sub','1','098988','Fortis_Technologies_Inc_docu.docx','2017-5-4','suuububububububu',0,0);

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

/*Table structure for table `user_accounts` */

DROP TABLE IF EXISTS `user_accounts`;

CREATE TABLE `user_accounts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

/*Data for the table `user_accounts` */

insert  into `user_accounts`(`id`,`user_id`,`username`,`password`) values (1,2,'jason','$2y$11$.uQNK3axHeJxBmjGmjxaCennpbsqc5.L5kfJ8T5OaI9n69qFsv0ZK'),(8,1,'lj@fortis.com','$2y$11$Mm6AYbrIMcL6/iJa/u5sQ.rpU6h7lrFo5ZniLGdJl3sOnNczAZz4O'),(11,0,'kurthjohnquimora@gmail.com','$2y$11$loXFKo2CYBuoiCEYlGBSues1AAg5Q.SpuBsduqNX1ZWJJX.ml48ZK'),(12,0,'admin','$2y$11$l4PZrjZMvOFI0ppTQthRf.sIxySPPhw/4FlrAQBENCm78Xt4Jksg6'),(13,0,'watcher','$2y$11$4yPY6RCRWfHGMjVdUhwJjen/t07zBfp6XRCeF7udKG.PQiaKSBUr6'),(17,0,'ss@duaso.com','$2y$11$pFuyW2T9GZ2L3xWw60qn.OjVdYnbfqX6HH6xlGmCGSBNfybxJmvNS'),(18,0,'emmerson@fortis.com','$2y$11$RDevXM5hkPa3BTBaV48cxu/CKauT4kJzpkI8WtXq4iT9cHZkWk1AG'),(19,0,'novet@fortis.com','$2y$11$15d5FcWSzdNH/SqlLOBpq.8QoxYNTymI7e1I/iapypIVncCobjmCe'),(20,0,'pag_ibig@fortis..com','$2y$11$1V391wSY2s6zzLKd.ba6bOgIW2fDR5KIIvBtkpw64wUrZQ3ZXYzR.'),(27,13,'micah','$2y$11$Zp0sal10T9bWRE41nJmbVuSgvUkngP1a1Kuj/1ESS4oYK4YEk.Q5q'),(28,14,'143','$2y$11$BjzImzHNBSMn5m02c99CmOqDz127iNoyL06PPSoUk3jhJsynFp.r6'),(31,4,'client','$2y$11$hp1xeoh5mG.dikt/OELizOQo1OIwtoz5BAPhDzPPb/ZcxPnsrjhuy'),(33,10,'a','$2y$11$KDkoP7SAmkEiaZlQ7pjUw.qXA4G/2tsqJEE0uxCoQj1ADNTFW2qoi'),(34,24,'b','$2y$11$CgtIi6l38yVtA1jGx.0ZQOOiMPS6iG6tJzxeHZzvbtpdOzk7WfhTO'),(35,25,'a','a'),(36,26,'kurth@mail.com','$2y$11$gB0ugftjhWmqth4ttlbZD.WWH20anXP93nbOaJTa8jGGZ9L7DKH0K'),(37,28,'client2','$2y$11$Jyh8ANFVV2Ju8PawE0Vijul19sFKmO4Nlwn2Odd34igLOrKRbCrZ.'),(38,29,'ins','$2y$11$fmQ0Bixjt1./yInCL831qufMKJYsi435bEfVIOJxSp6WUFALdz7zK'),(39,30,'qui','$2y$11$YfiOZ4tOeEpH4eVN5uSgYeJfVmNlMJtU3OKMUA1cS1zKM/y4QDs8K'),(40,38,'master','$2y$11$K815fJp3vMK25/ySJ..ZG.mylPUVOBadEuV5eV8A1j/KCfEi/ONiG'),(41,39,'go','$2y$11$lL8dA8KXwb9rTvo575h1eO5M1ARcZTRpL7uZEVb1THB.kUpizvag.'),(42,40,'gobulalo','$2y$11$HzuahmXpWKGmYuR5uR0zZeTYUwdHelLlqxGTFFQEKZJySqAveHXSC'),(43,41,'proserve','$2y$11$0P0yGRd/loxu2JYUhNaslepqO1skzs0cRKucQPTN0p0JPRhFgbuwy');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `company_id` tinyint(4) DEFAULT NULL,
  `cnum` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `is_active` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`fname`,`mname`,`lname`,`company_id`,`cnum`,`email`,`is_active`) values (1,'LJ',NULL,'Ensomo',0,'09124759121','ensomolj@gmail.com',1),(2,'Jason','L','Gicha',NULL,'09','jason@gmail.com',1),(13,'Blessie Micah','P','Mativo',NULL,'09','micah@gmail.com',1),(14,'Johnamar','S','Acong',NULL,'0945969302','ffffff@fortis.com',0),(19,'sample',NULL,NULL,6,NULL,NULL,NULL),(23,'a',NULL,NULL,9,NULL,NULL,NULL),(24,'b',NULL,NULL,11,NULL,NULL,NULL),(25,'Emmerson Electric Co.',NULL,NULL,1,NULL,NULL,NULL),(26,'Kurth\'s Spa',NULL,NULL,12,NULL,NULL,0),(27,'client1',NULL,NULL,15,NULL,NULL,0),(28,'client2',NULL,NULL,16,NULL,NULL,1),(29,'ins',NULL,NULL,17,NULL,NULL,0),(30,'qui',NULL,NULL,18,NULL,NULL,0),(31,'Mark James','J','Escalante',0,'0988','esc@email.com',0),(32,'Jonel','M','Navarro',16,'0988','jonel@fortis.com',0),(33,'a','a','a',16,'a','a',0),(34,'b','b','b',16,'b','b',0),(35,'b','b','b',16,'b','b',0),(36,'c','c','c',16,'c','c',0),(37,'Mac','C','Lucero',NULL,'098','mac@mailc.com',0),(38,'Harold','M','Lucero',16,'098','master@mail.com',0),(39,'Reymart','C','Go',16,'0988','go@mail.com',0),(40,'Go\'s Bulalohan',NULL,NULL,19,NULL,NULL,0),(41,'Proserve',NULL,NULL,20,NULL,NULL,1);

/*Table structure for table `users_roles` */

DROP TABLE IF EXISTS `users_roles`;

CREATE TABLE `users_roles` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` tinyint(4) NOT NULL,
  `user_role` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `users_roles` */

insert  into `users_roles`(`id`,`user_id`,`user_role`) values (1,1,2),(2,2,1),(3,13,2),(4,14,1),(9,10,4),(10,24,4),(11,25,4),(12,26,4),(13,28,4),(14,29,4),(15,30,4),(16,38,5),(17,39,5),(18,40,4),(19,41,4);

/*Table structure for table `client_info` */

DROP TABLE IF EXISTS `client_info`;

/*!50001 DROP VIEW IF EXISTS `client_info` */;
/*!50001 DROP TABLE IF EXISTS `client_info` */;

/*!50001 CREATE TABLE  `client_info`(
 `user_id` bigint(20) ,
 `id` bigint(20) ,
 `company_name` varchar(255) ,
 `contact_no` varchar(100) ,
 `email_address` varchar(100) ,
 `is_active` tinyint(2) ,
 `fname` varchar(255) ,
 `mname` varchar(255) ,
 `lname` varchar(255) ,
 `username` varchar(255) ,
 `password` varchar(255) ,
 `user_desc` varchar(255) 
)*/;

/*Table structure for table `user_info` */

DROP TABLE IF EXISTS `user_info`;

/*!50001 DROP VIEW IF EXISTS `user_info` */;
/*!50001 DROP TABLE IF EXISTS `user_info` */;

/*!50001 CREATE TABLE  `user_info`(
 `user_id` bigint(20) ,
 `fname` varchar(255) ,
 `mname` varchar(255) ,
 `lname` varchar(255) ,
 `company_id` tinyint(4) ,
 `cnum` varchar(100) ,
 `email` varchar(100) ,
 `is_active` tinyint(2) ,
 `username` varchar(255) ,
 `password` varchar(255) ,
 `user_desc` varchar(255) 
)*/;

/*View structure for view client_info */

/*!50001 DROP TABLE IF EXISTS `client_info` */;
/*!50001 DROP VIEW IF EXISTS `client_info` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `client_info` AS select `b`.`user_id` AS `user_id`,`a`.`id` AS `id`,`a`.`company_name` AS `company_name`,`a`.`contact_no` AS `contact_no`,`a`.`email_address` AS `email_address`,`b`.`is_active` AS `is_active`,`b`.`fname` AS `fname`,`b`.`mname` AS `mname`,`b`.`lname` AS `lname`,`c`.`username` AS `username`,`c`.`password` AS `password`,`e`.`user_desc` AS `user_desc` from ((((`companies` `a` join `users` `b` on((`a`.`id` = `b`.`company_id`))) join `user_accounts` `c` on((`b`.`user_id` = `c`.`user_id`))) join `users_roles` `d` on((`b`.`user_id` = `d`.`user_id`))) join `roles` `e` on((`d`.`user_role` = `e`.`userlevel_id`))) */;

/*View structure for view user_info */

/*!50001 DROP TABLE IF EXISTS `user_info` */;
/*!50001 DROP VIEW IF EXISTS `user_info` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_info` AS select `a`.`user_id` AS `user_id`,`a`.`fname` AS `fname`,`a`.`mname` AS `mname`,`a`.`lname` AS `lname`,`a`.`company_id` AS `company_id`,`a`.`cnum` AS `cnum`,`a`.`email` AS `email`,`a`.`is_active` AS `is_active`,`b`.`username` AS `username`,`b`.`password` AS `password`,`d`.`user_desc` AS `user_desc` from (((`users` `a` join `user_accounts` `b` on((`a`.`user_id` = `b`.`user_id`))) join `users_roles` `c` on((`a`.`user_id` = `c`.`user_id`))) join `roles` `d` on((`d`.`userlevel_id` = `c`.`user_role`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
