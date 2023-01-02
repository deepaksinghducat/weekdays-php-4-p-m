-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 12:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `short_description`, `description`, `price`, `quantity`, `created_at`) VALUES
(2, 'asfdasf', 'fasdfasf', 'fsadfasdf', '10.20', 1, '2022-12-30 11:11:25'),
(3, 'asfdasf', 'fasdfasf', 'fsadfasdf', '10.20', 1, '2022-12-30 11:14:46'),
(4, 'fsadfasf', 'fasfasfd', 'fsafsadf', '10.50', 100, '2022-12-30 11:22:35'),
(5, 'fasdfadf', 'fasdfsaf', 'fsdafasdf', '10.50', 100, '2022-12-30 11:25:31'),
(16, 'fadf', 'fasdfsaf', 'fasdf', '12.00', 2121, '2023-01-02 11:23:33'),
(17, 'fadf', 'fasdfsaf', 'fasdf', '12.00', 2121, '2023-01-02 11:23:41'),
(18, '', '', '', '0.00', 0, '2023-01-02 11:34:31'),
(19, 'fsafas', 'fdasf', 'fsadf', '21.00', 21212, '2023-01-02 11:34:48'),
(20, 'fsafas', 'fdasf', 'fsadf', '21.00', 21212, '2023-01-02 11:40:04'),
(21, 'fsafas', 'fdasf', 'fsadf', '21.00', 21212, '2023-01-02 11:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `image_path` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image_path`, `product_id`, `created_at`) VALUES
(1, 'C:\\xampp\\htdocs\\weekdays-php-4-p-m\\ecommerce\\admin', 20, '2023-01-02 11:40:04'),
(2, 'C:\\xampp\\htdocs\\weekdays-php-4-p-m\\ecommerce\\admin', 20, '2023-01-02 11:40:04'),
(3, 'C:\\xampp\\htdocs\\weekdays-php-4-p-m\\ecommerce\\admin', 20, '2023-01-02 11:40:04'),
(4, 'C:\\xampp\\htdocs\\weekdays-php-4-p-m\\ecommerce\\admin', 20, '2023-01-02 11:40:04'),
(5, 'C:\\xampp\\htdocs\\weekdays-php-4-p-m\\ecommerce\\admin', 21, '2023-01-02 11:40:41'),
(6, 'C:\\xampp\\htdocs\\weekdays-php-4-p-m\\ecommerce\\admin', 21, '2023-01-02 11:40:41'),
(7, 'C:\\xampp\\htdocs\\weekdays-php-4-p-m\\ecommerce\\admin', 21, '2023-01-02 11:40:41'),
(8, 'C:\\xampp\\htdocs\\weekdays-php-4-p-m\\ecommerce\\admin', 21, '2023-01-02 11:40:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
