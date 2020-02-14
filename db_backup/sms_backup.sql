-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: school_system
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `card_markings`
--

DROP TABLE IF EXISTS `card_markings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `card_markings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_barcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marking_student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marking_institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marking_operator_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marking_tute_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marking_remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marking_lecture_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marking_lecture_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card_markings`
--

LOCK TABLES `card_markings` WRITE;
/*!40000 ALTER TABLE `card_markings` DISABLE KEYS */;
INSERT INTO `card_markings` VALUES (1,'12345678901211','1','1','1','1','true','Remarks','2','1','1','2019-11-14 16:10:44','2019-11-14 16:10:44'),(2,'123456789012','still developping','123456789012','Aura','admin123','false','Remarks','2','Lecture 2 2019 A/L','admin123','2019-12-14 13:32:08','2019-12-14 13:32:08'),(3,'123456789012','still developping','123456789012','Aura','admin123','true','Remarks','2','Lecture 2 2019 A/L','admin123','2019-12-14 15:26:13','2019-12-14 15:26:13'),(4,'123456789012','still developping','123456789012','Aura','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-14 19:41:13','2019-12-15 06:49:07'),(5,'123456789012','NOT PAID','123456789012','Aura','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 12:37:38','2019-12-15 12:37:38'),(6,'123456789012','NOT PAID','123456789012','Aura','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 12:38:39','2019-12-15 12:38:39'),(7,'123456789012','NOT PAID','123456789012','Aura','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 12:43:32','2019-12-15 12:43:32'),(8,'123456789012','NOT PAID','123456789012','Aura','admin123','true',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 12:48:36','2019-12-15 12:48:36'),(9,'123456789012','NOT PAID','123456789012','Aura','admin123','true',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 12:49:10','2019-12-15 12:49:10'),(10,'123456789012','NOT PAID','123456789012','Aura','admin123','true',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 12:49:20','2019-12-15 12:49:20'),(11,'123456789012','NOT PAID','123456789012','Aura','admin123','true',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 12:50:18','2019-12-15 12:50:18'),(12,'123456789012','NOT PAID','123456789012','Aura','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 12:59:32','2019-12-15 12:59:32'),(13,'123456789012','NOT PAID','123456789012','Aura','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 13:00:44','2019-12-15 13:00:44'),(14,'123456789012','NOT PAID','123456789012','Aura','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 13:05:08','2019-12-15 13:05:08'),(15,'123456789012','NOT PAID','123456789012','Aura','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 13:07:36','2019-12-15 13:07:36'),(16,'123456789012','NOT PAID','123456789012','Aura','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 13:07:47','2019-12-15 13:07:47'),(17,'123456789012','NOT PAID','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 13:13:00','2019-12-15 13:13:00'),(18,'001201911117','NOT PAID','001201911117','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 13:14:20','2019-12-15 13:14:20'),(19,'001201911308','NOT PAID','001201911308','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 13:15:47','2019-12-15 13:15:47'),(20,'0012019120113','NOT PAID','0012019120113','Sample(Pvt)Ltd','admin123','false','NOT PAID, BUT ACCEPTED.','2','Lecture 2 2019 A/L','admin123','2019-12-15 13:19:06','2019-12-15 13:19:06'),(21,'123456789012','NOT PAID','123456789012','Sample(Pvt)Ltd','admin123','true','NOT PAID, BUT ACCEPTED.','2','Lecture 2 2019 A/L','admin123','2019-12-15 13:20:13','2019-12-15 13:20:13'),(22,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 13:23:53','2019-12-15 13:23:53'),(23,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 13:26:49','2019-12-15 13:26:49'),(24,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 13:27:43','2019-12-15 13:27:43'),(25,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 13:29:36','2019-12-15 13:29:36'),(26,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 13:36:23','2019-12-15 13:36:23'),(27,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 13:37:22','2019-12-15 13:37:22'),(28,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 13:39:27','2019-12-15 13:39:27'),(29,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 13:53:05','2019-12-15 13:53:05'),(30,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 13:59:42','2019-12-15 13:59:42'),(31,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 13:59:55','2019-12-15 13:59:55'),(32,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-15 14:00:24','2019-12-15 14:00:24'),(33,'123456789012','NOT PAID','123456789012','Sample(Pvt)Ltd','admin123','false','NOT PAID, BUT ACCEPTED.','2','Lecture 2 2019 A/L','admin123','2019-12-15 14:00:58','2019-12-15 14:00:58'),(34,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-17 12:43:59','2019-12-17 12:43:59'),(35,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-17 12:44:19','2019-12-17 12:44:19'),(36,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-17 12:47:06','2019-12-17 12:47:06'),(37,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-17 12:49:54','2019-12-17 12:49:54'),(38,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-17 12:50:03','2019-12-17 12:50:03'),(39,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-17 12:50:11','2019-12-17 12:50:11'),(40,'123456789012','NOT PAID','123456789012','Sample(Pvt)Ltd','admin123','false','NOT PAID, BUT ACCEPTED.','2','Lecture 2 2019 A/L','admin123','2019-12-17 12:51:40','2019-12-17 12:51:40'),(41,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-18 11:45:08','2019-12-18 11:45:08'),(42,'123456789012','NOT PAID','123456789012','Sample(Pvt)Ltd','admin123','false','NOT PAID, BUT ACCEPTED.','2','Lecture 2 2019 A/L','admin123','2019-12-18 11:46:23','2019-12-18 11:46:23'),(43,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-18 12:29:25','2019-12-18 12:29:25'),(44,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-18 12:30:45','2019-12-18 12:30:45'),(45,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-18 12:31:23','2019-12-18 12:31:23'),(46,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-18 12:32:04','2019-12-18 12:32:04'),(47,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-18 12:32:47','2019-12-18 12:32:47'),(48,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-18 12:34:46','2019-12-18 12:34:46'),(49,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-18 12:35:44','2019-12-18 12:35:44'),(50,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L1','admin123','2019-12-18 12:36:54','2019-12-18 12:36:54'),(51,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'1','Science A/L Revision','admin123','2019-12-18 12:38:18','2019-12-18 12:38:18'),(52,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-18 12:38:40','2019-12-18 12:38:40'),(53,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-18 12:39:29','2019-12-18 12:39:29'),(54,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-18 12:41:50','2019-12-18 12:41:50'),(55,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-18 12:43:06','2019-12-18 12:43:06'),(56,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'2','Lecture 2 2019 A/L','admin123','2019-12-18 13:02:00','2019-12-18 13:02:00'),(57,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'6','Mathematics A/L Revision 2019','admin123','2019-12-25 05:38:16','2019-12-25 05:38:16'),(58,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'6','Mathematics A/L Revision 2019','admin123','2019-12-25 05:38:59','2019-12-25 05:38:59'),(59,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'6','Mathematics A/L Revision 2019','admin123','2019-12-25 05:45:09','2019-12-25 05:45:09'),(60,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','false',NULL,'6','Mathematics A/L Revision 2019','admin123','2019-12-25 05:46:05','2019-12-25 05:46:05'),(61,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','true','Test remark','6','Mathematics A/L Revision 2019','admin123','2019-12-25 05:46:42','2019-12-25 05:46:42'),(62,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','admin123','true','Test remark','6','Mathematics A/L Revision 2019','admin123','2019-12-25 05:46:50','2019-12-25 05:46:50'),(63,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','Cardmarker','false',NULL,'10','Lecture A/L 2019 Economics 2ND Shy','Cardmarker','2020-01-07 11:41:17','2020-01-07 11:41:17'),(64,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','Cardmarker','false',NULL,'10','Lecture A/L 2019 Economics 2ND Shy','Cardmarker','2020-01-07 11:41:29','2020-01-07 11:41:29'),(65,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','Cardmarker','false',NULL,'10','Lecture A/L 2019 Economics 2ND Shy','Cardmarker','2020-01-07 11:41:54','2020-01-07 11:41:54'),(66,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','Cardmarker','false',NULL,'2','Lecture 2 2019 A/L','Cardmarker','2020-01-07 12:10:56','2020-01-07 12:10:56'),(67,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','Cardmarker','false',NULL,'2','Lecture 2 2019 A/L','Cardmarker','2020-01-07 12:11:28','2020-01-07 12:11:28'),(68,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','Cardmarker','false',NULL,'2','Lecture 2 2019 A/L','Cardmarker','2020-01-07 12:11:38','2020-01-07 12:11:38'),(69,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','Cardmarker','false',NULL,'2','Lecture 2 2019 A/L','Cardmarker','2020-01-07 12:14:32','2020-01-07 12:14:32'),(70,'123456789012','still developping','123456789012','Sample(Pvt)Ltd','Cardmarker','false',NULL,'2','Lecture 2 2019 A/L','Cardmarker','2020-01-07 12:15:43','2020-01-07 12:15:43');
/*!40000 ALTER TABLE `card_markings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classrooms`
--

DROP TABLE IF EXISTS `classrooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `classrooms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `room_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_student_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `room_institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `classrooms_room_number_unique` (`room_number`),
  UNIQUE KEY `classrooms_room_name_unique` (`room_name`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classrooms`
--

LOCK TABLES `classrooms` WRITE;
/*!40000 ALTER TABLE `classrooms` DISABLE KEYS */;
INSERT INTO `classrooms` VALUES (1,'lecture-hall-0006','COMPANY_ID_313131','32313',NULL,'Hall Class','0','COMPANY_ID','2019-11-12 06:25:51','2019-12-28 13:41:18'),(2,'lecture-hall-0007','COMPANY_ID_rwerwrwrwer','32',NULL,'Hall Class','1','COMPANY_ID','2019-11-12 06:36:28','2019-11-12 06:36:28'),(3,'lecture-hall-0008','COMPANY_ID_53453534','54',NULL,'Hall Class','1','COMPANY_ID','2019-11-12 06:36:42','2019-11-12 06:36:42'),(4,'lecture-hall-0009','COMPANY_ID_53535354','54',NULL,'Hall Class','1','COMPANY_ID','2019-11-12 06:36:55','2019-11-12 06:36:55'),(5,'lecture-hall-00010','COMPANY_ID_423424','434','434','General Class','1','COMPANY_ID','2019-11-12 06:38:00','2019-11-12 06:38:00'),(6,'lecture-hall-00011','COMPANY_ID_4344343','43','43','Hall Class','1','COMPANY_ID','2019-11-12 06:38:37','2019-11-12 06:38:37'),(7,'lecture-hall-00012','COMPANY_ID_43433443','43','43','Group Class','1','COMPANY_ID','2019-11-12 06:38:42','2019-11-12 06:38:42'),(8,'lecture-hall-00013','COMPANY_ID_343434','43',NULL,'General Class','1','COMPANY_ID','2019-11-12 06:39:09','2019-11-12 06:39:09'),(9,'lecture-hall-00014','COMPANY_ID_3213312','31',NULL,'General Class','1','COMPANY_ID','2019-11-12 06:42:00','2019-11-12 06:42:00'),(10,'lecture-hall-0001','COMPANY_ID_Lecture Hall - First','1000','Description','Hall Class','1','COMPANY_ID','2019-11-30 10:13:33','2019-11-30 10:13:33'),(12,'lecture-hall-0003','COMPANY_ID_Lecture Hall - Third','800','Description3','Hall Class','1','COMPANY_ID','2019-11-30 10:14:36','2019-11-30 10:14:36'),(13,'lecture-hall-0002','COMPANY_ID_Lecture Hall - Two','500','Description2','Hall Class','1','COMPANY_ID','2019-11-30 10:15:16','2019-11-30 10:15:16'),(14,'lecture-hall-0004','COMPANY_ID_Lecture Hall - Four','600','Description4','Hall Class','1','COMPANY_ID','2019-11-30 10:15:46','2019-11-30 10:15:46'),(15,'lecture-hall-0005','COMPANY_ID_Lecture Hall - Five','950','Description5','Hall Class','0','COMPANY_ID','2019-11-30 10:16:13','2019-12-28 09:42:20');
/*!40000 ALTER TABLE `classrooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `free_cards`
--

DROP TABLE IF EXISTS `free_cards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `free_cards` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `free_cards`
--

LOCK TABLES `free_cards` WRITE;
/*!40000 ALTER TABLE `free_cards` DISABLE KEYS */;
INSERT INTO `free_cards` VALUES (1,'6','Amila','admin123','2','Lecture 2 2019 A/L','remarkssss',NULL,NULL);
/*!40000 ALTER TABLE `free_cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institutes`
--

DROP TABLE IF EXISTS `institutes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `institutes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `institute_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_contact_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute__contact_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_ower_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_staus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `institute_student_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_short_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_agreement_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_contacted_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_contacted_person_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `institutes_institute_contact_1_unique` (`institute_contact_1`),
  UNIQUE KEY `institutes_institute_ower_contact_unique` (`institute_ower_contact`),
  UNIQUE KEY `institutes_institute_short_code_unique` (`institute_short_code`),
  UNIQUE KEY `institutes_institute_agreement_id_unique` (`institute_agreement_id`),
  UNIQUE KEY `institutes_institute_contacted_person_mobile_unique` (`institute_contacted_person_mobile`),
  UNIQUE KEY `institutes_institute__contact_2_unique` (`institute__contact_2`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institutes`
--

LOCK TABLES `institutes` WRITE;
/*!40000 ALTER TABLE `institutes` DISABLE KEYS */;
INSERT INTO `institutes` VALUES (1,'AURADOT PVT PTD','No:07, Turner Rd, Colombo 08','0714567890','0724567890','Borella','Mr.Indika','0771234567','1','1000','General','AURA','GT-00876','DM.Didula Weerasekara','0781234567',NULL,NULL);
/*!40000 ALTER TABLE `institutes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invoices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_lecture_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_lecture_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_amount` double(8,2) DEFAULT NULL,
  `invoice_amount_received` double(8,2) DEFAULT NULL,
  `invoice_amount_due` double(8,2) DEFAULT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `invoice_status` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoices`
--

LOCK TABLES `invoices` WRITE;
/*!40000 ALTER TABLE `invoices` DISABLE KEYS */;
INSERT INTO `invoices` VALUES (1,'admin123','Cash','1','Amila','5','Economics A/L Revision 2018',1000.00,1111.00,111.00,'Aura','2019-11-30 15:01:17','2020-01-03 10:29:17','0'),(7,'admin123','Cash','6','Amila','2','Lecture A/L 2019 Economics 2ND Shy',900.00,1000.00,100.00,'Aura','2019-12-03 15:51:13','2019-11-30 15:51:13','1'),(8,'admin123','Cash','1','Amila','5','Economics A/L Revision 2018',1000.00,1000.00,0.00,'Aura','2019-11-29 15:53:17','2019-12-28 14:30:14','0'),(12,'admin123','Cash','6','Pradeep','6','Mathematics A/L Revision 2019',1000.00,1000.00,0.00,'Aura','2019-12-01 06:38:58','2019-12-01 06:38:58','1'),(13,'admin123','Cash','6','Pradeep','8','Accounting A/L Revision 2019',1000.00,1000.00,0.00,'Aura','2019-12-01 06:39:47','2019-12-01 06:39:47','1'),(14,'admin123','Cash','7','Silva','6','Mathematics A/L Revision 2019',1000.00,1000.00,0.00,'Aura','2019-12-01 06:41:55','2019-12-01 06:41:55','1'),(15,'admin123','Cash','7','Silva','6','Mathematics A/L Revision 2019',1000.00,1000.00,0.00,'Aura','2019-12-01 06:42:01','2019-12-01 06:42:01','1'),(20,'admin123','Cash','8','Amesha de Siilva','8','Accounting A/L Revision 2019',1000.00,1000.00,0.00,'Aura','2019-12-01 06:51:12','2019-12-01 06:51:12','1'),(24,'admin123','Cash','6','Pradeep','5','Economics A/L Revision 2018',1000.00,1001.00,1.00,'Aura','2019-12-01 06:56:50','2019-12-01 06:56:50','1'),(25,'admin123','Cash','6','Pradeep','9','BS A/L Revision 2019',1000.00,1000.00,0.00,'Aura','2019-12-01 06:57:40','2019-12-01 06:57:40','1'),(28,'admin123','Cash','6','Pradeep','5','Economics A/L Revision 2018',1000.00,1000.00,0.00,'Aura','2019-12-02 13:32:57','2019-12-02 13:32:57','1'),(29,'admin123','Cash','6','Pradeep','3','erwrwr',1000.00,1000.00,0.00,'Aura','2019-12-13 13:21:11','2019-12-13 13:21:11','1'),(31,'admin123','Cash','6','Pradeep','1','Science A/L Revision',10000.00,10000.00,0.00,'Aura','2019-12-14 05:56:52','2019-12-14 05:56:52','1'),(33,'admin123','Cash','7','Pradeep','2','Lecture 2 2019 A/L',900.00,1000.00,100.00,'Aura','2019-12-15 13:23:27','2019-12-15 13:23:27','1'),(34,'admin123','Cash','7','Pradeep','2','Lecture 2 2019 A/L',900.00,1000.00,100.00,'Aura','2019-12-15 13:59:09','2019-12-15 13:59:09','1'),(35,'admin123','Cash','7','Pradeep','2','Lecture 2 2019 A/L',900.00,1000.00,100.00,'Aura','2019-12-17 12:31:41','2019-12-17 12:31:41','1'),(36,'admin123','Cash','7','Pradeep','2','Lecture 2 2019 A/l',900.00,1200.00,300.00,'Aura','2019-12-18 11:44:20','2019-12-18 11:44:20','1'),(37,'admin123','Cash','6','Pradeep','2','Lecture A/L 2019 Economics 2ND Shy',900.00,1000.00,100.00,'Aura','2019-12-18 12:25:51','2019-12-18 12:25:51','1'),(38,'admin123','Cash','6','Pradeep','1','Science A/L Revision',10000.00,40009.00,30009.00,'Aura','2019-12-18 12:26:45','2019-12-18 12:26:45','1'),(39,'admin123','Cash','6','Pradeep','10','Lecture A/L 2019 Economics 2ND Shy',1000.00,1000.00,0.00,'Aura','2019-12-25 05:37:10','2019-12-25 05:37:10','1'),(40,'admin123','Cash','6','Pradeep','2','Lecture A/L 2019 Economics 2ND Shy',900.00,1000.00,100.00,'Aura','2020-01-04 12:33:54','2020-01-04 12:33:54','1'),(41,'admin123','Cash','6','Pradeep','10','Lecture A/L 2019 Economics 2ND Shy',1000.00,1000.00,0.00,'Aura','2020-01-05 12:34:56','2020-01-05 12:34:56','1'),(42,'cashier','Cash','6','Pradeep','2','Lecture A/L 2019 Economics 2ND Shy',900.00,1000.00,100.00,'Aura','2020-01-07 12:09:50','2020-01-07 12:09:50','1');
/*!40000 ALTER TABLE `invoices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lecture_operators`
--

DROP TABLE IF EXISTS `lecture_operators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lecture_operators` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lecture_hall_operator_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_hall_operator_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_hall_operator_lec_room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_hall_operator_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lecture_hall_operator_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lecture_operators`
--

LOCK TABLES `lecture_operators` WRITE;
/*!40000 ALTER TABLE `lecture_operators` DISABLE KEYS */;
INSERT INTO `lecture_operators` VALUES (1,'RTETER','0773244551','TERTETER',NULL,'on','authenticated_user_id','2019-11-09 05:19:40','2019-11-09 05:19:40'),(2,'amilaa','1234567890','3243242',NULL,'on','authenticated_user_id','2019-11-09 07:21:25','2019-11-09 07:21:25'),(3,'Amila123456','1234567890','eqweqeqw',NULL,'on','authenticated_user_id','2019-11-09 07:22:25','2019-11-09 07:22:25'),(4,'312321','3123131312','312313',NULL,'on','authenticated_user_id','2019-11-09 12:58:40','2019-11-09 12:58:40'),(5,'3123231312','3123123123','31231312',NULL,'on','admin123','2019-11-09 14:32:10','2019-11-09 14:32:10'),(6,'eweqeq','3123132312','eqweq',NULL,'on','admin123','2019-11-10 06:43:18','2019-11-10 06:43:18'),(7,'677868','4342343432','ewqeeqw',NULL,'on','admin123','2019-11-11 18:22:37','2019-11-11 18:22:37');
/*!40000 ALTER TABLE `lecture_operators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lectures`
--

DROP TABLE IF EXISTS `lectures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lectures` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lecture_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `lecture_start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lecture_lecturer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_classroom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_more_information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lecture_hall_operator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lecturer_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lectures`
--

LOCK TABLES `lectures` WRITE;
/*!40000 ALTER TABLE `lectures` DISABLE KEYS */;
INSERT INTO `lectures` VALUES (1,'Science A/L Revision','on','2019-11-16','2019-11-07','5','1','nkush','1','AURA','10000','2019-11-16 03:13:39','2019-11-16 03:13:39','SMG.Ranga',NULL),(2,'Lecture 2 2019 A/L','on','2019-11-14','2019-11-14','1','1','21','21221212','AURA','900','2019-11-29 13:18:54','2019-11-29 13:18:54','SGH.Kulathunga',NULL),(3,'erwrwr','on','2019-11-06','2019-11-07','1','1',NULL,'1','AURA','1000','2019-11-30 11:58:32','2019-11-30 11:58:32','SGH.Kulathunga',NULL),(4,'Economics A/L Revision 2019','on','2019-11-06','2019-11-07','1','1',NULL,'1','AURA','1000','2019-11-30 12:04:40','2019-11-30 12:04:40','SGH.Kulathunga',NULL),(5,'Economics A/L Revision 2018','on','2019-11-06','2019-11-07','1','1',NULL,'1','AURA','1000','2019-11-30 12:06:55','2019-11-30 12:06:55','SGH.Kulathunga',NULL),(6,'Mathematics A/L Revision 2019','on','2019-11-06','2019-11-07','2','1',NULL,'1','AURA','1000','2019-11-30 12:07:41','2019-11-30 12:07:41','AWS.Amila',NULL),(7,'SinhalaA/L Revision 2019','on','2019-11-06','2019-11-07','2','1',NULL,'1','AURA','1000','2019-11-30 12:08:18','2019-11-30 12:08:18','AWS.Amila',NULL),(8,'Accounting A/L Revision 2019','on','2019-11-06','2019-11-07','5','4',NULL,'1','AURA','1000','2019-11-30 12:08:43','2019-11-30 12:08:43','SMG.Ranga',NULL),(9,'BS A/L Revision 2019','on','2019-11-06','2019-11-07','4','4',NULL,'1','AURA','1000','2019-11-30 12:08:54','2019-11-30 12:08:54','SMG.Renuka',NULL),(10,'Lecture A/L 2019 Economics 2ND Shy','on','2019-12-01','2019-12-31','5','2','323','323','AURA','1000','2019-12-22 06:01:51','2019-12-22 06:01:51','SMG.Ranga',NULL);
/*!40000 ALTER TABLE `lectures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `links` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `links`
--

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` VALUES (1,'https://laravel.com/','Laravel - The PHP framework for web artisans.','2019-11-02 07:20:42','2019-11-02 07:20:42'),(2,'https://laracasts.com/','The best PHP and Laravel screencasts on the web.','2019-11-02 07:20:42','2019-11-02 07:20:42');
/*!40000 ALTER TABLE `links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_11_02_075951_create_students_table',2),(5,'2019_11_02_124640_create_links_table',3),(7,'2019_11_02_132041_create_banks_table',4),(8,'2019_11_02_175153_create_products_table',5),(13,'2019_11_09_081832_create_lecture_operators_table',9),(14,'2019_11_10_002301_create_invoices_table',10),(23,'2019_11_11_142759_create_students_table',11),(25,'2019_11_03_071208_create_classrooms_table',12),(27,'2019_11_12_151020_create_institutes_table',14),(28,'2019_11_03_112649_create_teachers_table',15),(31,'2019_11_07_142213_create_lectures_table',16),(33,'2019_11_30_204010_create_free_cards_table',17),(35,'2019_12_14_115805_create_card_markings_table',18),(36,'2014_10_12_000000_create_users_table',19);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (33,'Kapila','odgdgd','2019-11-03 14:00:47','2019-11-22 10:55:05'),(38,'sghfghg','hhgfhgh','2019-11-23 04:51:41','2019-11-23 04:51:41'),(39,'gfgfg','gdfg','2019-11-23 04:53:26','2019-11-23 04:53:26'),(40,'gfgfgdsa','gdfgdas','2019-11-23 04:53:58','2019-11-23 04:53:58'),(41,'gfgfgdsa','gdfgdas','2019-11-23 04:54:00','2019-11-23 04:54:00'),(42,'gfgfgdsa','gdfgdas','2019-11-23 04:54:02','2019-11-23 04:54:02'),(43,'gfgfgdsa','gdfgdas','2019-11-23 04:54:02','2019-11-23 04:54:02'),(44,'gfgfgdsa','gdfgdas','2019-11-23 04:54:03','2019-11-23 04:54:03'),(45,'gfgfgdsa','gdfgdas','2019-11-23 04:54:04','2019-11-23 04:54:04'),(46,'gfgfgdsa','gdfgdas','2019-11-23 04:54:05','2019-11-23 04:54:05'),(47,'gfgfgdsa','gdfgdas','2019-11-23 04:54:06','2019-11-23 04:54:06'),(49,'juju','juu','2019-11-23 04:58:15','2019-11-23 04:58:15'),(50,'juju','juu','2019-11-23 04:58:15','2019-11-23 04:58:15'),(51,'juju','juu','2019-11-23 04:58:17','2019-11-23 04:58:17'),(52,'juju','juu','2019-11-23 04:58:17','2019-11-23 04:58:17'),(53,'juju','juu','2019-11-23 04:58:18','2019-11-23 04:58:18'),(54,'juju','juu','2019-11-23 04:58:18','2019-11-23 04:58:18'),(55,'juju','juu','2019-11-23 04:58:19','2019-11-23 04:58:19'),(56,'juju','juu','2019-11-23 04:58:19','2019-11-23 04:58:19'),(57,'juju','juu','2019-11-23 04:58:20','2019-11-23 04:58:20'),(58,'juju','juu','2019-11-23 04:58:21','2019-11-23 04:58:21'),(59,'juju','juu','2019-11-23 04:58:21','2019-11-23 04:58:21'),(60,'juju','juu','2019-11-23 04:58:22','2019-11-23 04:58:22'),(61,'juju','juu','2019-11-23 04:58:23','2019-11-23 04:58:23'),(62,'juju','juu','2019-11-23 04:58:23','2019-11-23 04:58:23'),(63,'juju','juu','2019-11-23 04:58:24','2019-11-23 04:58:24'),(64,'juju','juu','2019-11-23 04:58:27','2019-11-23 04:58:27'),(65,'juju','juu','2019-11-23 04:58:28','2019-11-23 04:58:28'),(66,'juju','juu','2019-11-23 04:58:29','2019-11-23 04:58:29'),(67,'juju','juu','2019-11-23 04:58:29','2019-11-23 04:58:29'),(68,'juju','juu','2019-11-23 04:58:30','2019-11-23 04:58:30'),(69,'juju','juu','2019-11-23 04:58:30','2019-11-23 04:58:30'),(70,'jujuju','uju','2019-11-23 04:58:34','2019-11-23 04:58:34'),(71,'jujuju','uju','2019-11-23 04:58:35','2019-11-23 04:58:35'),(72,'jujuju','uju','2019-11-23 04:58:36','2019-11-23 04:58:36'),(73,'jujuju','uju','2019-11-23 04:58:37','2019-11-23 04:58:37'),(74,'jujuju','uju','2019-11-23 04:58:37','2019-11-23 04:58:37'),(75,'jujuju','uju','2019-11-23 04:58:38','2019-11-23 04:58:38'),(76,'jujuju','uju','2019-11-23 04:58:38','2019-11-23 04:58:38'),(77,'jujuju','uju','2019-11-23 04:58:39','2019-11-23 04:58:39'),(78,'jujuju','uju','2019-11-23 04:58:40','2019-11-23 04:58:40'),(79,'jujuju','uju','2019-11-23 04:58:41','2019-11-23 04:58:41'),(80,'jujuju','uju','2019-11-23 04:58:42','2019-11-23 04:58:42'),(81,'jujuju','uju','2019-11-23 04:58:42','2019-11-23 04:58:42'),(82,'jujuju','uju','2019-11-23 04:58:43','2019-11-23 04:58:43');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `students` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_age` int(11) NOT NULL,
  `student_dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_nic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_private_contact` int(11) DEFAULT NULL,
  `student_guardian_contact` int(11) DEFAULT NULL,
  `student_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `student_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_barcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No Company',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `student_gender` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_student_barcode_unique` (`student_barcode`),
  UNIQUE KEY `students_student_private_contact_unique` (`student_private_contact`),
  UNIQUE KEY `students_student_guardian_contact_unique` (`student_guardian_contact`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'Amila','Udawela, Tharana - Udawela','Bingiriya',67,'2019-11-15','0987654322','Grade 06',1234567890,987654321,'General',NULL,'0',NULL,'001201911111','Sample Institune (pvt) Ltd','admin123','2019-11-11 16:04:33','2019-11-11 16:04:33','Male'),(6,'Pradeep','098765432132','234234342',43,'2019-10-29','0987654321','Select Your Grade',1234567891,987654326,'General',NULL,'1',NULL,'123456789012','Sample Institune (pvt) Ltd','admin123','2019-11-11 16:10:44','2019-11-11 16:10:44','Female'),(7,'Silva','Udawela, Tharana - Udawela','Bigiriya',21,'2019-11-08','123456789v','Select Your Grade',987651234,1234567098,'General',NULL,'1',NULL,'001201911117','Sample Institune (pvt) Ltd','admin123','2019-11-11 16:11:48','2019-11-11 16:11:48','Male'),(8,'Amesha de Siilva','Udawela, thjarana Bigiriya','Kurunegala',21,'2019-11-20','9832324342','Grade 11',775434321,789090909,'O/L','Description 1','1',NULL,'001201911308','Sample Institune (pvt) Ltd','admin123','2019-11-30 12:11:25','2019-11-30 12:11:25','Female'),(9,'Sandun De Silva','kadigamuwa , Bigiriya, Srilanka','Kurunegala',23,'2019-02-17','983231312321','Grade 03',774534534,442424424,'General','desc 2','1',NULL,'001201911309','Sample Institune (pvt) Ltd','admin123','2019-11-30 12:12:43','2019-11-30 12:12:43','Male'),(10,'Deshan','Anuradhapura','Kurunegala',28,'2019-02-06','96312321123','Grade 03',774342434,886424243,'O/L','4342','1',NULL,'001201911301','Sample Institune (pvt) Ltd','admin123','2019-11-30 12:15:55','2019-11-30 12:15:55','Female'),(11,'AMS.Amila','Udawela, Tharana - Udawela','Bingiriya',26,'2019-02-02','932510642V','Grade After Grade 13',774244755,712342345,'General',NULL,'1',NULL,'0012019113011','Sample Institune (pvt) Ltd','admin123','2019-11-30 12:28:54','2019-11-30 12:28:54','Male'),(12,'SHA Sandun','Udawela, Tharana - Udawela','Kurunegla',25,'2019-11-11','932510876v','Grade After Grade 13',774244751,744427556,'O/L',NULL,'1',NULL,'0012019120112','Sample Institune (pvt) Ltd','admin123','2019-12-01 14:20:38','2019-12-01 14:20:38','Female'),(13,'Saman Indika','Kaduwe, Sri lanka','Kaduwela',19,'2019-11-11','932510612v','Grade After Grade 13',774244756,774244557,'O/L','Description','1',NULL,'0012019120113','Sample Institune (pvt) Ltd','admin123','2019-12-01 14:25:20','2019-12-01 14:25:20','Male'),(14,'mano Priyamantha','Wattala Sri Lanka','Waththala',18,'2091-11-11','962510883V','Grade 04',717722334,323242444,'After A/L','Description','1',NULL,'0012019120114','Sample Institune (pvt) Ltd','admin123','2019-12-01 14:26:56','2019-12-01 14:26:56','Female'),(15,'Gayan Hettiarachchi','Kandana, Sri Lanka','Kandana',27,'12019-11-11','932510752V','Grade After Grade 13',783218905,781231234,'After A/L','wqwqw','1',NULL,'0012019120115','Sample Institune (pvt) Ltd','admin123','2019-12-01 14:30:39','2019-12-01 14:30:39','Male'),(16,'Deshan','Udawela, Tharana - Udawela','Bingiriya',21,'2019-12-11','1992323243V','Grade 02',775353547,787562541,'Primary',NULL,'0',NULL,'0012019120116','Sample Institune (pvt) Ltd','admin123','2019-12-01 14:32:52','2019-12-28 16:08:57','Female'),(17,'JSA rathnayaka','Kurunegala','Kurunegala',26,'2019-11-15','932475863V','Grade 03',778989891,778787871,'General',NULL,'1',NULL,'0012019120117','Sample Institune (pvt) Ltd','admin123','2019-12-01 14:35:54','2019-12-01 14:35:54','Male'),(18,'Samn Indika','Karuaagaswewa','Puththalama',27,'2019-11-11','923456789V','Grade After Grade 13',767897898,767897891,'General',NULL,'1',NULL,'0012019120118','Sample Institune (pvt) Ltd','admin123','2019-12-01 14:39:34','2019-12-01 14:39:34','Female'),(19,'Amila Sandaruwan','Udawela, Tharana - Udawela','Bingiriya',17,'2019-11-11','1993282823V','Grade 02',774343456,775353765,'Primary','Description','1',NULL,'0012019120119','Sample Institune (pvt) Ltd','admin123','2019-12-01 14:46:12','2019-12-01 14:46:12','Female'),(20,'Sandun Withanage','Udawela, Tharana - Udawela','Bingiriya',25,'0019-11-12','981234566v','Select Your Grade',770987654,789087654,'General',NULL,'1','1','0012019120120','Sample Institune (pvt) Ltd','admin123','2019-12-01 15:12:59','2019-12-01 15:29:31','Female'),(21,'Amila','eqeqewrwrew','Bingiriya',16,'2019-12-10','932510611v','Grade After Grade 13',774233445,774233443,'O/L','ewwe','1',NULL,'0012019121021','Sample Institune (pvt) Ltd','admin123','2019-12-10 13:44:01','2019-12-10 13:44:01','Female'),(22,'qweeqwewq','Udawela, Tharana - Udawela','Bingiriya',32,'2019-12-25','2424442342V','Grade 03',785345345,785345348,'After O/L','rwerewr','1','1','0012019121022','Sample Institune (pvt) Ltd','admin123','2019-12-10 13:44:57','2019-12-10 13:45:26','Male'),(23,'Amiala','Udawela, Tharana - Udawela','Bingiriya',23,'2019-12-10','932870642V','Grade 04',774244112,774244111,'O/L','ewrwewer','1','1','0012019121023','Sample Institune (pvt) Ltd','admin123','2019-12-10 16:08:21','2019-12-10 16:08:43','Female'),(24,'Ashan soyza','821/211 Maradsana','Colombo',16,'2019-12-27','932510842v','Grade 05',774244754,782189234,'General',NULL,'1','1','0012019122124','Sample Institune (pvt) Ltd','cashier','2019-12-21 05:12:16','2019-12-21 05:12:39','Female');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teachers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `teacher_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `teacher_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_nic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_bank_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revenue_percentage` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `teachers_teacher_nic_unique` (`teacher_nic`),
  UNIQUE KEY `teachers_teacher_mobile_unique` (`teacher_mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (1,'1','Mr.','SGH.Kulathunga','1994-11-12','Advanced Level','23145678990','Udawela, Tharana - Udawela','1234567899','1234567543vfg',NULL,'098765432','nationstrust Bank - Kuliyapitiya','AURA','2019-11-12 10:40:29','2019-11-12 10:40:29',NULL,'70'),(2,'1','Mr.','AWS.Amila','1993-09-07','Advanced Level','932510642','Udawela, Tharana - Udawela','0774244755','Economics',NULL,'055215005660','nationstrust Bank - Kuliyapitiya','AURA','2019-11-30 11:15:42','2019-11-30 11:15:42',NULL,'70'),(3,'1','Mr.','AGT.Sanka','1976-06-23','Advanced Level','762510642','Pahala Tharana, Tharana - Udawela','0774444444','Maths A/L',NULL,'05521500000','nationstrust Bank - Kuliyapitiya','AURA','2019-11-30 11:16:51','2019-11-30 11:16:51',NULL,'70'),(4,'1','Mr.','SMG.Renuka','1976-06-23','Advanced Level','762510767','Kadigamuwa Tharana, Tharana - Udawela','0775555555','Science A/l',NULL,'05521500000','nationstrust Bank - Kuliyapitiya','AURA','2019-11-30 11:17:26','2019-11-30 11:17:26',NULL,'70'),(5,'1','Mr.','SMG.Ranga','1976-06-23','Advanced Level','6742342234','Biowatta Tharana, Tharana - Udawela','0772121212','Physics A/L',NULL,'055214343345','Nationstrust Bank - Kuliyapitiya','AURA','2019-11-30 11:20:01','2019-11-30 11:20:01',NULL,'70'),(6,'1','Mr.','rwerwrw','2020-01-17','University Lectures','6546566666','656','3453454645','646546',NULL,'654654','6456','AURA','2020-01-05 08:01:52','2020-01-05 08:01:52','admin123','65');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin123','ADMIN','auraDOT (Pvt)Ltd','admin@gmail.com',NULL,'$2y$10$ZLkYEMjZ6AJk5SqvLwFgZ.ZIiZSyjol7CtChsjJ4BAUQxs9KiXFSa',NULL,'2019-12-18 17:29:31','2019-12-18 17:29:31','1'),(5,'Amila','OPERATOR','admin123','operator@gmail.com',NULL,'$2y$10$x0BIUA/tAwLoOGHppMjYpOzKCmykbBMbWq4GSXrIhyEDEKbV3mJA2',NULL,'2019-12-21 04:30:34','2019-12-21 04:30:34','1'),(6,'Cardmarker','CARDMARKER','Amila','marker@gmail.com',NULL,'$2y$10$vpCIO/LXIcjGGIFL00q3MOOR4OKYBcNUrl7h4Ep1jNyRrv/pg2HbO',NULL,'2019-12-21 04:31:29','2019-12-21 04:31:29','1'),(7,'cashier','CASHIER','Cardmarker','cashier@gmail.com',NULL,'$2y$10$Ie70K2fKv6l.Wz/O2biMVeTVFoLBsGpCEhufhdmmXGRuYy22qw.dq',NULL,'2019-12-21 04:32:18','2019-12-21 04:32:18','1'),(8,'Amila','OPERATOR','cashier','operator2@gmail.com',NULL,'$2y$10$wljxkc5t6SigLvK6kuhiQOSjZ6oZdkg37u3bioP4Q6S8UyAFZu.1O',NULL,'2019-12-21 04:39:40','2019-12-21 04:39:40','1');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-07 22:50:18
