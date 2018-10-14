﻿<?php /** * ENGRAVE 商品管理、物流转运 程序 * ============================================================================ * * 版权所有  zxp，并保留所有权利。 * 网站地址:  * ============================================================================ * $Author: zxp $ * $Id: engrave_focus_map_manage.php 2014-12-01 21:34:00 zxp $ */define('IN_ECS', true);require(dirname(__FILE__) . '/includes/init.php');/* 载入语言文件 */require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_focus_map_manage.php');/*载入-物流系统-数据访问文件*/require_once(ROOT_PATH . 'admin/includes/engrave/lib_focus_map_manage.php');/*上传*/require_once (ROOT_PATH  . 'admin/commonhelper/upload_json.php');$smarty->assign('lang',$_LANG);//$exc = new exchange($engrave->table("class"), $db, 'ClassId', 'ClassName');/*------------------------------------------------------ *///-- 营销系统/*------------------------------------------------------ */if ($_REQUEST['act'] == 'list'){    /* 检查权限 */    admin_priv('focus_map_manage');	    $ur_here = $_LANG['08_marketing_manage'] .'｜'.$_LANG['0803_focus_map_manage'];    $smarty->assign('ur_here', $ur_here);    $smarty->assign('action_link',  array('text' => $_LANG['0804_add_focus_map'], 'href'=>'engrave_focus_map_manage.php?act=add'));    $smarty->assign('full_page',    1);    $focuse_list= engrave_focuse_list();    $smarty->assign('focuse_list',   $focuse_list['focuse_list']);    $smarty->assign('filter',       $focuse_list['filter']);    $smarty->assign('record_count', $focuse_list['record_count']);    $smarty->assign('page_count',   $focuse_list['page_count']);        $smarty->assign('full_page',    1);        /* 显示焦点图管理页面 */    assign_query_info();    $smarty->display('engrave_focus_map_manage.htm');}/*------------------------------------------------------ *///-- 焦点图管理显示页面-分页/*------------------------------------------------------ */elseif ($_REQUEST['act'] == 'query'){	$focuse_list = engrave_focuse_list();	$smarty->assign('focuse_list',   $focuse_list['focuse_list']);	$smarty->assign('filter',       $focuse_list['filter']);	$smarty->assign('record_count', $focuse_list['record_count']);	$smarty->assign('page_count',   $focuse_list['page_count']);	$sort_flag  = sort_flag($focuse_list['filter']);	$smarty->assign($sort_flag['tag'], $sort_flag['img']);	make_json_result($smarty->fetch('engrave_focus_map_manage.htm'), '',	array('filter' => $focuse_list['filter'], 'page_count' => $focuse_list['page_count']));}elseif($_REQUEST['act'] == 'add'){    /* 检查权限 */    admin_priv('focus_map_manage');	    $ur_here = $_LANG['08_marketing_manage'] .'｜'.$_LANG['0804_add_focus_map'];    $smarty->assign('ur_here', $ur_here);    $smarty->assign('action_link',  array('text' => $_LANG['0803_focus_map_manage'], 'href'=>'engrave_focus_map_manage.php?act=list'));    $smarty->assign('form_action', 'insert');    /* 显示焦点图管理页面 */    assign_query_info();    $smarty->display('engrave_focus_map_add.htm');}elseif($_REQUEST['act']=='edit'){	/* 检查权限 */	admin_priv('focus_map_manage');	//获取ID，并根据ID获取对象 赋值给smarty	$FocuseId=$_REQUEST['id'];	$focuse_info=engrave_focuse($FocuseId);	$smarty->assign('focuse_info', $focuse_info);	$ur_here = $_LANG['08_marketing_manage'] .'｜'.$_LANG['0804_add_focus_map'];	$smarty->assign('ur_here', $ur_here);	$smarty->assign('action_link',  array('text' => $_LANG['0803_focus_map_manage'], 'href'=>'engrave_focus_map_manage.php?act=list'));	$smarty->assign('form_action','update');	$smarty->assign('full_page',    1);	/* 显示商品列表页面 */	assign_query_info();	$smarty->display('engrave_focus_map_add.htm');}/*------------------------------------------------------ *///-- 焦点图添加-数据操作/*------------------------------------------------------ */elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update'){	$act=$_REQUEST['act'];	/* 检查权限 */	admin_priv('focus_map_manage');		$upload=new FileUpload();		foreach ($_FILES AS $code => $file)	{		$filename = $upload-> upload($file);		if($filename!='error')		{			$focuse['ImgUrl']=$filename;		}		else {			sys_msg(sprintf($_LANG['msg_upload_failed'], $file['name'], $file_var_list[$code]['store_dir']));		}	}	//获取数据	$focuse['Title'] = !empty($_POST['Title']) ? trim($_POST['Title']) : '';	$focuse['LinkUrl'] = !empty($_POST['LinkUrl']) ? trim($_POST['LinkUrl']) : '';    	$focuse['Description'] = !empty($_POST['Description']) ? trim($_POST['Description']) : '';	$focuse['State'] = !empty($_POST['state']) ? intval($_POST['state']) : '0';	$focuse['IsFocuseDelete'] = '0';	if($act=='insert')	{		engrave_focuse_insert($focuse);		//页面跳转		$link[0]['text'] = $_LANG['continue_add_focuse'];		$link[0]['href'] = 'engrave_focus_map_manage.php?act=add';		$link[1]['text'] = $_LANG['back_focuse_list'];		$link[1]['href'] = 'engrave_focus_map_manage.php?act=list';	}	elseif($act='update')	{		$FocuseId=$_REQUEST['FocusId'];		//判断是否重新上传了图片		if($focuse['ImgUrl']=='')		{			$focuse['ImgUrl']=(!empty($_POST['ImgUrl']) ? trim($_POST['ImgUrl']) : '');		}		engrave_focuse_update($focuse,$FocuseId);		$link[0]['text'] = $_LANG['back_focuse_list'];		$link[0]['href'] = 'engrave_focus_map_manage.php?act=list';	}	sys_msg($_LANG['save_success'], 0, $link);}/*------------------------------------------------------ *///-- 焦点图删除：数据操作/*------------------------------------------------------ */elseif ($_REQUEST['act'] == 'remove'){	$focuseId = intval($_REQUEST['id']);	/* 检查权限 */	check_authz_json('focus_map_remove');	if (engrave_focuse_delete("1", $focuseId))	{		$url = 'engrave_focus_map_manage.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);		ecs_header("Location: $url\n");		exit;	}}elseif ($_REQUEST['act'] == 'edit_currecys_name'){        make_json_result(stripslashes('dfsafasd'));}?>