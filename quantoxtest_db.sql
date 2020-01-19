-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2020 at 03:40 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quantoxtest_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `salt` char(44) NOT NULL,
  `password` char(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `salt`, `password`) VALUES
(3, 'Pera Peric', 'pera@peric.com', 'ba662d0839dc65ecc537e2f78e0114bf2e02277468db', '$2y$10$ba662d0839dc65ecc537eu8o4aPkBCqEez7uOoYIh7FJrLj1Evxpa'),
(4, 'Laza', 'laza@gmail.com', '5593f1fbad0af2ba0541a8032f4ae1ea607e13a1cf68', '$2y$10$5593f1fbad0af2ba0541au/ugdCT8ka9IR.BmVRM9ivBz5Ix1MxIS'),
(5, 'Mika', 'mika@gmail.com', '9b5721b1c6e640eb09ee0d2733b820cab473148e4211', '$2y$10$9b5721b1c6e640eb09ee0OIhIa4VMH1diU5fXutdDs0a5KKkklhKG'),
(6, 'Duki', 'dusan@gmail.com', '228cdd3ba8f0a5ef1f7026b90bebd322f88570e047b6', '$2y$10$228cdd3ba8f0a5ef1f702umERzxFZitpzGWS136229SWGYY0RNXbq');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
