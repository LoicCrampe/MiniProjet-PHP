-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 09, 2019 at 11:54 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notesb3`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `section` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `section`) VALUES
(1, 'Webdesign'),
(10, '3D');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `result` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `id_user`, `subject`, `result`) VALUES
(52, 2, 'Contrôle 1', '12'),
(53, 2, 'Contrôle 2', '11'),
(54, 2, 'Contrôle 3', '11'),
(55, 3, 'Contrôle 3', '2'),
(56, 4, 'Contrôle 3', '4'),
(57, 5, 'Contrôle 3', '13'),
(58, 6, 'Contrôle 3', '18'),
(59, 24, 'Modélisation 1', '13'),
(60, 25, 'Modélisation 1', '17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `section` int(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `passwd`, `lastname`, `firstname`, `section`, `role`) VALUES
(1, 'jdoe', 'a51dda7c7ff50b61eaea0444371f4a6a9301e501', 'Doe', 'John', 0, 1),
(2, 'cmangold', 'f1dda22f6c87388a4ea6486ed19dfd0f6f6df13d', 'Mangold', 'Claude', 1, 0),
(3, 'tdinca', '2be88ae07a73b8c2a75656d36b1412903f7f78b8', 'D\'Inca', 'Tristan', 1, 0),
(4, 'jcole', '8d32267b6b4884cf35adeaccde2b6857ae11aace', 'Colé', 'Julie', 1, 0),
(5, 'tkoscher', 'ed5904c3174de8861076818d9fdd7f7c949a16e6', 'Koscher', 'Tatiana', 1, 0),
(6, 'cnguyen', 'aa18aea38cc7deb9bf7ecb8a1f6c7c8ebaf6d2c9', 'NGuyen', 'Céline', 1, 0),
(24, 'kfranz', '4c8060af93345c2cc416ee6aa55bceec4e5cc9d4', 'Franz', 'Karl', 10, 0),
(25, 'ymourot', 'cd0c360a4b029ebf0aee7b55c835d6139f325a09', 'Mourot', 'Yoan', 10, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
