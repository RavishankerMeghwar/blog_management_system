/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.20-MariaDB : Database - hist_bms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hist_bms` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `hist_bms`;

/*Table structure for table `log` */

DROP TABLE IF EXISTS `log`;

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `login_time` datetime DEFAULT NULL,
  `logout_time` datetime DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

/*Data for the table `log` */

insert  into `log`(`log_id`,`user_id`,`login_time`,`logout_time`) values 
(1,4,'2022-03-28 12:29:42','2022-03-28 14:18:39'),
(2,4,'2022-03-28 12:30:10','2022-03-28 14:18:39'),
(3,1,'2022-03-28 12:38:57','2022-03-28 14:07:08'),
(4,1,'2022-03-28 12:50:51','2022-03-28 14:25:13'),
(5,1,'2022-03-28 12:54:07','2022-03-28 14:07:08'),
(6,1,'2022-03-28 12:55:38','2022-03-28 14:07:08'),
(7,1,'2022-03-28 13:15:33','2022-03-28 14:07:08'),
(8,4,'2022-03-28 13:26:53','2022-03-28 14:18:39'),
(9,1,'2022-03-28 13:36:32','2022-03-28 14:07:08'),
(10,3,'2022-03-28 13:38:47','2022-03-28 14:07:08'),
(11,3,'2022-03-28 13:51:59','2022-03-28 14:07:08'),
(12,4,'2022-03-28 13:57:16','2022-03-28 14:18:39'),
(13,1,'2022-03-28 13:58:15','2022-03-28 14:07:08'),
(14,4,'2022-03-28 13:59:09','2022-03-28 14:18:39'),
(15,4,'2022-03-28 14:01:14','2022-03-28 14:18:39'),
(16,4,'2022-03-28 14:02:04','2022-03-28 14:18:39'),
(17,1,'2022-03-28 14:04:20','2022-03-28 14:07:08'),
(18,1,'2022-03-28 14:05:07','2022-03-28 14:07:08'),
(19,1,'2022-03-28 14:05:56','2022-03-28 14:07:08'),
(20,4,'2022-03-28 14:07:05','2022-03-28 14:18:39'),
(21,4,'2022-03-28 14:08:37','2022-03-28 14:18:39'),
(22,4,'2022-03-28 14:11:34','2022-03-28 14:18:39'),
(23,4,'2022-03-28 14:12:28','2022-03-28 14:18:39'),
(24,4,'2022-03-28 14:13:25','2022-03-28 14:18:39'),
(25,4,'2022-03-28 14:16:42','2022-03-28 14:18:39'),
(26,4,'2022-03-28 14:18:36','2022-03-28 14:18:39'),
(27,4,'2022-03-28 14:22:21',NULL),
(28,1,'2022-03-28 14:24:00',NULL),
(29,4,'2022-03-28 14:25:10',NULL);

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_by_user_id` int(11) DEFAULT NULL,
  `post__title` varchar(200) DEFAULT NULL,
  `post_summary` text DEFAULT NULL,
  `post_description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`post_id`),
  KEY `post_by_user_id` (`post_by_user_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`post_by_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

/*Data for the table `posts` */

insert  into `posts`(`post_id`,`post_by_user_id`,`post__title`,`post_summary`,`post_description`,`created_at`) values 
(2,1,'post 2','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.						\r\n							','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.						','2022-03-25 11:20:23'),
(3,1,'post 33','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layoutttttt.','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layoutttttt.','2022-03-25 11:54:13'),
(7,2,'post 4','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its wwlayout.	d','2022-03-25 12:05:23'),
(9,1,'Post 12','Post 12','Post 12','2022-03-25 12:24:25'),
(10,1,'Post 13','Post 12','Post 12','2022-03-25 12:24:31'),
(11,1,'Post 15','Post 12','Post 12','2022-03-25 12:24:36'),
(12,1,'Post 15','Post 12','Post 12','2022-03-25 12:24:40'),
(13,1,'Post 16','Post 12','Post 12','2022-03-25 12:24:46'),
(14,1,'Post 17','Post 12','Post 12','2022-03-25 12:24:49'),
(15,1,'Post 18','Post 12','Post 12','2022-03-25 12:24:53'),
(16,1,'Post 19','Post 12','Post 12','2022-03-25 12:24:57'),
(20,2,'Village life5','Pakistani village life is the traditional rural life of the people of Pakistan. People in village usually live in houses made of bricks, clay or mud. These typically have two or three rooms which house extended familiesPakistani village life is the traditional rural life of the people of Pakistan. People in village usually live in houses made of bricks, clay or mud. These typically have two or three rooms which house extended families','Pakistani village life is the traditional rural life of the people of Pakistan. People in village usually live in houses made of bricks, clay or mud. These typically have two or three rooms which house extended familiesvvPakistani village life is the traditional rural life of the people of Pakistan. People in village usually live in houses made of bricks, clay or mud. These typically have two or three rooms which house extended familiesPakistani village life is the traditional rural life of the people of Pakistan. People in village usually live in houses made of bricks, clay or mud. These typically have two or three rooms which house extended familiesPakistani village life is the traditional rural life of the people of Pakistan. People in village usually live in houses made of bricks, clay or mud. These typically have two or three rooms which house extended familiesPakistani village life is the traditional rural life of the people of Pakistan. People in village usually live in houses made of bricks, clay or mud. These typically have two or three rooms which house extended familiesPakistani village life is the traditional rural life of the people of Pakistan. People in village usually live in houses made of bricks, clay or mud. These typically have two or three rooms which house extended families','2022-03-25 11:13:14'),
(24,1,'ytyut','jhjgh','hghjghg','2022-03-25 12:03:30'),
(28,1,'hhh','gfg','jhjh','2022-03-25 12:03:41'),
(35,1,'difuisu','idfuiqqfugi','iufiui','2022-03-25 12:03:46'),
(36,1,'ravi ','from tharparkar sindh','thar par kar sindh','2022-03-25 12:03:50'),
(37,2,'kalyan ','from mithi','village mejhy jo tar taluka chahro','2022-03-25 12:03:54'),
(38,2,'Darshan ','from hyderabad sindh','now lives in jamshoro','2022-03-25 12:04:04'),
(39,2,'aurthor ','this is aurthor','this is aurthor','2022-03-25 11:48:24'),
(40,1,'kfjsk','jfkjs','kdjfkj','2022-03-25 12:02:15'),
(41,1,'kjckjksjKCVJCKXJ','lklxckl','l;kl;kc','2022-03-25 12:02:37'),
(42,2,'lrkwlker`','qlkflkd','ldfkdlk','2022-03-28 07:49:27');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) DEFAULT 'user',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `roles` */

insert  into `roles`(`role_id`,`role`) values 
(1,'admin'),
(2,'author'),
(3,'user');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role` (`role`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`user_id`,`role`,`full_name`,`email`,`user_password`,`gender`) values 
(1,1,'Admin','admin@gmail.com','12345678','Male'),
(2,2,'Author','author@gmail.com','12345678','Male'),
(3,3,'User','user@gmail.com','12345678','Male'),
(4,2,'Ravi','ravi@mail.com','123456789','Male');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
