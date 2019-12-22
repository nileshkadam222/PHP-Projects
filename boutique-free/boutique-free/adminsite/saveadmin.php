<?php
$link=mysql_connect("localhost","root","");
$db=mysql_select_db("boutique");
$what=$HTTP_POST_VARS['h'];
if($what=='edit')
{
$id=$HTTP_POST_VARS['inm'];
$pwd=$HTTP_POST_VARS['ides'];
$no=$HTTP_POST_VARS['srnum'];
$q1=mysql_query("update admin set adminid='$id',password='$pwd' where sr_no=$no");
header("Location:admindata.php");
}
if($what=='save')
{
$nm=$HTTP_POST_VARS['inm'];
$des=$HTTP_POST_VARS['ipass'];
$q=mysql_query("select max(sr_no) from admin");
$d=mysql_fetch_array($q);
$query=mysql_query("insert into admin values(($d[0]+1),'$nm','$des')");
header("Location:admindata.php");
}
?>