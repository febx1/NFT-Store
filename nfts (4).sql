-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 04:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nfts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `auid` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`auid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `category` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `category`, `status`) VALUES
(2, 'Art', 1),
(3, 'Collectables', 1),
(4, 'Cars', 1),
(5, 'Sports', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(3, 'Lofi', 'undefined', '6252356423', 'Something is wrong', '2022-03-24 07:14:45'),
(14, 'snickerdoodle', 'ab@a.com', '12354', 'adsfa', '2022-03-24 08:17:13'),
(15, 'snickerdoodle', 'ab@a.com', '12354', 'adsfa', '2022-03-24 08:17:20'),
(16, 'Somethinng', 'abc@abc.com', '1234567895', 'asdfasdf', '2022-03-30 05:03:23'),
(17, 'Lofi', 'abc@abc.com', '1231', 'asdfas', '2022-04-01 05:00:00'),
(18, 'Lofi', 'abc@abc.com', '123546', 'asdfasdf', '2022-04-02 01:49:54'),
(19, 'Lofi', 'abc@abc.com', '123546', 'asdfasdf', '2022-04-02 01:50:25'),
(20, 'Lofi', 'abc@abc.com', '123546', 'asdfasdf', '2022-04-02 01:50:31'),
(21, 'Lofi', 'abc@abc.com', '123546', 'asdfasdf', '2022-04-02 01:50:38'),
(22, 'Lofi', 'abc@abc.com', '123546', 'asdfasdf', '2022-04-02 01:50:45'),
(23, 'Lofi', 'abc@abc.com', '123546', 'asdfasdf', '2022-04-02 05:11:33'),
(24, 'Lofi', 'abc@abc.com', '123546', 'asdfasdf', '2022-04-02 05:11:36'),
(25, 'Lofi', 'user1@gmail.com', '123546', 'asdfasdf', '2022-04-02 05:13:26'),
(26, 'Lofi', 'user1@gmail.com', '123546', 'asdfasdf', '2022-04-02 05:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `nft`
--

CREATE TABLE `nft` (
  `nid` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `slink` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nft`
--

INSERT INTO `nft` (`nid`, `category`, `uid`, `name`, `descrip`, `link`, `status`, `slink`) VALUES
(1, '3', 1, 'Ape Lazy', 'Simple lazy ape', 'https://lh3.googleusercontent.com/ULjfyo4LJhtV3J9K7lu1xh0YZQBa6WHPp-cwlV2C9sUIyTpgSlv554mh_97fRXsziOIu9xwpukl5NQoDbkE3mlXlWR8zU7qcWQsxVg=s0', 1, 'https://opensea.io/assets/0xbc4ca0eda7647a8ab7c2061c2e118a18a936f13d/8520'),
(14, '4', 1, 'something', 'sothing', 'https://lh3.googleusercontent.com/7Z8SW_9H_Th_0Zvzm5in2T_jN2gpnkPTtxK-4s0jGl_t-nNvLMKXf4BhNMs6FbBgtj64KD-yp1iR2-t-dF9Bp67oXM4bC2LjDs0-vA=w600', 1, 'https://lh3.googleusercontent.com/7Z8SW_9H_Th_0Zvzm5in2T_jN2gpnkPTtxK-4s0jGl_t-nNvLMKXf4BhNMs6FbBgtj64KD-yp1iR2-t-dF9Bp67oXM4bC2LjDs0-vA=w600'),
(17, '2', 1, 'Woodie', 'woodies', 'https://lh3.googleusercontent.com/AebrXJrAg8X4gJoH3-jDZGHWInGTwtTC92789Yw93IHpAHbA93Z63UYpQUiLhOcIxpvWVrKZEXT6uKhkVrXgrmO4gYJs2GqbdZflHA=w600', 1, 'https://lh3.googleusercontent.com/AebrXJrAg8X4gJoH3-jDZGHWInGTwtTC92789Yw93IHpAHbA93Z63UYpQUiLhOcIxpvWVrKZEXT6uKhkVrXgrmO4gYJs2GqbdZflHA=w600');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `sid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `subscription` tinyint(4) NOT NULL,
  `sub_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(75) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `mobile`, `added_on`) VALUES
(2, 'Lofi', '1515', 'abc@abc.com', '5215', '2022-04-03 07:01:16'),
(3, 'ab', '45', 'georgefebin97@gmail.com', '4547', '2022-04-03 07:01:42'),
(4, 'adfs', 'asdf', 'abcd@abc.com', 'asdf', '2022-04-03 07:16:31'),
(5, 'asdf', 'asdf', 'asdfa', 'adsf', '2022-04-03 08:26:52'),
(6, 'Sree Shankar', '123', 'sreeshankar@gmail.com', '9585625316', '2022-04-04 08:26:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`auid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nft`
--
ALTER TABLE `nft`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `auid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `nft`
--
ALTER TABLE `nft`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
