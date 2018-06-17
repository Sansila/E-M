/*
 Navicat Premium Data Transfer

 Source Server         : chantha
 Source Server Type    : MySQL
 Source Server Version : 50534
 Source Host           : localhost
 Source Database       : concrete_front

 Target Server Type    : MySQL
 Target Server Version : 50534
 File Encoding         : utf-8

 Date: 09/30/2015 11:21:23 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `admin_user`
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
--  Records of `admin_user`
-- ----------------------------
BEGIN;
INSERT INTO `admin_user` VALUES ('4', 'admin', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com', '2015-09-29 14:08:47', '::1', '2015-01-29 15:10:34', null, null, null, '1', 'System', 'Administrator', '1', '1', null), ('5', 'chetra', '202cb962ac59075b964b07152d234b70', 'eing.chetra@gmail.com', '2015-09-29 14:08:47', '::1', '2015-02-02 17:26:36', null, null, null, '2', 'eing', 'chetra', '0', '0', null), ('1497', 'store', 'e10adc3949ba59abbe56e057f20f883e', 'store@green.com', '2015-09-29 14:08:47', '::1', '2015-06-26 08:10:54', null, null, null, '21', 'Green', 'Store', '0', '1', null);
COMMIT;

-- ----------------------------
--  Table structure for `ci_sessions`
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
--  Records of `ci_sessions`
-- ----------------------------
BEGIN;
INSERT INTO `ci_sessions` VALUES ('178232be00f018db1fd065952c9465ef', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:40.0) Gecko/20100101 Firefox/40.0', '1443529146', 'a:13:{s:9:\"user_data\";s:0:\"\";s:6:\"userid\";s:1:\"4\";s:9:\"user_name\";s:5:\"admin\";s:8:\"password\";s:32:\"202cb962ac59075b964b07152d234b70\";s:6:\"roleid\";s:1:\"1\";s:9:\"last_name\";s:6:\"System\";s:10:\"first_name\";s:13:\"Administrator\";s:10:\"last_visit\";s:19:\"2015-09-29 12:42:22\";s:13:\"last_visit_ip\";s:3:\"::1\";s:9:\"moduleids\";a:6:{i:0;a:1:{s:8:\"moduleid\";s:1:\"7\";}i:1;a:1:{s:8:\"moduleid\";s:2:\"10\";}i:2;a:1:{s:8:\"moduleid\";s:2:\"15\";}i:3;a:1:{s:8:\"moduleid\";s:2:\"12\";}i:4;a:1:{s:8:\"moduleid\";s:2:\"11\";}i:5;a:1:{s:8:\"moduleid\";s:1:\"1\";}}s:12:\"ModuleInfors\";a:6:{i:7;a:4:{s:8:\"moduleid\";s:1:\"7\";s:11:\"module_name\";s:4:\"Menu\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:10;a:0:{}i:15;a:4:{s:8:\"moduleid\";s:2:\"15\";s:11:\"module_name\";s:13:\"Video Youtube\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:12;a:4:{s:8:\"moduleid\";s:2:\"12\";s:11:\"module_name\";s:6:\"Banner\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:11;a:4:{s:8:\"moduleid\";s:2:\"11\";s:11:\"module_name\";s:7:\"Article\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:1;a:0:{}}s:10:\"PageInfors\";a:6:{i:7;a:2:{i:63;a:14:{s:6:\"pageid\";s:2:\"63\";s:9:\"page_name\";s:9:\"Menu List\";s:4:\"link\";s:10:\"menu/index\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"10\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 15:53:36\";s:4:\"icon\";s:7:\"fa-bars\";}i:64;a:14:{s:6:\"pageid\";s:2:\"64\";s:9:\"page_name\";s:12:\"Add New Menu\";s:4:\"link\";s:8:\"menu/add\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"11\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 15:53:58\";s:4:\"icon\";s:7:\"fa-bars\";}}i:10;a:2:{i:67;a:14:{s:6:\"pageid\";s:2:\"67\";s:9:\"page_name\";s:12:\"Product List\";s:4:\"link\";s:13:\"product/index\";s:8:\"moduleid\";s:2:\"10\";s:5:\"order\";s:1:\"1\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-12 17:10:07\";s:4:\"icon\";s:7:\"fa-bars\";}i:68;a:14:{s:6:\"pageid\";s:2:\"68\";s:9:\"page_name\";s:16:\"Add New Products\";s:4:\"link\";s:11:\"product/add\";s:8:\"moduleid\";s:2:\"10\";s:5:\"order\";s:1:\"2\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-12 17:10:46\";s:4:\"icon\";s:7:\"fa-bars\";}}i:15;a:2:{i:72;a:14:{s:6:\"pageid\";s:2:\"72\";s:9:\"page_name\";s:10:\"Video List\";s:4:\"link\";s:13:\"youtube/index\";s:8:\"moduleid\";s:2:\"15\";s:5:\"order\";s:1:\"0\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-29 12:41:44\";s:4:\"icon\";s:7:\"fa-bars\";}i:73;a:14:{s:6:\"pageid\";s:2:\"73\";s:9:\"page_name\";s:9:\"New Video\";s:4:\"link\";s:11:\"youtube/add\";s:8:\"moduleid\";s:2:\"15\";s:5:\"order\";s:1:\"1\";s:9:\"is_insert\";s:1:\"0\";s:9:\"is_update\";s:1:\"0\";s:9:\"is_delete\";s:1:\"0\";s:7:\"is_show\";s:1:\"0\";s:8:\"is_print\";s:1:\"0\";s:9:\"is_export\";s:1:\"0\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-29 12:42:17\";s:4:\"icon\";s:7:\"fa-bars\";}}i:12;a:2:{i:69;a:14:{s:6:\"pageid\";s:2:\"69\";s:9:\"page_name\";s:11:\"Banner List\";s:4:\"link\";s:20:\"setup/Setupads/index\";s:8:\"moduleid\";s:2:\"12\";s:5:\"order\";s:1:\"0\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-13 17:17:29\";s:4:\"icon\";s:7:\"fa-bars\";}i:70;a:14:{s:6:\"pageid\";s:2:\"70\";s:9:\"page_name\";s:14:\"Add New Banner\";s:4:\"link\";s:18:\"setup/Setupads/add\";s:8:\"moduleid\";s:2:\"12\";s:5:\"order\";s:1:\"1\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-13 17:17:18\";s:4:\"icon\";s:7:\"fa-bars\";}}i:11;a:2:{i:65;a:14:{s:6:\"pageid\";s:2:\"65\";s:9:\"page_name\";s:12:\"Article List\";s:4:\"link\";s:13:\"article/index\";s:8:\"moduleid\";s:2:\"11\";s:5:\"order\";s:1:\"4\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 16:46:23\";s:4:\"icon\";s:7:\"fa-bars\";}i:66;a:14:{s:6:\"pageid\";s:2:\"66\";s:9:\"page_name\";s:15:\"Add New Article\";s:4:\"link\";s:11:\"article/add\";s:8:\"moduleid\";s:2:\"11\";s:5:\"order\";s:1:\"5\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 16:47:08\";s:4:\"icon\";s:7:\"fa-bars\";}}i:1;a:4:{i:5;a:14:{s:6:\"pageid\";s:1:\"5\";s:9:\"page_name\";s:4:\"Page\";s:4:\"link\";s:12:\"setting/page\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"0\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"0\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"0\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 17:00:01\";s:4:\"icon\";s:9:\"fa-file-o\";}i:6;a:14:{s:6:\"pageid\";s:1:\"6\";s:9:\"page_name\";s:12:\"User Profile\";s:4:\"link\";s:12:\"setting/user\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"0\";s:9:\"is_export\";s:1:\"0\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:56:20\";s:4:\"icon\";s:7:\"fa-user\";}i:7;a:14:{s:6:\"pageid\";s:1:\"7\";s:9:\"page_name\";s:9:\"User Role\";s:4:\"link\";s:12:\"setting/role\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:57:09\";s:4:\"icon\";s:7:\"fa-user\";}i:8;a:14:{s:6:\"pageid\";s:1:\"8\";s:9:\"page_name\";s:11:\"Role Access\";s:4:\"link\";s:18:\"setting/permission\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"0\";s:7:\"is_show\";s:1:\"0\";s:8:\"is_print\";s:1:\"0\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:56:46\";s:4:\"icon\";s:9:\"fa-wrench\";}}}s:10:\"PageAction\";a:6:{i:7;a:2:{i:63;s:1:\"1\";i:64;s:1:\"1\";}i:10;a:2:{i:67;s:1:\"1\";i:68;s:1:\"1\";}i:15;a:2:{i:72;s:1:\"1\";i:73;s:1:\"0\";}i:12;a:2:{i:69;s:1:\"1\";i:70;s:1:\"1\";}i:11;a:2:{i:65;s:1:\"1\";i:66;s:1:\"1\";}i:1;a:4:{i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"0\";}}}');
COMMIT;

-- ----------------------------
--  Table structure for `dashboard_item`
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
--  Records of `dashboard_item`
-- ----------------------------
BEGIN;
INSERT INTO `dashboard_item` VALUES ('1', 'Student', '3', '10', '1', 'top_left');
COMMIT;

-- ----------------------------
--  Table structure for `tblarticle`
-- ----------------------------
DROP TABLE IF EXISTS `tblarticle`;
CREATE TABLE `tblarticle` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `article_title_kh` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content_kh` text CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `is_active` int(1) NOT NULL,
  `meta_keyword` text CHARACTER SET utf8 NOT NULL,
  `meta_desc` text CHARACTER SET utf8 NOT NULL,
  `location_id` int(11) NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `tblarticle`
-- ----------------------------
BEGIN;
INSERT INTO `tblarticle` VALUES ('1', 'Wellcome to our Company !', 'សូមស្វាកមន៍', '<p>\n	<span style=\"font-size:16px;\">ដើម្បីចូលរួមលើកស្ទួយ ក៏ដូចជាអភិវឌ្ឍនទីក្រុងភ្នំពេញ អោយស្របទៅតាមយុទ្ធសាស្រ្តរបស់រាជរដ្ឋាភិបាល ក្រុមហ៊ុន បាន និងកំពុងសាងសង់ លំនៅដ្ឋានដ៍ប្រណិតៗជាច្រើនកន្លែងសម្រាប់បម្រើជូនដល់អតិថិជនដែលប្រាថ្នាចង់​ បានការ​រស់នៅក្នុងលំនៅដ្ឋានបែបទំនើប និងទាន់សម័យជាលក្ខណៈឯកជន។​ ការសាងសង់គម្រោង&nbsp; គឺជាជោគជ័យទី១ របស់ក្រុមហ៊ុន ​ ហើយភាពជោគជ័យនេះ បានមកពីការគាំទ្រ ក៏ដូចជាការវាយតម្លៃ ខ្ពស់លើ​សំណង់លំនៅដ្ឋានរបស់អតិថិជនទាំង​អស់។ នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។ ក្រុមហ៊ុន ​ ​​​សូម​​​ថ្លែង​​​អំណរ​​​គុណយ៉ាងជ្រាលជ្រៅចំពោះ​​អតិថិជន​​​ទាំង​​​អស់​ដែល តែងតែជួយគាំទ្រសំណង់ លំនៅដ្ឋានរបស់ក្រុមហ៊ុន តាំងពីដើមរហូតមកដល់ពេលនេះ។​</span></p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenasique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio</p>\n', '1', '', '', '0'), ('2', 'Excellence in services', 'ឧត្តមភាពក្នុងការផ្តល់សេវាកម្ម', '<p>\n	នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន&nbsp; នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat</p>\n', '1', '', '', '4'), ('9', 'First in Qulity', 'គុណភាពឈានមុខ', '<p>\n	នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat</p>\n', '1', '', '', '4'), ('10', 'Vareity in Products', 'ភាពខុសគ្នានៅក្នុងផលិតផល', '<p>\n	នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន&nbsp; នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat</p>\n', '1', '', '', '4'), ('11', 'Projects 3', 'ការងារទី ៣', '<p>\n	នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenasique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio</p>\n', '1', '', '', '3'), ('12', 'Projects 4', 'ការងារទី ៤', '<p>\n	នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenasique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio</p>\n', '1', '', '', '3'), ('13', 'Projects 5', 'ការងារទី ៥', '<p>\n	នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenasique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio</p>\n', '1', '', '', '3'), ('14', 'Projects 6', 'ការងារទី ៦', '<p>\n	នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenasique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio</p>\n', '1', '', '', '3'), ('15', 'Projects 7', 'ការងារទី ៧', '<p>\n	នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន ជីប&nbsp;ម៉ុង​​​&nbsp;លែន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenasique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio</p>\n', '1', '', '', '3'), ('16', 'About Us', 'អំពីយើង', '<p>\n	<span id=\"result_box\" lang=\"km\"><span title=\"WHO WE ARE?\n\n\">យើង​ជា​អ្នកណា​?<br />\n	<br />\n	</span><span title=\"Am is a Cambodian property developer, which is a subsidiary of the BST, Ltd., one of the leading companies in Cambodia.\">ព្រឹក ​នេះ​គឺ​ក្រុមហ៊ុន​អភិវឌ្ឍន៍​អចលន​ទ្រព្យ​កម្ពុជា​ដែល​ជា​ក្រុមហ៊ុន​បុត្រ​ សម្ព័ន្ធ​របស់​រិ៍​, Ltd ដែល​ជា​ក្រុមហ៊ុន​នាំ​មុខ​គេ​នៅ​កម្ពុជា​។ </span><span title=\"BST, Ltd. is well known at importing and distributing of top quality construction materials from well-known manufacturers around the world.\">រិ៍ ​, Ltd ត្រូវ​បាន​គេ​ស្គាល់​យ៉ាង​ល្អ​នៅ​ក្នុង​ការ​នាំ​ចូល​និង​ចែក​ចាយ​សម្ភារ​ សំណង់​ដែល​មាន​គុណភាព​កំពូល​ពី​ក្រុមហ៊ុន​ផលិត​ល្បី​នៅ​ជុំវិញ​ពិភពលោក​។ </span><span title=\"In addition, Chip Mong Group, Ltd. also owns factories, such as concrete factories and Cambodia Beer factory.\n\n\">លើស​ពី​នេះ​ទៀត​ក្រុមហ៊ុន​ជី​ប​ម៉ុង​គ្រុប​អិ​ល​ធី​ឌី​ជា​ម្ចាស់​រោងចក្រ​ដូច​ជា​រោង​ចក្រ​បេតុង​និង​រោង​ចក្រ​ស្រាបៀ​រ​កម្ពុជា​។<br />\n	<br />\n	</span><span title=\"Chip Mong Land\'s first project namely is under construction within the residence development area of 20 hectares.\">គម្រោង ​ការ​ដំបូង​របស់​ក្រុមហ៊ុន​ជី​ប​ម៉ុង​ដីធ្លី​គឺ​ស្ថិត​នៅ​ក្រោម​ការ​សាង​សង់ ​នៅ​ក្នុង​តំបន់​អភិវឌ្ឍន៍​លំនៅ​ដ្ឋាន​ចំនួន 20 ហិ​ក​តា​។ </span><span title=\"brings varieties of luxurious private houses such as King Villas, Queen Villas, Twin Houses, Link Houses and Shop Houses.\">បាន ​នាំ​មក​នូវ​ពូជ​របស់​ផ្ទះ​ឯកជន​ប្រណិត​ដូចជា​ព្រះមហាក្សត្រ​វីឡា​ព្រះ​ មហាក្សត្រី​វីឡា​, ភ្លោះ​ផ្ទះ​, គេហទំព័រ​ភ្ជាប់​ហាង​លក់​ផ្ទះ​និង​ផ្ទះ​។ </span><span title=\"These villas are well equipped with fashionable and modern furniture.\">វីឡា​ទាំង​នេះ​ត្រូវ​បាន​បំពាក់​ផង​ដែរ​ជាមួយ​នឹង​គ្រឿង​សង្ហា​រឹម​ម៉ូត​និង​សម័យ​ទំនើប​។ </span><span title=\"Meanwhile, the company also builds a beautiful garden, a clubhouse, a swimming pool and many other leisure places for your different preferences.\n\n\">ទន្ទឹម​នឹង​នេះ​ដែរ​ក្រុម​ហ៊ុន​នេះ​ផង​ដែរ​បាន​កសាង​ជា​សួនច្បារ​ស្រស់​ ស្អាត​មួយ clubhouse អាង​ហែល​ទឹក​និង​កន្លែង​កម្សាន្ត​ជា​ច្រើន​ទៀត​សម្រាប់​ចំណង់​ចំណូល​ចិត្ត​ ផ្សេង​គ្នា​របស់​អ្នក​។<br />\n	<br />\n	</span><span title=\"The Park Land Sen Sok has been conceived and constructed by Khmer and foreign skillful architects and engineers with years of experiences in the construction sector locally and internationally.\n\n\">ឧទ្យាន​ដីធ្លី​សែន​សុខ​ត្រូវ​បាន​បង្កើត​និង​បាន​សាងសង់​ឡើង​ដោយ​ ស្ថាបត្យករ​និង​វិស្វករ​បរទេស​មាន​ជំនាញ​ខ្មែរ​និង​ជាមួយ​ឆ្នាំ​នៃ​ បទពិសោធន៍​ក្នុង​វិស័យ​សំណង់​ក្នុង​ស្រុក​និង​អន្តរជាតិ​។<br />\n	<br />\n	</span><span title=\"The Park Land Sen Sok is located in a safe suburb of Phnom Penh on street 1928 (Oknha Mong Rethth), Sangkat Phnom Penh Thmey, Khan Sen Sok, which can easily get access to schools, hospitals, shopping centers, prominent public institutions, private\">ឧទ្យាន ​ដីធ្លី​សែន​សុខ​ត្រូវ​បាន​ស្ថិត​នៅ​ជា​យ​ក្រុង​ដែល​មាន​សុវត្ថិភាព​នៅ​ រាជធានី​ភ្នំពេញ​នៅ​លើ​ផ្លូវ 1928 (ឧកញ៉ា​ម៉ុង Rethth​)​, ​​សង្កាត់​ភ្នំពេញ​ថ្មី​, ខណ្ឌ​សែនសុខ​, ដែល​បាន​យ៉ាង​ងាយ​ស្រួល​អាច​ទទួល​បាន​ការ​ចូល​ដំណើរ​ការ​ទៅ​សាលារៀន​ មន្ទីរពេទ្យ​ផ្សារ​ទំនើប​ស្ថាប័ន​សាធារណៈ​លេចធ្លោ​ឯកជន </span><span title=\"companies and safe, convenient public infrastructure.\n\n\">ក្រុមហ៊ុន​និង​មាន​សុវត្ថិភាព​, ហេដ្ឋារចនាសម្ព័ន្ធ​សាធារណៈ​ងាយ​ស្រួល​។<br />\n	<br />\n	</span><span title=\"BST\'s customers can purchase their houses by paying in full and get a special discount or by mortgage from CML for up to 17 years or from banks.\n\n\n\">មាន​អតិថិជន​របស់​អាច​ទិញ​រិ៍​ផ្ទះ​របស់​ពួក​គេ​នៅ​ក្នុង​ពេញ​ដោយ​ការ​បង់ ​ប្រាក់​និង​ទទួល​បាន​ការ​បញ្ចុះតម្លៃ​ពិសេស​ពី​ឬ​ដោយ​ការ​ប្រាក់​កម្ចី​ទិញ ​ផ្ទះ​រហូត​ដល់​ទៅ CML 17 ឆ្នាំ​ឬ​ពី​ធនាគារ​។<br />\n	<br />\n	<br />\n	</span><span title=\"Thank you for visiting us.\n\n\">សូម​អរគុណ​ចំពោះ​ការ​ទស្សនា​ពួក​យើង​។<br />\n	<br />\n	</span><span title=\"Trust in Living!\">ការ​ជឿ​ទុកចិត្ត​នៅ​ក្នុង​ការរស់នៅ​!</span></span></p>\n', '<div class=\"sf-right-header\">\n	<p class=\"font-header\">\n		WHO WE ARE?</p>\n</div>\n<p>\n	Am is a Cambodian property developer, which is a subsidiary of the BST, Ltd., one of the leading companies in Cambodia. BST, Ltd. is well known at importing and distributing of top quality construction materials from well-known manufacturers around the world. In addition, Chip Mong Group, Ltd. also owns factories, such as concrete factories and Cambodia Beer factory.</p>\n<p>\n	Chip Mong Land&rsquo;s first project namely is under construction within the residence development area of 20 hectares.&nbsp; brings varieties of luxurious private houses such as King Villas, Queen Villas, Twin Houses, Link Houses and Shop Houses. These villas are well equipped with fashionable and modern furniture. Meanwhile, the company also builds a beautiful garden, a clubhouse, a swimming pool and many other leisure places for your different preferences.</p>\n<p>\n	The Park Land Sen Sok has been conceived and constructed by Khmer and foreign skillful architects and engineers with years of experiences in the construction sector locally and internationally.</p>\n<p>\n	The Park Land Sen Sok is located in a safe suburb of Phnom Penh on street 1928 (Oknha Mong Rethth), Sangkat Phnom Penh Thmey, Khan Sen Sok, which can easily get access to schools, hospitals, shopping centers, prominent public institutions, private companies and safe, convenient public infrastructure.</p>\n<p>\n	BST&rsquo;s customers can purchase their houses by paying in full and get a special discount or by mortgage from CML for up to 17 years or from banks.</p>\n<p>\n	&nbsp;</p>\n<p>\n	Thank you for visiting us.</p>\n<p>\n	Trust in Living!</p>', '1', '', '', '0'), ('17', 'Services', 'សេវាកម្ម', '<p>\n	<span id=\"result_box\" lang=\"km\"><span title=\"Am is a Cambodian property developer, which is a subsidiary of the BST, Ltd., one of the leading companies in Cambodia.\">ព្រឹក ​នេះ​គឺ​ក្រុមហ៊ុន​អភិវឌ្ឍន៍​អចលន​ទ្រព្យ​កម្ពុជា​ដែល​ជា​ក្រុមហ៊ុន​បុត្រ​ សម្ព័ន្ធ​របស់​រិ៍​, Ltd ដែល​ជា​ក្រុមហ៊ុន​នាំ​មុខ​គេ​នៅ​កម្ពុជា​។ </span><span title=\"BST, Ltd. is well known at importing and distributing of top quality construction materials from well-known manufacturers around the world.\">រិ៍ ​, Ltd ត្រូវ​បាន​គេ​ស្គាល់​យ៉ាង​ល្អ​នៅ​ក្នុង​ការ​នាំ​ចូល​និង​ចែក​ចាយ​សម្ភារ​ សំណង់​ដែល​មាន​គុណភាព​កំពូល​ពី​ក្រុមហ៊ុន​ផលិត​ល្បី​នៅ​ជុំវិញ​ពិភពលោក​។ </span><span title=\"In addition, Chip Mong Group, Ltd. also owns factories, such as concrete factories and Cambodia Beer factory.\n\n\">លើស​ពី​នេះ​ទៀត​ក្រុមហ៊ុន​ជី​ប​ម៉ុង​គ្រុប​អិ​ល​ធី​ឌី​ជា​ម្ចាស់​រោងចក្រ​ដូច​ជា​រោង​ចក្រ​បេតុង​និង​រោង​ចក្រ​ស្រាបៀ​រ​កម្ពុជា​។<br />\n	<br />\n	</span><span title=\"Chip Mong Land\'s first project namely is under construction within the residence development area of 20 hectares.\">គម្រោង ​ការ​ដំបូង​របស់​ក្រុមហ៊ុន​ជី​ប​ម៉ុង​ដីធ្លី​គឺ​ស្ថិត​នៅ​ក្រោម​ការ​សាង​សង់ ​នៅ​ក្នុង​តំបន់​អភិវឌ្ឍន៍​លំនៅ​ដ្ឋាន​ចំនួន 20 ហិ​ក​តា​។ </span><span title=\"brings varieties of luxurious private houses such as King Villas, Queen Villas, Twin Houses, Link Houses and Shop Houses.\">បាន ​នាំ​មក​នូវ​ពូជ​របស់​ផ្ទះ​ឯកជន​ប្រណិត​ដូចជា​ព្រះមហាក្សត្រ​វីឡា​ព្រះ​ មហាក្សត្រី​វីឡា​, ភ្លោះ​ផ្ទះ​, គេហទំព័រ​ភ្ជាប់​ហាង​លក់​ផ្ទះ​និង​ផ្ទះ​។ </span><span title=\"These villas are well equipped with fashionable and modern furniture.\">វីឡា​ទាំង​នេះ​ត្រូវ​បាន​បំពាក់​ផង​ដែរ​ជាមួយ​នឹង​គ្រឿង​សង្ហា​រឹម​ម៉ូត​និង​សម័យ​ទំនើប​។ </span><span title=\"Meanwhile, the company also builds a beautiful garden, a clubhouse, a swimming pool and many other leisure places for your different preferences.\n\n\">ទន្ទឹម​នឹង​នេះ​ដែរ​ក្រុម​ហ៊ុន​នេះ​ផង​ដែរ​បាន​កសាង​ជា​សួនច្បារ​ស្រស់​ ស្អាត​មួយ clubhouse អាង​ហែល​ទឹក​និង​កន្លែង​កម្សាន្ត​ជា​ច្រើន​ទៀត​សម្រាប់​ចំណង់​ចំណូល​ចិត្ត​ ផ្សេង​គ្នា​របស់​អ្នក​។<br />\n	<br />\n	</span><span title=\"The Park Land Sen Sok has been conceived and constructed by Khmer and foreign skillful architects and engineers with years of experiences in the construction sector locally and internationally.\n\n\">ឧទ្យាន​ដីធ្លី​សែន​សុខ​ត្រូវ​បាន​បង្កើត​និង​បាន​សាងសង់​ឡើង​ដោយ​ ស្ថាបត្យករ​និង​វិស្វករ​បរទេស​មាន​ជំនាញ​ខ្មែរ​និង​ជាមួយ​ឆ្នាំ​នៃ​ បទពិសោធន៍​ក្នុង​វិស័យ​សំណង់​ក្នុង​ស្រុក​និង​អន្តរជាតិ​។<br />\n	<br />\n	</span><span title=\"The Park Land Sen Sok is located in a safe suburb of Phnom Penh on street 1928 (Oknha Mong Rethth), Sangkat Phnom Penh Thmey, Khan Sen Sok, which can easily get access to schools, hospitals, shopping centers, prominent public institutions, private\">ឧទ្យាន ​ដីធ្លី​សែន​សុខ​ត្រូវ​បាន​ស្ថិត​នៅ​ជា​យ​ក្រុង​ដែល​មាន​សុវត្ថិភាព​នៅ​ រាជធានី​ភ្នំពេញ​នៅ​លើ​ផ្លូវ 1928 (ឧកញ៉ា​ម៉ុង Rethth​)​, ​​សង្កាត់​ភ្នំពេញ​ថ្មី​, ខណ្ឌ​សែនសុខ​, ដែល​បាន​យ៉ាង​ងាយ​ស្រួល​អាច​ទទួល​បាន​ការ​ចូល​ដំណើរ​ការ​ទៅ​សាលារៀន​ មន្ទីរពេទ្យ​ផ្សារ​ទំនើប​ស្ថាប័ន​សាធារណៈ​លេចធ្លោ​ឯកជន </span><span title=\"companies and safe, convenient public infrastructure.\n\n\">ក្រុមហ៊ុន​និង​មាន​សុវត្ថិភាព​, ហេដ្ឋារចនាសម្ព័ន្ធ​សាធារណៈ​ងាយ​ស្រួល​។<br />\n	<br />\n	</span><span title=\"BST\'s customers can purchase their houses by paying in full and get a special discount or by mortgage from CML for up to 17 years or from banks.\n\n\n\">មាន​អតិថិជន​របស់​អាច​ទិញ​រិ៍​ផ្ទះ​របស់​ពួក​គេ​នៅ​ក្នុង​ពេញ​ដោយ​ការ​បង់ ​ប្រាក់​និង​ទទួល​បាន​ការ​បញ្ចុះតម្លៃ​ពិសេស​ពី​ឬ​ដោយ​ការ​ប្រាក់​កម្ចី​ទិញ ​ផ្ទះ​រហូត​ដល់​ទៅ CML 17 ឆ្នាំ​ឬ​ពី​ធនាគារ​។</span></span></p>\n', '<p>\n	Am is a Cambodian property developer, which is a subsidiary of the BST, Ltd., one of the leading companies in Cambodia. BST, Ltd. is well known at importing and distributing of top quality construction materials from well-known manufacturers around the world. In addition, Chip Mong Group, Ltd. also owns factories, such as concrete factories and Cambodia Beer factory.</p>\n<p>\n	Chip Mong Land&rsquo;s first project namely is under construction within the residence development area of 20 hectares.&nbsp; brings varieties of luxurious private houses such as King Villas, Queen Villas, Twin Houses, Link Houses and Shop Houses. These villas are well equipped with fashionable and modern furniture. Meanwhile, the company also builds a beautiful garden, a clubhouse, a swimming pool and many other leisure places for your different preferences.</p>\n<p>\n	The Park Land Sen Sok has been conceived and constructed by Khmer and foreign skillful architects and engineers with years of experiences in the construction sector locally and internationally.</p>\n<p>\n	The Park Land Sen Sok is located in a safe suburb of Phnom Penh on street 1928 (Oknha Mong Rethth), Sangkat Phnom Penh Thmey, Khan Sen Sok, which can easily get access to schools, hospitals, shopping centers, prominent public institutions, private companies and safe, convenient public infrastructure.</p>\n<p>\n	BST&rsquo;s customers can purchase their houses by paying in full and get a special discount or by mortgage from CML for up to 17 years or from banks.</p>\n', '1', '', '', '0'), ('18', 'Promotion', 'ការផ្សព្វផ្សាយ', '<p>\n	<span style=\"font-size:16px;\">ដើម្បីចូលរួមលើកស្ទួយ ក៏ដូចជាអភិវឌ្ឍនទីក្រុងភ្នំពេញ អោយស្របទៅតាមយុទ្ធសាស្រ្តរបស់រាជរដ្ឋាភិបាល ក្រុមហ៊ុន បាន និងកំពុងសាងសង់ លំនៅដ្ឋានដ៍ប្រណិតៗជាច្រើនកន្លែងសម្រាប់បម្រើជូនដល់អតិថិជនដែលប្រាថ្នាចង់​ បានការ​រស់នៅក្នុងលំនៅដ្ឋានបែបទំនើប និងទាន់សម័យជាលក្ខណៈឯកជន។​ ការសាងសង់គម្រោង&nbsp; គឺជាជោគជ័យទី១ របស់ក្រុមហ៊ុន ​ ហើយភាពជោគជ័យនេះ បានមកពីការគាំទ្រ ក៏ដូចជាការវាយតម្លៃ ខ្ពស់លើ​សំណង់លំនៅដ្ឋានរបស់អតិថិជនទាំង​អស់។ នាពេលឆាប់ៗខាងមុខនេះក្រុមហ៊ុន នឹងនាំង​មក​ជូន​អតិថិជន​នូវ​​គម្រោង​គេហដ្ឋាន​ចំនួនបី​បន្ថែមទៀត។ ហើយ យើងខ្ញុំសូមសន្យាថា នឹងបន្តផ្តល់ជូននូវសំណង់លំនៅដ្ឋានដ៏ល្អប្រណិតៗនៅលើទីតាំងល្អប្រកបដោយសុ វត្តិភាព​ និង គុណភាពខ្ពស់នៃសំណង់ ព្រមទាំងការរចនាម៉ូតទាំងក្នុង និងក្រៅលំនៅដ្ឋាន​​ផងដែរ។ ក្រុមហ៊ុន ​ ​​​សូម​​​ថ្លែង​​​អំណរ​​​គុណយ៉ាងជ្រាលជ្រៅចំពោះ​​អតិថិជន​​​ទាំង​​​អស់​ដែល តែងតែជួយគាំទ្រសំណង់ លំនៅដ្ឋានរបស់ក្រុមហ៊ុន តាំងពីដើមរហូតមកដល់ពេលនេះ។​</span></p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenasique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio</p>\n', '1', '', '', '0');
COMMIT;

-- ----------------------------
--  Table structure for `tblbanner`
-- ----------------------------
DROP TABLE IF EXISTS `tblbanner`;
CREATE TABLE `tblbanner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `location_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `orders` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `tblbanner`
-- ----------------------------
BEGIN;
INSERT INTO `tblbanner` VALUES ('8', 'banner 2', '1', '1', '1', '1'), ('9', 'banner 1', '1', '1', '2', '2'), ('10', 'banner 3', '1', '1', '1', '1'), ('11', 'partner 1', '2', '1', '1', ''), ('12', 'partner 2', '2', '1', '2', ''), ('13', 'partner 3', '2', '1', '3', ''), ('14', 'partner 4', '2', '1', '0', ''), ('15', 'parner 5', '2', '1', '0', ''), ('16', 'partner 6', '2', '1', '0', ''), ('17', 'partner 7', '2', '1', '0', ''), ('18', 'partner 8', '2', '1', '0', ''), ('19', 'partner 9', '2', '1', '0', ''), ('20', 'partner 10', '2', '1', '0', ''), ('21', 'Partner 11', '2', '1', '0', '');
COMMIT;

-- ----------------------------
--  Table structure for `tblcontact`
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
--  Table structure for `tblgallery`
-- ----------------------------
DROP TABLE IF EXISTS `tblgallery`;
CREATE TABLE `tblgallery` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `gallery_type` int(1) NOT NULL,
  `article_id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `home` int(1) NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `tblgallery`
-- ----------------------------
BEGIN;
INSERT INTO `tblgallery` VALUES ('1', '', 'banner_pic1.jpg', '0', '1', '0', '0'), ('2', '', 'banner1.jpg', '0', '1', '0', '0'), ('17', '', 'banner1.jpg', '0', '2', '0', '0'), ('18', '', 'banner_pic1.jpg', '0', '9', '0', '0'), ('19', '', 'interior-design-586118-2560x1600-hq-dsk-wallpapers.jpg', '0', '10', '0', '0'), ('20', '', 'banner1.jpg', '0', '11', '0', '0'), ('21', '', 'interior-design-586118-2560x1600-hq-dsk-wallpapers.jpg', '0', '12', '0', '0'), ('22', '', 'lounge-interior-design-5-red-living-room-interior-design-1920-x-1200.jpg', '0', '13', '0', '0'), ('23', '', 'Purple-in-the-interior-design.jpg', '0', '14', '0', '0'), ('24', '', 'tumblr_nb818f1l1I1tch720o1_1280.jpg', '0', '15', '0', '0'), ('25', 'Video 2', 'NqMyhLh6yA4', '1', '0', '2', '0'), ('26', 'Video 1', 'f0BkV6OV8z4', '1', '0', '0', '1');
COMMIT;

-- ----------------------------
--  Table structure for `tbllayout`
-- ----------------------------
DROP TABLE IF EXISTS `tbllayout`;
CREATE TABLE `tbllayout` (
  `layout_id` int(11) NOT NULL AUTO_INCREMENT,
  `layout_name` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`layout_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `tbllayout`
-- ----------------------------
BEGIN;
INSERT INTO `tbllayout` VALUES ('1', 'Full Layout', '1');
COMMIT;

-- ----------------------------
--  Table structure for `tbllocation`
-- ----------------------------
DROP TABLE IF EXISTS `tbllocation`;
CREATE TABLE `tbllocation` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `location_type` varchar(55) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `tbllocation`
-- ----------------------------
BEGIN;
INSERT INTO `tbllocation` VALUES ('1', 'Main Slider', 'banner', '1'), ('2', 'Partner', 'banner', '1'), ('3', 'Latest Project', 'category', '1'), ('4', 'Featured', 'category', '1'), ('5', 'Main Menu', 'menu', '1'), ('6', 'Products Bottom', 'menu', '1'), ('7', 'Company Bottom', 'menu', '1');
COMMIT;

-- ----------------------------
--  Table structure for `tblmenus`
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
  `is_active` int(11) NOT NULL DEFAULT '1',
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `layout_id` int(11) NOT NULL,
  `modified_by` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `menu_name_kh` varchar(255) NOT NULL,
  `article_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `tblmenus`
-- ----------------------------
BEGIN;
INSERT INTO `tblmenus` VALUES ('23', 'Service', null, '23', '0', '0', '2', '1', null, null, '0', null, null, 'សេវាកម្ម', '17', '5'), ('33', 'Testing Product', null, '33', '0', '0', '2', '1', null, null, '0', null, null, 'សាកល្បង', '2', '6'), ('34', 'About Company', null, '34', '0', '0', '2', '1', null, null, '0', null, null, 'អំពីយើង', '16', '7'), ('35', 'Service 1', null, '23-35', '23', '1', '2', '0', null, null, '0', null, null, 'អំពីយើង', '17', '5'), ('32', 'Promotion', null, '32', '0', '0', '2', '1', null, null, '0', null, null, 'ការផ្សព្វផ្សាយ', '18', '5'), ('31', 'About Us', null, '31', '0', '0', '1', '1', null, null, '0', null, null, 'អំពីយើង', '16', '5');
COMMIT;

-- ----------------------------
--  Table structure for `tblproduct`
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
--  Records of `tblproduct`
-- ----------------------------
BEGIN;
INSERT INTO `tblproduct` VALUES ('8', 'Product1 ', '3', '<p>\n	<img alt=\"\" src=\"/htdocs/cljr/data/images/1410600813.jpg\" style=\"width: 941px; height: 496px;\" />asdfasdfa</p>\n', '<p>\n	asdfasfg</p>\n', '1'), ('9', 'Product 2', '3', '<p>agfsdgwet</p>\n', '<p>wertwetgwt</p>\n', '1'), ('10', 'Product 3', '3', '<p>srtwer</p>\n', '<p><img alt=\"\" src=\"/ckfinder/userfiles/files/201409141410683168993.jpg\" style=\"height:1086px; width:950px\" /></p>\n', '1');
COMMIT;

-- ----------------------------
--  Table structure for `z_blog`
-- ----------------------------
DROP TABLE IF EXISTS `z_blog`;
CREATE TABLE `z_blog` (
  `site_show_blogid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`site_show_blogid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `z_blog`
-- ----------------------------
BEGIN;
INSERT INTO `z_blog` VALUES ('1', 'Menu Top'), ('2', 'Menu Left'), ('3', 'Menu Buttom'), ('4', 'Hot Product'), ('5', 'Menu Right');
COMMIT;

-- ----------------------------
--  Table structure for `z_currency`
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
--  Records of `z_currency`
-- ----------------------------
BEGIN;
INSERT INTO `z_currency` VALUES ('1', 'USD', 'US Dollars', '$', '1', '1', 'US');
COMMIT;

-- ----------------------------
--  Table structure for `z_module`
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
--  Records of `z_module`
-- ----------------------------
BEGIN;
INSERT INTO `z_module` VALUES ('1', 'Setting', null, '0', '0', '2'), ('7', 'Menu', null, null, '1', '2'), ('10', 'Product', null, null, '0', '2'), ('11', 'Article', null, null, '1', '2'), ('12', 'Banner', null, null, '1', '2'), ('13', 'Contact', null, null, '0', '2'), ('15', 'Video Youtube', null, null, '1', '2');
COMMIT;

-- ----------------------------
--  Table structure for `z_page`
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
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `z_page`
-- ----------------------------
BEGIN;
INSERT INTO `z_page` VALUES ('5', 'Page', 'setting/page', '1', null, '0', '1', '0', '1', '1', '0', '1', '2015-02-05 17:00:01', '1', 'fa-file-o', null), ('6', 'User Profile', 'setting/user', '1', null, '1', '1', '1', '1', '0', '0', '1', '2015-02-05 16:56:20', '1', 'fa-user', null), ('7', 'User Role', 'setting/role', '1', null, '1', '1', '1', '1', '1', '1', '1', '2015-02-05 16:57:09', '1', 'fa-user', null), ('8', 'Role Access', 'setting/permission', '1', null, '1', '1', '0', '0', '0', '1', '1', '2015-02-05 16:56:46', '1', 'fa-wrench', null), ('57', 'Shipping Company', 'shipping/shipping', '11', '1', '1', '1', '1', '1', '1', '1', '1', '2015-06-29 11:21:45', '0', 'fa-bars', null), ('58', 'Product List', 'product/product', '7', '7', '1', '1', '1', '1', '1', '1', '1', '2015-07-10 13:47:35', '0', 'fa-bars', null), ('59', 'Stock In/Out', 'product/stockmove', '7', '8', '1', '1', '1', '1', '1', '1', '1', '2015-07-15 12:04:46', '0', 'fa-bars', null), ('54', 'Category', 'stock/category', '7', '6', '1', '1', '1', '1', '1', '1', '1', '2015-06-17 07:53:19', '0', 'fa-bars', 'category.html'), ('55', 'Store', 'store', '10', '0', '1', '1', '1', '1', '1', '1', '1', '2015-06-26 08:04:07', '0', 'fa-bars', null), ('56', 'Setup List', 'setup/csetup', '11', '0', '1', '1', '1', '1', '1', '1', '1', '2015-06-27 12:11:58', '0', 'fa-bars', null), ('60', 'Slide Show', 'slideshow/SlideShow', '7', '9', '1', '1', '1', '1', '1', '1', '1', '2015-07-17 08:19:12', '0', 'fa-bars', null), ('61', 'Setup Ads', 'setup/SetupAds', '11', '2', '1', '1', '1', '1', '1', '1', '1', '2015-08-04 03:00:11', '0', 'fa-bars', null), ('62', 'Setup Country', 'setup/country', '11', '3', '1', '1', '1', '1', '1', '1', '1', '2015-08-21 16:25:39', '0', 'fa-bars', null), ('63', 'Menu List', 'menu/index', '7', '10', '1', '1', '1', '1', '1', '1', '1', '2015-09-11 15:53:36', '1', 'fa-bars', null), ('64', 'Add New Menu', 'menu/add', '7', '11', '1', '1', '1', '1', '1', '1', '1', '2015-09-11 15:53:58', '1', 'fa-bars', null), ('65', 'Article List', 'article/index', '11', '4', '1', '1', '1', '1', '1', '1', '1', '2015-09-11 16:46:23', '1', 'fa-bars', null), ('66', 'Add New Article', 'article/add', '11', '5', '1', '1', '1', '1', '1', '1', '1', '2015-09-11 16:47:08', '1', 'fa-bars', null), ('67', 'Product List', 'product/index', '10', '1', '1', '1', '1', '1', '1', '1', '1', '2015-09-12 17:10:07', '1', 'fa-bars', null), ('68', 'Add New Products', 'product/add', '10', '2', '1', '1', '1', '1', '1', '1', '1', '2015-09-12 17:10:46', '1', 'fa-bars', null), ('69', 'Banner List', 'setup/Setupads/index', '12', '0', '1', '1', '1', '1', '1', '1', '1', '2015-09-13 17:17:29', '1', 'fa-bars', null), ('70', 'Add New Banner', 'setup/Setupads/add', '12', '1', '1', '1', '1', '1', '1', '1', '1', '2015-09-13 17:17:18', '1', 'fa-bars', null), ('71', 'Contact List', 'article/contact_list', '13', '0', '1', '1', '1', '1', '1', '1', '1', '2015-09-15 14:32:25', '1', 'fa-bars', null), ('72', 'Video List', 'youtube/index', '15', '0', '1', '1', '1', '1', '1', '1', '1', '2015-09-29 12:41:44', '1', 'fa-bars', null), ('73', 'New Video', 'youtube/add', '15', '1', '0', '0', '0', '0', '0', '0', '1', '2015-09-29 12:42:17', '1', 'fa-bars', null);
COMMIT;

-- ----------------------------
--  Table structure for `z_role`
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
--  Records of `z_role`
-- ----------------------------
BEGIN;
INSERT INTO `z_role` VALUES ('1', 'Administrators', '1', '1'), ('2', 'Teachers', null, '0'), ('3', 'Sponsors', null, '0'), ('4', 'Doctors', null, '0'), ('5', 'Students', null, '0'), ('6', 'Parents', null, '0'), ('8', 'Socials', null, '0'), ('9', 'www', null, '0'), ('10', 'asd', null, '0'), ('11', 'testing', null, '0'), ('12', 'testing-2a', null, '0'), ('13', 'testing-3', null, '0'), ('14', 'testine-4', null, '0'), ('15', 'Pedagogy Staff', null, '0'), ('16', 'Human Resource', null, '0'), ('17', 'Health', null, '0'), ('18', 'Study Office', null, '0'), ('19', 'VTC Officier', null, '0'), ('20', 'Product Posting', null, '1'), ('21', 'Store Managment', null, '1'), ('22', 'Product Authorization', null, '1');
COMMIT;

-- ----------------------------
--  Table structure for `z_role_module_detail`
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
--  Records of `z_role_module_detail`
-- ----------------------------
BEGIN;
INSERT INTO `z_role_module_detail` VALUES ('82', '22', '7', null), ('81', '21', '10', null), ('80', '20', '7', null), ('102', '1', '15', null), ('101', '1', '12', null), ('100', '1', '11', null), ('99', '1', '7', null), ('98', '1', '1', null);
COMMIT;

-- ----------------------------
--  Table structure for `z_role_page`
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
--  Records of `z_role_page`
-- ----------------------------
BEGIN;
INSERT INTO `z_role_page` VALUES ('17', '17', '24', '7', '2015-03-19 02:18:59', '1', '1', '1', '1', '1', '1', '1', '1'), ('26', '17', '25', '7', '2015-06-18 21:15:05', '1', '1', '1', '1', '1', '1', '1', '1'), ('27', '17', '26', '7', '2015-04-20 10:57:34', '1', '1', '1', '1', '1', '1', '1', '1'), ('28', '17', '27', '7', '2015-04-20 10:57:45', '1', '1', '1', '1', '1', '1', '1', '1'), ('29', '17', '28', '7', '2015-04-20 10:57:55', '1', '1', '1', '1', '1', '1', '1', '1');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
