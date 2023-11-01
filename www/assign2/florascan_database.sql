-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for florascan_database
CREATE DATABASE IF NOT EXISTS `florascan_database` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `florascan_database`;

-- Dumping structure for table florascan_database.enquiry
CREATE TABLE IF NOT EXISTS `enquiry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `plant` varchar(50) NOT NULL,
  `enquiry` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table florascan_database.enquiry: ~0 rows (approximately)
INSERT INTO `enquiry` (`id`, `first_name`, `last_name`, `email`, `street`, `city`, `state`, `postcode`, `plant`, `enquiry`) VALUES
	(1, 'testone', 'testone', 'testone@testone', 'testone', 'testone', 'Selangor', '00001', 'Dipterocarpaceae', 'testone'),
	(2, 'testtwo', 'testtwo', 'testtwo@testtwo', 'testtwo', 'testtwo', 'Selangor', '00002', 'Dipterocarpaceae', 'testtwo'),
	(3, 'testthree', 'testthree', 'testthree@testthree', 'testthree', 'testthree', 'Selangor', '00003', 'Dipterocarpaceae', 'testthree'),
	(4, 'testfour', 'testfour', 'testfour@testfour', 'testfour', 'testfour', 'Selangor', '00004', 'Dipterocarpaceae', 'testfour');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
