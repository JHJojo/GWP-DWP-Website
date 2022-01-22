-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Jan 2022 um 01:01
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `gk-db`
CREATE SCHEMA IF NOT EXISTS `gk-db` DEFAULT CHARACTER SET utf8 ;
USE `gk-db` ;
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `accounts`
--

CREATE TABLE `accounts` (
  `accountID` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `firstname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(300) CHARACTER SET utf8 NOT NULL,
  `passwordHash` varchar(255) CHARACTER SET utf8 NOT NULL,
  `birthday` date NOT NULL,
  `mobile` varchar(12) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `rank` varchar(255) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `accounts`
--

INSERT INTO `accounts` (`accountID`, `createdAt`, `updatedAt`, `firstname`, `lastname`, `email`, `passwordHash`, `birthday`, `mobile`, `phone`, `rank`, `gender`) VALUES
(1, '2022-01-21 23:12:19', NULL, 'Root', 'Root', 'root@root.de', '$2y$10$WWdCd9h2JvYyfkstHCAsP.D9xRfUcaIkNosNG4ZPVARJRQlvECU.m', '0001-01-01', '', NULL, 'admin', 'Herr');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `addresses`
--

CREATE TABLE `addresses` (
  `addressID` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `country` varchar(50) CHARACTER SET utf8 NOT NULL,
  `city` varchar(50) CHARACTER SET utf8 NOT NULL,
  `street` varchar(50) CHARACTER SET utf8 NOT NULL,
  `houseNumber` int(5) NOT NULL,
  `zip` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `addresses`
--

INSERT INTO `addresses` (`addressID`, `createdAt`, `updatedAt`, `country`, `city`, `street`, `houseNumber`, `zip`) VALUES
(1, '2022-01-21 23:12:19', NULL, 'Germany', 'Root', 'Root', 1, '00000');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cats`
--

CREATE TABLE `cats` (
  `catID` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `description` varchar(50) CHARACTER SET utf8 NOT NULL,
  `type` enum('case','motherboard','cpu','gpu','ram','storagedevice','cooling','psu','monitor','mouse','operatingsystem','keyboard') CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `cats`
--

INSERT INTO `cats` (`catID`, `createdAt`, `updatedAt`, `description`, `type`) VALUES
(1, '2021-11-24 17:59:30', NULL, 'Intel', 'cpu'),
(2, '2021-12-04 23:42:31', NULL, 'AMD', 'cpu'),
(3, '2021-12-04 23:41:30', NULL, 'be quiet!', 'case'),
(4, '2021-12-04 23:41:30', NULL, 'Jonsbo', 'case'),
(5, '2021-12-04 23:41:30', NULL, 'Fractal Design', 'case'),
(6, '2021-12-04 23:41:30', NULL, 'Lian Li', 'case'),
(7, '2021-12-04 23:37:12', NULL, 'Corsair', 'case'),
(8, '2021-12-05 17:49:38', NULL, 'bq quiet!', 'psu'),
(9, '2021-12-05 17:49:38', NULL, 'Corsair', 'psu'),
(10, '2021-12-05 17:49:43', NULL, 'LC-Power', 'psu'),
(11, '2021-12-05 15:59:20', NULL, 'AMD', 'gpu'),
(12, '2021-12-05 15:59:20', NULL, 'NVIDIA', 'gpu'),
(13, '2021-12-05 16:21:36', NULL, 'ASRock', 'motherboard'),
(14, '2021-12-05 16:21:36', NULL, 'MSI', 'motherboard'),
(15, '2021-12-05 16:21:36', NULL, 'Gigabyte', 'motherboard'),
(16, '2021-12-05 16:47:52', NULL, 'Microsoft', 'operatingsystem'),
(17, '2021-12-05 17:07:14', NULL, 'Logitech', 'mouse'),
(18, '2021-12-05 17:07:14', NULL, 'Logitech', 'keyboard'),
(19, '2021-12-05 17:07:14', NULL, 'Sharkoon', 'keyboard'),
(20, '2021-12-05 17:07:14', NULL, 'Sharkoon', 'mouse'),
(21, '2021-12-05 18:06:19', NULL, 'Corsair', 'ram'),
(22, '2021-12-05 17:26:28', NULL, 'MSI', 'monitor'),
(23, '2021-12-05 17:26:28', NULL, 'Acer', 'monitor'),
(24, '2021-12-05 18:14:37', NULL, 'be quiet!', 'cooling'),
(25, '2021-12-05 18:14:37', NULL, 'Noctua', 'cooling'),
(26, '2021-12-05 18:23:48', NULL, 'Seagate', 'storagedevice'),
(27, '2021-12-05 18:23:48', NULL, 'Samsung', 'storagedevice'),
(28, '2021-12-05 18:23:48', NULL, 'Western Digital', 'storagedevice'),
(29, '2021-12-05 18:23:48', NULL, 'Crucial', 'storagedevice');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `orderitem`
--

CREATE TABLE `orderitem` (
  `itemID` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `actPrice` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `shipDate` date DEFAULT NULL,
  `totalprice` double NOT NULL,
  `accountID` int(11) NOT NULL,
  `addressID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `productcats`
--

CREATE TABLE `productcats` (
  `productCatID` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `description` varchar(50) CHARACTER SET utf8 NOT NULL,
  `catID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `productcats`
--

INSERT INTO `productcats` (`productCatID`, `createdAt`, `updatedAt`, `description`, `catID`) VALUES
(1, '2021-11-24 18:06:40', NULL, 'Core i9', 1),
(2, '2021-12-04 23:49:17', NULL, 'Big-Tower', 3),
(3, '2021-12-04 23:49:17', NULL, 'Big-Tower', 4),
(4, '2021-12-04 23:49:17', NULL, 'Big-Tower', 5),
(5, '2021-12-04 23:49:17', NULL, 'Big-Tower', 6),
(6, '2021-12-04 23:49:17', NULL, 'Big-Tower', 7),
(7, '2021-12-05 15:38:05', NULL, 'Core i5', 1),
(8, '2021-12-05 15:38:05', NULL, 'Core i7', 1),
(9, '2021-12-05 15:46:42', NULL, 'Ryzen 9', 2),
(10, '2021-12-05 15:46:42', NULL, 'Ryzen 7', 2),
(11, '2021-12-05 15:46:42', NULL, 'Ryzen 5', 2),
(12, '2021-12-05 16:15:22', NULL, 'GeForce RTX 3070', 12),
(13, '2021-12-05 16:15:22', NULL, 'GeForce RTX 2060 SUPER', 12),
(14, '2021-12-05 16:15:22', NULL, 'GeForce GTX 1650', 12),
(15, '2021-12-05 16:15:22', NULL, 'GeForce GTX 1050 Ti', 12),
(16, '2021-12-05 16:15:22', NULL, 'GeForce GTX 1660 SUPER', 12),
(17, '2021-12-05 16:17:26', NULL, 'Radeon RX 6700 XT', 11),
(18, '2021-12-05 16:17:26', NULL, 'Radeon RX 6600 XT', 11),
(19, '2021-12-05 16:17:26', NULL, 'Radeon RX 6900 XT', 11),
(20, '2021-12-05 16:42:28', NULL, 'Z690', 15),
(21, '2021-12-05 16:42:28', NULL, 'B550', 15),
(22, '2021-12-05 16:42:28', NULL, 'Z590', 14),
(23, '2021-12-05 16:42:28', NULL, 'B450', 14),
(24, '2021-12-05 16:42:28', NULL, 'B560M', 13),
(25, '2021-12-05 16:49:19', NULL, 'Windows 10', 16),
(26, '2021-12-05 16:49:19', NULL, 'Windows 11', 16),
(27, '2021-12-05 16:49:19', NULL, 'Windows Server 2019', 16),
(28, '2021-12-05 17:19:01', NULL, 'wired', 17),
(29, '2021-12-05 17:19:01', NULL, 'wireless', 17),
(30, '2021-12-05 17:19:01', NULL, 'wired', 18),
(31, '2021-12-05 17:19:01', NULL, 'wireless', 18),
(32, '2021-12-05 17:19:01', NULL, 'wired', 19),
(33, '2021-12-05 17:19:01', NULL, 'wired', 20),
(34, '2021-12-05 17:44:04', NULL, '27 Zoll', 22),
(35, '2021-12-05 17:44:04', NULL, '24 Zoll', 22),
(36, '2021-12-05 17:44:04', NULL, '27 Zoll', 23),
(37, '2021-12-05 17:44:04', NULL, '24 Zoll', 23),
(38, '2021-12-05 18:02:19', NULL, '350 Watt', 10),
(39, '2021-12-05 18:02:19', NULL, '1800 Watt', 10),
(40, '2021-12-05 18:02:19', NULL, '700 Watt', 8),
(41, '2021-12-05 18:02:19', NULL, '1200 Watt', 8),
(42, '2021-12-05 18:02:19', NULL, '1200 Watt', 9),
(43, '2021-12-05 18:02:19', NULL, '750 Watt', 9),
(44, '2021-12-05 18:08:01', NULL, '3200 MHZ', 21),
(45, '2021-12-05 18:08:01', NULL, '3600 MHZ', 21),
(46, '2021-12-05 18:08:01', NULL, '4000 MHZ', 21),
(47, '2021-12-05 18:16:27', NULL, 'air', 24),
(48, '2021-12-05 18:16:27', NULL, 'water', 24),
(49, '2021-12-05 18:16:27', NULL, 'air', 25),
(50, '2021-12-05 18:26:00', NULL, 'HDD', 26),
(51, '2021-12-05 18:26:00', NULL, 'HDD', 28),
(52, '2021-12-05 18:26:00', NULL, 'SSD', 27),
(53, '2021-12-05 18:26:00', NULL, 'SSD', 29),
(54, '2021-12-05 18:26:00', NULL, 'M.2', 27),
(55, '2021-12-05 18:26:00', NULL, 'M.2', 29);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `description` varchar(200) CHARACTER SET utf8 NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `info` text CHARACTER SET utf8 NOT NULL,
  `productCatID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `products`
--

INSERT INTO `products` (`productID`, `createdAt`, `updatedAt`, `description`, `price`, `photo`, `info`, `productCatID`) VALUES
(1, '2021-11-24 18:08:05', NULL, 'Intel Core i9 11900KF 8x 3.50GHz So.1200 BOX\r\n', 469.77, 'https://i.imgur.com/mgPJTmp.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 1),
(2, '2021-12-05 16:44:59', NULL, 'Gigabyte Z690 UD DDR4 S1700/DDR4/ATX retail', 179, 'https://i.imgur.com/jvzUZV3.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 20),
(3, '2021-12-05 16:44:59', NULL, 'Gigabyte Z690 AORUS ELITE DDR4 S1700/DDR4/ATX retail', 253.14, 'https://i.imgur.com/2ZsKBkN.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 20),
(4, '2021-12-05 16:44:59', NULL, 'Gigabyte B550 AORUS PRO AC AM4 B550/DDR4/ATX', 142, 'https://i.imgur.com/9dddU5f.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 21),
(5, '2021-12-05 16:44:59', '2021-12-05 16:55:01', 'Gigabyte B550 Aorus Master AMD B550 So.AM4 Dual Channel DDR4 ATX Retail', 250.79, 'https://i.imgur.com/o1yxZwv.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,  consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,  quae sit beatae? Totam architecto voluptatum maxime.', 21),
(6, '2021-12-05 16:44:59', NULL, 'MSI MAG Z590 TOMAHAWK WIFI ATX - LGA1200-Sockel - Z590', 208.23, 'https://i.imgur.com/YXJicg3.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 22),
(7, '2021-12-05 16:44:59', NULL, 'MSI MPG Z590 Gaming Plus ATX Intel S1200', 191.52, 'https://i.imgur.com/dDFk2VD.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 22),
(8, '2021-12-05 16:44:59', NULL, 'MSI B450 Tomahawk Max II, So.AM4, ATX (7C02-014R)', 71.87, 'https://i.imgur.com/mHV3zI2.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 23),
(9, '2021-12-05 16:44:59', NULL, 'MSI B450 Gaming Pro Carbon Max WIFI AMD B450 So.AM4 Dual Channel DDR4 ATX Retail', 118.97, 'https://i.imgur.com/Ud7WZvR.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 23),
(10, '2021-12-05 16:44:59', NULL, 'ASRock B560M Pro4, So1200, µATX (90-MXBEL0-A0UAYZ)', 135.89, 'https://i.imgur.com/onsCPBy.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 24),
(11, '2021-12-05 16:44:59', NULL, 'ASRock B560M STEEL LEGEND MATX Intel S1200 (90-MXBFA0-A0UAYZ)', 116.87, 'https://i.imgur.com/Odb3VfX.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 24),
(12, '2021-12-05 16:44:59', NULL, 'ASROCK B560M-HDV Intel S1200 MATX retail', 81.07, 'https://i.imgur.com/wZ4FAwF.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 24),
(13, '2021-12-05 00:07:29', NULL, 'Corsair Corsair Obsidian 1000D mit Sichtfenster Big Tower ohne Netzteil schwarz', 568.97, 'https://i.imgur.com/Yt8R6zJ.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 6),
(14, '2021-12-05 00:07:29', NULL, 'Corsair Graphite 780T mit Sichtfenster Big Tower ohne Netzteil weiss', 196.87, 'https://i.imgur.com/nbwFnvM.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 6),
(15, '2021-12-05 00:07:29', NULL, 'be quiet! Dark Base Pro 900 Rev. 2 gedämmt mit Sichtfenster Big Tower ohne Netzteil schwarz', 241.54, 'https://i.imgur.com/xgX534u.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 2),
(16, '2021-12-05 00:07:29', NULL, 'be quiet! Dark Base 900 gedämmt Big Tower ohne Netzteil schwarz/orange', 178.9, 'https://i.imgur.com/cocR3vA.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 2),
(17, '2021-12-05 00:20:24', NULL, 'Fractal Design Define 7 XL, mit Sichtfenster, ohne Netzeil schwarz', 215.46, 'https://i.imgur.com/qYqJThB.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 4),
(18, '2021-12-05 00:20:24', NULL, 'Fractal Design Meshify 2 XL TG Dark Tint, Big Tower, mit Sichtfenster, ohne Netzteil, schwarz', 206.97, 'https://i.imgur.com/fsmOM26.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 4),
(19, '2021-12-05 00:20:24', NULL, 'Jonsbo MOD5 Big-Tower Showcase, Tempered Glass - weiß', 329.87, 'https://i.imgur.com/8ijYtJa.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 3),
(20, '2021-12-05 00:20:24', NULL, 'Jonsbo MOD5 Big-Tower Showcase Tempered Glass - schwarz - Tower - ATX', 328.95, 'https://i.imgur.com/rNZ1SVL.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 3),
(21, '2021-12-05 00:20:24', NULL, 'Lian Li Odyssey X Big-Tower - schwarz', 459.87, 'https://i.imgur.com/dH9IXbA.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 5),
(22, '2021-12-05 00:20:24', NULL, 'Lian Li Odyssey X Big-Tower - silber', 459.87, 'https://i.imgur.com/YHb12kP.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 5),
(23, '2021-12-05 15:45:12', NULL, 'Intel Core i9 12900K 16 (8+8) 3.20GHz So.1700 WOF', 669.87, 'https://i.imgur.com/oszDaGO.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 1),
(24, '2021-12-05 15:45:12', NULL, 'Intel Core i5 10400F 6x 2.90GHz So.1200 BOX', 137, 'https://i.imgur.com/GtzPreM.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 7),
(25, '2021-12-05 15:45:12', NULL, 'Intel Core i5 11400F 6x 2.60GHz So.1200 BOX', 158, 'https://i.imgur.com/jsL7id6.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 7),
(26, '2021-12-05 15:45:12', NULL, 'Intel Core i7 11700F 8x 2.50GHz So.1200 BOX', 462.36, 'https://i.imgur.com/JkvMlDB.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 8),
(27, '2021-12-05 15:45:12', NULL, 'Intel Core i7 10700KF 8x 3.80GHz So.1200 WOF', 314.87, 'https://i.imgur.com/4I7xWfy.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 8),
(28, '2021-12-05 15:55:12', NULL, 'AMD Ryzen 9 5950X 16x 3.40GHz So.AM4 WOF', 715, 'https://i.imgur.com/j8RWIda.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 9),
(29, '2021-12-05 15:55:12', NULL, 'AMD Ryzen 9 3950X 16x 3.50GHz So.AM4 WOF', 629, 'https://i.imgur.com/NgKVWtY.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 9),
(30, '2021-12-05 15:55:12', NULL, 'AMD Ryzen 7 5800X 8x 3.80GHz So.AM4 WOF', 343, 'https://i.imgur.com/YxA9afM.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 10),
(31, '2021-12-05 15:55:12', NULL, 'AMD Ryzen 7 3800X 8x 3.90GHz So.AM4 BOX', 282, 'https://i.imgur.com/568R4Rz.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 10),
(32, '2021-12-05 15:55:12', NULL, 'AMD Ryzen 5 5600X 6x 3.70GHz So.AM4 BOX', 289, 'https://i.imgur.com/bx1XzFZ.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 11),
(33, '2021-12-05 15:55:12', NULL, 'AMD Ryzen 5 5600G 6x 3.90GHz So.AM4 BOX', 265, 'https://i.imgur.com/ZwHpMzV.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 11),
(34, '2021-12-05 16:18:48', NULL, '8GB KFA2 GeForce RTX 3070 1-Click OC LHR GDDR6 DP/HDMI (bulk Verpackung)', 979, 'https://i.imgur.com/kwA3gmy.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 12),
(35, '2021-12-05 16:18:48', NULL, '8GB Palit GeForce RTX 2060 SUPER Dual Aktiv PCIe 3.0 x16 (Retail)', 749, 'https://i.imgur.com/69HZM8d.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 13),
(36, '2021-12-05 16:18:48', NULL, '4GB MSI GeForce GTX 1650 VENTUS XS 4G OC Aktiv PCIe 3.0 x16 (Retail)', 349, 'https://i.imgur.com/lw3pxRM.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 14),
(37, '2021-12-05 16:18:48', NULL, '4GB MSI GeForce GTX 1050 Ti AERO ITX OCV1 Aktiv PCIe 3.0 x16 (Retail)', 319, 'https://i.imgur.com/Dkxk9yk.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 15),
(38, '2021-12-05 16:18:48', NULL, '6GB MSI GeForce GTX 1660 SUPER Gaming X, GDDR6, HDMI, 3x DP (V375-282R)', 579, 'https://i.imgur.com/ktBY1I1.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 16),
(39, '2021-12-05 16:18:48', '2021-12-05 16:54:57', '12GB PowerColor Radeon RX 6700 XT Red Devil 12GB GDDR6 HDMI 3xDP', 948, 'https://i.imgur.com/6ecCVbb.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,  consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,  quae sit beatae? Totam architecto voluptatum maxime.', 17),
(40, '2021-12-05 16:18:48', NULL, '8GB PowerColor Radeon RX 6600 XT Hellhound OC 8G (Retail)', 649, 'https://i.imgur.com/V9zbD3a.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 18),
(41, '2021-12-05 16:18:48', '2021-12-05 18:35:41', '8GB PowerColor Radeon RX 6600 XT Red Devil 8G OC (Retail)', 639, 'https://i.imgur.com/UzJLnwW.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,  consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,  quae sit beatae? Totam architecto voluptatum maxime.', 18),
(42, '2021-12-05 16:18:48', '2021-12-05 16:54:55', '16GB XFX Radeon RX 6900 XT MERC319 GAMING BLACK Limited Edition (Retail)', 1679, 'https://i.imgur.com/GG1Cv2E.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,  consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,  quae sit beatae? Totam architecto voluptatum maxime.', 19),
(43, '2021-12-05 16:18:48', NULL, '12GB XFX Radeon RX 6700 XT QICK319 DDR6 Black Gaming 3xDP (Retail)', 968, 'https://i.imgur.com/BAa6cIA.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 17),
(44, '2021-12-05 16:18:48', NULL, '16GB XFX Radeon RX 6900 XT SPEEDSTER MERC ZERO x EKWB Waterblock Limited Version (Retail)', 1769, 'https://i.imgur.com/ZwSAo66.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 19),
(45, '2021-12-05 16:54:32', NULL, 'Microsoft Windows 10 Home 64 Bit Deutsch DSP/SB', 89, 'https://i.imgur.com/wKRbnVA.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 25),
(46, '2021-12-05 16:54:32', NULL, 'Microsoft Windows 10 Pro 64 Bit Deutsch DSP/SB', 125, 'https://i.imgur.com/0tobQO6.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 25),
(47, '2021-12-05 16:54:32', NULL, 'Microsoft Windows 11 Home 64 Bit Deutsch DSP/SB', 99.78, 'https://i.imgur.com/cHnR8h8.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 26),
(48, '2021-12-05 16:54:32', NULL, 'Microsoft Windows 11 Pro 64 Bit Deutsch DSP/SB', 139.87, 'https://i.imgur.com/061alM8.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 26),
(49, '2021-12-05 16:54:32', NULL, 'Microsoft Windows Server 2019 64Bit Standard OEM/DSP/SB, 16 Cores (deutsch) (PC) (P73-07790)', 770.31, 'https://i.imgur.com/qPEmO0g.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 27),
(50, '2021-12-05 16:54:32', NULL, 'Microsoft Windows Server 2019, 5 User CAL (deutsch) (PC) (R18-05869)', 182.54, 'https://i.imgur.com/qPEmO0g.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 27),
(51, '2021-12-05 17:24:37', NULL, 'Logitech G Pro Gaming Mouse 2.4 GHz schwarz (kabellos)', 89.8, 'https://i.imgur.com/uILkPTz.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 29),
(52, '2021-12-05 17:24:37', '2021-12-05 17:32:32', 'Logitech G Pro X Superlight 2.4 GHz und USB schwarz (kabellos)', 106.96, 'https://i.imgur.com/CTDIoBV.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 29),
(53, '2021-12-05 17:24:37', '2021-12-05 17:32:35', 'Logitech G502 Lightspeed 2.4 GHz schwarz/blau (kabellos)', 97.97, 'https://i.imgur.com/uBrsujw.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 29),
(54, '2021-12-05 17:24:37', NULL, 'Logitech G502 SE Hero USB schwarz/silber (kabelgebunden)', 49.3, 'https://i.imgur.com/JGrKTxr.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 28),
(55, '2021-12-05 17:24:37', '2021-12-05 17:33:34', 'Logitech G213 Prodigy USB Deutsch schwarz (kabelgebunden)', 39.96, 'https://i.imgur.com/nxakB3U.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 30),
(56, '2021-12-05 17:24:37', NULL, 'Logitech G512 Carbon Omron Romer-G Tactile USB Deutsch (kabelgebunden)', 80.29, 'https://i.imgur.com/crbO7qx.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 30),
(57, '2021-12-05 17:24:37', NULL, 'Sharkoon Skiller SGK4 USB Deutsch schwarz (kabelgebunden)', 29.91, 'https://i.imgur.com/b8DM9Pb.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 32),
(58, '2021-12-05 17:24:37', '2021-12-05 17:35:03', 'Sharkoon Skiller SGM1 USB schwarz (kabelgebunden)', 31.6, 'https://i.imgur.com/KRxkRY8.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 33),
(59, '2021-12-05 17:45:22', NULL, '27\" (68,58cm) Acer KA270HA schwarz 1920x1080 1xDVI / 1xHDMI / 1xVGA', 169.1, 'https://i.imgur.com/1VOpL8f.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 36),
(60, '2021-12-05 17:45:22', NULL, '27\" (68,58cm) Acer B7 B277K schwarz 3840x2160 1xHDMI / 1xDisplayPort', 368.97, 'https://i.imgur.com/dTPovEp.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 36),
(61, '2021-12-05 17:45:22', NULL, '24\" (60,96cm) Acer B247Ybmiprzx schwarz 1920x1080 1xHDMI / 1xVGA / 1xDisplayPor', 205.87, 'https://i.imgur.com/NjEk5vN.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 37),
(62, '2021-12-05 17:45:22', NULL, '24\" (60,96cm) Acer B246WLAymdprx schwarz 1920x1200 1xDisplayPort / 1xDVI / 1xVGA', 226.86, 'https://i.imgur.com/rRfvEli.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 37),
(63, '2021-12-05 17:45:22', NULL, '27\" (68,58cm) MSI Curved G27CQ4PDE schwarz 2560x1440 1x DisplayPort 1.2 / 2xHDMI 2.0', 329.96, 'https://i.imgur.com/W8KjR00.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 34),
(64, '2021-12-05 17:45:22', NULL, '27\" (68,58cm) MSI Optix G27CQ4 schwarz 2560x1440 1x DisplayPort 1.2 / 2xHDMI 2.0', 284, 'https://i.imgur.com/TQLx72O.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 34),
(65, '2021-12-05 17:45:22', NULL, '24\" (60,96cm) MSI MAG Artymis 242CDE schwarz 1920x1080 1x DisplayPort 1.2 / 2xHDMI 1.4', 229, 'https://i.imgur.com/yRbMUnI.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 35),
(66, '2021-12-05 18:04:07', NULL, '1800 Watt LC-Power M-Edition LC1800 Non-Modular 80+', 208.97, 'https://i.imgur.com/ZgHp6Bp.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 39),
(67, '2021-12-05 18:04:07', NULL, '350 Watt LC-Power LC420-12 V2.31 Non-Modular 80+ Bronze', 28.28, 'https://i.imgur.com/J8Aowz1.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 38),
(68, '2021-12-05 18:04:07', NULL, '700 Watt be quiet! Pure Power 11 CM Modular 80+ Gold', 88, 'https://i.imgur.com/vlVDeSR.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 40),
(69, '2021-12-05 18:04:07', NULL, '700 Watt be quiet! System Power 9 CM Modular 80+ Bronze', 73.38, 'https://i.imgur.com/vS65LHC.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 40),
(70, '2021-12-05 18:04:07', NULL, '1200 Watt be quiet! Straight Power 11 Platinum Modular 80+', 207.67, 'https://i.imgur.com/AE5Wxbt.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 41),
(71, '2021-12-05 18:04:07', NULL, '1200 Watt Corsair HX1200 Modular 80+ Platinum', 238.97, 'https://i.imgur.com/y7hdWlf.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 42),
(72, '2021-12-05 18:04:07', NULL, '750 Watt Corsair TX-M Series TX750M Modular 80+ Gold', 89.67, 'https://i.imgur.com/Gzxc21e.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 43),
(73, '2021-12-05 18:04:07', NULL, '750 Watt Corsair CX-F RGB Series CX750F Modular 80+ Bronze', 84.87, 'https://i.imgur.com/8XZBpmL.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 43),
(74, '2021-12-05 18:13:02', NULL, '16GB Corsair Vengeance RGB PRO schwarz DDR4-4000 DIMM CL19 Dual Kit', 121.87, 'https://i.imgur.com/BwAObSd.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 46),
(75, '2021-12-05 18:13:02', NULL, '16GB Corsair Vengeance LPX schwarz DDR4-4000 DIMM CL16 Dual Kit', 228.75, 'https://i.imgur.com/g3sEh57.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 46),
(76, '2021-12-05 18:13:02', NULL, '16GB Corsair Dominator Platinum RGB DDR4-3200 DIMM CL16 Dual Kit', 109.77, 'https://i.imgur.com/9bhECtq.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 44),
(77, '2021-12-05 18:13:02', NULL, '32GB Corsair Vengeance RGB PRO weiß DDR4-3200 DIMM CL16 Dual Kit', 143.77, 'https://i.imgur.com/sBlg7md.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 44),
(78, '2021-12-05 18:13:02', NULL, '32GB Corsair Vengeance RGB PRO schwarz DDR4-3600 DIMM CL18 Dual Kit', 147.27, 'https://i.imgur.com/p0IBh1P.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 45),
(79, '2021-12-05 18:13:02', NULL, '16GB Corsair Vengeance LPX schwarz DDR4-3600 DIMM CL18 Dual Kit', 71, 'https://i.imgur.com/Egl2ymE.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 45),
(80, '2021-12-05 18:21:50', NULL, 'be quiet! Pure Loop 360mm (BW008)', 100.97, 'https://i.imgur.com/vh6PahG.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 48),
(81, '2021-12-05 18:21:50', NULL, 'be quiet! SILENT LOOP 2 240mm ALL-IN-ONE Wasserkühlung', 106.3, 'https://i.imgur.com/MLayy8t.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 48),
(82, '2021-12-05 18:21:50', NULL, 'be quiet! Dark Rock Pro 4 Tower Kühler', 69, 'https://i.imgur.com/7F2prhi.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 47),
(83, '2021-12-05 18:21:50', NULL, 'be quiet! Kühler Pure Rock Slim 2', 21, 'https://i.imgur.com/0m72kJP.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 47),
(84, '2021-12-05 18:21:50', NULL, 'Noctua NH-D15 chromax black', 102.07, 'https://i.imgur.com/j8kPI3O.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 49),
(85, '2021-12-05 18:21:50', NULL, 'Noctua NH-U12S SE AM4 Tower Kühler', 69.87, 'https://i.imgur.com/vcSqK5v.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,\r\n consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,\r\n quae sit beatae? Totam architecto voluptatum maxime.', 49),
(86, '2021-12-05 18:36:13', NULL, '4000GB WD Blue WD40EZAZ 256MB 3.5\" (8.9cm) SATA 6Gb/s', 108.45, 'https://i.imgur.com/zPnGlXc.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,  consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,  quae sit beatae? Totam architecto voluptatum maxime.', 51),
(87, '2021-12-05 18:36:13', NULL, '2000GB WD Black WD2003FZEX 64MB 3.5\" (8.9cm) SATA 6Gb/s', 113.7, 'https://i.imgur.com/DI0eQe8.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,  consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,  quae sit beatae? Totam architecto voluptatum maxime.', 51),
(88, '2021-12-05 18:36:13', NULL, '18000GB Seagate Exos X X18 ST18000NM000J 7.200U/min 256MB 3.5\" (8.9cm) SATA 6Gb/s', 299, 'https://i.imgur.com/tWLAA4C.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,  consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,  quae sit beatae? Totam architecto voluptatum maxime.', 50),
(89, '2021-12-05 18:36:13', NULL, '3000GB Seagate IronWolf ST3000VN007 64MB 3.5\" (8.9cm) SATA 6Gb/s', 90.95, 'https://i.imgur.com/ollnSlk.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,  consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,  quae sit beatae? Totam architecto voluptatum maxime.', 50),
(90, '2021-12-05 18:36:13', NULL, '4000GB Samsung SSD 870 QVO 2.5\" (6.4cm) SATA 6Gb/s 3D-NAND QLC (MZ-77Q4T0BW)', 317, 'https://i.imgur.com/zcs3pe3.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,  consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,  quae sit beatae? Totam architecto voluptatum maxime.', 52),
(91, '2021-12-05 18:36:13', NULL, '500GB Samsung SSD 870 EVO 2.5\" (6.4cm) SATA 6Gb/s 3D-NAND TLC (MZ-77E500B/EU)', 65.87, 'https://i.imgur.com/K4RN6M9.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,  consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,  quae sit beatae? Totam architecto voluptatum maxime.', 52),
(92, '2021-12-05 18:36:13', NULL, '1000GB Samsung 980 Pro M.2 PCIe 4. 3D-NAND TLC (MZ-V8P1T0BW)', 166.41, 'https://i.imgur.com/NfzEwAB.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,  consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,  quae sit beatae? Totam architecto voluptatum maxime.', 54),
(93, '2021-12-05 18:36:13', NULL, '2000GB Samsung 970 Evo Plus M.2 2280 PCIe 3.0 x4 3D-NAND TLC (MZ-V7S2T0BW)', 224, 'https://i.imgur.com/J227lkB.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,  consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,  quae sit beatae? Totam architecto voluptatum maxime.', 54),
(94, '2021-12-05 18:36:13', NULL, '1000GB Crucial MX500 2.5\" (6.4cm) SATA 6Gb/s 3D-NAND TLC (CT1000MX500SSD1)', 85.8, 'https://i.imgur.com/bR25S7L.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,  consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,  quae sit beatae? Totam architecto voluptatum maxime.', 53),
(95, '2021-12-05 18:36:13', NULL, '480GB Crucial BX500 2.5\" (6.4cm) SATA 6Gb/s 3D-NAND TLC (CT480BX500SSD', 44, 'https://i.imgur.com/eb01URs.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,  consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,  quae sit beatae? Totam architecto voluptatum maxime.', 53),
(96, '2021-12-05 18:36:13', NULL, '1000GB Crucial P2 M.2 PCIe 3.0 x4 (CT1000P2SSD8)', 83.8, 'https://i.imgur.com/Hvhgqe1.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,  consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,  quae sit beatae? Totam architecto voluptatum maxime.', 55),
(97, '2021-12-05 18:36:13', NULL, '500GB Crucial P5 M.2 PCIe 3.0 x4 3D-NAND TLC (CT500P5SSD8)', 66.96, 'https://i.imgur.com/QlvuUeD.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ipsa nemo amet at atque,  consequatur velit minima, cupiditate facilis esse impedit nostrum aliquam,  quae sit beatae? Totam architecto voluptatum maxime.', 55);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlistID` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `productID` int(11) DEFAULT NULL,
  `accountID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accountID`);

--
-- Indizes für die Tabelle `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`addressID`);

--
-- Indizes für die Tabelle `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`catID`);

--
-- Indizes für die Tabelle `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`itemID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `productID` (`productID`);

--
-- Indizes für die Tabelle `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `fk_order_accountID` (`accountID`),
  ADD KEY `fk_order_addressID` (`addressID`);

--
-- Indizes für die Tabelle `productcats`
--
ALTER TABLE `productcats`
  ADD PRIMARY KEY (`productCatID`),
  ADD KEY `fk_productCat_catID` (`catID`);

--
-- Indizes für die Tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `fk_product_productCatID` (`productCatID`);

--
-- Indizes für die Tabelle `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlistID`),
  ADD UNIQUE KEY `UK_prodID,accountID` (`productID`,`accountID`) USING BTREE,
  ADD KEY `productID` (`productID`) USING BTREE,
  ADD KEY `fk_account_wishlist` (`accountID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `accounts`
--
ALTER TABLE `accounts`
  MODIFY `accountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `addresses`
--
ALTER TABLE `addresses`
  MODIFY `addressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `cats`
--
ALTER TABLE `cats`
  MODIFY `catID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT für Tabelle `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `productcats`
--
ALTER TABLE `productcats`
  MODIFY `productCatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT für Tabelle `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT für Tabelle `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlistID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `orderitem`
--
ALTER TABLE `orderitem`
  ADD CONSTRAINT `orderID` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `productID` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_order_accountID` FOREIGN KEY (`accountID`) REFERENCES `accounts` (`accountID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_addressID` FOREIGN KEY (`addressID`) REFERENCES `addresses` (`addressID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `productcats`
--
ALTER TABLE `productcats`
  ADD CONSTRAINT `fk_productCat_catID` FOREIGN KEY (`catID`) REFERENCES `cats` (`catID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_productCatID` FOREIGN KEY (`productCatID`) REFERENCES `productcats` (`productCatID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `fk_account_wishlist` FOREIGN KEY (`accountID`) REFERENCES `accounts` (`accountID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_products_wishlist` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
