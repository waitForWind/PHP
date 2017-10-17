# -----------------------------------------------------------
# PHP-Amateur database backup files
# Blog: http://blog.51edm.org
# Type: 系统自动备份
# Description:当前SQL文件包含了表：pa_access、pa_addadvice、pa_admin、pa_advice、pa_category、pa_chuangyi、pa_download、pa_email、pa_file、pa_game、pa_guestbook、pa_home_game、pa_home_pionner、pa_introduction、pa_major、pa_member、pa_messageboard、pa_news、pa_node、pa_ourmaker、pa_relannounce、pa_role、pa_role_user、pa_science、pa_teacher、pa_venture、pa_zonenotice的结构信息，表：pa_access、pa_addadvice、pa_admin、pa_advice、pa_category、pa_chuangyi、pa_download、pa_email、pa_file、pa_game、pa_guestbook、pa_home_game、pa_home_pionner、pa_introduction、pa_major、pa_member、pa_messageboard、pa_news、pa_node、pa_ourmaker、pa_relannounce、pa_role、pa_role_user、pa_science、pa_teacher、pa_venture、pa_zonenotice的数据
# Time: 2014-10-08 16:00:19
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='网站后台管理员表' ;

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
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='新闻分类表' ;

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ;

# 数据库表：pa_download 结构信息
DROP TABLE IF EXISTS `pa_download`;
CREATE TABLE `pa_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8 NOT NULL,
  `publish` int(10) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='下载文件' ;

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ;

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 ;

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
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COMMENT='赛事管理' ;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ;

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
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1 ;

# 数据库表：pa_home_pionner 结构信息
DROP TABLE IF EXISTS `pa_home_pionner`;
CREATE TABLE `pa_home_pionner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '队长id',
  `pionnername` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '队员姓名',
  `pionnerclass` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '队员班级',
  `pionnerphone` varchar(15) CHARACTER SET utf8 NOT NULL COMMENT '队员手机',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ;

# 数据库表：pa_introduction 结构信息
DROP TABLE IF EXISTS `pa_introduction`;
CREATE TABLE `pa_introduction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='各种简介，包括科技新闻，' ;

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
  `weibo_uid` varchar(15) DEFAULT NULL COMMENT '对应的新浪微博uid',
  `tencent_uid` varchar(20) DEFAULT NULL COMMENT '腾讯微博UID',
  `emailadress` varchar(100) DEFAULT NULL COMMENT '邮箱地址',
  `email` varchar(20) DEFAULT NULL COMMENT '用户昵称',
  `pwd` char(32) DEFAULT NULL COMMENT '密码',
  `reg_date` int(10) DEFAULT NULL,
  `reg_ip` char(15) DEFAULT NULL COMMENT '注册IP地址',
  `verify_status` int(1) DEFAULT '0' COMMENT '电子邮件验证标示 0未验证，1已验证',
  `verify_code` varchar(32) DEFAULT NULL COMMENT '电子邮件验证随机码',
  `verify_time` int(10) DEFAULT NULL COMMENT '邮箱验证时间',
  `verify_exp_time` int(10) DEFAULT NULL COMMENT '验证邮件过期时间',
  `find_fwd_code` varchar(32) DEFAULT NULL COMMENT '找回密码验证随机码',
  `find_pwd_time` int(10) DEFAULT NULL COMMENT '找回密码申请提交时间',
  `find_pwd_exp_time` int(10) DEFAULT NULL COMMENT '找回密码验证随机码过期时间',
  `avatar` varchar(100) DEFAULT '53fa0d0029560.jpg' COMMENT '用户头像',
  `birthday` int(10) DEFAULT NULL COMMENT '用户生日',
  `sex` int(1) DEFAULT NULL COMMENT '0女1男',
  `address` varchar(50) DEFAULT NULL COMMENT '地址',
  `province` varchar(100) DEFAULT NULL COMMENT '省份',
  `city` varchar(100) DEFAULT NULL COMMENT '城市',
  `intr` varchar(500) DEFAULT NULL COMMENT '个人介绍',
  `mobile` varchar(11) DEFAULT NULL COMMENT '手机号码',
  `phone` varchar(30) DEFAULT NULL COMMENT '电话',
  `fax` varchar(30) DEFAULT NULL,
  `qq` int(15) DEFAULT NULL,
  `msn` varchar(100) DEFAULT NULL,
  `login_ip` varchar(15) DEFAULT NULL COMMENT '登录ip',
  `login_time` int(10) DEFAULT NULL COMMENT '登录时间',
  `grade` varchar(20) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `truename` varchar(20) NOT NULL,
  `academy` varchar(50) NOT NULL,
  `major` varchar(50) NOT NULL,
  `state` int(11) NOT NULL,
  `isphoto` int(11) NOT NULL DEFAULT '0',
  `isvip` int(11) NOT NULL DEFAULT '0' COMMENT '科技达人标志',
  `isteacher` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=366 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='网站前台会员表' ;

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ;

# 数据库表：pa_news 结构信息
DROP TABLE IF EXISTS `pa_news`;
CREATE TABLE `pa_news` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `cid` smallint(3) DEFAULT NULL COMMENT '所在分类',
  `title` varchar(200) DEFAULT NULL COMMENT '新闻标题',
  `keywords` varchar(50) DEFAULT NULL COMMENT '文章关键字',
  `description` mediumtext COMMENT '文章描述',
  `status` tinyint(1) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL COMMENT '文章摘要',
  `published` int(10) DEFAULT NULL,
  `update_time` int(10) DEFAULT NULL,
  `content` text,
  `aid` smallint(3) DEFAULT NULL COMMENT '发布者UID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='新闻表' ;

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='公告' ;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='名师讲座' ;

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

# 数据库表：pa_zonenotice 结构信息
DROP TABLE IF EXISTS `pa_zonenotice`;
CREATE TABLE `pa_zonenotice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `time` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ;



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


# 数据库表：pa_addadvice 数据信息
INSERT INTO `pa_addadvice` VALUES ('2','2','admin','犯非法','撒旦法','飞凤饭店','0');


# 数据库表：pa_admin 数据信息
INSERT INTO `pa_admin` VALUES ('1','超级管理员','764302375@qq.com','dbf684db7bde478ae403b1625500d6e2','1','我是超级管理员 哈哈~~','','1408678949');


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


# 数据库表：pa_chuangyi 数据信息
INSERT INTO `pa_chuangyi` VALUES ('1','创青春','陈洪杨','Hello  world!','1409653448','350','1','chytth','11');
INSERT INTO `pa_chuangyi` VALUES ('2','Hello','科研立项','不错的','0','350','1','chytth','3');
INSERT INTO `pa_chuangyi` VALUES ('3','3D打印机','3D打印技术','供热规定vfd','1409907701','350','1','admin','0');
INSERT INTO `pa_chuangyi` VALUES ('4','3D打印机','非常不错','非常不错','1409909034','350','1','admin','3');
INSERT INTO `pa_chuangyi` VALUES ('5','3D打印机','非常不错','非常不错','1409909048','350','1','admin','1');
INSERT INTO `pa_chuangyi` VALUES ('6','3D打印机','3D打印机','3D打印机','1409909057','350','1','admin','0');
INSERT INTO `pa_chuangyi` VALUES ('7','3D打印机','3D打印机','3D打印机','1409909063','350','1','admin','0');
INSERT INTO `pa_chuangyi` VALUES ('8','3D打印机','3D打印机3D打印机','3D打印机','1409909071','350','1','admin','0');
INSERT INTO `pa_chuangyi` VALUES ('9','3D打印机','3D打印机','3D打印机','1409909078','350','1','admin','1');
INSERT INTO `pa_chuangyi` VALUES ('10','3D打印机','3D打印机','3D打印机','1409909085','350','1','admin','0');


# 数据库表：pa_download 数据信息
INSERT INTO `pa_download` VALUES ('3','<a href="/gkmaker/Uploads/file/20140904/20140904023558_48347.doc" target="_blank">你懂的，点击下载。</a>','1409798172','1','1');
INSERT INTO `pa_download` VALUES ('6','<a href="/gkmaker/Uploads/file/20140905/20140905150630_53552.doc" target="_blank">重要文件，误删！！！</a>','1409922402','1','0');


# 数据库表：pa_email 数据信息
INSERT INTO `pa_email` VALUES ('1','354','350','<p>admin  传给chytth的私信</p>','0','','','','','1','1');
INSERT INTO `pa_email` VALUES ('2','350','355','<p>chytth1传给admin的</p>','0','','','','','1','0');
INSERT INTO `pa_email` VALUES ('3','350','355','<p>chytth1给admin的</p>','0','','','','','1','0');
INSERT INTO `pa_email` VALUES ('4','354','354','刚刚发的','1409047280','chytth','chytth','53fb04592a87d.gif','53fb04592a87d.gif','0','1');
INSERT INTO `pa_email` VALUES ('5','354','354','陈洪杨','1409047361','chytth','chytth','53fb04592a87d.gif','53fb04592a87d.gif','0','0');
INSERT INTO `pa_email` VALUES ('6','354','354','第二封','1409047416','chytth','chytth','53fb04592a87d.gif','53fb04592a87d.gif','0','0');
INSERT INTO `pa_email` VALUES ('7','354','354','第三封','1409047430','chytth','chytth','53fb04592a87d.gif','53fb04592a87d.gif','0','0');
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


# 数据库表：pa_file 数据信息
INSERT INTO `pa_file` VALUES ('2','5411aa7e711e9.doc','1410443902','hello','0','1','0');
INSERT INTO `pa_file` VALUES ('3','5411adac8d95e.doc','1410444716','hello','0','1','0');
INSERT INTO `pa_file` VALUES ('5','5413cde628d83.doc','1410584038','hello','0','1','0');
INSERT INTO `pa_file` VALUES ('6','5413cf2c7d0a9.doc','1410584364','hello','0','2','0');
INSERT INTO `pa_file` VALUES ('7','541947fdb5479.doc','1410942973','喀喀喀','0','2','0');
INSERT INTO `pa_file` VALUES ('9','541bde85663d7.doc','1411112581','qq','0','2','0');


# 数据库表：pa_game 数据信息
INSERT INTO `pa_game` VALUES ('48','1','科大健儿英姿飒爽，各项赛事捷报频传','','0','近日，我校师生参加第28届中国大学生手球锦标赛、第十二届全国大学生攀岩锦标赛、第三届全区大学生田径比赛等体育赛事屡获佳绩，捷报频传。手球队扬威第28届全国大学生手球锦标赛7月20日下午，由中国大学生体育协会手球分会主办，南京工程学院承办的第28届中国大学生手球锦标赛在天健苑·体育中心落下帷幕。本届比赛共有来自中国内地、香港和澳门等地19所高校26支运动队400余名运动员参加了3个组别的角逐。我校代&hellip;','1409047813','','<p style="text-indent:32px;">
	近日，我校师生参加第28届中国大学生手球锦标赛、第十二届全国大学生攀岩锦标赛、第三届全区大学生田径比赛等体育赛事屡获佳绩，捷报频传。
</p>
<p style="text-align:center;">
	<strong>手球队扬威第28届全国大学生手球锦标赛</strong> 
</p>
<p style="text-indent:32px;">
	7月20日下午，由中国大学生体育协会手球分会主办，<a href="http://app.edu.ifeng.com/college/1250" target="_blank">南京工程学院</a>承办的第28届中国大学生手球锦标赛在天健苑·体育中心落下帷幕。本届比赛共有来自中国内地、香港和澳门等地19所高校26支运动队400余名运动员参加了3个组别的角逐。我校代表队参加男子甲组的比赛，甲组共有来自包括中国科技大学、<a href="http://app.edu.ifeng.com/college/1347" target="_blank">清华大学</a>、<a href="http://app.edu.ifeng.com/college/569" target="_blank">合肥工业大学</a>、<a href="http://app.edu.ifeng.com/college/1" target="_blank">安徽大学</a>及东道主<a href="http://app.travel.ifeng.com/city_detail_261" target="_blank">南京</a>工程学院等9支代表队组成。经过8天的激烈角逐，我校运动员们以饱满的激情，昂扬的斗志，勇于拼搏进取的信念，团结向上的精神投入到比赛中，体现出过硬的心理素质和身体素质，在小组赛中过关斩将，顺利出线，最终在决赛中以25：17战胜实力强劲的安徽大学夺得冠军。这也是我校男子手球队继参加2013年台湾明道大学两岸四地大学生手球赛夺冠后获得的又一个冠军头衔。
</p>
<p style="text-align:center;">
	<strong>攀岩运动再获突破，5金4银5铜彰显实力</strong> 
</p>
<p style="text-indent:32px;">
	2014年7月24至27日，由中国大学生体育协会主办，四川旅游学院承办的第十二届全国大学生攀岩锦标赛在成都举行。来自北京大学、澳门大学、同济大学等40所高校共计338人参加。比赛为期4天，包括速度赛、难度赛和抱石赛三个项目。我校攀岩队12名运动员在领队欧小健，教练蒋钢强、苏龙、莫双瑗及助理教练莫双溪的带领下，夺得了5金4银5铜的佳绩。同时，经过参赛队互相投票评选，我校获得体育道德风尚奖。
</p>
<p>
	我校攀岩队在高水平运动员组的成绩取得历史性突破。体育学院学生陆春霞摘得高水平运动员组女子速度赛亚军、黎月星获得季军，二人合力获得女子团体第三名。莫双溪获得高水平运动员组男子攀石赛第四名，张玉全获得高水平运动员组男子难度赛第八名。我校公体（非体育专业学生）比赛成绩更为突出。陈桂彪（机械学院）获得普通院校B组男子速度赛亚军、男子难度赛季军，并与覃振彦（机械学院）合力获得得普通院校B组男子团体总分第一名。体育学院姐妹花蒙锦媚、王海梅包揽了体育院校B组女子难度赛冠亚军、速度赛冠军及亚军，并合力获得女子B组团体总分第一名，共3金2银。体育学院黄来获得体育院校组男子速度赛季军，并与费志林合力取得体育院校B组男子团体第一名，李昌明与翁梓取得体育院校A组男子团体总分第三名。
</p>
<p style="text-align:center;">
	<strong>田径健儿不畏强手，勇夺第一为校争光</strong> 
</p>
<p style="text-indent:32px;">
	7月25日下午，由自治区教育厅主办、广西民族大学承办的第三届全区大学生田径比赛在广西民族大学田径场圆满落幕。本届大运会历时3天，来自全区高校的53支参赛代表队710多名运动员参加15个项目的比赛。我校田径队队员在领队和教练的带领下，经过数月艰苦训练，积极备战，在紧张激烈的比赛中不畏强手，勇于拼搏，取得了优异的成绩，喜获甲组团体总分第一名和“体育道德风尚奖”。
</p>
<p style="text-indent:32px;">
	我校代表队参加甲组比赛，分别获得女子4×400米接力第一名，女子4×100米接力第二名，男子4×400米接力第二名，男子4×100米接力第二名。朱品金（管理学院）获得女子200米第一名、400米第一名；梁妮（土建学院）获得女子800米第一名、1500米第第二名；覃晓敏（理学院）获得女子100米第三名、200米第三名；于丽兰(财经学院)获得女子800米第三名、1500米第五名；苏小里(土建学院)获得女子跳高第五名、三级跳远第八名；彭晓玉(土建学院)获得女子三级跳远第五名，韦香妮（汽车学院）获得女子铅球第六名。戴剑东(土建学院)获男子200米第第二名、100米第三名；欧忠源(土建学院)获得男子100米第六名；黄大镕 (土建学院) 
获得男子400米第三名；吴永高(土建学院)获得男子400米第四名；何德（机械学院）获得男子800米第三名、男子1500米第六名；李喜超（社科学院）获得男子800米第五名、男子1500米第四名；刘镓昌（机械学院）获得男子800米第四名、1500米第七名；曾玮峰(机械学院)获得男子三级跳远第六名；伍彬（汽车学院）获得男子铅球第三名。
</p>
<p style="text-indent:32px;">
	我校运动员在各项体育赛事中赛出了风格、赛出了水平，展示出我校体育健儿团结拼搏、爱校荣校的精神风貌，体现了科大学子克难求进、力争上游的时代风采。
</p>','1','中国大学生体育协会手球分会','南京工程学院','2014-7-14','2014-7-25','我校攀岩队在高水平运动员组的成绩取得历史性突破。体育学院学生陆春霞摘得高水平运动员组女子速度赛亚军、黎月星获得季军，二人合力获得女子团体第三名。莫双溪获得高水平运动员组男子攀石赛第四名，张玉全获得高水平运动员组男子难度赛第八名。我校公体（非体育专业学生）比赛成绩更为突出。陈桂彪（机械学院）获得普通院校B组男子速度赛亚军、男子难度赛季军，并与覃振彦（机械学院）合力获得得普通院校B组男子团体总分第一名。体育学院姐妹花蒙锦媚、王海梅包揽了体育院校B组女子难度赛冠亚军、速度赛冠军及亚军，并合力获得女子B组团体总分第一名，共3金2银。体育学院黄来获得体育院校组男子速度赛季军，并与费志林合力取得体育院校B组男子团体第一名，李昌明与翁梓取得体育院校A组男子团体总分第三名。
');
INSERT INTO `pa_game` VALUES ('49','1','计算机学院举行“人工智能及其进展”学术报告会','','0','6月20日下午，计算机学院在5北203教室举行了题为“人工智能及其进展”的学术报告会。报告会由武汉大学博士生导师董文永教授主讲，计算机学院李春贵院长带领计算机学院部分师生参加了报告会。 在交流中，董老师从人工智能的“梦想与困惑”出发，详细讲解了人工智能及其进展，以及信息时代人工智能所面临的困境和机遇，并就目前人工智能领域智能计算和自然计算谈了个人的见解和发展趋势。会后，董老师与计算机学院的教师就如&hellip;','1409058130','','6月20日下午，计算机学院在5北203教室举行了题为“人工智能及其进展”的学术报告会。报告会由武汉大学博士生导师董文永教授主讲，计算机学院李春贵院长带领计算机学院部分师生参加了报告会。 <br />
在交流中，董老师从人工智能的“梦想与困惑”出发，详细讲解了人工智能及其进展，以及信息时代人工智能所面临的困境和机遇，并就目前人工智能领域智能计算和自然计算谈了个人的见解和发展趋势。会后，董老师与计算机学院的教师就如何提高国家自然基金项目命中率和国家自然基金申报书撰写中的注意事项等方面进行了面对面的交流和沟通。（计算机学院）','4','计算机学院','宣传部','2014-6-20','2014-6-20',' 6月20日下午，计算机学院在5北203教室举行了题为“人工智能及其进展”的学术报告会。报告会由武汉大学博士生导师董文永教授主讲，计算机学院李春贵院长带领计算机学院部分师生参加了报告会。 ');


# 数据库表：pa_guestbook 数据信息
INSERT INTO `pa_guestbook` VALUES ('1','科技立项','陈洪杨','<p>什么时候可以报名</p>','0','53fa0d0029560.jpg','0','','0');
INSERT INTO `pa_guestbook` VALUES ('2','创青春','陈洪杨','hello world！！！','1409122232','53fa0d0029560.jpg','0','','0');
INSERT INTO `pa_guestbook` VALUES ('3','创青春','陈洪杨','哈哈  我来了！！','1409124895','53fb04592a87d.gif','354','','0');
INSERT INTO `pa_guestbook` VALUES ('4','dscds','chenh','cdscds','1409928386','54041b213fe17.gif','350','','0');


# 数据库表：pa_home_game 数据信息
INSERT INTO `pa_home_game` VALUES ('14','陈','1','1','软件工程','290293023980','329372947924','323242423','0','创客','陈老师','哈哈哈哈哈哈哈哈哈');
INSERT INTO `pa_home_game` VALUES ('15','2212','1','1','212','21','122','21','0','2121','1221212','2121212');
INSERT INTO `pa_home_game` VALUES ('16','213123','15','5','21312','3213','213123','1321','0','3213','213','312312');
INSERT INTO `pa_home_game` VALUES ('17','','0','0','','','','','0','','','');
INSERT INTO `pa_home_game` VALUES ('18','','0','0','','','','','0','','','');
INSERT INTO `pa_home_game` VALUES ('19','','0','0','','','','','0','','','');
INSERT INTO `pa_home_game` VALUES ('20','','0','0','','','','','0','','','');
INSERT INTO `pa_home_game` VALUES ('21','','0','0','','','','','0','','','');
INSERT INTO `pa_home_game` VALUES ('22','','0','0','','','','','0','','','');
INSERT INTO `pa_home_game` VALUES ('23','','0','0','','','','','0','','','');
INSERT INTO `pa_home_game` VALUES ('24','','0','0','','','','','0','','','');
INSERT INTO `pa_home_game` VALUES ('25','','0','0','','','','','0','','','');
INSERT INTO `pa_home_game` VALUES ('50','11111111111','2','3','111111111','111111111','233','323','0','1111111111111','1111111111','2323');
INSERT INTO `pa_home_game` VALUES ('51','11111111111','2','3','111111111','111111111','233','323','0','1111111111111','1111111111','2323');
INSERT INTO `pa_home_game` VALUES ('52','11111111111','2','3','111111111','111111111','233','323','0','1111111111111','1111111111','2323');
INSERT INTO `pa_home_game` VALUES ('53','11111111111','2','3','111111111','111111111','233','323','0','1111111111111','1111111111','2323');


# 数据库表：pa_home_pionner 数据信息
INSERT INTO `pa_home_pionner` VALUES ('1','0','','','');
INSERT INTO `pa_home_pionner` VALUES ('2','0','','','');
INSERT INTO `pa_home_pionner` VALUES ('3','0','','','');
INSERT INTO `pa_home_pionner` VALUES ('4','50','323','232','323');
INSERT INTO `pa_home_pionner` VALUES ('5','50','323','232','323');


# 数据库表：pa_introduction 数据信息
INSERT INTO `pa_introduction` VALUES ('1','科技立项的举办是为调动学生参与课外科技活动和各类学科竞赛活动的积极性，培养学生科技创新意识和提高学生科技创新能力，增强我校的科技文化氛围。 获得科技立项校级一等奖的团队可直接选送参加“挑战杯','1','0');
INSERT INTO `pa_introduction` VALUES ('4','科技立项的举办是为调动学生参与课外科技活动和各类学科竞赛活动的积极性，培养学生科技创新意识和提高学生科技创新能力，增强我校的科技文化氛围。 获得科技立项校级一等奖的团队可直接选送参加“挑战杯”课外科技作品竞赛。 ','1','1');
INSERT INTO `pa_introduction` VALUES ('5','似懂非懂萨法大赛DAFDAF','0','0');


# 数据库表：pa_major 数据信息
INSERT INTO `pa_major` VALUES ('11','2','admin','陈洪杨','xfz','','','1');
INSERT INTO `pa_major` VALUES ('13','9','admin','','','','','1');


# 数据库表：pa_member 数据信息
INSERT INTO `pa_member` VALUES ('350','','','','admin','dbf684db7bde478ae403b1625500d6e2','','','0','','','','','','','54041b213fe17.gif','','1','','湖北','武汉','vdscdscscds','','','','764302375','','','','','网络开发','陈洪杨','计算机学院','软件工程','2','1','1','1');
INSERT INTO `pa_member` VALUES ('354','','','','chytth','dbf684db7bde478ae403b1625500d6e2','','','0','','','','','','','53fb04592a87d.gif','','1','','','','gfbgfhbgfgfdhgd','','','','0','','','','0000','程序猿','陈洪杨','','','0','1','1','0');
INSERT INTO `pa_member` VALUES ('355','','','','chytth1','16c36f00670cb18120c5a53da8ceb23b','','','0','','','','','','','53fb030e18419.gif','','1','','','','陈洪杨','','','','764302375','','','','0000','程序猿,软件','陈洪杨','','','0','1','1','0');
INSERT INTO `pa_member` VALUES ('356','','','','陈洪杨','16c36f00670cb18120c5a53da8ceb23b','','','0','','','','','','','53fe97f67bf75.gif','','1','','','','','','','','0','','','','0000','','','','','0','1','1','1');
INSERT INTO `pa_member` VALUES ('357','','','','xfz','1f3aca9176a5db68914e87dc85e7f328','','','0','','','','','','','53fa0d0029560.jpg','','1','','','','','','','','','','','','','','','','','0','0','1','1');
INSERT INTO `pa_member` VALUES ('358','','','','chy','1f3aca9176a5db68914e87dc85e7f328','','','0','','','','','','','53fa0d0029560.jpg','','0','','','','','','','','','','','','','','','','','0','0','1','1');
INSERT INTO `pa_member` VALUES ('359','','','','chytth3','dbf684db7bde478ae403b1625500d6e2','','','0','','','','','','','53fa0d0029560.jpg','','1','','','','','','','','','','','','','','','','','0','0','1','1');
INSERT INTO `pa_member` VALUES ('360','','','','chytth4','dbf684db7bde478ae403b1625500d6e2','','','0','','','','','','','53fa0d0029560.jpg','','1','','','','','','','','','','','','','','','','','0','0','1','0');
INSERT INTO `pa_member` VALUES ('361','','','','chytth6','dbf684db7bde478ae403b1625500d6e2','','','0','','','','','','','53fa0d0029560.jpg','','0','','','','','','','','','','','','','','','','','0','0','1','0');
INSERT INTO `pa_member` VALUES ('362','','','','chytth8','dbf684db7bde478ae403b1625500d6e2','','','0','','','','','','','53fa0d0029560.jpg','','0','','','','','','','','','','','','','','','','','0','0','1','0');
INSERT INTO `pa_member` VALUES ('363','','','','1223','7a526955680ad1b18fdd949c918fbbf9','','','0','','','','','','','53fa0d0029560.jpg','','1','','','','','','','','','','','','','','','','','0','0','1','0');
INSERT INTO `pa_member` VALUES ('364','','','','chytth','16c36f00670cb18120c5a53da8ceb23b','','','0','','','','','','','53fa0d0029560.jpg','','','','','','','','','','','','','','','','','','','0','0','0','0');
INSERT INTO `pa_member` VALUES ('365','','','','','3379588fae4e92e1ac4ffb8160d2de4c','','','0','','','','','','','53fa0d0029560.jpg','','','','','','','','','','','','','','','','','','','0','0','0','0');


# 数据库表：pa_messageboard 数据信息
INSERT INTO `pa_messageboard` VALUES ('3','350','1409069835','admin','53fb0263e44a1.gif','vfdbgfdbfdbgd');
INSERT INTO `pa_messageboard` VALUES ('4','350','1409069903','admin','53fb0263e44a1.gif','fdbfgngfvnhg');
INSERT INTO `pa_messageboard` VALUES ('5','350','1409069934','admin','53fb0263e44a1.gif','bgfbgfbgf');
INSERT INTO `pa_messageboard` VALUES ('6','350','1409928349','admin','54041b213fe17.gif','fcdscdsnkjvcdsvcndsldcscdscdscdscdssdvdsdnvcmsdvcs');
INSERT INTO `pa_messageboard` VALUES ('7','350','1409928397','admin','54041b213fe17.gif','dcascdscdasc');


# 数据库表：pa_news 数据信息
INSERT INTO `pa_news` VALUES ('5','1','长理掌上通发布会','长理掌上通发布会','长理掌上通发布会','1','长理掌上通发布会','1410271001','','<h1 class="title" style="color:#06328D;font-size:14px;text-align:center;font-family:微软雅黑;background-color:#FFFFFF;">
	长理掌上通发布会<span style="font-weight:normal;">长理掌上通发布会</span><span style="font-weight:normal;">长理掌上通发布会</span>
</h1>
<h1 class="title" style="color:#06328D;font-size:14px;text-align:center;font-family:微软雅黑;background-color:#FFFFFF;">
	长理掌上通发布会
</h1>
<h1 class="title" style="color:#06328D;font-size:14px;text-align:center;font-family:微软雅黑;background-color:#FFFFFF;">
	长理掌上通发布会
</h1>
<h1 class="title" style="color:#06328D;font-size:14px;text-align:center;font-family:微软雅黑;background-color:#FFFFFF;">
	长理掌上通发布会
</h1>
<h1 class="title" style="color:#06328D;font-size:14px;text-align:center;font-family:微软雅黑;background-color:#FFFFFF;">
	长理掌上通发布会
</h1>
<h1 class="title" style="color:#06328D;font-size:14px;text-align:center;font-family:微软雅黑;background-color:#FFFFFF;">
	长理掌上通发布会
</h1>
<h1 class="title" style="color:#06328D;font-size:14px;text-align:center;font-family:微软雅黑;background-color:#FFFFFF;">
	长理掌上通发布会
</h1>
<h1 class="title" style="color:#06328D;font-size:14px;text-align:center;font-family:微软雅黑;background-color:#FFFFFF;">
	长理掌上通发布会
</h1>','1');
INSERT INTO `pa_news` VALUES ('6','1','计通科技文化节','计通科技文化节之网页设计','计通科技文化节之网页设计大赛','1','计通科技文化节之网页设计大赛','1410271028','1410272346','<a href="http://www.kjjlpt.com/shownews.php?show=news&nid=174">计通科技文化节之网页设计大赛</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=174">计通科技文化节之网页设计大赛</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=174">计通科技文化节之网页设计大赛</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=174">计通科技文化节之网页设计大赛</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=174">计通科技文化节之网页设计大赛</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=174">计通科技文化节之网页设计大赛</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=174">计通科技文化节之网页设计大赛</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=174">计通科技文化节之网页设计大赛</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=174">计通科技文化节之网页设计大赛</a>','1');
INSERT INTO `pa_news` VALUES ('7','1','交通学院举办2','交通学院举办2014“创青','交通学院举办2014“创青春”长','1','交通学院举办2014“创青春”长','1410271040','1410272339','<a href="http://www.kjjlpt.com/shownews.php?show=news&nid=246">交通学院举办2014“创青春”长</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=246">交通学院举办2014“创青春”长</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=246">交通学院举办2014“创青春”长</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=246">交通学院举办2014“创青春”长</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=246">交通学院举办2014“创青春”长</a>','1');
INSERT INTO `pa_news` VALUES ('8','1','计通科技文化','计通科技文化节之DIY装机','计通科技文化节之DIY装机大赛','1','计通科技文化节之DIY装机大赛','1410271067','1410272332','<a href="http://www.kjjlpt.com/shownews.php?show=news&nid=175">计通科技文化节之DIY装机大赛</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=175">计通科技文化节之DIY装机大赛</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=175">计通科技文化节之DIY装机大赛</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=175">计通科技文化节之DIY装机大赛</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=175">计通科技文化节之DIY装机大赛</a>','1');
INSERT INTO `pa_news` VALUES ('9','1','水利学院举行我','水利学院举行我校第三届大','水利学院举行我校第三届大学生水利','1','水利学院举行我校第三届大学生水利','1410271085','1410272317','<a href="http://www.kjjlpt.com/shownews.php?show=news&nid=171">水利学院举行我校第三届大学生水利</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=171">水利学院举行我校第三届大学生水利</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=171">水利学院举行我校第三届大学生水利</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=171">水利学院举行我校第三届大学生水利</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=171">水利学院举行我校第三届大学生水利</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=171">水利学院举行我校第三届大学生水利</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=171">水利学院举行我校第三届大学生水利</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=171">水利学院举行我校第三届大学生水利</a><a href="http://www.kjjlpt.com/shownews.php?show=news&nid=171">水利学院举行我校第三届大学生水利</a>','1');
INSERT INTO `pa_news` VALUES ('4','1','”暨挑战杯湖南省大','云作坊“掌上通”项目在“创','云作坊“掌上通”项目在“创青春”暨挑战杯湖南省大学生创业大赛中荣获金奖','1','云作坊“掌上通”项目在“创青春”暨挑战杯湖南省大学生创业大赛中荣获金奖','1410270959','1410272354','<h1 class="title" style="color:#06328D;font-size:14px;text-align:center;font-family:微软雅黑;background-color:#FFFFFF;">
	云作坊“掌上通”项目在“创青春”暨挑战杯湖南省大学生创业大赛中荣获金奖<span style="font-weight:normal;">云作坊“掌上通”项目在“创青春”暨挑战杯湖南省大学生创业大赛中荣获金奖</span> 
</h1>
<h1 class="title" style="color:#06328D;font-size:14px;text-align:center;font-family:微软雅黑;background-color:#FFFFFF;">
	云作坊“掌上通”项目在“创青春”暨挑战杯湖南省大学生创业大赛中荣获金奖
</h1>
<h1 class="title" style="color:#06328D;font-size:14px;text-align:center;font-family:微软雅黑;background-color:#FFFFFF;">
	云作坊“掌上通”项目在“创青春”暨挑战杯湖南省大学生创业大赛中荣获金奖
</h1>
<h1 class="title" style="color:#06328D;font-size:14px;text-align:center;font-family:微软雅黑;background-color:#FFFFFF;">
	云作坊“掌上通”项目在“创青春”暨挑战杯湖南省大学生创业大赛中荣获金奖
</h1>
<h1 class="title" style="color:#06328D;font-size:14px;text-align:center;font-family:微软雅黑;background-color:#FFFFFF;">
	云作坊“掌上通”项目在“创青春”暨挑战杯湖南省大学生创业大赛中荣获金奖
</h1>','1');


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
INSERT INTO `pa_relannounce` VALUES ('13','新生迎接工作，落实到位','<p>
	&nbsp; &nbsp; &nbsp; &nbsp;<span style="background-color:#4C33E5;">2014年9月10号进行新生迎接工作，请大家做好相应的工作准备</span>！！<span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！<img src="http://localhost:88/gkmaker/Public/kindeditor/plugins/emoticons/images/0.gif" border="0" alt="" /></span>
</p>
<p>
	<span>&nbsp; &nbsp; &nbsp; &nbsp;<span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><span>2014年9月10号进行新生迎接工作，请大家做好相应的工作准备！！</span><img src="http://localhost:88/gkmaker/Public/kindeditor/plugins/emoticons/images/0.gif" border="0" alt="" /></span>
</p>','1','1409192226','1409192226','1');


# 数据库表：pa_role 数据信息
INSERT INTO `pa_role` VALUES ('1','超级管理员','0','1','系统内置超级管理员组，不受权限分配账号限制');
INSERT INTO `pa_role` VALUES ('2','管理员','1','1','拥有系统仅此于超级管理员的权限');
INSERT INTO `pa_role` VALUES ('3','领导','1','1','拥有所有操作的读权限，无增加、删除、修改的权限');
INSERT INTO `pa_role` VALUES ('4','测试组','1','1','测试');


# 数据库表：pa_role_user 数据信息


# 数据库表：pa_science 数据信息
INSERT INTO `pa_science` VALUES ('2','9','二季度房地产信托兑付超千亿 PE伺机接盘 ','','随着安信信托、中信信托等多家信托公司曝出房地产信托计划的兑付风险，部分房地产投资私募基金(PE)已在其中看到了机会。','1','<div class="content"><p>随着安信<a href="http://licai.so/Trust/" target="_blank">信托</a>、<a href="http://licai.so/Trust/agency-1061/" target="_blank">中信信托</a>等多家信托公司曝出房地产信托计划的兑付风险，部分房地产投资<a href="http...','1363141340','<div class="content"><p>随着安信<a href="http://licai.so/Trust/" target="_blank">信托</a>、<a href="http://licai.so/Trust/agency-1061/" target="_blank">中信信托</a>等多家信托公司曝出房地产信托计划的兑付风险，部分房地产投资<a href="http://licai.so/Simu/" target="_blank">私募</a>基金(<a href="http://licai.so/Pe/" target="_blank">PE</a>)已在其中看到了机会。</p><br /><p>《每日经济新闻》记者了解到，2013年房地产信托兑付压力远超2012年，其中，兑付顶峰将出现在2013年第二季度，届时全国房地产信托兑付的总规模将超过1000亿元。通过信托融资的中小房地产企业将不得不面对资金上的窘境，而这对资金充裕的PE来说，无疑将是一次“捡馅饼”的机会。</p><br /><p>风险频现挑战“刚性兑付”/</p><br /><p>上周五(3月8日)，据《21世纪经济报道》称，<a href="http://licai.so/Trust/agency-1002/" target="_blank">安信信托</a>因为“昆山·联邦国际资产收益财产权信托”的融资方昆山纯高投资开发有限公司无法支付到期本金，已对纯高公司进行了起诉。</p><br /><p>不过，安信信托在当日发布澄清公告称，2009年9月24日，安信信托发起并设立了总规模为人民币62700万元的“昆山-联邦国际”资产收益财产权信托。但是到2012年9月18日，昆山纯高投资开发有限公司作为信托交易文件项下借款人未能按时足额偿还信托借款。</p><br /><p>为此，安信信托已向上海市第二中级人民法院提起金融借款纠纷诉讼。并且“根据信托文件约定，信托期限已自动延长，最长至2013年9月24日。”</p><br /><p>安信信托董办工作人员称，目前信托计划已经延期了,但是公司确实已进行了部分兑付。</p><br /><p>一位信托行业人士表示，项目出了问题，信托公司一般都会先托着，但如果真的出现较大的问题，这样做就会有很大风险。</p><br /><p>事实上，信托行业的“刚性兑付”此前就已经遇到了挑战。今年1月份，中信信托关于三峡全通的贷款资金兑付问题就已引起业界震动。</p><br /><p>资料显示，中信信托于2011年12月28日发起设立，“中信制造三峡全通贷款集合资金信托计划”分4次募集信托本金共计人民币13.335亿元，为三峡全通发放流动资金贷款。</p><br /><p>三峡全通公司应当于2013年1月14日和16日分别偿还贷款本息11855万元和47247万元。中信信托称，“截至2013年1月28日，本信托计划信托专户仍未收到该两期应收本息及违约金。”因此公司决定存续的优先级信托受益权的到期日延期3个月。</p><br /><p>而中信信托方面已表示，将不会去进行刚性兑付。业界认为该事件可能成信托业首个打破刚性兑付 “行规”的案例。</p><br /><p>二季度迎新一波兑付潮/</p><br /><p>虽然信托行业已经度过了此前预期兑付风险较大的2012年。但是到了2013年，房地产信托仍然面临较大的兑付压力。</p><br /><p>据北京恒天财富相关数据统计，2013年房地产信托面临兑付本息达2800亿元，远超过2012年的1759亿元。其中，兑付顶峰将出现在2013年第二季度，届时全国房地产信托兑付的总规模将达到1301亿元。</p><br /><p>另据新时代证券发布的研报，根据每月的成立规模与月平均期限测算，2013年房地产信托到期兑付规模将达2847.9亿元，其中二季度达1247.6亿元。</p><br /><p>上海一家信托公司项目经理接受《每日经济新闻》记者采访时表示，“在房地产信托计划的兑付中，中小房地产企业的压力要大得多。他们的融资原本就比大型的房地产企业要难，风险也相对要高一些。”</p><br /><p><a href="http://licai.so/Simu/200287/" target="_blank">诺亚财富</a>研究部李要深则对《每日经济新闻》记者表示，目前总体来说，房地产信托没有太大的问题，相比前两年，规模和占比已经下降很多，处在一个相对安全的范围，并且房地产信托一般都有较好的抵押物。</p><br /><p>事实上，今年以来，房地产信托发展速度仍然较快。用益信托数据显示，2月份共成立房地产信托52款，募集资金162.95亿元，占总成立规模的33.98%，高于上个月29.49%的占比，较去年23%左右的占比更是显著增加。</p><br /><p>PE伺机而动</p><br /><p>对资金充裕的PE来说，房地产信托接盘的时机也可能就在今年。</p><br /><p>“房地产公司现在都缺钱，尤其是中小房地产企业，更是困难。从目前的角度来看，这块的投资价值逐渐显现出来了。”某股权投资基金相关人士称，PE投资接盘的条件主要还是看具体的项目。</p><br /><p>“从实际情况看，房地产信托有兑付风险的项目眼下还不多，只是根据趋势判断，今年的投资将有很大的操作空间，也就是找一些缺资金、项目优质的企业合作。”上述股权投资基金人士表示。</p><br /><p>据《每日经济新闻》记者不完全统计，在即将到期的房地产信托项目中，北京、上海等一线城市的项目数量有限，而鄂尔多斯、青岛等二线城市项目则多一些。</p><br /><p>上述股权投资基金人士介绍，与房地产企业的合作，模式是多种多样的。“最简单的是折价收购整个项目，然而分拆出售，但是这对PE公司的资金实力和运作的要求很高。另外，不同PE主体的参与模式也不一样。<a href="http://licai.so/Jgzl/" target="_blank">金融机构</a>发起的地产基金主要是做债权，和信托公司联合发起信托型基金，这是一种‘类信托’的融资模式;大型房地产企业则更愿意做股权融资，进行大鱼吃小鱼的行业整合。”</p><br /><p>此前有消息称，万科、金地、华润、复兴为代表的房地产集团都在旗下设立PE投资公司，通过股权融资扩大行业版图。</p><br /><p>不过，上述股权投资基金人士也表示，“房地产信托的兑付风险都依靠PE来接盘肯定是不现实的，目前PE的实力也达不到。但是，PE对一些优质项目的兴趣比较大，也是一支不可忽视的力量。”</p></div>','1');
INSERT INTO `pa_science` VALUES ('7','51','3244','123123','31232323','1','323232323','1409538319','343244','1');


# 数据库表：pa_teacher 数据信息
INSERT INTO `pa_teacher` VALUES ('1','9','二季度房地产信托','','随着安信信托、中信信托等多家信托公司曝出房地产信托计划的兑付风险，部分房地产投资私募基金(PE)已在...','1','<div class="content"><p>随着安信<a href="http://licai.so/Trust/" target="_blank">信托</a>、<a href="http://licai.so/Trust/agency-1061/" target="_blank">中信信托</a>等多家信托公司曝出房地产信托计划的兑付风险，部分房地产投资<a href="http...','1363141340','1410272303','<div class="content">
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
INSERT INTO `pa_teacher` VALUES ('2','14','银监会拟引入','','银行理财业务的迅猛增长，倒逼监管的步步升级。','1','银行理财业务的迅猛增长，倒逼监管的步步升级。记者从业内获得的最新统计数据显示，截至2012年末，各银行共存续理财产品32152款，理财资金账面余额7.1万亿元，比2011年末增长约55%。年初以来，银监会已将理财业务列为今年的重点监管工作。消息人士透露，对理财产品加大监管主要表现在两方面：一是将派出机构对银行理财产品销售活动进行专项检查；另一方面，将“资金池”操作模式作为现场检查的重点，“要求商业…','1363141499','1410272296','银行理财业务的迅猛增长，倒逼监管的步步升级。
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


# 数据库表：pa_venture 数据信息
INSERT INTO `pa_venture` VALUES ('2','9','二季度房地产信托兑付超千亿 PE伺机接盘 ','','随着安信信托、中信信托等多家信托公司曝出房地产信托计划的兑付风险，部分房地产投资私募基金(PE)已在其中看到了机会。','1','<div class="content"><p>随着安信<a href="http://licai.so/Trust/" target="_blank">信托</a>、<a href="http://licai.so/Trust/agency-1061/" target="_blank">中信信托</a>等多家信托公司曝出房地产信托计划的兑付风险，部分房地产投资<a href="http...','1363141340','<div class="content"><p>随着安信<a href="http://licai.so/Trust/" target="_blank">信托</a>、<a href="http://licai.so/Trust/agency-1061/" target="_blank">中信信托</a>等多家信托公司曝出房地产信托计划的兑付风险，部分房地产投资<a href="http://licai.so/Simu/" target="_blank">私募</a>基金(<a href="http://licai.so/Pe/" target="_blank">PE</a>)已在其中看到了机会。</p><br /><p>《每日经济新闻》记者了解到，2013年房地产信托兑付压力远超2012年，其中，兑付顶峰将出现在2013年第二季度，届时全国房地产信托兑付的总规模将超过1000亿元。通过信托融资的中小房地产企业将不得不面对资金上的窘境，而这对资金充裕的PE来说，无疑将是一次“捡馅饼”的机会。</p><br /><p>风险频现挑战“刚性兑付”/</p><br /><p>上周五(3月8日)，据《21世纪经济报道》称，<a href="http://licai.so/Trust/agency-1002/" target="_blank">安信信托</a>因为“昆山·联邦国际资产收益财产权信托”的融资方昆山纯高投资开发有限公司无法支付到期本金，已对纯高公司进行了起诉。</p><br /><p>不过，安信信托在当日发布澄清公告称，2009年9月24日，安信信托发起并设立了总规模为人民币62700万元的“昆山-联邦国际”资产收益财产权信托。但是到2012年9月18日，昆山纯高投资开发有限公司作为信托交易文件项下借款人未能按时足额偿还信托借款。</p><br /><p>为此，安信信托已向上海市第二中级人民法院提起金融借款纠纷诉讼。并且“根据信托文件约定，信托期限已自动延长，最长至2013年9月24日。”</p><br /><p>安信信托董办工作人员称，目前信托计划已经延期了,但是公司确实已进行了部分兑付。</p><br /><p>一位信托行业人士表示，项目出了问题，信托公司一般都会先托着，但如果真的出现较大的问题，这样做就会有很大风险。</p><br /><p>事实上，信托行业的“刚性兑付”此前就已经遇到了挑战。今年1月份，中信信托关于三峡全通的贷款资金兑付问题就已引起业界震动。</p><br /><p>资料显示，中信信托于2011年12月28日发起设立，“中信制造三峡全通贷款集合资金信托计划”分4次募集信托本金共计人民币13.335亿元，为三峡全通发放流动资金贷款。</p><br /><p>三峡全通公司应当于2013年1月14日和16日分别偿还贷款本息11855万元和47247万元。中信信托称，“截至2013年1月28日，本信托计划信托专户仍未收到该两期应收本息及违约金。”因此公司决定存续的优先级信托受益权的到期日延期3个月。</p><br /><p>而中信信托方面已表示，将不会去进行刚性兑付。业界认为该事件可能成信托业首个打破刚性兑付 “行规”的案例。</p><br /><p>二季度迎新一波兑付潮/</p><br /><p>虽然信托行业已经度过了此前预期兑付风险较大的2012年。但是到了2013年，房地产信托仍然面临较大的兑付压力。</p><br /><p>据北京恒天财富相关数据统计，2013年房地产信托面临兑付本息达2800亿元，远超过2012年的1759亿元。其中，兑付顶峰将出现在2013年第二季度，届时全国房地产信托兑付的总规模将达到1301亿元。</p><br /><p>另据新时代证券发布的研报，根据每月的成立规模与月平均期限测算，2013年房地产信托到期兑付规模将达2847.9亿元，其中二季度达1247.6亿元。</p><br /><p>上海一家信托公司项目经理接受《每日经济新闻》记者采访时表示，“在房地产信托计划的兑付中，中小房地产企业的压力要大得多。他们的融资原本就比大型的房地产企业要难，风险也相对要高一些。”</p><br /><p><a href="http://licai.so/Simu/200287/" target="_blank">诺亚财富</a>研究部李要深则对《每日经济新闻》记者表示，目前总体来说，房地产信托没有太大的问题，相比前两年，规模和占比已经下降很多，处在一个相对安全的范围，并且房地产信托一般都有较好的抵押物。</p><br /><p>事实上，今年以来，房地产信托发展速度仍然较快。用益信托数据显示，2月份共成立房地产信托52款，募集资金162.95亿元，占总成立规模的33.98%，高于上个月29.49%的占比，较去年23%左右的占比更是显著增加。</p><br /><p>PE伺机而动</p><br /><p>对资金充裕的PE来说，房地产信托接盘的时机也可能就在今年。</p><br /><p>“房地产公司现在都缺钱，尤其是中小房地产企业，更是困难。从目前的角度来看，这块的投资价值逐渐显现出来了。”某股权投资基金相关人士称，PE投资接盘的条件主要还是看具体的项目。</p><br /><p>“从实际情况看，房地产信托有兑付风险的项目眼下还不多，只是根据趋势判断，今年的投资将有很大的操作空间，也就是找一些缺资金、项目优质的企业合作。”上述股权投资基金人士表示。</p><br /><p>据《每日经济新闻》记者不完全统计，在即将到期的房地产信托项目中，北京、上海等一线城市的项目数量有限，而鄂尔多斯、青岛等二线城市项目则多一些。</p><br /><p>上述股权投资基金人士介绍，与房地产企业的合作，模式是多种多样的。“最简单的是折价收购整个项目，然而分拆出售，但是这对PE公司的资金实力和运作的要求很高。另外，不同PE主体的参与模式也不一样。<a href="http://licai.so/Jgzl/" target="_blank">金融机构</a>发起的地产基金主要是做债权，和信托公司联合发起信托型基金，这是一种‘类信托’的融资模式;大型房地产企业则更愿意做股权融资，进行大鱼吃小鱼的行业整合。”</p><br /><p>此前有消息称，万科、金地、华润、复兴为代表的房地产集团都在旗下设立PE投资公司，通过股权融资扩大行业版图。</p><br /><p>不过，上述股权投资基金人士也表示，“房地产信托的兑付风险都依靠PE来接盘肯定是不现实的，目前PE的实力也达不到。但是，PE对一些优质项目的兴趣比较大，也是一支不可忽视的力量。”</p></div>','1');
INSERT INTO `pa_venture` VALUES ('8','6','哈哈哈哈','','','0','','1409645929','','1');


# 数据库表：pa_zonenotice 数据信息
INSERT INTO `pa_zonenotice` VALUES ('4','经营合同和教育投入经营&nbsp;','1408893151','1','1409645951');
INSERT INTO `pa_zonenotice` VALUES ('5','hello &nbsp;world<img src="http://localhost:88/gkmaker/Public/kindeditor/plugins/emoticons/images/0.gif" border="0" alt="" />','1408893213','1','1409195648');
INSERT INTO `pa_zonenotice` VALUES ('6','<img src="http://localhost:88/gkmaker/Public/kindeditor/plugins/emoticons/images/18.gif" border="0" alt="" />','1408893231','0','1409645948');
INSERT INTO `pa_zonenotice` VALUES ('7','<img src="http://localhost:88/gkmaker/Public/kindeditor/plugins/emoticons/images/10.gif" border="0" alt="" />','1408893241','1','0');
INSERT INTO `pa_zonenotice` VALUES ('8','<img src="http://localhost:88/gkmaker/Public/kindeditor/plugins/emoticons/images/28.gif" border="0" alt="" />','1408893249','1','0');
INSERT INTO `pa_zonenotice` VALUES ('9','<img src="http://localhost:88/gkmaker/Public/kindeditor/plugins/emoticons/images/30.gif" border="0" alt="" />','1408893256','1','0');
INSERT INTO `pa_zonenotice` VALUES ('10','<img src="http://localhost:88/gkmaker/Public/kindeditor/plugins/emoticons/images/22.gif" border="0" alt="" />','1408893265','1','0');
INSERT INTO `pa_zonenotice` VALUES ('11','<img src="http://localhost:88/gkmaker/Public/kindeditor/plugins/emoticons/images/22.gif" border="0" alt="" />','1408893276','1','0');
