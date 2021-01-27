/*
SQLyog Enterprise v12.4.3 (64 bit)
MySQL - 5.7.24 : Database - db_vister
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_vister` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_vister`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` longtext COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `admin` */

insert  into `admin`(`id`,`name`,`email`,`level`,`foto`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Prasetyo Bella','ptgrahavistermandiri@gmail.com','admin',NULL,NULL,'$2y$10$v9782zWQq.YpUkgiPmX3Q.FUyz9LEemuIbxIxLl/TfpJzawtxKVP2',NULL,'2021-01-26 12:42:33','2021-01-26 12:42:33');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2019_08_19_000000_create_failed_jobs_table',1),
(3,'2021_01_26_142409_create_property_table',2);

/*Table structure for table `property` */

DROP TABLE IF EXISTS `property`;

CREATE TABLE `property` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_properti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_dp` int(11) DEFAULT NULL,
  `harga_cash` int(11) DEFAULT NULL,
  `harga_permeter` int(11) DEFAULT NULL,
  `kata_thumb` longtext COLLATE utf8mb4_unicode_ci,
  `foto` longtext COLLATE utf8mb4_unicode_ci,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabkot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `syarat` longtext COLLATE utf8mb4_unicode_ci,
  `dekat` longtext COLLATE utf8mb4_unicode_ci,
  `status1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `property` */

insert  into `property`(`id`,`nama_properti`,`ukuran`,`harga_dp`,`harga_cash`,`harga_permeter`,`kata_thumb`,`foto`,`deskripsi`,`lokasi`,`kabkot`,`syarat`,`dekat`,`status1`,`status2`,`slug`,`deleted_at`,`created_at`,`updated_at`) values 
(1,'a','a',100000,1000000,1000000,'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa','','aaaaaaaaaaaaa','a','1','a','aaa','1','1',NULL,'2021-01-27 06:16:38','2021-01-26 23:01:27','2021-01-27 06:16:38'),
(2,'Kavling Mangun Disa','8 x 15',1500000,1000000,100000,'<p><a href=\"https://laravel.com\"><strong>Lorem</strong></a> ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat</p>','assets/property/xj4CpHr7mYfn1nX3wZJLPEkWnf5jJVluG7gt38gh.jpg','<p><a href=\"https://laravel.com\">Lorem ipsum</a> dolor sit amet, consectetur adipiscing elit. Donec volutpat massa turpis, at consectetur quam euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer nec venenatis leo. Phasellus in viverra lacus. Nunc euismod aliquam ex in laoreet. Vestibulum dapibus vehicula ipsum sed aliquam. Pellentesque lobortis ipsum eget turpis convallis, sit amet tincidunt diam mattis. Praesent tristique tempus pellentesque. Aliquam erat volutpat. Sed turpis diam, mattis et nunc in, iaculis aliquet nisi.</p>\r\n\r\n<p>Aliquam pretium congue malesuada. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam porttitor ante eget justo porttitor, ac venenatis mi tincidunt. Mauris malesuada lobortis leo sed bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum vitae arcu porttitor, cursus dui nec, vestibulum mauris. Aenean varius ligula eu consequat fermentum. Vivamus egestas mattis imperdiet.</p>','Jalan Pramuka','1','<ol>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat massa turpis, at consectetur quam euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer nec venenatis leo. Phasellus in viverra lacus. Nunc euismod aliquam ex in laoreet. Vestibulum dapibus vehicula ipsum sed aliquam. Pellentesque lobortis ipsum eget turpis convallis, sit amet tincidunt diam mattis. Praesent tristique tempus pellentesque. Aliquam erat volutpat. Sed turpis diam, mattis et nunc in, iaculis aliquet nisi.</li>\r\n	<li>Aliquam pretium congue malesuada. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam porttitor ante eget justo porttitor, ac venenatis mi tincidunt. Mauris malesuada lobortis leo sed bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum vitae arcu porttitor, cursus dui nec, vestibulum mauris. Aenean varius ligula eu consequat fermentum. Vivamus egestas mattis imperdiet.</li>\r\n</ol>','<p><em><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat massa turpis, at consectetur quam euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer nec venenatis leo. Phasellus in viverra lacus. Nunc euismod aliquam ex in laoreet. Vestibulum dapibus vehicula ipsum sed aliquam. Pellentesque lobortis ipsum eget turpis convallis, sit amet tincidunt diam mattis. Praesent tristique tempus pellentesque. Aliquam erat volutpat. Sed turpis diam, mattis et nunc in, iaculis aliquet nisi.</strong></em></p>\r\n\r\n<p>Aliquam pretium congue malesuada. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam porttitor ante eget justo porttitor, ac venenatis mi tincidunt. Mauris malesuada lobortis leo sed bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum vitae arcu porttitor, cursus dui nec, vestibulum mauris. Aenean varius ligula eu consequat fermentum. Vivamus egestas mattis imperdiet.</p>','1','1','kavling-mangun-disa',NULL,'2021-01-27 06:11:01','2021-01-27 09:46:39'),
(3,'a','a',1,1,1,'<p>1</p>','assets/property/Jlv3nWCXzT0iyRWUBeofjvdlIe2xnPi2sHMb9NF8.jpg','<p>1</p>','1','2','<p>1</p>','<p>1</p>','1','1','a','2021-01-27 06:18:57','2021-01-27 06:15:16','2021-01-27 06:18:57');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
