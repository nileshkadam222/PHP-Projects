<?php
session_start();
if(isSet($_SESSION['user']))
{
	echo "<frameset rows=30%,* FRAMEBORDER=No>";
	echo "<frame src='adminhead.php' name='head'>";
	echo "<frame src='temp.php' name='main'>";
}
else
{
header("Location:index.php");
}
?>