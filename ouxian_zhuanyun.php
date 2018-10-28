<?php
/**
 * Created by PhpStorm.
 * User: baolong
 * Date: 2018/10/21
 * Time: 上午8:25
 */

define('IN_ENGRAVE', true);

require (dirname(__FILE__) . '/includes/init.php');
mustLogin();
//载入语言文件
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_packagemanage.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_promptlydelivery.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_forecast.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_user.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_order.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_appreciation.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_fad.php');
//数据访问类：仓库
require_once(ROOT_PATH . '/includes/logisticssystem/lib_warehouse.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_dictionary.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_package.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_shipment.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_port.php');
require_once(ROOT_PATH . '/includes/membermanage/lib_users.php');
require_once(ROOT_PATH . '/includes/packagemanagement/lib_package.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_area.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_service.php');
require_once(ROOT_PATH . '/includes/member/lib_account.php');
require_once(ROOT_PATH . '/includes/member/lib_coupon.php');
require_once(ROOT_PATH . '/includes/member/lib_account_log.php');
//收货地址
require_once(ROOT_PATH . '/includes/membermanage/lib_users_deliveryaddress.php');
//上传图片
require_once(ROOT_PATH . '/includes/commonhelper/upload_json.php');

require_once(ROOT_PATH . '/includes/lib_passport.php');

$smarty->display('ouxian_zhuanyun.html');