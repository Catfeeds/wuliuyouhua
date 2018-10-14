<?php

/**
 * UTSOFT 安裝程序商品類型
 * ============================================================================
 * 版權所有 2005-2011 上海商派網絡科技有限公司，並保留所有權利。
 * 網站地址: http://qdutsoft.com/；
 * ----------------------------------------------------------------------------
 * 這不是壹個自由軟件！您只能在不用於商業目的的前提下對程序代碼進行修改和
 * 使用；不允許對程序代碼以任何形式任何目的的再發布。
 * ============================================================================
  * $Author: zxp $
 * $Id: inc_goods_type_zh_tw.php 17217 2011-01-19 06:29:08Z liubo $
*/

$attributes['book'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `sort_order`) VALUES
                                (NULL, {cat_id}, '作者', 0, 0, '', 0),
                                (NULL, {cat_id}, '出版社', 0, 0, '', 0),
                                (NULL, {cat_id}, '圖書書號/ISBN', 0, 0, '', 0),
                                (NULL, {cat_id}, '出版日期', 0, 0, '', 0),
                                (NULL, {cat_id}, '開本', 0, 0, '', 0),
                                (NULL, {cat_id}, '圖書頁數', 0, 0, '', 0),
                                (NULL, {cat_id}, '圖書裝訂', 1, 0, '平裝\r\n黑白', 0),
                                (NULL, {cat_id}, '圖書規格', 0, 0, '', 0),
                                (NULL, {cat_id}, '版次', 0, 0, '', 0),
                                (NULL, {cat_id}, '印張', 0, 0, '', 0),
                                (NULL, {cat_id}, '字數', 0, 0, '', 0),
                                (NULL, {cat_id}, '所屬分類', 0, 0, '', 0)",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '書', 1);");

$attributes['music'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `sort_order`) VALUES
                                (NULL, {cat_id}, '中文片名', 0, 0, '', 0),
                                (NULL, {cat_id}, '英文片名', 0, 0, '', 0),
                                (NULL, {cat_id}, '商品別名', 0, 0, '', 0),
                                (NULL, {cat_id}, '介質/格式', 1, 0, 'HDCD\r\nDTS\r\nDVD\r\nDVD9\r\nVCD\r\nCD\r\nTAPE\r\nLP', 0),
                                (NULL, {cat_id}, '片裝數', 0, 0, '', 0),
                                (NULL, {cat_id}, '國家地區', 0, 0, '', 0),
                                (NULL, {cat_id}, '語種', 1, 0, '中文\r\n英文\r\n法文\r\n西班牙文', 0),
                                (NULL, {cat_id}, '導演/指揮', 0, 0, '', 0),
                                (NULL, {cat_id}, '主唱', 0, 0, '', 0),
                                (NULL, {cat_id}, '所屬類別', 1, 0, '古典\r\n流行\r\n搖滾\r\n鄉村\r\n民謠\r\n爵士\r\n藍調\r\n電子\r\n舞曲\r\n國樂\r\n民族\r\n懷舊\r\n經典\r\n人聲\r\n合唱\r\n發燒\r\n試音\r\n兒童\r\n胎教\r\n輕音樂\r\n世界音樂\r\n慶典音樂\r\n影視音樂\r\n新世紀音樂\r\n大自然音樂', 0),
                                (NULL, {cat_id}, '長度', 0, 0, '', 0),
                                (NULL, {cat_id}, '歌詞', 1, 0, '有\r\n無', 0),
                                (NULL, {cat_id}, '碟片代碼', 0, 0, '', 0),
                                (NULL, {cat_id}, 'ISRC碼', 0, 0, '', 0),
                                (NULL, {cat_id}, '發行公司', 0, 0, '', 0),
                                (NULL, {cat_id}, '出版', 0, 0, '', 0),
                                (NULL, {cat_id}, '出版號', 0, 0, '', 0),
                                (NULL, {cat_id}, '引進號', 0, 0, '', 0),
                                (NULL, {cat_id}, '版權號', 0, 0, '', 0);",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '音樂', 1);");

$attributes['movie'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `sort_order`) VALUES
                                (NULL, {cat_id}, '中文片名', 0, 0, '', 0),
                                (NULL, {cat_id}, '英文片名', 0, 0, '', 0),
                                (NULL, {cat_id}, '商品別名', 0, 0, '', 0),
                                (NULL, {cat_id}, '介質/格式', 1, 0, 'HDCD\r\nDTS\r\nDVD\r\nDVD9\r\nVCD', 0),
                                (NULL, {cat_id}, '碟片類型', 1, 0, '單面\r\n雙層', 0),
                                (NULL, {cat_id}, '片裝數', 0, 0, '', 0),
                                (NULL, {cat_id}, '國家地區', 0, 0, '', 0),
                                (NULL, {cat_id}, '語種/配音', 1, 0, '中文\r\n英文\r\n法文\r\n西班牙文', 0),
                                (NULL, {cat_id}, '字幕', 0, 0, '', 0),
                                (NULL, {cat_id}, '色彩', 0, 0, '', 0),
                                (NULL, {cat_id}, '中文字幕', 1, 0, '有\r\n無', 0),
                                (NULL, {cat_id}, '導演', 0, 0, '', 0),
                                (NULL, {cat_id}, '表演者', 0, 0, '', 0),
                                (NULL, {cat_id}, '所屬類別', 1, 0, '愛情\r\n偶像\r\n生活\r\n社會\r\n科幻\r\n神話\r\n武俠\r\n動作\r\n驚險\r\n恐怖\r\n傳奇\r\n人物\r\n偵探\r\n警匪\r\n歷史\r\n軍事\r\n戲劇\r\n舞臺\r\n經典\r\n名著\r\n喜劇\r\n情景\r\n動漫\r\n卡通\r\n兒童\r\n倫理激情', 0),
                                (NULL, {cat_id}, '年份', 0, 0, '', 0),
                                (NULL, {cat_id}, '音頻格式', 0, 0, '', 0),
                                (NULL, {cat_id}, '區碼', 0, 0, '', 0),
                                (NULL, {cat_id}, '碟片代碼', 0, 0, '', 0),
                                (NULL, {cat_id}, 'ISRC碼', 0, 0, '', 0),
                                (NULL, {cat_id}, '發行公司', 0, 0, '', 0),
                                (NULL, {cat_id}, '出版 ', 0, 0, '', 0),
                                (NULL, {cat_id}, '出版號', 0, 0, '', 0),
                                (NULL, {cat_id}, '引進號', 0, 0, '', 0),
                                (NULL, {cat_id}, '版權號', 0, 0, '', 0);",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '電影', 1);");

$attributes['mobile'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `sort_order`) VALUES
                                (NULL, {cat_id}, '網絡制式', 0, 0, '', 0),
                                (NULL, {cat_id}, '支持頻率/網絡頻率', 0, 0, '', 0),
                                (NULL, {cat_id}, '尺寸體積', 1, 0, '   ', 0),
                                (NULL, {cat_id}, '外觀樣式/手機類型', 1, 0, '翻蓋\r\n滑蓋\r\n直板\r\n折疊\r\n手寫', 0),
                                (NULL, {cat_id}, '主屏參數/內屏參數', 0, 0, '', 0),
                                (NULL, {cat_id}, '副屏參數/外屏參數', 0, 0, '', 0),
                                (NULL, {cat_id}, '清晰度', 0, 0, '', 0),
                                (NULL, {cat_id}, '色數/灰度', 1, 0, '   ', 0),
                                (NULL, {cat_id}, '長度', 0, 0, '', 0),
                                (NULL, {cat_id}, '寬度', 0, 0, '', 0),
                                (NULL, {cat_id}, '厚度', 0, 0, '', 0),
                                (NULL, {cat_id}, '屏幕材質', 0, 0, '', 0),
                                (NULL, {cat_id}, '內存容量', 0, 0, '', 0),
                                (NULL, {cat_id}, '操作系統', 0, 0, '', 0),
                                (NULL, {cat_id}, '通話時間', 0, 0, '', 0),
                                (NULL, {cat_id}, '待機時間', 0, 0, '', 0),
                                (NULL, {cat_id}, '標準配置', 0, 0, '', 0),
                                (NULL, {cat_id}, 'WAP上網', 0, 0, '', 0),
                                (NULL, {cat_id}, '數據業務', 0, 0, '', 0),
                                (NULL, {cat_id}, '天線位置', 1, 0, '內置\r\n外置', 0),
                                (NULL, {cat_id}, '隨機配件', 0, 0, '', 0),
                                (NULL, {cat_id}, '鈴聲', 0, 0, '', 0),
                                (NULL, {cat_id}, '攝像頭', 0, 0, '', 0),
                                (NULL, {cat_id}, '彩信/彩e', 1, 0, '支持\r\n不支持', 0),
                                (NULL, {cat_id}, '紅外/藍牙', 0, 0, '', 0),
                                (NULL, {cat_id}, '價格等級', 1, 0, '高價機\r\n中價機\r\n低價機', 0);",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '手機', 1);");

$attributes['notebook'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `sort_order`) VALUES
                                (NULL, {cat_id}, '型號', 0, 0, '', 0),
                                (NULL, {cat_id}, '詳細規格', 0, 0, '', 0),
                                (NULL, {cat_id}, '筆記本尺寸', 0, 0, '', 0),
                                (NULL, {cat_id}, '處理器類型', 0, 0, '', 0),
                                (NULL, {cat_id}, '處理器最高主頻', 0, 0, '', 0),
                                (NULL, {cat_id}, '二級緩存', 0, 0, '', 0),
                                (NULL, {cat_id}, '系統總線', 0, 0, '', 0),
                                (NULL, {cat_id}, '主板芯片組', 0, 0, '', 0),
                                (NULL, {cat_id}, '內存容量', 0, 0, '', 0),
                                (NULL, {cat_id}, '內存類型', 0, 0, '', 0),
                                (NULL, {cat_id}, '硬盤', 0, 0, '', 0),
                                (NULL, {cat_id}, '屏幕尺寸', 0, 0, '', 0),
                                (NULL, {cat_id}, '顯示芯片', 0, 0, '', 0),
                                (NULL, {cat_id}, '標稱頻率', 0, 0, '', 0),
                                (NULL, {cat_id}, '顯卡顯存', 0, 0, '', 0),
                                (NULL, {cat_id}, '顯卡類型', 0, 0, '', 0),
                                (NULL, {cat_id}, '光驅類型', 0, 0, '', 0),
                                (NULL, {cat_id}, '電池容量', 0, 0, '', 0),
                                (NULL, {cat_id}, '其他配置', 0, 0, '', 0);",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '筆記本電腦', 1);");

$attributes['dc'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `sort_order`) VALUES
                                (NULL, {cat_id}, '類型', 0, 0, '', 0),
                                (NULL, {cat_id}, '最大像素/總像素  ', 0, 0, '', 0),
                                (NULL, {cat_id}, '有效像素', 1, 0, '  ', 0),
                                (NULL, {cat_id}, '光學變焦倍數', 0, 0, '', 0),
                                (NULL, {cat_id}, '數字變焦倍數', 0, 0, '', 0),
                                (NULL, {cat_id}, '操作模式', 0, 0, '', 0),
                                (NULL, {cat_id}, '顯示屏類型', 0, 0, '', 0),
                                (NULL, {cat_id}, '顯示屏尺寸', 0, 0, '', 0),
                                (NULL, {cat_id}, '感光器件', 0, 0, '', 0),
                                (NULL, {cat_id}, '感光器件尺寸', 0, 0, '', 0),
                                (NULL, {cat_id}, '最高分辨率', 0, 0, '', 0),
                                (NULL, {cat_id}, '圖像分辨率', 0, 0, '', 0),
                                (NULL, {cat_id}, '傳感器類型', 0, 0, '', 0),
                                (NULL, {cat_id}, '傳感器尺寸', 0, 0, '', 0),
                                (NULL, {cat_id}, '鏡頭', 0, 0, '', 0),
                                (NULL, {cat_id}, '光圈', 0, 0, '', 0),
                                (NULL, {cat_id}, '焦距', 0, 0, '', 0),
                                (NULL, {cat_id}, '旋轉液晶屏', 1, 0, '支持\r\n不支持', 0),
                                (NULL, {cat_id}, '存儲介質', 0, 0, '', 0),
                                (NULL, {cat_id}, '存儲卡', 1, 0, '  記錄媒體\r\n存儲卡容量', 0),
                                (NULL, {cat_id}, '影像格式', 1, 0, '    靜像\r\n動畫', 0),
                                (NULL, {cat_id}, '曝光控制', 0, 0, '', 0),
                                (NULL, {cat_id}, '曝光模式', 0, 0, '', 0),
                                (NULL, {cat_id}, '曝光補償', 0, 0, '', 0),
                                (NULL, {cat_id}, '白平衡', 0, 0, '', 0),
                                (NULL, {cat_id}, '連拍', 0, 0, '', 0),
                                (NULL, {cat_id}, '快門速度', 0, 0, '', 0),
                                (NULL, {cat_id}, '閃光燈', 1, 0, '內置\r\n外置', 0),
                                (NULL, {cat_id}, '拍攝範圍', 1, 0, '  ', 0),
                                (NULL, {cat_id}, '自拍定時器', 0, 0, '', 0),
                                (NULL, {cat_id}, 'ISO感光度', 0, 0, '', 0),
                                (NULL, {cat_id}, '測光模式', 0, 0, '', 0),
                                (NULL, {cat_id}, '場景模式', 0, 0, '', 0),
                                (NULL, {cat_id}, '短片拍攝', 0, 0, '', 0),
                                (NULL, {cat_id}, '外接接口', 0, 0, '', 0),
                                (NULL, {cat_id}, '電源', 0, 0, '', 0),
                                (NULL, {cat_id}, '電池使用時間', 0, 0, '', 0),
                                (NULL, {cat_id}, '外形尺寸', 0, 0, '', 0),
                                (NULL, {cat_id}, '標配軟件', 0, 0, '', 0),
                                (NULL, {cat_id}, '標準配件', 0, 0, '', 0),
                                (NULL, {cat_id}, '兼容操作系統', 0, 0, '', 0);",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '數碼相機', 1);");

$attributes['dv'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `sort_order`) VALUES
                                (NULL, {cat_id}, '編號', 0, 0, '', 0),
                                (NULL, {cat_id}, '類型', 0, 0, '', 0),
                                (NULL, {cat_id}, '外型尺寸', 0, 0, '', 0),
                                (NULL, {cat_id}, '最大像素數', 0, 0, '', 0),
                                (NULL, {cat_id}, '光學變焦倍數', 0, 0, '', 0),
                                (NULL, {cat_id}, '數字變焦倍數', 0, 0, '', 0),
                                (NULL, {cat_id}, '顯示屏尺寸及類型', 0, 0, '', 0),
                                (NULL, {cat_id}, '感光器件', 0, 0, '', 0),
                                (NULL, {cat_id}, '感光器件尺寸', 0, 0, '', 0),
                                (NULL, {cat_id}, '感光器件數量', 0, 0, '', 0),
                                (NULL, {cat_id}, '像素範圍', 0, 0, '', 0),
                                (NULL, {cat_id}, '傳感器數量', 0, 0, '', 0),
                                (NULL, {cat_id}, '傳感器尺寸', 0, 0, '', 0),
                                (NULL, {cat_id}, '水平清晰度', 0, 0, '', 0),
                                (NULL, {cat_id}, '取景器', 0, 0, '', 0),
                                (NULL, {cat_id}, '數碼效果', 0, 0, '', 0),
                                (NULL, {cat_id}, '鏡頭性能', 0, 0, '', 0),
                                (NULL, {cat_id}, '對焦方式', 0, 0, '', 0),
                                (NULL, {cat_id}, '曝光控制', 0, 0, '', 0),
                                (NULL, {cat_id}, '其他接口', 0, 0, '', 0),
                                (NULL, {cat_id}, '隨機存儲', 0, 0, '', 0),
                                (NULL, {cat_id}, '電池類型', 0, 0, '', 0),
                                (NULL, {cat_id}, '電池供電時間', 0, 0, '', 0);",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '數碼攝像機', 1);");

$attributes['cosmetics'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `sort_order`) VALUES
                                (NULL, {cat_id}, '產地', 0, 0, '', 0),
                                (NULL, {cat_id}, '產品規格/容量', 0, 0, '', 0),
                                (NULL, {cat_id}, '主要原料', 0, 0, '', 0),
                                (NULL, {cat_id}, '所屬類別', 1, 0, '彩妝\r\n化妝工具\r\n護膚品\r\n香水', 0),
                                (NULL, {cat_id}, '使用部位', 0, 0, '', 0),
                                (NULL, {cat_id}, '適合膚質', 1, 0, '油性\r\n中性\r\n幹性', 0),
                                (NULL, {cat_id}, '適用人群', 1, 0, '女性\r\n男性', 0);",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '化妝品', 1);");

$attributes['mobile2'] = array("attr"=>"INSERT INTO `".$prefix."attribute` (`attr_id`, `cat_id`, `attr_name`, `attr_input_type`, `attr_type`, `attr_values`, `attr_index`, `sort_order`, `is_linked`, `attr_group`) VALUES
                                (NULL, {cat_id}, '上市日期', 1, 0, '2008年01月\r\n2008年02月\r\n2008年03月\r\n2008年04月\r\n2008年05月\r\n2008年06月\r\n2008年07月\r\n2008年08月\r\n2008年09月\r\n2008年10月\r\n2008年11月\r\n2008年12月\r\n2007年01月\r\n2007年02月\r\n2007年03月\r\n2007年04月\r\n2007年05月\r\n2007年06月\r\n2007年07月\r\n2007年08月\r\n2007年09月\r\n2007年10月\r\n2007年11月\r\n2007年12月', 1, 0, 0, 0),
                                (NULL, {cat_id}, '手機制式', 1, 0, 'GSM,850,900,1800,1900\r\nGSM,900,1800,1900,2100\r\nCDMA\r\n雙模（GSM,900,1800,CDMA 1X）\r\n3G(GSM,900,1800,1900,TD-SCDMA )', 1, 1, 1, 0),
                                (NULL, {cat_id}, '理論通話時間', 0, 0, '', 0, 2, 0, 0),
                                (NULL, {cat_id}, '理論待機時間', 0, 0, '', 0, 3, 0, 0),
                                (NULL, {cat_id}, '鈴聲', 0, 0, '', 0, 4, 0, 0),
                                (NULL, {cat_id}, '鈴聲格式', 0, 0, '', 0, 5, 0, 0),
                                (NULL, {cat_id}, '外觀樣式', 1, 0, '翻蓋\r\n滑蓋\r\n直板\r\n折疊', 1, 6, 1, 0),
                                (NULL, {cat_id}, '中文短消息', 0, 0, '', 0, 7, 0, 0),
                                (NULL, {cat_id}, '存儲卡格式', 0, 0, '', 0, 0, 0, 0),
                                (NULL, {cat_id}, '內存容量', 0, 0, '', 2, 0, 0, 0),
                                (NULL, {cat_id}, '操作系統', 0, 0, '', 0, 0, 0, 0),
                                (NULL, {cat_id}, 'K-JAVA', 0, 0, '', 0, 0, 0, 0),
                                (NULL, {cat_id}, '尺寸體積', 0, 0, '', 0, 0, 0, 0),
                                (NULL, {cat_id}, '顏色', 1, 1, '黑色\r\n白色\r\n藍色\r\n金色\r\n粉色\r\n銀色\r\n灰色\r\n深李色\r\n黑紅色\r\n黑藍色\r\n白紫色', 1, 0, 0, 0),
                                (NULL, {cat_id}, '屏幕顏色', 1, 0, '1600萬\r\n262144萬', 1, 0, 1, 1),
                                (NULL, {cat_id}, '屏幕材質', 1, 0, 'TFT', 0, 0, 0, 1),
                                (NULL, {cat_id}, '屏幕分辨率', 1, 0, '320×240 像素\r\n240×400 像素\r\n240×320 像素\r\n176x220 像素', 1, 0, 0, 1),
                                (NULL, {cat_id}, '屏幕大小', 0, 0, '', 0, 0, 0, 1),
                                (NULL, {cat_id}, '中文輸入法', 0, 0, '', 0, 0, 0, 2),
                                (NULL, {cat_id}, '情景模式', 0, 0, '', 0, 0, 0, 2),
                                (NULL, {cat_id}, '網絡鏈接', 0, 0, '', 0, 0, 0, 2),
                                (NULL, {cat_id}, '藍牙接口', 0, 0, '', 0, 0, 0, 0),
                                (NULL, {cat_id}, '數據線接口', 0, 0, '', 0, 0, 0, 2),
                                (NULL, {cat_id}, '電子郵件', 0, 0, '', 0, 0, 0, 2),
                                (NULL, {cat_id}, '鬧鐘', 0, 0, '', 0, 35, 0, 4),
                                (NULL, {cat_id}, '辦公功能', 0, 0, '', 0, 0, 0, 4),
                                (NULL, {cat_id}, '數碼相機', 0, 0, '', 1, 0, 0, 3),
                                (NULL, {cat_id}, '像素', 0, 0, '', 0, 0, 0, 3),
                                (NULL, {cat_id}, '傳感器', 0, 0, '', 0, 0, 0, 0),
                                (NULL, {cat_id}, '變焦模式', 0, 0, '', 0, 0, 0, 3),
                                (NULL, {cat_id}, '視頻拍攝', 0, 0, '', 0, 0, 0, 3),
                                (NULL, {cat_id}, 'MP3播放器', 0, 0, '', 0, 0, 0, 3),
                                (NULL, {cat_id}, '視頻播放', 0, 0, '', 0, 0, 0, 3),
                                (NULL, {cat_id}, 'CPU頻率', 0, 0, '', 0, 0, 0, 0),
                                (NULL, {cat_id}, '收音機', 0, 0, '', 0, 0, 0, 3),
                                (NULL, {cat_id}, '耳機接口', 0, 0, '', 0, 0, 0, 3),
                                (NULL, {cat_id}, '閃光燈', 0, 0, '', 0, 0, 0, 3),
                                (NULL, {cat_id}, '瀏覽器', 0, 0, '', 0, 0, 0, 2),
                                (NULL, {cat_id}, '配件', 1, 2, '線控耳機\r\n藍牙耳機\r\n數據線', 0, 0, 0, 0);",
                        "cat"=>"INSERT INTO `".$prefix."goods_type` (`cat_id`, `cat_name`, `enabled`) VALUES (NULL, '精品手機', 1);");

?>
