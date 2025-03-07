/*
 Navicat Premium Dump SQL

 Source Server         : Jholfrank
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : trips

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 07/03/2025 19:52:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for argentina
-- ----------------------------
DROP TABLE IF EXISTS `argentina`;
CREATE TABLE `argentina`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `gasto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `monto` decimal(10, 2) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of argentina
-- ----------------------------
INSERT INTO `argentina` VALUES (1, 'ggg', 100.00);
INSERT INTO `argentina` VALUES (5, 'ssss', 100.00);
INSERT INTO `argentina` VALUES (6, 'hhh', 80.00);
INSERT INTO `argentina` VALUES (7, 'trenes', 130.00);

SET FOREIGN_KEY_CHECKS = 1;
