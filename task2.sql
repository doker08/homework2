/*
Navicat MySQL Data Transfer

Source Server         : LOCALE
Source Server Version : 50546
Source Host           : 192.168.56.101:3306
Source Database       : task2

Target Server Type    : MYSQL
Target Server Version : 50546
File Encoding         : 65001

Date: 2016-12-16 08:19:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `activation_hash` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('35', 'doker08', 'cd6f4bbfa87adbfd317ddc624b5d6ee6', 'sokolovskiy.08@mail.ru', 'OK', '5468fccb41a08128c9af522a48329b54');
