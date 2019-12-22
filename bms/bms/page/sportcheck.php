<?php  session_start();  
include("config.php");

    
    $movie1=$_POST['movie1'];

        //$movie1="Boss (U/A)";
    
    $sql = "SELECT sport_id FROM bms_sporttbl WHERE sport_name LIKE '".$movie1."%'";
    $res = mysql_query($sql);
    
    while($row=  mysql_fetch_array($res))
    {
        
          $movid=$row['sport_id'];
         header('Location:sport_test.php?a='.$movid);  
    }

?>