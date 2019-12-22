<?php
$link=mysql_connect('localhost','root','');
$db=mysql_select_db('boutique',$link);
$d=$HTTP_GET_VARS['val'];
if($d==1)
{
	$q=mysql_query("delete from admin");
}
else
{
	foreach($HTTP_POST_VARS['chk1'] as $v)
	{
		$query=mysql_query("delete from admin where sr_no=$v");
	}
	$row=mysql_query("select * from admin order by sr_no");
	$n=mysql_num_rows($row);
	$i=1;
	while($d=mysql_fetch_array($row))
	{
		$q=mysql_query("update admin set sr_no=$i where sr_no=$d[0]");
		$i=$i+1;
	}
}
header("Location:admindata.php");
?>