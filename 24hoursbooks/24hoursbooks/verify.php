<?php
session_start();
// Start Code for sign in --------------------------------------------------------------------------------------------------  

if(isset($_POST["loginid"]) and isset($_POST["password"]))
{                
    include ('includes/connect_db.inc.php');
    $user=mysql_query("select * from login");
    $username=$_POST["loginid"];
    $pass=$_POST["password"];
    $userLevel=5;
    if($user)
    {

        while($check=mysql_fetch_array($user))
        {
            if($check[1]==$username and $check[2]==$pass and $check[3]==0)
            {  
                $userLevel=0;
                $_SESSION['loggedUserEmail']=$username;
                $_SESSION['loggedUserName']=$check['login_name'];
                $_SESSION['loggedUserType']='customer';
                break;
            }
            else if($check[1]==$username and $check[2]==$pass and $check[3]==1)
            {                      
                $userLevel=1;
                $_SESSION['loggedUserEmail']=$username;
                $_SESSION['loggedUserName']=$check['login_name'];
                $_SESSION['loggedUserType']='operator';
                break;
            }
            else if($check[1]==$username and $check[2]==$pass and $check[3]==2)
            {                      
//                echo "<script> document.getElementById('display-message').style.display='none';</script>";
                $userLevel=2;
                $_SESSION['loggedUserEmail']=$username;
                $_SESSION['loggedUserName']=$check['login_name'];
                $_SESSION['loggedUserType']='admin';
                break;
            }
        }   
        if($userLevel==0)
        {
            echo "<script>location.href='myaccount.php?view=my-profile';</script>";
        }
        else if($userLevel==1)
        {
            echo "<script>location.href='dataentry.php';</script>";
        }
        else if($userLevel==2)
        {
            echo "<script>location.href='admin.php';</script>";
        }
        else
        {
            echo "<form name='frm' method='post' action='login.php'>";
            echo "<input type='text' name='login' value='false'></form>";
            echo "<script>document.forms[0].submit();</script>";
        }
    }

}
// End Code for sign in ----------------------------------------------------------------------------------------------------
?>
