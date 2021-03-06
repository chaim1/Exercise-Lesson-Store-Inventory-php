-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: נובמבר 08, 2018 בזמן 11:00 PM
-- גרסת שרת: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storeCoffe`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `Categories`
--

CREATE TABLE `Categories` (
  `id` int(11) NOT NULL,
  `name_category` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- הוצאת מידע עבור טבלה `Categories`
--

INSERT INTO `Categories` (`id`, `name_category`) VALUES
(1, 'alcohol'),
(2, 'vegetables');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `Products`
--

CREATE TABLE `Products` (
  `id` int(11) NOT NULL,
  `name_Products` varchar(100) COLLATE utf8_bin NOT NULL,
  `name_category` int(11) DEFAULT NULL,
  `price` decimal(5,2) NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Image` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `date_in` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- הוצאת מידע עבור טבלה `Products`
--

INSERT INTO `Products` (`id`, `name_Products`, `name_category`, `price`, `Quantity`, `Image`, `date_in`) VALUES
(3, 'wiski', 1, '2.00', 1, 'wine.jpg', '2018-11-08'),
(10, 'tomato', 2, '2.00', 30, 'forwebb.jpg', '2018-11-08'),
(13, 'cucumber', 2, '11.00', 22, 'forwebd.jpg', '2018-11-08');

--
-- Indexes for dumped tables
--

--
-- אינדקסים לטבלה `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`id`);

--
-- אינדקסים לטבלה `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_category` (`name_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Categories`
--
ALTER TABLE `Categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- הגבלות לטבלאות שהוצאו
--

--
-- הגבלות לטבלה `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`name_category`) REFERENCES `Categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
