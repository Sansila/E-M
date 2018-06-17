-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2017 at 12:51 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_telecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
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
  `def_storeid` int(11) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1498 ;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`userid`, `user_name`, `password`, `email`, `last_visit`, `last_visit_ip`, `created_date`, `created_by`, `modified_by`, `modified_date`, `roleid`, `last_name`, `first_name`, `is_admin`, `is_active`, `def_storeid`) VALUES
(4, 'admin', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com', '2017-12-25 02:39:21', '::1', '2015-01-29 15:10:34', NULL, NULL, NULL, 1, 'System', 'Administrator', 1, 1, NULL),
(5, 'chetra', '202cb962ac59075b964b07152d234b70', 'eing.chetra@gmail.com', '2017-12-25 02:39:21', '::1', '2015-02-02 17:26:36', NULL, NULL, NULL, 2, 'eing', 'chetra', 0, 0, NULL),
(1497, 'store', 'e10adc3949ba59abbe56e057f20f883e', 'store@green.com', '2017-12-25 02:39:21', '::1', '2015-06-26 08:10:54', NULL, NULL, NULL, 21, 'Green', 'Store', 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('a84c664e5ec5c5ad2ca87d27056cdefa', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36', 1514202264, 'a:14:{s:6:"userid";s:1:"4";s:9:"user_name";s:5:"admin";s:8:"password";s:32:"202cb962ac59075b964b07152d234b70";s:6:"roleid";s:1:"1";s:9:"last_name";s:6:"System";s:10:"first_name";s:13:"Administrator";s:10:"last_visit";s:19:"2017-12-24 08:37:54";s:13:"last_visit_ip";s:3:"::1";s:9:"moduleids";a:6:{i:0;a:1:{s:8:"moduleid";s:1:"7";}i:1;a:1:{s:8:"moduleid";s:2:"10";}i:2;a:1:{s:8:"moduleid";s:2:"15";}i:3;a:1:{s:8:"moduleid";s:2:"12";}i:4;a:1:{s:8:"moduleid";s:2:"11";}i:5;a:1:{s:8:"moduleid";s:1:"1";}}s:12:"ModuleInfors";a:6:{i:7;a:4:{s:8:"moduleid";s:1:"7";s:11:"module_name";s:4:"Menu";s:8:"sort_mod";N;s:12:"mod_position";s:1:"2";}i:10;a:0:{}i:15;a:4:{s:8:"moduleid";s:2:"15";s:11:"module_name";s:13:"Video Youtube";s:8:"sort_mod";N;s:12:"mod_position";s:1:"2";}i:12;a:4:{s:8:"moduleid";s:2:"12";s:11:"module_name";s:6:"Banner";s:8:"sort_mod";N;s:12:"mod_position";s:1:"2";}i:11;a:4:{s:8:"moduleid";s:2:"11";s:11:"module_name";s:7:"Article";s:8:"sort_mod";N;s:12:"mod_position";s:1:"2";}i:1;a:0:{}}s:10:"PageInfors";a:6:{i:7;a:4:{i:63;a:14:{s:6:"pageid";s:2:"63";s:9:"page_name";s:9:"Menu List";s:4:"link";s:10:"menu/index";s:8:"moduleid";s:1:"7";s:5:"order";s:2:"10";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-11 15:53:36";s:4:"icon";s:7:"fa-bars";}i:64;a:14:{s:6:"pageid";s:2:"64";s:9:"page_name";s:12:"Add New Menu";s:4:"link";s:8:"menu/add";s:8:"moduleid";s:1:"7";s:5:"order";s:2:"11";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-11 15:53:58";s:4:"icon";s:7:"fa-bars";}i:75;a:14:{s:6:"pageid";s:2:"75";s:9:"page_name";s:16:"Add New Category";s:4:"link";s:12:"category/add";s:8:"moduleid";s:1:"7";s:5:"order";s:2:"12";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2017-12-22 13:42:09";s:4:"icon";s:7:"fa-bars";}i:76;a:14:{s:6:"pageid";s:2:"76";s:9:"page_name";s:13:"Category List";s:4:"link";s:14:"category/index";s:8:"moduleid";s:1:"7";s:5:"order";s:2:"13";s:9:"is_insert";s:2:"11";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2017-12-22 13:42:54";s:4:"icon";s:7:"fa-bars";}}i:10;a:2:{i:67;a:14:{s:6:"pageid";s:2:"67";s:9:"page_name";s:12:"Product List";s:4:"link";s:13:"product/index";s:8:"moduleid";s:2:"10";s:5:"order";s:1:"1";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-12 17:10:07";s:4:"icon";s:7:"fa-bars";}i:68;a:14:{s:6:"pageid";s:2:"68";s:9:"page_name";s:16:"Add New Products";s:4:"link";s:11:"product/add";s:8:"moduleid";s:2:"10";s:5:"order";s:1:"2";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-12 17:10:46";s:4:"icon";s:7:"fa-bars";}}i:15;a:3:{i:72;a:14:{s:6:"pageid";s:2:"72";s:9:"page_name";s:10:"Video List";s:4:"link";s:13:"youtube/index";s:8:"moduleid";s:2:"15";s:5:"order";s:1:"0";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-29 12:41:44";s:4:"icon";s:7:"fa-bars";}i:73;a:14:{s:6:"pageid";s:2:"73";s:9:"page_name";s:9:"New Video";s:4:"link";s:11:"youtube/add";s:8:"moduleid";s:2:"15";s:5:"order";s:1:"1";s:9:"is_insert";s:1:"0";s:9:"is_update";s:1:"0";s:9:"is_delete";s:1:"0";s:7:"is_show";s:1:"0";s:8:"is_print";s:1:"0";s:9:"is_export";s:1:"0";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-29 12:42:17";s:4:"icon";s:7:"fa-bars";}i:74;a:14:{s:6:"pageid";s:2:"74";s:9:"page_name";s:7:"Gallery";s:4:"link";s:15:"gallery/gallery";s:8:"moduleid";s:2:"15";s:5:"order";s:1:"2";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2016-03-04 06:07:43";s:4:"icon";s:7:"fa-bars";}}i:12;a:2:{i:69;a:14:{s:6:"pageid";s:2:"69";s:9:"page_name";s:11:"Banner List";s:4:"link";s:20:"setup/setupads/index";s:8:"moduleid";s:2:"12";s:5:"order";s:1:"0";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2016-02-05 23:16:13";s:4:"icon";s:7:"fa-bars";}i:70;a:14:{s:6:"pageid";s:2:"70";s:9:"page_name";s:14:"Add New Banner";s:4:"link";s:18:"setup/setupads/add";s:8:"moduleid";s:2:"12";s:5:"order";s:1:"1";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2016-02-05 23:15:42";s:4:"icon";s:7:"fa-bars";}}i:11;a:2:{i:65;a:14:{s:6:"pageid";s:2:"65";s:9:"page_name";s:12:"Article List";s:4:"link";s:13:"article/index";s:8:"moduleid";s:2:"11";s:5:"order";s:1:"4";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-11 16:46:23";s:4:"icon";s:7:"fa-bars";}i:66;a:14:{s:6:"pageid";s:2:"66";s:9:"page_name";s:15:"Add New Article";s:4:"link";s:11:"article/add";s:8:"moduleid";s:2:"11";s:5:"order";s:1:"5";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-11 16:47:08";s:4:"icon";s:7:"fa-bars";}}i:1;a:4:{i:5;a:14:{s:6:"pageid";s:1:"5";s:9:"page_name";s:4:"Page";s:4:"link";s:12:"setting/page";s:8:"moduleid";s:1:"1";s:5:"order";N;s:9:"is_insert";s:1:"0";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"0";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"0";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-02-05 17:00:01";s:4:"icon";s:9:"fa-file-o";}i:6;a:14:{s:6:"pageid";s:1:"6";s:9:"page_name";s:12:"User Profile";s:4:"link";s:12:"setting/user";s:8:"moduleid";s:1:"1";s:5:"order";N;s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"0";s:9:"is_export";s:1:"0";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-02-05 16:56:20";s:4:"icon";s:7:"fa-user";}i:7;a:14:{s:6:"pageid";s:1:"7";s:9:"page_name";s:9:"User Role";s:4:"link";s:12:"setting/role";s:8:"moduleid";s:1:"1";s:5:"order";N;s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-02-05 16:57:09";s:4:"icon";s:7:"fa-user";}i:8;a:14:{s:6:"pageid";s:1:"8";s:9:"page_name";s:11:"Role Access";s:4:"link";s:18:"setting/permission";s:8:"moduleid";s:1:"1";s:5:"order";N;s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"0";s:7:"is_show";s:1:"0";s:8:"is_print";s:1:"0";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-02-05 16:56:46";s:4:"icon";s:9:"fa-wrench";}}}s:10:"PageAction";a:6:{i:7;a:4:{i:63;s:1:"1";i:64;s:1:"1";i:75;s:1:"1";i:76;s:1:"1";}i:10;a:2:{i:67;s:1:"1";i:68;s:1:"1";}i:15;a:3:{i:72;s:1:"1";i:73;s:1:"0";i:74;s:1:"1";}i:12;a:2:{i:69;s:1:"1";i:70;s:1:"1";}i:11;a:2:{i:65;s:1:"1";i:66;s:1:"1";}i:1;a:4:{i:5;s:1:"1";i:6;s:1:"1";i:7;s:1:"1";i:8;s:1:"0";}}s:4:"lang";s:2:"en";s:9:"site_lang";s:5:"khmer";}');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_item`
--

CREATE TABLE IF NOT EXISTS `dashboard_item` (
  `dashid` int(11) NOT NULL AUTO_INCREMENT,
  `dash_item` varchar(255) DEFAULT NULL,
  `moduleid` int(11) DEFAULT NULL,
  `link_pageid` int(11) DEFAULT NULL,
  `is_show` int(11) NOT NULL DEFAULT '1',
  `block` varchar(255) DEFAULT NULL COMMENT 'left_top,left_bottom',
  PRIMARY KEY (`dashid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dashboard_item`
--

INSERT INTO `dashboard_item` (`dashid`, `dash_item`, `moduleid`, `link_pageid`, `is_show`, `block`) VALUES
(1, 'Student', 3, 10, 1, 'top_left');

-- --------------------------------------------------------

--
-- Table structure for table `tblarticle`
--

CREATE TABLE IF NOT EXISTS `tblarticle` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `article_title_kh` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content_kh` text CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `is_active` int(1) NOT NULL,
  `meta_keyword` text CHARACTER SET utf8 NOT NULL,
  `meta_desc` text CHARACTER SET utf8 NOT NULL,
  `location_id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `article_date` date NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `tblarticle`
--

INSERT INTO `tblarticle` (`article_id`, `article_title`, `article_title_kh`, `content_kh`, `content`, `is_active`, `meta_keyword`, `meta_desc`, `location_id`, `icon`, `article_date`) VALUES
(1, 'ប្រវត្តិនាយកដ្ឋានវិទ្យុទាក់ទង', 'ប្រវត្តិនាយកដ្ឋានវិទ្យុទាក់ទង', '<p>\n	-អង្គភាពវិទ្យុទាក់ទងបានចាប់បដិសន្ធិនៅឆ្នាំ&nbsp;១៩៨៧&nbsp;&nbsp;ក្រោយពីសិក្ខាកាមចំនួន ០២ វគ្គ បានបញ្ចប់ការសិក្សាវិលត្រឡប់ពី ប្រទេសវៀតណាម មកកម្ពុជាវិញ (វគ្គមធ្យមវិទ្យុទូរលេខ ១១នាក់ &nbsp;និងវគ្គមធ្យមបច្ចេកទេសវិទ្យុទាក់ទងចំនួន ១១នាក់) នៅពេលនោះ​អង្គភាព វិទ្យុ ទាក់ទង នៅជាការិយាល័យឈ្មោះការិយាល័យ ទី៦ ចំណុះមន្ទីរ ពិចារណា សរុបក្រសួងមហាផ្ទៃ។</p>\n<p>\n	-ឆ្នាំ១៩៨៩&nbsp;អង្គភាពវិទ្យុទាក់ទង បានវិវឌ្ឍន៍ពីការិយាល័យទី៦ &nbsp;នៃមន្ទីរពិចារណាសរុប&nbsp;ទៅជានាយកដ្ឋាន</p>\n<p>\n	វិទ្យុទាក់ទងចំណុះ​ ក្រសួងមហាផ្ទៃ ដោយ មានអនុរដ្ឋមន្រ្តី០១រូប ទទួលបន្ទុក។</p>\n<p>\n	-ឆ្នាំ១៩៩៣&nbsp;នាយកដ្ឋានវិទ្យុទាក់ទង ស្ថិតក្រោមឱវាទរួមរបស់អគ្គនាយកដ្ឋានរដ្ឋបាល និងអគ្គនាយកដ្ឋាននគរបាលជាតិ។</p>\n<p>\n	-បច្ចុប្បន្ននាយកដ្ឋានវិទ្យុទាក់ទង ស្ថិតក្រោមការគ្រប់គ្រងដឹកនាំរបស់សេនាធិការដ្ឋាននៃអគ្គស្នងការដ្ឋាននគរបាលជាតិ។</p>\n', '<p>\n	-អង្គភាពវិទ្យុទាក់ទងបានចាប់បដិសន្ធិនៅឆ្នាំ&nbsp;១៩៨៧&nbsp;&nbsp;ក្រោយពីសិក្ខាកាមចំនួន ០២ វគ្គ បានបញ្ចប់ការសិក្សាវិលត្រឡប់ពី ប្រទេសវៀតណាម មកកម្ពុជាវិញ (វគ្គមធ្យមវិទ្យុទូរលេខ ១១នាក់ &nbsp;និងវគ្គមធ្យមបច្ចេកទេសវិទ្យុទាក់ទងចំនួន ១១នាក់) នៅពេលនោះ​អង្គភាព វិទ្យុ ទាក់ទង នៅជាការិយាល័យឈ្មោះការិយាល័យ ទី៦ ចំណុះមន្ទីរ ពិចារណា សរុបក្រសួងមហាផ្ទៃ។</p>\n<p>\n	-ឆ្នាំ១៩៨៩&nbsp;អង្គភាពវិទ្យុទាក់ទង បានវិវឌ្ឍន៍ពីការិយាល័យទី៦ &nbsp;នៃមន្ទីរពិចារណាសរុប&nbsp;ទៅជានាយកដ្ឋាន</p>\n<p>\n	វិទ្យុទាក់ទងចំណុះ​ ក្រសួងមហាផ្ទៃ ដោយ មានអនុរដ្ឋមន្រ្តី០១រូប ទទួលបន្ទុក។</p>\n<p>\n	-ឆ្នាំ១៩៩៣&nbsp;នាយកដ្ឋានវិទ្យុទាក់ទង ស្ថិតក្រោមឱវាទរួមរបស់អគ្គនាយកដ្ឋានរដ្ឋបាល និងអគ្គនាយកដ្ឋាននគរបាលជាតិ។</p>\n<p>\n	-បច្ចុប្បន្ននាយកដ្ឋានវិទ្យុទាក់ទង ស្ថិតក្រោមការគ្រប់គ្រងដឹកនាំរបស់សេនាធិការដ្ឋាននៃអគ្គស្នងការដ្ឋាននគរបាលជាតិ។</p>\n', 1, '', '', 0, '', '2016-08-10'),
(2, 'INFORMATION BOARD', 'ក្តារពត៏មាន', '<p>\n	អំពីយើង</p>\n<p>\n	សាលាអន្តរជាតិ វេស្ទលែនដ៍ គឺជាសាលា ឯកជន អរន្តជាតិមួយដែលបានចុះអនុសរណជាមួយ ក្រសួងអប់រំ និងកីឡា ក្នុងឆ្នាំ ២០១១ ។ សាលាអន្តរជាតិវេស្ទលែនដ៍ មានទីតាំងស្ថិតនៅចន្លោះពីក្រុងតាខ្មៅ និងរាជធានី ភ្នំពេញុ ហើយក៏ជា សាលាអន្តរជាតិដែលមានគុណភាពល្អមួយ ដែលស្ថិតនៅក្នុងចំណោមសាលាអន្តរជាតិ ក្នុងស្រុកដែរ ។ ពួកយើងមានគោលដៅ ផ្តល់ជូនសិស្សានុសិស្ស​ ជាមួយចំណឹងដឹង ជំនាញ និងសីលធម៌</p>\n', '<p>\n	<span style="font-size:20px;"><span style="font-family:times new roman;">WESTLAND international school is a registered private international school with the Ministry of Education, Youth and Sports in year 2011. Our school based border between Takhmau Town and Phnom Penh, is one of the country&rsquo;s quality international schools. We aim to provide our students with the knowledge, skills and attitude required to contribute towards and play major roles in a globalized and knowledge-based economy. Our vision is to become the leading international school in the country by 2020 through excellence in education, training, community engagement services and student mobility. Our school activities are focused on developing students in shaping behavior, thinking skills, ethics, independence, and knowledge with our industrial partners and universities.</span></span></p>\n', 1, '', '', 0, '', '0000-00-00'),
(39, 'EVENT GALLERY', 'EVENT GALLERY', '<p>\n	<span style="color: rgb(50, 56, 59); font-family: &quot;times new roman&quot;; font-size: 20px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: rgb(255, 255, 255);">WESTLAND international school is a registered private international school with the Ministry of Education, Youth and Sports in year 2011. Our school based border between Takhmau Town and Phnom Penh, is one of the country&rsquo;s quality international schools. We aim to provide our students with the knowledge, skills and attitude required to contribute towards and play major roles in a globalized and knowledge-based economy. Our vision is to become the leading international school in the country by 2020 through excellence in education, training, community engagement services and student mobility. Our school activities are focused on developing students in shaping behavior, thinking skills, ethics, independence, and knowledge with our industrial partners and universities.</span></p>\n', '<p>\n	<span style="color: rgb(50, 56, 59); font-family: &quot;times new roman&quot;; font-size: 20px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: rgb(255, 255, 255);">WESTLAND international school is a registered private international school with the Ministry of Education, Youth and Sports in year 2011. Our school based border between Takhmau Town and Phnom Penh, is one of the country&rsquo;s quality international schools. We aim to provide our students with the knowledge, skills and attitude required to contribute towards and play major roles in a globalized and knowledge-based economy. Our vision is to become the leading international school in the country by 2020 through excellence in education, training, community engagement services and student mobility. Our school activities are focused on developing students in shaping behavior, thinking skills, ethics, independence, and knowledge with our industrial partners and universities.</span></p>\n', 1, '', '', 0, '', '2016-08-12'),
(40, 'ACADEMIC PROGRAME', 'ACADEMIC PROGRAME', '<p>\n	<span style="color: rgb(50, 56, 59); font-family: &quot;times new roman&quot;; font-size: 20px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: rgb(255, 255, 255);">WESTLAND international school is a registered private international school with the Ministry of Education, Youth and Sports in year 2011. Our school based border between Takhmau Town and Phnom Penh, is one of the country&rsquo;s quality international schools. We aim to provide our students with the knowledge, skills and attitude required to contribute towards and play major roles in a globalized and knowledge-based economy. Our vision is to become the leading international school in the country by 2020 through excellence in education, training, community engagement services and student mobility. Our school activities are focused on developing students in shaping behavior, thinking skills, ethics, independence, and knowledge with our industrial partners and universities.</span></p>\n', '<p>\n	<span style="color: rgb(50, 56, 59); font-family: &quot;times new roman&quot;; font-size: 20px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: rgb(255, 255, 255);">WESTLAND international school is a registered private international school with the Ministry of Education, Youth and Sports in year 2011. Our school based border between Takhmau Town and Phnom Penh, is one of the country&rsquo;s quality international schools. We aim to provide our students with the knowledge, skills and attitude required to contribute towards and play major roles in a globalized and knowledge-based economy. Our vision is to become the leading international school in the country by 2020 through excellence in education, training, community engagement services and student mobility. Our school activities are focused on developing students in shaping behavior, thinking skills, ethics, independence, and knowledge with our industrial partners and universities.</span></p>\n', 1, '', '', 0, '', '2016-08-12'),
(41, 'PHOTO GARLERY', 'PHOTO GARLERY', '<p>\n	As part of WESTLAND&#39;s cycle of condinuous improvment, it is important that the school collects<br />\n	perception day from parents. This process is also an import part of the Western Association of School...</p>\n', '<p>\n	As part of WESTLAND&#39;s cycle of condinuous improvment, it is important that the school collects<br />\n	perception day from parents. This process is also an import part of the Western Association of School...</p>\n', 1, '', '', 0, '', '2016-08-12'),
(45, 'នាយកដ្ឋានវិទ្យុទាក់ទង បានបើកកិច្ចប្រជុំមួយរវាង បញ្ញតិករទូរគមនាគមន៍កម្ពុជា (TRC) -ទូរគមនាគមន៍កម្ពុជា(TC) និង ក្រុមហ៊ុនទូរស័ព្ទ Metfone, Cellcard, Huawei', 'នាយកដ្ឋានវិទ្យុទាក់ទង បានបើកកិច្ចប្រជុំមួយរវាង បញ្ញតិករទូរគមនាគមន៍កម្ពុជា (TRC) -ទូរគមនាគមន៍កម្ពុជា(TC) និង ក្រុមហ៊ុនទូរស័ព្ទ Metfone, Cellcard, Huawei', '<p>\n	<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; color: rgb(0, 60, 98); font-family: play, sans-serif; font-size: 16px;">នៅព្រឹកថ្ងៃទី២៨ ខែសីហា ឆ្នាំ២០១៧ នាយកដ្ឋានវិទ្យុទាក់ទង បានបើកកិច្ចប្រជុំមួយរវាង បញ្ញតិករទូរគមនាគមន៍កម្ពុជា (TRC) -ទូរគមនាគមន៍កម្ពុជា(TC) និង ក្រុមហ៊ុនទូរស័ព្ទ Metfone, Cellcard, Huawei ក្រោមអធិបតីភាព ឯកឧត្តម ឧត្តមសេនីយ៍ឯក មិន សុវណ្ណា ប្រធាននាយកដ្ឋានវិទ្យុទាក់ទង ស្តីពីការឆ្លងរំខានដល់ប្រព័ន្ធទូរស័ព្ទទាន់ហេតុការណ៍ Hotline របស់អគ្គស្នងការនគរបាលជាតិ។</span></p>\n', '<p>\n	<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; color: rgb(0, 60, 98); font-family: play, sans-serif; font-size: 16px;">នៅព្រឹកថ្ងៃទី២៨ ខែសីហា ឆ្នាំ២០១៧ នាយកដ្ឋានវិទ្យុទាក់ទង បានបើកកិច្ចប្រជុំមួយរវាង បញ្ញតិករទូរគមនាគមន៍កម្ពុជា (TRC) -ទូរគមនាគមន៍កម្ពុជា(TC) និង ក្រុមហ៊ុនទូរស័ព្ទ Metfone, Cellcard, Huawei ក្រោមអធិបតីភាព ឯកឧត្តម ឧត្តមសេនីយ៍ឯក មិន សុវណ្ណា ប្រធាននាយកដ្ឋានវិទ្យុទាក់ទង ស្តីពីការឆ្លងរំខានដល់ប្រព័ន្ធទូរស័ព្ទទាន់ហេតុការណ៍ Hotline របស់អគ្គស្នងការនគរបាលជាតិ។</span></p>\n', 1, '', '', 3, '', '2017-12-25'),
(46, 'នាយកដ្ឋានវិទ្យុទាក់ទង បានធ្វើពិធីបិទវគ្គកម្មសិក្សារបស់សិក្ខាកាមវគ្គឧត្តមនៅសាលាT36', 'នាយកដ្ឋានវិទ្យុទាក់ទង បានធ្វើពិធីបិទវគ្គកម្មសិក្សារបស់សិក្ខាកាមវគ្គឧត្តមនៅសាលាT36', '<p>\n	<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; color: rgb(0, 60, 98); font-family: play, sans-serif; font-size: 16px;">នៅព្រឹកថ្ងៃទី 08 ខែឧសភា ឆ្នាំ2017 នាយកដ្ឋានវិទ្យុទាក់ទង បានធ្វើពិធីបិទវគ្គកម្មសិក្សារបស់សិក្ខាកាមវគ្គឧត្តមនៅសាលាT36 ដែលបានចុះមកធ្វើកម្មសិក្សារយៈពេល5ខែ (ចាប់ពីថ្ងៃទី19 ខែធ្នូ ឆ្នាំ2016 ដល់ ថ្ងៃទី08 ខែឧសភា ឆ្នាំ 2017) ក្រោមអធិបតីភាព ឯកឧត្តម ឧត្តមសេនីយ៌ទោ អ៊ុក សម្បត្តិ អនុប្រធាននាយកដ្ឋានវិទ្យុទាក់ទង តំណាងដ៏ខ្ពង់ខ្ពស់របស់ឯកឧត្តម ប្រធាននាយកដ្ឋាន និង លោកវរសេនីយ៌ឯក ហ៊ាន លី តំណាងដ៏ខ្ពង់ខ្ពស់របស់ឯកឧត្តម ប្រធាននាយកដ្ឋានបុគ្គលិក ព្រមទាំងថ្នាក់ដឹកនាំនាយកដ្ឋានវិទ្យុទាក់ទង</span></p>\n', '<p>\n	<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; color: rgb(0, 60, 98); font-family: play, sans-serif; font-size: 16px;">នៅព្រឹកថ្ងៃទី 08 ខែឧសភា ឆ្នាំ2017 នាយកដ្ឋានវិទ្យុទាក់ទង បានធ្វើពិធីបិទវគ្គកម្មសិក្សារបស់សិក្ខាកាមវគ្គឧត្តមនៅសាលាT36 ដែលបានចុះមកធ្វើកម្មសិក្សារយៈពេល5ខែ (ចាប់ពីថ្ងៃទី19 ខែធ្នូ ឆ្នាំ2016 ដល់ ថ្ងៃទី08 ខែឧសភា ឆ្នាំ 2017) ក្រោមអធិបតីភាព ឯកឧត្តម ឧត្តមសេនីយ៌ទោ អ៊ុក សម្បត្តិ អនុប្រធាននាយកដ្ឋានវិទ្យុទាក់ទង តំណាងដ៏ខ្ពង់ខ្ពស់របស់ឯកឧត្តម ប្រធាននាយកដ្ឋាន និង លោកវរសេនីយ៌ឯក ហ៊ាន លី តំណាងដ៏ខ្ពង់ខ្ពស់របស់ឯកឧត្តម ប្រធាននាយកដ្ឋានបុគ្គលិក ព្រមទាំងថ្នាក់ដឹកនាំនាយកដ្ឋានវិទ្យុទាក់ទង</span></p>\n', 1, '', '', 3, '', '2017-12-25'),
(47, 'ឯកឧត្តម មិន សុវណ្ណា ប្រធាននាយកដ្ឋានវិទ្យុទាក់ទង រួមដំណើរជាមួយ លោក ឧ.ទោ អ៊ុក សម្បត្តិ និង លោក ឧ.ត្រី អុឹង សុខណា ទៅចូលរួមប្រជុំផែនការការពារព្រឹត្តិការណ៏អង្គរសង្ក្រាន្ត ឆ្នាំ២០១៧', 'ឯកឧត្តម មិន សុវណ្ណា ប្រធាននាយកដ្ឋានវិទ្យុទាក់ទង រួមដំណើរជាមួយ លោក ឧ.ទោ អ៊ុក សម្បត្តិ និង លោក ឧ.ត្រី អុឹង សុខណា ទៅចូលរួមប្រជុំផែនការការពារព្រឹត្តិការណ៏អង្គរសង្ក្រាន្ត ឆ្នាំ២០១៧', '<p>\n	<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; color: rgb(0, 60, 98); font-family: play, sans-serif; font-size: 16px;">ឯកឧត្តម មិន សុវណ្ណា ប្រធាននាយកដ្ឋានវិទ្យុទាក់ទង រួមដំណើរជាមួយ លោក ឧ.ទោ អ៊ុក សម្បត្តិ និង លោក ឧ.ត្រី អុឹង សុខណា ទៅចូលរួមប្រជុំផែនការការពារព្រឹត្តិការណ៏អង្គរសង្ក្រាន្ត ឆ្នាំ២០១៧ នៅសាលប្រជុំស្នងការដ្ឋាននគរបាលខេត្តសៀមរាប &nbsp; ក្រោមអធិបតីភាព ឯ.ឧ ទូច ណារ៉ុថ &nbsp;អគ្គស្នងការរង និងជាប្រធានគណ:បញ្ជាការការពាររួម</span></p>\n', '<p>\n	<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; color: rgb(0, 60, 98); font-family: play, sans-serif; font-size: 16px;">ឯកឧត្តម មិន សុវណ្ណា ប្រធាននាយកដ្ឋានវិទ្យុទាក់ទង រួមដំណើរជាមួយ លោក ឧ.ទោ អ៊ុក សម្បត្តិ និង លោក ឧ.ត្រី អុឹង សុខណា ទៅចូលរួមប្រជុំផែនការការពារព្រឹត្តិការណ៏អង្គរសង្ក្រាន្ត ឆ្នាំ២០១៧ នៅសាលប្រជុំស្នងការដ្ឋាននគរបាលខេត្តសៀមរាប &nbsp; ក្រោមអធិបតីភាព ឯ.ឧ ទូច ណារ៉ុថ &nbsp;អគ្គស្នងការរង និងជាប្រធានគណ:បញ្ជាការការពាររួម</span></p>\n', 1, '', '', 3, '', '2017-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `tblbanner`
--

CREATE TABLE IF NOT EXISTS `tblbanner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `location_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `orders` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tblbanner`
--

INSERT INTO `tblbanner` (`banner_id`, `title`, `location_id`, `is_active`, `orders`, `link`) VALUES
(30, 'Banner 4', 1, 1, 4, ''),
(31, '0', 0, 0, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE IF NOT EXISTS `tblcontact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `region` varchar(55) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblgallery`
--

CREATE TABLE IF NOT EXISTS `tblgallery` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `url` varchar(255) NOT NULL,
  `gallery_type` int(1) NOT NULL,
  `article_id` int(11) NOT NULL,
  `location_id` int(11) DEFAULT '0',
  `order` int(11) NOT NULL,
  `home` int(1) NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=149 ;

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
(113, 'Dome Neang K hing Dome ករណីអនាធិតេយ្យនៅនាងគង្ហីង', 'vpoiZR2I7Ic', 1, 0, 4, 5, 1),
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
(134, '', '13619843_1733223150223866_3237272157919926255_n.jpg', 0, 41, 0, 0, 0),
(135, '', '13592413_549699578536067_6526573163025707556_n.jpg', 0, 44, 0, 0, 0),
(136, '', '4.jpg', 2, 0, 0, 0, 0),
(137, '', '5.jpg', 2, 0, 0, 0, 0),
(138, '', '6.jpg', 2, 0, 0, 0, 0),
(139, '', '7.png', 2, 0, 0, 0, 0),
(140, '', '8.jpg', 2, 0, 0, 0, 0),
(141, '', '9.jpg', 2, 0, 0, 0, 0),
(142, '', '10.jpg', 2, 0, 0, 0, 0),
(143, '', '1.jpg', 2, 0, 0, 0, 0),
(144, '', '2.jpg', 2, 0, 0, 0, 0),
(145, '', '3.jpg', 2, 0, 0, 0, 0),
(146, '', '770e97_c5768c926c574f37bffe134cc1e847c0_mv2_d_2288_1712_s_2.jpg', 0, 45, 0, 0, 0),
(147, '', '770e97_11d419363d614eb3931c8d5d22ea1a52_mv2.jpg', 0, 46, 0, 0, 0),
(148, '', '770e97_c120550fa41045d9ae205fee012bdba3_mv2.jpg', 0, 47, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbllayout`
--

CREATE TABLE IF NOT EXISTS `tbllayout` (
  `layout_id` int(11) NOT NULL AUTO_INCREMENT,
  `layout_name` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`layout_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `tbllocation` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `location_type` varchar(55) NOT NULL,
  `is_active` int(1) NOT NULL,
  `location_name_kh` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbllocation`
--

INSERT INTO `tbllocation` (`location_id`, `location_name`, `location_type`, `is_active`, `location_name_kh`) VALUES
(1, 'Main Slider', 'banner', 1, ''),
(2, 'Left Side', 'banner', 1, ''),
(3, 'News & Events', 'category', 1, 'ព្រិត្តិការណ៍'),
(4, 'Youtube Videos', 'category', 1, 'វត្តចុងក្រោយ'),
(5, 'Main Menu', 'menu', 1, ''),
(6, 'Upcoming Event', 'category', 1, 'គ្រូរបស់យើង'),
(7, 'Jobs', 'category', 1, 'សេវាកម្មរបស់យើង'),
(8, 'Search Result', '', 0, 'លទ្ធផលនៃការស្វែងរក'),
(9, 'Information board', 'category', 1, 'ក្តារពត័មាន'),
(10, 'List Content', 'category', 1, 'បញ្ជីរអត្ថបទ');

-- --------------------------------------------------------

--
-- Table structure for table `tblmenus`
--

CREATE TABLE IF NOT EXISTS `tblmenus` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) DEFAULT NULL,
  `description` text,
  `lineage` varchar(255) DEFAULT NULL,
  `parentid` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `layout_id` int(11) NOT NULL,
  `modified_by` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `menu_name_kh` varchar(255) NOT NULL,
  `article_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `menu_type` varchar(255) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `tblmenus`
--

INSERT INTO `tblmenus` (`menu_id`, `menu_name`, `description`, `lineage`, `parentid`, `level`, `order`, `is_active`, `created_date`, `created_by`, `layout_id`, `modified_by`, `modified_date`, `menu_name_kh`, `article_id`, `location_id`, `menu_type`) VALUES
(23, 'Service', NULL, '23', 0, 0, 2, 0, NULL, NULL, 1, NULL, NULL, 'សេវាកម្ម', 17, 5, '3'),
(34, 'Our Center', NULL, '34', 0, 0, 3, 1, NULL, NULL, 2, NULL, NULL, 'មជ្ឈមណ្ឌលប្រចាំបញ្ជា', 16, 5, '4'),
(35, 'Service 1', NULL, '23-35', 23, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'អំពីយើង', 17, 5, 'article'),
(32, 'Structure', NULL, '32', 0, 0, 2, 1, NULL, NULL, 1, NULL, NULL, 'រចនាសម្ព័ន្ធ', 0, 5, 'Please select'),
(31, 'About', NULL, '31', 0, 0, 1, 1, NULL, NULL, 1, NULL, NULL, 'អំពីអង្គភាព', 16, 5, 'article'),
(36, 'List Privacy Contact', NULL, '36', 0, 0, 4, 1, NULL, NULL, 1, NULL, NULL, 'នាមសម្ងាត់ទាក់ទង', 0, 5, 'Please select'),
(37, 'More', NULL, '37', 0, 0, 6, 1, NULL, NULL, 1, NULL, NULL, 'ផ្សេងៗ', 0, 5, 'Please select'),
(38, 'News & Events', NULL, '38', 0, 0, 5, 1, NULL, NULL, 1, NULL, NULL, 'ព្រឹត្តិការណ៍', 0, 5, '3'),
(39, 'School History', NULL, '31-39', 31, 1, 2, 0, NULL, NULL, 2, NULL, NULL, 'School History', 1, 5, 'article'),
(40, 'President', NULL, '31-40', 31, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'President', 0, 5, 'article'),
(41, 'Board of Directors', NULL, '31-41', 31, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'Board of Directors', 29, 5, 'article'),
(42, 'Management Team', NULL, '31-42', 31, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'Management Team', 0, 5, 'article'),
(43, 'Staff Directory', NULL, '31-43', 31, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'Staff Directory', 0, 5, 'article'),
(44, 'Testimonials and Achievements', NULL, '31-44', 31, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'Testimonials and Achievements', 0, 5, 'article'),
(45, 'School Partners', NULL, '31-45', 31, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'School Partners', 0, 5, 'article'),
(46, 'Study Abroad Center', NULL, '31-46', 31, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'Study Abroad Center', 0, 5, 'article'),
(47, 'School Facilities ', NULL, '31-47', 31, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'School Facilities ', 31, 5, 'article'),
(48, 'Directions', NULL, '31-48', 31, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'Directions', 0, 5, 'article'),
(49, 'Contact WINS', NULL, '31-49', 31, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'Contact WINS', 0, 5, 'article'),
(50, 'Enrolment', NULL, '36-50', 36, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'Enrolment', 18, 5, 'article'),
(51, 'School Fee', NULL, '36-51', 36, 1, 2, 0, NULL, NULL, 1, NULL, NULL, 'School Fee', 32, 5, 'article'),
(52, 'School Bus Service', NULL, '36-52', 36, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'School Bus Service', 0, 5, 'Please select'),
(53, 'Day-care service', NULL, '36-53', 36, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'Day-care service', 0, 5, 'article'),
(54, 'Khmer Academic Program', NULL, '37-54', 37, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'Khmer Academic Program', 0, 5, 'article'),
(55, 'International K-12 Program', NULL, '37-55', 37, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'International K-12 Program', 0, 5, 'article'),
(56, 'General English Program', NULL, '37-56', 37, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'General English Program', 0, 5, 'article'),
(57, 'AEP Program', NULL, '37-57', 37, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'AEP Program', 0, 5, 'article'),
(58, 'EAP Program', NULL, '37-58', 37, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'EAP Program', 0, 5, 'article'),
(59, 'TOEFL Preparation Course', NULL, '37-59', 37, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'TOEFL Preparation Course', 0, 5, 'article'),
(60, 'IELTS Preparation Course', NULL, '37-60', 37, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'IELTS Preparation Course', 0, 5, 'article'),
(61, 'Administrator Office', NULL, '37-61', 37, 1, 1, 1, NULL, NULL, 1, NULL, NULL, 'ការិយាល័យរដ្ធបាល', 0, 5, 'Please select'),
(62, 'Social Activities/Events', NULL, '38-62', 38, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'Social Activities/Events', 0, 5, 'article'),
(63, 'Charity', NULL, '38-63', 38, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'Charity', 0, 5, 'article'),
(64, 'School Activities', NULL, '38-64', 38, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'School Activities', 0, 5, 'article'),
(65, 'Workshops', NULL, '38-65', 38, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'Workshops', 0, 5, 'article'),
(66, 'Contact', NULL, '66', 0, 0, 7, 1, NULL, NULL, 1, NULL, NULL, 'ទំនាក់ទំនង', 1, 5, 'Please select'),
(73, 'Department History', NULL, '31-73', 31, 1, 1, 1, NULL, NULL, 1, NULL, NULL, 'ប្រវត្តិនាយកដ្ឋាន', 1, 5, 'Please select'),
(74, 'Audiovisual', NULL, '34-74', 34, 1, 1, 1, NULL, NULL, 1, NULL, NULL, 'ផ្នែកសោតទស្សន៍ (CCTV)', 0, 5, '4'),
(75, 'Emergency Phone', NULL, '34-75', 34, 1, 2, 1, NULL, NULL, 1, NULL, NULL, 'ផ្នែកទូស័ព្ទទាន់ហេតុកាណ៍', 0, 5, 'Please select'),
(76, 'Leadership', NULL, '32-76', 32, 1, 1, 1, NULL, NULL, 1, NULL, NULL, 'ថ្នាក់ដឹកនាំ', 0, 5, 'Please select'),
(77, 'Telecommunication Network', NULL, '32-77', 32, 1, 2, 1, NULL, NULL, 1, NULL, NULL, 'បណ្តាញទូរគមនាគមន៍', 0, 5, 'Please select'),
(78, 'Department Photo', NULL, '37-78', 37, 1, 2, 1, NULL, NULL, 1, NULL, NULL, 'រូបថតថ្នាក់ដឹកនាំ', 0, 5, 'Please select');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE IF NOT EXISTS `tblproduct` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `menu_id` int(11) NOT NULL,
  `content_desc` text CHARACTER SET utf8 NOT NULL,
  `content_bottom` text NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`product_id`, `product_name`, `menu_id`, `content_desc`, `content_bottom`, `is_active`) VALUES
(8, 'Product1 ', 3, '<p>\n	<img alt="" src="/htdocs/cljr/data/images/1410600813.jpg" style="width: 941px; height: 496px;" />asdfasdfa</p>\n', '<p>\n	asdfasfg</p>\n', 1),
(9, 'Product 2', 3, '<p>agfsdgwet</p>\n', '<p>wertwetgwt</p>\n', 1),
(10, 'Product 3', 3, '<p>srtwer</p>\n', '<p><img alt="" src="/ckfinder/userfiles/files/201409141410683168993.jpg" style="height:1086px; width:950px" /></p>\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `z_blog`
--

CREATE TABLE IF NOT EXISTS `z_blog` (
  `site_show_blogid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`site_show_blogid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

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

CREATE TABLE IF NOT EXISTS `z_currency` (
  `curid` int(11) NOT NULL AUTO_INCREMENT,
  `currcode` varchar(255) DEFAULT NULL,
  `curr_name` varchar(255) DEFAULT NULL,
  `symbol` varchar(255) DEFAULT NULL,
  `is_default` int(11) DEFAULT NULL,
  `ex_rate` double DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`curid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `z_currency`
--

INSERT INTO `z_currency` (`curid`, `currcode`, `curr_name`, `symbol`, `is_default`, `ex_rate`, `country`) VALUES
(1, 'USD', 'US Dollars', '$', 1, 1, 'US');

-- --------------------------------------------------------

--
-- Table structure for table `z_module`
--

CREATE TABLE IF NOT EXISTS `z_module` (
  `moduleid` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(255) DEFAULT NULL,
  `sort_mod` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `mod_position` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`moduleid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `z_module`
--

INSERT INTO `z_module` (`moduleid`, `module_name`, `sort_mod`, `order`, `is_active`, `mod_position`) VALUES
(1, 'Setting', NULL, 0, 0, '2'),
(7, 'Menu', NULL, NULL, 1, '2'),
(10, 'Product', NULL, NULL, 0, '2'),
(11, 'Article', NULL, NULL, 1, '2'),
(12, 'Banner', NULL, NULL, 1, '2'),
(13, 'Contact', NULL, NULL, 0, '2'),
(15, 'Video Youtube', NULL, NULL, 1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `z_page`
--

CREATE TABLE IF NOT EXISTS `z_page` (
  `pageid` int(11) NOT NULL AUTO_INCREMENT,
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
  `alias` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pageid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=77 ;

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
(72, 'Video List', 'youtube/index', 15, 0, 1, 1, 1, 1, 1, 1, 1, '2015-09-29 12:41:44', 1, 'fa-bars', NULL),
(73, 'New Video', 'youtube/add', 15, 1, 0, 0, 0, 0, 0, 0, 1, '2015-09-29 12:42:17', 1, 'fa-bars', NULL),
(74, 'Gallery', 'gallery/gallery', 15, 2, 1, 1, 1, 1, 1, 1, 1, '2016-03-04 06:07:43', 1, 'fa-bars', NULL),
(75, 'Add New Category', 'category/add', 7, 12, 1, 1, 1, 1, 1, 1, 1, '2017-12-22 13:42:09', 1, 'fa-bars', NULL),
(76, 'Category List', 'category/index', 7, 13, 11, 1, 1, 1, 1, 1, 1, '2017-12-22 13:42:54', 1, 'fa-bars', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `z_role`
--

CREATE TABLE IF NOT EXISTS `z_role` (
  `roleid` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  PRIMARY KEY (`roleid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

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

CREATE TABLE IF NOT EXISTS `z_role_module_detail` (
  `mod_rol_id` int(11) NOT NULL AUTO_INCREMENT,
  `roleid` int(11) DEFAULT NULL,
  `moduleid` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`mod_rol_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=103 ;

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

CREATE TABLE IF NOT EXISTS `z_role_page` (
  `role_page_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `is_import` int(1) DEFAULT '1',
  PRIMARY KEY (`role_page_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `z_role_page`
--

INSERT INTO `z_role_page` (`role_page_id`, `roleid`, `pageid`, `moduleid`, `created_date`, `created_by`, `is_read`, `is_insert`, `is_delete`, `is_update`, `is_print`, `is_export`, `is_import`) VALUES
(17, 17, 24, 7, '2015-03-19 02:18:59', '1', 1, 1, 1, 1, 1, 1, 1),
(26, 17, 25, 7, '2015-06-18 21:15:05', '1', 1, 1, 1, 1, 1, 1, 1),
(27, 17, 26, 7, '2015-04-20 10:57:34', '1', 1, 1, 1, 1, 1, 1, 1),
(28, 17, 27, 7, '2015-04-20 10:57:45', '1', 1, 1, 1, 1, 1, 1, 1),
(29, 17, 28, 7, '2015-04-20 10:57:55', '1', 1, 1, 1, 1, 1, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
