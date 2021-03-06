<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_stats`;");
E_C("CREATE TABLE `ecs_stats` (
  `access_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `visit_times` smallint(5) unsigned NOT NULL DEFAULT '1',
  `browser` varchar(60) NOT NULL DEFAULT '',
  `system` varchar(20) NOT NULL DEFAULT '',
  `language` varchar(20) NOT NULL DEFAULT '',
  `area` varchar(30) NOT NULL DEFAULT '',
  `referer_domain` varchar(100) NOT NULL DEFAULT '',
  `referer_path` varchar(200) NOT NULL DEFAULT '',
  `access_url` varchar(255) NOT NULL DEFAULT '',
  KEY `access_time` (`access_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_stats` values('1385535154','127.0.0.1','1','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/admin/index.php?act=top','/index.php');");
E_D("replace into `ecs_stats` values('1385541081','127.0.0.1','2','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/admin/index.php?act=top','/index.php');");
E_D("replace into `ecs_stats` values('1385544751','127.0.0.1','1','Internet Explorer 8.0','Windows NT','zh-CN','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1385550864','127.0.0.1','3','FireFox 25.0','Windows NT','zh-cn,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1385560164','127.0.0.1','4','FireFox 25.0','Windows NT','zh-cn,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1385620379','127.0.0.1','5','FireFox 25.0','Windows NT','zh-cn,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1385638055','127.0.0.1','6','FireFox 25.0','Windows NT','zh-cn,zh','LAN','','','/category.php');");
E_D("replace into `ecs_stats` values('1385645888','127.0.0.1','7','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/category.php?id=2','/category.php');");
E_D("replace into `ecs_stats` values('1385657157','127.0.0.1','1','Internet Explorer 8.0','Windows NT','zh-CN','LAN','','','/category.php');");
E_D("replace into `ecs_stats` values('1385709311','127.0.0.1','8','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/category.php?id=1','/goods.php');");
E_D("replace into `ecs_stats` values('1385718167','127.0.0.1','9','FireFox 25.0','Windows NT','zh-cn,zh','LAN','','','/goods.php');");
E_D("replace into `ecs_stats` values('1385727076','127.0.0.1','10','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/goods.php?id=1','/gallery.php');");
E_D("replace into `ecs_stats` values('1385774558','127.0.0.1','11','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/category.php?id=2','/user.php');");
E_D("replace into `ecs_stats` values('1385783719','127.0.0.1','12','FireFox 25.0','Windows NT','zh-cn,zh','LAN','','','/flow.php');");
E_D("replace into `ecs_stats` values('1385785923','127.0.0.1','13','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/flow.php?step=consignee&direct_shopping=1','/flow.php');");
E_D("replace into `ecs_stats` values('1385802180','127.0.0.1','14','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/flow.php','/flow.php');");
E_D("replace into `ecs_stats` values('1385805427','127.0.0.1','15','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/flow.php','/flow.php');");
E_D("replace into `ecs_stats` values('1385807806','127.0.0.1','16','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/','/article.php');");
E_D("replace into `ecs_stats` values('1385812349','127.0.0.1','17','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/','/article.php');");
E_D("replace into `ecs_stats` values('1385817694','127.0.0.1','18','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/article.php?id=33','/article_cat.php');");
E_D("replace into `ecs_stats` values('1385899644','127.0.0.1','19','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/goods.php?id=1','/index.php');");
E_D("replace into `ecs_stats` values('1385906619','127.0.0.1','20','FireFox 25.0','Windows NT','zh-cn,zh','LAN','','','/xspace.php');");
E_D("replace into `ecs_stats` values('1385910289','127.0.0.1','2','Internet Explorer 8.0','Windows NT','zh-CN','LAN','','','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1385969879','127.0.0.1','21','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/','/category.php');");
E_D("replace into `ecs_stats` values('1385971926','127.0.0.1','3','Internet Explorer 8.0','Windows NT','zh-CN','LAN','','','/category.php');");
E_D("replace into `ecs_stats` values('1385979783','127.0.0.1','22','FireFox 25.0','Windows NT','zh-cn,zh','LAN','','','/category.php');");
E_D("replace into `ecs_stats` values('1385981669','127.0.0.1','23','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/category.php?id=1','/category.php');");
E_D("replace into `ecs_stats` values('1385982281','127.0.0.1','24','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/category.php?id=1','/category.php');");
E_D("replace into `ecs_stats` values('1385987525','127.0.0.1','1','Internet Explorer 8.0','Windows NT','zh-CN','LAN','','','/goods.php');");
E_D("replace into `ecs_stats` values('1385994454','127.0.0.1','2','Internet Explorer 8.0','Windows NT','zh-CN','LAN','','','/goods.php');");
E_D("replace into `ecs_stats` values('1385998184','127.0.0.1','3','Internet Explorer 8.0','Windows NT','zh-CN','LAN','','','/goods.php');");
E_D("replace into `ecs_stats` values('1385999599','127.0.0.1','2','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/goods.php');");
E_D("replace into `ecs_stats` values('1386046050','127.0.0.1','25','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/brand.php','/group_buy.php');");
E_D("replace into `ecs_stats` values('1386046964','127.0.0.1','4','Internet Explorer 8.0','Windows NT','zh-CN','LAN','','','/group_buy.php');");
E_D("replace into `ecs_stats` values('1386056217','127.0.0.1','5','Internet Explorer 8.0','Windows NT','zh-CN','LAN','','','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1386066454','127.0.0.1','6','Internet Explorer 8.0','Windows NT','zh-CN','LAN','','','/goods.php');");
E_D("replace into `ecs_stats` values('1386074416','127.0.0.1','26','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/goods.php?id=1','/captcha.php');");
E_D("replace into `ecs_stats` values('1386075656','127.0.0.1','7','Internet Explorer 8.0','Windows NT','zh-CN','LAN','','','/category.php');");
E_D("replace into `ecs_stats` values('1386090555','127.0.0.1','27','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/user.php?act=logout','/group_buy.php');");
E_D("replace into `ecs_stats` values('1386143639','127.0.0.1','28','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/brand.php?id=2','/category.php');");
E_D("replace into `ecs_stats` values('1386152928','127.0.0.1','29','FireFox 25.0','Windows NT','zh-cn,zh','LAN','','','/category.php');");
E_D("replace into `ecs_stats` values('1386159479','127.0.0.1','8','Internet Explorer 8.0','Windows NT','zh-CN','LAN','','','/category.php');");
E_D("replace into `ecs_stats` values('1386164551','127.0.0.1','30','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/','/flow.php');");
E_D("replace into `ecs_stats` values('1386165470','127.0.0.1','9','Internet Explorer 8.0','Windows NT','zh-CN','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1386166858','127.0.0.1','31','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/flow.php','/flow.php');");
E_D("replace into `ecs_stats` values('1386168403','127.0.0.1','10','Internet Explorer 8.0','Windows NT','zh-CN','LAN','http://meilele2014.test.com','/flow.php','/flow.php');");
E_D("replace into `ecs_stats` values('1386172434','127.0.0.1','11','Internet Explorer 8.0','Windows NT','zh-cn','LAN','http://meilele2014.test.com','/flow.php','/flow.php');");
E_D("replace into `ecs_stats` values('1386227760','127.0.0.1','32','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/flow.php?step=checkout','/index.php');");
E_D("replace into `ecs_stats` values('1386229473','127.0.0.1','12','Internet Explorer 6.0','Windows NT','zh-cn','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1386229515','127.0.0.1','3','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1386230048','127.0.0.1','13','Internet Explorer 8.0','Windows NT','zh-cn','LAN','','','/category.php');");
E_D("replace into `ecs_stats` values('1386230940','127.0.0.1','4','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/brand.php');");
E_D("replace into `ecs_stats` values('1386231191','127.0.0.1','1','Safari 537.36','Windows NT','zh-CN,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1386231272','127.0.0.1','1','Safari 537.36','Windows NT','zh-CN,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1386231306','127.0.0.1','1','Safari 537.19','Windows NT','zh-CN,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1386239687','127.0.0.1','33','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://meilele2014.test.com','/brand.php','/index.php');");
E_D("replace into `ecs_stats` values('1386316263','127.0.0.1','1','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/admin/index.php?act=top','/index.php');");
E_D("replace into `ecs_stats` values('1386319936','127.0.0.1','2','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/admin/index.php?act=top','/index.php');");
E_D("replace into `ecs_stats` values('1386331582','127.0.0.1','3','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/admin/index.php?act=top','/index.php');");
E_D("replace into `ecs_stats` values('1386341659','127.0.0.1','4','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/index.php?id=77','/index.php');");
E_D("replace into `ecs_stats` values('1386405496','127.0.0.1','5','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/index.php?id=77','/index.php');");
E_D("replace into `ecs_stats` values('1386488741','127.0.0.1','6','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/index.php?id=52','/expr_show.php');");
E_D("replace into `ecs_stats` values('1386494733','127.0.0.1','1','Internet Explorer 8.0','Windows NT','zh-CN','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1386525668','127.0.0.1','7','FireFox 25.0','Windows NT','zh-cn,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1386727305','127.0.0.1','1','FireFox 25.0','Windows NT','zh-cn,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1386753680','127.0.0.1','2','Internet Explorer 8.0','Windows NT','zh-CN','LAN','','','/user.php');");
E_D("replace into `ecs_stats` values('1386753811','127.0.0.1','2','FireFox 25.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/user.php?act=order_detail&order_id=6','/user.php');");
E_D("replace into `ecs_stats` values('1386766115','127.0.0.1','3','Internet Explorer 6.0','Windows NT','zh-cn','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1386766194','127.0.0.1','4','Internet Explorer 6.0','Windows NT','zh-cn','LAN','','','/search_list.php');");
E_D("replace into `ecs_stats` values('1386766207','127.0.0.1','5','Internet Explorer 6.0','Windows NT','zh-cn','LAN','','','/goods.php');");
E_D("replace into `ecs_stats` values('1386766309','127.0.0.1','1','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/category.php');");
E_D("replace into `ecs_stats` values('1387090884','127.0.0.1','3','FireFox 26.0','Windows NT','zh-cn,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1387096108','127.0.0.1','4','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/admin/topic.php','/topic.php');");
E_D("replace into `ecs_stats` values('1387099065','127.0.0.1','5','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/admin/topic.php','/topic.php');");
E_D("replace into `ecs_stats` values('1387106081','127.0.0.1','6','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/admin/topic.php','/topic.php');");
E_D("replace into `ecs_stats` values('1387179947','127.0.0.1','7','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/','/category.php');");
E_D("replace into `ecs_stats` values('1387182616','127.0.0.1','8','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/admin/article.php?act=list&cat_id=2','/article.php');");
E_D("replace into `ecs_stats` values('1387190059','127.0.0.1','9','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/article.php?id=2','/article.php');");
E_D("replace into `ecs_stats` values('1387196229','127.0.0.1','10','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/','/goods.php');");
E_D("replace into `ecs_stats` values('1387283354','127.0.0.1','11','FireFox 26.0','Windows NT','zh-cn,zh','LAN','','','/goods.php');");
E_D("replace into `ecs_stats` values('1387337150','127.0.0.1','12','FireFox 26.0','Windows NT','zh-cn,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1387428947','127.0.0.1','13','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/category.php?id=1','/category.php');");
E_D("replace into `ecs_stats` values('1387432884','127.0.0.1','2','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/group_buy.php');");
E_D("replace into `ecs_stats` values('1387507510','127.0.0.1','14','FireFox 26.0','Windows NT','zh-cn,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1387700617','127.0.0.1','15','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/','/index.php');");
E_D("replace into `ecs_stats` values('1387775199','127.0.0.1','16','FireFox 26.0','Windows NT','zh-cn,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1387778971','127.0.0.1','17','FireFox 26.0','Windows NT','zh-cn,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1387961317','127.0.0.1','18','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/admin/index.php?act=top','/index.php');");
E_D("replace into `ecs_stats` values('1388062820','127.0.0.1','19','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/','/index.php');");
E_D("replace into `ecs_stats` values('1388123951','127.0.0.1','20','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/','/goods.php');");
E_D("replace into `ecs_stats` values('1388126493','127.0.0.1','21','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/goods-1.html','/goods.php');");
E_D("replace into `ecs_stats` values('1388136598','127.0.0.1','22','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/group_buy.html','/flow.php');");
E_D("replace into `ecs_stats` values('1388141274','127.0.0.1','23','FireFox 26.0','Windows NT','zh-cn,zh','LAN','','','/exchange.php');");
E_D("replace into `ecs_stats` values('1388150254','127.0.0.1','24','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/admin/goods.php?act=list','/goods.php');");
E_D("replace into `ecs_stats` values('1388155214','127.0.0.1','25','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/','/index.php');");
E_D("replace into `ecs_stats` values('1388322403','127.0.0.1','26','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/admin/index.php?act=top','/index.php');");
E_D("replace into `ecs_stats` values('1388326162','127.0.0.1','27','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/themes/meilele/style.css','/index.php');");
E_D("replace into `ecs_stats` values('1388331594','127.0.0.1','28','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/themes/meilele/style.css','/index.php');");
E_D("replace into `ecs_stats` values('1388396826','127.0.0.1','29','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/','/user.php');");
E_D("replace into `ecs_stats` values('1388398950','127.0.0.1','30','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/user.php?act=order_list&page=1','/user.php');");
E_D("replace into `ecs_stats` values('1388405105','127.0.0.1','31','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/user.php','/user.php');");
E_D("replace into `ecs_stats` values('1388467981','127.0.0.1','32','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/goods-2.html','/user.php');");
E_D("replace into `ecs_stats` values('1388656815','127.0.0.1','33','FireFox 26.0','Windows NT','zh-cn,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1388731274','127.0.0.1','34','FireFox 26.0','Windows NT','zh-cn,zh','LAN','','','/index.php');");
E_D("replace into `ecs_stats` values('1388896392','127.0.0.1','35','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/admin/index.php?act=top','/index.php');");
E_D("replace into `ecs_stats` values('1388911001','127.0.0.1','36','FireFox 26.0','Windows NT','zh-cn,zh','LAN','','','/goods.php');");
E_D("replace into `ecs_stats` values('1389057420','127.0.0.1','37','FireFox 26.0','Windows NT','zh-cn,zh','LAN','http://mll2014.test.com','/admin/index.php?act=top','/index.php');");
E_D("replace into `ecs_stats` values('1390395544','103.24.1.155','1','Internet Explorer 7.0','Windows 2003','zh-cn','IANA','http://meilele.51131430.com','/admin/index.php?act=top','/index.php');");
E_D("replace into `ecs_stats` values('1390396314','111.59.192.75','23','FireFox 26.0','Windows NT','zh-cn,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1390470193','124.73.96.109','1','Safari 534.30','Linux','zh-CN, en-US','','','','/index.php');");
E_D("replace into `ecs_stats` values('1390470356','124.73.96.109','1','Safari 537.1','Windows XP','zh-CN,zh','','http://meilele.51131430.com','/mobile','/category.php');");
E_D("replace into `ecs_stats` values('1390475527','117.136.20.70','2','Safari 534.30','Linux','zh-CN, en-US','','','','/index.php');");
E_D("replace into `ecs_stats` values('1390544025','124.227.254.66','24','FireFox 26.0','Windows NT','zh-cn,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1391404844','110.75.105.252','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1391404844','110.75.105.252','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1391404855','121.31.254.44','4','Safari 534.31','Linux','zh-cn','','','','/index.php');");
E_D("replace into `ecs_stats` values('1391404861','110.75.105.250','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1391404861','110.75.105.250','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1391405395','113.110.232.185','1','Internet Explorer 8.0','Windows XP','zh-cn','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1391405395','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1391405456','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/article.php');");
E_D("replace into `ecs_stats` values('1391405478','110.75.105.198','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/article.php');");
E_D("replace into `ecs_stats` values('1391405482','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/group_buy.php');");
E_D("replace into `ecs_stats` values('1391405492','110.75.105.197','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/article.php');");
E_D("replace into `ecs_stats` values('1391405528','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/category.php');");
E_D("replace into `ecs_stats` values('1391405623','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/topic.php');");
E_D("replace into `ecs_stats` values('1391405640','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1391405641','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1391405642','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1391405731','222.84.77.12','25','FireFox 26.0','Windows NT','zh-cn,zh','','','','/article.php');");
E_D("replace into `ecs_stats` values('1391405754','110.75.105.177','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/article.php');");
E_D("replace into `ecs_stats` values('1391405768','110.75.105.176','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/article.php');");
E_D("replace into `ecs_stats` values('1391405879','110.75.105.167','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/xspace.php');");
E_D("replace into `ecs_stats` values('1391405880','110.75.105.167','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/xspace.php');");
E_D("replace into `ecs_stats` values('1391405893','110.75.105.165','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/xspace.php');");
E_D("replace into `ecs_stats` values('1391405894','110.75.105.165','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/xspace.php');");
E_D("replace into `ecs_stats` values('1391405910','110.75.105.164','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/article.php');");
E_D("replace into `ecs_stats` values('1391405910','110.75.216.254','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/article.php');");
E_D("replace into `ecs_stats` values('1391405922','110.75.105.163','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/article_cat.php');");
E_D("replace into `ecs_stats` values('1391405923','110.75.105.163','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/article_cat.php');");
E_D("replace into `ecs_stats` values('1391405924','110.75.216.253','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/article.php');");
E_D("replace into `ecs_stats` values('1391405924','110.75.216.253','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/article.php');");
E_D("replace into `ecs_stats` values('1391405936','110.75.105.162','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/article_cat.php');");
E_D("replace into `ecs_stats` values('1391405939','110.75.105.162','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/article_cat.php');");
E_D("replace into `ecs_stats` values('1391405960','119.147.146.193','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/xspace.php');");
E_D("replace into `ecs_stats` values('1391405986','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1391406024','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/article.php');");
E_D("replace into `ecs_stats` values('1391406056','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/article_cat.php');");
E_D("replace into `ecs_stats` values('1391406119','222.84.77.12','1','Internet Explorer 8.0','Windows NT','zh-CN','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1391406123','222.84.77.12','1','Internet Explorer 8.0','Windows NT','zh-CN','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1391406264','110.75.216.253','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1391406281','110.75.105.135','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1391407932','101.226.33.223','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1391407969','180.153.214.152','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/brand.php');");
E_D("replace into `ecs_stats` values('1391408027','180.153.214.180','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/category.php');");
E_D("replace into `ecs_stats` values('1391408047','101.226.66.193','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1391413842','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/goods.php');");
E_D("replace into `ecs_stats` values('1391413853','183.15.6.87','1','Internet Explorer 8.0','Windows XP','zh-cn','[δ֪IP0801]','','','/goods.php');");
E_D("replace into `ecs_stats` values('1391488907','111.59.234.94','26','FireFox 26.0','Windows NT','zh-cn,zh','IANA','http://meilele.51131430.com','/goods-1.html','/captcha.php');");
E_D("replace into `ecs_stats` values('1391488983','111.59.234.94','2','Internet Explorer 8.0','Windows NT','zh-CN','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1391489034','101.226.33.240','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/article.php');");
E_D("replace into `ecs_stats` values('1391489040','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1391490804','101.226.33.204','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1391531817','111.59.234.94','1','Unknow browser','Windows 32','','IANA','','','/category.php');");
E_D("replace into `ecs_stats` values('1391848967','103.24.1.155','1','Internet Explorer 7.0','Windows 2003','zh-cn','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1391865497','110.75.105.213','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1391865517','110.75.105.210','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1391865521','27.212.211.65','1','Internet Explorer 8.0','Windows NT','zh-CN','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1391865523','119.147.146.192','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1391865532','110.75.105.208','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1391865557','110.75.105.205','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392024386','110.75.105.170','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392024388','218.86.107.82','1','Internet Explorer 8.0','Windows XP','zh-cn','','','','/index.php');");
E_D("replace into `ecs_stats` values('1392024392','218.86.107.82','1','Internet Explorer 8.0','Windows XP','zh-cn','','','','/index.php');");
E_D("replace into `ecs_stats` values('1392024443','110.75.216.253','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392024960','111.59.193.204','1','FireFox 27.0','Windows NT','zh-cn,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392041474','110.75.216.253','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392041508','110.75.105.242','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392041530','110.75.105.238','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392041585','110.75.105.229','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392041698','222.221.195.116','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1392041701','222.221.195.116','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1392117998','42.243.47.26','2','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392119179','42.243.47.26','3','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392119181','42.243.47.26','3','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392700225','110.75.105.159','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392700239','125.126.241.99','1','Safari 537.17','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1392700246','125.126.241.99','1','Safari 537.17','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1392700277','110.75.105.147','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392709549','125.126.241.99','2','Safari 537.17','Windows XP','zh-CN,zh','','http://meilele.51131430.com','/z','/index.php');");
E_D("replace into `ecs_stats` values('1392717638','110.75.105.162','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392717674','110.75.105.154','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392717693','110.75.105.150','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392717695','110.75.105.149','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392717734','110.75.105.141','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392732928','180.153.212.13','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1392732928','49.118.237.110','1','Internet Explorer 9.0','Windows NT','zh-CN','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392732929','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1392732945','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/xspace.php');");
E_D("replace into `ecs_stats` values('1392734736','180.153.205.252','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/xspace.php');");
E_D("replace into `ecs_stats` values('1392734773','180.153.214.198','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/expr.php');");
E_D("replace into `ecs_stats` values('1392734851','101.226.33.227','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/group_buy.php');");
E_D("replace into `ecs_stats` values('1392734862','222.73.76.253','1','Unknow browser','Unknown','zh-cn, zh','','','','/activity.php');");
E_D("replace into `ecs_stats` values('1392734893','180.153.206.34','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/goods.php');");
E_D("replace into `ecs_stats` values('1392788612','116.249.1.186','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1392794148','116.249.1.186','2','Safari 537.1','Windows NT','zh-CN,zh','','http://meilele.51131430.com','/','/category.php');");
E_D("replace into `ecs_stats` values('1392805668','124.117.239.218','1','Unknow browser','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1392806142','180.153.201.211','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/goods.php');");
E_D("replace into `ecs_stats` values('1392807522','101.226.65.105','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/topic.php');");
E_D("replace into `ecs_stats` values('1392807537','180.153.214.198','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/goods.php');");
E_D("replace into `ecs_stats` values('1392807561','101.226.66.179','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392807570','180.153.114.199','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/expr.php');");
E_D("replace into `ecs_stats` values('1392807602','180.153.114.200','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/brand.php');");
E_D("replace into `ecs_stats` values('1392807612','101.226.33.239','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/brand.php');");
E_D("replace into `ecs_stats` values('1392807623','101.226.66.180','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/category.php');");
E_D("replace into `ecs_stats` values('1392807643','180.153.206.17','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/user.php');");
E_D("replace into `ecs_stats` values('1392807763','101.226.65.102','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1392807827','180.153.205.252','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1392807841','180.153.201.211','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/expr.php');");
E_D("replace into `ecs_stats` values('1392807851','180.153.214.152','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1392807929','112.64.235.250','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/search_list.php');");
E_D("replace into `ecs_stats` values('1392807984','101.226.51.230','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/article.php');");
E_D("replace into `ecs_stats` values('1392807992','112.65.193.13','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/article.php');");
E_D("replace into `ecs_stats` values('1392808003','101.226.33.239','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1392808024','180.153.206.30','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1392808423','180.153.201.217','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1392808427','101.226.33.205','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1392808450','101.226.102.97','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1392808462','112.64.235.253','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1392863170','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/article.php');");
E_D("replace into `ecs_stats` values('1392864160','124.117.239.218','2','Unknow browser','Windows NT','zh-CN','','http://meilele.51131430.com','/','/affiche.php');");
E_D("replace into `ecs_stats` values('1392864968','112.64.235.246','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/article.php');");
E_D("replace into `ecs_stats` values('1392865961','112.64.235.251','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392865963','180.153.205.254','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1392866061','101.226.66.177','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/xspace.php');");
E_D("replace into `ecs_stats` values('1392942912','60.162.98.253','3','Safari 537.17','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1392953739','113.139.181.88','1','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392964627','124.117.239.161','3','Internet Explorer 7.0','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1392964633','119.147.146.192','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/activity.php');");
E_D("replace into `ecs_stats` values('1392964712','119.147.146.193','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/article.php');");
E_D("replace into `ecs_stats` values('1392964746','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/category.php');");
E_D("replace into `ecs_stats` values('1392964798','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/expr.php');");
E_D("replace into `ecs_stats` values('1392966430','180.153.206.16','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/activity.php');");
E_D("replace into `ecs_stats` values('1392966511','180.153.211.190','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/article.php');");
E_D("replace into `ecs_stats` values('1392966525','180.153.163.210','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/category.php');");
E_D("replace into `ecs_stats` values('1392966545','180.153.163.190','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/category.php');");
E_D("replace into `ecs_stats` values('1392966555','180.153.206.16','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/topic.php');");
E_D("replace into `ecs_stats` values('1392966584','101.226.66.181','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/expr.php');");
E_D("replace into `ecs_stats` values('1392966634','180.153.214.176','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/user.php');");
E_D("replace into `ecs_stats` values('1392966658','180.153.206.38','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/user.php');");
E_D("replace into `ecs_stats` values('1392966681','180.153.206.24','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1392966681','101.226.89.64','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392968383','112.64.235.91','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392968401','180.153.201.79','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1392968416','101.226.65.109','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392968439','112.64.235.91','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1392968460','180.153.206.29','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/expr.php');");
E_D("replace into `ecs_stats` values('1392968471','101.226.66.177','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/article.php');");
E_D("replace into `ecs_stats` values('1392969613','112.64.235.86','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1392969620','180.153.206.25','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/expr.php');");
E_D("replace into `ecs_stats` values('1392969629','180.153.163.211','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1392969648','180.153.161.55','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/expr.php');");
E_D("replace into `ecs_stats` values('1392969739','101.226.66.175','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/activity.php');");
E_D("replace into `ecs_stats` values('1392969825','101.226.66.179','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1392969888','180.153.206.19','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/goods.php');");
E_D("replace into `ecs_stats` values('1392972417','124.117.239.218','4','Unknow browser','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1392974249','180.153.214.176','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/user.php');");
E_D("replace into `ecs_stats` values('1392974277','101.226.33.227','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/article.php');");
E_D("replace into `ecs_stats` values('1392974328','101.226.65.105','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1393047667','175.0.251.97','1','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1393049467','180.153.206.33','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1393050187','180.153.161.55','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/goods.php');");
E_D("replace into `ecs_stats` values('1393070100','110.84.200.47','1','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1393222916','112.255.94.134','1','Internet Explorer 8.0','Windows XP','zh-cn','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1393223344','121.196.43.130','1','Unknow browser','Unknown','','','','','/certi.php');");
E_D("replace into `ecs_stats` values('1393223525','110.75.105.132','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1393223593','110.75.105.116','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1393226736','124.117.239.161','1','Unknow browser','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1393226744','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1393227444','112.64.235.246','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/xspace.php');");
E_D("replace into `ecs_stats` values('1393227448','119.147.146.193','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/expr.php');");
E_D("replace into `ecs_stats` values('1393228535','180.153.201.64','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1393228687','124.117.233.209','2','Unknow browser','Windows NT','zh-CN','','http://meilele.51131430.com','/activity.html','/index.php');");
E_D("replace into `ecs_stats` values('1393228782','180.153.206.33','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1393229234','101.226.33.217','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/expr.php');");
E_D("replace into `ecs_stats` values('1393229249','180.153.201.214','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/activity.php');");
E_D("replace into `ecs_stats` values('1393230486','101.226.33.206','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1393230514','112.65.193.13','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/user.php');");
E_D("replace into `ecs_stats` values('1393230523','180.153.206.33','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/user.php');");
E_D("replace into `ecs_stats` values('1393230544','101.226.33.208','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1393231127','112.255.94.134','2','Internet Explorer 8.0','Windows XP','zh-cn','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1393298933','124.117.239.161','3','Internet Explorer 7.0','Windows NT','zh-CN','','','','/expr.php');");
E_D("replace into `ecs_stats` values('1393299179','124.117.233.209','4','Unknow browser','Windows NT','zh-CN','','http://meilele.51131430.com','/','/expr.php');");
E_D("replace into `ecs_stats` values('1393299262','124.117.239.161','5','Unknow browser','Windows NT','zh-CN','','http://meilele.51131430.com','/group_buy.html','/activity.php');");
E_D("replace into `ecs_stats` values('1393300733','180.153.206.16','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/expr.php');");
E_D("replace into `ecs_stats` values('1393300738','101.226.89.116','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/expr.php');");
E_D("replace into `ecs_stats` values('1393300993','112.65.193.14','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1393301059','180.153.205.254','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/group_buy.php');");
E_D("replace into `ecs_stats` values('1393301066','112.64.235.254','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/topic.php');");
E_D("replace into `ecs_stats` values('1393301081','180.153.201.66','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1393301144','124.117.239.218','6','Unknow browser','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1393303002','112.64.235.252','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/category.php');");
E_D("replace into `ecs_stats` values('1393303250','221.180.109.201','2','FireFox 27.0','Windows NT','zh-cn,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1393303265','183.60.35.78','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/expr.php');");
E_D("replace into `ecs_stats` values('1393304256','118.248.146.212','1','Safari 537.36','Windows NT','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1393304257','118.248.146.212','1','Safari 537.36','Windows NT','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1393304777','101.226.33.201','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/brand.php');");
E_D("replace into `ecs_stats` values('1393304795','180.153.201.214','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/brand.php');");
E_D("replace into `ecs_stats` values('1393304810','180.153.211.172','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/category.php');");
E_D("replace into `ecs_stats` values('1393304839','180.153.214.180','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/article.php');");
E_D("replace into `ecs_stats` values('1393304849','101.226.33.208','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/article.php');");
E_D("replace into `ecs_stats` values('1393304854','180.153.161.217','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/article.php');");
E_D("replace into `ecs_stats` values('1393304861','180.153.114.200','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/article.php');");
E_D("replace into `ecs_stats` values('1393305082','180.153.206.23','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1393305090','180.153.201.215','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1393306377','124.117.239.218','7','Unknow browser','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1393307456','101.226.66.193','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1393308180','112.64.235.86','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1393309849','124.117.239.218','8','Unknow browser','Windows NT','zh-CN','','http://meilele.51131430.com','/','/index.php');");
E_D("replace into `ecs_stats` values('1393310181','221.180.109.201','3','FireFox 27.0','Windows NT','zh-cn,zh','','http://meilele.51131430.com','/expr-76.html','/index.php');");
E_D("replace into `ecs_stats` values('1393311649','180.153.214.182','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1393311776','180.153.211.172','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1393311780','180.153.163.190','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/goods.php');");
E_D("replace into `ecs_stats` values('1393312929','124.117.239.218','9','Unknow browser','Windows NT','zh-CN','','http://meilele.51131430.com','/','/xspace.php');");
E_D("replace into `ecs_stats` values('1393313336','14.17.18.147','1','Unknow browser','Unknown','zh-cn, zh','','','','/expr.php');");
E_D("replace into `ecs_stats` values('1393314875','101.226.89.119','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/article.php');");
E_D("replace into `ecs_stats` values('1393316827','118.248.146.212','2','Safari 537.36','Windows NT','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1393316829','118.248.146.212','2','Safari 537.36','Windows NT','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1393319702','221.180.109.201','4','FireFox 27.0','Windows NT','zh-cn,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1393319798','121.196.43.131','1','Unknow browser','Unknown','','','','','/certi.php');");
E_D("replace into `ecs_stats` values('1393483234','59.75.244.97','10','Unknow browser','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1393483238','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1393483275','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/category.php');");
E_D("replace into `ecs_stats` values('1393485033','180.153.206.24','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1393485056','222.73.77.54','1','Unknow browser','Unknown','zh-cn, zh','','','','/category.php');");
E_D("replace into `ecs_stats` values('1393485063','101.226.51.229','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/category.php');");
E_D("replace into `ecs_stats` values('1393485064','180.153.214.200','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/group_buy.php');");
E_D("replace into `ecs_stats` values('1393485085','180.153.206.23','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/activity.php');");
E_D("replace into `ecs_stats` values('1393485089','112.64.235.251','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/topic.php');");
E_D("replace into `ecs_stats` values('1393485103','180.153.163.211','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1393485581','101.226.65.106','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1393485823','101.226.33.201','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/myship.php');");
E_D("replace into `ecs_stats` values('1393486011','101.226.89.123','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1393486074','101.226.33.200','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1393486080','222.73.76.253','1','Unknow browser','Unknown','zh-cn, zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1393486093','101.226.33.216','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1393569547','114.253.84.111','1','Safari 536.11','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1393569934','110.75.105.167','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1393570526','114.253.84.111','1','(Internet Explorer ) Maxthon ','Windows NT','zh-CN','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1393729594','175.0.251.146','2','Safari 537.36','Windows NT','','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1393834024','27.219.167.5','1','Internet Explorer 8.0','Windows XP','zh-cn','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1393912196','116.238.27.79','1','Safari 533.1','Linux','zh-cn','','http://meilele.51131430.com','/mobile/goods.php?id=5','/index.php');");
E_D("replace into `ecs_stats` values('1393984558','118.248.147.228','1','Internet Explorer 7.0','Windows NT','zh-CN','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1393984559','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1393985178','118.248.147.228','1','Safari 537.31','Windows NT','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1393986357','101.226.102.97','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1393986702','180.153.114.197','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/goods.php');");
E_D("replace into `ecs_stats` values('1393990054','118.248.147.228','2','Internet Explorer 7.0','Windows NT','zh-CN','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1393990259','119.147.146.193','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1393992056','180.153.206.13','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1393992095','180.153.206.22','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/xspace.php');");
E_D("replace into `ecs_stats` values('1394077960','118.248.155.1','3','Internet Explorer 7.0','Windows NT','zh-CN','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1394078100','118.248.155.1','2','Safari 537.31','Windows NT','zh-CN,zh','APNIC','','','/xspace.php');");
E_D("replace into `ecs_stats` values('1394372189','0.0.0.0','303','Safari 535.11','Windows NT','zh-CN,zh','IANA','http://localhost:168','/meilele/admin/index.php?act=top','/meilele/index.php');");
E_D("replace into `ecs_stats` values('1394464835','0.0.0.0','2','Safari 535.11','Windows NT','zh-CN,zh','IANA','http://localhost:168','/','/meilele/index.php');");
E_D("replace into `ecs_stats` values('1394545077','0.0.0.0','15','Safari 535.11','Windows NT','zh-CN,zh','IANA','http://localhost:168','/','/meilele/index.php');");
E_D("replace into `ecs_stats` values('1394607696','0.0.0.0','25','Safari 535.11','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1394607907','0.0.0.0','27','Safari 535.11','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402579898','49.89.13.154','1','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402581031','1.193.60.233','1','Internet Explorer 9.0','Windows NT','zh-CN','IANA','','','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1402581123','110.75.105.119','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1402581138','110.75.105.117','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1402581247','110.75.105.100','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402581261','110.75.105.98','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402581378','49.89.13.154','1','Internet Explorer 9.0','Windows NT','zh-CN','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402581650','110.75.105.31','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1402581662','110.75.105.28','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1402581782','180.153.163.207','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/article.php');");
E_D("replace into `ecs_stats` values('1402581903','110.75.105.242','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402581915','110.75.105.240','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402582126','49.89.13.154','72','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402582169','180.153.201.212','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','ttp://www.baidu.com','/s?tn=sdata6621.shtmltp%3A%2F%2F113.21.193.3%2FQWVTU%2F71149ash=&href=http://qcbp.xueyanshe.com/index.php?a=studyDetail&m=Index&cid=1&ucid=104590&artid=84&fid=83&AQIAAJAA0CvqXAAAAAA.&cnd=%21jCbHYAje','/goods.php');");
E_D("replace into `ecs_stats` values('1402582191','1.193.60.233','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402582450','101.226.33.240','1','Unknow browser','Unknown','zh-cn, zh','IANA','ttp://www.niubo.cc','/column/yanhong/4006/016c47c2-caba-40cf-a888-14a30a4faf51.shtml92&wsiphost=localVW7K2nMSpY.html061364&rsv_sug2=0&inputT15328dfdc3725d654e74de8df0e96cce746e4b9d3a3c82452dd20746df0819c2a0403cb1fe76230f','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1402582967','117.139.63.228','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402584283','140.206.203.225','1','Unknow browser','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402585077','221.225.143.44','1','Safari 537.31','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402585331','125.87.73.181','13','Safari 537.1','Windows XP','zh-CN,zh','','http://mll.i7c.com.cn','/','/category.php');");
E_D("replace into `ecs_stats` values('1402586846','120.33.130.230','1','Safari 537.1','Windows NT','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1402589084','220.181.127.126','1','Internet Explorer 8.0','Windows NT','','','http://982140873.p129446.sqnet.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1402589103','220.181.132.194','1','Safari 536.11','','en-us,en','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402618871','60.11.191.79','2','Safari 537.36','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402621566','182.129.87.182','1','Safari 537.1','Windows NT','zh-CN,zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402622417','221.237.156.133','11','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402622858','183.22.159.231','2','Safari 537.31','Windows NT','zh-CN,zh','[δ֪IP0801]','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402623742','180.153.163.187','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/user.php');");
E_D("replace into `ecs_stats` values('1402624576','58.247.53.254','1','FireFox 29.0','Windows NT','zh-cn,zh','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402625393','101.226.65.104','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/goods-26.html=38179592416&_u=djc5m38c81a&skuId=68875148363&areaId=220a=1518&cip=42.234.147.15&uid=13944249278729143459&vid=1791046&peerid=f38be572a939b7&ltu=http%3A%2F%2Fwww.aiweibang.com%2Fyuedu%2F','/index.php');");
E_D("replace into `ecs_stats` values('1402626987','14.111.31.207','14','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402629269','112.82.179.183','1','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402630539','140.206.155.126','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402631384','14.111.31.207','15','Safari 537.1','Windows XP','zh-CN,zh','','http://mll.i7c.com.cn','/#','/affiche.php');");
E_D("replace into `ecs_stats` values('1402632888','171.89.212.64','1','Internet Explorer 8.0','Windows XP','zh-cn','RIPE','http://www.zzcodes.net','/vip/dianzishangwu/20140524/5954.html','/index.php');");
E_D("replace into `ecs_stats` values('1402634478','219.128.193.85','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402634484','14.111.31.207','16','Safari 537.1','Windows XP','zh-CN,zh','','http://mll.i7c.com.cn','/category-1-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402635157','120.32.128.207','2','(Internet Explorer ) Maxthon ','Windows XP','zh-CN','APNIC','http://item.taobao.com','/item.htm?spm=a230r.1.14.78.0h8htE&id=37111176322&ns=1','/index.php');");
E_D("replace into `ecs_stats` values('1402635581','101.224.41.144','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402636143','101.224.41.144','1','Safari 530.17;','Unknown','zh-CN, en-US','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402638054','60.216.75.61','1','FireFox 30.0','Windows NT','zh-cn,zh','ɽ','','','/index.php');");
E_D("replace into `ecs_stats` values('1402638884','114.239.131.90','73','Safari 537.1','Windows NT','zh-CN,zh','IANA','http://hao.360.cn','/?360-brower-grids','/index.php');");
E_D("replace into `ecs_stats` values('1402639996','119.189.228.37','1','Safari 537.36','Windows NT','en-US,en','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1402640046','180.153.214.197','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://mll.i7c.com.cn','/guangzhou.htix?course_id=6422re/Game.swf?versi1&col=zh-CN&dis=0&xuanti7528e42f9d60d7e897acb47e9ad1ae6b8fa2f95abd7d5d45444ca244420c6afd5&p=8270d016d9c111a05bed91207f5fc4&newp=926cc64ad48152ff57ee947','/index.php');");
E_D("replace into `ecs_stats` values('1402640057','180.153.206.33','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://mll.i7c.com.cn','/user.phpng/t/%E5%A5%B3%E7%94%9F/2ANDOM_NUMBER_HEREdgon/inquiry/webui/ponNegSumPG&_ri=396&_ri=396&new=true&AuctionId=%7B!!57kVBZJheVn7scOIw7foNA%7D&searchType=advancedSearch&fwkQBSearchTypeSource=/ora','/captcha.php');");
E_D("replace into `ecs_stats` values('1402640062','101.226.66.181','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/user.php?act=registeruser/img/inc819745b739031c7dc7.shtmla46d7866ea13d95497276777b4k98245b7f7328&domain=taobao.orgesstate\":2,\"category\":\"active\",\"browsertype\":\"1\",\"browser\":\"WEBKIT\",\"sid\":\"140263984','/captcha.php');");
E_D("replace into `ecs_stats` values('1402640063','101.226.51.229','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/user.php5f96373968011ca3009171.html9mlquestid=531993&isovertime=&e71402640069798=1b8k38149b9f13528&domain=taobao.org7&t=1402640073982url=http%3A%2F%2Fnb.zol.com.cn%2F458%2F4588163.html&dt=14026401074','/user.php');");
E_D("replace into `ecs_stats` values('1402640069','101.226.66.191','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/beijing.html786.html=1064&token=86ea5709c6212e4d6dc1cdb63cae6c7e6ee01bd95498296671b7k88240b5f6378&domain=taobao.org5=4&ltr=http%3A%2F%2Fv.2345.com%2F%3Fk1941857&ltu=http%3A%2F%2Ftv.2345.com%2Fdetail%','/group_buy.php');");
E_D("replace into `ecs_stats` values('1402640074','60.216.75.61','2','FireFox 30.0','Windows NT','zh-cn,zh','ɽ','http://mll.i7c.com.cn','/','/goods.php');");
E_D("replace into `ecs_stats` values('1402640157','122.192.32.87','1','Safari 537.36','Windows NT','en,*','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402641162','27.154.54.30','1','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402642413','60.216.75.61','3','Unknow browser','Windows NT','zh-CN','ɽ','','','/index.php');");
E_D("replace into `ecs_stats` values('1402642453','101.226.51.230','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402642907','222.82.33.87','1','FireFox 29.0','Windows XP','zh-cn,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402642936','112.90.78.22','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402642944','14.17.34.191','1','Unknow browser','Unknown','zh-cn, zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402642947','106.123.252.220','1','Unknow browser','Unknown','zh-cn','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402643079','115.236.153.102','1','Safari 537.36','Windows NT','en,*','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402643489','106.123.252.220','1','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402643666','202.96.85.70','1','Internet Explorer 8.0','Windows Vista','zh-cn','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402644155','114.239.131.90','74','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402645107','123.101.121.27','1','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402645624','120.32.128.207','3','(Internet Explorer ) Maxthon ','Windows XP','zh-CN','APNIC','http://mll.052798.com','/goods-26.html','/goods.php');");
E_D("replace into `ecs_stats` values('1402647432','180.153.236.194','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1402648261','202.130.88.148','2','Unknow browser','Unknown','','','http://mll.i7c.com.cn','/flow.php?step=update_cart','/flow.php');");
E_D("replace into `ecs_stats` values('1402648611','116.24.250.141','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402648613','116.24.250.141','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402648714','116.24.250.141','1','FireFox 29.0','Windows NT','zh-cn,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402648772','218.85.208.208','2','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402648773','222.73.77.54','1','Unknow browser','Unknown','zh-cn, zh','','http://mll.i7c.com.cn','/user.phpview/F2-sZ-Pil-o/b77f2a636.html?src=frbdaldjunestCLll/penjinghuahui=a23b62b558a54a908820d0f7651f03f2si5=4&ltr=http%3A%2F%2Fwww.top81.com.cn%2F&ltu=http%3A%2F%2Fwww.top81.com.cn%2Fjujiao%2Fgd','/captcha.php');");
E_D("replace into `ecs_stats` values('1402648982','221.237.156.133','12','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402649641','61.131.53.218','1','FireFox 29.0','Windows NT','zh-cn,zh','','http://item.taobao.com','/item.htm?spm=a230r.1.14.382.RrbawA&id=37111176322&ns=1','/index.php');");
E_D("replace into `ecs_stats` values('1402650503','114.239.131.90','75','Safari 537.1','Windows NT','zh-CN,zh','IANA','http://mll.i7c.com.cn','/category-1-b0.html','/topic.php');");
E_D("replace into `ecs_stats` values('1402650520','110.18.142.247','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402650764','116.24.250.141','2','FireFox 29.0','Windows NT','zh-cn,zh','','http://mll.i7c.com.cn','/category-23-b0-min1400-max2200-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402650764','101.226.66.177','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/category-23-b0-min1400-max2200-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402650870','116.24.250.141','2','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402651061','221.237.156.133','13','Safari 537.1','Windows XP','zh-CN,zh','','http://mll.i7c.com.cn','/category-1-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402651381','180.153.163.207','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://mll.i7c.com.cn','/','/affiche.php');");
E_D("replace into `ecs_stats` values('1402651818','61.135.187.48','1','Safari 537.36','Windows NT','en,*','','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1402651829','221.237.156.133','14','Safari 537.1','Windows XP','zh-CN,zh','','http://mll.i7c.com.cn','/category-8-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402651877','183.16.120.147','1','Safari 537.36','Windows NT','en-US,*','[δ֪IP0801]','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1402653184','106.86.125.136','2','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402653341','113.108.80.206','1','Internet Explorer 9.0','Windows NT','zh-cn','IANA','','','/category.php');");
E_D("replace into `ecs_stats` values('1402653341','14.17.18.144','1','Unknow browser','Unknown','zh-cn, zh','','','','/category.php');");
E_D("replace into `ecs_stats` values('1402654185','116.24.250.141','3','FireFox 29.0','Windows NT','zh-cn,zh','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402654186','112.64.235.245','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/goods-26.html','/captcha.php');");
E_D("replace into `ecs_stats` values('1402654411','106.120.160.119','1','Internet Explorer 8.0','Windows NT','','IANA','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1402654432','119.1.21.132','1','Safari 537.1','Windows XP','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1402654435','220.181.132.195','1','Safari 536.11','Linux','en-us,en','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402654602','101.226.33.199','1','Safari 537.36','Windows NT','en,*','IANA','','','/captcha.php');");
E_D("replace into `ecs_stats` values('1402654650','183.16.120.147','1','Safari 537.36','Windows NT','en-US,*','[δ֪IP0801]','','','/captcha.php');");
E_D("replace into `ecs_stats` values('1402654656','183.16.120.147','1','Safari 537.36','Windows NT','en-US,*','[δ֪IP0801]','','','/captcha.php');");
E_D("replace into `ecs_stats` values('1402654701','183.16.120.147','1','Safari 537.36','Windows NT','en-US,*','[δ֪IP0801]','','','/captcha.php');");
E_D("replace into `ecs_stats` values('1402655192','221.237.156.133','15','Safari 537.1','Windows XP','zh-CN,zh','','http://mll.i7c.com.cn','/category-1-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402656937','221.237.156.133','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/category.php');");
E_D("replace into `ecs_stats` values('1402659350','183.15.77.69','1','FireFox 29.0','Windows NT','zh-cn,zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402659416','180.153.163.191','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://mll.i7c.com.cn','/','/category.php');");
E_D("replace into `ecs_stats` values('1402659579','122.192.32.87','1','Safari 537.36','Windows NT','en,*','','','','/category.php');");
E_D("replace into `ecs_stats` values('1402659817','140.206.242.50','1','Unknow browser','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402659945','175.43.121.15','1','Safari 537.1','Windows NT','zh-CN,zh','[δ֪IP0801]','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402660330','180.153.206.34','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://mll.i7c.com.cn','/category-4-bdbe35a0109df7c73&s=1300&l=1','/goods.php');");
E_D("replace into `ecs_stats` values('1402660338','180.153.206.34','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://mll.i7c.com.cn','/category-4-bdbe35a0109df7c73&s=1300&l=1','/goods.php');");
E_D("replace into `ecs_stats` values('1402660839','221.205.96.154','1','Safari 537.1','Windows NT','zh-CN,zh','ɽ','','','/index.php');");
E_D("replace into `ecs_stats` values('1402661214','101.226.33.208','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/user.php','/user.php');");
E_D("replace into `ecs_stats` values('1402661226','101.226.66.187','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/user.php?act=order_aAutFf9','/user.php');");
E_D("replace into `ecs_stats` values('1402661441','184.105.206.93','1','Safari 537.36','Windows NT','en-US,*','[δ֪IP0801]','','','/user.php');");
E_D("replace into `ecs_stats` values('1402664989','119.84.255.211','17','Safari 537.1','Windows XP','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1402666955','114.239.131.90','76','Safari 537.1','Windows NT','zh-CN,zh','IANA','http://tongji.cnzz.com','/main.php?c=cont&a=frame&siteid=5891729','/index.php');");
E_D("replace into `ecs_stats` values('1402667176','110.203.185.32','1','FireFox 29.0','Windows XP','zh-cn,zh','IANA','http://item.taobao.com','/item.htm?spm=a230r.1.14.5.NjnTQR&id=37111176322&ns=1','/index.php');");
E_D("replace into `ecs_stats` values('1402668232','116.8.57.84','1','Safari 537.1','Windows XP','zh-CN,zh','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402670281','116.253.196.20','1','FireFox 29.0','Windows XP','zh-cn,zh','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402670842','120.32.128.207','4','(Internet Explorer ) Maxthon ','Windows XP','zh-CN','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1402672968','183.15.77.69','2','FireFox 29.0','Windows NT','zh-cn,zh','[δ֪IP0801]','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402672988','119.84.255.211','18','Safari 537.1','Windows XP','zh-CN,zh','APNIC','http://mll.i7c.com.cn','/goods-2.html','/goods.php');");
E_D("replace into `ecs_stats` values('1402673783','101.226.33.239','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/goods-26.html','/captcha.php');");
E_D("replace into `ecs_stats` values('1402674069','180.153.213.141','1','Safari 537.36','Windows NT','en,*','[δ֪IP0801]','','','/captcha.php');");
E_D("replace into `ecs_stats` values('1402674315','221.223.232.243','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402680155','221.223.232.243','2','Safari 537.1','Windows NT','zh-CN,zh','','http://mll.i7c.com.cn','/','/category.php');");
E_D("replace into `ecs_stats` values('1402681442','119.84.255.211','19','Safari 537.1','Windows XP','zh-CN,zh','APNIC','http://mll.i7c.com.cn','/','/category.php');");
E_D("replace into `ecs_stats` values('1402681476','119.84.255.211','1','Safari 537.1','Windows XP','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1402688168','119.84.255.211','20','Safari 537.1','Windows XP','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1402703016','60.174.242.10','1','Unknow browser','Unknown','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402704502','101.226.33.208','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.baidu.com','/s1600&groupId=5fc5e2a483e17a4d7e86b11d4f6642aever_00_161.3m3u8_12272000&query=0&peerId=670d0925f87cb3b19b6177964886b661e565e87e0d461795b1a44305059ba433&rtmfpId=117.121.54.168:8126&ispI','/index.php');");
E_D("replace into `ecs_stats` values('1402706557','122.94.109.104','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402709016','122.193.185.202','2','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402709045','61.54.121.6','1','Unknow browser','Unknown','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402711864','122.193.185.202','3','Safari 537.1','Windows NT','zh-CN,zh','','http://mll.i7c.com.cn','/category-13-b0.html','/index.php');");
E_D("replace into `ecs_stats` values('1402711917','222.161.208.40','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402713456','116.22.20.143','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402713700','114.239.131.90','77','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402713752','122.193.185.202','4','Safari 537.1','Windows NT','zh-CN,zh','','http://mll.i7c.com.cn','/','/goods.php');");
E_D("replace into `ecs_stats` values('1402715155','182.118.20.234','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjIwIjtzOjU6ImludHJvIjtzOjQ6ImJlc3QiO3M6MTg6InNlYXJjaF9lbmNvZGVfdGltZSI7aToxNDAyNzE1MTU1O30=','/search_list.php');");
E_D("replace into `ecs_stats` values('1402715660','140.206.203.234','1','Unknow browser','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402716130','14.111.29.93','21','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402716165','111.206.217.10','1','Unknow browser','Unknown','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402716209','114.239.131.90','2','Internet Explorer 9.0','Windows NT','zh-CN','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402716388','14.17.34.191','1','Unknow browser','Unknown','zh-cn, zh','','','','/category.php');");
E_D("replace into `ecs_stats` values('1402718186','219.155.20.88','1','FireFox 29.0','Windows XP','zh-cn,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402722201','113.107.57.10','1','Unknow browser','Unknown','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402722626','36.6.71.90','1','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402724773','221.237.156.133','16','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402726625','183.15.77.69','3','FireFox 29.0','Windows NT','zh-cn,zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402727671','27.36.60.42','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402728208','115.231.74.10','1','Unknow browser','Unknown','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402731773','114.222.143.208','2','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402732369','14.111.33.101','22','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402733162','58.254.168.98','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402733194','112.64.235.246','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.sogou.com','/','/article.php');");
E_D("replace into `ecs_stats` values('1402733203','101.226.33.238','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.sogou.com','/','/article.php');");
E_D("replace into `ecs_stats` values('1402733313','61.135.187.48','1','Safari 537.36','Windows NT','en,*','','','','/article.php');");
E_D("replace into `ecs_stats` values('1402733816','124.129.13.82','1','Safari 537.36','Windows XP','zh-CN,zh','ɽ','','','/index.php');");
E_D("replace into `ecs_stats` values('1402733825','180.153.214.152','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://www.sogou.com','/','/expr_show.php');");
E_D("replace into `ecs_stats` values('1402734144','119.188.16.39','1','Safari 537.36','Windows NT','en,*','APNIC','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1402734145','116.55.252.10','1','Unknow browser','Unknown','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402734205','107.178.200.5','1','Safari 537.36','Windows NT','zh-CN,en,*','IANA','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1402734447','180.153.211.190','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://www.sogou.com','/','/expr.php');");
E_D("replace into `ecs_stats` values('1402734751','101.226.33.199','1','Safari 537.36','Windows NT','en,*','IANA','','','/expr.php');");
E_D("replace into `ecs_stats` values('1402734831','122.96.31.37','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402735187','221.204.66.18','1','Internet Explorer 8.0','Windows 2003','zh-cn','ɽ','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402735961','14.17.18.146','1','Unknow browser','Unknown','zh-cn, zh','','','','/category.php');");
E_D("replace into `ecs_stats` values('1402736576','183.16.118.48','1','Safari 537.36','Windows NT','en-US,*','[δ֪IP0801]','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1402736806','221.223.232.243','3','Safari 537.1','Windows NT','zh-CN,zh','','http://mll.i7c.com.cn','/xspace.php','/category.php');");
E_D("replace into `ecs_stats` values('1402740929','60.165.12.135','1','(Internet Explorer ) Maxthon ','Windows XP','zh-CN','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402741971','60.165.12.135','1','Safari 537.1','Windows XP','zh-CN,zh','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402743973','110.242.188.238','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402744228','106.120.160.119','1','Internet Explorer 8.0','Windows NT','','IANA','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1402744245','101.199.108.52','1','Safari 536.11','','en-us,en','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402744389','124.129.13.82','2','Safari 537.36','Windows XP','zh-CN,zh','ɽ','','','/index.php');");
E_D("replace into `ecs_stats` values('1402746224','120.209.141.6','1','Unknow browser','Unknown','','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1402746384','118.186.239.184','1','(Internet Explorer ) Maxthon ','Windows NT','zh-CN','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1402751951','110.242.188.238','2','Safari 537.36','Windows NT','zh-CN,zh','IANA','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1402753084','110.242.188.238','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402753728','113.228.57.232','1','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402753730','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1402753741','119.147.146.193','1','Safari 537.36','Windows XP','en,*','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1402754315','125.69.36.51','1','Safari 537.36','Windows NT','en-US,en','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402754625','14.111.34.186','23','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402756382','183.2.216.43','1','Safari 536.11','Windows NT','zh-CN,zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402757482','115.225.19.103','5','Internet Explorer 9.0','Windows NT','zh-CN','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402758007','39.188.136.21','1','FireFox 29.0','Windows XP','zh-cn,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402758113','39.188.136.21','1','Unknow browser','Windows 32','','IANA','http://mll.i7c.com.cn','/','/user.php');");
E_D("replace into `ecs_stats` values('1402758188','123.138.60.134','1','Unknow browser','Unknown','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402758300','39.188.136.21','1','Unknow browser','Windows 32','','IANA','http://mll.i7c.com.cn','/flow.php','/flow.php');");
E_D("replace into `ecs_stats` values('1402758406','39.188.136.21','1','Unknow browser','Windows 32','','IANA','http://mll.i7c.com.cn','/category-2-b0.html','/affiche.php');");
E_D("replace into `ecs_stats` values('1402758700','101.226.168.207','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/brand-3-c23.html','/brand.php');");
E_D("replace into `ecs_stats` values('1402758700','101.226.168.210','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/brand-2-c23.html','/brand.php');");
E_D("replace into `ecs_stats` values('1402758700','101.226.168.210','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/brand-2-c12.html','/brand.php');");
E_D("replace into `ecs_stats` values('1402758703','101.226.168.205','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-23-b1-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402758703','101.226.168.204','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-23-b4-min1400-max2200-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402758703','101.226.168.203','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-23-b1-min4600-max5400-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402758706','101.226.168.203','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-25-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402758706','101.226.168.204','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-24-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402758711','101.226.168.204','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-26-b3-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402758711','101.226.168.208','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-27-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402759050','202.104.41.41','1','FireFox 29.0','Windows NT','zh-cn,zh','','http://item.taobao.com','/item.htm?spm=a230r.1.14.78.xS9WZU&id=37111176322&ns=1','/index.php');");
E_D("replace into `ecs_stats` values('1402759388','101.226.168.246','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-32-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402759388','101.226.168.244','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-30-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402759388','101.226.168.247','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-29-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402759392','101.226.168.244','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-35-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402759392','101.226.168.243','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-34-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402759393','101.226.168.248','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-33-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402759396','101.226.168.243','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-37-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402759396','101.226.168.247','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-36-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402759399','101.226.168.247','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-38-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402759399','101.226.168.248','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-39-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402759632','140.206.242.5','2','Unknow browser','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402759703','182.118.25.240','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-28-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402760285','101.226.166.234','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search.php?encode=YToyOntzOjg6ImtleXdvcmRzIjtzOjk6IuWQuOmhtueBryI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI3NjAyODU7fQ==','/search.php');");
E_D("replace into `ecs_stats` values('1402760285','101.226.166.232','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search.php?encode=YToyOntzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI3NjAyODU7fQ==','/search.php');");
E_D("replace into `ecs_stats` values('1402760289','101.226.166.228','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search.php?encode=YToyOntzOjg6ImtleXdvcmRzIjtzOjEyOiLlrrbnlKjkuabmoYwiO3M6MTg6InNlYXJjaF9lbmNvZGVfdGltZSI7aToxNDAyNzYwMjg5O30=','/search.php');");
E_D("replace into `ecs_stats` values('1402760290','101.226.166.230','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjExIjtzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI3NjAyODk7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402760290','101.226.166.227','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE0IjtzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI3NjAyODk7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402760294','101.226.166.230','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE5IjtzOjU6ImludHJvIjtzOjk6InByb21vdGlvbiI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI3NjAyOTM7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402760300','101.226.166.234','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjIyIjtzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI3NjAzMDA7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402760301','101.226.166.234','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjUiO3M6NToiaW50cm8iO3M6MzoibmV3IjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMjc2MDMwMDt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1402760351','182.118.21.251','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-4-b0-min0-max0-attr1.0.0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402760392','182.118.25.220','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-41-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402760392','182.118.25.217','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-40-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402760392','182.118.25.220','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-42-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402760499','182.118.22.206','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods-19.html','/goods.php');");
E_D("replace into `ecs_stats` values('1402760504','182.118.25.220','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-9-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402760504','182.118.25.216','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/expr.php?id=227','/expr.php');");
E_D("replace into `ecs_stats` values('1402760617','182.118.25.218','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods-13.html','/goods.php');");
E_D("replace into `ecs_stats` values('1402760617','182.118.25.220','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods-15.html','/goods.php');");
E_D("replace into `ecs_stats` values('1402760712','182.118.25.220','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods-17.html','/goods.php');");
E_D("replace into `ecs_stats` values('1402760717','182.118.25.219','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods-16.html','/goods.php');");
E_D("replace into `ecs_stats` values('1402760756','182.118.25.206','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods-20.html','/goods.php');");
E_D("replace into `ecs_stats` values('1402760766','182.118.25.210','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods.php?id=6','/goods.php');");
E_D("replace into `ecs_stats` values('1402760766','182.118.25.206','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/group_buy-1.html','/group_buy.php');");
E_D("replace into `ecs_stats` values('1402760777','182.118.25.206','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/group_buy-2.html','/group_buy.php');");
E_D("replace into `ecs_stats` values('1402760778','182.118.25.208','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/group_buy-3.html','/group_buy.php');");
E_D("replace into `ecs_stats` values('1402760812','182.118.25.220','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods-18.html','/goods.php');");
E_D("replace into `ecs_stats` values('1402760872','101.226.168.237','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/article-32.html','/article.php');");
E_D("replace into `ecs_stats` values('1402760995','182.118.22.214','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/xspace_show.php?id=54','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1402760996','182.118.22.213','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/xspace_show.php?id=55','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1402761000','182.118.22.213','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/xspace_show.php?id=57','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1402761003','182.118.22.214','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/xspace_show.php?id=56','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1402761007','182.118.22.215','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/xspace_show.php?id=59','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1402761011','182.118.22.213','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/xspace_show.php?id=58','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1402761017','182.118.22.213','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/xspace_show.php?id=60','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1402761685','125.44.198.74','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402765186','157.61.249.63','2','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402765225','157.61.249.63','2','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402767801','183.61.140.134','1','Unknow browser','Unknown','','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402769220','111.194.207.219','1','Safari 537.1','Windows NT','zh-CN,zh','IANA','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1402772031','14.111.50.188','24','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402776272','213.242.77.69','1','Unknow browser','Unknown','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402782235','203.211.1.6','1','Unknow browser','Unknown','','̨','','','/index.php');");
E_D("replace into `ecs_stats` values('1402795714','182.245.208.49','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402796180','101.226.166.234','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1402796180','101.226.166.229','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/article-18.html','/article.php');");
E_D("replace into `ecs_stats` values('1402796181','101.226.166.229','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/article-17.html','/article.php');");
E_D("replace into `ecs_stats` values('1402796184','101.226.166.234','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/article-22.html','/article.php');");
E_D("replace into `ecs_stats` values('1402796184','101.226.166.229','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/article-26.html','/article.php');");
E_D("replace into `ecs_stats` values('1402796187','101.226.166.229','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/article-3.html','/article.php');");
E_D("replace into `ecs_stats` values('1402796187','101.226.166.228','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/article-29.html','/article.php');");
E_D("replace into `ecs_stats` values('1402797671','139.202.187.163','1','FireFox 29.0','Windows NT','zh-cn,zh','[δ֪IP0801]','http://item.taobao.com','/item.htm?spm=a230r.1.14.25.arkMVe&id=37111176322&ns=1','/index.php');");
E_D("replace into `ecs_stats` values('1402797889','115.225.19.103','6','Internet Explorer 9.0','Windows NT','zh-CN','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402798678','182.245.208.49','2','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402800019','115.225.19.103','7','Internet Explorer 9.0','Windows NT','zh-CN','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402801727','125.80.243.163','1','FireFox 29.0','Windows XP','zh-cn,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402802161','182.245.208.49','3','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402804013','211.162.33.61','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402804908','211.36.158.170','1','Safari 534.30','Linux','ko-KR, en-US','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402806552','140.206.203.201','3','Unknow browser','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402807166','112.95.44.156','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402808557','101.226.33.206','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/group_buy.htm','/activity.php');");
E_D("replace into `ecs_stats` values('1402808569','101.226.66.172','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.sogou.com','/','/category.php');");
E_D("replace into `ecs_stats` values('1402808745','101.226.89.115','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.sogou.com','/','/xspace.php');");
E_D("replace into `ecs_stats` values('1402808745','123.151.37.144','1','Safari 537.36','Windows NT','en,*','','','','/category.php');");
E_D("replace into `ecs_stats` values('1402808844','123.151.37.144','1','Safari 537.36','Windows NT','en,*','','','','/xspace.php');");
E_D("replace into `ecs_stats` values('1402809816','112.95.44.156','2','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402817690','182.32.109.32','1','Safari 537.1','Windows NT','zh-CN,zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402817729','183.60.1.241','1','Internet Explorer 9.0','Windows NT','zh-cn','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402817733','112.90.11.79','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402817792','116.25.89.230','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402817888','61.178.13.65','1','Safari 537.36','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402831937','110.18.18.90','2','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402831948','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402834264','182.118.20.232','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/article-7.html','/article.php');");
E_D("replace into `ecs_stats` values('1402834264','182.118.20.231','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/article-19.html','/article.php');");
E_D("replace into `ecs_stats` values('1402834372','182.118.20.217','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/brand-3-c13.html','/brand.php');");
E_D("replace into `ecs_stats` values('1402834433','101.226.168.201','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-23-b0-min3000-max3800-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402834433','101.226.168.199','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/brand-3-c26.html','/brand.php');");
E_D("replace into `ecs_stats` values('1402834433','101.226.168.196','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-23-b2-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402834436','101.226.168.197','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-23-b4-min3000-max3800-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402834436','101.226.168.198','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-23-b2-min1400-max2200-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402834436','101.226.168.195','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-26-b4-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402834440','101.226.168.195','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-4-b0-min1400-max2200-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402834441','101.226.168.195','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category.php?id=2','/category.php');");
E_D("replace into `ecs_stats` values('1402834444','101.226.168.198','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/goods.php?id=7','/goods.php');");
E_D("replace into `ecs_stats` values('1402834600','101.226.168.231','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjEiO3M6NToiaW50cm8iO3M6NDoiYmVzdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4MzQ2MDA7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402834603','101.226.168.229','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjExIjtzOjU6ImludHJvIjtzOjk6InByb21vdGlvbiI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4MzQ2MDM7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402834603','101.226.168.232','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE1IjtzOjU6ImludHJvIjtzOjQ6ImJlc3QiO3M6MTg6InNlYXJjaF9lbmNvZGVfdGltZSI7aToxNDAyODM0NjAzO30=','/search_list.php');");
E_D("replace into `ecs_stats` values('1402834607','101.226.168.232','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjIiO3M6NToiaW50cm8iO3M6MzoiaG90IjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMjgzNDYwNzt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1402834607','101.226.168.234','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE3IjtzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4MzQ2MDc7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402834994','101.226.167.239','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjUiO3M6NToiaW50cm8iO3M6OToicHJvbW90aW9uIjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMjgzNDk5NDt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1402834994','101.226.167.240','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjciO3M6NToiaW50cm8iO3M6OToicHJvbW90aW9uIjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMjgzNDk5NDt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1402835314','182.118.22.229','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjIyIjtzOjU6ImludHJvIjtzOjk6InByb21vdGlvbiI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4MzUzMTQ7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402836652','221.231.51.228','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402836746','140.206.203.201','1','Unknow browser','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402837844','221.231.51.228','1','Safari 9537.53','Unknown','zh-cn','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402839075','106.120.160.119','1','Internet Explorer 8.0','Windows NT','','IANA','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1402839140','101.199.108.53','1','Safari 536.11','','en-us,en','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402839193','220.181.132.198','1','Safari 536.11','','en-us,en','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402843826','125.85.171.103','25','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402845144','124.193.192.18','1','Internet Explorer 8.0','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402845265','175.44.52.165','1','Safari 537.31','Windows NT','zh-CN,zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402845955','180.153.206.18','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402846027','101.226.33.227','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402846059','180.153.201.215','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402846064','183.61.160.211','1','Safari 537.36','Windows NT','en,*','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402846145','112.64.235.87','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/goods-26.html','/user.php');");
E_D("replace into `ecs_stats` values('1402846184','101.226.65.104','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/category.php');");
E_D("replace into `ecs_stats` values('1402846199','180.153.206.16','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://mll.i7c.com.cn','/guangzhou.h5f','/category.php');");
E_D("replace into `ecs_stats` values('1402846209','101.226.51.226','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/category-1-b0881b','/topic.php');");
E_D("replace into `ecs_stats` values('1402846230','101.226.33.226','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/categor','/group_buy.php');");
E_D("replace into `ecs_stats` values('1402846395','115.236.159.162','1','Safari 537.36','Windows NT','en,*','IANA','','','/topic.php');");
E_D("replace into `ecs_stats` values('1402847741','183.60.70.29','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402847742','184.105.206.94','1','Safari 537.36','Windows NT','en-US,*','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402851515','182.245.208.60','1','Unknow browser','Windows NT','zh-CN','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402851596','124.193.192.18','2','Internet Explorer 8.0','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402855067','123.130.5.99','1','Safari 537.36','Windows NT','zh-CN,zh','ɽ','','','/index.php');");
E_D("replace into `ecs_stats` values('1402865679','182.118.25.235','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/activity.html','/activity.php');");
E_D("replace into `ecs_stats` values('1402865679','182.118.25.234','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/article-21.html','/article.php');");
E_D("replace into `ecs_stats` values('1402865679','182.118.25.234','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/article-4.html','/article.php');");
E_D("replace into `ecs_stats` values('1402865679','182.118.25.234','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/brand-2-c31.html','/brand.php');");
E_D("replace into `ecs_stats` values('1402866364','182.118.20.171','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-4-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402866381','182.118.20.230','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/brand-4-c26.html','/brand.php');");
E_D("replace into `ecs_stats` values('1402866382','182.118.20.173','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-4-b0-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402866382','182.118.20.168','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-23-b3-min4600-max5400-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402866383','182.118.20.169','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-23-b2-min3000-max3800-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402866383','182.118.20.187','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/flow.php?step=checkout','/flow.php');");
E_D("replace into `ecs_stats` values('1402866591','182.118.20.179','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/group_buy.html','/group_buy.php');");
E_D("replace into `ecs_stats` values('1402866675','182.118.20.201','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjExIjtzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4NjY2NzU7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402866803','182.118.20.173','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjEzIjtzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4NjY4MDM7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402866803','182.118.20.163','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE2IjtzOjU6ImludHJvIjtzOjk6InByb21vdGlvbiI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4NjY4MDM7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402866803','182.118.20.164','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE5IjtzOjU6ImludHJvIjtzOjQ6ImJlc3QiO3M6MTg6InNlYXJjaF9lbmNvZGVfdGltZSI7aToxNDAyODY2ODAzO30=','/search_list.php');");
E_D("replace into `ecs_stats` values('1402867065','182.118.20.177','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjIxIjtzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4NjcwNjU7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402867065','182.118.20.175','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjQiO3M6NToiaW50cm8iO3M6NDoiYmVzdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4NjcwNjU7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402867278','182.118.20.179','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjkiO3M6NToiaW50cm8iO3M6MzoibmV3IjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMjg2NzI3ODt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1402867278','182.118.20.168','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjciO3M6NToiaW50cm8iO3M6NDoiYmVzdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4NjcyNzg7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402869063','117.25.154.243','1','Unknow browser','Unknown','zh-cn,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402876673','14.122.232.90','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402878759','106.60.184.249','1','Safari 537.1','Windows XP','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402881716','119.136.76.101','1','Safari 537.36','Windows NT','zh-CN,zh','APNIC','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402886041','183.184.149.159','2','Internet Explorer 8.0','Windows 2003','zh-cn','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402886229','121.234.243.242','78','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402886309','171.221.109.133','1','Safari 537.36','Windows NT','zh-CN,zh','ARIN','','','/index.php');");
E_D("replace into `ecs_stats` values('1402886407','36.22.51.209','1','Internet Explorer 10.0','Windows NT','zh-CN','IANA','','','/brand.php');");
E_D("replace into `ecs_stats` values('1402886506','183.27.45.96','1','Safari 537.36','Windows XP','zh-CN,zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402887953','101.226.168.195','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjEwIjtzOjU6ImludHJvIjtzOjk6InByb21vdGlvbiI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4ODc5NTM7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402887954','101.226.168.199','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjEiO3M6NToiaW50cm8iO3M6OToicHJvbW90aW9uIjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMjg4Nzk1Mzt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1402887954','101.226.168.198','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjExIjtzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4ODc5NTM7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402887969','101.226.168.195','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjExIjtzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4ODc5Njk7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402887969','101.226.168.198','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjEzIjtzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4ODc5Njk7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402887970','101.226.168.201','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjEzIjtzOjU6ImludHJvIjtzOjk6InByb21vdGlvbiI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4ODc5Njk7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402887970','101.226.168.198','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjEyIjtzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4ODc5Njk7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402887974','101.226.168.198','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE1IjtzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4ODc5NzQ7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402887974','101.226.168.196','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE0IjtzOjU6ImludHJvIjtzOjk6InByb21vdGlvbiI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4ODc5NzQ7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402887975','101.226.168.202','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE2IjtzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4ODc5NzQ7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402887977','101.226.168.195','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE2IjtzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4ODc5Nzc7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402887981','101.226.168.195','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE3IjtzOjU6ImludHJvIjtzOjk6InByb21vdGlvbiI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4ODc5ODE7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402887981','101.226.168.199','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE4IjtzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4ODc5ODE7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402887985','101.226.168.199','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE3IjtzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4ODc5ODQ7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402887989','101.226.168.196','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE4IjtzOjU6ImludHJvIjtzOjk6InByb21vdGlvbiI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4ODc5ODk7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402887989','101.226.168.196','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE5IjtzOjU6ImludHJvIjtzOjk6InByb21vdGlvbiI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4ODc5ODk7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402887994','101.226.168.201','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjIiO3M6NToiaW50cm8iO3M6MzoibmV3IjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMjg4Nzk5NDt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1402888199','163.125.205.228','1','Safari 537.31','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402888238','163.125.200.225','2','Safari 537.31','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402888242','163.125.201.250','3','Safari 537.31','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402889164','115.225.19.103','4','FireFox 29.0','Windows NT','zh-cn,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402889505','101.226.166.220','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE0IjtzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI4ODk1MDQ7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402890715','180.173.184.39','5','FireFox 25.0','Windows NT','zh-cn,zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402890999','218.13.242.15','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402893499','211.162.34.4','4','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402893509','211.162.34.4','1','Internet Explorer 9.0','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402895765','114.253.213.218','2','Safari 537.36','Windows NT','zh-CN,zh','IANA','http://item.taobao.com','/item.htm?spm=a230r.1.14.2.Ch9AjL&id=37111176322&ns=1','/index.php');");
E_D("replace into `ecs_stats` values('1402896206','112.87.123.233','5','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402899711','116.54.121.135','8','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402900064','112.65.193.15','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.sogou.com','/','/group_buy.php');");
E_D("replace into `ecs_stats` values('1402900124','101.226.33.221','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/goods-2.html','/captcha.php');");
E_D("replace into `ecs_stats` values('1402900141','180.153.201.79','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://mll.i7c.com.cn','/group_buy-2.851','/goods.php');");
E_D("replace into `ecs_stats` values('1402900392','184.105.206.93','1','Safari 537.36','Windows NT','en-US,*','[δ֪IP0801]','','','/captcha.php');");
E_D("replace into `ecs_stats` values('1402900727','36.250.72.85','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','http://item.taobao.com','/item.htm?spm=a230r.1.14.5.9zrRtN&id=37111176322&ns=1','/goods.php');");
E_D("replace into `ecs_stats` values('1402900738','101.226.51.226','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/goods-26.html','/index.php');");
E_D("replace into `ecs_stats` values('1402900738','101.226.33.200','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/goods-26.html','/captcha.php');");
E_D("replace into `ecs_stats` values('1402900791','119.188.16.39','1','Safari 537.36','Windows NT','en,*','APNIC','','','/captcha.php');");
E_D("replace into `ecs_stats` values('1402901877','114.66.6.152','2','Safari 537.36','Windows NT','zh-CN,zh','IANA','http://item.taobao.com','/item.htm?spm=a230r.1.14.217.9zrRtN&id=39194363672&ns=1','/index.php');");
E_D("replace into `ecs_stats` values('1402901905','101.226.33.228','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/','/goods.php');");
E_D("replace into `ecs_stats` values('1402901967','101.226.66.176','1','Safari 537.36','Windows NT','en,*','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402901977','112.65.193.16','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/goods-2.html','/captcha.php');");
E_D("replace into `ecs_stats` values('1402903954','119.186.216.234','1','Safari 537.31','Windows NT','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1402904118','106.86.118.251','3','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402905493','115.206.12.19','1','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://item.taobao.com','/item.htm?spm=a230r.1.0.0.4AuE1E&id=37111176322&ns=1','/index.php');");
E_D("replace into `ecs_stats` values('1402906487','59.38.67.195','1','(Internet Explorer ) Maxthon ','Windows NT','zh-CN','','http://www.baidu.com','/baidu?word=http%3A%2F%2Fmll.i7c.com.cn%2Fxspace.php&ie=utf-8&tn=myie2dg&ch=6','/xspace.php');");
E_D("replace into `ecs_stats` values('1402906490','119.147.146.194','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/xspace.php');");
E_D("replace into `ecs_stats` values('1402906601','14.111.55.35','26','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402910207','49.75.197.42','1','Safari 537.1','Windows XP','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402910402','171.14.78.79','2','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402910961','125.39.9.138','1','FireFox 30.0','Windows XP','zh-cn,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912025','49.75.197.42','1','Safari 534.30','Linux','zh-CN, en-US','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912186','49.75.197.42','1','Safari 537.36','Linux','zh-CN','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912186','49.75.197.42','1','Safari 537.36','Linux','zh-CN','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912198','112.64.199.29','1','FireFox 3.0b4','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912198','140.207.55.79','1','FireFox 3.0b4','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912198','140.207.54.187','1','FireFox 3.0b4','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912199','112.64.199.29','1','FireFox 3.0b4','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912199','27.115.124.46','1','FireFox 3.0b4','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912199','140.207.54.180','1','FireFox 3.0b4','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912199','27.115.124.46','1','FireFox 3.0b4','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912200','27.115.124.46','1','FireFox 3.0b4','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912200','140.207.54.187','1','FireFox 3.0b4','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912200','112.64.199.29','1','FireFox 3.0b4','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912200','112.64.199.29','1','FireFox 3.0b4','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912201','140.207.54.187','1','FireFox 3.0b4','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912201','140.207.54.180','1','FireFox 3.0b4','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912201','140.207.54.180','1','FireFox 3.0b4','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912201','140.207.54.180','1','FireFox 3.0b4','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912201','140.207.54.180','1','FireFox 3.0b4','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912201','27.115.124.45','1','FireFox 3.0b4','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912201','27.115.124.45','1','FireFox 3.0b4','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912202','27.115.124.45','1','FireFox 3.0b4','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912202','27.115.124.45','1','FireFox 3.0b4','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402912704','221.205.180.95','3','Internet Explorer 8.0','Windows 2003','zh-cn','ɽ','','','/index.php');");
E_D("replace into `ecs_stats` values('1402913281','106.60.175.231','9','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402914643','221.205.180.95','4','Internet Explorer 8.0','Windows 2003','zh-cn','ɽ','http://mll.i7c.com.cn','/category-6-b0.html','/index.php');");
E_D("replace into `ecs_stats` values('1402917172','180.153.236.173','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1402919975','221.218.226.72','1','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402923114','114.104.155.122','1','Internet Explorer 8.0','Windows XP','zh-cn','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402923622','180.153.214.180','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/group_buy.php');");
E_D("replace into `ecs_stats` values('1402923634','101.226.66.177','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/group_buy-2.html','/group_buy.php');");
E_D("replace into `ecs_stats` values('1402923638','125.127.151.246','1','Safari 537.36','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402923702','180.153.163.189','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://mll.i7c.com.cn','/group_buy.php','/group_buy.php');");
E_D("replace into `ecs_stats` values('1402923967','115.236.153.102','1','Safari 537.36','Windows NT','en,*','IANA','','','/group_buy.php');");
E_D("replace into `ecs_stats` values('1402924710','49.75.197.42','2','Safari 534.30','Linux','zh-CN, en-US','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402925652','114.104.155.122','2','Internet Explorer 8.0','Windows XP','zh-cn','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402925662','180.212.95.54','1','Safari 537.36','Windows XP','zh-CN,zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402925884','106.120.160.119','1','Internet Explorer 8.0','Windows NT','','IANA','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1402925915','220.181.132.197','1','Safari 536.11','','en-us,en','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402925937','112.65.211.246','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402926473','101.226.33.208','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/group_buy.php');");
E_D("replace into `ecs_stats` values('1402926476','180.153.206.33','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/group_buy.php');");
E_D("replace into `ecs_stats` values('1402926500','123.151.37.144','1','Safari 537.36','Windows NT','en,*','','','','/group_buy.php');");
E_D("replace into `ecs_stats` values('1402927862','101.229.220.140','6','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402928161','121.234.243.242','79','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402929520','121.234.243.242','80','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402931477','183.228.24.4','3','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://item.taobao.com','/item.htm?spm=a1z09.2.9.24.1CEJRE&id=37111176322','/index.php');");
E_D("replace into `ecs_stats` values('1402937881','14.111.20.165','27','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402937944','58.59.192.240','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402938493','117.23.79.251','1','FireFox 29.0','Windows NT','zh-cn,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402939791','14.111.20.165','28','Safari 537.1','Windows XP','zh-CN,zh','','http://mll.i7c.com.cn','/','/category.php');");
E_D("replace into `ecs_stats` values('1402939869','58.59.192.240','2','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402944174','14.111.20.165','29','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402961049','182.118.25.202','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/activity.php','/activity.php');");
E_D("replace into `ecs_stats` values('1402961049','182.118.25.205','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/article.php?cat_id=-1','/article.php');");
E_D("replace into `ecs_stats` values('1402961049','182.118.25.204','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/brand-3-c23.html','/brand.php');");
E_D("replace into `ecs_stats` values('1402961049','182.118.25.202','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-23-b2-min4600-max5400-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402961099','182.118.25.202','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-23-b3-min1400-max2200-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402961099','182.118.25.203','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-23-b4-min4600-max5400-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402961358','182.118.25.231','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-31-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402961553','182.118.20.218','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjEwIjtzOjU6ImludHJvIjtzOjk6InByb21vdGlvbiI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI5NjE1NTM7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402961568','182.118.20.218','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE0IjtzOjU6ImludHJvIjtzOjQ6ImJlc3QiO3M6MTg6InNlYXJjaF9lbmNvZGVfdGltZSI7aToxNDAyOTYxNTY4O30=','/search_list.php');");
E_D("replace into `ecs_stats` values('1402961568','182.118.20.218','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE3IjtzOjU6ImludHJvIjtzOjk6InByb21vdGlvbiI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI5NjE1Njg7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402961584','182.118.20.216','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjIwIjtzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDI5NjE1ODQ7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1402961584','182.118.20.216','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjMiO3M6NToiaW50cm8iO3M6MzoibmV3IjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMjk2MTU4NDt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1402961596','182.118.20.219','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjciO3M6NToiaW50cm8iO3M6MzoiaG90IjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMjk2MTU5Njt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1402961913','101.226.167.198','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/flow.php','/flow.php');");
E_D("replace into `ecs_stats` values('1402961913','101.226.167.197','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/goods-22.html','/goods.php');");
E_D("replace into `ecs_stats` values('1402961913','101.226.167.196','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-5-b0-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402961916','101.226.166.254','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/goods.php?id=7','/goods.php');");
E_D("replace into `ecs_stats` values('1402961917','101.226.166.252','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/goods.php?id=11','/goods.php');");
E_D("replace into `ecs_stats` values('1402969628','113.95.159.236','1','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402969760','223.245.0.132','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402969821','113.95.159.236','1','Safari 537.36','Linux','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402972561','119.119.50.231','1','Safari 537.36','Windows NT','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1402976071','220.162.90.48','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402976228','111.179.52.210','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1402976905','14.17.18.144','1','Unknow browser','Unknown','zh-cn, zh','','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1402976905','119.147.3.188','1','Internet Explorer 9.0','Windows NT','zh-cn','APNIC','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1402976924','119.119.50.231','1','Safari 537.36','Windows NT','zh-CN,zh','APNIC','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1402976927','119.119.50.231','1','Safari 537.1','Windows NT','zh-CN,zh','APNIC','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1402977136','121.12.111.141','1','Safari 537.36','Windows NT','en,*','','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1402981625','221.237.156.133','17','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402984268','218.82.255.162','1','FireFox 29.0','Windows NT','zh-cn,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402985076','113.95.159.236','2','Safari 537.1','Windows NT','zh-CN,zh','IANA','http://mll.i7c.com.cn','/category-1-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1402990480','112.233.221.83','1','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1402991833','14.17.34.189','1','Unknow browser','Unknown','zh-cn, zh','','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1402991850','119.119.50.231','1','Safari 537.36','Windows NT','zh-CN,zh','APNIC','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1402992620','113.123.75.203','1','FireFox 29.0','Windows XP','zh-cn,zh','IANA','http://item.taobao.com','/item.htm?spm=a230r.1.14.14.CeOSI7&id=37111176322&ns=1','/index.php');");
E_D("replace into `ecs_stats` values('1402995562','116.53.197.185','10','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402996451','183.60.70.29','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1402996491','116.53.197.185','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402996777','123.151.37.144','1','Safari 537.36','Windows NT','en,*','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402996777','116.53.197.185','1','Safari 534.30','Linux','zh-CN, en-US','','','','/index.php');");
E_D("replace into `ecs_stats` values('1402997402','171.221.169.9','1','Safari 537.1','Windows XP','zh-CN,zh','ARIN','','','/index.php');");
E_D("replace into `ecs_stats` values('1402998540','119.119.50.231','2','Safari 537.36','Windows NT','zh-CN,zh','APNIC','http://mll.i7c.com.cn','/expr_show.php?id=2','/index.php');");
E_D("replace into `ecs_stats` values('1402998955','219.131.217.79','2','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403006985','121.234.243.242','81','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403007188','223.199.121.237','1','Internet Explorer 8.0','Windows NT','zh-CN','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403008588','124.160.208.189','1','Safari 537.36','Windows NT','zh-CN,zh','','http://www.163ym.com','/product/search_a1v_e1_9v_p2v.html','/index.php');");
E_D("replace into `ecs_stats` values('1403012775','61.145.237.148','3','Safari 537.36','Windows NT','zh-CN,zh','','http://mll.i7c.com.cn','/index.php','/affiche.php');");
E_D("replace into `ecs_stats` values('1403013598','106.120.160.119','1','Internet Explorer 8.0','Windows NT','','IANA','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1403013662','220.181.132.200','1','Safari 536.11','','en-us,en','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403013720','101.199.112.52','1','Safari 536.11','','en-us,en','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403016921','60.19.146.159','2','Safari 537.36','Windows XP','zh-CN,zh','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403016922','119.147.146.195','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403019677','116.249.110.189','2','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403022312','139.202.187.163','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://www.baidu.com','/s?wd=http%3A%2F%2Fmll.i7c.com.cn&ie=UTF-8&oe=UTF-8&abar=2&tn=49029047_oem_dg&ch=33','/index.php');");
E_D("replace into `ecs_stats` values('1403022531','14.111.35.167','30','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403023126','112.65.193.14','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.baidu.com','/s?wd=http%3A%2F%2Fmll.i7c.com.cn&ie=UTF-8&oe=UTF-8&abar=2&tn=49029047_oem_dg&ch=33','/user.php');");
E_D("replace into `ecs_stats` values('1403023161','101.226.33.218','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403023164','101.226.33.203','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/','/flow.php');");
E_D("replace into `ecs_stats` values('1403023175','112.65.193.14','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/goods-26.html','/flow.php');");
E_D("replace into `ecs_stats` values('1403023281','118.112.236.116','1','Safari 535.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403023282','118.112.236.114','1','','Unknown','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403023511','118.112.234.81','2','Safari 535.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403023524','123.151.37.144','1','Safari 537.36','Windows NT','en,*','','','','/flow.php');");
E_D("replace into `ecs_stats` values('1403023583','125.39.206.224','1','Safari 537.36','Windows NT','en,*','','','','/flow.php');");
E_D("replace into `ecs_stats` values('1403031077','14.111.35.167','31','Safari 537.1','Windows XP','zh-CN,zh','','http://mll.i7c.com.cn','/','/topic.php');");
E_D("replace into `ecs_stats` values('1403033038','223.199.121.237','2','Internet Explorer 8.0','Windows NT','zh-CN','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403033380','14.111.35.167','32','Safari 537.1','Windows XP','zh-CN,zh','','http://mll.i7c.com.cn','/','/group_buy.php');");
E_D("replace into `ecs_stats` values('1403039071','5.9.145.110','1','Unknow browser','Unknown','zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403044640','123.120.98.178','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403046648','123.120.98.178','1','Safari 534.30','Linux','zh-cn','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403052000','219.128.53.98','1','Unknow browser','Windows NT','zh-Hans-CN,zh-Hans','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403052840','113.95.156.27','3','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403057668','220.163.78.164','11','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403059200','171.221.168.189','1','Safari 537.36','Windows NT','zh-CN,zh','ARIN','','','/index.php');");
E_D("replace into `ecs_stats` values('1403059473','115.60.133.89','1','Internet Explorer 10.0','Windows NT','zh-CN','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403060387','27.47.7.145','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403060789','218.90.42.43','1','Safari 537.36','Windows 2003','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403060855','219.131.207.0','4','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403061645','180.153.214.178','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://mll.i7c.com.cn','/','/affiche.php');");
E_D("replace into `ecs_stats` values('1403061679','101.226.51.228','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/','/affiche.php');");
E_D("replace into `ecs_stats` values('1403061738','184.105.206.93','1','Safari 537.36','Windows NT','en-US,*','[δ֪IP0801]','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1403061855','119.188.16.39','1','Safari 537.36','Windows NT','en,*','APNIC','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1403062813','14.17.18.147','1','Unknow browser','Unknown','zh-cn, zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403064053','219.131.207.0','5','Safari 537.36','Windows NT','zh-CN,zh','','http://mll.i7c.com.cn','/','/affiche.php');");
E_D("replace into `ecs_stats` values('1403065285','125.85.176.132','33','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403068130','125.85.176.132','34','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403068277','58.59.192.240','3','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403069254','27.115.98.238','1','FireFox 29.0','Windows NT','zh-cn,zh','IANA','http://www.zzcodes.net','/vip/dianzishangwu/20140524/5954.html','/index.php');");
E_D("replace into `ecs_stats` values('1403070343','183.60.35.78','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1403071435','219.128.53.98','1','Unknow browser','Windows NT','zh-Hans-CN,zh-Hans','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403076699','171.221.168.189','2','Safari 537.36','Windows NT','zh-CN,zh','ARIN','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403079230','36.249.126.14','1','Unknow browser','Unknown','zh-cn,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403080568','14.111.40.255','35','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403082858','124.231.174.172','1','FireFox 29.0','Windows NT','zh-cn,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403083874','219.148.147.131','1','Safari 537.31','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403083891','219.148.147.131','1','Safari 537.31','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403084173','58.251.146.206','1','FireFox 30.0','Windows NT','zh-cn,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403086940','183.16.118.43','1','Safari 537.36','Windows NT','en,*','[δ֪IP0801]','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1403094927','101.70.75.59','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403094935','183.60.35.78','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1403094963','219.82.202.124','1','Internet Explorer 8.0','Windows XP','zh-cn','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403097089','124.231.174.172','2','FireFox 30.0','Windows NT','zh-cn,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403100069','114.239.231.13','82','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403105595','139.202.187.163','1','FireFox 30.0','Windows NT','zh-cn,zh','[δ֪IP0801]','http://item.taobao.com','/item.htm?spm=a230r.1.14.19.YmlONO&id=37111176322&ns=1','/goods.php');");
E_D("replace into `ecs_stats` values('1403107259','60.8.76.114','1','Internet Explorer 7.0','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403107265','60.8.76.114','1','Internet Explorer 7.0','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403107405','118.194.217.54','1','Safari 537.1','Windows NT','zh-CN,zh','APNIC','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403108212','101.226.33.240','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403108216','180.153.206.38','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://mll.i7c.com.cn','/goods-26.html','/captcha.php');");
E_D("replace into `ecs_stats` values('1403108663','111.161.49.236','1','Safari 537.36','Windows NT','en,*','IANA','','','/captcha.php');");
E_D("replace into `ecs_stats` values('1403109321','101.226.166.226','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-31-b0-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403109338','101.226.169.205','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/brand-3-c12.html','/brand.php');");
E_D("replace into `ecs_stats` values('1403109339','101.226.169.204','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/activity.html','/activity.php');");
E_D("replace into `ecs_stats` values('1403109339','101.226.169.206','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/article_cat-10.html','/article_cat.php');");
E_D("replace into `ecs_stats` values('1403109342','101.226.169.201','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/brand-4-c23.html','/brand.php');");
E_D("replace into `ecs_stats` values('1403109342','101.226.169.200','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-23-b1-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403109342','101.226.169.202','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-13-b0-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403109346','101.226.169.201','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-23-b3-min4600-max5400-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403109346','101.226.169.200','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-23-b3-min3000-max3800-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403109349','101.226.169.205','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-26-b0-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403109350','101.226.169.199','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-26-b4-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403109597','101.226.168.245','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjEwIjtzOjU6ImludHJvIjtzOjQ6ImJlc3QiO3M6MTg6InNlYXJjaF9lbmNvZGVfdGltZSI7aToxNDAzMTA5NTk3O30=','/search_list.php');");
E_D("replace into `ecs_stats` values('1403109597','101.226.168.244','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjEzIjtzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMxMDk1OTc7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403109601','182.118.21.226','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-4-b3-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403109601','182.118.21.226','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods-23.html','/goods.php');");
E_D("replace into `ecs_stats` values('1403109601','182.118.21.230','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods.php?id=20','/goods.php');");
E_D("replace into `ecs_stats` values('1403109602','182.118.21.225','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods-6.html','/goods.php');");
E_D("replace into `ecs_stats` values('1403109602','182.118.21.223','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods.php?id=22','/goods.php');");
E_D("replace into `ecs_stats` values('1403109602','101.226.168.247','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE4IjtzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMxMDk2MDI7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403109610','101.226.168.249','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjUiO3M6NToiaW50cm8iO3M6MzoiaG90IjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMzEwOTYxMDt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1403109610','101.226.168.250','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjgiO3M6NToiaW50cm8iO3M6OToicHJvbW90aW9uIjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMzEwOTYxMDt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1403111437','106.120.160.119','1','Internet Explorer 8.0','Windows NT','','IANA','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1403111454','101.199.112.50','1','Safari 536.11','','en-us,en','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403120587','157.61.249.12','3','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1403125388','223.199.45.151','3','Internet Explorer 8.0','Windows NT','zh-CN','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403129080','223.199.45.151','4','Internet Explorer 8.0','Windows NT','zh-CN','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403140442','222.240.151.10','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403140777','115.211.153.150','1','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403144936','59.40.67.69','1','Safari 537.36','Windows NT','zh-CN,zh','','http://www.163ym.com','/product/goods4655.html','/index.php');");
E_D("replace into `ecs_stats` values('1403146931','114.239.192.4','83','Internet Explorer 9.0','Windows NT','zh-CN','IANA','http://www.baidu.com','/link?url=ALLu4aU8jksIQiFJ37lBZWYK4iCOAfFXc2u39Mu7Cvy&ie=utf-8&bs=%E7%BE%8E%E4%B9%90%E4%B9%90%E6%BA%90%E7%A0%81&f=8&wd=mll.i7c.com&oq=%E7%BE%8E%E4%B9%90%E4%B9%90%E6%BA%90%E7%A0%81','/index.php');");
E_D("replace into `ecs_stats` values('1403147093','14.17.34.182','1','Unknow browser','Unknown','zh-cn, zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403147094','112.90.78.25','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403147112','171.125.244.126','1','Internet Explorer 8.0','Windows NT','zh-cn','RIPE','','','/index.php');");
E_D("replace into `ecs_stats` values('1403148203','61.163.147.11','2','Internet Explorer 10.0','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403148692','112.81.43.177','1','Safari 537.1','Windows XP','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403148940','114.239.192.4','84','Safari 537.1','Windows NT','zh-CN,zh','IANA','http://mll.i7c.com.cn','/admin/index.php?act=top','/index.php');");
E_D("replace into `ecs_stats` values('1403150687','101.226.89.119','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/user.php');");
E_D("replace into `ecs_stats` values('1403150690','112.64.235.87','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/user.php');");
E_D("replace into `ecs_stats` values('1403150978','123.151.37.144','1','Safari 537.36','Windows NT','en,*','','','','/user.php');");
E_D("replace into `ecs_stats` values('1403153017','221.237.156.133','18','Safari 537.1','Windows XP','zh-CN,zh','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403153175','114.239.192.4','85','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403153570','61.177.159.118','1','Internet Explorer 10.0','Windows NT','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403153571','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1403153573','119.147.146.189','1','Safari 537.36','Windows XP','en,*','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1403154540','59.56.172.247','1','Safari 537.1','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156098','59.173.227.76','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156506','1.80.192.251','1','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156650','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156651','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156653','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156654','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156654','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156654','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156655','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156655','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156655','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156655','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156655','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156655','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156655','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156655','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156655','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156655','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156655','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156655','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156655','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156655','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156655','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156656','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156657','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156657','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156657','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156657','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156657','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156657','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156657','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156657','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156657','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156657','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156657','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156657','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156657','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156657','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156658','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156658','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156658','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156658','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156658','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156658','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156658','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156658','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156658','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156658','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156658','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156658','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156658','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156658','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156658','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156659','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156660','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156660','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156660','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156660','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156660','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156660','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156660','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156660','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156660','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156660','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156660','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156660','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156660','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156660','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156660','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156660','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156661','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156661','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156661','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156661','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156661','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156661','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156661','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156661','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156661','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156661','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156661','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156661','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156661','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156661','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156661','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156661','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156661','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156662','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156662','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156662','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156662','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156662','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156662','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156662','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156662','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156662','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156662','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156662','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156662','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156662','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156662','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156663','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156663','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156663','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156663','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156663','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156664','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156664','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156664','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156665','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156665','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156665','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156666','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156666','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156666','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156667','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156667','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156667','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156668','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156668','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156669','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156670','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156671','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156671','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156672','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156672','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156672','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156672','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156673','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156673','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156674','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156674','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156674','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156674','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156674','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156675','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156675','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156676','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156677','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156678','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156678','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156679','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156679','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156679','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156679','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156679','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156679','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156679','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156680','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156680','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156680','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156680','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156680','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156680','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156681','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156681','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156681','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156682','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156682','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156682','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156682','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156682','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156682','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156682','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156682','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156683','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156683','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156684','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156685','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156687','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156688','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156688','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156688','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156688','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156688','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156688','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156688','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156688','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156688','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156689','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156689','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156689','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156689','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156690','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156690','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156690','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156691','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156691','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156691','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156691','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156691','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156692','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156692','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156692','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156695','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156695','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156695','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156695','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156696','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156696','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156696','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156697','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156697','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156697','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156697','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156697','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156698','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156699','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156699','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156699','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156700','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156700','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156700','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156701','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156701','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156701','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156701','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156701','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156702','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156702','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156702','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403156814','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','http://mll.i7c.com.cn','/respond.php?code=alipay&subject=0&out_trade_no=%00''%20and%20(select%20*%20from%20(select%20count(*),concat(floor(rand(0)*2),(select%20concat(user_name,password)%20from%20ecs_admin_user%20limit%201))a','/respond.php');");
E_D("replace into `ecs_stats` values('1403156815','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','http://mll.i7c.com.cn','/respond.php?code=alipay&subject=0&out_trade_no=%00''%20and%20(select%20*%20from%20(select%20count(*),concat(floor(rand(0)*2),(select%20concat(user_name,password)%20from%20ecs_admin_user%20limit%201))a','/respond.php');");
E_D("replace into `ecs_stats` values('1403156816','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','http://mll.i7c.com.cn','/flow.php?step=update_cart','/flow.php');");
E_D("replace into `ecs_stats` values('1403156817','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','http://mll.i7c.com.cn','/respond.php?code=alipay&subject=0&out_trade_no=%00''%20and%20(select%20*%20from%20(select%20count(*),concat(floor(rand(0)*2),(select%20concat(user_name,password)%20from%20ecs_admin_user%20limit%201))a','/respond.php');");
E_D("replace into `ecs_stats` values('1403156817','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','http://mll.i7c.com.cn','/respond.php?code=alipay&subject=0&out_trade_no=%00''%20and%20(select%20*%20from%20(select%20count(*),concat(floor(rand(0)*2),(select%20concat(user_name,password)%20from%20ecs_admin_user%20limit%201))a','/respond.php');");
E_D("replace into `ecs_stats` values('1403156819','1.80.192.251','1','Internet Explorer 6.0','Windows XP','','IANA','http://mll.i7c.com.cn','/respond.php?code=alipay&subject=0&out_trade_no=%00''%20and%20(select%20*%20from%20(select%20count(*),concat(floor(rand(0)*2),(select%20concat(user_name,password)%20from%20ecs_admin_user%20limit%201))a','/respond.php');");
E_D("replace into `ecs_stats` values('1403157020','1.80.192.251','1','Internet Explorer 6.0','Windows XP','zh-cn','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403157364','180.173.184.39','1','Unknow browser','Windows NT','zh-CN','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1403159707','119.128.143.154','1','Safari 537.1','Windows NT','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1403160461','1.198.1.173','3','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403160490','171.221.168.189','3','Safari 537.36','Windows NT','zh-CN,zh','ARIN','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403160650','101.226.33.217','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/topic.php?topic_id=1','/affiche.php');");
E_D("replace into `ecs_stats` values('1403160652','101.226.51.230','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/topic.php?topic_id=1','/affiche.php');");
E_D("replace into `ecs_stats` values('1403160682','180.153.201.216','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://mll.i7c.com.cn','/','/expr.php');");
E_D("replace into `ecs_stats` values('1403160683','112.64.235.87','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/goods-1.html','/index.php');");
E_D("replace into `ecs_stats` values('1403160691','101.226.33.201','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/expr.php','/expr_show.php');");
E_D("replace into `ecs_stats` values('1403160698','112.65.193.14','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/goods-1.html','/index.php');");
E_D("replace into `ecs_stats` values('1403160727','101.226.33.199','1','Safari 537.36','Windows NT','en,*','IANA','','','/affiche.php');");
E_D("replace into `ecs_stats` values('1403160988','101.226.89.115','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/goods-26.html','/captcha.php');");
E_D("replace into `ecs_stats` values('1403160993','180.153.163.191','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://mll.i7c.com.cn','/goods-26.html','/goods.php');");
E_D("replace into `ecs_stats` values('1403161070','125.39.206.224','1','Safari 537.36','Windows NT','en,*','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403161106','122.192.32.87','1','Safari 537.36','Windows NT','en,*','','','','/captcha.php');");
E_D("replace into `ecs_stats` values('1403161344','101.226.66.177','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.sogou.com','/','/category.php');");
E_D("replace into `ecs_stats` values('1403161647','171.212.214.241','1','Internet Explorer 7.0','Windows XP','zh-cn','ARIN','http://www.163ym.com','/product/search_a1v_e1_9v_p1v.html','/index.php');");
E_D("replace into `ecs_stats` values('1403161697','119.147.146.189','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403162218','61.134.52.162','1','Internet Explorer 7.0','Windows XP','zh-cn','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403163487','1.198.1.173','4','Safari 537.36','Windows NT','zh-CN,zh','IANA','http://mll.i7c.com.cn','/','/category.php');");
E_D("replace into `ecs_stats` values('1403166345','61.177.159.118','2','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403166849','101.81.34.207','1','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403167144','182.118.22.210','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/article-10.html','/article.php');");
E_D("replace into `ecs_stats` values('1403167144','182.118.22.210','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/article-37.html','/article.php');");
E_D("replace into `ecs_stats` values('1403167149','182.118.22.206','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/article-40.html','/article.php');");
E_D("replace into `ecs_stats` values('1403167149','182.118.22.207','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/article-38.html','/article.php');");
E_D("replace into `ecs_stats` values('1403167152','182.118.22.206','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/article-54.html','/article.php');");
E_D("replace into `ecs_stats` values('1403167152','182.118.22.209','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/article-55.html','/article.php');");
E_D("replace into `ecs_stats` values('1403167155','182.118.22.208','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/article-56.html','/article.php');");
E_D("replace into `ecs_stats` values('1403167155','182.118.22.208','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/article-57.html','/article.php');");
E_D("replace into `ecs_stats` values('1403167158','182.118.22.206','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/article-58.html','/article.php');");
E_D("replace into `ecs_stats` values('1403167158','182.118.22.207','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/article-59.html','/article.php');");
E_D("replace into `ecs_stats` values('1403167367','182.118.20.165','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/article-60.html','/article.php');");
E_D("replace into `ecs_stats` values('1403167375','182.118.25.219','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-13-b1-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403167375','182.118.25.218','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/brand.html','/brand.php');");
E_D("replace into `ecs_stats` values('1403167375','182.118.25.218','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-1-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403167375','182.118.25.219','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/article_cat-11.html','/article_cat.php');");
E_D("replace into `ecs_stats` values('1403167376','182.118.25.217','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/brand-1-c13.html','/brand.php');");
E_D("replace into `ecs_stats` values('1403167379','182.118.25.219','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-23-b0-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403167379','182.118.25.216','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-23-b4-min1400-max2200-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403167383','182.118.25.219','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-23-b4-min3000-max3800-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403167384','182.118.25.217','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-31-b2-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403167387','182.118.25.216','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-4-b1-min0-max0-attr0.0.0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403167644','101.226.166.250','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-4-b2-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403167708','182.118.21.254','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category.php?id=29','/category.php');");
E_D("replace into `ecs_stats` values('1403167708','182.118.21.250','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category.php?id=7','/category.php');");
E_D("replace into `ecs_stats` values('1403167903','101.226.168.198','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search.php?encode=YToyOntzOjg6ImtleXdvcmRzIjtzOjEyOiLluIPoibrmspnlj5EiO3M6MTg6InNlYXJjaF9lbmNvZGVfdGltZSI7aToxNDAzMTY3OTAzO30=','/search.php');");
E_D("replace into `ecs_stats` values('1403168016','101.226.168.226','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE3IjtzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMxNjgwMTY7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403168016','101.226.168.225','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjEiO3M6NToiaW50cm8iO3M6MzoibmV3IjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMzE2ODAxNjt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1403168023','101.226.168.226','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjMiO3M6NToiaW50cm8iO3M6MzoiaG90IjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMzE2ODAyMzt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1403168023','101.226.168.219','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjIiO3M6NToiaW50cm8iO3M6OToicHJvbW90aW9uIjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMzE2ODAyMzt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1403168023','101.226.168.223','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjYiO3M6NToiaW50cm8iO3M6MzoiaG90IjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMzE2ODAyMzt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1403168027','101.226.168.220','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/user.php?act=get_password','/user.php');");
E_D("replace into `ecs_stats` values('1403168034','101.226.168.221','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/xspace.php','/xspace.php');");
E_D("replace into `ecs_stats` values('1403168034','101.226.168.220','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/user.php?act=order_list','/user.php');");
E_D("replace into `ecs_stats` values('1403172067','36.46.210.178','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','http://www.163ym.com','/product/search_a1v_p3v.html','/index.php');");
E_D("replace into `ecs_stats` values('1403172915','101.226.33.219','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.sogou.com','/','/index.php');");
E_D("replace into `ecs_stats` values('1403175582','171.91.139.221','1','Safari 537.1','Windows NT','zh-CN,zh','RIPE','','','/index.php');");
E_D("replace into `ecs_stats` values('1403177895','112.81.43.177','2','Safari 537.1','Windows XP','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403179874','123.120.123.153','2','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403180952','182.88.173.87','1','Unknow browser','Windows 32','','[δ֪IP0801]','http://www.163ym.com','/product/search_a1v_p4v.html','/index.php');");
E_D("replace into `ecs_stats` values('1403180952','182.88.173.87','1','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://www.163ym.com','/product/search_a1v_p4v.html','/index.php');");
E_D("replace into `ecs_stats` values('1403180953','182.88.173.87','1','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1403183129','114.241.211.110','1','Safari 537.1','Windows XP','zh-CN,zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403184829','222.245.143.243','1','Safari 537.31','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403186463','112.81.43.177','1','Safari 537.1','Windows XP','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403186549','27.200.10.191','2','Internet Explorer 7.0','Windows XP','zh-cn','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403188769','112.122.140.247','1','Safari 533.1','Linux','zh-CN, en-US','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403188889','222.245.143.243','2','Safari 537.31','Windows NT','zh-CN,zh','','http://mll.i7c.com.cn','/','/category.php');");
E_D("replace into `ecs_stats` values('1403188939','112.122.140.247','1','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403189347','115.239.212.7','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/category.php');");
E_D("replace into `ecs_stats` values('1403189352','115.239.212.193','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/expr.php');");
E_D("replace into `ecs_stats` values('1403189352','115.239.212.194','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403189362','115.239.212.9','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403189366','115.239.212.4','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/captcha.php');");
E_D("replace into `ecs_stats` values('1403189367','115.239.212.6','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/expr.php');");
E_D("replace into `ecs_stats` values('1403189367','115.239.212.193','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403189370','115.239.212.132','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403189379','115.239.212.135','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403189400','115.239.212.193','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/category.php');");
E_D("replace into `ecs_stats` values('1403189403','115.239.212.72','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403189404','115.239.212.8','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/expr.php');");
E_D("replace into `ecs_stats` values('1403189429','115.239.212.133','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/brand.php');");
E_D("replace into `ecs_stats` values('1403189431','115.239.212.66','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/expr.php');");
E_D("replace into `ecs_stats` values('1403189431','115.239.212.136','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403189534','14.28.136.124','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403190085','112.228.169.39','1','Safari 536.11','Windows XP','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403191449','112.81.43.177','2','Safari 537.1','Windows XP','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403191825','101.229.220.140','7','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403196888','59.40.73.16','2','Safari 537.36','Windows NT','zh-CN,zh','','http://www.163ym.com','/product/goods4655.html','/index.php');");
E_D("replace into `ecs_stats` values('1403197885','106.120.160.119','1','Internet Explorer 8.0','Windows NT','','IANA','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1403197909','101.199.108.55','1','Safari 536.11','','en-us,en','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403199880','112.81.43.177','1','Internet Explorer 8.0','Windows NT','zh-CN','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403228404','114.241.35.81','3','Safari 537.36','Windows NT','zh-CN,zh','IANA','http://item.taobao.com','/item.htm?spm=a230r.1.14.342.6hXHKa&id=37111176322&ns=1','/index.php');");
E_D("replace into `ecs_stats` values('1403228810','221.221.4.145','2','Safari 534.30','Linux','zh-CN, en-US','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403229632','183.60.70.30','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1403230028','101.226.169.211','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/article-1.html','/article.php');");
E_D("replace into `ecs_stats` values('1403230028','101.226.169.209','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/article-11.html','/article.php');");
E_D("replace into `ecs_stats` values('1403230028','101.226.169.211','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1403230034','101.226.169.207','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/article_cat-12.html','/article_cat.php');");
E_D("replace into `ecs_stats` values('1403230034','101.226.169.211','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/brand-1-c23.html','/brand.php');");
E_D("replace into `ecs_stats` values('1403230038','101.226.169.208','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/brand-2-c23.html','/brand.php');");
E_D("replace into `ecs_stats` values('1403230293','101.226.169.209','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-23-b1-min1400-max2200-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403230502','182.118.25.214','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-4-b0-min0-max0-attr1.0.3.html','/category.php');");
E_D("replace into `ecs_stats` values('1403230502','182.118.25.211','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-4-b1-min0-max0-attr0.0.3.html','/category.php');");
E_D("replace into `ecs_stats` values('1403230502','182.118.25.212','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods-22.html','/goods.php');");
E_D("replace into `ecs_stats` values('1403230503','182.118.25.215','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-4-b1-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403230503','182.118.25.215','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-28-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403230613','101.226.166.220','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjEwIjtzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMyMzA2MTM7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403230613','101.226.166.221','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE0IjtzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMyMzA2MTM7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403230613','101.226.166.222','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE4IjtzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMyMzA2MTM7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403230617','101.226.166.226','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjIyIjtzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMyMzA2MTc7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403230617','101.226.166.224','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjUiO3M6NToiaW50cm8iO3M6NDoiYmVzdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMyMzA2MTc7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403230700','182.118.25.214','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods.php?id=11','/goods.php');");
E_D("replace into `ecs_stats` values('1403230700','182.118.25.215','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods.php?id=3','/goods.php');");
E_D("replace into `ecs_stats` values('1403231127','114.239.192.4','86','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403232580','114.241.35.81','4','Safari 537.36','Windows NT','zh-CN,zh','IANA','http://item.taobao.com','/item.htm?spm=a230r.1.14.342.6hXHKa&id=37111176322&ns=1','/index.php');");
E_D("replace into `ecs_stats` values('1403232642','221.221.4.145','3','Safari 534.30','Linux','zh-CN, en-US','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403234691','118.113.204.170','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403234862','113.249.36.160','1','Internet Explorer 8.0','Windows XP','zh-cn','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403234880','119.118.73.197','3','Safari 537.36','Windows NT','zh-CN,zh','APNIC','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1403235569','118.113.204.170','1','Safari 534.30','Linux','zh-CN, en-US','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403235724','118.113.204.170','1','Safari 534.24','Linux','zh-CN, en-US','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403236945','118.113.204.170','2','Safari 537.1','Windows NT','zh-CN,zh','','http://mll.i7c.com.cn','/category-2-b0.html','/affiche.php');");
E_D("replace into `ecs_stats` values('1403237549','118.113.204.170','1','Safari 9537.53','Unknown','zh-cn','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403238009','114.239.192.4','87','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403241266','61.135.190.222','1','FireFox 3.6.15','Windows XP','en-us,en','','http://www.baidu.com','/s?wd=mll.i7c.com','/index.php');");
E_D("replace into `ecs_stats` values('1403243379','221.225.118.171','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403245404','114.241.35.81','5','Safari 537.36','Windows NT','zh-CN,zh','IANA','http://item.taobao.com','/item.htm?spm=a1z10.1.w4004-3302525826.2.EwmI79&id=37111176322','/goods.php');");
E_D("replace into `ecs_stats` values('1403246135','180.173.184.39','1','Unknow browser','Windows NT','zh-CN','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1403246531','115.63.35.76','1','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403248700','61.177.159.118','3','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403252514','180.141.156.134','1','Safari 537.1','Windows NT','zh-CN,zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1403253217','171.38.164.163','1','Internet Explorer 8.0','Windows XP','zh-cn','RIPE','','','/index.php');");
E_D("replace into `ecs_stats` values('1403257870','120.194.117.59','1','Safari 537.36','Windows NT','zh-CN,zh','APNIC','http://item.taobao.com','/item.htm?spm=a230r.1.14.14.4gI7yw&id=37111176322&ns=1','/index.php');");
E_D("replace into `ecs_stats` values('1403258766','112.64.235.245','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.sogou.com','/','/goods.php');");
E_D("replace into `ecs_stats` values('1403258778','101.226.66.172','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.sogou.com','/','/category.php');");
E_D("replace into `ecs_stats` values('1403258806','180.153.212.13','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://www.sogou.com','/','/goods.php');");
E_D("replace into `ecs_stats` values('1403258812','101.226.51.230','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.sogou.com','/','/flow.php');");
E_D("replace into `ecs_stats` values('1403259743','112.81.43.177','1','Safari 537.1','Windows XP','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403262134','111.177.103.45','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403262946','101.226.33.226','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/','/category.php');");
E_D("replace into `ecs_stats` values('1403263011','101.226.33.219','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/category.php');");
E_D("replace into `ecs_stats` values('1403264473','180.153.214.152','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/category.php');");
E_D("replace into `ecs_stats` values('1403264497','112.64.235.248','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/category-2-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403266764','180.153.214.176','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://mll.i7c.com.cn','/category-2-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403267362','218.63.181.18','1','Internet Explorer 7.0','Windows NT','zh-CN','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403267787','218.85.211.161','3','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403269132','111.177.103.45','2','Safari 537.36','Windows NT','zh-CN,zh','IANA','http://mll.i7c.com.cn','/category-1-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403278548','218.85.211.161','4','Safari 537.1','Windows NT','zh-CN,zh','','http://mll.i7c.com.cn','/','/category.php');");
E_D("replace into `ecs_stats` values('1403279925','175.170.25.112','1','Safari 537.1','Windows XP','zh-CN,zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1403280685','27.198.129.181','3','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403282580','42.243.53.169','1','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403285172','124.231.187.172','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403287656','106.120.160.119','1','Internet Explorer 8.0','Windows NT','','IANA','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1403287668','101.199.108.52','1','Safari 536.11','','en-us,en','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403288366','220.176.217.109','1','FireFox 25.0','Windows 2003','zh-cn,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403311498','106.40.110.226','1','Safari 537.1','Windows XP','zh-CN,zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403314294','101.226.168.250','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/article-36.html','/article.php');");
E_D("replace into `ecs_stats` values('1403314294','101.226.168.246','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/article_cat-9.html','/article_cat.php');");
E_D("replace into `ecs_stats` values('1403314295','101.226.168.248','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/article-39.html','/article.php');");
E_D("replace into `ecs_stats` values('1403314298','101.226.168.250','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/brand-3-c23.html','/brand.php');");
E_D("replace into `ecs_stats` values('1403314298','101.226.168.248','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/brand-2-c12.html','/brand.php');");
E_D("replace into `ecs_stats` values('1403314298','101.226.168.247','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/brand-3-c26.html','/brand.php');");
E_D("replace into `ecs_stats` values('1403314301','101.226.168.246','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-13-b3-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403314302','101.226.168.245','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-23-b1-min4600-max5400-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403314305','101.226.168.246','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-23-b3-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403314305','101.226.168.247','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-4-b0-min0-max0-attr1.2.0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403314354','101.226.168.253','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/article-35.html','/article.php');");
E_D("replace into `ecs_stats` values('1403314617','182.118.21.226','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-4-b1-min1400-max2200-attr0.0.0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403314691','182.118.20.206','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-6-b2-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403314691','182.118.21.223','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-4-b4-min0-max0-attr1.0.0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403314691','182.118.21.228','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category.php?id=3','/category.php');");
E_D("replace into `ecs_stats` values('1403314692','182.118.21.220','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/expr.php?id=227','/expr.php');");
E_D("replace into `ecs_stats` values('1403314692','182.118.21.229','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods-23.html','/goods.php');");
E_D("replace into `ecs_stats` values('1403314704','182.118.21.227','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods-6.html','/goods.php');");
E_D("replace into `ecs_stats` values('1403314704','182.118.21.228','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods.php?id=4','/goods.php');");
E_D("replace into `ecs_stats` values('1403315016','101.226.168.251','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE0IjtzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMzMTUwMTY7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403315016','101.226.169.195','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjExIjtzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMzMTUwMTY7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403315020','101.226.168.251','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjIwIjtzOjU6ImludHJvIjtzOjk6InByb21vdGlvbiI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMzMTUwMjA7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403315020','101.226.169.196','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE5IjtzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMzMTUwMjA7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403315024','101.226.168.251','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjQiO3M6NToiaW50cm8iO3M6MzoibmV3IjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMzMxNTAyNDt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1403315024','101.226.169.198','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjciO3M6NToiaW50cm8iO3M6MzoibmV3IjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMzMxNTAyNDt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1403315027','101.226.168.253','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/user.php?act=register','/user.php');");
E_D("replace into `ecs_stats` values('1403320449','116.207.186.213','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403321053','101.226.51.230','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403326931','14.17.34.191','1','Unknow browser','Unknown','zh-cn, zh','','','','/expr_show.php');");
E_D("replace into `ecs_stats` values('1403327281','101.226.166.230','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjExIjtzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMzMjcyODE7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403334141','115.238.50.146','1','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403341897','180.153.183.211','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/topic.php?topic_id=1','/topic.php');");
E_D("replace into `ecs_stats` values('1403346538','112.45.96.213','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403349466','112.45.96.64','2','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403353575','112.45.96.213','3','Safari 537.36','Windows NT','zh-CN,zh','IANA','http://mll.i7c.com.cn','/xspace.php','/index.php');");
E_D("replace into `ecs_stats` values('1403354050','14.17.34.191','1','Unknow browser','Unknown','zh-cn, zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403354055','14.17.18.147','1','Unknow browser','Unknown','zh-cn, zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403354062','112.45.96.3','1','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403354911','180.153.183.245','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/activity.html','/activity.php');");
E_D("replace into `ecs_stats` values('1403359175','39.190.191.123','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403362568','42.227.237.253','1','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403363466','180.153.236.47','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1403364499','180.153.183.206','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/goods-26.html','/goods.php');");
E_D("replace into `ecs_stats` values('1403365900','119.113.242.227','1','Safari 537.36','Windows XP','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1403366284','180.172.187.79','1','Safari 537.36','Windows XP','zh-CN,zh','[δ֪IP0801]','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403367053','36.22.46.131','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','http://cache.baiducontent.com','/c?m=9d78d513d9d430ae4f9c96690c66c0171b43f6672ba6d20209d08448e2732a475015e2ac57200773d4d27c1601ad4a5afeb7762c385966f1d9df8939c0a6d76d6a9f2743314bdb0448980eafbc17789e3dc00aa8b25fbdfaa761c5b9d2a5da5457c','/index.php');");
E_D("replace into `ecs_stats` values('1403367068','119.147.146.192','1','Internet Explorer 6.0','Windows XP','zh-CN,zh','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1403367079','119.147.146.189','1','Safari 537.36','Windows XP','en,*','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1403368432','36.22.46.131','1','Internet Explorer 10.0','Windows NT','zh-CN','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403368432','180.153.206.35','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403368464','112.65.193.14','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/goods-26.html','/activity.php');");
E_D("replace into `ecs_stats` values('1403368482','101.226.33.240','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/activity.html','/index.php');");
E_D("replace into `ecs_stats` values('1403377562','106.120.160.119','1','Internet Explorer 8.0','Windows NT','','IANA','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1403377584','220.181.132.200','1','Safari 536.11','','en-us,en','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403383817','101.226.166.209','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/article-12.html','/article.php');");
E_D("replace into `ecs_stats` values('1403383817','101.226.166.206','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-1-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403383817','101.226.166.207','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/article-5.html','/article.php');");
E_D("replace into `ecs_stats` values('1403383821','101.226.166.203','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-12-b3-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403383954','101.226.166.227','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-23-b4-min4600-max5400-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403383954','101.226.166.230','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-23-b2-min3000-max3800-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403383955','101.226.166.234','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-26-b3-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403383957','101.226.166.231','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-4-b4-min0-max0-attr0.0.0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403383958','101.226.166.230','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-4-b0-min0-max0-attr1.2.3.html','/category.php');");
E_D("replace into `ecs_stats` values('1403383958','101.226.166.234','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-4-b0-min1400-max2200-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403383962','101.226.166.233','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category.php?id=23','/category.php');");
E_D("replace into `ecs_stats` values('1403383962','101.226.166.231','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/goods-26.html','/goods.php');");
E_D("replace into `ecs_stats` values('1403383963','182.118.21.216','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/category-13-b1-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403384309','101.226.168.249','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjYiO3M6NToiaW50cm8iO3M6MzoibmV3IjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMzM4NDMwOTt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1403384312','182.118.22.230','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjEwIjtzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMzODQzMTE7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403384312','182.118.22.228','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE1IjtzOjU6ImludHJvIjtzOjM6ImhvdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMzODQzMTE7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403384327','182.118.22.230','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE5IjtzOjU6ImludHJvIjtzOjk6InByb21vdGlvbiI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMzODQzMjc7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403384327','182.118.22.229','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjE1IjtzOjU6ImludHJvIjtzOjk6InByb21vdGlvbiI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMzODQzMjc7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403384345','182.118.22.230','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjIyIjtzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMzODQzNDU7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403384345','182.118.22.227','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjI6IjIxIjtzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMzODQzNDU7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403384808','101.226.166.219','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjYiO3M6NToiaW50cm8iO3M6NDoiYmVzdCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjE0MDMzODQ4MDg7fQ==','/search_list.php');");
E_D("replace into `ecs_stats` values('1403391070','180.153.181.205','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/group_buy.html','/group_buy.php');");
E_D("replace into `ecs_stats` values('1403397420','180.153.183.165','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/brand.html','/brand.php');");
E_D("replace into `ecs_stats` values('1403398769','101.86.81.161','1','FireFox 30.0','Windows NT','zh-cn,zh','IANA','http://www.baidu.com','/baidu?wd=http%3A%2F%2Fmll.i7c.com.cn&tn=monline_4_dg','/index.php');");
E_D("replace into `ecs_stats` values('1403398770','117.78.13.110','1','Unknow browser','Unknown','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403398800','117.78.13.110','1','Unknow browser','Unknown','','','','','/category.php');");
E_D("replace into `ecs_stats` values('1403398816','117.78.13.110','1','Unknow browser','Unknown','','','','','/activity.php');");
E_D("replace into `ecs_stats` values('1403398820','117.78.13.110','1','Unknow browser','Unknown','','','','','/topic.php');");
E_D("replace into `ecs_stats` values('1403398832','117.78.13.110','1','Unknow browser','Unknown','','','','','/xspace.php');");
E_D("replace into `ecs_stats` values('1403398840','117.78.13.110','1','Unknow browser','Unknown','','','','','/brand.php');");
E_D("replace into `ecs_stats` values('1403398856','117.78.13.110','1','Unknow browser','Unknown','','','','','/brand.php');");
E_D("replace into `ecs_stats` values('1403398876','117.78.13.110','1','Unknow browser','Unknown','','','','','/article.php');");
E_D("replace into `ecs_stats` values('1403398883','117.78.13.110','1','Unknow browser','Unknown','','','','','/article.php');");
E_D("replace into `ecs_stats` values('1403398887','117.78.13.110','1','Unknow browser','Unknown','','','','','/article.php');");
E_D("replace into `ecs_stats` values('1403398889','117.78.13.110','1','Unknow browser','Unknown','','','','','/article.php');");
E_D("replace into `ecs_stats` values('1403398891','117.78.13.110','1','Unknow browser','Unknown','','','','','/article.php');");
E_D("replace into `ecs_stats` values('1403398893','117.78.13.110','1','Unknow browser','Unknown','','','','','/article.php');");
E_D("replace into `ecs_stats` values('1403398914','117.78.13.110','1','Unknow browser','Unknown','','','','','/user.php');");
E_D("replace into `ecs_stats` values('1403398941','117.78.13.110','1','Unknow browser','Unknown','','','','','/category.php');");
E_D("replace into `ecs_stats` values('1403398960','117.78.13.110','1','Unknow browser','Unknown','','','','','/xspace_show.php');");
E_D("replace into `ecs_stats` values('1403398996','117.78.13.110','1','Unknow browser','Unknown','','','','','/group_buy.php');");
E_D("replace into `ecs_stats` values('1403399002','117.78.13.110','1','Unknow browser','Unknown','','','','','/category.php');");
E_D("replace into `ecs_stats` values('1403399232','117.78.13.110','1','Unknow browser','Unknown','','','','','/article.php');");
E_D("replace into `ecs_stats` values('1403399247','117.78.13.110','1','Unknow browser','Unknown','','','','','/article.php');");
E_D("replace into `ecs_stats` values('1403399257','117.78.13.110','1','Unknow browser','Unknown','','','','','/article.php');");
E_D("replace into `ecs_stats` values('1403399273','117.78.13.110','1','Unknow browser','Unknown','','','','','/brand.php');");
E_D("replace into `ecs_stats` values('1403399282','117.78.13.110','1','Unknow browser','Unknown','','','','','/brand.php');");
E_D("replace into `ecs_stats` values('1403399295','117.78.13.110','1','Unknow browser','Unknown','','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403400775','114.98.22.92','1','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403405988','115.148.66.91','1','Safari 537.1','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403409088','111.173.63.10','1','Internet Explorer 8.0','Windows XP','zh-cn','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403410144','182.118.20.164','1','Internet Explorer 9.0','Windows NT','zh-CN','[δ֪IP0801]','http://mll.i7c.com.cn','/search_list.php?encode=YTozOntzOjg6ImNhdGVnb3J5IjtzOjE6IjgiO3M6NToiaW50cm8iO3M6MzoiaG90IjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMzQxMDE0NDt9','/search_list.php');");
E_D("replace into `ecs_stats` values('1403410741','116.231.121.204','1','Safari 537.1','Windows NT','zh-CN,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403413619','113.109.194.77','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403414903','183.25.40.55','1','Safari 537.1','Windows XP','zh-CN,zh','[δ֪IP0801]','','','/index.php');");
E_D("replace into `ecs_stats` values('1403415406','117.22.193.222','2','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416586','61.146.178.187','1','Unknow browser','Windows NT','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416701','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416702','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416704','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416706','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416706','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416706','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416706','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416706','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416706','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416706','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416706','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416706','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416706','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416706','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416706','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416706','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416706','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416707','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416707','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416707','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416707','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416707','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416707','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416707','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416707','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416707','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416707','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416707','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416707','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416707','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416707','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416707','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416707','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416708','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416708','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416708','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416708','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416708','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416708','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416708','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416708','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416708','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416708','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416708','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416708','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416708','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416708','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416708','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416708','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416709','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416709','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416709','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416709','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416709','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416709','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416709','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416709','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416709','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416709','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416710','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416710','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416710','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416710','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416710','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416710','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416710','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416710','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416710','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416710','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416710','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416710','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416710','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416710','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416710','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416711','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416711','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416711','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416711','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416711','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416711','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416711','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416712','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416712','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416712','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416712','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416712','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416712','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416712','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416712','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416712','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416712','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416712','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416712','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416712','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416712','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416712','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416712','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416712','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416713','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416714','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416714','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416714','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416714','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416714','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416714','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416714','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416714','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416714','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416714','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416714','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416714','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416715','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416715','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416715','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416715','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416715','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416715','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416715','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416715','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416715','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416716','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416717','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416717','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416717','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416717','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416717','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416717','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416717','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416717','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416717','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416717','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416717','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416717','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416717','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416717','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416717','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416717','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416717','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416718','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416719','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416720','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416720','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416720','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416720','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416720','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416720','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416720','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416720','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416721','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416722','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416722','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416722','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416722','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416722','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416722','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416722','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416722','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416722','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416722','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416722','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416722','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416722','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416723','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416723','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416723','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416723','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416723','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416724','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416724','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416724','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416724','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416724','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416724','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416724','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416724','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416725','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416725','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416725','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416725','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416725','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416725','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416725','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416725','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416725','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416725','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416725','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416725','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416725','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416726','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416726','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416726','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416726','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416726','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416726','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416726','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416726','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416726','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416726','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416726','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416726','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416726','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416726','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416727','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416727','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416727','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416727','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416727','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416727','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416727','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416728','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416729','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416729','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416729','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416729','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416729','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416729','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416729','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416729','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416729','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416729','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416729','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416730','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416730','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416730','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416730','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416730','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416730','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416731','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416731','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416731','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416731','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416731','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416731','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416731','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416731','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416731','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416731','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416731','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416731','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416731','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416731','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416731','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416732','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416732','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416732','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416732','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416732','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416732','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416732','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416732','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416732','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416732','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416732','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416732','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416732','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416732','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416732','117.22.193.222','1','Internet Explorer 6.0','Windows XP','','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403416880','123.117.35.48','1','Safari 537.36','Windows XP','zh-CN,zh','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403421717','117.22.193.222','3','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403423210','117.22.193.222','1','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403425569','220.168.100.10','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403426376','101.226.33.201','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403426415','101.226.33.227','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/goods-26.html','/expr_show.php');");
E_D("replace into `ecs_stats` values('1403426417','112.64.235.91','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.sogou.com','/','/expr_show.php');");
E_D("replace into `ecs_stats` values('1403426679','101.226.33.205','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.sogou.com','/','/group_buy.php');");
E_D("replace into `ecs_stats` values('1403426683','101.226.66.173','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/','/group_buy.php');");
E_D("replace into `ecs_stats` values('1403426685','101.226.66.187','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.sogou.com','/','/activity.php');");
E_D("replace into `ecs_stats` values('1403426688','101.226.33.205','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.sogou.com','/','/group_buy.php');");
E_D("replace into `ecs_stats` values('1403426692','101.226.66.178','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.sogou.com','/','/topic.php');");
E_D("replace into `ecs_stats` values('1403426692','101.226.89.115','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://mll.i7c.com.cn','/topic.php?topic_id=1','/category.php');");
E_D("replace into `ecs_stats` values('1403426693','180.153.214.181','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://www.sogou.com','/','/category.php');");
E_D("replace into `ecs_stats` values('1403426696','112.64.235.247','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.sogou.com','/','/category.php');");
E_D("replace into `ecs_stats` values('1403426697','180.153.201.212','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://mll.i7c.com.cn','/brand.html','/category.php');");
E_D("replace into `ecs_stats` values('1403426697','180.153.214.178','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://www.sogou.com','/','/brand.php');");
E_D("replace into `ecs_stats` values('1403426961','117.22.193.222','2','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403429168','117.22.193.222','3','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403434806','112.45.96.19','4','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403436960','27.42.185.90','1','Safari 537.1','Windows NT','zh-CN,zh','IANA','http://item.taobao.com','/item.htm?spm=a230r.1.14.33.NLznPC&id=37111176322&ns=1#detail','/index.php');");
E_D("replace into `ecs_stats` values('1403437278','223.144.37.178','1','Safari 537.31','Windows NT','zh-CN,zh','IANA','','','/goods.php');");
E_D("replace into `ecs_stats` values('1403439138','118.186.145.112','1','Internet Explorer 9.0','Windows NT','zh-CN','APNIC','','','/index.php');");
E_D("replace into `ecs_stats` values('1403439282','117.22.193.222','4','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403439340','118.186.154.39','2','Internet Explorer 9.0','Windows NT','zh-CN','APNIC','http://mll.i7c.com.cn','/category-1-b0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403439924','112.45.96.72','5','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403448762','125.76.164.63','5','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403451275','125.76.164.63','6','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','','http://mll.i7c.com.cn','/','/category.php');");
E_D("replace into `ecs_stats` values('1403452630','219.145.54.84','7','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','','','','/index.php');");
E_D("replace into `ecs_stats` values('1403460229','36.251.188.155','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403460308','112.91.213.11','2','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/index.php');");
E_D("replace into `ecs_stats` values('1403460359','101.226.169.210','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/brand-2-c11.html','/brand.php');");
E_D("replace into `ecs_stats` values('1403460359','101.226.169.212','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1403460359','101.226.169.214','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/brand-3-c12.html','/brand.php');");
E_D("replace into `ecs_stats` values('1403460364','101.226.169.209','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/category-11-b0-min0-max0-attr0.html','/category.php');");
E_D("replace into `ecs_stats` values('1403460364','101.226.169.211','1','Safari 537.1;','Windows NT','zh-CN','IANA','http://mll.i7c.com.cn','/brand-3-c13.html','/brand.php');");

require("../../inc/footer.php");
?>