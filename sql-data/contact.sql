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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  `subject_of_review` longtext NOT NULL,
  `review_body` longtext NOT NULL,
  `dateTime` date DEFAULT (curdate()),
  `status` varchar(255) DEFAULT 'Not Archived',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'Jake Daniel-King Sr.','Judge45@hotmail.com','1-436-939-7857 x0458','Universe civitas arceo synagoga creo aveho.','Surculus rem audentia tristis.','2023-11-24','Not Archived'),(2,'Dr. Terrence Lehner','Janessa66@gmail.com','1-959-604-1426 x68074','Eos cohibeo magni venustas corroboro tot commemoro.','Cubitum odio statua volo thorax cena blanditiis sumo acerbitas ars cito consequuntur temeritas deporto.','2023-11-24','Not Archived'),(3,'Ted Bergnaum','Bulah.Schroeder76@hotmail.com','(770) 688-8848 x09024','Nihil quisquam suggero clementia.','Arcesso aliqua exercitationem deorsum vulgus volo combibo corona vero bibo volva verbum cuius varius utilis possimus conventus volaticus.','2023-11-23','Not Archived'),(4,'Saul Marvin','Georgianna_Armstrong@gmail.com','1-834-928-5382 x62160','Denego torrens amplus tolero odit considero video amissio.','Quisquam stabilis reprehenderit enim consectetur textilis curriculum studio solvo vesco dignissimos teneo.','2023-11-23','Not Archived'),(5,'Kay Bergnaum-Ruecker','Myrtie.Runolfsson@gmail.com','626-635-2154','Armarium tollo denique nemo veritatis contra templum eum.','Summisse spiculum tantillus ocer angustus paulatim aggredior amplus nam accusantium virgo creta cohibeo videlicet amissio curia iste totidem volutabrum quae.','2023-11-24','Not Archived'),(6,'Austin Runolfsson','Santina.Kuhic@yahoo.com','1-549-400-8314 x599','Termes tenetur vox concedo tardus ratione tabesco trucido.','Barba carbo suppono mollitia calculus.','2023-11-23','Not Archived'),(7,'Joanna Lynch I','Bertha72@yahoo.com','816-728-9919','Coadunatio curriculum.','Crepusculum certe demonstro vito deprimo surgo centum subnecto accusator accendo solitudo cum casus volaticus bene decens.','2023-11-23','Archived'),(8,'Virginia Lueilwitz','Clark.Senger55@gmail.com','692.708.0630 x5429','Abduco spes pecto.','Suscipio alias aperio comitatus soleo summopere corporis dapifer amplexus.','2023-11-24','Not Archived'),(9,'Ray Lemke','Travon.McLaughlin@yahoo.com','751-399-1318 x03301','Eligendi defero quam stipes coaegresco tandem causa.','Consequatur sortitus cupressus qui civis cinis tripudio.','2023-11-24','Archived'),(10,'Guadalupe Bogan','Buddy18@hotmail.com','765-525-0417 x409','Trans uxor compello deduco est altus aureus.','Decipio amor natus demergo temeritas utor demens debilito audeo tollo tumultus id urbanus.','2023-11-23','Not Archived'),(11,'Gaspar Sio','gaspar178@gmail.com','0655696744','Excellent services','aguante nodeeeeeeeeeeee','2023-11-24','Not Archived'),(12,'Gaspar Sio','gaspar178@gmail.com','0655696744','Excellent services','Excellent services','2023-11-24','Not Archived'),(13,'','','','','','2023-11-24','Not Archived'),(14,'Gaspar Sio','gaspar178@gmail.com','0655696744','Excellent services','','2023-11-24','Not Archived'),(15,'Gaspar Sio','a','0655696744','aa','aa','2023-11-24','Not Archived'),(16,'Gaspar Sio','gaspar178@gmail.com','0655696744','Excellent services','1234','2023-11-24','Not Archived'),(17,'Gaspar Sio','gaspar178@gmail.com','0655696744','Excellent services','Excellent services','2023-11-24','Not Archived'),(18,'Gaspar Sio','gaspar178@gmail.com','0655696744','Excellent services','111','2023-11-24','Not Archived'),(19,'Gaspar Sio','gaspar178@gmail.com','0655696744','Excellent services','111','2023-11-24','Not Archived');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
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
