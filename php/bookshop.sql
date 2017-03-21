-- MySQL dump 10.13  Distrib 5.6.26, for Win32 (x86)
--
-- Host: localhost    Database: bookshop
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
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `bookid` int(4) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(20) NOT NULL,
  `quantity` int(100) NOT NULL,
  `genre` char(15) NOT NULL,
  `description` varchar(50) NOT NULL,
  `yearofrelease` date NOT NULL,
  `price` float(4,2) NOT NULL,
  `author` char(30) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'twilight',3,'history','vampires','2015-03-03',4.00,''),(2,'djkdalj',4,'dkjafk','dkjdkjdklf','2014-11-11',4.00,'dkla'),(4,'The Hunger Games',4,'Fiction','blah blah blah','0000-00-00',30.00,'Suzanne Collins');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `custid` int(4) NOT NULL AUTO_INCREMENT,
  `title` char(3) DEFAULT NULL,
  `forename` char(10) NOT NULL,
  `surname` char(15) NOT NULL,
  `street` varchar(20) NOT NULL,
  `town` varchar(15) NOT NULL,
  `county` char(15) NOT NULL,
  `eircode` varchar(7) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` varchar(25) NOT NULL,
  `cardno` int(19) NOT NULL,
  `securitycode` int(3) NOT NULL,
  PRIMARY KEY (`custid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (4,'mr','aoife','sayers','ekjek','dkjd','','333','aoife','3383',222,22),(5,'mr','Aoife','Sayers','Lack','Inch','kerry','29393f','aoifesayers@gma','862307924',123456,66),(6,'mrs','Oonagh','Sayers','Inch','Annascaul','waterford','j3k3939','kdlljakf','81373838',202020,33),(7,'Mrs','Aoife','Sayers','Lack, Inch','Annascaul','Kerry','2393939','aoifesayers@gma','862307924',23456789,12),(8,'Ms','dafkjla','jkdlafjalk','dljakfkal','tralee','Kerry','jkdlafj','ajklaja','862307914',12345,12),(9,'Ms','dafkjla','jkdlafjalk','dljakfkal','tralee','Kerry','jkdlafj','ajklaja','862307914',12345,12),(10,'Ms','Aoife','Sayers','Inch','Annascaul','Kerry','3939kdf','aoifesayers@gma','862307924',39393,12),(11,'Ms','Aoife','Sayers','Inch','Annascaul','Kerry','jekljel','aoifesayers@gma','86207924',303030,12),(12,'Ms','Anne','O\'Brien','Blennervil','Tralee','Kerry','3939od','anne.obrien@staff.ittralee.ie','862307924',3039393,12);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `custid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `dateordplace` date NOT NULL,
  `deliverycost` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`orderid`),
  KEY `custid` (`custid`),
  KEY `bookid` (`bookid`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`custid`) REFERENCES `customer` (`custid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`custid`) REFERENCES `customer` (`custid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`bookid`) REFERENCES `books` (`bookid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-21  1:03:46
