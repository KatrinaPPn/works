CREATE DATABASE  IF NOT EXISTS `salary_dbs` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `salary_dbs`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: salary_dbs
-- ------------------------------------------------------
-- Server version	5.6.31-log

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
-- Table structure for table `administartor`
--

DROP TABLE IF EXISTS `administartor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administartor` (
  `AdminID` int(10) NOT NULL AUTO_INCREMENT,
  `AdminName` char(20) NOT NULL,
  `APassword` char(10) NOT NULL,
  `Sex` char(4) DEFAULT '女',
  `Borntime` date DEFAULT NULL,
  `Address` char(60) DEFAULT NULL,
  `Tel` char(20) DEFAULT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administartor`
--

LOCK TABLES `administartor` WRITE;
/*!40000 ALTER TABLE `administartor` DISABLE KEYS */;
INSERT INTO `administartor` VALUES (101,'潘纯杏','1234','女','1998-03-07','开平','15622768492'),(102,'谢文静','1234','女','1999-03-24','德庆','13229797676'),(103,'陈枢荣','1234','男','1998-01-02','官圩','12345678923'),(104,'徐桂芬','1234','男','2010-10-29','南洲','13229797677'),(105,'马增项','1234','男','2010-10-29','开平','13229797667');
/*!40000 ALTER TABLE `administartor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `DepID` int(10) NOT NULL,
  `WID` int(10) NOT NULL,
  `BaseOfDep` float DEFAULT NULL,
  PRIMARY KEY (`DepID`,`WID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (1,1007,2000),(2,1002,2000),(3,1003,3000),(4,1004,4000);
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salary` (
  `WID` int(10) NOT NULL,
  `WMonth` int(2) NOT NULL,
  `BasePay` float DEFAULT NULL,
  `InsureSubsidy` float DEFAULT '300',
  `OTPay` float DEFAULT NULL,
  `LifeSubsidy` float DEFAULT '200',
  `FullAttendanceBonus` float DEFAULT NULL,
  `Fine` float DEFAULT '0',
  `SumSalary` float DEFAULT NULL,
  PRIMARY KEY (`WID`,`WMonth`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salary`
--

LOCK TABLES `salary` WRITE;
/*!40000 ALTER TABLE `salary` DISABLE KEYS */;
INSERT INTO `salary` VALUES (1002,1,2000,200,700,250,200,0,3350),(1002,2,1920,200,840,250,0,0,3210),(1002,3,1920,200,340,250,0,0,2710),(1002,4,2000,200,700,250,200,0,3350),(1002,5,NULL,200,NULL,250,200,0,NULL),(1002,6,1920,200,-160,250,0,0,2210),(1002,7,1900,200,800,250,0,0,3150),(1002,8,1900,200,800,250,0,0,3150),(1002,9,2000,200,200,250,200,0,2850),(1002,10,1940,200,540,250,0,0,2930),(1002,11,1900,200,800,250,0,0,3150),(1002,12,NULL,200,150,250,NULL,0,NULL),(1003,1,2950,100,700,250,0,0,4000),(1003,2,2950,100,700,250,0,0,4000),(1003,3,2920,100,840,250,0,0,4110),(1003,4,2950,100,700,250,0,0,4000),(1003,5,3000,100,700,250,200,0,4250),(1003,6,2950,100,700,250,0,0,4000),(1003,7,2950,100,700,250,0,0,4000),(1003,8,3000,100,200,250,200,0,3750),(1003,9,2950,100,700,250,0,0,4000),(1003,10,2950,100,700,250,0,0,4000),(1003,11,2940,100,540,250,0,0,3830),(1003,12,NULL,100,200,250,NULL,0,NULL),(1004,1,NULL,100,200,300,NULL,0,NULL),(1004,2,NULL,100,200,300,NULL,0,NULL),(1004,3,NULL,100,200,300,NULL,0,NULL),(1004,4,NULL,100,200,300,NULL,0,NULL),(1004,5,NULL,100,200,300,NULL,0,NULL),(1004,6,NULL,100,200,300,NULL,0,NULL),(1004,7,NULL,100,200,300,NULL,0,NULL),(1004,8,NULL,100,200,300,NULL,0,NULL),(1004,9,NULL,100,200,300,NULL,0,NULL),(1004,10,NULL,100,200,300,NULL,0,NULL),(1004,11,NULL,100,200,300,NULL,0,NULL),(1004,12,NULL,100,200,300,NULL,0,NULL);
/*!40000 ALTER TABLE `salary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sumoftime`
--

DROP TABLE IF EXISTS `sumoftime`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sumoftime` (
  `WID` int(10) NOT NULL,
  `WMonth` int(2) NOT NULL,
  `SumOfTime` float DEFAULT NULL,
  PRIMARY KEY (`WID`,`WMonth`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sumoftime`
--

LOCK TABLES `sumoftime` WRITE;
/*!40000 ALTER TABLE `sumoftime` DISABLE KEYS */;
INSERT INTO `sumoftime` VALUES (1002,1,NULL),(1002,2,NULL),(1002,3,NULL),(1002,4,NULL),(1002,5,NULL),(1002,6,NULL),(1002,7,NULL),(1002,8,NULL),(1002,9,NULL),(1002,10,NULL),(1002,11,NULL),(1002,12,NULL),(1003,1,NULL),(1003,2,NULL),(1003,3,NULL),(1003,4,NULL),(1003,5,NULL),(1003,6,NULL),(1003,7,NULL),(1003,8,NULL),(1003,9,NULL),(1003,10,NULL),(1003,11,NULL),(1003,12,NULL),(1004,1,NULL),(1004,2,NULL),(1004,3,NULL),(1004,4,NULL),(1004,5,NULL),(1004,6,NULL),(1004,7,NULL),(1004,8,NULL),(1004,9,NULL),(1004,10,NULL),(1004,11,NULL),(1004,12,NULL);
/*!40000 ALTER TABLE `sumoftime` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL,
  `Wpassword` char(10) NOT NULL,
  `Host` char(10) DEFAULT 'localhost',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1002 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workattendance`
--

DROP TABLE IF EXISTS `workattendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workattendance` (
  `WID` int(10) NOT NULL,
  `WMonth` int(2) NOT NULL,
  `BaseTime` float DEFAULT '160',
  `AbsenceTime` float DEFAULT NULL,
  `Weekend_OT` float DEFAULT NULL,
  `Normal_OT` float DEFAULT NULL,
  `Holiday_OT` float DEFAULT NULL,
  PRIMARY KEY (`WID`,`WMonth`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workattendance`
--

LOCK TABLES `workattendance` WRITE;
/*!40000 ALTER TABLE `workattendance` DISABLE KEYS */;
INSERT INTO `workattendance` VALUES (1001,1,160,10,10,20,20),(1001,2,160,5,30,20,20),(1001,3,160,0,10,10,20),(1001,4,160,8,10,15,0),(1001,5,160,10,15,5,5),(1001,6,160,0,10,0,20),(1001,7,160,0,5,0,20),(1001,8,160,8,0,0,0),(1001,9,160,0,0,5,5),(1001,10,160,8,10,30,10),(1001,11,160,6,10,20,3),(1001,12,160,0,20,10,5),(1002,1,160,0,20,10,5),(1002,2,160,8,10,30,10),(1002,3,160,8,10,15,0),(1002,4,160,0,20,10,5),(1002,6,160,8,0,0,0),(1002,7,160,10,10,20,20),(1002,8,160,10,10,20,20),(1002,9,160,0,0,5,5),(1002,10,160,6,10,20,3),(1002,11,160,10,10,20,20),(1002,12,160,8,10,15,0),(1002,160,5,10,10,20,20),(1003,1,160,5,10,10,20),(1003,2,160,5,10,10,20),(1003,3,160,8,10,30,10),(1003,4,160,5,10,10,20),(1003,5,160,0,20,10,5),(1003,6,160,5,10,10,20),(1003,7,160,5,10,10,20),(1003,8,160,0,0,5,5),(1003,9,160,5,10,10,20),(1003,10,160,5,10,10,20),(1003,11,160,6,10,20,3),(1003,12,160,5,10,10,20),(1004,1,160,5,10,10,20),(1004,2,160,8,0,0,0),(1004,3,160,10,15,5,5),(1004,4,160,0,20,10,5),(1004,5,160,0,10,0,20),(1004,6,160,0,0,5,5),(1004,7,160,5,10,10,20),(1004,8,160,8,10,15,0),(1004,9,160,5,10,10,20),(1004,10,160,5,10,5,15),(1004,11,160,0,20,10,5),(1004,12,160,0,20,10,5),(1005,1,160,5,10,10,20),(1005,2,160,5,10,10,20),(1005,3,160,10,15,5,5),(1005,4,160,8,10,15,0),(1005,5,160,8,10,30,10),(1005,6,160,5,10,10,20),(1005,7,160,6,10,20,3),(1005,8,160,5,10,10,20),(1005,9,160,8,10,15,0),(1005,10,160,0,20,10,5),(1005,11,160,0,10,0,20),(1005,12,160,5,10,10,20),(1007,1,160,1,1,1,1);
/*!40000 ALTER TABLE `workattendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `worker`
--

DROP TABLE IF EXISTS `worker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `worker` (
  `WID` int(10) NOT NULL AUTO_INCREMENT,
  `Wname` char(20) NOT NULL,
  `DepID` int(20) DEFAULT NULL,
  `Wpassword` char(10) NOT NULL,
  `Sex` char(4) DEFAULT '女',
  `Borntime` date DEFAULT NULL,
  `Address` char(60) DEFAULT NULL,
  `Tel` char(20) DEFAULT NULL,
  PRIMARY KEY (`WID`),
  KEY `FK_WORKID` (`DepID`),
  CONSTRAINT `FK_WORKID` FOREIGN KEY (`DepID`) REFERENCES `department` (`DepID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1008 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `worker`
--

LOCK TABLES `worker` WRITE;
/*!40000 ALTER TABLE `worker` DISABLE KEYS */;
INSERT INTO `worker` VALUES (1002,'BB',2,'12345','女','1999-03-24','南街','13229797676'),(1003,'CC',3,'12345','男','1998-01-02','西街','12345678923'),(1004,'DD',4,'12345','男','2010-10-29','北街','13229797677');
/*!40000 ALTER TABLE `worker` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER Trigger_UpdateDepID AFTER UPDATE ON worker FOR EACH ROW 
BEGIN
	DECLARE New_DepID , Old_DepID INT;
    SET New_DepID  = (SELECT DepID FROM worker WHERE WID = NEW.WID);
    SET Old_DepID = (SELECT department.DepID FROM worker INNER JOIN department ON department.DepID = worker.DepID AND department.WID = NEW.WID);
	IF New_DepID != Old_DepID
    THEN
		UPDATE department SET DepID = Old_DepID;
    END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Dumping events for database 'salary_dbs'
--

--
-- Dumping routines for database 'salary_dbs'
--
/*!50003 DROP FUNCTION IF EXISTS `Cal_BaseSalary` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `Cal_BaseSalary`(My_WID INT(10),My_DepID INT(10), New_WMonth INT(2)) RETURNS float
BEGIN
	DECLARE My_AbsenceTime , My_BaseSalary FLOAT;
	SET My_AbsenceTime = (SELECT AbsenceTime FROM workattendance WHERE My_WID = WID AND WMonth = New_WMonth );
    SET My_BaseSalary = My_AbsenceTime *(-10) + (SELECT BaseOfDep FROM department WHERE DepID = My_DepID AND WID = My_WID);
    RETURN My_BaseSalary;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `Cal_OTSalary` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `Cal_OTSalary`(My_WID INT(10), My_WMonth CHAR(2)) RETURNS float
BEGIN	
    RETURN (SumOfTime(My_WID, My_WMonth) - (SELECT BaseTime FROM workattendance WHERE My_WID=WID AND WMonth = My_WMonth))*20;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `Cal_SALARYOFMONTH` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `Cal_SALARYOFMONTH`(My_WID INT, This_Month INT) RETURNS float
BEGIN
	DECLARE My_InsureSubsidy, My_LifeSubsidy, My_Fine, My_FullAttendanceBonus, My_SumSalary FLOAT;
    DECLARE My_DepID INT;
	IF (SELECT AbsenceTime FROM workattendance WHERE My_WID = WID AND WMonth = This_Month)>0
        THEN 
			SET My_FullAttendanceBonus = 0;
		ELSE 
			SET My_FullAttendanceBonus = 200;
		END IF;
			SET My_InsureSubsidy= (SELECT InsureSubsidy FROM salary WHERE My_WID = WID AND WMonth = This_Month);
			SET My_Fine = (SELECT Fine FROM salary WHERE My_WID = WID AND WMonth = This_Month);
			SET My_DepID = (SELECT DepID FROM worker WHERE My_WID = WID);
            SET My_LifeSubsidy = (SELECT LifeSubsidy FROM salary WHERE My_WID = WID AND WMonth = This_Month);
			SELECT (Cal_BaseSalary(My_WID,My_DepID,This_Month)+Cal_OTSalary(My_WID,This_Month) + My_InsureSubsidy + My_LifeSubsidy + My_FullAttendanceBonus + My_Fine) INTO My_SumSalary;
			UPDATE salary SET BasePay = Cal_BaseSalary(My_WID,My_DepID,This_Month), OTPay = Cal_OTSalary(My_WID,This_Month), FullAttendanceBonus = My_FullAttendanceBonus, Fine = My_Fine, SumSalary = My_SumSalary WHERE My_WID = WID AND WMonth = This_Month;
		RETURN  My_SumSalary;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `SumOfTime` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `SumOfTime`(My_WID INT,This_Month INT) RETURNS float
BEGIN
	 DECLARE sum FLOAT DEFAULT 0;
	 SELECT BaseTime-AbsenceTime+Weekend_OT+Normal_OT+Holiday_OT FROM WorkAttendance WHERE WID=My_WID AND WMonth = This_Month INTO sum;
	 RETURN sum;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ADD_USER` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ADD_USER`(IN New_ID INT, IN New_Name CHAR(20),IN New_password CHAR(10))
BEGIN
	CALL user_register(New_ID, New_Name,New_password);
    SELECT '添加成功';
    SELECT * FROM user WHERE ID = New_ID;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Alter_SalaryInfo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Alter_SalaryInfo`(IN My_ID INT(10), IN New_Month INT(2), IN New_BasePay FLOAT(10), IN New_InsureSubsidy FLOAT(10), IN New_OTPay FLOAT(10), IN New_LifeSubsidy FLOAT(10), IN New_FullAttendanceBonus FLOAT(10), IN New_Fine FLOAT(10))
BEGIN
	IF NOT EXISTS (SELECT * FROM worker WHERE WID=My_ID)
    THEN SELECT '输入的员工信息有误，请重新输入！';
    ELSE
		UPDATE salary SET BasePay=New_BasePay, WMonth = New_Month, InsureSubsidy=New_InsureSubsidy, OTPay = New_OTPay, LifeSubsidy = New_LifeSubsidy, FullAttendanceBonus = New_FullAttendanceBonus, Fine = New_Fine WHERE WID = My_ID AND WMonth = New_Month;
        CALL Month_OF_SALARY(My_ID, New_Month);
	END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Alter_WorkerInfo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Alter_WorkerInfo`(IN My_ID INT(10), IN New_DepID INT(10), IN New_Wpassword CHAR(10), IN New_Sex CHAR(4), IN New_Borntime DATE, IN New_Address CHAR(60), IN New_Tel CHAR(20))
BEGIN
	IF NOT EXISTS (SELECT * FROM worker WHERE WID=My_ID)
    THEN SELECT '输入的员工信息号有误，请重新输入！';
    ELSE
		UPDATE worker SET DepID=New_DepID,Wpassword=New_Wpassword,Sex=New_Sex,Borntime=New_Borntime,Address=New_Address,Tel= New_Tel WHERE WID = My_ID;
        SELECT '修改成功！';
        SELECT * FROM worker WHERE WID = My_ID;
	END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `DELETE_USER` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `DELETE_USER`(IN New_ID INT)
BEGIN
	DELETE FROM user WHERE ID = New_ID;
	SELECT '删除成功';
    SELECT * FROM user;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Del_info` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Del_info`(IN New_WID INT)
BEGIN
	IF NOT EXISTS (SELECT * FROM worker WHERE WID=New_WID)
    THEN SELECT '要删除的员工信息不存在！';
    ELSE 
		DELETE FROM worker WHERE WID = New_WID;
        DELETE FROM salary WHERE WID = New_WID;
        DELETE FROM sumoftime WHERE WID = New_WID;
        DELETE FROM department WHERE WID = New_WID;
        SELECT '删除成功！';
	END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `DepartmentSalary_Inquiry` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `DepartmentSalary_Inquiry`(IN New_DepID INT)
BEGIN 
 IF NOT EXISTS (SELECT * FROM Department WHERE DepID=New_DepID)
  THEN SELECT '输入的部门代号有误，请重新输入！';
 ELSE
        SELECT DepID, WMonth, SUM(SumSalary) '部门总工资' from Salary JOIN department ON DepID=New_DepID GROUP BY WMonth;
 END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `INFO_OF_TOTALSALARY` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `INFO_OF_TOTALSALARY`()
BEGIN
	SELECT SUM(SumSalary) AS '年度工资总和', AVG(SumSalary) AS '年度平均工资'FROM salary;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `INFO_OF_YearEndBonus` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `INFO_OF_YearEndBonus`(My_WID INT(10))
BEGIN
	DECLARE YearEndBonus FLOAT;
	DECLARE TEMP INT DEFAULT 1;
    WHILE TEMP <= 12 DO
		SET @My_SumSalary=Cal_SALARYOFMONTH(My_WID, TEMP);
		SET TEMP = TEMP+1;
    END WHILE;
    SET YearEndBonus = ((SELECT SUM(SumSalary) FROM salary WHERE WID = My_WID) + (SELECT SUM(OTPay) FROM  salary WHERE WID = My_WID))/12;
	SELECT My_WID, YearEndBonus;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Month_OF_SALARY` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Month_OF_SALARY`(IN My_WID INT(10),IN This_Month INT(2))
BEGIN
	IF NOT EXISTS(SELECT * FROM worker WHERE My_WID = WID)
    THEN 
		SELECT '输入的员工信息号有误，请重新输入！';
    ELSE
		SET @My_SumSalary = Cal_SALARYOFMONTH(My_WID, This_Month);
		SELECT '统计成功';
		SELECT * FROM salary WHERE  My_WID = WID AND WMonth = This_Month;
	END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Salary_Inquiry` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Salary_Inquiry`(IN New_WID INT)
BEGIN 
	IF NOT EXISTS (SELECT * FROM Salary WHERE WID=New_WID)
		THEN SELECT '输入的员工信息号有误，请重新输入！';
	ELSE
		SELECT * FROM Salary WHERE WID=New_WID;
	END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Salary_Insert` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Salary_Insert`(IN New_WID INT,IN New_WMonth INT(2),IN New_InsureSubsidy FLOAT(10),IN New_LifeSubsidy FLOAT(10),IN New_Fine FLOAT(10))
BEGIN
	IF NOT EXISTS (SELECT * FROM worker WHERE WID=New_WID)
    THEN 
		SELECT '该员工编号错误，请重新输入';
    ELSE IF EXISTS (SELECT * FROM Salary WHERE WID=New_WID AND WMonth = New_WMonth)
		THEN SELECT '该员工当前月份已有工资信息';
	ELSE 
		INSERT INTO salary(WID, WMonth, InsureSubsidy, LifeSubsidy, Fine) VALUES(New_WID, New_WMonth, New_InsureSubsidy, New_LifeSubsidy, New_Fine);
        SELECT '录入成功';
		SELECT * FROM salary;
	END IF;
    END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `user_register` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `user_register`(IN New_ID INT, IN New_Name CHAR(20),IN New_password CHAR(10))
BEGIN
	IF EXISTS(SELECT * FROM User WHERE ID = New_ID)
	THEN SELECT '该用户已注册';
    ELSE IF EXISTS(SELECT * FROM worker WHERE WID = New_ID)
    THEN
		INSERT INTO User VALUES(New_ID,New_Name,New_password,'localhost');
        FLUSH PRIVILEGES;
        SET @stmp = CONCAT('GRANT SELECT ON salary_dbs.* TO \'',New_ID,'\'@localhost IDENTIFIED BY \'',New_password,'\'');
        PREPARE stmt FROM @stmp;
        EXECUTE stmt;
        FLUSH PRIVILEGES;
	ELSE IF EXISTS(SELECT * FROM administartor WHERE AdminID = New_ID)
    THEN 
		INSERT INTO User VALUES(New_ID,New_Name,New_password,'localhost');
        FLUSH PRIVILEGES;
        SET @stmp = CONCAT('GRANT ALL PRIVILEGES ON salary_dbs.* TO \'',New_ID,'\'@localhost IDENTIFIED BY \'',New_password,'\'');
        PREPARE stmt FROM @stmp;
        EXECUTE stmt;
        FLUSH PRIVILEGES;
	END IF;
    END IF;
 END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `WorkAttendance_Inquiry` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `WorkAttendance_Inquiry`(IN New_WID INT, IN This_Month CHAR(2), IN New_AbsenceTime FLOAT(10), IN New_Weekend_OT FLOAT(10), IN New_Normal_OT FLOAT(10), IN New_Holiday_OT FLOAT(10))
BEGIN 
	IF NOT EXISTS (SELECT * FROM worker WHERE WID=New_WID)
    THEN 
		SELECT '该员工编号错误，请重新输入';
    ELSE IF EXISTS (SELECT * FROM Salary WHERE WID=New_WID AND WMonth = This_Month)
		THEN
			UPDATE SumOfTime SET SumOfTime = SumOfTime(New_WID, This_Month) WHERE WID=New_WID AND WMonth = This_Month;
			SELECT '该员工当前月份已有考勤信息，请重新输入';
	ELSE
		INSERT INTO WorkAttendance(WID,WMonth,AbsenceTime,Weekend_OT,Normal_OT,Holiday_OT) VALUES (New_WID, This_Month, New_AbsenceTime, New_Weekend_OT, New_Normal_OT, New_Holiday_OT);
        INSERT INTO sumoftime(WID,WMonth) VALUES (New_WID, This_Month);
		UPDATE SumOfTime SET SumOfTime = SumOfTime(New_WID, This_Month) WHERE WID=New_WID AND WMonth = This_Month;
		SELECT WID,BaseTime,AbsenceTime,Weekend_OT,Normal_OT,Holiday_OT,SumOfTime(New_WID, This_Month) AS SumOfTime FROM WorkAttendance WHERE WID=New_WID AND WMonth = This_Month;
	END IF;
    END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Worker_Inquiry` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Worker_Inquiry`(IN New_WID INT)
BEGIN 
	IF NOT EXISTS (SELECT * FROM worker WHERE WID=New_WID)
		THEN SELECT '输入的员工信息号有误，请重新输入！';
	ELSE 
		SELECT * FROM Worker WHERE WID=New_WID;
	END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Worker_Insert` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Worker_Insert`(IN New_WID INT,IN New_Wname CHAR(20),IN New_DepID INT(10),IN New_Wpassword CHAR(10),IN New_Sex CHAR(4),IN New_Borntime DATE,IN New_Address CHAR(60),IN New_Tel CHAR(20),IN New_BaseOfDep FLOAT(10))
BEGIN
 IF EXISTS (SELECT * FROM Worker WHERE WID=New_WID)
  THEN SELECT '该员工已有存在';
 ELSE 
	INSERT INTO department(DepID,WID,BaseOfDep) VALUES(New_DepID,New_WID,New_BaseOfDep);
	INSERT INTO Worker VALUES(New_WID,New_Wname,New_DepID,New_Wpassword,New_Sex,New_Borntime,New_Address,New_Tel);
    SELECT '添加成功';
    SELECT * FROM worker;
 END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-09 19:52:35
