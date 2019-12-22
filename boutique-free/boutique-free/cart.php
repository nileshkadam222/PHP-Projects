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
<link rel="stylesheet" href="adminsite/css/style.css" type="text/css" media="screen" />
<center>
<br>
<font size=6 face='Monotype Corsiva' color='#CC0000'>Shopping Cart</font><br><br><br>
<form name=f1 action='updatecart.php' method=GET>
<table border=0 width=100%>
<tr bgcolor="#CCCCCC">
<th><a href='deletecart.php?val=1'><img src="images/error.gif" height="30" width="30"></a>
<th>SrNo.<th>ItemName<th>Description<th>Quantity<th>Amount<th>Total Amount</tr>
<?php
$link=mysql_connect('localhost','root','');
$db=mysql_select_db('boutique');
$rows=mysql_query("select * from tmp_table order by sr_no");
$i=0;
$tot=0;
while($data=mysql_fetch_array($rows))
{
	$i=$i+1;
	echo "<tr align='center' bgcolor='#DCB9FF'>";
	echo "<td><a href='deletecart.php?id=$data[0]'><img src='images/b_drop.png'></a></td>";
	echo "<td><font face='Arial' size=3>$data[0]";
	echo "<td><font face='Arial' size=3>$data[2]</td>";
	echo "<td><font face='Arial' size=3>$data[3]</td>";
	echo "<td><font face='Arial' size=3><input type='text' value=$data[4] name='qty[]' size=6 maxlength='7' onkeypress='onlynum(event)'>";
	echo "<input type='hidden' value=$data[0] name='nm[]'>";
	echo "<td><font face='Arial' size=3> *&nbsp;&nbsp; $data[5]";
	echo "<td><font face='Arial' size=3 align='right'> =&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp".($data[4]*$data[5]);
	$tot=$tot+($data[4]*$data[5]);
	echo "</tr>";
}
?>
</TR>
<tr></tr>
<tr>
<td colspan='4'><font size='3'><b>No. Of Item: <?php echo $i ?></td>
<td colspan='2'><font size='3'><b>Sub Total : </td>
<td><font size='3'><b>=&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tot ?></td>
</tr>
<tr><td> </td></tr>
<tr><td colspan="7"><img src="images/menuhover.jpg" width="700" height="2"></td></tr>
</table>
<br><br>
<table border=0 width=50%>
<tr align="center">
<td><input type="image" src="images/editnews.gif"></td>
<td><a href="checkout.php"><img src="images/greenshd.gif"></a></td>
</tr>
<tr align="center">
<td><font face="Monotype Corsiva" size=5 color="#006633"><b>Update Cart
<td><font face="Monotype Corsiva" size=5 color="#006633"><b>Check Out</b>
</tr>
</table>
</div>
<?php
include "footer.php";
?>