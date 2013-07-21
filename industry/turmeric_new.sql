-- MySQL dump 10.13  Distrib 5.5.27, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: turmeric_industry
-- ------------------------------------------------------
-- Server version	5.5.27-0ubuntu2

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
-- Table structure for table `bill`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `turmeric_industry` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `turmeric_industry`;


DROP TABLE IF EXISTS `bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bill` (
  `bill_no` int(11) NOT NULL,
  `cost` decimal(10,2) NOT NULL DEFAULT '0.00',
  `due_date` date NOT NULL,
  `penalty` int(11) DEFAULT NULL,
  `date_of_payment` date DEFAULT NULL,
  `wssn` char(9) NOT NULL,
  PRIMARY KEY (`bill_no`,`wssn`),
  KEY `wssn` (`wssn`),
  CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`wssn`) REFERENCES `workers` (`ssn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill`
--

LOCK TABLES `bill` WRITE;
/*!40000 ALTER TABLE `bill` DISABLE KEYS */;
INSERT INTO `bill` (`bill_no`, `cost`, `due_date`, `penalty`, `date_of_payment`, `wssn`) VALUES (1,500.00,'2010-02-01',0,'2010-03-01','132456789'),(2,500.00,'2010-02-01',300,'2010-03-01','132456789'),(3,500.00,'2010-02-01',300,'2010-03-01','132456789'),(4,500.00,'2010-02-01',290,'2010-03-01','132456789'),(5,500.00,'2010-02-01',300,'2010-03-01','132456789'),(6,500.00,'2010-02-01',300,'2010-03-01','132456789'),(7,500.00,'2010-02-01',290,'2010-03-01','132456789'),(8,500.00,'2010-02-01',300,'2010-03-01','132456789'),(9,500.00,'2010-02-01',300,'2010-03-01','132456789'),(11,500.00,'2010-02-01',20,'2010-02-02','132456789'),(12,500.00,'2010-02-01',10,'2010-02-02','132456789'),(13,500.00,'2010-02-01',10,'2010-02-02','132456789');
/*!40000 ALTER TABLE `bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `sex` enum('M','F','G') NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone_no` char(11) NOT NULL,
  `payment_pending` decimal(10,2) DEFAULT '0.00',
  `profitable` enum('0','1') NOT NULL,
  `essn` char(9) NOT NULL,
  PRIMARY KEY (`id`,`essn`),
  KEY `essn` (`essn`),
  CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`essn`) REFERENCES `employee` (`ssn`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` (`fname`, `lname`, `sex`, `address`, `id`, `phone_no`, `payment_pending`, `profitable`, `essn`) VALUES ('Tanuj','sharma','','sf',2,'2147483647',0.00,'1','123423424'),('Tanuj','sharma','','sdf',3,'2147483647',0.00,'0','123423424'),('Tanuj','sharma','','j',5,'0',0.00,'1','123423424'),('Tanuj','sharma','','fd',6,'0',0.00,'1','123423424'),('Tanuj','sharma','','fds',7,'*12345678',0.00,'1','123423424');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dealer`
--

DROP TABLE IF EXISTS `dealer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dealer` (
  `id` int(11) NOT NULL,
  `type` char(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sex` enum('M','F','G') NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_no` char(11) NOT NULL,
  `payment_to_give` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dealer`
--

LOCK TABLES `dealer` WRITE;
/*!40000 ALTER TABLE `dealer` DISABLE KEYS */;
INSERT INTO `dealer` (`id`, `type`, `name`, `sex`, `address`, `phone_no`, `payment_to_give`) VALUES (1,'sdf','Aman','M','sdf','8886474956',-1.00),(2,'','','','sdf','',0.00),(100,'dsf','Aman','M','df','8886474956',2234.00);
/*!40000 ALTER TABLE `dealer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `dnumber` int(11) NOT NULL,
  `dlocation` varchar(30) NOT NULL,
  `purpose` varchar(30) DEFAULT NULL,
  `open_time` time NOT NULL,
  `close_time` time NOT NULL,
  `profit_earned` int(11) NOT NULL DEFAULT '0',
  `maintain_cost` int(11) NOT NULL DEFAULT '0',
  `dname` varchar(15) NOT NULL,
  PRIMARY KEY (`dnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` (`dnumber`, `dlocation`, `purpose`, `open_time`, `close_time`, `profit_earned`, `maintain_cost`, `dname`) VALUES (0,'4','jaskjf','00:00:00','10:00:00',22,0,''),(1,'Main Siyanganj','Dealing','09:00:00','20:00:00',1000000,5000,'Shop'),(2,'Palda','Preparation','10:00:00','17:00:00',500000,5000,'Factory'),(3,'Siyanganj','Storage','10:00:00','17:00:00',0,5000,'Godown');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dependent`
--

DROP TABLE IF EXISTS `dependent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dependent` (
  `essn` char(9) NOT NULL,
  `name` char(15) NOT NULL,
  `sex` enum('M','F','G') NOT NULL,
  `bdate` date DEFAULT NULL,
  `relationship` char(9) DEFAULT NULL,
  PRIMARY KEY (`essn`,`name`),
  CONSTRAINT `dependent_ibfk_1` FOREIGN KEY (`essn`) REFERENCES `employee` (`ssn`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dependent`
--

LOCK TABLES `dependent` WRITE;
/*!40000 ALTER TABLE `dependent` DISABLE KEYS */;
INSERT INTO `dependent` (`essn`, `name`, `sex`, `bdate`, `relationship`) VALUES ('123423424','Aman','M','1993-11-08','student'),('123423424','Tnuj','M','1993-08-11','student');
/*!40000 ALTER TABLE `dependent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `sex` enum('M','F','G') NOT NULL,
  `contact_no` char(11) DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  `ssn` char(9) NOT NULL,
  `salary` decimal(10,2) NOT NULL DEFAULT '0.00',
  `address` varchar(50) NOT NULL,
  `join_date` date NOT NULL,
  `dno` int(11) NOT NULL,
  `leave_date` date DEFAULT NULL,
  PRIMARY KEY (`ssn`),
  KEY `dno` (`dno`),
  CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`dno`) REFERENCES `department` (`dnumber`),
  CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`dno`) REFERENCES `department` (`dnumber`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` (`fname`, `lname`, `sex`, `contact_no`, `bdate`, `ssn`, `salary`, `address`, `join_date`, `dno`, `leave_date`) VALUES ('Tanuj','sharma','','','0000-00-00','',0.00,'sdf','0000-00-00',0,'0000-00-00'),('Tanuj','sharma','M','8886474950','1993-08-11','122',50000.00,'dfg','2015-04-01',1,'0000-00-00'),('sdfsdf','sharma','M','8886474950','1993-08-11','123',50000.00,'sdf','2015-04-01',1,'2015-05-01'),('dasvmlsdvl','dfkdlkfbn','M','234242342','0000-00-00','123423424',234234.00,'efsfmdfbndknbq','0000-00-00',1,'0000-00-00'),('Tanuj','Jain','M','8886474950','1993-08-11','123456770',50000.00,'asdfsdf','2015-04-01',1,'0000-00-00'),('Tanuj','sharma','M','22324234234','1993-08-11','123456780',50000.00,'sadfsdgsgsg','2015-04-01',1,'0000-00-00'),('Tanuj','sharma','M','8886474950','1993-08-11','123456781',50000.00,'ssddsdsfds','2015-04-01',1,'0000-00-00'),('Tanuj','sharma','M','8886474950','1993-08-11','123456786',50000.00,'hfdjsk','2015-04-01',1,'0000-00-00'),('Tanuj','sharma','M','8886474956','1993-08-11','123456787',50000.00,'iiit hyderabad','2015-04-01',1,'0000-00-00'),('Aman','Jain','M','8886474956','1993-08-11','123456788',50000.00,'iiit hyderabad','2015-04-01',1,'0000-00-00'),('Akshaya','Purohit','M','09827512848','0000-00-00','123456879',20000.00,'Manavta Nagar,Indore','1988-01-01',1,'1993-11-11'),('wefrsdf','fdsf','M','2342424234','0000-00-00','234234',23423432.00,'vdfbdfbdfb','0000-00-00',1,'0000-00-00'),('sdfsdf','sdfsdfs','M','234324','0000-00-00','423432432',4234324.00,'fdbdfbdfb','0000-00-00',1,'0000-00-00');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `machinery`
--

DROP TABLE IF EXISTS `machinery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `machinery` (
  `machine_id` int(11) NOT NULL,
  `date_purchase` date NOT NULL,
  `model_no` int(11) NOT NULL,
  `dno` int(11) NOT NULL,
  PRIMARY KEY (`dno`,`model_no`,`machine_id`),
  CONSTRAINT `machinery_ibfk_1` FOREIGN KEY (`dno`) REFERENCES `department` (`dnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `machinery`
--

LOCK TABLES `machinery` WRITE;
/*!40000 ALTER TABLE `machinery` DISABLE KEYS */;
/*!40000 ALTER TABLE `machinery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manager` (
  `fname` varchar(15) NOT NULL DEFAULT 'Somanshu',
  `lname` varchar(15) NOT NULL DEFAULT 'Aggarwal',
  `sex` enum('M','F','G') NOT NULL DEFAULT 'M',
  `bdate` date NOT NULL DEFAULT '1967-08-25',
  `address` varchar(50) NOT NULL DEFAULT '17 Parshvnath Nagar, Indore',
  `office_no` char(11) NOT NULL DEFAULT '09425316394',
  `home_no` char(11) NOT NULL DEFAULT '09425316395',
  `super_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`super_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manager`
--

LOCK TABLES `manager` WRITE;
/*!40000 ALTER TABLE `manager` DISABLE KEYS */;
INSERT INTO `manager` (`fname`, `lname`, `sex`, `bdate`, `address`, `office_no`, `home_no`, `super_id`) VALUES ('Somanshu','Aggarwal','M','1967-08-25','17 Parshvnath Nagar, Indore','09425316394','09425316395',1),('Tanuj','sharma','M','0000-00-00','df','9425316398','9425316956',2);
/*!40000 ALTER TABLE `manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `dealer_id` int(11) NOT NULL,
  `order_no` int(11) NOT NULL,
  `amount_order` int(11) NOT NULL DEFAULT '0',
  `cost_kg` decimal(10,2) NOT NULL DEFAULT '0.00',
  `date_of_delivery` date DEFAULT NULL,
  `date_of_order` date NOT NULL,
  PRIMARY KEY (`dealer_id`,`order_no`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`dealer_id`) REFERENCES `dealer` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`dealer_id`, `order_no`, `amount_order`, `cost_kg`, `date_of_delivery`, `date_of_order`) VALUES (1,1,50,50.00,'2011-09-05','2011-08-05'),(1,2,50,50.00,'2011-09-05','2011-08-05'),(2,1,50,50.00,'2011-09-05','2011-08-05'),(2,2,50,50.00,'2011-08-06','2011-08-05');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profitable_customer`
--

DROP TABLE IF EXISTS `profitable_customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profitable_customer` (
  `pid` int(11) NOT NULL,
  `bdate` date DEFAULT NULL,
  `ann_date` date DEFAULT NULL,
  PRIMARY KEY (`pid`),
  CONSTRAINT `profitable_customer_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `customers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profitable_customer`
--

LOCK TABLES `profitable_customer` WRITE;
/*!40000 ALTER TABLE `profitable_customer` DISABLE KEYS */;
INSERT INTO `profitable_customer` (`pid`, `bdate`, `ann_date`) VALUES (2,'1993-08-11','2020-08-11');
/*!40000 ALTER TABLE `profitable_customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transport`
--

DROP TABLE IF EXISTS `transport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transport` (
  `type` varchar(15) NOT NULL,
  `model_no` int(11) NOT NULL,
  `reg_no` int(11) NOT NULL,
  `essn` char(9) NOT NULL,
  PRIMARY KEY (`model_no`,`reg_no`,`essn`),
  KEY `essn` (`essn`),
  CONSTRAINT `transport_ibfk_1` FOREIGN KEY (`essn`) REFERENCES `employee` (`ssn`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transport`
--

LOCK TABLES `transport` WRITE;
/*!40000 ALTER TABLE `transport` DISABLE KEYS */;
INSERT INTO `transport` (`type`, `model_no`, `reg_no`, `essn`) VALUES ('dsf',123,123,'123423424'),('dsf',123456789,123456789,'123423424');
/*!40000 ALTER TABLE `transport` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wages`
--

DROP TABLE IF EXISTS `wages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wages` (
  `dno` int(11) NOT NULL,
  `hours_work` decimal(2,0) NOT NULL,
  `wages_hour` decimal(10,2) NOT NULL DEFAULT '10.00',
  PRIMARY KEY (`dno`),
  CONSTRAINT `wages_ibfk_1` FOREIGN KEY (`dno`) REFERENCES `department` (`dnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wages`
--

LOCK TABLES `wages` WRITE;
/*!40000 ALTER TABLE `wages` DISABLE KEYS */;
INSERT INTO `wages` (`dno`, `hours_work`, `wages_hour`) VALUES (1,1,1.00);
/*!40000 ALTER TABLE `wages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workers`
--

DROP TABLE IF EXISTS `workers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workers` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `join_date` date NOT NULL,
  `leave_date` date DEFAULT NULL,
  `ssn` char(9) NOT NULL,
  `sex` enum('M','F','G') NOT NULL,
  `bdate` date DEFAULT NULL,
  `dno` int(11) NOT NULL,
  `address` char(50) DEFAULT NULL,
  `phone_no` char(11) NOT NULL,
  `super_ssn` char(9) NOT NULL,
  PRIMARY KEY (`ssn`),
  KEY `super_ssn` (`super_ssn`),
  KEY `dno` (`dno`),
  CONSTRAINT `workers_ibfk_1` FOREIGN KEY (`super_ssn`) REFERENCES `employee` (`ssn`),
  CONSTRAINT `workers_ibfk_2` FOREIGN KEY (`dno`) REFERENCES `department` (`dnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workers`
--

LOCK TABLES `workers` WRITE;
/*!40000 ALTER TABLE `workers` DISABLE KEYS */;
INSERT INTO `workers` (`fname`, `lname`, `join_date`, `leave_date`, `ssn`, `sex`, `bdate`, `dno`, `address`, `phone_no`, `super_ssn`) VALUES ('Tanuj','sharma','2015-04-01','0000-00-00','132456789','M','1993-08-11',1,'dsada','8886474956','123456787');
/*!40000 ALTER TABLE `workers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-11-02 14:43:02
