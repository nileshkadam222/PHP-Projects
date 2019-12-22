<body>

<?php 

	include('connect.php');
	session_start();
		if(!isset($_SESSION['CustomerID'])){ header('location:register_login.php'); }
		else{
		$newid=($_SESSION['CustomerID']);
				
	if(isset($_POST['text'])){
		$er=$_POST['text'];
		$es=$_POST['roomid'];
		}
	
	date_default_timezone_set('Asia/Manila');
	$d=date('Y-m-d');
	
	if($er!=""){
		$a=mysql_query("update forums set Contents='$er', Date_posted='$d' where ForumID='$es'");
		if($a){echo'<script>alert("Post Updated successfully"); history.back();</script>';}
		//echo '<meta http-equiv="refresh" content="2; url=forum.php">';
		}
	
	else{	echo' <meta http-equiv="refresh" content="2; url=forum.php">';
		}
	}
	
		
?></body>