-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: miranda_hotel
-- ------------------------------------------------------
-- Server version	8.0.35-0ubuntu0.22.04.1

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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `description` longtext NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Horace Corwin','Andreane.Koelpin19@hotmail.com','https://picsum.photos/seed/QjHM64/640/480','2023-12-30','Sto derelinquo.','(926) 842-5481 x7397','Active'),(2,'Lawrence Weimann Jr.','Aron.Hamill84@hotmail.com','https://picsum.photos/seed/vuVNN7/640/480','2023-07-02','Casus velum alo facilis ipsam sonitus spiritus quod conculco ara armarium absorbeo dolorem cognatus.','1-592-926-4972 x3349','Inactive'),(3,'Arthur Mills','Lavinia_Pollich37@yahoo.com','https://picsum.photos/seed/LKOUe/640/480','2023-01-29','Careo ulciscor curtus eaque defluo vis curriculum sophismata paens civis arcus vester antiquus demonstro administratio adfectus accusator arca anser.','1-749-238-8901 x88913','Inactive'),(4,'Stanley McKenzie','Araceli_Harvey@hotmail.com','https://picsum.photos/seed/ZPGsaic8kK/640/480','2023-02-22','Creta odit aurum templum.','(327) 647-3109 x1006','Inactive'),(5,'Joseph Willms','Jeramie.Jacobs30@gmail.com','https://picsum.photos/seed/pbNZA31ew/640/480','2024-06-16','Subseco voluntarius cenaculum suadeo desolo eligendi urbs sulum.','386-637-4807','Active'),(6,'Dexter Gutmann','Hermina_Schuster@hotmail.com','https://picsum.photos/seed/uz1A9pjW/640/480','2023-06-22','Ab utrimque tamisium strenuus cuius demo corrumpo ait decens voluptatum dens commodo carbo nisi.','902.370.6533 x8964','Inactive'),(7,'Lamar Stroman','Sean_Johnston@gmail.com','https://picsum.photos/seed/GtGQQ5KCJ/640/480','2023-04-20','Uredo agnosco talio abbas concido dolorem thermae bellicus stipes spectaculum.','594-424-4539 x5839','Active'),(8,'Julia Howe','Magnolia98@yahoo.com','https://picsum.photos/seed/85dNZaej/640/480','2023-02-01','Dapifer delectatio curso tergum pax vigilo.','935.471.8707','Active'),(9,'Janie Wiegand-Cremin Sr.','Bernadette77@yahoo.com','https://picsum.photos/seed/KYjEscsXx/640/480','2023-03-05','Comburo inventore corpus acquiro.','(679) 438-0265 x126','Active'),(10,'Mr. Wilbur Kuphal-Williamson V','Ladarius.Bernier18@gmail.com','https://picsum.photos/seed/THZQeceqX/640/480','2023-08-14','Vulgo crux angelus cunae speculum amor pectus autus hic ex civitas testimonium ustulo vetus ater vomer occaecati.','1-509-966-6265','Active');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-27 13:59:19
