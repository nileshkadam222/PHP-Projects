  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
  <HTML>
   <HEAD>
    <TITLE> New Document </TITLE>
    <META NAME="Generator" CONTENT="EditPlus">
    <META NAME="Author" CONTENT="">
    <META NAME="Keywords" CONTENT="">
    <META NAME="Description" CONTENT="">
    <style>
	  #time{
	  float:right;
	  font-family:sans-serif;
	  color:#333333;
	  height: auto;
	  padding:1px 0px 1px 0px;
	  }
	  #login_link{
	  text-decoration:none;
	  color:white;
	  background-color: #333333;
	  font-size: 16px;
	  font-style: normal;
	  padding: 10px 15px 10px 15px;
	   }
	   #greet{
	  font-size: 15px;
	  font-family:lucida sans;
	  text-align: left;
	  color:#545C64;
	  font-weight:bold;
	  padding-bottom:0px;
	  
	   }
	
	  
	  
  
   </style>
   </HEAD>

   <BODY>
    <?php
    session_start();
    if(isset($_SESSION['username'])){
     $username=$_SESSION['username'];
      $msg="Welcome ".strtoupper($username);
      $url="logout.php";
      $log="Logout";
       }
      else{
      $msg="Welcome user ";
      $url="login.php";
      $log="Login";
      }
      ?>
   
   
   <div id="banner" name="banner"  width="1000px">
    <img width="1000px" src="./images/Banner.png" />
    <span id="greet"><?php echo $msg; ?></span>
    <span id="time" style="display: block;" name="time"><?php date_default_timezone_set("Asia/Kolkata"); 
echo date('l F j, g:i a'); ?> &nbsp;  <a id="login_link"  href="<?php echo $url; ?>"><?php echo $log ?></a></span>
  
    </div>
    
   </BODY>
  </HTML>
