<?php
session_start();
$link=mysql_connect('localhost','root','');
$db=mysql_select_db('boutique');
$usernm=$HTTP_POST_VARS['uid'];
$pass=$HTTP_POST_VARS['ups'];
$r=mysql_query("select * from registration where userid='$usernm' and password='$pass'");
$data=mysql_fetch_array($r);
if($data)
{
	$_SESSION['user']=$usernm;
	header("Location:main.php");
}
else
{
	header("Location:registration.php");
}
?>