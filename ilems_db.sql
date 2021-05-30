-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2021 at 03:13 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ilems_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(100) NOT NULL,
  `adminId` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `adminId`, `name`, `email`, `phone`, `username`, `password`, `added`, `status`) VALUES
(1, '608ab0231ab21', 'Ilems Admin', 'admin@ilems.co.ke', '07', 'admin', '$2y$10$V3Mqg/X0pfgfIlPMAuA1IugYDmbgrSWnOL.NRvp/lEV543FhbpDuW', '2021-04-29 13:13:04', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(100) NOT NULL,
  `caseId` varchar(100) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `obNo` varchar(100) NOT NULL,
  `statement` varchar(2000) NOT NULL,
  `title` varchar(100) NOT NULL,
  `addedOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `caseId`, `userId`, `fullname`, `obNo`, `statement`, `title`, `addedOn`, `status`) VALUES
(1, 'ceb20772e0c9d240c75eb26b0e37abee', '60af0dbce79f6', 'John Kane', 'OB/RO5G2BW0', 'Lorem', 'Mugged', '2021-05-27 08:44:24', 'Pending'),
(2, 'ceb20772e0c9d240c75eb26b0e37abeie', '60af0dbce79f6', 'John Kane', 'OB/SYIE18WK', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nesciunt quam ipsum sequi. Eius deserunt nobis vero consequuntur dignissimos est, dicta deleniti. Perferendis dolorem quibusdam veniam numquam nemo sapiente est?\r\n\r\n Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nesciunt quam ipsum sequi. Eius deserunt nobis vero consequuntur dignissimos est, dicta deleniti. Perferendis dolorem quibusdam veniam numquam nemo sapiente est?\r\n', 'Mugge again ', '2021-05-27 10:46:53', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `id` int(100) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `town` varchar(100) NOT NULL,
  `postalAddress` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `idNo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `public_`
--

CREATE TABLE `public_` (
  `id` int(100) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `town` varchar(100) NOT NULL,
  `postalAddress` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `idNo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public_`
--

INSERT INTO `public_` (`id`, `userId`, `fullname`, `email`, `phone`, `town`, `postalAddress`, `dob`, `idNo`, `password`, `added`, `status`) VALUES
(1, '60af0bfa6ac67', 'rtyui yuio', '212121@sa', '', '3243', '1343', '2021-05-08', '2134', '$2y$10$qn.xVIOVyGHLU3ZLVeylbuDp33OZ83aG8oo737TxF.yRyjHf2RBU.', '2021-05-27 03:03:22', 'active'),
(2, '60af0c6f41597', 'james maghati', 'james@gmail.com', '09009897289', 'Nakuru', '322312', '2021-05-27', '213456', '$2y$10$Rc.GX3g9vVT34UnDykL48uv1YQXt4YIw8KNJIiiiozkLaLU2N6oJ2', '2021-05-27 03:05:19', 'active'),
(3, '60af0d4c983a4', 'Ann Mwendwa', 'am@ilems.c', '4567890', 'Kericho', '45678902', '2021-05-13', '123456', '$2y$10$ok9kbqFKuZtgSZiAdsDFEuknCAamsijHTLLIcWXLyxHaaabE3ri9O', '2021-05-27 03:09:00', 'active'),
(4, '60af0dbce79f6', 'John Kane', '121@31', '21243546', '1234', '12345', '2021-05-05', '2345', '$2y$10$kZAO3RGLulkdQi86kLuRS.lsO4bTcXJsX3mc/f9pf2VvKJVwuDupS', '2021-05-27 06:43:27', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_`
--
ALTER TABLE `public_`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `public`
--
ALTER TABLE `public`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `public_`
--
ALTER TABLE `public_`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
