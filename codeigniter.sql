/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : codeigniter

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2014-11-27 22:21:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'ant', null);
INSERT INTO `users` VALUES ('2', 'bird', null);
INSERT INTO `users` VALUES ('3', 'cat', null);
INSERT INTO `users` VALUES ('4', 'dog', null);
INSERT INTO `users` VALUES ('5', 'euro', null);
INSERT INTO `users` VALUES ('6', '1234', null);
INSERT INTO `users` VALUES ('7', 'hong', '12345');