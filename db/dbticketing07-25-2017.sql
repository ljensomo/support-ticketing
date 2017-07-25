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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `companies` */

insert  into `companies`(`id`,`company_name`,`contact_no`,`email_address`) values (1,'Emmerson Electric Co.',NULL,NULL),(6,'sample','09','sample@client.com'),(7,'client','09','sample@client.com'),(8,'Fortis Technologies Corp','09','fortis@mail.com'),(9,'a','09','09'),(10,'a','a','a'),(11,'b','b','b'),(12,'Kurth\'s Spa','09','kurthjohnquimora@gmail.com'),(15,'client1','09','client1@mail.com'),(16,'client2','09','client2@mail.com'),(17,'ins','09','ins@mail.com'),(18,'qui','09','quimora85@gmail.com'),(19,'Go\'s Bulalohan','098','go123@mail.com'),(20,'Proserve','091234435','proserve@gmail.com'),(21,'bless company','143','libisensomo@yahoo.com'),(22,'Add Client','098908098','client@emai.com'),(23,'Facebook Inc','098','facebook@email.com'),(24,'Globe Telecom','098','gt@email.com'),(25,'Robe Corp','098','robe-corp@gmail.com'),(26,'Alaska Corporation','09752731061','alaska@gmail.com');

/*Table structure for table `company_proj` */

DROP TABLE IF EXISTS `company_proj`;

CREATE TABLE `company_proj` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_id` tinyint(4) NOT NULL,
  `project_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

/*Data for the table `company_proj` */

insert  into `company_proj`(`id`,`company_id`,`project_desc`) values (1,11,'project_1'),(2,11,'project_2'),(3,16,'1'),(4,16,'2'),(5,16,'3'),(6,0,'project_A'),(7,20,'web portal'),(8,1,'asd'),(9,0,'please'),(10,0,'again'),(11,0,'yung id'),(12,2,'er'),(13,24,'ok na'),(14,24,'panibago'),(15,24,'isapa'),(16,16,'4'),(17,16,'5'),(18,16,'6'),(19,16,'7'),(20,16,'8'),(21,16,'9'),(22,20,'anuba'),(23,20,'save this'),(24,20,'dis'),(25,20,'one more'),(26,20,'yees'),(27,20,'pls'),(28,20,'wala'),(29,1,'add'),(30,1,'type daw ako'),(31,25,'Payroll System'),(32,26,'Milk Tones'),(33,26,'Condense'),(34,26,'Evaporada');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `reporters` */

insert  into `reporters`(`id`,`user_id`,`project_id`) values (1,38,NULL),(2,39,NULL),(3,47,13),(4,49,31);

/*Table structure for table `resolution` */

DROP TABLE IF EXISTS `resolution`;

CREATE TABLE `resolution` (
  `resolution_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `resolution` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`resolution_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `resolution` */

insert  into `resolution`(`resolution_id`,`resolution`,`description`) values (1,'Fixed',' '),(2,'Won\'t Fixed',''),(3,'Duplicate',''),(4,'Incomplete',''),(5,'Cannot Reproduce',''),(6,'Invalid',''),(7,'Endorse done',''),(8,'qwert','qwerty');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `severity` */

insert  into `severity`(`severity_id`,`severity`,`description`) values (1,'Fixed',' '),(2,'Severe',NULL),(3,'Normal',NULL),(4,'Minor',''),(6,' Bug',''),(8,'Damaged','Unidentified');

/*Table structure for table `status` */

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `status_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `status_desc` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `status` */

insert  into `status`(`status_id`,`status_desc`,`description`) values (1,'Open','Closed'),(2,'Pending',''),(3,'Resolved',''),(4,'Reopened',''),(5,'In Progress',''),(6,'Waiting for Customer',''),(7,'Closed with Pending Issues',''),(8,'Endorsed',''),(14,'qwer','qwert'),(15,'Ayos','Sira');

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `ticket` */

insert  into `ticket`(`ID`,`CompanyName`,`Reporter`,`email_add`,`cnum`,`problem_sum`,`ticketstatus_id`,`transactionID`,`Attachment`,`date_created`,`problem_desc`,`severity_id`,`issue_type_id`) values (1,'Gicha\'s Night Club','Nigel Kim Gocila','nigel@gmail.com','09090909','problem ','1','#45456',NULL,'0000-00-00','',NULL,NULL),(2,'Andanar\'s Spa','Mary','@mail.com','34596','problem 2','1','34534',NULL,'234324','',NULL,NULL),(3,'Robe\'s Tribe Weapons','Alyssa','@bundok.com','345','problem 3','2','345345',NULL,'453545','',NULL,NULL),(6,'INS corp','Lorenz John Ensomo','09124759121','kurth@mail.com','problem 4','2','#23424098','g.txt','2017-2-21','asdasdasdasdasd',NULL,NULL),(7,'Nigel\'s Footspa','Jason Gicha','09124759121','J@fortis.com','can\'t upload','2','#0909999','g.txt','2017-2-24','We cannot login in the system',NULL,NULL),(8,'Kurth Spa','kurth morato','09124759121','k@fortis.com','slow internet connection','3','#343434','g.txt','2017-3-1','I don\'t know how to use the system.',0,0),(9,'asdas`dtd`gdgd','hghj','09999878666','hjfhj@mail.com','problem of keyboard','3','jhfhjfjfj','g.txt','2017-3-7','hjf',0,0),(10,'Globalport Batang Pier','Terrence Romeo','09009909766','terrence@yahoo.com','Unfinished Championship','3','#07','daps.jpg','2017-3-7','Bad blood, because of the selfishness of terrence romeo on court.',0,0),(11,'SM','kharlwyn','09123412736','kharwyn09@gmail.com','login','4','2534162','Screen Shot 2017-02-03 at 16.21.48.png','2017-3-8','can\'t log in',0,0),(12,'Ins corp','Lorenz John','09090909095','lj@fortis.com','Crashed','4','#454544','lesson01.doc','2017-3-8','We cannot use the system properly.',0,0),(13,'INs corp ','Jason gicha ','09098098123','lj@fortis.com','login','4','234324','Screen Shot 2017-02-03 at 16.21.48.png','2017-3-8','asddasdasd',0,0),(14,'Ins corp','LJ Ensomo','09809888777','lj@fortis.com','Cannot Process','5','#3465','FULLTEXT01.pdf','2017-3-8','We cannot start the process because of the errors!',0,0),(15,'SM','Henry Sy','90072334245','Hen@sm.com','Cannot find data.','5','7897','Proposal Letter.docx','2017-3-8','We cannot some data in the system.',0,0),(16,'colegio de sta teresa','novet','09292929225','sdfsdfsdfdsf@dfgf.hg','can\'t connect internet connection','5','452255','Screen Shot 2017-02-03 at 16.21.48.png','2017-3-8','We can\'t',0,0),(17,'555 Tuna','justin','09444434343','sdfsdfsdfdsf@dfgf.hg','can\'t open file','6','353455','Screen Shot 2017-02-03 at 16.21.48.png','2017-3-8','sdfsdfsdfsdf',0,0),(18,'asd','asd','1134','assd@yahoo.com','asd','1','12212121','Term Paper.docx','2017-3-29','asd',0,0),(19,'Colegio de Sta.Teresa de Avila','Raffy Tulfo','09094631878','raffy@kahitAno.com','We Can\'t Login ','1','234567890','dfdPaint.png','2017-3-31','May Error Ung System',0,0),(20,'CSTA','Noel','0935-7979-5','noelg1000@gmail.com','PC in lab2 dilapidated','1','201703311301','sudo-su-.png','2017-3-31','Not working, destroyed PC',0,0),(21,'Emmerson Service','banag','444444','banag@gmail.com','no connection','1','444444','cbo.txt','2017-4-24','how could we accees the internet using the system',0,0),(22,'client2','ensomo LJ','098','ens@fortis.com','sub','1','098988','Fortis_Technologies_Inc_docu.docx','2017-5-4','suuububububububu',0,0),(23,'Jason','qwert','1234','qwerty2@QWERTY','WERTY','1','QWER','asd.png','2017-7-7','QWERT',0,0);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ticket_progress` */

insert  into `ticket_progress`(`Ticketid`,`DateReceived`,`assignto_id`,`resolution_id`,`comment_id`,`assign_from_id`) values (1,'just now',1,1,1,NULL);

/*Table structure for table `tickets` */

DROP TABLE IF EXISTS `tickets`;

CREATE TABLE `tickets` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `project_id` tinyint(4) NOT NULL,
  `transaction_no` varchar(255) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `before_status` tinyint(4) NOT NULL,
  `after_status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tickets` */

/*Table structure for table `user_accounts` */

DROP TABLE IF EXISTS `user_accounts`;

CREATE TABLE `user_accounts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `user_accounts` */

insert  into `user_accounts`(`id`,`user_id`,`username`,`password`) values (1,2,'jason','$2y$11$.uQNK3axHeJxBmjGmjxaCennpbsqc5.L5kfJ8T5OaI9n69qFsv0ZK'),(8,1,'lj@fortis.com','$2y$11$Mm6AYbrIMcL6/iJa/u5sQ.rpU6h7lrFo5ZniLGdJl3sOnNczAZz4O'),(9,3,'markvin','$2y$11$opRk4y2d9H4VEQdQDvyD/OXcvM.aCW14z0N85UlySucdodnOd1tnO'),(10,4,'robe','$2y$11$qYyhbkvuTEDdCNHZ.c1oUO2.uiL2MYrTNZWDn9W1sIZeuV9JV6Q8O'),(11,5,'alvin','$2y$11$0XYSJvAwijrm7jZP/MVZ0.0/HkOhULtXY4/puUBupTNE/Mv7cWj7m'),(12,6,'andanar','$2y$11$VX7/i9vgFqONb7RhbW..8uJZW5OtLla0HxWrxIdY.mJwv..OTCg12');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `app` varchar(255) NOT NULL,
  `cnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `is_active` tinyint(2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`fname`,`mname`,`lname`,`company_name`,`app`,`cnum`,`email`,`is_active`) values (1,'LJ','','Ensomo','asd','asd','09124759121','ensomolj@gmail.com',1),(2,'Jason','L','Gicha','asd','asd','09','jason@gmail.com',1),(3,'Markvin','','Sotor','sample Corp','sample App','(333) 333-3333','markvinsotor13@gmail.com',0),(4,'Robe Bryant','Cruz','Pascual','sample Corp','sample App','(333) 333-3333','bryantrob1016@gmail.com',0),(5,'Alvin','','Fuentiblanca','sample Corp','sample App','(333) 333-3333','alvinfuentiblanca@gmail.com',0),(6,'Andrian','Gamez','Andanar','CSTA','Sample Application','(333) 333-3333','andanarandrian@gmail.com',0);

/*Table structure for table `users_roles` */

DROP TABLE IF EXISTS `users_roles`;

CREATE TABLE `users_roles` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `user_role` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `users_roles` */

insert  into `users_roles`(`id`,`user_id`,`user_role`) values (1,1,2),(2,2,1),(3,3,4),(4,4,4),(5,5,4),(6,6,4);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
