-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 21 Nis 2022, 06:04:54
-- Sunucu sürümü: 5.6.51-cll-lve
-- PHP Sürümü: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `deneme`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `piece` int(11) DEFAULT NULL,
  `confirm` enum('0','1') DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `beden` varchar(45) DEFAULT NULL,
  `color` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Tablo döküm verisi `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `piece`, `confirm`, `created_at`, `updated_at`, `status`, `beden`, `color`) VALUES
(0000000005, 7, 4, 2, '0', '2022-04-16 12:37:45', '2022-04-16 13:39:53', 1, NULL, NULL),
(0000000006, 7, 5, 1, '0', '2022-04-16 12:37:45', '2022-04-16 14:08:11', 1, NULL, NULL),
(0000000007, 12, 6, 1, '0', '2022-04-17 04:42:20', '2022-04-17 04:42:20', 0, NULL, NULL),
(0000000008, 12, 4, 21, '0', '2022-04-17 04:42:20', '2022-04-17 04:42:20', 0, 'l', 'white');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `regular_price` int(11) DEFAULT NULL,
  `promotion_price` int(11) DEFAULT NULL,
  `currency` varchar(45) DEFAULT NULL,
  `tax_rate` int(11) DEFAULT NULL,
  `image` varchar(450) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` text,
  `content` text,
  `stok` int(11) DEFAULT '0',
  `kategori` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `regular_price`, `promotion_price`, `currency`, `tax_rate`, `image`, `created_at`, `updated_at`, `name`, `content`, `stok`, `kategori`) VALUES
(0000000004, 78, 58, 'TL', NULL, '202204160608product-01.jpg', '2022-04-12 16:41:30', '2022-04-17 04:02:43', 'Deneme Ürünü', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.', 8, 'women'),
(0000000005, 49, 33, 'TL', NULL, '202204160608product-03.jpg', '2022-04-16 03:08:55', '2022-04-17 04:02:12', 'Deneme ürün', 'Detay AÇıklamsı', 11, 'men'),
(0000000006, 33, 33, 'TL', NULL, '202204160609product-11.jpg', '2022-04-16 03:09:44', '2022-04-17 04:02:04', 'deneme ürün', 'açıklama', 33, 'men'),
(0000000007, 12, 23, 'TL', NULL, '202204160610product-10.jpg', '2022-04-16 03:10:19', '2022-04-17 04:02:35', 'Deneme Ürün', 'Açıklama', 23, 'women'),
(0000000010, 12, 12, '$', NULL, '202204170701product-8-2.jpg', '2022-04-17 04:01:35', '2022-04-17 04:01:35', 'eses', 'sasasaa', 12, 'shoes'),
(0000000011, 12, 12, 'TL', NULL, '202204170703product-9-2.jpg', '2022-04-17 04:03:14', '2022-04-17 04:03:33', 'saat', 'assasa', 12, 'shoes'),
(0000000012, 12, 121, '$', NULL, '202204170704product-14-1.jpg', '2022-04-17 04:04:29', '2022-04-17 04:04:29', 'Bag', 'AÇıklama alanı', 12, 'bag'),
(0000000013, 12, 1, '$', NULL, '202204170705category-thumb-4.jpg', '2022-04-17 04:05:03', '2022-04-17 04:05:03', 'sasas', 'ssasa', 12, 'watches');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `image` varchar(450) COLLATE utf8_turkish_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `updated_at`, `created_at`) VALUES
(0000000001, 13, '\"202204211131gurtrade_03.jpg\"', '2022-04-21 08:31:44', '2022-04-21 08:31:44'),
(0000000002, 13, '\"202204211131chinaplast_logo.jpg\"', '2022-04-21 08:31:44', '2022-04-21 08:31:44'),
(0000000003, 13, '\"202204211131orient_logo.jpg\"', '2022-04-21 08:31:44', '2022-04-21 08:31:44'),
(0000000004, 13, '\"202204211131\\u00fc,.jpg\"', '2022-04-21 08:31:44', '2022-04-21 08:31:44'),
(0000000005, 13, '\"202204211131carpet.jpg\"', '2022-04-21 08:31:44', '2022-04-21 08:31:44'),
(0000000006, 13, '\"202204211131mobilya_fuari.jpg\"', '2022-04-21 08:31:44', '2022-04-21 08:31:44'),
(0000000007, 13, '\"202204211131emlak.jpg\"', '2022-04-21 08:31:44', '2022-04-21 08:31:44');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepets`
--

CREATE TABLE `sepets` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `piece` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `beden` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sepets`
--

INSERT INTO `sepets` (`id`, `user_id`, `product_id`, `piece`, `created_at`, `updated_at`, `color`, `beden`) VALUES
(0000000012, 7, 4, 2, '2022-04-16 12:36:48', '2022-04-16 12:37:01', NULL, NULL),
(0000000013, 7, 5, 4, '2022-04-16 12:37:31', '2022-04-16 17:43:03', NULL, NULL),
(0000000014, 7, 6, 4, '2022-04-16 12:38:35', '2022-04-16 14:14:25', NULL, NULL),
(0000000015, 7, 7, 1, '2022-04-16 17:42:48', '2022-04-16 17:42:48', NULL, NULL),
(0000000016, 11, 7, 1, '2022-04-16 17:43:59', '2022-04-16 17:43:59', NULL, NULL),
(0000000017, 12, 6, 1, '2022-04-16 18:21:54', '2022-04-16 18:21:54', NULL, NULL),
(0000000018, 12, 4, 21, '2022-04-17 04:32:07', '2022-04-17 04:40:11', 'white', 'l');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `title` varchar(450) DEFAULT NULL,
  `subtitle` varchar(450) DEFAULT NULL,
  `content` varchar(450) DEFAULT NULL,
  `button_text` varchar(450) DEFAULT NULL,
  `image` varchar(450) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `subtitle`, `content`, `button_text`, `image`, `created_at`, `updated_at`) VALUES
(0000000005, 'efefef', 'efef', 'efeffeef', 'efef', '202204160606slide-01.jpg', '2022-04-16 03:06:16', '2022-04-16 17:50:56'),
(0000000006, 'effefe', 'fefe', 'fefe', 'fefe', '202204162051202203131720screencapture-127-0-0-1-8000-2022-03-04-13_10_59.png', '2022-04-16 17:51:06', '2022-04-16 17:51:06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `first_name` varchar(450) DEFAULT NULL,
  `last_name` varchar(450) DEFAULT NULL,
  `type` enum('admin','user') DEFAULT 'user',
  `email` varchar(450) DEFAULT NULL,
  `password` varchar(450) DEFAULT NULL,
  `image` varchar(450) DEFAULT NULL,
  `state` varchar(450) DEFAULT NULL,
  `country` varchar(450) DEFAULT NULL,
  `phone` varchar(450) DEFAULT NULL,
  `confirm` enum('0','1') DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `admin` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `type`, `email`, `password`, `image`, `state`, `country`, `phone`, `confirm`, `created_at`, `updated_at`, `status`, `admin`) VALUES
(0000000008, 'efe', NULL, 'user', 'efeee@efee.com', '$2y$10$0QmhfV5kw8/6MLEPTHF1Mu1EyOP6ItyCSJKgQEpsxIqtQkK4zU7MO', '202204162047floorentry2.jpg', 'asas', 'asas', NULL, '0', '2022-04-15 19:01:41', '2022-04-16 17:47:14', 0, 0),
(0000000011, 'efe', 'efe', 'user', 'ef@ef.com', '$2y$10$FRREXrcIPkdrPlcGXkRnXegEn2tRBD9yeEjRC5v4USF32HieMPsTW', NULL, 'adres', 'ülke', 'Telefon', '0', '2022-04-16 17:43:42', '2022-04-16 17:43:42', 1, 0),
(0000000012, 'efe', 'efe', 'user', 'ef1@ef.1com1', '$2y$10$pjc4K7sPCPnS9skO8qzgYOKNeM0/Yf7T3WfgHeDy0A10H/9RGfGoW', '202204162054carpet.jpg', 'adres', 'asas', 'assa', '0', '2022-04-16 17:48:25', '2022-04-16 17:54:39', 1, 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Tablo için indeksler `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Tablo için indeksler `sepets`
--
ALTER TABLE `sepets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `sepets`
--
ALTER TABLE `sepets`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
