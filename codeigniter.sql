/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : codeigniter

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2014-11-30 16:07:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for address
-- ----------------------------
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province` varchar(200) DEFAULT NULL,
  `amphur` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of address
-- ----------------------------
INSERT INTO `address` VALUES ('1', 'bangkok', 'sukumvid');
INSERT INTO `address` VALUES ('2', 'ratchaburi', 'photharam');

-- ----------------------------
-- Table structure for education
-- ----------------------------
DROP TABLE IF EXISTS `education`;
CREATE TABLE `education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `academy` varchar(200) DEFAULT NULL,
  `grade` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of education
-- ----------------------------
INSERT INTO `education` VALUES ('1', '36', 'a1', '11');
INSERT INTO `education` VALUES ('2', '36', 'b1', '22');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

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
INSERT INTO `users` VALUES ('8', 'fat', 'fat');
INSERT INTO `users` VALUES ('9', 'gon', 'gon');
INSERT INTO `users` VALUES ('21', 'ice', 'ice');
INSERT INTO `users` VALUES ('22', 'ice', 'ice');
INSERT INTO `users` VALUES ('23', 'aaa', 'aaa');
INSERT INTO `users` VALUES ('24', 'a1', 'a1');
INSERT INTO `users` VALUES ('36', 'aa', 'aa');
