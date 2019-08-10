-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "brands" -----------------------------------
-- CREATE TABLE "brands" ---------------------------------------
CREATE TABLE `brands` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`brand_name` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "categories" -------------------------------
-- CREATE TABLE "categories" -----------------------------------
CREATE TABLE `categories` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "images" -----------------------------------
-- CREATE TABLE "images" ---------------------------------------
CREATE TABLE `images` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`img_url` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "migrations" -------------------------------
-- CREATE TABLE "migrations" -----------------------------------
CREATE TABLE `migrations` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`migration` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`batch` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 7;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "password_resets" --------------------------
-- CREATE TABLE "password_resets" ------------------------------
CREATE TABLE `password_resets` ( 
	`email` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`token` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`created_at` Timestamp NULL )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "products" ---------------------------------
-- CREATE TABLE "products" -------------------------------------
CREATE TABLE `products` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`category_id` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`brand_id` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`manufacturer` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`price` Double( 22, 0 ) NOT NULL,
	`description` Text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`img_url` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`avl_stock` Int( 11 ) NOT NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 9;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "users" ------------------------------------
-- CREATE TABLE "users" ----------------------------------------
CREATE TABLE `users` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`email` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`email_verified_at` Timestamp NULL,
	`password` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`account_type` Int( 11 ) NOT NULL DEFAULT '1',
	`remember_token` VarChar( 100 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `users_email_unique` UNIQUE( `email` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- Dump data of "brands" -----------------------------------
INSERT INTO `brands`(`id`,`brand_name`,`created_at`,`updated_at`) VALUES ( '1', 'HP', '2019-08-07 00:00:00', NULL );
INSERT INTO `brands`(`id`,`brand_name`,`created_at`,`updated_at`) VALUES ( '2', 'DELL', '2019-08-14 00:00:00', NULL );
-- ---------------------------------------------------------


-- Dump data of "categories" -------------------------------
INSERT INTO `categories`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '1', 'Business Laptops', '2019-08-07 00:00:00', NULL );
INSERT INTO `categories`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '2', 'Gaming Laptops', '2019-08-07 00:00:00', NULL );
-- ---------------------------------------------------------


-- Dump data of "images" -----------------------------------
-- ---------------------------------------------------------


-- Dump data of "migrations" -------------------------------
INSERT INTO `migrations`(`id`,`migration`,`batch`) VALUES ( '1', '2014_10_12_000000_create_users_table', '1' );
INSERT INTO `migrations`(`id`,`migration`,`batch`) VALUES ( '2', '2014_10_12_100000_create_password_resets_table', '1' );
INSERT INTO `migrations`(`id`,`migration`,`batch`) VALUES ( '3', '2018_12_14_090509_create_products_table', '1' );
INSERT INTO `migrations`(`id`,`migration`,`batch`) VALUES ( '4', '2019_01_02_112634_create_brands_table', '1' );
INSERT INTO `migrations`(`id`,`migration`,`batch`) VALUES ( '5', '2019_01_02_114556_create_categories_table', '1' );
INSERT INTO `migrations`(`id`,`migration`,`batch`) VALUES ( '6', '2019_01_04_105507_create_images_table', '1' );
-- ---------------------------------------------------------


-- Dump data of "password_resets" --------------------------
-- ---------------------------------------------------------


-- Dump data of "products" ---------------------------------
INSERT INTO `products`(`id`,`name`,`category_id`,`brand_id`,`manufacturer`,`price`,`description`,`img_url`,`avl_stock`,`created_at`,`updated_at`) VALUES ( '1', 'HP Core i3 6th Gen', '1', '1', 'HP', '50000', 'Glyphicons in Bootstrap : Bootstrap Includes over 250 glyphs in font format', 'http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png', '20', '2019-08-14 00:00:00', NULL );
INSERT INTO `products`(`id`,`name`,`category_id`,`brand_id`,`manufacturer`,`price`,`description`,`img_url`,`avl_stock`,`created_at`,`updated_at`) VALUES ( '2', 'Asus APU Quad Core A8', '1', '1', 'ASUS', '30000', '		            	            				Glyphicons in Bootstrap : Bootstrap Includes over 250 glyphs in font format 
', 'http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png', '10', '2019-08-12 00:00:00', NULL );
INSERT INTO `products`(`id`,`name`,`category_id`,`brand_id`,`manufacturer`,`price`,`description`,`img_url`,`avl_stock`,`created_at`,`updated_at`) VALUES ( '3', 'Dell Inspiron 11 3162', '2', '2', 'DELL', '30000', '		            	            				Glyphicons in Bootstrap : Bootstrap Includes over 250 glyphs in font format 
', 'http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png', '10', '2019-08-20 00:00:00', NULL );
INSERT INTO `products`(`id`,`name`,`category_id`,`brand_id`,`manufacturer`,`price`,`description`,`img_url`,`avl_stock`,`created_at`,`updated_at`) VALUES ( '4', 'Asus APU Quad Core A8 ', '2', '2', 'ASUS', '20000', '		            	            				Glyphicons in Bootstrap : Bootstrap Includes over 250 glyphs in font format 
', 'http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png', '40', '2019-08-26 00:00:00', NULL );
INSERT INTO `products`(`id`,`name`,`category_id`,`brand_id`,`manufacturer`,`price`,`description`,`img_url`,`avl_stock`,`created_at`,`updated_at`) VALUES ( '5', 'Aser series2', '1', '1', 'acer', '20000', 'this as a laptop powered by aces', 'image1565272703.jpg', '30', '2019-08-08 13:58:23', '2019-08-08 13:58:23' );
INSERT INTO `products`(`id`,`name`,`category_id`,`brand_id`,`manufacturer`,`price`,`description`,`img_url`,`avl_stock`,`created_at`,`updated_at`) VALUES ( '6', 'micromax x33 corei3', '1', '1', 'micromax', '3000', 'my laptop', 'image1565358890.jpg', '20', '2019-08-09 13:54:50', '2019-08-09 13:54:50' );
INSERT INTO `products`(`id`,`name`,`category_id`,`brand_id`,`manufacturer`,`price`,`description`,`img_url`,`avl_stock`,`created_at`,`updated_at`) VALUES ( '7', 'micromax x55 corei5', '1', '1', 'micromax', '3000', 'my laptop', 'image1565359181.jpg', '20', '2019-08-09 13:57:59', '2019-08-09 13:59:41' );
INSERT INTO `products`(`id`,`name`,`category_id`,`brand_id`,`manufacturer`,`price`,`description`,`img_url`,`avl_stock`,`created_at`,`updated_at`) VALUES ( '8', 'Samsung core i5', '1', '1', 'Samsung', '30000', 'gaming laptop by samsung', 'image1565370338.jpg', '30', '2019-08-09 17:05:38', '2019-08-09 17:05:38' );
-- ---------------------------------------------------------


-- Dump data of "users" ------------------------------------
INSERT INTO `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`account_type`,`remember_token`,`created_at`,`updated_at`) VALUES ( '1', 'admin', 'admin@gmail.com', NULL, '$2y$10$I/9344O/ixfHRINE8aUhQO6TmkwTSRL/XpD18WPwhv2chDGU4gJ3m', '1', NULL, '2019-08-07 13:47:18', '2019-08-07 13:47:18' );
-- ---------------------------------------------------------


-- CREATE INDEX "password_resets_email_index" --------------
-- CREATE INDEX "password_resets_email_index" ------------------
CREATE INDEX `password_resets_email_index` USING BTREE ON `password_resets`( `email` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


