<?php
session_start();
include('dbcon.php');

$id=$_SESSION['id'];
mysql_query("DELETE  FROM wishlist WHERE user_id='$id'")or die(mysql_error());
header('location:books.php');
?>