-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db
-- ------------------------------------------------------
-- Server version	5.5.5-10.11.8-MariaDB-ubu2204-log

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `recommend` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `game_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'Amazing game! The graphics are stunning, and the storyline kept me hooked until the very end. Highly recommended!',1,'2024-10-10 14:30:00',0,0),(2,'I found the gameplay a bit repetitive after a few hours, but the multiplayer mode is fun. I wouldn’t recommend it for single players.',0,'2024-09-18 09:45:00',0,0),(3,'Great concept, but the execution feels rushed. Some bugs and performance issues, but with updates, it could be amazing.',1,'2024-08-05 16:15:00',0,0);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `following`
--

DROP TABLE IF EXISTS `following`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `following` (
  `user_id` int(11) NOT NULL,
  `following_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`following_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `following`
--

LOCK TABLES `following` WRITE;
/*!40000 ALTER TABLE `following` DISABLE KEYS */;
/*!40000 ALTER TABLE `following` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `game_platform`
--

DROP TABLE IF EXISTS `game_platform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `game_platform` (
  `game_id` int(11) NOT NULL,
  `platform_id` int(11) NOT NULL,
  PRIMARY KEY (`game_id`,`platform_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='		';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `game_platform`
--

LOCK TABLES `game_platform` WRITE;
/*!40000 ALTER TABLE `game_platform` DISABLE KEYS */;
/*!40000 ALTER TABLE `game_platform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `release_date` date NOT NULL,
  `price` float DEFAULT NULL,
  `developer` varchar(50) NOT NULL,
  `summary` text NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'placeholder.jpeg',
  `average_rating` float DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` VALUES (29,'Farming Simulator 25','2024-11-12',49.99,'Giants Software','McDon Pack! Farming Simulator 25 invites you to join the rewarding farm life, single-handedly or cooperatively in multiplayer. This Farm is Your Farm!','67312b8079a90-farming-simulator.png',4,12),(30,'Planet Coaster 2','2024-11-06',49.99,'Frontier Developments','Build and customise thrilling roller coasters and incredible water slides, manage the ultimate theme park experience, and share your epic creations. Are you ready to ride the wave? ','67312c6c9c24a-planet-coaster.png',4,13),(31,'Deliver us mars','2023-02-02',29.99,'KeokeN Interactive','Deliver Us Mars is an atmospheric sci-fi adventure taking you on a suspense-fuelled, high-stakes mission to recover the ARK colony ships stolen by the mysterious Outward.','67312cb093c86-deliver-us-mars.png',3,13);
/*!40000 ALTER TABLE `games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `platform`
--

DROP TABLE IF EXISTS `platform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `platform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `platform`
--

LOCK TABLES `platform` WRITE;
/*!40000 ALTER TABLE `platform` DISABLE KEYS */;
INSERT INTO `platform` VALUES (1,'PC'),(2,'Xbox'),(3,'Playstation');
/*!40000 ALTER TABLE `platform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publisher_user`
--

DROP TABLE IF EXISTS `publisher_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publisher_user` (
  `publisher_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`publisher_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publisher_user`
--

LOCK TABLES `publisher_user` WRITE;
/*!40000 ALTER TABLE `publisher_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `publisher_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publishers`
--

DROP TABLE IF EXISTS `publishers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publishers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `about` text DEFAULT NULL,
  `image` varchar(100) DEFAULT 'placeholder.jpeg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publishers`
--

LOCK TABLES `publishers` WRITE;
/*!40000 ALTER TABLE `publishers` DISABLE KEYS */;
INSERT INTO `publishers` VALUES (1,'publisher unknown','unknown, or delete publisher','placeholder.jpeg'),(12,'Giant Software','At Giant Software, we believe in the magic of software.  We believe in quality, reliable yet innovative software that pushes the limits of the possible.','673129215024a-giant-software.png'),(13,'Fontier Development','Frontier has thrived over the subsequent three decades. We have built a uniquely diverse catalogue of games – enabled by our Cobra technology – that has defined genres, earned critical acclaim and won a place in the hearts of millions of players.','67312c1fb6a46-frontier.png');
/*!40000 ALTER TABLE `publishers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_game`
--

DROP TABLE IF EXISTS `user_game`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_game` (
  `user_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_game`
--

LOCK TABLES `user_game` WRITE;
/*!40000 ALTER TABLE `user_game` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_game` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_picture` varchar(50) DEFAULT NULL,
  `bio` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='			';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (6,'kevinstephan@hotmail.com','kevinstepher','password123','67312e1e89dae-kevin.png','I’m Kevin, a middle-aged gamer who’s seen trends come and go, and I bring a pretty strategic mindset to my gaming. I lean toward games that require patience and a long-term plan—complex RPGs, strategy games, anything that allows me to methodically break down a challenge. Games like Civilization or Total War are where I feel most at home, taking my time to work out every move and anticipate the game’s twists. I guess it’s just in my nature to approach games like puzzles, and I love figuring things out without rushing. Gaming is something I’ve done for years, and while it’s a different scene these days, I wouldn’t have it any other way.'),(8,'sarah@hotmail.com','sarah789','passpass123','67312e94d1dfd-sarah.jpg','I’m Sarah, also in my early 20s, and I’m drawn to games that let me dive into rich, immersive stories. I’ve always loved games that allow me to explore, make choices, and follow narratives, like The Witcher, Zelda, or even The Sims, where I can create a story of my own. For me, gaming is an escape into worlds filled with characters, landscapes, and possibilities that feel almost real. I take my time to explore, talk to every character, and uncover every piece of lore. I play for the adventure and the beauty of storytelling, and gaming is where my imagination runs wild.'),(9,'simon','simon@hotmail.com','passy123','67312ffc5c781-simon.png','I’m Simon, and gaming is more than a hobby for me—it’s a thrill ride. I live for high-speed, competitive games that get my heart racing, like Call of Duty, Fortnite, and Apex Legends. Fast reflexes, sharp instincts, and an edge for competition are what I bring to every session. The way I see it, gaming is all about mastering new skills and showing what you’ve got. I’m constantly looking for the next challenge or multiplayer match to jump into, and I like to keep up with the latest in the gaming world. It’s all about the action for me, and I don’t hold back.');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-12 11:14:47
