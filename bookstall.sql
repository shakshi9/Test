-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 05, 2023 at 05:29 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstall`
--

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

DROP TABLE IF EXISTS `featured`;
CREATE TABLE IF NOT EXISTS `featured` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_price` varchar(50) NOT NULL,
  `old_price` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`id`, `img`, `name`, `current_price`, `old_price`) VALUES
(1, 'image/book-1.png', 'Slayer', '$15.99', '$20.00'),
(2, 'image/book-2.png', 'Soul Stealer', '$13.99', '$20.00'),
(3, 'image/book-3.png', 'Dragon\'s Heir', '$15.99', '$20.00'),
(4, 'image/book-4.png', 'Sister', '$13.99', '$15.99'),
(5, 'image/book5.png', 'Be Grateful & Give Thanks', '$14.99', '$19.00'),
(6, 'image/book-6.png', 'Epic', '$28.99', '$30.00'),
(7, 'image/book-5.png', 'Butterfly Lion', '$15.99', '$20.00'),
(8, 'image/book7.png', 'Place Your Text Here', '$13.99', '$20.00'),
(9, 'image/book-7.png', 'Sample Text', '$13.99', '$15.99'),
(10, 'image/book-8.png', 'Black History Month', '$14.99', '$19.00'),
(11, 'image/book-9.png', 'Bay Street', '$28.99', '$30.00'),
(12, 'image/book-10.png', 'Retro', '$43.99', '$50.00');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

DROP TABLE IF EXISTS `offer`;
CREATE TABLE IF NOT EXISTS `offer` (
  `img_id` int(10) NOT NULL AUTO_INCREMENT,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`img_id`, `img`) VALUES
(1, 'image/book-1.png'),
(2, 'image/book-2.png'),
(3, 'image/book-3.png'),
(4, 'image/book-4.png'),
(5, 'image/book-5.png'),
(6, 'image/book-6.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
