<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_shipping_ladderprice`;");
E_C("CREATE TABLE `engrave_shipping_ladderprice` (
  `slp_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '阶梯ID',
  `slp_slpgid` int(12) DEFAULT '0' COMMENT '阶梯价格分组ID',
  `slp_minweight` float DEFAULT NULL COMMENT '最小重量',
  `slp_maxweight` float DEFAULT NULL COMMENT '最大重量',
  `slp_price` float DEFAULT NULL COMMENT '运费',
  `slp_serviceprice` float DEFAULT NULL COMMENT '服务费',
  `slp_discount` float DEFAULT '10' COMMENT '折扣',
  `slp_time` int(12) DEFAULT '0' COMMENT '时间',
  `slp_isdelete` tinyint(4) DEFAULT NULL COMMENT '是否删除',
  PRIMARY KEY (`slp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=388 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_shipping_ladderprice` values('1','1','0','300','900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('2','1','300','500','1100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('3','1','500','600','1240','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('4','1','600','700','1380','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('5','1','700','800','1520','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('6','1','800','900','1660','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('7','1','900','1000','1800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('8','1','1000','1250','2100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('9','1','1250','1500','2400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('10','1','1500','1750','2700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('11','1','1750','2000','3000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('12','1','2000','2500','3500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('13','1','2500','3000','3300','0','9','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('14','1','3000','3500','4500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('15','1','3500','4000','5000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('16','1','4000','4500','5500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('17','1','4500','5000','5400','100','9','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('18','1','5000','5500','6500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('19','1','5500','6000','7000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('20','1','6000','7000','7800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('21','1','7000','8000','8600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('22','1','8000','9000','9400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('23','1','9000','10000','10200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('24','1','10000','11000','11000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('25','1','11000','12000','11800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('26','1','12000','13000','12600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('27','1','13000','14000','13400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('28','1','14000','15000','14200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('29','1','15000','16000','15000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('30','1','16000','17000','15800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('31','1','17000','18000','16600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('32','1','18000','19000','17400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('33','1','19000','20000','18200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('34','1','20000','21000','19000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('35','1','21000','22000','19800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('36','1','22000','23000','20600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('37','1','23000','24000','21400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('38','1','24000','25000','22200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('39','1','25000','26000','23000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('40','1','26000','27000','23800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('41','1','27000','28000','24600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('42','1','28000','29000','25400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('43','1','29000','30000','26200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('44','2','0','300','1200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('45','2','300','500','1500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('46','2','500','600','1680','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('47','2','600','700','1860','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('48','2','700','800','2040','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('49','2','800','900','2220','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('50','2','900','1000','2400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('51','2','1000','1250','2800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('52','2','1250','1500','3200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('53','2','1500','1750','3600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('54','2','1750','2000','4000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('55','2','2000','2500','4700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('56','2','2500','3000','5400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('57','2','3000','3500','6100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('58','2','3500','4000','6800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('59','2','4000','4500','7500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('60','2','4500','5000','8200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('61','2','5000','5500','8900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('62','2','5500','6000','9600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('63','2','6000','7000','10700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('64','2','7000','8000','11800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('65','2','8000','9000','12900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('66','2','9000','10000','14000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('67','2','10000','11000','15100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('68','2','11000','12000','16200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('69','2','12000','13000','17300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('70','2','13000','14000','18400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('71','2','14000','15000','19500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('72','2','15000','16000','20600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('73','2','16000','17000','21700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('74','2','17000','18000','22800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('75','2','18000','19000','23900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('76','2','19000','20000','25000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('77','2','20000','21000','26100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('78','2','21000','22000','27200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('79','2','22000','23000','28300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('80','2','23000','24000','29400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('81','2','24000','25000','30500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('82','2','25000','26000','31600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('83','2','26000','27000','32700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('84','2','27000','28000','33800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('85','2','28000','29000','34900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('86','2','29000','30000','36000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('87','3','0','300','1200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('88','3','300','500','1500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('89','3','500','600','1680','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('90','3','600','700','1860','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('91','3','700','800','2040','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('92','3','800','900','2220','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('93','3','900','1000','2400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('94','3','1000','1250','2800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('95','3','1250','1500','3200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('96','3','1500','1750','3600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('97','3','1750','2000','4000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('98','3','2000','2500','4700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('99','3','2500','3000','5400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('100','3','3000','3500','6100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('101','3','3500','4000','6800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('102','3','4000','4500','7500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('103','3','4500','5000','8200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('104','3','5000','5500','8900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('105','3','5500','6000','9600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('106','3','6000','7000','10700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('107','3','7000','8000','11800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('108','3','8000','9000','12900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('109','3','9000','10000','14000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('110','3','10000','11000','15100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('111','3','11000','12000','16200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('112','3','12000','13000','17300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('113','3','13000','14000','18400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('114','3','14000','15000','19500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('115','3','15000','16000','20600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('116','3','16000','17000','21700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('117','3','17000','18000','22800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('118','3','18000','19000','23900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('119','3','19000','20000','25000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('120','3','20000','21000','26100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('121','3','21000','22000','27200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('122','3','22000','23000','28300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('123','3','23000','24000','29400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('124','3','24000','25000','30500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('125','3','25000','26000','31600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('126','3','26000','27000','32700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('127','3','27000','28000','33800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('128','3','28000','29000','34900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('129','3','29000','30000','36000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('130','4','0','300','1200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('131','4','300','500','1500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('132','4','500','600','1680','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('133','4','600','700','1860','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('134','4','700','800','2040','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('135','4','800','900','2220','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('136','4','900','1000','2400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('137','4','1000','1250','2800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('138','4','1250','1500','3200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('139','4','1500','1750','3600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('140','4','1750','2000','4000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('141','4','2000','2500','4700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('142','4','2500','3000','5400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('143','4','3000','3500','6100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('144','4','3500','4000','6800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('145','4','4000','4500','7500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('146','4','4500','5000','8200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('147','4','5000','5500','8900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('148','4','5500','6000','9600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('149','4','6000','7000','10700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('150','4','7000','8000','11800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('151','4','8000','9000','12900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('152','4','9000','10000','14000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('153','4','10000','11000','15100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('154','4','11000','12000','16200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('155','4','12000','13000','17300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('156','4','13000','14000','18400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('157','4','14000','15000','19500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('158','4','15000','16000','20600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('159','4','16000','17000','21700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('160','4','17000','18000','22800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('161','4','18000','19000','23900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('162','4','19000','20000','25000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('163','4','20000','21000','26100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('164','4','21000','22000','27200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('165','4','22000','23000','28300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('166','4','23000','24000','29400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('167','4','24000','25000','30500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('168','4','25000','26000','31600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('169','4','26000','27000','32700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('170','4','27000','28000','33800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('171','4','28000','29000','34900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('172','4','29000','30000','36000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('173','5','0','300','1200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('174','5','300','500','1500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('175','5','500','600','1680','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('176','5','600','700','1860','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('177','5','700','800','2040','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('178','5','800','900','2220','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('179','5','900','1000','2400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('180','5','1000','1250','2800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('181','5','1250','1500','3200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('182','5','1500','1750','3600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('183','5','1750','2000','4000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('184','5','2000','2500','4700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('185','5','2500','3000','5400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('186','5','3000','3500','6100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('187','5','3500','4000','6800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('188','5','4000','4500','7500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('189','5','4500','5000','8200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('190','5','5000','5500','8900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('191','5','5500','6000','9600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('192','5','6000','7000','10700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('193','5','7000','8000','11800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('194','5','8000','9000','12900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('195','5','9000','10000','14000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('196','5','10000','11000','15100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('197','5','11000','12000','16200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('198','5','12000','13000','17300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('199','5','13000','14000','18400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('200','5','14000','15000','19500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('201','5','15000','16000','20600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('202','5','16000','17000','21700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('203','5','17000','18000','22800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('204','5','18000','19000','23900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('205','5','19000','20000','25000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('206','5','20000','21000','26100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('207','5','21000','22000','27200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('208','5','22000','23000','28300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('209','5','23000','24000','29400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('210','5','24000','25000','30500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('211','5','25000','26000','31600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('212','5','26000','27000','32700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('213','5','27000','28000','33800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('214','5','28000','29000','34900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('215','5','29000','30000','36000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('216','6','0','300','1200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('217','6','300','500','1500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('218','6','500','600','1680','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('219','6','600','700','1860','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('220','6','700','800','2040','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('221','6','800','900','2220','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('222','6','900','1000','2400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('223','6','1000','1250','2800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('224','6','1250','1500','3200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('225','6','1500','1750','3600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('226','6','1750','2000','4000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('227','6','2000','2500','4700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('228','6','2500','3000','5400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('229','6','3000','3500','6100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('230','6','3500','4000','6800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('231','6','4000','4500','7500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('232','6','4500','5000','8200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('233','6','5000','5500','8900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('234','6','5500','6000','9600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('235','6','6000','7000','10700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('236','6','7000','8000','11800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('237','6','8000','9000','12900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('238','6','9000','10000','14000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('239','6','10000','11000','15100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('240','6','11000','12000','16200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('241','6','12000','13000','17300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('242','6','13000','14000','18400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('243','6','14000','15000','19500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('244','6','15000','16000','20600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('245','6','16000','17000','21700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('246','6','17000','18000','22800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('247','6','18000','19000','23900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('248','6','19000','20000','25000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('249','6','20000','21000','26100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('250','6','21000','22000','27200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('251','6','22000','23000','28300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('252','6','23000','24000','29400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('253','6','24000','25000','30500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('254','6','25000','26000','31600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('255','6','26000','27000','32700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('256','6','27000','28000','33800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('257','6','28000','29000','34900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('258','6','29000','30000','36000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('259','7','0','300','1500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('260','7','300','500','1800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('261','7','500','600','2000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('262','7','600','700','2200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('263','7','700','800','2400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('264','7','800','900','2600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('265','7','900','1000','2800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('266','7','1000','1250','3250','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('267','7','1250','1500','3700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('268','7','1500','1750','4150','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('269','7','1750','2000','4600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('270','7','2000','2500','5400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('271','7','2500','3000','6200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('272','7','3000','3500','7000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('273','7','3500','4000','7800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('274','7','4000','4500','8600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('275','7','4500','5000','9400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('276','7','5000','5500','10200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('277','7','5500','6000','11000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('278','7','6000','7000','12300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('279','7','7000','8000','13600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('280','7','8000','9000','14900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('281','7','9000','10000','16200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('282','7','10000','11000','17500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('283','7','11000','12000','18800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('284','7','12000','13000','20100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('285','7','13000','14000','21400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('286','7','14000','15000','22700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('287','7','15000','16000','24000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('288','7','16000','17000','25300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('289','7','17000','18000','26600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('290','7','18000','19000','27900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('291','7','19000','20000','29200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('292','7','20000','21000','30500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('293','7','21000','22000','31800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('294','7','22000','23000','33100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('295','7','23000','24000','34400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('296','7','24000','25000','35700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('297','7','25000','26000','37000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('298','7','26000','27000','38300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('299','7','27000','28000','39600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('300','7','28000','29000','40900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('301','7','29000','30000','42200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('302','8','0','300','1700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('303','8','300','500','2100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('304','8','500','600','2440','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('305','8','600','700','2780','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('306','8','700','800','3120','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('307','8','800','900','3460','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('308','8','900','1000','3800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('309','8','1000','1250','4600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('310','8','1250','1500','5400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('311','8','1500','1750','6200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('312','8','1750','2000','7000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('313','8','2000','2500','8500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('314','8','2500','3000','10000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('315','8','3000','3500','11500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('316','8','3500','4000','13000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('317','8','4000','4500','14500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('318','8','4500','5000','16000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('319','8','5000','5500','17500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('320','8','5500','6000','19000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('321','8','6000','7000','21100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('322','8','7000','8000','23200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('323','8','8000','9000','25300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('324','8','9000','10000','27400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('325','8','10000','11000','29500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('326','8','11000','12000','31600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('327','8','12000','13000','33700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('328','8','13000','14000','35800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('329','8','14000','15000','37900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('330','8','15000','16000','40000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('331','8','16000','17000','42100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('332','8','17000','18000','44200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('333','8','18000','19000','46300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('334','8','19000','20000','48400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('335','8','20000','21000','50500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('336','8','21000','22000','52600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('337','8','22000','23000','54700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('338','8','23000','24000','56800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('339','8','24000','25000','58900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('340','8','25000','26000','61000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('341','8','26000','27000','63100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('342','8','27000','28000','65200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('343','8','28000','29000','67300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('344','8','29000','30000','69400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('345','9','0','300','1700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('346','9','300','500','2100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('347','9','500','600','2440','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('348','9','600','700','2780','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('349','9','700','800','3120','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('350','9','800','900','3460','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('351','9','900','1000','3800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('352','9','1000','1250','4600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('353','9','1250','1500','5400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('354','9','1500','1750','6200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('355','9','1750','2000','7000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('356','9','2000','2500','8500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('357','9','2500','3000','10000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('358','9','3000','3500','11500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('359','9','3500','4000','13000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('360','9','4000','4500','14500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('361','9','4500','5000','16000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('362','9','5000','5500','17500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('363','9','5500','6000','19000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('364','9','6000','7000','21100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('365','9','7000','8000','23200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('366','9','8000','9000','25300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('367','9','9000','10000','27400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('368','9','10000','11000','29500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('369','9','11000','12000','31600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('370','9','12000','13000','33700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('371','9','13000','14000','35800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('372','9','14000','15000','37900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('373','9','15000','16000','40000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('374','9','16000','17000','42100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('375','9','17000','18000','44200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('376','9','18000','19000','46300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('377','9','19000','20000','48400','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('378','9','20000','21000','50500','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('379','9','21000','22000','52600','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('380','9','22000','23000','54700','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('381','9','23000','24000','56800','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('382','9','24000','25000','58900','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('383','9','25000','26000','61000','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('384','9','26000','27000','63100','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('385','9','27000','28000','65200','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('386','9','28000','29000','67300','0','9.5','1427163414','0');");
E_D("replace into `engrave_shipping_ladderprice` values('387','9','29000','30000','69400','0','9.5','1427163414','0');");

require("../../inc/footer.php");
?>