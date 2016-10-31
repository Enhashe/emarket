-- MySQL dump 10.13  Distrib 5.5.52, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: market
-- ------------------------------------------------------
-- Server version	5.5.52-0ubuntu0.14.04.1

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) COLLATE utf8_bin NOT NULL,
  `description` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Weapons','Various weapons'),(2,'Chest armor','Protects your chest'),(3,'Hands armor','Dont loose your hands'),(4,'Head armor','Protects your head'),(5,'Legs armor','Move your legs as you need'),(6,'Shoulder','Shoulder armor'),(7,'Neck','Neck armor'),(8,'Tabard','Short heraldic coat'),(9,'Wrist','Wrist armor'),(10,'Gauntlets','Gauntlets armor'),(11,'Waist','Waist armor'),(12,'Feet','Feet armor'),(13,'Ring','Ring jewelry'),(50,'Earring','Earring jewelry');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) COLLATE utf8_bin NOT NULL,
  `description` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `cat_id` int(3) unsigned DEFAULT NULL,
  `image` longblob,
  `price` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'DragonSlash','This swords guard strongly resembles a pair of bird wings. Its grip is formed like a minotaur holding a topaz.',1,NULL,73.5),(2,'Blightpiercer','This spears blade is pyramid-shaped. Its grip is formed like a knight clutching a skull.',1,NULL,20),(3,'Bracer of Fire Shields','This set of bracers was created as an experiment. It was made to be used by warlords and is inset with tigerseye. The buckles are inset with sapphires. It can conjure up hundreds of lights.',3,NULL,32.6),(4,'Charismatic Helm of Ether Touches','It was made to be used by bards and is inset with tigerseye. The buckles are inset with agate. It enhances the owners speed.',4,NULL,11.99),(5,'Bears Breast Plate','This breastplate is traditionally used by healers and seems made entirely of stone. It enhances the owners endurance. It requires periodic sacrifices, or it will vanish.',2,NULL,50.11),(6,'Greaves of the Haunted Rite','This pair of greaves was created to avert a disaster and is jet black. The buckles are inlaid with copper. It can turn good creatures evil.',5,NULL,23.93),(7,'Stormbringer','Great Sword',1,NULL,12.5),(10,'Stormbringer','Great Sword',1,NULL,12.5),(11,'Stormbringer','Great Sword',1,NULL,12.5),(12,'Soulrapier','Place for description',1,NULL,33),(13,'Bracer of Diamond Blast','Place for description',9,NULL,7.2),(14,'Wanderers\' Boots','Place for description',12,NULL,8.35),(15,'Wolves\' Waist','Place for description',11,NULL,4.15),(16,'Goblin\'s Necklace','Place for description',7,NULL,48.12),(17,'Tabard of the Lord','Place for description',8,NULL,22.05),(18,'Imperial Fiery Pauldron','Place for description',6,NULL,27),(19,'Gauntlets of Good Auras','Place for description',10,NULL,15.73),(20,'Ring of Diamond Chains','Place for description',13,NULL,48.82),(21,'Ring of Etherealness Control','Place for description',13,NULL,55.16),(22,'Soulrapier','Place for description',1,NULL,33),(23,'Bracer of Diamond Blast','Place for description',9,NULL,7.2),(24,'Wanderers\' Boots','Place for description',12,NULL,8.35),(25,'Wolves\' Waist','Place for description',11,NULL,4.15),(26,'Goblin\'s Necklace','Place for description',7,NULL,48.12),(27,'Tabard of the Lord','Place for description',8,NULL,22.05),(28,'Imperial Fiery Pauldron','Place for description',6,NULL,27),(29,'Gauntlets of Good Auras','Place for description',10,NULL,15.73),(30,'Ring of Diamond Chains','Place for description',13,NULL,48.82),(31,'Ring of Etherealness Control','Place for description',13,NULL,55.16),(32,'Soulrapier','Place for description',1,NULL,33),(33,'Bracer of Diamond Blast','Place for description',9,NULL,7.2),(34,'Wanderers\' Boots','Place for description',12,NULL,8.35),(35,'Wolves\' Waist','Place for description',11,NULL,4.15),(36,'Goblin\'s Necklace','Place for description',7,NULL,48.12),(37,'Tabard of the Lord','Place for description',8,NULL,22.05),(38,'Imperial Fiery Pauldron','Place for description',6,NULL,27),(39,'Gauntlets of Good Auras','Place for description',10,NULL,15.73),(40,'Ring of Diamond Chains','Place for description',13,NULL,48.82),(41,'Ring of Etherealness Control','Place for description',13,NULL,55.16);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-26 11:05:10
