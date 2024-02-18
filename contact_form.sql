-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 09:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`name`, `email`, `message`, `id`) VALUES
('', '', '', 1),
('', '', '', 2),
('', '', '', 3),
('', '', '', 4),
('Elexis', 'elexis.falceso@cvsu.edu.ph', 'asdsad', 5),
('Elexis', 'elexis.falceso@cvsu.edu.ph', 'asdsad', 6),
('Elexis', 'elexis.falceso@cvsu.edu.ph', 'Thankyou!!!!', 7),
('Elexis', 'elexis.falceso@cvsu.edu.ph', 'Good Job', 8),
('Elexis', 'elexis.falceso@cvsu.edu.ph', 'asdasdas', 9),
('sadas', 'asdas@gmail.com', 'sadsaasdsad', 10),
('Elexis Falceso', 'elexis.falceso@cvsu.edu.ph', 'Thankyou!!!!', 11),
('asdasd', 'asdsad@gmail.com', 'asdasdsa', 12),
('asdasd', 'asdsad@gmail.com', 'asdasdsa', 13),
('asdas', 'asdsad@gmail.com', 'asdsadsa', 14),
('asdas', 'elexis.falceso@cvsu.edu.ph', 'asdasdas', 15),
('asdas', 'elexis.falceso@cvsu.edu.ph', 'asdasdas', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
