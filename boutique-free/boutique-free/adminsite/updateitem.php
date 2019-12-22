<html>
<body>
<script type='text/javascript'>
function cancle()
{
	history.back();
}
</script>
<form action='saveitem.php' method='POST'>
<img src="image/basics.gif">
<font size=4 face='arial' color='#EE43A0'>&nbsp;&nbsp;Product Detail</font>
<center>
<font size=5 face='Monotype Corsiva' color='#CC0000'>&nbsp;&nbsp;<b>Update Product</b></font><br><br>
<br><br>
<table border=0>
<?php
$link=mysql_connect('localhost','root','');
$db=mysql_select_db('boutique');
$getid=$HTTP_GET_VARS['id'];
$row=mysql_query("select * from item_detail where sr_no='$getid'");

echo "<input type='hidden' name='h' value='edit'>";
echo "<input type='hidden' name='srnum' value=$getid>";

$d=mysql_fetch_array($row);
$nm=$d[1];
$des=$d[2];
$pic=$d[3];
$cet=$d[4];
$pri=$d[5];
echo "<tr><td align=right><font face='Arial' size=4 color='#6600CC'>Item name :<td><input type='text' name='inm' value='$nm'></tr>";
echo "<tr><td align=right><font face='Arial' size=4 color='#6600CC'>Description<td><input type='text' value='$des' name='ides'></tr>";
echo "<tr><td align=right><font face='Arial' size=4 color='#6600CC'>Picture path<td><input type='text' value='$pic' name='ipic'></tr>";
echo "<tr><td align=right><font face='Arial' size=4 color='#6600CC'>Item Category<td><input type='text' value='$cet' name='icet'></tr>";
echo "<tr><td align=right><font face='Arial' size=4 color='#6600CC'>Price<td><input type='text' value='$pri' name='ipri'></tr>";
echo "</table>";
echo "<br><br>";
?>
<table border=0 width=20%>
<tr align="center">
<td><input type="image" src="image/greenshd.gif"></td>
<td><img src="image/redshd.gif" onClick="cancle()"></td>
</tr>
<tr align="center">
<td><font face="Monotype Corsiva" size=5 color="#006633"><b>Save
<td><font face="Monotype Corsiva" size=5 color="#006633"><b>Cancle
</tr>
</table>
</body>
</html>