 <html>
<body>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<?php
$link=mysql_connect('localhost','root','');
$db=mysql_select_db('boutique');
$rows=mysql_query("select * from registration");
?>
<img src="image/basics.gif">
<font size=4 face='arial' color='#EE43A0'>&nbsp;&nbsp;Users Detail</font><br><br>
<center>
<form name=f1 action='deleteregs.php' method=POST>
<table border=0 width=95%>
<tr bgcolor="#CCCCCC">
<th><a href='deleteregs.php?val=1'><img src="image/error.gif" height="30" width="30"></a>
<th>SrNo.<th>UserId<th>Password<th>FiratName<th>LastName<th>BirthDate<th>Gender<th>Address<th>PhoNo.
<th>City<th>State<th>Country<th>Zip_Code<th>Email</tr>
<?php
while($data=mysql_fetch_array($rows))
{
	echo "<tr align='center' bgcolor='#DCB9FF'>";
	echo "<td><input type='checkbox' name=chk1[] value=$data[0]></td>";
	echo "<td><font face='Arial' size=3>$data[0]</td>";
	echo "<td><font face='Arial' size=3>$data[1]";
	echo "<td><font face='Arial' size=3>$data[2]";
	echo "<td><font face='Arial' size=3>$data[3]";
	echo "<td><font face='Arial' size=3>$data[4]";
	echo "<td><font face='Arial' size=3>$data[5]";
	echo "<td><font face='Arial' size=3>$data[6]";
	echo "<td><font face='Arial' size=3>$data[7]";
	echo "<td><font face='Arial' size=3>$data[8]";
	echo "<td><font face='Arial' size=3>$data[9]";
	echo "<td><font face='Arial' size=3>$data[10]";
	echo "<td><font face='Arial' size=3>$data[11]";
	echo "<td><font face='Arial' size=3>$data[12]";
	echo "<td><font face='Arial' size=3>$data[13]";
	echo "</tr>";
}
?>
</TR>
</table>
<br><br>
<table border=0 width=20%>
<tr align="center">
<td><input type="image" src="image/error.gif" onClick="deletefun()"></td>
</tr>
<tr align="center">
<td><font face="Monotype Corsiva" size=5 color="#006633"><b>Delete
</tr>
</table>
</body>
</html>