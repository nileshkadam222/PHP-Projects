<?
	
	$dbhost="localhost";
	$dbusr="skyzoanc_skyzoan";
	$dbpass="skyzoan123";
	$database="skyzoanc_college";
	mysql_connect($dbhost,$dbusr,$dbpass);
	mysql_select_db($database) or die("databse not connected");
?>