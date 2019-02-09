-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 02:43 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallerio`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `carticle` longtext NOT NULL,
  `cimage` varchar(255) NOT NULL,
  `curl` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ctitle`, `carticle`, `cimage`, `curl`, `updated_at`, `created_at`) VALUES
(1, 'CamShots', 'It is a long established fact that a reader will be distracted by the ', 'categorie1.jpg', 'camshots', '2019-02-02 00:00:00', '2019-02-02 00:00:00'),
(2, 'Illustrations', 'It is a long established fact that ', 'categorie2.jpg', 'illustrations', '2019-02-02 00:00:00', '2019-02-02 00:00:00'),
(3, 'Paintings', 'It is a long established', 'categorie3.jpg', 'paintings', '2019-02-02 00:00:00', '2019-02-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `ptitle` varchar(255) NOT NULL,
  `particle` longtext NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `purl` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `ptitle`, `particle`, `pimage`, `price`, `purl`, `updated_at`, `created_at`) VALUES
(1, 2, 'Colorful Woman', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.ult model text', 'illustration1.jpg', '97.95', 'colorfulwoman', '2019-02-02 00:00:00', '2019-02-02 00:00:00'),
(2, 3, 'Van Gogh', 'It is a long established fact that a reader ', 'painting1.jpg', '87.99', 'van-gogh', '2019-02-02 00:00:00', '2019-02-02 00:00:00'),
(3, 1, 'Victory', 'It is a long established fact ters, as opposed to using \'Content here, content ', 'camshot1.jpg', '64.55', 'victory', '2019-02-02 00:00:00', '2019-02-02 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `curl` (`curl`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
