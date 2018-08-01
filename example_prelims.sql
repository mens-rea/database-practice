-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 01, 2018 at 03:11 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `example_prelims`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `food` text NOT NULL,
  `population` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `name`, `type`, `food`, `population`) VALUES
(1, 'rabbit', 'herbivore', 'carrots', 24),
(2, 'lion', 'carnivore', 'raw beef', 3),
(3, 'turtle', 'herbivore', 'carrots', 80),
(4, 'deer', 'herbivore', 'grass', 150),
(5, 'chimpanzees', 'omnivore', 'insects', 75);

-- --------------------------------------------------------

--
-- Table structure for table `animal_food`
--

CREATE TABLE `animal_food` (
  `id` int(11) NOT NULL,
  `food` text NOT NULL,
  `item_count` int(11) NOT NULL,
  `type` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal_food`
--

INSERT INTO `animal_food` (`id`, `food`, `item_count`, `type`, `price`) VALUES
(1, 'carrots', 50, 'vegetable', 200),
(2, 'raw beef', 3, 'meat', 300),
(3, 'insects', 250, 'misc', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animal_food`
--
ALTER TABLE `animal_food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `animal_food`
--
ALTER TABLE `animal_food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
