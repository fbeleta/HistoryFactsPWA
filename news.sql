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
-- Database: `news_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `content` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `archive` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `summary`, `content`, `category`, `image`, `archive`, `created_at`, `author`) VALUES
(46, 'Pocetak prvog svjetskog rata', 'Kada je poceo WW1', 'When did WWII start? World War II began on September 1, 1939, with the German invasion of Poland.', 'Svijet', 'germany.webp', 0, '2024-06-13 20:20:55', 'fbeleta'),
(48, 'Oslobodenje Pariza', 'Oslobodenje Pariza', 'The liberation of Paris was a military battle that took place during World War II from 19 August 1944 until the German garrison surrendered the French capital on 25 August 1944.', 'Europa', 'france.webp', 0, '2024-06-13 20:44:34', 'fbeleta'),
(50, 'Prvi put na mjesec', 'prvi put na mjesec', 'In 1969 Apollo 11 was the first crewed mission to land on the Moon. There were six crewed landings between 1969 and 1972, and numerous uncrewed landings. All crewed missions to the Moon were conducted by the Apollo program, with the last departing the lunar surface in December 1972.', 'Svijet', 'nasamoon.avif', 0, '2024-06-13 20:54:41', 'fbeleta'),
(51, 'Fall of the Berlin Wall', 'The Berlin Wall, a symbol of Cold War division', 'On November 9, 1989, the Berlin Wall, which had separated East and West Berlin since 1961, was brought down. This event marked the beginning of the end of the Cold War and paved the way for German reunification, which was formally completed on October 3, 1990. The fall of the Berlin Wall symbolized the collapse of communist regimes in Central and Eastern Europe and the triumph of democratic ideals across the continent.', 'Europa', 'berlinwall.jpeg', 0, '2024-06-13 20:56:24', 'fbeleta'),
(52, 'Potpis u Rimu', 'The Treaty of Rome, signed on March 25, 1957, established the European Economic Community (EEC) ', 'On March 25, 1957, representatives from Belgium, France, Italy, Luxembourg, the Netherlands, and West Germany signed the Treaty of Rome. This treaty established the European Economic Community (EEC), aimed at fostering economic integration and creating a common market among its member states. The EEC was a significant step toward economic cooperation in post-war Europe and eventually evolved into the European Union (EU), promoting political and economic unity across the continent.', 'Europa', 'Treaty_of_Rome.jpg', 0, '2024-06-13 20:57:48', 'fbeleta'),
(53, 'Waterloo', 'The Battle of Waterloo, fought on June 18, 1815, marked the end of the Napoleonic Wars.\r\n', 'On June 18, 1815, the Battle of Waterloo took place near Brussels in present-day Belgium. This decisive battle saw the forces of the Seventh Coalition, led by the Duke of Wellington and Prussian Field Marshal Blücher, defeat Napoleon Bonaparte\'s French army. The defeat at Waterloo marked the end of the Napoleonic Wars\r\n', 'Europa', 'waterloo.webp', 0, '2024-06-13 21:10:20', 'fbeleta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
