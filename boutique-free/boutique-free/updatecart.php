<?php
$link=mysql_connect('localhost','root','');
$db=mysql_select_db('boutique');
$x=$HTTP_GET_VARS['nm'];
$i=0;
foreach($HTTP_GET_VARS['qty'] as $v)
{
	mysql_query("update tmp_table set qty=$v where sr_no=$x[$i]");
	$i=$i+1;
}
header("location:cart.php");
?>