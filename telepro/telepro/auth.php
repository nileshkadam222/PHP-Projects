<?php
if(isset($_POST['admin_fr']))
{
if($_POST['username_txt'] !="" & $_POST['pwd_txt'] !="")
{
$username = $_POST['username_txt'];
$password = $_POST['pwd_txt'];
			
			include('my_con.php');
			
			$query="SELECT username password FROM admin_login where username='$username' AND password='$password' ";
			$result=mysqli_query($conn,$query) or mysql_eoor();
			$num = mysqli_num_rows($result);
			if($num==1){
                        session_start();
                        // store session data
                        $_SESSION['username']=$username;
                        header("location:http://localhost/telepro/Welcome_admin.php");
			}
                         else{
                        header("location:http://localhost/telepro/login.php?abc=admin&&pwderr=0");
                        }
			
}
else{
header("location:http://localhost/telepro/login.php?abc=admin&&pwderr=1");

}
}


if(isset($_POST['customer_fr']))
{
if($_POST['ca_txt'] !="" & $_POST['cpwd_txt'] !="")
{
$ca_number = $_POST['ca_txt'];
$password = $_POST['cpwd_txt'];
			
			echo $ca_number;
			echo $password;
			
			
			include('my_con.php');
			
			$query="SELECT ca_number password FROM customer_login where ca_number=$ca_number AND password='$password' ";
			$result=mysqli_query($conn,$query);
                        
                        
			$num = mysqli_num_rows($result);
			if($num==1){
                        session_start();
                        // store session data
                        $_SESSION['username']=$ca_number;
                        header("location:http://localhost/telepro/welcome_customer.php");
			}
            else{
            header("location:http://localhost/telepro/login.php?pwderr=0");
            }
			
}
else{
header("location:http://localhost/telepro/login.php?pwderr=1");

}
}
?>