<?php
session_start();
if(isSet($_SESSION['user']))
{
	include "header1.php";
}
else
{
	include "header.php";
}
?>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<font face="Monotype corsiva" size=5 color="#CC0000"><center><b>Create Account</b><br></center></font><br>
<div id="new_user">
	<form name='f1' action='submit.php' method='GET' onSubmit="check()">
	<table border=0 align=center>
	<tr bgcolor="#FF3399"><td align="center" colspan="2"><font face="arial" color="#FFFFFF" size="3"><b>Login Information</b></font></td></tr>
	<tr><td></td></tr>
	<tr><td align=left><font face="Arial" size=2 color="#6600CC"><b>Your Id * :</b><td><input type="text" name="uid">
	<tr><td align=left><font face="Arial" size=2 color="#6600CC"><b>Password *  :</b><td><input type="password" name="upw">
	<tr bgcolor="#FF3399"><td align="center" colspan="2"><font face="arial" color="#FFFFFF" size="3"><b>Personal Information</b></font></td></tr>
	<tr><td></td></tr>
	<tr><td align=left><font face="Arial" size=2 color="#6600CC"><b>First Name * :</b><td><input type="text" name="fnm" size="15" onkeypress='onlychar(event)'>eg. Suchita
	<tr><td align=left><font face="Arial" size=2 color="#6600CC"><b>Last Name * :</b><td><input type="text" name="lnm" size="15" onkeypress='onlychar(event)'> eg. Jadwani
	
	<tr><td align=left><font face="Arial" size=2 color="#6600CC"><b>Birth Date :</b>
	<td><input type="text" size="2" maxlength="2" value="dd" name="dd" onkeypress='onlynum(event)'> -
		<select name="mm">
		<option>JANUARY</option>
		<option>FEBRUARY</option>
		<option>MARCH</option>
		<option>APRIL</option>
		<option>MAY</option>
		<option>JUNE</option>
		<option>JULAY</option>
		<option>AUGUEST</option>
		<option>SEPTEMBER</option>
		<option>OCTOMBER</option>
		<option>NOVEMBER</option>
		<option>DESEMBER</option>
		</select> -
		<input type="text" value="yyyy" size="4" maxlength="4" name="yy" onkeypress='onlynum(event)'>
	</td>
	</tr>
	<tr><td align=left><font face="Arial" size=2 color="#6600CC"><b>Gender :</b>
	<td><input type="radio" name="c1" value="male">Male &nbsp;&nbsp;&nbsp;<input type="radio" name="c1" value="female" checked> Female</td>
	</tr>	
	<tr><td>                         </td></tr>
	<tr><td colspan="2"><font size="4" color="#CC3366"><I>Contact Information.....................................</i></font></td></tr>
		<tr><td>                         </td></tr>
	<tr><td align=left><font face="Arial" size=2 color="#6600CC"><b>Address * :</b><td><textarea rows="4" cols="40" name="uadd"></textarea>
	<tr><td align=left><font face="Arial" size=2 color="#6600CC"><b>Phone :</b><td><input type="text" name="uph" onkeypress='onlynum(event)'>
	<tr><td align=left><font face="Arial" size=2 color="#6600CC"><b>City :</b><td><input type="text" name="ucity" size="10" onkeypress='onlychar(event)'>
	<tr><td align=left><font face="Arial" size=2 color="#6600CC"><b>State :</b><td><input type="text" name="ustate" size="12" onkeypress='onlychar(event)'>
	<tr><td align=left><font face="Arial" size=2 color="#6600CC"><b>Country :</b><td><input type="text" name="ucon" size="9" onkeypress='onlychar(event)'>
	<tr><td align=left><font face="Arial" size=2 color="#6600CC"><b>Zip-Code :</b><td><input type="text" name="uzip" size="16" onkeypress='onlynum(event)'>
	<tr><td align=left><font face="Arial" size=2 color="#6600CC"><b>Email * :</b><td><input type="text" name="uemail" size="25">
	</table>
</div>
<table border=0 width=40% align="center">
<tr align="center">
<td><input type="image" src="images/greenshd.gif"></td>
<td><a href="new_user.php"><img src="images/redshd.gif"></a></td>
</tr>
<tr align="center">
<td><font face='Monotype Corsiva' size=5 color="#006633"><b>Submit
<td><font face='Monotype Corsiva' size=5 color="#006633"><b>Reset
</tr>
</table>
</form>
</div>
<?php
include"footer.php";
?>
