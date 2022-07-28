-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 03:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pluto`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `comment`, `productid`) VALUES
(6, 'rhythm', 'thikai', 32),
(7, 'rhythm', 'thikai', 33),
(9, 'ashsih', 'atti ramro', 34),
(10, 'ashish', 'babbal cha product ta.', 36),
(13, 'rhythm', 'thikxa', 31),
(14, 'sapkota', 'very yumyum', 30);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `price` int(7) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `picture`, `name`, `type`, `description`, `price`, `userid`) VALUES
(30, '139675664_myitem_.jpg', 'Raspberry purple cake', 'Cake', 'raspberry is always the first choice.', 23, 7),
(31, '631831629_myitem_.jpg', 'Pancake', 'Cake', 'Double stacked cake the best in terms of the taste and quality.', 10, 7),
(32, '243156993_myitem_.jpg', 'Choco Doughnuts', 'Doughnut', 'Chocolate covered doughnuts are slightly best and better doughnuts than the regular ones.', 5, 3),
(33, '404791096_myitem_.jpg', 'Strawberry doug', 'Doughnut', 'the baggles are best and especially when they are covered with strawberry syrup and sprinkles.', 6, 3),
(34, '163188383_myitem_.jpg', 'Choco-Brownies', 'Cake', 'Brownies are better when they are with elegance with chocolate.', 2, 3),
(35, '482403357_myitem_.jpg', 'Tripple floor ', 'Cake', 'The Triple floor cake has the flavored of vanilla  and heavy cream. This can be made as per the customers wish.', 40, 7),
(36, '64517321_myitem_.jpg', 'Pink Customed', 'Cake', 'This cake has the flavored of\r\n2 specific flavors that melts in the mouth after the first bite.  ', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `address` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `phone` int(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `address`, `age`, `phone`, `gender`, `email`, `country`) VALUES
(3, 'sanam', '9215658dc8d88798b7c7d1f0f8df4d64', 'sanam', 34, 2147483647, 'male', 'sanam123@gmail.com', 'Nepal'),
(5, 'rhythm', 'd6ca3fd0c3a3b462ff2b83436dda495e', 'ktm', 56, 8099898, 'male', 'rhythm@gmail.com', 'Nepal'),
(6, 'aurther', 'b003e72046a79f12813874b73a8900e2', 'lalitpur', 32, 876568844, 'male', 'aurther@gmail.com', 'Sri lanka'),
(7, 'rhythm', 'b91caba63c053f299fce69f6c903d515', 'kathmandu', 17, 98989, 'male', 'rhythm@sapkota', 'India'),
(9, 'Ben', 'e7b08520e04db6920527c4cd5e55d0c6', 'Bhutan, 7th street', 29, 2147483647, 'Male', 'ben@gmail.com', 'Bhutan'),
(10, 'benny', '42f4b247702c99bda0fc7bcc41c70d19', 'bhutan', 12, 8099898, 'female', 'benny@gmail.com', 'Bhutan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
