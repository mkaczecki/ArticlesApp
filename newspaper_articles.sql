CREATE DATABASE  IF NOT EXISTS `newspaper` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `newspaper`;
-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: newspaper
-- ------------------------------------------------------
-- Server version	5.7.32-log

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(6) unsigned DEFAULT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (2,1,'Szampan, fawior i… brak maseczek. Policja zbada sprawę nielegalnych obiadów z udziałem francuskich ministrów','                Francuski minister spraw zagranicznych Gerard Darmanin zażądał przeprowadzenia śledztwa w sprawie tajnych, ekskluzywnych obiadów, w których mieli brać udział także wysocy rangą ministrowie rządu. Proceder ujawniła prywatna telewizja. Według nagrań, goście mogli usłyszeć na wejściu: „Wchodzisz, i już nie ma Covida”.             ',1,'2021-04-06 00:01:29'),(3,1,'Hubert Hurkacz na ustach świata. \"Sensacyjny tenisista\" ','Skandynawskie media odnotowały zwycięstwo Huberta Hurkacza nad Jannikiem Sinnerem turnieju w Miami nie tylko jako dużą niespodziankę, lecz też powrót polskiego tenisa na wielką scenę 40 lat po sukcesach Wojciecha Fibaka.',1,'2021-04-05 17:28:30'),(5,1,'Nowy Artykuł Raz Dwa Trzy','Something to say here...',0,'2021-04-05 21:37:19'),(6,1,'Nowy Artykuł Raz Dwa Trzy','Something to say here...',0,'2021-04-05 21:38:29'),(9,3,'rgrgregerg','tegedrfggegreg',0,'2021-04-05 23:05:04'),(10,1,'Something Different','dhqodhqoidhqwieodhjqiw3eodh',1,'2021-04-05 23:47:32');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-06  2:12:55
