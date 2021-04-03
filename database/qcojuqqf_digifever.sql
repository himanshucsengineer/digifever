-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2021 at 01:28 PM
-- Server version: 10.3.28-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qcojuqqf_digifever`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpage`
--

CREATE TABLE `addpage` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `p_name` varchar(1000) NOT NULL,
  `p_link` varchar(3000) NOT NULL,
  `p_size` varchar(1000) NOT NULL,
  `p_cate` varchar(1000) NOT NULL,
  `demo` varchar(2000) NOT NULL,
  `reach` varchar(2000) NOT NULL,
  `new_id` int(11) NOT NULL,
  `account_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addpage`
--

INSERT INTO `addpage` (`id`, `email`, `p_name`, `p_link`, `p_size`, `p_cate`, `demo`, `reach`, `new_id`, `account_status`) VALUES
(31, 'narenderrao122@gmail.com', 'School life', 'https://www.facebook.com/ischoolslife', '3M', 'Memes', '', '', 23, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(1500) NOT NULL,
  `w_number` varchar(20) NOT NULL,
  `brand` varchar(1000) NOT NULL,
  `service` varchar(1500) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `email`, `w_number`, `brand`, `service`, `description`) VALUES
(1, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '5555', 'hjyu', 'uyyu', 'uhyuy');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `p_name` varchar(1000) NOT NULL,
  `c_name` varchar(1000) NOT NULL,
  `amount` int(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `email`, `p_name`, `c_name`, `amount`) VALUES
(5, 'vikaspoonia17@gmail.com', 'idiotic minds', 'icici', 500),
(3, 'himanshugoyal1591998@gmail.com', 'test3', 'test3', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `houdinv_staff_management`
--

CREATE TABLE `houdinv_staff_management` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(250) NOT NULL,
  `staff_contact_number` varchar(250) NOT NULL,
  `staff_department` varchar(250) NOT NULL,
  `staff_status` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `staff_warehouse` int(11) NOT NULL,
  `staff_email` varchar(250) NOT NULL,
  `staff_password` varchar(250) DEFAULT NULL,
  `staff_password_salt` varchar(150) DEFAULT NULL,
  `staff_alternat_contact` varchar(250) DEFAULT NULL,
  `staff_address` longtext NOT NULL,
  `password_send` varchar(250) DEFAULT NULL,
  `houdinv_staff_auth_token` varchar(255) NOT NULL,
  `houdinv_staff_auth_url_token` varchar(255) NOT NULL,
  `create_date` varchar(200) NOT NULL,
  `update_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houdinv_staff_management`
--

INSERT INTO `houdinv_staff_management` (`staff_id`, `staff_name`, `staff_contact_number`, `staff_department`, `staff_status`, `image`, `staff_warehouse`, `staff_email`, `staff_password`, `staff_password_salt`, `staff_alternat_contact`, `staff_address`, `password_send`, `houdinv_staff_auth_token`, `houdinv_staff_auth_url_token`, `create_date`, `update_date`) VALUES
(2, 'himanshu', '', 'Account', 1, 'http://localhost/digifever/upload/profilepic/image-1613757816.png', 4, 'himanshugoyal1011@gmail.com', '$2y$10$thV9bNXzhKb/ieJwfSX6I.mAOberDRBO0bB0ckoOnHi7n8yznnMNG', '$2y$10$thV9bNXzhKb/ieJwfSX6I.6O2PEutLuu9N2iEMCN3sdnJdQTaZvWG', '', '\\', 'email', 'kUhTj6', 'kUhTj6', '1532432610', '1613757816'),
(3, 'himanshu', '', '', 1, 'http://localhost/digifever/upload/profilepic/image-1613757816.png', 1, 'himanshugoyal1011@gmail.com', '$2y$10$thV9bNXzhKb/ieJwfSX6I.mAOberDRBO0bB0ckoOnHi7n8yznnMNG', '$2y$10$thV9bNXzhKb/ieJwfSX6I.6O2PEutLuu9N2iEMCN3sdnJdQTaZvWG', NULL, '', NULL, '', '', '', '1613757816'),
(10, 'himanshu', '', 'Account', 1, 'http://localhost/digifever/upload/profilepic/image-1613757816.png', 1, 'himanshugoyal1011@gmail.com', '$2y$10$thV9bNXzhKb/ieJwfSX6I.mAOberDRBO0bB0ckoOnHi7n8yznnMNG', '$2y$10$thV9bNXzhKb/ieJwfSX6I.6O2PEutLuu9N2iEMCN3sdnJdQTaZvWG', NULL, '', NULL, '', '', '', '1613757816');

-- --------------------------------------------------------

--
-- Table structure for table `referandearn`
--

CREATE TABLE `referandearn` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `number` varchar(15) NOT NULL,
  `upi` varchar(500) NOT NULL,
  `pass` varchar(1000) NOT NULL,
  `pa_link` varchar(2000) NOT NULL,
  `account_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `referandearn`
--

INSERT INTO `referandearn` (`id`, `name`, `email`, `number`, `upi`, `pass`, `pa_link`, `account_status`) VALUES
(1, 'HIMANSHU GO', 'himanshugoyal1591998@gmail.com', '8385902167', '1234@upi', '1234', '', 'Approved'),
(4, 'Vikas', 'vikaspoonia17@gmail.com', '', '', 'vikas@123', '', 'Approved'),
(17, 'Ayush Singh', 'ayushrajpoot209@gmail.com', '8081836958', '', 'ayushxyz', 'https://www.facebook.com/ragavsmitron/', 'Approved'),
(18, 'Narender Rao', 'narenderrao122@gmail.com', '9053422744', '', 'nandu@123', 'https://www.facebook.com/ischoolslife', 'Approved'),
(19, 'hi', 'h@gmail.com', '676576', '', '123', 'dgdhgh', '');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `amount` int(100) NOT NULL,
  `account_status` varchar(500) NOT NULL,
  `account_date` varchar(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`id`, `email`, `amount`, `account_status`, `account_date`) VALUES
(17, 'himanshugoyal1591998@gmail.com', 500, 'Transfer', '2021-02-23 '),
(18, 'himanshugoyal1591998@gmail.com', 500, 'Pending', '2021-02-23 '),
(19, '', 500, '', '2021-02-27 '),
(20, 'himanshugoyal1591998@gmail.com', 500, '', '2021-02-27 '),
(21, 'himanshugoyal1591998@gmail.com', 500, '', '2021-02-27 '),
(22, 'vikaspoonia17@gmail.com', 200, 'Transfer', '2021-02-27 '),
(23, 'narenderrao122@gmail.com', 2147483647, '', '2021-03-04 ');

-- --------------------------------------------------------

--
-- Table structure for table `work_production`
--

CREATE TABLE `work_production` (
  `id` int(11) NOT NULL,
  `production` varchar(2000) NOT NULL,
  `cate` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `link` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_production`
--

INSERT INTO `work_production` (`id`, `production`, `cate`, `name`, `link`) VALUES
(45, 'https://digifever.in/upload/work/production/production-1615230379.png', 'movies', 'sate pe satta', 'https://www.instagram.com/'),
(44, 'https://digifever.in/upload/work/production/production-1615230061.jpg', 'songs', 'Dillagi', 'www.instagram.com'),
(41, 'https://digifever.in/upload/work/production/production-1615229964.png', 'songs', 'Tere naam', 'www.instagram.com'),
(42, 'https://digifever.in/upload/work/production/production-1615229990.jpeg', 'songs', 'Dil to pagal hai', 'www.instagram.com'),
(43, 'https://digifever.in/upload/work/production/production-1615230025.jpg', 'songs', 'Dil de chuke sanam', 'www.instagram.com'),
(39, 'https://digifever.in/upload/work/production/production-1615229764.jpg', 'production', 'Rajshree', 'http://www.rajshri.com/'),
(40, 'https://digifever.in/upload/work/production/production-1615229934.jpg', 'songs', 'Dil chate ho', 'www.instagram.com'),
(36, 'https://digifever.in/upload/work/production/production-1615229632.jpeg', 'production', 'Inox', 'https://www.inoxmovies.com/'),
(37, 'https://digifever.in/upload/work/production/production-1615229662.jpg', 'production', 'PVR ', 'https://www.pvrcinemas.com/'),
(38, 'https://digifever.in/upload/work/production/production-1615229723.png', 'production', 'Viacom 18', 'https://www.viacom18.com/'),
(33, 'https://digifever.in/upload/work/production/production-1615226630.jpg', 'brands', 'Paytm', 'https://paytm.com/'),
(32, 'https://digifever.in/upload/work/production/production-1615226600.png', 'brands', 'Vivo', 'https://www.vivo.com/'),
(30, 'https://digifever.in/upload/work/production/production-1615226513.png', 'brands', 'Flipkart', 'https://www.flipkart.com/'),
(31, 'https://digifever.in/upload/work/production/production-1615226554.jpg', 'brands', 'Tinder', 'https://tinder.com/en'),
(60, 'https://digifever.in/upload/work/production/production-1615648586.jpg', 'brands', 'parle', 'https://www.parleproducts.com/'),
(35, 'https://digifever.in/upload/work/production/production-1615229591.jpg', 'production', 'Reliance Entertainment', 'https://www.relianceentertainment.com/'),
(46, 'https://digifever.in/upload/work/production/production-1615230410.jpg', 'movies', 'Dishom', 'https://www.instagram.com/'),
(47, 'https://digifever.in/upload/work/production/production-1615230446.jpg', 'movies', 'College Romance', 'https://www.instagram.com/'),
(48, 'https://digifever.in/upload/work/production/production-1615230474.png', 'movies', 'Bajigar', 'https://www.instagram.com/'),
(49, 'https://digifever.in/upload/work/production/production-1615230528.png', 'movies', 'Hamari adahuri kahani', 'https://www.instagram.com/'),
(50, 'https://digifever.in/upload/work/production/production-1615230557.jpg', 'movies', 'Dil de chuke sanam', 'https://www.instagram.com/'),
(51, 'https://digifever.in/upload/work/production/production-1615230893.jpeg', 'serial', 'TaraK mehta', 'https://www.instagram.com/'),
(52, 'https://digifever.in/upload/work/production/production-1615230921.jpg', 'serial', 'Dil janiye', 'https://www.instagram.com/'),
(53, 'https://digifever.in/upload/work/production/production-1615230944.png', 'serial', 'Rodies', 'https://www.instagram.com/'),
(54, 'https://digifever.in/upload/work/production/production-1615230976.jpg', 'serial', 'Gullak', 'https://www.instagram.com/'),
(55, 'https://digifever.in/upload/work/production/production-1615231045.jpg', 'serial', 'College days', 'https://www.instagram.com/'),
(56, 'https://digifever.in/upload/work/production/production-1615231140.jpg', 'pr', 'Disha Patani', 'https://www.instagram.com/'),
(57, 'https://digifever.in/upload/work/production/production-1615231563.jpg', 'pr', 'Anushka Sharma', 'https://www.instagram.com/'),
(58, 'https://digifever.in/upload/work/production/production-1615231587.jpg', 'pr', 'Nora ', 'https://www.instagram.com/'),
(59, 'https://digifever.in/upload/work/production/production-1615231616.jpg', 'pr', 'Aishwarya', 'https://www.instagram.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpage`
--
ALTER TABLE `addpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houdinv_staff_management`
--
ALTER TABLE `houdinv_staff_management`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `referandearn`
--
ALTER TABLE `referandearn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_production`
--
ALTER TABLE `work_production`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addpage`
--
ALTER TABLE `addpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `houdinv_staff_management`
--
ALTER TABLE `houdinv_staff_management`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `referandearn`
--
ALTER TABLE `referandearn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `work_production`
--
ALTER TABLE `work_production`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
