-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2018 at 11:10 AM
-- Server version: 5.6.35
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_m_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `userid` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `last_visit` datetime DEFAULT NULL,
  `last_visit_ip` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `roleid` int(11) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `is_admin` int(11) DEFAULT '0',
  `is_active` int(11) DEFAULT '1',
  `def_storeid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`userid`, `user_name`, `password`, `email`, `last_visit`, `last_visit_ip`, `created_date`, `created_by`, `modified_by`, `modified_date`, `roleid`, `last_name`, `first_name`, `is_admin`, `is_active`, `def_storeid`) VALUES
(4, 'admin', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com', '2018-07-02 09:02:31', '::1', '2015-01-29 15:10:34', NULL, NULL, NULL, 1, 'System', 'Administrator', 1, 1, NULL),
(5, 'chetra', '202cb962ac59075b964b07152d234b70', 'eing.chetra@gmail.com', '2018-07-02 09:02:31', '::1', '2015-02-02 17:26:36', NULL, NULL, NULL, 2, 'eing', 'chetra', 0, 0, NULL),
(1497, 'store', 'e10adc3949ba59abbe56e057f20f883e', 'store@green.com', '2018-07-02 09:02:31', '::1', '2015-06-26 08:10:54', NULL, NULL, NULL, 21, 'Green', 'Store', 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('8b9ac373e175b8f80b15a01d68a02ece', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 1530521841, 'a:14:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:7:\"english\";s:6:\"userid\";s:1:\"4\";s:9:\"user_name\";s:5:\"admin\";s:8:\"password\";s:32:\"202cb962ac59075b964b07152d234b70\";s:6:\"roleid\";s:1:\"1\";s:9:\"last_name\";s:6:\"System\";s:10:\"first_name\";s:13:\"Administrator\";s:10:\"last_visit\";s:19:\"2018-06-29 08:57:10\";s:13:\"last_visit_ip\";s:3:\"::1\";s:9:\"moduleids\";a:6:{i:0;a:1:{s:8:\"moduleid\";s:1:\"7\";}i:1;a:1:{s:8:\"moduleid\";s:2:\"10\";}i:2;a:1:{s:8:\"moduleid\";s:2:\"15\";}i:3;a:1:{s:8:\"moduleid\";s:2:\"12\";}i:4;a:1:{s:8:\"moduleid\";s:2:\"11\";}i:5;a:1:{s:8:\"moduleid\";s:1:\"1\";}}s:12:\"ModuleInfors\";a:6:{i:7;a:4:{s:8:\"moduleid\";s:1:\"7\";s:11:\"module_name\";s:4:\"Menu\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:10;a:0:{}i:15;a:0:{}i:12;a:4:{s:8:\"moduleid\";s:2:\"12\";s:11:\"module_name\";s:6:\"Banner\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:11;a:4:{s:8:\"moduleid\";s:2:\"11\";s:11:\"module_name\";s:7:\"Article\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:1;a:0:{}}s:10:\"PageInfors\";a:5:{i:7;a:4:{i:63;a:14:{s:6:\"pageid\";s:2:\"63\";s:9:\"page_name\";s:9:\"Menu List\";s:4:\"link\";s:10:\"menu/index\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"10\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 15:53:36\";s:4:\"icon\";s:7:\"fa-bars\";}i:64;a:14:{s:6:\"pageid\";s:2:\"64\";s:9:\"page_name\";s:12:\"Add New Menu\";s:4:\"link\";s:8:\"menu/add\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"11\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 15:53:58\";s:4:\"icon\";s:7:\"fa-bars\";}i:75;a:14:{s:6:\"pageid\";s:2:\"75\";s:9:\"page_name\";s:16:\"Add New Category\";s:4:\"link\";s:12:\"category/add\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"12\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2017-12-22 13:42:09\";s:4:\"icon\";s:7:\"fa-bars\";}i:76;a:14:{s:6:\"pageid\";s:2:\"76\";s:9:\"page_name\";s:13:\"Category List\";s:4:\"link\";s:14:\"category/index\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"13\";s:9:\"is_insert\";s:2:\"11\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2017-12-22 13:42:54\";s:4:\"icon\";s:7:\"fa-bars\";}}i:10;a:2:{i:67;a:14:{s:6:\"pageid\";s:2:\"67\";s:9:\"page_name\";s:12:\"Product List\";s:4:\"link\";s:13:\"product/index\";s:8:\"moduleid\";s:2:\"10\";s:5:\"order\";s:1:\"1\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-12 17:10:07\";s:4:\"icon\";s:7:\"fa-bars\";}i:68;a:14:{s:6:\"pageid\";s:2:\"68\";s:9:\"page_name\";s:16:\"Add New Products\";s:4:\"link\";s:11:\"product/add\";s:8:\"moduleid\";s:2:\"10\";s:5:\"order\";s:1:\"2\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-12 17:10:46\";s:4:\"icon\";s:7:\"fa-bars\";}}i:12;a:2:{i:69;a:14:{s:6:\"pageid\";s:2:\"69\";s:9:\"page_name\";s:11:\"Banner List\";s:4:\"link\";s:20:\"setup/setupads/index\";s:8:\"moduleid\";s:2:\"12\";s:5:\"order\";s:1:\"0\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-02-05 23:16:13\";s:4:\"icon\";s:7:\"fa-bars\";}i:70;a:14:{s:6:\"pageid\";s:2:\"70\";s:9:\"page_name\";s:14:\"Add New Banner\";s:4:\"link\";s:18:\"setup/setupads/add\";s:8:\"moduleid\";s:2:\"12\";s:5:\"order\";s:1:\"1\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-02-05 23:15:42\";s:4:\"icon\";s:7:\"fa-bars\";}}i:11;a:2:{i:65;a:14:{s:6:\"pageid\";s:2:\"65\";s:9:\"page_name\";s:12:\"Article List\";s:4:\"link\";s:13:\"article/index\";s:8:\"moduleid\";s:2:\"11\";s:5:\"order\";s:1:\"4\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 16:46:23\";s:4:\"icon\";s:7:\"fa-bars\";}i:66;a:14:{s:6:\"pageid\";s:2:\"66\";s:9:\"page_name\";s:15:\"Add New Article\";s:4:\"link\";s:11:\"article/add\";s:8:\"moduleid\";s:2:\"11\";s:5:\"order\";s:1:\"5\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 16:47:08\";s:4:\"icon\";s:7:\"fa-bars\";}}i:1;a:4:{i:5;a:14:{s:6:\"pageid\";s:1:\"5\";s:9:\"page_name\";s:4:\"Page\";s:4:\"link\";s:12:\"setting/page\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"0\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"0\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"0\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 17:00:01\";s:4:\"icon\";s:9:\"fa-file-o\";}i:6;a:14:{s:6:\"pageid\";s:1:\"6\";s:9:\"page_name\";s:12:\"User Profile\";s:4:\"link\";s:12:\"setting/user\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"0\";s:9:\"is_export\";s:1:\"0\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:56:20\";s:4:\"icon\";s:7:\"fa-user\";}i:7;a:14:{s:6:\"pageid\";s:1:\"7\";s:9:\"page_name\";s:9:\"User Role\";s:4:\"link\";s:12:\"setting/role\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:57:09\";s:4:\"icon\";s:7:\"fa-user\";}i:8;a:14:{s:6:\"pageid\";s:1:\"8\";s:9:\"page_name\";s:11:\"Role Access\";s:4:\"link\";s:18:\"setting/permission\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"0\";s:7:\"is_show\";s:1:\"0\";s:8:\"is_print\";s:1:\"0\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:56:46\";s:4:\"icon\";s:9:\"fa-wrench\";}}}s:10:\"PageAction\";a:5:{i:7;a:4:{i:63;s:1:\"1\";i:64;s:1:\"1\";i:75;s:1:\"1\";i:76;s:1:\"1\";}i:10;a:2:{i:67;s:1:\"1\";i:68;s:1:\"1\";}i:12;a:2:{i:69;s:1:\"1\";i:70;s:1:\"1\";}i:11;a:2:{i:65;s:1:\"1\";i:66;s:1:\"1\";}i:1;a:4:{i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"0\";}}}');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_item`
--

CREATE TABLE `dashboard_item` (
  `dashid` int(11) NOT NULL,
  `dash_item` varchar(255) DEFAULT NULL,
  `moduleid` int(11) DEFAULT NULL,
  `link_pageid` int(11) DEFAULT NULL,
  `is_show` int(11) NOT NULL DEFAULT '1',
  `block` varchar(255) DEFAULT NULL COMMENT 'left_top,left_bottom'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dashboard_item`
--

INSERT INTO `dashboard_item` (`dashid`, `dash_item`, `moduleid`, `link_pageid`, `is_show`, `block`) VALUES
(1, 'Student', 3, 10, 1, 'top_left');

-- --------------------------------------------------------

--
-- Table structure for table `site_profile`
--

CREATE TABLE `site_profile` (
  `id` int(11) UNSIGNED NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `weixin` varchar(255) DEFAULT NULL,
  `date_post` datetime DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_profile`
--

INSERT INTO `site_profile` (`id`, `site_name`, `address`, `phone`, `email`, `facebook`, `google_plus`, `youtube`, `twitter`, `linkedin`, `weixin`, `date_post`, `is_active`) VALUES
(1, '855 solution', '418Eo+E1, Phlauv 358, Sangkat Chbar Ampov, Khan Chbar Ampov , Phnom Penh.', '015 871 787 / 092 226 133', 'info@855solution.com', 'https://www.facebook.com/%E1%9E%93%E1%9E%B6%E1%9E%99%E1%9E%80%E1%9E%8A%E1%9F%92%E1%9E%8B%E1%9E%B6%E1%9E%93%E1%9E%9C%E1%9E%B7%E1%9E%91%E1%9F%92%E1%9E%99%E1%9E%BB%E1%9E%91%E1%9E%B6%E1%9E%80%E1%9F%8B%E1%9E%91%E1%9E%84-112512662798448/', 'https://plus.google.com/117575618297062468775', '', 'https://twitter.com/Kimhay98Kh', '', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblarticle`
--

CREATE TABLE `tblarticle` (
  `article_id` int(11) NOT NULL,
  `article_title` text CHARACTER SET utf8 NOT NULL,
  `article_title_kh` text CHARACTER SET utf8 NOT NULL,
  `content_kh` text CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `is_active` int(1) NOT NULL,
  `is_marguee` int(1) NOT NULL DEFAULT '0',
  `meta_keyword` text CHARACTER SET utf8 NOT NULL,
  `meta_desc` text CHARACTER SET utf8 NOT NULL,
  `location_id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `article_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblarticle`
--

INSERT INTO `tblarticle` (`article_id`, `article_title`, `article_title_kh`, `content_kh`, `content`, `is_active`, `is_marguee`, `meta_keyword`, `meta_desc`, `location_id`, `icon`, `article_date`) VALUES
(54, 'OUR PRODUCT', 'OUR PRODUCT', '', '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; line-height: 1.5rem; font-size: 18px; color: rgb(86, 86, 86); font-family: robotolight;\">\n	Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; list-style: none; padding: 0px; color: rgb(86, 86, 86); font-family: robotolight; font-size: 15px;\">\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Quisque volutpat mattis eros.</li>\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Nullam malesuada erat ut turpis.</li>\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Suspendisse urna nibh.</li>\n</ul>\n', 1, 1, '', 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.', 13, '', '2018-01-30'),
(55, 'TOKUTOKUYA MINI MART', 'TOKUTOKUYA MINI MART', '', '', 1, 1, '', '', 10, '', '2018-02-19'),
(56, 'KHMER LEADING', 'KHMER LEADING', '', '', 1, 1, '', '', 10, '', '2018-02-19'),
(57, 'PHS ASIA CO., LTD', 'PHS ASIA CO., LTD', '', '<h2 style=\"box-sizing: border-box; font-family: BreeSerif-Regular; font-weight: 500; line-height: 1.1; color: rgb(0, 0, 0); margin: 0px; font-size: 2.2em; text-align: center;\">\n	<img height=\"505\" src=\"http://855solution.com/photos/1/5747b0101122f.JPG\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; display: block; height: auto; max-width: 100%;\" width=\"1090\" /></h2>\n<h2 style=\"box-sizing: border-box; font-family: BreeSerif-Regular; font-weight: 500; line-height: 1.1; color: rgb(0, 0, 0); margin: 0px; font-size: 2.2em; text-align: center;\">\n	&nbsp;</h2>\n<h2 style=\"box-sizing: border-box; font-family: BreeSerif-Regular; font-weight: 500; line-height: 1.1; color: rgb(0, 0, 0); margin: 0px; font-size: 2.2em; text-align: center;\">\n	Welcome to PHS Asia</h2>\n<p style=\"box-sizing: border-box; margin: 1em 0px 0px; font-size: 15px; color: rgb(0, 0, 0); line-height: 1.8em; font-family: Lato, sans-serif; text-align: justify;\">\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PHS Cambodia is one of Cambodia&rsquo;s premier Commercial supply Hospitality Product andService Specialists. We offer all major lines ofcommercial, hospitality supply including all kind of room linens, room divisionproducts, room amenities and more, same as F&amp;B Linens, Chinaware,Silverware, F&amp;B equipment and more, We also supply Spa products to hotelsand Resorts. As a local leader in providing range of hotel products and servicesupply with 04 years of experience we always place our customers best interestsfirst, focusing on your individual needs providing quality products and aftersales service.</p>\n', 1, 1, '', '', 10, '', '2018-02-19'),
(59, 'KNN NEWS', 'KNN NEWS', '', '', 1, 1, '', '', 10, '', '2018-02-20'),
(60, 'SIM SANG CONSTRUCTION', 'SIM SANG CONSTRUCTION', '', '', 1, 1, '', '', 10, '', '2018-02-20'),
(61, 'WESTLAND INTERNATIONAL SCHOOL', 'WESTLAND INTERNATIONAL SCHOOL', '', '', 1, 1, '', '', 10, '', '2018-02-20'),
(62, 'SMARTAD', 'SMARTAD', '', '', 1, 1, '', '', 10, '', '2018-02-20'),
(63, 'BKW CONTRUCTION CHEMICAL', 'BKW CONTRUCTION CHEMICAL', '', '<p style=\"box-sizing: border-box; margin: 1em 0px 0px; font-size: 15px; color: rgb(0, 0, 0); line-height: 1.8em; font-family: Lato, sans-serif;\">\n	Staying one step ahead of computer issues can save lots of time and money. Our maintenance service will make sure your computer and your network is running as fast as possible without errors and issues. It is recommended to set up routine maintenance for your home and office network computers to ensure your equipment is optimized with minimal downtime.<br style=\"box-sizing: border-box;\" />\n	<img height=\"359\" src=\"http://855solution.com/photos/1/5733d9610312b.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; display: block; height: auto; max-width: 100%;\" width=\"1090\" /></p>\n<p style=\"box-sizing: border-box; margin: 1em 0px 0px; font-size: 15px; color: rgb(0, 0, 0); line-height: 1.8em; font-family: Lato, sans-serif;\">\n	Contact Us To Setup A Meeting<br style=\"box-sizing: border-box;\" />\n	Feel free to call or email anytime to setup a meeting. We would love to discuss your project to see if we can help!</p>\n', 1, 1, '', '', 10, '', '2018-02-20'),
(64, 'REAL ESTAE PHNOM PENH', 'REAL ESTAE PHNOM PENH', '', '', 1, 1, '', '', 10, '', '2018-02-21'),
(65, 'A24MARKET', 'A24MARKET', '', '', 1, 1, '', '', 10, '', '2018-02-21'),
(66, 'REALESTATE', 'REALESTATE', '', '', 1, 1, '', '', 10, '', '2018-02-21'),
(67, 'PIVOTA', 'PIVOTA', '', '', 1, 1, '', '', 10, '', '2018-02-21'),
(68, 'PORTOR SCHOOL', 'PORTOR SCHOOL', '', '', 1, 1, '', '', 10, '', '2018-02-21'),
(69, 'ARTISANS', 'ARTISANS', '', '', 1, 1, '', '', 10, '', '2018-02-21'),
(70, 'LNSK', 'LNSK', '', '', 1, 1, '', '', 10, '', '2018-02-21'),
(71, 'JOBSKH365', 'JOBSKH365', '', '', 1, 1, '', '', 10, '', '2018-02-21'),
(72, 'DIAMON CONTRACTION', 'DIAMON CONTRACTION', '', '', 1, 1, '', '', 10, '', '2018-02-21'),
(73, 'CAME9', 'CAME9', '', '', 1, 1, '', '', 10, '', '2018-02-21'),
(74, 'BST', 'BST', '', '', 1, 1, '', '', 10, '', '2018-02-21'),
(75, 'WATANA PRINTING', 'WATANA PRINTING', '', '', 1, 1, '', '', 10, '', '2018-02-21'),
(76, 'CSK GLOBAL TRADE', 'CSK GLOBAL TRADE', '', '', 1, 1, '', '', 10, '', '2018-02-21'),
(77, 'PRODUCT DESCRIPTIONS', 'PRODUCT DESCRIPTIONS', '', '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; line-height: 1.5rem; font-size: 18px; color: rgb(86, 86, 86); font-family: robotolight;\">\n	Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; list-style: none; padding: 0px; color: rgb(86, 86, 86); font-family: robotolight; font-size: 15px;\">\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Quisque volutpat mattis eros.</li>\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Nullam malesuada erat ut turpis.</li>\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Suspendisse urna nibh.</li>\n</ul>\n', 1, 1, '', 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.', 14, '', '2018-02-21'),
(78, 'ABOUT US', 'ABOUT US', '', '<h1 style=\"box-sizing: border-box; margin: 20px 0px 10px; font-size: 36px; font-family: Lato, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); text-align: center;\">\n	<img src=\"http://855solution.com/photos/1/5747b855a134e.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle;\" /></h1>\n<h1 style=\"box-sizing: border-box; margin: 20px 0px 10px; font-size: 36px; font-family: Lato, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); text-align: center;\">\n	ABOUT US</h1>\n<hr style=\"box-sizing: content-box; height: 0px; margin-top: 20px; margin-bottom: 20px; border-right: 0px; border-bottom: 0px; border-left: 0px; border-image: initial; border-top-style: solid; border-top-color: rgb(238, 238, 238); color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\" />\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\">\n	<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 855.Solution offers with a complete range of services to fill the market need for designing and developing a fitted solution to enable the client&rsquo;s business in the most cost effective way. We revolve around the need to provide quality services and products to our various target clients, in the process fully satisfying their needs.&nbsp;</span></span></p>\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\">\n	<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">In summary we intend to attain the following objectives:</span></span></p>\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Continuously provide professional quality services on time and on budget.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Develop a follow-up strategy to gauge performance with all our clients.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Implement and maintain a quality control system and assurance policy.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; To instill a culture of continuous improvement in beating standards of customer satisfaction and efficiency.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Continuously formalize and measure cross-functional working communication so as to ensure that the various&nbsp; departments work harmoniously towards attainment of company objectives.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; We are fully committed to supporting growth and development in the economy.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Customize the software to the individual needs of each client.<br style=\"box-sizing: border-box;\" />\n		<br />\n		</span></span></li>\n</ul>\n', 1, 1, '', '', 7, '', '2018-02-22'),
(79, 'templates1', 'templates1', '', '', 1, 1, '', '', 11, '', '2018-02-22'),
(80, 'templates2', 'templates2', '', '', 1, 1, '', '', 11, '', '2018-02-22'),
(81, 'templates3', 'templates3', '', '', 1, 1, '', '', 11, '', '2018-02-22'),
(82, 'Template4', 'Template4', '', '', 1, 1, '', '', 11, '', '2018-02-22'),
(83, 'Project', 'Project', '', '', 1, 1, '', '', 15, '', '2018-05-19'),
(84, 'Project 1', 'Project 1', '', '', 1, 1, '', '', 15, '', '2018-05-21'),
(85, 'Hello', 'Hello', '', '', 1, 1, '', '', 10, '', '2018-06-20'),
(86, '<div class=\"welcome_icon\">                                     <i class=\"fa fa-leaf\"></i>                                 </div>                                 <h4>eco system</h4>', '<div class=\"welcome_icon\">                                     <i class=\"fa fa-leaf\"></i>                                 </div>                                 <h4>eco system</h4>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center;\">Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</span></p>\n', 1, 1, '', '', 18, '', '2018-06-23'),
(87, '<div class=\"welcome_icon\">                                     <i class=\"fa fa-refresh\"></i>                                 </div>                                 <h4>recycling</h4>', '<div class=\"welcome_icon\">                                     <i class=\"fa fa-refresh\"></i>                                 </div>                                 <h4>recycling</h4>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center;\">Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</span></p>\n', 1, 1, '', '', 18, '', '2018-06-23'),
(88, '<div class=\"welcome_icon\">                                     <i class=\"fa fa-tint\"></i>                                 </div>                                 <h4>water refine</h4>', '<div class=\"welcome_icon\">                                     <i class=\"fa fa-tint\"></i>                                 </div>                                 <h4>water refine</h4>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center;\">Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</span></p>\n', 1, 1, '', '', 18, '', '2018-06-23'),
(89, '<div class=\"welcome_icon\">                                     <i class=\"fa fa-cog\"></i>                                 </div>                                 <h4>solar system</h4>', '<div class=\"welcome_icon\">                                     <i class=\"fa fa-cog\"></i>                                 </div>                                 <h4>solar system</h4>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center;\">Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</span></p>\n', 1, 1, '', '', 18, '', '2018-06-23'),
(90, '<button data-filter=\"*\" class=\"my_btn btn_active\">Show All</button>', '<button data-filter=\"*\" class=\"my_btn btn_active\">Show All</button>', '', '', 1, 1, '', '', 19, '', '2018-06-23'),
(91, '<button data-filter=\".blue, .black, .green\" class=\"my_btn\">environment</button>', '<button data-filter=\".blue, .black, .green\" class=\"my_btn\">environment</button>', '', '\n', 1, 1, '', '', 19, '', '2018-06-23'),
(92, '<button data-filter=\".red, .green\" class=\"my_btn\">climate</button>', '<button data-filter=\".red, .green\" class=\"my_btn\">climate</button>', '', '', 1, 1, '', '', 19, '', '2018-06-23'),
(93, '<button data-filter=\".blue, .yellow, .black\" class=\"my_btn\">photography</button>', '<button data-filter=\".blue, .yellow, .black\" class=\"my_btn\">photography</button>', '', '', 1, 1, '', '', 19, '', '2018-06-23'),
(94, '<button data-filter=\".black\" class=\"my_btn\">species</button>', '<button data-filter=\".black\" class=\"my_btn\">species</button>', '', '\n', 1, 1, '', '', 19, '', '2018-06-23'),
(97, '<a href=\"\"><h3>Climate change is affecting bird migration</h3></a>', '<a href=\"\"><h3>Climate change is affecting bird migration</h3></a>', '', '<p class=\"blog_news_content\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 15px; display: inline-block; color: rgb(100, 100, 100); font-size: 14px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">\n	Lorem ipsum dolor sit amet, consectetur adipscing elit. Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. consectetur Lorem ipsum dolor sitamet, conse ctetur adipiscing elit.</p>\n<p>\n	<a class=\"blog_link\" href=\"\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(84, 83, 83); text-transform: uppercase; transition: 0.7s; font-size: 14px; font-family: Roboto, sans-serif; text-decoration-line: none !important;\">READ MORE</a></p>\n', 1, 1, '', '', 20, '', '2018-06-23'),
(98, '<a href=\"\"><h3>How to avoid indoor air pollution?</h3></a>', '<a href=\"\"><h3>How to avoid indoor air pollution?</h3></a>', '', '<p class=\"blog_news_content\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 15px; display: inline-block; color: rgb(100, 100, 100); font-size: 14px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">\n	Lorem ipsum dolor sit amet, consectetur adipscing elit. Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. consectetur Lorem ipsum dolor sitamet, conse ctetur adipiscing elit.</p>\n<p>\n	<a class=\"blog_link\" href=\"\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(84, 83, 83); text-transform: uppercase; transition: 0.7s; font-size: 14px; font-family: Roboto, sans-serif; text-decoration-line: none !important;\">READ MORE</a></p>\n', 1, 1, '', '', 20, '', '2018-06-23'),
(99, '<a href=\"\"><h3>Threat to Yellowstone’s grizzly bears.</h3></a>', '<a href=\"\"><h3>Threat to Yellowstone’s grizzly bears.</h3></a>', '', '<p class=\"blog_news_content\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 15px; display: inline-block; color: rgb(100, 100, 100); font-size: 14px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">\n	Lorem ipsum dolor sit amet, consectetur adipscing elit. Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. consectetur Lorem ipsum dolor sitamet, conse ctetur adipiscing elit.</p>\n<p>\n	<a class=\"blog_link\" href=\"\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(84, 83, 83); text-transform: uppercase; transition: 0.7s; font-size: 14px; font-family: Roboto, sans-serif; text-decoration-line: none !important;\">READ MORE</a></p>\n', 1, 1, '', '', 20, '', '2018-06-23'),
(100, '<a href=\"\"><h4>One Tree Thousand Hope</h4></a>                                     <h6>15-16 May in Dhaka</h6>', '<a href=\"\"><h4>One Tree Thousand Hope</h4></a>                                     <h6>15-16 May in Dhaka</h6>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center; background-color: rgb(239, 240, 242);\">Lorem ipsum dolor sit amet, consectetur adip scing elit. Lorem ipsum dolor sit amet,consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p>\n<p>\n	<a class=\"event_btn\" href=\"\">read more</a></p>\n', 1, 1, '', '', 21, '', '2018-06-23'),
(101, '<a href=\"\"><h4>One Tree Thousand Hope1</h4></a>                                     <h6>15-16 May in Dhaka</h6>', '<a href=\"\"><h4>One Tree Thousand Hope1</h4></a>                                     <h6>15-16 May in Dhaka</h6>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center; background-color: rgb(239, 240, 242);\">Lorem ipsum dolor sit amet, consectetur adip scing elit. Lorem ipsum dolor sit amet,consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p>\n<p>\n	<a class=\"event_btn\" href=\"\">read more</a></p>\n', 1, 1, '', '', 21, '', '2018-06-23'),
(102, '<a href=\"#\"><h4>Let’s plant 200 tree each...</h4></a>', '<a href=\"#\"><h4>Let’s plant 200 tree each...</h4></a>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</span></p>\n', 1, 1, '', '', 22, '', '2018-06-23'),
(103, '<a href=\"#\"><h4>Keep your house envirome..</h4></a>', '<a href=\"#\"><h4>Keep your house envirome..</h4></a>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</span></p>\n', 1, 1, '', '', 22, '', '2018-06-23'),
(104, '<a href=\"#\"><h4>Urgent Clothe Needed Needed</h4></a>', '<a href=\"#\"><h4>Urgent Clothe Needed Needed</h4></a>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</span></p>\n', 1, 1, '', '', 22, '', '2018-06-23'),
(105, '<a href=\"#\"><h4>One Tree Thousand Hope</h4></a>', '<a href=\"#\"><h4>One Tree Thousand Hope</h4></a>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</span></p>\n', 1, 1, '', '', 22, '', '2018-06-23'),
(106, '<a href=\"#\"><h4>One Tree Thousand Hope1</h4></a>', '<a href=\"#\"><h4>One Tree Thousand Hope1</h4></a>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</span></p>\n', 1, 1, '', '', 22, '', '2018-06-23'),
(117, 'Adorable species ', ' Adorable species', '', '<p>\n	&nbsp; &nbsp;<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </span></p>\n<p>\n	<span>&nbsp; &nbsp;Donec pede justo, fringilla vel,</span>aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>\n<p>\n	&nbsp; &nbsp;Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem antedapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.&nbsp;</p>\n<p>\n	&nbsp; Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem nequesed ipsum.Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>\n<p>\n	&nbsp; Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\n', 1, 1, '', '', 9, '', '2018-06-27'),
(118, 'feeling sad for the forest', 'feeling sad for the forest', '', '<p>\n	&nbsp;&nbsp;<span>commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricie&nbsp;</span>pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, i .</p>\n<p>\n	&nbsp; mperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut</p>\n<p>\n	&nbsp; &nbsp;metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>\n<p>\n	&nbsp; &nbsp;Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\n', 1, 1, '', '', 9, '', '2018-06-27'),
(119, 'Night view of the city', 'Night view of the city', '', '<p>\n	&nbsp;<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel,</span></p>\n<p>\n	<span>&nbsp; aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. </span></p>\n<p>\n	<span>&nbsp; &nbsp;Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. </span></p>\n<p>\n	<span>&nbsp; &nbsp;Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</span></p>\n', 1, 1, '', '', 9, '', '2018-06-27'),
(120, 'Earth', 'Earth', '', '<p>\n	&nbsp;<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel,</span></p>\n<p>\n	<span>&nbsp; aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. </span></p>\n<p>\n	<span>&nbsp; Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. </span></p>\n<p>\n	<span>&nbsp; Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</span></p>\n', 1, 1, '', '', 9, '', '2018-06-27'),
(121, 'Health care is a human right.', 'Doctor Health care is a human right.', '', '<p>\n	&nbsp;<span style=\"color: rgb(115, 119, 127); font-style: inherit; font-weight: inherit; text-decoration-line: initial; text-transform: initial; font-family: Roboto, sans-serif; font-size: 16px;\">Let&rsquo;s just get right down to it:&nbsp;Health care is a human right.&nbsp;Treating an illness or injury should never be a luxury afforded only to the wealthy few who can afford it. Your income, location, race, sexual orientation, gender identity, or current state of health should never be a barrier to receiving affordable, high-quality health care. I believe passionately in universal health care, and I always will.</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">&nbsp;</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">As with so many other issues, politicians in Washington will stop at nothing to make life harder for Coloradans for the benefit of special interests. In Colorado, we have an opportunity to aggressively reduce the costs of care, expand access to the services people depend on, and put Coloradans first.&nbsp;</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">&nbsp;</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">Too often, politicians talk about health care as if it begins and ends when you get sick or need to visit a doctor. I propose a bolder path.&nbsp;&nbsp;</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">&nbsp;</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">We need to give more Coloradans the opportunity to build lifelong healthy habits and have access to services that reduce the chances of ending up in a hospital room or a doctor&rsquo;s office to begin with. This approach puts the everyday health of our citizens at the forefront of our policy-making while ensuring that when the unimaginable happens, no Coloradan experiences the fear of not being able to afford the treatment they need, or that their loved one needs, to get better.</span></p>\n', 1, 1, '', '', 15, '', '2018-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `tblbanner`
--

CREATE TABLE `tblbanner` (
  `banner_id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `location_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `orders` int(11) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbanner`
--

INSERT INTO `tblbanner` (`banner_id`, `title`, `location_id`, `is_active`, `orders`, `link`) VALUES
(40, '<h3>Protect</h3>                                 <h2>nature the environment</h2>                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>                                 <a href=\"\" class=\"custom_btn\">Read  More</a>', 1, 1, 1, '1'),
(41, '<h3>Protect1</h3>                                 <h2>nature the environment1</h2>                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>                                 <a href=\"\" class=\"custom_btn\">Read  More</a>', 1, 1, 2, '2'),
(42, '<h3>Protect2</h3>                                 <h2>nature the environment2</h2>                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>                                 <a href=\"\" class=\"custom_btn\">Read  More</a>', 1, 1, 3, '3');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `contact_id` int(11) NOT NULL,
  `nationality` varchar(55) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `family_name` varchar(255) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `post_code` varchar(55) NOT NULL,
  `tel` varchar(55) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `preferred_time` varchar(255) NOT NULL,
  `how_know_us` varchar(255) NOT NULL,
  `purchase` varchar(55) NOT NULL,
  `register_client` varchar(55) NOT NULL,
  `distributor` varchar(55) NOT NULL,
  `other` varchar(55) NOT NULL,
  `region` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblgallery`
--

CREATE TABLE `tblgallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `gallery_type` int(1) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT '0',
  `order` int(11) DEFAULT NULL,
  `home` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgallery`
--

INSERT INTO `tblgallery` (`gallery_id`, `gallery_title`, `url`, `gallery_type`, `article_id`, `location_id`, `order`, `home`) VALUES
(39, '', 'topic3.jpg', 0, 15, 0, 0, 0),
(47, 'Balen crush push behine neang kong hing 9 53 23 2 2016 long NE', 'MuhRRuq7Q7A', 1, 0, 4, 1, 0),
(48, 'Area 2 Canadia S Far Pruise crush motor', 'UI5UGtScs7M', 1, 0, 4, 2, 0),
(65, '', 'westland.jpg', 0, 21, 0, 0, 0),
(77, '', 'Info.jpg', 0, 2, 0, 0, 0),
(85, '', '02.jpg', 0, 12, 0, 0, 0),
(87, '', '03.jpg', 0, 13, 0, 0, 0),
(88, '', '05.jpg', 0, 14, 0, 0, 0),
(105, '', '07.jpg', 0, 22, 0, 0, 0),
(106, '', '08.jpg', 0, 23, 0, 0, 0),
(107, '', '09.jpg', 0, 24, 0, 0, 0),
(108, '', 'Test.jpg', 0, 9, 0, 0, 0),
(109, '', '07.jpg', 0, 10, 0, 0, 0),
(110, '', '09.jpg', 0, 16, 0, 0, 0),
(111, 'Camboida MPS video', 'DHipWiM3VPw', 1, 0, 4, 3, 0),
(112, '20160519 140402', 'B9OxMwKi9kU', 1, 0, 4, 4, 0),
(113, 'Dome Neang K hing Dome ករណីអនាធិតេយ្យនៅនាងគង្ហីង', 'vpoiZR2I7Ic', 1, 0, 4, 6, 0),
(114, '', 'Info.jpg', 0, 30, 0, 0, 0),
(120, '', '1.jpg', 0, 31, 0, 0, 0),
(121, '', '2.jpg', 0, 31, 0, 0, 0),
(122, '', '3.jpg', 0, 31, 0, 0, 0),
(123, '', 'technology_in_schools.jpg', 0, 32, 0, 0, 0),
(124, '', 'course1.jpg', 0, 33, 0, 0, 0),
(125, '', 'course3.jpg', 0, 34, 0, 0, 0),
(126, '', '13600305_549697228536302_8641145987184095274_n.jpg', 0, 11, 0, 0, 0),
(128, '', '13600305_549697228536302_8641145987184095274_n.jpg', 0, 36, 0, 0, 0),
(129, '', '13592413_549699578536067_6526573163025707556_n.jpg', 0, 37, 0, 0, 0),
(130, '', '13592414_325819454416772_7451992932185094388_n.jpg', 0, 35, 0, 0, 0),
(131, '', '13592413_549699578536067_6526573163025707556_n.jpg', 0, 38, 0, 0, 0),
(132, '', '13617976_1001132963335051_967817804_n.jpg', 0, 39, 0, 0, 0),
(133, '', '13606754_549697618536263_8771004310916295483_n.jpg', 0, 40, 0, 0, 0),
(135, '', '13592413_549699578536067_6526573163025707556_n.jpg', 0, 44, 0, 0, 0),
(151, 'ឧត្តមសេនីយ៍ឯក មិន សុវណ្ណា បង្ហាញមុខជនសង្ស័យរំខានកិច្ចការសមត្ថកិច្ច និងលួចកៀបលេខវិទ្យុទាក់ទង', 'S0nLpFRKNhA', 1, 0, 4, 5, 0),
(152, '', 'kkkkkkkkkkkkkkkkkkkkkkk.jpg', 0, 49, 0, 0, 0),
(153, '', 'llllllllllllllllllllllllllllllllllll.jpg', 0, 49, 0, 0, 0),
(155, '', '26781535_2055248414721394_1513382466_o.jpg', 0, 49, 0, 0, 0),
(179, '', '1.jpg', 2, 0, 0, 0, 0),
(180, '', '2.JPG', 2, 0, 0, 0, 0),
(181, '', '3.jpg', 2, 0, 0, 0, 0),
(182, '', '4.jpg', 2, 0, 0, 0, 0),
(183, '', '5.jpg', 2, 0, 0, 0, 0),
(184, '', '6.jpg', 2, 0, 0, 0, 0),
(185, '', '7.png', 2, 0, 0, 0, 0),
(186, '', '8.jpg', 2, 0, 0, 0, 0),
(187, '', '9.jpg', 2, 0, 0, 0, 0),
(188, '', '10.jpg', 2, 0, 0, 0, 0),
(189, '', '26782285_2055248054721430_938410859_o.jpg', 2, 0, 0, 0, 0),
(190, '', '26782306_2055248184721417_103057540_o.jpg', 2, 0, 0, 0, 0),
(191, '', '26782496_2055247798054789_396012938_o.jpg', 2, 0, 0, 0, 0),
(192, '', '26827814_2055247958054773_1185143222_o.jpg', 2, 0, 0, 0, 0),
(193, '', '26829995_2055248321388070_1109404742_o.jpg', 2, 0, 0, 0, 0),
(194, 'តើ....គេ? [Full MV] ~ ខេម ft កែវ វាសនា', 'GKAuYHZwoTs', 1, 0, 4, 7, 0),
(198, '', 'feature-2.jpg', 0, 53, 0, 0, 0),
(201, '', '14645215981.jpg', 0, 50, 0, 0, 0),
(202, '', '1464588258.jpg', 0, 55, 0, 0, 0),
(203, '', '14643169041.jpg', 0, 56, 0, 0, 0),
(204, '', '14643150881.png', 0, 57, 0, 0, 0),
(205, '', 'Product-Review-Writing-Services.jpg', 0, 58, 0, 0, 0),
(210, '', '14639800561.jpg', 0, 59, 0, 0, 0),
(211, '', '14639736081.jpg', 0, 60, 0, 0, 0),
(212, '', '14638017331.JPG', 0, 61, 0, 0, 0),
(213, '', '14638003081.jpg', 0, 62, 0, 0, 0),
(214, '', '14637997591.jpg', 0, 63, 0, 0, 0),
(220, '', '1462416401.png', 0, 50, 0, 0, 0),
(222, '', '1462721815.jpg', 0, 50, 0, 0, 0),
(223, '', '1463120689.png', 0, 50, 0, 0, 0),
(226, '', '14637997591.jpg', 0, 50, 0, 0, 0),
(228, '', '14638017331.JPG', 0, 50, 0, 0, 0),
(229, '', '14639736081.jpg', 0, 50, 0, 0, 0),
(230, '', '14639800561.jpg', 0, 50, 0, 0, 0),
(233, '', '14637996301.jpg', 0, 63, 0, 0, 0),
(234, '', '14638003081.jpg', 0, 63, 0, 0, 0),
(235, '', '14638017331.JPG', 0, 63, 0, 0, 0),
(236, '', '14639736081.jpg', 0, 63, 0, 0, 0),
(237, '', '14639800561.jpg', 0, 63, 0, 0, 0),
(238, '', '14643150881.png', 0, 63, 0, 0, 0),
(239, '', '14643169041.jpg', 0, 63, 0, 0, 0),
(243, '', '14634505291.jpg', 0, 64, 0, 0, 0),
(244, '', '14633110711.jpg', 0, 65, 0, 0, 0),
(245, '', '14630150531.jpg', 0, 66, 0, 0, 0),
(246, '', '14630148991.jpg', 0, 67, 0, 0, 0),
(247, '', '14627198741.jpg', 0, 68, 0, 0, 0),
(248, '', '14627196701.jpg', 0, 69, 0, 0, 0),
(249, '', '14627195931.jpg', 0, 70, 0, 0, 0),
(250, '', '14627194391.jpg', 0, 71, 0, 0, 0),
(251, '', '1462718466.jpg', 0, 72, 0, 0, 0),
(252, '', '1462719315.jpg', 0, 73, 0, 0, 0),
(253, '', '1462718829.jpg', 0, 74, 0, 0, 0),
(254, '', '1462718012.png', 0, 75, 0, 0, 0),
(255, '', '14637996301.jpg', 0, 76, 0, 0, 0),
(258, '', 'feature-2.jpg', 0, 54, 0, 0, 0),
(269, '', '6u6u5u55.jpg', 0, 81, 0, 0, 0),
(270, '', '6uuug.jpg', 0, 81, 0, 0, 0),
(271, '', 'ergerg.jpg', 0, 81, 0, 0, 0),
(272, '', 'ergerger.jpg', 0, 81, 0, 0, 0),
(273, '', 'ergreg.jpg', 0, 81, 0, 0, 0),
(274, '', 'fgrer44.jpg', 0, 81, 0, 0, 0),
(275, '', 'gegtergre.jpg', 0, 81, 0, 0, 0),
(276, '', 'gergerg.jpg', 0, 81, 0, 0, 0),
(277, '', 'gerh54er.jpg', 0, 81, 0, 0, 0),
(278, '', 'gfegerge.jpg', 0, 81, 0, 0, 0),
(279, '', 'gregre.jpg', 0, 81, 0, 0, 0),
(280, '', 'rfgregertg.jpg', 0, 81, 0, 0, 0),
(281, '', 'rgegergtht.jpg', 0, 81, 0, 0, 0),
(282, '', 'rtgged4.jpg', 0, 81, 0, 0, 0),
(283, '', 'tgreg.jpg', 0, 81, 0, 0, 0),
(284, '', 'turtu55.jpg', 0, 81, 0, 0, 0),
(285, '', 'tutu5u65u6uu.jpg', 0, 81, 0, 0, 0),
(286, '', 'tyrytry.jpg', 0, 81, 0, 0, 0),
(287, '', 'tyty5yhttr.jpg', 0, 81, 0, 0, 0),
(288, '', 'y54uyh54u.jpg', 0, 81, 0, 0, 0),
(289, '', 'Villa-Amore-Hua-Hin-21-Medium.jpg', 0, 81, 0, 0, 0),
(290, '', '01_Bendega_Rato_-_Pool_view_of_villa_and_bale_at_dusk.jpg', 0, 81, 0, 0, 0),
(346, '', 'trretee.jpg', 0, 51, 0, 0, 0),
(347, '', 'r43tg54r.jpg', 0, 46, 0, 0, 0),
(348, '', 'service_img.jpg', 0, 46, 0, 0, 0),
(349, '', 'service_img_2.jpg', 0, 46, 0, 0, 0),
(350, '', 'slo-motion.jpg', 0, 46, 0, 0, 0),
(351, '', 'er43t45.jpg', 0, 45, 0, 0, 0),
(352, '', 'ret5rt5.jpg', 0, 45, 0, 0, 0),
(353, '', 'ret44ty4t.jpg', 0, 45, 0, 0, 0),
(354, '', 'retg54rt54.jpg', 0, 45, 0, 0, 0),
(355, '', 't5tt.jpg', 0, 45, 0, 0, 0),
(360, '', 'rgretgr.jpg', 0, 48, 0, 0, 0),
(361, '', '3f491b7b22d70db99ec66aafc837e478.jpg', 0, 47, 0, 0, 0),
(362, '', 'etwegweg.png', 0, 47, 0, 0, 0),
(364, '', 'OPENapps.png', 0, 47, 0, 0, 0),
(365, '', 'our-strategy.png', 0, 47, 0, 0, 0),
(366, '', 'fewtfgr54egt.png', 0, 47, 0, 0, 0),
(367, '', '513_IMG_3522.jpg', 0, 77, 0, 0, 0),
(375, '', 'ergreg.jpg', 0, 80, 0, 0, 0),
(376, '', 'fgrer44.jpg', 0, 80, 0, 0, 0),
(377, '', 'gegtergre.jpg', 0, 80, 0, 0, 0),
(378, '', 'gergerg.jpg', 0, 80, 0, 0, 0),
(379, '', 'gerh54er.jpg', 0, 80, 0, 0, 0),
(380, '', 'gfegerge.jpg', 0, 80, 0, 0, 0),
(381, '', 'gregre.jpg', 0, 80, 0, 0, 0),
(382, '', 'tyrytry.jpg', 0, 80, 0, 0, 0),
(383, '', 'tyty5yhttr.jpg', 0, 80, 0, 0, 0),
(384, '', 'Villa-Ace-Bali-3.jpg', 0, 80, 0, 0, 0),
(385, '', 'Villa-Amore-Hua-Hin-21-Medium.jpg', 0, 80, 0, 0, 0),
(386, '', 'y54uyh54u.jpg', 0, 80, 0, 0, 0),
(387, '', 'ytryrt5yt.jpg', 0, 80, 0, 0, 0),
(388, '', 'ytrytry.jpg', 0, 80, 0, 0, 0),
(389, '', 'rfgregertg.jpg', 0, 79, 0, 0, 0),
(390, '', 'rgegergtht.jpg', 0, 79, 0, 0, 0),
(391, '', 'rtgged4.jpg', 0, 79, 0, 0, 0),
(392, '', 'tgreg.jpg', 0, 79, 0, 0, 0),
(393, '', 'turtu55.jpg', 0, 79, 0, 0, 0),
(394, '', 'tutu5u65u6uu.jpg', 0, 79, 0, 0, 0),
(395, '', 'tyrytry.jpg', 0, 79, 0, 0, 0),
(396, '', 'tyty5yhttr.jpg', 0, 79, 0, 0, 0),
(397, '', 'Villa-Ace-Bali-3.jpg', 0, 79, 0, 0, 0),
(398, '', 'Villa-Amore-Hua-Hin-21-Medium.jpg', 0, 79, 0, 0, 0),
(399, '', 'y54uyh54u.jpg', 0, 79, 0, 0, 0),
(400, '', 'ytryrt5yt.jpg', 0, 79, 0, 0, 0),
(401, '', 'ytrytry.jpg', 0, 79, 0, 0, 0),
(403, '', 'e5f3b8ab77bb05fcd090ecf20efc0bc7.jpg', 0, 82, 0, 0, 0),
(404, '', 'the-tale-of-the-princess-kaguya_background_living-lines_library_01.jpg', 0, 82, 0, 0, 0),
(407, '', 'efewfe.jpg', 0, 82, 0, 0, 0),
(408, '', 'dsfdsfew.jpg', 0, 83, 0, 0, 0),
(409, '', 'dsfew33qw.jpg', 0, 83, 0, 0, 0),
(410, '', 'er43t45.jpg', 0, 83, 0, 0, 0),
(411, '', 'ewfgregr.jpg', 0, 83, 0, 0, 0),
(412, '', 'fgfrergr.jpg', 0, 83, 0, 0, 0),
(413, '', 'ewfgregr.jpg', 0, 84, 0, 0, 0),
(415, '', 'img-01.jpg', 0, 52, 0, 0, 0),
(416, NULL, '1.png', 0, 85, 0, NULL, NULL),
(417, NULL, '2.png', 0, 85, 0, NULL, NULL),
(418, NULL, '3.png', 0, 85, 0, NULL, NULL),
(419, NULL, 'cliemate.jpg', 0, 96, 0, NULL, NULL),
(420, NULL, 'climate_effect.jpg', 0, 97, 0, NULL, NULL),
(421, NULL, 'air_pollutuon.jpg', 0, 98, 0, NULL, NULL),
(422, NULL, 'threat_bear.jpg', 0, 99, 0, NULL, NULL),
(423, NULL, 'tree_cut_1.jpg', 0, 100, 0, NULL, NULL),
(424, NULL, 'tree_cut_2.jpg', 0, 101, 0, NULL, NULL),
(425, NULL, 'tree_cut_3.jpg', 0, 102, 0, NULL, NULL),
(426, NULL, 'tree_cut_4.jpg', 0, 103, 0, NULL, NULL),
(427, NULL, 'tree_cut_3.jpg', 0, 104, 0, NULL, NULL),
(428, NULL, 'tree_cut_4.jpg', 0, 105, 0, NULL, NULL),
(429, NULL, 'tree_cut_3.jpg', 0, 106, 0, NULL, NULL),
(433, NULL, 'threat_bear.jpg', 0, 116, 0, NULL, NULL),
(439, NULL, 'threat_bear.jpg', 0, 117, 0, NULL, NULL),
(440, NULL, 'threat_bear.jpg', 0, 118, 0, NULL, NULL),
(441, NULL, 'threat_bear.jpg', 0, 119, 0, NULL, NULL),
(442, NULL, 'threat_bear.jpg', 0, 120, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbllayout`
--

CREATE TABLE `tbllayout` (
  `layout_id` int(11) NOT NULL,
  `layout_name` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllayout`
--

INSERT INTO `tbllayout` (`layout_id`, `layout_name`, `is_active`) VALUES
(1, 'Full Layout', 1),
(2, 'Grid Layout', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbllocation`
--

CREATE TABLE `tbllocation` (
  `location_id` int(11) NOT NULL,
  `location_name` text CHARACTER SET utf8 NOT NULL,
  `location_type` varchar(55) NOT NULL,
  `is_active` int(1) NOT NULL,
  `location_name_kh` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllocation`
--

INSERT INTO `tbllocation` (`location_id`, `location_name`, `location_type`, `is_active`, `location_name_kh`) VALUES
(1, 'Main Slider', 'banner', 1, ''),
(2, 'Left Side', 'banner', 1, ''),
(3, 'REQUEST QUOTE', 'category', 1, 'REQUEST QUOTE'),
(4, 'CONTACT US', 'category', 1, 'CONTACT US'),
(5, 'Main Menu', 'menu', 1, ''),
(6, 'PRODUCTS', 'category', 1, 'PRODUCTS'),
(7, 'ABOUT US', 'category', 1, 'ABOUT US'),
(8, 'Search Result', '', 0, 'លទ្ធផលនៃការស្វែងរក'),
(9, 'Services', 'category', 1, 'Services'),
(10, 'Customers', 'category', 1, 'Customers'),
(11, 'TEMPLATES', 'category', 1, ''),
(12, 'Director', 'banner', 1, ''),
(13, 'OUR PRODUCT', 'category', 1, ''),
(14, 'PRODUCT DESCRIPTIONS', 'category', 1, ''),
(15, 'Projects', 'category', 1, ''),
(18, '<h2>welcome to green fair</h2>                         <p>Our Green Fire Organization is one of the non profit organization near you. Get our services like</p>', 'category', 1, NULL),
(19, '<h2>our latest work</h2>                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>', 'category', 1, NULL),
(20, '<h2>latest blog</h2>                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cum libero vitae quos eaque commodi.</p>', 'category', 1, NULL),
(21, '<h2>latest event</h2>                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>', 'category', 1, NULL),
(22, 'latest blog', 'category', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblmenus`
--

CREATE TABLE `tblmenus` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `description` text,
  `lineage` varchar(255) DEFAULT NULL,
  `parentid` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `layout_id` int(11) DEFAULT NULL,
  `modified_by` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `menu_name_kh` varchar(255) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `menu_type` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblmenus`
--

INSERT INTO `tblmenus` (`menu_id`, `menu_name`, `description`, `lineage`, `parentid`, `level`, `order`, `is_active`, `created_date`, `created_by`, `layout_id`, `modified_by`, `modified_date`, `menu_name_kh`, `article_id`, `location_id`, `menu_type`, `link`) VALUES
(34, 'CUSTOMERS', NULL, '34', 0, 0, 3, 1, NULL, NULL, 2, NULL, NULL, 'CUSTOMERS', 0, 5, '10', 'site/allcustomer/'),
(32, 'PROJECT', NULL, '32', 0, 0, 2, 1, NULL, NULL, 2, NULL, NULL, 'PROJECT', 0, 5, '6', ''),
(31, 'SERVICES', NULL, '31', 0, 0, 1, 1, NULL, NULL, 2, NULL, NULL, 'SERVICES', 0, 5, '9', 'site/allitem'),
(36, 'TEMPLATES', NULL, '36', 0, 0, 4, 1, NULL, NULL, 2, NULL, NULL, 'TEMPLATES', 0, 5, '11', 'site/templates/'),
(37, 'REQUEST QUOTE', NULL, '37', 0, 0, 5, 1, NULL, NULL, 2, NULL, NULL, 'REQUEST QUOTE', 0, 5, '3', 'site/requestquote/'),
(38, 'ABOUT US', NULL, '38', 0, 0, 5, 1, NULL, NULL, 2, NULL, NULL, 'ABOUT US', 0, 5, '7', 'site/aboutus/'),
(66, 'CONTACT US', NULL, '66', 0, 0, 7, 1, NULL, NULL, 2, NULL, NULL, 'CONTACT US', 0, 5, '4', 'site/contactus/'),
(82, '0', NULL, '82', 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, '0', 0, 0, '0', NULL),
(83, '0', NULL, '83', 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, '0', 0, 0, '0', NULL),
(85, 'Hello', NULL, '85', 0, 0, 7, 1, NULL, NULL, 2, NULL, NULL, 'Hello', 0, 5, '17', NULL),
(91, 'FEDERAL PROJECT', NULL, '32-91', 32, 1, 7, 1, NULL, NULL, 1, NULL, NULL, 'FEDERAL PROJECT', 55, 5, '15', 'site/federalproject/'),
(90, 'EDUCATION PROJECT', NULL, '32-90', 32, 1, 7, 1, NULL, NULL, 1, NULL, NULL, 'EDUCATION PROJECT', 55, 5, '15', 'site/educationproject/'),
(89, 'COMMERCIAL PROJECT', NULL, '32-89', 32, 1, 2, 1, NULL, NULL, 2, NULL, NULL, 'COMMERCIAL PROJECT', 120, 5, '15', 'site/commercailproject/'),
(92, 'HEALTCARE PROJECT', NULL, '32-92', 32, 1, 7, 1, NULL, NULL, 1, NULL, NULL, 'HEALTCARE PROJECT', 55, 5, '15', 'site/healtcareproject/'),
(93, 'HISTORICAL RENOVATION', NULL, '32-93', 32, 1, 7, 1, NULL, NULL, 1, NULL, NULL, 'HISTORICAL RENOVATION', 55, 5, '15', 'site/historicalrenovation/');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `menu_id` int(11) NOT NULL,
  `content_desc` text CHARACTER SET utf8 NOT NULL,
  `content_bottom` text NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`product_id`, `product_name`, `menu_id`, `content_desc`, `content_bottom`, `is_active`) VALUES
(8, 'Product1 ', 3, '<p>\n	<img alt=\"\" src=\"/htdocs/cljr/data/images/1410600813.jpg\" style=\"width: 941px; height: 496px;\" />asdfasdfa</p>\n', '<p>\n	asdfasfg</p>\n', 1),
(9, 'Product 2', 3, '<p>agfsdgwet</p>\n', '<p>wertwetgwt</p>\n', 1),
(10, 'Product 3', 3, '<p>srtwer</p>\n', '<p><img alt=\"\" src=\"/ckfinder/userfiles/files/201409141410683168993.jpg\" style=\"height:1086px; width:950px\" /></p>\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `z_blog`
--

CREATE TABLE `z_blog` (
  `site_show_blogid` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_blog`
--

INSERT INTO `z_blog` (`site_show_blogid`, `description`) VALUES
(1, 'Menu Top'),
(2, 'Menu Left'),
(3, 'Menu Buttom'),
(4, 'Hot Product'),
(5, 'Menu Right');

-- --------------------------------------------------------

--
-- Table structure for table `z_currency`
--

CREATE TABLE `z_currency` (
  `curid` int(11) NOT NULL,
  `currcode` varchar(255) DEFAULT NULL,
  `curr_name` varchar(255) DEFAULT NULL,
  `symbol` varchar(255) DEFAULT NULL,
  `is_default` int(11) DEFAULT NULL,
  `ex_rate` double DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_currency`
--

INSERT INTO `z_currency` (`curid`, `currcode`, `curr_name`, `symbol`, `is_default`, `ex_rate`, `country`) VALUES
(1, 'USD', 'US Dollars', '$', 1, 1, 'US');

-- --------------------------------------------------------

--
-- Table structure for table `z_module`
--

CREATE TABLE `z_module` (
  `moduleid` int(11) NOT NULL,
  `module_name` varchar(255) DEFAULT NULL,
  `sort_mod` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `mod_position` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_module`
--

INSERT INTO `z_module` (`moduleid`, `module_name`, `sort_mod`, `order`, `is_active`, `mod_position`) VALUES
(1, 'Setting', NULL, 0, 0, '2'),
(7, 'Menu', NULL, NULL, 1, '2'),
(10, 'Product', NULL, NULL, 0, '2'),
(11, 'Article', NULL, NULL, 1, '2'),
(12, 'Banner', NULL, NULL, 1, '2'),
(13, 'Contact', NULL, NULL, 0, '2');

-- --------------------------------------------------------

--
-- Table structure for table `z_page`
--

CREATE TABLE `z_page` (
  `pageid` int(11) NOT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `moduleid` int(11) DEFAULT '1',
  `order` int(11) DEFAULT NULL,
  `is_insert` int(11) DEFAULT NULL,
  `is_update` int(11) DEFAULT NULL,
  `is_delete` int(11) DEFAULT NULL,
  `is_show` int(11) DEFAULT NULL,
  `is_print` int(11) DEFAULT NULL,
  `is_export` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `icon` varchar(255) DEFAULT 'fa-bars',
  `alias` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_page`
--

INSERT INTO `z_page` (`pageid`, `page_name`, `link`, `moduleid`, `order`, `is_insert`, `is_update`, `is_delete`, `is_show`, `is_print`, `is_export`, `created_by`, `created_date`, `is_active`, `icon`, `alias`) VALUES
(5, 'Page', 'setting/page', 1, NULL, 0, 1, 0, 1, 1, 0, 1, '2015-02-05 17:00:01', 1, 'fa-file-o', NULL),
(6, 'User Profile', 'setting/user', 1, NULL, 1, 1, 1, 1, 0, 0, 1, '2015-02-05 16:56:20', 1, 'fa-user', NULL),
(7, 'User Role', 'setting/role', 1, NULL, 1, 1, 1, 1, 1, 1, 1, '2015-02-05 16:57:09', 1, 'fa-user', NULL),
(8, 'Role Access', 'setting/permission', 1, NULL, 1, 1, 0, 0, 0, 1, 1, '2015-02-05 16:56:46', 1, 'fa-wrench', NULL),
(57, 'Shipping Company', 'shipping/shipping', 11, 1, 1, 1, 1, 1, 1, 1, 1, '2015-06-29 11:21:45', 0, 'fa-bars', NULL),
(58, 'Product List', 'product/product', 7, 7, 1, 1, 1, 1, 1, 1, 1, '2015-07-10 13:47:35', 0, 'fa-bars', NULL),
(59, 'Stock In/Out', 'product/stockmove', 7, 8, 1, 1, 1, 1, 1, 1, 1, '2015-07-15 12:04:46', 0, 'fa-bars', NULL),
(54, 'Category', 'stock/category', 7, 6, 1, 1, 1, 1, 1, 1, 1, '2015-06-17 07:53:19', 0, 'fa-bars', 'category.html'),
(55, 'Store', 'store', 10, 0, 1, 1, 1, 1, 1, 1, 1, '2015-06-26 08:04:07', 0, 'fa-bars', NULL),
(56, 'Setup List', 'setup/csetup', 11, 0, 1, 1, 1, 1, 1, 1, 1, '2015-06-27 12:11:58', 0, 'fa-bars', NULL),
(60, 'Slide Show', 'slideshow/SlideShow', 7, 9, 1, 1, 1, 1, 1, 1, 1, '2015-07-17 08:19:12', 0, 'fa-bars', NULL),
(61, 'Setup Ads', 'setup/SetupAds', 11, 2, 1, 1, 1, 1, 1, 1, 1, '2015-08-04 03:00:11', 0, 'fa-bars', NULL),
(62, 'Setup Country', 'setup/country', 11, 3, 1, 1, 1, 1, 1, 1, 1, '2015-08-21 16:25:39', 0, 'fa-bars', NULL),
(63, 'Menu List', 'menu/index', 7, 10, 1, 1, 1, 1, 1, 1, 1, '2015-09-11 15:53:36', 1, 'fa-bars', NULL),
(64, 'Add New Menu', 'menu/add', 7, 11, 1, 1, 1, 1, 1, 1, 1, '2015-09-11 15:53:58', 1, 'fa-bars', NULL),
(65, 'Article List', 'article/index', 11, 4, 1, 1, 1, 1, 1, 1, 1, '2015-09-11 16:46:23', 1, 'fa-bars', NULL),
(66, 'Add New Article', 'article/add', 11, 5, 1, 1, 1, 1, 1, 1, 1, '2015-09-11 16:47:08', 1, 'fa-bars', NULL),
(67, 'Product List', 'product/index', 10, 1, 1, 1, 1, 1, 1, 1, 1, '2015-09-12 17:10:07', 1, 'fa-bars', NULL),
(68, 'Add New Products', 'product/add', 10, 2, 1, 1, 1, 1, 1, 1, 1, '2015-09-12 17:10:46', 1, 'fa-bars', NULL),
(69, 'Banner List', 'setup/setupads/index', 12, 0, 1, 1, 1, 1, 1, 1, 1, '2016-02-05 23:16:13', 1, 'fa-bars', NULL),
(70, 'Add New Banner', 'setup/setupads/add', 12, 1, 1, 1, 1, 1, 1, 1, 1, '2016-02-05 23:15:42', 1, 'fa-bars', NULL),
(71, 'Contact List', 'article/contact_list', 13, 0, 1, 1, 1, 1, 1, 1, 1, '2015-09-15 14:32:25', 1, 'fa-bars', NULL),
(75, 'Add New Category', 'category/add', 7, 12, 1, 1, 1, 1, 1, 1, 1, '2017-12-22 13:42:09', 1, 'fa-bars', NULL),
(76, 'Category List', 'category/index', 7, 13, 11, 1, 1, 1, 1, 1, 1, '2017-12-22 13:42:54', 1, 'fa-bars', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `z_role`
--

CREATE TABLE `z_role` (
  `roleid` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_role`
--

INSERT INTO `z_role` (`roleid`, `role`, `is_admin`, `is_active`) VALUES
(1, 'Administrators', 1, 1),
(2, 'Teachers', NULL, 0),
(3, 'Sponsors', NULL, 0),
(4, 'Doctors', NULL, 0),
(5, 'Students', NULL, 0),
(6, 'Parents', NULL, 0),
(8, 'Socials', NULL, 0),
(9, 'www', NULL, 0),
(10, 'asd', NULL, 0),
(11, 'testing', NULL, 0),
(12, 'testing-2a', NULL, 0),
(13, 'testing-3', NULL, 0),
(14, 'testine-4', NULL, 0),
(15, 'Pedagogy Staff', NULL, 0),
(16, 'Human Resource', NULL, 0),
(17, 'Health', NULL, 0),
(18, 'Study Office', NULL, 0),
(19, 'VTC Officier', NULL, 0),
(20, 'Product Posting', NULL, 1),
(21, 'Store Managment', NULL, 1),
(22, 'Product Authorization', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `z_role_module_detail`
--

CREATE TABLE `z_role_module_detail` (
  `mod_rol_id` int(11) NOT NULL,
  `roleid` int(11) DEFAULT NULL,
  `moduleid` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_role_module_detail`
--

INSERT INTO `z_role_module_detail` (`mod_rol_id`, `roleid`, `moduleid`, `order`) VALUES
(82, 22, 7, NULL),
(81, 21, 10, NULL),
(80, 20, 7, NULL),
(102, 1, 15, NULL),
(101, 1, 12, NULL),
(100, 1, 11, NULL),
(99, 1, 7, NULL),
(98, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `z_role_page`
--

CREATE TABLE `z_role_page` (
  `role_page_id` int(11) NOT NULL,
  `roleid` int(11) DEFAULT NULL,
  `pageid` int(11) DEFAULT NULL,
  `moduleid` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `is_read` int(1) DEFAULT '1',
  `is_insert` int(1) DEFAULT '1',
  `is_delete` int(1) DEFAULT '1',
  `is_update` int(1) DEFAULT '1',
  `is_print` int(1) DEFAULT '1',
  `is_export` int(1) DEFAULT '1',
  `is_import` int(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_role_page`
--

INSERT INTO `z_role_page` (`role_page_id`, `roleid`, `pageid`, `moduleid`, `created_date`, `created_by`, `is_read`, `is_insert`, `is_delete`, `is_update`, `is_print`, `is_export`, `is_import`) VALUES
(17, 17, 24, 7, '2015-03-19 02:18:59', '1', 1, 1, 1, 1, 1, 1, 1),
(26, 17, 25, 7, '2015-06-18 21:15:05', '1', 1, 1, 1, 1, 1, 1, 1),
(27, 17, 26, 7, '2015-04-20 10:57:34', '1', 1, 1, 1, 1, 1, 1, 1),
(28, 17, 27, 7, '2015-04-20 10:57:45', '1', 1, 1, 1, 1, 1, 1, 1),
(29, 17, 28, 7, '2015-04-20 10:57:55', '1', 1, 1, 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `dashboard_item`
--
ALTER TABLE `dashboard_item`
  ADD PRIMARY KEY (`dashid`);

--
-- Indexes for table `site_profile`
--
ALTER TABLE `site_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblarticle`
--
ALTER TABLE `tblarticle`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `tblbanner`
--
ALTER TABLE `tblbanner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tblgallery`
--
ALTER TABLE `tblgallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `tbllayout`
--
ALTER TABLE `tbllayout`
  ADD PRIMARY KEY (`layout_id`);

--
-- Indexes for table `tbllocation`
--
ALTER TABLE `tbllocation`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `tblmenus`
--
ALTER TABLE `tblmenus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `z_blog`
--
ALTER TABLE `z_blog`
  ADD PRIMARY KEY (`site_show_blogid`);

--
-- Indexes for table `z_currency`
--
ALTER TABLE `z_currency`
  ADD PRIMARY KEY (`curid`);

--
-- Indexes for table `z_module`
--
ALTER TABLE `z_module`
  ADD PRIMARY KEY (`moduleid`);

--
-- Indexes for table `z_page`
--
ALTER TABLE `z_page`
  ADD PRIMARY KEY (`pageid`);

--
-- Indexes for table `z_role`
--
ALTER TABLE `z_role`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `z_role_module_detail`
--
ALTER TABLE `z_role_module_detail`
  ADD PRIMARY KEY (`mod_rol_id`);

--
-- Indexes for table `z_role_page`
--
ALTER TABLE `z_role_page`
  ADD PRIMARY KEY (`role_page_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1498;
--
-- AUTO_INCREMENT for table `dashboard_item`
--
ALTER TABLE `dashboard_item`
  MODIFY `dashid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_profile`
--
ALTER TABLE `site_profile`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblarticle`
--
ALTER TABLE `tblarticle`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `tblbanner`
--
ALTER TABLE `tblbanner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblgallery`
--
ALTER TABLE `tblgallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=443;
--
-- AUTO_INCREMENT for table `tbllayout`
--
ALTER TABLE `tbllayout`
  MODIFY `layout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbllocation`
--
ALTER TABLE `tbllocation`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tblmenus`
--
ALTER TABLE `tblmenus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `z_blog`
--
ALTER TABLE `z_blog`
  MODIFY `site_show_blogid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `z_currency`
--
ALTER TABLE `z_currency`
  MODIFY `curid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `z_module`
--
ALTER TABLE `z_module`
  MODIFY `moduleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `z_page`
--
ALTER TABLE `z_page`
  MODIFY `pageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `z_role`
--
ALTER TABLE `z_role`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `z_role_module_detail`
--
ALTER TABLE `z_role_module_detail`
  MODIFY `mod_rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `z_role_page`
--
ALTER TABLE `z_role_page`
  MODIFY `role_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
