-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Gegenereerd op: 22 apr 2024 om 15:46
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
-- Database: `webdev_base`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

-- CREATE TABLE `products` (
--   `product_id` int(10) UNSIGNED NOT NULL,
--   `product_name` varchar(255) NOT NULL,
--   `product_description` text NOT NULL,
--   `product_photo` varchar(255) NOT NULL COMMENT 'overviewphoto',
--   `product_price` decimal(6,2) NOT NULL,
--   `last_edited` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

-- INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_photo`, `product_price`, `last_edited`) VALUES
-- (1, 'Blauwe trui', 'Comfortabele blauwe trui van 100% katoen. Perfect voor casual wear.', 'https://www.pexels.com/search/sweater/', '19.95', '2024-04-22 13:16:26'),
-- (2, 'Rode gympen', 'Stoere rode gympen met vetersluiting. Ideaal voor sport en vrije tijd.', 'https://www.pexels.com/photo/close-up-photo-of-sneakers-2529147/', '49.95', '2024-04-22 13:16:26'),
-- (3, 'Zwarte smartphone', 'De nieuwste smartphone met krachtige processor en helder display.', 'https://www.pexels.com/photo/black-android-smartphone-on-table-719399/', '299.00', '2024-04-22 13:16:26'),
-- (4, 'Boek over programmeren', 'Leer de basisprincipes van programmeren met dit handige boek.', 'https://www.bol.com/nl/nl/l/nederlandse-boeken-over-programmeren/40409/8293/', '24.95', '2024-04-22 13:16:26'),
-- (5, 'Draadloze oordopjes', 'Luister overal naar je favoriete muziek met deze draadloze oordopjes.', 'https://www.pexels.com/search/earbuds/', '39.95', '2024-04-22 13:16:26'),
-- (6, 'Plantenpot', 'Mooie plantenpot voor al je kamerplanten. Gemaakt van keramiek.', 'https://www.pexels.com/search/plant%20pot/', '14.95', '2024-04-22 13:16:26'),
-- (7, 'Kopje thee', 'Geniet van een kopje thee uit dit stijlvolle kopje.', 'https://www.pexels.com/nl-nl/zoeken/thee/', '5.95', '2024-04-22 13:16:26'),
-- (8, 'Bureaustoel', 'Ergonomische bureaustoel voor comfortabel werken.', 'https://www.bol.com/nl/nl/l/bureaustoelen/14252/', '99.00', '2024-04-22 13:16:26'),
-- (9, 'Fietslamp', 'Blijf veilig op de fiets met deze heldere fietslamp.', 'https://www.pexels.com/photo/light-streaks-of-motor-vehicles-on-the-road-14864963/', '12.95', '2024-04-22 13:16:26'),
-- (10, 'Waterfles', 'Blijf gehydrateerd met deze handige waterfles.', 'https://www.pexels.com/video/sea-water-5114856/', '7.95', '2024-04-22 13:16:26');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `products`
--
-- ALTER TABLE `products`
--   ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `products`
--
-- ALTER TABLE `products`
--   MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
-- COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
