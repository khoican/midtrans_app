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


-- Dumping database structure for midtrans_app
CREATE DATABASE IF NOT EXISTS `midtrans_app` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `midtrans_app`;

-- Dumping structure for table midtrans_app.carts
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `products_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_products_id_foreign` (`products_id`),
  CONSTRAINT `carts_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table midtrans_app.carts: ~0 rows (approximately)
DELETE FROM `carts`;

-- Dumping structure for table midtrans_app.detail_orders
CREATE TABLE IF NOT EXISTS `detail_orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_orders_order_id_foreign` (`order_id`),
  CONSTRAINT `detail_orders_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table midtrans_app.detail_orders: ~0 rows (approximately)
DELETE FROM `detail_orders`;
INSERT INTO `detail_orders` (`id`, `order_id`, `product_name`, `product_price`, `product_qty`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Web Development', '1000', '1', '2024-03-11 21:57:56', '2024-03-11 21:57:56'),
	(2, 2, 'Web Development', '1000', '1', '2024-03-11 22:00:50', '2024-03-11 22:00:50'),
	(3, 3, 'UI/UX Design', '1000', '1', '2024-03-11 22:06:21', '2024-03-11 22:06:21');

-- Dumping structure for table midtrans_app.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table midtrans_app.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping structure for table midtrans_app.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table midtrans_app.migrations: ~0 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_03_11_185830_create_products_table', 1),
	(6, '2024_03_11_185849_create_carts_table', 1),
	(7, '2024_03_11_185904_create_orders_table', 1),
	(8, '2024_03_11_190758_create_detail_orders_table', 1);

-- Dumping structure for table midtrans_app.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table midtrans_app.orders: ~3 rows (approximately)
DELETE FROM `orders`;
INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `total`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Ibnu', 'ibnukhoirul@gmail.com', '081234567890', 'Banyuwangi', '1000', 'pending', '2024-03-11 21:57:56', '2024-03-11 21:57:56'),
	(2, 'Ibnu Khoirul', 'ibnukhoirul@gmail.com', '081234567890', 'Banyuwangi', '1000', 'success', '2024-03-11 22:00:50', '2024-03-11 22:02:20'),
	(3, 'Ibnu Khoirul Prasetyo', 'ibnukhoirul@gmail.com', '081234567890', 'Banyuwangi', '1000', 'pending', '2024-03-11 22:06:21', '2024-03-11 22:06:21');

-- Dumping structure for table midtrans_app.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table midtrans_app.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping structure for table midtrans_app.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table midtrans_app.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;

-- Dumping structure for table midtrans_app.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table midtrans_app.products: ~3 rows (approximately)
DELETE FROM `products`;
INSERT INTO `products` (`id`, `name`, `image`, `description`, `price`, `created_at`, `updated_at`) VALUES
	(1, 'UI/UX Design', 'https://assets-global.website-files.com/6100d0111a4ed76bc1b9fd54/64664e9cd07202af8bcdc5e4_5757453-p-1600.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde architecto officiis commodi voluptatem dolores sunt ipsa praesentium voluptas natus tempora libero quibusdam ea obcaecati quis quos corrupti doloribus accusamus ipsam, cupiditate dolorem in laboriosam! Sit temporibus quibusdam assumenda reiciendis dicta. Corporis minima cumque saepe ad nihil rerum repellat voluptates voluptate, nesciunt corrupti. Nostrum, nulla, tempore vitae soluta cupiditate cumque debitis voluptatem nesciunt similique fugit inventore reprehenderit temporibus possimus quia dolores et sequi porro corrupti maxime sit? Molestiae amet ipsam exercitationem a distinctio et praesentium animi aspernatur quidem, sint consequuntur? Omnis aut suscipit numquam ea inventore quasi iure quisquam fugit sunt.', 1000, NULL, NULL),
	(2, 'Web Development', 'https://assets-global.website-files.com/6100d0111a4ed76bc1b9fd54/64664e9cd07202af8bcdc5e4_5757453-p-1600.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde architecto officiis commodi voluptatem dolores sunt ipsa praesentium voluptas natus tempora libero quibusdam ea obcaecati quis quos corrupti doloribus accusamus ipsam, cupiditate dolorem in laboriosam! Sit temporibus quibusdam assumenda reiciendis dicta. Corporis minima cumque saepe ad nihil rerum repellat voluptates voluptate, nesciunt corrupti. Nostrum, nulla, tempore vitae soluta cupiditate cumque debitis voluptatem nesciunt similique fugit inventore reprehenderit temporibus possimus quia dolores et sequi porro corrupti maxime sit? Molestiae amet ipsam exercitationem a distinctio et praesentium animi aspernatur quidem, sint consequuntur? Omnis aut suscipit numquam ea inventore quasi iure quisquam fugit sunt.', 1000, NULL, NULL),
	(3, 'Data Engineer', 'https://assets-global.website-files.com/6100d0111a4ed76bc1b9fd54/619b6f6ceb74c1759100beb5_pexels-mikael-blomkvist-6476254%20(1)-p-1600.jpeg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde architecto officiis commodi voluptatem dolores sunt ipsa praesentium voluptas natus tempora libero quibusdam ea obcaecati quis quos corrupti doloribus accusamus ipsam, cupiditate dolorem in laboriosam! Sit temporibus quibusdam assumenda reiciendis dicta. Corporis minima cumque saepe ad nihil rerum repellat voluptates voluptate, nesciunt corrupti. Nostrum, nulla, tempore vitae soluta cupiditate cumque debitis voluptatem nesciunt similique fugit inventore reprehenderit temporibus possimus quia dolores et sequi porro corrupti maxime sit? Molestiae amet ipsam exercitationem a distinctio et praesentium animi aspernatur quidem, sint consequuntur? Omnis aut suscipit numquam ea inventore quasi iure quisquam fugit sunt.', 1000, NULL, NULL);

-- Dumping structure for table midtrans_app.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table midtrans_app.users: ~0 rows (approximately)
DELETE FROM `users`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
