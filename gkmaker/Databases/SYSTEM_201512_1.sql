# -----------------------------------------------------------
# PHP-Amateur database backup files
# Blog: http://blog.51edm.org
# Type: 系统自动备份
# Description:当前SQL文件包含了表：pa_access、pa_addadvice、pa_admin、pa_advice、pa_category、pa_chuangyi、pa_clickcount、pa_download、pa_email、pa_file、pa_game、pa_guestbook、pa_gundong、pa_home_game、pa_home_pionner、pa_introduction、pa_major、pa_member、pa_messageboard、pa_news、pa_node、pa_ourmaker、pa_relannounce、pa_role、pa_role_user、pa_science、pa_teacher、pa_venture、pa_vip、pa_zonenotice的结构信息，表：pa_access、pa_addadvice、pa_admin、pa_advice、pa_category、pa_chuangyi、pa_clickcount、pa_download、pa_email、pa_file、pa_game、pa_guestbook、pa_gundong、pa_home_game、pa_home_pionner、pa_introduction、pa_major、pa_member、pa_messageboard、pa_news、pa_node、pa_ourmaker、pa_relannounce、pa_role、pa_role_user、pa_science、pa_teacher、pa_venture、pa_vip、pa_zonenotice的数据
# Time: 2015-12-29 14:27:02
# -----------------------------------------------------------
# 当前SQL卷标：#1
# -----------------------------------------------------------


# 数据库表：pa_access 结构信息
DROP TABLE IF EXISTS `pa_access`;
CREATE TABLE `pa_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='权限分配表' ;

# 数据库表：pa_addadvice 结构信息
DROP TABLE IF EXISTS `pa_addadvice`;
CREATE TABLE `pa_addadvice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '科技ID',
  `tid` varchar(11) NOT NULL COMMENT '老师名字',
  `title` text NOT NULL,
  `content` text NOT NULL,
  `detail` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='老师对立项的建议' ;

# 数据库表：pa_admin 结构信息
DROP TABLE IF EXISTS `pa_admin`;
CREATE TABLE `pa_admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL COMMENT '登录账号',
  `pwd` char(32) DEFAULT NULL COMMENT '登录密码',
  `status` int(11) DEFAULT '1' COMMENT '账号状态',
  `remark` varchar(255) DEFAULT '' COMMENT '备注信息',
  `find_code` char(5) DEFAULT NULL COMMENT '找回账号验证码',
  `time` int(10) DEFAULT NULL COMMENT '开通时间',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='网站后台管理员表' ;

# 数据库表：pa_advice 结构信息
DROP TABLE IF EXISTS `pa_advice`;
CREATE TABLE `pa_advice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(20) NOT NULL COMMENT '老师',
  `pid` int(11) NOT NULL COMMENT '立项',
  `title` text NOT NULL COMMENT '教师对立项标题的评价',
  `content` text NOT NULL COMMENT '教师对立项内容的评价',
  `detail` text NOT NULL COMMENT '教师对立项细节的评价',
  `time` int(11) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否添加老师建议',
  `status` int(11) NOT NULL DEFAULT '2' COMMENT '立项审核状态',
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 ;

# 数据库表：pa_category 结构信息
DROP TABLE IF EXISTS `pa_category`;
CREATE TABLE `pa_category` (
  `cid` int(5) NOT NULL AUTO_INCREMENT,
  `pid` int(5) DEFAULT NULL COMMENT 'parentCategory上级分类',
  `name` varchar(20) DEFAULT NULL COMMENT '分类名称',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='新闻分类表' ;

# 数据库表：pa_chuangyi 结构信息
DROP TABLE IF EXISTS `pa_chuangyi`;
CREATE TABLE `pa_chuangyi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `keywords` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `time` int(11) NOT NULL,
  `member` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `author` varchar(20) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ;

# 数据库表：pa_clickcount 结构信息
DROP TABLE IF EXISTS `pa_clickcount`;
CREATE TABLE `pa_clickcount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `count` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ;

# 数据库表：pa_download 结构信息
DROP TABLE IF EXISTS `pa_download`;
CREATE TABLE `pa_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(30) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `title` varchar(40) CHARACTER SET utf8 NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='下载文件' ;

# 数据库表：pa_email 结构信息
DROP TABLE IF EXISTS `pa_email`;
CREATE TABLE `pa_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `get` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `content` text NOT NULL,
  `time` int(11) NOT NULL,
  `getname` varchar(20) NOT NULL,
  `postname` varchar(20) NOT NULL,
  `getphoto` varchar(50) NOT NULL,
  `postphoto` varchar(50) NOT NULL,
  `getisdel` int(11) NOT NULL DEFAULT '0',
  `postisdel` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 ;

# 数据库表：pa_file 结构信息
DROP TABLE IF EXISTS `pa_file`;
CREATE TABLE `pa_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(20) NOT NULL,
  `time` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '2',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ;

# 数据库表：pa_game 结构信息
DROP TABLE IF EXISTS `pa_game`;
CREATE TABLE `pa_game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` tinyint(1) NOT NULL COMMENT '是否发布',
  `title` varchar(200) NOT NULL COMMENT '标题',
  `keyword` varchar(50) NOT NULL COMMENT '关键字',
  `status` tinyint(1) NOT NULL COMMENT '状态',
  `summary` varchar(255) NOT NULL COMMENT '赛事摘要',
  `update_time` varchar(20) NOT NULL COMMENT '发布时间',
  `name` varchar(10) NOT NULL COMMENT '发布人',
  `content` text NOT NULL COMMENT '赛事内容',
  `grade` int(6) NOT NULL COMMENT '赛事级别',
  `organizer` varchar(50) NOT NULL COMMENT '承办方',
  `sponsor` varchar(50) NOT NULL COMMENT '主办方',
  `start_time` varchar(20) NOT NULL COMMENT '开始时间',
  `end_time` varchar(20) NOT NULL COMMENT '结束时间',
  `prize` text NOT NULL COMMENT '奖项',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COMMENT='赛事管理' ;

# 数据库表：pa_guestbook 结构信息
DROP TABLE IF EXISTS `pa_guestbook`;
CREATE TABLE `pa_guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `time` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL DEFAULT '53fa0d0029560.jpg',
  `uid` int(11) NOT NULL,
  `respond` text NOT NULL,
  `rtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ;

# 数据库表：pa_gundong 结构信息
DROP TABLE IF EXISTS `pa_gundong`;
CREATE TABLE `pa_gundong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` int(10) NOT NULL,
  `img` varchar(30) NOT NULL,
  `alt` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ;

# 数据库表：pa_home_game 结构信息
DROP TABLE IF EXISTS `pa_home_game`;
CREATE TABLE `pa_home_game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `relname` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '赛事_真实姓名',
  `academy` int(20) NOT NULL COMMENT '学院',
  `class` int(10) NOT NULL COMMENT '年级',
  `major` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '专业',
  `number` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '学号',
  `phone` varchar(15) CHARACTER SET utf8 NOT NULL COMMENT '手机',
  `qq` varchar(15) CHARACTER SET utf8 NOT NULL COMMENT 'qq',
  `sex` tinyint(1) NOT NULL COMMENT '性别',
  `teamname` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '团队名字',
  `teacher` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '指导老师',
  `teamintro` text CHARACTER SET utf8 NOT NULL COMMENT '团队简介',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ;

# 数据库表：pa_home_pionner 结构信息
DROP TABLE IF EXISTS `pa_home_pionner`;
CREATE TABLE `pa_home_pionner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '队长id',
  `pionnername` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '队员姓名',
  `pionnerclass` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '队员班级',
  `pionnerphone` varchar(15) CHARACTER SET utf8 NOT NULL COMMENT '队员手机',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 ;

# 数据库表：pa_introduction 结构信息
DROP TABLE IF EXISTS `pa_introduction`;
CREATE TABLE `pa_introduction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='各种简介，包括科技新闻，' ;

# 数据库表：pa_major 结构信息
DROP TABLE IF EXISTS `pa_major`;
CREATE TABLE `pa_major` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `teacher1` varchar(20) NOT NULL,
  `teacher2` varchar(20) NOT NULL,
  `teacher3` varchar(20) NOT NULL,
  `teacher4` varchar(20) NOT NULL,
  `teacher5` varchar(20) NOT NULL,
  `status` int(11) NOT NULL COMMENT '是否添加过老师',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ;

# 数据库表：pa_member 结构信息
DROP TABLE IF EXISTS `pa_member`;
CREATE TABLE `pa_member` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `isvip` tinyint(1) NOT NULL,
  `email` varchar(100) DEFAULT NULL COMMENT '邮箱地址',
  `nickname` varchar(20) DEFAULT NULL COMMENT '用户昵称',
  `truename` char(15) DEFAULT NULL COMMENT '真实姓名',
  `pwd` char(32) DEFAULT NULL COMMENT '密码',
  `avatar` varchar(100) DEFAULT NULL COMMENT '用户头像',
  `birthday` int(10) DEFAULT NULL COMMENT '用户生日',
  `sex` int(1) DEFAULT NULL COMMENT '0女1男',
  `address` varchar(50) DEFAULT NULL COMMENT '地址',
  `province` varchar(100) DEFAULT NULL COMMENT '省份',
  `city` varchar(100) DEFAULT NULL COMMENT '城市',
  `intr` varchar(500) DEFAULT NULL COMMENT '个人介绍',
  `grade` char(10) DEFAULT NULL COMMENT '年级',
  `phone` varchar(30) DEFAULT NULL COMMENT '电话',
  `qq` int(15) DEFAULT NULL,
  `login_ip` varchar(15) DEFAULT NULL COMMENT '登录ip',
  `login_time` int(10) DEFAULT NULL COMMENT '登录时间',
  `academy` char(20) DEFAULT NULL COMMENT '学院',
  `major` char(20) DEFAULT NULL COMMENT '专业',
  `tag` varchar(50) DEFAULT NULL COMMENT '个性标签',
  `state` tinyint(3) NOT NULL COMMENT '状态',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=374 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='网站前台会员表' ;

# 数据库表：pa_messageboard 结构信息
DROP TABLE IF EXISTS `pa_messageboard`;
CREATE TABLE `pa_messageboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `postname` varchar(20) NOT NULL,
  `postphoto` varchar(50) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ;

# 数据库表：pa_news 结构信息
DROP TABLE IF EXISTS `pa_news`;
CREATE TABLE `pa_news` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `cid` smallint(3) DEFAULT NULL COMMENT '所在分类',
  `title` varchar(200) DEFAULT NULL COMMENT '新闻标题',
  `path` char(40) DEFAULT NULL COMMENT '文件路径',
  `keywords` varchar(50) DEFAULT NULL COMMENT '文章关键字',
  `description` mediumtext COMMENT '文章描述',
  `status` tinyint(1) DEFAULT NULL,
  `is_screen` tinyint(1) DEFAULT NULL COMMENT '是否发布到大屏幕',
  `summary` varchar(255) DEFAULT NULL COMMENT '文章摘要',
  `filename` char(20) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '上传的文件名称',
  `published` int(10) DEFAULT NULL,
  `update_time` int(10) DEFAULT NULL,
  `content` text,
  `aid` smallint(3) DEFAULT NULL COMMENT '发布者UID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COMMENT='新闻表' ;

# 数据库表：pa_node 结构信息
DROP TABLE IF EXISTS `pa_node`;
CREATE TABLE `pa_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COMMENT='权限节点表' ;

# 数据库表：pa_ourmaker 结构信息
DROP TABLE IF EXISTS `pa_ourmaker`;
CREATE TABLE `pa_ourmaker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `introduce` text NOT NULL,
  `score` text NOT NULL,
  `aim` text NOT NULL,
  `history` text NOT NULL,
  `slogan` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ;

# 数据库表：pa_relannounce 结构信息
DROP TABLE IF EXISTS `pa_relannounce`;
CREATE TABLE `pa_relannounce` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `time` int(10) NOT NULL,
  `updata_time` int(10) NOT NULL,
  `aid` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='公告' ;

# 数据库表：pa_role 结构信息
DROP TABLE IF EXISTS `pa_role`;
CREATE TABLE `pa_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='权限角色表' ;

# 数据库表：pa_role_user 结构信息
DROP TABLE IF EXISTS `pa_role_user`;
CREATE TABLE `pa_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户角色表' ;

# 数据库表：pa_science 结构信息
DROP TABLE IF EXISTS `pa_science`;
CREATE TABLE `pa_science` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `cid` smallint(3) DEFAULT NULL COMMENT '所在分类',
  `title` varchar(200) DEFAULT NULL COMMENT '新闻标题',
  `keywords` varchar(50) DEFAULT NULL COMMENT '文章关键字',
  `description` mediumtext COMMENT '文章描述',
  `status` tinyint(1) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL COMMENT '文章摘要',
  `published` int(10) DEFAULT NULL,
  `content` text,
  `aid` smallint(3) DEFAULT NULL COMMENT '发布者UID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='新闻表' ;

# 数据库表：pa_teacher 结构信息
DROP TABLE IF EXISTS `pa_teacher`;
CREATE TABLE `pa_teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` smallint(6) DEFAULT NULL COMMENT '所在分类',
  `title` varchar(200) DEFAULT NULL COMMENT '标题',
  `keywords` varchar(50) DEFAULT NULL COMMENT '关键词',
  `description` mediumtext,
  `status` tinyint(4) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL COMMENT '文章摘要',
  `published` int(10) DEFAULT NULL,
  `update_time` int(10) NOT NULL,
  `content` text,
  `aid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='名师讲座' ;

# 数据库表：pa_venture 结构信息
DROP TABLE IF EXISTS `pa_venture`;
CREATE TABLE `pa_venture` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `cid` smallint(3) DEFAULT NULL COMMENT '所在分类',
  `title` varchar(200) DEFAULT NULL COMMENT '新闻标题',
  `keywords` varchar(50) DEFAULT NULL COMMENT '文章关键字',
  `description` mediumtext COMMENT '文章描述',
  `status` tinyint(1) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL COMMENT '文章摘要',
  `published` int(10) DEFAULT NULL,
  `content` text,
  `aid` smallint(3) DEFAULT NULL COMMENT '发布者UID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='新闻表' ;

# 数据库表：pa_vip 结构信息
DROP TABLE IF EXISTS `pa_vip`;
CREATE TABLE `pa_vip` (
  `id` int(12) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT '名字',
  `address` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT '地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ;

# 数据库表：pa_zonenotice 结构信息
DROP TABLE IF EXISTS `pa_zonenotice`;
CREATE TABLE `pa_zonenotice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `time` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 ;



# 数据库表：pa_access 数据信息
INSERT INTO `pa_access` VALUES ('2','8','3','14','');
INSERT INTO `pa_access` VALUES ('2','14','2','1','');
INSERT INTO `pa_access` VALUES ('2','10','3','4','');
INSERT INTO `pa_access` VALUES ('2','4','2','1','');
INSERT INTO `pa_access` VALUES ('2','7','3','3','');
INSERT INTO `pa_access` VALUES ('2','3','2','1','');
INSERT INTO `pa_access` VALUES ('2','6','3','2','');
INSERT INTO `pa_access` VALUES ('2','5','3','2','');
INSERT INTO `pa_access` VALUES ('2','2','2','1','');
INSERT INTO `pa_access` VALUES ('2','1','1','0','');
INSERT INTO `pa_access` VALUES ('3','14','2','1','');
INSERT INTO `pa_access` VALUES ('3','13','3','4','');
INSERT INTO `pa_access` VALUES ('3','12','3','4','');
INSERT INTO `pa_access` VALUES ('3','11','3','4','');
INSERT INTO `pa_access` VALUES ('3','10','3','4','');
INSERT INTO `pa_access` VALUES ('3','4','2','1','');
INSERT INTO `pa_access` VALUES ('3','9','3','3','');
INSERT INTO `pa_access` VALUES ('3','8','3','3','');
INSERT INTO `pa_access` VALUES ('3','7','3','3','');
INSERT INTO `pa_access` VALUES ('3','3','2','1','');
INSERT INTO `pa_access` VALUES ('3','6','3','2','');
INSERT INTO `pa_access` VALUES ('3','5','3','2','');
INSERT INTO `pa_access` VALUES ('3','2','2','1','');
INSERT INTO `pa_access` VALUES ('3','1','1','0','');
INSERT INTO `pa_access` VALUES ('4','7','3','3','');
INSERT INTO `pa_access` VALUES ('4','3','2','1','');
INSERT INTO `pa_access` VALUES ('4','6','3','2','');
INSERT INTO `pa_access` VALUES ('4','5','3','2','');
INSERT INTO `pa_access` VALUES ('4','2','2','1','');
INSERT INTO `pa_access` VALUES ('4','1','1','0','');
INSERT INTO `pa_access` VALUES ('2','9','3','14','');
INSERT INTO `pa_access` VALUES ('2','15','3','14','');
INSERT INTO `pa_access` VALUES ('2','16','3','14','');
INSERT INTO `pa_access` VALUES ('2','17','3','14','');
INSERT INTO `pa_access` VALUES ('2','18','3','14','');
INSERT INTO `pa_access` VALUES ('2','19','3','14','');
INSERT INTO `pa_access` VALUES ('2','20','3','14','');
INSERT INTO `pa_access` VALUES ('2','21','3','14','');
INSERT INTO `pa_access` VALUES ('2','22','3','14','');
INSERT INTO `pa_access` VALUES ('2','23','3','14','');
INSERT INTO `pa_access` VALUES ('2','24','3','14','');
INSERT INTO `pa_access` VALUES ('2','25','3','14','');
INSERT INTO `pa_access` VALUES ('2','26','2','1','');
INSERT INTO `pa_access` VALUES ('2','27','3','26','');
INSERT INTO `pa_access` VALUES ('2','28','3','26','');
INSERT INTO `pa_access` VALUES ('2','29','3','26','');
INSERT INTO `pa_access` VALUES ('2','30','3','26','');
INSERT INTO `pa_access` VALUES ('2','31','3','26','');
INSERT INTO `pa_access` VALUES ('2','8','3','14','');
INSERT INTO `pa_access` VALUES ('2','14','2','1','');
INSERT INTO `pa_access` VALUES ('2','10','3','4','');
INSERT INTO `pa_access` VALUES ('2','4','2','1','');
INSERT INTO `pa_access` VALUES ('2','7','3','3','');
INSERT INTO `pa_access` VALUES ('2','3','2','1','');
INSERT INTO `pa_access` VALUES ('2','6','3','2','');
INSERT INTO `pa_access` VALUES ('2','5','3','2','');
INSERT INTO `pa_access` VALUES ('2','2','2','1','');
INSERT INTO `pa_access` VALUES ('2','1','1','0','');
INSERT INTO `pa_access` VALUES ('3','14','2','1','');
INSERT INTO `pa_access` VALUES ('3','13','3','4','');
INSERT INTO `pa_access` VALUES ('3','12','3','4','');
INSERT INTO `pa_access` VALUES ('3','11','3','4','');
INSERT INTO `pa_access` VALUES ('3','10','3','4','');
INSERT INTO `pa_access` VALUES ('3','4','2','1','');
INSERT INTO `pa_access` VALUES ('3','9','3','3','');
INSERT INTO `pa_access` VALUES ('3','8','3','3','');
INSERT INTO `pa_access` VALUES ('3','7','3','3','');
INSERT INTO `pa_access` VALUES ('3','3','2','1','');
INSERT INTO `pa_access` VALUES ('3','6','3','2','');
INSERT INTO `pa_access` VALUES ('3','5','3','2','');
INSERT INTO `pa_access` VALUES ('3','2','2','1','');
INSERT INTO `pa_access` VALUES ('3','1','1','0','');
INSERT INTO `pa_access` VALUES ('4','7','3','3','');
INSERT INTO `pa_access` VALUES ('4','3','2','1','');
INSERT INTO `pa_access` VALUES ('4','6','3','2','');
INSERT INTO `pa_access` VALUES ('4','5','3','2','');
INSERT INTO `pa_access` VALUES ('4','2','2','1','');
INSERT INTO `pa_access` VALUES ('4','1','1','0','');
INSERT INTO `pa_access` VALUES ('2','9','3','14','');
INSERT INTO `pa_access` VALUES ('2','15','3','14','');
INSERT INTO `pa_access` VALUES ('2','16','3','14','');
INSERT INTO `pa_access` VALUES ('2','17','3','14','');
INSERT INTO `pa_access` VALUES ('2','18','3','14','');
INSERT INTO `pa_access` VALUES ('2','19','3','14','');
INSERT INTO `pa_access` VALUES ('2','20','3','14','');
INSERT INTO `pa_access` VALUES ('2','21','3','14','');
INSERT INTO `pa_access` VALUES ('2','22','3','14','');
INSERT INTO `pa_access` VALUES ('2','23','3','14','');
INSERT INTO `pa_access` VALUES ('2','24','3','14','');
INSERT INTO `pa_access` VALUES ('2','25','3','14','');
INSERT INTO `pa_access` VALUES ('2','26','2','1','');
INSERT INTO `pa_access` VALUES ('2','27','3','26','');
INSERT INTO `pa_access` VALUES ('2','28','3','26','');
INSERT INTO `pa_access` VALUES ('2','29','3','26','');
INSERT INTO `pa_access` VALUES ('2','30','3','26','');
INSERT INTO `pa_access` VALUES ('2','31','3','26','');
INSERT INTO `pa_access` VALUES ('2','8','3','14','');
INSERT INTO `pa_access` VALUES ('2','14','2','1','');
INSERT INTO `pa_access` VALUES ('2','10','3','4','');
INSERT INTO `pa_access` VALUES ('2','4','2','1','');
INSERT INTO `pa_access` VALUES ('2','7','3','3','');
INSERT INTO `pa_access` VALUES ('2','3','2','1','');
INSERT INTO `pa_access` VALUES ('2','6','3','2','');
INSERT INTO `pa_access` VALUES ('2','5','3','2','');
INSERT INTO `pa_access` VALUES ('2','2','2','1','');
INSERT INTO `pa_access` VALUES ('2','1','1','0','');
INSERT INTO `pa_access` VALUES ('3','14','2','1','');
INSERT INTO `pa_access` VALUES ('3','13','3','4','');
INSERT INTO `pa_access` VALUES ('3','12','3','4','');
INSERT INTO `pa_access` VALUES ('3','11','3','4','');
INSERT INTO `pa_access` VALUES ('3','10','3','4','');
INSERT INTO `pa_access` VALUES ('3','4','2','1','');
INSERT INTO `pa_access` VALUES ('3','9','3','3','');
INSERT INTO `pa_access` VALUES ('3','8','3','3','');
INSERT INTO `pa_access` VALUES ('3','7','3','3','');
INSERT INTO `pa_access` VALUES ('3','3','2','1','');
INSERT INTO `pa_access` VALUES ('3','6','3','2','');
INSERT INTO `pa_access` VALUES ('3','5','3','2','');
INSERT INTO `pa_access` VALUES ('3','2','2','1','');
INSERT INTO `pa_access` VALUES ('3','1','1','0','');
INSERT INTO `pa_access` VALUES ('4','7','3','3','');
INSERT INTO `pa_access` VALUES ('4','3','2','1','');
INSERT INTO `pa_access` VALUES ('4','6','3','2','');
INSERT INTO `pa_access` VALUES ('4','5','3','2','');
INSERT INTO `pa_access` VALUES ('4','2','2','1','');
INSERT INTO `pa_access` VALUES ('4','1','1','0','');
INSERT INTO `pa_access` VALUES ('2','9','3','14','');
INSERT INTO `pa_access` VALUES ('2','15','3','14','');
INSERT INTO `pa_access` VALUES ('2','16','3','14','');
INSERT INTO `pa_access` VALUES ('2','17','3','14','');
INSERT INTO `pa_access` VALUES ('2','18','3','14','');
INSERT INTO `pa_access` VALUES ('2','19','3','14','');
INSERT INTO `pa_access` VALUES ('2','20','3','14','');
INSERT INTO `pa_access` VALUES ('2','21','3','14','');
INSERT INTO `pa_access` VALUES ('2','22','3','14','');
INSERT INTO `pa_access` VALUES ('2','23','3','14','');
INSERT INTO `pa_access` VALUES ('2','24','3','14','');
INSERT INTO `pa_access` VALUES ('2','25','3','14','');
INSERT INTO `pa_access` VALUES ('2','26','2','1','');
INSERT INTO `pa_access` VALUES ('2','27','3','26','');
INSERT INTO `pa_access` VALUES ('2','28','3','26','');
INSERT INTO `pa_access` VALUES ('2','29','3','26','');
INSERT INTO `pa_access` VALUES ('2','30','3','26','');
INSERT INTO `pa_access` VALUES ('2','31','3','26','');
INSERT INTO `pa_access` VALUES ('2','8','3','14','');
INSERT INTO `pa_access` VALUES ('2','14','2','1','');
INSERT INTO `pa_access` VALUES ('2','10','3','4','');
INSERT INTO `pa_access` VALUES ('2','4','2','1','');
INSERT INTO `pa_access` VALUES ('2','7','3','3','');
INSERT INTO `pa_access` VALUES ('2','3','2','1','');
INSERT INTO `pa_access` VALUES ('2','6','3','2','');
INSERT INTO `pa_access` VALUES ('2','5','3','2','');
INSERT INTO `pa_access` VALUES ('2','2','2','1','');
INSERT INTO `pa_access` VALUES ('2','1','1','0','');
INSERT INTO `pa_access` VALUES ('3','14','2','1','');
INSERT INTO `pa_access` VALUES ('3','13','3','4','');
INSERT INTO `pa_access` VALUES ('3','12','3','4','');
INSERT INTO `pa_access` VALUES ('3','11','3','4','');
INSERT INTO `pa_access` VALUES ('3','10','3','4','');
INSERT INTO `pa_access` VALUES ('3','4','2','1','');
INSERT INTO `pa_access` VALUES ('3','9','3','3','');
INSERT INTO `pa_access` VALUES ('3','8','3','3','');
INSERT INTO `pa_access` VALUES ('3','7','3','3','');
INSERT INTO `pa_access` VALUES ('3','3','2','1','');
INSERT INTO `pa_access` VALUES ('3','6','3','2','');
INSERT INTO `pa_access` VALUES ('3','5','3','2','');
INSERT INTO `pa_access` VALUES ('3','2','2','1','');
INSERT INTO `pa_access` VALUES ('3','1','1','0','');
INSERT INTO `pa_access` VALUES ('4','7','3','3','');
INSERT INTO `pa_access` VALUES ('4','3','2','1','');
INSERT INTO `pa_access` VALUES ('4','6','3','2','');
INSERT INTO `pa_access` VALUES ('4','5','3','2','');
INSERT INTO `pa_access` VALUES ('4','2','2','1','');
INSERT INTO `pa_access` VALUES ('4','1','1','0','');
INSERT INTO `pa_access` VALUES ('2','9','3','14','');
INSERT INTO `pa_access` VALUES ('2','15','3','14','');
INSERT INTO `pa_access` VALUES ('2','16','3','14','');
INSERT INTO `pa_access` VALUES ('2','17','3','14','');
INSERT INTO `pa_access` VALUES ('2','18','3','14','');
INSERT INTO `pa_access` VALUES ('2','19','3','14','');
INSERT INTO `pa_access` VALUES ('2','20','3','14','');
INSERT INTO `pa_access` VALUES ('2','21','3','14','');
INSERT INTO `pa_access` VALUES ('2','22','3','14','');
INSERT INTO `pa_access` VALUES ('2','23','3','14','');
INSERT INTO `pa_access` VALUES ('2','24','3','14','');
INSERT INTO `pa_access` VALUES ('2','25','3','14','');
INSERT INTO `pa_access` VALUES ('2','26','2','1','');
INSERT INTO `pa_access` VALUES ('2','27','3','26','');
INSERT INTO `pa_access` VALUES ('2','28','3','26','');
INSERT INTO `pa_access` VALUES ('2','29','3','26','');
INSERT INTO `pa_access` VALUES ('2','30','3','26','');
INSERT INTO `pa_access` VALUES ('2','31','3','26','');
INSERT INTO `pa_access` VALUES ('2','8','3','14','');
INSERT INTO `pa_access` VALUES ('2','14','2','1','');
INSERT INTO `pa_access` VALUES ('2','10','3','4','');
INSERT INTO `pa_access` VALUES ('2','4','2','1','');
INSERT INTO `pa_access` VALUES ('2','7','3','3','');
INSERT INTO `pa_access` VALUES ('2','3','2','1','');
INSERT INTO `pa_access` VALUES ('2','6','3','2','');
INSERT INTO `pa_access` VALUES ('2','5','3','2','');
INSERT INTO `pa_access` VALUES ('2','2','2','1','');
INSERT INTO `pa_access` VALUES ('2','1','1','0','');
INSERT INTO `pa_access` VALUES ('3','14','2','1','');
INSERT INTO `pa_access` VALUES ('3','13','3','4','');
INSERT INTO `pa_access` VALUES ('3','12','3','4','');
INSERT INTO `pa_access` VALUES ('3','11','3','4','');
INSERT INTO `pa_access` VALUES ('3','10','3','4','');
INSERT INTO `pa_access` VALUES ('3','4','2','1','');
INSERT INTO `pa_access` VALUES ('3','9','3','3','');
INSERT INTO `pa_access` VALUES ('3','8','3','3','');
INSERT INTO `pa_access` VALUES ('3','7','3','3','');
INSERT INTO `pa_access` VALUES ('3','3','2','1','');
INSERT INTO `pa_access` VALUES ('3','6','3','2','');
INSERT INTO `pa_access` VALUES ('3','5','3','2','');
INSERT INTO `pa_access` VALUES ('3','2','2','1','');
INSERT INTO `pa_access` VALUES ('3','1','1','0','');
INSERT INTO `pa_access` VALUES ('4','7','3','3','');
INSERT INTO `pa_access` VALUES ('4','3','2','1','');
INSERT INTO `pa_access` VALUES ('4','6','3','2','');
INSERT INTO `pa_access` VALUES ('4','5','3','2','');
INSERT INTO `pa_access` VALUES ('4','2','2','1','');
INSERT INTO `pa_access` VALUES ('4','1','1','0','');
INSERT INTO `pa_access` VALUES ('2','9','3','14','');
INSERT INTO `pa_access` VALUES ('2','15','3','14','');
INSERT INTO `pa_access` VALUES ('2','16','3','14','');
INSERT INTO `pa_access` VALUES ('2','17','3','14','');
INSERT INTO `pa_access` VALUES ('2','18','3','14','');
INSERT INTO `pa_access` VALUES ('2','19','3','14','');
INSERT INTO `pa_access` VALUES ('2','20','3','14','');
INSERT INTO `pa_access` VALUES ('2','21','3','14','');
INSERT INTO `pa_access` VALUES ('2','22','3','14','');
INSERT INTO `pa_access` VALUES ('2','23','3','14','');
INSERT INTO `pa_access` VALUES ('2','24','3','14','');
INSERT INTO `pa_access` VALUES ('2','25','3','14','');
INSERT INTO `pa_access` VALUES ('2','26','2','1','');
INSERT INTO `pa_access` VALUES ('2','27','3','26','');
INSERT INTO `pa_access` VALUES ('2','28','3','26','');
INSERT INTO `pa_access` VALUES ('2','29','3','26','');
INSERT INTO `pa_access` VALUES ('2','30','3','26','');
INSERT INTO `pa_access` VALUES ('2','31','3','26','');
INSERT INTO `pa_access` VALUES ('2','8','3','14','');
INSERT INTO `pa_access` VALUES ('2','14','2','1','');
INSERT INTO `pa_access` VALUES ('2','10','3','4','');
INSERT INTO `pa_access` VALUES ('2','4','2','1','');
INSERT INTO `pa_access` VALUES ('2','7','3','3','');
INSERT INTO `pa_access` VALUES ('2','3','2','1','');
INSERT INTO `pa_access` VALUES ('2','6','3','2','');
INSERT INTO `pa_access` VALUES ('2','5','3','2','');
INSERT INTO `pa_access` VALUES ('2','2','2','1','');
INSERT INTO `pa_access` VALUES ('2','1','1','0','');
INSERT INTO `pa_access` VALUES ('3','14','2','1','');
INSERT INTO `pa_access` VALUES ('3','13','3','4','');
INSERT INTO `pa_access` VALUES ('3','12','3','4','');
INSERT INTO `pa_access` VALUES ('3','11','3','4','');
INSERT INTO `pa_access` VALUES ('3','10','3','4','');
INSERT INTO `pa_access` VALUES ('3','4','2','1','');
INSERT INTO `pa_access` VALUES ('3','9','3','3','');
INSERT INTO `pa_access` VALUES ('3','8','3','3','');
INSERT INTO `pa_access` VALUES ('3','7','3','3','');
INSERT INTO `pa_access` VALUES ('3','3','2','1','');
INSERT INTO `pa_access` VALUES ('3','6','3','2','');
INSERT INTO `pa_access` VALUES ('3','5','3','2','');
INSERT INTO `pa_access` VALUES ('3','2','2','1','');
INSERT INTO `pa_access` VALUES ('3','1','1','0','');
INSERT INTO `pa_access` VALUES ('4','7','3','3','');
INSERT INTO `pa_access` VALUES ('4','3','2','1','');
INSERT INTO `pa_access` VALUES ('4','6','3','2','');
INSERT INTO `pa_access` VALUES ('4','5','3','2','');
INSERT INTO `pa_access` VALUES ('4','2','2','1','');
INSERT INTO `pa_access` VALUES ('4','1','1','0','');
INSERT INTO `pa_access` VALUES ('2','9','3','14','');
INSERT INTO `pa_access` VALUES ('2','15','3','14','');
INSERT INTO `pa_access` VALUES ('2','16','3','14','');
INSERT INTO `pa_access` VALUES ('2','17','3','14','');
INSERT INTO `pa_access` VALUES ('2','18','3','14','');
INSERT INTO `pa_access` VALUES ('2','19','3','14','');
INSERT INTO `pa_access` VALUES ('2','20','3','14','');
INSERT INTO `pa_access` VALUES ('2','21','3','14','');
INSERT INTO `pa_access` VALUES ('2','22','3','14','');
INSERT INTO `pa_access` VALUES ('2','23','3','14','');
INSERT INTO `pa_access` VALUES ('2','24','3','14','');
INSERT INTO `pa_access` VALUES ('2','25','3','14','');
INSERT INTO `pa_access` VALUES ('2','26','2','1','');
INSERT INTO `pa_access` VALUES ('2','27','3','26','');
INSERT INTO `pa_access` VALUES ('2','28','3','26','');
INSERT INTO `pa_access` VALUES ('2','29','3','26','');
INSERT INTO `pa_access` VALUES ('2','30','3','26','');
INSERT INTO `pa_access` VALUES ('2','31','3','26','');
INSERT INTO `pa_access` VALUES ('2','8','3','14','');
INSERT INTO `pa_access` VALUES ('2','14','2','1','');
INSERT INTO `pa_access` VALUES ('2','10','3','4','');
INSERT INTO `pa_access` VALUES ('2','4','2','1','');
INSERT INTO `pa_access` VALUES ('2','7','3','3','');
INSERT INTO `pa_access` VALUES ('2','3','2','1','');
INSERT INTO `pa_access` VALUES ('2','6','3','2','');
INSERT INTO `pa_access` VALUES ('2','5','3','2','');
INSERT INTO `pa_access` VALUES ('2','2','2','1','');
INSERT INTO `pa_access` VALUES ('2','1','1','0','');
INSERT INTO `pa_access` VALUES ('3','14','2','1','');
INSERT INTO `pa_access` VALUES ('3','13','3','4','');
INSERT INTO `pa_access` VALUES ('3','12','3','4','');
INSERT INTO `pa_access` VALUES ('3','11','3','4','');
INSERT INTO `pa_access` VALUES ('3','10','3','4','');
INSERT INTO `pa_access` VALUES ('3','4','2','1','');
INSERT INTO `pa_access` VALUES ('3','9','3','3','');
INSERT INTO `pa_access` VALUES ('3','8','3','3','');
INSERT INTO `pa_access` VALUES ('3','7','3','3','');
INSERT INTO `pa_access` VALUES ('3','3','2','1','');
INSERT INTO `pa_access` VALUES ('3','6','3','2','');
INSERT INTO `pa_access` VALUES ('3','5','3','2','');
INSERT INTO `pa_access` VALUES ('3','2','2','1','');
INSERT INTO `pa_access` VALUES ('3','1','1','0','');
INSERT INTO `pa_access` VALUES ('4','7','3','3','');
INSERT INTO `pa_access` VALUES ('4','3','2','1','');
INSERT INTO `pa_access` VALUES ('4','6','3','2','');
INSERT INTO `pa_access` VALUES ('4','5','3','2','');
INSERT INTO `pa_access` VALUES ('4','2','2','1','');
INSERT INTO `pa_access` VALUES ('4','1','1','0','');
INSERT INTO `pa_access` VALUES ('2','9','3','14','');
INSERT INTO `pa_access` VALUES ('2','15','3','14','');
INSERT INTO `pa_access` VALUES ('2','16','3','14','');
INSERT INTO `pa_access` VALUES ('2','17','3','14','');
INSERT INTO `pa_access` VALUES ('2','18','3','14','');
INSERT INTO `pa_access` VALUES ('2','19','3','14','');
INSERT INTO `pa_access` VALUES ('2','20','3','14','');
INSERT INTO `pa_access` VALUES ('2','21','3','14','');
INSERT INTO `pa_access` VALUES ('2','22','3','14','');
INSERT INTO `pa_access` VALUES ('2','23','3','14','');
INSERT INTO `pa_access` VALUES ('2','24','3','14','');
INSERT INTO `pa_access` VALUES ('2','25','3','14','');
INSERT INTO `pa_access` VALUES ('2','26','2','1','');
INSERT INTO `pa_access` VALUES ('2','27','3','26','');
INSERT INTO `pa_access` VALUES ('2','28','3','26','');
INSERT INTO `pa_access` VALUES ('2','29','3','26','');
INSERT INTO `pa_access` VALUES ('2','30','3','26','');
INSERT INTO `pa_access` VALUES ('2','31','3','26','');


# 数据库表：pa_addadvice 数据信息
INSERT INTO `pa_addadvice` VALUES ('2','2','admin','犯非法','撒旦法','飞凤饭店','0');


# 数据库表：pa_admin 数据信息
INSERT INTO `pa_admin` VALUES ('1','超级管理员','925066365@qq.com','025ddc31c4f6ed94fd2931cb950abf5e','1','我是超级管理员 哈哈~~','','1444226583');
INSERT INTO `pa_admin` VALUES ('4','','15577270293@163.com','025ddc31c4f6ed94fd2931cb950abf5e','1','','','1445394195');


# 数据库表：pa_advice 数据信息
INSERT INTO `pa_advice` VALUES ('24','350','2','阿道夫','犯非法','撒旦发射点发','1411397171','1','1','admin');
INSERT INTO `pa_advice` VALUES ('25','356','2','','','','0','0','2','陈洪杨');
INSERT INTO `pa_advice` VALUES ('26','357','2','','','','0','0','2','xfz');
INSERT INTO `pa_advice` VALUES ('27','350','9','adfd','dsfdf ','sdfasdf sf','1411397174','1','0','admin');


# 数据库表：pa_category 数据信息
INSERT INTO `pa_category` VALUES ('24','22','理财资讯');
INSERT INTO `pa_category` VALUES ('14','13','私募动态');
INSERT INTO `pa_category` VALUES ('1','0','信托计划');
INSERT INTO `pa_category` VALUES ('23','22','行业动态');
INSERT INTO `pa_category` VALUES ('8','6','募资资讯');
INSERT INTO `pa_category` VALUES ('2','1','行业新闻');
INSERT INTO `pa_category` VALUES ('9','6','上市资讯');
INSERT INTO `pa_category` VALUES ('6','0','PE');
INSERT INTO `pa_category` VALUES ('21','18','债券公告');
INSERT INTO `pa_category` VALUES ('15','13','私募人物');
INSERT INTO `pa_category` VALUES ('16','13','私募视点');
INSERT INTO `pa_category` VALUES ('26','22','监管动态');
INSERT INTO `pa_category` VALUES ('13','0','阳光私募');
INSERT INTO `pa_category` VALUES ('17','13','私募研究');
INSERT INTO `pa_category` VALUES ('10','6','大佬语录');
INSERT INTO `pa_category` VALUES ('12','6','投资人生');
INSERT INTO `pa_category` VALUES ('27','0','券商');
INSERT INTO `pa_category` VALUES ('4','1','信托渠道');
INSERT INTO `pa_category` VALUES ('20','18','债市研究');
INSERT INTO `pa_category` VALUES ('18','0','债券');
INSERT INTO `pa_category` VALUES ('25','22','观点评论');
INSERT INTO `pa_category` VALUES ('5','1','行业研究');
INSERT INTO `pa_category` VALUES ('11','6','投资人物');
INSERT INTO `pa_category` VALUES ('28','27','行业动态');
INSERT INTO `pa_category` VALUES ('30','27','行业研究');
INSERT INTO `pa_category` VALUES ('22','0','银行');
INSERT INTO `pa_category` VALUES ('3','1','机构动态');
INSERT INTO `pa_category` VALUES ('7','6','行业动态');
INSERT INTO `pa_category` VALUES ('29','27','研究动态');
INSERT INTO `pa_category` VALUES ('19','18','债券要闻');
INSERT INTO `pa_category` VALUES ('31','6','收购并购');
INSERT INTO `pa_category` VALUES ('51','0','大屏广告');
INSERT INTO `pa_category` VALUES ('54','51','新闻广告');


# 数据库表：pa_chuangyi 数据信息
INSERT INTO `pa_chuangyi` VALUES ('1','创青春','陈洪杨','Hello  world!','1409653448','350','1','chytth','66');
INSERT INTO `pa_chuangyi` VALUES ('2','Hello','科研立项','不错的','0','350','0','chytth','34');


# 数据库表：pa_clickcount 数据信息
INSERT INTO `pa_clickcount` VALUES ('1','6904','0');


# 数据库表：pa_download 数据信息
INSERT INTO `pa_download` VALUES ('8','552a309a3740c.doc','1','挑战杯','1428828314');
INSERT INTO `pa_download` VALUES ('9','5617dc63e8d6a.png','1','管理','1444404323');
INSERT INTO `pa_download` VALUES ('10','561a4bf136137.png','0','2544','1444563953');


# 数据库表：pa_email 数据信息
INSERT INTO `pa_email` VALUES ('1','354','350','<p>admin  传给chytth的私信</p>','0','','','','','1','1');
INSERT INTO `pa_email` VALUES ('2','350','355','<p>chytth1传给admin的</p>','0','','','','','1','0');
INSERT INTO `pa_email` VALUES ('3','350','355','<p>chytth1给admin的</p>','0','','','','','1','0');
INSERT INTO `pa_email` VALUES ('4','354','354','刚刚发的','1409047280','chytth','chytth','53fb04592a87d.gif','53fb04592a87d.gif','0','1');
INSERT INTO `pa_email` VALUES ('5','354','354','陈洪杨','1409047361','chytth','chytth','53fb04592a87d.gif','53fb04592a87d.gif','0','1');
INSERT INTO `pa_email` VALUES ('6','354','354','第二封','1409047416','chytth','chytth','53fb04592a87d.gif','53fb04592a87d.gif','0','1');
INSERT INTO `pa_email` VALUES ('7','354','354','第三封','1409047430','chytth','chytth','53fb04592a87d.gif','53fb04592a87d.gif','0','1');
INSERT INTO `pa_email` VALUES ('8','350','350','第一封','1409054233','admin','admin','53fb0263e44a1.gif','53fb0263e44a1.gif','1','1');
INSERT INTO `pa_email` VALUES ('9','350','350','   <div class="menu">
            <ul>
                <li><a class="album" href="__GROUP__/Myzone/state/id/{$info[0].uid}">状态</a></li>
                <li><a class="code" href="__GROUP__/Myzone/letter/id/{$info[0].uid}">收信箱</a></li>
                <li><a class="connection" href="__GROUP__/Myzone/outletter/id/{$info[0].uid}">发信箱</a></li>
                <li><a class="leaveword" href="__GROUP__/Myzone/messageboard/id/{$info[0].uid}">留言</a></li>
                <li><a class="letter" href="__GROUP__/Myzone/myidea/id/{$info[0].uid}">创意</a></li>
                <li><a class="notice" href="__GROUP__/Myzone/secureqa/id/{$info[0].uid}">安全设置</a></li>
                <li><a class="connection" href="__GROUP__/Myzone/bind/id/{$info[0].uid}">账号绑定</a></li>
            </ul>
        </div>
   <div class="menu">
            <ul>
                <li><a class="album" href="__GROUP__/Myzone/state/id/{$info[0].uid}">状态</a></li>
                <li><a class="code" href="__GROUP__/Myzone/letter/id/{$info[0].uid}">收信箱</a></li>
                <li><a class="connection" href="__GROUP__/Myzone/outletter/id/{$info[0].uid}">发信箱</a></li>
                <li><a class="leaveword" href="__GROUP__/Myzone/messageboard/id/{$info[0].uid}">留言</a></li>
                <li><a class="letter" href="__GROUP__/Myzone/myidea/id/{$info[0].uid}">创意</a></li>
                <li><a class="notice" href="__GROUP__/Myzone/secureqa/id/{$info[0].uid}">安全设置</a></li>
                <li><a class="connection" href="__GROUP__/Myzone/bind/id/{$info[0].uid}">账号绑定</a></li>
            </ul>
        </div>','1409054298','admin','admin','53fb0263e44a1.gif','53fb0263e44a1.gif','1','1');
INSERT INTO `pa_email` VALUES ('10','350','356','福建省地方时间按活动擦粉','1409194021','admin','陈洪杨','53fb0263e44a1.gif','53fe97f67bf75.gif','1','0');
INSERT INTO `pa_email` VALUES ('11','350','350','hgfk,hl,uikhkiyur','1409928333','admin','admin','54041b213fe17.gif','54041b213fe17.gif','1','0');
INSERT INTO `pa_email` VALUES ('12','354','371','哈喽  粉丝兼新人一枚 请多多关注；）','1413544027','chytth','芝麻','53fb04592a87d.gif','53fa0d0029560.jpg','0','0');
INSERT INTO `pa_email` VALUES ('13','367','369','妹子 認識我嗎  こにちは　始めますて　どうぞ　よろしく　お願いします','1413614165','陈梦婷','邱帥哥','53fa0d0029560.jpg','543fea27ea638.gif','0','0');
INSERT INTO `pa_email` VALUES ('14','373','373','小马哥','1413614441','小马哥','小马哥','54420a3b405a1.jpg','54420a3b405a1.jpg','0','0');
INSERT INTO `pa_email` VALUES ('15','377','354','照片 不错嘛！！ ---- 管理员','1413618382','广科大花粉俱乐部','chytth','54421aab41dda.jpg','54411f77909b9.PNG','0','0');
INSERT INTO `pa_email` VALUES ('16','380','354','上传个自己照片哈！！！---管理员','1413620813','izheer','chytth','53fa0d0029560.jpg','54411f77909b9.PNG','0','0');
INSERT INTO `pa_email` VALUES ('17','381','354','盼盼---','1413620912','echo','chytth','53fa0d0029560.jpg','54411f77909b9.PNG','0','0');
INSERT INTO `pa_email` VALUES ('18','380','369','こんにちは　','1413633662','izheer','邱帥哥','5442293939cac.jpg','54420ebb2a5ab.png','0','0');


# 数据库表：pa_file 数据信息
INSERT INTO `pa_file` VALUES ('11','551bb7b729cdf.doc','1427879863','第一十四届挑战杯申请表下载','0','0','0');
INSERT INTO `pa_file` VALUES ('12','551bb8fb5d770.doc','1427880187','第一十四届挑战杯申请表下载','0','1','0');
INSERT INTO `pa_file` VALUES ('13','552a3af5a834b.doc','1428830965','挑战杯','0','1','0');


# 数据库表：pa_game 数据信息
INSERT INTO `pa_game` VALUES ('48','1','第十四届“挑战杯”全国大学生课外学术科技作品竞赛校内选拔赛的通知','','0','近日，我校师生参加第28届中国大学生手球锦标赛、第十二届全国大学生攀岩锦标赛、第三届全区大学生田径比赛等体育赛事屡获佳绩，捷报频传。手球队扬威第28届全国大学生手球锦标赛7月20日下午，由中国大学生体育协会手球分会主办，南京工程学院承办的第28届中国大学生手球锦标赛在天健苑·体育中心落下帷幕。本届比赛共有来自中国内地、香港和澳门等地19所高校26支运动队400余名运动员参加了3个组别的角逐。我校代&hellip;','1445435225','','<p style="text-indent:32px;">
	<br />
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>一、竞赛目的与意义</b> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	引导和激励我校学生崇尚科学、追求真理、勤奋学习、锐意创新、迎接挑战的精神，提高学生的创新品质和实践能力，并在此基础上促进我校学生课外学术科技的文化氛围，发现和培养一批在学术科技上有作为、有潜力的优秀人才，促进我校大学生科技创新能力的提高。<span></span> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>二、竞赛宗旨</b> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	崇尚科学、追求真知、勤奋学习、锐意创新、迎接挑战<span></span> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>三、竞赛组织</b> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>主办单位：</b>共青团广西科技大学委员会
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>承办单位：</b>“挑战杯”竞赛广西科技大学校内选拔赛组织委员会<span></span> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>四、竞赛细则</b> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>（一）参赛对象</b> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	我校<span>2015</span>年<span>7</span>月<span>1</span>日以前正式注册的全日制在校本专科生、硕士研究生都可参赛。由学生个人或自主组成团队参加，团队人数不得超过<span>4</span>人。由不同学历的学生组队，按最高学历划分组别。可聘请<span>1-2</span>名指导老师。<span></span> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>（二）参赛作品类别</b> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	参赛课题必须要有现实意义，符合社会需求，应多关注社会、民生、热点问题，侧重研究探讨社会经济中的具体问题。竞赛内容分为三大类：<span></span> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>1.</b><b>自然科学类学术论文</b> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	自然科学论文的作者<b>仅限本、专科生</b>，研究生的作品不在此列。
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	作品类别包括机械、仪器仪表、自动化控制、工程、交通、建筑、计算机、电信、通讯、电子、数学、物理、地球与空间科学、生物、农学、药学、医学、健康、卫生、食品、能源、材料、石油、化学、化工、生态、环保等方面的作品。
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>2.</b><b>哲学社会科学类社会调查报告和学术论文</b> 
</p>
<p class="MsoNormal" style="text-indent:32pt;" align="left">
	哲学社会科学类社会调查报告和学术论文限定在哲学、经济、社会、法律、教育、管理六个学科内。申报哲学社会科学类学术论文参考选题详见《关于第十三届“挑战杯”全国大学生课外学术科技作品竞赛哲学社会科学类参赛作品参考选题的通知<span>http://www.tiaozhanbei.net/article/15628/</span>。其中社会调查报告（字数不超过<span>15000</span>字）和学术论文类（字数不超过<span>8000</span>字）。
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>3.</b><b>科技发明制作</b> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	科技发明制作类分为<span>A</span>、<span>B</span>两类：<span>A</span>类指科技含量较高、制作投入较大的作品；<span>B</span>类指投入较少，且为生产技术或社会生活带来便利的小发明、小制作等。
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>五、竞赛日程<span></span></b> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>（一）竞赛预报名及培训</b> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	时间：<span>3</span>月<span>5</span>日—<span>3</span>月<span>20</span>日，请各学院组织学生报名，将《“挑战杯”广西科技大学校内选拔赛作品报名清单》（附件<span>1</span>）电子版，于<span>3</span>月<span>20</span>日（星期五）下午<span>4:30</span>前，发送至学校团委邮箱，邮箱：<span>gxkjdxtw@163.com</span>。<span></span> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>（二）作品准备</b> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	时间：<span>3</span>月<span>20</span>日—<span>4</span>月<span>24</span>日，请将参赛作品（纸质版一式两份，电子版）交至各学院团委。发明制作类需上交实物作品。
</p>
<p class="MsoNormal" align="left">
	并于规定的时间内到所在学院团委完成作品准备申报工作。各学院团委做好参赛作品收集汇总和统计工作，将《第十四届“挑战杯”大学生课外学术科技作品申报书》（附件<span>2</span>）并于<span>4</span>月<span>24</span>日（星期五）下午<span>4:30</span>前上交至校团委办公室。
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>（三）作品初评</b> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	时间：<span>4</span>月<span>25</span>日—<span>4</span>月<span>27</span>日，组委会邀请具有权威性的专家组成评审组，对参赛作品按科技发明制作、自然科学类学术论文、社会科学类社会调查报告和学术论文三类进行书面评审，然后根据综合评分进行作品筛选。
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>（四）作品完善</b> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	时间：<span>4</span>月<span>28</span>日<span>-5<span><span>月13</span></span><span><span>日</span></span><span>，通过预选的作品作者或团队在指导教师指导下进行针对性修改和完善，并上报竞赛组委会办公室。</span></span> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>（五）作品终评</b> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	时间：<span>5</span>月<span>14</span>日，组委会办公室聘请专家组对参赛作品进行终评，并确定推荐参加广西“挑战杯”竞赛的优秀作品。
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>（六）校内选拔赛总结，自治区赛及国赛推荐报送</b> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	终评后，学校将通过各种媒介向全校同学公布评选结果，将择优作为广西科技大学推荐参赛作品报送广西自治区赛评选，自治区赛的获奖作品将由广西竞赛组委会择优推荐到全国组委会。
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	学校将组织入围参加国赛的作品进行修改和完善，并将完善好的作品和相关材料向全国组委会申报。<span></span> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>&nbsp;</b> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>&nbsp;</b> 
</p>
<p class="MsoNormal" style="text-indent:32.0pt;">
	<b>（七）竞赛日程推进表<span></span></b> 
</p>
<div align="center">
	<table class="MsoNormalTable" style="width:463.4pt;background-color:white;" border="1" cellpadding="0" cellspacing="0" width="618">
		<tbody>
			<tr>
				<td width="61">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<b><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">日程<span></span></span></b> 
					</p>
				</td>
				<td width="203">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<b><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">时间<span></span></span></b> 
					</p>
				</td>
				<td width="354">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<b><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">工作内容和要求<span></span></span></b> 
					</p>
				</td>
			</tr>
			<tr>
				<td width="61">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">1</span> 
					</p>
				</td>
				<td width="203">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">2015</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">年<span>3</span>月<span>5</span>日<span></span></span> 
					</p>
				</td>
				<td width="354">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">正式发布竞赛实施方案、竞赛启动宣传<span></span></span> 
					</p>
				</td>
			</tr>
			<tr>
				<td width="61">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">2</span> 
					</p>
				</td>
				<td width="203">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">3</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">月<span>5</span>日</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">-3<span><span>月20</span></span><span><span>日</span></span></span> 
					</p>
				</td>
				<td width="354">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">各学院、拟参赛</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;">团<span style="color:#333333;">队或个人预报名，<span></span></span></span> 
					</p>
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">各学院将预报名表交校团委办公室。<span></span></span> 
					</p>
				</td>
			</tr>
			<tr>
				<td width="61">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">3</span> 
					</p>
				</td>
				<td width="203">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">3</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">月 具体时间：待定<span></span></span> 
					</p>
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">（地点：待定）<span></span></span> 
					</p>
				</td>
				<td width="354">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">竞赛培训<span></span></span> 
					</p>
				</td>
			</tr>
			<tr>
				<td width="61">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">4</span> 
					</p>
				</td>
				<td width="203">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">3</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">月<span>20</span>日</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">-4<span><span>月25</span></span><span><span>日</span></span></span> 
					</p>
				</td>
				<td width="354">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">作品准备<span></span></span> 
					</p>
				</td>
			</tr>
			<tr>
				<td width="61">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">5</span> 
					</p>
				</td>
				<td width="203">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">4</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">月<span>26</span>日</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">-4<span><span>月27</span></span><span><span>日</span></span></span> 
					</p>
				</td>
				<td width="354">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">作品初审<span></span></span> 
					</p>
				</td>
			</tr>
			<tr>
				<td width="61">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">6</span> 
					</p>
				</td>
				<td width="203">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">4</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">月<span>28</span>日</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">-5<span><span>月13</span></span><span><span>日</span></span></span> 
					</p>
				</td>
				<td width="354">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">作品完善<span></span></span> 
					</p>
				</td>
			</tr>
			<tr>
				<td width="61">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">7</span> 
					</p>
				</td>
				<td width="203">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">5</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">月<span>14</span>日</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;"></span> 
					</p>
				</td>
				<td width="354">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">作品终评<span></span></span> 
					</p>
				</td>
			</tr>
			<tr>
				<td width="61">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">8</span> 
					</p>
				</td>
				<td width="203">
					<p class="MsoNormal" style="text-align:center;" align="center">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">2015</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">年<span>5</span>月<span>-10</span>月<span></span></span> 
					</p>
				</td>
				<td width="354">
					<p class="MsoNormal" align="left">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">省级、全国决赛：<span></span></span> 
					</p>
					<p class="MsoNormal" style="text-indent:32pt;" align="left">
						<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">5</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">月<span>20</span>日</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">前，学校推荐优秀作品参加第六届“挑战杯”广西大学生课外学术科技作品竞赛；<span>6</span>月，报送优秀作品参加第十三届“挑战杯”全国大学生课外学术科技作品竞赛；<span>10</span>月，参加全国终审决赛。<span></span></span> 
					</p>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<p class="MsoNormal">
	<br />
</p>
<p class="MsoNormal">
	工作联系人：易<span>&nbsp; </span>敏<span>&nbsp; </span>韦齐齐<span></span> 
</p>
<p class="MsoNormal">
	联系电话：<span>2685059&nbsp;&nbsp;
2686775</span> 
</p>
<p>
	<br />
</p>
<p style="text-indent:32px;">
	<br />
</p>','1','共青团中央、中国科协、教育部、全国学联主办','广西科技大学','2015-3-5','2015-4-26','“挑战杯”全国大学生课外学术科技作品竞赛（以下简称“挑战杯”竞赛）是由共青团中央、中国科协、教育部、全国学联主办的一项具有导向性、示范性和群众性的全国竞赛活动，被誉为中国大学生学术科技的“奥林匹克”。
第十四届“挑战杯”竞赛由广东工业大学、香港科技大学共同承办，将于2015年6月上旬开始报送作品，决赛将于下半年在广州、香港两地举行。根据相关文件精神，自治区将选拔35件作品（其中发起高校3项）参加全国比赛，为更好地推荐作品参加全区、 全国的比赛，现通知如下：
');
INSERT INTO `pa_game` VALUES ('49','1','计算机学院举行“人工智能及其进展”学术报告会','','0','6月20日下午，计算机学院在5北203教室举行了题为“人工智能及其进展”的学术报告会。报告会由武汉大学博士生导师董文永教授主讲，计算机学院李春贵院长带领计算机学院部分师生参加了报告会。 在交流中，董老师从人工智能的“梦想与困惑”出发，详细讲解了人工智能及其进展，以及信息时代人工智能所面临的困境和机遇，并就目前人工智能领域智能计算和自然计算谈了个人的见解和发展趋势。会后，董老师与计算机学院的教师就如&hellip;','1409058130','','6月20日下午，计算机学院在5北203教室举行了题为“人工智能及其进展”的学术报告会。报告会由武汉大学博士生导师董文永教授主讲，计算机学院李春贵院长带领计算机学院部分师生参加了报告会。 <br />
在交流中，董老师从人工智能的“梦想与困惑”出发，详细讲解了人工智能及其进展，以及信息时代人工智能所面临的困境和机遇，并就目前人工智能领域智能计算和自然计算谈了个人的见解和发展趋势。会后，董老师与计算机学院的教师就如何提高国家自然基金项目命中率和国家自然基金申报书撰写中的注意事项等方面进行了面对面的交流和沟通。（计算机学院）','4','计算机学院','宣传部','2014-6-20','2014-6-20',' 6月20日下午，计算机学院在5北203教室举行了题为“人工智能及其进展”的学术报告会。报告会由武汉大学博士生导师董文永教授主讲，计算机学院李春贵院长带领计算机学院部分师生参加了报告会。 ');
INSERT INTO `pa_game` VALUES ('50','1','第四十五届体操世锦赛在南宁开幕','','0','本报南宁10月7日电 （记者王明浩、庞革平、马剑）10月7日晚，第四十五届世界体操锦标赛在广西南宁隆重开幕。全国政协副主席马飚、国际体操联合会主席布鲁诺·格兰迪以及缅甸副总统赛茂康、柬埔寨副首相兼内阁办公厅大臣索安等出席开幕式，马飚宣布开幕。随后进行了题为《梦聚南宁》的文艺演出，演出融汇武术、民族歌舞、体操表演等形式，通过会鼓、绣球、壮锦、朱槿花、银饰等最具代表性的广西元素与第四十五届世界体操锦标&hellip;','1445433979','','本报南宁10月7日电 （记者王明浩、庞革平、马剑）10月7日晚，第四十五届世界体操锦标赛在广西南宁隆重开幕。全国政协副主席马飚、国际体操联合会主席布鲁诺·格兰迪以及缅甸副总统赛茂康、柬埔寨副首相兼内阁办公厅大臣索安等出席开幕式，马飚宣布开幕。
<p style="text-indent:2em;">
	随后进行了题为《梦聚南宁》的文艺演出，演出融汇武术、民族歌舞、体操表演等形式，通过会鼓、绣球、壮锦、朱槿花、银饰等最具代表性的广西元素与第四十五届世界体操锦标赛运动主题的结合，既展现出广西12个世居民族丰富多彩的民族风情，又体现出运动员顽强拼搏、勇于竞争的奥林匹克精神。
</p>
<p style="text-indent:2em;">
	本次世锦赛是继1999年天津首次举办体操世锦赛后，该项国际性体操赛事再次落户中国，也是我国首次在少数民族边疆地区举办重要国际性体育赛事。本次比赛10月3日开赛，将持续至10月12日。赛事设置了男子6个单项（自由操、鞍马、吊环、跳马、双杠、单杠），女子4个单项（跳马、高低杠、平衡木、自由操）和男女团体、男女个人全能共14个项目。
</p>','1','你的大学','我的大学','2014-10-7','2014-10-12','随后进行了题为《梦聚南宁》的文艺演出，演出融汇武术、民族歌舞、体操表演等形式，通过会鼓、绣球、壮锦、朱槿花、银饰等最具代表性的广西元素与第四十五届世界体操锦标赛运动主题的结合，既展现出广西12个世居民族丰富多彩的民族风情，又体现出运动员顽强拼搏、勇于竞争的奥林匹克精神。');
INSERT INTO `pa_game` VALUES ('51','1','广西首个无动力赛车大赛在广西科技大学成功举行','','0','广西新闻网柳州6月9日讯（记者李伟国 通讯员蒋智华）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 什么是无动力赛车？车辆为何能够在没有动力的情况下前进并通过障碍？6月7日至8日，广西科技大学“2014大学生无动力赛车大赛”的成功举办，就为大家揭开了谜底。来自汽车学院、职业教育学院、机械工程学院、鹿山学院以及柳州铁道职业技术学院等31支队伍踊跃参赛，广西科技大&hellip;','1413464325','','广西新闻网柳州6月9日讯（记者李伟国 通讯员蒋智华）
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 什么是无动力赛车？车辆为何能够在没有动力的情况下前进并通过障碍？6月7日至8日，广西科技大学“2014大学生无动力赛车大赛”的成功举办，就为大家揭开了谜底。来自汽车学院、职业教育学院、机械工程学院、鹿山学院以及柳州铁道职业技术学院等31支队伍踊跃参赛，广西科技大学也成为广西首个举办无动力赛车大赛的院校。<br />
　　据了解，无动力赛车不同于传统的发动机式赛车，它没有动力系统，无助推装置，完全是在重力作用下行驶。“2014大学生无动力赛车大赛”对参赛车辆作出了特别的要求，即参赛车辆无动力牵引、助推装置，但必须包含转向和制动装置，车高1米以下、重量不超过40公斤。赛车的设计和比赛模式上也有别于传统方式，旨在激发参赛者的创新意识，锻炼学生的设计、动手等应用能力。<br />
　　此次大学生无动力赛车大赛包含五个项目：两个静态项目（模拟销售赛和设计答辩赛），三个动态项目（直线赛、起伏赛、障碍赛）。静态赛项目总分与动态赛总分之和就是无动力赛车的总成绩。其中，静态赛中的模拟销售环节，主要由参赛队伍针对自己设计制造的赛车进行总体展示，向终端消费者模拟销售。设计答辩赛主要是对赛车的设计、操控性、安全性等问题进行总体评估。动态赛中的直线赛、起伏赛、障碍赛须在指定的赛道上完成一系列动作。直线赛赛道由一段斜坡和一段水平直线的赛道组成，车手驾车从坡顶直线滑行至坡底，成绩为车辆的滑行距离；起伏赛赛道以直线冲刺赛道为基础，在直线赛道上设置若干个起伏减速带（高5cm），车辆驶过起伏减速带，成绩以车辆的滑行距离为计；障碍赛赛道以直线冲刺赛道为基础，在直线赛道上摆若干个桩位，车辆需要左右绕行通过，以车辆完整通过的桩数记成绩。<br />
　　经过两天的激烈比拼，广西科技大学汽车学院“风翼车队”斩获冠军，鹿山学院“G-汽电111车队”收获亚军，汽车学院“探路者车队”获得季军，柳州铁道职业技术学院“飞电车队”荣获最佳创意奖。
</p>','1','广西科技大学','广西科技大学','2014-6-9','2014-10-10','经过两天的激烈比拼，广西科技大学汽车学院“风翼车队”斩获冠军，鹿山学院“G-汽电111车队”收获亚军，汽车学院“探路者车队”获得季军，柳州铁道职业技术学院“飞电车队”荣获最佳创意奖。');
INSERT INTO `pa_game` VALUES ('52','1','创科联盟','','0','是的瓦斯的的','1444978398','','是的瓦斯的的','3','广西科技大学','计算机学院','1777-01-02','4777-05-01','上的问答晚上');


# 数据库表：pa_guestbook 数据信息
INSERT INTO `pa_guestbook` VALUES ('1','科技立项','陈洪杨','<p>什么时候可以报名</p>','0','53fa0d0029560.jpg','0','','0');
INSERT INTO `pa_guestbook` VALUES ('2','创青春','陈洪杨','hello world！！！','1409122232','53fa0d0029560.jpg','0','','0');
INSERT INTO `pa_guestbook` VALUES ('3','创青春','陈洪杨','哈哈  我来了！！','1409124895','53fb04592a87d.gif','354','','0');
INSERT INTO `pa_guestbook` VALUES ('4','dscds','chenh','cdscds','1409928386','54041b213fe17.gif','350','','0');
INSERT INTO `pa_guestbook` VALUES ('5','帥','邱','哥哥是柳州仔','1413475390','543fea27ea638.gif','369','','0');
INSERT INTO `pa_guestbook` VALUES ('6','邱','','帥嗎','1413475561','543fea27ea638.gif','369','','0');
INSERT INTO `pa_guestbook` VALUES ('7','邱','','帥嗎','1413475563','543fea27ea638.gif','369','','0');
INSERT INTO `pa_guestbook` VALUES ('8','','','','1445944315','53fa0d0029560.jpg','0','','0');
INSERT INTO `pa_guestbook` VALUES ('9','','','','1446390089','53fa0d0029560.jpg','0','','0');
INSERT INTO `pa_guestbook` VALUES ('10','','','','1447228018','53fa0d0029560.jpg','0','','0');
INSERT INTO `pa_guestbook` VALUES ('11','时间时间','冼杰豪','科技校园','1447228067','53fa0d0029560.jpg','0','','0');


# 数据库表：pa_gundong 数据信息
INSERT INTO `pa_gundong` VALUES ('1','17','55057664777ef.jpg','呵呵');
INSERT INTO `pa_gundong` VALUES ('2','15','20140526023714_71381.jpg','');
INSERT INTO `pa_gundong` VALUES ('3','16','20140523145727_79108.jpg','');
INSERT INTO `pa_gundong` VALUES ('4','17','20140417101741_90646.jpg','');
INSERT INTO `pa_gundong` VALUES ('5','18','20140319140940_53154.jpg','');
INSERT INTO `pa_gundong` VALUES ('6','19','55078a5a6f90c.jpg','');
INSERT INTO `pa_gundong` VALUES ('7','20','20130803211024_45057.jpg','');


# 数据库表：pa_home_game 数据信息
INSERT INTO `pa_home_game` VALUES ('1','华夏文明','11','2','软件工程','22222','123123123','123123213','0','','','');
INSERT INTO `pa_home_game` VALUES ('2','sdfsdf','13','1','fsadf','234234','2342342','2343','0','minsd','dfsdf','sdfasdfsxfed');


# 数据库表：pa_home_pionner 数据信息
INSERT INTO `pa_home_pionner` VALUES ('1','0','','','');
INSERT INTO `pa_home_pionner` VALUES ('2','0','','','');
INSERT INTO `pa_home_pionner` VALUES ('3','0','','','');
INSERT INTO `pa_home_pionner` VALUES ('4','50','323','232','323');
INSERT INTO `pa_home_pionner` VALUES ('5','50','323','232','323');
INSERT INTO `pa_home_pionner` VALUES ('6','17','','','');
INSERT INTO `pa_home_pionner` VALUES ('7','57','蓝开开','计算机','2343243');
INSERT INTO `pa_home_pionner` VALUES ('8','57','','财经','234234234');
INSERT INTO `pa_home_pionner` VALUES ('9','57','','','');
INSERT INTO `pa_home_pionner` VALUES ('10','17','','','');
INSERT INTO `pa_home_pionner` VALUES ('11','17','','','');


# 数据库表：pa_introduction 数据信息
INSERT INTO `pa_introduction` VALUES ('1','科技立项的举办是为调动学生参与课外科技活动和各类学科竞赛活动的积极性，培养学生科技创新意识和提高学生科技创新能力，增强我校的科技文化氛围。 获得科技立项校级一等奖的团队可直接选送参加“挑战杯','1','0');
INSERT INTO `pa_introduction` VALUES ('4','科技立项的举办是为调动学生参与课外科技活动和各类学科竞赛活动的积极性，培养学生科技创新意识和提高学生科技创新能力，增强我校的科技文化氛围。 获得科技立项校级一等奖的团队可直接选送参加“挑战杯”课外科技作品竞赛。 ','1','1');


# 数据库表：pa_major 数据信息
INSERT INTO `pa_major` VALUES ('11','2','admin','陈洪杨','xfz','','','1');
INSERT INTO `pa_major` VALUES ('13','9','admin','','','','','1');


# 数据库表：pa_member 数据信息
INSERT INTO `pa_member` VALUES ('365','1','','q1','','386637ed705ff93ac5da6f5352f9b014','','','','','','','','','','','','','','','','0');
INSERT INTO `pa_member` VALUES ('363','0','','g1','','50c7dab6be9b2ac2e0b340725cd43163','','','','','','','','','','','','','','','','0');
INSERT INTO `pa_member` VALUES ('364','1','','g2','','50c7dab6be9b2ac2e0b340725cd43163','','','','','','','','','','','','','','','','0');
INSERT INTO `pa_member` VALUES ('357','1','','925066365@qq.com','冼杰豪','03d6f5df36d3c4cbe890440dc12875e0','563350dc2bef2.jpg','','1','','河北','承德','我们的世界','2012','15544544254','34234243','','','体育学院','社会体育指导与管理','电影,星座控,程序猿','3');
INSERT INTO `pa_member` VALUES ('361','1','','管理员','男男','03d6f5df36d3c4cbe890440dc12875e0','563486d13f67c.jpg','','1','','辽宁','抚顺','士大夫上的沙敦府阿德发手续费的 。。','2013','123221','2131231','','','机械工程学院','机械工程（数控技术方向）','电影,网络开发,高富帅','0');
INSERT INTO `pa_member` VALUES ('366','1','','q2','','386637ed705ff93ac5da6f5352f9b014','','','','','','','','','','','','','','','','0');
INSERT INTO `pa_member` VALUES ('367','1','','q3','','386637ed705ff93ac5da6f5352f9b014','','','','','','','','','','','','','','','','0');
INSERT INTO `pa_member` VALUES ('368','1','','q4','','386637ed705ff93ac5da6f5352f9b014','','','','','','','','','','','','','','','','0');
INSERT INTO `pa_member` VALUES ('369','1','','q5','','386637ed705ff93ac5da6f5352f9b014','','','','','','','','','','','','','','','','0');
INSERT INTO `pa_member` VALUES ('370','1','','q6','','386637ed705ff93ac5da6f5352f9b014','','','','','','','','','','','','','','','','0');
INSERT INTO `pa_member` VALUES ('371','1','','q7','','386637ed705ff93ac5da6f5352f9b014','','','','','','','','','','','','','','','','0');
INSERT INTO `pa_member` VALUES ('372','1','','q8','','386637ed705ff93ac5da6f5352f9b014','','','','','','','','','','','','','','','','0');
INSERT INTO `pa_member` VALUES ('373','1','','w1','','03d6f5df36d3c4cbe890440dc12875e0','','','','','','','','','','','','','','','','0');


# 数据库表：pa_messageboard 数据信息
INSERT INTO `pa_messageboard` VALUES ('3','350','1409069835','admin','53fb0263e44a1.gif','vfdbgfdbfdbgd');
INSERT INTO `pa_messageboard` VALUES ('4','350','1409069903','admin','53fb0263e44a1.gif','fdbfgngfvnhg');
INSERT INTO `pa_messageboard` VALUES ('5','350','1409069934','admin','53fb0263e44a1.gif','bgfbgfbgf');
INSERT INTO `pa_messageboard` VALUES ('6','350','1409928349','admin','54041b213fe17.gif','fcdscdsnkjvcdsvcndsldcscdscdscdscdssdvdsdnvcmsdvcs');
INSERT INTO `pa_messageboard` VALUES ('7','350','1409928397','admin','54041b213fe17.gif','dcascdscdasc');
INSERT INTO `pa_messageboard` VALUES ('9','371','1413611797','chytth','54411f77909b9.PNG','小芝麻 小芝麻！！！！');
INSERT INTO `pa_messageboard` VALUES ('10','381','1413620933','chytth','54411f77909b9.PNG','弄个头像哈！！！');


# 数据库表：pa_news 数据信息
INSERT INTO `pa_news` VALUES ('48','1','广西科技大学','./Public/Uploads/5644a84a5ac79.jpg','广西科技大学','','1','1','广西科技大学坐落在中国历史文化名城、中国工业化信息化融合试点城市——柳州市，是国务院学位委员会批准的学士、硕士学位授权单位，是“卓越医生教育培养计划”试点高校，直属于广西壮族自治区人民政府管理。2013年经自治区学位委员会批准，正式确定为2013-2018年立项建设新增博士学位授予单位。是一所以工为主，包含工、管、理、经、文、法、艺术、教育、医学等9大学科门类的多科性高等学校。


该
校于201…','5644a84a5ac79.jpg','1446913286','1447340106','<div class="lemma-summary">
	<div class="para">
		<p align="center">
			<img src="/gkmaker/Uploads/image/20151107/20151107162220_48235.jpg" title="广西科技大学" alt="广西科技大学" height="279" width="550" /> 
		</p>
		<p>
			广西科技大学坐落在中国历史文化名城、<a target="_blank" href="http://www.baidu.com">中国工业化信息化</a>融合试点城市——<a target="_blank" href="http://baike.baidu.com/view/694075.htm">柳州市</a>，是国务院学位委员会批准的学士、硕士学位授权单位，是“<a target="_blank" href="http://baike.baidu.com/view/8677737.htm">卓越医生教育培养计划</a>”试点高校，直属于广西壮族自治区人民政府管理。2013年经自治区学位委员会批准，正式确定为2013-2018年立项建设新增博士学位授予单位。是一所以工为主，包含工、管、理、经、文、法、艺术、教育、医学等9大学科门类的多科性高等学校。
		</p>
	</div>
	<div class="para">
		该
校于2013年4月18日经教育部批准由原广西工学院和原柳州医学高等专科学校合并组建而成，原广西工学院始建于1958年，1982年合并广西轻工业学
院、广西机械工业学院、广西石油化工学院，1985年从南宁迁至柳州办学。原柳州医学高等专科学校创建于1951年，2003年经教育部批准升格为“柳州
医学高等专科学校”。<sup>[1]</sup><a name="ref_[1]_5292478"></a>&nbsp;
	</div>
	<div class="para">
		截至2014年5月，该校有东环、柳石和柳东（规划建设中）3个校区，占地面积近4700亩；设16个
二级学院，30个部、处（中心），4个附属医院；有专任教师1200多人，有64个本科专业和8个专科专业。面向全国29个省（区、市）招生，有全日制
本、专科学生、研究生、留学生共25000余人<sup>[1]</sup><a name="ref_[1]_5292478"></a>&nbsp; 。
	</div>
</div>
<br />','1');
INSERT INTO `pa_news` VALUES ('38','51','谷歌眼镜','./Public/Uploads/561fbdb109b53.jpg','额度撒旦','首都师大','1','1','阿斯顿我','561fbdb109b53.jpg','1444920753','1444977188','萨多瓦是','1');
INSERT INTO `pa_news` VALUES ('39','1','的发给对方','./Public/Uploads/561fcb1c9972f.JPG','大法师大法','发生多次','1','1','的份额','561fcb1c9972f.JPG','1444924190','1444924335','份额士大夫哦','1');
INSERT INTO `pa_news` VALUES ('40','1','份额的的','./Public/Uploads/561fcb37a98aa.JPG','俄方','收到','1','1','份额额','561fcb37a98aa.JPG','1444924217','1444924327','东风恶发','1');
INSERT INTO `pa_news` VALUES ('41','1','东风恶收到','./Public/Uploads/561fcb5124112.JPG','都发的','的方法','1','0','份额是的','561fcb5124112.JPG','1444924242','1444924317','发达地方','1');
INSERT INTO `pa_news` VALUES ('43','1','下打发打发','./Public/Uploads/561fd4f2e0300.JPG','带队','方法','1','1','宿舍','561fd4f2e0300.JPG','1444926708','1444973991','点点滴滴','1');
INSERT INTO `pa_news` VALUES ('44','1','广告','./Public/Uploads/562042b6eccf4.JPG','宿舍','宿舍','1','1','宿舍','562042b6eccf4.JPG','1444954808','1444973982','宿舍','1');
INSERT INTO `pa_news` VALUES ('45','51','火影忍者','./Public/Uploads/562044f6a2672.JPG','带队','带队','1','0','方法','562044f6a2672.JPG','1444955384','1444971899','凤飞飞','1');
INSERT INTO `pa_news` VALUES ('46','1','测试状态','./Public/Uploads/56208a808121f.JPG','但是','所得税','0','1','书咄咄','56208a808121f.JPG','1444973186','1444977230','书咄咄','1');
INSERT INTO `pa_news` VALUES ('47','15','我的爱车我的爱车我的爱车我的爱车我的爱车','./Public/Uploads/56208c747e82a.JPG','宿舍','随时随地','1','1','的发生的','56208c747e82a.JPG','1444973686','1445397138','是的发生的','1');


# 数据库表：pa_node 数据信息
INSERT INTO `pa_node` VALUES ('1','Admin','后台管理','1','网站后台管理项目','10','0','1');
INSERT INTO `pa_node` VALUES ('2','Index','管理首页','1','','1','1','2');
INSERT INTO `pa_node` VALUES ('3','Member','注册会员管理','1','','3','1','2');
INSERT INTO `pa_node` VALUES ('4','Webinfo','系统管理','1','','4','1','2');
INSERT INTO `pa_node` VALUES ('5','index','默认页','1','','5','2','3');
INSERT INTO `pa_node` VALUES ('6','myInfo','我的个人信息','1','','6','2','3');
INSERT INTO `pa_node` VALUES ('7','index','会员首页','1','','7','3','3');
INSERT INTO `pa_node` VALUES ('8','index','管理员列表','1','','8','14','3');
INSERT INTO `pa_node` VALUES ('9','addAdmin','添加管理员','1','','9','14','3');
INSERT INTO `pa_node` VALUES ('10','index','系统设置首页','1','','10','4','3');
INSERT INTO `pa_node` VALUES ('11','setEmailConfig','设置系统邮件','1','','12','4','3');
INSERT INTO `pa_node` VALUES ('12','testEmailConfig','发送测试邮件','1','','0','4','3');
INSERT INTO `pa_node` VALUES ('13','setSafeConfig','系统安全设置','1','','0','4','3');
INSERT INTO `pa_node` VALUES ('14','Access','权限管理','1','权限管理，为系统后台管理员设置不同的权限','0','1','2');
INSERT INTO `pa_node` VALUES ('15','nodeList','查看节点','1','节点列表信息','0','14','3');
INSERT INTO `pa_node` VALUES ('16','roleList','角色列表查看','1','角色列表查看','0','14','3');
INSERT INTO `pa_node` VALUES ('17','addRole','添加角色','1','','0','14','3');
INSERT INTO `pa_node` VALUES ('18','editRole','编辑角色','1','','0','14','3');
INSERT INTO `pa_node` VALUES ('19','opNodeStatus','便捷开启禁用节点','1','','0','14','3');
INSERT INTO `pa_node` VALUES ('20','opRoleStatus','便捷开启禁用角色','1','','0','14','3');
INSERT INTO `pa_node` VALUES ('21','editNode','编辑节点','1','','0','14','3');
INSERT INTO `pa_node` VALUES ('22','addNode','添加节点','1','','0','14','3');
INSERT INTO `pa_node` VALUES ('23','addAdmin','添加管理员','1','','0','14','3');
INSERT INTO `pa_node` VALUES ('24','editAdmin','编辑管理员信息','1','','0','14','3');
INSERT INTO `pa_node` VALUES ('25','changeRole','权限分配','1','','0','14','3');
INSERT INTO `pa_node` VALUES ('26','News','资讯管理','1','','0','1','2');
INSERT INTO `pa_node` VALUES ('27','index','新闻列表','1','','0','26','3');
INSERT INTO `pa_node` VALUES ('28','category','新闻分类管理','1','','0','26','3');
INSERT INTO `pa_node` VALUES ('29','add','发布新闻','1','','0','26','3');
INSERT INTO `pa_node` VALUES ('30','edit','编辑新闻','1','','0','26','3');
INSERT INTO `pa_node` VALUES ('31','del','删除信息','0','','0','26','3');
INSERT INTO `pa_node` VALUES ('32','SysData','数据库管理','1','包含数据库备份、还原、打包等','0','1','2');
INSERT INTO `pa_node` VALUES ('33','index','查看数据库表结构信息','1','','0','32','3');
INSERT INTO `pa_node` VALUES ('34','backup','备份数据库','1','','0','32','3');
INSERT INTO `pa_node` VALUES ('35','restore','查看已备份SQL文件','1','','0','32','3');
INSERT INTO `pa_node` VALUES ('36','restoreData','执行数据库还原操作','1','','0','32','3');
INSERT INTO `pa_node` VALUES ('37','delSqlFiles','删除SQL文件','1','','0','32','3');
INSERT INTO `pa_node` VALUES ('38','sendSql','邮件发送SQL文件','1','','0','32','3');
INSERT INTO `pa_node` VALUES ('39','zipSql','打包SQL文件','1','','0','32','3');
INSERT INTO `pa_node` VALUES ('40','zipList','查看已打包SQL文件','1','','0','32','3');
INSERT INTO `pa_node` VALUES ('41','unzipSqlfile','解压缩ZIP文件','1','','0','32','3');
INSERT INTO `pa_node` VALUES ('42','delZipFiles','删除zip压缩文件','1','','0','32','3');
INSERT INTO `pa_node` VALUES ('43','downFile','下载备份的SQL,ZIP文件','1','','0','32','3');
INSERT INTO `pa_node` VALUES ('44','repair','数据库优化修复','1','','0','32','3');


# 数据库表：pa_ourmaker 数据信息
INSERT INTO `pa_ourmaker` VALUES ('1','<p>
	<span style="line-height:1.5;">&nbsp; &nbsp; &nbsp; <span style="font-family:Microsoft YaHei;">&nbsp;广西北斗创客联盟是在校团委的领导下，各2级学院团委的配合下，以协会名义所所成立的学生组织。现有人员七名，分别来自各个学院的专业人才。</span></span>
</p>
<p>
	<span style="line-height:1.5;"><span style="font-size:24px;"><span style="font-size:16px;"><span style="font-size:9px;"><span style="font-size:32px;"></span></span></span></span><br />
</span> 
</p>
<p>
	<span style="line-height:1.5;"><br />
</span> 
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>','<h3 style="text-indent:24.0pt;">
	现已有二十几块电路板基础配套设备，在广西科技大学创业园有研究场所和办公场所，并参与各种创新创业大赛，并取得不错的效果。在社会上的各界领域的专业人士形成长期合作意向。
</h3>','<h3 style="margin-left:0cm;text-indent:24.0pt;">
	第一条<b> </b>组织和引导会员开展学科专业创新活动，整合校内外有效资源服务大学生成长成才，积极参加各级各类竞赛活动，例如 “挑战杯” 大学生课外学术科技作品竞赛，“创青春”大学生创业创新设计竞赛等各类学科专业竞赛。<br />
</h3>
<h3>
	第二条 组织各类创意创新专题的讲座，帮助创客学习专业知识，提高专业能力和自身素养；组织举办创业创新沙龙，项目交流会，分享创业经验，扩大人脉网络。<span>&nbsp;<br />
</span>第三条 组织创客互助和专家辅导，进行项目疑难问诊，为创客团队进行项目分析，提出项目策划建议，帮助会员解决专业创新层面的实际问题。<br />
第四条
第以<span>“</span>创客联盟<span>”</span>的名义，加强与政府相关部门、行业同类组织和层面的联系，为创客提供政策导向、经济趋势和商业信息，有效将创新项目转化为现实成果。
</h3>','<h3>
	&nbsp; &nbsp; &nbsp; 成立时间为2014年12月14日，经过校团委的领导下，初步形成一个人员稳定，职责明确的高效团队。
</h3>','IT”芯“时代，势不可挡');


# 数据库表：pa_relannounce 数据信息
INSERT INTO `pa_relannounce` VALUES ('14','第二届广西科学节展览广西科技大学我的母校','<p class="MsoNormal" style="text-indent:24.0pt;">
	9月20-21日，由广西自治区科协、文明办、教育厅、科技厅、共青团广西区委共同主办的“第二届广西青少年科学节”在主会场广西科技馆隆重举行。本届科学节的活动主题为“启迪科学智慧·成就科学梦想”，应组委会邀请，校团委通过征集参展科技创新作品，最终围绕“创客空间”展区，确定选送来自广西科技大学“北斗”创客联盟和大学生电气信息创新协会(电气信息创新基地)的5件作品，分别是：“3D打印机”、“多功能多旋翼平台”、“金属探测智能小车”、“基于GSM和Zigbee无线网络的智能家居系统”、“具有自动追踪功率，自动稳压的电源转换器”。
</p>
<p class="MsoNormal" style="text-indent:24.0pt;">
	在展览活动期间，3D打印机、智能家居系统和多旋翼平台备受到会参观人士的关注，特别是行业市场有需求的人士，譬如医疗系统人士就“3D打印机”能否打印骨科治疗所需模型；普通市民关注“智能家居系统”能否以更低的价位走近千家万户；快递行业人士关注“无人驾驶的多旋翼平台”能否实现精准的快递传送业务等等。另外，本次选送的参展作品也受到广西电视台、小博士报等多家新闻媒体的现场采访和报道。
</p>
<p class="MsoNormal" style="text-indent:24.0pt;">
	通过参加青少年科学节，将有力地引领推动我校青年学子积极参加科技创新实践活动，繁荣学校科技氛围，合力打造“学知识、传递知识、用知识、受益于知识”的新型格局，有效培养与提高青年学生的科技创新意识和科学素质。&nbsp;
</p>
<p class="MsoNormal" style="text-indent:24.0pt;">
	据了解，“创客”一词来源于英文单词“Hacker/Maker”，是指努力把各种创意转变为现实的人。近年来，许多具有高度社会价值或巨大经济价值的产品，如低价的3D打印机，都是出于创客之手。我校“北斗”创客联盟于去年底成立，还处于创建阶段，希望今后广大热爱科技创新的学子都能加入到创客的队伍中，为我校学生的科研创新带来勃勃生机。<b></b> 
</p>
<p class="MsoNormal" style="text-indent:24.0pt;">
	<img src="/Uploads/image/20141015/20141015101625_34372.jpg" alt="" /> 
</p>
<p class="MsoNormal" style="text-indent:24.0pt;">
	<img src="/Uploads/image/20141015/20141015101638_45603.jpg" alt="" /> 
</p>
<p class="MsoNormal" style="text-indent:24.0pt;">
	<img src="/Uploads/image/20141015/20141015101647_23907.jpg" alt="" /> 
</p>','1','1413271008','1444449856','1');
INSERT INTO `pa_relannounce` VALUES ('15','大学生科创中心招新啦','<p>
	&nbsp; &nbsp; &nbsp; &nbsp;广西科技大学大学生科创中心直属校团委，创业园区是我们的主要科研场地，这是一个帮助大学生成长的舞台，在这里为你提供合适的项目与学习资料，可以与校内外尖端技术人员交流，可以了解并学习最前沿和适应社会发展的科学技术，我们需要每一种新鲜的思想和不同的人才与活力，同时你可以学到最有价值的知识。今年的科创，有我们，更需要你们 （报名地点 ：1.社联报名点 2.社团报名点 &nbsp;报名时间：10月18日 10月19日 &nbsp;报名人员：所有在校大学生 ）<img src="http://gkmaker.gxbykj.com/Public/kindeditor/plugins/emoticons/images/13.gif" border="0" alt="" /> 
</p>
<p style="text-align:center;">
	<img src="/Uploads/image/20141017/20141017102810_22245.png" alt="" />
</p>','1','1413380712','1413512901','1');
INSERT INTO `pa_relannounce` VALUES ('16','我校主页获评“最佳高校主页”','&nbsp; &nbsp; &nbsp; 近日，第二届广西高校网络文化活动节重要组成部分——“最佳高校主页”评选活动结果揭晓，包括我校在内的10个高校主页被评为2014年广西“最佳高校主页”。<br />
<p>
	　　学校主页作为学校对内、对外宣传的一个重要窗口，是办学水平、管理水平和师生员工精神面貌的集中体现。为了提高信息化水平，适应学校的发展要求，党委宣传部于今年6月对学校主页进行了改版。在改版过程中，汲取了多所海内外一流高校和知名门户网站的先进建设经验，突出功能指引，美化页面设计，力求提供更全面、更优质的信息服务，展示学校的特色文化、大学精神和社会责任。同时，树立良好形象，搭建合作、交流平台，展现出新的视野、新的理念、新的内涵。
</p>
<p style="text-align:center;">
	<a href="http://www.gxut.edu.cn" target="_blank">广西科技大学主页</a> 
</p>','1','1413464518','1413464733','1');
INSERT INTO `pa_relannounce` VALUES ('17','印尼彼得拉基督教大学访问我校','<p style="text-align:center;text-indent:28px;">
	<img src="/Uploads/image/20141016/20141016210746_40273.jpg" alt="" />
</p>
<p style="text-indent:28px;">
	10月13日上午，印尼彼得拉基督教大学代表团一行3人访问我校。我校国际合作与交流处邓杏华处长、汽车与交通学院卢丽虹书记、机械工程学院韦建军院长、电气与信息工程学院罗文广院长在6-1会议室与各位来宾进行了亲切地交谈。
</p>
<p style="text-indent:32px;">
	会议由国交处欧泽琳副处长主持。在会上，我校三个学院的领导就各自学院专业、师资、学生的基本情况作了介绍。印尼彼得拉基督教大学车辆系主任Ms. Tiong  Ekadewi  Anggraini与电子系主任Mr. Murtiyanta  Santoso也就本学院的专业、师资、学生等情况做了介绍。会议重点商讨与我校进行合作办学项目及课程衔接等内容。
</p>
<p style="text-indent:28px;">
	会后，我校与印方互赠礼物，并合影留念。
</p>
<p style="text-indent:28px;">
	当天下午，代表团到我校艺术与文化传播学院看望了在我校留学的印尼彼得拉基督教大学学生，之后参观了电气与信息工程学院、机械工程学院的实验室。
</p>','1','1413464870','1413464870','1');
INSERT INTO `pa_relannounce` VALUES ('18','加拿大曼尼托巴大学应邀来我校','<p style="text-align:center;">
	&nbsp; &nbsp; &nbsp;<img src="/Uploads/image/20141016/20141016211043_76522.jpg" alt="" />
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;7月4日下午，加拿大曼尼托巴大学蔡俊教授在第五教学楼多功能报告厅作了题为“基于召回机制的认知无线电频谱拍卖”的学术报告。报告会由电气与信息工程学院院长罗文广教授主持，电气学院、计算机学院近200人师生参加了报告会。
</p>
&nbsp; &nbsp; &nbsp; 在报告中，蔡俊教授对首先对认知无线电及频谱分配进行了介绍，然后提出了基于经济学中“拍卖-召回机制”的认知无线电频谱分配模型，并建立了频谱分配优化机制，最后通过仿真结果表明了所给模型和优化方法的有效性。持续一个多小时的精彩报告，不仅让在座的师生们对认知无线电这一先进的技术有了崭新的认识，也让大家对研究的方法和思路方面获得了新的启发。在互动环节中，师生对认知无线电的实现、如何能够综合多学科知识到自己研究的课题中进行了提问，蔡俊教授都给出了详细的解答，现场气氛十分活跃。<br />
罗文广院长在会后进行了总结并提出两点希望：一是认知无线电未来将会在汽车电子方面获得应用，希望有兴趣的教师积极参与研究；二是高水平的学术报告将会越来越多，希望年轻教师通过这些报告在科研方面获得新的突破，广大研究生和本科生同学们在学习中能够综合利用各学科交叉知识进行学习、研究。','1','1413465046','1413465046','1');
INSERT INTO `pa_relannounce` VALUES ('19','广科大优雅“书香吧”香飘校园','<p style="text-align:center;">
	&nbsp; &nbsp; &nbsp;<img src="/Uploads/image/20141016/20141016211324_11131.jpg" alt="" /> 
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;昨天是世界读书日，我市机关、学校、企业纷纷组织开展丰富多彩的读书活动。当日下午，广西科技大学举办“2014年读书文化节”，市图书馆与该校团委、图书馆和读书协会开展了“经典书籍鉴赏”“法律·书香校园”“阅读与圆梦”等系列讲座和读书文化活动。
</p>
<p style="text-indent:2em;">
	左图为该校500多平方米的“书香吧”，内设各类书籍阅读角、英语角、上网阅读角、微型咖啡厅、微型交流角或推介讲座角等，让大学生们在优雅、舒适、休闲的环境里阅读、沟通和交流。
</p>
<p style="text-indent:2em;">
	日报记者姜立报道摄影
</p>','1','1413465207','1413465238','1');


# 数据库表：pa_role 数据信息
INSERT INTO `pa_role` VALUES ('1','超级管理员','0','1','系统内置超级管理员组，不受权限分配账号限制');
INSERT INTO `pa_role` VALUES ('2','管理员','1','1','拥有系统仅此于超级管理员的权限');
INSERT INTO `pa_role` VALUES ('3','领导','1','1','拥有所有操作的读权限，无增加、删除、修改的权限');
INSERT INTO `pa_role` VALUES ('4','测试组','1','1','测试');


# 数据库表：pa_role_user 数据信息
INSERT INTO `pa_role_user` VALUES ('2','4');


# 数据库表：pa_science 数据信息
INSERT INTO `pa_science` VALUES ('2','9','关于组织开展第十四届“挑战杯”全国大学生 课外学术科技作品竞赛校内选拔赛的通知','挑战杯','随着安信信托、中信信托等多家信托公司曝出房地产信托计划的兑付风险，部分房地产投资私募基金(PE)已在其中看到了机会。','0','“挑战杯”全国大学生课外学术科技作品竞赛（以下简称“挑战杯”竞赛）是由共青团中央、中国科协、教育部、全国学联主办的一项具有导向性、示范性和群众性的全国竞赛活动，被誉为中国大学生学术科技的“奥林匹克”。
第十四届“挑战杯”竞赛由广东工业大学、香港科技大学共同承办，将于2015年6月上旬开始报送作品，决赛将于下半年在广州、香港两地举行。根据相关文件精神，自治区将选拔35件作品（其中发起高校3项）参加全国比赛，为更好地推荐作品参加全区、 全国的比赛。
','1363141340','<div class="content">
	<p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>一、竞赛目的与意义</b>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			引导和激励我校学生崇尚科学、追求真理、勤奋学习、锐意创新、迎接挑战的精神，提高学生的创新品质和实践能力，并在此基础上促进我校学生课外学术科技的文化氛围，发现和培养一批在学术科技上有作为、有潜力的优秀人才，促进我校大学生科技创新能力的提高。<span></span>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>二、竞赛宗旨</b>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			崇尚科学、追求真知、勤奋学习、锐意创新、迎接挑战<span></span>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>三、竞赛组织</b>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>主办单位：</b>共青团广西科技大学委员会
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>承办单位：</b>“挑战杯”竞赛广西科技大学校内选拔赛组织委员会<span></span>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>四、竞赛细则</b>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>（一）参赛对象</b>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			我校<span>2015</span>年<span>7</span>月<span>1</span>日以前正式注册的全日制在校本专科生、硕士研究生都可参赛。由学生个人或自主组成团队参加，团队人数不得超过<span>4</span>人。由不同学历的学生组队，按最高学历划分组别。可聘请<span>1-2</span>名指导老师。<span></span>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>（二）参赛作品类别</b>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			参赛课题必须要有现实意义，符合社会需求，应多关注社会、民生、热点问题，侧重研究探讨社会经济中的具体问题。竞赛内容分为三大类：<span></span>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>1.</b><b>自然科学类学术论文</b>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			自然科学论文的作者<b>仅限本、专科生</b>，研究生的作品不在此列。
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			作品类别包括机械、仪器仪表、自动化控制、工程、交通、建筑、计算机、电信、通讯、电子、数学、物理、地球与空间科学、生物、农学、药学、医学、健康、卫生、食品、能源、材料、石油、化学、化工、生态、环保等方面的作品。
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>2.</b><b>哲学社会科学类社会调查报告和学术论文</b>
		</p>
		<p class="MsoNormal" align="left" style="text-indent:32pt;">
			哲学社会科学类社会调查报告和学术论文限定在哲学、经济、社会、法律、教育、管理六个学科内。申报哲学社会科学类学术论文参考选题详见《关于第十三届“挑战杯”全国大学生课外学术科技作品竞赛哲学社会科学类参赛作品参考选题的通知<span>http://www.tiaozhanbei.net/article/15628/</span>。其中社会调查报告（字数不超过<span>15000</span>字）和学术论文类（字数不超过<span>8000</span>字）。
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>3.</b><b>科技发明制作</b>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			科技发明制作类分为<span>A</span>、<span>B</span>两类：<span>A</span>类指科技含量较高、制作投入较大的作品；<span>B</span>类指投入较少，且为生产技术或社会生活带来便利的小发明、小制作等。
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>五、竞赛日程<span></span></b>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>（一）竞赛预报名及培训</b>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			时间：<span>3</span>月<span>5</span>日—<span>3</span>月<span>20</span>日，请各学院组织学生报名，将《“挑战杯”广西科技大学校内选拔赛作品报名清单》（附件<span>1</span>）电子版，于<span>3</span>月<span>20</span>日（星期五）下午<span>4:30</span>前，发送至学校团委邮箱，邮箱：<span>gxkjdxtw@163.com</span>。<span></span>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>（二）作品准备</b>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			时间：<span>3</span>月<span>20</span>日—<span>4</span>月<span>24</span>日，请将参赛作品（纸质版一式两份，电子版）交至各学院团委。发明制作类需上交实物作品。
		</p>
		<p class="MsoNormal" align="left">
			并于规定的时间内到所在学院团委完成作品准备申报工作。各学院团委做好参赛作品收集汇总和统计工作，将《第十四届“挑战杯”大学生课外学术科技作品申报书》（附件<span>2</span>）并于<span>4</span>月<span>24</span>日（星期五）下午<span>4:30</span>前上交至校团委办公室。
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>（三）作品初评</b>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			时间：<span>4</span>月<span>25</span>日—<span>4</span>月<span>27</span>日，组委会邀请具有权威性的专家组成评审组，对参赛作品按科技发明制作、自然科学类学术论文、社会科学类社会调查报告和学术论文三类进行书面评审，然后根据综合评分进行作品筛选。
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>（四）作品完善</b>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			时间：<span>4</span>月<span>28</span>日<span>-5<span><span>月13</span></span><span><span>日</span></span><span>，通过预选的作品作者或团队在指导教师指导下进行针对性修改和完善，并上报竞赛组委会办公室。</span></span>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>（五）作品终评</b>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			时间：<span>5</span>月<span>14</span>日，组委会办公室聘请专家组对参赛作品进行终评，并确定推荐参加广西“挑战杯”竞赛的优秀作品。
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>（六）校内选拔赛总结，自治区赛及国赛推荐报送</b>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			终评后，学校将通过各种媒介向全校同学公布评选结果，将择优作为广西科技大学推荐参赛作品报送广西自治区赛评选，自治区赛的获奖作品将由广西竞赛组委会择优推荐到全国组委会。
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			学校将组织入围参加国赛的作品进行修改和完善，并将完善好的作品和相关材料向全国组委会申报。<span></span>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>&nbsp;</b>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>&nbsp;</b>
		</p>
		<p class="MsoNormal" style="text-indent:32.0pt;">
			<b>（七）竞赛日程推进表<span></span></b>
		</p>
		<div align="center">
			<table class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0" width="618" style="width:463.4pt;background-color:white;">
				<tbody>
					<tr>
						<td width="61">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<b><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">日程<span></span></span></b>
							</p>
						</td>
						<td width="203">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<b><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">时间<span></span></span></b>
							</p>
						</td>
						<td width="354">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<b><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">工作内容和要求<span></span></span></b>
							</p>
						</td>
					</tr>
					<tr>
						<td width="61">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">1</span>
							</p>
						</td>
						<td width="203">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">2015</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">年<span>3</span>月<span>5</span>日<span></span></span>
							</p>
						</td>
						<td width="354">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">正式发布竞赛实施方案、竞赛启动宣传<span></span></span>
							</p>
						</td>
					</tr>
					<tr>
						<td width="61">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">2</span>
							</p>
						</td>
						<td width="203">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">3</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">月<span>5</span>日</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">-3<span><span>月20</span></span><span><span>日</span></span></span>
							</p>
						</td>
						<td width="354">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">各学院、拟参赛</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;">团<span style="color:#333333;">队或个人预报名，<span></span></span></span>
							</p>
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">各学院将预报名表交校团委办公室。<span></span></span>
							</p>
						</td>
					</tr>
					<tr>
						<td width="61">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">3</span>
							</p>
						</td>
						<td width="203">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">3</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">月 具体时间：待定<span></span></span>
							</p>
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">（地点：待定）<span></span></span>
							</p>
						</td>
						<td width="354">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">竞赛培训<span></span></span>
							</p>
						</td>
					</tr>
					<tr>
						<td width="61">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">4</span>
							</p>
						</td>
						<td width="203">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">3</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">月<span>20</span>日</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">-4<span><span>月25</span></span><span><span>日</span></span></span>
							</p>
						</td>
						<td width="354">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">作品准备<span></span></span>
							</p>
						</td>
					</tr>
					<tr>
						<td width="61">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">5</span>
							</p>
						</td>
						<td width="203">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">4</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">月<span>26</span>日</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">-4<span><span>月27</span></span><span><span>日</span></span></span>
							</p>
						</td>
						<td width="354">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">作品初审<span></span></span>
							</p>
						</td>
					</tr>
					<tr>
						<td width="61">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">6</span>
							</p>
						</td>
						<td width="203">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">4</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">月<span>28</span>日</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">-5<span><span>月13</span></span><span><span>日</span></span></span>
							</p>
						</td>
						<td width="354">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">作品完善<span></span></span>
							</p>
						</td>
					</tr>
					<tr>
						<td width="61">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">7</span>
							</p>
						</td>
						<td width="203">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">5</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">月<span>14</span>日</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;"></span>
							</p>
						</td>
						<td width="354">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">作品终评<span></span></span>
							</p>
						</td>
					</tr>
					<tr>
						<td width="61">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">8</span>
							</p>
						</td>
						<td width="203">
							<p class="MsoNormal" align="center" style="text-align:center;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">2015</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">年<span>5</span>月<span>-10</span>月<span></span></span>
							</p>
						</td>
						<td width="354">
							<p class="MsoNormal" align="left">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">省级、全国决赛：<span></span></span>
							</p>
							<p class="MsoNormal" align="left" style="text-indent:32pt;">
								<span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">5</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">月<span>20</span>日</span><span style="font-size:16.0pt;font-family:仿宋_GB2312;color:#333333;">前，学校推荐优秀作品参加第六届“挑战杯”广西大学生课外学术科技作品竞赛；<span>6</span>月，报送优秀作品参加第十三届“挑战杯”全国大学生课外学术科技作品竞赛；<span>10</span>月，参加全国终审决赛。<span></span></span>
							</p>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<p class="MsoNormal">
			&nbsp;
		</p>
		<p class="MsoNormal">
			工作联系人：易<span>&nbsp; </span>敏<span>&nbsp; </span>韦齐齐<span></span>
		</p>
		<p class="MsoNormal">
			联系电话：<span>2685059&nbsp;&nbsp;
2686775</span>
		</p>
	</p>
	<p>
		<br />
	</p>
</div>','1');


# 数据库表：pa_teacher 数据信息
INSERT INTO `pa_teacher` VALUES ('1','9','二季度房地产信托','','随着安信信托、中信信托等多家信托公司曝出房地产信托计划的兑付风险，部分房地产投资私募基金(PE)已在...','1','<div class="content"><p>随着安信<a href="http://licai.so/Trust/" target="_blank">信托</a>、<a href="http://licai.so/Trust/agency-1061/" target="_blank">中信信托</a>等多家信托公司曝出房地产信托计划的兑付风险，部分房地产投资<a href="http...','1363141340','1444956955','<div class="content">
	<p>
		随着安信<a href="http://licai.so/Trust/" target="_blank">信托</a>、<a href="http://licai.so/Trust/agency-1061/" target="_blank">中信信托</a>等多家信托公司曝出房地产信托计划的兑付风险，部分房地产投资<a href="http://licai.so/Simu/" target="_blank">私募</a>基金(<a href="http://licai.so/Pe/" target="_blank">PE</a>)已在其中看到了机会。
	</p>
<br />
	<p>
		《每日经济新闻》记者了解到，2013年房地产信托兑付压力远超2012年，其中，兑付顶峰将出现在2013年第二季度，届时全国房地产信托兑付的总规模将超过1000亿元。通过信托融资的中小房地产企业将不得不面对资金上的窘境，而这对资金充裕的PE来说，无疑将是一次“捡馅饼”的机会。
	</p>
<br />
	<p>
		风险频现挑战“刚性兑付”/
	</p>
<br />
	<p>
		上周五(3月8日)，据《21世纪经济报道》称，<a href="http://licai.so/Trust/agency-1002/" target="_blank">安信信托</a>因为“昆山·联邦国际资产收益财产权信托”的融资方昆山纯高投资开发有限公司无法支付到期本金，已对纯高公司进行了起诉。
	</p>
<br />
	<p>
		不过，安信信托在当日发布澄清公告称，2009年9月24日，安信信托发起并设立了总规模为人民币62700万元的“昆山-联邦国际”资产收益财产权信托。但是到2012年9月18日，昆山纯高投资开发有限公司作为信托交易文件项下借款人未能按时足额偿还信托借款。
	</p>
<br />
	<p>
		为此，安信信托已向上海市第二中级人民法院提起金融借款纠纷诉讼。并且“根据信托文件约定，信托期限已自动延长，最长至2013年9月24日。”
	</p>
<br />
	<p>
		安信信托董办工作人员称，目前信托计划已经延期了,但是公司确实已进行了部分兑付。
	</p>
<br />
	<p>
		一位信托行业人士表示，项目出了问题，信托公司一般都会先托着，但如果真的出现较大的问题，这样做就会有很大风险。
	</p>
<br />
	<p>
		事实上，信托行业的“刚性兑付”此前就已经遇到了挑战。今年1月份，中信信托关于三峡全通的贷款资金兑付问题就已引起业界震动。
	</p>
<br />
	<p>
		资料显示，中信信托于2011年12月28日发起设立，“中信制造三峡全通贷款集合资金信托计划”分4次募集信托本金共计人民币13.335亿元，为三峡全通发放流动资金贷款。
	</p>
<br />
	<p>
		三峡全通公司应当于2013年1月14日和16日分别偿还贷款本息11855万元和47247万元。中信信托称，“截至2013年1月28日，本信托计划信托专户仍未收到该两期应收本息及违约金。”因此公司决定存续的优先级信托受益权的到期日延期3个月。
	</p>
<br />
	<p>
		而中信信托方面已表示，将不会去进行刚性兑付。业界认为该事件可能成信托业首个打破刚性兑付 “行规”的案例。
	</p>
<br />
	<p>
		二季度迎新一波兑付潮/
	</p>
<br />
	<p>
		虽然信托行业已经度过了此前预期兑付风险较大的2012年。但是到了2013年，房地产信托仍然面临较大的兑付压力。
	</p>
<br />
	<p>
		据北京恒天财富相关数据统计，2013年房地产信托面临兑付本息达2800亿元，远超过2012年的1759亿元。其中，兑付顶峰将出现在2013年第二季度，届时全国房地产信托兑付的总规模将达到1301亿元。
	</p>
<br />
	<p>
		另据新时代证券发布的研报，根据每月的成立规模与月平均期限测算，2013年房地产信托到期兑付规模将达2847.9亿元，其中二季度达1247.6亿元。
	</p>
<br />
	<p>
		上海一家信托公司项目经理接受《每日经济新闻》记者采访时表示，“在房地产信托计划的兑付中，中小房地产企业的压力要大得多。他们的融资原本就比大型的房地产企业要难，风险也相对要高一些。”
	</p>
<br />
	<p>
		<a href="http://licai.so/Simu/200287/" target="_blank">诺亚财富</a>研究部李要深则对《每日经济新闻》记者表示，目前总体来说，房地产信托没有太大的问题，相比前两年，规模和占比已经下降很多，处在一个相对安全的范围，并且房地产信托一般都有较好的抵押物。
	</p>
<br />
	<p>
		事实上，今年以来，房地产信托发展速度仍然较快。用益信托数据显示，2月份共成立房地产信托52款，募集资金162.95亿元，占总成立规模的33.98%，高于上个月29.49%的占比，较去年23%左右的占比更是显著增加。
	</p>
<br />
	<p>
		PE伺机而动
	</p>
<br />
	<p>
		对资金充裕的PE来说，房地产信托接盘的时机也可能就在今年。
	</p>
<br />
	<p>
		“房地产公司现在都缺钱，尤其是中小房地产企业，更是困难。从目前的角度来看，这块的投资价值逐渐显现出来了。”某股权投资基金相关人士称，PE投资接盘的条件主要还是看具体的项目。
	</p>
<br />
	<p>
		“从实际情况看，房地产信托有兑付风险的项目眼下还不多，只是根据趋势判断，今年的投资将有很大的操作空间，也就是找一些缺资金、项目优质的企业合作。”上述股权投资基金人士表示。
	</p>
<br />
	<p>
		据《每日经济新闻》记者不完全统计，在即将到期的房地产信托项目中，北京、上海等一线城市的项目数量有限，而鄂尔多斯、青岛等二线城市项目则多一些。
	</p>
<br />
	<p>
		上述股权投资基金人士介绍，与房地产企业的合作，模式是多种多样的。“最简单的是折价收购整个项目，然而分拆出售，但是这对PE公司的资金实力和运作的要求很高。另外，不同PE主体的参与模式也不一样。<a href="http://licai.so/Jgzl/" target="_blank">金融机构</a>发起的地产基金主要是做债权，和信托公司联合发起信托型基金，这是一种‘类信托’的融资模式;大型房地产企业则更愿意做股权融资，进行大鱼吃小鱼的行业整合。”
	</p>
<br />
	<p>
		此前有消息称，万科、金地、华润、复兴为代表的房地产集团都在旗下设立PE投资公司，通过股权融资扩大行业版图。
	</p>
<br />
	<p>
		不过，上述股权投资基金人士也表示，“房地产信托的兑付风险都依靠PE来接盘肯定是不现实的，目前PE的实力也达不到。但是，PE对一些优质项目的兴趣比较大，也是一支不可忽视的力量。”
	</p>
</div>','1');
INSERT INTO `pa_teacher` VALUES ('2','14','银监会拟引入','','银行理财业务的迅猛增长，倒逼监管的步步升级。','1','银行理财业务的迅猛增长，倒逼监管的步步升级。记者从业内获得的最新统计数据显示，截至2012年末，各银行共存续理财产品32152款，理财资金账面余额7.1万亿元，比2011年末增长约55%。年初以来，银监会已将理财业务列为今年的重点监管工作。消息人士透露，对理财产品加大监管主要表现在两方面：一是将派出机构对银行理财产品销售活动进行专项检查；另一方面，将“资金池”操作模式作为现场检查的重点，“要求商业…','1363141499','1444956953','银行理财业务的迅猛增长，倒逼监管的步步升级。
<p>
	记者从业内获得的最新统计数据显示，截至2012年末，各银行共存续理财产品32152款，理财资金账面余额7.1万亿元，比2011年末增长约55%。
</p>
<p>
	年初以来，银监会已将理财业务列为今年的重点监管工作。消息人士透露，对理财产品加大监管主要表现在两方面：一是将派出机构对银行理财产品销售活动进行专项检查；另一方面，将“资金池”操作模式作为现场检查的重点，“要求商业银行在2-4月份首先对‘资金池’类理财产品进行自查整改。”
</p>
<p>
	随着理财业务的过快发展，监管部门对于理财业务参与机构的风险管理能力、资产管理能力等方面表现出担忧，特别是城商行和农村合作<a href="http://licai.so/Jgzl/" target="_blank">金融机构</a>。消息人士称，因此，监管部门正在酝酿开展理财业务的机构准入和业务准入制度。
</p>
<p>
	<strong> 严禁银行理财输血地方融资平台</strong> 
</p>
<p>
	银行理财业务自2005年发端，至今经历了七年发展期。但时至今日仍有部分银行对理财业务的发展缺乏明确的战略定位，并未真正树立起“代客理财”的理念。
</p>
<p>
	银行每季度末为冲规模大量发行期限短、收益高的理财产品，表明部分银行仅将理财业务当作其自营业务的附属，当存款规模紧张时，就通过发行保本、高收益产品争揽存款；当贷款规模紧张时，就通过理财实现贷款规模表外化，把银行理财作为“高息揽储”和“变相放贷”的工具。
</p>
<p>
	记者了解到，监管部门因此要求商业银行董事会及高管层要对理财业务进行清晰的战略定位，避免理财业务沦为其他业务的调节工具和手段。
</p>
<p>
	此前，部分银行将理财业务视为“变相放贷”的工具，通过规避银信合作监管规定的方式来开展项目融资，如以银证、银保、银基合作的方式，投资于票据资产或其他非标准化债券类资产。
</p>
<p>
	记者获得的数据显示，截至2012年末，项目融资类理财产品余额同比增长了53%，占全部理财产品投资余额的30%，超过2万亿元。
</p>
<p>
	前述消息人士透露，为了控制去年以来迅猛增长的银证、银保、银基合作等通道类业务所蕴含的风险，监管部门要求商业银行开展此类业务全程确保合规，这包括，首先要界定好投资过程中的法律关系；其次要在尽职调查的基础上合理安排交易结构和投资条款；第三，要求产品说明书要按照“解包还原”的原则充分披露；第四，要对最终投资标的的资产进行实质性管理和控制；最后还要求目标客户必须满足合格投资者的相关要求。
</p>
<p>
	对于理财产品销售过程中的不规范行为，监管部门将针对这一环节进行专项检查，并计划要求银行通过投资者教育的门户网站来公示预期收益率和实际收益率的对比情况。
</p>
<p>
	理财资金投向方面也要严格把关。银监会强调商业银行应严格限制资金通过各类渠道进入地方政府融资平台、“两高一剩”企业、商业房地产开发项目等限制性行业和领域。“特别强调要防止地方政府融资平台绕道通过银行理财进行直接或间接融资。”消息人士称。
</p>
<p>
	银监会公布的数据显示，截至2012年末，政府融资平台贷款为93035亿元。
</p>
<p>
	<strong>中小机构冒进 监管层酝酿准入制度</strong> 
</p>
<p>
	去年以来，中小金融机构特别是城商行和农村合作金融机构大量参与理财市场更加激进。记者获悉，大型银行和股份制银行在理财业务的市场份额已从2011年的88%，下降至2012年的83%。
</p>
<p>
	理财业务发展过快而参与机构良莠不齐，引发监管部门的担忧。同时，部分机构还存在风险管理能力不足、业务开展不够审慎的问题。
</p>
<p>
	如根据银率网的统计数据显示，今年2月份共有22款理财产品未达到预期收益率，其中有15款均为南洋商业银行所发行的产品。
</p>
<p>
	而且，部分中小银行由于缺乏自主的产品设计能力，在与券商、基金、资产管理公司合作时，缺乏对产品风险和收益的实际控制权，极易沦为合作方的资金募集通道，一旦出现风险只能被动接受。
</p>
<p>
	消息人士透露，对于此类风险管控能力较低、资产管理能力和专业素质还不足的中小金融机构，银监会将对其能够从事多大规模的理财业务，进行严格把关和密切监测。制定一套开展理财业务的机构准入和业务准入制度也纳入监管部门的计划中。
</p>
<p>
	值得注意的是，一些创新型理财产品，如股权类投资、股票基金类投资和另类投资等，监管部门考虑到其高风险和结构复杂性，其发行将会受到严控。“特别是中小银行金融机构发行此类理财产品时，将需要逐笔上报银监会，加强合规性审查。”
</p>
<p>
	此外，监管部门还注意到，部分银行存在将理财产品持有的资产与其他理财产品持有的资产，或银行自营业务资产，通过非公允的市场价格进行交易的违规行为。更有银行将一些较高收益率的理财产品销售给特定关系人，涉嫌利益输送。
</p>
<p>
	银行理财业务存在的问题引起多部委的注意。记者获悉，去年，中纪委和监察部国家预防腐败局办公室也曾就此问题与银监会进行过专门的探讨，对于银行理财产品设计和交易中可能存在的腐败问题，中纪委、监察部和银监会都将进一步密切关注。
</p>','1');
INSERT INTO `pa_teacher` VALUES ('3','1','武汉理工大学应邀来我校作学术报告','武汉理工大学博导程艳霞教授应邀来我校作学术报告','武汉理工大学博导程艳霞教授应邀来我校作学术报告','1','武汉理工大学博导程艳霞教授应邀来我校作学术报告','1413381143','1444956949','<p style="text-align:center;text-indent:2em;">
	<img src="/Uploads/image/20141015/20141015215221_99047.jpg" alt="" /> 
</p>
<p style="text-indent:2em;">
	6月20日下午，武汉理工大学管理学院程艳霞教授、博士生导师应邀在国际学术报告厅为管理学院师生带来了一场以“中国式营销、云营销”为主题的学术报告。报告会由管理学院科研秘书朱晓琴博士主持，管理学院近百名师生参加了报告会。
</p>
<p style="text-indent:2em;">
	报告会中，程艳霞教授分享了中国式营销的特点、存在基因、外部环境、面临的困境及对策，针对中国企业面临的营销困境,程教授提出了自己的见解，例如“以小搏大”、“抓紧后发优势”、“模仿式创新”、“资源整合”等措施.接着，程艳霞教授用生动的案例深入浅出的为在场师生讲解了云营销的概念、理论基础、适应产业、大数据、云计算等相关知识。最后，程艳霞教授鼓励同学们做学术科研要敢于创新、并坚持不懈，才能获得颠覆式的成功。
</p>
<p style="text-indent:2em;">
	讲座历时两个小时，师生们热情洋溢，纷纷表示此次程艳霞老师的讲座加深了他们对中国式营销的了解，并希望以后能多举办类似的讲座。（管理学院）
</p>','1');
INSERT INTO `pa_teacher` VALUES ('4','1','吴军博士应邀来我校作学术报告','吴军博士应邀来我校作学术报告','吴军博士应邀来我校作学术报告','1','吴军博士应邀来我校作学术报告','1413381256','1444956946','<p style="text-align:center;text-indent:28px;">
	<img src="/Uploads/image/20141015/20141015215413_58010.jpg" alt="" />
</p>
<p style="text-indent:28px;">
	10月8日下午，美国希望之城医学中心贝克曼研究所动物肿瘤模型实验室中心主任吴军博士在医学院1310学术报告厅作了题为“动物肿瘤模型与癌症个性化治疗”的学术报告。报告会由校长助理、医学院院长秦海洸教授主持，医学院、第一临床医学院及附属医院200余师生参加了报告会。
</p>
<p style="text-indent:28px;">
	在报告中，吴军博士首先对癌症的诊断和治疗进行了介绍，认为目前癌症的诊断和治疗正面临着一场革命性的变革。所有癌症，都需要接受分子生物学的检验，以确定该患者的癌细胞的遗传基因变异特质，选择针对该特异突变的分子靶向药物。但是由于癌症组织的异质性，以及目前遗传学分析的局限性，需要借助动物肿瘤模型，来对可能使用的药物进行临床前治疗效果的检验，以指导癌症的个性化治疗。持续一个多小时的精彩报告，不仅让在座的师生们对动物肿瘤模型与癌症个性化治疗这一先进的技术有了崭新的认识，吴博士丰富的科研工作经验以及所取得的成果，也让大家受益匪浅、深受启发。在互动环节中，师生对动物肿瘤模型的建立、癌症个性化治疗的实现方式以及如何能够跟自己的研究课题进行结合等问题进行了提问，吴军博士都给出了详细的解答，现场气氛十分活跃。
</p>
<p style="text-indent:28px;">
	此次学术报告是医学院为加强科研建设，提升学术水平，促进学术交流而开展的一系列活动的重要组成部分。为形成更好的学术氛围，医学院将继续邀请国内外知名学者进行学术交流活动，对于活跃学术气氛，加强科研合作，具有良好的促进作用。
</p>','1');
INSERT INTO `pa_teacher` VALUES ('5','1','2014“中国－东盟大讲坛”在我校开讲','2014“中国－东盟大讲坛”第三期在我校开讲','2014“中国－东盟大讲坛”第三期在我校开讲','1','2014“中国－东盟大讲坛”第三期在我校开讲','1413465325','1444956363','<p>
	<span style="line-height:1.5;"><img src="/Uploads/image/20141016/20141016211851_87377.jpg" alt="" /></span> 
</p>
<p>
	<span style="line-height:1.5;"> </span>
</p>
<p>
	&nbsp; 10月16日，广西2014“中国－东盟大讲坛”第三期在我校多功能报告厅举行。东盟政治研究专家、广西民族大学相思湖学院院长陈元中教授作了“中国-东盟政治制度与政治关系发展”的学术报告。
</p>
<p>
	广西处于中国-东盟前沿地带，如何发展与东盟的周边关系，尤其是政治关系越来越受到国内外的关注。东盟国家的政治体制是多种多样的，当今世界的基本政治体制类型都可以在东南亚找到。陈教授在介绍东盟国家政治制度的基础上，就政治制度对区域政治关系的影响、东盟国家政治制度与区域政治关系选择、中国-东盟政治制度下的区域政治合作等问题进行了分析与探讨。陈教授认为，中国与东盟在地缘与文化方面有着千丝万缕的联系，发展政治合作具有得天独厚的条件。政治制度的性质对区域政治关系有影响，但不是决定区域政治关系的唯一因素，不同国家间的政治合作既要尊重各国的制度差异，又要更加重视共生理念和共利关系，要倡导包容思想，奋发有为，提升政治合作价值，优化政治合作机制，拓展政治合作领域，通过推进21世纪海上丝绸之路战略，携手打造“中国-东盟命运共同体”。最后，陈教授与师生们进行了互动，回答了师生们提出的问题。
</p>
<p>
	这次讲坛由广西社科联主办，广西科技大学承办。论坛开幕式上，自治区社科联副主席曹平为论坛致辞，广西科技大学党委副书记、纪委书记、社科联主席梁元海主持报告会。我校师生200多人参加了本次活动。
</p>
<br />
<p>
	<br />
</p>','1');
INSERT INTO `pa_teacher` VALUES ('6','1','《宗元大讲堂》讲座','《宗元大讲堂》讲座','《宗元大讲堂》讲座','1','《宗元大讲堂》讲座','1413465385','1444956359','<p>
	由于时间冲突，原定于2014年10月14日（星期二）15：00在多功能报告厅（行政楼南面二楼）举办的《宗元大讲堂》讲座延期，具体时间待定。
</p>
<p>
	特此通知。
</p>
<p>
	校团委
</p>
<p>
	2014年10月13日
</p>','1');
INSERT INTO `pa_teacher` VALUES ('7','1','徐杰舜教授作客宗元大讲堂','讲座  民族团结','','1','        12月17日晚，广西民族大学、上海交通大学博士生导师徐杰舜教授作客“宗元大讲堂”，为我校师生作了题为“广西与新疆：阳光下的比较”的形势报告会。我校240名师生聆听了报告。　党委宣传部副部长何月华主持报告会。　　徐杰舜教授以当前美国与俄罗斯的“货币战”的话题引入“资本与民族”的比较，进而对我国民族团结研究的重要性和…','1418965315','1426477932','<p style="text-align:center;">
	<img title="图片8.jpg" src="http://www.gxut.edu.cn/public/uploads/upload1/20141218/1418902945540749.jpg" /> 
</p>
<p>
	<br />
</p>
<p style="text-align:center;">
	<img title="图片2.jpg" src="http://www.gxut.edu.cn/public/uploads/upload1/20141218/1418902945784638.jpg" /> 
</p>
<p>
	<br />
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
12月17日晚，广西民族大学、上海交通大学博士生导师徐杰舜教授作客“宗元大讲堂”，为我校师生作了题为“广西与新疆：阳光下的比较”的形势报告会。我校240名师生聆听了报告。<span>　党委宣传部副部长何月华主持报告会。</span><br />
　　徐杰舜教授以当前美国与俄罗斯的“货币战”的话题引入“资本与民族”的比较，进而对我国民族团结研究的重要性和现实意义进行探讨。徐教授旁征博引，以翔实的史料、生动的案例、形象的比喻、幽默风趣的语言对广西与新疆民族团结问题进行比较。他认为历史、宗教、国际国内形势的变化等多种因素影响着新疆民族关系的走向,新疆民族政策应当适时地进行调整,平等、团结、互助、和谐的社会主义民族关系才能得到巩固和加强,新疆各民族必将在磨合、融合中走向新的团结。他认为“和合”是广西民族关系的历史主线，“和谐祥和”是广西民族团结的呈现，并以“葵花”“石榴”“榕树”为意象，阐释了广西各民族经历互动、磨合、融合后紧密团结在一起，虽各自特色，但“千支同根”、“万籽同胞”，高度认同中华民族的良好局面。<br />
　　最后，徐教授指出“大象无形”、“大象化成”应该成为中国各民族团结的未来走向。中国民族团结只有达到“大象化成”的境界，才能真正意义上实现“各美其美、美人之美、美美与共、天下大同”的目标。<br />
　　“我们大学生能为民族团结做些什么？”互动环节中有同学问道。“你们珍爱民族团结，与各民族同学和睦相处，继续发扬‘葵花’‘石榴’‘榕树’精神就是大学生能为民族团结做的最好的事。”徐教授的回答赢来阵阵掌声。
</p>','1');
INSERT INTO `pa_teacher` VALUES ('8','1','广西科技大学','收到','大卫的','1','的瓦斯的','1444976986','0','的瓦斯的我','1');


# 数据库表：pa_venture 数据信息
INSERT INTO `pa_venture` VALUES ('2','9','二季度房地产信托兑付超千亿 PE伺机接盘 ','','随着安信信托、中信信托等多家信托公司曝出房地产信托计划的兑付风险，部分房地产投资私募基金(PE)已在其中看到了机会。','1','<div class="content"><p>随着安信<a href="http://licai.so/Trust/" target="_blank">信托</a>、<a href="http://licai.so/Trust/agency-1061/" target="_blank">中信信托</a>等多家信托公司曝出房地产信托计划的兑付风险，部分房地产投资<a href="http...','1363141340','<div class="content"><p>随着安信<a href="http://licai.so/Trust/" target="_blank">信托</a>、<a href="http://licai.so/Trust/agency-1061/" target="_blank">中信信托</a>等多家信托公司曝出房地产信托计划的兑付风险，部分房地产投资<a href="http://licai.so/Simu/" target="_blank">私募</a>基金(<a href="http://licai.so/Pe/" target="_blank">PE</a>)已在其中看到了机会。</p><br /><p>《每日经济新闻》记者了解到，2013年房地产信托兑付压力远超2012年，其中，兑付顶峰将出现在2013年第二季度，届时全国房地产信托兑付的总规模将超过1000亿元。通过信托融资的中小房地产企业将不得不面对资金上的窘境，而这对资金充裕的PE来说，无疑将是一次“捡馅饼”的机会。</p><br /><p>风险频现挑战“刚性兑付”/</p><br /><p>上周五(3月8日)，据《21世纪经济报道》称，<a href="http://licai.so/Trust/agency-1002/" target="_blank">安信信托</a>因为“昆山·联邦国际资产收益财产权信托”的融资方昆山纯高投资开发有限公司无法支付到期本金，已对纯高公司进行了起诉。</p><br /><p>不过，安信信托在当日发布澄清公告称，2009年9月24日，安信信托发起并设立了总规模为人民币62700万元的“昆山-联邦国际”资产收益财产权信托。但是到2012年9月18日，昆山纯高投资开发有限公司作为信托交易文件项下借款人未能按时足额偿还信托借款。</p><br /><p>为此，安信信托已向上海市第二中级人民法院提起金融借款纠纷诉讼。并且“根据信托文件约定，信托期限已自动延长，最长至2013年9月24日。”</p><br /><p>安信信托董办工作人员称，目前信托计划已经延期了,但是公司确实已进行了部分兑付。</p><br /><p>一位信托行业人士表示，项目出了问题，信托公司一般都会先托着，但如果真的出现较大的问题，这样做就会有很大风险。</p><br /><p>事实上，信托行业的“刚性兑付”此前就已经遇到了挑战。今年1月份，中信信托关于三峡全通的贷款资金兑付问题就已引起业界震动。</p><br /><p>资料显示，中信信托于2011年12月28日发起设立，“中信制造三峡全通贷款集合资金信托计划”分4次募集信托本金共计人民币13.335亿元，为三峡全通发放流动资金贷款。</p><br /><p>三峡全通公司应当于2013年1月14日和16日分别偿还贷款本息11855万元和47247万元。中信信托称，“截至2013年1月28日，本信托计划信托专户仍未收到该两期应收本息及违约金。”因此公司决定存续的优先级信托受益权的到期日延期3个月。</p><br /><p>而中信信托方面已表示，将不会去进行刚性兑付。业界认为该事件可能成信托业首个打破刚性兑付 “行规”的案例。</p><br /><p>二季度迎新一波兑付潮/</p><br /><p>虽然信托行业已经度过了此前预期兑付风险较大的2012年。但是到了2013年，房地产信托仍然面临较大的兑付压力。</p><br /><p>据北京恒天财富相关数据统计，2013年房地产信托面临兑付本息达2800亿元，远超过2012年的1759亿元。其中，兑付顶峰将出现在2013年第二季度，届时全国房地产信托兑付的总规模将达到1301亿元。</p><br /><p>另据新时代证券发布的研报，根据每月的成立规模与月平均期限测算，2013年房地产信托到期兑付规模将达2847.9亿元，其中二季度达1247.6亿元。</p><br /><p>上海一家信托公司项目经理接受《每日经济新闻》记者采访时表示，“在房地产信托计划的兑付中，中小房地产企业的压力要大得多。他们的融资原本就比大型的房地产企业要难，风险也相对要高一些。”</p><br /><p><a href="http://licai.so/Simu/200287/" target="_blank">诺亚财富</a>研究部李要深则对《每日经济新闻》记者表示，目前总体来说，房地产信托没有太大的问题，相比前两年，规模和占比已经下降很多，处在一个相对安全的范围，并且房地产信托一般都有较好的抵押物。</p><br /><p>事实上，今年以来，房地产信托发展速度仍然较快。用益信托数据显示，2月份共成立房地产信托52款，募集资金162.95亿元，占总成立规模的33.98%，高于上个月29.49%的占比，较去年23%左右的占比更是显著增加。</p><br /><p>PE伺机而动</p><br /><p>对资金充裕的PE来说，房地产信托接盘的时机也可能就在今年。</p><br /><p>“房地产公司现在都缺钱，尤其是中小房地产企业，更是困难。从目前的角度来看，这块的投资价值逐渐显现出来了。”某股权投资基金相关人士称，PE投资接盘的条件主要还是看具体的项目。</p><br /><p>“从实际情况看，房地产信托有兑付风险的项目眼下还不多，只是根据趋势判断，今年的投资将有很大的操作空间，也就是找一些缺资金、项目优质的企业合作。”上述股权投资基金人士表示。</p><br /><p>据《每日经济新闻》记者不完全统计，在即将到期的房地产信托项目中，北京、上海等一线城市的项目数量有限，而鄂尔多斯、青岛等二线城市项目则多一些。</p><br /><p>上述股权投资基金人士介绍，与房地产企业的合作，模式是多种多样的。“最简单的是折价收购整个项目，然而分拆出售，但是这对PE公司的资金实力和运作的要求很高。另外，不同PE主体的参与模式也不一样。<a href="http://licai.so/Jgzl/" target="_blank">金融机构</a>发起的地产基金主要是做债权，和信托公司联合发起信托型基金，这是一种‘类信托’的融资模式;大型房地产企业则更愿意做股权融资，进行大鱼吃小鱼的行业整合。”</p><br /><p>此前有消息称，万科、金地、华润、复兴为代表的房地产集团都在旗下设立PE投资公司，通过股权融资扩大行业版图。</p><br /><p>不过，上述股权投资基金人士也表示，“房地产信托的兑付风险都依靠PE来接盘肯定是不现实的，目前PE的实力也达不到。但是，PE对一些优质项目的兴趣比较大，也是一支不可忽视的力量。”</p></div>','1');
INSERT INTO `pa_venture` VALUES ('8','6','哈哈哈哈','','','0','','1409645929','','1');


# 数据库表：pa_vip 数据信息


# 数据库表：pa_zonenotice 数据信息
INSERT INTO `pa_zonenotice` VALUES ('4','欢迎您加入大学生科创中心！！方便的话，上传个自己的头像哈，让大家都互相认识下。<img src="http://gkmaker.gxbykj.com/Public/kindeditor/plugins/emoticons/images/0.gif" border="0" alt="" />','1408893151','1','1446364108');
INSERT INTO `pa_zonenotice` VALUES ('5','<span>注册之后 大家记得修改下自己的资料喔！！！</span><img src="http://gkmaker.gxbykj.com/Public/kindeditor/plugins/emoticons/images/0.gif" border="0" alt="" />','1408893213','1','1413618328');
INSERT INTO `pa_zonenotice` VALUES ('12','欢迎你加入广西科技大学科创空间。<img src="http://localhost/gkmaker/Public/kindeditor/plugins/emoticons/images/41.gif" alt="" border="0" /><br />','1445417323','1','1445417362');
