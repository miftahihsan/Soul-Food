-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 04:25 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soul_cook`
--

-- --------------------------------------------------------

--
-- Table structure for table `cook`
--

CREATE TABLE `cook` (
  `cook_id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `verified` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `speciality` varchar(256) NOT NULL,
  `cook_email` varchar(100) NOT NULL,
  `street_name` varchar(100) NOT NULL,
  `postal_code` varchar(11) NOT NULL,
  `cook_profile_pic` varchar(500) NOT NULL,
  `cook_info` varchar(1000) NOT NULL,
  `cook_phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cook`
--

INSERT INTO `cook` (`cook_id`, `user_id`, `verified`, `rating`, `speciality`, `cook_email`, `street_name`, `postal_code`, `cook_profile_pic`, `cook_info`, `cook_phone`) VALUES
(9, 'user_1', 0, 3, 'Pizza', 'mifahbk619@gmail.com', 'Kalabagan LakeCircus Dhaka', '1205', '2018-11-07.14-00-40-myImg.jpg', 'More then 15 year experience in finance, accounting and bookkeeping with all kind of accounting records allows to provide my customers successful performance Experienced in Sales, Service and Construction business areas. Banks, checking accounts, saving accounts, loans, payroll, vendors and customers. 7 years experience with finance - reports/business plans/models High level of understanding connections in initial docs, reconciliations , reports and taxation Use to pay close attention to details and respect companies timelines. Having strong organization skills, self motivated, open-mind and goal-orientated person', '');

-- --------------------------------------------------------

--
-- Table structure for table `cook_dash_board`
--

CREATE TABLE `cook_dash_board` (
  `cook_id` int(11) NOT NULL,
  `total_money_earned` int(11) NOT NULL,
  `website_cut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cook_post`
--

CREATE TABLE `cook_post` (
  `post_id` int(11) NOT NULL,
  `cook_id` int(11) NOT NULL,
  `food_pic` varchar(256) NOT NULL,
  `food_title` varchar(256) NOT NULL,
  `food_description` varchar(256) NOT NULL,
  `discount` char(4) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `helper_table_cart`
--

CREATE TABLE `helper_table_cart` (
  `cart_id` varchar(20) NOT NULL,
  `user_id` varchar(1000) NOT NULL,
  `cook_id` int(11) NOT NULL,
  `purchased` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `helper_table_user`
--

CREATE TABLE `helper_table_user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `helper_table_user`
--

INSERT INTO `helper_table_user` (`id`, `user_id`) VALUES
(1, 'user_1'),
(2, 'user_2'),
(3, 'user_3');

-- --------------------------------------------------------

--
-- Table structure for table `trending_table`
--

CREATE TABLE `trending_table` (
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `user_first_name` varchar(20) NOT NULL,
  `user_middle_name` varchar(20) NOT NULL,
  `user_last_name` varchar(20) NOT NULL,
  `user_phone_number` varchar(11) NOT NULL,
  `user_street_address` varchar(256) NOT NULL,
  `user_postal_code` int(11) NOT NULL,
  `is_cook` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_email`, `user_password`, `user_first_name`, `user_middle_name`, `user_last_name`, `user_phone_number`, `user_street_address`, `user_postal_code`, `is_cook`) VALUES
(1, 'miftahbk619@gmail.com', '$2y$10$odHaoR12wg5RCKl0qWtdm.AJpTupG7cXyZ91R/KclVSGJCRZqmoiK', 'Miftah', 'Uddin Md', 'Ihsan', '01843661619', 'Kalabagan LakeCircus Dhaka', 1205, 1),
(2, 'miftah.uddin.mohammad.ihsan@g.bracu.ac.bd', '$2y$10$LzjQVx0RreAR/.H0Vv/oxe6OPC.Wmgb5Yp5JxFNanOWLKzu3CiF6u', 'Miftah', 'Uddin Md', 'Ihsan', '01843661619', 'Kalabagan LakeCircus Dhaka', 1205, 0),
(3, 'Quazi@gmail.com', '$2y$10$y3MFSQX739koZZtx4hYHHeeJkh2efa1iv2I17U.oGax/Sv..VDF3K', 'Quazi', 'Nafiz', 'Ahmed', '01743661617', 'Rayar Bazar Dhaka', 1202, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `id` int(11) NOT NULL,
  `cart_helper_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `item` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_favourite_cook`
--

CREATE TABLE `user_favourite_cook` (
  `user_id` varchar(11) NOT NULL,
  `cook_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `youtube_videos`
--

CREATE TABLE `youtube_videos` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(50) NOT NULL,
  `video_description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cook`
--
ALTER TABLE `cook`
  ADD PRIMARY KEY (`cook_id`,`user_id`);

--
-- Indexes for table `cook_dash_board`
--
ALTER TABLE `cook_dash_board`
  ADD PRIMARY KEY (`cook_id`);

--
-- Indexes for table `cook_post`
--
ALTER TABLE `cook_post`
  ADD PRIMARY KEY (`post_id`,`cook_id`),
  ADD KEY `cook_id` (`cook_id`);

--
-- Indexes for table `helper_table_cart`
--
ALTER TABLE `helper_table_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `helper_table_user`
--
ALTER TABLE `helper_table_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `trending_table`
--
ALTER TABLE `trending_table`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_favourite_cook`
--
ALTER TABLE `user_favourite_cook`
  ADD PRIMARY KEY (`user_id`,`cook_id`),
  ADD KEY `cook_id` (`cook_id`);

--
-- Indexes for table `youtube_videos`
--
ALTER TABLE `youtube_videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cook`
--
ALTER TABLE `cook`
  MODIFY `cook_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cook_post`
--
ALTER TABLE `cook_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `youtube_videos`
--
ALTER TABLE `youtube_videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cook_dash_board`
--
ALTER TABLE `cook_dash_board`
  ADD CONSTRAINT `cook_dash_board_ibfk_1` FOREIGN KEY (`cook_id`) REFERENCES `cook` (`cook_id`);

--
-- Constraints for table `cook_post`
--
ALTER TABLE `cook_post`
  ADD CONSTRAINT `cook_post_ibfk_1` FOREIGN KEY (`cook_id`) REFERENCES `cook` (`cook_id`);

--
-- Constraints for table `helper_table_user`
--
ALTER TABLE `helper_table_user`
  ADD CONSTRAINT `helper_table_user_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_favourite_cook`
--
ALTER TABLE `user_favourite_cook`
  ADD CONSTRAINT `user_favourite_cook_ibfk_1` FOREIGN KEY (`cook_id`) REFERENCES `cook` (`cook_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
