<?php  session_start();  
include("config.php");

    
    $movie1=$_POST['movie1'];
	echo $movie1;

        //$movie1="Boss (U/A)";
    
    $sql = "SELECT event_id FROM bms_eventtbl WHERE event_name LIKE '".$movie1."%'";
    $res = mysql_query($sql);
    
    while($row=  mysql_fetch_array($res))
    {
        
          $movid=$row['event_id'];
         header('Location:event_test.php?a='.$movid);  
    }

?>