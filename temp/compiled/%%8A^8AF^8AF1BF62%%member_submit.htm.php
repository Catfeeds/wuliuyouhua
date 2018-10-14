<?php /* Smarty version 2.6.26, created on 2018-07-08 15:23:35
         compiled from member_submit.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'member_submit.htm', 417, false),)), $this); ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header_user.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <script>
	 var rate_data = <?php echo $this->_tpl_vars['rate_data']; ?>
;
	 var user_payment_type="<?php echo $_SESSION['user_payment_type']; ?>
";
 </script>
 <?php echo '
 <style>
	input,select,textarea {
		border :1px solid #ddd;
		border-radius: 5px;
		line-height: 30px;
		height: 30px;
	}
	 	/* Table Head */
	input[type=radio],input[type=checkbox]{
		vertical-align: middle;margin-right: 10px;
	}
 	#package_list_table，#wuliu_choose_table {
 	    width: 100%;
 	}
	#package_list_table thead th,#wuliu_choose_table thead th{
		background-color: rgb(156, 186, 95);
		color: #fff;
		border-bottom-width: 0;
		padding : 5px 10px;
	}
	#wuliu_choose_table tbody td {
		font-size: 14px;
		padding :5px 0 ;
	}
	.w200 {
		width :200px !important;
	}

	/* Column Style */
	#package_list_table td {
		color: #000;
	}
	/* Heading and Column Style */
	#package_list_table tr, #table-5 th {
		border-width: 1px;
		border-style: solid;
		border-color: rgb(156, 186, 95);
	}

	/* Padding and font style */
	#package_list_table td, #table-5 th {
	padding: 5px 10px;
	font-size: 12px;
	font-family: Verdana;
	font-weight: bold;
	}
	.wuliu_choose  {
		margin-top:20px;
		    width: 800px;
	}
	.wuliu_choose td {
		border-bottom:1px solid #ddd2c0;
	}
	.wuliu_choose li{
		float:left;
		width:100%;
		line-height: 30px;
		height: 30px;
	}
	.wuliu_choose li label {
		font-weight: bold
	}
	.wuliu_tipshow {
		padding-left: 30px;
		font-size :18px;
		padding: 10px 0 ;
		color :green;
	}
	.tb_left_detils {
		width:100px
	}
	#cal_info {
		margin-left: 40px;
		margin-top:30px
	}
	 #cal_info td {
		 padding :10px 0
	 }
 </style>
 '; ?>

 <div  class="conter">
		<div   class="member">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "member_menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>	 

     	<div  class="conter_right">
		 <div id="tjfh">
		   
		     <div id="hyzxddgl_title">
				<div id="hyzxddgl_title_left">订单管理</div>
				<div id="hyzxddgl_title_right">提交发货</div>
				<div id="clear"></div>
		     </div>
          	 <form enctype="multipart/form-data" action="member_order_submit.php" method="post" name="theForm" onsubmit="return validate();">
		   	 
			     <div id="tjfh_redtxt">
					提示：请仔细查看相应内容填写<br/>
					提交发货前，请先维护好收货地址，避免重填单据！ 
			     </div>
				 <h2 id="no-enough-money" style="padding-left: 20px; color:red; display: none; font-weight: bold">余额不足,无法下单, 请先 <a href="/member.php?act=member_onlinerecharge" style="padding-left: 20px; color:blue; font-weight: bold">充值</a></h2>
				 <h2 id="month-user" style="padding-left: 20px; color:red; display: none; font-weight: bold">您是月结用户,可以先下单再延期支付</h2>
		     <div id="tjfh_xzck">
   			    <div class="tjfh_xzck_title">
					<div class="tjfh_xzck_title_lecurrency_valft" style="float:left"><img src="themes/default/images/rbhm/tjfh_01.png" border="0" /></div>
					<div class="tjfh_xzck_title_mid">第一步</div>
					<div class="tjfh_xzck_title_right">选择仓库</div>
					<div id="clear"></div>
				</div>
                <div id="tjfh_xzck_neirong"> 
   			    <table border="0" cellpadding="0" cellspacing="0" class="tjfh_xzck_table">
   				<tr>
		     		<td width="100px" align="right">请选择仓库：</td>
                    <td width="10px"></td>
		     		<td>
		     			<select id="pck_warehouseid" name="pck_warehouseid" >
				 			<option value='0'><?php echo $this->_tpl_vars['lang']['select_warehouse']; ?>
</option>
				 			<?php echo $this->_tpl_vars['warehouse_list']; ?>

			 			</select>
			 			&nbsp;&nbsp;选择货物所在仓库，一个运单只能选择一个仓库内货物提交！
			 			<span id="housewarn" class="span_control"></span>
			 		</td>
		     	</tr>
		     	<tr>
		    		<td width="100px" align="left" id="datd" colspan=3 style="display:none;">
		    			<span class="tb_left" style="padding:4px 0px 3px 18px; ">选择需要发货的包裹：</span>
		    		</td>
                  
		    	</tr>
		    	<tr>
		    		<td  colspan=3 align="left" >
		    			<table id="package_list_table">
		    				<thead>
			    				<th style="width:40px">选择</th>
			    				<th style="width:40px">序号</th>
								<th style="width:100px">单号</th>
								<th  style="width:300px">物品</th>
								<th style="width:50px">重量</th>
								<th style="width:150px">长*宽*高（mm）</th>
								<th style="width:100px">到货时间</th>
								<th class=w200 style="text-align:center">用户备注</th>
		    				</thead>
							<tbody id="warehouse_goods" style="display:none;">
								
							</tbody>
		    			</table>
						
					</td>
		    	</tr>
		        </table>
                </div>
             </div>
             
		     <div id="tjfh_txsbxx">
	           <div class="tjfh_xzck_title">
					<div class="tjfh_xzck_title_left"><img src="themes/default/images/rbhm/tjfh_02.png" border="0" /></div>
					<div class="tjfh_xzck_title_mid">第二步</div>
					<div class="tjfh_xzck_title_right">填写申报相关信息</div>
					<div id="clear"></div>
		       </div>
               <div id="tjfh_txsbxx_neirong">
   			 <table border="0" cellpadding="0" cellspacing="0" class="tjfh_txsbxx_table">
   				<!-- <tr>
		     		<td width="100px" align="right">线路选择：</td>
                    
		     		<td>&nbsp;&nbsp;
		     			<select id="shipping" name="shipping" onchange="select_shipping(this.options[this.options.selectedIndex].value)" class="tjfh_xzck_table_select">
			    			<option value=0>请选择线路</option>
			    		</select>
			 		</td>
		     	</tr> -->
		     	<!-- <tr>
                    <td></td>
					<td>
						<ul>
						  <li id="shippingweight" style="line-height:20px; margin-left:100px; color:red; display:none;">
							  该线路支持每箱最大重量：30kg，超重将无法提交！
						  </li>
						  <li style="line-height:20px; color:red; display:none;">请选择运输方式！</li>
						</ul>
					</td>
		    	</tr> -->
   				<tr>
		     		 <td align="right" valign="top">操作要求：</td>
	     		     <td>
                      <div id="tjfh_txsbxx_table_czyq01">
						<input type="radio" name="service" id="baseservice" onclick="showservice(0);" checked="checked" value="0" />
						<label for="baseservice">我不需合/分箱 我只需发送提交的这一个包裹</label>
					  </div>
					  
	     		      <!-- <div id="tjfh_txsbxx_table_czyq02">
						<input type="radio" id="moreservice" onclick="showservice(1);" name="service" value="1" />
						<label for="moreservice">我需要复杂一点的操作</label>
                      </div>
                      <div id="tjfh_txsbxx_table_czyq03">
						把提交的包裹进行&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="AService" id="AService" onclick="showboxNumber0(this);" disabled="false" value="3" checked="checked" />
						<label for="AService">A.合箱（合并成一箱）</label>
                      </div>
	     		      <div id="tjfh_txsbxx_table_czyq04">
						把提交的包裹进行&nbsp;&nbsp;<input type="checkbox" class="checkbox" name="BService" id="BService" onclick="showboxNumber1(this);" disabled="false" value="2" />
						<label for="BService">B.分箱 .</label>分	
						<select id="boxNumber" name="boxNumber" onchange="SelectBoxNumber();" disabled="false">
							<?php echo $this->_tpl_vars['html20Cases']; ?>

						</select>
						箱 注:总运费=每箱单独运费之和
					  </div> -->
					  
                     </td>
		     	</tr>
		     </table>
		     <div id="detail_goods_info" style="display:none;"> 
			     <table border="0" cellpadding="0" cellspacing="0" class="tjfh_txsbxx_table">
			     	<tr>
			     		<td align="right" valign="top"><p>商品详细信息：</p></td>
			     		<td id="table_goods">		
			     		</td>
			     	</tr>
			     </table>
		     </div>
			   <table border="0" cellpadding="0" cellspacing="0" class="tjfh_txsbxx_table">	
		    	<tr>
                    <td class="tttx_left" valign="top">备注说明：</td>
					<td>
						<textarea name="description" class="tttx_table_textarea" maxlength="100"></textarea>100字内
					</td>
		    	</tr>
		    	<tr>
		    		<td class="tttx_left" valign="top">升级包装：</td>
		    		<td>
		    			&nbsp;&nbsp;需要加固的散件个数：
						<select style="width:70px;" onchange="SelectUpgradePackage();" id="UpgradePackage" name="UpgradePackage">
							<option value=0>请选择</option>
							<?php echo $this->_tpl_vars['html20']; ?>

						</select>
						<p id="upgradepackage" style="float:right; margin-right:345px; display:none;"></p>
		    		</td>
		    	</tr>
		    	<tr>
                    <td></td>
					<td>
						<ul>
						  <li style="line-height:20px; ">&nbsp;&nbsp;
						  <input style="margin-top:2px; vertical-align:middle;" onclick="OustSide_Click();"  id="oustsidebrane" name="oustsidebrane" type="checkbox" value="1" />
						  <label for="oustsidebrane">外箱缠绕膜</label> 
						  <p id="outsidecost" style="float:right; margin-right:545px; display:none;"></p></li>
						</ul>
					</td>
		    	</tr>
		       </table>
            	<table style="width:100%">
            		<tr>
			     		<td   align="left">运送方式选择：</td>
			     	</tr>
			     	<tr>
			     		<td  align="left" class="wuliu_tipshow">
							请在以下的送货方式中选择一种，欧洲专线为本站自组织的线路。
			     		</td>
					 </tr>
					 <tr>
						 <td align="left">
							 订单出发城市: <span id="leave_city" style="color:red; margin: 0 20px"></span>
							 到达国家    ：<span id="leave_country" style="color:red; margin: 0 20px"></span>
						 </td>
					 </tr>
					 <tr>
						<td align="left">
						   时效要求: 
						   <label><input type=radio value=normal name='order_time_request' checked>正常</label>
						   <label><input type=radio value=urgent name='order_time_request'>紧急</label>
						</td>
					</tr>
					 <tr>
						 <td align="left">
							筛选: 
							<label><input type=radio value=1 name='shipment-choose' checked>价格最低</label>
							<label><input type=radio value=2 name='shipment-choose'>时效最高</label>
							<label><input type=radio value=3 name='shipment-choose'>折扣最大</label>
						 </td>
					 </tr>
					<tr>
						<td>
							<table class="wuliu_choose" id="wuliu_choose_table" style="    width: 100%;">
								<thead>
									<th>选择</th>
									<th>物流名称</th>
									<th>预计价格</th>
									<th>价格折扣</th>
									<th>时效</th>
									<th style="width:400px">说明</th>
								</thead>
								<tbody>
									<?php $_from = $this->_tpl_vars['allShipment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['shipment']):
?>
									<tr>
										<td align=center>
											<lable><input type=radio value="<?php echo $this->_tpl_vars['shipment']['shipment_id']; ?>
" name=shipment_id class="shipment_id"></lable>
										</td>
										<td><?php echo $this->_tpl_vars['shipment']['shipment_name']; ?>

											<font color=red style="display:none" class="shipment_recommend_txt">[推荐]</font>
										</td>
										
										<td id="price_<?php echo $this->_tpl_vars['shipment']['shipment_id']; ?>
"></td>
										<td><?php echo $this->_tpl_vars['shipment']['discount']; ?>
折</td>
										<td><?php echo $this->_tpl_vars['shipment']['min_day']; ?>
天 -- <?php echo $this->_tpl_vars['shipment']['max_day']; ?>
天</td>
										<td style="width:400px; padding: 5px;"><?php echo $this->_tpl_vars['shipment']['description']; ?>
</td>

									</tr>

									<?php endforeach; endif; unset($_from); ?>

								</tbody>
									
							</table>
				     		
					 	</td>
					</tr>
            	</table>
            </div>
            </div>
            <div id="tjfh_xzzzfw">
			    <div class="tjfh_xzck_title">
					<div class="tjfh_xzck_title_left"><img src="themes/default/images/rbhm/tjfh_02.png" border="0" /></div>
					<div class="tjfh_xzck_title_mid">第三步</div>
					<div class="tjfh_xzck_title_right">选择增值服务</div>
					<!-- <div class="tjfh_xzck_title_xsycbt"><a id="showtext" onClick="showdiv('contentid','showtext')">查看详情>></a></div> -->
					<div id="clear"></div>
				</div>	
			    <div id="contentid" class="">
					<table border="0" cellpadding="0" cellspacing="0" class="tjfh_xzzzfw_table">
						<tr class="tjfh_xzzzfw_table_trbg">
							<td width="15%">
								<div class="tjfh_xzzzfw_table_title01">增值服务名称</div>
							</td>
							<td>
								<div class="tjfh_xzzzfw_table_title02">增值服务描述</div>
							</td>
						</tr>
						<tbody id="service_name">
						</tbody>
					</table>
			    </div>
                <div id="tjfh_xzzzfw_kong"></div>
            </div>
            
            <div id="tjfh_qrzf">
                <div class="tjfh_xzck_title">
					<div class="tjfh_xzck_title_left"><img src="themes/default/images/rbhm/tjfh_06.png" border="0" /></div>
					<div class="tjfh_xzck_title_mid">第四步</div>
					<div class="tjfh_xzck_title_right">确认支付方式和条款</div>
					<div id="clear"></div>
				</div>	
				<div id="confirmpayment"  >
				 <table id="cal_info" style="border: 1px solid rgb(204, 204, 204); background-color: rgb(238, 238, 255); display: table;    width: 100%; ">
					  <tbody>
						<tr>
						 <td valign="top" class="tb_left_detils">费用详细：</td>
						 <td>
							<ul id="costdetail">
							</ul>
						 </td>
					   </tr>
					   
					   <!-- <tr>
						 <td valign="top" class="tb_left_detils">支付选项：</td>
						 <td>
							<ul class="pay_options">
							  <li style="line-height:20px;"><a href="#this" onclick="changeClass();" id="points" class="pay_toggle">使用积分支付</a></li>
							 <li id="payoptions" style="display:none;">
								 <div class="option_item">
									<div class="option_setting" id="option_setting">
									 本次使用&nbsp;<input id="usePointstb" name="usePointstb" onkeyup="usepoints_Key();" size="5" type="text">&nbsp;个积分
										 <input id="confirmPointsbtn" type="button" onclick="usepoints_Click();" class="combtn2" value="使用">
										 <div class="option_desc">
											您有500个积分，本次最多可用2000个
									  	</div>
									 </div>
								  </div> 
								
									<div class="option_item">
										 <div style="display:none;" id="option_result">
										 本次使用<a id="thispaypoints"><?php echo $this->_tpl_vars['pay_points']; ?>
</a>点积分支付，折 <?php echo $this->_tpl_vars['currency_symbol']; ?>

											 <strong id="currency_val">0.00</strong><?php echo $this->_tpl_vars['currency_name']; ?>
。
											 <a id="points_btn" onclick="points_Click();" class="cancelbtn">取消使用</a>
										 </div>
									 </div>
								 </li>
							</ul>
						  </td>
					   </tr> -->
					   <strong id="currency_val" style="display:none">0.00</strong>
					   <tr>
						   <td colspan="2">
						   <table id="coupon_type" >
							<tr>
								<td class="tb_left_detils">使用优惠券：</td>
								<td>
									<input type="text" id="coupon" name="coupon"></input>
									<span style="color:red;">如果您有优惠券，请在此输入优惠券号码</span>
									<span id="coupon_desc"></span>
									<input id="confirmCouponbtn" type="button" onclick="compute_coupon();" class="combtn2" value="使用">
									&nbsp;&nbsp;<a id="coupon_btn" style="display:none;" onclick="coupon_Click();" class="cancelbtn">取消使用</a>
								</td>
							</tr>
						   </table>
						   </td>
					   </tr>
					   <tr>
						  <td valign="top" class="tb_left_detils">实际需支付：</td>
						  <td>
							 <ul>
								 <li style="line-height:20px;"><?php echo $this->_tpl_vars['currency_symbol']; ?>
<strong id="pay_moneny" name='pay_moneny'>0.00</strong><?php echo $this->_tpl_vars['currency_name']; ?>
</li>
							   <li style="line-height:20px;">您当前余额：<?php echo $this->_tpl_vars['currency_symbol']; ?>
<a id="current_balance">0.00</a><?php echo $this->_tpl_vars['currency_name']; ?>
</li>
								<li style="line-height:20px;">运费折扣:<span id="waybill-discount"><?php if ($this->_tpl_vars['users']['discount'] != 0): ?><?php echo smarty_function_math(array('equation' => 'x/10','x' => $this->_tpl_vars['users']['discount'],'format' => '%.2f'), $this);?>
<?php else: ?>10.00<?php endif; ?>折</span></li>

							   <input type="hidden" name="userMoney" id="userMoney" value="0.00">
							   <li id="coupon_type_1" style="color:red;line-height:20px;display: none">您的余额满足订单要求，请在确认无误后点击提交。</li>
							   <li style="color:red;line-height:20px;">费用提示：运费只是根据提供的数据预估，以本站实际称重打包后的数值为主。</li>
						  </ul>
						  </td>
					   </tr>
					 </tbody>
				</table>
				</div>
				<div id="invoice_wrap">
					<table border="0" cellpadding="0" cellspacing="0" >
						<tr>
							<td width="150" align="right" valign="top">是否需要发票：</td>

							<td width="500" align="left" valign="top">
								<label><input type="radio" value="0" name="order_is_invoice"
											  class="is_order_invoice" checked>不需要</label>
								<label><input type="radio" value="1" name="order_is_invoice"
											  class="is_order_invoice" >需要</label>

							</td>
						</tr>
						<tr id="order_invoice_info_wrap" style="display: none">
							<td></td>

							<td width="800" align="left" valign="top" style="line-height:40px; ">
								发票类型:	<label style="height:40px; vertical-align: middle"><input type="radio" value="个人" name="order_invoice_type" style=" vertical-align: middle"
													   class="order_invoice_type" checked>个人</label>
								<label><input type="radio" value="企业" name="order_invoice_type"
											  class="order_invoice_type" >企业</label><br>
								发票抬头: <input type="input" name="order_invoice_title"  id="invoice_title" value="">
								('个人' 请填写姓名, 企业请填写公司名称)<br>

								税&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号 : <input type="input" name="order_invoice_tax_no"  id="invoice_tax_no" value="" placeholder="税务识别码或者社会统一信用代码">(类型为'企业'时必填)<br>
								发票内容: <select name="order_invoice_content">
											<option value="国际运费">国际运费</option>
										  </select><br>
								发票邮寄地址: <input type="input" name="order_invoice_address"  id="invoice_address" value="" placeholder="请填写详情地址"><br>
							</td>
						</tr>
					</table>
				</div>
				<div id="tjfh_qrzf_neirong">
				  <table border="0" cellpadding="0" cellspacing="0" class="tjfh_qrzf_table">
					<tr>
						<td width="100px" align="right" valign="top">支付方式：</td>
						<td width="10px"></td>
						<td>
							<div id="tjfh_qrzf_table_zffs01">
								<input type="radio" name="payment" id="payment_manual" value="1" onclick="change_payment()"  /><label for="payment_manual">称重完成后 手动确认支付</label>
							</div>
							<div id="tjfh_qrzf_table_zffs02">
								<input type="radio" name="payment" id="payment_auto" value="2" onclick="change_payment()" checked="checked"/><label for="payment_auto">称重完成后 自动支付<?php if ($_SESSION['user_payment_type'] == "正常"): ?>(需要有足够的余额)<?php endif; ?></label>
							</div>
						</td>
					</tr>
					<tr>
						<td width="100px" align="right">支付账户：</td>
						<td width="10px"></td>
						<td>
							   <input type="radio" name="user_account" id="user_money" value="2" checked="checked"/><label for="user_money">人民币账户（<?php echo $this->_tpl_vars['current_balance']; ?>
）</label>
						   <!--   <span class="tjfh_qrzf_table_zfzhht"><input type="radio" name="user_account" id="user_jpymoney" value="1"/><label for="user_jpymoney">日元账户（0.00）</label></span>
							   <span class="tjfh_qrzf_table_zfzhht"><input type="radio" name="user_account" id="user_subsidiarymoney" value="3"/><label for="user_subsidiarymoney">副账户（0.00）</label></span>
						--></td>
					</tr>
					<tr>
							<td width="100px" align="right">同意条款：</td>
							<td width="10px"></td>
							<td>
								<input id="clause" class="checkbox" type="checkbox" checked="checked" /><label for="clause">我已阅读并同意本站相关服务协议条款。</label>
							</td>
					</tr>
					<tr>
						<td colspan="3">
							<span class="tjfh_qrzf_table_tui"></span>
							阅读《 铭东转运服务协议》<a name="agree"></a>
						</td>
					</tr>
					<tr>
							<td colspan="3">
								<span class="tjfh_qrzf_table_tui"></span>
								<div style="border:1px solid #ddd2c0; border-radius: 5px; font-size:16px;; padding: 10px">

	铭东转运 zhuanyun.com（以下简称“本公司”。）向用户提供中国到欧洲各国的转运服务（以下简称“本服务”。），并制定 “zhuanyun.com注册使用协议”（以下简称“本协议”）如下。<br>
	本公司可根据具体情况，另行制定个别规章，个别规章与本规约为一个整体。<br>
	因此，必须同意所有使用协议，方可使用本服务。<br>
	本协议与个别协议发生抵触时，优先遵循个别协议的规定。其他部分则同时适用本协议和个别协议的规定。


								</div>
							</td>
						  </tr>
					  <tr>
						<td colspan="3">
							<span class="tjfh_qrzf_table_tui"></span>
							<input type="submit" value="同意条款提交发货" class="tjfh_qrzf_table_submit" />
						</td>
					  </tr>
					</table>
                </div>
             </div>
			  <!-- <button type="submit" onclick="">提交订单</button> -->
			 <input type="hidden" name="tablecount" value="0" id="tablecount"/>
			 
			 <input type="hidden" name="pck_totalweights" value="0.00" id="pck_totalweights"/>
			 
			 <input type="hidden" name="pck_totallength" value="0.00" id="pck_totallength"/>
			 
			 <input type="hidden" name="pck_totalwidth" value="0.00" id="pck_totalwidth"/>
			 <input type="hidden" id="package_discount" value="<?php echo $this->_tpl_vars['users']['discount']; ?>
" />
			 <input type="hidden" name="pck_totalheight" value="0.00" id="pck_totalheight"/>
			 <input type="hidden" name="pck_insurancecost" value="0.00" id="pck_insurancecost"/>
			 <input type="hidden" name="pck_operatorcost" value="0.00" id="pck_operatorcost"/>
			 <input type="hidden" name="pck_tariffcost" value="0.00" id="pck_tariffcost"/>
			 <input type="hidden" name="pck_valueservicecost" value="0.00" id="pck_valueservicecost"/>
			 
			 <input type="hidden" name="pck_waybillcost" value="0.00" id="pck_waybillcost"/>
			  
			 <input type="hidden" name="discount_waybillcost" value="0.00" id="discount_waybillcost"/>


			 <input type="hidden" name="pck_warehousecost" value="0.00" id="pck_warehousecost"/>
			 <input type="hidden" name="pck_totalcost" value="0.00" id="pck_totalcost"/>
			 
			<input type="hidden" name="exchangerate" value="1" id="exchangerate"/>
			 
			 <input type="hidden" name="rate_points" id="rate_points" value="0.01" />
			 <input type="hidden" name="pay_points" id="pay_points" value="500"/>
			 <input type="hidden" name="max_integral" id="max_integral" value="2000"/>
			 <input type="hidden" name="pointspaymentcost" id="pointspaymentcost" value="0.00" />
			 
			 <input type="hidden" name="order_discount" id="order_discount" value="1.0000" />
			
			 <input type="hidden" name="isuse_coupon" value="0" id="isuse_coupon"/>
			 <input type="hidden" name="country_id" value="0" id="order_country_id"/>
			 <input type="hidden" name="country_name" value="0" id="order_country_name"/>
			 
	
			 <input type="hidden" name="shipment_basicPrice" value="0" id="shipment_basicPrice"/>
			 <input type="hidden" name="shipment_oilDiscount" value="0" id="shipment_oilDiscount"/>
			 <input type="hidden" name="shipment_oilcost" value="0" id="shipment_oilcost"/>
			 <input type="hidden" name="shipment_discount" value="0" id="shipment_discount"/>
			 
			 
			</form>
	   </div>
	 </div>
	 	<div id="clear"></div>
	</div>
    </div>
    <div id="hyzxcontent_kong"></div>
  
 
<div id="ptpp_bghui">
  <div id="ptpp">
	<div class="ptpp_dan">
		<div class="ptpp_dan_left"><img src="themes/default/images/rbhm/ptpp_01.png" border="0" /></div>
		<div class="ptpp_dan_right">
			<div class="ptpp_dan_right_title">迅捷的速度</div>
			<div class="ptpp_dan_right_txt">最快一小时内出库！邮政内部仓库，发货当日上飞机
		</div>
		</div>
		<div id="clear"></div>
	</div>
	<div class="ptpp_kong"></div>
	<div class="ptpp_dan">
		<div class="ptpp_dan_left"><img src="themes/default/images/rbhm/ptpp_02.png" border="0" /></div>
		<div class="ptpp_dan_right">
			<div class="ptpp_dan_right_title">周到的服务</div>
			<div class="ptpp_dan_right_txt">多客服渠道对应，包装按您备注所写，多种运输方式，丰富的增值服务满足您的个性化需求！ </div>
		</div>
		<div id="clear"></div>
	</div>
	<div class="ptpp_kong"></div>
	<div class="ptpp_dan">
		<div class="ptpp_dan_left"><img src="themes/default/images/rbhm/ptpp_03.png" border="0" /></div>
		<div class="ptpp_dan_right">
			<div class="ptpp_dan_right_title">实惠的价格</div>
			<div class="ptpp_dan_right_txt">保证日常运营的前提，提供最低廉的价格</div>
		</div>
		<div id="clear"></div>
	</div>
	<div class="ptpp_kong"></div>
	<div class="ptpp_dan">
		<div class="ptpp_dan_left"><img src="themes/default/images/rbhm/ptpp_04.png" border="0" /></div>
		<div class="ptpp_dan_right">
			<div class="ptpp_dan_right_title">安心的保障</div>
			<div class="ptpp_dan_right_txt">EMS20万以下免费保险，邮政铭东自有保险，理赔无需长久等待</div>
		</div>
		<div id="clear"></div>
	</div>
	<div id="clear"></div>
 </div>
</div>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer_user.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <script type="text/javascript" src="themes/default/js/logisticssystem/utils.js"></script>
  <script type="text/javascript" src="themes/default/js/logisticssystem/member_ordersubmit.js"></script>
  <script type="text/javascript" src="themes/default/js/logisticssystem/main.js"></script>
  <script type="text/javascript" src="themes/default/js/logisticssystem/baoxiang.js"></script>
  <script type="text/javascript" src="themes/default/js/logisticssystem/boxing.js"></script>
  <script type="text/javascript" src="themes/default/js/logisticssystem/taxrate.js"></script>
  <script type="text/javascript" src="themes/default/js/logisticssystem/service.js"></script>
  <script type="text/javascript" src="themes/default/js/logisticssystem/goods.js"></script>
  <script type="text/javascript" src="themes/default/js/logisticssystem/warehouse.js"></script>
  <script type="text/javascript" src="themes/default/js/logisticssystem/package.js"></script>
  <script type="text/javascript" src="themes/default/js/logisticssystem/price.js"></script>
  <script type="text/javascript" src="themes/default/js/logisticssystem/payment.js"></script>
  <script type="text/javascript" src="themes/default/js/logisticssystem/coupon.js"></script>
  <script type="text/javascript" src="themes/default/js/logisticssystem/points.js"></script>
  <script type="text/javascript" src="themes/default/js/logisticssystem/invoice.js"></script>
 </body>
 </html>