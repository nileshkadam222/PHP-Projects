<?php
session_start();
if(isSet($_SESSION['user']))
{
	include "header1.php";
	$us=$_SESSION['user'];
	echo $us;
	$link=mysql_connect('localhost','root','');
	$db=mysql_select_db('boutique');
	$row=mysql_query("select * from registration where userid='$us'");
	$d=mysql_fetch_array($row);
}
else
{
	include "header.php";
}
?>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<center>
<form name='f1' action='placeorder.php' method=POST>
<table width="100%">
<tr><td colspan="2"><font face="Monotype corsiva" size=5 color="#CC0000"><b>Order Information</b></font></td></tr>
<tr><td colspan="2"><img src="images/menuhover.jpg" width=600 height=2></td></tr>
<tr><td><font face="Arial" size=3 color="#3333CC"><b>Billing</font></td><td><font face="Arial" size=3 color="#009933"><b>Shipping</font></td></tr>
<tr><td><img src="images/menuhover.jpg" width=250 height=2></td><td><img src="images/menuhover.jpg" width=250 height=2></td></tr>
<tr>
<td>
<table>
<tr align="left"><td>Name :<td><input type="text" size="20" name="nm" value="<?php echo "$d[3]  $d[4]"; ?>">
<tr align="left"><td>Address:<td><textarea rows="4" cols="20" name="add"><? echo $d[7] ?></textarea>
<tr align="left"><td>City :<td><input type="text" size="20" size="10" name="city" value="<? echo $d[9]?>" onkeypress="onlychar(event)">
<tr align="left"><td>State :<td><input type="text" size="20" size="13" name="state" value="<? echo $d[10] ?>" onkeypress="onlychar(event)">
<tr align="left"><td>Country :<td><input type="text" size="20" size="16" name="coun" value="<? echo $d[11] ?>" onkeypress="onlychar(event)">
</table>
</td>
<td>
<table>
<tr align="left"><td>Name :<td><input type="text" size="20" value="<?php echo "$d[3]  $d[4]"; ?>">
<tr align="left"><td>Address:<td><textarea rows="4" cols="20"><? echo $d[7] ?></textarea>
<tr align="left"><td>City :<td><input type="text" size="20" size="10" value="<? echo $d[9]?>" onkeypress="onlychar(event)">
<tr align="left"><td>State :<td><input type="text" size="20" size="13" value="<? echo $d[10] ?>" onkeypress="onlychar(event)">
<tr align="left"><td>Country :<td><input type="text" size="20" size="16" value="<? echo $d[11] ?>" onkeypress="onlychar(event)">
</table>
</td>
</tr>
<tr><td colspan="2"><img src="images/menuhover.jpg" width=600 height=2></td></tr>
<tr><td colspan="2"><font face="Monotype corsiva" size=4 color="#000000"><b>Payment Mode</b></font></td></tr>
<tr><td colspan="2"><img src="images/menuhover.jpg" width=600 height=2></td></tr>
<tr><td colspan="2"><b>Credit Card Number:<b>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="25" maxlength="16" name="crno" onkeypress="onlynum(event)"></td></tr>
<tr><td colspan="2"><img src="images/menuhover.jpg" width=600 height=2></td></tr>
<tr><td colspan="2"><img src="images/menuhover.jpg" width=600 height=2></td></tr>
<tr><td colspan="2"><font face="Monotype corsiva" size=4 color="#000000"><b>Bill</b></font></td></tr>
<tr><td colspan="2"><img src="images/menuhover.jpg" width=600 height=2></td></tr>
</table>
<table width=80% align="center">
<tr bgcolor="#CCCCCC">
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
	echo "<tr bgcolor='#DCB9FF'>";
	echo "<td><font face='Arial' size=3>$data[0]";
	echo "<td><font face='Arial' size=3>$data[2]</td>";
	echo "<td><font face='Arial' size=3>$data[3]</td>";
	echo "<td><font face='Arial' size=3>$data[4]</td>";
	echo "<input type='hidden' value=$data[0]>";
	echo "<td><font face='Arial' size=3> *&nbsp;&nbsp; $data[5]";
	echo "<td><font face='Arial' size=3 align='right'> =&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp".($data[4]*$data[5]);
	$tot=$tot+($data[4]*$data[5]);
	echo "</tr>";
}
?>
</TR>
<tr></tr>
<tr>
<td colspan='3'><font size='3'><b>No. Of Item: <?php echo $i ?></td>
<td colspan='2'><font size='3'><b>Sub Total : </td>
<td><font size='3'><b>=&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tot ?></td>
</tr>
<tr><td colspan="7"><img src="images/menuhover.jpg" width="600" height="2"></td></tr>
</table>
<table border=0 width=50%>
<tr align="center">
<td><input type="image" src="images/greenshd.gif"></td>
<td><a href="cart.php"><img src="images/redshd.gif"></a></td>
</tr>
<tr align="center">
<td><font face="Monotype Corsiva" size=5 color="#006633"><b>Place Order
<td><font face="Monotype Corsiva" size=5 color="#006633"><b>Back</b>
</tr>
</table>
<input type="hidden" name="tot" value="<? echo $tot ?>">
</form>
</div>
<?php
include"footer.php";
?>