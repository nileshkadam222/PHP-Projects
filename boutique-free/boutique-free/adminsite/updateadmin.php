<html>
<body>
<script type='text/javascript'>
function cancle()
{
	history.back();
}
</script>
<form action='saveadmin.php' method='POST'>
<img src="image/basics.gif">
<font size=4 face='arial' color='#EE43A0'>&nbsp;&nbsp;Administrator Detail</font>
<center>
<font size=5 face='Monotype Corsiva' color='#CC0000'>&nbsp;&nbsp;<b>Update Administrator Data</b></font><br><br>
<br><br>
<table border=0>
<?php
$link=mysql_connect('localhost','root','');
$db=mysql_select_db('boutique');
$getid=$HTTP_GET_VARS['id'];
$row=mysql_query("select * from admin where sr_no='$getid'");
echo "<input type='hidden' name='h' value='edit'>";
echo "<input type='hidden' name='srnum' value='$getid'>";
$d=mysql_fetch_array($row);
$nm=$d[1];
$des=$d[2];
echo "<tr><td align=right><font face='Arial' size=4 color='#6600CC'>Admin Id  :</font><td><input type='text' value='$nm' name='inm'></tr>";
echo "<tr><td align=right><font face='Arial' size=4 color='#6600CC'>Password  :</font><td><input type='password' value=$des name='ides'></tr>";
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