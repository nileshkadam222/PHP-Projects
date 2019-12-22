<body>

<?php 

	include('connect.php');
	session_start();
	if(isset($_GET['idelete'])){
		$der=$_GET['idelete'];
		
		
		if(!isset($_SESSION['CustomerID'])){ header('location:register_login.php'); }
		else{
		$newid=($_SESSION['CustomerID']);
		$a=mysql_query("delete from forums where ForumID='$der' and CustomerID='$newid'");
			}
	if($a){echo'<script>alert("Post deleted successfully"); history.back();</script>';
	//echo' <meta http-equiv="refresh" content="2; url=forum.php">';
}
}else{
	echo' <meta http-equiv="refresh" content="2; url=forum.php">';
	}
?></body>