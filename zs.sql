/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50536
Source Host           : 127.0.0.1:3306
Source Database       : zs

Target Server Type    : MYSQL
Target Server Version : 50536
File Encoding         : 65001

Date: 2015-11-02 07:42:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sysconfig
-- ----------------------------
DROP TABLE IF EXISTS `sysconfig`;
CREATE TABLE `sysconfig` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sysconfig_base_sitename` varchar(255) DEFAULT NULL,
  `sysconfig_base_sitetitle` varchar(255) DEFAULT NULL,
  `sysconfig_base_sitekeyword` varchar(255) DEFAULT NULL,
  `sysconfig_base_sitedescription` varchar(255) DEFAULT NULL,
  `sysconfig_base_sitecopyright` varchar(255) DEFAULT NULL,
  `sysconfig_base_siteicp` varchar(255) DEFAULT NULL,
  `sysconfig_base_sitecountcode` varchar(255) DEFAULT NULL,
  `sysconfig_contact_tel` varchar(255) DEFAULT NULL,
  `sysconfig_contact_email` varchar(255) DEFAULT NULL,
  `sysconfig_contact_address` varchar(255) DEFAULT NULL,
  `sysconfig_contact_jobtel` varchar(255) DEFAULT NULL,
  `sysconfig_contact_jobemail` varchar(255) DEFAULT NULL,
  `sysconfig_about` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sysconfig
-- ----------------------------
INSERT INTO `sysconfig` VALUES ('1', '3', '3333333', '33333333', '3333333333', '33333', '3333333', '', '123', '123', '123123', '1231', '1231', 'qeqwewe');

-- ----------------------------
-- Table structure for tp_case
-- ----------------------------
DROP TABLE IF EXISTS `tp_case`;
CREATE TABLE `tp_case` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `case_title` varchar(255) DEFAULT NULL,
  `case_subtitle` varchar(255) DEFAULT NULL,
  `type_id` int(255) DEFAULT NULL,
  `case_ishome` tinyint(4) DEFAULT NULL,
  `case_tags` varchar(255) DEFAULT NULL,
  `case_cover` varchar(255) DEFAULT NULL,
  `case_showcover` varchar(255) DEFAULT NULL,
  `case_description` text,
  `case_body` text,
  `case_pics` text,
  `case_meatkeyword` varchar(255) DEFAULT NULL,
  `case_meatdescription` varchar(255) DEFAULT NULL,
  `inputtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_case
-- ----------------------------
INSERT INTO `tp_case` VALUES ('1', '123', '1231231', '1', '0', '312313', '2015-11-02/563698ddadf2b.png', '2015-11-02/5636988312dfb.png', 'aasdfas123', 'asdfadfadsfasdf', 'qrwrwr', '123', '123123', '0');
INSERT INTO `tp_case` VALUES ('2', 'qe', 'qweqwe', '1', '0', 'qweqwe', '2015-11-02/563699ba16f91.png', '2015-11-02/563699bd1221b.png', 'qweqwe', '123123', 'qweqeqe', 'qweq', 'weqwe', '0');

-- ----------------------------
-- Table structure for type
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) DEFAULT NULL,
  `type_meatkeyword` varchar(255) DEFAULT NULL,
  `type_meatdescription` varchar(255) DEFAULT NULL,
  `type_bg` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES ('1', '2345555555', '234555555555', '2342455555555555555', '2015-11-02/563691c09484a.png');
