-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2018 at 05:04 AM
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
(4, 'admin', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com', '2018-07-10 03:42:50', '::1', '2015-01-29 15:10:34', NULL, NULL, NULL, 1, 'System', 'Administrator', 1, 1, NULL),
(5, 'chetra', '202cb962ac59075b964b07152d234b70', 'eing.chetra@gmail.com', '2018-07-10 03:42:50', '::1', '2015-02-02 17:26:36', NULL, NULL, NULL, 2, 'eing', 'chetra', 0, 0, NULL),
(1497, 'store', 'e10adc3949ba59abbe56e057f20f883e', 'store@green.com', '2018-07-10 03:42:50', '::1', '2015-06-26 08:10:54', NULL, NULL, NULL, 21, 'Green', 'Store', 0, 1, NULL);

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
('fe43eaab4eb50bc2ca8178fd240e7a9d', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 1531191676, 'a:14:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:7:\"english\";s:6:\"userid\";s:1:\"4\";s:9:\"user_name\";s:5:\"admin\";s:8:\"password\";s:32:\"202cb962ac59075b964b07152d234b70\";s:6:\"roleid\";s:1:\"1\";s:9:\"last_name\";s:6:\"System\";s:10:\"first_name\";s:13:\"Administrator\";s:10:\"last_visit\";s:19:\"2018-07-09 09:15:07\";s:13:\"last_visit_ip\";s:3:\"::1\";s:9:\"moduleids\";a:6:{i:0;a:1:{s:8:\"moduleid\";s:1:\"7\";}i:1;a:1:{s:8:\"moduleid\";s:2:\"10\";}i:2;a:1:{s:8:\"moduleid\";s:2:\"15\";}i:3;a:1:{s:8:\"moduleid\";s:2:\"12\";}i:4;a:1:{s:8:\"moduleid\";s:2:\"11\";}i:5;a:1:{s:8:\"moduleid\";s:1:\"1\";}}s:12:\"ModuleInfors\";a:6:{i:7;a:4:{s:8:\"moduleid\";s:1:\"7\";s:11:\"module_name\";s:4:\"Menu\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:10;a:0:{}i:15;a:0:{}i:12;a:4:{s:8:\"moduleid\";s:2:\"12\";s:11:\"module_name\";s:6:\"Banner\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:11;a:4:{s:8:\"moduleid\";s:2:\"11\";s:11:\"module_name\";s:7:\"Article\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:1;a:0:{}}s:10:\"PageInfors\";a:5:{i:7;a:4:{i:63;a:14:{s:6:\"pageid\";s:2:\"63\";s:9:\"page_name\";s:9:\"Menu List\";s:4:\"link\";s:10:\"menu/index\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"10\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 15:53:36\";s:4:\"icon\";s:7:\"fa-bars\";}i:64;a:14:{s:6:\"pageid\";s:2:\"64\";s:9:\"page_name\";s:12:\"Add New Menu\";s:4:\"link\";s:8:\"menu/add\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"11\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 15:53:58\";s:4:\"icon\";s:7:\"fa-bars\";}i:75;a:14:{s:6:\"pageid\";s:2:\"75\";s:9:\"page_name\";s:16:\"Add New Category\";s:4:\"link\";s:12:\"category/add\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"12\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2017-12-22 13:42:09\";s:4:\"icon\";s:7:\"fa-bars\";}i:76;a:14:{s:6:\"pageid\";s:2:\"76\";s:9:\"page_name\";s:13:\"Category List\";s:4:\"link\";s:14:\"category/index\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"13\";s:9:\"is_insert\";s:2:\"11\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2017-12-22 13:42:54\";s:4:\"icon\";s:7:\"fa-bars\";}}i:10;a:2:{i:67;a:14:{s:6:\"pageid\";s:2:\"67\";s:9:\"page_name\";s:12:\"Product List\";s:4:\"link\";s:13:\"product/index\";s:8:\"moduleid\";s:2:\"10\";s:5:\"order\";s:1:\"1\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-12 17:10:07\";s:4:\"icon\";s:7:\"fa-bars\";}i:68;a:14:{s:6:\"pageid\";s:2:\"68\";s:9:\"page_name\";s:16:\"Add New Products\";s:4:\"link\";s:11:\"product/add\";s:8:\"moduleid\";s:2:\"10\";s:5:\"order\";s:1:\"2\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-12 17:10:46\";s:4:\"icon\";s:7:\"fa-bars\";}}i:12;a:2:{i:69;a:14:{s:6:\"pageid\";s:2:\"69\";s:9:\"page_name\";s:11:\"Banner List\";s:4:\"link\";s:20:\"setup/setupads/index\";s:8:\"moduleid\";s:2:\"12\";s:5:\"order\";s:1:\"0\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-02-05 23:16:13\";s:4:\"icon\";s:7:\"fa-bars\";}i:70;a:14:{s:6:\"pageid\";s:2:\"70\";s:9:\"page_name\";s:14:\"Add New Banner\";s:4:\"link\";s:18:\"setup/setupads/add\";s:8:\"moduleid\";s:2:\"12\";s:5:\"order\";s:1:\"1\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-02-05 23:15:42\";s:4:\"icon\";s:7:\"fa-bars\";}}i:11;a:2:{i:65;a:14:{s:6:\"pageid\";s:2:\"65\";s:9:\"page_name\";s:12:\"Article List\";s:4:\"link\";s:13:\"article/index\";s:8:\"moduleid\";s:2:\"11\";s:5:\"order\";s:1:\"4\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 16:46:23\";s:4:\"icon\";s:7:\"fa-bars\";}i:66;a:14:{s:6:\"pageid\";s:2:\"66\";s:9:\"page_name\";s:15:\"Add New Article\";s:4:\"link\";s:11:\"article/add\";s:8:\"moduleid\";s:2:\"11\";s:5:\"order\";s:1:\"5\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 16:47:08\";s:4:\"icon\";s:7:\"fa-bars\";}}i:1;a:4:{i:5;a:14:{s:6:\"pageid\";s:1:\"5\";s:9:\"page_name\";s:4:\"Page\";s:4:\"link\";s:12:\"setting/page\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"0\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"0\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"0\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 17:00:01\";s:4:\"icon\";s:9:\"fa-file-o\";}i:6;a:14:{s:6:\"pageid\";s:1:\"6\";s:9:\"page_name\";s:12:\"User Profile\";s:4:\"link\";s:12:\"setting/user\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"0\";s:9:\"is_export\";s:1:\"0\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:56:20\";s:4:\"icon\";s:7:\"fa-user\";}i:7;a:14:{s:6:\"pageid\";s:1:\"7\";s:9:\"page_name\";s:9:\"User Role\";s:4:\"link\";s:12:\"setting/role\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:57:09\";s:4:\"icon\";s:7:\"fa-user\";}i:8;a:14:{s:6:\"pageid\";s:1:\"8\";s:9:\"page_name\";s:11:\"Role Access\";s:4:\"link\";s:18:\"setting/permission\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"0\";s:7:\"is_show\";s:1:\"0\";s:8:\"is_print\";s:1:\"0\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:56:46\";s:4:\"icon\";s:9:\"fa-wrench\";}}}s:10:\"PageAction\";a:5:{i:7;a:4:{i:63;s:1:\"1\";i:64;s:1:\"1\";i:75;s:1:\"1\";i:76;s:1:\"1\";}i:10;a:2:{i:67;s:1:\"1\";i:68;s:1:\"1\";}i:12;a:2:{i:69;s:1:\"1\";i:70;s:1:\"1\";}i:11;a:2:{i:65;s:1:\"1\";i:66;s:1:\"1\";}i:1;a:4:{i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"0\";}}}');

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
(77, 'PRODUCT DESCRIPTIONS', 'PRODUCT DESCRIPTIONS', '', '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; line-height: 1.5rem; font-size: 18px; color: rgb(86, 86, 86); font-family: robotolight;\">\n	Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; list-style: none; padding: 0px; color: rgb(86, 86, 86); font-family: robotolight; font-size: 15px;\">\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Quisque volutpat mattis eros.</li>\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Nullam malesuada erat ut turpis.</li>\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Suspendisse urna nibh.</li>\n</ul>\n', 1, 1, '', 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.', 14, '', '2018-02-21'),
(78, 'ABOUT US', 'ABOUT US', '', '<h1 style=\"box-sizing: border-box; margin: 20px 0px 10px; font-size: 36px; font-family: Lato, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); text-align: center;\">\n	<img src=\"http://855solution.com/photos/1/5747b855a134e.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle;\" /></h1>\n<h1 style=\"box-sizing: border-box; margin: 20px 0px 10px; font-size: 36px; font-family: Lato, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); text-align: center;\">\n	ABOUT US</h1>\n<hr style=\"box-sizing: content-box; height: 0px; margin-top: 20px; margin-bottom: 20px; border-right: 0px; border-bottom: 0px; border-left: 0px; border-image: initial; border-top-style: solid; border-top-color: rgb(238, 238, 238); color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\" />\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\">\n	<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 855.Solution offers with a complete range of services to fill the market need for designing and developing a fitted solution to enable the client&rsquo;s business in the most cost effective way. We revolve around the need to provide quality services and products to our various target clients, in the process fully satisfying their needs.&nbsp;</span></span></p>\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\">\n	<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">In summary we intend to attain the following objectives:</span></span></p>\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Continuously provide professional quality services on time and on budget.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Develop a follow-up strategy to gauge performance with all our clients.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Implement and maintain a quality control system and assurance policy.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; To instill a culture of continuous improvement in beating standards of customer satisfaction and efficiency.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Continuously formalize and measure cross-functional working communication so as to ensure that the various&nbsp; departments work harmoniously towards attainment of company objectives.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; We are fully committed to supporting growth and development in the economy.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Customize the software to the individual needs of each client.<br style=\"box-sizing: border-box;\" />\n		<br />\n		</span></span></li>\n</ul>\n', 1, 1, '', '', 7, '', '2018-02-22'),
(84, 'Project 1', 'Project 1', '', '', 1, 1, '', '', 15, '', '2018-05-21'),
(100, 'MECHANICAL SERVICES', 'MECHANICAL SERVICES', '', '<p>\n	<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 14px;\">Whether you need to install cooling for a new server room or figure out how to replace your inefficient central mechanical plant, you want to partner with mechanical engineers you trust.</span></p>\n\n', 1, 1, '', '', 21, '', '2018-06-23'),
(101, 'ELECTRICAL SERVICES', 'ELECTRICAL SERVICES', '', '<p>\n	<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 14px;\">As you decide who to hire for your next electrical project, your first concerns may be where to locate bulky electrical switch gear or how to choose lighting fixtures that meet code requirements and lend appeal to your finished space.</span></p>\n', 1, 1, '', '', 21, '', '2018-06-23'),
(117, 'Adorable species ', ' Adorable species', '', '<p>\n	&nbsp; &nbsp;<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </span></p>\n<p>\n	<span>&nbsp; &nbsp;Donec pede justo, fringilla vel,</span>aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>\n<p>\n	&nbsp; &nbsp;Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem antedapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.&nbsp;</p>\n<p>\n	&nbsp; Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem nequesed ipsum.Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>\n<p>\n	&nbsp; Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\n', 1, 1, '', '', 9, '', '2018-06-27'),
(118, 'feeling sad for the forest', 'feeling sad for the forest', '', '<p>\n	&nbsp;&nbsp;<span>commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricie&nbsp;</span>pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, i .</p>\n<p>\n	&nbsp; mperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut</p>\n<p>\n	&nbsp; &nbsp;metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>\n<p>\n	&nbsp; &nbsp;Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\n', 1, 1, '', '', 9, '', '2018-06-27'),
(119, 'Night view of the city', 'Night view of the city', '', '<p>\n	&nbsp;<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel,</span></p>\n<p>\n	<span>&nbsp; aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. </span></p>\n<p>\n	<span>&nbsp; &nbsp;Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. </span></p>\n<p>\n	<span>&nbsp; &nbsp;Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</span></p>\n', 1, 1, '', '', 9, '', '2018-06-27'),
(120, 'Earth', 'Earth', '', '<p>\n	&nbsp;<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel,</span></p>\n<p>\n	<span>&nbsp; aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. </span></p>\n<p>\n	<span>&nbsp; Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. </span></p>\n<p>\n	<span>&nbsp; Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</span></p>\n', 1, 1, '', '', 9, '', '2018-06-27'),
(121, 'Health care is a human right.', 'Doctor Health care is a human right.', '', '<p>\n	&nbsp;<span style=\"color: rgb(115, 119, 127); font-style: inherit; font-weight: inherit; text-decoration-line: initial; text-transform: initial; font-family: Roboto, sans-serif; font-size: 16px;\">Let&rsquo;s just get right down to it:&nbsp;Health care is a human right.&nbsp;Treating an illness or injury should never be a luxury afforded only to the wealthy few who can afford it. Your income, location, race, sexual orientation, gender identity, or current state of health should never be a barrier to receiving affordable, high-quality health care. I believe passionately in universal health care, and I always will.</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">&nbsp;</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">As with so many other issues, politicians in Washington will stop at nothing to make life harder for Coloradans for the benefit of special interests. In Colorado, we have an opportunity to aggressively reduce the costs of care, expand access to the services people depend on, and put Coloradans first.&nbsp;</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">&nbsp;</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">Too often, politicians talk about health care as if it begins and ends when you get sick or need to visit a doctor. I propose a bolder path.&nbsp;&nbsp;</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">&nbsp;</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">We need to give more Coloradans the opportunity to build lifelong healthy habits and have access to services that reduce the chances of ending up in a hospital room or a doctor&rsquo;s office to begin with. This approach puts the everyday health of our citizens at the forefront of our policy-making while ensuring that when the unimaginable happens, no Coloradan experiences the fear of not being able to afford the treatment they need, or that their loved one needs, to get better.</span></p>\n', 1, 1, '', '', 15, '', '2018-06-29'),
(122, 'How can we help you?', 'How can we help you?', '', '<h5>\n	Let&#39;s talk about your goals</h5>\n<p>\n	Welcome to MEP Engineering. Client service is our number one passion. Yes, you&rsquo;re in the right place: We deliver expert mechanical, electrical and plumbing project solutions. We use the latest technology to stay on the cutting edge of <a href=\"http://www.mep-eng.com/services/\">sustainable design practices</a>. However, our 350 years of combined employee experience have taught us you need and want much more. You want a MEP partner who listens to you and who will work <em>with</em> you to achieve your vision.</p>\n<h5>\n	What happens when you partner with MEP?</h5>\n<p>\n	When you hire MEP Engineering, we take the time to discuss your project goals. We listen proactively. We ask questions. We make sure that we understand your needs. Then, we strategize with you to complete your project within budget and on time. We become your partner and you become ours.</p>\n', 1, 1, '', '', 25, '', '2018-07-04'),
(123, 'Our people are our strength', 'Our people are our strength', '', '<p>\n	Our team talent runs deep and covers multiple disciplines. You&rsquo;ll find all the services you need to complete your project under our roof&mdash;from boiler plant design to power distribution systems. You&rsquo;ll also discover that our commitment to accomplishing your goals brings out the very best in our teams. The synergy of a true partnership sparks innovation, commands diligence and unleashes renewed excitement.</p>\n<p style=\"padding-top: 15px;\">\n	These qualities draw from a strong culture established by our company founders in 2004. Working in a collaborative environment energizes our teams. It enables us to go the extra mile for your project. We strive for quality and follow trusted processes that help us work efficiently. We don&rsquo;t let obstacles or excuses keep us from meeting deadlines. We follow through because your goals are our goals.</p>\n', 1, 1, '', '', 25, '', '2018-07-04'),
(124, 'Let`s start the process right', 'Let`s start the process right', '', '<div class=\"textwidget\">\n						<p>We offer an array of services at MEP Engineering; the unique service we offer is to help you decide exactly what you need. At project start, we invite you to engage in an open discussion about your goals. We give you our undivided attention and ask you to do most of the talking. We take notes. After all, you know your project best. During that conversation, we learn all we can about your project objectives, budget, timeline and return on investment expectations. Then, we focus our engineering expertise to provide the right solutions to meet those needs.</p>\n					</div>\n					<h4 class=\"articletitle\">Expect support from a superb core team</h4>\n					<div class=\"textwidget\">\n						<p>Once we outline solutions, we set up a well-rounded team to carry your project from start to finish. We select an engineer who is the best match for your project to lead a team that is supported by Quality Control Managers and Principals who work diligently on each phase of your project. In our organization, everyone has the opportunity to lead and contribute. This dynamic structure keeps our team members motivated and inspired. Our staff provides engineering services to both public and private sector clients in 18 states.</p>\n					</div>', 1, 1, '', '', 26, '', '2018-07-04'),
(125, 'Benefit from an integrated focus on Green Design', 'Benefit from an integrated focus on Green Design', '', '<p>Each of our designers and engineers is trained to recognize opportunities for and recommend Green Building Design Approaches wherever possible. We believe sustainable design equals good stewardship of our natural resources. We strive to exceed standards outlined by the US Green Building Council LEED and ASHRAE’s Standard 90.1 Energy Standard for Buildings on every project.</p>', 1, 1, '', '', 26, '', '2018-07-04'),
(126, 'Stay on Cutting Edge', 'Stay on Cutting Edge', '', '<p>\n	Whether you need to install cooling for a new server room or figure out how to replace your inefficient central mechanical plant, you want to partner with mechanical engineers you trust. We are here for you and our team members are experts in:</p>\n<ul>\n	<li class=\"style-ul\">\n		Heating: adding thermal energy</li>\n	<li class=\"style-ul\">\n		Cooling: removing thermal energy</li>\n	<li class=\"style-ul\">\n		Humidifying: adding moisture</li>\n	<li class=\"style-ul\">\n		Dehumidifying: removing moisture</li>\n	<li class=\"style-ul\">\n		Cleaning: removing particulates and contaminants</li>\n	<li class=\"style-ul\">\n		Ventilation: diluting gaseous contaminants</li>\n	<li class=\"style-ul\">\n		Air movement: circulating and mixing air for proper ventilation and thermal energy transfer</li>\n</ul>\n<p>\n	They are certified or licensed either as P.E., E.I., LEED AP or a combination of the three. They stay informed and on top of the latest developments in the field through active participation in a variety of organizations. These professional organizations include: The American Society of Mechanical Engineers (ASME), the American Society of Plumbing Engineers (ASPE) and the American Society of Heating, Refrigeration and Air-Conditioning Engineers (ASHRAE) to name just a few.</p>\n', 1, 1, '', '', 27, '', '2018-07-05'),
(127, 'Collaboration for Setter Solution', 'Collaboration for Setter Solution', '', '<p>Our engineers design for diverse projects and clients. Each of our engineers is given the opportunity to lead projects and be a core team member. Working on many types of tasks in a variety of capacities helps each team member to build a deep knowledge base. They learn how to design flexible solutions that work for the present and the future. So, they can help you strike just the right balance between performance and cost. Our teams can provide you with assessments, recommend alternatives and work with you to design high-functioning systems to fit your specific needs.</p>\n', 1, 1, '', '', 27, '', '2018-07-05'),
(128, 'Access Seasoned Expertise', 'Access Seasoned Expertise', '', '<p>\n	As you decide who to hire for your next electrical project, your first concerns may be where to locate bulky electrical switch gear or how to choose lighting fixtures that meet code requirements and lend appeal to your finished space. We understand and we can help. We&rsquo;ve solved many design puzzles over the years and Electrical Services are at the core of what we do best. Our electrical engineers are certified or licensed either as P.E., E.I., LEED AP or a combination of the three. They stay informed and on top of the latest developments in the field through active participation in a variety of professional organizations.</p>\n', 1, 1, '', '', 28, '', '2018-07-05'),
(129, 'Benefit from trusted relationships', 'Benefit from trusted relationships', '', '<p>Each of our engineers also works diligently to build and maintain relationships with lighting and power vendors as well as local jurisdictions. Close ties help our engineers stay informed about the latest trends and technologies. They also help us finish your job more efficiently. We can assist you in placing your large transformer in a tight urban area, for example. We use our knowledge, research and community involvement to create environments that are highly functional, safe and aesthetically pleasing.</p>', 1, 1, '', '', 28, '', '2018-07-05'),
(130, 'Prevent issues by looking at the “big picture”', 'Prevent issues by looking at the “big picture”', '', '<p>\n	Our plumbing engineers design systems with your &ldquo;whole building&rdquo; in mind to help you avoid surprises. From determining tap size, to coordinating with civil engineers, to deciding the location of incoming utilities, we carefully orchestrate your plumbing solutions to integrate with your overall plan. We look at project objectives, materials and designs from many different angles to get it right. Our engineers ensure that water and energy are used efficiently, that thorough fire protection and broad pollution systems are established and that your overall site is sustainable. We provide high-functioning systems to meet your specific needs as well as assist you in conserving natural resources.</p>\n', 1, 1, '', '', 29, '', '2018-07-05'),
(131, 'A Holistic Design Approach', 'A Holistic Design Approach', '', '<p>Accomplishing great plumbing design means assembling a team that works on various aspects of your project while keeping multiple objectives in mind. Our engineering team members are highly-experienced and certified or licensed either as P.E., E.I., LEED AP or a combination of the three. They stay informed and on top of the latest developments in the field through active participation in a variety of organizations.</p>', 1, 1, '', '', 29, '', '2018-07-05'),
(132, 'Tenant Improvement Specialists', 'Tenant Improvement Specialists', '', '<p>Our dedicated Building and Tenant Services team is here for you and your building. We know you need a dependable partner who will deliver on time, every time, at the drop of the hat. We understand your primary objective—to keep every building tenant happy!</p>\n										<p>Our Building and Tenant Services group has Tenant Improvement down to a science. We are a small, nimble team that can respond to your needs quickly, yet we have our entire MEP office to draw upon when required. We have completed over 2,000 tenant improvement projects ranging in size from 100 square feet to over 150,000 square feet.</p>', 1, 1, '', '', 30, '', '2018-07-05'),
(133, 'Find out how our TI team can help you:', 'Find out how our TI team can help you:', '', '', 1, 1, '', '', 30, '', '2018-07-05'),
(134, 'Services to Meet Your Needs', 'Services to Meet Your Needs', '', '<p>Our dedicated Building and Tenant Services team is here for you and your building. We know you need a dependable partner who will deliver on time, every time, at the drop of the hat. We understand your primary objective—to keep every building tenant happy!</p>\n									<p>Our Building and Tenant Services group has Tenant Improvement down to a science. We are a small, nimble team that can respond to your needs quickly, yet we have our entire MEP office to draw upon when required. We have completed over 2,000 tenant improvement projects ranging in size from 100 square feet to over 150,000 square feet.</p>', 1, 1, '', '', 31, '', '2018-07-05'),
(135, 'Increase Knowledge Through Technology', 'Increase Knowledge Through Technology', '', '<p>\n	We live in a technology-driven world. In recent years, the building design industry has benefitted greatly from advances in the area of computer-assisted design. We use Building Information Modeling (BIM) to design 3D models where the design elements within the model communicate with each other. Just like in some amazing science fiction film, every detail of the building construction can be viewed by all team members from one location.</p>\n<h4 class=\"specialtytitle\">\n	Make more informed decisions</h4>\n<p>\n	Our Building and Tenant Services group has Tenant Improvement down to a science. We are a small, nimble team that can respond to your needs quickly, yet we have our entire MEP office to draw upon when required. We have completed over 2,000 tenant improvement projects ranging in size from 100 square feet to over 150,000 square feet.</p>\n', 1, 1, '', '', 32, '', '2018-07-05'),
(136, 'Experience The Exciting Results of BIM', 'Experience The Exciting Results of BIM', '', '<p>\n	As your design partner, we use a platform called Revit MEP to create a 3D modeling environment. In this environment, our team can visualize complex systems and avoid conflicts with other building systems. Using Revit, we can simplify design decision-making and produce coordinated and accurate design documentation. This helps us increase design performance, produce higher quality work and increase cost efficiency. Compatibility issues also become a thing of the past as we import from and export to a variety of CAD formats with ease to share with you during the design review process.</p>\n<h4 class=\"specialtytitle\">\n	We use Revit BIM on over 70% of our projects.</h4>\n<p>\n	The projects include K-12 educational facilities, multifamily developments and offices buildings. For example, we are currently using REVIT on PIVOT Denver: a new three-tower multifamily development with a flagship Whole Foods on the main floor. Using Revit and other BIM modeling programs, we designed the project to include a high level of coordination at &ldquo;pinch points.&rdquo; Our engineers &ndash; from a variety of disciplines &ndash; offered field-worthy solutions for these tight spots, so that we could envision solutions prior to construction beginning in the field.</p>\n<p>\n	Many of our engineers also create designs of building systems using AutoCAD and Autotdesk Navisworks. As your design partner, we&rsquo;ll use whatever tools you use to ensure the efficient project coordination.</p>\n', 1, 1, '', '', 32, '', '2018-07-05'),
(137, 'PLUMBING SERVICES', 'PLUMBING SERVICES', '', '<p>\n	<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 14px;\">Our plumbing engineers design systems with your &ldquo;whole building&rdquo;</span></p>\n', 1, 1, 'site/plumbing', '', 22, '', '2018-07-05'),
(138, 'BUILDING AND TENANT SERVICES', 'BUILDING AND TENANT SERVICES', '', '<p>\n	<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 14px;\">Our dedicated Building and Tenant Services team is here for you&nbsp;</span></p>\n', 1, 1, 'site/building', '', 22, '', '2018-07-05'),
(139, 'SPECIALTY SERVICES', 'SPECIALTY SERVICES', '', '<p>\n	<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 14px;\">MEP is fully committed to providing our clients with energy efficient&nbsp;</span></p>\n', 1, 1, 'site/specialty', '', 22, '', '2018-07-05'),
(140, 'BUILDING INFORMATION MODELING', 'BUILDING INFORMATION MODELING', '', '<p>\n	<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 14px;\">We live in a technology-driven world. In recent years, the building&nbsp;</span></p>\n', 1, 1, 'site/buildinginformation', '', 22, '', '2018-07-05'),
(141, ' PLUMBING SERVICES1', ' PLUMBING SERVICES1', '', '<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 14px;\">Our plumbing engineers design systems with your &ldquo;whole building&rdquo;</span></p>\n', 1, 1, 'site/plumbing', '', 22, '', '2018-07-05'),
(142, 'Flatirons Community Church', 'Flatirons Community Church', '', '<div class=\"project_metadata\">\n	<ul class=\"list_unstyled\">\n		<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n			<strong>Name:</strong> Flatirons Community Church</li>\n		<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n			<strong>Location:</strong> Lafayette, CO</li>\n		<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n			<strong>Type:</strong> an 180,000 square foot renovation of a Walmart and an Albertson&rsquo;s to create the new Flatirons Community Church.</li>\n		<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n			<strong>MEP Services:</strong> We provided design and built electrical engineering services for this project.</li>\n		<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n			<strong>Category:</strong> Church</li>\n	</ul>\n</div>\n<div class=\"hentry__content content-p\">\n	<p>\n		&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">Walking into the tiered entryway of this building, you feel like you have more room to breathe. The architecture interacts with the sky and mimics it&mdash;very appropriate for a spiritual center framed by our majestic Rocky Mountains.</span></p>\n	<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n		In our project design, we incorporated electrical and lighting systems to accommodate a 60,000 square foot open mall. We created this space for members to build community, have deep discussions and share information. Features included: a fireplace, kitchen, caf&eacute; seating area, check-in kiosks, column televisions and projectors, an education wing mixing classrooms and teaching areas with projection walls and stage lighting, a youth wing with a multi-purpose room, kitchen, and flexible break-out room, an administrative office area and an auditorium with a mezzanine that would seat 4,000 people.</p>\n	<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n		We designed high bay fluorescents in open-to-structure spaces to provide the ambient lighting in the mall with jelly jars integrated throughout highlighting different uses of the space. In the auditorium and multi-purpose room, we included both high bay fluorescents for work lighting, incandescent cylinders for house lighting, provided power for future LED lighting and roughed-in stage lighting.</p>\n</div>\n', 1, 1, '', '', 33, '', '2018-07-09'),
(143, 'Mission Hills Church', 'Mission Hills Church', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\">\n							<i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							 Mission Hills Church\n						</li>\n						<li><span class=\"project_metairon\">\n							<i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							   Littleton, CO\n						</li>\n						<li><span class=\"project_metairon\">\n							<i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  A 102,850 square foot church building with a sanctuary to seat approximately 1,200 people, a 10,000 square foot basement, a kitchen area, and office support spaces on 20 acres.\n						</li>\n						<li><span class=\"project_metairon\">\n							<i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   We teamed with Lee Architects to provide mechanical electrical and plumbing solutions for this project.\n						</li>\n						<li><span class=\"project_metairon\">\n							<i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Church\n						</li>\n					</ul>\n				</div>\n				<div class=\"hentry__content content-p\">\n					<p>\n	&nbsp;</p>\n<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n	Lighting designed for worship and gathering</h2>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	With engineers from Lee Architects, we planned the power distribution and lighting systems for this modern building. We sized the electrical service for the current design, keeping in mind future classroom and chapel additions.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	Worship services at Mission Hills connect members with one another and welcome them with open arms. Gatherings at the church routinely include highly-engaging media presentations. We designed distribution to serve these &ldquo;road shows&rdquo; via road show disconnects for theatrical lighting and audio visual systems. The design incorporated distribution for the worship center theatrical lighting, audio and video systems in addition to general power of the facility. We also planned AVL systems for the youth and children&rsquo;s worship areas.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	Wherever possible, we incorporated energy efficiency into the lighting design. We used fluorescent lighting, occupancy sensors and integrated lighting control systems. We built the main lobby area to include high, two-story ceilings lit with a combination of fluorescent multi-lamped, multi-switched can lights, fluorescent decorative wall sconces, fluorescent direct and indirect pendants, and decorative accent lighting at the centralized fireplace and caf&eacute; areas.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	We structured the &ldquo;Main Street&rdquo; corridor connecting the west and east wings as a two to three story mall-like atrium that incorporated a combination of decorative fluorescent wall sconces and matching large scale pendants. The pendants used fluorescent and metal halide lamp sources and included emergency lighting. We designed the worship center using incandescent quartz halogen can lights and decorative wall sconces&mdash;all fully dimmable and controlled via the theatrical lighting systems. We designed lighting for the facility to meet the 2006 IECC and it passed 23% better than code.</p>\n<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n	Creative mechanical solutions</h2>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	We designed the mechanical system using constant volume and variable volume HVAC systems to serve classroom occupancies, sanctuary, church offices, youth rooms and assembly spaces. We drew on our teams&rsquo; expertise to overcome design challenges including: designing the HVAC systems to achieve NC25 and RC N 27 sound criteria in the worship center. We innovatively deigned a sound reduction solution using contractor-fabricated sound attenuators.</p>\n<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n	Plumbing solutions for the present and future</h2>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	We designed new restrooms with standard efficiency plumbing fixtures throughout the project. We planned a coffee shop to include plumbing fixtures and systems to allow for full kitchen service, including a 1500 gallon grease interceptor, as required by the local wastewater department. We planned a hot water system for the coffee shop and classrooms to meet health department criteria for both food preparation areas and commercial childcare facilities. As the church planned to grow, we included plumbing infrastructure within the church to allow for several planned future expansions without having to modify the existing systems.</p>\n<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n	Project Highlights</h2>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	During this $15 million project, MEP engineers collaborated with the entire design team to provide a space that met energy efficiency goals, minimized utility costs and saved energy. Our team researched and coordinated the use of alternative ventilation approaches that are not covered under the 2003 International Mechanical Code.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	These approaches included using ASHRAE 62.1-2004 ventilation calculations for minimum outdoor air flow rates as well as CO<span style=\"box-sizing: border-box; font-size: 12px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em;\">2</span>&nbsp;sensing and outside air control strategies for the high occupancy spaces throughout the floor plan. Using the ASHRAE ventilation calculations and CO<span style=\"box-sizing: border-box; font-size: 12px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em;\">2</span>&nbsp;sensing allowed the HVAC equipment to reduce energy consumption by not heating or cooling as much outside ventilation air. The equipment tonnage was reduced by approximately 70 tons of cooling capacity and approximately 1,512,000 BTU/h of natural gas usage and capacity.</p>\n				</div>\n			</div>\n\n\n', 1, 1, '', '', 33, '', '2018-07-09');
INSERT INTO `tblarticle` (`article_id`, `article_title`, `article_title_kh`, `content_kh`, `content`, `is_active`, `is_marguee`, `meta_keyword`, `meta_desc`, `location_id`, `icon`, `article_date`) VALUES
(144, 'Foundations Church', 'Foundations Church', '', '<div class=\"project_metadata\">\n	<ul class=\"list_unstyled\">\n		<li><span class=\"project_metairon\">\n			<i class=\"fa fa-folder\"></i></span>\n			<strong>Name:</strong> Foundations Church</li>\n		<li><span class=\"project_metairon\">\n			<i class=\"fa fa-map\"></i></span>\n			<strong>Location:</strong> Loveland, CO</li>\n		<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n			<strong>Type:</strong> A 50,000 square foot church conversion.</li>\n		<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n			<strong>MEP Services:</strong> We designed total mechanical, electrical and plumbing solutions for the renovation of an existing 12-screen theater building, converting it into a church facility with auditorium, youth ministry areas, atrium and lobby.</li>\n		<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n			<strong>Category:</strong> Church</li>\n	</ul>\n</div>\n<div class=\"hentry__content content-p\">\n	<p>\n		&nbsp;</p>\n	<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n		Foundations Church</h2>\n	<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n		Renovating an old theater means you start the project with quite a bit of demolition. We planned the removal of several interior walls, resulting in a final floor plan that included approximately 50,000 square feet. The design incorporated an auditorium with a stage and an open floor for individual chair seating for worship services. Additional spaces included everything the church would need to welcome members of all ages: a children&rsquo;s ministry area with a nursery and a multipurpose room and an atrium and lobby with a coffee area, booths and tables and administrative offices. The booths and tables will become an information hub for the church&rsquo;s ministries and events.</p>\n	<h3 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 24px; letter-spacing: -0.5px;\">\n		Electrical systems</h3>\n	<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n		We designed the electrical systems to replace electrical service and distribution, as the existing electrical service and much of the distribution had been damaged and was missing its copper pieces.</p>\n	<h3 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 24px; letter-spacing: -0.5px;\">\n		Mechanical systems</h3>\n	<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n		We planned new HVAC equipment as well. The existing equipment had copper parts removed and much of the system was damaged beyond repair or re-use.</p>\n	<h3 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 24px; letter-spacing: -0.5px;\">\n		Plumbing systems</h3>\n	<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n		Removal of copper water piping affected the plumbing system. We designed domestic water entry and downstream piping distribution to accommodate this loss.</p>\n	<h3 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 24px; letter-spacing: -0.5px;\">\n		<strong style=\"box-sizing: border-box;\">Project Highlights</strong></h3>\n	<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n		&ldquo;This building is a great gift to us,&rdquo; said Carl Sutter, lead pastor of Foundations Church. &ldquo;We want to use this building to bring hope and healing to northern Colorado. We want the old MetroLux theater to be a beacon of light. We want this to be a community building that communicates love and care for Northern Colorado.&rdquo; &ndash;&nbsp;<a href=\"http://www.reporterherald.com/lifestyles/faith/ci_27330717/foundations-church-readies-its-new-home\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(109, 165, 242); text-decoration-line: none;\">http://www.reporterherald.com/lifestyles/faith/ci_27330717/foundations-church-readies-its-new-home</a></p>\n</div>\n', 1, 1, '', '', 33, '', '2018-07-09'),
(145, 'Church of the Rock', 'Church of the Rock', '', '<div class=\"project_metadata\">\n	<ul class=\"list_unstyled\">\n		<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n			<strong>Name:</strong> Church of the Rock</li>\n		<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n			<strong>Location:</strong> Castle Rock, Colorado</li>\n		<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n			<strong>Type:</strong> Design of a new 53,000 square foot church on approximately 53 acres.</li>\n		<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n			<strong>MEP Services:</strong> We designed mechanical, electrical and plumbing components for this project.</li>\n		<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n			<strong>Category:</strong> Church</li>\n	</ul>\n</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">We are pleased to tell our clients that the Church of the Rock was our first project. In fact, one of our owners has a picture of the Church of the Rock on his credit card. Why? It&rsquo;s a symbol of our roots.</span></p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	MEP Engineering began when we started a great relationship with one of Denver&rsquo;s most trusted Electrical Contractors: Duro Electric. We began working in our first office with just three guys: Tom, Roger and Joe, in a sectioned off portion of Duro Electric&rsquo;s basement.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	Designing this 53,000 square foot set our future course for success in providing large-scale, holistic designs that benefit the surrounding community. The space houses an 850-seat sanctuary, a state-of-the-art children&rsquo;s wing featuring a modern youth facility called&nbsp;<em style=\"box-sizing: border-box;\">The Ark</em>, as well as adult education and administrative offices.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	Total estimated construction cost: $8.7 million.</p>\n</div>', 1, 1, '', '', 33, '', '2018-07-09'),
(146, 'Adams 12 Five Star School District-Wide Instructional Technology Excellence (ITX)', 'Adams 12 Five Star School District-Wide Instructional Technology Excellence (ITX)', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							 Adams 12 Five Star School District-Wide Instructional Technology Excellence (ITX)\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Adams County, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  Renovation and addition of multiple data rooms at 30 Elementary Schools, 7 Middle Schools, 7 High Schools and 4 Specialty schools.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   Adding electrical capacity for new equipment, providing mechanical load calculations as well as additional mechanical cooling or exhaust as needed and providing condensate drains when required.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Education, K - 12\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">We designed the renovation and addition of multiple data rooms at 30 Elementary Schools, 7 Middle Schools, 7 High Schools and 4 Specialty schools. We added electrical capacity for new equipment, provided mechanical load calculations, provided additional mechanical cooling or exhaust as needed and furnished condensate drains when required.</span></p>\n<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n	Project history</h2>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	Adams 12 Five Star Schools serves 42,200 students on the north end of the Denver Metro area. Prompted by state legislation by the Partnership for Assessment of Readiness for College and Careers (PARCC) mandating online assessments, Adams 12 moved to update the cooling in data rooms to support massive equipment upgrades required to meet the IT hardware needs to support the State of Colorado mandated testing. The school district refers to this project as the ITX (Instructional Technology Excellence) project.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	The district wants to integrate technology system-wide in the Adams 12 learning environment to deliver a true 21st Century education and to administer the PARCC on-line assessment as mandated by state law.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	This ITX project is bringing wireless capacity and computing devices to every school classroom in the district. The initiative was the result of persistent advocacy by parents, students, teachers, principals, central office staff and board of education members who were concerned that the district&rsquo;s old technology was not adequate to serve the students&rsquo; learning needs.</p>\n</div>', 1, 1, '', '', 34, '', '2018-07-09'),
(147, 'CSU Pueblo Student Housing Building I, II and III', 'CSU Pueblo Student Housing Building I, II and III', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							 CSU Pueblo Student Housing Building I, II and III\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Pueblo, Colorado\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  New Construction\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   Mechanical, Electrical and Plumbing Engineering Design\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Education, Higher Education, Multifamily\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;</p>\n<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n	Project Description</h2>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	MEP Engineering was selected by&nbsp;Colorado State University to provide mechanical, electrical and plumbing engineering services for two new student housing facilities, located on their Pueblo Campus. These projects included two new 250 bed, three-story student housing facilities of approximately 80,000 square feet each. MEP services were completed in October 2010.</p>\n<h3 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 24px; letter-spacing: -0.5px;\">\n	Technical Services Provided</h3>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	MEP designed the main level student common to accommodate future students&rsquo; personal and social needs. We included: private study rooms, great rooms, private conference rooms, a convenient bistro and serving aisles, a cyber lounge, central laundry facilities, mail room, and reception and waiting areas. The mechanical system for the building incorporated a water source heat pump system originally designed with highly-efficient boilers and cooling towers. We planned the boilers and cooling towers to accommodate being transferred to a &ldquo;Ground Source Geothermal System&rdquo; which university representatives are considering installing. The project is registered with the USGBC and achieved &ldquo;LEED GOLD Certification.&rdquo;</p>\n</div>', 1, 1, '', '', 34, '', '2018-07-09'),
(148, 'Arapahoe High School Library Renovation', 'Arapahoe High School Library Renovation', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							 Arapahoe High School Library Renovation\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Centennial, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  Renovation of school library\n\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							    With Yon-Tanner Architecture, students designed this renovation to bring healing in the wake of tragedy. We provided electrical, mechanical and plumbing design services to bring that design to reality.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Education, K - 12\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">Arapahoe High School opened this newly renovated Library in the fall of 2014. The renovated space gave the students and the community a chance to heal following the tragic shooting that occurred at the school in December of 2013.</span></p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	Yon Tanner Architecture, with a team of Arapahoe High School Students, won a design competition in the spring of 2014 to bring new life to the space. The new library boasts a technology help desk run by the school computer club, power outlets throughout the space (instead of a single computer lab) and three large study rooms to emphasize the collaborative nature of the school.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	The students handled much of the interior design details of the library, like a memory book signed by all students to be placed in a time capsule, comfortable furniture, a caf&eacute; space and a large compass to be placed above the central room.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	Construction cost was estimated at $1.1 -$1.35 million, much of which was raised through the donation of time and materials from local construction, architectural and engineering firms. We were proud to be part of this team.</p>\n</div>', 1, 1, '', '', 34, '', '2018-07-09'),
(149, 'Swigert International K-8 School', 'Swigert International K-8 School', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							 Swigert International K-8 School\n\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							 Stapleton, Denver, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  New 103,000 square foot school\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   We provided electrical engineering services for the sustainability-focused design/build project.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Education, K - 12\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">Swigert students are asked to &ldquo;create a better and more peaceful world.&rdquo; To help them focus on this important mission, we provided design and assisted with electrical engineering services for the sustainability-focused, new 103,000 square foot E-8 DPS Stapleton 3 School. The school will support up to 950 students in 40 classrooms and 5 multi-purpose spaces. Design intent and scope included electrical, lighting, CATV, clock/bell, data, fire alarm, sound amplification, the security and telephone and paging systems.</span></p>\n<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n	Design meets LEED, Xcel Rebate and security requirements</h2>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	We designed the school to meet LEED Certification requirements, Xcel Rebate requirements, and flexibility for use as a 6-12 or specialized program school to allow for future alignments with the needs of the growing community. The site included two drop off parking lots, a maintenance lot, site signage with rough-in for future data capabilities, and rough-ins for future field scoreboards. We planned the site lighting to integrate both pedestrian and building lighting and to meet the Denver Public School District security requirements. The requirements mandate ample lighting for the site&rsquo;s security cameras and request design complement the surrounding community and learning environments.</p>\n<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n	Multipurpose, multi-media space serves all ages</h2>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	We designed the east, single-story wing for Early Child Education and Kindergarten areas, while the three-story wing to the west was planned to accommodate first through eighth grade educational areas&mdash;including two science classrooms on the second floor and special education rooms. Each classroom and multi-purpose space in both areas included enhanced audio, wired networking, wireless networking and promethean board systems.</p>\n<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n	Versatile lighting and electrical solutions conserve resources and add drama</h2>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	We designed several areas to be shared by both wings of the school: the music room, the art room including a kiln, gymnasium with associated locker rooms, &ldquo;cafetorium&rdquo; with a removable stage and a media center. The media center included: a secured computer lab, wired and wireless access for computer stations and a stage with motorized curtains enabling black out conditions for performances.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	Growing students flourish in natural light. So, we designed the classroom lighting to integrate economical daylight harvesting. Envisioning future theater performances peopled by eager little thespians, we designed the stage and seating area with dimmable can lighting and included rough-ins for future stage lighting and standing speakers systems. We included ceiling-mounted zoned speakers with a connection point for a rolling cart to provide microphone and sound systems in the gymnasium and &ldquo;cafetorium.&rdquo;</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	Both areas also incorporated 6-lamp high bay fluorescent fixtures, allowing the space to be lit at varying levels depending on the use.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	Unfortunately, today&rsquo;s schools must think ahead and provide the very best in electronic security systems to ensure students&rsquo; safety. Along with site security lighting and cameras, we designed the buildings&rsquo; security system to include interior cameras, card reader access, a motion detection system with integrated door contacts and the capabilities for interior camera police surveillance from the parking lot.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	Estimated construction cost: $17.9 million.</p>\n</div>', 1, 1, '', '', 34, '', '2018-07-09'),
(150, 'Byron White Courthouse', 'Byron White Courthouse', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							 Byron White Courthouse\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Denver, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  Historic Courthouse\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   Mechanical, Electrical and Plumbing Engineering\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Government\n						</li>\n					</ul>\n				</div>\n\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">MEP Engineering was selected by the US General Services Administration to provide mechanical, electrical, and plumbing engineering services for the Byron White Courthouse, located in Denver, CO. This building included 270,103 square feet, with four stories and two basement levels. Anderson Mason Dale Architects was the selected architect for this project, with Milender White Construction as the preferred General Contractor. MEP services and construction of the courthouse were completed in August of 2017.</span></p>\n<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n	<strong style=\"box-sizing: border-box;\">Technical Services Provided</strong></h2>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	MEP was tasked with replacing the existing building steam heating system provided by City of Denver, and converting the existing building to a natural gas-fired boiler heating system. The new boilers are a condensing type and energy efficient. We also routed a flu through the building and replaced the steam-generating domestic hot water system to gas-fired water heaters, meaning new natural gas service to the building. MEP replaced the current light fixtures and rewired the&nbsp;historic light fixtures, adding additional lighting control. We also added a new fire pump and revised the&nbsp;fire suppression systems, adding a new clean agent fire suppression system. Finally, we rebuilt the existing emergency generator, including a replacement of the fuel storage tank.</p>\n<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n	<strong style=\"box-sizing: border-box;\">Community Information</strong></h2>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	The Byron White US Courthouse is a&nbsp;Denver landmark of dramatic distinction. It was originally constructed in 1919, and added to the National Register of Historic Properties in March of 1973. The court house is currently the seat of the United States Court of Appeals for the Tenth Circuit.</p>\n</div>', 1, 1, '', '', 35, '', '2018-07-09'),
(151, 'Parker Public Works Facility', 'Parker Public Works Facility', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							  Parker Public Works\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Parker, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  New Construction\n						</li>\n						\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Government, Industrial / Manufacturing\n						</li>\n					</ul>\n				</div>\n\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;</p>\n<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n	Project Description</h2>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	MEP Engineering was selected by the City of Parker to provide mechanical, electrical and plumbing engineering services for their new Public Works Facility, located in Parker, CO. This project included 32,000 square foot Operations/Administration Building providing office, workshop, and storage space for the Stormwater Utility, Streets Maintenance, and Traffic Services Divisions, as well as indoor vehicle storage and vehicle wash bays; outdoor covered and uncovered vehicle parking; bulk material storage bins; a decant basin; and deicer storage and dispensing facilities shared with Douglas County. The new facility allows the Public Works to essentially double in size to meet the Town&rsquo;s growing population.</p>\n<h3 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 24px; letter-spacing: -0.5px;\">\n	Technical Services Provided</h3>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	This facility includes four building aspects, an office/maintenance shop/ warehouse building, Ice Slicer storage barn, magnesium chloride storage/dispensing station and a fuel storage dispensing station. The small light-duty-vehicle maintenance shop contains several bays, and an adjoining operations office area. The office area includes several offices/work areas, a break room, a large multi-purpose room for training and crew assignments, restrooms, locker rooms, parts storage/warehouse, and all associated utility rooms. The design accounted for future expansion. The facility also included an open fueling station and de-icer storage and dispensing facility.</p>\n</div>', 1, 1, '', '', 35, '', '2018-07-09'),
(152, 'Mental Health Center of Denver – Dahlia Campus for Health & Well Being', 'Mental Health Center of Denver – Dahlia Campus for Health & Well Being', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							 Mental Health Center of Denver - Dahlia Campus for Health & Well Being\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Denver, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							   New 46,000 SF Community-Based Mental Health Facility\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   Mechanical, Electrical and Plumbing design services including commercial kitchen, dental offices, and community reenhouse!\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Health / Science / Technology\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">The Dahlia Campus for Health and Well-Being Campus features:</span></p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	&bull; A four-acre site at 35th and Dahlia in northeast Denver.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	&bull; 46,000 square feet of indoor classroom, play, community and therapy space.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	&bull; Outdoor components include play areas, counseling gardens and an urban farm.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	The facility includes a variety of services such as: outpatient clinic, early childhood, school-based health care, day treatment, therapeutic pre-school, family support services, dental clinic, flex community area, operations/administrative area, and building support spaces. Total hard costs including site development and construction are approximately to be about $16,500,000 including all site work.</p>\n</div>', 1, 1, '', '', 36, '', '2018-07-09'),
(153, 'ERA Lab Facility', 'ERA Lab Facility', '', '\n<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							  ERA Lab Facility\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Golden, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  Tenant Improvement of a office/warehouse/lab facility.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   Design services for the building out of a core/shell space to accommodate a 14,415 sq ft Laboratory Blood Lab.\n							<strong> Category:</strong>\n							  Health / Science / Technology\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">The ERA&nbsp;Lab&nbsp;Facility Remodel included tenant improvements of office, laboratory and warehouse space within an existing building. The build out space was approximately 64,530 square feet and included 24,128 square feet of office area, 14,145 square feet of laboratory area and 26,257 square feet of warehouse space. The office area included private offices, open offices, conference rooms, huddle rooms, break room, restroom groups, printer room, mail room and reception area. The laboratory included multiple independent island work stations, common work stations, fume hood systems, specialty medical gas and water piping systems, freezer and cooler equipment, storage areas and laboratory infrastructure supporting equipment. The warehouse area included storage areas, shipping and receiving areas and medical gas bulk storage rooms.</span></p>\n\n</div>', 1, 1, '', '', 36, '', '2018-07-09'),
(154, 'Morningstar Assisted Living at Cherry Creek', 'Morningstar Assisted Living at Cherry Creek', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							  Morningstar Assisted Living at Cherry Creek\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Denver, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  New Construction\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   Design / Build\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Health / Science / Technology, Multifamily\n						</li>\n					</ul>\n				</div>\n\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;</p>\n<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n	Project Description</h2>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	MEP Engineering was selected by Morningstar Assisted Living to provide mechanical, electrical and plumbing engineering services for their Cherry Creek location, in Denver, CO. This new assisted living and dementia care facility included 88,500 affected square feet. Saunders Construction was the preferred General Contractor. MEP services were completed in January 2008.</p>\n<h3 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 24px; letter-spacing: -0.5px;\">\n	Technical Services Provided</h3>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	The first floor is approximately 14,823 square feet and consists of a kitchen and dining hall, chapel, salon, theater, fitness and therapy room, administration, and support areas. The second floor is approximately 19,175 square feet and is designed for dementia residences. The space includes twenty-two studios, one bedroom, and two bedroom configurations as well as offices, laundry, dining, serving area, spa, and activity spaces. Floors three through five were a total of 54,485 square feet combined and include sixty-six assisted living studios, one bedroom, and two bedroom configurations as well as office, laundry, spa, art/crafts area, library/caf&eacute;, and activities spaces.</p>\n</div>', 1, 1, '', '', 36, '', '2018-07-09'),
(155, 'Mental Health Center of Denver', 'Mental Health Center of Denver', '', '\n<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							 Mental Health Center of Denver\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Denver, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							 Medical Office Building\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   Complete replacement of M/E/P systems to meet the new occupants needs and exceed the USGBC\'s LEED Platinum design standards.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Health / Science / Technology\n						</li>\n					</ul>\n				</div>\n\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">The Mental Health Center of Denver is a prominent 72,000 square foot medical/hospital facility located in Denver, CO. MHCD acquired the building located at 4455 E 12</span><span style=\"color: rgb(96, 96, 96); font-family: Roboto; box-sizing: border-box; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em;\">th</span><span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">&nbsp;</span><span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">Avenue in May of 2011 to become their new adult recovery center. Immediately plans were implemented to completely renovate the property. MEP Engineering proudly designed the new mechanical, electrical and plumbing systems for the renovation of this facility and the addition of a new 1.5 story parking garage. Construction costs are estimated around $11.1 million.</span></p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	The previous mechanical system was complete gutted and new variable air volume roof top units with DX Cooling and hydronic heating were added. Heating throughout the building is provided by high efficiency condensing boilers that are piped to the VAV rooftop units and VAV terminal boxes throughout the facility. The entire electrical system was also gutted and a new 3,000 amp 208v/ 3 phase service was provided. Occupancy lighting sensors, whole building lighting controls and energy efficient fixtures were utilized throughout the building. &nbsp;Plumbing of the building uses high efficiency plumbing fixtures with dual flush water closets, and sensor operated fixtures providing an overall water usage reduction of 37%.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	Through the use of a whole building computer simulation, the overall design lead to a 52.68% energy cost savings above the ASHRAE/IESNA Standard.&nbsp; On-site renewable energy sources provided an additional offset of 6.64%. MHCD has engaged in a renewable energy contract to provide a 75% offset of the building&rsquo;s electricity from renewable sources for the first two years.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	The overall design and energy performance measures taken allowed this building to&nbsp;receive a&nbsp;LEED Platinum rating.</p>\n</div>', 1, 1, '', '', 36, '', '2018-07-09'),
(156, 'Colorado Coalition for the Homeless – Stout Street Health Center', 'Colorado Coalition for the Homeless – Stout Street Health Center', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							 Colorado Coalition for the Homeless – Stout Street Health Center\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Denver, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  Five-story residential building\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							    Design services\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Health / Science / Technology\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">This mixed-use development for the Colorado Coalition of the Homeless provides integrated health care access for some 18,000 homeless and supportive housing for 78 formerly homeless members of our community.</span></p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	According to the Coalition, the center &ldquo;fully incorporates patient-centered, trauma-informed medical and mental health care, substance treatment services, dental and vision care, social services and supportive housing to more fully address the spectrum of problems homeless adults and children bring to their medical providers.&rdquo; We&rsquo;re happy to be a part of this project.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	We designed a five-story building with the first two floors built out for a walk-in medical clinic The top three levels incorporate a multi-family residential space with78 dwellings.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	We planned the 52,000 square foot walk-in clinic to include primary medical, dental, eye, respiratory care and mental health services.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	We achieved Enterprise Green Communities Certification on this project.</p>\n</div>', 1, 1, '', '', 36, '', '2018-07-09'),
(157, 'Air Training Support Flight Simulator', 'Air Training Support Flight Simulator', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							 Air Training Support Flight Simulator\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Centennial, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  Flight simulator relocation\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   Mechanical and Electrical Engineering\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Industrial / Manufacturing\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">MEP Engineering was selected by Air Training Support to provide mechanical and electrical engineering services for a Training Flight Simulator, located in Centennial, CO. Intergroup Architects was the selected architect for this project. MEP services were completed in March 2016, and construction for the project was completed in early 2017.</span></p>\n<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n	<strong style=\"box-sizing: border-box;\">Technical Services Provided</strong></h2>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	Services included removing and relocating the flight simulator and providing the design for a dedicated room for the computer equipment with 24/7 cooling and a raised floor. MEP also provided the design for another dedicated room for the hydraulic pumps and control equipment. We completed HVAC design for the warehouse the simulator resides in, which also included a custom HVAC unit ducted into the flight simulator to maintain a comfortable temperature for the pilots.</p>\n<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n	<strong style=\"box-sizing: border-box;\">Community Information</strong></h2>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	Built in the late 1970&rsquo;s, this flight simulator has been used to train pilots for numerous scientific studies for over 40 years. Its new home is now the Stapleton Airport, located in Denver, CO.</p>\n</div>', 1, 1, '', '', 37, '', '2018-07-09');
INSERT INTO `tblarticle` (`article_id`, `article_title`, `article_title_kh`, `content_kh`, `content`, `is_active`, `is_marguee`, `meta_keyword`, `meta_desc`, `location_id`, `icon`, `article_date`) VALUES
(158, 'Airgas', 'Airgas', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							  Airgas\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Commerce City, Colorado\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  Office and warehouse building, a retest building and a flammable fill building.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   We provided design services for each building.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Industrial / Manufacturing\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">Publicly-traded Airgas sells gases, welding equipment and supplies and safety products. They bill the company as being in &ldquo;the Everything Business with everyone.&rdquo;</span></p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	To help the company continue to grow and partner with everyone from hobbyists to aerospace engineers, we designed a main office and warehouse building with chemical production, storage and an additional site building.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	The main building square footage was approximately 24,650 square feet with 3,020 square feet of office, 9,225 square feet of warehouse, and 12,405 of chemical production and storage space.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	The additional site buildings included a retest building and flammable fill building with a laboratory. The retest building was approximately 5,530 square feet and the flammable fill building 742 square feet. The buildings were tilt-up construction with 24 foot clear.</p>\n</div>', 1, 1, '', '', 37, '', '2018-07-09'),
(159, 'Nestle Waters North America – NPL West Bottling Plant', 'Nestle Waters North America – NPL West Bottling Plant', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							  Nestle Waters North America - NPL West Bottling Plant\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Denver, Colorado\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  New bottling facility\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   We provided full mechanical, electrical, and plumbing design including the infrastructure support for their new bottling line\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Industrial / Manufacturing\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">Sustainability and Social Responsibility are two values we share with the Nestle Waters North America Company. We partnered with the company to design the 200,000 square foot building. The project included 6,800 square feet of office space and 193,200 square feet of process or storage areas with multiple delivery bays. We love to make lasting relationships and were happy to be re-hired to design additional support spaces for the expansion of a second manufacturing line.</span></p>\n</div>', 1, 1, '', '', 37, '', '2018-07-09'),
(160, 'Belleview Station Block A', 'Belleview Station Block A', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							  Belleview Station Block A\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Englewood, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  Mixed use development on 3.5 acres\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   We provided design services.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Multifamily\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">Belleview Station is a pedestrian&rsquo;s dream community. The development offers easy access to light rail, bike paths, open space, fine retail, ample dining and two major highways in case driving is an option. Developers predict, &ldquo;Belleview Station will become the new heart at the intersection of the DTC and the City of Denver.&rdquo; We are helping that heart to start beating.</span></p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	The project includes a five-story multifamily residential apartment complex that is approximately 372,000 square feet with a total of 350 dwelling units. There are approximately 15-18 main unit types.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	We designed the buildings to include amenity spaces to total approximately 11,000 square feet including a rooftop deck with pool and approximately 32,700 square feet of retail space at grade level.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	We designed a parking structure with one level below grade and 4 levels above to accommodate 600 vehicles. This project design will pursue LEED Silver certification upon construction completion.</p>\n</div>', 1, 1, '', '', 38, '', '2018-07-09'),
(161, 'Platform at Union Station, Denver, CO', 'Platform at Union Station, Denver, CO', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							 Platform at Union Station, Denver, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							 Denver, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  Multifamily residential apartment complex\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							    Design services\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Multifamily\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;</p>\n<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n	Detail</h2>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	Enormous windows, open floor plans, technology at one&rsquo;s fingertips and views make the city&mdash;in all its glory&mdash;part of the interior d&eacute;cor: Platform at Union Station gives urban dwellers a new place to unwind, play and call home.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	We designed the electrical services for this LEED<span style=\"box-sizing: border-box; font-size: 12px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em;\">&reg;</span>&nbsp;Gold Certified mixed-use development in downtown Denver as part of the redevelopment of the historical Union Station. The project includes a 21-story multifamily residential apartment complex with a total of 288 dwelling units. The building features a large, rooftop pool with a whirlpool and barbecue area; a technology-equipped fitness center; a modern yoga studio, clubhouse and group restrooms on level 10 and a resident business center on level 11.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	Residents can shop in approximately 6,500 square feet of retail space at grade level and take advantage of the convenience of three above-grade parking levels and two below-grade parking levels. Leasing office space will be located on the ground level.</p>\n<h3 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 24px; letter-spacing: -0.5px;\">\n	More photos</h3>\n</div>', 1, 1, '', '', 38, '', '2018-07-09'),
(162, '1000 Broadway Development Denver, CO', '1000 Broadway Development Denver, CO', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							 1000 Broadway Development Denver, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Denver, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							 Multi-family residential apartment complex\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							    Design services\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Multifamily\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">Close to DU and Colorado Christian University, 1000 Broadways offers university students&nbsp;&nbsp; a convenient city-living option and access to nearby parks.</span></p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	We provided design services for this 280,000 square foot, LEED Gold Certified, 4-story multifamily residential apartment complex with a total of 250 dwelling units located on a 3 acre site.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	The site included a 130,000 square foot parking garage to accommodate 375 vehicles. Future plans for the building include a variety of amenities including a landscaped courtyard.</p>\n</div>', 1, 1, '', '', 38, '', '2018-07-09'),
(163, 'Pickard and Ross Tenant Improvement', 'Pickard and Ross Tenant Improvement', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							 Pickard and Ross Tenant Improvement\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Littleton, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							 Complete office renovation\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   Mechanical, Electrical and Plumbing design services bringing this office space into the 21st Century.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Office, Tenant Improvement\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">We provide engineering&nbsp;design services for the renovation of Pickard and Ross Law&rsquo;s existing office space in conjunction with Intergroup Architects.&nbsp;The suite is 6,000 square feet and includes&nbsp;private offices, open offices, conference rooms, copy/break room, reception/waiting area, secure IT room, existing group restrooms and new shower. Our team paid special attention to the mechanical systems ensuring each office meets the strict sound masking needs of a law office.</span></p>\n</div>', 1, 1, '', '', 39, '', '2018-07-09'),
(164, 'Sherman Street Office', 'Sherman Street Office', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							 Sherman Street Office\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Denver, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  three story office building with one level of parking.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							    We provided mechanical, electrical, and plumbing engineering services for design of the building to core-shell only.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 New Build, Office\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">Architects across the Denver metro area want to incorporate Sustainable Design concepts into their projects. This three-story office building with one, approximately 24,927 square foot level of partially below-grade parking, was no exception. We focused on Sustainable Design every step of the way and achieved LEED certification.</span></p>\n</div>', 1, 1, '', '', 39, '', '2018-07-09'),
(165, 'Harvest Junction', 'Harvest Junction', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							 Harvest Junction\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Longmont, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  A 33,700 square foot retail power center including a 12-building retail development on a 50-acre site.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   We provided core-shell and Tenant Finish work for various tenant spaces. We collaborated on design for the east and west buildings and the center plaza.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Restaurant/Retail\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">The 12 buildings of Harvest Junction included dynamic retail space intended for multi-tenant use and the tenants have been flooding in. This area bustles with new businesses that include trendy eateries and apparel shops. We designed both the east and the west buildings and the plaza to cold dark shell level. We designed the DSW Shoe Warehouse location to warm dark shell level.</span></p>\n</div>', 1, 1, '', '', 40, '', '2018-07-09'),
(166, 'Lime Restaurant – Denver Pavilion', 'Lime Restaurant – Denver Pavilion', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							  Lime Restaurant – Denver Pavilion\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Denver, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  New restaurant space in an existing shell of 7,717 square feet.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   Design services for the building of the vacant shell including full services bar, full service commercial kitchen and dining spaces.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Restaurant/Retail\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">Each Lime Restaurant is a total sensory experience. From the moment you enter until the hour you must drift out and take your leftovers home, you&rsquo;re treated to a modern visual, auditory and gustatory experience. The vibe is youthful and the food is zingy.</span></p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	We provided spicy design services for this new restaurant space within an existing building consisting of approximately 7,717 square feet. The original space was a vacant shell with a hydronic hot water HVAC distribution system and a minimal electrical distribution system. The restaurant will contain two bars, a commercial kitchen of approximately 1,000 square feet, a walk-in beer cooler, and men&rsquo;s and women&rsquo;s restroom facilities.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	We designed multiple public and private dining areas including a storefront lounge area and patio dining. We planned an open-air concept with large front and rear restaurant-facing windows that will be open to allow cool breezes during warm weather.</p>\n</div>', 1, 1, '', '', 40, '', '2018-07-09'),
(167, 'Cold Crush Tavern', 'Cold Crush Tavern', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							 Cold Crush Tavern\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							   Denver, CO\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							 Design modifications to an existing retail space that is approximately 1,621 square feet to create a new bar.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   We modified existing HVAC, plumbing and electrical systems to welcome the new tavern. Design incorporated the mechanical system ductwork distribution into the aesthetic, fitting neatly into the Five Points area.\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Restaurant/Retail\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">We made modifications to an existing retail space to make way for this new hip-hop bar without kitchen facilities. The exposed-brick and distressed wood night spot features music, a limited menu and art in an urban setting that draws an eclectic crowd looking for happy beats. We adapted existing HVAC, plumbing and electrical systems to integrate with the new architectural plans and satisfy code requirements.</span></p>\n</div>', 1, 1, '', '', 40, '', '2018-07-09'),
(168, 'Marco’s Coal-Fired Pizzeria', 'Marco’s Coal-Fired Pizzeria', '', '<div class=\"project_metadata\">\n					<ul class=\"list_unstyled\">\n						<li><span class=\"project_metairon\"><i class=\"fa fa-folder\"></i></span>\n							<strong>Name:</strong>\n							 Marco’s Coal-Fired Pizzeria\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-map\"></i></span>\n							<strong>Location:</strong>\n							  Englewood, Colorado\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-building\"></i></span>\n							<strong>Type:</strong>\n							  Restaurant in a mixed-use development.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa  fa-cogs\"></i></span>\n							<strong> MEP Services:</strong>\n							   We collaborated with Metropolitan Homes and CTA Architects on multiple restaurants and retail projects within the Vallagio at Inverness development. For this restaurant, we installed ductwork, provided venting and exhaust systems, hooked the kitchen up to an existing grease interceptor and gas and installed ADA-compliant fixtures.\n						</li>\n						<li><span class=\"project_metairon\"><i class=\"fa fa-th-list\"></i></span>\n							<strong> Category:</strong>\n							 Restaurant/Retail\n						</li>\n					</ul>\n				</div>\n<div class=\"hentry__content content-p\">\n<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 16px;\">Marco&rsquo;s Coal Fired Pizzeria is located in one of the four-story residential condominium buildings with ground-level retail spaces at the Vallagio at Inverness. The Vallagio area was voted one of the top places to live work and play in Colorado by our local 9 News station. We have no doubt that the availability of great pizza pushed the vote over the edge. Marco&rsquo;s includes an open-style kitchen with direct viewing of the two large, imported Italian ovens, an open seating area, bar, central host area, restrooms, kitchen and office space.</span></p>\n<h2 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 21px; margin-bottom: 10.5px; font-size: 30px; letter-spacing: -0.5px;\">\n	Mechanical challenges solved</h2>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	This space posed a system design challenge: During original construction, it was provided with limited mechanical chases to the roof. Our engineers overcame this obstacle and provided an innovative solution. We located Indoor make-up air and space cooling units in the ceiling plenum of the space and supported them from the existing floor structure above. We also located supply and return air ductwork in the ceiling plenum. This required additional coordination within the plenum area. We provided code-complying ventilation through the installation of outside air louvers.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	We designed the grease exhaust &ldquo;ductwork&rdquo; out of schedule 10, steel pipe which was sized appropriately for the exhaust volume and conformed to the requirements of the local authority having jurisdiction (AHJ). We routed the grease ductwork piping to the roof through one of the existing chases.</p>\n<p color:=\"\" font-family:=\"\" font-kerning:=\"\" font-size:=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10.5px; text-rendering: optimizeLegibility; font-feature-settings: \">\n	Of course, a pizza restaurant couldn&rsquo;t succeed without producing tasty pies. So, we paid careful attention to the cooking area. We designed and constructed a fan-assisted grease exhaust system for the owner&rsquo;s imported Italian pizza ovens and included a kitchen exhaust hood to provide exhaust for all gas-fired kitchen equipment. We connected the kitchen&rsquo;s grease waste system to an existing, original grease interceptor. We provided natural gas to the kitchen&rsquo;s gas fired cooking appliance and equipped the piping with automatic gas shut off valves for emergency purposes. We also provided ADA-compliant fixtures for the kitchen as well as the public restrooms to meet current code requirements. Buon Appetito!</p>\n</div>', 1, 1, '', '', 40, '', '2018-07-09');

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
(43, '<div class=\"carousel-content\" >                                         <div class=\"jumbotron__category\">                                             <h6>WE ARE YOUR PARTNER</h6>                                         </div>                                         <div class=\"jumbotron__title\">                                             <h1>  </h1>                                         </div>                                         <div class=\"jumbotron__content\">                                             <h3>Our commitment to integrity builds<br>                                             strong relationships</h3>                                             <a class=\"btn  btn-primary\" href=\"/services/\" target=\"_self\">                                                 HOW CAN WE COLLABORATE?                                             </a>                                         </div>                                     </div>', 1, 1, 0, ''),
(46, '<div class=\"carousel-content\" >                                         <div class=\"jumbotron__category\">                                             <h6>COLLABORATION IS INSPIRATION</h6>                                         </div>                                         <div class=\"jumbotron__title\">                                             <h1>  </h1>                                         </div>                                         <div class=\"jumbotron__content\">                                             <h3>Our innovations result in healthier, inspirational environments</h3>                                             <a class=\"btn  btn-primary\" href=\"/services/\" target=\"_self\">                                                 SEE HOW CAN WE HELP                                             </a>                                         </div>                                     </div>', 1, 1, 1, ''),
(47, '<div class=\"carousel-content\" >                                         <div class=\"jumbotron__category\">                                             <h6>HOLISTIC DESIGN SERVICE</h6>                                         </div>                                         <div class=\"jumbotron__title\">                                             <h1>  </h1>                                         </div>                                         <div class=\"jumbotron__content\">                                             <h3>Our holistic LEED Design Service produces green workplaces that energize employees</h3>                                             <a class=\"btn  btn-primary\" href=\"/services/\" target=\"_self\">                                                 VIEW OUR SERVICES                                             </a>                                         </div>                                     </div>', 1, 1, 2, '');

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
(425, NULL, 'tree_cut_3.jpg', 0, 102, 0, NULL, NULL),
(426, NULL, 'tree_cut_4.jpg', 0, 103, 0, NULL, NULL),
(427, NULL, 'tree_cut_3.jpg', 0, 104, 0, NULL, NULL),
(428, NULL, 'tree_cut_4.jpg', 0, 105, 0, NULL, NULL),
(429, NULL, 'tree_cut_3.jpg', 0, 106, 0, NULL, NULL),
(433, NULL, 'threat_bear.jpg', 0, 116, 0, NULL, NULL),
(439, NULL, 'threat_bear.jpg', 0, 117, 0, NULL, NULL),
(440, NULL, 'threat_bear.jpg', 0, 118, 0, NULL, NULL),
(441, NULL, 'threat_bear.jpg', 0, 119, 0, NULL, NULL),
(442, NULL, 'threat_bear.jpg', 0, 120, 0, NULL, NULL),
(444, NULL, '3.jpg', 0, 123, 0, NULL, NULL),
(445, NULL, 'feature.png', 0, 124, 0, NULL, NULL),
(446, NULL, 'St-Marys_547t-555x369.jpg', 0, 126, 0, NULL, NULL),
(447, NULL, 'electrical.jpg', 0, 128, 0, NULL, NULL),
(448, NULL, '3.jpg', 0, 130, 0, NULL, NULL),
(449, NULL, 'building.png', 0, 132, 0, NULL, NULL),
(450, NULL, 'service.jpg', 0, 134, 0, NULL, NULL),
(451, NULL, 'map.jpg', 0, 135, 0, NULL, NULL),
(452, NULL, 'BE-1900-Simulator-1.jpg', 0, 136, 0, NULL, NULL),
(455, NULL, '3.jpg', 0, 128, 0, NULL, NULL),
(456, NULL, '3.jpg', 0, 126, 0, NULL, NULL),
(457, NULL, 'St-Marys_379t.jpg', 0, 136, 0, NULL, NULL),
(463, NULL, 'ITSM-XI.jpg', 0, 122, 0, NULL, NULL),
(464, NULL, 'mechanical-services-roof-solar-360x240.jpg', 0, 100, 0, NULL, NULL),
(465, NULL, 'flatirons-11-360x240.jpg', 0, 101, 0, NULL, NULL),
(466, NULL, 'plumbing-tn.jpg', 0, 137, 0, NULL, NULL),
(467, NULL, 'Interior_3178-smaller-150x150.png', 0, 138, 0, NULL, NULL),
(468, NULL, 'Platform-Day-Shots-1.jpg', 0, 139, 0, NULL, NULL),
(469, NULL, '3D-Mechanical-150x150.jpg', 0, 140, 0, NULL, NULL),
(470, NULL, '137_plumbing-tn.jpg', 0, 141, 0, NULL, NULL),
(471, NULL, 'flatirons-7.jpg', 0, 142, 0, NULL, NULL),
(472, NULL, 'flatirons-2.jpg', 0, 142, 0, NULL, NULL),
(473, NULL, 'flatirons-8.jpg', 0, 142, 0, NULL, NULL),
(474, NULL, 'flatirons-11.jpg', 0, 142, 0, NULL, NULL),
(475, NULL, 'flatirons-5.jpg', 0, 142, 0, NULL, NULL),
(476, NULL, 'flatirons-3.jpg', 0, 142, 0, NULL, NULL),
(477, NULL, 'church1.jpg', 0, 142, 0, NULL, NULL),
(478, NULL, 'Mission-Hills-Church-Header.jpg', 0, 143, 0, NULL, NULL),
(479, NULL, 'mission-hills-church-hero.jpg', 0, 143, 0, NULL, NULL),
(480, NULL, 'mission-hills-church-hero2.jpg', 0, 143, 0, NULL, NULL),
(481, NULL, 'mission-hills-church-hero3.jpg', 0, 143, 0, NULL, NULL),
(482, NULL, 'mission-hills-church8.jpg', 0, 143, 0, NULL, NULL),
(483, NULL, 'mission-hills-church9.jpg', 0, 143, 0, NULL, NULL),
(484, NULL, 'mission-hills-church10.jpg', 0, 143, 0, NULL, NULL),
(485, NULL, 'mission-hills-church11.jpg', 0, 143, 0, NULL, NULL),
(486, NULL, 'mission-hills-church12.jpg', 0, 143, 0, NULL, NULL),
(487, NULL, 'mission-hills-church13.jpg', 0, 143, 0, NULL, NULL),
(488, NULL, 'mission-hills-church15.jpg', 0, 143, 0, NULL, NULL),
(489, NULL, 'mission-hills-church16.jpg', 0, 143, 0, NULL, NULL),
(490, NULL, 'mission-hills-church17.jpg', 0, 143, 0, NULL, NULL),
(491, NULL, 'mission-hills-church18.jpg', 0, 143, 0, NULL, NULL),
(492, NULL, 'mission-hills-church19.jpg', 0, 143, 0, NULL, NULL),
(493, NULL, 'mission-hills-church20.jpg', 0, 143, 0, NULL, NULL),
(494, NULL, 'mission-hills-church21.jpg', 0, 143, 0, NULL, NULL),
(495, NULL, 'mission-hills-church22.jpg', 0, 143, 0, NULL, NULL),
(496, NULL, 'mission-hills-church23.jpg', 0, 143, 0, NULL, NULL),
(497, NULL, 'mission-hills-church24.jpg', 0, 143, 0, NULL, NULL),
(498, NULL, 'mission-hills-church25.jpg', 0, 143, 0, NULL, NULL),
(499, NULL, 'mission-hills-church26.jpg', 0, 143, 0, NULL, NULL),
(500, NULL, 'foundations-church-hero1-150x150.jpg', 0, 144, 0, NULL, NULL),
(501, NULL, 'foundations-church-hero2-150x150.jpg', 0, 144, 0, NULL, NULL),
(502, NULL, 'foundations-church-hero3-150x150.jpg', 0, 144, 0, NULL, NULL),
(503, NULL, 'foundations-church1-150x150.jpg', 0, 144, 0, NULL, NULL),
(504, NULL, 'foundations-church2-150x150.jpg', 0, 144, 0, NULL, NULL),
(505, NULL, 'adams12-1.jpg', 0, 146, 0, NULL, NULL),
(506, NULL, 'adams12-2.jpg', 0, 146, 0, NULL, NULL),
(507, NULL, 'CSU-Pueblo-Page8.jpg', 0, 147, 0, NULL, NULL),
(508, NULL, 'CSU-Pueblo-Page9.jpg', 0, 147, 0, NULL, NULL),
(509, NULL, 'CSU-Pueblo-Page11.jpg', 0, 147, 0, NULL, NULL),
(510, NULL, 'CSU-Pueblo-Page12.jpg', 0, 147, 0, NULL, NULL),
(511, NULL, 'CSU-Pueblo-Page14.jpg', 0, 147, 0, NULL, NULL),
(512, NULL, 'CSU-Pueblo-Page15.jpg', 0, 147, 0, NULL, NULL),
(513, NULL, 'Arapahoe-HS-Library-1.jpg', 0, 148, 0, NULL, NULL),
(514, NULL, 'Arapahoe-HS-Library-2.jpg', 0, 148, 0, NULL, NULL),
(515, NULL, 'Arapahoe-HS-Library-3.jpg', 0, 148, 0, NULL, NULL),
(516, NULL, 'Arapahoe-HS-Library-4.jpg', 0, 148, 0, NULL, NULL),
(517, NULL, 'Arapahoe-HS-Library-5.jpg', 0, 148, 0, NULL, NULL),
(518, NULL, 'Arapahoe-HS-Library.jpg', 0, 148, 0, NULL, NULL),
(519, NULL, 'swigert-mcauliffe-1.jpg', 0, 149, 0, NULL, NULL),
(520, NULL, 'swigert-mcauliffe-2.jpg', 0, 149, 0, NULL, NULL),
(521, NULL, 'swigert-mcauliffe-3.jpg', 0, 149, 0, NULL, NULL),
(522, NULL, 'swigert-mcauliffe-6.jpg', 0, 149, 0, NULL, NULL),
(523, NULL, 'swigert-mcauliffe-7.jpg', 0, 149, 0, NULL, NULL),
(524, NULL, 'swigert-mcauliffe-8.jpg', 0, 149, 0, NULL, NULL),
(525, NULL, 'swigert-mcauliffe-9.jpg', 0, 149, 0, NULL, NULL),
(526, NULL, 'IMG_20130214_1612291-.jpg', 0, 150, 0, NULL, NULL),
(527, NULL, 'Image-C_0066-150x150.jpg', 0, 151, 0, NULL, NULL),
(528, NULL, 'Image-C_0112-150x150.jpg', 0, 151, 0, NULL, NULL),
(529, NULL, 'Image-D_0107-1-150x150.jpg', 0, 151, 0, NULL, NULL),
(530, NULL, 'Image-D_0117-150x150.jpg', 0, 151, 0, NULL, NULL),
(531, NULL, 'Image-D_0138-150x150.jpg', 0, 151, 0, NULL, NULL),
(532, NULL, 'MHCD-Classroom-150x150.jpg', 0, 152, 0, NULL, NULL),
(533, NULL, 'MHCD-Community-Gym-150x150.jpg', 0, 152, 0, NULL, NULL),
(534, NULL, 'MHCD-Community-Kitchen-150x150.jpg', 0, 152, 0, NULL, NULL),
(535, NULL, 'MHCD-Dental-Office-150x150.jpg', 0, 152, 0, NULL, NULL),
(536, NULL, 'MHCD-Green-House-150x150.jpg', 0, 152, 0, NULL, NULL),
(537, NULL, 'MHCD-Lobby-150x150.jpg', 0, 152, 0, NULL, NULL),
(538, NULL, 'Cubicles-01-150x150.jpg', 0, 153, 0, NULL, NULL),
(539, NULL, 'Cubicles-02-150x150.jpg', 0, 153, 0, NULL, NULL),
(540, NULL, 'Cubicles-03-150x150.jpg', 0, 153, 0, NULL, NULL),
(541, NULL, 'Cubicles-04-150x150.jpg', 0, 153, 0, NULL, NULL),
(542, NULL, 'Dining_1002_HR_c002-150x150.gif', 0, 154, 0, NULL, NULL),
(543, NULL, 'MHCD-1-150x150.jpg', 0, 155, 0, NULL, NULL),
(544, NULL, 'MHCD-2-150x150.jpg', 0, 155, 0, NULL, NULL),
(545, NULL, 'MHCD-3-150x150.jpg', 0, 155, 0, NULL, NULL),
(546, NULL, 'MHCD-4-150x150.jpg', 0, 155, 0, NULL, NULL),
(547, NULL, 'Stou-Street-4-150x150.jpg', 0, 156, 0, NULL, NULL),
(548, NULL, 'Stout-Street-1-150x150.jpg', 0, 156, 0, NULL, NULL),
(549, NULL, 'Stout-Street-2-150x150.jpg', 0, 156, 0, NULL, NULL),
(550, NULL, 'Stout-Street-3-150x150.jpg', 0, 156, 0, NULL, NULL),
(552, NULL, 'Stout-Street-5-150x150.jpg', 0, 156, 0, NULL, NULL),
(553, NULL, 'Stout-Street-6-150x150.jpg', 0, 156, 0, NULL, NULL),
(554, NULL, 'Stout-Street-7-150x150.jpg', 0, 156, 0, NULL, NULL),
(555, NULL, 'Boeing-747-BE-1900-Simulators-6-150x150.jpg', 0, 157, 0, NULL, NULL),
(556, NULL, 'Boeing-747-Simulator-4-150x150.jpg', 0, 157, 0, NULL, NULL),
(557, NULL, 'B1-master-bedroom-150x150.jpg', 0, 160, 0, NULL, NULL),
(559, NULL, 'Platform-Model-2BR-11-150x150.jpg', 0, 161, 0, NULL, NULL),
(560, NULL, 'Platform-Sky-Lounge-4-150x150.jpg', 0, 161, 0, NULL, NULL),
(561, NULL, '1000-S-Broadway-1-150x150.jpg', 0, 162, 0, NULL, NULL),
(562, NULL, '1000-S-Broadway-2-150x150.jpg', 0, 162, 0, NULL, NULL),
(563, NULL, '1000-S-Broadway-3-150x150.jpg', 0, 162, 0, NULL, NULL),
(564, NULL, '1000-s-broadway1-150x150.jpg', 0, 162, 0, NULL, NULL),
(568, NULL, 'Pinkard-and-Ross-1-150x150.jpg', 0, 163, 0, NULL, NULL),
(569, NULL, 'Pinkard-and-Ross-2-150x150.jpg', 0, 163, 0, NULL, NULL),
(570, NULL, 'Pinkard-and-Ross-3-150x150.jpg', 0, 163, 0, NULL, NULL),
(571, NULL, 'Lime-1-150x150.jpg', 0, 166, 0, NULL, NULL),
(572, NULL, 'Lime-2-150x150.jpg', 0, 166, 0, NULL, NULL),
(573, NULL, 'Lime-3-150x150.jpg', 0, 166, 0, NULL, NULL),
(574, NULL, 'Lime-4-150x150.jpg', 0, 166, 0, NULL, NULL),
(575, NULL, 'Lime-7-150x150.jpg', 0, 166, 0, NULL, NULL),
(576, NULL, 'Lime-8-480x480.jpg', 0, 166, 0, NULL, NULL),
(581, NULL, '1000-S-Broadway-3-150x150.jpg', 0, 145, 0, NULL, NULL),
(582, NULL, 'b11.jpg', 0, 158, 0, NULL, NULL),
(583, NULL, 'adams12-1.jpg', 0, 159, 0, NULL, NULL),
(584, NULL, 'flatirons-5.jpg', 0, 164, 0, NULL, NULL),
(586, NULL, 'Lime-4-150x150.jpg', 0, 167, 0, NULL, NULL),
(587, NULL, 'Lime-8-480x480.jpg', 0, 165, 0, NULL, NULL),
(588, NULL, 'Lime-4-150x150.jpg', 0, 168, 0, NULL, NULL);

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
(21, '<h2>OUR SERVISES</h2>', 'category', 1, NULL),
(22, 'latest blog', 'category', 1, NULL),
(25, 'blog2', 'category', 1, NULL),
(26, 'service blog', 'category', 1, NULL),
(27, 'service blog 1', 'category', 1, NULL),
(28, 'service blog 2', 'category', 1, NULL),
(29, 'service blog 3', 'category', 1, NULL),
(30, 'service blog 4', 'category', 1, NULL),
(31, 'service blog 5', 'category', 1, NULL),
(32, 'service blog 6', 'category', 1, NULL),
(33, 'church', 'category', 1, NULL),
(34, 'education', 'category', 1, NULL),
(35, 'goverment', 'category', 1, NULL),
(36, 'health science technology', 'category', 1, NULL),
(37, 'industrial menufacturing', 'category', 1, NULL),
(38, 'multifamily', 'category', 1, NULL),
(39, 'office', 'category', 1, NULL),
(40, 'restaurant retail', 'category', 1, NULL);

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
(32, 'PROJECT', NULL, '32', 0, 0, 2, 1, NULL, NULL, 2, NULL, NULL, 'PROJECT', 0, 5, '6', 'site/projects'),
(31, 'SERVICES', NULL, '31', 0, 0, 1, 1, NULL, NULL, 2, NULL, NULL, 'SERVICES', 0, 5, '9', 'site/service'),
(38, 'ABOUT US', NULL, '38', 0, 0, 5, 1, NULL, NULL, 2, NULL, NULL, 'ABOUT US', 0, 5, '7', 'site/aboutus/'),
(66, 'CONTACT US', NULL, '66', 0, 0, 7, 1, NULL, NULL, 2, NULL, NULL, 'CONTACT US', 0, 5, '4', 'site/contactus/'),
(82, '0', NULL, '82', 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, '0', 0, 0, '0', NULL),
(83, '0', NULL, '83', 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, '0', 0, 0, '0', NULL),
(95, 'All item', NULL, '31-95', 31, 1, 7, 1, NULL, NULL, 1, NULL, NULL, 'All item', 0, 5, '9', 'site/allitem/'),
(94, 'Home', NULL, '94', 0, 0, 0, 1, NULL, NULL, 2, NULL, NULL, 'Home', 0, 5, '22', 'site/index'),
(96, 'Mechanical Services', NULL, '31-96', 31, 1, 7, 1, NULL, NULL, 2, NULL, NULL, 'Mechanical Services', 0, 5, '27', 'site/mechanical'),
(97, 'Electrical Services', NULL, '31-97', 31, 1, 7, 1, NULL, NULL, 2, NULL, NULL, 'Electrical Services', 0, 5, '28', 'site/electrical'),
(98, 'Plumbing Services', NULL, '31-98', 31, 1, 7, 1, NULL, NULL, 2, NULL, NULL, 'Plumbing Services', 0, 5, '29', 'site/plumbing'),
(99, 'Building and Tenant Services', NULL, '31-99', 31, 1, 7, 1, NULL, NULL, 2, NULL, NULL, 'Building and Tenant Services', 0, 5, '30', 'site/building'),
(100, 'Building Information Modeling', NULL, '31-100', 31, 1, 7, 1, NULL, NULL, 1, NULL, NULL, 'Building Information Modeling', 0, 5, '31', 'site/buildinginformation\'');

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
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
--
-- AUTO_INCREMENT for table `tblbanner`
--
ALTER TABLE `tblbanner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblgallery`
--
ALTER TABLE `tblgallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=589;
--
-- AUTO_INCREMENT for table `tbllayout`
--
ALTER TABLE `tbllayout`
  MODIFY `layout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbllocation`
--
ALTER TABLE `tbllocation`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tblmenus`
--
ALTER TABLE `tblmenus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
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
