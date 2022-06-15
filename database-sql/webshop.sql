-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2022 at 11:15 AM
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
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `producten`
--

CREATE TABLE `producten` (
  `ID` smallint(11) NOT NULL,
  `categorie` varchar(8) NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `stock` mediumint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producten`
--

INSERT INTO `producten` (`ID`, `categorie`, `name`, `price`, `stock`) VALUES
(1, 'tops', 'Short Sleeve Big Bling Velour Track Jacket', '89.00', 532),
(2, 'tops', 'Monogram Cropped Velour Hoodie', '125.00', 743),
(3, 'tops', 'Colorblock Ring Velour Crop Top', '49.00', 47),
(4, 'tops', 'Mockneck Velour Track Jacket', '109.00', 832),
(5, 'bottoms', 'Big Bling Velour Track Shorts', '79.00', 532),
(6, 'bottoms', 'Plus-Size OG Big Bling Velour Track Pants', '99.00', 354),
(7, 'bottoms', 'Monogram Velour Retro Shorts', '69.00', 643),
(8, 'bottoms', 'Bling Velour Skirt', '79.00', 103),
(9, 'dress', 'Big Bling Terry Halter Dress', '79.00', 452),
(10, 'dress', 'Smocked Velour Dress', '89.00', 142),
(11, 'dress', 'Big Bling Velour Strap Dress', '89.00', 0),
(12, 'dress', 'Small Bling Sleeveless Velour Jumpsuit', '119.00', 421),
(17, 'shorts', 'Big Bling Velour Biker Shorts', '69.00', 234),
(18, 'shorts', 'Pacific High Rise Destroyed Shorts', '68.00', 532),
(19, 'shorts', 'Big Bling Velour Shorts', '69.00', 562),
(20, 'shorts', 'Classic Velour Shorts', '69.00', 735);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producten`
--
ALTER TABLE `producten`
  MODIFY `ID` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
