CREATE DATABASE  IF NOT EXISTS `shop` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `shop`;
-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: shop
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
-- Table structure for table `editions`
--

DROP TABLE IF EXISTS `editions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `editions` (
  `edition_id` int(11) NOT NULL,
  `edition_1` varchar(60) DEFAULT NULL,
  `edition_2` varchar(60) DEFAULT NULL,
  `edition_3` varchar(60) DEFAULT NULL,
  `edition_4` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`edition_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `editions`
--

LOCK TABLES `editions` WRITE;
/*!40000 ALTER TABLE `editions` DISABLE KEYS */;
INSERT INTO `editions` VALUES (0,'Vampire The Masquerade - Bloodlines 2 - Standart Edition','Vampire The Masquerade - Bloodlines 2 - Deluxe Edition','Vampire The Masquerade - Bloodlines 2 - Premium Edition',NULL),(1,'The Sinking City - Standart Edition','The Sinking City - Necronomicon Edition',NULL,NULL),(2,'Tom Clancy\'s The Division 2 - Standart Edition','Tom Clancy\'s The Division 2 - Gold Edition','Tom Clancy\'s The Division 2 - Ultimate Edition',NULL),(3,'Spellbreak - Alpha','Spellbreak - Mage-Paket','Spellbreak - Battlemage-Paket','Spellbreak - Master-Packet'),(4,'Phoenix Point',NULL,NULL,NULL),(5,'Slime Rancher',NULL,NULL,NULL),(6,'Metro Exodus - Standart Edition','Metro Exodus - Gold Edition',NULL,NULL),(7,'Hades',NULL,NULL,NULL),(8,'Ashen',NULL,NULL,NULL),(9,'Far Cry Primal',NULL,NULL,NULL),(10,'Darksiders III','Darksiders III - The Crucible',NULL,NULL),(11,'Tom Clancy\'s Ghost Reacon Wildlands',NULL,NULL,NULL),(12,'Watch Dogs 2',NULL,NULL,NULL),(13,'World War Z',NULL,NULL,NULL);
/*!40000 ALTER TABLE `editions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-06 12:24:39
