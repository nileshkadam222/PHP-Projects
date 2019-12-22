<body> <?php
		include("connect.php");

	//Connect to mysql server
	//Sanitize the POST values
	$login =($_POST['user']);
	$password =($_POST['password']);
	if($login!="" && $password!=""){
	//Create query
	$qry="SELECT * FROM customerinfo WHERE Username='$login' AND Password='$password'";
	
	$result=mysql_query("SELECT * from customerinfo where Username='$login' and Password='$password' And Status <> 'Deactivated'");

	$row=mysql_fetch_array($result); 
	$count=mysql_num_rows($result);

	if($count==1){
	session_start();
	($_SESSION['CustomerID']=$row['CustomerID']);
	
	//////////delete all in cart
	$del=mysql_query("delete from customercart");
	echo '<meta http-equiv="refresh" content="1; url=index.php">';
	echo'<font style="color:green">Login successfully. <a href="index.php">click here</a> if not redirected.</font>';
}
	else{
		echo'<font style="color:#F33">Invalid username and password</font>';
		}
	}
	else{
		echo'<font style="color:#F33">Input username and password!</font>';
		}

?></body