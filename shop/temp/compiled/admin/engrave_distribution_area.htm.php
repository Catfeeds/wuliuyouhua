
<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<form method="POST" action="engrave_distribution_area.php?act=list" name="listForm">
<!-- start admin_logs list -->
<div class="list-div" id="listDiv">
<?php endif; ?>

<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
      <a href="javascript:listTable.sort('Id'); "><?php echo $this->_var['lang']['area_Id']; ?></a><?php echo $this->_var['sort_Id']; ?>
    </th>
    <th><a href="javascript:listTable.sort('Name'); "><?php echo $this->_var['lang']['area_Name']; ?></a><?php echo $this->_var['sort_Name']; ?></th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  </tr>
  <?php $_from = $this->_var['distribution_area_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'distributionareas');if (count($_from)):
    foreach ($_from AS $this->_var['distributionareas']):
?>
  <tr>
    <td style="width:150px;">
    	<input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['distributionareas']['Id']; ?>" /><?php echo $this->_var['distributionareas']['Id']; ?>
    </td>
    <td>
    	<a href="engrave_distribution_area.php?act=list&distribution_area_parentid=<?php echo $this->_var['distributionareas']['Id']; ?>">
    		<?php echo $this->_var['distributionareas']['Name']; ?>
    	</a>
    </td>
    <td align="center" style="width:150px; padding:0px; margin:0px">
      <a href="engrave_distribution_area.php?act=edit&id=<?php echo $this->_var['distributionareas']['Id']; ?>&parentId=<?php echo $this->_var['distributionareas']['ParentId']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['distributionareas']['Id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
    </td>
  </tr>
  <?php endforeach; else: ?>
  <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>

<!-- end distributionareas list -->

<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tr>
    <td align="right" nowrap="true">
    <?php echo $this->fetch('page.htm'); ?>
    </td>
  </tr>
</table>
<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pagefooter.htm'); ?>
</div>
<!-- end ad_position list -->

<script type="text/javascript" defer="defer" language="JavaScript">
  listTable.filter['area_parentid'] = <?php echo $this->_var['area_parentid']; ?>;
  listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
  listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<?php endif; ?>
