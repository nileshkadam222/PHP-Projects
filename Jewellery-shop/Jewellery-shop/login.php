<script type="text/javascript"  language="javascript">
function submitForm()
{
	document.LoginForm.form_mode.value = 1;
	document.LoginForm.submit();
}
</script>
<table height="400" border="0" align="center">
<tr>
<td height="357">
	<!----------------------------------------   Login Form ---------------------------------------------------------------->	
      <table width="295px"  border="0" align="center" cellpadding="3" cellspacing="0" class="tboard">
		<form name="LoginForm" method="post" action="index.php">
        <input type="hidden" name="cat" value="<?php echo $_REQUEST['cat'];?>">
        <input type="hidden" name="scat" value="<?php echo $_REQUEST['scat'];?>">
  		<input type="hidden" name="form_mode" value="">
        <tr style="background: #80A9EA repeat-x top left; COLOR: #FFFFFF;FONT: 12px Verdana, Tahoma; font-weight:bold" align="left">
        	<td colspan="2" align="center" class="tcat" style="font-size:14px">Login</td>
        </tr>
  		<tr >
    		<td width="37%" align="left" valign="top"  class="smalltext" style="font-size:12px;">User Name:</td>
    		<td width="63%" align="left" valign="top"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
      		<input name="username" type="text" class="logintext" id="username" value="" size="20" style="
	BORDER: 1px SOLID #666666;
	PADDING: 2px 2px 2px 2px;
	BACKGROUND: url(images/icon_user.gif) no-repeat;
	BACKGROUND-POSITION: 2px 2px;
	PADDING-LEFT: 18px;
" /> </font></td>
  		</tr>
  		<tr >
    		<td align="left" valign="top" class="smalltext" style="font-size:12px;">Password:</td>
		    <td align="left" valign="top"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
      		<input name="password" type="password" id="password" value=""  size="25" style="
	BORDER: 1px SOLID #666666;
	PADDING: 2px 2px 2px 2px;
   	padding-right: 18px;
" /></font></td>
  		</tr>
  		<tr align="center" >
    		<td colspan="2"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
      		<input type="submit" class="bluebuttonbig" onClick="javascript:submitForm()" value="Login" style="
  BORDER: solid 0 #FFFFFF;
	BACKGROUND: URL(images/bluebuttonbg.gif) no-repeat;
	HEIGHT: 21px;
	WIDTH: 85px;
	FONT-SIZE: 11px;
    padding-top: 3px;
    padding-bottom: 15px;
  " /></font></td>
  		</tr>
  		<?  if($_REQUEST['loginresult']==unauthorise)  { ?>
  		<tr class="rowerror" title="" onMouseOver="" onMouseOut="" onClick="">
    		<td align="center" valign="" colspan="2" width="37%">Invalid Username or Password</td>
  		</tr>
  		<? } ?>
  		</form>
        </table>
   <!-------------------------------------------End Of Login From ----------------------------------------------------------->
</td>
</tr>  
</table>

