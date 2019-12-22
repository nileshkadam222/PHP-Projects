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
    

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />


  <link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="js/facebox.js" type="text/javascript"></script>

  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'images/loading.gif',
        closeImage   : 'images/closelabel.png'
      })
    })

  </script>

</head>
<body>

<div id="tooplate_body_wrapper">
<div id="tooplate_wrapper">
	

    <div id="tooplate_header">
        <div id="site_title"><h1><a href="#"></a></h1></div>

        <div id="tooplate_menu" align="center">
      <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="javascript:alert('This is for complete version only')">About Us</a></li>
                <li><a href="javascript:alert('This is for complete version only')">Policy</a></li>
                <li><a href="javascript:alert('This is for complete version only')">Products</a></li>
                <li><a href="javascript:alert('This is for complete version only')">Contact</a></li>
                                     
                    <li><a href="forum.php" class="current">Forum</a></li>
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
    	<h2>Forum tab</h2>
        <p></p>	
	</div> <!-- end of middle -->
    
    <div id="tooplate_main">
    
    	<div class="col_w960">
        	
            
            <div class="col_w450 float_l">
     
 					<h4>Basic Forum</h4>
<p style="color: blue"><i>Tips: <br/>
1. Navigate the page numbers below. This forum page limits 3 post only so you need to click next to view other post.<br/>
2. You can view pictures, read e-books, and watch videos, etc. <br/>
3. Post only things that are related to services we offered.
 </i></p>

					<div class="cleaner h10"></div>
	<?php	
				$rowsPerPage =3;
				$pageNum = 1;
				if(isset($_GET['page']))
				{
				$pageNum = $_GET['page'];
				}
				else{ $page=1;}
				$offset = ($pageNum - 1) * $rowsPerPage;
	
	
	
	$resource= mysql_query("SELECT * FROM forums Limit $offset, $rowsPerPage");
					while($lotus = mysql_fetch_array($resource)){/////identify the name of customer
						$q0=$lotus['ForumID'];
						$q1=$lotus['CustomerID'];		$idd=mysql_query("Select * from customerinfo where CustomerID ='$q1'");
														while($lID=mysql_fetch_array($idd)){ $ds=$lID['Username'];}
						$q2=$lotus['Date_posted'];
						$q3=$lotus['Contents'];
						$q4=$lotus['Files'];
						echo '<div class="conn">';
						echo 'Posted by:'.$ds.'<br />';
						echo 'Date posted:'.$q2.'<br />';
						echo '<font color="#0000" >Contents: '.$q3.'</font><br /><div id="map">';
						
					    //detect and identify the pic or file	
$w=mysql_query("Select count(ForumID) as 'kk', ForumID, Files from forums where (Files like '%.png' or Files like '%.jpg') and ForumID='$q0' ");
while($ww=mysql_fetch_array($w)){ 
						$tpk1=$ww['Files'];
						$cv=$ww['kk'];}
////////////////////////////////////////////////////////////					
$x=mysql_query("Select count(ForumID) as 'kk', ForumID, Files from forums where (Files like '%.pdf' or Files like '%.swf') and ForumID='$q0' ");
while($xx=mysql_fetch_array($x)){ 
						$tpk=$xx['Files'];
						$cw=$xx['kk'];}
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////					
$x2=mysql_query("Select count(ForumID) as 'kk', ForumID, Files from forums where (Files like '%.mp4' or Files like '%.mp3' or Files like '%.mkv' or Files like '%.avi' or Files like '%.flv' or Files like '%.3gp') and ForumID='$q0' ");
while($xx2=mysql_fetch_array($x2)){ 
						$tpk2=$xx2['Files'];
						$cw2=$xx2['kk'];}
////////////////////////////////////////////////////////////

			if($cw2!=0){?>
                      <a rel="facebox" href="forum_watch.php?name=<?php echo $tpk2;?>" style="color:#004; background:#FC6; padding:4px; border-radius:6px;"><img src="images/icon_news.png" id="ee"/>View: <?php echo $tpk2;?></a><br />
                        <?php
                        }
						
						if($cw!=0){?>
                      <a href="forum_viewfile.php?name=<?php echo $tpk;?>" style="color:#004; background:#FC6; padding:4px; border-radius:6px;">View: <?php echo $tpk;?></a>
                        <?php
                        }
						else if($cv!=0){?>
                    	<a rel="facebox" href="<?php echo 'forum_folder/'.$tpk1; ?>"><img src="<?php echo 'forum_folder/'.$tpk1; ?>" width="200" height="200" id="ff" /></a>
						<?php }
						else{ 
							$h=mysql_query("Select * from forums where Files <> 'No content' and Files not like'%.swf' and ForumID='$q0' ");
							while($hq=mysql_fetch_array($h)){ 
							echo '<a href="forum_downloadfile.php?filename='.$hq['Files'].'" style="color:green"><font style="background:#CF6;padding:3px;border-radius:4px;"><img src="images/Next.png" id="ee"/>'.$hq['Files'].'</font></a>';
									}
						
						}
						$resource3= mysql_query("SELECT * FROM forums where ForumID='$q0' and CustomerID='$ied'");
						while($lotus3 = mysql_fetch_array($resource3)){
						echo '<font style="float:right;color:black"><a href="forum_delete.php?idelete='.$q0.'" style=" color:red">Delete</a> | <a href="forum_edit.php?iii='.$q0.'" rel="facebox" style=" color:red">Edit</a></font>';
						}
						
						echo '</div>';
					
						echo '</div>';
						}
						
////////////////////////////////////////////////////////////////////					     
      // how many rows we have in database
$query = "SELECT COUNT(ForumID) AS numrows from forums";
$result = mysql_query($query);
$row = mysql_fetch_array($result, MYSQL_ASSOC);
$numrows = $row['numrows'];
// how many pages we have when using paging?
$maxPage = ceil($numrows/$rowsPerPage); 

 // print the link to access each page
$self = $_SERVER['PHP_SELF'];
$nav = '';
echo 'Page ';
for($page = 1; $page <= $maxPage; $page++)
{
			if ($page == $pageNum)
			{
			$nav .= " $page "; // no need to create a link to current page
			}
			else
			{
			$nav .= " <a href=\"$self?page=$page\" style='color:green; font-size:14px; font-weight:bold'>".$page."</a> ";
			}
}



				 if ($pageNum > 1)
				{
				$page = $pageNum - 1;
				$prev = " <a href=\"$self?page=$page\" style='color:blue; font-size:14px;'>[Prev]</a> ";
				$first = " <a href=\"$self?page=1\" style='color:blue; font-size:14px;'>[First Page]</a> ";
				}
				else
				{
				$prev = ' '; // we're on page one, don't rint previous link
				$first = ' '; // nor the first page link
				}
if ($pageNum < $maxPage)
{
$page = $pageNum + 1;
$next = " <a href=\"$self?page=$page\" style='color:blue; font-size:14px;'>[Next]</a> ";
$last = " <a href=\"$self?page=$maxPage\" style='color:blue; font-size:14px;'>[Last Page]</a> ";
}
else
{
$next = ' '; // we're on the last page, don't print next link
$last = ' '; // nor the last page link
}


 // Print the navigation links
echo $nav . "<br />";
echo $next . "  " . $prev . "<br />";
echo $first . "  " . $last;
// Close the connection to the database
///////////////////////////////////////////////////////////////////	
					 ?>
    
    	<p></p>
        		<div id="contact_form">
        <hr style="color:#F03; border:3px dashed green" />
					<h4>Quick  Post Form</h4>

<p><i style="color:red">NOTE: Please make sure that there is no special characters to the name of the file you are uploading, as this may results to error, like not loading of the file or unable to locate the file.</i></p>
					<?php 
					if(!isset($_SESSION['CustomerID'])){ header('location:register_login.php'); }else{
					$resu= mysql_query("SELECT * FROM customerinfo where CustomerID='$ied'");
					while($row = mysql_fetch_array($resu)){ 
					$name=$row['Name'];
					$con=$row['Contact_no'];
					}
					}?>
					<form method="post" name="contact" action="forum1.php" enctype="multipart/form-data">
					
						<label for="author">Name:</label> <input type="text" value="<?php echo $name; ?>"id="author" name="author" class="required input_field" required/>
						<div class="cleaner h10"></div>
				
					
											
					              
						<div class="cleaner h10"></div>
							
						<label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required" required></textarea>
                        
                        	<label for="author">Add file:</label> <input type="file" id="file" name="file" class="required input_field" />
						<div class="cleaner h10"></div>				
												
						<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" style="background:#9C3;margin-right:7px" />
						<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" style="background:#9C3"/>
						
					</form>
			
				</div>
			
		            <div class="cleaner h30"></div>				
        <font style="color:#FFF">
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