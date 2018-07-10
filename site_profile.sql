/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : e_m_db

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-07-10 16:04:56
*/

SET FOREIGN_KEY_CHECKS=0;

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
INSERT INTO `site_profile` VALUES ('1', 'GreenM&E', 'Building #101A, St. 289, Sangkat Boeung Kak I, Khan Toul Kok, Phnom Penh, Cambodia', '023 9999 03  |  Fax: 023 9999 17  |  HP: 093 633 687  |   011993057', 'info@cambodiasoft.com', 'https://www.facebook.com/%E1%9E%93%E1%9E%B6%E1%9E%99%E1%9E%80%E1%9E%8A%E1%9F%92%E1%9E%8B%E1%9E%B6%E1%9E%93%E1%9E%9C%E1%9E%B7%E1%9E%91%E1%9F%92%E1%9E%99%E1%9E%BB%E1%9E%91%E1%9E%B6%E1%9E%80%E1%9F%8B%E1%9E%91%E1%9E%84-112512662798448/', 'https://plus.google.com/117575618297062468775', '', 'https://twitter.com/Kimhay98Kh', '', null, null, '1');
