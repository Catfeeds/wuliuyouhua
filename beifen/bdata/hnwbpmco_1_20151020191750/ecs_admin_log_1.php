<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_log`;");
E_C("CREATE TABLE `ecs_admin_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `log_info` varchar(255) NOT NULL DEFAULT '',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`log_id`),
  KEY `log_time` (`log_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1165 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_log` values('1','1385534865','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2','1385535239','1','添加商品分类: 家具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3','1385535247','1','添加商品分类: 建材','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('4','1385535262','1','添加商品分类: 家居家饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('5','1385535280','1','添加商品分类: 卧室','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('6','1385535289','1','添加商品分类: 客厅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('7','1385535296','1','编辑商品分类: 客厅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('8','1385535309','1','添加商品分类: 餐厅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('9','1385535316','1','添加商品分类: 书房','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('10','1385535332','1','添加商品分类: 儿童房','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('11','1385535342','1','添加商品分类: 户外家具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('12','1385535351','1','添加商品分类: 定制家具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('13','1385535367','1','添加商品分类: 灯饰照明','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('14','1385535375','1','添加商品分类: 厨房用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('15','1385535388','1','添加商品分类: 卫浴用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('16','1385535396','1','添加商品分类: 五金电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('17','1385535405','1','添加商品分类: 墙地面','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('18','1385535424','1','添加商品分类: 五金工具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('19','1385535434','1','添加商品分类: 床上用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('20','1385535443','1','添加商品分类: 居家日用','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('21','1385535453','1','添加商品分类: 布艺织物','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('22','1385535460','1','添加商品分类: 家居饰品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('23','1385535469','1','添加商品分类: 厨房餐饮','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('24','1385535494','1','添加商品分类: 生活电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('25','1385535520','1','添加商品分类: 床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('26','1385535529','1','添加商品分类: 床垫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('27','1385535541','1','添加商品分类: 床头柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('28','1385535551','1','添加商品分类: 沙发','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('29','1385535562','1','添加商品分类: 茶几/边桌','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('30','1385535574','1','添加商品分类: 电视柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('31','1385535587','1','添加商品分类: 餐桌','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('32','1385535597','1','添加商品分类: 餐椅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('33','1385535605','1','添加商品分类: 餐边柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('34','1385535615','1','添加商品分类: 书桌/工作台','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('35','1385535628','1','添加商品分类: 书柜/书架','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('36','1385535639','1','添加商品分类: 书椅/转椅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('37','1385535653','1','添加商品分类: 儿童床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('38','1385535666','1','添加商品分类: 儿童床头柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('39','1385535676','1','添加商品分类: 儿童衣柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('40','1385535686','1','添加商品分类: 吊篮/吊椅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('41','1385535701','1','添加商品分类: 休闲桌','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('42','1385535710','1','添加商品分类: 休闲椅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('43','1385535727','1','添加商品分类: 定制橱柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('44','1385535742','1','添加商品分类: 定制书柜/书台','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('45','1385535891','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('46','1385535919','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('47','1385536232','1','添加商品: 美式古典	双面描金雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('48','1385536310','1','添加商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('49','1385536398','1','添加商品: 欧式田园	粉红玫瑰立体雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('50','1385536464','1','添加商品: 法式风格	1.8米皮拉扣床 PU发泡雕花床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('51','1385536549','1','添加商品: 地中海风格 美国进口白杨木双人床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('52','1385536616','1','添加商品: 现代风格	1.8米软床 头层牛皮床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('53','1385536684','1','添加文章分类: 关于美乐乐','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('54','1385536713','1','添加文章分类: 新手指南','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('55','1385536723','1','添加文章分类: 配送安装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('56','1385536739','1','添加文章分类: 售后服务','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('57','1385536747','1','添加文章分类: 购物保障','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('58','1385536786','1','添加文章: 公司简介','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('59','1385536801','1','添加文章: 体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('60','1385536815','1','添加文章: 诚聘英才','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('61','1385536865','1','添加文章: 注册新用户','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('62','1385536874','1','添加文章: 订购家具流程','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('63','1385536882','1','添加文章: 体验馆购买指导','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('64','1385536897','1','添加文章: 收货指南','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('65','1385536904','1','添加文章: 体验馆服务费','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('66','1385536912','1','添加文章: 物流配送','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('67','1385536923','1','添加文章: 45天无理由退换货','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('68','1385536930','1','添加文章: 如何申请退款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('69','1385536939','1','添加文章: 维修补件说明','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('70','1385536952','1','添加文章: 正品保证','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('71','1385536960','1','添加文章: 注册协议','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('72','1385536968','1','添加文章: 隐私保护','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('73','1385537035','1','删除友情链接: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('74','1385537037','1','删除友情链接: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('75','1385537039','1','删除友情链接: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('76','1385537051','1','添加友情链接: 床图片','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('77','1385537067','1','添加友情链接: 衣帽间装修效果图','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('78','1385537081','1','添加友情链接: 福州家居网','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('79','1385550814','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('80','1385551154','1','添加广告位置: 首页-顶部通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('81','1385551168','1','添加广告: 首页-顶部通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('82','1385555332','1','编辑商品分类: 床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('83','1385555342','1','编辑商品分类: 床头柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('84','1385555350','1','编辑商品分类: 床垫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('85','1385556356','1','编辑品牌管理: 凯撒豪庭','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('86','1385556363','1','添加品牌管理: 韩菲尔','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('87','1385556371','1','添加品牌管理: 蒂美悦','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('88','1385556380','1','添加品牌管理: 卡富亚','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('89','1385556396','1','编辑商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('90','1385556405','1','编辑商品: 欧式田园	粉红玫瑰立体雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('91','1385556412','1','编辑商品: 法式风格	1.8米皮拉扣床 PU发泡雕花床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('92','1385560003','1','添加广告位置: 首页-网站公告顶部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('93','1385560014','1','添加广告: 首页-网站公告顶部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('94','1385560394','1','添加文章分类: 网站公告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('95','1385560416','1','添加文章: 美乐乐第262家体验馆空降古都许','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('96','1385560443','1','添加文章: 中原大地再迎新馆！美乐乐第265','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('97','1385560453','1','添加文章: 第266家体验馆花落牡丹江！','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('98','1385561315','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('99','1385561485','1','添加广告位置: 首页-团购广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('100','1385561496','1','添加广告: 首页-团购广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('101','1385561641','1','添加团购商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('102','1385561665','1','添加团购商品: 地中海风格 美国进口白杨木双人床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('103','1385561867','1','编辑团购商品: 地中海风格 美国进口白杨木双人床[2]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('104','1385561884','1','编辑团购商品: 地中海风格 美国进口白杨木双人床[2]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('105','1385561907','1','编辑广告: 首页-团购广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('106','1385561938','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('107','1385562421','1','编辑商品: 现代风格	1.8米软床 头层牛皮床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('108','1385562438','1','编辑商品: 地中海风格 美国进口白杨木双人床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('109','1385562457','1','编辑商品: 法式风格	1.8米皮拉扣床 PU发泡雕花床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('110','1385562948','1','添加广告位置: 首页-新品广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('111','1385562976','1','添加广告: 首页-新品广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('112','1385562986','1','添加广告: 首页-新品广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('113','1385562997','1','添加广告: 首页-新品广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('114','1385563008','1','添加广告: 首页-新品广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('115','1385563020','1','添加广告: 首页-新品广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('116','1385563031','1','添加广告: 首页-新品广告6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('117','1385563042','1','添加广告: 首页-新品广告7','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('118','1385563061','1','添加广告: 首页-新品广告8','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('119','1385563775','1','添加广告位置: 首页-精品广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('120','1385563785','1','添加广告: 首页-精品广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('121','1385563796','1','添加广告: 首页-精品广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('122','1385563806','1','添加广告: 首页-精品广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('123','1385563817','1','添加广告: 首页-精品广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('124','1385563826','1','添加广告: 首页-精品广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('125','1385563836','1','添加广告: 首页-精品广告6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('126','1385563849','1','添加广告: 首页-精品广告7','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('127','1385563862','1','添加广告: 首页-精品广告8','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('128','1385565187','1','添加广告位置: 首页-分类ID1-左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('129','1385565216','1','添加广告: 首页-分类ID1-左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('130','1385565228','1','编辑广告位置: 202','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('131','1385565287','1','添加广告位置: 首页-分类ID1-中间广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('132','1385565301','1','添加广告: 首页-分类ID1-中间广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('133','1385565313','1','添加广告: 首页-分类ID1-中间广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('134','1385565325','1','添加广告: 首页-分类ID1-中间广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('135','1385565365','1','添加广告位置: 首页-分类ID1-右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('136','1385565388','1','添加广告: 首页-分类ID1-右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('137','1385565433','1','添加广告位置: 首页-分类ID1-底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('138','1385565513','1','添加广告: 首页-分类ID1-底部广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('139','1385565524','1','添加广告: 首页-分类ID1-底部广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('140','1385565535','1','添加广告: 首页-分类ID1-底部广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('141','1385565546','1','添加广告: 首页-分类ID1-底部广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('142','1385565566','1','添加广告: 首页-分类ID1-底部广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('143','1385567155','1','添加广告位置: 首页-热门品牌','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('144','1385567264','1','添加广告: 凯撒豪庭','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('145','1385567283','1','添加广告: 韩菲尔','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('146','1385567298','1','添加广告: 蒂美悦','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('147','1385567321','1','添加广告: 卡富亚','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('148','1385567338','1','添加广告: 青春城堡','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('149','1385567354','1','添加广告: 林中鹰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('150','1385567377','1','添加广告: TCL','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('151','1385567506','1','添加广告: 西门子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('152','1385567523','1','添加广告: 贝尔地板','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('153','1385567539','1','添加广告: 艾玛诗','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('154','1385567557','1','添加广告: 梦娜丝','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('155','1385567570','1','添加广告: 赛朵','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('156','1385567592','1','添加广告: 优曼家纺','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('157','1385567609','1','添加广告: 唯萨','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('158','1385567635','1','编辑广告位置: 首页-热门品牌','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('159','1385567647','1','编辑广告位置: 首页-热门品牌','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('160','1385619321','1','添加文章分类: 晒家达人','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('161','1385619408','1','添加文章分类: 家居资讯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('162','1385619509','1','添加文章: 【小苏的家】阳台改榻榻米，仅2.6w！五个月的装修长跑！','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('163','1385619526','1','添加文章: ❤95㎡简约婚房❤拱形吊顶+欧式家具（基装+主材+家具清单','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('164','1385619539','1','添加文章: 【主妇逆袭】简欧路上，7万123平装修中的零零碎碎（光荣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('165','1385619554','1','添加文章: 高端大气上档次的现代简约装修 美爆了！','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('166','1385619573','1','添加文章: 单身女汉子独爱kitty猫儿，单身族居家必备神器！','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('167','1385619598','1','添加文章: 19万精装广州135㎡普罗旺斯浪漫地中海三居','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('168','1385619618','1','添加文章: 7W换回一个美丽婚房，阳台变身休闲区，红红火火构建魅力','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('169','1385619637','1','添加文章: <76㎡小二居多图实拍细节>小清新文艺范儿，十足的地中','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('170','1385620453','1','添加文章: 75平现代简约风格 白+蓝色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('171','1385620467','1','添加文章: 85后艺术温馨家 简单中的清新','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('172','1385620493','1','添加文章: 35平超精致小窝 小空间大梦想','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('173','1385620506','1','添加文章: 网友详谈二手房翻修','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('174','1385620520','1','添加文章: 70平极致浪漫公寓 我的浪漫满','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('175','1385620533','1','添加文章: 7万装60平小婚房 简约温馨气','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('176','1385620546','1','添加文章: 8万半包装的95平温暖简约3居','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('177','1385620557','1','添加文章: 85后感谢设计师 89平浪漫清新','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('178','1385628126','1','添加广告位置: 分类频道页-分类ID4-导航促销广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('179','1385628160','1','添加广告: 新品家具，极速抢“鲜”','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('180','1385628177','1','添加广告: 特价商品，抄底特卖专场!','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('181','1385629079','1','添加广告位置: 分类频道页-分类ID4-轮播广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('182','1385629104','1','添加广告: 灯饰钜惠！我和美美的约定','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('183','1385629143','1','添加广告: 6周年卫浴特卖','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('184','1385629185','1','添加广告: 8大最受欢迎地板','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('185','1385629203','1','添加广告: 美乐乐6周年厨卫盛宴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('186','1385629219','1','添加广告: 全新美乐乐Iphone客户端！','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('187','1385629701','1','编辑广告位置: 分类频道页-分类ID1-轮播广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('188','1385637030','1','添加广告位置: 分类频道页-分类ID4-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('189','1385637044','1','添加广告: 分类频道页-分类ID4-楼层左侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('190','1385637055','1','添加广告: 分类频道页-分类ID4-楼层左侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('191','1385639838','1','添加广告位置: 分类频道页-分类ID4-楼层底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('192','1385639850','1','添加广告: 分类频道页-分类ID4-楼层底部广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('193','1385639861','1','添加广告: 分类频道页-分类ID4-楼层底部广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('194','1385639872','1','添加广告: 分类频道页-分类ID4-楼层底部广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('195','1385639882','1','添加广告: 分类频道页-分类ID4-楼层底部广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('196','1385641696','1','添加广告位置: 分类频道页-分类ID1-最新促销活动-图片','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('197','1385641707','1','添加广告: 分类频道页-分类ID1-最新促销活动-图片','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('198','1385641733','1','添加广告位置: 分类频道页-分类ID1-最新促销活动-文字','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('199','1385641751','1','添加广告: 现货清仓！半卖半送!','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('200','1385641773','1','添加广告: 终极好家具，进口全实木——低至6.8折，我和我的小','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('201','1385641793','1','添加广告: 打造儿童家居新天地','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('202','1385641809','1','添加广告: 美乐乐/SKG6周年狂欢购！','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('203','1385641823','1','添加广告: SKG引爆炸弹价，全场包邮！','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('204','1385652639','1','编辑商品分类: 卧室','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('205','1385652882','1','添加属性: 家装风格','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('206','1385652919','1','添加属性: 材质','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('207','1385652949','1','添加属性: 床类型','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('208','1385652969','1','编辑商品类型: 床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('209','1385652981','1','编辑商品: 美式古典	双面描金雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('210','1385653016','1','编辑商品分类: 卧室','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('211','1385656822','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('212','1385657269','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('213','1385711780','1','编辑商品: 美式古典	双面描金雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('214','1385713071','1','添加属性: 类&emsp;型','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('215','1385713389','1','添加属性: 内&emsp;径','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('216','1385713424','1','编辑商品: 美式古典	双面描金雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('217','1385714694','1','编辑属性: 内&emsp;径','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('218','1385714716','1','编辑商品: 美式古典	双面描金雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('219','1385731441','1','编辑商品: 美式古典	双面描金雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('220','1385731459','1','编辑商品: 美式古典	双面描金雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('221','1385739210','1','添加广告位置: 团购页-通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('222','1385739221','1','添加广告: 团购页-通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('223','1385739966','1','添加团购商品: 美式古典	双面描金雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('224','1385740002','1','添加团购商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('225','1385740037','1','添加团购商品: 欧式田园	粉红玫瑰立体雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('226','1385740067','1','添加团购商品: 地中海风格 美国进口白杨木双人床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('227','1385740570','1','编辑团购商品: 地中海风格 美国进口白杨木双人床[4]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('228','1385740693','1','编辑团购商品: 美式古典	双面描金雕花排骨架床[1]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('229','1385740711','1','编辑团购商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床[2]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('230','1385740788','1','编辑团购商品: 美式古典	双面描金雕花排骨架床[1]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('231','1385740802','1','编辑团购商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床[2]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('232','1385740813','1','编辑团购商品: 欧式田园	粉红玫瑰立体雕花排骨架床[3]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('233','1385740824','1','编辑团购商品: 地中海风格 美国进口白杨木双人床[4]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('234','1385741049','1','编辑团购商品: 美式古典	双面描金雕花排骨架床[1]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('235','1385741056','1','编辑团购商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床[2]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('236','1385741063','1','编辑团购商品: 欧式田园	粉红玫瑰立体雕花排骨架床[3]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('237','1385741071','1','编辑团购商品: 地中海风格 美国进口白杨木双人床[4]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('238','1385742925','1','编辑团购商品: 美式古典	双面描金雕花排骨架床[1]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('239','1385742933','1','编辑团购商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床[2]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('240','1385784016','1','安装支付方式: 支付宝','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('241','1385784024','1','安装支付方式: 银行汇款/转帐','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('242','1385784032','1','安装配送方式: 顺丰速运','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('243','1385784038','1','添加配送区域: 中国','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('244','1385807699','1','添加广告位置: 文章页-通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('245','1385807709','1','添加广告: 文章页-通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('246','1385812458','1','编辑广告位置: 文章页-通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('247','1385812494','1','添加广告位置: 文章页-右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('248','1385812505','1','添加广告: 文章页-右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('249','1385813282','1','编辑文章: 75平现代简约风格 白+蓝色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('250','1385817893','1','编辑文章: 75平现代简约风格 白+蓝色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('251','1385817936','1','编辑文章: 75平现代简约风格 白+蓝色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('252','1385819386','1','编辑文章: 8万半包装的95平温暖简约3居','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('253','1385819392','1','编辑文章: 85后感谢设计师 89平浪漫清新','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('254','1385821836','1','编辑品牌管理: 凯撒豪庭','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('255','1385821846','1','编辑品牌管理: 韩菲尔','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('256','1385821871','1','编辑品牌管理: 蒂美悦','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('257','1385821882','1','编辑品牌管理: 卡富亚','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('258','1385899236','1','添加文章分类: 秀家','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('259','1385901128','1','添加广告位置: 秀家-左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('260','1385901141','1','添加广告: 秀家-左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('261','1385901314','1','添加广告位置: 秀家-本月奖品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('262','1385901421','1','添加广告: PTC陶瓷暖风机 ¥369.00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('263','1385901457','1','添加广告: 爱丽丝床品四件套 ¥299.00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('264','1385901485','1','添加广告: 紫色水纹毛巾被 ¥99.00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('265','1385901528','1','添加广告: 圆形珍珠相框 ¥28.00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('266','1385901566','1','编辑广告位置: 秀家-本月奖品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('267','1385902046','1','添加广告位置: 秀家-热门分类','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('268','1385902100','1','删除广告位置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('269','1385902207','1','编辑商品分类: 书房','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('270','1385902217','1','编辑商品分类: 床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('271','1385902227','1','编辑商品分类: 餐桌','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('272','1385902570','1','添加文章: 秀家1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('273','1385902590','1','添加文章: 秀家2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('274','1385902601','1','添加文章: 秀家3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('275','1385902611','1','添加文章: 秀家4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('276','1385902622','1','添加文章: 秀家5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('277','1385902631','1','添加文章: 秀家6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('278','1385908434','1','编辑文章: 秀家6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('279','1385909803','1','编辑文章: 秀家6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('280','1385912669','1','添加广告位置: 特惠套装页-顶部广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('281','1385912682','1','添加广告: 特惠套装页-顶部广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('282','1385912703','1','添加广告位置: 特惠套装页-顶部广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('283','1385912717','1','添加广告: 特惠套装页-顶部广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('284','1385912756','1','编辑广告位置: 特惠套装页-顶部广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('285','1385912759','1','编辑广告位置: 特惠套装页-顶部广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('286','1385972127','1','添加广告位置: 首页-顶部促销广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('287','1385972141','1','添加广告: 首页-顶部促销广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('288','1385972168','1','编辑广告位置: 首页-顶部促销广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('289','1385973765','1','添加广告位置: 首页-导航菜单-分类ID1-推荐品牌','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('290','1385973845','1','添加广告: 首页-导航菜单-分类ID1-推荐品牌1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('291','1385973862','1','添加广告: 首页-导航菜单-分类ID1-推荐品牌2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('292','1385973873','1','添加广告: 首页-导航菜单-分类ID1-推荐品牌3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('293','1385973884','1','添加广告: 首页-导航菜单-分类ID1-推荐品牌4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('294','1385973893','1','编辑广告: 首页-导航菜单-分类ID1-推荐品牌1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('295','1385984993','1','编辑商品: 美式古典	双面描金雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('296','1385985008','1','编辑商品: 美式古典	双面描金雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('297','1385990354','1','添加广告位置: 商品页-顶部通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('298','1385990367','1','添加广告: 商品页-顶部通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('299','1385990419','1','编辑广告: 首页-顶部通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('300','1385990429','1','编辑广告位置: 商品页-顶部通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('301','1385992782','1','编辑操作日志: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('302','1385992859','1','编辑操作日志: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('303','1385993039','1','编辑用户评论: 回复','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('304','1385994692','1','编辑商品: 美式古典	双面描金雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('305','1385994842','1','编辑商品: 美式古典	双面描金雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('306','1385999070','1','编辑商品: 美式古典	双面描金雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('307','1385999545','1','编辑商品: 美式古典	双面描金雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('308','1385999988','1','编辑商品: 美式古典	双面描金雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('309','1386057078','1','编辑操作日志: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('310','1386058299','1','还原数据库备份: 备份时间2013-12-03 08:09:29','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('311','1386059295','1','添加超值礼包: 客厅-功能沙发客厅5件套（1+2+3+1茶几+1电视柜）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('312','1386062940','1','添加超值礼包: 餐厅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('313','1386062970','1','编辑超值礼包: 餐厅-6件套（1桌+4椅+1吊灯）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('314','1386063396','1','添加超值礼包: 卧房-3套装（1.5米床+1床头柜+1吸顶灯）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('315','1386063739','1','添加超值礼包: 客厅-3套装（1转角沙发+1吸顶灯+1茶几）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('316','1386066235','1','添加超值礼包: 客厅-时尚经典 带储物功能真皮转角沙发(1+3+左贵妃)','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('317','1386074915','1','编辑商品: 美式古典	双面描金雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('318','1386078563','1','编辑商品: 欧式田园	粉红玫瑰立体雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('319','1386081282','1','编辑广告位置: 首页-分类ID1-左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('320','1386081294','1','添加广告位置: 首页-分类ID2-左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('321','1386081300','1','编辑广告位置: 首页-分类ID1-中间广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('322','1386081308','1','添加广告位置: 首页-分类ID2-中间广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('323','1386081314','1','编辑广告位置: 首页-分类ID1-右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('324','1386081322','1','添加广告位置: 首页-分类ID2-右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('325','1386081329','1','编辑广告位置: 首页-分类ID1-底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('326','1386081341','1','添加广告位置: 首页-分类ID2-底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('327','1386081456','1','编辑广告位置: 202','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('328','1386081459','1','编辑广告位置: 330','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('329','1386081467','1','编辑广告位置: 721','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('330','1386081470','1','编辑广告位置: 330','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('331','1386081482','1','编辑广告位置: 202','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('332','1386081485','1','编辑广告位置: 330','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('333','1386081493','1','编辑广告位置: 202','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('334','1386081496','1','编辑广告位置: 240','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('335','1386081502','1','编辑广告位置: 首页-分类ID2-左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('336','1386081510','1','添加广告位置: 首页-分类ID3-左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('337','1386081516','1','编辑广告位置: 首页-分类ID2-中间广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('338','1386081524','1','添加广告位置: 首页-分类ID3-中间广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('339','1386081530','1','编辑广告位置: 首页-分类ID2-右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('340','1386081538','1','添加广告位置: 首页-分类ID3-右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('341','1386081546','1','编辑广告位置: 首页-分类ID2-底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('342','1386081556','1','添加广告位置: 首页-分类ID3-底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('343','1386081569','1','编辑广告位置: 202','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('344','1386081572','1','编辑广告位置: 330','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('345','1386081578','1','编辑广告位置: 330','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('346','1386081579','1','编辑广告位置: 330','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('347','1386081580','1','编辑广告位置: 330','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('348','1386081584','1','编辑广告位置: 240','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('349','1386081587','1','编辑广告位置: 240','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('350','1386081595','1','编辑广告位置: 721','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('351','1386081596','1','编辑广告位置: 721','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('352','1386081599','1','编辑广告位置: 202','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('353','1386081601','1','编辑广告位置: 202','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('354','1386081602','1','编辑广告位置: 202','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('355','1386081712','1','编辑广告位置: 首页-分类ID2-左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('356','1386081752','1','添加广告: 首页-分类ID2-左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('357','1386081757','1','编辑广告位置: 首页-分类ID2-中间广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('358','1386081778','1','添加广告: 首页-分类ID2-中间广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('359','1386081791','1','添加广告: 首页-分类ID2-中间广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('360','1386081812','1','添加广告: 首页-分类ID2-中间广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('361','1386081820','1','编辑广告位置: 首页-分类ID2-右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('362','1386081835','1','添加广告: 首页-分类ID2-右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('363','1386081945','1','编辑广告位置: 首页-分类ID2-底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('364','1386081958','1','添加广告: 首页-分类ID2-底部广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('365','1386081970','1','添加广告: 首页-分类ID2-底部广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('366','1386081981','1','添加广告: 首页-分类ID2-底部广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('367','1386081994','1','添加广告: 首页-分类ID2-底部广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('368','1386082009','1','添加广告: 首页-分类ID2-底部广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('369','1386082095','1','编辑广告位置: 首页-分类ID3-左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('370','1386082116','1','添加广告: 首页-分类ID3-左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('371','1386082124','1','编辑广告位置: 首页-分类ID3-中间广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('372','1386082151','1','添加广告: 首页-分类ID3-中间广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('373','1386082169','1','添加广告: 首页-分类ID3-中间广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('374','1386082196','1','添加广告: 首页-分类ID3-中间广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('375','1386082202','1','编辑广告位置: 首页-分类ID3-右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('376','1386082215','1','添加广告: 首页-分类ID3-右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('377','1386082237','1','编辑广告位置: 首页-分类ID3-底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('378','1386082271','1','编辑广告位置: 首页-分类ID3-底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('379','1386082288','1','添加广告: 首页-分类ID3-底部广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('380','1386082302','1','添加广告: 首页-分类ID3-底部广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('381','1386082324','1','添加广告: 首页-分类ID3-底部广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('382','1386082337','1','添加广告: 首页-分类ID3-底部广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('383','1386082351','1','添加广告: 首页-分类ID3-底部广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('384','1386083114','1','添加商品: 时尚经典 带储物功能真皮转角沙发(1+3+左贵妃)','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('385','1386083156','1','添加商品: 奢华霸气 进口全真皮沙发套装（1+2+3）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('386','1386083216','1','添加商品: 清新雅致 可拆装沙发套装（1+2+3）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('387','1386083286','1','添加商品: 温柔海风 唯美布艺左转角沙发（1+3+左贵妃）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('388','1386083439','1','添加商品: 橡胶木实木餐桌椅套装（七件套）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('389','1386083510','1','添加商品: 餐厅6件套（1餐桌+4餐椅+1餐边柜）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('390','1386083574','1','添加商品: 餐厅5件套装（1.5餐台+4无扶手餐椅）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('391','1386083649','1','添加商品: 美式田园	实木餐厅套装（1桌+4椅）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('392','1386084128','1','编辑广告位置: 分类频道页-分类ID4-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('393','1386084139','1','添加广告位置: 分类频道页-分类ID5-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('394','1386084220','1','编辑广告位置: 分类频道页-分类ID4-楼层底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('395','1386084227','1','添加广告位置: 分类频道页-分类ID5-楼层底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('396','1386084286','1','编辑广告位置: 200','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('397','1386084289','1','编辑广告位置: 302','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('398','1386084298','1','编辑广告位置: 220','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('399','1386084301','1','编辑广告位置: 180','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('400','1386084304','1','编辑广告位置: 分类频道页-分类ID5-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('401','1386084312','1','添加广告位置: 分类频道页-分类ID6-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('402','1386084326','1','编辑广告位置: 分类频道页-分类ID5-楼层底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('403','1386084332','1','添加广告位置: 分类频道页-分类ID6-楼层底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('404','1386084338','1','编辑广告位置: 200','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('405','1386084340','1','编辑广告位置: 200','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('406','1386084343','1','编辑广告位置: 302','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('407','1386084344','1','编辑广告位置: 302','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('408','1386084346','1','编辑广告位置: 220','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('409','1386084347','1','编辑广告位置: 220','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('410','1386084349','1','编辑广告位置: 302','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('411','1386084351','1','编辑广告位置: 180','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('412','1386084354','1','编辑广告位置: 180','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('413','1386084572','1','编辑广告位置: 分类频道页-分类ID5-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('414','1386084593','1','添加广告: 分类频道页-分类ID5-楼层左侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('415','1386084611','1','添加广告: 分类频道页-分类ID5-楼层左侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('416','1386084739','1','编辑广告位置: 分类频道页-分类ID5-楼层底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('417','1386084754','1','添加广告: 分类频道页-分类ID5-楼层底部广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('418','1386084765','1','添加广告: 分类频道页-分类ID5-楼层底部广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('419','1386084776','1','添加广告: 分类频道页-分类ID5-楼层底部广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('420','1386084793','1','添加广告: 分类频道页-分类ID5-楼层底部广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('421','1386084866','1','编辑广告位置: 分类频道页-分类ID6-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('422','1386084878','1','添加广告: 分类频道页-分类ID6-楼层左侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('423','1386084892','1','添加广告: 分类频道页-分类ID6-楼层左侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('424','1386084930','1','编辑广告位置: 分类频道页-分类ID6-楼层底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('425','1386084959','1','添加广告: 分类频道页-分类ID6-楼层底部广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('426','1386084970','1','添加广告: 分类频道页-分类ID6-楼层底部广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('427','1386084981','1','添加广告: 分类频道页-分类ID6-楼层底部广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('428','1386085002','1','添加广告: 分类频道页-分类ID6-楼层底部广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('429','1386085197','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('430','1386086585','1','编辑操作日志: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('431','1386086646','1','编辑商品: 美式田园	实木餐厅套装（1桌+4椅）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('432','1386086701','1','编辑商品: 美式田园	实木餐厅套装（1桌+4椅）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('433','1386086714','1','编辑商品: 美式田园	实木餐厅套装（1桌+4椅）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('434','1386087156','1','添加超值礼包: 书房-家具3件套装-835','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('435','1386087263','1','添加超值礼包: 书房-家具3套装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('436','1386087336','1','编辑商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('437','1386087353','1','编辑商品: 欧式田园	粉红玫瑰立体雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('438','1386087376','1','编辑商品: 法式风格	1.8米皮拉扣床 PU发泡雕花床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('439','1386087432','1','编辑商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('440','1386087443','1','编辑商品: 欧式田园	粉红玫瑰立体雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('441','1386087454','1','编辑商品: 法式风格	1.8米皮拉扣床 PU发泡雕花床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('442','1386145369','1','编辑广告位置: 分类频道页-分类ID1-轮播广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('443','1386145430','1','添加广告位置: 顶级分类页-分类ID1-轮播广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('444','1386145476','1','添加广告: 到店体验0元送豪礼！','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('445','1386145499','1','添加广告: 免费设计，家电轻松得！','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('446','1386145520','1','添加广告: 荧屏家具大咖秀','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('447','1386145536','1','添加广告: 吃货的三大境界','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('448','1386145557','1','添加广告: 打造儿童家居天地','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('449','1386146325','1','添加广告位置: 顶级分类页-分类ID1-品牌广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('450','1386146346','1','添加广告: 顶级分类页-分类ID1-品牌广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('451','1386146357','1','添加广告: 顶级分类页-分类ID1-品牌广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('452','1386146368','1','添加广告: 顶级分类页-分类ID1-品牌广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('453','1386146381','1','添加广告: 顶级分类页-分类ID1-品牌广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('454','1386146401','1','添加广告: 顶级分类页-分类ID1-品牌广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('455','1386146639','1','编辑广告: 顶级分类页-分类ID1-品牌广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('456','1386146757','1','编辑广告: 顶级分类页-分类ID1-品牌广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('457','1386146767','1','编辑广告: 顶级分类页-分类ID1-品牌广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('458','1386146779','1','编辑广告: 顶级分类页-分类ID1-品牌广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('459','1386146790','1','编辑广告: 顶级分类页-分类ID1-品牌广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('460','1386146801','1','编辑广告: 顶级分类页-分类ID1-品牌广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('461','1386146811','1','编辑广告: 顶级分类页-分类ID1-品牌广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('462','1386147795','1','添加广告位置: 顶级分类页-分类ID1-新品广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('463','1386147814','1','添加广告: 顶级分类页-分类ID1-新品广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('464','1386147829','1','添加广告: 顶级分类页-分类ID1-新品广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('465','1386147840','1','添加广告: 顶级分类页-分类ID1-新品广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('466','1386147851','1','添加广告: 顶级分类页-分类ID1-新品广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('467','1386147864','1','添加广告: 顶级分类页-分类ID1-新品广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('468','1386148449','1','添加广告位置: 顶级分类页-分类ID1-热卖排行','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('469','1386148468','1','添加广告: 顶级分类页-分类ID1-热卖排行1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('470','1386148480','1','添加广告: 顶级分类页-分类ID1-热卖排行2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('471','1386148491','1','添加广告: 顶级分类页-分类ID1-热卖排行3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('472','1386149378','1','添加广告位置: 顶级分类页-分类ID4-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('473','1386149390','1','添加广告: 顶级分类页-分类ID4-楼层左侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('474','1386149401','1','添加广告: 顶级分类页-分类ID4-楼层左侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('475','1386149415','1','添加广告: 顶级分类页-分类ID4-楼层左侧广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('476','1386149446','1','添加广告位置: 顶级分类页-分类ID4-楼层右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('477','1386149462','1','添加广告: 顶级分类页-分类ID4-楼层右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('478','1386153245','1','编辑广告位置: 顶级分类页-分类ID4-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('479','1386153255','1','添加广告位置: 顶级分类页-分类ID5-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('480','1386153261','1','编辑广告位置: 顶级分类页-分类ID4-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('481','1386153264','1','编辑广告位置: 顶级分类页-分类ID4-楼层右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('482','1386153270','1','添加广告位置: 顶级分类页-分类ID5-楼层右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('483','1386153275','1','编辑广告位置: 顶级分类页-分类ID5-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('484','1386153288','1','添加广告位置: 顶级分类页-分类ID6-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('485','1386153298','1','编辑广告位置: 顶级分类页-分类ID5-楼层右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('486','1386153306','1','添加广告位置: 顶级分类页-分类ID6-楼层右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('487','1386153343','1','编辑广告位置: 700','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('488','1386153345','1','编辑广告位置: 700','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('489','1386153347','1','编辑广告位置: 700','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('490','1386153349','1','编辑广告位置: 279','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('491','1386153351','1','编辑广告位置: 279','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('492','1386153352','1','编辑广告位置: 279','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('493','1386153435','1','编辑广告位置: 342','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('494','1386153436','1','编辑广告位置: 342','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('495','1386153438','1','编辑广告位置: 342','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('496','1386153440','1','编辑广告位置: 342','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('497','1386153442','1','编辑广告位置: 342','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('498','1386153455','1','编辑广告位置: 顶级分类页-分类ID5-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('499','1386153489','1','编辑广告位置: 顶级分类页-分类ID5-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('500','1386153503','1','添加广告: 顶级分类页-分类ID5-楼层左侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('501','1386153520','1','添加广告: 顶级分类页-分类ID5-楼层左侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('502','1386153532','1','添加广告: 顶级分类页-分类ID5-楼层左侧广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('503','1386153541','1','编辑广告位置: 顶级分类页-分类ID5-楼层右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('504','1386153556','1','添加广告: 顶级分类页-分类ID5-楼层右侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('505','1386153715','1','编辑广告位置: 顶级分类页-分类ID6-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('506','1386153727','1','添加广告: 顶级分类页-分类ID6-楼层左侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('507','1386153738','1','添加广告: 顶级分类页-分类ID6-楼层左侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('508','1386153752','1','添加广告: 顶级分类页-分类ID6-楼层左侧广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('509','1386153758','1','编辑广告位置: 顶级分类页-分类ID6-楼层右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('510','1386153777','1','添加广告: 顶级分类页-分类ID6-楼层右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('511','1386153954','1','添加广告位置: 顶级分类页-分类ID1-最新促销活动-图片','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('512','1386153977','1','添加广告位置: 顶级分类页-分类ID1-最新促销活动-文字','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('513','1386153985','1','编辑广告位置: 顶级分类页-分类ID1-最新促销活动-图片','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('514','1386154016','1','添加广告: 顶级分类页-分类ID1-最新促销活动-图片','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('515','1386154077','1','添加广告: 打造儿童天地','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('516','1386154109','1','添加广告: 现货清仓/半卖半送','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('517','1386154129','1','添加广告: 终极好家具，进口全实木——低至6.8折，我和我的小伙伴们都惊呆了-活动-美乐乐家具网','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('518','1386154153','1','添加广告: 美乐乐/SKG6周年狂欢购','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('519','1386154174','1','添加广告: SKG引爆炸弹价，全场包邮','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('520','1386154888','1','添加广告位置: 顶级分类页-导航促销广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('521','1386155047','1','编辑广告位置: 首页-导航菜单-促销活动','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('522','1386155099','1','删除广告: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('523','1386155117','1','删除广告: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('524','1386155146','1','删除广告位置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('525','1386155192','1','添加广告: 新品家具，极速抢“鲜”','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('526','1386155219','1','添加广告: 特价商品，抄底特卖专场!','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('527','1386155240','1','添加广告: 热卖家具，火爆疯狂抢购!','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('528','1386155473','1','编辑广告: 首页-导航菜单-分类ID1-推荐品牌1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('529','1386155499','1','编辑广告: 首页-导航菜单-分类ID1-推荐品牌2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('530','1386155515','1','编辑广告: 首页-导航菜单-分类ID1-推荐品牌3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('531','1386155530','1','编辑广告: 首页-导航菜单-分类ID1-推荐品牌4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('532','1386157118','1','编辑广告位置: 分类频道页-分类ID2-轮播广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('533','1386157121','1','编辑广告位置: 分类频道页-分类ID2-最新促销活动-图片','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('534','1386157123','1','编辑广告位置: 分类频道页-分类ID2-最新促销活动-文字','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('535','1386157438','1','添加商品: 分段式吸顶灯 水晶玻璃灯 客厅吸顶灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('536','1386157479','1','添加商品: 方形木艺灯罩吸顶灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('537','1386157520','1','添加商品: LED护眼吸顶灯 高抗冲亚克力 客厅吸顶灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('538','1386157585','1','添加商品: 分段式吸顶灯 磨砂白玉玻璃 客厅餐厅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('539','1386157690','1','添加商品: 不锈钢双水槽 洗菜盆水槽套装76*40CM','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('540','1386157724','1','添加商品: SUS304水槽带水龙头套装 带混水龙头双水槽套装72*38CM','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('541','1386157760','1','添加商品: 全铜可360度旋转厨房水龙头 单把单孔冷热水龙头','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('542','1386157797','1','添加商品: 厨房不锈钢双水槽套装76*40CM','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('543','1386157899','1','添加商品: 橡木爵士白雕刻卫浴柜 方形双人浴室柜 欧式落地浴室柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('544','1386157931','1','添加商品: 双人多功能按摩浴缸 亚克力浴缸 双裙边（左裙）浴缸','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('545','1386157973','1','添加商品: 	虹吸式坐厕 连体双档座便器 节水马桶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('546','1386158012','1','添加商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('547','1386158167','1','编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('548','1386158183','1','编辑商品: 全铜可360度旋转厨房水龙头 单把单孔冷热水龙头','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('549','1386158258','1','编辑广告位置: 分类频道页-分类ID11-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('550','1386158260','1','编辑广告位置: 分类频道页-分类ID11-楼层底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('551','1386158266','1','编辑广告位置: 分类频道页-分类ID12-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('552','1386158269','1','编辑广告位置: 分类频道页-分类ID12-楼层底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('553','1386158271','1','编辑广告位置: 分类频道页-分类ID13-楼层左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('554','1386158273','1','编辑广告位置: 分类频道页-分类ID13-楼层底部广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('555','1386170003','1','安装配送方式: 申通快递','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('556','1386170009','1','添加配送区域: 中国','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('557','1386239998','1','还原数据库备份: 备份时间2013-09-08 04:45:52','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('558','1386240009','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('559','1386240158','1','编辑广告位置: 触屏首页-分类ID2-图片广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('560','1386240161','1','编辑广告位置: 触屏首页-分类ID3-图片广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('561','1386240177','1','编辑商品分类: 家具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('562','1386240185','1','编辑商品分类: 建材','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('563','1386240333','1','编辑商品分类: 家居家饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('564','1386240370','1','编辑商品分类: 餐椅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('565','1386240384','1','编辑商品分类: 五金电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('566','1386240391','1','编辑商品分类: 灯饰照明','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('567','1386240402','1','编辑商品分类: 卫浴用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('568','1386240408','1','编辑商品分类: 五金电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('569','1386240413','1','编辑商品分类: 厨房用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('570','1386240427','1','编辑商品分类: 厨房餐饮','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('571','1386240434','1','编辑商品分类: 居家日用','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('572','1386240440','1','编辑商品分类: 生活电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('573','1386240518','1','编辑广告: 建材城','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('574','1386240544','1','编辑广告: 家饰城','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('575','1386316258','1','还原数据库备份: 备份时间2013-12-05 10:49:46','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('576','1386318747','1','添加订单: 2013120661257','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('577','1386319557','1','添加供货商管理: 供货商名称','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('578','1386319626','1','删除供货商管理: 供货商名称','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('579','1386319697','1','添加供货商管理: 北京十里河体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('580','1386320364','1','编辑供货商管理: 北京十里河体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('581','1386320379','1','编辑供货商管理: 北京十里河体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('582','1386320388','1','编辑供货商管理: 北京十里河体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('583','1386320450','1','编辑供货商管理: 北京十里河体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('584','1386321321','1','编辑供货商管理: 北京十里河体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('585','1386321404','1','编辑供货商管理: 北京十里河体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('586','1386322148','1','编辑供货商管理: 北京十里河体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('587','1386322341','1','编辑供货商管理: 北京十里河体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('588','1386322504','1','编辑供货商管理: 北京十里河体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('589','1386322526','1','编辑供货商管理: 北京十里河体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('590','1386322535','1','编辑供货商管理: 北京十里河体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('591','1386322573','1','编辑供货商管理: 北京十里河体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('592','1386322579','1','编辑供货商管理: 北京十里河体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('593','1386322734','1','添加供货商管理: 北京丰台区体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('594','1386322747','1','编辑供货商管理: 北京丰台区体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('595','1386323048','1','编辑供货商管理: 北京十里河体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('596','1386323054','1','编辑供货商管理: 北京十里河体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('597','1386323073','1','编辑供货商管理: 北京丰台区体验馆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('598','1386325342','1','编辑地区: 安庆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('599','1386328906','1','编辑: 甘肃','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('600','1386328918','1','编辑: 甘肃1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('601','1386329421','1','编辑: 安徽','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('602','1386329462','1','编辑: 安徽','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('603','1386329756','1','编辑: 安徽','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('604','1386329768','1','编辑: 北京','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('605','1386329782','1','编辑: 北京','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('606','1386329792','1','编辑: 北京','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('607','1386330035','1','编辑: 中国','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('608','1386330047','1','编辑: 中国','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('609','1386330186','1','编辑: 中国','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('610','1386330199','1','编辑: 中国','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('611','1386330263','1','编辑: 中国','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('612','1386330282','1','编辑: 北京','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('613','1386330294','1','编辑: 北京','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('614','1386330323','1','编辑: 广州','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('615','1386330344','1','编辑: 深圳','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('616','1386330360','1','编辑: 珠海','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('617','1386330373','1','编辑: 中山','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('618','1386330389','1','编辑: 东莞','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('619','1386330398','1','编辑: 惠州','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('620','1386330407','1','编辑: 茂名','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('621','1386330415','1','编辑: 汕头','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('622','1386330423','1','编辑: 阳江','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('623','1386330431','1','编辑: 肇庆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('624','1386330459','1','编辑: 佛山','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('625','1386330468','1','编辑: 江门','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('626','1386330481','1','编辑: 梅州','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('627','1386330487','1','编辑: 汕尾','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('628','1386330494','1','编辑: 云浮','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('629','1386330506','1','编辑: 潮州','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('630','1386330513','1','编辑: 河源','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('631','1386330519','1','编辑: 揭阳','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('632','1386330525','1','编辑: 清远','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('633','1386330533','1','编辑: 韶关','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('634','1386330540','1','编辑: 湛江','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('635','1386410712','1','添加广告位置: 体验馆-顶部通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('636','1386410723','1','编辑广告位置: 体验馆-顶部通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('637','1386410741','1','添加广告: 体验馆-顶部通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('638','1386410766','1','编辑广告位置: 体验馆-顶部通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('639','1386489103','1','编辑权限管理: admin','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('640','1386489592','1','添加广告位置: 体验馆-ID2-flash广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('641','1386489609','1','添加广告: 体验馆-ID2-flash广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('642','1386489645','1','添加广告: 体验馆-ID2-flash广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('643','1386489655','1','添加广告: 体验馆-ID2-flash广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('644','1386489673','1','添加广告: 体验馆-ID2-flash广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('645','1386491165','1','编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('646','1386491187','1','编辑商品: 	虹吸式坐厕 连体双档座便器 节水马桶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('647','1386491195','1','编辑商品: 双人多功能按摩浴缸 亚克力浴缸 双裙边（左裙）浴缸','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('648','1386492436','1','编辑商品: 双人多功能按摩浴缸 亚克力浴缸 双裙边（左裙）浴缸','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('649','1386492443','1','编辑商品: 	虹吸式坐厕 连体双档座便器 节水马桶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('650','1386492477','1','编辑商品: SUS304水槽带水龙头套装 带混水龙头双水槽套装72*38CM','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('651','1386492488','1','编辑商品: 方形木艺灯罩吸顶灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('652','1386492528','1','编辑商品: SUS304水槽带水龙头套装 带混水龙头双水槽套装72*38CM','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('653','1386492544','1','编辑商品: 方形木艺灯罩吸顶灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('654','1386733294','1','添加广告位置: 搜索页-通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('655','1386733341','1','添加广告: 搜索页-通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('656','1386733388','1','添加广告位置: 搜索页-左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('657','1386733404','1','添加广告: 搜索页-左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('658','1386733492','1','添加广告位置: 搜索页-flash广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('659','1386733512','1','添加广告: 搜索页-flash广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('660','1386733523','1','添加广告: 搜索页-flash广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('661','1386733534','1','添加广告: 搜索页-flash广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('662','1386733546','1','添加广告: 搜索页-flash广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('663','1386733573','1','编辑广告位置: 搜索页-通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('664','1386733580','1','编辑广告位置: 搜索页-左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('665','1386733587','1','编辑广告位置: 搜索页-通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('666','1386733592','1','编辑广告位置: 搜索页-flash广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('667','1386748497','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('668','1386748511','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('669','1386751607','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('670','1386751858','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('671','1387106353','1','添加广告位置: 专题页-活动广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('672','1387106370','1','添加广告: 专题页-活动广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('673','1387106382','1','添加广告: 专题页-活动广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('674','1387106395','1','添加广告: 专题页-活动广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('675','1387106409','1','添加广告: 专题页-活动广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('676','1387106441','1','编辑广告位置: 专题页-活动广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('677','1387107770','1','编辑广告: 首页-顶部通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('678','1387107806','1','编辑广告: 首页-顶部通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('679','1387107833','1','编辑广告: 首页-顶部通栏广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('680','1387109722','1','添加属性: 配送区域','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('681','1387196672','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('682','1387198128','1','编辑配送区域: 北京','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('683','1387198155','1','编辑配送区域: 北京','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('684','1387198175','1','添加配送区域: 广东','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('685','1387198186','1','编辑配送区域: 北京','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('686','1387198194','1','删除配送区域: 北京','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('687','1387198200','1','添加配送区域: 北京','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('688','1387198228','1','添加配送区域: 广西','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('689','1387198307','1','编辑配送区域: 广东','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('690','1387198317','1','编辑配送区域: 广西','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('691','1387198575','1','编辑配送区域: 广东','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('692','1387198612','1','编辑配送区域: 北京','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('693','1387200465','1','删除配送区域: 中国','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('694','1387200475','1','添加配送区域: 北京','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('695','1387369060','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('696','1387369589','1','编辑: 北京','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('697','1387369651','1','编辑: 广州','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('698','1387369685','1','编辑: 深圳','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('699','1387380803','1','编辑广告位置: 980','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('700','1387380806','1','编辑广告位置: 287','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('701','1387380814','1','编辑广告: 秀家-左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('702','1387775292','1','添加红包类型: 注册送红包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('703','1388063098','1','编辑商品: 美式古典	双面描金雕花排骨架床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('704','1388141296','1','添加积分可兑换的商品: 1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('705','1388141303','1','添加积分可兑换的商品: 9','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('706','1388143309','1','添加积分可兑换的商品: 15','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('707','1388152348','1','编辑订单: 2013122733017,订单总金额由 1011.00 变为 1003.00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('708','1388152368','1','编辑订单: 2013122733017,订单总金额由 1003.00 变为 1011.00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('709','1388152402','1','编辑订单: 2013122733017,订单总金额由 1011.00 变为 911.00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('710','1388152444','1','编辑订单: 2013122733017,订单总金额由 911.00 变为 811.00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('711','1388152579','1','编辑订单: 2013122722923,订单总金额由 3585.00 变为 3485.00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('712','1388155320','1','编辑订单: 2013122793991,订单总金额由 4024.00 变为 3924.00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('713','1388156267','1','编辑订单: 2013122758756,订单总金额由 2815.00 变为 2715.00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('714','1388156592','1','编辑订单: 2013122749611,订单总金额由 1515.00 变为 1415.00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('715','1388157318','1','编辑订单: 2013122731476,订单总金额由 1001.00 变为 901.00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('716','1388329431','1','添加会员等级: VIP','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('717','1388329447','1','添加会员等级: VVIP','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('718','1388329523','1','编辑会员账号: test123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('719','1388330059','1','编辑团购商品: 美式古典	双面描金雕花排骨架床[1]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('720','1388331607','1','删除会员账号: test123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('721','1388331628','1','删除广告: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('722','1388400900','1','编辑文章: 秀家6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('723','1388400929','1','编辑文章: 秀家6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('724','1388400972','1','编辑文章: 秀家6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('725','1388401020','1','编辑文章: 秀家6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('726','1388401041','1','编辑文章: 秀家6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('727','1388406606','1','删除文章: 强烈谴责无耻同行www.ecshop.name骗子，专门拿淘宝上低价的模板高价出售！','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('728','1388416040','1','编辑商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('729','1388416235','1','编辑商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('730','1388476746','1','删除操作日志: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('731','1388476771','1','删除文章: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('732','1388476771','1','删除文章: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('733','1388476771','1','删除文章: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('734','1388476771','1','删除文章: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('735','1388476771','1','删除文章: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('736','1388476771','1','删除文章: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('737','1388477105','1','删除文章: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('738','1388477105','1','删除文章: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('739','1388477105','1','删除文章: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('740','1388477105','1','删除文章: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('741','1388477105','1','删除文章: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('742','1388477105','1','删除文章: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('743','1388477388','1','编辑操作日志: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('744','1388480210','1','编辑操作日志: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('745','1388480302','1','编辑操作日志: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('746','1388732054','1','编辑广告位置: 分类频道页-分类ID2-轮播广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('747','1388896572','1','编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('748','1388896635','1','编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('749','1388896856','1','编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('750','1388896864','1','编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('751','1389057394','1','还原数据库备份: 备份时间2014-01-07 01:15:42','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('752','1390395541','1','还原数据库备份: 备份时间2014-01-07 01:20:31','103.24.1.155');");
E_D("replace into `ecs_admin_log` values('753','1394608143','1','编辑权限管理: admin','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('754','1402580058','1','编辑商店设置: ','49.89.13.154');");
E_D("replace into `ecs_admin_log` values('755','1402580261','1','编辑友情链接: 其才网络','49.89.13.154');");
E_D("replace into `ecs_admin_log` values('756','1402580289','1','编辑友情链接: 美乐乐源码','49.89.13.154');");
E_D("replace into `ecs_admin_log` values('757','1402580344','1','编辑友情链接: 其才网络淘宝店','49.89.13.154');");
E_D("replace into `ecs_admin_log` values('758','1402581102','1','编辑商店设置: ','49.89.13.154');");
E_D("replace into `ecs_admin_log` values('759','1402587364','1','编辑权限管理: admin','49.89.13.154');");
E_D("replace into `ecs_admin_log` values('760','1402645542','1','添加超值礼包: 测试测试','114.239.131.90');");
E_D("replace into `ecs_admin_log` values('761','1402647372','1','还原数据库备份: 备份时间2014-06-13 08:15:44','114.239.131.90');");
E_D("replace into `ecs_admin_log` values('762','1402650525','1','编辑超值礼包: 餐厅测试测试','114.239.131.90');");
E_D("replace into `ecs_admin_log` values('763','1402715604','1','编辑配送区域: 北京','114.239.131.90');");
E_D("replace into `ecs_admin_log` values('764','1402715667','1','编辑配送区域: 广西','114.239.131.90');");
E_D("replace into `ecs_admin_log` values('765','1402715690','1','编辑配送区域: 广西','114.239.131.90');");
E_D("replace into `ecs_admin_log` values('766','1402715743','1','添加配送区域: 江苏','114.239.131.90');");
E_D("replace into `ecs_admin_log` values('767','1402716044','1','编辑配送区域: 北京','114.239.131.90');");
E_D("replace into `ecs_admin_log` values('768','1402716160','1','编辑配送区域: 全国地区','114.239.131.90');");
E_D("replace into `ecs_admin_log` values('769','1402716248','1','删除配送区域: 广西','114.239.131.90');");
E_D("replace into `ecs_admin_log` values('770','1402716272','1','安装配送方式: 运费到付','114.239.131.90');");
E_D("replace into `ecs_admin_log` values('771','1402716312','1','添加配送区域: 全国地区','114.239.131.90');");
E_D("replace into `ecs_admin_log` values('772','1402716340','1','删除配送区域: 北京','114.239.131.90');");
E_D("replace into `ecs_admin_log` values('773','1402716556','1','添加配送区域: 北京','114.239.131.90');");
E_D("replace into `ecs_admin_log` values('774','1402716645','1','编辑配送区域: 申通快递','114.239.131.90');");
E_D("replace into `ecs_admin_log` values('775','1403149026','1','编辑商品分类: 建材城','114.239.192.4');");
E_D("replace into `ecs_admin_log` values('776','1403151014','1','编辑供货商管理: 北京丰台区体验馆','114.239.192.4');");
E_D("replace into `ecs_admin_log` values('777','1403151824','1','添加广告位置: 体验馆-ID3-flash广告','114.239.192.4');");
E_D("replace into `ecs_admin_log` values('778','1403152278','1','添加广告: 体验馆-ID3-flash广告2','114.239.192.4');");
E_D("replace into `ecs_admin_log` values('779','1403678738','1','编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','49.89.124.133');");
E_D("replace into `ecs_admin_log` values('780','1403678793','1','编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','49.89.124.133');");
E_D("replace into `ecs_admin_log` values('781','1403678842','1','编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','49.89.124.133');");
E_D("replace into `ecs_admin_log` values('782','1403678903','1','添加属性: 颜色','49.89.124.133');");
E_D("replace into `ecs_admin_log` values('783','1403678960','1','编辑属性: 颜色','49.89.124.133');");
E_D("replace into `ecs_admin_log` values('784','1403679038','1','编辑属性: 颜色','49.89.124.133');");
E_D("replace into `ecs_admin_log` values('785','1403679111','1','编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','49.89.124.133');");
E_D("replace into `ecs_admin_log` values('786','1403679244','1','编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','49.89.124.133');");
E_D("replace into `ecs_admin_log` values('787','1403950299','1','编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','114.239.213.186');");
E_D("replace into `ecs_admin_log` values('788','1404359678','1','添加商品贺卡: 乔迁贺卡','49.89.125.179');");
E_D("replace into `ecs_admin_log` values('789','1404359914','1','编辑商品贺卡: 乔迁贺卡','49.89.125.179');");
E_D("replace into `ecs_admin_log` values('790','1404359989','1','添加商品贺卡: 新房贺卡','49.89.125.179');");
E_D("replace into `ecs_admin_log` values('791','1404962966','1','添加品牌管理: 测试','49.89.49.153');");
E_D("replace into `ecs_admin_log` values('792','1404962979','1','编辑商品: 方形木艺灯罩吸顶灯','49.89.49.153');");
E_D("replace into `ecs_admin_log` values('793','1406349350','1','编辑权限管理: admin','49.89.222.132');");
E_D("replace into `ecs_admin_log` values('794','1406355914','1','编辑商店设置: ','14.216.239.162');");
E_D("replace into `ecs_admin_log` values('795','1406356239','1','编辑商品: 餐厅6件套（1餐桌+4餐椅+1餐边柜）','14.216.239.162');");
E_D("replace into `ecs_admin_log` values('796','1406362534','1','编辑商店设置: ','14.216.239.162');");
E_D("replace into `ecs_admin_log` values('797','1406368892','1','编辑商品: 餐厅5件套装（1.5餐台+4无扶手餐椅）','14.216.239.162');");
E_D("replace into `ecs_admin_log` values('798','1406369941','1','编辑商品: 餐厅5件套装（1.5餐台+4无扶手餐椅）','14.216.239.162');");
E_D("replace into `ecs_admin_log` values('799','1406435501','1','编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','114.239.214.71');");
E_D("replace into `ecs_admin_log` values('800','1406435568','1','编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','114.239.214.71');");
E_D("replace into `ecs_admin_log` values('801','1406435577','1','编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','114.239.214.71');");
E_D("replace into `ecs_admin_log` values('802','1406472027','1','编辑商店设置: ','49.70.78.86');");
E_D("replace into `ecs_admin_log` values('803','1406533190','1','编辑商店设置: ','14.216.244.165');");
E_D("replace into `ecs_admin_log` values('804','1406533254','1','编辑商店设置: ','14.216.244.165');");
E_D("replace into `ecs_admin_log` values('805','1406533274','1','编辑商店设置: ','14.216.244.165');");
E_D("replace into `ecs_admin_log` values('806','1406537691','1','编辑商店设置: ','14.216.244.165');");
E_D("replace into `ecs_admin_log` values('807','1406537726','1','编辑商品: 餐厅5件套装（1.5餐台+4无扶手餐椅）','14.216.244.165');");
E_D("replace into `ecs_admin_log` values('808','1406537918','1','编辑商店设置: ','14.216.244.165');");
E_D("replace into `ecs_admin_log` values('809','1406540327','1','编辑商店设置: ','14.216.244.165');");
E_D("replace into `ecs_admin_log` values('810','1406698120','1','添加商品: [木木原]中式风格 实木双人床 纽西兰松木床','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('811','1406698211','1','编辑商品: [木木原]中式风格 实木双人床 纽西兰松木床','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('812','1406698223','1','编辑商品: [木木原]中式风格 实木双人床 纽西兰松木床','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('813','1406698259','1','编辑商品: [木木原]中式风格 实木双人床 纽西兰松木床','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('814','1406698272','1','编辑商品: [木木原]中式风格 实木双人床 纽西兰松木床','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('815','1406698568','1','编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('816','1406698608','1','编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('817','1406721563','1','编辑广告: 首页-分类ID1-右侧广告','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('818','1406721598','1','编辑广告: 首页-分类ID1-右侧广告','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('819','1406722470','1','添加商品: [优曼]	 一起走过的日子全棉喷气印花四件套 ','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('820','1406722507','1','编辑商品: [优曼]	 一起走过的日子全棉喷气印花四件套 ','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('821','1406722579','1','编辑商品: [优曼]	 一起走过的日子全棉喷气印花四件套 ','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('822','1406722713','1','添加商品: [唯萨]	 花开富贵豪华宫廷不锈钢三开门蚊帐(1.5米床用）-米色（中号）','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('823','1406722744','1','编辑商品: [唯萨]	 花开富贵豪华宫廷不锈钢三开门蚊帐(1.5米床用）-米色（中号）','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('824','1406722775','1','编辑商品: [唯萨]	 花开富贵豪华宫廷不锈钢三开门蚊帐(1.5米床用）-米色（中号）','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('825','1406722990','1','添加商品: [悦邻家居]	 欧式奢华提花高档定制客厅卧室半遮光窗帘 素雅灰','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('826','1406723017','1','编辑商品: [悦邻家居]	 欧式奢华提花高档定制客厅卧室半遮光窗帘 素雅灰','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('827','1406723072','1','编辑商品: [悦邻家居]	 欧式奢华提花高档定制客厅卧室半遮光窗帘 素雅灰','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('828','1406723378','1','添加商品: [小日子]	 高档半遮光窗帘定制 速写英伦','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('829','1406724021','1','添加商品: [SFMOBUL安君美]	 百变吊带可穿浴巾 140*70cm 粉红','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('830','1406724065','1','编辑商品: [SFMOBUL安君美]	 百变吊带可穿浴巾 140*70cm 粉红','49.89.59.200');");
E_D("replace into `ecs_admin_log` values('831','1406776992','1','编辑权限管理: admin','114.239.193.62');");
E_D("replace into `ecs_admin_log` values('832','1408088867','1','回收商品: [SFMOBUL安君美]	 百变吊带可穿浴巾 140*70cm 粉红','114.100.200.250');");
E_D("replace into `ecs_admin_log` values('833','1408089680','1','编辑商店设置: ','114.100.200.250');");
E_D("replace into `ecs_admin_log` values('834','1408089883','1','编辑权限管理: admin','114.100.200.250');");
E_D("replace into `ecs_admin_log` values('835','1408089935','1','编辑商店设置: ','114.100.200.250');");
E_D("replace into `ecs_admin_log` values('836','1413860996','1','还原数据库备份: 备份时间2014-08-15 08:18:58','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('837','1413861090','1','删除友情链接: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('838','1413861092','1','删除友情链接: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('839','1413861094','1','删除友情链接: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('840','1413861135','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('841','1416618830','1','还原数据库备份: 备份时间2014-10-21 03:12:29','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('842','1417092239','1','添加: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('843','1417362935','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('844','1417362949','1','Edit Shop config: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('845','1417363061','1','编辑会员账号: icebergrbs','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('846','1417363568','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('847','1417363593','1','Edit Shop config: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('848','1417364485','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('849','1417364521','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('850','1417401237','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('851','1417401251','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('852','1417402137','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('853','1417402563','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('854','1417402864','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('855','1417410360','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('856','1417410444','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('857','1417410461','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('858','1417410508','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('859','1417410535','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('860','1417410575','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('861','1417410604','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('862','1417410670','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('863','1417410708','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('864','1417410731','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('865','1417410801','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('866','1417410862','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('867','1417410918','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('868','1417410927','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('869','1417411111','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('870','1417411162','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('871','1417411299','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('872','1417411392','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('873','1417412304','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('874','1417412580','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('875','1417412633','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('876','1417412644','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('877','1417412656','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('878','1417412661','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('879','1417412668','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('880','1417412679','1','Edit Shop config: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('881','1417412692','1','编辑商品: [小日子] 高档半遮光窗帘定制 速写英伦','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('882','1417412707','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('883','1417412719','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('884','1417412855','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('885','1417412945','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('886','1417412958','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('887','1417412993','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('888','1417413116','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('889','1417413176','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('890','1417413208','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('891','1417413352','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('892','1417413631','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('893','1417413778','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('894','1417413953','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('895','1417583448','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('896','1417583612','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('897','1417583617','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('898','1417583764','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('899','1417583904','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('900','1417583918','1','编辑商品: [小日子] 高档半遮光窗帘定制 速写英伦','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('901','1417586670','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('902','1417586708','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('903','1417658849','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('904','1417856477','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('905','1417856485','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('906','1417856495','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('907','1417949051','1','添加: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('908','1417949065','1','添加品牌管理: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('909','1418029037','1','删除商品分类: 床头柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('910','1418042176','1','编辑商品分类: 家居家饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('911','1418042207','1','编辑商品分类: 家居家饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('912','1418260988','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('913','1418265706','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('914','1418266574','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('915','1418273589','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('916','1418273753','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('917','1418274214','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('918','1418278461','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('919','1418278491','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('920','1418278597','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('921','1418442312','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('922','1418447492','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('923','1418447571','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('924','1418447587','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('925','1418447627','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('926','1418447640','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('927','1418447698','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('928','1418447735','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('929','1418448072','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('930','1418448396','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('931','1418545663','1','删除: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('932','1418545695','1','删除: 日用百货1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('933','1418545967','1','删除: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('934','1418546906','1','删除: 日用百货1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('935','1418865301','1','编辑会员等级: 注册用户','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('936','1418865315','1','编辑会员等级: 注册用户','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('937','1418865328','1','编辑会员等级: 注册用户','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('938','1418865335','1','编辑会员等级: VIP','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('939','1418865338','1','编辑会员等级: 注册用户','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('940','1418865339','1','编辑会员等级: 注册用户','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('941','1418865379','1','编辑会员等级: VIP','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('942','1418865525','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('943','1419222318','1','删除会员账号: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('944','1419222419','1','删除会员账号: ttt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('945','1419222504','1','删除会员账号: 1123123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('946','1419222751','1','删除会员账号: admin01230','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('947','1419222813','1','编辑会员账号: zxp123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('948','1419222815','1','编辑会员账号: zxp123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('949','1420447383','1','编辑会员等级: 注册用户','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('950','1420510904','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('951','1420599107','1','编辑会员等级: 普通会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('952','1420599120','1','编辑会员等级: 中级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('953','1420599124','1','编辑会员等级: 高级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('954','1420599361','1','编辑会员等级: 中级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('955','1420599365','1','编辑会员等级: 中级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('956','1420599369','1','编辑会员等级: 高级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('957','1420599373','1','编辑会员等级: 中级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('958','1420599378','1','编辑会员等级: 高级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('959','1420599391','1','编辑会员等级: 高级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('960','1420599402','1','编辑会员等级: 高级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('961','1420643377','1','添加会员等级: 超高级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('962','1420643394','1','编辑会员等级: 高级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('963','1420643397','1','编辑会员等级: 超高级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('964','1423013897','1','编辑会员账号: mahongtu','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('965','1423014158','1','编辑会员等级: 普通会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('966','1423014159','1','编辑会员等级: 中级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('967','1423014160','1','编辑会员等级: 高级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('968','1423111569','1','添加网站分类: 网站','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('969','1423111588','1','添加: 站点1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('970','1423286212','1','编辑会员等级: 普通会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('971','1423286213','1','编辑会员等级: 普通会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('972','1423286221','1','编辑会员等级: 普通会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('973','1423286226','1','编辑会员等级: 普通会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('974','1423450534','1','添加会员余额: zxp1988','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('975','1423450648','1','添加会员余额: zxp1988','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('976','1423450664','1','编辑会员余额: (到款审核)商户订单号 2015020852','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('977','1423450671','1','编辑会员余额: zxp1988','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('978','1423450704','1','添加会员余额: zxp1988','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('979','1423450727','1','添加会员余额: zxp1988','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('980','1423450778','1','添加会员余额: zxp1988','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('981','1423458196','1','编辑会员余额: zxp1988','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('982','1423458207','1','编辑会员余额: zxp1988','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('983','1423458212','1','编辑会员余额: zxp1988','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('984','1423735528','1','编辑会员等级: 中级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('985','1423736162','1','编辑会员等级: 普通会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('986','1423736729','1','编辑会员等级: 高级会员1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('987','1423736733','1','编辑会员等级: 高级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('988','1423789022','1','编辑会员等级: 超高级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('989','1423789784','1','编辑会员等级: 普通会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('990','1423789785','1','编辑会员等级: 普通会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('991','1425262969','1','编辑会员等级: 超高级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('992','1425263001','1','添加会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('993','1425263870','1','编辑会员等级: 普通会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('994','1425263870','1','编辑会员等级: 普通会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('995','1425269533','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('996','1425269606','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('997','1425270087','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('998','1425270208','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('999','1425270241','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1000','1425270441','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1001','1425270449','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1002','1425270472','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1003','1425270505','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1004','1425270595','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1005','1425270791','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1006','1425270836','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1007','1425270960','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1008','1425270989','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1009','1425271027','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1010','1425271260','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1011','1425271291','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1012','1425271316','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1013','1425271338','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1014','1425271354','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1015','1425271410','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1016','1425271461','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1017','1425271705','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1018','1425271768','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1019','1425271806','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1020','1425271834','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1021','1425272101','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1022','1425272129','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1023','1425272167','1','编辑会员等级: 撒发放','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1024','1425272208','1','编辑会员等级: 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1025','1425272227','1','编辑会员等级: 啊都发放','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1026','1425272308','1','添加会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1027','1425272328','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1028','1425272346','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1029','1425272358','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1030','1425272627','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1031','1425272651','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1032','1425272666','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1033','1425272714','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1034','1425272752','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1035','1425272762','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1036','1425272769','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1037','1425272832','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1038','1425272858','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1039','1425272910','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1040','1425272973','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1041','1425272990','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1042','1425273064','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1043','1425273068','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1044','1425273094','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1045','1425273098','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1046','1425273119','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1047','1425273124','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1048','1425273158','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1049','1425273162','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1050','1425274740','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1051','1425274744','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1052','1425274824','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1053','1425274861','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1054','1425274910','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1055','1425274916','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1056','1425274920','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1057','1425274950','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1058','1425274955','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1059','1425275040','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1060','1425275045','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1061','1425275076','1','编辑会员等级: tt','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1062','1425275114','1','编辑会员等级: 普通会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1063','1425275143','1','编辑会员等级: 高级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1064','1425275789','1','编辑会员等级: 高级会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1065','1425388951','1','编辑会员余额: (到款审核)充值成功','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1066','1425961612','1','添加批量跟踪: [object HTMLSpanElement] ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1067','1425961725','1','添加批量跟踪: 39 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1068','1425961830','1','添加批量跟踪: 2 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1069','1425961843','1','添加批量跟踪: 2 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1070','1425961858','1','添加批量跟踪: 2 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1071','1425961891','1','添加批量跟踪: 2 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1072','1425962347','1','添加批量跟踪: 32 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1073','1425963097','1','添加批量跟踪: 32 asdfafafafa','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1074','1425963139','1','添加批量跟踪: 32 q3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1075','1425963172','1','添加批量跟踪: 32 q3adfaf','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1076','1425963199','1','添加批量跟踪: 32 q3sadfa','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1077','1425963220','1','添加批量跟踪: 32 q3asdfa','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1078','1425963235','1','添加批量跟踪: 32 q3adsfa','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1079','1425963329','1','添加批量跟踪: 32 q3123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1080','1425963355','1','添加批量跟踪: 32 q3123123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1081','1425963397','1','添加批量跟踪: 32 q3123123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1082','1425963444','1','添加批量跟踪: 32 q3123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1083','1425963519','1','添加批量跟踪: 39 q3123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1084','1425964018','1','添加批量跟踪: 39 q3123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1085','1425964355','1','添加批量跟踪: 35 q3123123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1086','1425964395','1','添加批量跟踪: 32 32,30：订单跟踪','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1087','1425964469','1','添加批量跟踪: 30 q3：30','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1088','1425964514','1','添加批量跟踪: 32 31;32','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1089','1425964596','1','添加批量跟踪: 31 q3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1090','1425964596','1','123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1091','1426122357','1','添加批量跟踪: 36 123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1092','1426122381','1','添加批量跟踪: 32 456','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1093','1426122381','1','添加批量跟踪: 32 456','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1094','1426122425','1','添加批量跟踪: 32 456','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1095','1426122519','1','添加批量跟踪: 32 789','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1096','1426122555','1','添加批量跟踪: 32 789','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1097','1426122572','1','添加批量跟踪: 32 789','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1098','1426123325','1','添加批量跟踪: 39 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1099','1426123328','1','添加批量跟踪: 39 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1100','1426123360','1','删除批量移除: 39','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1101','1426123362','1','删除批量移除: 39','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1102','1426123363','1','删除批量移除: 39','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1103','1426124175','1','删除批量移除: -订单，订单ID：39','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1104','1426124221','1','删除批量移除: -订单，订单ID：38','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1105','1426567537','1','编辑会员等级: 普通会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1106','1427335882','1','删除批量移除: -订单，订单ID：4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1107','1428025801','1','编辑会员余额: (到款审核)成功','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1108','1428025895','1','编辑会员余额: (到款审核)5000','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1109','1428026181','1','编辑会员余额: (到款审核)成功','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1110','1428382351','1','添加会员账号: 1231123','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1111','1428541118','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1112','1428541130','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1113','1428541141','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1114','1428541169','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1115','1428542833','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1116','1428542859','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1117','1428553651','1','还原数据库备份: 备份时间2015-04-09 08:23:50','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1118','1428554061','1','还原数据库备份: 备份时间2015-04-09 08:23:50','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1119','1429508470','1','编辑会员等级: 普通会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1120','1429508508','1','编辑会员等级: 普通会员','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1121','1431044363','1','编辑会员余额: (到款审核)完成','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1122','1436965003','1','编辑会员余额: (到款审核)123','180.5.124.213');");
E_D("replace into `ecs_admin_log` values('1123','1437003485','1','编辑会员账号: stdoudou','192.168.1.2');");
E_D("replace into `ecs_admin_log` values('1124','1437013353','1','编辑会员余额: (到款审核)123','180.5.124.213');");
E_D("replace into `ecs_admin_log` values('1125','1437017271','1','添加会员等级: 商家','180.5.124.213');");
E_D("replace into `ecs_admin_log` values('1126','1437017477','1','编辑会员余额: (到款审核)好的','192.168.1.2');");
E_D("replace into `ecs_admin_log` values('1127','1437465171','1','编辑会员账号: tester2','117.132.15.50');");
E_D("replace into `ecs_admin_log` values('1128','1437465256','1','编辑会员账号: tester2','117.132.15.50');");
E_D("replace into `ecs_admin_log` values('1129','1437527521','1','编辑会员等级: 普通会员','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1130','1437793248','1','编辑会员等级: 普通会员','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1131','1437798741','1','编辑会员余额: (到款审核)123','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1132','1437997353','1','添加会员余额: tester','124.129.188.99');");
E_D("replace into `ecs_admin_log` values('1133','1438001163','1','编辑会员账号: test111','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1134','1438001173','1','编辑会员账号: CleverBrother','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1135','1438001189','1','添加会员余额: tester','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1136','1438001379','1','编辑会员账号: yansu','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1137','1438001614','1','添加会员余额: tester','124.129.188.99');");
E_D("replace into `ecs_admin_log` values('1138','1438001852','1','添加会员余额: tester','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1139','1438001890','1','添加会员余额: tester','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1140','1438079900','1','编辑会员账号: tester','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1141','1438080060','1','编辑会员余额: (到款审核)zhifuhao','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1142','1438080090','1','编辑会员账号: tester','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1143','1438080192','1','编辑会员账号: tester','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1144','1438080320','1','编辑会员余额: (到款审核)啊啊','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1145','1438226699','1','编辑会员账号: Merlin','192.168.1.3');");
E_D("replace into `ecs_admin_log` values('1146','1438226737','1','编辑会员账号: Merlin','192.168.1.3');");
E_D("replace into `ecs_admin_log` values('1147','1438226872','1','编辑会员账号: stdoudou','192.168.1.3');");
E_D("replace into `ecs_admin_log` values('1148','1438502918','1','添加会员等级: 超级vip','192.168.1.3');");
E_D("replace into `ecs_admin_log` values('1149','1438503785','1','删除批量移除: -订单，订单ID：47','192.168.1.3');");
E_D("replace into `ecs_admin_log` values('1150','1438504840','1','编辑会员账号: test111','192.168.1.3');");
E_D("replace into `ecs_admin_log` values('1151','1438566792','1','编辑会员余额: (到款审核)123','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1152','1438602904','1','编辑会员余额: (到款审核)eee','119.167.48.140');");
E_D("replace into `ecs_admin_log` values('1153','1438604945','1','编辑会员余额: (到款审核)123','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1154','1438606993','1','编辑会员余额: (到款审核)１２３','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1155','1438607010','1','编辑会员余额: (到款审核)yyyy','119.167.48.140');");
E_D("replace into `ecs_admin_log` values('1156','1438607063','1','编辑会员余额: (到款审核)3333','119.167.48.140');");
E_D("replace into `ecs_admin_log` values('1157','1438646220','1','编辑会员账号: tester','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1158','1438646502','1','编辑会员账号: tester','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1159','1438646537','1','编辑会员账号: tester2','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1160','1438646683','1','添加会员账号: asdf123','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1161','1438648517','1','编辑会员账号: tester','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1162','1438648792','1','编辑会员账号: tester','180.5.163.185');");
E_D("replace into `ecs_admin_log` values('1163','1438740113','1','编辑会员账号: 菜菜菜','140.75.211.133');");
E_D("replace into `ecs_admin_log` values('1164','1438740188','1','编辑会员账号: 菜菜菜','140.75.211.133');");

require("../../inc/footer.php");
?>