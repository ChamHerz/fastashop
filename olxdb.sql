-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: olxdb
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `consulta`
--

DROP TABLE IF EXISTS `consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consulta` (
  `ID_CONSULTA` int(11) NOT NULL AUTO_INCREMENT,
  `FECHA` datetime NOT NULL,
  `ID_PUBLICACION` int(11) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `COMENTARIO` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID_CONSULTA`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consulta`
--

LOCK TABLES `consulta` WRITE;
/*!40000 ALTER TABLE `consulta` DISABLE KEYS */;
INSERT INTO `consulta` VALUES (1,'2018-09-28 19:00:00',1,'Claudio','clau@bueno.com','SOY Y UN COMENTARIO'),(2,'2018-10-22 00:00:00',1,'Adriel','chambi@hotmail.com','hola'),(3,'2018-10-22 00:00:00',1,'Adriel','chambi@hotmail.com','hola'),(4,'2018-10-22 21:08:15',1,'roberto','juan@gmail.com','hola'),(5,'2018-10-22 23:10:55',4,'Ulises','ulises@yahoo.com','Esto es un comentario.'),(6,'2018-10-22 23:11:49',3,'ChamHerz','miemail@ho.com','Esto es otro comentario');
/*!40000 ALTER TABLE `consulta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `ID_ESTADO` int(11) NOT NULL AUTO_INCREMENT,
  `DESC` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_ESTADO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publicacion`
--

DROP TABLE IF EXISTS `publicacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publicacion` (
  `ID_PUBLICACION` int(11) NOT NULL AUTO_INCREMENT,
  `FECHA` date NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `TITULO_ARTICULO` varchar(100) NOT NULL,
  `DESC_ARTICULO` varchar(1000) NOT NULL,
  `PRECIO` decimal(10,2) NOT NULL,
  `IMAGEN_PATH` varchar(250) NOT NULL,
  `ID_RUBRO` int(11) NOT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  PRIMARY KEY (`ID_PUBLICACION`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicacion`
--

LOCK TABLES `publicacion` WRITE;
/*!40000 ALTER TABLE `publicacion` DISABLE KEYS */;
INSERT INTO `publicacion` VALUES (1,'2018-10-04',1,'Vendo Fiat Palio','Modelo 2010, 160 mil Km',150000.00,'images/fiat.jpeg',1,1),(2,'2018-10-05',2,'Vendo Notebook','HP 500',7600.00,'images/notebook.jpeg',2,1),(3,'2018-10-06',2,'Vendo Mouse','Genius Optico',200.00,'images/mouse.jpeg',2,1),(4,'2018-10-07',1,'Vendo Moto','Gilera VC 150',10400.00,'images/moto.jpeg',1,1);
/*!40000 ALTER TABLE `publicacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rubro`
--

DROP TABLE IF EXISTS `rubro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rubro` (
  `ID_RUBRO` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRIPCION` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_RUBRO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rubro`
--

LOCK TABLES `rubro` WRITE;
/*!40000 ALTER TABLE `rubro` DISABLE KEYS */;
INSERT INTO `rubro` VALUES (1,'AUTOMOTOR'),(2,'INFORMATICA');
/*!40000 ALTER TABLE `rubro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(45) NOT NULL,
  `APELLIDO` varchar(45) NOT NULL,
  `SEXO` char(1) NOT NULL,
  `FECHA_NACIMIENTO` date NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `TELEFONO` varchar(20) DEFAULT NULL,
  `NICK` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'DENIS ADRIEL','CHAMBI','M','1987-03-02','adrielchambers@gmail.com','2233031838','ChamHerz','1234'),(2,'MARCELO','ROSI','M','1985-11-03','marcelo.rosi@gmail.com','2234534234','Marcelo','1234'),(3,'JUAN','GUSTA','M','2011-08-19','jose@gmail.com','342343','JUAN','123');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-23  2:13:37
