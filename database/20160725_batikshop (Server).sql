-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: batikshop
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `asset_histories`
--

DROP TABLE IF EXISTS `asset_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asset_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `asset` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asset_histories`
--

LOCK TABLES `asset_histories` WRITE;
/*!40000 ALTER TABLE `asset_histories` DISABLE KEYS */;
INSERT INTO `asset_histories` VALUES (1,4028000,'2016-06-14 03:00:01','2016-06-14 03:00:01'),(2,4028000,'2016-06-15 03:00:01','2016-06-15 03:00:01'),(3,4028000,'2016-06-16 03:00:02','2016-06-16 03:00:02'),(4,4028000,'2016-06-17 03:00:01','2016-06-17 03:00:01'),(5,4028000,'2016-06-18 03:00:02','2016-06-18 03:00:02'),(6,4028000,'2016-06-19 03:00:01','2016-06-19 03:00:01'),(7,4028000,'2016-06-20 03:00:01','2016-06-20 03:00:01'),(8,4028000,'2016-06-21 03:00:01','2016-06-21 03:00:01'),(9,4028000,'2016-06-22 03:00:01','2016-06-22 03:00:01'),(10,4028000,'2016-06-23 03:00:01','2016-06-23 03:00:01'),(11,4028000,'2016-06-24 03:00:01','2016-06-24 03:00:01'),(12,4028000,'2016-06-25 03:00:02','2016-06-25 03:00:02'),(13,4028000,'2016-06-26 03:00:01','2016-06-26 03:00:01'),(14,5492000,'2016-06-27 03:00:01','2016-06-27 03:00:01'),(15,6842000,'2016-06-28 03:00:01','2016-06-28 03:00:01'),(16,6842000,'2016-06-29 03:00:01','2016-06-29 03:00:01'),(17,6842000,'2016-06-30 03:00:01','2016-06-30 03:00:01'),(18,7179000,'2016-07-01 03:00:01','2016-07-01 03:00:01'),(19,7179000,'2016-07-02 03:00:01','2016-07-02 03:00:01'),(20,7179000,'2016-07-03 03:00:02','2016-07-03 03:00:02'),(21,7179000,'2016-07-04 03:00:02','2016-07-04 03:00:02'),(22,7179000,'2016-07-05 03:00:01','2016-07-05 03:00:01'),(23,7179000,'2016-07-06 03:00:01','2016-07-06 03:00:01'),(24,7179000,'2016-07-07 03:00:01','2016-07-07 03:00:01'),(25,7179000,'2016-07-08 03:00:01','2016-07-08 03:00:01'),(26,7179000,'2016-07-09 03:00:01','2016-07-09 03:00:01'),(27,9914000,'2016-07-10 03:00:01','2016-07-10 03:00:01'),(28,9914000,'2016-07-11 03:00:01','2016-07-11 03:00:01'),(29,9914000,'2016-07-12 03:00:02','2016-07-12 03:00:02'),(30,9914000,'2016-07-13 03:00:01','2016-07-13 03:00:01'),(31,9914000,'2016-07-14 03:00:02','2016-07-14 03:00:02'),(32,9914000,'2016-07-15 03:00:01','2016-07-15 03:00:01'),(33,9914000,'2016-07-16 03:00:01','2016-07-16 03:00:01'),(34,9914000,'2016-07-17 03:00:01','2016-07-17 03:00:01'),(35,9914000,'2016-07-18 03:00:01','2016-07-18 03:00:01'),(36,9914000,'2016-07-19 03:00:01','2016-07-19 03:00:01'),(37,9914000,'2016-07-20 03:00:01','2016-07-20 03:00:01'),(38,9914000,'2016-07-21 03:00:01','2016-07-21 03:00:01'),(39,9914000,'2016-07-22 03:00:01','2016-07-22 03:00:01'),(40,9914000,'2016-07-23 03:00:01','2016-07-23 03:00:01'),(41,9914000,'2016-07-24 03:00:01','2016-07-24 03:00:01'),(42,9914000,'2016-07-25 03:00:01','2016-07-25 03:00:01');
/*!40000 ALTER TABLE `asset_histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_histories`
--

DROP TABLE IF EXISTS `item_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_id` int(10) unsigned NOT NULL,
  `purchase_price` int(11) NOT NULL,
  `sell_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `item_histories_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_histories`
--

LOCK TABLES `item_histories` WRITE;
/*!40000 ALTER TABLE `item_histories` DISABLE KEYS */;
INSERT INTO `item_histories` VALUES (4,4,27000,45000,'2016-06-13 13:11:39','2016-06-13 13:11:39'),(5,5,30000,60000,'2016-06-13 13:13:02','2016-06-13 13:13:02'),(6,6,30000,60000,'2016-06-13 13:15:05','2016-06-13 13:15:05'),(7,7,24000,40000,'2016-06-13 13:18:33','2016-06-13 13:18:33'),(8,8,21000,35000,'2016-06-13 13:22:21','2016-06-13 13:22:21'),(9,9,28000,45000,'2016-06-13 13:28:49','2016-06-13 13:28:49'),(10,10,32000,45000,'2016-06-13 13:37:21','2016-06-13 13:37:21'),(11,11,33000,45000,'2016-06-13 13:38:08','2016-06-13 13:38:08'),(12,12,37000,70000,'2016-06-13 13:43:13','2016-06-13 13:43:13'),(13,13,36000,70000,'2016-06-13 13:44:23','2016-06-13 13:44:23'),(14,14,70000,100000,'2016-06-13 13:48:13','2016-06-13 13:48:13'),(15,15,24000,40000,'2016-06-13 13:57:26','2016-06-13 13:57:26'),(16,16,20000,35000,'2016-06-13 13:59:52','2016-06-13 13:59:52'),(17,4,27000,45000,'2016-06-26 13:28:10','2016-06-26 13:28:10'),(18,4,27000,45000,'2016-06-26 13:28:30','2016-06-26 13:28:30'),(19,4,27000,45000,'2016-06-26 13:33:26','2016-06-26 13:33:26'),(20,7,24000,40000,'2016-06-26 13:34:03','2016-06-26 13:34:03'),(21,8,21000,35000,'2016-06-26 13:40:08','2016-06-26 13:40:08'),(22,7,24000,40000,'2016-06-27 15:02:23','2016-06-27 15:02:23'),(23,12,37000,70000,'2016-06-27 15:03:18','2016-06-27 15:03:18'),(24,12,37000,70000,'2016-06-27 15:05:08','2016-06-27 15:05:08'),(25,12,37000,70000,'2016-06-27 15:09:45','2016-06-27 15:09:45'),(26,16,20000,35000,'2016-06-30 18:57:35','2016-06-30 18:57:35'),(27,8,21000,35000,'2016-06-30 18:58:12','2016-06-30 18:58:12'),(28,8,21000,35000,'2016-06-30 19:00:58','2016-06-30 19:00:58'),(29,4,27000,45000,'2016-06-30 20:44:46','2016-06-30 20:44:46'),(30,17,26000,45000,'2016-07-09 15:15:36','2016-07-09 15:15:36'),(31,6,30000,60000,'2016-07-09 15:16:13','2016-07-09 15:16:13'),(32,18,180000,270000,'2016-07-09 15:17:19','2016-07-09 15:17:19'),(33,19,25000,45000,'2016-07-09 15:19:26','2016-07-09 15:19:26'),(34,20,30000,45000,'2016-07-09 15:20:35','2016-07-09 15:20:35'),(35,21,30000,45000,'2016-07-09 15:21:36','2016-07-09 15:21:36'),(36,22,30000,45000,'2016-07-09 15:22:22','2016-07-09 15:22:22'),(37,23,28000,45000,'2016-07-09 15:23:10','2016-07-09 15:23:10'),(38,24,35000,55000,'2016-07-09 15:24:03','2016-07-09 15:24:03'),(39,25,35000,55000,'2016-07-09 15:24:48','2016-07-09 15:24:48'),(40,21,32000,45000,'2016-07-09 15:25:36','2016-07-09 15:25:36');
/*!40000 ALTER TABLE `item_histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vendor_id` int(10) unsigned NOT NULL,
  `type_id` int(10) unsigned NOT NULL,
  `material_id` int(10) unsigned NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `purchase_price` int(11) NOT NULL,
  `sell_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `items_code_unique` (`code`),
  KEY `vendor_id` (`vendor_id`,`type_id`,`material_id`),
  KEY `type_id` (`type_id`),
  KEY `material_id` (`material_id`),
  CONSTRAINT `items_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `items_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `items_ibfk_3` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (4,'11-3-5-mataram',11,3,5,'mataram',27000,45000,61,'2016-06-13 13:11:39','2016-06-30 20:44:46'),(5,'11-10-5-mataram',11,10,5,'mataram',30000,60000,2,'2016-06-13 13:13:02','2016-06-13 13:13:02'),(6,'11-4-5-mataram',11,4,5,'mataram',30000,60000,27,'2016-06-13 13:15:05','2016-07-09 15:16:13'),(7,'11-3-5-tb',11,3,5,'tb',24000,40000,32,'2016-06-13 13:18:33','2016-06-27 15:02:23'),(8,'11-3-5-s',11,3,5,'s',21000,35000,30,'2016-06-13 13:22:21','2016-06-30 19:00:58'),(9,'11-3-6-klasik',11,3,6,'klasik',28000,45000,12,'2016-06-13 13:28:49','2016-06-13 13:28:49'),(10,'11-4-6-klasik',11,4,6,'klasik',32000,45000,2,'2016-06-13 13:37:21','2016-06-13 13:37:21'),(11,'11-4-8-klasik',11,4,8,'klasik',33000,45000,12,'2016-06-13 13:38:08','2016-06-13 13:38:08'),(12,'11-35-5-bobal',11,35,5,'bobal',37000,70000,38,'2016-06-13 13:43:13','2016-06-27 15:09:45'),(13,'11-34-5-bolero',11,34,5,'bolero',36000,70000,1,'2016-06-13 13:44:23','2016-06-13 13:44:23'),(14,'11-15-8-srb',11,15,8,'srb',70000,100000,13,'2016-06-13 13:48:13','2016-06-13 13:48:13'),(15,'11-32-5-rok',11,32,5,'rok',24000,40000,9,'2016-06-13 13:57:26','2016-06-13 13:57:26'),(16,'11-32-5-rok pd',11,32,5,'rok pd',20000,35000,25,'2016-06-13 13:59:52','2016-06-30 18:57:35'),(17,'22-36-5-Payung',22,36,5,'Payung',26000,45000,6,'2016-07-09 15:15:36','2016-07-09 15:15:36'),(18,'10-13-5-KD Prodo',10,13,5,'KD Prodo',180000,270000,6,'2016-07-09 15:17:19','2016-07-09 15:17:19'),(19,'10-3-5-KD Prodo 0',10,3,5,'KD Prodo 0',25000,45000,6,'2016-07-09 15:19:26','2016-07-09 15:19:26'),(20,'10-3-5-KD Prodo 2',10,3,5,'KD Prodo 2',30000,45000,3,'2016-07-09 15:20:35','2016-07-09 15:20:35'),(21,'10-3-5-KD Prodo 3',10,3,5,'KD Prodo 3',32000,45000,7,'2016-07-09 15:21:36','2016-07-09 15:25:36'),(22,'10-3-5-KD Prodo 4',10,3,5,'KD Prodo 4',30000,45000,4,'2016-07-09 15:22:22','2016-07-09 15:22:22'),(23,'10-3-5-KD Prodo 1',10,3,5,'KD Prodo 1',28000,45000,5,'2016-07-09 15:23:10','2016-07-09 15:23:10'),(24,'10-3-5-KD Prodo tg s',10,3,5,'KD Prodo tg s',35000,55000,2,'2016-07-09 15:24:03','2016-07-09 15:24:03'),(25,'10-3-5-KD Prodo tg m',10,3,5,'KD Prodo tg m',35000,55000,3,'2016-07-09 15:24:48','2016-07-09 15:24:48');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materials`
--

DROP TABLE IF EXISTS `materials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `materials_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materials`
--

LOCK TABLES `materials` WRITE;
/*!40000 ALTER TABLE `materials` DISABLE KEYS */;
INSERT INTO `materials` VALUES (5,'Katun','2016-06-05 18:58:25','2016-06-05 18:58:25'),(6,'Sunwosh','2016-06-05 18:58:37','2016-06-05 18:58:37'),(7,'Semi Sutra','2016-06-05 18:58:55','2016-06-05 18:58:55'),(8,'Prodo','2016-06-13 13:22:52','2016-06-13 13:22:52');
/*!40000 ALTER TABLE `materials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `types_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES (3,'Hem','2016-06-05 18:52:29','2016-06-05 18:52:29'),(4,'Kemeja','2016-06-05 18:52:38','2016-06-05 18:52:38'),(5,'Blus Pendek','2016-06-05 18:53:01','2016-06-05 18:53:01'),(8,'Blus Pd','2016-06-05 18:56:46','2016-06-05 18:56:46'),(9,'Blus 3/4','2016-06-05 18:57:12','2016-06-05 18:57:12'),(10,'Blus Pj','2016-06-05 18:57:22','2016-06-05 18:57:22'),(11,'Gamis','2016-06-05 18:57:58','2016-06-05 18:57:58'),(12,'Sorjan','2016-06-05 18:58:09','2016-06-05 18:58:09'),(13,'Sarimbit Gamis SRG','2016-06-13 12:52:29','2016-06-13 12:52:29'),(14,'Sarimbit Dreess SRD','2016-06-13 12:52:54','2016-06-13 12:52:54'),(15,'Sarimbit Blus SRB','2016-06-13 12:53:19','2016-06-13 12:53:19'),(16,'Dress','2016-06-13 12:54:04','2016-06-13 12:54:04'),(17,'JumpSuit JS','2016-06-13 12:54:32','2016-06-13 12:54:32'),(18,'Setelan Kaos STK','2016-06-13 12:55:21','2016-06-13 12:55:21'),(19,'Setelan Kebaya STB','2016-06-13 12:56:02','2016-06-13 12:56:02'),(20,'Kebaya Atasan','2016-06-13 12:56:35','2016-06-13 12:56:35'),(21,'Blangkon Jogja','2016-06-13 12:56:59','2016-06-13 12:56:59'),(22,'Blangkon Solo','2016-06-13 12:57:17','2016-06-13 12:57:17'),(23,'Iket','2016-06-13 12:57:30','2016-06-13 12:57:30'),(24,'Topi','2016-06-13 12:57:40','2016-06-13 12:57:40'),(25,'Krudung Paris','2016-06-13 12:58:07','2016-06-13 12:58:07'),(26,'Krudung Kolong','2016-06-13 12:58:26','2016-06-13 12:58:26'),(27,'Krudung Pasmina','2016-06-13 12:58:47','2016-06-13 12:58:47'),(28,'Krudung Dalaman','2016-06-13 12:59:01','2016-06-13 12:59:01'),(29,'Tas Batik','2016-06-13 12:59:39','2016-06-13 12:59:39'),(30,'Mukena Batik','2016-06-13 12:59:52','2016-06-13 12:59:52'),(31,'Kaos Wayang','2016-06-13 13:00:25','2016-06-13 13:00:25'),(32,'Rok Batik','2016-06-13 13:00:52','2016-06-13 13:00:52'),(33,'Celana Batik','2016-06-13 13:01:11','2016-06-13 13:01:11'),(34,'Bolero','2016-06-13 13:38:42','2016-06-13 13:38:42'),(35,'Bobal Bolero Bolak-balik','2016-06-13 13:39:08','2016-06-13 13:39:08'),(36,'Daster','2016-07-09 15:14:28','2016-07-09 15:14:28');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Guyub Hana Haq','guyubhana@gmail.com','$2y$10$3hWeEbMjwggNs32euHEr..kLdyQbM0k4SSZVPcke1.z76uvIIej3u','UU7y3rcvSa9ofTIQzQB9Wq8EpIVdMyxLNOlvAZWo04YqCuqNPfldVyua3NTU',NULL,'2016-07-25 18:24:57'),(2,'Whilda Chaq','whildachaq@gmail.com','$2y$10$d4Y2wNF6gwW8SEL3eP6vueLxRkjy0e1Riehcf40is/vCNDcfzW2yO','nzuebJs6ViM8wE4PIZMUlwvY7sxYCmbe5pDL8lRnVq0ICG44UeEdMwF3hJqB',NULL,'2016-07-09 15:50:55');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vendors_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendors`
--

LOCK TABLES `vendors` WRITE;
/*!40000 ALTER TABLE `vendors` DISABLE KEYS */;
INSERT INTO `vendors` VALUES (10,'Putri Lestari','2016-06-05 18:49:09','2016-06-05 18:49:09'),(11,'Arta Klewer','2016-06-05 18:49:50','2016-06-05 18:49:50'),(12,'Ria Batik','2016-06-05 18:50:05','2016-06-05 18:50:05'),(13,'Sri Lestari Pantai','2016-06-05 19:11:41','2016-06-05 19:11:41'),(14,'Yuliani Klewer','2016-06-13 12:46:27','2016-06-13 12:46:27'),(15,'Mardiyah Klewer','2016-06-13 12:47:23','2016-06-13 12:47:23'),(16,'H n F Kaos','2016-06-13 12:47:52','2016-06-13 12:47:52'),(17,'Yuniarti Bringharjo','2016-06-13 12:48:33','2016-06-13 12:48:33'),(18,'Blangkon Jogja','2016-06-13 12:48:55','2016-06-13 12:48:55'),(19,'Aini Blangkon Solo','2016-06-13 12:49:22','2016-06-13 12:49:22'),(20,'Atik Kebaya','2016-06-13 12:49:42','2016-06-13 12:49:42'),(21,'Benang Raja','2016-06-13 12:49:54','2016-06-13 12:49:54'),(22,'Asih Klewer','2016-06-13 12:50:24','2016-06-13 12:50:24');
/*!40000 ALTER TABLE `vendors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-25  6:45:21
