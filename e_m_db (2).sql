-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2018 at 06:08 AM
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
(4, 'admin', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com', '2018-07-07 05:05:46', '::1', '2015-01-29 15:10:34', NULL, NULL, NULL, 1, 'System', 'Administrator', 1, 1, NULL),
(5, 'chetra', '202cb962ac59075b964b07152d234b70', 'eing.chetra@gmail.com', '2018-07-07 05:05:46', '::1', '2015-02-02 17:26:36', NULL, NULL, NULL, 2, 'eing', 'chetra', 0, 0, NULL),
(1497, 'store', 'e10adc3949ba59abbe56e057f20f883e', 'store@green.com', '2018-07-07 05:05:46', '::1', '2015-06-26 08:10:54', NULL, NULL, NULL, 21, 'Green', 'Store', 0, 1, NULL);

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
('6ea47b3d5656e59847be5f4263c7348f', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 1530936263, 'a:14:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:7:\"english\";s:6:\"userid\";s:1:\"4\";s:9:\"user_name\";s:5:\"admin\";s:8:\"password\";s:32:\"202cb962ac59075b964b07152d234b70\";s:6:\"roleid\";s:1:\"1\";s:9:\"last_name\";s:6:\"System\";s:10:\"first_name\";s:13:\"Administrator\";s:10:\"last_visit\";s:19:\"2018-07-07 04:55:15\";s:13:\"last_visit_ip\";s:3:\"::1\";s:9:\"moduleids\";a:6:{i:0;a:1:{s:8:\"moduleid\";s:1:\"7\";}i:1;a:1:{s:8:\"moduleid\";s:2:\"10\";}i:2;a:1:{s:8:\"moduleid\";s:2:\"15\";}i:3;a:1:{s:8:\"moduleid\";s:2:\"12\";}i:4;a:1:{s:8:\"moduleid\";s:2:\"11\";}i:5;a:1:{s:8:\"moduleid\";s:1:\"1\";}}s:12:\"ModuleInfors\";a:6:{i:7;a:4:{s:8:\"moduleid\";s:1:\"7\";s:11:\"module_name\";s:4:\"Menu\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:10;a:0:{}i:15;a:0:{}i:12;a:4:{s:8:\"moduleid\";s:2:\"12\";s:11:\"module_name\";s:6:\"Banner\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:11;a:4:{s:8:\"moduleid\";s:2:\"11\";s:11:\"module_name\";s:7:\"Article\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:1;a:0:{}}s:10:\"PageInfors\";a:5:{i:7;a:4:{i:63;a:14:{s:6:\"pageid\";s:2:\"63\";s:9:\"page_name\";s:9:\"Menu List\";s:4:\"link\";s:10:\"menu/index\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"10\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 15:53:36\";s:4:\"icon\";s:7:\"fa-bars\";}i:64;a:14:{s:6:\"pageid\";s:2:\"64\";s:9:\"page_name\";s:12:\"Add New Menu\";s:4:\"link\";s:8:\"menu/add\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"11\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 15:53:58\";s:4:\"icon\";s:7:\"fa-bars\";}i:75;a:14:{s:6:\"pageid\";s:2:\"75\";s:9:\"page_name\";s:16:\"Add New Category\";s:4:\"link\";s:12:\"category/add\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"12\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2017-12-22 13:42:09\";s:4:\"icon\";s:7:\"fa-bars\";}i:76;a:14:{s:6:\"pageid\";s:2:\"76\";s:9:\"page_name\";s:13:\"Category List\";s:4:\"link\";s:14:\"category/index\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"13\";s:9:\"is_insert\";s:2:\"11\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2017-12-22 13:42:54\";s:4:\"icon\";s:7:\"fa-bars\";}}i:10;a:2:{i:67;a:14:{s:6:\"pageid\";s:2:\"67\";s:9:\"page_name\";s:12:\"Product List\";s:4:\"link\";s:13:\"product/index\";s:8:\"moduleid\";s:2:\"10\";s:5:\"order\";s:1:\"1\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-12 17:10:07\";s:4:\"icon\";s:7:\"fa-bars\";}i:68;a:14:{s:6:\"pageid\";s:2:\"68\";s:9:\"page_name\";s:16:\"Add New Products\";s:4:\"link\";s:11:\"product/add\";s:8:\"moduleid\";s:2:\"10\";s:5:\"order\";s:1:\"2\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-12 17:10:46\";s:4:\"icon\";s:7:\"fa-bars\";}}i:12;a:2:{i:69;a:14:{s:6:\"pageid\";s:2:\"69\";s:9:\"page_name\";s:11:\"Banner List\";s:4:\"link\";s:20:\"setup/setupads/index\";s:8:\"moduleid\";s:2:\"12\";s:5:\"order\";s:1:\"0\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-02-05 23:16:13\";s:4:\"icon\";s:7:\"fa-bars\";}i:70;a:14:{s:6:\"pageid\";s:2:\"70\";s:9:\"page_name\";s:14:\"Add New Banner\";s:4:\"link\";s:18:\"setup/setupads/add\";s:8:\"moduleid\";s:2:\"12\";s:5:\"order\";s:1:\"1\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-02-05 23:15:42\";s:4:\"icon\";s:7:\"fa-bars\";}}i:11;a:2:{i:65;a:14:{s:6:\"pageid\";s:2:\"65\";s:9:\"page_name\";s:12:\"Article List\";s:4:\"link\";s:13:\"article/index\";s:8:\"moduleid\";s:2:\"11\";s:5:\"order\";s:1:\"4\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 16:46:23\";s:4:\"icon\";s:7:\"fa-bars\";}i:66;a:14:{s:6:\"pageid\";s:2:\"66\";s:9:\"page_name\";s:15:\"Add New Article\";s:4:\"link\";s:11:\"article/add\";s:8:\"moduleid\";s:2:\"11\";s:5:\"order\";s:1:\"5\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 16:47:08\";s:4:\"icon\";s:7:\"fa-bars\";}}i:1;a:4:{i:5;a:14:{s:6:\"pageid\";s:1:\"5\";s:9:\"page_name\";s:4:\"Page\";s:4:\"link\";s:12:\"setting/page\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"0\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"0\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"0\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 17:00:01\";s:4:\"icon\";s:9:\"fa-file-o\";}i:6;a:14:{s:6:\"pageid\";s:1:\"6\";s:9:\"page_name\";s:12:\"User Profile\";s:4:\"link\";s:12:\"setting/user\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"0\";s:9:\"is_export\";s:1:\"0\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:56:20\";s:4:\"icon\";s:7:\"fa-user\";}i:7;a:14:{s:6:\"pageid\";s:1:\"7\";s:9:\"page_name\";s:9:\"User Role\";s:4:\"link\";s:12:\"setting/role\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:57:09\";s:4:\"icon\";s:7:\"fa-user\";}i:8;a:14:{s:6:\"pageid\";s:1:\"8\";s:9:\"page_name\";s:11:\"Role Access\";s:4:\"link\";s:18:\"setting/permission\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"0\";s:7:\"is_show\";s:1:\"0\";s:8:\"is_print\";s:1:\"0\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:56:46\";s:4:\"icon\";s:9:\"fa-wrench\";}}}s:10:\"PageAction\";a:5:{i:7;a:4:{i:63;s:1:\"1\";i:64;s:1:\"1\";i:75;s:1:\"1\";i:76;s:1:\"1\";}i:10;a:2:{i:67;s:1:\"1\";i:68;s:1:\"1\";}i:12;a:2:{i:69;s:1:\"1\";i:70;s:1:\"1\";}i:11;a:2:{i:65;s:1:\"1\";i:66;s:1:\"1\";}i:1;a:4:{i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"0\";}}}'),
('e61226ea705107b7dd6b2659205dca08', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 1530932449, 'a:14:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:7:\"english\";s:6:\"userid\";s:1:\"4\";s:9:\"user_name\";s:5:\"admin\";s:8:\"password\";s:32:\"202cb962ac59075b964b07152d234b70\";s:6:\"roleid\";s:1:\"1\";s:9:\"last_name\";s:6:\"System\";s:10:\"first_name\";s:13:\"Administrator\";s:10:\"last_visit\";s:19:\"2018-07-06 10:22:38\";s:13:\"last_visit_ip\";s:3:\"::1\";s:9:\"moduleids\";a:6:{i:0;a:1:{s:8:\"moduleid\";s:1:\"7\";}i:1;a:1:{s:8:\"moduleid\";s:2:\"10\";}i:2;a:1:{s:8:\"moduleid\";s:2:\"15\";}i:3;a:1:{s:8:\"moduleid\";s:2:\"12\";}i:4;a:1:{s:8:\"moduleid\";s:2:\"11\";}i:5;a:1:{s:8:\"moduleid\";s:1:\"1\";}}s:12:\"ModuleInfors\";a:6:{i:7;a:4:{s:8:\"moduleid\";s:1:\"7\";s:11:\"module_name\";s:4:\"Menu\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:10;a:0:{}i:15;a:0:{}i:12;a:4:{s:8:\"moduleid\";s:2:\"12\";s:11:\"module_name\";s:6:\"Banner\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:11;a:4:{s:8:\"moduleid\";s:2:\"11\";s:11:\"module_name\";s:7:\"Article\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:1;a:0:{}}s:10:\"PageInfors\";a:5:{i:7;a:4:{i:63;a:14:{s:6:\"pageid\";s:2:\"63\";s:9:\"page_name\";s:9:\"Menu List\";s:4:\"link\";s:10:\"menu/index\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"10\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 15:53:36\";s:4:\"icon\";s:7:\"fa-bars\";}i:64;a:14:{s:6:\"pageid\";s:2:\"64\";s:9:\"page_name\";s:12:\"Add New Menu\";s:4:\"link\";s:8:\"menu/add\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"11\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 15:53:58\";s:4:\"icon\";s:7:\"fa-bars\";}i:75;a:14:{s:6:\"pageid\";s:2:\"75\";s:9:\"page_name\";s:16:\"Add New Category\";s:4:\"link\";s:12:\"category/add\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"12\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2017-12-22 13:42:09\";s:4:\"icon\";s:7:\"fa-bars\";}i:76;a:14:{s:6:\"pageid\";s:2:\"76\";s:9:\"page_name\";s:13:\"Category List\";s:4:\"link\";s:14:\"category/index\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"13\";s:9:\"is_insert\";s:2:\"11\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2017-12-22 13:42:54\";s:4:\"icon\";s:7:\"fa-bars\";}}i:10;a:2:{i:67;a:14:{s:6:\"pageid\";s:2:\"67\";s:9:\"page_name\";s:12:\"Product List\";s:4:\"link\";s:13:\"product/index\";s:8:\"moduleid\";s:2:\"10\";s:5:\"order\";s:1:\"1\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-12 17:10:07\";s:4:\"icon\";s:7:\"fa-bars\";}i:68;a:14:{s:6:\"pageid\";s:2:\"68\";s:9:\"page_name\";s:16:\"Add New Products\";s:4:\"link\";s:11:\"product/add\";s:8:\"moduleid\";s:2:\"10\";s:5:\"order\";s:1:\"2\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-12 17:10:46\";s:4:\"icon\";s:7:\"fa-bars\";}}i:12;a:2:{i:69;a:14:{s:6:\"pageid\";s:2:\"69\";s:9:\"page_name\";s:11:\"Banner List\";s:4:\"link\";s:20:\"setup/setupads/index\";s:8:\"moduleid\";s:2:\"12\";s:5:\"order\";s:1:\"0\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-02-05 23:16:13\";s:4:\"icon\";s:7:\"fa-bars\";}i:70;a:14:{s:6:\"pageid\";s:2:\"70\";s:9:\"page_name\";s:14:\"Add New Banner\";s:4:\"link\";s:18:\"setup/setupads/add\";s:8:\"moduleid\";s:2:\"12\";s:5:\"order\";s:1:\"1\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-02-05 23:15:42\";s:4:\"icon\";s:7:\"fa-bars\";}}i:11;a:2:{i:65;a:14:{s:6:\"pageid\";s:2:\"65\";s:9:\"page_name\";s:12:\"Article List\";s:4:\"link\";s:13:\"article/index\";s:8:\"moduleid\";s:2:\"11\";s:5:\"order\";s:1:\"4\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 16:46:23\";s:4:\"icon\";s:7:\"fa-bars\";}i:66;a:14:{s:6:\"pageid\";s:2:\"66\";s:9:\"page_name\";s:15:\"Add New Article\";s:4:\"link\";s:11:\"article/add\";s:8:\"moduleid\";s:2:\"11\";s:5:\"order\";s:1:\"5\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 16:47:08\";s:4:\"icon\";s:7:\"fa-bars\";}}i:1;a:4:{i:5;a:14:{s:6:\"pageid\";s:1:\"5\";s:9:\"page_name\";s:4:\"Page\";s:4:\"link\";s:12:\"setting/page\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"0\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"0\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"0\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 17:00:01\";s:4:\"icon\";s:9:\"fa-file-o\";}i:6;a:14:{s:6:\"pageid\";s:1:\"6\";s:9:\"page_name\";s:12:\"User Profile\";s:4:\"link\";s:12:\"setting/user\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"0\";s:9:\"is_export\";s:1:\"0\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:56:20\";s:4:\"icon\";s:7:\"fa-user\";}i:7;a:14:{s:6:\"pageid\";s:1:\"7\";s:9:\"page_name\";s:9:\"User Role\";s:4:\"link\";s:12:\"setting/role\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:57:09\";s:4:\"icon\";s:7:\"fa-user\";}i:8;a:14:{s:6:\"pageid\";s:1:\"8\";s:9:\"page_name\";s:11:\"Role Access\";s:4:\"link\";s:18:\"setting/permission\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"0\";s:7:\"is_show\";s:1:\"0\";s:8:\"is_print\";s:1:\"0\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:56:46\";s:4:\"icon\";s:9:\"fa-wrench\";}}}s:10:\"PageAction\";a:5:{i:7;a:4:{i:63;s:1:\"1\";i:64;s:1:\"1\";i:75;s:1:\"1\";i:76;s:1:\"1\";}i:10;a:2:{i:67;s:1:\"1\";i:68;s:1:\"1\";}i:12;a:2:{i:69;s:1:\"1\";i:70;s:1:\"1\";}i:11;a:2:{i:65;s:1:\"1\";i:66;s:1:\"1\";}i:1;a:4:{i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"0\";}}}');

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
(141, ' PLUMBING SERVICES1', ' PLUMBING SERVICES1', '', '<p>\n	&nbsp;<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 14px;\">Our plumbing engineers design systems with your &ldquo;whole building&rdquo;</span></p>\n', 1, 1, 'site/plumbing', '', 22, '', '2018-07-05');

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
(470, NULL, '137_plumbing-tn.jpg', 0, 141, 0, NULL, NULL);

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
(32, 'service blog 6', 'category', 1, NULL);

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
(32, 'PROJECT', NULL, '32', 0, 0, 2, 1, NULL, NULL, 2, NULL, NULL, 'PROJECT', 0, 5, '6', 'site'),
(31, 'SERVICES', NULL, '31', 0, 0, 1, 1, NULL, NULL, 2, NULL, NULL, 'SERVICES', 0, 5, '9', 'site/service'),
(38, 'ABOUT US', NULL, '38', 0, 0, 5, 1, NULL, NULL, 2, NULL, NULL, 'ABOUT US', 0, 5, '7', 'site/aboutus/'),
(66, 'CONTACT US', NULL, '66', 0, 0, 7, 1, NULL, NULL, 2, NULL, NULL, 'CONTACT US', 0, 5, '4', 'site/contactus/'),
(82, '0', NULL, '82', 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, '0', 0, 0, '0', NULL),
(83, '0', NULL, '83', 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, '0', 0, 0, '0', NULL),
(91, 'FEDERAL PROJECT', NULL, '32-91', 32, 1, 7, 1, NULL, NULL, 1, NULL, NULL, 'FEDERAL PROJECT', 55, 5, '15', 'site/federalproject/'),
(90, 'EDUCATION PROJECT', NULL, '32-90', 32, 1, 7, 1, NULL, NULL, 1, NULL, NULL, 'EDUCATION PROJECT', 55, 5, '15', 'site/educationproject/'),
(95, 'All item', NULL, '31-95', 31, 1, 7, 1, NULL, NULL, 1, NULL, NULL, 'All item', 0, 5, '9', 'site/allitem/'),
(89, 'COMMERCIAL PROJECT', NULL, '32-89', 32, 1, 2, 1, NULL, NULL, 2, NULL, NULL, 'COMMERCIAL PROJECT', 120, 5, '15', 'site/commercailproject/'),
(92, 'HEALTCARE PROJECT', NULL, '32-92', 32, 1, 7, 1, NULL, NULL, 1, NULL, NULL, 'HEALTCARE PROJECT', 55, 5, '15', 'site/healtcareproject/'),
(93, 'HISTORICAL RENOVATION', NULL, '32-93', 32, 1, 7, 1, NULL, NULL, 1, NULL, NULL, 'HISTORICAL RENOVATION', 55, 5, '15', 'site/historicalrenovation/'),
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
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
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
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=471;
--
-- AUTO_INCREMENT for table `tbllayout`
--
ALTER TABLE `tbllayout`
  MODIFY `layout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbllocation`
--
ALTER TABLE `tbllocation`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
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
