<html>
<body>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<?php
$link=mysql_connect('localhost','root','');
$db=mysql_select_db('boutique');
$rows=mysql_query("select * from sales_mast");
?>
<img src="image/basics.gif">
<font size=4 face='arial' color='#EE43A0'>&nbsp;&nbsp;Sales Detail</font><br><br>
<center>
<form name=f1 action='deletesales.php' method=POST>
<table border=0 width=90%>
<tr bgcolor="#CCCCCC">
<th><a href='deletesales.php?val=1'><img src="image/error.gif" height="30" width="30"></a>
<th>Bill_no<th>User Id<th>Address<th>City<th>State<th>Country<th>Date<th>Total Amount<th>Cr_No.</tr>
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
	echo "</tr>";
	$ro=mysql_query("select * from sales_trans where bill_no='$data[0]'");
	?>
	<tr bgcolor="#CCCCCC"><th colspan=2 align='right'>Sr_no<th>Item Name<th colspan=2>Description<th colspan=2>Qty<th>Amount</tr>
	<?php
	while($d=mysql_fetch_array($ro))
	{
		echo "<tr align='center' bgcolor='#DCB9FF'>";
		echo "<td colspan=2 align='right'>$d[0]</td>";
		echo "<td><font face='Arial' size=3>$d[2]";
		echo "<td colspan=2><font face='Arial' size=3>$d[3]";
		echo "<td colspan=2><font face='Arial' size=3>$d[4]";
		echo "<td><font face='Arial' size=3>$d[5]";
		echo "</tr>";
	}
	echo "<tr><td></tr>";
	echo "<tr><td>   </td></tr>";
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