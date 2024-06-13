-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2024 at 11:22 PM
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
-- Database: `korisnici`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `razina` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `ime`, `prezime`, `razina`) VALUES
(1, 'fbeleta', 'fbeleta@tvy.hr', '$2y$10$QhoS4WXrI8EkE0GCNOJd4eSSWtq.3WZpZ0mokmVKCRb.OD5UuBzNC', 'filip', 'beleta', 1),
(2, 'miki', 'miki@gmail.com', '$2y$10$GqoQiFUxCodeYqPqUrmRKOWid5ZGq00yP7y17DZrXd7xvHtGcrZzi', 'ivan', 'milks', 0),
(3, 'IVAN', 'AE@gmail.com', '$2y$10$734xtfYj.OJIL4BxYxNrJufqvsW2WC9IFiyRXQfCBYoNwDZqN9LSy', 'icn', 'IVAN', 0),
(4, 'fb', 'fb@tvy.hr', '$2y$10$N6AJ5cm3QkllvyH/PGDSYuJTD12ChYyUAusF4XJJM9LhYmDb2EDY2', 'filip', 'beleta', 0),
(5, 'username', 'user@gmail.com', '$2y$10$BDUHNtMnd4tuGCFsxssRTOxvwYrqlj1I1DjBlnUBR6kP4DL.TIw0S', 'nvo', 'ime', 0),
(6, 'admin', 'admin@gmail.com', '$2y$10$xumqZ2Bhqln2QF6e04LOX.fbF9AyFND5lkadMs5NSM8hp0jkuAni.', 'Moje', 'Ime', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
