<?php  session_start();  
include("config.php");

    
    $movie1=$_POST['movie1'];
	echo $movie1;

        //$movie1="Boss (U/A)";
    
    $sql = "SELECT movie_id FROM bms_movietbl WHERE movie_name LIKE '".$movie1."%'";
    $res = mysql_query($sql);
    
    while($row=  mysql_fetch_array($res))
    {
        
          $movid=$row['movie_id'];
         header('Location:movieinfo.php?a='.$movid);  
    }

?>