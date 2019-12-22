<?php
include("../includes/connect_db.inc.php");
$email=$_GET['email'];
$query="select login_id from login";
$result=mysql_query($query);
$found=0;
if($result)
{
    while($row=mysql_fetch_array($result))
    {
        if($row[0]==$email)
        {
            $found=1;
            break;
        }
    }
    if($found==1)
        echo "Email ID already exist try another email-id";
    
    
}
?>
