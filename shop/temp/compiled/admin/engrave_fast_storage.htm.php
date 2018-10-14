<!-- $Id: goods_info.htm 17126 2010-04-23 10:30:26Z zhangxingpeng $ -->
<?php echo $this->fetch('engrave_pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,selectzone.js,colorselector.js')); ?>
<?php if ($this->_var['warning']): ?>
<ul style="padding:0; margin: 0; list-style-type:none; color: #CC0000;">
  <li style="border: 1px solid #CC0000; background: #FFFFCC; padding: 10px; margin-bottom: 5px;" ><?php echo $this->_var['warning']; ?></li>
</ul>
<?php endif; ?>
<div class="main-div">
      <form enctype="multipart/form-data" onkeydown="if(event.keyCode==13){return false;}" action="engrave_fast_storage.php" method="post" name="theForm" onsubmit="return valivate()">
        <table cellspacing="1" cellpadding="3" width="100%">
          <tr>
            <td class="label"><?php echo $this->_var['lang']['ExpressNumber']; ?></td>
            <td>
			   <input type="text" onblur="FExpressNum(13)" onkeydown="FExpressNum(event.keyCode||event.which);" name="ExpressNumber" id="ExpressNumber" size="20" />
			   &nbsp;<span id="enter" style="color:red;"><?php echo $this->_var['lang']['Enter']; ?></span>
			   &nbsp;<span id="messagetip" style="color:red;display:none;"><?php echo $this->_var['lang']['UserId']; ?><label id="userid"></label><?php echo $this->_var['lang']['OrderTime']; ?><label id="ordertime"></label><?php echo $this->_var['lang']['Status']; ?><label id="status"></label></span>
				<span id="noforecast" style="color:red;display:none;font-size:20px;"></span>
			</td>
          </tr>
          <!-- 
          <tr>
            <td class="label"><?php echo $this->_var['lang']['CustomerNum']; ?></td>
            <td>
              <input type="text"  name="CustomerNum" id="CustomerNum" size="20" />
            </td>
          </tr> -->
          <tr>
            <td class="label"><?php echo $this->_var['lang']['StorageCode']; ?> </td>
            <td>
              <input type="text"  name="StorageCode" id="StorageCode" size="20" />
            </td>
          </tr>
          <tr>
            <td class="label"><?php echo $this->_var['lang']['Weight']; ?></td>
            <td>
              <input type="text" name="Weight" id="Weight" size="5" />
			  &nbsp;<span id="weightunit" style="display:none;"><label id="WeightUnit"></label></span>
            </td>
          </tr>
		  <tr>
            <td class="label"><?php echo $this->_var['lang']['WareHouse']; ?></td>
            <td>
            	<select name="WareHouse" id="WareHouse" ><option value="0"><?php echo $this->_var['lang']['select_please']; ?><?php echo $this->html_options(array('options'=>$this->_var['warehouse_list'])); ?></select>
				&nbsp;<span><?php echo $this->_var['lang']['InventoryLocation']; ?></span>
				<input type="text" id="InventoryLocation" name="InventoryLocation" size="10" />
			</td>
          </tr>
          <tr>
            <td class="label"><?php echo $this->_var['lang']['packSize']; ?></td>
            <td>
            	 <input type="text" name="SizeLength" id="SizeLength" size="5" />
				 &nbsp;x&nbsp;
				 <input type="text" name="SizeWidth" id="SizeWidth" size="5" />
				 &nbsp;x&nbsp;
				 <input type="text" name="SizeHeight" id="SizeHeight" size="5" />
				 &nbsp;<span id="SizeUnit" style="display:none;">(<label id = "sizeunit"></label>)</span>
				 &nbsp;<span style="color:red"><?php echo $this->_var['lang']['sizetip']; ?></span>
			</td>
          </tr>
		  <tr>
            <td class="label"></td>
            <td>
			   &nbsp;<input type="checkbox" value="1" name="IsTrouble" id="IsTrouble" /><?php echo $this->_var['lang']['pckIsTrouble']; ?>		   
			</td>
          </tr>	  		  
		  <tr>
            <td class="label"><?php echo $this->_var['lang']['packAdminRemark']; ?></td>
            <td>
              <textarea name="AdminRemark" id="AdminRemark" cols="40" rows="4"></textarea>
            </td>
          </tr>
        </table>
        
        <div class="button-div">
          <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
          <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
        </div>
        <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
		<input type="hidden" name="hidPckId" id="hidPckId" />
		<!-- 鏄惁宸插叆搴� -->
		<input type="hidden" name="package_status" id="package_status" />
                <!-- 鏄惁鏄揣鍒板嵆鍙�-->
		<input type="hidden" name="isarrivaldelivery" id="isarrivaldelivery" />
      </form>
</div>
<!-- end goods form -->
<?php echo $this->smarty_insert_scripts(array('files'=>'validator.js')); ?>
<script language="JavaScript">
/**
 * 琛ㄥ崟楠岃瘉
 */
function valivate()
{
  validator = new Validator("theForm");
  validator.required("ExpressNumber",  package_number_notnull);//杩借釜鍗曞彿涓嶈兘涓虹┖
  validator.required("StorageCode", package_storagecode_notnull);//鍏ュ簱鐮�
  validator.selectRequired("WareHouse", warehouse_select);//璇烽€夋嫨浠撳簱
  validator.required("InventoryLocation", warehouse_notnull);//搴撳瓨浣嶇疆涓嶈兘涓虹┖
  return validator.passed();
}
   function gObj(obj)
   {
	  var theObj;
	  if (document.getElementById)
	  {
	    if (typeof obj=="string") {
	      return document.getElementById(obj);
	    } else {
	      return obj.style;
	    }
	  }
	  return null;
	}
	function FExpressNum(e)
	{
		var ExpressNum = document.getElementById("ExpressNumber").value;
		if(e == 13 || e == 32)
		{
			Ajax.call('engrave_fast_storage.php?act=getuserid',"expressnumber="+ExpressNum,act_caluserid,"POST","TEXT",true,true); //閼惧嘲褰囬悽銊﹀煕ID
	        Ajax.call('engrave_fast_storage.php?act=getordertime',"expressnumber="+ExpressNum,act_ordertime,"POST","TEXT",true,true); //閼惧嘲褰囨稉瀣礋閺冨爼妫�
			Ajax.call('engrave_fast_storage.php?act=getstatus',"expressnumber="+ExpressNum,act_status,"POST","TEXT",true,true);    //閼惧嘲褰囬悩鑸碉拷
	        //瀹㈡埛缂栫爜
			//Ajax.call('engrave_fast_storage.php?act=getcustomnum',"expressnumber="+ExpressNum,act_customnum,"POST","TEXT",true,true);
	        Ajax.call('engrave_fast_storage.php?act=getstoragecode',"expressnumber="+ExpressNum,act_storagecode,"POST","TEXT",true,true); //閼惧嘲褰囬崗銉ョ氨閻拷
			Ajax.call('engrave_fast_storage.php?act=getweight',"expressnumber="+ExpressNum,act_weight,"POST","TEXT",true,true); //闁插秹鍣�
	        Ajax.call('engrave_fast_storage.php?act=getweightunit',"expressnumber="+ExpressNum,act_weightunit,"POST","TEXT",true,true); //闁插秹鍣洪崡鏇氱秴
			Ajax.call('engrave_fast_storage.php?act=getwarehouse',"expressnumber="+ExpressNum,act_warehouse,"POST","TEXT",true,true); //娴犳挸绨�
	        Ajax.call('engrave_fast_storage.php?act=getinvlocation',"expressnumber="+ExpressNum,act_invlocation,"POST","TEXT",true,true); //娴犳挸绨辨担宥囩枂
	        Ajax.call('engrave_fast_storage.php?act=getsizelength',"expressnumber="+ExpressNum,act_sizelength,"POST","TEXT",true,true); //闂€锟�
			Ajax.call('engrave_fast_storage.php?act=getsizewidth',"expressnumber="+ExpressNum,act_sizewidth,"POST","TEXT",true,true); //鐎癸拷
	        Ajax.call('engrave_fast_storage.php?act=getsizeheight',"expressnumber="+ExpressNum,act_sizeheight,"POST","TEXT",true,true); //妤傦拷
			Ajax.call('engrave_fast_storage.php?act=getsizeunit',"expressnumber="+ExpressNum,act_sizeunit,"POST","TEXT",true,true); //鐏忓搫顕崡鏇氱秴
	        Ajax.call('engrave_fast_storage.php?act=getistrouble',"expressnumber="+ExpressNum,act_trouble,"POST","TEXT",true,true); //閺勵垰鎯侀梻顕€顣芥禒锟�
	        Ajax.call('engrave_fast_storage.php?act=getadminremark',"expressnumber="+ExpressNum,act_adminremark,"POST","TEXT",true,true); //缁狅紕鎮婇崨妯侯槵濞夛拷
	        Ajax.call('engrave_fast_storage.php?act=getpckid',"expressnumber="+ExpressNum,act_pckid,"POST","TEXT",true,true); //閸栧懓锛欓惃鍒琩
	        Ajax.call('engrave_fast_storage.php?act=getisarrivaldelivery',"expressnumber="+ExpressNum,act_isarrivaldelivery,"POST","TEXT",true,true); //璐у埌鍗冲彂
		}
	}
	function act_pckid(result)
	{
	   document.getElementById("hidPckId").value = result;
	}
        function act_isarrivaldelivery(result)
        {
	   document.getElementById("isarrivaldelivery").value = result;
        }
	function act_caluserid(result)
	{
		if(result!="")
		{
			gObj("messagetip").style.display = "";
			document.getElementById("userid").innerHTML = result;
		}
		else
		{
			gObj("messagetip").style.display = "none";
		}
	}
    function act_ordertime(result)
	{
	    if(result!="")
		{
			gObj("messagetip").style.display = "";
			document.getElementById("ordertime").innerHTML = result;
		}
		else
		{
			gObj("messagetip").style.display = "none";
		}
	}
	
    function act_status(result)
	{
	   if(result!="")
		{
			gObj("messagetip").style.display = "";
			if(result == 0)
			{
			   document.getElementById("status").innerHTML = package_instorage;
			}
			else if(result >= 1)
			{
				document.getElementById("status").innerHTML = package_noinstorage;
			}
			document.getElementById("package_status").value = result;
			gObj("noforecast").style.display = "none";
		}
		else
		{
			gObj("noforecast").style.display = "";
			document.getElementById("noforecast").innerHTML = package_noforecast;
			gObj("messagetip").style.display = "none";
		}
	}
	
    function act_customnum(result)
	{
    	if(result!= ''){
			document.getElementById("CustomerNum").value = result;
    	}
	}
	function act_storagecode(result)
	{
		document.getElementById("StorageCode").value = result;
	}
    function act_weight(result)
	{
		document.getElementById("Weight").value = result;
	}
	
	function act_weightunit(result)
	{
		if(result!="")
		{
			gObj("weightunit").style.display = "";
			document.getElementById("WeightUnit").innerHTML = result;
		}
		else
		{
			gObj("weightunit").style.display = "none";
		}
	}
	
    function act_warehouse(result)
	{
		if(result!='')
		{
			document.getElementById("WareHouse").value = result;
		}
	}
	
	function act_invlocation(result)
	{
		document.getElementById("InventoryLocation").value = result;
	}
	
	function act_sizelength(result)
	{
		document.getElementById("SizeLength").value = result;
	}
	
    function act_sizewidth(result)
	{
		document.getElementById("SizeWidth").value = result;
	}
	
	function act_sizeheight(result)
	{
		document.getElementById("SizeHeight").value = result;
	}
	
	function act_sizeunit(result)
	{
		if(result!="")
		{
			gObj("SizeUnit").style.display = "";
			document.getElementById("sizeunit").innerHTML = result;
		}
		else
		{
			gObj("SizeUnit").style.display = "none";
		}
	}
	
	function act_trouble(result)
	{
		if(result=="1")
		{
		   document.getElementById("IsTrouble").checked = "checked";
		}
	}
	
	function act_adminremark(result)
	{
		document.getElementById("AdminRemark").value = result;
	}
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>