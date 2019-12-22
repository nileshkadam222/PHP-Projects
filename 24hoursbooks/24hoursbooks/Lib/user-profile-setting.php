<?php
session_start();
include_once("../includes/connect_db.inc.php");
// functions


//end functions

if(isset($_GET['current-pwd']) and isset($_GET['new-pwd']) and isset($_SESSION['loggedUserEmail']))
{
    $currentPwd=$_GET['current-pwd'];
    $newPwd=$_GET['new-pwd'];
    $email=$_SESSION['loggedUserEmail'];
    $result=  mysql_query("select * from login where login_id='$email'");
    $row=  mysql_fetch_array($result);
    if($row)
    {
        if($currentPwd==$row['login_pwd'])
        {
            $result=mysql_query("UPDATE login SET login_pwd='$newPwd' WHERE login_id='$email'");
            echo "password-changed";
        }
        else
            echo "password-not-changed";
    }
}
if(isset($_SESSION['loggedUserEmail']) and isset($_GET['name']) and isset($_GET['add-line1']) and isset($_GET['add-line2']) and isset($_GET['city']) and isset($_GET['state']) and isset($_GET['pin-code']) and isset($_GET['mob-no']))
{
    $email=$_SESSION['loggedUserEmail'];
    $name=$_GET['name'];
    $addLine1=$_GET['add-line1'];
    $addLine2=$_GET['add-line2'];
    $city=$_GET['city'];
    $state=$_GET['state'];
    $pinCode=$_GET['pin-code'];
    $mobNo=$_GET['mob-no'];
    $result=mysql_query("UPDATE user_profile SET user_name='$name',add_line1='$addLine1',add_line2='$addLine2',city='$city',state='$state',pin_code='$pinCode',mob_no='$mobNo' WHERE email_id='$email'");
    if($result)
        echo "profile-updated";
}

?>
