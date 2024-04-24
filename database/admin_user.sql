-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Gegenereerd op: 22 apr 2024 om 16:00
-- Serverversie: 5.7.34
-- PHP-versie: 7.4.21

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- START TRANSACTION;
-- SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdev_webshop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `admin_user`
--

-- CREATE TABLE `admin_user` (
--   `admin_user_id` int(11) UNSIGNED NOT NULL,
--   `email` varchar(255) NOT NULL,
--   `password` varchar(255) NOT NULL,
--   `password_token` varchar(255) DEFAULT NULL,
--   `password_changed` timestamp NULL DEFAULT NULL,
--   `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `admin_user`
--

-- INSERT INTO `admin_user` (`admin_user_id`, `email`, `password`, `password_token`, `password_changed`, `datetime`) VALUES
-- (1, 'test@test.nl', '$2y$10$3eJXM2NBYpOH8opTNAHVye/uRtxMhWNLS0NX9qpp1WqygPBnX4vjS', '', '2021-02-18 16:06:05', '2021-02-17 15:32:17'),
-- (2, 'admin@ikbengehackt.nl', '$2y$10$3eJXM2NBYpOH8opTNAHVye/uRtxMhWNLS0NX9qpp1WqygPBnX4vjS', NULL, NULL, '2024-04-22 13:59:42'),
-- (3, 'officemanager@bedrijf.nl', '$2y$10$3eJXM2NBYpOH8opTNAHVye/uRtxMhWNLS0NX9qpp1WqygPBnX4vjS', NULL, NULL, '2024-04-22 14:00:11');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `admin_user`
--
-- ALTER TABLE `admin_user`
--   ADD PRIMARY KEY (`admin_user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `admin_user`
--
-- ALTER TABLE `admin_user`
--   MODIFY `admin_user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
-- COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
