/*
 Navicat Premium Data Transfer

 Source Server         : user@local
 Source Server Type    : MariaDB
 Source Server Version : 100408
 Source Host           : 127.0.0.1:3306
 Source Schema         : user_career

 Target Server Type    : MariaDB
 Target Server Version : 100408
 File Encoding         : 65001

 Date: 03/11/2019 11:39:20
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for career
-- ----------------------------
DROP TABLE IF EXISTS `career`;
CREATE TABLE `career` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `job` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of career
-- ----------------------------
BEGIN;
INSERT INTO `career` VALUES (1, 'techer', 'sb. who teches students', 'http://www.baidu.com');
INSERT INTO `career` VALUES (2, 'programmer', 'coding! php is the best!', 'http://www.sohu.com');
INSERT INTO `career` VALUES (3, 'scientist', 'studying sth.', 'http://www.qq.com');
COMMIT;

-- ----------------------------
-- Table structure for faq
-- ----------------------------
DROP TABLE IF EXISTS `faq`;
CREATE TABLE `faq` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `reply_to` varchar(255) DEFAULT NULL,
  `reply_content` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of faq
-- ----------------------------
BEGIN;
INSERT INTO `faq` VALUES (1, 'Crying Worm', 'Hello World', '', '', '2019-11-03 02:21:03');
INSERT INTO `faq` VALUES (2, 'Crying Worm', 'Reply to Hello', 'Crying Worm', 'Hello World', '2019-11-03 02:21:12');
INSERT INTO `faq` VALUES (3, 'Crying Worm', 'reply', 'Crying Worm', 'Reply to Hello', '2019-11-03 02:25:41');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
