<!-- $Id: goods_info.htm 17126 2010-04-23 10:30:26Z zhangxingpeng $ -->
<?php echo $this->fetch('engrave_pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,selectzone.js,colorselector.js')); ?>
<script type="text/javascript" src="../js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../js/calendar/calendar.css" rel="stylesheet" type="text/css" />

<!-- start goods form -->
<div class="main-div">
      <form enctype="multipart/form-data" action="engrave_article_manage.php" method="post" name="theForm" onsubmit="return validate()">
        <!-- �������� -->
        <table id="tab_channel_basic-table" >
          <tr>
            <td class="label"><?php echo $this->_var['lang']['CntCategoryId']; ?></td>
            <td>
            <select name="CntCategoryId">
            	<?php echo $this->_var['channel_list']; ?>
            </select>
			</td>
          </tr>
          <tr>
            <td class="label">
            <?php echo $this->_var['lang']['CntTitle']; ?> 
            </td>
            <td>
              <input type="text" name="CntTitle" value="<?php echo $this->_var['article_info']['CntTitle']; ?>" size="50" />
            </td>
          </tr>
          <tr>
            <td class="label">
            <?php echo $this->_var['lang']['CntTitleImage']; ?> 
            </td>
            <td>
              <input name="CntTitleImage" type="file" size="40" />
            </td>
          </tr>
          <tr>
            <td class="label"><?php echo $this->_var['lang']['CntSubhead']; ?></td>
            <td>
              <input type="text" name="CntSubhead" value="<?php echo $this->_var['article_info']['CntSubhead']; ?>" size="50" />
            </td>
          </tr>
          <tr>
            <td class="label"><?php echo $this->_var['lang']['CntAttributes']; ?></td>
            <td>
	            <input type="radio" name="CntAttributes" value='0' <?php if ($this->_var['article_info']['CntAttributes'] == 0): ?> checked="true"<?php endif; ?>><?php echo $this->_var['lang']['CntAllowPost']; ?>
	            <input type="radio" name="CntAttributes" value='1' <?php if ($this->_var['article_info']['CntAttributes'] == 1): ?> checked="true"<?php endif; ?>><?php echo $this->_var['lang']['CntNotAllowPost']; ?>
            </td>
          </tr>
          <!-- <tr>
            <td class="label"><?php echo $this->_var['lang']['CntTitleImage']; ?></td>
            <td>
             <input type="text" name="CntTitleImage" value="" size="50" />
            </td>
          </tr> -->
          <tr>
            <td class="label"><?php echo $this->_var['lang']['CntMetaKey']; ?></td>
            <td>
            	 <input type="text" name="CntMetaKey" value="<?php echo $this->_var['article_info']['CntMetaKey']; ?>" size="50" />
			</td>
          </tr>
          <tr>
            <td class="label"><?php echo $this->_var['lang']['CntMetaDes']; ?></td>
            <td>
            	 <input type="text" name="CntMetaDes" value="<?php echo $this->_var['article_info']['CntMetaDes']; ?>" size="50" />
			</td>
          </tr>
          <tr>
            <td class="label">
            <?php echo $this->_var['lang']['CntExtLink']; ?></td>
            <td>
            	 <input type="text" name="CntExtLink" value="<?php echo $this->_var['article_info']['CntExtLink']; ?>" size="50" />
            </td>
          </tr>

          <tr>
            <td class="label"><?php echo $this->_var['lang']['CntContent']; ?></td>
            <td>
	            <textarea id="CntContent" name="CntContent" style="width:700px;height:150px;visibility:hidden;">
	          		<?php echo $this->_var['article_info']['CntContent']; ?>
	          	</textarea>
			</td>
          </tr>
          <tr>
            <td class="label">
			<?php echo $this->_var['lang']['CntBriefIntroduction']; ?></td>
            <td><input type="text" name="CntBriefIntroduction" value="<?php echo $this->_var['article_info']['CntBriefIntroduction']; ?>" size="50" />
            </td>
          </tr>
          <tr>
            <td class="label">
            <?php echo $this->_var['lang']['CntTag']; ?></td>
            <td><input type="text" name="CntTag" value="<?php echo $this->_var['article_info']['CntTag']; ?>" size="50" />
			</td>
          </tr>
          <tr>
            <td class="label">
				<?php echo $this->_var['lang']['CntAuthor']; ?>
			</td>
            <td>
	            <input type="text" name="CntAuthor" value="<?php echo $this->_var['article_info']['CntAuthor']; ?>" size="50" />
			</td>
          </tr>
          <tr>
            <td class="label">
				<?php echo $this->_var['lang']['CntAuthorEmail']; ?>
			</td>
            <td>
	            <input type="text" name="CntAuthorEmail" value="<?php echo $this->_var['article_info']['CntAuthorEmail']; ?>" size="50" />
			</td>
          </tr>
          <tr>
            <td class="label">
				<?php echo $this->_var['lang']['CntSourceWeb']; ?>
			</td>
            <td>
	            <input type="text" name="CntSourceWeb" value="<?php echo $this->_var['article_info']['CntSourceWeb']; ?>" size="50" />
			</td>
          </tr>
          <tr>
            <td class="label">
				<?php echo $this->_var['lang']['CntSourceUrl']; ?>
			</td>
            <td>
	            <input type="text" name="CntSourceUrl" value="<?php echo $this->_var['article_info']['CntSourceUrl']; ?>" size="50" />
			</td>
          </tr>
          <tr>
            <td class="label">
				<?php echo $this->_var['lang']['CntTime']; ?>
			</td>
            <td>
	            <input type="text" name="CntTime" id="CntTime" value="<?php echo $this->_var['article_info']['CntTime']; ?>" size="30" />
	            <input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('CntTime', '%Y-%m-%d', false, false, 'selbtn1');" value="<?php echo $this->_var['lang']['btn_select']; ?>" class="button"/>
			</td>
          </tr>
          <tr>
            <td class="label">
				<?php echo $this->_var['lang']['CntAuditingStatus']; ?>
			</td>
            <td>
	            <input type="radio" name="CntAuditingStatus" value='0' <?php if ($this->_var['article_info']['CntAuditingStatus'] == 0): ?> checked="true"<?php endif; ?>><?php echo $this->_var['lang']['Content']['Pendingtrial']; ?>
	            <input type="radio" name="CntAuditingStatus" value='1' <?php if ($this->_var['article_info']['CntAuditingStatus'] == 1): ?> checked="true"<?php endif; ?>><?php echo $this->_var['lang']['Content']['Prime']; ?>
	            <input type="radio" name="CntAuditingStatus" value='2' <?php if ($this->_var['article_info']['CntAuditingStatus'] == 2): ?> checked="true"<?php endif; ?>><?php echo $this->_var['lang']['Content']['LastInstance']; ?>
			</td>
          </tr>
        </table>
        
        <div class="button-div">
          <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
          <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
        </div>
        <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
        <input type="hidden" name="CntId" value="<?php echo $this->_var['article_info']['CntId']; ?>"/>
        <input type="hidden" name="oldCntTitleImage" value="<?php echo $this->_var['article_info']['CntTitleImage']; ?>"/>
      </form>
</div>
<!-- end goods form -->
<?php echo $this->smarty_insert_scripts(array('files'=>'validator.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/editor/kindeditor.js,../js/editor/lang/zh_CN.js,../js/editor/plugins/code/prettify.js')); ?>

<script language="JavaScript">

KindEditor.ready(function(K) {
	var editor1 = K.create('textarea[id="CntContent"]', {
		cssPath : '../plugins/code/prettify.css',
		allowFileManager : true,
		afterCreate : function() {
	        this.sync('#CntContent');
	       },
       	afterBlur:function(){
           this.sync('#CntContent');
        } 
	});
});


//��ʼ��
if(document.all) { 
	window.attachEvent('onload', load);
}
else { 
	window.addEventListener('load', load);
}

/**
 * ��ʼ������
 */
function load()
{
	document.forms['theForm'].elements['CntTitle'].focus();
}
/**
 * ����֤
 */
function validate()
{
  validator = new Validator("theForm");
  validator.required("CntTitle", CntTitle_notnull);
  validator.required("CntTime", CntTime_notnull);
  validator.isDate("CntTime", CntTime_typeerror);

  return validator.passed();
}

</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
