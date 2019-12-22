<script language="javascript" type="text/javascript">
function UpdateWeb()
{	
	var falg=0;
	if(document.webmenu.txtPagename.value=="")
	{
		confirm("Enter Category Name");
		falg=1;
	}
	if(falg==0)
	{
		document.webmenu.frmweb_mode.value=2;
		document.webmenu.submit();
	}
}
function InsertWeb()
{	
	var falg=0;
	if(document.webmenu.txtPagename.value=="")
	{
		confirm("Enter Category Name");
		falg=1;
	}
	if(falg==0)
	{
		document.webmenu.frmweb_mode.value=1;
		document.webmenu.submit();
	}
}

</script>
         <table width="100%"  border="0" cellspacing="1" cellpadding="2">
         <tr>
		 <td width="150" class="smalltext" nowrap="nowrap" onMouseOver="this.className='hlrow';" onMouseOut="this.className='smalltext';" style="CURSOR: pointer;" id="itemoption0" onClick="javascript:window.location.href='index.php?_Pt=Category&_Pa=Insert';" >
         <img src="../images/icon_insertfile.gif" width="16" height="16" align="absmiddle" />&nbsp;Insert Category</td>
         <td valign="middle"><div class="linediv"><img src="../images/space.gif" height="1" width="1" /></div></td>
		 </tr>
		 </table><p></p>
    	
        
        <table border="0">
    	<tr><td width="10">&nbsp;</td>
    	<td width="100%">
        
	     <? if($_REQUEST['_Pa']=="Delete_cat" and $msg==5) { ?>
           <table width="100%">
		   <tr class="infomsg" height="22">
           <td colspan="2" class="smalltext"><img src="../images/icon_info.gif" width="16" height="16" align="absmiddle" />&nbsp;&nbsp;<strong><font color="#999999">Successfully Delete Record</font></strong></td>
           </tr>
 		   </table><br/>
           <? } ?>
         <? if($_REQUEST['_Pa'] != "" and $_REQUEST['_Pa'] !="Delete_cat") {  ?>
         <form name="webmenu" method="POST">
           <input type="hidden" name="frmweb_mode" value="" />
           <? if($_REQUEST['_Pa']=="Edit") { 
		   $updatesql="Select * from category where id=".$_REQUEST['id'];
		   $updateweb=mysql_query($updatesql);
		   $rowupdate=mysql_fetch_array($updateweb); } ?>
		   
           <table cellpadding="0" cellspacing="0" border="0" width="350" class="tborder" >
           <tr>
           	<td class="tcat" height="22" colspan="2" > <strong>&nbsp;&nbsp;&nbsp; Category    </strong></td>
           </tr>
           <? if(($_REQUEST['frmweb_mode']==2 or $_REQUEST['frmweb_mode']==1) and ($msg==1 or $msg==2))   { ?>
           <tr class="infomsg" height="22">
           <td colspan="2" class="smalltext"><img src="../images/icon_info.gif" width="16" height="16" align="absmiddle" />&nbsp;&nbsp;<strong><font color="#999999">Successfully <? if($msg==1) {echo "Update"; } else { echo "Insert"; } ?></font></strong></td>
           </tr>
		  <? } ?>
         <? if(($_REQUEST['frmweb_mode']==2 or $_REQUEST['frmweb_mode']==1) and ($msg==3 or $msg==4))   { ?>
           <tr class="errormsg" height="22">
           <td colspan="2" class="smalltext"><img src="../images/icon_error.gif" width="16" height="16" align="absmiddle" />&nbsp;&nbsp;<strong><font color="#999999">Error In <? if($msg==3) {echo "Update"; } else { echo "Insert"; } ?></font></strong></td>
           </tr>
		    <? }  ?>
          
           <tr class="row2">
           		<td width="130">&nbsp;Category Name</td>
                <td><input name="txtPagename" type="text" id="txtPagename" value="<? if($_REQUEST['_Pa']=="Edit") { echo $rowupdate['cate_name']; } ?>" size="30" maxlength="30" /></td>
           </tr>
           <tr>
           	<td colspan="2" class="row1" align="center" height="30">
            <? if($_REQUEST['_Pa']=="Edit") { ?>
            <input name="btnSubmitUpdate" type="button" value="Update" class="yellowbutton" onclick="return UpdateWeb()" id="btnSubmitUpdate" /> <? } else {?>
            <input name="btnSubmitInsert" type="button" value="Insert" class="yellowbutton" onclick="return InsertWeb()" id="btnSubmitUpdate" />
            <? } ?>
            </td>
           </tr>
           </table>
           </form>
         <br/>&nbsp;
          <table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
          <td width="16"><a href="index.php?_Pt=Category" title="Back"><img src="../images/icon_back.gif" border="0" /></a></td>
          <td><span class="smalltext"><a href="index.php?_Pt=Category" title="Back">&nbsp;Back</a></span></td>
          </tr>
          </table>
         <? } ?>
         <? if($_REQUEST['_Pa'] == "" or $_REQUEST['_Pa'] =="Delete_cat") {  ?>
         <table cellpadding="0" cellspacing="0" border="0" class="tborder" style="float: left; position: relative;">
         <tbody>
         <tr>
         <td class="contenttableborder" colspan="2">
            		<table border="0" cellpadding="3" cellspacing="1">
                    
                    <tr>
                    <td class="tabletitlerow" width="39" align="center" nowrap="nowrap">&nbsp;Id&nbsp;</td>
                    <td class="tabletitlerow" align="" nowrap="nowrap">&nbsp;Category Name&nbsp;</td>
                    <td class="tabletitlerow" width="150" align="center" nowrap="nowrap">&nbsp;Options</td>
                   
                    </tr>
					<?  $sqlweb="select * from category order by id";
					 $resultweb=mysql_query($sqlweb);
					if(mysql_num_rows($resultweb) > 0)
					{
						$i=0;
						while($row_web=mysql_fetch_array($resultweb))
	 					{$i=$i+1;
						if($i%2==0) { ?>
					  <tr id="trid1" class="row2" onmouseover="showHighlight(this);" onmouseout="clearHighlight(this, 'row2');">
                       <? } else {?>  
                         <tr id="trid1" class="row2" onmouseover="showHighlight(this);" onmouseout="clearHighlight(this, 'row2');">
                          <? } ?>
                      <td colspan="" width="39" align="center" valign=""><?=$row_web['id'];?></td>
                      <td colspan="" width="219" align="" valign=""><?=$row_web['cate_name'];?></td>
                      <td colspan="" width="150" align="center" valign="">
                        <a href="index.php?_Pt=Category&_Pa=Edit&id=<?=$row_web['id'];?>"> <img src="../images/icon_edit.gif" border="0" />&nbsp;Edit&nbsp;&nbsp;&nbsp;&nbsp;</a>
                      <a href="index.php?_Pt=Category&_Pa=Delete_cat&id=<?=$row_web['id'];?>" onClick="return delete_web()"><img src="../images/icon_delete.gif" border="0" />&nbsp;Delete&nbsp;</a> </td>
                        
                      </tr>
                    <? } } ?>
                    </table>
         </td>
         </tr>
         </tbody>
         </table>
		<? } ?>
         </td>
         </tr> 
        </table>   
        
        
                          