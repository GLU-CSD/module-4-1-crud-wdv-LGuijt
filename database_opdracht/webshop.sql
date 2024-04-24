-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 11:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop_fruitfish`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie_lijst`
--

CREATE TABLE `categorie_lijst` (
  `id` int(11) NOT NULL,
  `cat_naam` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorie_lijst`
--

INSERT INTO `categorie_lijst` (`id`, `cat_naam`) VALUES
(1, 'Schilderijen'),
(2, 'Tekeningen'),
(3, 'Dozen'),
(4, 'Accesoires'),
(5, 'Kaarten');

-- --------------------------------------------------------

--
-- Table structure for table `kleuren_lijst`
--

CREATE TABLE `kleuren_lijst` (
  `id` int(11) NOT NULL,
  `kleur_naam` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kleuren_lijst`
--

INSERT INTO `kleuren_lijst` (`id`, `kleur_naam`) VALUES
(1, 'Blauw'),
(2, 'Geel'),
(3, 'Goud'),
(4, 'Groen'),
(5, 'Oranje'),
(6, 'Paars'),
(7, 'Rood'),
(8, 'Roze'),
(9, 'Wit'),
(10, 'Zilver'),
(11, 'Zwart');

-- --------------------------------------------------------

--
-- Table structure for table `maat_lijst`
--

CREATE TABLE `maat_lijst` (
  `id` int(11) NOT NULL,
  `maat_naam` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maat_lijst`
--

INSERT INTO `maat_lijst` (`id`, `maat_naam`) VALUES
(1, '30x40 cm'),
(2, '60x80 cm'),
(3, '90x120 cm'),
(4, 'A4'),
(5, '30x30x10 cm'),
(6, '10x20x10 cm'),
(7, '30x30x5 cm'),
(8, '10x10 cm (per stuk)');

-- --------------------------------------------------------

--
-- Table structure for table `maker_lijst`
--

CREATE TABLE `maker_lijst` (
  `id` int(11) NOT NULL,
  `maker_bijnaam` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maker_lijst`
--

INSERT INTO `maker_lijst` (`id`, `maker_bijnaam`) VALUES
(1, 'Fruit'),
(2, 'Fish'),
(3, 'Fruit & Fish'),
(4, 'Keys');

-- --------------------------------------------------------

--
-- Table structure for table `product_imgs`
--

CREATE TABLE `product_imgs` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `img_src` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `id` int(11) NOT NULL,
  `naam` varchar(50) DEFAULT NULL,
  `productcode` int(11) DEFAULT NULL,
  `categorie` int(11) DEFAULT NULL,
  `sub_categorie` int(11) DEFAULT NULL,
  `prijs` decimal(5,2) DEFAULT NULL,
  `maat` int(11) DEFAULT NULL,
  `maker` int(11) DEFAULT NULL,
  `gemaakt_op` date DEFAULT NULL,
  `laatst_bewerkt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`id`, `naam`, `productcode`, `categorie`, `sub_categorie`, `prijs`, `maat`, `maker`, `gemaakt_op`, `laatst_bewerkt`) VALUES
(1, 'Bas', 161420241, 1, 1, 22.95, 1, 1, '2023-04-22', '2024-04-24 08:53:57'),
(2, 'Bert', 161420242, 1, 1, 22.95, 1, 1, '2022-03-31', '2024-04-24 08:53:57'),
(3, 'Arnold', 161420243, 1, 1, 22.95, 1, 1, '2022-09-05', '2024-04-24 08:53:57'),
(4, 'Bianca', 161420244, 1, 1, 29.95, 2, 1, '2023-05-16', '2024-04-24 08:53:57'),
(5, 'Chantal', 161420245, 1, 1, 29.95, 2, 1, '2023-08-15', '2024-04-24 08:53:57'),
(6, 'Henk', 161420246, 1, 1, 29.95, 2, 1, '2023-06-29', '2024-04-24 08:53:57'),
(7, 'Dionne', 161420247, 1, 1, 23.95, 1, 1, '2023-03-22', '2024-04-24 08:53:57'),
(8, 'Eduard', 161420248, 1, 1, 23.95, 1, 1, '2022-03-31', '2024-04-24 08:53:57'),
(9, 'Bobby', 161420249, 1, 1, 28.95, 2, 1, '2023-04-22', '2024-04-24 08:53:57'),
(10, 'Femke', 1614202410, 1, 1, 22.95, 1, 1, '2022-10-01', '2024-04-24 08:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `product_kleur`
--

CREATE TABLE `product_kleur` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `kleur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_kleur`
--

INSERT INTO `product_kleur` (`id`, `product_id`, `kleur_id`) VALUES
(1, 1, 1),
(2, 1, 6),
(3, 1, 7),
(4, 1, 9),
(5, 2, 2),
(6, 2, 5),
(7, 2, 7),
(8, 2, 9),
(9, 2, 11),
(10, 3, 1),
(11, 3, 7),
(12, 3, 11),
(13, 4, 1),
(14, 4, 3),
(15, 4, 6),
(16, 4, 7),
(17, 4, 9),
(18, 4, 11),
(19, 5, 1),
(20, 5, 3),
(21, 5, 8),
(22, 5, 11),
(23, 6, 1),
(24, 6, 3),
(25, 6, 9),
(26, 6, 11),
(27, 7, 1),
(28, 7, 3),
(29, 7, 7),
(30, 7, 9),
(31, 7, 11),
(32, 8, 1),
(33, 8, 3),
(34, 8, 9),
(35, 9, 1),
(36, 9, 3),
(37, 9, 8),
(38, 10, 1),
(39, 10, 7),
(40, 10, 9);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categorie_lijst`
--

CREATE TABLE `sub_categorie_lijst` (
  `id` int(11) NOT NULL,
  `sub_cat_naam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_categorie_lijst`
--

INSERT INTO `sub_categorie_lijst` (`id`, `sub_cat_naam`) VALUES
(1, 'Fluid art schilderij'),
(2, 'Fluid art schilderij met tekening'),
(3, 'Zwart-wit tekening'),
(4, 'Tekening met kleur'),
(5, 'Kaart alter'),
(6, 'Kaart extension'),
(7, 'Kist met vakken'),
(8, 'Kist zonder vakken'),
(9, 'Plateau'),
(10, 'Plateau met tekening'),
(11, 'Onderzetters(4)'),
(12, 'Klok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie_lijst`
--
ALTER TABLE `categorie_lijst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kleuren_lijst`
--
ALTER TABLE `kleuren_lijst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maat_lijst`
--
ALTER TABLE `maat_lijst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maker_lijst`
--
ALTER TABLE `maker_lijst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_imgs`
--
ALTER TABLE `product_imgs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie` (`categorie`),
  ADD KEY `sub_categorie` (`sub_categorie`),
  ADD KEY `maat` (`maat`),
  ADD KEY `maker` (`maker`);

--
-- Indexes for table `product_kleur`
--
ALTER TABLE `product_kleur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kleur_id` (`kleur_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `sub_categorie_lijst`
--
ALTER TABLE `sub_categorie_lijst`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie_lijst`
--
ALTER TABLE `categorie_lijst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kleuren_lijst`
--
ALTER TABLE `kleuren_lijst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `maat_lijst`
--
ALTER TABLE `maat_lijst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `maker_lijst`
--
ALTER TABLE `maker_lijst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_imgs`
--
ALTER TABLE `product_imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_kleur`
--
ALTER TABLE `product_kleur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `sub_categorie_lijst`
--
ALTER TABLE `sub_categorie_lijst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_imgs`
--
ALTER TABLE `product_imgs`
  ADD CONSTRAINT `product_imgs_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_info` (`id`);

--
-- Constraints for table `product_info`
--
ALTER TABLE `product_info`
  ADD CONSTRAINT `product_info_ibfk_1` FOREIGN KEY (`categorie`) REFERENCES `categorie_lijst` (`id`),
  ADD CONSTRAINT `product_info_ibfk_2` FOREIGN KEY (`sub_categorie`) REFERENCES `sub_categorie_lijst` (`id`),
  ADD CONSTRAINT `product_info_ibfk_3` FOREIGN KEY (`maat`) REFERENCES `maat_lijst` (`id`),
  ADD CONSTRAINT `product_info_ibfk_4` FOREIGN KEY (`maker`) REFERENCES `maker_lijst` (`id`);

--
-- Constraints for table `product_kleur`
--
ALTER TABLE `product_kleur`
  ADD CONSTRAINT `product_kleur_ibfk_1` FOREIGN KEY (`kleur_id`) REFERENCES `kleuren_lijst` (`id`),
  ADD CONSTRAINT `product_kleur_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
