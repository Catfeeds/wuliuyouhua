<?php /* Smarty version 2.6.26, created on 2018-09-13 11:25:22
         compiled from article_news.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="header_line"></div>

<div id="huicontent_bg">
  <div id="huicontent">
     
     <div id="xzdwz">
		<?php echo $this->_tpl_vars['weizhi']; ?>
：<a href="index.php?act=index">首页</a> > <a href="index.php?act=list_about">关于我们</a>
        <!-- <?php echo $this->_tpl_vars['weizhi']; ?>
：<a href="http://www.jpgoodbuy.com/">首页</a> <code>&gt;</code> 关于我们 -->
     </div>
     
          
     <div id="hbjzdh">
		 <ul>
			 <li>
				 <div class="news_left_title">新闻中心</div>
			 </li>
			 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "news_left_menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		 </ul>
     </div>     
     <div id="hbjynr">
			
			<div id="gywmdnr">
				<div id="gywmdnr_redbt">
<?php echo $this->_tpl_vars['artics']['CntTitle']; ?>

					
				</div>
				<div id="gywmdnr_huibt">
					<?php echo $this->_tpl_vars['artics']['CntContent']; ?>

					</div>
					</div>
						</div>
     <div id="clear"></div>
  </div>
</div>

<div id="ptpp_bghui">
  <div id="ptpp">
	<div class="ptpp_dan">
		<div class="ptpp_dan_left"><img src="themes/default/images/rbhm/ptpp_01.png" border="0" /></div>
		<div class="ptpp_dan_right">
			<div class="ptpp_dan_right_title">迅捷的速度</div>
			<div class="ptpp_dan_right_txt">最快一小时内出库！邮政内部仓库，发货当日上飞机</div>
		</div>
		<div id="clear"></div>
	</div>
	<div class="ptpp_kong"></div>
	<div class="ptpp_dan">
		<div class="ptpp_dan_left"><img src="themes/default/images/rbhm/ptpp_02.png" border="0" /></div>
		<div class="ptpp_dan_right">
			<div class="ptpp_dan_right_title">周到的服务</div>
			<div class="ptpp_dan_right_txt">多客服渠道对应，包装按您备注所写，多种运输方式，丰富的增值服务满足您的个性化需求！</div>
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
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 
 
 </body>
 </html>