-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 01:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_hotel_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `td_about_us`
--

CREATE TABLE `td_about_us` (
  `about_us_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `title` varchar(70) NOT NULL,
  `sub_title` varchar(200) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `inserted_id` int(11) NOT NULL,
  `inserted_date` varchar(30) NOT NULL,
  `updated_id` int(11) NOT NULL,
  `updated_date` varchar(30) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  `deleted_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_about_us`
--

INSERT INTO `td_about_us` (`about_us_id`, `content`, `image`, `title`, `sub_title`, `active_status`, `inserted_id`, `inserted_date`, `updated_id`, `updated_date`, `deleted_id`, `deleted_date`) VALUES
(1, 'MANDAARMONI the virgin golden beach on the lap of Bengal is now one remarkable confluence of the nature and lovable tourists Hotel Mandaar Quin and its members are courteous and always prepared to exhibit utmost hospitality to hte valued tourist.Located at a noise free zone the spacious elite rooms of the hotel with an overview to vast blue sea is the main attraction.\r\nThough the resturant is multicuisine,the delicious taste Bengali dishes will encourage you to comment satisfactory.Green garden,volley ground,kid\'s park provides you plenty of places to room within yhe hotel campus.Indoor games variety,Table tennis room,gym room play valuable role for the tourists during their stay and time easily passes.', '38a5771bce93e200c36f7cd9dfd0e5deaaerwf.jpg', 'ABOUT US', 'HOTEL MANDAARQUIN ', 1, 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `td_admin`
--

CREATE TABLE `td_admin` (
  `admin_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `otp` varchar(30) NOT NULL,
  `active_status` tinyint(4) NOT NULL,
  `inserted_id` int(11) NOT NULL,
  `inserted_date` varchar(25) NOT NULL,
  `updated_id` int(11) NOT NULL,
  `updated_date` varchar(25) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  `deleted_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_admin`
--

INSERT INTO `td_admin` (`admin_id`, `image`, `first_name`, `middle_name`, `last_name`, `address`, `phone`, `password`, `email_id`, `otp`, `active_status`, `inserted_id`, `inserted_date`, `updated_id`, `updated_date`, `deleted_id`, `deleted_date`) VALUES
(1, '3182873eedb4032af35e2b57a3195bd433b2aJellyfish.jpg', 'Divinotech', '', 'India Pvt. Ltd.', 'Merlin Matrix,Building,Salt Lake Sector-v, Kolkata,West Bengal.', '7875612641', '1234', 'divinotech@gmail.com', '', 1, 0, '', 2017, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `td_contact`
--

CREATE TABLE `td_contact` (
  `contact_id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `iframe` varchar(300) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `linked_in` varchar(100) NOT NULL,
  `pinterest` varchar(100) NOT NULL,
  `google` varchar(100) NOT NULL,
  `day_from` varchar(30) NOT NULL,
  `day_to` varchar(30) NOT NULL,
  `time_from` varchar(40) NOT NULL,
  `time_to` varchar(40) NOT NULL,
  `inserted_id` int(11) NOT NULL,
  `inserted_date` varchar(30) NOT NULL,
  `updated_id` int(11) NOT NULL,
  `updated_date` varchar(30) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  `deleted_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_contact`
--

INSERT INTO `td_contact` (`contact_id`, `address`, `email_id`, `phone`, `iframe`, `active_status`, `facebook`, `twitter`, `linked_in`, `pinterest`, `google`, `day_from`, `day_to`, `time_from`, `time_to`, `inserted_id`, `inserted_date`, `updated_id`, `updated_date`, `deleted_id`, `deleted_date`) VALUES
(1, 'Jack street,Chicago,USA.', 'mail@example.com', '+01 0101 01010101', 'kkal.ssjj', 1, 'https://www.facebook.com/', 'https://www.twitter.com/', '', '', '', 'Monday', 'Friday', '8AM', '7PM', 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `td_enquery`
--

CREATE TABLE `td_enquery` (
  `enquery_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email` varchar(70) NOT NULL,
  `message` text NOT NULL,
  `subject` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `inserted_id` int(11) NOT NULL,
  `inserted_date` varchar(30) NOT NULL,
  `updated_id` int(11) NOT NULL,
  `updated_date` varchar(30) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  `deleted_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_enquery`
--

INSERT INTO `td_enquery` (`enquery_id`, `name`, `phone`, `email`, `message`, `subject`, `date`, `active_status`, `inserted_id`, `inserted_date`, `updated_id`, `updated_date`, `deleted_id`, `deleted_date`) VALUES
(1, 'MICHAEL AMET', '25311003', 'mail@example.com', 'vvvvvvvvvv', 'aa', '2017-06-20 13:42:00', 1, 0, '', 0, '', 1, ''),
(2, 'Debjyoti Bhattacharjee', '8902325345', 'debrupam19930507@gmail.com', 'aaaaa', '', '2017-06-20 13:41:51', 1, 0, '', 0, '', 0, ''),
(3, 'asdasd asdasd', 'sadsadas', 'asdasdsa@d.com', 'sadsadsad', '', '2017-06-22 09:55:40', 1, 0, '', 0, '', 0, ''),
(4, 'Debjyoti Bhatt', '8902325345', 'debrupam19930507@gmail.com', 'aaaa', '', '2017-06-22 11:07:43', 1, 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `td_event`
--

CREATE TABLE `td_event` (
  `event_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(70) NOT NULL,
  `post` varchar(50) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `inserted_id` int(11) NOT NULL,
  `inserted_date` varchar(30) NOT NULL,
  `updated_id` int(11) NOT NULL,
  `updated_date` varchar(30) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  `deleted_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_event`
--

INSERT INTO `td_event` (`event_id`, `content`, `image`, `name`, `post`, `active_status`, `inserted_id`, `inserted_date`, `updated_id`, `updated_date`, `deleted_id`, `deleted_date`) VALUES
(1, '', '663295c76acbf4caaed33c36b1b5fc2cb1team-img1.jpg', 'ELIZABETH', 'FOUNDER', 1, 0, '', 0, '', 0, ''),
(2, '', '13c51ce410c124a10e0db5e4b97fc2af39team-img2.jpg', 'DIANA', 'DIRECTOR', 1, 0, '', 0, '', 0, ''),
(3, '', '79d1fe173d08e959397adf34b1d77e88d7team-img3.jpg', 'MAX PAYNE', 'MANAGER', 1, 0, '', 0, '', 0, ''),
(4, '', '38a5771bce93e200c36f7cd9dfd0e5deaateam-img4.jpg', 'JOHNNY BLAZE', 'SUPERVISOR', 1, 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `td_facilities_details`
--

CREATE TABLE `td_facilities_details` (
  `facilities_details_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `title` varchar(70) NOT NULL,
  `sub_title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `inserted_id` int(11) NOT NULL,
  `inserted_date` varchar(30) NOT NULL,
  `updated_id` int(11) NOT NULL,
  `updated_date` varchar(30) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  `deleted_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `td_facilities_details`
--

INSERT INTO `td_facilities_details` (`facilities_details_id`, `image`, `title`, `sub_title`, `content`, `date`, `active_status`, `inserted_id`, `inserted_date`, `updated_id`, `updated_date`, `deleted_id`, `deleted_date`) VALUES
(1, '50c0c7c76d30bd3dcaefc96f40275bdc0aevent-img1.jpg', 'Lorem Ipsum', 'SIT AMET CONSECTETUR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean turpis tortor, ultrices eu dignissim egestas, auctor at nibh. Duis eget auctor risus, ac vehicula ipsum. Morbi consequat, enim sit amet congue hendrerit, orci leo sollicitudin lacus, sed aliquet arcu ipsum non urna. Donec dictum libero odio, et eleifend magna faucibus eu.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean turpis tortor, ultrices eu dignissim egestas, auctor at nibh.', '2017-06-19', 1, 0, '', 0, '', 0, ''),
(2, '68a3f390d88e4c41f2747bfa2f1b5f87dbevent-img2.jpg', 'Lorem Ipsum', 'PHASELLUS AT MAURIS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean turpis tortor, ultrices eu dignissim egestas, auctor at nibh. Duis eget auctor risus, ac vehicula ipsum. Morbi consequat, enim sit amet congue hendrerit, orci leo sollicitudin lacus, sed aliquet arcu ipsum non urna. Donec dictum libero odio, et eleifend magna faucibus eu.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean turpis tortor, ultrices eu dignissim egestas, auctor at nibh.', '2017-06-20', 1, 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `td_facillities`
--

CREATE TABLE `td_facillities` (
  `facillities_id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `content` varchar(200) NOT NULL,
  `icon` varchar(20) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `inserted_id` int(11) NOT NULL,
  `inserted_date` varchar(30) NOT NULL,
  `updated_id` int(11) NOT NULL,
  `updated_date` varchar(30) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  `deleted_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_facillities`
--

INSERT INTO `td_facillities` (`facillities_id`, `title`, `content`, `icon`, `price`, `active_status`, `inserted_id`, `inserted_date`, `updated_id`, `updated_date`, `deleted_id`, `deleted_date`) VALUES
(1, 'Restaurant', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the ', 'fa fa-cutlery', '1500.00', 1, 0, '', 0, '', 0, ''),
(2, 'Bar', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since', 'fa fa-glass', '1500.00', 1, 0, '', 0, '', 0, ''),
(3, 'Room services', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the . ', 'fa fa-user', '1500.00', 1, 0, '', 0, '', 0, ''),
(4, 'Fusce feugiat', 'Donec sed nisi leo. Ut at sagittis nisi. Cras porttitor a purus ac rutrum. ', 'fa fa-asterisk', '0.00', 1, 0, '', 0, '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `td_feedback`
--

CREATE TABLE `td_feedback` (
  `feedback_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `inserted_id` int(11) NOT NULL,
  `inserted_date` varchar(30) NOT NULL,
  `updated_id` int(11) NOT NULL,
  `updated_date` varchar(30) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  `deleted_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_feedback`
--

INSERT INTO `td_feedback` (`feedback_id`, `image`, `name`, `feedback`, `date`, `active_status`, `inserted_id`, `inserted_date`, `updated_id`, `updated_date`, `deleted_id`, `deleted_date`) VALUES
(1, '241ff1de774005f8da13f42943881c655ftest-img5.jpg', 'John Doe,Supervisor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam convallis augue at auctor mollis. Aliquam sollicitudin accumsan scelerisque. Sed aliquet elit vitae ex posuere, a fringilla metus congue.', '2017-06-20', 1, 0, '', 0, '', 0, ''),
(2, '2337693cfc748049e45d87b8c7d8b9aacdtest-img3.jpg', 'Julia Roberts,Director', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam convallis augue at auctor mollis. Aliquam sollicitudin accumsan scelerisque. Sed aliquet elit vitae ex posuere, a fringilla metus congue.', '2017-06-20', 1, 0, '', 0, '', 0, ''),
(3, '78f14e45fceea167a5a36dedd4bea2543test-img1.jpg', 'Kate Winslet,Chairman', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam convallis augue at auctor mollis. Aliquam sollicitudin accumsan scelerisque. Sed aliquet elit vitae ex posuere, a fringilla metus congue.', '2017-06-20', 1, 0, '', 0, '', 0, ''),
(4, '663295c76acbf4caaed33c36b1b5fc2cb1test-img6.jpg', 'Natasha,Chairman', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam convallis augue at auctor mollis. Aliquam sollicitudin accumsan scelerisque. Sed aliquet elit vitae ex posuere, a fringilla metus congue.', '2017-06-20', 1, 0, '', 0, '', 0, ''),
(5, '8468d30a9594728bc39aa24be94b319d21test-img4.jpg', 'Monica Belucci,Manager', 'In rutrum massa ut tempus finibus. Integer auctor pulvinar libero vitae varius. Phasellus eget placerat mauris. Pellentesque pretium, urna vitae finibus mattis, quam nisi vehicula dui, in tincidunt er', '2017-06-20', 1, 0, '', 0, '', 0, ''),
(6, '2702e74f10e0327ad868d138f2b4fdd6f0test-img2.jpg', 'Britney Spears,Founder', 'In rutrum massa ut tempus finibus. Integer auctor pulvinar libero vitae varius. Phasellus eget placerat mauris. Pellentesque pretium, urna vitae finibus mattis, quam nisi vehicula dui, in tincidunt er', '2017-06-20', 1, 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `td_gallery`
--

CREATE TABLE `td_gallery` (
  `gallery_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(40) NOT NULL,
  `sub_title` varchar(200) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `inserted_id` int(11) NOT NULL,
  `inserted_date` varchar(30) NOT NULL,
  `updated_id` int(11) NOT NULL,
  `updated_date` varchar(30) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  `deleted_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_gallery`
--

INSERT INTO `td_gallery` (`gallery_id`, `menu_id`, `image`, `name`, `sub_title`, `active_status`, `inserted_id`, `inserted_date`, `updated_id`, `updated_date`, `deleted_id`, `deleted_date`) VALUES
(1, 1, '97e2ef524fbf3d9fe611d5a8e90fefdc9cwork1.jpg', 'Hotels & Ocean Scenery', 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.', 1, 0, '', 0, '', 0, ''),
(2, 1, '853ef815416f775098fe977004015c6193work3.jpg', 'Hotels & Ocean Scenery', 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.', 1, 0, '', 0, '', 0, ''),
(3, 2, '87c7e1249ffc03eb9ded908c236bd1996dwork9.jpg', 'Hotels & Ocean Scenery', 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.', 1, 0, '', 0, '', 0, ''),
(4, 2, '61679091c5a880faf6fb5e6087eb1b2dcwork7.jpg', 'Hotels & Ocean Scenery', 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.', 1, 0, '', 0, '', 0, ''),
(5, 3, '98ed3d2c21991e3bef5e069713af9fa6cawork4.jpg', 'Hotels & Ocean Scenery', 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.', 1, 0, '', 0, '', 0, ''),
(6, 4, '2098f13708210194c475687be6106a3b84work6.jpg', 'Hotels & Ocean Scenery', 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.', 1, 0, '', 0, '', 0, ''),
(7, 4, '945c48cce2e2d7fbdea1afc51c7c6ad26work4.jpg', 'Hotels & Ocean Scenery', 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.', 1, 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `td_logo`
--

CREATE TABLE `td_logo` (
  `logo_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `company_name` varchar(70) NOT NULL,
  `company_address` varchar(200) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `company` int(11) NOT NULL,
  `company_icon` varchar(20) NOT NULL,
  `awards` int(11) NOT NULL,
  `awards_icon` varchar(20) NOT NULL,
  `clients` int(11) NOT NULL,
  `clients_icon` varchar(20) NOT NULL,
  `rating` int(11) NOT NULL,
  `rating_icon` varchar(20) NOT NULL,
  `inserted_id` int(11) NOT NULL,
  `inserted_date` varchar(30) NOT NULL,
  `updated_id` int(11) NOT NULL,
  `updated_date` varchar(30) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  `deleted_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_logo`
--

INSERT INTO `td_logo` (`logo_id`, `image`, `company_name`, `company_address`, `phone`, `company`, `company_icon`, `awards`, `awards_icon`, `clients`, `clients_icon`, `rating`, `rating_icon`, `inserted_id`, `inserted_date`, `updated_id`, `updated_date`, `deleted_id`, `deleted_date`) VALUES
(1, '3619ca14e7ea6328a42e0eb13d585e4c22logo1.png', 'Divinotech India Pvt. Ltd', 'Salt Lake Sector -V,Kolkata,West Bengal', '033 2651 2413', 128, 'fa fa-money', 63, 'fa fa-trophy', 421, 'fa fa-users', 562, 'fa fa-star', 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `td_menu`
--

CREATE TABLE `td_menu` (
  `menu_id` int(11) NOT NULL,
  `menu` varchar(20) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `inserted_id` int(11) NOT NULL,
  `inserted_date` varchar(30) NOT NULL,
  `updated_id` int(11) NOT NULL,
  `updated_date` varchar(30) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  `deleted_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_menu`
--

INSERT INTO `td_menu` (`menu_id`, `menu`, `active_status`, `inserted_id`, `inserted_date`, `updated_id`, `updated_date`, `deleted_id`, `deleted_date`) VALUES
(1, 'Hotel', 1, 0, '', 0, '', 0, ''),
(2, 'Restaurants', 1, 0, '', 0, '', 0, ''),
(3, 'Crusing', 1, 0, '', 0, '', 0, ''),
(4, 'Offshore', 1, 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `td_menu_details`
--

CREATE TABLE `td_menu_details` (
  `menu_details_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `sub_title` varchar(150) NOT NULL,
  `image` varchar(200) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `inserted_id` int(11) NOT NULL,
  `inserted_date` varchar(30) NOT NULL,
  `updated_id` int(11) NOT NULL,
  `updated_date` varchar(30) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  `deleted_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_menu_details`
--

INSERT INTO `td_menu_details` (`menu_details_id`, `menu_id`, `title`, `sub_title`, `image`, `active_status`, `inserted_id`, `inserted_date`, `updated_id`, `updated_date`, `deleted_id`, `deleted_date`) VALUES
(1, 1, 'Loream', 'Consecteturaa', '213c59dc048e8850243be8079a5c74d079g1.jpg', 1, 0, '', 0, '', 0, ''),
(2, 2, 'Ipsum', 'Adipiscing', '16c74d97b01eae257e44aa9d5bade97bafg4.jpg', 1, 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `td_page`
--

CREATE TABLE `td_page` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(30) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `inserted_id` int(11) NOT NULL,
  `inserted_date` varchar(30) NOT NULL,
  `updated_id` int(11) NOT NULL,
  `updated_date` varchar(30) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  `deleted_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_page`
--

INSERT INTO `td_page` (`page_id`, `page_name`, `active_status`, `inserted_id`, `inserted_date`, `updated_id`, `updated_date`, `deleted_id`, `deleted_date`) VALUES
(1, 'Facilities', 1, 0, '', 0, '', 0, ''),
(2, 'Events', 1, 0, '', 0, '', 0, ''),
(3, 'Gallery', 1, 0, '', 0, '', 0, ''),
(4, 'Reviews & Feedback', 1, 0, '', 0, '', 0, ''),
(5, 'About Us', 1, 0, '', 0, '', 0, ''),
(6, 'Company Report', 1, 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `td_page_content`
--

CREATE TABLE `td_page_content` (
  `page_content_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `page_id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `sub_title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `inserted_id` int(11) NOT NULL,
  `inserted_date` varchar(30) NOT NULL,
  `updated_id` int(11) NOT NULL,
  `updated_date` varchar(30) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  `deleted_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `td_page_content`
--

INSERT INTO `td_page_content` (`page_content_id`, `image`, `page_id`, `title`, `sub_title`, `content`, `date`, `active_status`, `inserted_id`, `inserted_date`, `updated_id`, `updated_date`, `deleted_id`, `deleted_date`) VALUES
(1, '4317e62166fc8586dfa4d1bc0e1742c08bPenguins.jpg', 1, 'Facilities', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '0000-00-00', 1, 0, '', 0, '', 0, ''),
(2, '296ea9ab1baa0efb9e19094440c317e21bKoala.jpg', 2, 'Our Events', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '0000-00-00', 1, 0, '', 0, '', 0, ''),
(3, '', 3, 'Gallery', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '0000-00-00', 1, 0, '', 0, '', 0, ''),
(4, '', 4, 'Reviews & Feedback', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '0000-00-00', 1, 0, '', 0, '', 0, ''),
(5, '', 0, '', '', '', '0000-00-00', 1, 0, '', 0, '', 1, ''),
(6, '2702e74f10e0327ad868d138f2b4fdd6f0stats.jpg', 6, '', '', '', '0000-00-00', 1, 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `td_slider`
--

CREATE TABLE `td_slider` (
  `slider_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `title` varchar(70) NOT NULL,
  `sub_title` varchar(200) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `inserted_id` int(11) NOT NULL,
  `inserted_date` varchar(30) NOT NULL,
  `updated_id` int(11) NOT NULL,
  `updated_date` varchar(30) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  `deleted_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_slider`
--

INSERT INTO `td_slider` (`slider_id`, `image`, `title`, `sub_title`, `active_status`, `inserted_id`, `inserted_date`, `updated_id`, `updated_date`, `deleted_id`, `deleted_date`) VALUES
(1, '65fc490ca45c00b1249bbe3554a4fdf6fbbanner4.jpg', 'kolkata  the virgin golden beach on the lap of Bengal.', 'MANDAARMONI the virgin golden beach on the lap of Bengal is now one remarkable confluence of the nature and lovable tourists Hotel Mandaar Quin and its members are courteous and always prepared to exh', 1, 0, '', 0, '', 0, ''),
(2, '38a5771bce93e200c36f7cd9dfd0e5deaabanner2.jpg', 'MANDAARMONI the virgin golden beach on the lap of Bengal.', 'MANDAARMONI the virgin golden beach on the lap of Bengal is now one remarkable confluence of the nature and lovable tourists Hotel Mandaar Quin and its members are courteous and always prepared to exh', 1, 0, '', 0, '', 0, ''),
(3, '2c81e728d9d4c2f636f067f89cc14862cbanner3.jpg', 'MANDAARMONI the virgin golden beach on the lap of Bengal.', 'Kolkata the virgin golden beach on the lap of Bengal is now one remarkable confluence of the nature and lovable tourists Hotel Mandaar Quin and its members are courteous and always prepared to exh', 1, 0, '', 0, '', 0, ''),
(4, '264e732ced3463d06de0ca9a15b6153677banner4 (1).jpg', 'MANDAARMONI the virgin golden beach on the lap of Bengal.', 'MANDAARMONI the virgin golden beach on the lap of Bengal is now one remarkable confluence of the nature and lovable tourists Hotel Mandaar Quin and its members are courteous and always prepared to exh', 1, 0, '', 0, '', 0, ''),
(5, '5e4da3b7fbbce2345d7772b0674a318d5banner5.jpg', 'MANDAARMONI the virgin golden beach on the lap of Bengal.', 'MANDAARMONI the virgin golden beach on the lap of Bengal is now one remarkable confluence of the nature and lovable tourists Hotel Mandaar Quin and its members are courteous and always prepared to exh', 1, 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `td_subscribe`
--

CREATE TABLE `td_subscribe` (
  `subscribe_id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `inserted_id` int(11) NOT NULL,
  `inserted_date` varchar(30) NOT NULL,
  `updated_id` int(11) NOT NULL,
  `updated_date` varchar(30) NOT NULL,
  `deleted_id` int(11) NOT NULL,
  `deleted_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_subscribe`
--

INSERT INTO `td_subscribe` (`subscribe_id`, `email`, `date`, `active_status`, `inserted_id`, `inserted_date`, `updated_id`, `updated_date`, `deleted_id`, `deleted_date`) VALUES
(1, '', '2017-06-19 14:09:59', 1, 0, '', 0, '', 1, ''),
(3, '', '2017-06-19 14:09:56', 1, 0, '', 0, '', 1, ''),
(4, 'ma11il@example.com', '2017-06-19 14:09:49', 1, 0, '', 0, '', 0, ''),
(5, 'kk', '2017-06-20 06:13:25', 1, 0, '', 0, '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `td_about_us`
--
ALTER TABLE `td_about_us`
  ADD PRIMARY KEY (`about_us_id`);

--
-- Indexes for table `td_admin`
--
ALTER TABLE `td_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `td_contact`
--
ALTER TABLE `td_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `td_enquery`
--
ALTER TABLE `td_enquery`
  ADD PRIMARY KEY (`enquery_id`);

--
-- Indexes for table `td_event`
--
ALTER TABLE `td_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `td_facilities_details`
--
ALTER TABLE `td_facilities_details`
  ADD PRIMARY KEY (`facilities_details_id`);

--
-- Indexes for table `td_facillities`
--
ALTER TABLE `td_facillities`
  ADD PRIMARY KEY (`facillities_id`);

--
-- Indexes for table `td_feedback`
--
ALTER TABLE `td_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `td_gallery`
--
ALTER TABLE `td_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `td_logo`
--
ALTER TABLE `td_logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `td_menu`
--
ALTER TABLE `td_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `td_menu_details`
--
ALTER TABLE `td_menu_details`
  ADD PRIMARY KEY (`menu_details_id`);

--
-- Indexes for table `td_page`
--
ALTER TABLE `td_page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `td_page_content`
--
ALTER TABLE `td_page_content`
  ADD PRIMARY KEY (`page_content_id`);

--
-- Indexes for table `td_slider`
--
ALTER TABLE `td_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `td_subscribe`
--
ALTER TABLE `td_subscribe`
  ADD PRIMARY KEY (`subscribe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `td_about_us`
--
ALTER TABLE `td_about_us`
  MODIFY `about_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `td_admin`
--
ALTER TABLE `td_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `td_contact`
--
ALTER TABLE `td_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `td_enquery`
--
ALTER TABLE `td_enquery`
  MODIFY `enquery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `td_event`
--
ALTER TABLE `td_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `td_facilities_details`
--
ALTER TABLE `td_facilities_details`
  MODIFY `facilities_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `td_facillities`
--
ALTER TABLE `td_facillities`
  MODIFY `facillities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `td_feedback`
--
ALTER TABLE `td_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `td_gallery`
--
ALTER TABLE `td_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `td_logo`
--
ALTER TABLE `td_logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `td_menu`
--
ALTER TABLE `td_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `td_menu_details`
--
ALTER TABLE `td_menu_details`
  MODIFY `menu_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `td_page`
--
ALTER TABLE `td_page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `td_page_content`
--
ALTER TABLE `td_page_content`
  MODIFY `page_content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `td_slider`
--
ALTER TABLE `td_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `td_subscribe`
--
ALTER TABLE `td_subscribe`
  MODIFY `subscribe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
