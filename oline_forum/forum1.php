<body>

<?php 

	include('connect.php');
	session_start();
		if(!isset($_SESSION['CustomerID'])){ header('location:register_login.php'); }
		else{
		$newid=($_SESSION['CustomerID']);
				
	
	
  $nameddd=$_FILES['file']['name'];
  $size=$_FILES['file']['size'];
  $type=$_FILES['file']['type'];
  $temp=$_FILES['file']['tmp_name'];
	$fd="0";	
		///check filename if exist
		$resource3= mysql_query("SELECT count(ForumID) as 'loko' FROM forums where Files='$nameddd'") or die ("Unable to upload <br>");
					while($lotus3 = mysql_fetch_array($resource3)){
						$fd=$lotus3['loko'];
						}
	if($fd=="0"){
	
	$move=move_uploaded_file($temp,"forum_folder/".$nameddd);
if($move){echo "File successfully uploaded";}
else{ echo "File was not able to upload";}

	$msg=$_POST['text'];
	date_default_timezone_set('Asia/Manila');
	$d=date('Y-m-d');
	
	if($nameddd==""){$a=mysql_query("insert into forums(CustomerID, Date_posted, Contents) values ('$newid','$d','$msg')"); }
	else{
$a=mysql_query("insert into forums(CustomerID, Date_posted, Contents, Files) values ('$newid','$d','$msg','$nameddd')");
	}
	if($a){echo'<script>alert("Posted"); history.back();</script>';
//echo' <meta http-equiv="refresh" content="2; url=forum.php">';
}
	else{echo'<script>alert("Unsuccessful"); history.back();</script>';
	//echo' <meta http-equiv="refresh" content="2; url=forum.php">';
}
	}
	
	else{echo"Oops!.. problem occured, it could be the filename with the same name";
	echo' <meta http-equiv="refresh" content="2; url=forum.php">';}
	
		}
?></body>