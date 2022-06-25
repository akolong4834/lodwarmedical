-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 03:06 PM
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
-- Database: `lodwarmedical`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointmentid` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `department` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Antibiotics'),
(2, 'Injection'),
(3, 'CREAM'),
(4, 'TABLETS');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `heading` varchar(20) NOT NULL,
  `author` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `content`, `heading`, `author`, `created`, `image`) VALUES
(1, 'Communicable Diseases Communicable Diseases Communicable Diseases Communicable Diseases v v Communicable Diseases Communicable Diseases Communicable Diseases Communicable Diseases Communicable Diseases', 'Communicable Disease', 'Akolong Kennedy', '2022-06-09 11:56:03', '01bc65e980bcc09b66556a52ba746f4e1377dfb8-1.jpg'),
(2, 'Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases v Chronic Diseases Chronic Diseases v Chronic Diseases', 'Chronic Diseases', 'Akolong Kennedy', '2022-06-09 12:19:04', '01bc65e980bcc09b66556a52ba746f4e1377dfb8-1.jpg'),
(3, 'Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases v Chronic Diseases Chronic Diseases v Chronic Diseases', 'Chronic Diseases', 'Akolong Kennedy', '2022-06-09 12:19:36', '01bc65e980bcc09b66556a52ba746f4e1377dfb8-1.jpg'),
(4, 'Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases', 'STIs Demystified', 'Akolong Kennedy', '2022-06-09 12:20:45', '01bc65e980bcc09b66556a52ba746f4e1377dfb8-1.jpg'),
(5, 'Chronic Diseases v Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases Chronic Diseases', 'STIs HIV AIDS', 'Akolong Kennedy', '2022-06-09 12:22:18', '4d0e2791601c998ede514e844acc5dee880f24c3-news-imag'),
(6, 'Communicable DiseasesCommunicable DiseasesvCommunicable DiseasesCommunicable DiseasesCommunicable DiseasesCommunicable DiseasesCommunicable DiseasesCommunicable DiseasesvCommunicable DiseasesCommunicable DiseasesvvCommunicable DiseasesCommunicable DiseasesCommunicable DiseasesvCommunicable DiseasesCommunicable DiseasesvvCommunicable DiseasesCommunicable Diseases', 'Communicable Disease', 'Akolong Kennedy', '2022-06-09 14:37:13', 'd9055b1e170d33f22b63a0698f8755af6c54aa5a-team-imag'),
(7, 'Communicable DiseasesCommunicable DiseasesvCommunicable DiseasesCommunicable DiseasesCommunicable DiseasesCommunicable DiseasesCommunicable DiseasesCommunicable DiseasesvCommunicable DiseasesCommunicable DiseasesvvCommunicable DiseasesCommunicable DiseasesCommunicable DiseasesvCommunicable DiseasesCommunicable DiseasesvvCommunicable DiseasesCommunicable Diseases', 'Communicable Disease', 'Akolong Kennedy', '2022-06-09 14:37:26', 'd9055b1e170d33f22b63a0698f8755af6c54aa5a-team-imag');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `price` int(20) NOT NULL,
  `retailprice` int(30) NOT NULL,
  `profit` int(20) NOT NULL,
  `image` varchar(512) CHARACTER SET latin1 NOT NULL,
  `description` text NOT NULL,
  `stock` int(10) NOT NULL,
  `current_stock` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `retailprice`, `profit`, `image`, `description`, `stock`, `current_stock`, `category_id`, `created`) VALUES
(1, 'AUGMENTIN BD TABLETS 625MG * 14', 450, 800, 350, '', 'antibiotics', 3, 3, 1, '2022-06-09 14:35:04'),
(2, 'Artesunate 60mg Injection (MALART) 5s', 450, 600, 150, '', 'Malaria Injection', 2, 2, 2, '2022-06-09 15:09:25'),
(3, 'AZITHROMYCIN 500MG 3*S (AGYCIN)', 48, 100, 52, '', '', 5, 5, 2, '2022-06-09 15:14:28'),
(4, 'BULKOT CREAM 20G (CLOTRIMAZOLE)', 25, 100, 75, '', '', 5, 5, 3, '2022-06-09 15:18:14'),
(5, 'BUSCOPAN PLUS TABS 40S', 299, 500, 301, '', '', 8, 8, 4, '2022-06-09 15:20:23'),
(6, 'CACHCET TABS (CETRIZINE) 100S', 105, 200, 95, '', '', 2, 2, 4, '2022-06-09 15:21:19'),
(7, 'CALCIGARD R 20MG 100S', 130, 200, 70, '', '', 4, 4, 4, '2022-06-09 15:22:24'),
(8, 'CEFIXIME 400MG (THEOFIX)', 165, 200, 35, '', '', 5, 5, 4, '2022-06-09 15:23:14'),
(9, 'CEFTRIAXONE INJ 1GM (SANTRIAX)', 37, 150, 113, '', '', 7, 7, 2, '2022-06-09 15:26:47'),
(10, 'CHLORPHENIRAMINE INJ', 10, 100, 90, '', '', 20, 20, 2, '2022-06-09 15:28:02'),
(11, 'CIPROFLOXACIN 500MG 100S', 290, 500, 210, '', '', 3, 3, 4, '2022-06-09 15:29:00'),
(12, 'COSCOF C LINCTUS 100ML', 170, 300, 130, '', '', 5, 5, 2, '2022-06-09 15:34:44'),
(13, 'DICLOFENAC INJ 75MG/3ML', 6, 100, 94, '', '', 10, 10, 2, '2022-06-09 15:35:29'),
(14, 'DUO-COTEXCIN 9S', 305, 500, 195, '', '', 4, 4, 4, '2022-06-09 15:36:09'),
(15, 'ENCARDIL TAB 5MG * 100S', 180, 300, 120, '', '', 3, 3, 4, '2022-06-09 15:38:07'),
(16, 'GENTAMCIN INJ', 6, 100, 94, '', '', 20, 20, 2, '2022-06-09 15:38:55'),
(17, 'GLUCOMET 500MG TABS 56S ', 195, 300, 105, '', '', 5, 5, 4, '2022-06-09 15:40:17'),
(18, 'HYDROCORTISONE INJ', 25, 100, 75, '', '', 20, 20, 2, '2022-06-09 15:41:12'),
(19, 'LONART TABS * 24S', 62, 200, 138, '', '', 5, 5, 4, '2022-06-09 15:41:56'),
(20, 'MYOSPAZ TABS 100S', 1685, 2000, 315, '', '', 1, 1, 4, '2022-06-09 15:43:36'),
(21, 'NOGLUC TABS 28S', 110, 200, 90, '', '', 10, 10, 4, '2022-06-09 15:44:08'),
(22, 'P-ALAXIN TABS 9S', 195, 300, 105, '', '', 5, 5, 4, '2022-06-09 15:44:44'),
(23, 'PARACETAMOL 500MG 1000S', 955, 2000, 1005, '', '', 1, 1, 4, '2022-06-09 15:45:25'),
(24, 'PROMETHAZINE TABS 100S', 200, 500, 300, '', '', 2, 2, 4, '2022-06-09 15:45:52'),
(25, 'REMUS OINY (TACROLIMUS INN 0.03%)', 500, 800, 300, '', '', 5, 5, 3, '2022-06-09 15:47:09'),
(26, 'SALBUT 4MG TABS &#039;B&#039; 100S', 85, 200, 115, '', '', 2, 2, 0, '2022-06-09 15:47:38'),
(27, 'SOLO TABS 10MG 14 *S', 500, 800, 300, '', '', 2, 2, 4, '2022-06-09 15:48:13'),
(28, 'TINIDAZOLE 500MG * 4S', 11, 50, 0, '', '', 10, 10, 4, '2022-06-09 15:49:19'),
(29, 'TRAMADOL 50MG/ML 2ML AMP 1*S', 23, 60, 37, '', '', 10, 10, 2, '2022-06-09 15:49:51'),
(30, 'ZULU MR 20S', 585, 800, 0, '', '', 4, 4, 4, '2022-06-09 15:50:40');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `sale_id` int(10) NOT NULL,
  `id` int(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(30) NOT NULL,
  `retailprice` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `profit` int(100) NOT NULL,
  `totalprofit` int(10) NOT NULL,
  `totalcash` int(40) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`sale_id`, `id`, `name`, `price`, `retailprice`, `quantity`, `profit`, `totalprofit`, `totalcash`, `created`) VALUES
(1, 1, 'AUGMENTIN BD TABLETS', 450, 800, 4, 350, 1400, 3200, '2022-06-09 08:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `access_level` varchar(16) NOT NULL,
  `access_code` varchar(40) NOT NULL,
  `status` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `contact_number`, `address`, `password`, `access_level`, `access_code`, `status`, `created`, `modified`) VALUES
(1, 'akolong', 'kennedy', 'jakolongkennedy@gmail.com', '0769806847', '365 30500 lodwar', '$2y$10$dNFXq8urexFbGpAKTBDcjOlCGcjy2ANWUgVcwIO/GsgZ4RxAqlEUe', 'Admin', '', 1, '2022-06-09 14:29:20', '2022-06-09 06:29:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointmentid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointmentid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
