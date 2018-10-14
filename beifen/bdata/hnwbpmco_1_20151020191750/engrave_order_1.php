<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_order`;");
E_C("CREATE TABLE `engrave_order` (
  `order_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '订单ID',
  `order_modelid` int(12) DEFAULT '0' COMMENT '服务模块 2:分箱  3：合箱',
  `order_no` varchar(50) DEFAULT '' COMMENT '订单号',
  `order_waybillno` varchar(50) DEFAULT '',
  `order_time` int(11) DEFAULT '0' COMMENT '订单时间',
  `order_userid` int(12) DEFAULT '0' COMMENT '订单用户ID',
  `order_buyerid` int(12) NOT NULL DEFAULT '0',
  `order_note` varchar(200) DEFAULT '' COMMENT '需要注意说明',
  `order_remark` varchar(200) DEFAULT '' COMMENT '备注说明',
  `order_shippingid` int(12) NOT NULL COMMENT '线路id',
  `order_servicetype` tinyint(4) DEFAULT '0' COMMENT '服务类型（0基本和1高级）',
  `order_fixed` int(12) DEFAULT '0' COMMENT '订单固定数',
  `order_boxquantity` int(12) DEFAULT '0' COMMENT '分箱数量',
  `order_paymentid` int(12) DEFAULT '0' COMMENT '支付方式ID',
  `order_paymentpath` int(12) DEFAULT '0',
  `order_paymentstatus` int(12) DEFAULT '0' COMMENT '支付状态',
  `order_refundstatus` int(12) DEFAULT '0' COMMENT '退款状态',
  `order_totalprice` decimal(12,2) DEFAULT NULL COMMENT '总价格',
  `order_goodsprice` decimal(12,2) DEFAULT '0.00' COMMENT '商品价格',
  `order_weight` decimal(12,2) DEFAULT '0.00' COMMENT '运单重量',
  `order_deductweight` decimal(12,2) DEFAULT '0.00' COMMENT '扣款重量',
  `order_sizelength` decimal(12,2) DEFAULT '0.00' COMMENT '订单中包裹的长',
  `order_sizewidth` decimal(12,2) DEFAULT '0.00' COMMENT '订单中包裹的宽',
  `order_sizeheight` decimal(12,2) DEFAULT '0.00' COMMENT '订单中包裹的高',
  `order_insurace` decimal(12,2) DEFAULT '0.00' COMMENT '保险费',
  `order_operatorcost` decimal(12,2) DEFAULT '0.00',
  `order_othercost` decimal(12,2) DEFAULT '0.00' COMMENT '其他费用',
  `order_tariffcost` decimal(12,2) DEFAULT '0.00' COMMENT '关税',
  `order_valueservicecost` decimal(12,2) DEFAULT '0.00' COMMENT '增值服务费',
  `order_waybillcost` decimal(12,2) DEFAULT '0.00' COMMENT '包裹运费',
  `order_discountcost` decimal(12,2) DEFAULT '0.00',
  `order_warehousecost` decimal(12,2) DEFAULT '0.00' COMMENT '仓储费用',
  `order_userpoints` int(12) DEFAULT '0' COMMENT '订单使用的积分',
  `order_isoutbox` tinyint(4) DEFAULT '0' COMMENT '是否有外箱缠绕膜',
  `order_needinvoice` tinyint(4) DEFAULT '0' COMMENT '是否需要发票',
  `order_isdelivery` tinyint(4) DEFAULT '0' COMMENT '是否发货',
  `order_iscolsed` tinyint(4) DEFAULT '0' COMMENT '订单是否关闭 1：关闭 0：未关闭',
  `order_printstatus` tinyint(4) DEFAULT '0' COMMENT '是否打印',
  `order_isdelete` tinyint(4) DEFAULT '0' COMMENT '是否删除',
  `order_paymenttype` tinyint(4) DEFAULT '0' COMMENT '支付方式：1、日元；2、主账户；3、副账户',
  `order_coupon` varchar(255) DEFAULT '' COMMENT '订单所使用的优惠券',
  PRIMARY KEY (`order_id`,`order_buyerid`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_order` values('1','0','150320001','','1426816534','52','1','','','2','0','0','0','1','2','1','0','160.49','15129.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.00','3025.80','0.00','8.00','8.00','0.00','0','0','0','5','0','1','0','0','');");
E_D("replace into `engrave_order` values('2','0','150324001','','1427173761','52','1','','','6','0','0','0','1','2','1','0','0.04','21.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.00','0.00','0.00','0.80','0.80','0.00','0','0','0','4','0','1','0','0','');");
E_D("replace into `engrave_order` values('3','2','150324002','','1427175561','52','1','','','6','1','0','2','1','2','1','0','263.57','16605.00','0.00','24.00','20.00','20.00','20.00','0.00','0.00','1.00','4981.50','0.00','1040.80','0.80','0.00','0','0','0','1','0','1','0','0','');");
E_D("replace into `engrave_order` values('4','0','150324003','','1427176110','52','1','','','0','0','0','0','1','2','0','0','12.00','144.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0','0','2','0','0','1','0','');");
E_D("replace into `engrave_order` values('5','0','150324004','','1427185552','52','1','','','6','0','0','0','1','1','0','0','240.05','15129.00','0.00','12.00','0.00','0.00','0.00','0.00','0.00','0.00','4538.70','0.00','1040.80','0.80','0.00','10','0','0','3','0','1','0','0','');");
E_D("replace into `engrave_order` values('6','0','150324005','','1427197959','52','1','zxp20150324001','zxp20150324001','1','0','0','0','1','2','1','0','2.24','144.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.00','28.80','0.00','13.60','13.60','0.00','0','0','0','5','0','1','0','0','');");
E_D("replace into `engrave_order` values('7','0','150325001','','1427259520','52','1','','','6','0','0','0','1','2','1','0','160.11','15129.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.00','3025.80','0.00','0.80','0.80','0.00','0','0','0','5','0','1','0','0','');");
E_D("replace into `engrave_order` values('8','0','150325002','','1427259872','52','1','','','3','0','0','0','1','2','1','0','238.37','15006.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.00','4501.80','0.00','4.00','4.00','0.00','0','0','0','5','0','0','0','0','');");
E_D("replace into `engrave_order` values('9','0','150325003','','1427259963','52','1','','','6','0','0','0','1','2','1','0','160.11','15129.00','0.00','10.00','12.00','12.00','12.00','100.00','100.00','100.00','3025.80','100.00','1040.80','0.80','100.00','0','0','0','4','0','0','0','0','');");
E_D("replace into `engrave_order` values('10','0','150325004','','1427261815','52','1','','','6','0','0','0','1','2','1','0','240.15','15129.00','0.00','12.00','12.00','12.00','12.00','0.00','0.00','1.00','4538.70','0.00','1040.80','0.80','0.00','0','0','0','51','0','0','0','1','3804672716477824');");
E_D("replace into `engrave_order` values('11','0','150329001','','1427609291','52','1','','','3','0','0','0','1','2','0','0','27.19','1620.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','471.60','38.00','5.00','4.00','0.40','0','0','0','0','0','0','0','1','');");
E_D("replace into `engrave_order` values('12','0','150401001','','1427862364','52','1','','','1','0','0','0','1','2','1','0','2.20','144.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.00','28.80','0.00','13.60','13.60','1.10','10','0','0','0','0','0','0','1','');");
E_D("replace into `engrave_order` values('13','0','150401002','','1427866466','52','1','','','6','0','0','0','1','2','0','0','642.34','144.00','12.00','12.00','12.00','12.00','12.00','0.00','0.00','0.00','43.20','18.00','15101.00','12080.80','0.00','0','0','0','2','0','0','0','1','');");
E_D("replace into `engrave_order` values('14','0','150403001','','1428038929','52','1','','','3','0','0','0','1','2','1','0','2.50','144.00','12.00','12.00','10.00','10.00','14.00','0.00','0.00','1.00','43.20','0.00','4.00','4.00','0.00','0','0','0','4','0','0','0','3','');");
E_D("replace into `engrave_order` values('15','0','150403002','','1428039060','52','1','','','3','0','0','0','1','2','0','0','1.74','144.00','14.00','14.00','11.00','12.00','13.00','0.00','0.00','0.00','28.80','0.00','5.00','4.00','0.00','0','0','0','2','0','0','0','1','');");
E_D("replace into `engrave_order` values('16','0','150420001','','1429508299','31686','16','','','3','0','0','0','1','2','0','0','2.55','144.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','43.20','0.00','5.00','5.00','0.00','0','0','0','1','0','0','0','1','');");
E_D("replace into `engrave_order` values('17','0','150420002','','1429509337','31686','16','','','6','0','0','0','1','1','0','0','2.34','144.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','43.20','0.00','1.00','1.00','0.00','0','0','0','1','0','1','0','1','');");
E_D("replace into `engrave_order` values('18','0','150420003','','1429512052','31686','16','','','3','0','0','0','1','1','1','0','32.01','2000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','600.00','0.00','1000.00','5.00','0.00','0','0','0','6','0','1','0','1','');");
E_D("replace into `engrave_order` values('19','0','150420004','','1429513038','31686','16','','','6','0','0','0','1','1','1','0','21.21','2000.00','0.00','0.00','0.00','0.00','0.00','1000.00','0.00','100.00','400.00','1.66','1000.00','1.00','100.00','0','0','0','1','0','1','0','1','');");
E_D("replace into `engrave_order` values('20','0','150420005','','1429513404','31686','16','','','3','0','0','0','1','1','1','0','21.43','2000.00','0.00','0.00','0.00','0.00','0.00','1000.00','0.00','1000.00','1000.00','1.66','1000.00','5.00','1000.00','0','0','0','1','0','1','0','1','');");
E_D("replace into `engrave_order` values('21','0','150420006','','1429514143','31686','16','','','6','0','0','0','1','1','1','0','52.96','2000.00','0.00','0.00','0.00','0.00','0.00','1000.00','0.00','1000.00','1000.00','1000.00','1000.00','1.00','1000.00','0','0','0','1','0','1','0','1','');");
E_D("replace into `engrave_order` values('22','0','150420007','','1429514157','31686','16','','','6','0','0','0','1','2','0','0','52.96','2000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1000.00','0.00','1.00','1.00','0.00','0','0','0','2','0','1','0','1','');");
E_D("replace into `engrave_order` values('23','0','150420008','','1429514188','31686','16','','','6','0','0','0','1','1','1','0','21.21','2000.00','0.00','0.00','0.00','0.00','0.00','1000.00','0.00','1000.00','1000.00','1000.00','1000.00','1.00','1000.00','0','0','0','1','0','1','0','1','');");
E_D("replace into `engrave_order` values('24','3','150422001','','1429675511','31698','16','','','6','1','0','0','1','1','1','0','301.65','11000.00','300.00','300.00','0.00','0.00','0.00','10.00','0.00','20.00','4500.00','30.00','12020.00','1201.00','1000.00','0','0','0','2','0','1','0','1','');");
E_D("replace into `engrave_order` values('25','2','150422002','','1429675925','31686','16','','','6','1','0','3','1','2','1','0','314.32','12000.00','800.00','800.00','0.00','0.00','0.00','0.00','0.00','1.00','3900.00','0.00','20420.00','2041.00','75.22','0','0','0','5','0','1','0','1','');");
E_D("replace into `engrave_order` values('26','2','150514001','','1431563475','31686','16','','','1','1','0','3','1','1','1','0','255.59','8300.00','0.00','33.00','0.00','0.00','0.00','0.00','0.00','0.00','4700.00','0.90','9180.00','17.00','50.43','0','0','0','1','0','1','0','1','');");
E_D("replace into `engrave_order` values('27','2','150520001','','1432109378','31686','16','','','1','1','0','3','1','1','0','0','147.74','3000.00','600.00','600.00','0.00','0.00','0.00','0.00','0.00','0.00','1400.00','0.00','12580.00','1241.00','102.18','0','0','0','1','0','1','0','1','');");
E_D("replace into `engrave_order` values('28','2','150520002','','1432112456','31686','16','','','3','1','0','2','1','1','0','0','135.59','2000.00','10.00','10.00','0.00','0.00','0.00','0.00','0.00','0.00','1500.00','0.90','9100.00','905.00','33.32','0','0','0','2','0','1','0','1','');");
E_D("replace into `engrave_order` values('29','2','150520003','','1432112964','31686','16','','','3','1','0','2','1','1','0','0','37.32','2000.00','0.00','200.00','0.00','0.00','0.00','0.00','0.00','0.00','700.00','0.00','9100.00','5.00','19.48','0','0','0','3','0','1','0','1','');");
E_D("replace into `engrave_order` values('30','0','150520004','','1432113272','31686','16','','','1','0','0','0','1','1','0','0','58.27','1000.00','100.00','100.00','0.00','0.00','0.00','0.00','0.00','0.00','200.00','0.00','9180.00','901.00','9.74','0','0','0','2','0','1','0','1','');");
E_D("replace into `engrave_order` values('31','0','150520005','','1432113650','31686','16','','','2','0','0','0','1','1','0','0','11.14','1000.00','0.00','100.00','0.00','0.00','0.00','0.00','0.00','0.00','200.00','0.00','2700.00','10.00','9.74','0','0','0','3','0','1','0','1','');");
E_D("replace into `engrave_order` values('32','0','150520006','','1432114106','31686','16','','','3','0','0','0','1','1','0','0','53.20','100.00','100.00','100.00','0.00','0.00','0.00','0.00','0.00','1.00','100.00','0.00','9100.00','905.00','9.74','0','0','0','3','0','1','0','1','');");
E_D("replace into `engrave_order` values('33','0','150520007','','1432114781','31686','16','','','3','0','0','0','1','1','0','0','5.58','100.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','100.00','0.00','5.00','5.00','0.54','0','0','0','2','0','1','0','1','');");
E_D("replace into `engrave_order` values('34','0','150620001','','1434768328','31686','16','','','6','0','0','0','1','1','1','0','21.24','2000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.00','400.00','0.00','10.01','1.00','7.02','0','0','0','2','0','1','0','2','');");
E_D("replace into `engrave_order` values('35','0','150715001','','1436941275','31698','19','','','3','0','0','0','1','1','0','0','271.60','15129.00','1234.00','1234.00','0.00','0.00','0.00','0.00','0.00','2.32','3025.80','0.90','2105.00','2105.00','0.00','0','1','0','2','0','1','0','1','');");
E_D("replace into `engrave_order` values('36','0','150715002','','1436965380','31698','19','','','1','0','0','0','1','1','1','0','0.00','4428.00','3225.00','3225.00','33.00','25.00','36.00','0.00','0.00','1.00','0.00','0.00','4750.00','4300.00','0.00','0','1','0','6','0','1','0','1','');");
E_D("replace into `engrave_order` values('37','2','150716001','','1437012678','31699','21','','','6','1','0','2','1','1','1','0','169.29','21300.00','4895.00','4895.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','5650.00','3200.00','0.00','0','0','0','6','0','1','0','1','');");
E_D("replace into `engrave_order` values('38','0','150716002','','1437018719','31700','20','好好包装   总系包裹','','3','1','0','0','1','2','0','0','199.49','1201.00','2760.00','2760.00','0.00','0.00','0.00','0.00','0.00','200.00','0.00','0.00','3750.00','3750.00','0.00','0','1','0','2','0','1','0','1','');");
E_D("replace into `engrave_order` values('39','0','150716003','','1437020240','31700','20','','','3','0','0','0','1','2','0','0','189.29','200.00','15.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','3750.00','3750.00','0.00','10','0','0','2','0','1','0','1','8226204103668914');");
E_D("replace into `engrave_order` values('40','0','150724001','','1437745226','31698','19','asdf','asdf','1','0','0','0','1','1','1','0','0.00','15129.00','123.00','1234.00','0.00','0.00','0.00','0.00','0.00','1.00','0.00','0.00','900.00','90.00','0.00','0','1','0','5','0','1','0','1','');");
E_D("replace into `engrave_order` values('41','3','150725001','','1437793400','31698','19','','','6','1','2','0','1','1','1','0','141.52','15129.00','23546.00','23546.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','12350.00','2500.00','0.00','5','0','0','6','0','1','0','2','');");
E_D("replace into `engrave_order` values('42','0','150726001','','1437885826','31698','19','这里是备注','这里是升级包装备注','3','0','0','0','1','1','1','0','189.59','144.00','123.00','123.00','0.00','0.00','0.00','0.00','0.00','1.00','0.00','0.00','3750.00','3750.00','0.00','0','0','0','4','0','1','0','2','');");
E_D("replace into `engrave_order` values('43','0','150727001','','1438001931','31698','19','备注说明','升级备注说明','6','0','0','0','1','2','0','0','126.39','148088.00','1231.00','1231.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','2500.00','2500.00','0.00','0','0','0','2','0','1','0','2','');");
E_D("replace into `engrave_order` values('44','0','150727002','','1438002244','31698','19','','','3','0','0','0','1','2','0','0','189.62','49.00','1.00','1.00','1.00','1.00','1.00','0.00','0.00','0.00','0.00','0.76','3750.00','3750.00','0.00','0','0','0','2','0','0','0','2','');");
E_D("replace into `engrave_order` values('45','0','150728001','','1438080326','31698','19','','','2','0','0','0','1','1','1','0','199.70','168309.00','12333.00','12333.00','0.00','0.00','0.00','0.00','0.00','1.00','0.00','0.00','14900.00','3950.00','0.00','0','0','0','6','0','1','0','2','');");
E_D("replace into `engrave_order` values('46','0','150802001','','1438503037','31698','19','123','','3','0','0','0','1','1','1','0','543.06','15129.00','123.00','123.00','0.00','0.00','0.00','0.00','0.00','1.00','0.00','0.00','1236.00','3375.00','0.00','1000','0','0','4','0','1','0','2','');");
E_D("replace into `engrave_order` values('47','0','150802002','','1438503617','31700','20','是大法官','','1','0','0','0','1','2','0','0','197.17','321.00','2525.00','2525.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','100.00','3800.00','3800.00','0.00','0','0','0','2','0','0','1','2','');");
E_D("replace into `engrave_order` values('48','0','150802002','','1438503903','31698','19','','','6','0','0','3','1','2','0','1','113.75','16607.00','123123.00','123123.00','0.00','0.00','0.00','0.00','0.00','1.00','0.00','0.00','150.00','2250.00','0.00','0','0','0','2','0','1','0','2','');");
E_D("replace into `engrave_order` values('49','0','150803001','','1438599349','31698','19','','','6','0','0','0','0','2','0','0','123.91','1.00','1.00','413231.00','1.00','1.00','1.00','0.00','1.00','1.00','0.00','200.90','148850.00','2250.00','0.00','0','0','0','3','0','1','0','1','');");

require("../../inc/footer.php");
?>