-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2016 at 03:50 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `westland_new`
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
(4, 'admin', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com', '2016-08-16 08:02:41', '127.0.0.1', '2015-01-29 15:10:34', NULL, NULL, NULL, 1, 'System', 'Administrator', 1, 1, NULL),
(5, 'chetra', '202cb962ac59075b964b07152d234b70', 'eing.chetra@gmail.com', '2016-08-16 08:02:41', '127.0.0.1', '2015-02-02 17:26:36', NULL, NULL, NULL, 2, 'eing', 'chetra', 0, 0, NULL),
(1497, 'store', 'e10adc3949ba59abbe56e057f20f883e', 'store@green.com', '2016-08-16 08:02:41', '127.0.0.1', '2015-06-26 08:10:54', NULL, NULL, NULL, 21, 'Green', 'Store', 0, 1, NULL);

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
('266af7a99bd38a4abf3cdd1d3ce5d6b1', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36', 1471341830, ''),
('d18ebe9658237dd009bd69b80b90746b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0', 1471398423, ''),
('ad269c5cb3608fc0b20304b5eddb670f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0', 1471341811, 'a:13:{s:6:"userid";s:1:"4";s:9:"user_name";s:5:"admin";s:8:"password";s:32:"202cb962ac59075b964b07152d234b70";s:6:"roleid";s:1:"1";s:9:"last_name";s:6:"System";s:10:"first_name";s:13:"Administrator";s:10:"last_visit";s:19:"2016-08-15 09:12:05";s:13:"last_visit_ip";s:3:"::1";s:9:"moduleids";a:6:{i:0;a:1:{s:8:"moduleid";s:2:"15";}i:1;a:1:{s:8:"moduleid";s:2:"12";}i:2;a:1:{s:8:"moduleid";s:2:"11";}i:3;a:1:{s:8:"moduleid";s:1:"1";}i:4;a:1:{s:8:"moduleid";s:1:"7";}i:5;a:1:{s:8:"moduleid";s:2:"10";}}s:12:"ModuleInfors";a:6:{i:15;a:4:{s:8:"moduleid";s:2:"15";s:11:"module_name";s:13:"Video Youtube";s:8:"sort_mod";N;s:12:"mod_position";s:1:"2";}i:12;a:4:{s:8:"moduleid";s:2:"12";s:11:"module_name";s:6:"Banner";s:8:"sort_mod";N;s:12:"mod_position";s:1:"2";}i:11;a:4:{s:8:"moduleid";s:2:"11";s:11:"module_name";s:7:"Article";s:8:"sort_mod";N;s:12:"mod_position";s:1:"2";}i:1;a:0:{}i:7;a:4:{s:8:"moduleid";s:1:"7";s:11:"module_name";s:4:"Menu";s:8:"sort_mod";N;s:12:"mod_position";s:1:"2";}i:10;a:0:{}}s:10:"PageInfors";a:6:{i:15;a:3:{i:72;a:14:{s:6:"pageid";s:2:"72";s:9:"page_name";s:10:"Video List";s:4:"link";s:13:"youtube/index";s:8:"moduleid";s:2:"15";s:5:"order";s:1:"0";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-29 12:41:44";s:4:"icon";s:7:"fa-bars";}i:73;a:14:{s:6:"pageid";s:2:"73";s:9:"page_name";s:9:"New Video";s:4:"link";s:11:"youtube/add";s:8:"moduleid";s:2:"15";s:5:"order";s:1:"1";s:9:"is_insert";s:1:"0";s:9:"is_update";s:1:"0";s:9:"is_delete";s:1:"0";s:7:"is_show";s:1:"0";s:8:"is_print";s:1:"0";s:9:"is_export";s:1:"0";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-29 12:42:17";s:4:"icon";s:7:"fa-bars";}i:74;a:14:{s:6:"pageid";s:2:"74";s:9:"page_name";s:7:"Gallery";s:4:"link";s:15:"gallery/gallery";s:8:"moduleid";s:2:"15";s:5:"order";s:1:"2";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2016-03-04 06:07:43";s:4:"icon";s:7:"fa-bars";}}i:12;a:2:{i:69;a:14:{s:6:"pageid";s:2:"69";s:9:"page_name";s:11:"Banner List";s:4:"link";s:20:"setup/setupads/index";s:8:"moduleid";s:2:"12";s:5:"order";s:1:"0";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2016-02-05 23:16:13";s:4:"icon";s:7:"fa-bars";}i:70;a:14:{s:6:"pageid";s:2:"70";s:9:"page_name";s:14:"Add New Banner";s:4:"link";s:18:"setup/setupads/add";s:8:"moduleid";s:2:"12";s:5:"order";s:1:"1";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2016-02-05 23:15:42";s:4:"icon";s:7:"fa-bars";}}i:11;a:2:{i:65;a:14:{s:6:"pageid";s:2:"65";s:9:"page_name";s:12:"Article List";s:4:"link";s:13:"article/index";s:8:"moduleid";s:2:"11";s:5:"order";s:1:"4";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-11 16:46:23";s:4:"icon";s:7:"fa-bars";}i:66;a:14:{s:6:"pageid";s:2:"66";s:9:"page_name";s:15:"Add New Article";s:4:"link";s:11:"article/add";s:8:"moduleid";s:2:"11";s:5:"order";s:1:"5";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-11 16:47:08";s:4:"icon";s:7:"fa-bars";}}i:1;a:4:{i:5;a:14:{s:6:"pageid";s:1:"5";s:9:"page_name";s:4:"Page";s:4:"link";s:12:"setting/page";s:8:"moduleid";s:1:"1";s:5:"order";N;s:9:"is_insert";s:1:"0";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"0";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"0";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-02-05 17:00:01";s:4:"icon";s:9:"fa-file-o";}i:6;a:14:{s:6:"pageid";s:1:"6";s:9:"page_name";s:12:"User Profile";s:4:"link";s:12:"setting/user";s:8:"moduleid";s:1:"1";s:5:"order";N;s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"0";s:9:"is_export";s:1:"0";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-02-05 16:56:20";s:4:"icon";s:7:"fa-user";}i:7;a:14:{s:6:"pageid";s:1:"7";s:9:"page_name";s:9:"User Role";s:4:"link";s:12:"setting/role";s:8:"moduleid";s:1:"1";s:5:"order";N;s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-02-05 16:57:09";s:4:"icon";s:7:"fa-user";}i:8;a:14:{s:6:"pageid";s:1:"8";s:9:"page_name";s:11:"Role Access";s:4:"link";s:18:"setting/permission";s:8:"moduleid";s:1:"1";s:5:"order";N;s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"0";s:7:"is_show";s:1:"0";s:8:"is_print";s:1:"0";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-02-05 16:56:46";s:4:"icon";s:9:"fa-wrench";}}i:7;a:2:{i:63;a:14:{s:6:"pageid";s:2:"63";s:9:"page_name";s:9:"Menu List";s:4:"link";s:10:"menu/index";s:8:"moduleid";s:1:"7";s:5:"order";s:2:"10";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-11 15:53:36";s:4:"icon";s:7:"fa-bars";}i:64;a:14:{s:6:"pageid";s:2:"64";s:9:"page_name";s:12:"Add New Menu";s:4:"link";s:8:"menu/add";s:8:"moduleid";s:1:"7";s:5:"order";s:2:"11";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-11 15:53:58";s:4:"icon";s:7:"fa-bars";}}i:10;a:2:{i:67;a:14:{s:6:"pageid";s:2:"67";s:9:"page_name";s:12:"Product List";s:4:"link";s:13:"product/index";s:8:"moduleid";s:2:"10";s:5:"order";s:1:"1";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-12 17:10:07";s:4:"icon";s:7:"fa-bars";}i:68;a:14:{s:6:"pageid";s:2:"68";s:9:"page_name";s:16:"Add New Products";s:4:"link";s:11:"product/add";s:8:"moduleid";s:2:"10";s:5:"order";s:1:"2";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-12 17:10:46";s:4:"icon";s:7:"fa-bars";}}}s:10:"PageAction";a:6:{i:15;a:3:{i:72;s:1:"1";i:73;s:1:"0";i:74;s:1:"1";}i:12;a:2:{i:69;s:1:"1";i:70;s:1:"1";}i:11;a:2:{i:65;s:1:"1";i:66;s:1:"1";}i:1;a:4:{i:5;s:1:"1";i:6;s:1:"1";i:7;s:1:"1";i:8;s:1:"0";}i:7;a:2:{i:63;s:1:"1";i:64;s:1:"1";}i:10;a:2:{i:67;s:1:"1";i:68;s:1:"1";}}s:4:"lang";s:2:"en";}');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `tblarticle`
--

INSERT INTO `tblarticle` (`article_id`, `article_title`, `article_title_kh`, `content_kh`, `content`, `is_active`, `meta_keyword`, `meta_desc`, `location_id`, `icon`, `article_date`) VALUES
(1, 'Why is WESTLAND ?', 'Why is WESTLAND?', '<p>\n	<span style="font-size:16px;">ដើម្បីចូលរួមលើកស្ទួយ ក៏ដូចជាអភិវឌ្ឍនទីក្រុងភ្នំពេញ អោយស្របទៅតាមយុទ្ធសាស្រ្តរបស់រាជរដ្ឋាភិបាល ក្រុមហ៊ុន បាន និងកំពុងសាងសង់ លំនៅដ្ឋានដ៍ប្រណិតៗជាច្រើនកន្លែងសម្រាប់បម្រើជូនដល់អតិថិជនដែលប្រាថ្នាចង់​ បានការ​រស់នៅក្នុងលំនៅដ្ឋានបែបទំនើប និងទាន់សម័យជាលក្ខណៈឯកជន។​ ការសាងសង់គម្រោង&nbsp; គឺជាជោគជ័យទី១ របស់ក្រុមហ៊ុន ​ ហើយភាពជោគជ័យនេះ បានមកពីការគាំទ្រ ក៏ដូចជាការវាយតម្លៃ ខ្ពស់លើ​សំណង់លំនៅដ្ឋានរបស់អតិថិជនទាំង​អស់។ នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។ ក្រុមហ៊ុន ​ ​​​សូម​​​ថ្លែង​​​អំណរ​​​គុណយ៉ាងជ្រាលជ្រៅចំពោះ​​អតិថិជន​​​ទាំង​​​អស់​ដែល តែងតែជួយគាំទ្រសំណង់ លំនៅដ្ឋានរបស់ក្រុមហ៊ុន តាំងពីដើមរហូតមកដល់ពេលនេះ។​</span></p>\n', '<p style="text-align: justify;">\n	<span style="font-size:16px;"><span style="font-family:times new roman;"><strong>Dear Parent of a Prospective WESTLAND Student</strong></span></span></p>\n<p style="text-align: justify;">\n	<br />\n	On behalf of&nbsp;<strong>WESTLAND International School</strong>&nbsp;we would like to thank you for your interest in our school. We are very proud of our school and we consider it to be the highest endorsement that a school may receive when a parent chooses to enroll their child in that school. Choosing&nbsp;<strong>WESTLAND International School</strong>&nbsp;as your child&rsquo;s school means that they will be part of one of the fastest growing International Schools in Cambodia. We are proud of the quality of education our students receive and the accomplishments of our graduates. Of&nbsp;<strong>WESTLAND International School</strong>&rsquo;s first high school graduating class (2012-13) five of the six graduates went on to university (two in Phnom Penh and the others in Australia, Canada, and Korea); the graduate who chose not to enroll in university is working as a teacher in Phnom Penh.</p>\n<p style="text-align: justify;">\n	<strong>WESTLAND</strong><strong>International School</strong>&nbsp;is a private, non-sectarian international school that opened in 2011 with the mission to cater to all students without prejudice, and to enable the &ldquo;whole child&rdquo; (physical, mental, moral, and social) to master local and global competence and citizenship. The Khmer curriculum elective, which includes workbooks developed by&nbsp;<strong>WESTLAND International School</strong>&nbsp;for Kindergarten &ndash; Grade 12, has been recognized by the Ministry of Education, Youth, and Sport. Our school values diversity and global citizenship, which is reflected in the enrollment of our student body representing more than 18 countries and 12 primary languages spoken in the student&rsquo;s homes. While some may see this as a challenge for educators, at&nbsp;<strong>WESTLAND International School</strong>&nbsp;we see this as a rich opportunity for our students to learn side-by-side with peers from diverse backgrounds, thereby enriching their education experience and global competence.</p>\n<p style="text-align: justify;">\n	&nbsp;</p>\n<p style="text-align: justify;">\n	&nbsp;</p>\n<p style="text-align: justify;">\n	Sincerely,<br />\n	WESTLAND Board of Directors</p>\n', 1, '', '', 0, '', '2016-08-10'),
(2, 'INFORMATION BOARD', 'ក្តារពត៏មាន', '<p>\n	អំពីយើង</p>\n<p>\n	សាលាអន្តរជាតិ វេស្ទលែនដ៍ គឺជាសាលា ឯកជន អរន្តជាតិមួយដែលបានចុះអនុសរណជាមួយ ក្រសួងអប់រំ និងកីឡា ក្នុងឆ្នាំ ២០១១ ។ សាលាអន្តរជាតិវេស្ទលែនដ៍ មានទីតាំងស្ថិតនៅចន្លោះពីក្រុងតាខ្មៅ និងរាជធានី ភ្នំពេញុ ហើយក៏ជា សាលាអន្តរជាតិដែលមានគុណភាពល្អមួយ ដែលស្ថិតនៅក្នុងចំណោមសាលាអន្តរជាតិ ក្នុងស្រុកដែរ ។ ពួកយើងមានគោលដៅ ផ្តល់ជូនសិស្សានុសិស្ស​ ជាមួយចំណឹងដឹង ជំនាញ និងសីលធម៌</p>\n', '<p>\n	<span style="font-size:20px;"><span style="font-family:times new roman;">WESTLAND international school is a registered private international school with the Ministry of Education, Youth and Sports in year 2011. Our school based border between Takhmau Town and Phnom Penh, is one of the country&rsquo;s quality international schools. We aim to provide our students with the knowledge, skills and attitude required to contribute towards and play major roles in a globalized and knowledge-based economy. Our vision is to become the leading international school in the country by 2020 through excellence in education, training, community engagement services and student mobility. Our school activities are focused on developing students in shaping behavior, thinking skills, ethics, independence, and knowledge with our industrial partners and universities.</span></span></p>\n', 1, '', '', 0, '', '0000-00-00'),
(9, 'IK-12 PROGRAM <br> Date: August 05,2016', 'កម្មវិធីថ្នាក់ចំណេះទូទៅអន្តរជាតិ', '<p>\n	នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat</p>\n', 1, '', '', 4, '', '0000-00-00'),
(10, 'Khmer K-12 PROGRAM <br> Date: August 15,2016', 'ថ្នាក់ចំណេះទូទៅ ខ្មែរ', '<p>\n	នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន&nbsp; នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat</p>\n', 1, '', '', 4, '', '0000-00-00'),
(11, 'Reading Time', 'ការងារទី ៣', '<p>\n	នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenasique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio</p>\n', 1, '', '', 3, '', '2000-08-09'),
(12, 'IK-12 Study Tour to CCC', 'ដំណើរកម្សាន្ត', '<p>\n	នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenasique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio</p>\n', 1, '', '', 3, '', '0000-00-00'),
(13, 'Khmer K-12 Study tour to Kompong Cham Provice', 'ដំណើរកម្សាន្ត ថ្នាក់ចំណេះទូទៅខ្មែរ ', '<p>\n	នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenasique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio</p>\n', 1, '', '', 3, '', '0000-00-00'),
(14, 'Halloween', 'កម្មវិធីកម្សាន្ត', '<p>\n	នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenasique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio</p>\n', 1, '', '', 3, '', '0000-00-00'),
(15, 'Learn Creative Skills, Shape Your Future 5', 'ការងារទី ៧', '<p>\n	នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន ជីប&nbsp;ម៉ុង​​​&nbsp;លែន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenasique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio</p>\n', 1, '', '', 3, '', '0000-00-00'),
(16, 'General English Program', 'ថ្នាក់ភាសាអង់គ្លេសទូទៅ ', '<p>\n	<span id="result_box" lang="km"><span title="WHO WE ARE?\n\n">យើង​ជា​អ្នកណា​?<br />\n	<br />\n	</span><span title="Am is a Cambodian property developer, which is a subsidiary of the BST, Ltd., one of the leading companies in Cambodia.">ព្រឹក ​នេះ​គឺ​ក្រុមហ៊ុន​អភិវឌ្ឍន៍​អចលន​ទ្រព្យ​កម្ពុជា​ដែល​ជា​ក្រុមហ៊ុន​បុត្រ​ សម្ព័ន្ធ​របស់​រិ៍​, Ltd ដែល​ជា​ក្រុមហ៊ុន​នាំ​មុខ​គេ​នៅ​កម្ពុជា​។ </span><span title="BST, Ltd. is well known at importing and distributing of top quality construction materials from well-known manufacturers around the world.">រិ៍ ​, Ltd ត្រូវ​បាន​គេ​ស្គាល់​យ៉ាង​ល្អ​នៅ​ក្នុង​ការ​នាំ​ចូល​និង​ចែក​ចាយ​សម្ភារ​ សំណង់​ដែល​មាន​គុណភាព​កំពូល​ពី​ក្រុមហ៊ុន​ផលិត​ល្បី​នៅ​ជុំវិញ​ពិភពលោក​។ </span><span title="In addition, Chip Mong Group, Ltd. also owns factories, such as concrete factories and Cambodia Beer factory.\n\n">លើស​ពី​នេះ​ទៀត​ក្រុមហ៊ុន​ជី​ប​ម៉ុង​គ្រុប​អិ​ល​ធី​ឌី​ជា​ម្ចាស់​រោងចក្រ​ដូច​ជា​រោង​ចក្រ​បេតុង​និង​រោង​ចក្រ​ស្រាបៀ​រ​កម្ពុជា​។<br />\n	<br />\n	</span><span title="Chip Mong Land''s first project namely is under construction within the residence development area of 20 hectares.">គម្រោង ​ការ​ដំបូង​របស់​ក្រុមហ៊ុន​ជី​ប​ម៉ុង​ដីធ្លី​គឺ​ស្ថិត​នៅ​ក្រោម​ការ​សាង​សង់ ​នៅ​ក្នុង​តំបន់​អភិវឌ្ឍន៍​លំនៅ​ដ្ឋាន​ចំនួន 20 ហិ​ក​តា​។ </span><span title="brings varieties of luxurious private houses such as King Villas, Queen Villas, Twin Houses, Link Houses and Shop Houses.">បាន ​នាំ​មក​នូវ​ពូជ​របស់​ផ្ទះ​ឯកជន​ប្រណិត​ដូចជា​ព្រះមហាក្សត្រ​វីឡា​ព្រះ​ មហាក្សត្រី​វីឡា​, ភ្លោះ​ផ្ទះ​, គេហទំព័រ​ភ្ជាប់​ហាង​លក់​ផ្ទះ​និង​ផ្ទះ​។ </span><span title="These villas are well equipped with fashionable and modern furniture.">វីឡា​ទាំង​នេះ​ត្រូវ​បាន​បំពាក់​ផង​ដែរ​ជាមួយ​នឹង​គ្រឿង​សង្ហា​រឹម​ម៉ូត​និង​សម័យ​ទំនើប​។ </span><span title="Meanwhile, the company also builds a beautiful garden, a clubhouse, a swimming pool and many other leisure places for your different preferences.\n\n">ទន្ទឹម​នឹង​នេះ​ដែរ​ក្រុម​ហ៊ុន​នេះ​ផង​ដែរ​បាន​កសាង​ជា​សួនច្បារ​ស្រស់​ ស្អាត​មួយ clubhouse អាង​ហែល​ទឹក​និង​កន្លែង​កម្សាន្ត​ជា​ច្រើន​ទៀត​សម្រាប់​ចំណង់​ចំណូល​ចិត្ត​ ផ្សេង​គ្នា​របស់​អ្នក​។<br />\n	<br />\n	</span><span title="The Park Land Sen Sok has been conceived and constructed by Khmer and foreign skillful architects and engineers with years of experiences in the construction sector locally and internationally.\n\n">ឧទ្យាន​ដីធ្លី​សែន​សុខ​ត្រូវ​បាន​បង្កើត​និង​បាន​សាងសង់​ឡើង​ដោយ​ ស្ថាបត្យករ​និង​វិស្វករ​បរទេស​មាន​ជំនាញ​ខ្មែរ​និង​ជាមួយ​ឆ្នាំ​នៃ​ បទពិសោធន៍​ក្នុង​វិស័យ​សំណង់​ក្នុង​ស្រុក​និង​អន្តរជាតិ​។<br />\n	<br />\n	</span><span title="The Park Land Sen Sok is located in a safe suburb of Phnom Penh on street 1928 (Oknha Mong Rethth), Sangkat Phnom Penh Thmey, Khan Sen Sok, which can easily get access to schools, hospitals, shopping centers, prominent public institutions, private">ឧទ្យាន ​ដីធ្លី​សែន​សុខ​ត្រូវ​បាន​ស្ថិត​នៅ​ជា​យ​ក្រុង​ដែល​មាន​សុវត្ថិភាព​នៅ​ រាជធានី​ភ្នំពេញ​នៅ​លើ​ផ្លូវ 1928 (ឧកញ៉ា​ម៉ុង Rethth​)​, ​​សង្កាត់​ភ្នំពេញ​ថ្មី​, ខណ្ឌ​សែនសុខ​, ដែល​បាន​យ៉ាង​ងាយ​ស្រួល​អាច​ទទួល​បាន​ការ​ចូល​ដំណើរ​ការ​ទៅ​សាលារៀន​ មន្ទីរពេទ្យ​ផ្សារ​ទំនើប​ស្ថាប័ន​សាធារណៈ​លេចធ្លោ​ឯកជន </span><span title="companies and safe, convenient public infrastructure.\n\n">ក្រុមហ៊ុន​និង​មាន​សុវត្ថិភាព​, ហេដ្ឋារចនាសម្ព័ន្ធ​សាធារណៈ​ងាយ​ស្រួល​។<br />\n	<br />\n	</span><span title="BST''s customers can purchase their houses by paying in full and get a special discount or by mortgage from CML for up to 17 years or from banks.\n\n\n">មាន​អតិថិជន​របស់​អាច​ទិញ​រិ៍​ផ្ទះ​របស់​ពួក​គេ​នៅ​ក្នុង​ពេញ​ដោយ​ការ​បង់ ​ប្រាក់​និង​ទទួល​បាន​ការ​បញ្ចុះតម្លៃ​ពិសេស​ពី​ឬ​ដោយ​ការ​ប្រាក់​កម្ចី​ទិញ ​ផ្ទះ​រហូត​ដល់​ទៅ CML 17 ឆ្នាំ​ឬ​ពី​ធនាគារ​។<br />\n	<br />\n	<br />\n	</span><span title="Thank you for visiting us.\n\n">សូម​អរគុណ​ចំពោះ​ការ​ទស្សនា​ពួក​យើង​។<br />\n	<br />\n	</span><span title="Trust in Living!">ការ​ជឿ​ទុកចិត្ត​នៅ​ក្នុង​ការរស់នៅ​!</span></span></p>\n', '<div class="sf-right-header">\n	<p class="font-header">\n		WHO WE ARE?</p>\n</div>\n<p>\n	Am is a Cambodian property developer, which is a subsidiary of the BST, Ltd., one of the leading companies in Cambodia. BST, Ltd. is well known at importing and distributing of top quality construction materials from well-known manufacturers around the world. In addition, Chip Mong Group, Ltd. also owns factories, such as concrete factories and Cambodia Beer factory.</p>\n<p>\n	Chip Mong Land&rsquo;s first project namely is under construction within the residence development area of 20 hectares.&nbsp; brings varieties of luxurious private houses such as King Villas, Queen Villas, Twin Houses, Link Houses and Shop Houses. These villas are well equipped with fashionable and modern furniture. Meanwhile, the company also builds a beautiful garden, a clubhouse, a swimming pool and many other leisure places for your different preferences.</p>\n<p>\n	The Park Land Sen Sok has been conceived and constructed by Khmer and foreign skillful architects and engineers with years of experiences in the construction sector locally and internationally.</p>\n<p>\n	The Park Land Sen Sok is located in a safe suburb of Phnom Penh on street 1928 (Oknha Mong Rethth), Sangkat Phnom Penh Thmey, Khan Sen Sok, which can easily get access to schools, hospitals, shopping centers, prominent public institutions, private companies and safe, convenient public infrastructure.</p>\n<p>\n	BST&rsquo;s customers can purchase their houses by paying in full and get a special discount or by mortgage from CML for up to 17 years or from banks.</p>\n<p>\n	&nbsp;</p>\n<p>\n	Thank you for visiting us.</p>\n<p>\n	Trust in Living!</p>\n', 1, '', '', 4, '', '0000-00-00'),
(17, 'Services', 'សេវាកម្ម', '<p>\n	<span id="result_box" lang="km"><span title="Am is a Cambodian property developer, which is a subsidiary of the BST, Ltd., one of the leading companies in Cambodia.">ព្រឹក ​នេះ​គឺ​ក្រុមហ៊ុន​អភិវឌ្ឍន៍​អចលន​ទ្រព្យ​កម្ពុជា​ដែល​ជា​ក្រុមហ៊ុន​បុត្រ​ សម្ព័ន្ធ​របស់​រិ៍​, Ltd ដែល​ជា​ក្រុមហ៊ុន​នាំ​មុខ​គេ​នៅ​កម្ពុជា​។ </span><span title="BST, Ltd. is well known at importing and distributing of top quality construction materials from well-known manufacturers around the world.">រិ៍ ​, Ltd ត្រូវ​បាន​គេ​ស្គាល់​យ៉ាង​ល្អ​នៅ​ក្នុង​ការ​នាំ​ចូល​និង​ចែក​ចាយ​សម្ភារ​ សំណង់​ដែល​មាន​គុណភាព​កំពូល​ពី​ក្រុមហ៊ុន​ផលិត​ល្បី​នៅ​ជុំវិញ​ពិភពលោក​។ </span><span title="In addition, Chip Mong Group, Ltd. also owns factories, such as concrete factories and Cambodia Beer factory.\n\n">លើស​ពី​នេះ​ទៀត​ក្រុមហ៊ុន​ជី​ប​ម៉ុង​គ្រុប​អិ​ល​ធី​ឌី​ជា​ម្ចាស់​រោងចក្រ​ដូច​ជា​រោង​ចក្រ​បេតុង​និង​រោង​ចក្រ​ស្រាបៀ​រ​កម្ពុជា​។<br />\n	<br />\n	</span><span title="Chip Mong Land''s first project namely is under construction within the residence development area of 20 hectares.">គម្រោង ​ការ​ដំបូង​របស់​ក្រុមហ៊ុន​ជី​ប​ម៉ុង​ដីធ្លី​គឺ​ស្ថិត​នៅ​ក្រោម​ការ​សាង​សង់ ​នៅ​ក្នុង​តំបន់​អភិវឌ្ឍន៍​លំនៅ​ដ្ឋាន​ចំនួន 20 ហិ​ក​តា​។ </span><span title="brings varieties of luxurious private houses such as King Villas, Queen Villas, Twin Houses, Link Houses and Shop Houses.">បាន ​នាំ​មក​នូវ​ពូជ​របស់​ផ្ទះ​ឯកជន​ប្រណិត​ដូចជា​ព្រះមហាក្សត្រ​វីឡា​ព្រះ​ មហាក្សត្រី​វីឡា​, ភ្លោះ​ផ្ទះ​, គេហទំព័រ​ភ្ជាប់​ហាង​លក់​ផ្ទះ​និង​ផ្ទះ​។ </span><span title="These villas are well equipped with fashionable and modern furniture.">វីឡា​ទាំង​នេះ​ត្រូវ​បាន​បំពាក់​ផង​ដែរ​ជាមួយ​នឹង​គ្រឿង​សង្ហា​រឹម​ម៉ូត​និង​សម័យ​ទំនើប​។ </span><span title="Meanwhile, the company also builds a beautiful garden, a clubhouse, a swimming pool and many other leisure places for your different preferences.\n\n">ទន្ទឹម​នឹង​នេះ​ដែរ​ក្រុម​ហ៊ុន​នេះ​ផង​ដែរ​បាន​កសាង​ជា​សួនច្បារ​ស្រស់​ ស្អាត​មួយ clubhouse អាង​ហែល​ទឹក​និង​កន្លែង​កម្សាន្ត​ជា​ច្រើន​ទៀត​សម្រាប់​ចំណង់​ចំណូល​ចិត្ត​ ផ្សេង​គ្នា​របស់​អ្នក​។<br />\n	<br />\n	</span><span title="The Park Land Sen Sok has been conceived and constructed by Khmer and foreign skillful architects and engineers with years of experiences in the construction sector locally and internationally.\n\n">ឧទ្យាន​ដីធ្លី​សែន​សុខ​ត្រូវ​បាន​បង្កើត​និង​បាន​សាងសង់​ឡើង​ដោយ​ ស្ថាបត្យករ​និង​វិស្វករ​បរទេស​មាន​ជំនាញ​ខ្មែរ​និង​ជាមួយ​ឆ្នាំ​នៃ​ បទពិសោធន៍​ក្នុង​វិស័យ​សំណង់​ក្នុង​ស្រុក​និង​អន្តរជាតិ​។<br />\n	<br />\n	</span><span title="The Park Land Sen Sok is located in a safe suburb of Phnom Penh on street 1928 (Oknha Mong Rethth), Sangkat Phnom Penh Thmey, Khan Sen Sok, which can easily get access to schools, hospitals, shopping centers, prominent public institutions, private">ឧទ្យាន ​ដីធ្លី​សែន​សុខ​ត្រូវ​បាន​ស្ថិត​នៅ​ជា​យ​ក្រុង​ដែល​មាន​សុវត្ថិភាព​នៅ​ រាជធានី​ភ្នំពេញ​នៅ​លើ​ផ្លូវ 1928 (ឧកញ៉ា​ម៉ុង Rethth​)​, ​​សង្កាត់​ភ្នំពេញ​ថ្មី​, ខណ្ឌ​សែនសុខ​, ដែល​បាន​យ៉ាង​ងាយ​ស្រួល​អាច​ទទួល​បាន​ការ​ចូល​ដំណើរ​ការ​ទៅ​សាលារៀន​ មន្ទីរពេទ្យ​ផ្សារ​ទំនើប​ស្ថាប័ន​សាធារណៈ​លេចធ្លោ​ឯកជន </span><span title="companies and safe, convenient public infrastructure.\n\n">ក្រុមហ៊ុន​និង​មាន​សុវត្ថិភាព​, ហេដ្ឋារចនាសម្ព័ន្ធ​សាធារណៈ​ងាយ​ស្រួល​។<br />\n	<br />\n	</span><span title="BST''s customers can purchase their houses by paying in full and get a special discount or by mortgage from CML for up to 17 years or from banks.\n\n\n">មាន​អតិថិជន​របស់​អាច​ទិញ​រិ៍​ផ្ទះ​របស់​ពួក​គេ​នៅ​ក្នុង​ពេញ​ដោយ​ការ​បង់ ​ប្រាក់​និង​ទទួល​បាន​ការ​បញ្ចុះតម្លៃ​ពិសេស​ពី​ឬ​ដោយ​ការ​ប្រាក់​កម្ចី​ទិញ ​ផ្ទះ​រហូត​ដល់​ទៅ CML 17 ឆ្នាំ​ឬ​ពី​ធនាគារ​។</span></span></p>\n', '<p>\n	Am is a Cambodian property developer, which is a subsidiary of the BST, Ltd., one of the leading companies in Cambodia. BST, Ltd. is well known at importing and distributing of top quality construction materials from well-known manufacturers around the world. In addition, Chip Mong Group, Ltd. also owns factories, such as concrete factories and Cambodia Beer factory.</p>\n<p>\n	Chip Mong Land&rsquo;s first project namely is under construction within the residence development area of 20 hectares.&nbsp; brings varieties of luxurious private houses such as King Villas, Queen Villas, Twin Houses, Link Houses and Shop Houses. These villas are well equipped with fashionable and modern furniture. Meanwhile, the company also builds a beautiful garden, a clubhouse, a swimming pool and many other leisure places for your different preferences.</p>\n<p>\n	The Park Land Sen Sok has been conceived and constructed by Khmer and foreign skillful architects and engineers with years of experiences in the construction sector locally and internationally.</p>\n<p>\n	The Park Land Sen Sok is located in a safe suburb of Phnom Penh on street 1928 (Oknha Mong Rethth), Sangkat Phnom Penh Thmey, Khan Sen Sok, which can easily get access to schools, hospitals, shopping centers, prominent public institutions, private companies and safe, convenient public infrastructure.</p>\n<p>\n	BST&rsquo;s customers can purchase their houses by paying in full and get a special discount or by mortgage from CML for up to 17 years or from banks.</p>\n', 1, '', '', 0, '', '0000-00-00'),
(18, 'Promotion', 'ការផ្សព្វផ្សាយ', '<p>\n	<span style="font-size:16px;">ដើម្បីចូលរួមលើកស្ទួយ ក៏ដូចជាអភិវឌ្ឍនទីក្រុងភ្នំពេញ អោយស្របទៅតាមយុទ្ធសាស្រ្តរបស់រាជរដ្ឋាភិបាល ក្រុមហ៊ុន បាន និងកំពុងសាងសង់ លំនៅដ្ឋានដ៍ប្រណិតៗជាច្រើនកន្លែងសម្រាប់បម្រើជូនដល់អតិថិជនដែលប្រាថ្នាចង់​ បានការ​រស់នៅក្នុងលំនៅដ្ឋានបែបទំនើប និងទាន់សម័យជាលក្ខណៈឯកជន។​ ការសាងសង់គម្រោង&nbsp; គឺជាជោគជ័យទី១ របស់ក្រុមហ៊ុន ​ ហើយភាពជោគជ័យនេះ បានមកពីការគាំទ្រ ក៏ដូចជាការវាយតម្លៃ ខ្ពស់លើ​សំណង់លំនៅដ្ឋានរបស់អតិថិជនទាំង​អស់។ នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។ ក្រុមហ៊ុន ​ ​​​សូម​​​ថ្លែង​​​អំណរ​​​គុណយ៉ាងជ្រាលជ្រៅចំពោះ​​អតិថិជន​​​ទាំង​​​អស់​ដែល តែងតែជួយគាំទ្រសំណង់ លំនៅដ្ឋានរបស់ក្រុមហ៊ុន តាំងពីដើមរហូតមកដល់ពេលនេះ។​</span></p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenasique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio</p>\n', 1, '', '', 0, '', '0000-00-00'),
(21, 'Pre-K and K Program <br> Date: July 19, 2016', 'មត្តេយ្យសិក្សា', '<p>\n	<span style="font-size:16px;">ដើម្បីចូលរួមលើកស្ទួយ ក៏ដូចជាអភិវឌ្ឍនទីក្រុងភ្នំពេញ អោយស្របទៅតាមយុទ្ធសាស្រ្តរបស់រាជរដ្ឋាភិបាល ក្រុមហ៊ុន បាន និងកំពុងសាងសង់ លំនៅដ្ឋានដ៍ប្រណិតៗជាច្រើនកន្លែងសម្រាប់បម្រើជូនដល់អតិថិជនដែលប្រាថ្នាចង់​ បានការ​រស់នៅក្នុងលំនៅដ្ឋានបែបទំនើប និងទាន់សម័យជាលក្ខណៈឯកជន។​ ការសាងសង់គម្រោង&nbsp; គឺជាជោគជ័យទី១ របស់ក្រុមហ៊ុន ​ ហើយភាពជោគជ័យនេះ បានមកពីការគាំទ្រ ក៏ដូចជាការវាយតម្លៃ ខ្ពស់លើ​សំណង់លំនៅដ្ឋានរបស់អតិថិជនទាំង​អស់។ នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។ ក្រុមហ៊ុន ​ ​​​សូម​​​ថ្លែង​​​អំណរ​​​គុណយ៉ាងជ្រាលជ្រៅចំពោះ​​អតិថិជន​​​ទាំង​​​អស់​ដែល តែងតែជួយគាំទ្រសំណង់ លំនៅដ្ឋានរបស់ក្រុមហ៊ុន តាំងពីដើមរហូតមកដល់ពេលនេះ។​</span></p>\n', '<p>\n	At Westland international School, kindergarten years are very important time in children&rsquo;s total development; therefore , the programs essentially provide a variety of learning opportunities and experience which are emphasized on assessment information and the strengths, needs, and interests of the children. Children well-being is mainly focused; therefore, they perceive a happy and friendly happy learning environment. Furthermore, after taking kindergarten program at Westland International School, Children will have a strong foundation in reading and spelling the words correctly and are to communicate verbally in English with other learners.</p>\n', 1, '', '', 6, '', '0000-00-00'),
(22, 'Khmer K-12 Reading Passage <br> Date: July 30,2016', 'កម្មវិធីអំណាន', '<p>\n	<span style="font-size:16px;">ដើម្បីចូលរួមលើកស្ទួយ ក៏ដូចជាអភិវឌ្ឍនទីក្រុងភ្នំពេញ អោយស្របទៅតាមយុទ្ធសាស្រ្តរបស់រាជរដ្ឋាភិបាល ក្រុមហ៊ុន បាន និងកំពុងសាងសង់ លំនៅដ្ឋានដ៍ប្រណិតៗជាច្រើនកន្លែងសម្រាប់បម្រើជូនដល់អតិថិជនដែលប្រាថ្នាចង់​ បានការ​រស់នៅក្នុងលំនៅដ្ឋានបែបទំនើប និងទាន់សម័យជាលក្ខណៈឯកជន។​ ការសាងសង់គម្រោង&nbsp; គឺជាជោគជ័យទី១ របស់ក្រុមហ៊ុន ​ ហើយភាពជោគជ័យនេះ បានមកពីការគាំទ្រ ក៏ដូចជាការវាយតម្លៃ ខ្ពស់លើ​សំណង់លំនៅដ្ឋានរបស់អតិថិជនទាំង​អស់។ នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។ ក្រុមហ៊ុន ​ ​​​សូម​​​ថ្លែង​​​អំណរ​​​គុណយ៉ាងជ្រាលជ្រៅចំពោះ​​អតិថិជន​​​ទាំង​​​អស់​ដែល តែងតែជួយគាំទ្រសំណង់ លំនៅដ្ឋានរបស់ក្រុមហ៊ុន តាំងពីដើមរហូតមកដល់ពេលនេះ។​</span></p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenasique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio</p>\n', 1, '', '', 6, '', '0000-00-00'),
(23, 'WESTLAND FUNRUN<br> Date: August 05,2016', 'រត់ប្រណាំងដើម្បីសប្បុរសធម៌', '<p>\n	<span style="font-size:16px;">ដើម្បីចូលរួមលើកស្ទួយ ក៏ដូចជាអភិវឌ្ឍនទីក្រុងភ្នំពេញ អោយស្របទៅតាមយុទ្ធសាស្រ្តរបស់រាជរដ្ឋាភិបាល ក្រុមហ៊ុន បាន និងកំពុងសាងសង់ លំនៅដ្ឋានដ៍ប្រណិតៗជាច្រើនកន្លែងសម្រាប់បម្រើជូនដល់អតិថិជនដែលប្រាថ្នាចង់​ បានការ​រស់នៅក្នុងលំនៅដ្ឋានបែបទំនើប និងទាន់សម័យជាលក្ខណៈឯកជន។​ ការសាងសង់គម្រោង&nbsp; គឺជាជោគជ័យទី១ របស់ក្រុមហ៊ុន ​ ហើយភាពជោគជ័យនេះ បានមកពីការគាំទ្រ ក៏ដូចជាការវាយតម្លៃ ខ្ពស់លើ​សំណង់លំនៅដ្ឋានរបស់អតិថិជនទាំង​អស់។ នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។ ក្រុមហ៊ុន ​ ​​​សូម​​​ថ្លែង​​​អំណរ​​​គុណយ៉ាងជ្រាលជ្រៅចំពោះ​​អតិថិជន​​​ទាំង​​​អស់​ដែល តែងតែជួយគាំទ្រសំណង់ លំនៅដ្ឋានរបស់ក្រុមហ៊ុន តាំងពីដើមរហូតមកដល់ពេលនេះ។​</span></p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenasique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio</p>\n', 1, '', '', 6, '', '0000-00-00');
INSERT INTO `tblarticle` (`article_id`, `article_title`, `article_title_kh`, `content_kh`, `content`, `is_active`, `meta_keyword`, `meta_desc`, `location_id`, `icon`, `article_date`) VALUES
(24, 'Khmer K-12 Study Tour <br> Date: August 24,2016', 'ដំណើរកម្សាន្ត ថ្នាក់ចំណេះទូទៅខ្មែរ ', '<p>\n	<span style="font-size:16px;">ដើម្បីចូលរួមលើកស្ទួយ ក៏ដូចជាអភិវឌ្ឍនទីក្រុងភ្នំពេញ អោយស្របទៅតាមយុទ្ធសាស្រ្តរបស់រាជរដ្ឋាភិបាល ក្រុមហ៊ុន បាន និងកំពុងសាងសង់ លំនៅដ្ឋានដ៍ប្រណិតៗជាច្រើនកន្លែងសម្រាប់បម្រើជូនដល់អតិថិជនដែលប្រាថ្នាចង់​ បានការ​រស់នៅក្នុងលំនៅដ្ឋានបែបទំនើប និងទាន់សម័យជាលក្ខណៈឯកជន។​ ការសាងសង់គម្រោង&nbsp; គឺជាជោគជ័យទី១ របស់ក្រុមហ៊ុន ​ ហើយភាពជោគជ័យនេះ បានមកពីការគាំទ្រ ក៏ដូចជាការវាយតម្លៃ ខ្ពស់លើ​សំណង់លំនៅដ្ឋានរបស់អតិថិជនទាំង​អស់។ នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។ ក្រុមហ៊ុន ​ ​​​សូម​​​ថ្លែង​​​អំណរ​​​គុណយ៉ាងជ្រាលជ្រៅចំពោះ​​អតិថិជន​​​ទាំង​​​អស់​ដែល តែងតែជួយគាំទ្រសំណង់ លំនៅដ្ឋានរបស់ក្រុមហ៊ុន តាំងពីដើមរហូតមកដល់ពេលនេះ។​</span></p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenasique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio</p>\n', 1, '', '', 6, '', '0000-00-00'),
(25, 'Expert teachers', 'Expert teachers', '<p>\n	UI improvements were the one aspect of WordPress&#39;s future that everyo</p>\n', '<p>\n	UI improvements were the one aspect of WordPress&#39;s future that everyo</p>\n', 1, '', '', 7, 'fa fa-user', '0000-00-00'),
(26, 'Trusted certifications', 'Trusted certifications', '', '<p>\n	UI improvements were the one aspect of WordPress&#39;s future that everyo</p>\n', 1, '', '', 7, 'fa fa-list-alt', '0000-00-00'),
(27, 'Start Learning', 'Start Learning', '<p>\n	UI improvements were the one aspect of WordPress&#39;s future that everyo</p>\n', '<p>\n	UI improvements were the one aspect of WordPress&#39;s future that everyo</p>\n', 1, '', '', 7, 'fa fa-cogs', '0000-00-00'),
(28, 'ABOUT US', 'អំពីយើង', '<p>\n	សាលាអន្តរជាតិ វេស្ទលែនដ៍ គឺជាសាលា ឯកជន អរន្តជាតិមួយដែលបានចុះអនុសរណជាមួយ ក្រសួងអប់រំ និងកីឡា ក្នុងឆ្នាំ ២០១១ ។ សាលាអន្តរជាតិវេស្ទលែនដ៍ មានទីតាំងស្ថិតនៅចន្លោះពីក្រុងតាខ្មៅ និងរាជធានី ភ្នំពេញុ ហើយក៏ជា សាលាអន្តរជាតិដែលមានគុណភាពល្អមួយ ដែលស្ថិតនៅក្នុងចំណោមសាលាអន្តរជាតិ ក្នុងស្រុកដែរ ។ ពួកយើងមានគោលដៅ ផ្តល់ជូនសិស្សានុសិស្ស​ ជាមួយចំណឹងដឹង ជំនាញ និងសីលធម៌ ......</p>\n', '<p>\n	Westland international school is a registered private international school with the Ministry of Education, Youth and Sports in year 2011. Our school based border between Takhmau Town and Phnom Penh, is one of the country&rsquo;s quality international schools. We aim to provide our students with the knowledge, skills and attitude required to contribute towards and play major roles in a globalized and knowledge-based economy. Our vision is to become the leading international school in the country by 2020 through excellence in education, training, community engagement services and student mobility. Our school activities are focused on developing students in shaping behavior, thinking skills, ethics, independence, and knowledge with our industrial partners and universities.</p>\n', 1, '', '', 0, '', '0000-00-00'),
(29, 'BOARD OF DIRECTOR', 'សាររបស់ថ្នាក់ដឹកនាំ', '', '<p>\n	<strong>MESSAGE FROM THE BOARD OF DIRECTORS<br />\n	</strong></p>\n<p>\n	<strong>Dear Parent of a Prospective WESTLAND Student</strong></p>\n<p>\n	On behalf of&nbsp;<strong>WESTLAND International School</strong> we would like to thank you for your interest in our school. We are very proud of our school and we consider it to be the highest endorsement that a school may receive when a parent chooses to enroll their child in that school. Choosing&nbsp;<strong>WESTLAND International School</strong> as your child&rsquo;s school means that they will be part of one of the fastest growing International Schools in Cambodia. We are proud of the quality of education our students receive and the accomplishments of our graduates. Of <strong>WESTLAND International School</strong>&rsquo;s first high school graduating class (2012-13) five of the six graduates went on to university (two in Phnom Penh and the others in Australia, Canada, and Korea); the graduate who chose not to enroll in university is working as a teacher in Phnom Penh.</p>\n<p>\n	<strong>WESTLAND</strong><strong>International School</strong>&nbsp;is a private, non-sectarian international school that opened in 2011 with the mission to cater to all students without prejudice, and to enable the &ldquo;whole child&rdquo; (physical, mental, moral, and social) to master local and global competence and citizenship. The Khmer curriculum elective, which includes workbooks developed by&nbsp;<strong>WESTLAND International School</strong> for Kindergarten &ndash; Grade 12, has been recognized by the Ministry of Education, Youth, and Sport. Our school values diversity and global citizenship, which is reflected in the enrollment of our student body representing more than 18 countries and 12 primary languages spoken in the student&rsquo;s homes. While some may see this as a challenge for educators, at&nbsp;<strong>WESTLAND International School</strong> we see this as a rich opportunity for our students to learn side-by-side with peers from diverse backgrounds, thereby enriching their education experience and global competence.</p>\n<p>\n	&nbsp;</p>\n<p>\n	&nbsp;</p>\n<p>\n	Sincerely,<br />\n	WESTLAND Board of Directors</p>\n<p>\n	www.westlandschool-edu.com:2095</p>\n', 1, '', '', 0, '', '0000-00-00'),
(30, 'Special English Program ( SEP )', 'ថ្នាក់ភាសាអង់គ្លេសពិសេស', '', '<p>\n	This course will provide student ...........................</p>\n', 1, '', '', 4, '', '0000-00-00'),
(31, 'School Facilities', 'សំភារៈប្រើប្រាស់', '', '', 1, '', '', 0, '', '0000-00-00');
INSERT INTO `tblarticle` (`article_id`, `article_title`, `article_title_kh`, `content_kh`, `content`, `is_active`, `meta_keyword`, `meta_desc`, `location_id`, `icon`, `article_date`) VALUES
(32, 'School Fee', 'School Fee', '<h3 style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-family: Merriweather; font-size: 20px; font-weight: normal; line-height: inherit; vertical-align: baseline; color: rgb(73, 73, 73);">\n	Registration, Re-enrollment &amp; Tuition Fee</h3>\n<table cellpadding="0" cellspacing="0" style="margin: 0px; padding: 0px; border: 0px solid rgb(51, 51, 51); font-family: ''Droid Sans''; line-height: inherit; vertical-align: baseline; border-spacing: 1px; width: 950px; color: rgb(102, 102, 102);" width="100%">\n	<tbody style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				&nbsp;</td>\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				&nbsp;</td>\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				Kindergarten<br />\n				K3 &ndash; K4</td>\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				Kindergarten<br />\n				K5</td>\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				Elementary<br />\n				G1 &ndash; G4</td>\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				Elementary<br />\n				G5</td>\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				Middle<br />\n				G6 &ndash; G8</td>\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				High<br />\n				G9 &ndash; G12</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				Registration Fee* &ndash; (New Students)</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				One time</td>\n			<td class="blue2" colspan="6" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 400</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				Re-enrollment*</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				Each year</td>\n			<td class="blue2" colspan="6" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 50 / 150 / 250 (depending on re-enrollment date)**</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue1" rowspan="8" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				Tuition fee<br />\n				1st of September 2015&nbsp;<br />\n				until 30th of June 2016</td>\n			<td class="gold" colspan="7" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(215, 180, 105); color: rgb(255, 255, 255);">\n				FULL-TIME</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				Month</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 319</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 340</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 355</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 355</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 409</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 464</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				Semster</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 1,595</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 1,700</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 1,775</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 1,775</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 2,045</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 2,320</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				Year</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 3,190</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 3,400</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 3,550</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 3,550</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 4,090</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 4,640</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="gold" colspan="7" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(215, 180, 105); color: rgb(255, 255, 255);">\n				PART-TIME</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				Month</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 223</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 231</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 264</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				Semster</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 1,115</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 1,155</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 1,320</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				Year</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 2,230</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 2,310</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 2,640</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n		</tr>\n	</tbody>\n</table>\n<p style="margin: 0px 0px 20px; padding: 0px; border: 0px; font-family: ''Droid Sans''; line-height: inherit; vertical-align: baseline; color: rgb(102, 102, 102);">\n	<br />\n	&nbsp;</p>\n', '<h3 style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-family: Merriweather; font-size: 20px; font-weight: normal; line-height: inherit; vertical-align: baseline; color: rgb(73, 73, 73);">\n	Registration, Re-enrollment &amp; Tuition Fee</h3>\n<table cellpadding="0" cellspacing="0" style="margin: 0px; padding: 0px; border: 0px solid rgb(51, 51, 51); font-family: ''Droid Sans''; line-height: inherit; vertical-align: baseline; border-spacing: 1px; width: 950px; color: rgb(102, 102, 102);" width="100%">\n	<tbody style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				&nbsp;</td>\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				&nbsp;</td>\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				Kindergarten<br />\n				K3 &ndash; K4</td>\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				Kindergarten<br />\n				K5</td>\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				Elementary<br />\n				G1 &ndash; G4</td>\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				Elementary<br />\n				G5</td>\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				Middle<br />\n				G6 &ndash; G8</td>\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				High<br />\n				G9 &ndash; G12</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				Registration Fee* &ndash; (New Students)</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				One time</td>\n			<td class="blue2" colspan="6" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 400</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue1" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				Re-enrollment*</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				Each year</td>\n			<td class="blue2" colspan="6" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 50 / 150 / 250 (depending on re-enrollment date)**</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue1" rowspan="8" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(0, 158, 224); color: rgb(255, 255, 255);">\n				Tuition fee<br />\n				1st of September 2015&nbsp;<br />\n				until 30th of June 2016</td>\n			<td class="gold" colspan="7" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(215, 180, 105); color: rgb(255, 255, 255);">\n				FULL-TIME</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				Month</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 319</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 340</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 355</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 355</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 409</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 464</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				Semster</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 1,595</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 1,700</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 1,775</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 1,775</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 2,045</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 2,320</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				Year</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 3,190</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 3,400</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 3,550</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 3,550</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 4,090</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 4,640</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="gold" colspan="7" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(215, 180, 105); color: rgb(255, 255, 255);">\n				PART-TIME</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				Month</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 223</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 231</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 264</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				Semster</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 1,115</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 1,155</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 1,320</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n		</tr>\n		<tr style="margin: 0px; padding: 0px; border: 0px rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				Year</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 2,230</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 2,310</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				USD 2,640</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-top-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: solid; border-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n			<td class="blue2" style="margin: 0px; padding: 3px 3px 3px 10px; border-width: 0px; border-top-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: middle; background-color: rgb(189, 228, 247);">\n				NA</td>\n		</tr>\n	</tbody>\n</table>\n<p style="margin: 0px 0px 20px; padding: 0px; border: 0px; font-family: ''Droid Sans''; line-height: inherit; vertical-align: baseline; color: rgb(102, 102, 102);">\n	<br />\n	&nbsp;</p>\n', 1, '', '', 0, '', '0000-00-00');
INSERT INTO `tblarticle` (`article_id`, `article_title`, `article_title_kh`, `content_kh`, `content`, `is_active`, `meta_keyword`, `meta_desc`, `location_id`, `icon`, `article_date`) VALUES
(33, 'Test', 'សាកល្បង', '<p>\n	សាក</p>\n', '<p>\n	test</p>\n', 1, '', '', 6, '', '0000-00-00'),
(34, 'test2', 'សាកទី២', '<p>\n	សាកទី២</p>\n', '<p>\n	test2</p>\n', 1, '', '', 6, '', '0000-00-00'),
(35, 'Test Information', 'សាក', '<p>\n	សាកល្បង</p>\n', '<div id="cke_pastebin">\n	&nbsp;</div>\n<div id="cke_pastebin">\n	Do your homework. Teachers give you homework for a reason. It is to review what you have learned that day. Take advantage of your free time. Do your homework on the way home from school and in any spare time. Unless you have a kind of school that gives you homework for reasonability and not to review. But most schools have it to review. Do as much at school as you can; you have the teacher there in case you need help. Make sure not to rush on your homework, to check over it, and to be neat. If you really want to be a successful student, you should know right from the beginning when you want to be great at anything, and when you have to put up with things that just don&#39;t seem fair. Doing your homework is not a big deal. Remember, homework can also help you develop good habits and attitudes. Always do what is asked of you.If you really want to be a successful student, you should know right from the beginning when you want to be great at anything, and when you have to put up with things that just don&#39;t seem fair. Doing your homework is not a big deal. Remember, homework can also help you develop good habits and attitudes. Always do what is asked of you.</div>\n', 1, '', '', 9, '', '2016-08-05'),
(36, 'Hello', 'សួស្តី', '<p>\n	សួស្តី</p>\n', '<div id="cke_pastebin">\n	&nbsp;</div>\n<div id="cke_pastebin">\n	Do your homework. Teachers give you homework for a reason. It is to review what you have learned that day. Take advantage of your free time. Do your homework on the way home from school and in any spare time. Unless you have a kind of school that gives you homework for reasonability and not to review. But most schools have it to review. Do as much at school as you can; you have the teacher there in case you need help. Make sure not to rush on your homework, to check over it, and to be neat. If you really want to be a successful student, you should know right from the beginning when you want to be great at anything, and when you have to put up with things that just don&#39;t seem fair. Doing your homework is not a big deal. Remember, homework can also help you develop good habits and attitudes. Always do what is asked of you.</div>\n', 1, '', '', 9, '', '2016-08-01'),
(37, 'Shool', 'សាលា', '<p>\n	សាលា</p>\n', '<div id="cke_pastebin">\n	&nbsp;</div>\n<div id="cke_pastebin">\n	Do your homework. Teachers give you homework for a reason. It is to review what you have learned that day. Take advantage of your free time. Do your homework on the way home from school and in any spare time. Unless you have a kind of school that gives you homework for reasonability and not to review. But most schools have it to review. Do as much at school as you can; you have the teacher there in case you need help. Make sure not to rush on your homework, to check over it, and to be neat. If you really want to be a successful student, you should know right from the beginning when you want to be great at anything, and when you have to put up with things that just don&#39;t seem fair. Doing your homework is not a big deal. Remember, homework can also help you develop good habits and attitudes. Always do what is asked of you.</div>\n', 1, '', '', 9, '', '2016-08-02'),
(38, 'BBU', 'បល', '<p>\n	បល</p>\n', '<p>\n	bbu</p>\n', 1, '', '', 0, '', '2016-08-12'),
(39, 'EVENT GALLERY', 'EVENT GALLERY', '<p>\n	<span style="color: rgb(50, 56, 59); font-family: &quot;times new roman&quot;; font-size: 20px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: rgb(255, 255, 255);">WESTLAND international school is a registered private international school with the Ministry of Education, Youth and Sports in year 2011. Our school based border between Takhmau Town and Phnom Penh, is one of the country&rsquo;s quality international schools. We aim to provide our students with the knowledge, skills and attitude required to contribute towards and play major roles in a globalized and knowledge-based economy. Our vision is to become the leading international school in the country by 2020 through excellence in education, training, community engagement services and student mobility. Our school activities are focused on developing students in shaping behavior, thinking skills, ethics, independence, and knowledge with our industrial partners and universities.</span></p>\n', '<p>\n	<span style="color: rgb(50, 56, 59); font-family: &quot;times new roman&quot;; font-size: 20px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: rgb(255, 255, 255);">WESTLAND international school is a registered private international school with the Ministry of Education, Youth and Sports in year 2011. Our school based border between Takhmau Town and Phnom Penh, is one of the country&rsquo;s quality international schools. We aim to provide our students with the knowledge, skills and attitude required to contribute towards and play major roles in a globalized and knowledge-based economy. Our vision is to become the leading international school in the country by 2020 through excellence in education, training, community engagement services and student mobility. Our school activities are focused on developing students in shaping behavior, thinking skills, ethics, independence, and knowledge with our industrial partners and universities.</span></p>\n', 1, '', '', 0, '', '2016-08-12'),
(40, 'ACADEMIC PROGRAME', 'ACADEMIC PROGRAME', '<p>\n	<span style="color: rgb(50, 56, 59); font-family: &quot;times new roman&quot;; font-size: 20px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: rgb(255, 255, 255);">WESTLAND international school is a registered private international school with the Ministry of Education, Youth and Sports in year 2011. Our school based border between Takhmau Town and Phnom Penh, is one of the country&rsquo;s quality international schools. We aim to provide our students with the knowledge, skills and attitude required to contribute towards and play major roles in a globalized and knowledge-based economy. Our vision is to become the leading international school in the country by 2020 through excellence in education, training, community engagement services and student mobility. Our school activities are focused on developing students in shaping behavior, thinking skills, ethics, independence, and knowledge with our industrial partners and universities.</span></p>\n', '<p>\n	<span style="color: rgb(50, 56, 59); font-family: &quot;times new roman&quot;; font-size: 20px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: rgb(255, 255, 255);">WESTLAND international school is a registered private international school with the Ministry of Education, Youth and Sports in year 2011. Our school based border between Takhmau Town and Phnom Penh, is one of the country&rsquo;s quality international schools. We aim to provide our students with the knowledge, skills and attitude required to contribute towards and play major roles in a globalized and knowledge-based economy. Our vision is to become the leading international school in the country by 2020 through excellence in education, training, community engagement services and student mobility. Our school activities are focused on developing students in shaping behavior, thinking skills, ethics, independence, and knowledge with our industrial partners and universities.</span></p>\n', 1, '', '', 0, '', '2016-08-12'),
(41, 'PHOTO GARLERY', 'PHOTO GARLERY', '<p>\n	As part of WESTLAND&#39;s cycle of condinuous improvment, it is important that the school collects<br />\n	perception day from parents. This process is also an import part of the Western Association of School...</p>\n', '<p>\n	As part of WESTLAND&#39;s cycle of condinuous improvment, it is important that the school collects<br />\n	perception day from parents. This process is also an import part of the Western Association of School...</p>\n', 1, '', '', 0, '', '2016-08-12'),
(43, 'rorn', 'rorn', '<p>\n	rorn</p>\n', '<p>\n	rorn</p>\n', 1, '', '', 0, '', '2016-08-15'),
(44, 'School', 'School', '<p>\n	School</p>\n', '<p>\n	School</p>\n', 1, '', '', 10, '', '2016-08-16');

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
(25, 'Banner 2', 1, 1, 2, ''),
(26, 'Banner 5', 1, 1, 5, ''),
(28, 'Banner 1', 1, 1, 1, ''),
(29, 'Banner 3', 1, 1, 3, ''),
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
  `gallery_title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `gallery_type` int(1) NOT NULL,
  `article_id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `home` int(1) NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=136 ;

--
-- Dumping data for table `tblgallery`
--

INSERT INTO `tblgallery` (`gallery_id`, `gallery_title`, `url`, `gallery_type`, `article_id`, `order`, `home`) VALUES
(39, '', 'topic3.jpg', 0, 15, 0, 0),
(47, 'HongHeas', 'L4df3u3OtGA', 1, 0, 3, 0),
(48, 'TV5', '7f1KTuSDEUM', 1, 0, 4, 0),
(65, '', 'westland.jpg', 0, 21, 0, 0),
(73, '', '2.JPG', 2, 0, 0, 0),
(74, '', 'IMG_1871.JPG', 2, 0, 0, 0),
(75, '', 'IMG_1889.JPG', 2, 0, 0, 0),
(77, '', 'Info.jpg', 0, 2, 0, 0),
(85, '', '02.jpg', 0, 12, 0, 0),
(87, '', '03.jpg', 0, 13, 0, 0),
(88, '', '05.jpg', 0, 14, 0, 0),
(90, '', '06.jpg', 0, 1, 0, 0),
(91, '', 'IMG_0012.JPG', 2, 0, 0, 0),
(92, '', 'IMG_0114.JPG', 2, 0, 0, 0),
(93, '', 'IMG_0149.JPG', 2, 0, 0, 0),
(94, '', 'IMG_0162.JPG', 2, 0, 0, 0),
(95, '', 'IMG_0110.JPG', 2, 0, 0, 0),
(96, '', 'IMG_0130.JPG', 2, 0, 0, 0),
(97, '', 'IMG_0144.JPG', 2, 0, 0, 0),
(98, '', 'IMG_0167.JPG', 2, 0, 0, 0),
(99, '', 'IMG_0220.JPG', 2, 0, 0, 0),
(100, '', 'IMG_0247.JPG', 2, 0, 0, 0),
(101, '', 'IMG_0340.JPG', 2, 0, 0, 0),
(102, '', 'IMG_0342.JPG', 2, 0, 0, 0),
(103, '', 'IMG_0350.JPG', 2, 0, 0, 0),
(104, '', 'IMG_0374.JPG', 2, 0, 0, 0),
(105, '', '07.jpg', 0, 22, 0, 0),
(106, '', '08.jpg', 0, 23, 0, 0),
(107, '', '09.jpg', 0, 24, 0, 0),
(108, '', 'Test.jpg', 0, 9, 0, 0),
(109, '', '07.jpg', 0, 10, 0, 0),
(110, '', '09.jpg', 0, 16, 0, 0),
(111, 'WESTLAND Charity ', 'IVOBEl2RUAo', 1, 0, 2, 0),
(112, '4th WESTLAND Field Trip to vKirirom Pine Resort ', 'yifJOg6s_Is', 1, 0, 1, 1),
(113, '3rd WESTLAND Science Fair ', 'Uv4epExT-bs', 1, 0, 5, 0),
(114, '', 'Info.jpg', 0, 30, 0, 0),
(120, '', '1.jpg', 0, 31, 0, 0),
(121, '', '2.jpg', 0, 31, 0, 0),
(122, '', '3.jpg', 0, 31, 0, 0),
(123, '', 'technology_in_schools.jpg', 0, 32, 0, 0),
(124, '', 'course1.jpg', 0, 33, 0, 0),
(125, '', 'course3.jpg', 0, 34, 0, 0),
(126, '', '13600305_549697228536302_8641145987184095274_n.jpg', 0, 11, 0, 0),
(128, '', '13600305_549697228536302_8641145987184095274_n.jpg', 0, 36, 0, 0),
(129, '', '13592413_549699578536067_6526573163025707556_n.jpg', 0, 37, 0, 0),
(130, '', '13592414_325819454416772_7451992932185094388_n.jpg', 0, 35, 0, 0),
(131, '', '13592413_549699578536067_6526573163025707556_n.jpg', 0, 38, 0, 0),
(132, '', '13617976_1001132963335051_967817804_n.jpg', 0, 39, 0, 0),
(133, '', '13606754_549697618536263_8771004310916295483_n.jpg', 0, 40, 0, 0),
(134, '', '13619843_1733223150223866_3237272157919926255_n.jpg', 0, 41, 0, 0),
(135, '', '13592413_549699578536067_6526573163025707556_n.jpg', 0, 44, 0, 0);

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
(3, 'Event', 'category', 1, 'ព្រិត្តិការណ៍'),
(4, 'Next Course', 'category', 1, 'វត្តចុងក្រោយ'),
(5, 'Main Menu', 'menu', 1, ''),
(6, 'Upcoming Event', 'category', 1, 'គ្រូរបស់យើង'),
(7, 'Jobs', 'category', 1, 'សេវាកម្មរបស់យើង'),
(8, 'Search Result', '', 1, 'លទ្ធផលនៃការស្វែងរក'),
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `tblmenus`
--

INSERT INTO `tblmenus` (`menu_id`, `menu_name`, `description`, `lineage`, `parentid`, `level`, `order`, `is_active`, `created_date`, `created_by`, `layout_id`, `modified_by`, `modified_date`, `menu_name_kh`, `article_id`, `location_id`, `menu_type`) VALUES
(23, 'Service', NULL, '23', 0, 0, 2, 1, NULL, NULL, 1, NULL, NULL, 'សេវាកម្ម', 17, 5, '3'),
(34, 'Our Course', NULL, '34', 0, 0, 2, 1, NULL, NULL, 2, NULL, NULL, 'អំពីយើង', 16, 5, '4'),
(35, 'Service 1', NULL, '23-35', 23, 1, 2, 0, NULL, NULL, 0, NULL, NULL, 'អំពីយើង', 17, 5, 'article'),
(32, 'Events', NULL, '32', 0, 0, 2, 1, NULL, NULL, 0, NULL, NULL, 'ព្រិត្តិការណ៍', 0, 5, '3'),
(31, 'About Us', NULL, '31', 0, 0, 1, 1, NULL, NULL, 0, NULL, NULL, 'អំពីយើង', 16, 5, 'article'),
(36, 'ADMISSIONS', NULL, '36', 0, 0, 1, 1, NULL, NULL, 0, NULL, NULL, 'ថ្លៃចូលរៀន', 0, 5, 'article'),
(37, 'ACADEMICS', NULL, '37', 0, 0, 1, 1, NULL, NULL, 0, NULL, NULL, 'ការសិក្សា', 0, 5, 'article'),
(38, 'COMMUNITY', NULL, '38', 0, 0, 1, 1, NULL, NULL, 0, NULL, NULL, 'សហគមន៏', 0, 5, 'article'),
(39, 'School History', NULL, '31-39', 31, 1, 2, 1, NULL, NULL, 2, NULL, NULL, 'School History', 1, 5, 'article'),
(40, 'President', NULL, '31-40', 31, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'President', 0, 5, 'article'),
(41, 'Board of Directors', NULL, '31-41', 31, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'Board of Directors', 29, 5, 'article'),
(42, 'Management Team', NULL, '31-42', 31, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'Management Team', 0, 5, 'article'),
(43, 'Staff Directory', NULL, '31-43', 31, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'Staff Directory', 0, 5, 'article'),
(44, 'Testimonials and Achievements', NULL, '31-44', 31, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'Testimonials and Achievements', 0, 5, 'article'),
(45, 'School Partners', NULL, '31-45', 31, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'School Partners', 0, 5, 'article'),
(46, 'Study Abroad Center', NULL, '31-46', 31, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'Study Abroad Center', 0, 5, 'article'),
(47, 'School Facilities ', NULL, '31-47', 31, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'School Facilities ', 31, 5, 'article'),
(48, 'Directions', NULL, '31-48', 31, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'Directions', 0, 5, 'article'),
(49, 'Contact WINS', NULL, '31-49', 31, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'Contact WINS', 0, 5, 'article'),
(50, 'Enrolment', NULL, '36-50', 36, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'Enrolment', 18, 5, 'article'),
(51, 'School Fee', NULL, '36-51', 36, 1, 2, 1, NULL, NULL, 1, NULL, NULL, 'School Fee', 32, 5, 'article'),
(52, 'School Bus Service', NULL, '36-52', 36, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'School Bus Service', 0, 5, 'Please select'),
(53, 'Day-care service', NULL, '36-53', 36, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'Day-care service', 0, 5, 'article'),
(54, 'Khmer Academic Program', NULL, '37-54', 37, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'Khmer Academic Program', 0, 5, 'article'),
(55, 'International K-12 Program', NULL, '37-55', 37, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'International K-12 Program', 0, 5, 'article'),
(56, 'General English Program', NULL, '37-56', 37, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'General English Program', 0, 5, 'article'),
(57, 'AEP Program', NULL, '37-57', 37, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'AEP Program', 0, 5, 'article'),
(58, 'EAP Program', NULL, '37-58', 37, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'EAP Program', 0, 5, 'article'),
(59, 'TOEFL Preparation Course', NULL, '37-59', 37, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'TOEFL Preparation Course', 0, 5, 'article'),
(60, 'IELTS Preparation Course', NULL, '37-60', 37, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'IELTS Preparation Course', 0, 5, 'article'),
(61, 'Computer Training', NULL, '37-61', 37, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'Computer Training', 0, 5, 'article'),
(62, 'Social Activities/Events', NULL, '38-62', 38, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'Social Activities/Events', 0, 5, 'article'),
(63, 'Charity', NULL, '38-63', 38, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'Charity', 0, 5, 'article'),
(64, 'School Activities', NULL, '38-64', 38, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'School Activities', 0, 5, 'article'),
(65, 'Workshops', NULL, '38-65', 38, 1, 2, 1, NULL, NULL, 0, NULL, NULL, 'Workshops', 0, 5, 'article'),
(66, 'Job', NULL, '66', 0, 0, 8, 1, NULL, NULL, 0, NULL, NULL, 'ការងារ', 1, 5, 'article');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=75 ;

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
(74, 'Gallery', 'gallery/gallery', 15, 2, 1, 1, 1, 1, 1, 1, 1, '2016-03-04 06:07:43', 1, 'fa-bars', NULL);

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
