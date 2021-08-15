-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 14, 2021 at 11:09 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sender_email` varchar(30) NOT NULL,
  `reciever_email` varchar(30) NOT NULL,
  `amount` int(8) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`sender_email`, `reciever_email`, `amount`, `date`) VALUES
('waleed@gmail.com', 'uzair@gmail.com', 9, '2021-08-13 12:43:00'),
('uzair@gmail.com', 'waleed@gmail.com', 1009, '2021-08-14 15:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `balance` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Waleed', 'waleed@gmail.com', '5899'),
(2, 'Aitezaz', 'aitezaz@gmail.com', '6728'),
(3, 'Haseeb', 'haseeb@gmail.com', '2944'),
(4, 'Uzair', 'uzair@gmail.com', '4000'),
(5, 'Ali', 'ali@gmail.com', '2000'),
(6, 'Sallu', 'sallu@gmail.com', '5950'),
(7, 'Sana', 'sana@gmail.com', '7056'),
(8, 'Sameer', 'sameer@gmail.com', '5140'),
(9, 'Saman', 'saman777@gmail.com', '1000'),
(10, 'Jabar', 'jabar@gmail.com', '9000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
