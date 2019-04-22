-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2016 at 10:37 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `divino_new_erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `sub_title` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `active_status` int(1) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_id`, `title`, `sub_title`, `image`, `description`, `active_status`, `deleted_id`) VALUES
(1, 'Best way to <span>get</span> your <span>job</span> done', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore', '23495658291350529ba8278ee3c743f7fcd95img-1.jpg', 'Blore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ', 1, 0),
(2, 'Title', 'Sub Title', '24250721cabf17ecdcf8cf90ac51b1676bc54Chrysanthemum.jpg', 'Description', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `apply_details`
--

CREATE TABLE IF NOT EXISTS `apply_details` (
  `apply_id` int(11) NOT NULL AUTO_INCREMENT,
  `cur_id` int(11) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `resume_title` varchar(25) NOT NULL,
  `current_location` varchar(30) NOT NULL,
  `mobile_number` int(11) NOT NULL,
  `industry` varchar(30) NOT NULL,
  `skills` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `resume_file` text NOT NULL,
  `active_status` int(1) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  PRIMARY KEY (`apply_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `active_status` int(1) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `current_openings`
--

CREATE TABLE IF NOT EXISTS `current_openings` (
  `cur_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `title` varchar(25) NOT NULL,
  `short_description` tinytext NOT NULL,
  `long_description` text NOT NULL,
  `location` varchar(35) NOT NULL,
  `active_status` int(1) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  PRIMARY KEY (`cur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `current_openings`
--

INSERT INTO `current_openings` (`cur_id`, `image`, `title`, `short_description`, `long_description`, `location`, `active_status`, `deleted_id`) VALUES
(1, '10858c05c0c0aa89b97effea59096cad7bd60big-list-1.jpg', 'MOBILE APPS', 'ENIM ANOED MINIM VEIN QUIS NOSTRUD', 'Dolor sit amet, consectetur adipin et dolore magna aliquLorem ipsum dolor sit amet, consectetur adipis icing elit, sed do eiusmod tempor incididunt', 'Kolkata ', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `d_00_user`
--

CREATE TABLE IF NOT EXISTS `d_00_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(30) NOT NULL,
  `user_middle_name` varchar(30) NOT NULL,
  `user_last_name` varchar(30) NOT NULL,
  `user_role_id` tinyint(4) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `alternative_no` varchar(20) NOT NULL,
  `country_id` tinyint(4) NOT NULL,
  `email_id` varchar(80) NOT NULL,
  `registration_date` date NOT NULL,
  `inserted_id` int(11) NOT NULL,
  `inserted_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_id` int(11) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_id` int(11) NOT NULL,
  `deleted_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `d_00_user`
--

INSERT INTO `d_00_user` (`user_id`, `user_first_name`, `user_middle_name`, `user_last_name`, `user_role_id`, `user_name`, `password`, `mobile_no`, `alternative_no`, `country_id`, `email_id`, `registration_date`, `inserted_id`, `inserted_date`, `updated_id`, `updated_date`, `deleted_id`, `deleted_date`) VALUES
(1, 'Santosh', 'Kumar', 'Oficee', 0, 'san', '9f5a44a734ac9e43b5968d0f3b71d69b', 2147483647, '142536987', 1, 'san@gmail.coim', '2016-07-12', 0, '2016-07-14 05:30:16', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(2, 'Ashim', 'Kumar', 'Pakhira', 0, 'ashim', 'ashim', 1234567890, '22222222222222', 1, 'ashim@gmail.comkutta', '2016-07-15', 0, '2016-07-14 05:29:50', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(3, 'Devendu', 'Nath', 'Stockiest suwar', 2, 'dev', 'dev', 333333333, '10101010101010', 1, 'dev@gmail.com2222', '2016-07-14', 0, '2016-07-12 06:39:51', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(4, 'Ashim', 'KUMAR', 'Kamina', 2, 'user_kutta', '1be81c3d17831f66762187b4d3cd08d0', 2147483647, '6666666666', 1, 'kuta@gmail.com', '2016-07-30', 0, '2016-07-28 08:20:30', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(5, 'Shuvraa', '', 'Pan', 1, 'shuvra_pan', '9d9b8678a6f8eb4b21eaa7e084948d6e', 2147483647, '8013793061', 1, 'divinotech.shuvra@gmail.com', '2016-07-12', 0, '2016-07-12 11:50:52', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(6, 'stockiest', '', 'test ', 2, 'stockiest_test', '03d25b3dc4f4a37fc9ceb5baa455d594', 2147483647, '8013793061', 1, 'stockiest_test@gmail.com', '2016-07-12', 0, '2016-07-12 11:55:22', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(7, 'Stockiest ', '', 'new', 2, 'stockiest_new', '95192c98732387165bf8e396c0f2dad2', 2147483647, '8013793061', 1, 'dhgsadg@gmail.com', '2016-07-12', 0, '2016-07-12 12:50:10', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(8, 'surajit', 'kumar', 'haldar', 2, 'surajit', 'f83e1b7b65f57e17c414fb2853d028c7', 2147483647, '9046922933', 0, 'surajit.ah@gmail.com', '2016-07-28', 0, '2016-07-28 08:24:16', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(9, 'AKASH', 'KUMAR', 'HALADR', 2, 'akash', '94754d0abb89e4cf0a7f1c494dbb9d2c', 2147483647, '9046922933', 0, 'akash.dot.d@gmail.com', '2016-07-28', 0, '2016-07-28 08:26:17', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(10, 'dfgd', 'gdfg', 'dfgdfg', 2, 'akashkkk', '94754d0abb89e4cf0a7f1c494dbb9d2c', 45456, '456456', 0, 'dfgdfg@hhhh.d', '2016-07-28', 0, '2016-07-28 08:36:04', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `d_01_log_details`
--

CREATE TABLE IF NOT EXISTS `d_01_log_details` (
  `log_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL,
  `logout_date` date NOT NULL,
  `logout_time` time NOT NULL,
  `deleted_id` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_details_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `d_01_log_details`
--

INSERT INTO `d_01_log_details` (`log_details_id`, `user_id`, `login_date`, `login_time`, `logout_date`, `logout_time`, `deleted_id`) VALUES
(1, 1, '2016-07-26', '15:04:55', '2016-07-26', '15:44:26', 0),
(2, 1, '2016-07-26', '15:44:29', '2016-07-26', '15:46:44', 0),
(3, 4, '2016-07-26', '15:46:53', '2016-07-26', '15:47:00', 0),
(4, 1, '2016-07-26', '15:47:04', '0000-00-00', '00:00:00', 0),
(5, 1, '2016-07-27', '10:22:19', '2016-07-27', '10:23:15', 0),
(6, 2, '2016-07-27', '10:23:29', '2016-07-27', '19:13:46', 0),
(7, 1, '2016-07-27', '19:13:57', '0000-00-00', '00:00:00', 0),
(8, 1, '2016-07-28', '11:09:35', '0000-00-00', '00:00:00', 0),
(9, 9, '2016-07-28', '14:57:55', '0000-00-00', '00:00:00', 0),
(10, 9, '2016-07-28', '14:58:04', '0000-00-00', '00:00:00', 0),
(11, 9, '2016-07-28', '14:58:24', '0000-00-00', '00:00:00', 0),
(12, 9, '2016-07-28', '14:59:58', '0000-00-00', '00:00:00', 0),
(13, 9, '2016-07-28', '15:00:01', '0000-00-00', '00:00:00', 0),
(14, 9, '2016-07-28', '15:00:18', '0000-00-00', '00:00:00', 0),
(15, 9, '2016-07-28', '15:03:02', '0000-00-00', '00:00:00', 0),
(16, 9, '2016-07-28', '15:03:27', '0000-00-00', '00:00:00', 0),
(17, 9, '2016-07-28', '15:03:30', '0000-00-00', '00:00:00', 0),
(18, 9, '2016-07-28', '15:04:48', '0000-00-00', '00:00:00', 0),
(19, 9, '2016-07-28', '15:05:01', '0000-00-00', '00:00:00', 0),
(20, 9, '2016-07-28', '18:56:03', '0000-00-00', '00:00:00', 0),
(21, 9, '2016-07-29', '10:52:27', '0000-00-00', '00:00:00', 0),
(22, 9, '2016-07-30', '11:16:07', '0000-00-00', '00:00:00', 0),
(23, 9, '2016-08-01', '11:16:10', '0000-00-00', '00:00:00', 0),
(24, 9, '2016-08-01', '16:03:03', '0000-00-00', '00:00:00', 0),
(25, 9, '2016-08-01', '17:01:13', '0000-00-00', '00:00:00', 0),
(26, 9, '2016-08-02', '11:25:19', '0000-00-00', '00:00:00', 0),
(27, 9, '2016-08-02', '11:42:58', '0000-00-00', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `enquery`
--

CREATE TABLE IF NOT EXISTS `enquery` (
  `enquery_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `deleted_id` int(11) NOT NULL,
  PRIMARY KEY (`enquery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `enquery`
--

INSERT INTO `enquery` (`enquery_id`, `name`, `email`, `subject`, `message`, `deleted_id`) VALUES
(1, 'sdsd', 'asdfasf@gfh', 'dghdfg', 'dfgdfg', 1),
(2, 'ggbdf', 'dbzdfb@hbf', 'dfsdf', 'dsfasdf', 1),
(3, 'SURAJIT HALADAR', 'surajit.ah@gmail.com', 'PYTHON', 'HI I AM  SURAJIT HALADRA JUST FOR TEST', 0);

-- --------------------------------------------------------

--
-- Table structure for table `industry_details`
--

CREATE TABLE IF NOT EXISTS `industry_details` (
  `industry_id` int(11) NOT NULL AUTO_INCREMENT,
  `industry_name` varchar(50) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  PRIMARY KEY (`industry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `our_client`
--

CREATE TABLE IF NOT EXISTS `our_client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `active_status` int(1) NOT NULL,
  `show_in_index` int(1) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `our_client`
--

INSERT INTO `our_client` (`client_id`, `name`, `image`, `description`, `active_status`, `show_in_index`, `deleted_id`) VALUES
(1, 'dfgdgd', '126516fbb698655e6b0fdd299a543951c27ecPenguins.jpg', 'dfgdfg', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `short_description`
--

CREATE TABLE IF NOT EXISTS `short_description` (
  `short_descp_id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `active_status` int(1) NOT NULL DEFAULT '1',
  `deleted_id` int(11) NOT NULL,
  PRIMARY KEY (`short_descp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `short_description`
--

INSERT INTO `short_description` (`short_descp_id`, `icon`, `title`, `description`, `active_status`, `deleted_id`) VALUES
(1, 'icofont icofont-light-bulb', 'OUR MISSION', 'Lorem ipsum dolor sit amet, consectetur adipised do eiusmod tempor incididunt ut labore et dolore magna al enim ad minim venia', 1, 0),
(2, 'icofont icofont-user-alt-2', 'WHO WE ARE', 'Lorem ipsum dolor sit amet, consectetur adipised do eiusmod tempor incididunt ut labore et dolore magna al enim ad minim venia', 1, 0),
(3, 'icofont icofont-rocket', 'OUR VISION', 'Lorem ipsum dolor sit amet, consectetur adipised do eiusmod tempor incididunt ut labore et dolore magna al enim ad minim venia', 1, 0),
(4, 'A', 'A', 'A', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `active_status` int(1) NOT NULL,
  `deleted_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `image`, `title`, `description`, `active_status`, `deleted_id`) VALUES
(11, '14305d0a17b281c3e4eaef6718d891e38cb42slide-6.jpg', 'Do it simple and <br> Make it clear', 'Abomco laboris nisi ut aliquip ex ea commodo consequat. <br> Dulo rem ipsum dolor sit ame blueprint desing. Lorem ipsum  <br>  dolor sit  amet, consectetur adipisicing', 1, 0),
(12, '231049c0b9d84c2a16fcaf9d25694fda75e1slide-1.jpg', 'The Thing that we <br><span>care</span> most', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `active_status` int(1) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`test_id`, `image`, `title`, `description`, `name`, `designation`, `active_status`, `deleted_id`) VALUES
(1, '266396af814698155afb9511dd5e91454834aLighthouse.jpg', 'asd', 'asd', 'asd', 'sad', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
