<?php
session_start();
include("../includes/connect_db.inc.php");
if(isset($_GET['action']))
{
    if($_GET['action']=='with-password' )
    {
        $email=$_GET['email'];
        $pwd=$_GET['pwd'];
        $query="select * from login";
        $result=mysql_query($query);
        $found=0;
        if($result)
        {
            while($row=mysql_fetch_array($result))
            {
                if($row['login_id']==$email and $row['login_pwd']==$pwd)
                {
                    $_SESSION['loggedUserEmail']=$row['login_id'];
                    $_SESSION['loggedUserName']=$row['login_name'];
                    $_SESSION['loggedUserType']='customer';
                    $found=1;
                    break;
                }
            }
            if($found==1)
                echo "valid-user";
            else
                echo "invalid-user";
        }
    }
    if($_GET['action']=='without-password')
    {
        $email=$_GET['email'];
        $query=  mysql_query("select * from login where login_id='$email'");
        $row=  mysql_fetch_array($query);
        if($row)
            echo "email-exist";
        else
            echo "valid-user";
    }
}

?>
