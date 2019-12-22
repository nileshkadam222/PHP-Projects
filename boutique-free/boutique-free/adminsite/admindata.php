<html>
<head>
<script type="text/javascript">
function deletefun()
{	
	f1.action="deleteadmin.php";
	f1.method="POST";
	f1.submit();
}
</script>
</head>
<body>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<?php
$link=mysql_connect('localhost','root','');
$db=mysql_select_db('boutique');
$rows=mysql_query("select * from admin order by sr_no");
?>
<img src="image/basics.gif">
<font size=4 face='arial' color='#EE43A0'>&nbsp;&nbsp;Administrator Detail</font><br><br>
<center>
<form name='f1' action='addadmin.php' method='POST'>
<table border='0' width=50%>
<tr bgcolor="#CCCCCC">
<th><a href='deleteadmin.php?val=1'><img src="image/error.gif" height="30" width="30"></a>
<th>SrNo.<th>Admin id<th>Password</tr>
<?
while($data=mysql_fetch_array($rows))
{
	echo "<tr align='center' bgcolor='#DCB9FF'>";
	echo "<td><input type='checkbox' name='chk1[]' value='$data[0]'></td>";
	echo "<td><font face='Arial' size=3>$data[0]";
	echo "<td><font face='Arial' size=3><a href='updateadmin.php?id=$data[0]'>$data[1]</a></td>";
	echo "<td><font face='Arial' size=3>$data[2]";
	echo "</tr>";
}
?>
</TR>
</table>
<br><br>
<table border=0 width=20%>
<tr align="center">
<td><input type="image" src="image/addnews.gif"></td>
<td><img src="image/error.gif" onClick="deletefun()"></td>
</tr>
<tr align="center">
<td><font face="Monotype Corsiva" size=5 color="#006633"><b>Add
<td><font face="Monotype Corsiva" size=5 color="#006633"><b>Delete
</tr>
</table>
</body>
</html>