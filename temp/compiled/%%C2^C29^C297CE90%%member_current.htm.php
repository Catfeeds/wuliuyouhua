<?php /* Smarty version 2.6.26, created on 2018-07-08 15:24:25
         compiled from member_current.htm */ ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header_user.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="themes/default/js/member/current.js"></script>
 <div class="conter">
	 <div class="member">
	   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "member_menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	   <div class="conter_right">
	       <div class="member_sub">
				<div class="cr_bot">
	    	  	    <h2>订单管理<span>订单列表</span></h2>

					<div id="hyzx_dhyb_neirong">
						<table border="0" cellpadding="0" cellspacing="0" class="hyzx_dhyb_table">
							<tr>
								<td width="100px" align="right">运单编号：</td>
								<td width="180px"><input id="orderno" type="text" class="hyzx_dhyb_table_input"/></td><td width="250px">运单状态：
									<select id="orderstatus" class="hyzx_dhyb_table_select">
										<option value='0'>所有订单</option>
										<option value='1'>未配货</option>
										<option value='2'>已配货</option>
										<option value='3'>处理中</option>
										<option value='4'>未付款</option>
										<option value='5'>待发货</option>
										<option value='6'>已发货</option>
										<option value='7'>已完成</option>
										<option value='8'>已关闭</option>
									</select></td>
								<td width="260px" align="left">收件人：	<input id="consigname" type="text" class="hyzx_dhyb_table_input"/></td>
								<td>
								<button class="hyzx_dhyb_table_button" id="btnsearch" type="submit" onclick="search()">搜索</button>
								</td>
							</tr>
						</table>
						<div id="hyzx_dhyb_kong"></div>
						<div class="hyzx_dhyb_list">
							<ul class="checked">
								<li id="orderstatus0" class="current"><a href="#">所有订单</a></li>
								<li id="orderstatus1" ><a href="#">未配货</a></li>
								<li id="orderstatus2" ><a href="#">已配货</a></li>
								<li id="orderstatus3" ><a href="#">处理中</a></li>
								<li id="orderstatus4" ><a href="#">未付款</a></li>
								<li id="orderstatus5" ><a href="#">待发货</a></li>
								<li id="orderstatus6" ><a href="#">已发货</a></li>
								<li id="orderstatus7" ><a href="#">已完成</a></li>
								<li id="orderstatus8" ><a href="#">已关闭</a></li>
							</ul>
							<div id="hyzx_dhyb_kong"></div>
							<div id="contents">
								<table id="currenttable-1" class=" stocktable">
									<tr>
										<th><input type="checkbox" /></th>
										<th>运单编号</th>
										<th>运单号</th>
										<th>入库总重量</th>
										<th>扣款重量</th>
										<th>提交时间</th>
										<th>状态</th>
										<th>可执行操作</th>
									</tr>
								</table>
								<table id="currenttable0" class="hide stocktable">
									<tr>
										<th><input type="checkbox" /></th>
										<th>运单编号</th>
										<th>运单号</th>
										<th>入库总重量</th>
										<th>扣款重量</th>
										<th>提交时间</th>
										<th>状态</th>
										<th>可执行操作</th>
									</tr>
								</table>
								<table id="currenttable1" class="hide stocktable">
									<tr>
										<th><input type="checkbox" /></th>
										<th>运单编号</th>
										<th>运单号</th>
										<th>入库总重量</th>
										<th>扣款重量</th>
										<th>提交时间</th>
										<th>状态</th>
										<th>可执行操作</th>
									</tr>
								</table>
								<table id="currenttable2" class="hide stocktable">
									<tr>
										<th><input type="checkbox" /></th>
										<th>运单编号</th>
										<th>运单号</th>
										<th>入库总重量</th>
										<th>扣款重量</th>
										<th>提交时间</th>
										<th>状态</th>
										<th>可执行操作</th>
									</tr>
								</table>
								<table id="currenttable3" class="hide stocktable">
									<tr>
										<th><input type="checkbox" /></th>
										<th>运单编号</th>
										<th>运单号</th>
										<th>入库总重量</th>
										<th>扣款重量</th>
										<th>提交时间</th>
										<th>状态</th>
										<th>可执行操作</th>
									</tr>
								</table>
								<table id="currenttable4" class="hide stocktable">
									<tr>
										<th><input type="checkbox" /></th>
										<th>运单编号</th>
										<th>运单号</th>
										<th>入库总重量</th>
										<th>扣款重量</th>
										<th>提交时间</th>
										<th>状态</th>
										<th>可执行操作</th>
									</tr>
								</table>
								<table id="currenttable5" class="hide stocktable">
									<tr>
										<th><input type="checkbox" /></th>
										<th>运单编号</th>
										<th>运单号</th>
										<th>入库总重量</th>
										<th>扣款重量</th>
										<th>提交时间</th>
										<th>状态</th>
										<th>可执行操作</th>
									</tr>
								</table>
								<table id="currenttable6" class="hide stocktable">
									<tr>
										<th><input type="checkbox" /></th>
										<th>运单编号</th>
										<th>运单号</th>
										<th>入库总重量</th>
										<th>扣款重量</th>
										<th>提交时间</th>
										<th>状态</th>
										<th>可执行操作</th>
									</tr>
								</table>
								<table id="currenttable7" class="hide stocktable">
									<tr>
										<th><input type="checkbox" /></th>
										<th>运单编号</th>
										<th>运单号</th>
										<th>入库总重量</th>
										<th>扣款重量</th>
										<th>提交时间</th>
										<th>状态</th>
										<th>可执行操作</th>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<input type="hidden" name="type" id="type" value="-1" />
					<div class="clear"></div>
					<div id='pagecount' class='class_paging'></div>
					<div class="clear"></div>


	    	  	</div>
			</div> 
	   </div>  
     <div class="clear"></div>
   </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer_user.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 </body>
 </html>