<?php
session_start();
include('dbcon.php');

$id=$_SESSION['id'];
mysql_query("DELETE  FROM problem WHERE user_id='$id'")or die(mysql_error());
header('location:myproblem.php');
?>