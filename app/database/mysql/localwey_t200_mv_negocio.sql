-- MySQL dump 10.13  Distrib 8.0.44, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: localwey
-- ------------------------------------------------------
-- Server version	8.0.44

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
-- Table structure for table `t200_mv_negocio`
--

DROP TABLE IF EXISTS `t200_mv_negocio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t200_mv_negocio` (
  `f200_id` int NOT NULL AUTO_INCREMENT,
  `f200_id_cliente` int DEFAULT NULL,
  `f200_nombre` varchar(255) DEFAULT NULL,
  `f200_descripcion` text,
  `f200_id_municipio` int DEFAULT NULL,
  `f200_direccion` varchar(250) DEFAULT NULL,
  `f200_id_tipo_negocio` int NOT NULL,
  `f200_imagen_portada` varchar(255) DEFAULT NULL,
  `f200_id_estado` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`f200_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t200_mv_negocio`
--

LOCK TABLES `t200_mv_negocio` WRITE;
/*!40000 ALTER TABLE `t200_mv_negocio` DISABLE KEYS */;
INSERT INTO `t200_mv_negocio` VALUES (2,1,'D&D Luxury','Te ofrecemos los relojes con la mejor calidad y al mejor precio.',NULL,'CLL 2 #79 - 129',5,'D&D Luxury/PORTADA20260309.jpeg','ACT');
/*!40000 ALTER TABLE `t200_mv_negocio` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-03-09 22:41:30
