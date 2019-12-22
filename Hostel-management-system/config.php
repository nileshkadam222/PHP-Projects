<?php 
error_reporting(1);
$con = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("full",$con) or die(mysql_error());
?>