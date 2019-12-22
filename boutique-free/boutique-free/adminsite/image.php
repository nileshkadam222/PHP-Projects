<?php
$link=mysql_connect('localhost','root','');
$db=mysql_select_db('boutique');
$i=0;
foreach($HTTP_POST_VARS['chk1'] as $v)
{
	$i=$v;
}
echo "<table width=30% align=center>";
$rows=mysql_query("select * from item_detail where sr_no=$i");
while($d=mysql_fetch_array($rows))
{
echo "<tr>";
echo "<td><font face='Arial' size='3' color='#660033'><b>image -- </b>$d[3] <br><br><br>";
echo "<td><img src='$d[3]' height=400 width=300>";
}
?>