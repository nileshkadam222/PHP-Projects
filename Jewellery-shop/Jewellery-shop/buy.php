<?php
	include("include/config.php");
	if($_REQUEST['id']!="" and $_SESSION['id']>0)
	{
		mysql_query("INSERT INTO cart(jewel_id,qty,cust_id)VALUES ('".$_REQUEST['id']."','1',".$_SESSION['id'].");");	
		header("location:index.php?buy=y&cat=".$_REQUEST['cat']."&scat=".$_REQUEST['scat']);
	}
	else
	{
		header("location:index.php?Ptype=login&cat=".$_REQUEST['cat']."&scat=".$_REQUEST['scat']);
	}

		
?>