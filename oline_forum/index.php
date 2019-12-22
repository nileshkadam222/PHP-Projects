<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="images/iconNHP.png" media="screen" type="image/png" title="NHP" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NHP - Forum Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" />    

</head>
<body>

<div id="tooplate_body_wrapper">
<div id="tooplate_wrapper">
	

    <div id="tooplate_header">
        <div id="site_title"><h1><a href="#"></a></h1></div>

        <div id="tooplate_menu" align="center">
      <ul>
                <li><a href="index.php"  class="current">Home</a></li>
                <li><a href="javascript:alert('This is for complete version only')">About Us</a></li>
                <li><a href="javascript:alert('This is for complete version only')">Policy</a></li>
                <li><a href="javascript:alert('This is for complete version only')">Products</a></li>
                <li><a href="javascript:alert('This is for complete version only')">Contact</a></li>
                                     
                    <li><a href="forum.php">Forum</a></li>
                    <li><a href="javascript:alert('This is for complete version only')">Customize</a></li>
                    <li><a href="javascript:alert('This is for complete version only')">Account</a></li>
                   <?php
				  require "connect.php";
				   session_start();
if(!isset($_SESSION['CustomerID'])){ echo'<li><a href="register_login.php">Login</a></li>'; $ied=0;}
else{$ied=$_SESSION['CustomerID'];
					$resu= mysql_query("SELECT * FROM customerinfo where CustomerID='$ied'");
					while($row = mysql_fetch_array($resu)){ 
					$myusername=$row['Username'];
					if((strlen($myusername))>10){
					echo'<li><a href="logout.php">Logout ('.substr($myusername,0,10).'..)</a></li>';  
					}
					else{ echo'<li><a href="logout.php">Logout ('.$myusername.')</a></li>';  }
					
					 } 
			
					 
    }

?>  
            </ul>  <a class="social_btn facebook" href="http://www.facebook.com">&nbsp;</a>
        <a class="social_btn twitter" href="http://www.twitter.com">&nbsp;</a>   	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->	
 
 <img src="images/logo.png" style="alignment-adjust:central">
     <div class="sun"><OBJECT width="100" height="60" type="application/x-shockwave-flash" data="<?php echo'images/glow.swf';?>">
        								
                                         <PARAM name="wmode" value="transparent"/> 
                                         <PARAM name="quality" value="high"/> 
                                         <param name="swfversion" value="9.0.115.0">
   										 <param name="expressinstall" value="Scripts/expressInstall.swf">
                             	<img src="images/butterfly.gif" width="90" height="90" id="dsc"/>
                     </OBJECT></div>
    <div id="tooplate_middle_subpage">
	<font style="color:#FFF">Most of the links have been removed. Please click forum at the top.<br/></font>
    	</div>
<div style="position:fixed; width:100%; margin-top:-150px">
   <marquee direction="down" height="250" behavior="alternate" >
   <marquee direction="right"> <img src="images/butterfly.gif" width="100" height="100" />
   </marquee>
   </marquee> 
   </div>   To see screenshots <a href="images/ultimate.png" rel="facebox" style="position:relative">click here</a>
		            <div class="cleaner h30"></div>				
        <font style="color:#FFF; visibility:hidden" >
LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL </font>  
                <div class="cleaner"></div>
            </div>
            
            
            
            
            
            <div class="cleaner"></div>
		</div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
    	<div class="col_w200 float_l">
        	<h4>Pages</h4>
            <ul class="tooplate_list">
                <li><a href="#">Home</a></li>
                <li><a href="#">Terms & Condition</a></li>
                <li><a href="#">My Account</a></li>
            </ul>
        </div>
        <div class="col_w200 float_l">
        	<h4>Cool Links</h4>
            <ul class="tooplate_list"> 
				<li><a href="#">Customize Flower arrangement</a></li>
                <li><a href="#">View customized products</a></li>
               
            </ul>
        </div>
		<div class="col_w200 float_l">
        	<h4>Other source </h4>
            <ul class="tooplate_list">
	            <li><a href="#">Orchidarium</a></li>
                <li><a href="#">Manila Seedling </a></li>
                <li><a href="#"> Cartimar </a></li>
         
            </ul>
        </div>
        <div class="col_w200 float_r col_last">
        	<h4>Contact Us</h4>
            <p>Email: lelianarvas65@gmail.com, <br />
            Phone: 09092488688 (smart)</p>
            <p>
            </p>
        </div>
        
        <div class="cleaner"></div>
    </div>
</div>

<div id="tooplate_copyright_wrapper">
	<div id="tooplate_copyright">
    	
	Created by Matthew Mascarenas © 2015 <a href="#">NHP</a>
		
    </div>
</div>
</body>
</html>