<?php
$link=mysql_connect('localhost','root','');
$db=mysql_select_db('boutique',$link);
$d=$HTTP_GET_VARS['val'];
if($d==1)
{
$q=mysql_query("delete from sales_trans");
$q0=mysql_query("delete from sales_mast");
}
else
foreach($HTTP_POST_VARS['chk1'] as $v)
{
	$q1=mysql_query("delete from sales_trans where bill_no='$v'");
	$q2=mysql_query("delete from sales_mast where bill_no='$v'");
}
header("Location:salesdetail.php");
?>