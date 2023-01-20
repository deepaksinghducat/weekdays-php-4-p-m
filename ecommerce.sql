-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 12:28 PM
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
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `cart_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `first_name`, `last_name`, `email`, `address`, `city`, `state`, `country`, `type`, `created_at`, `cart_id`) VALUES
(9, 'fasfdas', 'fsadfasf', 'test@gmail.com', 'asfdsa', 'fasdf', 'fdasf', 'fasdf', 'billing', '2023-01-20 10:42:43', 6),
(10, 'fasdf', 'fasdf', 'test@gmail.com', 'fasdfasf', 'fasdfaf', 'asdf', 'fsafdasf', 'shipping', '2023-01-20 10:42:43', 6),
(11, 'fasdf', 'asdf', 'testing@gmail.com', 'dfasf', 'asfd', 'asfd', 'fasdf', 'billing', '2023-01-20 11:22:18', 6),
(12, 'fdsafsaf', 'safa', 'testing@gmail.com', 'asfsaf', 'fdsaf', 'fsadf', 'fasdf', 'shipping', '2023-01-20 11:22:18', 6),
(13, 'fasdf', 'fasdf', 'testing@gmail.com', 'asf', 'asf', 'asfd', 'asddf', 'billing', '2023-01-20 11:23:01', 6),
(14, 'fasdf', 'fsadf', 'testing@gmail', 'asfdasf', 'fasdf', 'fsafd', 'fdsafasf', 'shipping', '2023-01-20 11:23:01', 6),
(15, 'fasdf', 'fasdf', 'testing@gmail.com', 'asf', 'asf', 'asfd', 'asddf', 'billing', '2023-01-20 11:23:52', 6),
(16, 'fasdf', 'fsadf', 'testing@gmail', 'asfdasf', 'fasdf', 'fsafd', 'fdsafasf', 'shipping', '2023-01-20 11:23:52', 6),
(17, 'fasdf', 'fasdf', 'testing@gmail.com', 'asf', 'asf', 'asfd', 'asddf', 'billing', '2023-01-20 11:24:57', 6),
(18, 'fasdf', 'fsadf', 'testing@gmail', 'asfdasf', 'fasdf', 'fsafd', 'fdsafasf', 'shipping', '2023-01-20 11:24:57', 6);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL,
  `tax` decimal(10,2) DEFAULT NULL,
  `grand_total` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_guest` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `subtotal`, `tax`, `grand_total`, `created_at`, `is_guest`) VALUES
(1, NULL, NULL, NULL, '2023-01-11 11:04:28', 0),
(2, NULL, NULL, NULL, '2023-01-13 10:47:42', 0),
(3, NULL, NULL, NULL, '2023-01-17 10:46:52', 0),
(4, NULL, NULL, NULL, '2023-01-17 10:50:04', 0),
(5, NULL, NULL, NULL, '2023-01-17 10:53:38', 0),
(6, NULL, NULL, NULL, '2023-01-20 10:36:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `product_id`, `quantity`, `cart_id`, `created_at`, `price`) VALUES
(4, 35, 13, 2, '2023-01-13 10:57:38', '10.00'),
(5, 36, 10, 2, '2023-01-13 11:01:28', '10.00'),
(6, 35, 1, 3, '2023-01-17 10:46:52', '10.00'),
(7, 35, 1, 4, '2023-01-17 10:50:04', '10.00'),
(8, 35, 1, 5, '2023-01-17 10:53:38', '10.00'),
(9, 34, 1, 6, '2023-01-20 10:36:11', '10.00'),
(10, 35, 1, 6, '2023-01-20 10:36:13', '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created-at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `image_path`, `role`, `password`, `created-at`) VALUES
(2, 'fasdfdaSDSadDfsadfasfasfasdf', 'fasdf', 'fsadfasfd@gamil.com', 'uploads/cfcd208495d565ef66e7dff9f98764da.jpg', NULL, NULL, '2023-01-06 10:59:43'),
(3, 'fsadfasf', 'fasdfsaf', 'deepak@gmail.com', 'uploads/e4da3b7fbbce2345d7772b0674a318d5.jpg', 1, '$2y$10$rhQVsyoa4ArUAQdxI0wTje/mOwHFIe24vwir0pfiaip5Dk3shzM1C', '2023-01-09 10:48:07'),
(4, 'fdasfas', 'fasdfadsf', 'testing@gmail.com', '', 0, '$2y$10$5OhYeAnWMJjj22hkcaH0NO2Il7f0fHnLw7F8yRELEhJczEA9L4mYG', '2023-01-09 11:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `sub_total` decimal(10,2) DEFAULT NULL,
  `tax` decimal(10,2) DEFAULT NULL,
  `grand_total` decimal(10,2) DEFAULT NULL,
  `is_guest` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `cart_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `sub_total`, `tax`, `grand_total`, `is_guest`, `created_at`, `cart_id`) VALUES
(2, NULL, NULL, NULL, 0, '2023-01-20 11:24:57', 6);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `cart_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `quantity`, `price`, `cart_id`, `order_id`, `created_at`) VALUES
(1, 34, 1, '10.00', 6, 2, '2023-01-20 11:24:57'),
(2, 35, 1, '10.00', 6, 2, '2023-01-20 11:24:57');

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
(34, 'fsadf', 'fsadf', 'fdsaf', '10.00', 10, '2023-01-06 10:33:16'),
(35, 'asfd', 'fasdfasf', 'fasdfasf', '10.00', 10, '2023-01-10 10:50:12'),
(36, 'fasdf', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '10.00', 100, '2023-01-10 10:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image_path`, `product_id`, `created_at`) VALUES
(64, 'uploads/c4ca4238a0b923820dcc509a6f75849b.jpg', 34, '2023-01-06 10:33:16'),
(65, 'uploads/c20ad4d76fe97759aa27a0c99bff6710.jpg', 35, '2023-01-10 10:50:12'),
(66, 'uploads/c9f0f895fb98ab9159f51fd0297e236d.jpg', 35, '2023-01-10 10:50:12'),
(67, 'uploads/70efdf2ec9b086079795c442636b55fb.jpg', 35, '2023-01-10 10:50:12'),
(68, 'uploads/8f14e45fceea167a5a36dedd4bea2543.jpg', 36, '2023-01-10 10:54:49'),
(69, 'uploads/6512bd43d9caa6e02c990b0a82652dca.jpg', 36, '2023-01-10 10:54:49'),
(70, 'uploads/1679091c5a880faf6fb5e6087eb1b2dc.jpg', 36, '2023-01-10 10:54:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_id` (`cart_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `cart_id` (`cart_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_id` (`cart_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `order_id` (`order_id`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `order_items_ibfk_3` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
