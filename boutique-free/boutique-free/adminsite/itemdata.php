<html>
<head>
<script type="text/javascript">
function deletefun()
{	
	f1.action="deleteitem.php";
	f1.method="POST";
	f1.submit();
}
function image()
{
	f1.action="image.php";
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
$rows=mysql_query("select * from item_detail");
?>
<img src="image/basics.gif">
<font size=4 face='arial' color='#EE43A0'>&nbsp;&nbsp;Product Detail</font><br><br>
<center>
<form name='f1' action='additem.php' method='POST'>
<table border=0 width=80%>
<tr bgcolor="#CCCCCC">
<th><a href='deleteitem.php?val=1'><img src="image/error.gif" height="30" width="30"></a>
<th>SrNo.<th>Item Name<th>Description<th>Picture<th>Category<th>Price</tr>
<?php
while($data=mysql_fetch_array($rows))
{
	echo "<tr align='center' bgcolor='#DCB9FF'>";
	echo "<td><input type='checkbox' name=chk1[] value=$data[0]></td>";
	echo "<td><font face='Arial' size=3>$data[0]</td>";
	echo "<td><font face='Arial' size=3><a href='updateitem.php?id=$data[0]'>$data[1]</a></td>";
	echo "<td><font face='Arial' size=3>$data[2]</td>";
	echo "<input type='hidden' name='image1[]' value='$data[0]'>";
	echo "<td><input type='image' src='image/images.gif' name='img1' value='$data[3]' onClick='image()'>";
	echo "<td><font face='Arial' size=3>$data[4]";
	echo "<td><font face='Arial' size=3>$data[5]";
	echo "</tr>";
}
?>
</TR>
</table>
<br><br>
<table border=0 width=20%>
<tr align="center">
<td><input type="image" src="image/addnews.gif"></td>
<td><input type="image" src="image/error.gif" onClick="deletefun()"></td>
</tr>
<tr align="center">
<td><font face="Monotype Corsiva" size=5 color="#006633"><b>Add
<td><font face="Monotype Corsiva" size=5 color="#006633"><b>Delete
</tr>
</table>
</body>
</html>

