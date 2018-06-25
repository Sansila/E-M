/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : e_m_db

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-06-25 15:42:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_user
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user` (
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
) ENGINE=MyISAM AUTO_INCREMENT=1498 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_user
-- ----------------------------
INSERT INTO `admin_user` VALUES ('4', 'admin', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com', '2018-06-23 03:13:49', '192.168.0.106', '2015-01-29 15:10:34', null, null, null, '1', 'System', 'Administrator', '1', '1', null);
INSERT INTO `admin_user` VALUES ('5', 'chetra', '202cb962ac59075b964b07152d234b70', 'eing.chetra@gmail.com', '2018-06-23 03:13:49', '192.168.0.106', '2015-02-02 17:26:36', null, null, null, '2', 'eing', 'chetra', '0', '0', null);
INSERT INTO `admin_user` VALUES ('1497', 'store', 'e10adc3949ba59abbe56e057f20f883e', 'store@green.com', '2018-06-23 03:13:49', '192.168.0.106', '2015-06-26 08:10:54', null, null, null, '21', 'Green', 'Store', '0', '1', null);

-- ----------------------------
-- Table structure for ci_sessions
-- ----------------------------
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_sessions
-- ----------------------------
INSERT INTO `ci_sessions` VALUES ('5a8ea8cb975267e980e7c112d5692bfc', '192.168.0.106', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '1529730768', 'a:14:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:7:\"english\";s:6:\"userid\";s:1:\"4\";s:9:\"user_name\";s:5:\"admin\";s:8:\"password\";s:32:\"202cb962ac59075b964b07152d234b70\";s:6:\"roleid\";s:1:\"1\";s:9:\"last_name\";s:6:\"System\";s:10:\"first_name\";s:13:\"Administrator\";s:10:\"last_visit\";s:19:\"2018-06-23 02:29:54\";s:13:\"last_visit_ip\";s:13:\"192.168.0.106\";s:9:\"moduleids\";a:6:{i:0;a:1:{s:8:\"moduleid\";s:2:\"11\";}i:1;a:1:{s:8:\"moduleid\";s:1:\"1\";}i:2;a:1:{s:8:\"moduleid\";s:1:\"7\";}i:3;a:1:{s:8:\"moduleid\";s:2:\"10\";}i:4;a:1:{s:8:\"moduleid\";s:2:\"15\";}i:5;a:1:{s:8:\"moduleid\";s:2:\"12\";}}s:12:\"ModuleInfors\";a:6:{i:11;a:4:{s:8:\"moduleid\";s:2:\"11\";s:11:\"module_name\";s:7:\"Article\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:1;a:0:{}i:7;a:4:{s:8:\"moduleid\";s:1:\"7\";s:11:\"module_name\";s:4:\"Menu\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:10;a:0:{}i:15;a:0:{}i:12;a:4:{s:8:\"moduleid\";s:2:\"12\";s:11:\"module_name\";s:6:\"Banner\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}}s:10:\"PageInfors\";a:5:{i:11;a:2:{i:65;a:14:{s:6:\"pageid\";s:2:\"65\";s:9:\"page_name\";s:12:\"Article List\";s:4:\"link\";s:13:\"article/index\";s:8:\"moduleid\";s:2:\"11\";s:5:\"order\";s:1:\"4\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 16:46:23\";s:4:\"icon\";s:7:\"fa-bars\";}i:66;a:14:{s:6:\"pageid\";s:2:\"66\";s:9:\"page_name\";s:15:\"Add New Article\";s:4:\"link\";s:11:\"article/add\";s:8:\"moduleid\";s:2:\"11\";s:5:\"order\";s:1:\"5\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 16:47:08\";s:4:\"icon\";s:7:\"fa-bars\";}}i:1;a:4:{i:5;a:14:{s:6:\"pageid\";s:1:\"5\";s:9:\"page_name\";s:4:\"Page\";s:4:\"link\";s:12:\"setting/page\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"0\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"0\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"0\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 17:00:01\";s:4:\"icon\";s:9:\"fa-file-o\";}i:6;a:14:{s:6:\"pageid\";s:1:\"6\";s:9:\"page_name\";s:12:\"User Profile\";s:4:\"link\";s:12:\"setting/user\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"0\";s:9:\"is_export\";s:1:\"0\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:56:20\";s:4:\"icon\";s:7:\"fa-user\";}i:7;a:14:{s:6:\"pageid\";s:1:\"7\";s:9:\"page_name\";s:9:\"User Role\";s:4:\"link\";s:12:\"setting/role\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:57:09\";s:4:\"icon\";s:7:\"fa-user\";}i:8;a:14:{s:6:\"pageid\";s:1:\"8\";s:9:\"page_name\";s:11:\"Role Access\";s:4:\"link\";s:18:\"setting/permission\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"0\";s:7:\"is_show\";s:1:\"0\";s:8:\"is_print\";s:1:\"0\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:56:46\";s:4:\"icon\";s:9:\"fa-wrench\";}}i:7;a:4:{i:63;a:14:{s:6:\"pageid\";s:2:\"63\";s:9:\"page_name\";s:9:\"Menu List\";s:4:\"link\";s:10:\"menu/index\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"10\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 15:53:36\";s:4:\"icon\";s:7:\"fa-bars\";}i:64;a:14:{s:6:\"pageid\";s:2:\"64\";s:9:\"page_name\";s:12:\"Add New Menu\";s:4:\"link\";s:8:\"menu/add\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"11\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 15:53:58\";s:4:\"icon\";s:7:\"fa-bars\";}i:75;a:14:{s:6:\"pageid\";s:2:\"75\";s:9:\"page_name\";s:16:\"Add New Category\";s:4:\"link\";s:12:\"category/add\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"12\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2017-12-22 13:42:09\";s:4:\"icon\";s:7:\"fa-bars\";}i:76;a:14:{s:6:\"pageid\";s:2:\"76\";s:9:\"page_name\";s:13:\"Category List\";s:4:\"link\";s:14:\"category/index\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"13\";s:9:\"is_insert\";s:2:\"11\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2017-12-22 13:42:54\";s:4:\"icon\";s:7:\"fa-bars\";}}i:10;a:2:{i:67;a:14:{s:6:\"pageid\";s:2:\"67\";s:9:\"page_name\";s:12:\"Product List\";s:4:\"link\";s:13:\"product/index\";s:8:\"moduleid\";s:2:\"10\";s:5:\"order\";s:1:\"1\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-12 17:10:07\";s:4:\"icon\";s:7:\"fa-bars\";}i:68;a:14:{s:6:\"pageid\";s:2:\"68\";s:9:\"page_name\";s:16:\"Add New Products\";s:4:\"link\";s:11:\"product/add\";s:8:\"moduleid\";s:2:\"10\";s:5:\"order\";s:1:\"2\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-12 17:10:46\";s:4:\"icon\";s:7:\"fa-bars\";}}i:12;a:2:{i:69;a:14:{s:6:\"pageid\";s:2:\"69\";s:9:\"page_name\";s:11:\"Banner List\";s:4:\"link\";s:20:\"setup/setupads/index\";s:8:\"moduleid\";s:2:\"12\";s:5:\"order\";s:1:\"0\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-02-05 23:16:13\";s:4:\"icon\";s:7:\"fa-bars\";}i:70;a:14:{s:6:\"pageid\";s:2:\"70\";s:9:\"page_name\";s:14:\"Add New Banner\";s:4:\"link\";s:18:\"setup/setupads/add\";s:8:\"moduleid\";s:2:\"12\";s:5:\"order\";s:1:\"1\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-02-05 23:15:42\";s:4:\"icon\";s:7:\"fa-bars\";}}}s:10:\"PageAction\";a:5:{i:11;a:2:{i:65;s:1:\"1\";i:66;s:1:\"1\";}i:1;a:4:{i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"0\";}i:7;a:4:{i:63;s:1:\"1\";i:64;s:1:\"1\";i:75;s:1:\"1\";i:76;s:1:\"1\";}i:10;a:2:{i:67;s:1:\"1\";i:68;s:1:\"1\";}i:12;a:2:{i:69;s:1:\"1\";i:70;s:1:\"1\";}}}');
INSERT INTO `ci_sessions` VALUES ('2e56499669ae077fc514ebcb2e974400', '192.168.0.106', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '1529915849', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:7:\"english\";}');

-- ----------------------------
-- Table structure for dashboard_item
-- ----------------------------
DROP TABLE IF EXISTS `dashboard_item`;
CREATE TABLE `dashboard_item` (
  `dashid` int(11) NOT NULL AUTO_INCREMENT,
  `dash_item` varchar(255) DEFAULT NULL,
  `moduleid` int(11) DEFAULT NULL,
  `link_pageid` int(11) DEFAULT NULL,
  `is_show` int(11) NOT NULL DEFAULT '1',
  `block` varchar(255) DEFAULT NULL COMMENT 'left_top,left_bottom',
  PRIMARY KEY (`dashid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dashboard_item
-- ----------------------------
INSERT INTO `dashboard_item` VALUES ('1', 'Student', '3', '10', '1', 'top_left');

-- ----------------------------
-- Table structure for site_profile
-- ----------------------------
DROP TABLE IF EXISTS `site_profile`;
CREATE TABLE `site_profile` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
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
  `is_active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of site_profile
-- ----------------------------
INSERT INTO `site_profile` VALUES ('1', '855 solution', '418Eo+E1, Phlauv 358, Sangkat Chbar Ampov, Khan Chbar Ampov , Phnom Penh.', '015 871 787 / 092 226 133', 'info@855solution.com', 'https://www.facebook.com/%E1%9E%93%E1%9E%B6%E1%9E%99%E1%9E%80%E1%9E%8A%E1%9F%92%E1%9E%8B%E1%9E%B6%E1%9E%93%E1%9E%9C%E1%9E%B7%E1%9E%91%E1%9F%92%E1%9E%99%E1%9E%BB%E1%9E%91%E1%9E%B6%E1%9E%80%E1%9F%8B%E1%9E%91%E1%9E%84-112512662798448/', 'https://plus.google.com/117575618297062468775', '', 'https://twitter.com/Kimhay98Kh', '', null, null, '1');

-- ----------------------------
-- Table structure for tblarticle
-- ----------------------------
DROP TABLE IF EXISTS `tblarticle`;
CREATE TABLE `tblarticle` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `article_date` date NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblarticle
-- ----------------------------
INSERT INTO `tblarticle` VALUES ('1', 'ប្រវត្តិនាយកដ្ឋានវិទ្យុទាក់ទង', 'ប្រវត្តិនាយកដ្ឋានវិទ្យុទាក់ទង', '<p>\n	-អង្គភាពវិទ្យុទាក់ទងបានចាប់បដិសន្ធិនៅឆ្នាំ&nbsp;១៩៨៧&nbsp;&nbsp;ក្រោយពីសិក្ខាកាមចំនួន ០២ វគ្គ បានបញ្ចប់ការសិក្សាវិលត្រឡប់ពី ប្រទេសវៀតណាម មកកម្ពុជាវិញ (វគ្គមធ្យមវិទ្យុទូរលេខ ១១នាក់ &nbsp;និងវគ្គមធ្យមបច្ចេកទេសវិទ្យុទាក់ទងចំនួន ១១នាក់) នៅពេលនោះ​អង្គភាព វិទ្យុ ទាក់ទង នៅជាការិយាល័យឈ្មោះការិយាល័យ ទី៦ ចំណុះមន្ទីរ ពិចារណា សរុបក្រសួងមហាផ្ទៃ។</p>\n<p>\n	-ឆ្នាំ១៩៨៩&nbsp;អង្គភាពវិទ្យុទាក់ទង បានវិវឌ្ឍន៍ពីការិយាល័យទី៦ &nbsp;នៃមន្ទីរពិចារណាសរុប&nbsp;ទៅជានាយកដ្ឋាន</p>\n<p>\n	វិទ្យុទាក់ទងចំណុះ​ ក្រសួងមហាផ្ទៃ ដោយ មានអនុរដ្ឋមន្រ្តី០១រូប ទទួលបន្ទុក។</p>\n<p>\n	-ឆ្នាំ១៩៩៣&nbsp;នាយកដ្ឋានវិទ្យុទាក់ទង ស្ថិតក្រោមឱវាទរួមរបស់អគ្គនាយកដ្ឋានរដ្ឋបាល និងអគ្គនាយកដ្ឋាននគរបាលជាតិ។</p>\n<p>\n	-បច្ចុប្បន្ននាយកដ្ឋានវិទ្យុទាក់ទង ស្ថិតក្រោមការគ្រប់គ្រងដឹកនាំរបស់សេនាធិការដ្ឋាននៃអគ្គស្នងការដ្ឋាននគរបាលជាតិ។</p>\n', '<p>\n	-អង្គភាពវិទ្យុទាក់ទងបានចាប់បដិសន្ធិនៅឆ្នាំ&nbsp;១៩៨៧&nbsp;&nbsp;ក្រោយពីសិក្ខាកាមចំនួន ០២ វគ្គ បានបញ្ចប់ការសិក្សាវិលត្រឡប់ពី ប្រទេសវៀតណាម មកកម្ពុជាវិញ (វគ្គមធ្យមវិទ្យុទូរលេខ ១១នាក់ &nbsp;និងវគ្គមធ្យមបច្ចេកទេសវិទ្យុទាក់ទងចំនួន ១១នាក់) នៅពេលនោះ​អង្គភាព វិទ្យុ ទាក់ទង នៅជាការិយាល័យឈ្មោះការិយាល័យ ទី៦ ចំណុះមន្ទីរ ពិចារណា សរុបក្រសួងមហាផ្ទៃ។</p>\n<p>\n	-ឆ្នាំ១៩៨៩&nbsp;អង្គភាពវិទ្យុទាក់ទង បានវិវឌ្ឍន៍ពីការិយាល័យទី៦ &nbsp;នៃមន្ទីរពិចារណាសរុប&nbsp;ទៅជានាយកដ្ឋាន</p>\n<p>\n	វិទ្យុទាក់ទងចំណុះ​ ក្រសួងមហាផ្ទៃ ដោយ មានអនុរដ្ឋមន្រ្តី០១រូប ទទួលបន្ទុក។</p>\n<p>\n	-ឆ្នាំ១៩៩៣&nbsp;នាយកដ្ឋានវិទ្យុទាក់ទង ស្ថិតក្រោមឱវាទរួមរបស់អគ្គនាយកដ្ឋានរដ្ឋបាល និងអគ្គនាយកដ្ឋាននគរបាលជាតិ។</p>\n<p>\n	-បច្ចុប្បន្ននាយកដ្ឋានវិទ្យុទាក់ទង ស្ថិតក្រោមការគ្រប់គ្រងដឹកនាំរបស់សេនាធិការដ្ឋាននៃអគ្គស្នងការដ្ឋាននគរបាលជាតិ។</p>\n', '1', '0', '', '', '0', '', '2016-08-10');
INSERT INTO `tblarticle` VALUES ('52', 'Computer Maintenance', 'Computer Maintenance', '<h2 style=\"box-sizing: border-box; font-family: BreeSerif-Regular; font-weight: 500; line-height: 1.1; color: rgb(0, 0, 0); margin: 0px; font-size: 2.2em;\">\n	&nbsp;</h2>\n<p style=\"box-sizing: border-box; margin: 1em 0px 0px; font-size: 15px; line-height: 1.8em; font-family: Lato, sans-serif;\">\n	Staying one step ahead of computer issues can save lots of time and money. Our maintenance service will make sure your computer and your network is running as fast as possible without errors and issues. It is recommended to set up routine maintenance for your home and office network computers to ensure your equipment is optimized with minimal downtime.<br style=\"box-sizing: border-box;\" />\n	<img height=\"359\" src=\"http://855solution.com/photos/1/5733d9610312b.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; display: block; height: auto; max-width: 100%;\" width=\"1090\" /></p>\n<p style=\"box-sizing: border-box; margin: 1em 0px 0px; font-size: 15px; line-height: 1.8em; font-family: Lato, sans-serif;\">\n	Contact Us To Setup A Meeting<br style=\"box-sizing: border-box;\" />\n	Feel free to call or email anytime to setup a meeting. We would love to discuss your project to see if we can help!</p>\n', '<p style=\"box-sizing: border-box; margin: 1em 0px 0px; font-size: 15px; color: rgb(0, 0, 0); line-height: 1.8em; font-family: Lato, sans-serif;\">\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Staying one step ahead of computer issues can save lots of time and money. Our maintenance service will make sure your computer and your network is running as fast as possible without errors and issues. It is recommended to set up routine maintenance for your home and office network computers to ensure your equipment is optimized with minimal downtime.<br style=\"box-sizing: border-box;\" />\n	<img height=\"359\" src=\"http://855solution.com/photos/1/5733d9610312b.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; display: block; height: auto; max-width: 100%;\" width=\"1090\" /></p>\n<p style=\"box-sizing: border-box; margin: 1em 0px 0px; font-size: 15px; color: rgb(0, 0, 0); line-height: 1.8em; font-family: Lato, sans-serif;\">\n	Contact Us To Setup A Meeting<br style=\"box-sizing: border-box;\" />\n	Feel free to call or email anytime to setup a meeting. We would love to discuss your project to see if we can help!</p>\n', '1', '1', '', '', '9', '', '2018-01-14');
INSERT INTO `tblarticle` VALUES ('54', 'OUR PRODUCT', 'OUR PRODUCT', '', '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; line-height: 1.5rem; font-size: 18px; color: rgb(86, 86, 86); font-family: robotolight;\">\n	Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; list-style: none; padding: 0px; color: rgb(86, 86, 86); font-family: robotolight; font-size: 15px;\">\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Quisque volutpat mattis eros.</li>\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Nullam malesuada erat ut turpis.</li>\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Suspendisse urna nibh.</li>\n</ul>\n', '1', '1', '', 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.', '13', '', '2018-01-30');
INSERT INTO `tblarticle` VALUES ('55', 'TOKUTOKUYA MINI MART', 'TOKUTOKUYA MINI MART', '', '', '1', '1', '', '', '10', '', '2018-02-19');
INSERT INTO `tblarticle` VALUES ('56', 'KHMER LEADING', 'KHMER LEADING', '', '', '1', '1', '', '', '10', '', '2018-02-19');
INSERT INTO `tblarticle` VALUES ('57', 'PHS ASIA CO., LTD', 'PHS ASIA CO., LTD', '', '<h2 style=\"box-sizing: border-box; font-family: BreeSerif-Regular; font-weight: 500; line-height: 1.1; color: rgb(0, 0, 0); margin: 0px; font-size: 2.2em; text-align: center;\">\n	<img height=\"505\" src=\"http://855solution.com/photos/1/5747b0101122f.JPG\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; display: block; height: auto; max-width: 100%;\" width=\"1090\" /></h2>\n<h2 style=\"box-sizing: border-box; font-family: BreeSerif-Regular; font-weight: 500; line-height: 1.1; color: rgb(0, 0, 0); margin: 0px; font-size: 2.2em; text-align: center;\">\n	&nbsp;</h2>\n<h2 style=\"box-sizing: border-box; font-family: BreeSerif-Regular; font-weight: 500; line-height: 1.1; color: rgb(0, 0, 0); margin: 0px; font-size: 2.2em; text-align: center;\">\n	Welcome to PHS Asia</h2>\n<p style=\"box-sizing: border-box; margin: 1em 0px 0px; font-size: 15px; color: rgb(0, 0, 0); line-height: 1.8em; font-family: Lato, sans-serif; text-align: justify;\">\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PHS Cambodia is one of Cambodia&rsquo;s premier Commercial supply Hospitality Product andService Specialists. We offer all major lines ofcommercial, hospitality supply including all kind of room linens, room divisionproducts, room amenities and more, same as F&amp;B Linens, Chinaware,Silverware, F&amp;B equipment and more, We also supply Spa products to hotelsand Resorts. As a local leader in providing range of hotel products and servicesupply with 04 years of experience we always place our customers best interestsfirst, focusing on your individual needs providing quality products and aftersales service.</p>\n', '1', '1', '', '', '10', '', '2018-02-19');
INSERT INTO `tblarticle` VALUES ('59', 'KNN NEWS', 'KNN NEWS', '', '', '1', '1', '', '', '10', '', '2018-02-20');
INSERT INTO `tblarticle` VALUES ('60', 'SIM SANG CONSTRUCTION', 'SIM SANG CONSTRUCTION', '', '', '1', '1', '', '', '10', '', '2018-02-20');
INSERT INTO `tblarticle` VALUES ('61', 'WESTLAND INTERNATIONAL SCHOOL', 'WESTLAND INTERNATIONAL SCHOOL', '', '', '1', '1', '', '', '10', '', '2018-02-20');
INSERT INTO `tblarticle` VALUES ('62', 'SMARTAD', 'SMARTAD', '', '', '1', '1', '', '', '10', '', '2018-02-20');
INSERT INTO `tblarticle` VALUES ('63', 'BKW CONTRUCTION CHEMICAL', 'BKW CONTRUCTION CHEMICAL', '', '<p style=\"box-sizing: border-box; margin: 1em 0px 0px; font-size: 15px; color: rgb(0, 0, 0); line-height: 1.8em; font-family: Lato, sans-serif;\">\n	Staying one step ahead of computer issues can save lots of time and money. Our maintenance service will make sure your computer and your network is running as fast as possible without errors and issues. It is recommended to set up routine maintenance for your home and office network computers to ensure your equipment is optimized with minimal downtime.<br style=\"box-sizing: border-box;\" />\n	<img height=\"359\" src=\"http://855solution.com/photos/1/5733d9610312b.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; display: block; height: auto; max-width: 100%;\" width=\"1090\" /></p>\n<p style=\"box-sizing: border-box; margin: 1em 0px 0px; font-size: 15px; color: rgb(0, 0, 0); line-height: 1.8em; font-family: Lato, sans-serif;\">\n	Contact Us To Setup A Meeting<br style=\"box-sizing: border-box;\" />\n	Feel free to call or email anytime to setup a meeting. We would love to discuss your project to see if we can help!</p>\n', '1', '1', '', '', '10', '', '2018-02-20');
INSERT INTO `tblarticle` VALUES ('64', 'REAL ESTAE PHNOM PENH', 'REAL ESTAE PHNOM PENH', '', '', '1', '1', '', '', '10', '', '2018-02-21');
INSERT INTO `tblarticle` VALUES ('65', 'A24MARKET', 'A24MARKET', '', '', '1', '1', '', '', '10', '', '2018-02-21');
INSERT INTO `tblarticle` VALUES ('66', 'REALESTATE', 'REALESTATE', '', '', '1', '1', '', '', '10', '', '2018-02-21');
INSERT INTO `tblarticle` VALUES ('67', 'PIVOTA', 'PIVOTA', '', '', '1', '1', '', '', '10', '', '2018-02-21');
INSERT INTO `tblarticle` VALUES ('68', 'PORTOR SCHOOL', 'PORTOR SCHOOL', '', '', '1', '1', '', '', '10', '', '2018-02-21');
INSERT INTO `tblarticle` VALUES ('69', 'ARTISANS', 'ARTISANS', '', '', '1', '1', '', '', '10', '', '2018-02-21');
INSERT INTO `tblarticle` VALUES ('70', 'LNSK', 'LNSK', '', '', '1', '1', '', '', '10', '', '2018-02-21');
INSERT INTO `tblarticle` VALUES ('71', 'JOBSKH365', 'JOBSKH365', '', '', '1', '1', '', '', '10', '', '2018-02-21');
INSERT INTO `tblarticle` VALUES ('72', 'DIAMON CONTRACTION', 'DIAMON CONTRACTION', '', '', '1', '1', '', '', '10', '', '2018-02-21');
INSERT INTO `tblarticle` VALUES ('73', 'CAME9', 'CAME9', '', '', '1', '1', '', '', '10', '', '2018-02-21');
INSERT INTO `tblarticle` VALUES ('74', 'BST', 'BST', '', '', '1', '1', '', '', '10', '', '2018-02-21');
INSERT INTO `tblarticle` VALUES ('75', 'WATANA PRINTING', 'WATANA PRINTING', '', '', '1', '1', '', '', '10', '', '2018-02-21');
INSERT INTO `tblarticle` VALUES ('76', 'CSK GLOBAL TRADE', 'CSK GLOBAL TRADE', '', '', '1', '1', '', '', '10', '', '2018-02-21');
INSERT INTO `tblarticle` VALUES ('77', 'PRODUCT DESCRIPTIONS', 'PRODUCT DESCRIPTIONS', '', '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; line-height: 1.5rem; font-size: 18px; color: rgb(86, 86, 86); font-family: robotolight;\">\n	Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; list-style: none; padding: 0px; color: rgb(86, 86, 86); font-family: robotolight; font-size: 15px;\">\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Quisque volutpat mattis eros.</li>\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Nullam malesuada erat ut turpis.</li>\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Suspendisse urna nibh.</li>\n</ul>\n', '1', '1', '', 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.', '14', '', '2018-02-21');
INSERT INTO `tblarticle` VALUES ('78', 'ABOUT US', 'ABOUT US', '', '<h1 style=\"box-sizing: border-box; margin: 20px 0px 10px; font-size: 36px; font-family: Lato, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); text-align: center;\">\n	<img src=\"http://855solution.com/photos/1/5747b855a134e.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle;\" /></h1>\n<h1 style=\"box-sizing: border-box; margin: 20px 0px 10px; font-size: 36px; font-family: Lato, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); text-align: center;\">\n	ABOUT US</h1>\n<hr style=\"box-sizing: content-box; height: 0px; margin-top: 20px; margin-bottom: 20px; border-right: 0px; border-bottom: 0px; border-left: 0px; border-image: initial; border-top-style: solid; border-top-color: rgb(238, 238, 238); color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\" />\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\">\n	<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 855.Solution offers with a complete range of services to fill the market need for designing and developing a fitted solution to enable the client&rsquo;s business in the most cost effective way. We revolve around the need to provide quality services and products to our various target clients, in the process fully satisfying their needs.&nbsp;</span></span></p>\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\">\n	<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">In summary we intend to attain the following objectives:</span></span></p>\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Continuously provide professional quality services on time and on budget.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Develop a follow-up strategy to gauge performance with all our clients.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Implement and maintain a quality control system and assurance policy.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; To instill a culture of continuous improvement in beating standards of customer satisfaction and efficiency.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Continuously formalize and measure cross-functional working communication so as to ensure that the various&nbsp; departments work harmoniously towards attainment of company objectives.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; We are fully committed to supporting growth and development in the economy.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Customize the software to the individual needs of each client.<br style=\"box-sizing: border-box;\" />\n		<br />\n		</span></span></li>\n</ul>\n', '1', '1', '', '', '7', '', '2018-02-22');
INSERT INTO `tblarticle` VALUES ('79', 'templates1', 'templates1', '', '', '1', '1', '', '', '11', '', '2018-02-22');
INSERT INTO `tblarticle` VALUES ('80', 'templates2', 'templates2', '', '', '1', '1', '', '', '11', '', '2018-02-22');
INSERT INTO `tblarticle` VALUES ('81', 'templates3', 'templates3', '', '', '1', '1', '', '', '11', '', '2018-02-22');
INSERT INTO `tblarticle` VALUES ('82', 'Template4', 'Template4', '', '', '1', '1', '', '', '11', '', '2018-02-22');
INSERT INTO `tblarticle` VALUES ('83', 'Project', 'Project', '', '', '1', '1', '', '', '15', '', '2018-05-19');
INSERT INTO `tblarticle` VALUES ('84', 'Project 1', 'Project 1', '', '', '1', '1', '', '', '15', '', '2018-05-21');
INSERT INTO `tblarticle` VALUES ('85', 'Hello', 'Hello', '', '', '1', '1', '', '', '10', '', '2018-06-20');
INSERT INTO `tblarticle` VALUES ('86', '<div class=\"welcome_icon\">                                     <i class=\"fa fa-leaf\"></i>                                 </div>                                 <h4>eco system</h4>', '<div class=\"welcome_icon\">                                     <i class=\"fa fa-leaf\"></i>                                 </div>                                 <h4>eco system</h4>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center;\">Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</span></p>\n', '1', '1', '', '', '18', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('87', '<div class=\"welcome_icon\">                                     <i class=\"fa fa-refresh\"></i>                                 </div>                                 <h4>recycling</h4>', '<div class=\"welcome_icon\">                                     <i class=\"fa fa-refresh\"></i>                                 </div>                                 <h4>recycling</h4>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center;\">Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</span></p>\n', '1', '1', '', '', '18', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('88', '<div class=\"welcome_icon\">                                     <i class=\"fa fa-tint\"></i>                                 </div>                                 <h4>water refine</h4>', '<div class=\"welcome_icon\">                                     <i class=\"fa fa-tint\"></i>                                 </div>                                 <h4>water refine</h4>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center;\">Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</span></p>\n', '1', '1', '', '', '18', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('89', '<div class=\"welcome_icon\">                                     <i class=\"fa fa-cog\"></i>                                 </div>                                 <h4>solar system</h4>', '<div class=\"welcome_icon\">                                     <i class=\"fa fa-cog\"></i>                                 </div>                                 <h4>solar system</h4>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center;\">Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</span></p>\n', '1', '1', '', '', '18', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('90', '<button data-filter=\"*\" class=\"my_btn btn_active\">Show All</button>', '<button data-filter=\"*\" class=\"my_btn btn_active\">Show All</button>', '', '', '1', '1', '', '', '19', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('91', '<button data-filter=\".blue, .black, .green\" class=\"my_btn\">environment</button>', '<button data-filter=\".blue, .black, .green\" class=\"my_btn\">environment</button>', '', '\n', '1', '1', '', '', '19', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('92', '<button data-filter=\".red, .green\" class=\"my_btn\">climate</button>', '<button data-filter=\".red, .green\" class=\"my_btn\">climate</button>', '', '', '1', '1', '', '', '19', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('93', '<button data-filter=\".blue, .yellow, .black\" class=\"my_btn\">photography</button>', '<button data-filter=\".blue, .yellow, .black\" class=\"my_btn\">photography</button>', '', '', '1', '1', '', '', '19', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('94', '<button data-filter=\".black\" class=\"my_btn\">species</button>', '<button data-filter=\".black\" class=\"my_btn\">species</button>', '', '\n', '1', '1', '', '', '19', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('97', '<a href=\"\"><h3>Climate change is affecting bird migration</h3></a>', '<a href=\"\"><h3>Climate change is affecting bird migration</h3></a>', '', '<p class=\"blog_news_content\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 15px; display: inline-block; color: rgb(100, 100, 100); font-size: 14px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">\n	Lorem ipsum dolor sit amet, consectetur adipscing elit. Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. consectetur Lorem ipsum dolor sitamet, conse ctetur adipiscing elit.</p>\n<p>\n	<a class=\"blog_link\" href=\"\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(84, 83, 83); text-transform: uppercase; transition: 0.7s; font-size: 14px; font-family: Roboto, sans-serif; text-decoration-line: none !important;\">READ MORE</a></p>\n', '1', '1', '', '', '20', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('98', '<a href=\"\"><h3>How to avoid indoor air pollution?</h3></a>', '<a href=\"\"><h3>How to avoid indoor air pollution?</h3></a>', '', '<p class=\"blog_news_content\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 15px; display: inline-block; color: rgb(100, 100, 100); font-size: 14px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">\n	Lorem ipsum dolor sit amet, consectetur adipscing elit. Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. consectetur Lorem ipsum dolor sitamet, conse ctetur adipiscing elit.</p>\n<p>\n	<a class=\"blog_link\" href=\"\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(84, 83, 83); text-transform: uppercase; transition: 0.7s; font-size: 14px; font-family: Roboto, sans-serif; text-decoration-line: none !important;\">READ MORE</a></p>\n', '1', '1', '', '', '20', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('99', '<a href=\"\"><h3>Threat to Yellowstone’s grizzly bears.</h3></a>', '<a href=\"\"><h3>Threat to Yellowstone’s grizzly bears.</h3></a>', '', '<p class=\"blog_news_content\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 15px; display: inline-block; color: rgb(100, 100, 100); font-size: 14px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">\n	Lorem ipsum dolor sit amet, consectetur adipscing elit. Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. consectetur Lorem ipsum dolor sitamet, conse ctetur adipiscing elit.</p>\n<p>\n	<a class=\"blog_link\" href=\"\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(84, 83, 83); text-transform: uppercase; transition: 0.7s; font-size: 14px; font-family: Roboto, sans-serif; text-decoration-line: none !important;\">READ MORE</a></p>\n', '1', '1', '', '', '20', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('100', '<a href=\"\"><h4>One Tree Thousand Hope</h4></a>                                     <h6>15-16 May in Dhaka</h6>', '<a href=\"\"><h4>One Tree Thousand Hope</h4></a>                                     <h6>15-16 May in Dhaka</h6>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center; background-color: rgb(239, 240, 242);\">Lorem ipsum dolor sit amet, consectetur adip scing elit. Lorem ipsum dolor sit amet,consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p>\n<p>\n	<a class=\"event_btn\" href=\"\">read more</a></p>\n', '1', '1', '', '', '21', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('101', '<a href=\"\"><h4>One Tree Thousand Hope1</h4></a>                                     <h6>15-16 May in Dhaka</h6>', '<a href=\"\"><h4>One Tree Thousand Hope1</h4></a>                                     <h6>15-16 May in Dhaka</h6>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center; background-color: rgb(239, 240, 242);\">Lorem ipsum dolor sit amet, consectetur adip scing elit. Lorem ipsum dolor sit amet,consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p>\n<p>\n	<a class=\"event_btn\" href=\"\">read more</a></p>\n', '1', '1', '', '', '21', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('102', '<a href=\"#\"><h4>Let’s plant 200 tree each...</h4></a>', '<a href=\"#\"><h4>Let’s plant 200 tree each...</h4></a>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</span></p>\n', '1', '1', '', '', '22', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('103', '<a href=\"#\"><h4>Keep your house envirome..</h4></a>', '<a href=\"#\"><h4>Keep your house envirome..</h4></a>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</span></p>\n', '1', '1', '', '', '22', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('104', '<a href=\"#\"><h4>Urgent Clothe Needed Needed</h4></a>', '<a href=\"#\"><h4>Urgent Clothe Needed Needed</h4></a>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</span></p>\n', '1', '1', '', '', '22', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('105', '<a href=\"#\"><h4>One Tree Thousand Hope</h4></a>', '<a href=\"#\"><h4>One Tree Thousand Hope</h4></a>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</span></p>\n', '1', '1', '', '', '22', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('106', '<a href=\"#\"><h4>One Tree Thousand Hope1</h4></a>', '<a href=\"#\"><h4>One Tree Thousand Hope1</h4></a>', '', '<p>\n	<span style=\"color: rgb(100, 100, 100); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</span></p>\n', '1', '1', '', '', '22', '', '2018-06-23');

-- ----------------------------
-- Table structure for tblbanner
-- ----------------------------
DROP TABLE IF EXISTS `tblbanner`;
CREATE TABLE `tblbanner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 NOT NULL,
  `location_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `orders` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblbanner
-- ----------------------------
INSERT INTO `tblbanner` VALUES ('40', '<h3>Protect</h3>                                 <h2>nature the environment</h2>                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>                                 <a href=\"\" class=\"custom_btn\">Read  More</a>', '1', '1', '1', '1');
INSERT INTO `tblbanner` VALUES ('41', '<h3>Protect1</h3>                                 <h2>nature the environment1</h2>                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>                                 <a href=\"\" class=\"custom_btn\">Read  More</a>', '1', '1', '2', '2');
INSERT INTO `tblbanner` VALUES ('42', '<h3>Protect2</h3>                                 <h2>nature the environment2</h2>                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>                                 <a href=\"\" class=\"custom_btn\">Read  More</a>', '1', '1', '3', '3');

-- ----------------------------
-- Table structure for tblcontact
-- ----------------------------
DROP TABLE IF EXISTS `tblcontact`;
CREATE TABLE `tblcontact` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblcontact
-- ----------------------------

-- ----------------------------
-- Table structure for tblgallery
-- ----------------------------
DROP TABLE IF EXISTS `tblgallery`;
CREATE TABLE `tblgallery` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `gallery_type` int(1) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT '0',
  `order` int(11) DEFAULT NULL,
  `home` int(1) DEFAULT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=430 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblgallery
-- ----------------------------
INSERT INTO `tblgallery` VALUES ('39', '', 'topic3.jpg', '0', '15', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('47', 'Balen crush push behine neang kong hing 9 53 23 2 2016 long NE', 'MuhRRuq7Q7A', '1', '0', '4', '1', '0');
INSERT INTO `tblgallery` VALUES ('48', 'Area 2 Canadia S Far Pruise crush motor', 'UI5UGtScs7M', '1', '0', '4', '2', '0');
INSERT INTO `tblgallery` VALUES ('65', '', 'westland.jpg', '0', '21', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('77', '', 'Info.jpg', '0', '2', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('85', '', '02.jpg', '0', '12', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('87', '', '03.jpg', '0', '13', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('88', '', '05.jpg', '0', '14', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('105', '', '07.jpg', '0', '22', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('106', '', '08.jpg', '0', '23', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('107', '', '09.jpg', '0', '24', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('108', '', 'Test.jpg', '0', '9', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('109', '', '07.jpg', '0', '10', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('110', '', '09.jpg', '0', '16', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('111', 'Camboida MPS video', 'DHipWiM3VPw', '1', '0', '4', '3', '0');
INSERT INTO `tblgallery` VALUES ('112', '20160519 140402', 'B9OxMwKi9kU', '1', '0', '4', '4', '0');
INSERT INTO `tblgallery` VALUES ('113', 'Dome Neang K hing Dome ករណីអនាធិតេយ្យនៅនាងគង្ហីង', 'vpoiZR2I7Ic', '1', '0', '4', '6', '0');
INSERT INTO `tblgallery` VALUES ('114', '', 'Info.jpg', '0', '30', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('120', '', '1.jpg', '0', '31', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('121', '', '2.jpg', '0', '31', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('122', '', '3.jpg', '0', '31', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('123', '', 'technology_in_schools.jpg', '0', '32', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('124', '', 'course1.jpg', '0', '33', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('125', '', 'course3.jpg', '0', '34', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('126', '', '13600305_549697228536302_8641145987184095274_n.jpg', '0', '11', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('128', '', '13600305_549697228536302_8641145987184095274_n.jpg', '0', '36', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('129', '', '13592413_549699578536067_6526573163025707556_n.jpg', '0', '37', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('130', '', '13592414_325819454416772_7451992932185094388_n.jpg', '0', '35', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('131', '', '13592413_549699578536067_6526573163025707556_n.jpg', '0', '38', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('132', '', '13617976_1001132963335051_967817804_n.jpg', '0', '39', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('133', '', '13606754_549697618536263_8771004310916295483_n.jpg', '0', '40', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('135', '', '13592413_549699578536067_6526573163025707556_n.jpg', '0', '44', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('151', 'ឧត្តមសេនីយ៍ឯក មិន សុវណ្ណា បង្ហាញមុខជនសង្ស័យរំខានកិច្ចការសមត្ថកិច្ច និងលួចកៀបលេខវិទ្យុទាក់ទង', 'S0nLpFRKNhA', '1', '0', '4', '5', '0');
INSERT INTO `tblgallery` VALUES ('152', '', 'kkkkkkkkkkkkkkkkkkkkkkk.jpg', '0', '49', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('153', '', 'llllllllllllllllllllllllllllllllllll.jpg', '0', '49', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('155', '', '26781535_2055248414721394_1513382466_o.jpg', '0', '49', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('179', '', '1.jpg', '2', '0', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('180', '', '2.JPG', '2', '0', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('181', '', '3.jpg', '2', '0', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('182', '', '4.jpg', '2', '0', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('183', '', '5.jpg', '2', '0', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('184', '', '6.jpg', '2', '0', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('185', '', '7.png', '2', '0', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('186', '', '8.jpg', '2', '0', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('187', '', '9.jpg', '2', '0', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('188', '', '10.jpg', '2', '0', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('189', '', '26782285_2055248054721430_938410859_o.jpg', '2', '0', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('190', '', '26782306_2055248184721417_103057540_o.jpg', '2', '0', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('191', '', '26782496_2055247798054789_396012938_o.jpg', '2', '0', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('192', '', '26827814_2055247958054773_1185143222_o.jpg', '2', '0', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('193', '', '26829995_2055248321388070_1109404742_o.jpg', '2', '0', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('194', 'តើ....គេ? [Full MV] ~ ខេម ft កែវ វាសនា', 'GKAuYHZwoTs', '1', '0', '4', '7', '0');
INSERT INTO `tblgallery` VALUES ('198', '', 'feature-2.jpg', '0', '53', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('201', '', '14645215981.jpg', '0', '50', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('202', '', '1464588258.jpg', '0', '55', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('203', '', '14643169041.jpg', '0', '56', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('204', '', '14643150881.png', '0', '57', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('205', '', 'Product-Review-Writing-Services.jpg', '0', '58', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('210', '', '14639800561.jpg', '0', '59', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('211', '', '14639736081.jpg', '0', '60', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('212', '', '14638017331.JPG', '0', '61', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('213', '', '14638003081.jpg', '0', '62', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('214', '', '14637997591.jpg', '0', '63', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('220', '', '1462416401.png', '0', '50', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('222', '', '1462721815.jpg', '0', '50', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('223', '', '1463120689.png', '0', '50', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('226', '', '14637997591.jpg', '0', '50', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('228', '', '14638017331.JPG', '0', '50', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('229', '', '14639736081.jpg', '0', '50', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('230', '', '14639800561.jpg', '0', '50', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('233', '', '14637996301.jpg', '0', '63', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('234', '', '14638003081.jpg', '0', '63', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('235', '', '14638017331.JPG', '0', '63', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('236', '', '14639736081.jpg', '0', '63', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('237', '', '14639800561.jpg', '0', '63', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('238', '', '14643150881.png', '0', '63', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('239', '', '14643169041.jpg', '0', '63', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('243', '', '14634505291.jpg', '0', '64', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('244', '', '14633110711.jpg', '0', '65', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('245', '', '14630150531.jpg', '0', '66', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('246', '', '14630148991.jpg', '0', '67', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('247', '', '14627198741.jpg', '0', '68', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('248', '', '14627196701.jpg', '0', '69', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('249', '', '14627195931.jpg', '0', '70', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('250', '', '14627194391.jpg', '0', '71', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('251', '', '1462718466.jpg', '0', '72', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('252', '', '1462719315.jpg', '0', '73', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('253', '', '1462718829.jpg', '0', '74', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('254', '', '1462718012.png', '0', '75', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('255', '', '14637996301.jpg', '0', '76', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('258', '', 'feature-2.jpg', '0', '54', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('269', '', '6u6u5u55.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('270', '', '6uuug.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('271', '', 'ergerg.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('272', '', 'ergerger.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('273', '', 'ergreg.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('274', '', 'fgrer44.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('275', '', 'gegtergre.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('276', '', 'gergerg.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('277', '', 'gerh54er.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('278', '', 'gfegerge.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('279', '', 'gregre.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('280', '', 'rfgregertg.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('281', '', 'rgegergtht.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('282', '', 'rtgged4.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('283', '', 'tgreg.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('284', '', 'turtu55.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('285', '', 'tutu5u65u6uu.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('286', '', 'tyrytry.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('287', '', 'tyty5yhttr.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('288', '', 'y54uyh54u.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('289', '', 'Villa-Amore-Hua-Hin-21-Medium.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('290', '', '01_Bendega_Rato_-_Pool_view_of_villa_and_bale_at_dusk.jpg', '0', '81', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('346', '', 'trretee.jpg', '0', '51', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('347', '', 'r43tg54r.jpg', '0', '46', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('348', '', 'service_img.jpg', '0', '46', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('349', '', 'service_img_2.jpg', '0', '46', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('350', '', 'slo-motion.jpg', '0', '46', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('351', '', 'er43t45.jpg', '0', '45', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('352', '', 'ret5rt5.jpg', '0', '45', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('353', '', 'ret44ty4t.jpg', '0', '45', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('354', '', 'retg54rt54.jpg', '0', '45', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('355', '', 't5tt.jpg', '0', '45', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('360', '', 'rgretgr.jpg', '0', '48', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('361', '', '3f491b7b22d70db99ec66aafc837e478.jpg', '0', '47', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('362', '', 'etwegweg.png', '0', '47', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('364', '', 'OPENapps.png', '0', '47', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('365', '', 'our-strategy.png', '0', '47', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('366', '', 'fewtfgr54egt.png', '0', '47', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('367', '', '513_IMG_3522.jpg', '0', '77', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('375', '', 'ergreg.jpg', '0', '80', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('376', '', 'fgrer44.jpg', '0', '80', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('377', '', 'gegtergre.jpg', '0', '80', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('378', '', 'gergerg.jpg', '0', '80', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('379', '', 'gerh54er.jpg', '0', '80', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('380', '', 'gfegerge.jpg', '0', '80', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('381', '', 'gregre.jpg', '0', '80', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('382', '', 'tyrytry.jpg', '0', '80', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('383', '', 'tyty5yhttr.jpg', '0', '80', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('384', '', 'Villa-Ace-Bali-3.jpg', '0', '80', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('385', '', 'Villa-Amore-Hua-Hin-21-Medium.jpg', '0', '80', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('386', '', 'y54uyh54u.jpg', '0', '80', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('387', '', 'ytryrt5yt.jpg', '0', '80', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('388', '', 'ytrytry.jpg', '0', '80', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('389', '', 'rfgregertg.jpg', '0', '79', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('390', '', 'rgegergtht.jpg', '0', '79', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('391', '', 'rtgged4.jpg', '0', '79', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('392', '', 'tgreg.jpg', '0', '79', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('393', '', 'turtu55.jpg', '0', '79', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('394', '', 'tutu5u65u6uu.jpg', '0', '79', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('395', '', 'tyrytry.jpg', '0', '79', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('396', '', 'tyty5yhttr.jpg', '0', '79', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('397', '', 'Villa-Ace-Bali-3.jpg', '0', '79', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('398', '', 'Villa-Amore-Hua-Hin-21-Medium.jpg', '0', '79', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('399', '', 'y54uyh54u.jpg', '0', '79', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('400', '', 'ytryrt5yt.jpg', '0', '79', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('401', '', 'ytrytry.jpg', '0', '79', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('403', '', 'e5f3b8ab77bb05fcd090ecf20efc0bc7.jpg', '0', '82', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('404', '', 'the-tale-of-the-princess-kaguya_background_living-lines_library_01.jpg', '0', '82', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('407', '', 'efewfe.jpg', '0', '82', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('408', '', 'dsfdsfew.jpg', '0', '83', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('409', '', 'dsfew33qw.jpg', '0', '83', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('410', '', 'er43t45.jpg', '0', '83', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('411', '', 'ewfgregr.jpg', '0', '83', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('412', '', 'fgfrergr.jpg', '0', '83', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('413', '', 'ewfgregr.jpg', '0', '84', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('415', '', 'img-01.jpg', '0', '52', '0', '0', '0');
INSERT INTO `tblgallery` VALUES ('416', null, '1.png', '0', '85', '0', null, null);
INSERT INTO `tblgallery` VALUES ('417', null, '2.png', '0', '85', '0', null, null);
INSERT INTO `tblgallery` VALUES ('418', null, '3.png', '0', '85', '0', null, null);
INSERT INTO `tblgallery` VALUES ('419', null, 'cliemate.jpg', '0', '96', '0', null, null);
INSERT INTO `tblgallery` VALUES ('420', null, 'climate_effect.jpg', '0', '97', '0', null, null);
INSERT INTO `tblgallery` VALUES ('421', null, 'air_pollutuon.jpg', '0', '98', '0', null, null);
INSERT INTO `tblgallery` VALUES ('422', null, 'threat_bear.jpg', '0', '99', '0', null, null);
INSERT INTO `tblgallery` VALUES ('423', null, 'tree_cut_1.jpg', '0', '100', '0', null, null);
INSERT INTO `tblgallery` VALUES ('424', null, 'tree_cut_2.jpg', '0', '101', '0', null, null);
INSERT INTO `tblgallery` VALUES ('425', null, 'tree_cut_3.jpg', '0', '102', '0', null, null);
INSERT INTO `tblgallery` VALUES ('426', null, 'tree_cut_4.jpg', '0', '103', '0', null, null);
INSERT INTO `tblgallery` VALUES ('427', null, 'tree_cut_3.jpg', '0', '104', '0', null, null);
INSERT INTO `tblgallery` VALUES ('428', null, 'tree_cut_4.jpg', '0', '105', '0', null, null);
INSERT INTO `tblgallery` VALUES ('429', null, 'tree_cut_3.jpg', '0', '106', '0', null, null);

-- ----------------------------
-- Table structure for tbllayout
-- ----------------------------
DROP TABLE IF EXISTS `tbllayout`;
CREATE TABLE `tbllayout` (
  `layout_id` int(11) NOT NULL AUTO_INCREMENT,
  `layout_name` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`layout_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbllayout
-- ----------------------------
INSERT INTO `tbllayout` VALUES ('1', 'Full Layout', '1');
INSERT INTO `tbllayout` VALUES ('2', 'Grid Layout', '1');

-- ----------------------------
-- Table structure for tbllocation
-- ----------------------------
DROP TABLE IF EXISTS `tbllocation`;
CREATE TABLE `tbllocation` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location_name` text CHARACTER SET utf8 NOT NULL,
  `location_type` varchar(55) NOT NULL,
  `is_active` int(1) NOT NULL,
  `location_name_kh` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbllocation
-- ----------------------------
INSERT INTO `tbllocation` VALUES ('1', 'Main Slider', 'banner', '1', '');
INSERT INTO `tbllocation` VALUES ('2', 'Left Side', 'banner', '1', '');
INSERT INTO `tbllocation` VALUES ('3', 'REQUEST QUOTE', 'category', '1', 'REQUEST QUOTE');
INSERT INTO `tbllocation` VALUES ('4', 'CONTACT US', 'category', '1', 'CONTACT US');
INSERT INTO `tbllocation` VALUES ('5', 'Main Menu', 'menu', '1', '');
INSERT INTO `tbllocation` VALUES ('6', 'PRODUCTS', 'category', '1', 'PRODUCTS');
INSERT INTO `tbllocation` VALUES ('7', 'ABOUT US', 'category', '1', 'ABOUT US');
INSERT INTO `tbllocation` VALUES ('8', 'Search Result', '', '0', 'លទ្ធផលនៃការស្វែងរក');
INSERT INTO `tbllocation` VALUES ('9', 'Services', 'category', '1', 'Services');
INSERT INTO `tbllocation` VALUES ('10', 'Customers', 'category', '1', 'Customers');
INSERT INTO `tbllocation` VALUES ('11', 'TEMPLATES', 'category', '1', '');
INSERT INTO `tbllocation` VALUES ('12', 'Director', 'banner', '1', '');
INSERT INTO `tbllocation` VALUES ('13', 'OUR PRODUCT', 'category', '1', '');
INSERT INTO `tbllocation` VALUES ('14', 'PRODUCT DESCRIPTIONS', 'category', '1', '');
INSERT INTO `tbllocation` VALUES ('15', 'Projects', 'category', '1', '');
INSERT INTO `tbllocation` VALUES ('18', '<h2>welcome to green fair</h2>                         <p>Our Green Fire Organization is one of the non profit organization near you. Get our services like</p>', 'category', '1', null);
INSERT INTO `tbllocation` VALUES ('19', '<h2>our latest work</h2>                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>', 'category', '1', null);
INSERT INTO `tbllocation` VALUES ('20', '<h2>latest blog</h2>                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cum libero vitae quos eaque commodi.</p>', 'category', '1', null);
INSERT INTO `tbllocation` VALUES ('21', '<h2>latest event</h2>                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>', 'category', '1', null);
INSERT INTO `tbllocation` VALUES ('22', 'latest blog', 'category', '1', null);

-- ----------------------------
-- Table structure for tblmenus
-- ----------------------------
DROP TABLE IF EXISTS `tblmenus`;
CREATE TABLE `tblmenus` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tblmenus
-- ----------------------------
INSERT INTO `tblmenus` VALUES ('34', 'CUSTOMERS', null, '34', '0', '0', '3', '1', null, null, '2', null, null, 'CUSTOMERS', '0', '5', '10', null);
INSERT INTO `tblmenus` VALUES ('32', 'PRODUCTS', null, '32', '0', '0', '2', '1', null, null, '2', null, null, 'PRODUCTS', '0', '5', '6', null);
INSERT INTO `tblmenus` VALUES ('31', 'SERVICES', null, '31', '0', '0', '1', '1', null, null, '2', null, null, 'SERVICES', '0', '5', '9', null);
INSERT INTO `tblmenus` VALUES ('36', 'TEMPLATES', null, '36', '0', '0', '4', '1', null, null, '2', null, null, 'TEMPLATES', '0', '5', '11', null);
INSERT INTO `tblmenus` VALUES ('37', 'REQUEST QUOTE', null, '37', '0', '0', '5', '1', null, null, '2', null, null, 'REQUEST QUOTE', '0', '5', '3', null);
INSERT INTO `tblmenus` VALUES ('38', 'ABOUT US', null, '38', '0', '0', '5', '1', null, null, '2', null, null, 'ABOUT US', '0', '5', '7', null);
INSERT INTO `tblmenus` VALUES ('66', 'CONTACT US', null, '66', '0', '0', '7', '1', null, null, '2', null, null, 'CONTACT US', '0', '5', '4', null);
INSERT INTO `tblmenus` VALUES ('79', 'Project', null, '79', '0', '0', '7', '1', null, null, '1', null, null, 'Project', '0', '5', '15', null);
INSERT INTO `tblmenus` VALUES ('82', '0', null, '82', '0', '0', '0', '0', null, null, '0', null, null, '0', '0', '0', '0', null);
INSERT INTO `tblmenus` VALUES ('83', '0', null, '83', '0', '0', '0', '0', null, null, '0', null, null, '0', '0', '0', '0', null);
INSERT INTO `tblmenus` VALUES ('85', 'Hello', null, '85', '0', '0', '7', '1', null, null, '2', null, null, 'Hello', '0', '5', '17', null);
INSERT INTO `tblmenus` VALUES ('86', 'HELLO1', null, '31-86', '31', '1', '7', '1', null, null, '2', null, null, 'HELLO1', '0', '5', '9', null);
INSERT INTO `tblmenus` VALUES ('87', 'HELLO2', null, '32-87', '32', '1', '7', '1', null, null, '2', null, null, 'HELLO2', '0', '5', '6', null);
INSERT INTO `tblmenus` VALUES ('88', 'HELLO3', null, '31-88', '31', '1', '7', '1', null, null, '2', null, null, 'HELLO3', '0', '5', '9', null);

-- ----------------------------
-- Table structure for tblproduct
-- ----------------------------
DROP TABLE IF EXISTS `tblproduct`;
CREATE TABLE `tblproduct` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `menu_id` int(11) NOT NULL,
  `content_desc` text CHARACTER SET utf8 NOT NULL,
  `content_bottom` text NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblproduct
-- ----------------------------
INSERT INTO `tblproduct` VALUES ('8', 'Product1 ', '3', '<p>\n	<img alt=\"\" src=\"/htdocs/cljr/data/images/1410600813.jpg\" style=\"width: 941px; height: 496px;\" />asdfasdfa</p>\n', '<p>\n	asdfasfg</p>\n', '1');
INSERT INTO `tblproduct` VALUES ('9', 'Product 2', '3', '<p>agfsdgwet</p>\n', '<p>wertwetgwt</p>\n', '1');
INSERT INTO `tblproduct` VALUES ('10', 'Product 3', '3', '<p>srtwer</p>\n', '<p><img alt=\"\" src=\"/ckfinder/userfiles/files/201409141410683168993.jpg\" style=\"height:1086px; width:950px\" /></p>\n', '1');

-- ----------------------------
-- Table structure for z_blog
-- ----------------------------
DROP TABLE IF EXISTS `z_blog`;
CREATE TABLE `z_blog` (
  `site_show_blogid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`site_show_blogid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of z_blog
-- ----------------------------
INSERT INTO `z_blog` VALUES ('1', 'Menu Top');
INSERT INTO `z_blog` VALUES ('2', 'Menu Left');
INSERT INTO `z_blog` VALUES ('3', 'Menu Buttom');
INSERT INTO `z_blog` VALUES ('4', 'Hot Product');
INSERT INTO `z_blog` VALUES ('5', 'Menu Right');

-- ----------------------------
-- Table structure for z_currency
-- ----------------------------
DROP TABLE IF EXISTS `z_currency`;
CREATE TABLE `z_currency` (
  `curid` int(11) NOT NULL AUTO_INCREMENT,
  `currcode` varchar(255) DEFAULT NULL,
  `curr_name` varchar(255) DEFAULT NULL,
  `symbol` varchar(255) DEFAULT NULL,
  `is_default` int(11) DEFAULT NULL,
  `ex_rate` double DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`curid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of z_currency
-- ----------------------------
INSERT INTO `z_currency` VALUES ('1', 'USD', 'US Dollars', '$', '1', '1', 'US');

-- ----------------------------
-- Table structure for z_module
-- ----------------------------
DROP TABLE IF EXISTS `z_module`;
CREATE TABLE `z_module` (
  `moduleid` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(255) DEFAULT NULL,
  `sort_mod` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `mod_position` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`moduleid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of z_module
-- ----------------------------
INSERT INTO `z_module` VALUES ('1', 'Setting', null, '0', '0', '2');
INSERT INTO `z_module` VALUES ('7', 'Menu', null, null, '1', '2');
INSERT INTO `z_module` VALUES ('10', 'Product', null, null, '0', '2');
INSERT INTO `z_module` VALUES ('11', 'Article', null, null, '1', '2');
INSERT INTO `z_module` VALUES ('12', 'Banner', null, null, '1', '2');
INSERT INTO `z_module` VALUES ('13', 'Contact', null, null, '0', '2');

-- ----------------------------
-- Table structure for z_page
-- ----------------------------
DROP TABLE IF EXISTS `z_page`;
CREATE TABLE `z_page` (
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
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of z_page
-- ----------------------------
INSERT INTO `z_page` VALUES ('5', 'Page', 'setting/page', '1', null, '0', '1', '0', '1', '1', '0', '1', '2015-02-05 17:00:01', '1', 'fa-file-o', null);
INSERT INTO `z_page` VALUES ('6', 'User Profile', 'setting/user', '1', null, '1', '1', '1', '1', '0', '0', '1', '2015-02-05 16:56:20', '1', 'fa-user', null);
INSERT INTO `z_page` VALUES ('7', 'User Role', 'setting/role', '1', null, '1', '1', '1', '1', '1', '1', '1', '2015-02-05 16:57:09', '1', 'fa-user', null);
INSERT INTO `z_page` VALUES ('8', 'Role Access', 'setting/permission', '1', null, '1', '1', '0', '0', '0', '1', '1', '2015-02-05 16:56:46', '1', 'fa-wrench', null);
INSERT INTO `z_page` VALUES ('57', 'Shipping Company', 'shipping/shipping', '11', '1', '1', '1', '1', '1', '1', '1', '1', '2015-06-29 11:21:45', '0', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('58', 'Product List', 'product/product', '7', '7', '1', '1', '1', '1', '1', '1', '1', '2015-07-10 13:47:35', '0', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('59', 'Stock In/Out', 'product/stockmove', '7', '8', '1', '1', '1', '1', '1', '1', '1', '2015-07-15 12:04:46', '0', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('54', 'Category', 'stock/category', '7', '6', '1', '1', '1', '1', '1', '1', '1', '2015-06-17 07:53:19', '0', 'fa-bars', 'category.html');
INSERT INTO `z_page` VALUES ('55', 'Store', 'store', '10', '0', '1', '1', '1', '1', '1', '1', '1', '2015-06-26 08:04:07', '0', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('56', 'Setup List', 'setup/csetup', '11', '0', '1', '1', '1', '1', '1', '1', '1', '2015-06-27 12:11:58', '0', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('60', 'Slide Show', 'slideshow/SlideShow', '7', '9', '1', '1', '1', '1', '1', '1', '1', '2015-07-17 08:19:12', '0', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('61', 'Setup Ads', 'setup/SetupAds', '11', '2', '1', '1', '1', '1', '1', '1', '1', '2015-08-04 03:00:11', '0', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('62', 'Setup Country', 'setup/country', '11', '3', '1', '1', '1', '1', '1', '1', '1', '2015-08-21 16:25:39', '0', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('63', 'Menu List', 'menu/index', '7', '10', '1', '1', '1', '1', '1', '1', '1', '2015-09-11 15:53:36', '1', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('64', 'Add New Menu', 'menu/add', '7', '11', '1', '1', '1', '1', '1', '1', '1', '2015-09-11 15:53:58', '1', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('65', 'Article List', 'article/index', '11', '4', '1', '1', '1', '1', '1', '1', '1', '2015-09-11 16:46:23', '1', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('66', 'Add New Article', 'article/add', '11', '5', '1', '1', '1', '1', '1', '1', '1', '2015-09-11 16:47:08', '1', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('67', 'Product List', 'product/index', '10', '1', '1', '1', '1', '1', '1', '1', '1', '2015-09-12 17:10:07', '1', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('68', 'Add New Products', 'product/add', '10', '2', '1', '1', '1', '1', '1', '1', '1', '2015-09-12 17:10:46', '1', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('69', 'Banner List', 'setup/setupads/index', '12', '0', '1', '1', '1', '1', '1', '1', '1', '2016-02-05 23:16:13', '1', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('70', 'Add New Banner', 'setup/setupads/add', '12', '1', '1', '1', '1', '1', '1', '1', '1', '2016-02-05 23:15:42', '1', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('71', 'Contact List', 'article/contact_list', '13', '0', '1', '1', '1', '1', '1', '1', '1', '2015-09-15 14:32:25', '1', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('75', 'Add New Category', 'category/add', '7', '12', '1', '1', '1', '1', '1', '1', '1', '2017-12-22 13:42:09', '1', 'fa-bars', null);
INSERT INTO `z_page` VALUES ('76', 'Category List', 'category/index', '7', '13', '11', '1', '1', '1', '1', '1', '1', '2017-12-22 13:42:54', '1', 'fa-bars', null);

-- ----------------------------
-- Table structure for z_role
-- ----------------------------
DROP TABLE IF EXISTS `z_role`;
CREATE TABLE `z_role` (
  `roleid` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  PRIMARY KEY (`roleid`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of z_role
-- ----------------------------
INSERT INTO `z_role` VALUES ('1', 'Administrators', '1', '1');
INSERT INTO `z_role` VALUES ('2', 'Teachers', null, '0');
INSERT INTO `z_role` VALUES ('3', 'Sponsors', null, '0');
INSERT INTO `z_role` VALUES ('4', 'Doctors', null, '0');
INSERT INTO `z_role` VALUES ('5', 'Students', null, '0');
INSERT INTO `z_role` VALUES ('6', 'Parents', null, '0');
INSERT INTO `z_role` VALUES ('8', 'Socials', null, '0');
INSERT INTO `z_role` VALUES ('9', 'www', null, '0');
INSERT INTO `z_role` VALUES ('10', 'asd', null, '0');
INSERT INTO `z_role` VALUES ('11', 'testing', null, '0');
INSERT INTO `z_role` VALUES ('12', 'testing-2a', null, '0');
INSERT INTO `z_role` VALUES ('13', 'testing-3', null, '0');
INSERT INTO `z_role` VALUES ('14', 'testine-4', null, '0');
INSERT INTO `z_role` VALUES ('15', 'Pedagogy Staff', null, '0');
INSERT INTO `z_role` VALUES ('16', 'Human Resource', null, '0');
INSERT INTO `z_role` VALUES ('17', 'Health', null, '0');
INSERT INTO `z_role` VALUES ('18', 'Study Office', null, '0');
INSERT INTO `z_role` VALUES ('19', 'VTC Officier', null, '0');
INSERT INTO `z_role` VALUES ('20', 'Product Posting', null, '1');
INSERT INTO `z_role` VALUES ('21', 'Store Managment', null, '1');
INSERT INTO `z_role` VALUES ('22', 'Product Authorization', null, '1');

-- ----------------------------
-- Table structure for z_role_module_detail
-- ----------------------------
DROP TABLE IF EXISTS `z_role_module_detail`;
CREATE TABLE `z_role_module_detail` (
  `mod_rol_id` int(11) NOT NULL AUTO_INCREMENT,
  `roleid` int(11) DEFAULT NULL,
  `moduleid` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`mod_rol_id`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of z_role_module_detail
-- ----------------------------
INSERT INTO `z_role_module_detail` VALUES ('82', '22', '7', null);
INSERT INTO `z_role_module_detail` VALUES ('81', '21', '10', null);
INSERT INTO `z_role_module_detail` VALUES ('80', '20', '7', null);
INSERT INTO `z_role_module_detail` VALUES ('102', '1', '15', null);
INSERT INTO `z_role_module_detail` VALUES ('101', '1', '12', null);
INSERT INTO `z_role_module_detail` VALUES ('100', '1', '11', null);
INSERT INTO `z_role_module_detail` VALUES ('99', '1', '7', null);
INSERT INTO `z_role_module_detail` VALUES ('98', '1', '1', null);

-- ----------------------------
-- Table structure for z_role_page
-- ----------------------------
DROP TABLE IF EXISTS `z_role_page`;
CREATE TABLE `z_role_page` (
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
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of z_role_page
-- ----------------------------
INSERT INTO `z_role_page` VALUES ('17', '17', '24', '7', '2015-03-19 02:18:59', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `z_role_page` VALUES ('26', '17', '25', '7', '2015-06-18 21:15:05', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `z_role_page` VALUES ('27', '17', '26', '7', '2015-04-20 10:57:34', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `z_role_page` VALUES ('28', '17', '27', '7', '2015-04-20 10:57:45', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `z_role_page` VALUES ('29', '17', '28', '7', '2015-04-20 10:57:55', '1', '1', '1', '1', '1', '1', '1', '1');
