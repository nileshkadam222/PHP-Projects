<?
session_start();
if(isSet($_SESSION['user']))
{
$link=mysql_connect("localhost","root","") or exit("Not found");
$db=mysql_select_db("boutique") or exit("not connect");
$item=$HTTP_GET_VARS['id'];
$qty=$HTTP_GET_VARS['qty'];
$us=$_SESSION['user'];
if($item!="")
$page=$HTTP_GET_VARS['pg'];
$q=mysql_query("select * from item_detail where item_name='$item'");
$d=mysql_fetch_array($q);
$q1=mysql_query("select max(sr_no) from tmp_table");
$d1=mysql_fetch_array($q1);
$q2=mysql_query("insert into tmp_table values(($d1[0]+1),'$us','$d[1]','$d[2]',$qty,$d[5])");
header("Location:temp.php");
}
else
{
	header("Location:registration.php");
}
?>