/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : e_m_db

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-07-06 11:36:58
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
INSERT INTO `admin_user` VALUES ('4', 'admin', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com', '2018-07-06 03:32:07', '192.168.0.106', '2015-01-29 15:10:34', null, null, null, '1', 'System', 'Administrator', '1', '1', null);
INSERT INTO `admin_user` VALUES ('5', 'chetra', '202cb962ac59075b964b07152d234b70', 'eing.chetra@gmail.com', '2018-07-06 03:32:07', '192.168.0.106', '2015-02-02 17:26:36', null, null, null, '2', 'eing', 'chetra', '0', '0', null);
INSERT INTO `admin_user` VALUES ('1497', 'store', 'e10adc3949ba59abbe56e057f20f883e', 'store@green.com', '2018-07-06 03:32:07', '192.168.0.106', '2015-06-26 08:10:54', null, null, null, '21', 'Green', 'Store', '0', '1', null);

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
INSERT INTO `ci_sessions` VALUES ('19070b4c7a38ed19e0c4a9cbe299a3e9', '192.168.0.106', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '1530847077', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:7:\"english\";}');
INSERT INTO `ci_sessions` VALUES ('75fff56dbabaafcdbd1cd5935cedb4b3', '192.168.0.106', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '1530851324', 'a:14:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:7:\"english\";s:6:\"userid\";s:1:\"4\";s:9:\"user_name\";s:5:\"admin\";s:8:\"password\";s:32:\"202cb962ac59075b964b07152d234b70\";s:6:\"roleid\";s:1:\"1\";s:9:\"last_name\";s:6:\"System\";s:10:\"first_name\";s:13:\"Administrator\";s:10:\"last_visit\";s:19:\"2018-07-06 02:29:32\";s:13:\"last_visit_ip\";s:13:\"192.168.0.106\";s:9:\"moduleids\";a:6:{i:0;a:1:{s:8:\"moduleid\";s:1:\"7\";}i:1;a:1:{s:8:\"moduleid\";s:2:\"10\";}i:2;a:1:{s:8:\"moduleid\";s:2:\"15\";}i:3;a:1:{s:8:\"moduleid\";s:2:\"12\";}i:4;a:1:{s:8:\"moduleid\";s:2:\"11\";}i:5;a:1:{s:8:\"moduleid\";s:1:\"1\";}}s:12:\"ModuleInfors\";a:6:{i:7;a:4:{s:8:\"moduleid\";s:1:\"7\";s:11:\"module_name\";s:4:\"Menu\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:10;a:0:{}i:15;a:0:{}i:12;a:4:{s:8:\"moduleid\";s:2:\"12\";s:11:\"module_name\";s:6:\"Banner\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:11;a:4:{s:8:\"moduleid\";s:2:\"11\";s:11:\"module_name\";s:7:\"Article\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:1;a:0:{}}s:10:\"PageInfors\";a:5:{i:7;a:4:{i:63;a:14:{s:6:\"pageid\";s:2:\"63\";s:9:\"page_name\";s:9:\"Menu List\";s:4:\"link\";s:10:\"menu/index\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"10\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 15:53:36\";s:4:\"icon\";s:7:\"fa-bars\";}i:64;a:14:{s:6:\"pageid\";s:2:\"64\";s:9:\"page_name\";s:12:\"Add New Menu\";s:4:\"link\";s:8:\"menu/add\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"11\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 15:53:58\";s:4:\"icon\";s:7:\"fa-bars\";}i:75;a:14:{s:6:\"pageid\";s:2:\"75\";s:9:\"page_name\";s:16:\"Add New Category\";s:4:\"link\";s:12:\"category/add\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"12\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2017-12-22 13:42:09\";s:4:\"icon\";s:7:\"fa-bars\";}i:76;a:14:{s:6:\"pageid\";s:2:\"76\";s:9:\"page_name\";s:13:\"Category List\";s:4:\"link\";s:14:\"category/index\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"13\";s:9:\"is_insert\";s:2:\"11\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2017-12-22 13:42:54\";s:4:\"icon\";s:7:\"fa-bars\";}}i:10;a:2:{i:67;a:14:{s:6:\"pageid\";s:2:\"67\";s:9:\"page_name\";s:12:\"Product List\";s:4:\"link\";s:13:\"product/index\";s:8:\"moduleid\";s:2:\"10\";s:5:\"order\";s:1:\"1\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-12 17:10:07\";s:4:\"icon\";s:7:\"fa-bars\";}i:68;a:14:{s:6:\"pageid\";s:2:\"68\";s:9:\"page_name\";s:16:\"Add New Products\";s:4:\"link\";s:11:\"product/add\";s:8:\"moduleid\";s:2:\"10\";s:5:\"order\";s:1:\"2\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-12 17:10:46\";s:4:\"icon\";s:7:\"fa-bars\";}}i:12;a:2:{i:69;a:14:{s:6:\"pageid\";s:2:\"69\";s:9:\"page_name\";s:11:\"Banner List\";s:4:\"link\";s:20:\"setup/setupads/index\";s:8:\"moduleid\";s:2:\"12\";s:5:\"order\";s:1:\"0\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-02-05 23:16:13\";s:4:\"icon\";s:7:\"fa-bars\";}i:70;a:14:{s:6:\"pageid\";s:2:\"70\";s:9:\"page_name\";s:14:\"Add New Banner\";s:4:\"link\";s:18:\"setup/setupads/add\";s:8:\"moduleid\";s:2:\"12\";s:5:\"order\";s:1:\"1\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-02-05 23:15:42\";s:4:\"icon\";s:7:\"fa-bars\";}}i:11;a:2:{i:65;a:14:{s:6:\"pageid\";s:2:\"65\";s:9:\"page_name\";s:12:\"Article List\";s:4:\"link\";s:13:\"article/index\";s:8:\"moduleid\";s:2:\"11\";s:5:\"order\";s:1:\"4\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 16:46:23\";s:4:\"icon\";s:7:\"fa-bars\";}i:66;a:14:{s:6:\"pageid\";s:2:\"66\";s:9:\"page_name\";s:15:\"Add New Article\";s:4:\"link\";s:11:\"article/add\";s:8:\"moduleid\";s:2:\"11\";s:5:\"order\";s:1:\"5\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 16:47:08\";s:4:\"icon\";s:7:\"fa-bars\";}}i:1;a:4:{i:5;a:14:{s:6:\"pageid\";s:1:\"5\";s:9:\"page_name\";s:4:\"Page\";s:4:\"link\";s:12:\"setting/page\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"0\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"0\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"0\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 17:00:01\";s:4:\"icon\";s:9:\"fa-file-o\";}i:6;a:14:{s:6:\"pageid\";s:1:\"6\";s:9:\"page_name\";s:12:\"User Profile\";s:4:\"link\";s:12:\"setting/user\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"0\";s:9:\"is_export\";s:1:\"0\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:56:20\";s:4:\"icon\";s:7:\"fa-user\";}i:7;a:14:{s:6:\"pageid\";s:1:\"7\";s:9:\"page_name\";s:9:\"User Role\";s:4:\"link\";s:12:\"setting/role\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:57:09\";s:4:\"icon\";s:7:\"fa-user\";}i:8;a:14:{s:6:\"pageid\";s:1:\"8\";s:9:\"page_name\";s:11:\"Role Access\";s:4:\"link\";s:18:\"setting/permission\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"0\";s:7:\"is_show\";s:1:\"0\";s:8:\"is_print\";s:1:\"0\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:56:46\";s:4:\"icon\";s:9:\"fa-wrench\";}}}s:10:\"PageAction\";a:5:{i:7;a:4:{i:63;s:1:\"1\";i:64;s:1:\"1\";i:75;s:1:\"1\";i:76;s:1:\"1\";}i:10;a:2:{i:67;s:1:\"1\";i:68;s:1:\"1\";}i:12;a:2:{i:69;s:1:\"1\";i:70;s:1:\"1\";}i:11;a:2:{i:65;s:1:\"1\";i:66;s:1:\"1\";}i:1;a:4:{i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"0\";}}}');
INSERT INTO `ci_sessions` VALUES ('91a7a279575cd7f556e2e30bbce68b69', '192.168.0.106', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '1530851548', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:7:\"english\";}');
INSERT INTO `ci_sessions` VALUES ('07dbedd3ddab9c278bc1ae2a1f95dabe', '192.168.0.106', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '1530851686', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:7:\"english\";}');
INSERT INTO `ci_sessions` VALUES ('8f14ec397b7e6ee9d2ad7b16514bfb09', '192.168.0.106', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '1530845945', 'a:14:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:7:\"english\";s:6:\"userid\";s:1:\"4\";s:9:\"user_name\";s:5:\"admin\";s:8:\"password\";s:32:\"202cb962ac59075b964b07152d234b70\";s:6:\"roleid\";s:1:\"1\";s:9:\"last_name\";s:6:\"System\";s:10:\"first_name\";s:13:\"Administrator\";s:10:\"last_visit\";s:19:\"2018-07-05 11:09:20\";s:13:\"last_visit_ip\";s:3:\"::1\";s:9:\"moduleids\";a:6:{i:0;a:1:{s:8:\"moduleid\";s:2:\"10\";}i:1;a:1:{s:8:\"moduleid\";s:2:\"15\";}i:2;a:1:{s:8:\"moduleid\";s:2:\"12\";}i:3;a:1:{s:8:\"moduleid\";s:2:\"11\";}i:4;a:1:{s:8:\"moduleid\";s:1:\"1\";}i:5;a:1:{s:8:\"moduleid\";s:1:\"7\";}}s:12:\"ModuleInfors\";a:6:{i:10;a:0:{}i:15;a:0:{}i:12;a:4:{s:8:\"moduleid\";s:2:\"12\";s:11:\"module_name\";s:6:\"Banner\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:11;a:4:{s:8:\"moduleid\";s:2:\"11\";s:11:\"module_name\";s:7:\"Article\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}i:1;a:0:{}i:7;a:4:{s:8:\"moduleid\";s:1:\"7\";s:11:\"module_name\";s:4:\"Menu\";s:8:\"sort_mod\";N;s:12:\"mod_position\";s:1:\"2\";}}s:10:\"PageInfors\";a:5:{i:10;a:2:{i:67;a:14:{s:6:\"pageid\";s:2:\"67\";s:9:\"page_name\";s:12:\"Product List\";s:4:\"link\";s:13:\"product/index\";s:8:\"moduleid\";s:2:\"10\";s:5:\"order\";s:1:\"1\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-12 17:10:07\";s:4:\"icon\";s:7:\"fa-bars\";}i:68;a:14:{s:6:\"pageid\";s:2:\"68\";s:9:\"page_name\";s:16:\"Add New Products\";s:4:\"link\";s:11:\"product/add\";s:8:\"moduleid\";s:2:\"10\";s:5:\"order\";s:1:\"2\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-12 17:10:46\";s:4:\"icon\";s:7:\"fa-bars\";}}i:12;a:2:{i:69;a:14:{s:6:\"pageid\";s:2:\"69\";s:9:\"page_name\";s:11:\"Banner List\";s:4:\"link\";s:20:\"setup/setupads/index\";s:8:\"moduleid\";s:2:\"12\";s:5:\"order\";s:1:\"0\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-02-05 23:16:13\";s:4:\"icon\";s:7:\"fa-bars\";}i:70;a:14:{s:6:\"pageid\";s:2:\"70\";s:9:\"page_name\";s:14:\"Add New Banner\";s:4:\"link\";s:18:\"setup/setupads/add\";s:8:\"moduleid\";s:2:\"12\";s:5:\"order\";s:1:\"1\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-02-05 23:15:42\";s:4:\"icon\";s:7:\"fa-bars\";}}i:11;a:2:{i:65;a:14:{s:6:\"pageid\";s:2:\"65\";s:9:\"page_name\";s:12:\"Article List\";s:4:\"link\";s:13:\"article/index\";s:8:\"moduleid\";s:2:\"11\";s:5:\"order\";s:1:\"4\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 16:46:23\";s:4:\"icon\";s:7:\"fa-bars\";}i:66;a:14:{s:6:\"pageid\";s:2:\"66\";s:9:\"page_name\";s:15:\"Add New Article\";s:4:\"link\";s:11:\"article/add\";s:8:\"moduleid\";s:2:\"11\";s:5:\"order\";s:1:\"5\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 16:47:08\";s:4:\"icon\";s:7:\"fa-bars\";}}i:1;a:4:{i:5;a:14:{s:6:\"pageid\";s:1:\"5\";s:9:\"page_name\";s:4:\"Page\";s:4:\"link\";s:12:\"setting/page\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"0\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"0\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"0\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 17:00:01\";s:4:\"icon\";s:9:\"fa-file-o\";}i:6;a:14:{s:6:\"pageid\";s:1:\"6\";s:9:\"page_name\";s:12:\"User Profile\";s:4:\"link\";s:12:\"setting/user\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"0\";s:9:\"is_export\";s:1:\"0\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:56:20\";s:4:\"icon\";s:7:\"fa-user\";}i:7;a:14:{s:6:\"pageid\";s:1:\"7\";s:9:\"page_name\";s:9:\"User Role\";s:4:\"link\";s:12:\"setting/role\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:57:09\";s:4:\"icon\";s:7:\"fa-user\";}i:8;a:14:{s:6:\"pageid\";s:1:\"8\";s:9:\"page_name\";s:11:\"Role Access\";s:4:\"link\";s:18:\"setting/permission\";s:8:\"moduleid\";s:1:\"1\";s:5:\"order\";N;s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"0\";s:7:\"is_show\";s:1:\"0\";s:8:\"is_print\";s:1:\"0\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-02-05 16:56:46\";s:4:\"icon\";s:9:\"fa-wrench\";}}i:7;a:4:{i:63;a:14:{s:6:\"pageid\";s:2:\"63\";s:9:\"page_name\";s:9:\"Menu List\";s:4:\"link\";s:10:\"menu/index\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"10\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 15:53:36\";s:4:\"icon\";s:7:\"fa-bars\";}i:64;a:14:{s:6:\"pageid\";s:2:\"64\";s:9:\"page_name\";s:12:\"Add New Menu\";s:4:\"link\";s:8:\"menu/add\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"11\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2015-09-11 15:53:58\";s:4:\"icon\";s:7:\"fa-bars\";}i:75;a:14:{s:6:\"pageid\";s:2:\"75\";s:9:\"page_name\";s:16:\"Add New Category\";s:4:\"link\";s:12:\"category/add\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"12\";s:9:\"is_insert\";s:1:\"1\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2017-12-22 13:42:09\";s:4:\"icon\";s:7:\"fa-bars\";}i:76;a:14:{s:6:\"pageid\";s:2:\"76\";s:9:\"page_name\";s:13:\"Category List\";s:4:\"link\";s:14:\"category/index\";s:8:\"moduleid\";s:1:\"7\";s:5:\"order\";s:2:\"13\";s:9:\"is_insert\";s:2:\"11\";s:9:\"is_update\";s:1:\"1\";s:9:\"is_delete\";s:1:\"1\";s:7:\"is_show\";s:1:\"1\";s:8:\"is_print\";s:1:\"1\";s:9:\"is_export\";s:1:\"1\";s:10:\"created_by\";s:1:\"1\";s:12:\"created_date\";s:19:\"2017-12-22 13:42:54\";s:4:\"icon\";s:7:\"fa-bars\";}}}s:10:\"PageAction\";a:5:{i:10;a:2:{i:67;s:1:\"1\";i:68;s:1:\"1\";}i:12;a:2:{i:69;s:1:\"1\";i:70;s:1:\"1\";}i:11;a:2:{i:65;s:1:\"1\";i:66;s:1:\"1\";}i:1;a:4:{i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"0\";}i:7;a:4:{i:63;s:1:\"1\";i:64;s:1:\"1\";i:75;s:1:\"1\";i:76;s:1:\"1\";}}}');

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
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblarticle
-- ----------------------------
INSERT INTO `tblarticle` VALUES ('54', 'OUR PRODUCT', 'OUR PRODUCT', '', '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; line-height: 1.5rem; font-size: 18px; color: rgb(86, 86, 86); font-family: robotolight;\">\n	Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; list-style: none; padding: 0px; color: rgb(86, 86, 86); font-family: robotolight; font-size: 15px;\">\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Quisque volutpat mattis eros.</li>\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Nullam malesuada erat ut turpis.</li>\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Suspendisse urna nibh.</li>\n</ul>\n', '1', '1', '', 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.', '13', '', '2018-01-30');
INSERT INTO `tblarticle` VALUES ('77', 'PRODUCT DESCRIPTIONS', 'PRODUCT DESCRIPTIONS', '', '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; line-height: 1.5rem; font-size: 18px; color: rgb(86, 86, 86); font-family: robotolight;\">\n	Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; list-style: none; padding: 0px; color: rgb(86, 86, 86); font-family: robotolight; font-size: 15px;\">\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Quisque volutpat mattis eros.</li>\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Nullam malesuada erat ut turpis.</li>\n	<li style=\"box-sizing: border-box; font-size: 18px; margin-top: 16.6406px;\">\n		Suspendisse urna nibh.</li>\n</ul>\n', '1', '1', '', 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.', '14', '', '2018-02-21');
INSERT INTO `tblarticle` VALUES ('78', 'ABOUT US', 'ABOUT US', '', '<h1 style=\"box-sizing: border-box; margin: 20px 0px 10px; font-size: 36px; font-family: Lato, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); text-align: center;\">\n	<img src=\"http://855solution.com/photos/1/5747b855a134e.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle;\" /></h1>\n<h1 style=\"box-sizing: border-box; margin: 20px 0px 10px; font-size: 36px; font-family: Lato, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); text-align: center;\">\n	ABOUT US</h1>\n<hr style=\"box-sizing: content-box; height: 0px; margin-top: 20px; margin-bottom: 20px; border-right: 0px; border-bottom: 0px; border-left: 0px; border-image: initial; border-top-style: solid; border-top-color: rgb(238, 238, 238); color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\" />\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\">\n	<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 855.Solution offers with a complete range of services to fill the market need for designing and developing a fitted solution to enable the client&rsquo;s business in the most cost effective way. We revolve around the need to provide quality services and products to our various target clients, in the process fully satisfying their needs.&nbsp;</span></span></p>\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\">\n	<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">In summary we intend to attain the following objectives:</span></span></p>\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: Lato, sans-serif; font-size: 14px;\">\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Continuously provide professional quality services on time and on budget.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Develop a follow-up strategy to gauge performance with all our clients.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Implement and maintain a quality control system and assurance policy.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; To instill a culture of continuous improvement in beating standards of customer satisfaction and efficiency.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Continuously formalize and measure cross-functional working communication so as to ensure that the various&nbsp; departments work harmoniously towards attainment of company objectives.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; We are fully committed to supporting growth and development in the economy.</span></span></li>\n	<li style=\"box-sizing: border-box; text-align: justify;\">\n		<span style=\"font-size:20px;\"><span style=\"font-family:times new roman;\">&nbsp;&nbsp;&nbsp; Customize the software to the individual needs of each client.<br style=\"box-sizing: border-box;\" />\n		<br />\n		</span></span></li>\n</ul>\n', '1', '1', '', '', '7', '', '2018-02-22');
INSERT INTO `tblarticle` VALUES ('84', 'Project 1', 'Project 1', '', '', '1', '1', '', '', '15', '', '2018-05-21');
INSERT INTO `tblarticle` VALUES ('100', 'MECHANICAL SERVICES', 'MECHANICAL SERVICES', '', '<p>\n	<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 14px;\">Whether you need to install cooling for a new server room or figure out how to replace your inefficient central mechanical plant, you want to partner with mechanical engineers you trust.</span></p>\n<p>\n	<a class=\"event_btn\" href=\"\">read more</a></p>\n', '1', '1', '', '', '21', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('101', 'ELECTRICAL SERVICES', 'ELECTRICAL SERVICES', '', '<p>\n	<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 14px;\">As you decide who to hire for your next electrical project, your first concerns may be where to locate bulky electrical switch gear or how to choose lighting fixtures that meet code requirements and lend appeal to your finished space.</span></p>\n<p>\n	<a class=\"event_btn\" href=\"\">read more</a></p>\n', '1', '1', '', '', '21', '', '2018-06-23');
INSERT INTO `tblarticle` VALUES ('117', 'Adorable species ', ' Adorable species', '', '<p>\n	&nbsp; &nbsp;<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </span></p>\n<p>\n	<span>&nbsp; &nbsp;Donec pede justo, fringilla vel,</span>aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>\n<p>\n	&nbsp; &nbsp;Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem antedapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.&nbsp;</p>\n<p>\n	&nbsp; Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem nequesed ipsum.Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>\n<p>\n	&nbsp; Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\n', '1', '1', '', '', '9', '', '2018-06-27');
INSERT INTO `tblarticle` VALUES ('118', 'feeling sad for the forest', 'feeling sad for the forest', '', '<p>\n	&nbsp;&nbsp;<span>commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricie&nbsp;</span>pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, i .</p>\n<p>\n	&nbsp; mperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut</p>\n<p>\n	&nbsp; &nbsp;metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>\n<p>\n	&nbsp; &nbsp;Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\n', '1', '1', '', '', '9', '', '2018-06-27');
INSERT INTO `tblarticle` VALUES ('119', 'Night view of the city', 'Night view of the city', '', '<p>\n	&nbsp;<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel,</span></p>\n<p>\n	<span>&nbsp; aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. </span></p>\n<p>\n	<span>&nbsp; &nbsp;Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. </span></p>\n<p>\n	<span>&nbsp; &nbsp;Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</span></p>\n', '1', '1', '', '', '9', '', '2018-06-27');
INSERT INTO `tblarticle` VALUES ('120', 'Earth', 'Earth', '', '<p>\n	&nbsp;<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel,</span></p>\n<p>\n	<span>&nbsp; aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. </span></p>\n<p>\n	<span>&nbsp; Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. </span></p>\n<p>\n	<span>&nbsp; Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</span></p>\n', '1', '1', '', '', '9', '', '2018-06-27');
INSERT INTO `tblarticle` VALUES ('121', 'Health care is a human right.', 'Doctor Health care is a human right.', '', '<p>\n	&nbsp;<span style=\"color: rgb(115, 119, 127); font-style: inherit; font-weight: inherit; text-decoration-line: initial; text-transform: initial; font-family: Roboto, sans-serif; font-size: 16px;\">Let&rsquo;s just get right down to it:&nbsp;Health care is a human right.&nbsp;Treating an illness or injury should never be a luxury afforded only to the wealthy few who can afford it. Your income, location, race, sexual orientation, gender identity, or current state of health should never be a barrier to receiving affordable, high-quality health care. I believe passionately in universal health care, and I always will.</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">&nbsp;</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">As with so many other issues, politicians in Washington will stop at nothing to make life harder for Coloradans for the benefit of special interests. In Colorado, we have an opportunity to aggressively reduce the costs of care, expand access to the services people depend on, and put Coloradans first.&nbsp;</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">&nbsp;</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">Too often, politicians talk about health care as if it begins and ends when you get sick or need to visit a doctor. I propose a bolder path.&nbsp;&nbsp;</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">&nbsp;</span></p>\n<p class=\"brz-text-lg-left brz-lh-lg-1_7 brz-lh-im-1_6 brz-fs-lg-16 brz-fs-im-15 brz-ls-lg-0 brz-ls-im-0 brz-ff-roboto brz-fw-lg-400 brz-fw-im-400\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-shadow: none; text-decoration-line: initial; color: rgb(0, 0, 0); line-height: 1.7em !important; -webkit-box-pack: start !important; justify-content: flex-start !important; font-family: Roboto, sans-serif !important;\">\n	<span class=\"brz-cp-color7\" style=\"box-sizing: border-box; background-position: center center; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(115, 119, 127); text-shadow: none; text-transform: initial; text-decoration-line: initial;\">We need to give more Coloradans the opportunity to build lifelong healthy habits and have access to services that reduce the chances of ending up in a hospital room or a doctor&rsquo;s office to begin with. This approach puts the everyday health of our citizens at the forefront of our policy-making while ensuring that when the unimaginable happens, no Coloradan experiences the fear of not being able to afford the treatment they need, or that their loved one needs, to get better.</span></p>\n', '1', '1', '', '', '15', '', '2018-06-29');
INSERT INTO `tblarticle` VALUES ('122', 'How can we help you?', 'How can we help you?', '', '<h5>\n	Let&#39;s talk about your goals</h5>\n<p>\n	Welcome to MEP Engineering. Client service is our number one passion. Yes, you&rsquo;re in the right place: We deliver expert mechanical, electrical and plumbing project solutions. We use the latest technology to stay on the cutting edge of <a href=\"http://www.mep-eng.com/services/\">sustainable design practices</a>. However, our 350 years of combined employee experience have taught us you need and want much more. You want a MEP partner who listens to you and who will work <em>with</em> you to achieve your vision.</p>\n<h5>\n	What happens when you partner with MEP?</h5>\n<p>\n	When you hire MEP Engineering, we take the time to discuss your project goals. We listen proactively. We ask questions. We make sure that we understand your needs. Then, we strategize with you to complete your project within budget and on time. We become your partner and you become ours.</p>\n', '1', '1', '', '', '25', '', '2018-07-04');
INSERT INTO `tblarticle` VALUES ('123', 'Our people are our strength', 'Our people are our strength', '', '<p>\n	Our team talent runs deep and covers multiple disciplines. You&rsquo;ll find all the services you need to complete your project under our roof&mdash;from boiler plant design to power distribution systems. You&rsquo;ll also discover that our commitment to accomplishing your goals brings out the very best in our teams. The synergy of a true partnership sparks innovation, commands diligence and unleashes renewed excitement.</p>\n<p style=\"padding-top: 15px;\">\n	These qualities draw from a strong culture established by our company founders in 2004. Working in a collaborative environment energizes our teams. It enables us to go the extra mile for your project. We strive for quality and follow trusted processes that help us work efficiently. We don&rsquo;t let obstacles or excuses keep us from meeting deadlines. We follow through because your goals are our goals.</p>\n', '1', '1', '', 'h', '25', '', '2018-07-04');
INSERT INTO `tblarticle` VALUES ('124', 'Let`s start the process right', 'Let`s start the process right', '', '<div class=\"textwidget\">\n						<p>We offer an array of services at MEP Engineering; the unique service we offer is to help you decide exactly what you need. At project start, we invite you to engage in an open discussion about your goals. We give you our undivided attention and ask you to do most of the talking. We take notes. After all, you know your project best. During that conversation, we learn all we can about your project objectives, budget, timeline and return on investment expectations. Then, we focus our engineering expertise to provide the right solutions to meet those needs.</p>\n					</div>\n					<h4 class=\"articletitle\">Expect support from a superb core team</h4>\n					<div class=\"textwidget\">\n						<p>Once we outline solutions, we set up a well-rounded team to carry your project from start to finish. We select an engineer who is the best match for your project to lead a team that is supported by Quality Control Managers and Principals who work diligently on each phase of your project. In our organization, everyone has the opportunity to lead and contribute. This dynamic structure keeps our team members motivated and inspired. Our staff provides engineering services to both public and private sector clients in 18 states.</p>\n					</div>', '1', '1', '', '', '26', '', '2018-07-04');
INSERT INTO `tblarticle` VALUES ('125', 'Benefit from an integrated focus on Green Design', 'Benefit from an integrated focus on Green Design', '', '<p>Each of our designers and engineers is trained to recognize opportunities for and recommend Green Building Design Approaches wherever possible. We believe sustainable design equals good stewardship of our natural resources. We strive to exceed standards outlined by the US Green Building Council LEED and ASHRAE’s Standard 90.1 Energy Standard for Buildings on every project.</p>', '1', '1', '', '', '26', '', '2018-07-04');
INSERT INTO `tblarticle` VALUES ('126', 'Stay on Cutting Edge', 'Stay on Cutting Edge', '', '<p>\n	Whether you need to install cooling for a new server room or figure out how to replace your inefficient central mechanical plant, you want to partner with mechanical engineers you trust. We are here for you and our team members are experts in:</p>\n<ul>\n	<li class=\"style-ul\">\n		Heating: adding thermal energy</li>\n	<li class=\"style-ul\">\n		Cooling: removing thermal energy</li>\n	<li class=\"style-ul\">\n		Humidifying: adding moisture</li>\n	<li class=\"style-ul\">\n		Dehumidifying: removing moisture</li>\n	<li class=\"style-ul\">\n		Cleaning: removing particulates and contaminants</li>\n	<li class=\"style-ul\">\n		Ventilation: diluting gaseous contaminants</li>\n	<li class=\"style-ul\">\n		Air movement: circulating and mixing air for proper ventilation and thermal energy transfer</li>\n</ul>\n<p>\n	They are certified or licensed either as P.E., E.I., LEED AP or a combination of the three. They stay informed and on top of the latest developments in the field through active participation in a variety of organizations. These professional organizations include: The American Society of Mechanical Engineers (ASME), the American Society of Plumbing Engineers (ASPE) and the American Society of Heating, Refrigeration and Air-Conditioning Engineers (ASHRAE) to name just a few.</p>\n', '1', '1', '', '', '27', '', '2018-07-05');
INSERT INTO `tblarticle` VALUES ('127', 'Collaboration for Setter Solution', 'Collaboration for Setter Solution', '', '<p>Our engineers design for diverse projects and clients. Each of our engineers is given the opportunity to lead projects and be a core team member. Working on many types of tasks in a variety of capacities helps each team member to build a deep knowledge base. They learn how to design flexible solutions that work for the present and the future. So, they can help you strike just the right balance between performance and cost. Our teams can provide you with assessments, recommend alternatives and work with you to design high-functioning systems to fit your specific needs.</p>\n', '1', '1', '', '', '27', '', '2018-07-05');
INSERT INTO `tblarticle` VALUES ('128', 'Access Seasoned Expertise', 'Access Seasoned Expertise', '', '<p>\n	As you decide who to hire for your next electrical project, your first concerns may be where to locate bulky electrical switch gear or how to choose lighting fixtures that meet code requirements and lend appeal to your finished space. We understand and we can help. We&rsquo;ve solved many design puzzles over the years and Electrical Services are at the core of what we do best. Our electrical engineers are certified or licensed either as P.E., E.I., LEED AP or a combination of the three. They stay informed and on top of the latest developments in the field through active participation in a variety of professional organizations.</p>\n', '1', '1', '', '', '28', '', '2018-07-05');
INSERT INTO `tblarticle` VALUES ('129', 'Benefit from trusted relationships', 'Benefit from trusted relationships', '', '<p>Each of our engineers also works diligently to build and maintain relationships with lighting and power vendors as well as local jurisdictions. Close ties help our engineers stay informed about the latest trends and technologies. They also help us finish your job more efficiently. We can assist you in placing your large transformer in a tight urban area, for example. We use our knowledge, research and community involvement to create environments that are highly functional, safe and aesthetically pleasing.</p>', '1', '1', '', '', '28', '', '2018-07-05');
INSERT INTO `tblarticle` VALUES ('130', 'Prevent issues by looking at the “big picture”', 'Prevent issues by looking at the “big picture”', '', '<p>\n	Our plumbing engineers design systems with your &ldquo;whole building&rdquo; in mind to help you avoid surprises. From determining tap size, to coordinating with civil engineers, to deciding the location of incoming utilities, we carefully orchestrate your plumbing solutions to integrate with your overall plan. We look at project objectives, materials and designs from many different angles to get it right. Our engineers ensure that water and energy are used efficiently, that thorough fire protection and broad pollution systems are established and that your overall site is sustainable. We provide high-functioning systems to meet your specific needs as well as assist you in conserving natural resources.</p>\n', '1', '1', '', '', '29', '', '2018-07-05');
INSERT INTO `tblarticle` VALUES ('131', 'A Holistic Design Approach', 'A Holistic Design Approach', '', '<p>Accomplishing great plumbing design means assembling a team that works on various aspects of your project while keeping multiple objectives in mind. Our engineering team members are highly-experienced and certified or licensed either as P.E., E.I., LEED AP or a combination of the three. They stay informed and on top of the latest developments in the field through active participation in a variety of organizations.</p>', '1', '1', '', '', '29', '', '2018-07-05');
INSERT INTO `tblarticle` VALUES ('132', 'Tenant Improvement Specialists', 'Tenant Improvement Specialists', '', '<p>Our dedicated Building and Tenant Services team is here for you and your building. We know you need a dependable partner who will deliver on time, every time, at the drop of the hat. We understand your primary objective—to keep every building tenant happy!</p>\n										<p>Our Building and Tenant Services group has Tenant Improvement down to a science. We are a small, nimble team that can respond to your needs quickly, yet we have our entire MEP office to draw upon when required. We have completed over 2,000 tenant improvement projects ranging in size from 100 square feet to over 150,000 square feet.</p>', '1', '1', '', '', '30', '', '2018-07-05');
INSERT INTO `tblarticle` VALUES ('133', 'Find out how our TI team can help you:', 'Find out how our TI team can help you:', '', '', '1', '1', '', '', '30', '', '2018-07-05');
INSERT INTO `tblarticle` VALUES ('134', 'Services to Meet Your Needs', 'Services to Meet Your Needs', '', '<p>Our dedicated Building and Tenant Services team is here for you and your building. We know you need a dependable partner who will deliver on time, every time, at the drop of the hat. We understand your primary objective—to keep every building tenant happy!</p>\n									<p>Our Building and Tenant Services group has Tenant Improvement down to a science. We are a small, nimble team that can respond to your needs quickly, yet we have our entire MEP office to draw upon when required. We have completed over 2,000 tenant improvement projects ranging in size from 100 square feet to over 150,000 square feet.</p>', '1', '1', '', '', '31', '', '2018-07-05');
INSERT INTO `tblarticle` VALUES ('135', 'Increase Knowledge Through Technology', 'Increase Knowledge Through Technology', '', '<p>\n	We live in a technology-driven world. In recent years, the building design industry has benefitted greatly from advances in the area of computer-assisted design. We use Building Information Modeling (BIM) to design 3D models where the design elements within the model communicate with each other. Just like in some amazing science fiction film, every detail of the building construction can be viewed by all team members from one location.</p>\n<h4 class=\"specialtytitle\">\n	Make more informed decisions</h4>\n<p>\n	Our Building and Tenant Services group has Tenant Improvement down to a science. We are a small, nimble team that can respond to your needs quickly, yet we have our entire MEP office to draw upon when required. We have completed over 2,000 tenant improvement projects ranging in size from 100 square feet to over 150,000 square feet.</p>\n', '1', '1', '', '', '32', '', '2018-07-05');
INSERT INTO `tblarticle` VALUES ('136', 'Experience The Exciting Results of BIM', 'Experience The Exciting Results of BIM', '', '<p>\n	As your design partner, we use a platform called Revit MEP to create a 3D modeling environment. In this environment, our team can visualize complex systems and avoid conflicts with other building systems. Using Revit, we can simplify design decision-making and produce coordinated and accurate design documentation. This helps us increase design performance, produce higher quality work and increase cost efficiency. Compatibility issues also become a thing of the past as we import from and export to a variety of CAD formats with ease to share with you during the design review process.</p>\n<h4 class=\"specialtytitle\">\n	We use Revit BIM on over 70% of our projects.</h4>\n<p>\n	The projects include K-12 educational facilities, multifamily developments and offices buildings. For example, we are currently using REVIT on PIVOT Denver: a new three-tower multifamily development with a flagship Whole Foods on the main floor. Using Revit and other BIM modeling programs, we designed the project to include a high level of coordination at &ldquo;pinch points.&rdquo; Our engineers &ndash; from a variety of disciplines &ndash; offered field-worthy solutions for these tight spots, so that we could envision solutions prior to construction beginning in the field.</p>\n<p>\n	Many of our engineers also create designs of building systems using AutoCAD and Autotdesk Navisworks. As your design partner, we&rsquo;ll use whatever tools you use to ensure the efficient project coordination.</p>\n', '1', '1', '', '', '32', '', '2018-07-05');
INSERT INTO `tblarticle` VALUES ('137', 'PLUMBING SERVICES', 'PLUMBING SERVICES', '', '<p>\n	<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 14px;\">Our plumbing engineers design systems with your &ldquo;whole building&rdquo;</span></p>\n', '1', '1', '', '', '22', '', '2018-07-05');
INSERT INTO `tblarticle` VALUES ('138', 'BUILDING AND TENANT SERVICES', 'BUILDING AND TENANT SERVICES', '', '<p>\n	<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 14px;\">Our dedicated Building and Tenant Services team is here for you&nbsp;</span></p>\n', '1', '1', '', '', '22', '', '2018-07-05');
INSERT INTO `tblarticle` VALUES ('139', 'SPECIALTY SERVICES', 'SPECIALTY SERVICES', '', '<p>\n	<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 14px;\">MEP is fully committed to providing our clients with energy efficient&nbsp;</span></p>\n', '1', '1', '', '', '22', '', '2018-07-05');
INSERT INTO `tblarticle` VALUES ('140', 'BUILDING INFORMATION MODELING', 'BUILDING INFORMATION MODELING', '', '<p>\n	<span style=\"color: rgb(96, 96, 96); font-family: Roboto; font-size: 14px;\">We live in a technology-driven world. In recent years, the building&nbsp;</span></p>\n', '1', '1', '', '', '22', '', '2018-07-05');
INSERT INTO `tblarticle` VALUES ('141', ' <a href=\"#\"><h4>One Tree Thousand Hope</h4></a>', ' <a href=\"#\"><h4>One Tree Thousand Hope</h4></a>', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>', '1', '1', '', '', '22', '', '2018-07-05');

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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblbanner
-- ----------------------------
INSERT INTO `tblbanner` VALUES ('43', '<div class=\"carousel-content\" >                                         <div class=\"jumbotron__category\">                                             <h6>WE ARE YOUR PARTNER</h6>                                         </div>                                         <div class=\"jumbotron__title\">                                             <h1>  </h1>                                         </div>                                         <div class=\"jumbotron__content\">                                             <h3>Our commitment to integrity builds<br>                                             strong relationships</h3>                                             <a class=\"btn  btn-primary\" href=\"/services/\" target=\"_self\">                                                 HOW CAN WE COLLABORATE?                                             </a>                                         </div>                                     </div>', '1', '1', '0', '');
INSERT INTO `tblbanner` VALUES ('46', '<div class=\"carousel-content\" >                                         <div class=\"jumbotron__category\">                                             <h6>COLLABORATION IS INSPIRATION</h6>                                         </div>                                         <div class=\"jumbotron__title\">                                             <h1>  </h1>                                         </div>                                         <div class=\"jumbotron__content\">                                             <h3>Our innovations result in healthier, inspirational environments</h3>                                             <a class=\"btn  btn-primary\" href=\"/services/\" target=\"_self\">                                                 SEE HOW CAN WE HELP                                             </a>                                         </div>                                     </div>', '1', '1', '1', '');
INSERT INTO `tblbanner` VALUES ('47', '<div class=\"carousel-content\" >                                         <div class=\"jumbotron__category\">                                             <h6>HOLISTIC DESIGN SERVICE</h6>                                         </div>                                         <div class=\"jumbotron__title\">                                             <h1>  </h1>                                         </div>                                         <div class=\"jumbotron__content\">                                             <h3>Our holistic LEED Design Service produces green workplaces that energize employees</h3>                                             <a class=\"btn  btn-primary\" href=\"/services/\" target=\"_self\">                                                 VIEW OUR SERVICES                                             </a>                                         </div>                                     </div>', '1', '1', '2', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=470 DEFAULT CHARSET=latin1;

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
INSERT INTO `tblgallery` VALUES ('425', null, 'tree_cut_3.jpg', '0', '102', '0', null, null);
INSERT INTO `tblgallery` VALUES ('426', null, 'tree_cut_4.jpg', '0', '103', '0', null, null);
INSERT INTO `tblgallery` VALUES ('427', null, 'tree_cut_3.jpg', '0', '104', '0', null, null);
INSERT INTO `tblgallery` VALUES ('428', null, 'tree_cut_4.jpg', '0', '105', '0', null, null);
INSERT INTO `tblgallery` VALUES ('429', null, 'tree_cut_3.jpg', '0', '106', '0', null, null);
INSERT INTO `tblgallery` VALUES ('433', null, 'threat_bear.jpg', '0', '116', '0', null, null);
INSERT INTO `tblgallery` VALUES ('439', null, 'threat_bear.jpg', '0', '117', '0', null, null);
INSERT INTO `tblgallery` VALUES ('440', null, 'threat_bear.jpg', '0', '118', '0', null, null);
INSERT INTO `tblgallery` VALUES ('441', null, 'threat_bear.jpg', '0', '119', '0', null, null);
INSERT INTO `tblgallery` VALUES ('442', null, 'threat_bear.jpg', '0', '120', '0', null, null);
INSERT INTO `tblgallery` VALUES ('444', null, '3.jpg', '0', '123', '0', null, null);
INSERT INTO `tblgallery` VALUES ('445', null, 'feature.png', '0', '124', '0', null, null);
INSERT INTO `tblgallery` VALUES ('446', null, 'St-Marys_547t-555x369.jpg', '0', '126', '0', null, null);
INSERT INTO `tblgallery` VALUES ('447', null, 'electrical.jpg', '0', '128', '0', null, null);
INSERT INTO `tblgallery` VALUES ('448', null, '3.jpg', '0', '130', '0', null, null);
INSERT INTO `tblgallery` VALUES ('449', null, 'building.png', '0', '132', '0', null, null);
INSERT INTO `tblgallery` VALUES ('450', null, 'service.jpg', '0', '134', '0', null, null);
INSERT INTO `tblgallery` VALUES ('451', null, 'map.jpg', '0', '135', '0', null, null);
INSERT INTO `tblgallery` VALUES ('452', null, 'BE-1900-Simulator-1.jpg', '0', '136', '0', null, null);
INSERT INTO `tblgallery` VALUES ('455', null, '3.jpg', '0', '128', '0', null, null);
INSERT INTO `tblgallery` VALUES ('456', null, '3.jpg', '0', '126', '0', null, null);
INSERT INTO `tblgallery` VALUES ('457', null, 'St-Marys_379t.jpg', '0', '136', '0', null, null);
INSERT INTO `tblgallery` VALUES ('462', null, 'tree_cut_3.jpg', '0', '141', '0', null, null);
INSERT INTO `tblgallery` VALUES ('463', null, 'ITSM-XI.jpg', '0', '122', '0', null, null);
INSERT INTO `tblgallery` VALUES ('464', null, 'mechanical-services-roof-solar-360x240.jpg', '0', '100', '0', null, null);
INSERT INTO `tblgallery` VALUES ('465', null, 'flatirons-11-360x240.jpg', '0', '101', '0', null, null);
INSERT INTO `tblgallery` VALUES ('466', null, 'plumbing-tn.jpg', '0', '137', '0', null, null);
INSERT INTO `tblgallery` VALUES ('467', null, 'Interior_3178-smaller-150x150.png', '0', '138', '0', null, null);
INSERT INTO `tblgallery` VALUES ('468', null, 'Platform-Day-Shots-1.jpg', '0', '139', '0', null, null);
INSERT INTO `tblgallery` VALUES ('469', null, '3D-Mechanical-150x150.jpg', '0', '140', '0', null, null);

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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

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
INSERT INTO `tbllocation` VALUES ('21', '<h2>OUR SERVISES</h2>', 'category', '1', null);
INSERT INTO `tbllocation` VALUES ('22', 'latest blog', 'category', '1', null);
INSERT INTO `tbllocation` VALUES ('25', 'blog2', 'category', '1', null);
INSERT INTO `tbllocation` VALUES ('26', 'service blog', 'category', '1', null);
INSERT INTO `tbllocation` VALUES ('27', 'service blog 1', 'category', '1', null);
INSERT INTO `tbllocation` VALUES ('28', 'service blog 2', 'category', '1', null);
INSERT INTO `tbllocation` VALUES ('29', 'service blog 3', 'category', '1', null);
INSERT INTO `tbllocation` VALUES ('30', 'service blog 4', 'category', '1', null);
INSERT INTO `tbllocation` VALUES ('31', 'service blog 5', 'category', '1', null);
INSERT INTO `tbllocation` VALUES ('32', 'service blog 6', 'category', '1', null);

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
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tblmenus
-- ----------------------------
INSERT INTO `tblmenus` VALUES ('32', 'PROJECT', null, '32', '0', '0', '2', '1', null, null, '2', null, null, 'PROJECT', '0', '5', '6', '');
INSERT INTO `tblmenus` VALUES ('31', 'SERVICES', null, '31', '0', '0', '1', '1', null, null, '2', null, null, 'SERVICES', '0', '5', '9', 'site/service');
INSERT INTO `tblmenus` VALUES ('38', 'ABOUT US', null, '38', '0', '0', '5', '1', null, null, '2', null, null, 'ABOUT US', '0', '5', '7', 'site/aboutus/');
INSERT INTO `tblmenus` VALUES ('66', 'CONTACT US', null, '66', '0', '0', '7', '1', null, null, '2', null, null, 'CONTACT US', '0', '5', '4', 'site/contactus/');
INSERT INTO `tblmenus` VALUES ('82', '0', null, '82', '0', '0', '0', '0', null, null, '0', null, null, '0', '0', '0', '0', null);
INSERT INTO `tblmenus` VALUES ('83', '0', null, '83', '0', '0', '0', '0', null, null, '0', null, null, '0', '0', '0', '0', null);
INSERT INTO `tblmenus` VALUES ('91', 'FEDERAL PROJECT', null, '32-91', '32', '1', '7', '1', null, null, '1', null, null, 'FEDERAL PROJECT', '55', '5', '15', 'site/federalproject/');
INSERT INTO `tblmenus` VALUES ('90', 'EDUCATION PROJECT', null, '32-90', '32', '1', '7', '1', null, null, '1', null, null, 'EDUCATION PROJECT', '55', '5', '15', 'site/educationproject/');
INSERT INTO `tblmenus` VALUES ('95', 'All item', null, '31-95', '31', '1', '7', '1', null, null, '1', null, null, 'All item', '0', '5', '9', 'site/allitem/');
INSERT INTO `tblmenus` VALUES ('89', 'COMMERCIAL PROJECT', null, '32-89', '32', '1', '2', '1', null, null, '2', null, null, 'COMMERCIAL PROJECT', '120', '5', '15', 'site/commercailproject/');
INSERT INTO `tblmenus` VALUES ('92', 'HEALTCARE PROJECT', null, '32-92', '32', '1', '7', '1', null, null, '1', null, null, 'HEALTCARE PROJECT', '55', '5', '15', 'site/healtcareproject/');
INSERT INTO `tblmenus` VALUES ('93', 'HISTORICAL RENOVATION', null, '32-93', '32', '1', '7', '1', null, null, '1', null, null, 'HISTORICAL RENOVATION', '55', '5', '15', 'site/historicalrenovation/');
INSERT INTO `tblmenus` VALUES ('94', 'Home', null, '94', '0', '0', '0', '1', null, null, '2', null, null, 'Home', '0', '5', '22', 'site/index');

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
