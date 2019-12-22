
<?php
session_start();
 
?>
 <?php 
         include 'config.php';
        if(isset($_POST['feedback']))
            {
               
                $email1=$_SESSION['auth'];
                $cname=$_POST['ucname'];
               $comm=$_POST['comment'];
               $query="insert into bms_feedbacktbl(email,name,feedback)values('".$email1."','".$cname."','".$comm."')";
                $result= mysql_query($query) or die("query failed".mysql_error());
            }
            header("location: feed.php");
        ?>


        