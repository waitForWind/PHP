# -----------------------------------------------------------
# PHP-Amateur database backup files
# Blog: http://blog.51edm.org
# Type: 管理员后台手动备份
# Description:当前SQL文件包含了表：pa_relannounce的结构信息，表：pa_relannounce的数据
# Time: 2014-08-23 21:51:05
# -----------------------------------------------------------
# 当前SQL卷标：#1
# -----------------------------------------------------------


# 数据库表：pa_relannounce 结构信息
DROP TABLE IF EXISTS `pa_relannounce`;
CREATE TABLE `pa_relannounce` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) CHARACTER SET latin1 NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `time` int(10) NOT NULL,
  `updata_time` int(10) NOT NULL,
  `aid` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='公告' ;



# 数据库表：pa_relannounce 数据信息
INSERT INTO `pa_relannounce` VALUES ('1','123123','23123123123噔噔噔噔000000','0','1408785304','1408788004','1');
INSERT INTO `pa_relannounce` VALUES ('3','2222','2222222','1','1408786127','1408786127','0');
INSERT INTO `pa_relannounce` VALUES ('4','22222','22222343434','1','1408786563','0','1');
INSERT INTO `pa_relannounce` VALUES ('5','2323','2323131231','0','1408786661','0','0');
INSERT INTO `pa_relannounce` VALUES ('6','2323','2323131231','0','1408786873','0','0');
INSERT INTO `pa_relannounce` VALUES ('7','2323','2323131231','1','1408786942','0','0');
