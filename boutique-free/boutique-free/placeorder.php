<?
session_start();
$link=mysql_connect("localhost","root","");
$db=mysql_select_db("boutique");
$uid=$_SESSION['user'];
$unm=$HTTP_POST_VARS['nm'];
$uadd=$HTTP_POST_VARS['add'];
$ucity=$HTTP_POST_VARS['city'];
$ustate=$HTTP_POST_VARS['state'];
$ucoun=$HTTP_POST_VARS['coun'];
$ucrno=$HTTP_POST_VARS['crno'];
$totalamt=$HTTP_POST_VARS['tot'];
$dt=date("d-F-Y");
$row=mysql_query("select max(bill_no) from sales_mast");
$d=mysql_fetch_array($row);
$i=($d[0]+1);
$r=mysql_query("select * from tmp_table");
while($da=mysql_fetch_array($r))
{
	$z=mysql_query("insert into sales_trans values($da[0],'$i','$da[2]','$da[3]',$da[4],$da[5])");
}
$y=mysql_query("insert into sales_mast values($i,'$uid','$uadd','$ucity','$ustate','$ucoun','$dt',$totalamt,'$ucrno')");
mysql_query("delete * from tmp_table");
header("Location:main.php");
?>