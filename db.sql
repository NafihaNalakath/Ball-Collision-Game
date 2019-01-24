-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table ball_collision.score
CREATE TABLE IF NOT EXISTS `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(4) NOT NULL,
  `score` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table ball_collision.score: ~0 rows (approximately)
/*!40000 ALTER TABLE `score` DISABLE KEYS */;
INSERT INTO `score` (`id`, `user_id`, `score`, `created_at`) VALUES
	(1, 2, 0, '2018-11-25 01:11:55'),
	(2, 1, 0, '2018-11-25 01:16:29'),
	(3, 1, 2011, '2018-11-25 01:17:23'),
	(4, 1, 4313, '2018-11-25 01:18:21'),
	(5, 1, 3592, '2018-11-25 01:34:59'),
	(6, 1, 4106, '2018-11-25 01:35:06'),
	(7, 1, 2475, '2018-11-25 01:35:41'),
	(8, 1, 14447, '2018-11-25 01:36:04'),
	(9, 1, 2995, '2018-11-25 01:36:10'),
	(10, 1, 2048, '2018-11-25 01:36:14'),
	(11, 1, 19373, '2018-11-25 01:41:43'),
	(12, 1, 5810, '2018-11-25 20:54:37'),
	(13, 1, 9709, '2018-11-25 20:54:56'),
	(14, 1, 10694, '2018-11-25 20:55:10');
/*!40000 ALTER TABLE `score` ENABLE KEYS */;

-- Dumping structure for table ball_collision.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ball_collision.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `update_at`) VALUES
	(1, 'vish', '0cc175b9c0f1b6a831c399e269772661', '2018-11-25 00:18:50', '2018-11-25 00:18:50');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
