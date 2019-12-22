<?php
session_start();
?>
<?php

$msg=@$_GET['msg'];       
if(isset($_POST['register']))
  {
    $un=$_POST['username1'];
   $pass=$_POST['passwordr1'];
   $name=$_POST['name'];
   $mob=$_POST['mob'];
   $email=$_POST['email'];
   
    
 $cnn=mysql_connect("localhost","root","") or die("cannot connect to database");
 mysql_select_db("db_bookmyshow",$cnn) or die("cannot select database");
 $sql="select count(*) from adminlogin where UserName='".$un."'"; 
$result=mysql_query($sql); 
$query_data=mysql_fetch_row($result); 
if($query_data[0]>0) { 
$msg="User Nmae Already Exist"; 
} else{ 
 $query="insert into adminlogin(UserName,Password,Name,Mobile,Email)values('".$un."','".$pass."','".$name."','".$mob."','".$email."')";
 $result= mysql_query($query) or die("query failed".mysql_error());
 if($result!="")
 {
    $msg="Register Successfully";
    header ('Location:ragistration.php?msg='.$msg); 
}  
    mysql_close($cnn);
}
  }
    
?> 




<?php  

if (isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
     $cnn=mysql_connect("localhost","root","") or die("cannot connect to database");
 mysql_select_db("db_bookmyshow",$cnn) or die("cannot select database");
    $sql = "SELECT * FROM adminlogin WHERE UserName='".$username."' AND Password='".$password."' LIMIT 1";
    $res = mysql_query($sql);
    if (mysql_num_rows($res) == 1) 
    {
          $_SESSION["admin"]=$username;
 
        if(isset($_SESSION["aurl"])) 
        $url = $_SESSION["aurl"]; // holds url for last page visited.
        else 
        $url = "admin.php"; // default page for
        header("Location:$url");
    } 
    else 
    {
       $msg="Username Orv Password Invailid";
    header ('Location:ragistration.php?msg='.$msg);
     }
}
?>




















<html>
    <head>
        <link rel="shortcut icon" href="../lr/favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="lr/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="lr/css/style3.css" />
        <link rel="stylesheet" type="text/css" href="lr/css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
           
            <header>

<html>
<head>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/interface.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center><div class="dock" id="dock">
  <div class="dock-container">
<a class="dock-item" href="admin.php"><img src="images/home.png" alt="home" /><span>Home</span></a> 
  <a class="dock-item" href="adminprofile.php"><img src="images/ap.png" alt="Admin Profile" /><span>Admin Profile</span></a> 
  
  <?php
                if(isset($_SESSION['admin'])){
                echo '<a class="dock-item" href="logout.php"><img src="images/logout1.png" alt="Log Out" /><span>Log Out</span></a>';
                echo '<li><a href="#">';
                echo '<a class="dock-item" href="#"><img src="images/adm1.png" alt="Welcome:"  '.@$_SESSION['admin'].'  /><span>Welcome:  '.@$_SESSION['admin'].' </span></a>';
                
                }
                else{
                echo '<a class="dock-item" href="ragistration.php"><img src="images/login1.png" alt="Login" /><span>Login</span></a> ';
                }
                ?>  
</div>
</div>

</center>
<script type="text/javascript">
	
	$(document).ready(
		function()
		{
			$('#dock').Fisheye(
				{
					maxWidth: 10,
					items: 'a',
					itemsText: 'span',
					container: '.dock-container',
					itemWidth: 100,
					proximity: 120,
					halign : 'center'
				}
			);
		}
	);

</script>
</body>
</html>

                
                
            </header>
            <section>				
                <div id="container_demo" >
                    
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  method="post" action="" autocomplete="on"> 
                                <h1>Log in</h1>
                                <?php echo $msg; ?>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="username"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" name="login" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Register</a>
								</p>
                            </form>
                                    
                        </div>

                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <div id="register" class="animate form">
                            <form  method="post" action="" autocomplete="on"> 
                                <h1>Register </h1>
                                <?php echo $msg; ?>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="username1" required="required" type="text" placeholder="Abc123" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordr" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordr1" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your Name</label>
                                    <input id="usernamesignup" name="name" required="required" type="text" placeholder="Full Name" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your Mobile No.</label>
                                    <input id="usernamesignup" name="mob" required="required" type="text" placeholder="90XXXXXXXX" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                
                                <p class="signin button"> 
									<input type="submit" name="register" value="Register"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>