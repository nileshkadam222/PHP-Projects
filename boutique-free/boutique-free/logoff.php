<?php
session_start();
session_destroy();
$link=mysql_connect("localhost","root","");
$db=mysql_select_db("boutique");
mysql_query("delete from tmp_table");
header("Location:main.php");
?>