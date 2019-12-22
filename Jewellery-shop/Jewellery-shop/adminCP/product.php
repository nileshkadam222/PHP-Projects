
<table width="100%"  border="0" cellspacing="1" cellpadding="2">
         <tr>
		 <td width="150" class="smalltext" nowrap="nowrap" onMouseOver="this.className='hlrow';" onMouseOut="this.className='smalltext';" style="CURSOR: pointer;" id="itemoption0" onClick="javascript:window.location.href='index.php?_Pt=Sub Category&_Pa=Insert';" >
         <img src="../images/icon_insertfile.gif" width="16" height="16" align="absmiddle" />&nbsp;Insert Product</td>
         <td valign="middle"><div class="linediv"><img src="../images/space.gif" height="1" width="1" /></div></td>
		 </tr>
</table><br/>

   <table border="0">
    	<tr><td width="10">&nbsp;</td>
    	<td width="100%">
        
        
<table cellpadding="0" cellspacing="1" border="0" width="400" class="tborder" >
  <tr>
    <td class="tcat" height="22" colspan="2" ><strong>&nbsp;&nbsp;&nbsp; Product</strong></td>
  </tr>
  <? if(($_REQUEST['frmsub_cat']==2 or $_REQUEST['frmsub_cat']==1) and ($msg==1 or $msg==2))   { ?>
  <tr class="infomsg" height="22">
    <td colspan="2" class="smalltext"><img src="../images/icon_info.gif" width="16" height="16" align="absmiddle" />&nbsp;&nbsp;<strong><font color="#999999">Successfully
      <? if($msg==1) {echo "Update"; } else { echo "Insert"; } ?>
    </font></strong></td>
  </tr>
  <? } ?>
  <? if(($_REQUEST['frmsub_cat']==2 or $_REQUEST['frmsub_cat']==1) and ($msg==3 or $msg==4))   { ?>
  <tr class="errormsg" height="22">
    <td colspan="2" class="smalltext"><img src="../images/icon_error.gif" width="16" height="16" align="absmiddle" />&nbsp;&nbsp;<strong><font color="#999999">Error In
      <? if($msg==3) {echo "Update"; } else { echo "Insert"; } ?>
    </font></strong></td>
  </tr>
  <? }  ?>
  <tr class="row1">
    <td width="130">&nbsp;Name</td>
    <td><input name="txtPagename" type="text" id="txtPagename" size="30" maxlength="30" /></td>
  </tr>
  <tr class="row2">
    <td>&nbsp;Category</td>
    <td><select name="txtcat" style="width:150px; height:22px" onchange="showSubcategory('getsubcat.php',this.value)">
      <option value="0" >Select Option</option>
      <?php 
				   $Sqlcatid="select * from category";
				    $SelectCat=mysql_query($Sqlcatid);
		 			 while($rowCat=mysql_fetch_array($SelectCat))
					 {
						 echo "<option value='".$rowCat['id']."' ";
						if($_REQUEST['_Pa']=="Edit" && $_REQUEST['pid']==$rowCat['id'])
						{
							echo "selected='selected' ";
						}
						 echo ">".$rowCat['cate_name']."</option>>";
					 }
				  ?>
    </select></td>
  </tr>
  <tr class="row1">
    <td>&nbsp;Sub Category</td>
    <td valign="middle" height="22px"><div id="txtHint"><b>Select Category First.</b></div>
    </td>
  </tr>
  <tr class="row2">
    <td>&nbsp;Image</td>
    <td><input type="file"  name="usefile"/></td>
  </tr>
  <tr class="row1">
    <td>&nbsp;Price</td>
    <td><input type="text" name="txtprice"  /></td>
  </tr>
  <tr class="row2">
    <td>&nbsp;Description</td>
    <td><input type="text" name="txtdesc" size="34"  /></td>
  </tr>
  <tr>
    <td colspan="2" class="row1" align="center" height="30"><? if($_REQUEST['_Pa']=="Edit") { ?>
      <input name="btnSubmitUpdate" type="button" value="Update" class="yellowbutton" onclick="return UpdateWeb()" id="btnSubmitUpdate" />
      <? } else {?>
      <input name="btnSubmitInsert" type="button" value="Insert" class="yellowbutton" onclick="return InsertWeb()" id="btnSubmitUpdate" />
      <? } ?></td>
  </tr>
</table>
</td></tr></table>