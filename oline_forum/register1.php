<body><?php 
	include('connect.php');
	date_default_timezone_set('UTC');$d=date('Y-m-d');
	$p1=$_POST['pass1'];
	$p2=$_POST['pass2'];
	if($p1==$p2){
	$name =$_POST['name2'].', '.$_POST['name1'].'  '.$_POST['name3'];
	$gender=$_POST['gender'];
	
	$address = $_POST['add1'].', '.$_POST['add2'].', '.$_POST['add3'].', '.$_POST['add4'];
	
	$email=$_POST['con1'];
	
	$contact=$_POST['con2'];
	
	$user=$_POST['user'];
	$birth=$_POST['birth'];
	$occup=$_POST['occup'];
	$result2 = mysql_query("SELECT * FROM customerinfo WHERE Username='$user'");
	$exist=mysql_num_rows($result2);
	
	if($exist!=1){
	
	
	$in=mysql_query("INSERT INTO customerinfo (Name, Email_address, Contact_no, Username, Password, Address, Birthdate, Occupation, Gender, DateRegistered)
										 VALUES ('$name','$email','$contact','$user','$p2','$address','$birth','$occup', '$gender','$d')");
										 if($in){
											
	//////////////automatically login.										
	$resultxxx=mysql_query("SELECT * from customerinfo where Username='$user' and Password='$p2' And Status <> 'Deactivated'");

	$rowxxx=mysql_fetch_array($resultxxx); 
	$countx=mysql_num_rows($resultxxx);

	if($countx==1){
	session_start();
	($_SESSION['CustomerID']=$rowxxx['CustomerID']);}
	////////////////////////////////////
	
											echo'<script> alert("You are now a member!. Add recovery question goto more>account>Account")</script>';
											
											echo' <meta http-equiv="refresh" content="3; url=index.php">';
                                            }
										 else{
											 echo'<script>alert("Unsuccessful")</script>';
											echo' <meta http-equiv="refresh" content="2; url=register_login_admin.php">';
										}
	}else{echo'<script>alert("Username already exists")</script>';
	echo' <meta http-equiv="refresh" content="2; url=register_login_admin.php">';}
	}
	else{echo'<script>alert("Password does not matched")</script>';
	echo' <meta http-equiv="refresh" content="2; url=register_login_admin.php">';}
?></body>