CREATE DATABASE  IF NOT EXISTS `shop` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `shop`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: shop
-- ------------------------------------------------------
-- Server version	5.6.26

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
-- Table structure for table `editions`
--

DROP TABLE IF EXISTS `editions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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

--
-- Table structure for table `prices`
--

DROP TABLE IF EXISTS `prices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prices` (
  `price_id` int(11) NOT NULL,
  `price_1` double DEFAULT NULL,
  `price_2` double DEFAULT NULL,
  `price_3` double DEFAULT NULL,
  `price_4` double DEFAULT NULL,
  PRIMARY KEY (`price_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prices`
--

LOCK TABLES `prices` WRITE;
/*!40000 ALTER TABLE `prices` DISABLE KEYS */;
INSERT INTO `prices` VALUES (0,59.99,69.99,89.99,NULL),(1,59.99,74.99,NULL,NULL),(2,59.99,99.99,119.99,NULL),(3,0,49.99,79.99,119.99),(4,39.99,NULL,NULL,NULL),(5,9.99,NULL,NULL,NULL),(6,59.99,84.99,NULL,NULL),(7,17.49,NULL,NULL,NULL),(8,39.99,NULL,NULL,NULL),(9,49.99,NULL,NULL,NULL),(10,59.99,6.99,NULL,NULL),(11,49.99,NULL,NULL,NULL),(12,59.99,NULL,NULL,NULL),(13,34.99,NULL,NULL,NULL);
/*!40000 ALTER TABLE `prices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_developer` varchar(50) NOT NULL,
  `product_description` varchar(2500) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (0,'Vampire The Masquerade - Bloodlines 2','Paradox Interactive | Hardsuit Labs Inc.','<t>Werde zum ultimativen Vampir.</t>'),(1,'The Sinking City','Big Ben Interactive | Frogwares','<t>Stürze dich in den Wahnsinn</t>'),(2,'Tom Clancy\'s The Division 2','Ubisoft | Massive Entertainment','<t>Die Nachwelt wird sich erinnern</t>'),(3,'Spellbreak','Proletariat, Inc.','<t>Bereit zum Aufbruch</t>'),(4,'Phoenix Point','Snapshot Games','<t>Phoenix Point</t>'),(5,'Slime Rancher','Monomi Park','<t>Willkommen auf der „Fernen, fernen Weite“</t>'),(6,'Metro Exodus','Deep Silver | 4A Games','<t>Metro Exodus</t>'),(7,'Hades','Supergiant Games','<t>Kämpf dich aus der Hölle</t>'),(8,'Ashen','Focus Home Interactive','<t>Ashen</t>'),(9,'Far Cry Primal','Ubisoft Entertainment','<t>Vom Gejagten zum Jäger</t>'),(10,'Darksiders III','THQ Nordic | Gunfire Games','<t>Darksiders III</t>'),(11,'Tom Clancy\'s Ghost Reacon Wildlands','Ubisoft Entertainment','<t>Tom Clancy’s Ghost Recon® Wildlands Standard Edition</t>'),(12,'Watch Dogs 2','Ubisoft Entertainment','<t>Watch Dogs 2</t>'),(13,'World War Z','Saber Interactive','<t>Outlive the dead</t>');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-30 13:35:32
