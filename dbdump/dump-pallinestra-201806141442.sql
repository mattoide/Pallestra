-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: pallinestra
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `esercizi`
--

DROP TABLE IF EXISTS `esercizi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `esercizi` (
  `esercizio` varchar(100) DEFAULT NULL,
  `partecorpo` varchar(100) DEFAULT NULL,
  `muscolo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `esercizi`
--

LOCK TABLES `esercizi` WRITE;
/*!40000 ALTER TABLE `esercizi` DISABLE KEYS */;
INSERT INTO `esercizi` VALUES ('Hammer','Braccia','Bicipiti'),('Panca Scott','Braccia','Bicipiti'),('Tirate ai cavi','Braccia','Tricipiti'),('Squat','Gambe','Quadricipiti'),('Leg Press','Gambe','Quadricipiti'),('Panca Piana','Tronco','Pettorali'),('Crunch','Tronco','Addominali');
/*!40000 ALTER TABLE `esercizi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `esercizio`
--

DROP TABLE IF EXISTS `esercizio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `esercizio` (
  `nome` varchar(100) NOT NULL,
  `muscolo` varchar(100) DEFAULT NULL,
  `partecorpo` varchar(100) DEFAULT NULL,
  `ripetizioni` varchar(100) DEFAULT NULL,
  `serie` varchar(100) DEFAULT NULL,
  `recupero` varchar(100) DEFAULT NULL,
  `peso` varchar(100) DEFAULT NULL,
  `nomeutente` varchar(100) NOT NULL,
  PRIMARY KEY (`nome`,`nomeutente`),
  KEY `esercizio_utente_FK` (`nomeutente`),
  CONSTRAINT `esercizio_utente_FK` FOREIGN KEY (`nomeutente`) REFERENCES `utente` (`nickname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `esercizio`
--

LOCK TABLES `esercizio` WRITE;
/*!40000 ALTER TABLE `esercizio` DISABLE KEYS */;
/*!40000 ALTER TABLE `esercizio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utente`
--

DROP TABLE IF EXISTS `utente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utente` (
  `nickname` varchar(100) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cognome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nickname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utente`
--

LOCK TABLES `utente` WRITE;
/*!40000 ALTER TABLE `utente` DISABLE KEYS */;
/*!40000 ALTER TABLE `utente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'pallinestra'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-14 14:42:19
