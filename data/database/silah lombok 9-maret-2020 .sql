-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for silah_lombok
CREATE DATABASE IF NOT EXISTS `silah_lombok` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `silah_lombok`;

-- Dumping structure for table silah_lombok.d_package
CREATE TABLE IF NOT EXISTS `d_package` (
  `dp_id` int(11) NOT NULL,
  `dp_title` varchar(50) DEFAULT NULL,
  `dp_description` text,
  `dp_status` varchar(10) DEFAULT NULL,
  `dp_category` int(11) DEFAULT NULL,
  `dp_price_include` text,
  `dp_price_exclude` text,
  `dp_created_by` int(11) DEFAULT NULL,
  `dp_created_at` timestamp NULL DEFAULT NULL,
  `dp_updated_at` timestamp NULL DEFAULT NULL,
  `dp_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`dp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table silah_lombok.d_package: ~1 rows (approximately)
/*!40000 ALTER TABLE `d_package` DISABLE KEYS */;
REPLACE INTO `d_package` (`dp_id`, `dp_title`, `dp_description`, `dp_status`, `dp_category`, `dp_price_include`, `dp_price_exclude`, `dp_created_by`, `dp_created_at`, `dp_updated_at`, `dp_updated_by`) VALUES
	(1, 'Sasak - Trawangan - Citytour', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'AKTIF', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'when an unknown printer took a galley of type and scrambled', NULL, '2020-03-09 01:30:44', NULL, NULL);
/*!40000 ALTER TABLE `d_package` ENABLE KEYS */;

-- Dumping structure for table silah_lombok.d_package_image
CREATE TABLE IF NOT EXISTS `d_package_image` (
  `dpi_package` int(11) DEFAULT NULL,
  `dpi_id` int(11) NOT NULL AUTO_INCREMENT,
  `dpi_image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`dpi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table silah_lombok.d_package_image: ~2 rows (approximately)
/*!40000 ALTER TABLE `d_package_image` DISABLE KEYS */;
REPLACE INTO `d_package_image` (`dpi_package`, `dpi_id`, `dpi_image`) VALUES
	(1, 1, 'package/package_image_1_0_.jpg'),
	(1, 2, 'package/package_image_1_1_.jpg');
/*!40000 ALTER TABLE `d_package_image` ENABLE KEYS */;

-- Dumping structure for table silah_lombok.d_package_rundown
CREATE TABLE IF NOT EXISTS `d_package_rundown` (
  `dpr_package` int(11) DEFAULT NULL,
  `dpr_id` int(11) NOT NULL AUTO_INCREMENT,
  `dpr_day` int(11) DEFAULT NULL,
  PRIMARY KEY (`dpr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table silah_lombok.d_package_rundown: ~3 rows (approximately)
/*!40000 ALTER TABLE `d_package_rundown` DISABLE KEYS */;
REPLACE INTO `d_package_rundown` (`dpr_package`, `dpr_id`, `dpr_day`) VALUES
	(1, 1, 1),
	(1, 2, 2),
	(1, 3, 3);
/*!40000 ALTER TABLE `d_package_rundown` ENABLE KEYS */;

-- Dumping structure for table silah_lombok.d_package_rundown_detail
CREATE TABLE IF NOT EXISTS `d_package_rundown_detail` (
  `dprd_id` int(11) DEFAULT NULL,
  `dprd_dt` int(11) NOT NULL AUTO_INCREMENT,
  `dprd_package` int(11) DEFAULT NULL,
  `dprd_schedulle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dprd_dt`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- Dumping data for table silah_lombok.d_package_rundown_detail: ~9 rows (approximately)
/*!40000 ALTER TABLE `d_package_rundown_detail` DISABLE KEYS */;
REPLACE INTO `d_package_rundown_detail` (`dprd_id`, `dprd_dt`, `dprd_package`, `dprd_schedulle`) VALUES
	(1, 50, 1, 'Pick up at airport'),
	(1, 51, 1, 'sukakare'),
	(1, 52, 1, 'ende'),
	(1, 53, 1, 'luck at kute'),
	(2, 54, 1, 'makan pagi di hotel'),
	(2, 55, 1, 'mengikuti Program Gili Trawangan'),
	(2, 56, 1, 'Setelah berfoto ria'),
	(3, 57, 1, 'sarapan'),
	(3, 58, 1, 'Makan siang');
/*!40000 ALTER TABLE `d_package_rundown_detail` ENABLE KEYS */;

-- Dumping structure for table silah_lombok.d_package_table_hotel
CREATE TABLE IF NOT EXISTS `d_package_table_hotel` (
  `dpth_id` int(11) NOT NULL AUTO_INCREMENT,
  `dpth_package` int(11) DEFAULT NULL,
  `dpth_hotel` int(11) DEFAULT NULL,
  PRIMARY KEY (`dpth_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table silah_lombok.d_package_table_hotel: ~3 rows (approximately)
/*!40000 ALTER TABLE `d_package_table_hotel` DISABLE KEYS */;
REPLACE INTO `d_package_table_hotel` (`dpth_id`, `dpth_package`, `dpth_hotel`) VALUES
	(1, 1, 1),
	(2, 1, 2),
	(3, 1, 3);
/*!40000 ALTER TABLE `d_package_table_hotel` ENABLE KEYS */;

-- Dumping structure for table silah_lombok.d_package_table_hotel_detail
CREATE TABLE IF NOT EXISTS `d_package_table_hotel_detail` (
  `dpthd_id` int(11) DEFAULT NULL,
  `dpthd_dt` int(11) NOT NULL AUTO_INCREMENT,
  `dpthd_price` float(20,2) DEFAULT NULL,
  PRIMARY KEY (`dpthd_dt`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table silah_lombok.d_package_table_hotel_detail: ~9 rows (approximately)
/*!40000 ALTER TABLE `d_package_table_hotel_detail` DISABLE KEYS */;
REPLACE INTO `d_package_table_hotel_detail` (`dpthd_id`, `dpthd_dt`, `dpthd_price`) VALUES
	(1, 1, 10000.00),
	(1, 2, 20000.00),
	(1, 3, 30000.00),
	(2, 4, 11000.00),
	(2, 5, 22000.00),
	(2, 7, 33000.00),
	(3, 8, 12000.00),
	(3, 9, 23000.00),
	(3, 10, 34000.00);
/*!40000 ALTER TABLE `d_package_table_hotel_detail` ENABLE KEYS */;

-- Dumping structure for table silah_lombok.d_package_table_person
CREATE TABLE IF NOT EXISTS `d_package_table_person` (
  `dptp_id` int(11) NOT NULL AUTO_INCREMENT,
  `dptp_package` int(11) DEFAULT NULL,
  `dptp_person` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dptp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table silah_lombok.d_package_table_person: ~3 rows (approximately)
/*!40000 ALTER TABLE `d_package_table_person` DISABLE KEYS */;
REPLACE INTO `d_package_table_person` (`dptp_id`, `dptp_package`, `dptp_person`) VALUES
	(1, 1, '2-5'),
	(2, 1, '6-10'),
	(3, 1, '11-15');
/*!40000 ALTER TABLE `d_package_table_person` ENABLE KEYS */;

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
  `mcp_description` text,
  PRIMARY KEY (`mcp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table silah_lombok.m_category_package: ~2 rows (approximately)
/*!40000 ALTER TABLE `m_category_package` DISABLE KEYS */;
REPLACE INTO `m_category_package` (`mcp_id`, `mcp_title`, `mcp_description`) VALUES
	(1, '3D 2N PACKAGE', NULL),
	(2, '4D 3N PACKAGE', NULL);
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

-- Dumping structure for table silah_lombok.m_hotel
CREATE TABLE IF NOT EXISTS `m_hotel` (
  `mh_id` int(11) NOT NULL,
  `mh_name` varchar(50) NOT NULL,
  `mh_address` text NOT NULL,
  `mh_star` int(11) NOT NULL,
  PRIMARY KEY (`mh_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table silah_lombok.m_hotel: ~7 rows (approximately)
/*!40000 ALTER TABLE `m_hotel` DISABLE KEYS */;
REPLACE INTO `m_hotel` (`mh_id`, `mh_name`, `mh_address`, `mh_star`) VALUES
	(1, 'Sahid', '', 0),
	(2, 'Luminor', '', 0),
	(3, 'Jw Mariot', '', 0),
	(4, 'Ibis', '', 0),
	(5, 'Seraton', '', 0),
	(6, 'Shangri la', '', 0),
	(7, 'Zoom', '', 0),
	(8, 'Novotel', '', 0);
/*!40000 ALTER TABLE `m_hotel` ENABLE KEYS */;

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
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`, `image`) VALUES
	(1, 'Deny Prasetyo ss', 'denyprasetyo41@gmail.com', '2020-02-15 06:32:07', '4ef7877f01e6ab681f4756ca6f05b90da0e2f1f8', NULL, '2020-02-27 03:54:16', '2020-02-27 03:54:16', 'admin1', 'user/user_image_1.jpg');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
