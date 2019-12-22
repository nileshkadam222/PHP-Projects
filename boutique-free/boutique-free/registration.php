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
	<br><br>
	<div id="heading">
	<font face="Monotype Corsiva" size=6 color="#FF0000"><b>User Regisration</b><br></font>
	</div>
	<div id="registration_main">
			<h2>
			<font face="Arial" size=3 color="#006600">
			Please , Enter Your Id nad Password .......
			</font>
			</h2>
				<div id="login">
				<form name='f1' action="login.php" method=POST><br>
				<pre><font face="Arial" size=3 color="#6600CC"><b>Your Id:</b></font>  <input type="text" name="uid" class="text"/></pre>
				<br />
				<font face="Arial" size=3 color="#6600CC"><b>Password :</b></font>
				<input type="password" name="ups"/><br />
				</div>
				<div id="loginimage">
				<table border=0>
				<tr align="center">
				<td><input type="image" src="images/user.gif"></td>
				<td align="right"><a href="main.php"><img src="images/error.gif"></a></td>
				</tr>
				<tr align="left">
				<td><font face="Monotype Corsiva" size=5 color="#006633"><b>Login</td>
				<td><font face="Monotype Corsiva" size=5 color="#006633"><b>Cancle</td>
				</tr>
				</table>
				</div>
				<div class="clearthis">&nbsp;</div>
			</form>
			<br>
			<div>
			<table border=0 align="center" width=60%>
			<Tr>
			<td><img src="images/question.gif" height="40" width="40"></td>
			<td><b>If you Have no id then click on 'New User'</td>
			<td><a href="new_user.php"><img src="images/users.gif" height="60" width="60"></a></td>
			</Tr>
			<TR align="right"><td><td>
			<td><b>New User</b></td>
			</TR>
			</table>
			</div>
			
</div>
</div>
<?
include "footer.php";
?>
	</div>
