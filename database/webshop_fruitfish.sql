-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 mei 2024 om 14:40
-- Serverversie: 10.4.28-MariaDB
-- PHP-versie: 8.2.4

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
-- Tabelstructuur voor tabel `categorie_lijst`
--

CREATE TABLE `categorie_lijst` (
  `id` int(11) NOT NULL,
  `cat_naam` varchar(30) DEFAULT NULL,
  `cat_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `categorie_lijst`
--

INSERT INTO `categorie_lijst` (`id`, `cat_naam`, `cat_count`) VALUES
(1, 'Schilderijen', 19),
(2, 'Tekeningen', 0),
(3, 'Dozen', 0),
(4, 'Accesoires', 0),
(5, 'Kaarten', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kleuren_lijst`
--

CREATE TABLE `kleuren_lijst` (
  `id` int(11) NOT NULL,
  `kleur_naam` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `kleuren_lijst`
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
-- Tabelstructuur voor tabel `maat_lijst`
--

CREATE TABLE `maat_lijst` (
  `id` int(11) NOT NULL,
  `maat_naam` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `maat_lijst`
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
-- Tabelstructuur voor tabel `maker_lijst`
--

CREATE TABLE `maker_lijst` (
  `id` int(11) NOT NULL,
  `maker_bijnaam` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `maker_lijst`
--

INSERT INTO `maker_lijst` (`id`, `maker_bijnaam`) VALUES
(1, 'Fruit'),
(2, 'Fish'),
(3, 'Fruit & Fish'),
(4, 'Keys');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_imgs`
--

CREATE TABLE `product_imgs` (
  `id` int(11) NOT NULL,
  `productcode` int(11) DEFAULT NULL,
  `img_src` varchar(255) DEFAULT NULL,
  `main_img` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `product_imgs`
--

INSERT INTO `product_imgs` (`id`, `productcode`, `img_src`, `main_img`) VALUES
(1, 161420241, 'schilderij_een.png', 1),
(2, 161420241, 'schilderij_een2.png', 0),
(3, 161420241, 'schilderij_een3.png', 0),
(4, 161420242, 'schilderij_twee.png', 1),
(5, 161420242, 'schilderij_twee2.png', 0),
(6, 161420242, 'schilderij_twee3.png', 0),
(7, 161420243, 'schilderij_drie.png', 1),
(8, 161420243, 'schilderij_drie2.png', 0),
(9, 161420243, 'schilderij_drie3.png', 0),
(10, 161420244, 'schilderij_vier.png', 1),
(11, 161420244, 'schilderij_vier2.png', 0),
(12, 161420244, 'schilderij_vier3.png', 0),
(13, 161420245, 'schilderij_vijf.png', 1),
(14, 161420245, 'schilderij_vijf2.png', 0),
(15, 161420245, 'schilderij_vijf3.png', 0),
(16, 161420246, 'schilderij_zes.png', 1),
(17, 161420246, 'schilderij_zes2.png', 0),
(18, 161420246, 'schilderij_zes3.png', 0),
(19, 161420247, 'schilderij_zeven.png', 1),
(20, 161420247, 'schilderij_zeven2.png', 0),
(21, 161420247, 'schilderij_zeven3.png', 0),
(22, 161420248, 'schilderij_acht.png', 1),
(23, 161420248, 'schilderij_acht2.png', 0),
(24, 161420248, 'schilderij_acht3.png', 0),
(25, 161420249, 'schilderij_negen.png', 1),
(26, 161420249, 'schilderij_negen2.png', 0),
(27, 161420249, 'schilderij_negen3.png', 0),
(28, 1614202410, 'schilderij_tien.png', 1),
(29, 1614202410, 'schilderij_tien2.png', 0),
(30, 1614202410, 'schilderij_tien3.png', 0),
(43, 1614202411, 'schilderij_elf.png', 1),
(44, 1614202411, 'schilderij_elf2.png', 0),
(45, 1614202411, 'schilderij_elf3.png', 0),
(46, 1614202412, 'schilderij_twaalf.png', 1),
(47, 1614202412, 'schilderij_twaalf2.png', 0),
(48, 1614202412, 'schilderij_twaalf3.png', 0),
(49, 1614202413, 'schilderij_elf.png', 1),
(50, 1614202413, 'schilderij_elf2.png', 0),
(52, 1614202414, 'schilderij_dertien.png', 1),
(53, 1614202414, 'schilderij_dertien2.png', 0),
(54, 1614202414, 'schilderij_dertien3.png', 0),
(55, 1614202415, 'schilderij_veertien.png', 1),
(56, 1614202415, 'schilderij_veertien2.png', 0),
(57, 1614202415, 'schilderij_veertien3.png', 0),
(58, 1614202416, 'schilderij_vijftien.png', 1),
(59, 1614202416, 'schilderij_vijftien2.png', 0),
(60, 1614202416, 'schilderij_vijftien3.png', 0),
(61, 1614202417, 'schilderij_zestien.png', 1),
(62, 1614202417, 'schilderij_zestien2.png', 0),
(63, 1614202417, 'schilderij_zestien3.png', 0),
(64, 1614202418, 'schilderij_zeventien.png', 1),
(65, 1614202418, 'schilderij_zeventien2.png', 0),
(66, 1614202418, 'schilderij_zeventien3.png', 0),
(69, 1614202413, 'schilderij_elf3.png', 0),
(70, 1614202419, '', 1),
(71, 1614202419, '', 0),
(72, 1614202419, '', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_info`
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
  `laatst_bewerkt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `actief` tinyint(1) NOT NULL DEFAULT 1,
  `opmerkingen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `product_info`
--

INSERT INTO `product_info` (`id`, `naam`, `productcode`, `categorie`, `sub_categorie`, `prijs`, `maat`, `maker`, `gemaakt_op`, `laatst_bewerkt`, `actief`, `opmerkingen`) VALUES
(1, 'Bas', 161420241, 1, 1, 22.95, 1, 1, '2023-04-22', '2024-04-24 08:53:57', 1, ''),
(2, 'Bert', 161420242, 1, 1, 22.95, 1, 1, '2022-03-31', '2024-04-24 08:53:57', 1, ''),
(3, 'Arnold', 161420243, 1, 1, 22.95, 1, 1, '2022-09-05', '2024-04-24 08:53:57', 1, ''),
(4, 'Bianca', 161420244, 1, 1, 29.95, 2, 1, '2023-05-16', '2024-04-24 08:53:57', 1, ''),
(5, 'Chantal', 161420245, 1, 1, 29.95, 2, 1, '2023-08-15', '2024-04-24 08:53:57', 1, ''),
(6, 'Henk', 161420246, 1, 1, 29.95, 2, 1, '2023-06-29', '2024-04-24 08:53:57', 1, ''),
(7, 'Dionne', 161420247, 1, 1, 23.95, 1, 1, '2023-03-22', '2024-04-24 08:53:57', 1, ''),
(8, 'Eduard', 161420248, 1, 1, 23.95, 1, 1, '2022-03-31', '2024-04-24 08:53:57', 1, ''),
(9, 'Bobby', 161420249, 1, 1, 28.95, 2, 1, '2023-04-22', '2024-04-24 08:53:57', 1, ''),
(10, 'Femke', 1614202410, 1, 1, 22.95, 1, 1, '2022-10-01', '2024-04-24 08:53:57', 1, ''),
(15, 'Gerard', 1614202411, 1, 1, 39.99, 3, 1, '2023-03-28', '2024-05-17 07:58:16', 1, ''),
(16, 'Helen', 1614202412, 1, 1, 23.95, 1, 1, '2023-08-11', '2024-05-17 09:22:30', 1, ''),
(17, 'gerard-extra', 1614202413, 2, 2, 17.45, 4, 1, '2024-05-09', '2024-05-22 10:00:55', 1, 'dit is voor testen '),
(18, 'Iris', 1614202414, 1, 1, 20.95, 1, 1, '2023-04-21', '2024-05-21 11:36:32', 1, ''),
(19, 'Jim', 1614202415, 1, 2, 29.99, 1, 1, '2023-05-24', '2024-05-21 11:43:01', 1, ''),
(20, 'Kevin', 1614202416, 1, 1, 24.95, 1, 1, '2023-03-31', '2024-05-21 11:47:12', 1, ''),
(21, 'Lotte', 1614202417, 1, 1, 24.95, 1, 1, '2023-08-12', '2024-05-21 11:52:24', 1, ''),
(22, 'Max', 1614202418, 1, 1, 29.95, 2, 1, '2023-07-06', '2024-05-21 11:55:39', 1, ''),
(23, '', 1614202419, 1, 1, 0.00, 1, 1, '0000-00-00', '2024-05-22 12:18:58', 1, 'voor testen');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_kleur`
--

CREATE TABLE `product_kleur` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `kleur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `product_kleur`
--

INSERT INTO `product_kleur` (`id`, `product_id`, `kleur_id`) VALUES
(1, 161420241, 1),
(2, 161420241, 6),
(3, 161420241, 7),
(4, 161420241, 9),
(5, 161420242, 2),
(6, 161420242, 5),
(7, 161420242, 7),
(8, 161420242, 9),
(9, 161420242, 11),
(10, 161420243, 1),
(11, 161420243, 7),
(12, 161420243, 11),
(13, 161420244, 1),
(14, 161420244, 3),
(15, 161420244, 6),
(16, 161420244, 7),
(17, 161420244, 9),
(18, 161420244, 11),
(19, 161420245, 1),
(20, 161420245, 3),
(21, 161420245, 8),
(22, 161420245, 11),
(23, 161420246, 1),
(24, 161420246, 3),
(25, 161420246, 9),
(26, 161420246, 11),
(27, 161420247, 1),
(28, 161420247, 3),
(29, 161420247, 7),
(30, 161420247, 9),
(31, 161420247, 11),
(32, 161420248, 1),
(33, 161420248, 3),
(34, 161420248, 9),
(35, 161420249, 1),
(36, 161420249, 3),
(37, 161420249, 8),
(38, 1614202410, 1),
(39, 1614202410, 7),
(40, 1614202410, 9),
(58, 1614202411, 1),
(59, 1614202411, 6),
(60, 1614202411, 7),
(61, 1614202411, 9),
(62, 1614202411, 11),
(63, 1614202412, 1),
(64, 1614202412, 8),
(65, 1614202412, 9),
(66, 1614202412, 11),
(67, 1614202413, 1),
(68, 1614202413, 6),
(69, 1614202413, 7),
(70, 1614202413, 9),
(71, 1614202413, 11),
(72, 1614202414, 1),
(73, 1614202414, 9),
(74, 1614202415, 2),
(75, 1614202415, 3),
(76, 1614202415, 7),
(77, 1614202415, 11),
(78, 1614202416, 1),
(79, 1614202416, 6),
(80, 1614202416, 7),
(81, 1614202416, 9),
(82, 1614202416, 11),
(83, 1614202417, 1),
(84, 1614202417, 2),
(85, 1614202417, 4),
(86, 1614202417, 8),
(87, 1614202417, 11),
(88, 1614202418, 1),
(89, 1614202418, 9),
(90, 1614202418, 11);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sub_categorie_lijst`
--

CREATE TABLE `sub_categorie_lijst` (
  `id` int(11) NOT NULL,
  `sub_cat_naam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `sub_categorie_lijst`
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
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `categorie_lijst`
--
ALTER TABLE `categorie_lijst`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `kleuren_lijst`
--
ALTER TABLE `kleuren_lijst`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `maat_lijst`
--
ALTER TABLE `maat_lijst`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `maker_lijst`
--
ALTER TABLE `maker_lijst`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `product_imgs`
--
ALTER TABLE `product_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie` (`categorie`),
  ADD KEY `sub_categorie` (`sub_categorie`),
  ADD KEY `maat` (`maat`),
  ADD KEY `maker` (`maker`);

--
-- Indexen voor tabel `product_kleur`
--
ALTER TABLE `product_kleur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kleur_id` (`kleur_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexen voor tabel `sub_categorie_lijst`
--
ALTER TABLE `sub_categorie_lijst`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `categorie_lijst`
--
ALTER TABLE `categorie_lijst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `kleuren_lijst`
--
ALTER TABLE `kleuren_lijst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `maat_lijst`
--
ALTER TABLE `maat_lijst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `maker_lijst`
--
ALTER TABLE `maker_lijst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `product_imgs`
--
ALTER TABLE `product_imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT voor een tabel `product_info`
--
ALTER TABLE `product_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT voor een tabel `product_kleur`
--
ALTER TABLE `product_kleur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT voor een tabel `sub_categorie_lijst`
--
ALTER TABLE `sub_categorie_lijst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `product_info`
--
ALTER TABLE `product_info`
  ADD CONSTRAINT `product_info_ibfk_1` FOREIGN KEY (`categorie`) REFERENCES `categorie_lijst` (`id`),
  ADD CONSTRAINT `product_info_ibfk_2` FOREIGN KEY (`sub_categorie`) REFERENCES `sub_categorie_lijst` (`id`),
  ADD CONSTRAINT `product_info_ibfk_3` FOREIGN KEY (`maat`) REFERENCES `maat_lijst` (`id`),
  ADD CONSTRAINT `product_info_ibfk_4` FOREIGN KEY (`maker`) REFERENCES `maker_lijst` (`id`);

--
-- Beperkingen voor tabel `product_kleur`
--
ALTER TABLE `product_kleur`
  ADD CONSTRAINT `product_kleur_ibfk_1` FOREIGN KEY (`kleur_id`) REFERENCES `kleuren_lijst` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
