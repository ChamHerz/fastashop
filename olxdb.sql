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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consulta`
--

LOCK TABLES `consulta` WRITE;
/*!40000 ALTER TABLE `consulta` DISABLE KEYS */;
INSERT INTO `consulta` VALUES (1,'2018-09-28 19:00:00',1,'Claudio','clau@bueno.com','SOY Y UN COMENTARIO'),(2,'2018-10-22 00:00:00',1,'Adriel','chambi@hotmail.com','hola'),(3,'2018-10-22 00:00:00',1,'Adriel','chambi@hotmail.com','hola'),(4,'2018-10-22 21:08:15',1,'roberto','juan@gmail.com','hola'),(5,'2018-10-22 23:10:55',4,'Ulises','ulises@yahoo.com','Esto es un comentario.'),(6,'2018-10-22 23:11:49',3,'ChamHerz','miemail@ho.com','Esto es otro comentario'),(13,'2018-10-25 21:37:38',10,'','','Me das tu telefono'),(14,'2018-10-25 22:44:37',23,'Adriel','adrielchambers@hotmail.com','Cuantas Paginas tiene?');
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicacion`
--

LOCK TABLES `publicacion` WRITE;
/*!40000 ALTER TABLE `publicacion` DISABLE KEYS */;
INSERT INTO `publicacion` VALUES (1,'2018-10-04',1,'Vendo Fiat Palio','Modelo 2010, 160 mil Km',150000.00,'images/fiat.jpeg',1,1),(2,'2018-10-05',2,'Vendo Notebook','HP 500',7600.00,'images/notebook.jpeg',2,1),(3,'2018-10-06',2,'Vendo Mouse','Genius Optico',200.00,'images/mouse.jpeg',2,1),(4,'2018-10-07',1,'Vendo Moto','Gilera VC 150',10400.00,'images/moto.jpeg',1,1),(5,'2018-10-23',1,'Vendo Teclado','Genial',25.21,'images/Chicony_Wireless_Keyboard_KBR0108.jpg',2,1),(6,'2018-10-23',2,'Vendo Fiar 600','0 km',250.00,'images/D_NQ_NP_660071-MLA26821217534_022018-UB.jpg',1,1),(7,'2018-10-23',2,'Vendo Monitor','LCD 20 pulgadas',9500.00,'images/A1DL5LiwXRL._SX355_.jpg',2,1),(8,'2018-10-23',2,'CPU','Un monster',2312.21,'images/computadora-cpu-gamer-a10-9700-2tb-8gb-ddr4-radeon-r7-D_NQ_NP_767029-MLM26487475703_122017-F.jpg',2,1),(10,'2018-10-25',5,'Vendo impresora','Como nueva!!!! ganga',5466.00,'images/download.jpeg',2,1),(11,'2018-10-25',5,'Vendo Pen Gouse prente al mar','Excelente propiedad a extrenar',3000000.00,'images/8aa3770b8db12e3fcb86250c97e2f1dbw-c0xd-w685_h860_q80.jpg',3,1),(12,'2018-10-25',5,'Mini Componente Usado como Nuevo','No funciona uno de los parlantes',453.45,'images/download (1).jpeg',4,1),(13,'2018-10-25',5,'Iphone 7','Vendo impecable 256GB',40324.00,'images/iphone7-rosegold-select-2016.jpeg',5,1),(14,'2018-10-25',5,'Mueble Blanco','En perfectas condiciones. Blanco',12354.00,'images/2000359919587_2.jpg',6,1),(15,'2018-10-25',4,'Bicicleta Montagne','Amarilla R18',9532.00,'images/big_35a2777897594375a1eb8324a42d1410.jpg',7,1),(16,'2018-10-25',4,'Campera NiÃ±a','Rosa Usada, perfecta condiciones',3230.00,'images/1522163608_548873_1522167001_sumario_normal.jpg',8,1),(17,'2018-10-25',4,'Juguete Cocina','Equipo de cocina.',568.00,'images/download (2).jpeg',9,1),(18,'2018-10-25',4,'CD de Lali','Nuevo sellado',1000.00,'images/lali100gradossingle.jpg',10,1),(20,'2018-10-25',4,'Collar Mascota','Perro Frances. Collar Naranja Nuevo',100.00,'images/mascota-collar-perro-D_NQ_NP_778363-MLC26963928951_032018-F.jpg',12,1),(21,'2018-10-25',4,'Sillon Oficina Negra','Con regulacion de altura e inclinado',3500.00,'images/sillon-oficina-simil-piel-pomba-g.jpg',13,1),(22,'2018-10-25',4,'Cerrajeria 24/7','Atendemos las 24 horas 223-4356435 (Whatapp)',1000.00,'images/cerradura-3.jpg',14,1),(23,'2018-10-25',4,'Codigo Da Vinci','Libro del famoso escritor Daw Brown. Una mas de sus novelas de complot de organizaciones mundiales',240.00,'images/51WmNPpn5sL._SX329_BO1,204,203,200_.jpg',11,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rubro`
--

LOCK TABLES `rubro` WRITE;
/*!40000 ALTER TABLE `rubro` DISABLE KEYS */;
INSERT INTO `rubro` VALUES (1,'AUTOMOTOR'),(2,'INFORMATICA'),(3,'PROPIEDADES'),(4,'ELECTRONICA'),(5,'TELEFONOS'),(6,'MUEBLES'),(7,'BICICLETAS'),(8,'MODA'),(9,'JUGUETES'),(10,'MUSICA'),(11,'LIBROS'),(12,'MASCOTAS'),(13,'OFICINA'),(14,'SERVICIOS');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'DENIS ADRIEL','CHAMBI','M','1987-03-02','adrielchambers@gmail.com','2233031838','ChamHerz','1234'),(2,'MARCELO','ROSI','M','1985-11-03','marcelo.rosi@gmail.com','2234534234','Marcelo','1234'),(3,'JUAN','GUSTA','M','2011-08-19','jose@gmail.com','342343','JUAN','123'),(4,'Omar','Pineda','M','1987-02-09','pineda@gmail.com','35412578','pineda','1234'),(5,'Juan','Reinoso','M','2011-08-19','reinoso@gmail.com','1234564567','reinoso','1234');
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

-- Dump completed on 2018-10-26  0:47:23
