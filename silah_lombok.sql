-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.40-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for silah_lombok
CREATE DATABASE IF NOT EXISTS `silah_lombok` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `silah_lombok`;

-- Dumping structure for table silah_lombok.d_package_detail
CREATE TABLE IF NOT EXISTS `d_package_detail` (
  `dpd_id` int(11) NOT NULL,
  `dpd_title` varchar(50) DEFAULT NULL,
  `dpd_description` varchar(50) DEFAULT NULL,
  `dpd_price_include` varchar(50) DEFAULT NULL,
  `dpd_price_exclude` varchar(50) DEFAULT NULL,
  `dpd_created_by` int(11) DEFAULT NULL,
  `dpd_created_at` timestamp NULL DEFAULT NULL,
  `dpd_updated_at` timestamp NULL DEFAULT NULL,
  `dpd_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`dpd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table silah_lombok.d_package_detail: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_package_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_package_detail` ENABLE KEYS */;

-- Dumping structure for table silah_lombok.d_package_image
CREATE TABLE IF NOT EXISTS `d_package_image` (
  `dpi_package` int(11) DEFAULT NULL,
  `dpi_id` int(11) NOT NULL AUTO_INCREMENT,
  `dpi_image` int(11) DEFAULT NULL,
  PRIMARY KEY (`dpi_id`),
  UNIQUE KEY `dpi_package` (`dpi_package`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table silah_lombok.d_package_image: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_package_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_package_image` ENABLE KEYS */;

-- Dumping structure for table silah_lombok.d_package_rundown
CREATE TABLE IF NOT EXISTS `d_package_rundown` (
  `drp_package` int(11) DEFAULT NULL,
  `dpr_id` int(11) NOT NULL AUTO_INCREMENT,
  `dpr_day` int(11) DEFAULT NULL,
  PRIMARY KEY (`dpr_id`),
  UNIQUE KEY `drp_package` (`drp_package`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table silah_lombok.d_package_rundown: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_package_rundown` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_package_rundown` ENABLE KEYS */;

-- Dumping structure for table silah_lombok.d_package_rundown_detail
CREATE TABLE IF NOT EXISTS `d_package_rundown_detail` (
  `dprd_id` int(11) DEFAULT NULL,
  `dprd_dt` int(11) NOT NULL AUTO_INCREMENT,
  `dprd_package` int(11) DEFAULT NULL,
  `dprd_schedulle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dprd_dt`),
  UNIQUE KEY `dprd_id` (`dprd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table silah_lombok.d_package_rundown_detail: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_package_rundown_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_package_rundown_detail` ENABLE KEYS */;

-- Dumping structure for table silah_lombok.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table silah_lombok.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table silah_lombok.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table silah_lombok.migrations: ~0 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table silah_lombok.m_category_package
CREATE TABLE IF NOT EXISTS `m_category_package` (
  `mcp_id` int(11) NOT NULL AUTO_INCREMENT,
  `mcp_title` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`mcp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table silah_lombok.m_category_package: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_category_package` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_category_package` ENABLE KEYS */;

-- Dumping structure for table silah_lombok.m_category_tour
CREATE TABLE IF NOT EXISTS `m_category_tour` (
  `mct_id` int(11) NOT NULL AUTO_INCREMENT,
  `mct_title` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`mct_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table silah_lombok.m_category_tour: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_category_tour` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_category_tour` ENABLE KEYS */;

-- Dumping structure for table silah_lombok.m_slider
CREATE TABLE IF NOT EXISTS `m_slider` (
  `ms_id` int(11) NOT NULL AUTO_INCREMENT,
  `ms_title` varchar(50) DEFAULT NULL,
  `ms_image` varchar(50) DEFAULT NULL,
  `ms_created_at` timestamp NULL DEFAULT NULL,
  `ms_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ms_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table silah_lombok.m_slider: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_slider` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_slider` ENABLE KEYS */;

-- Dumping structure for table silah_lombok.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table silah_lombok.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table silah_lombok.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table silah_lombok.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`, `image`) VALUES
	(1, 'admin', 'admin@gmail.com', '2020-02-15 06:32:07', '4ef7877f01e6ab681f4756ca6f05b90da0e2f1f8', NULL, '2020-02-15 06:33:17', '2020-02-15 06:33:19', 'admin', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
