<?php session_start();
include("config.php");
$msg=@$_GET['msg'];

if (isset($_POST['signin']))
{
    $umail = $_POST['umail'];
    $password = $_POST['upass'];
    
    $sql = "SELECT * FROM bms_customertbl WHERE email='".$umail."' AND pass='".$password."' LIMIT 1";
    
    $res = mysql_query($sql);
    if (mysql_num_rows($res) == 1) 
    {
            $_SESSION["auth"]=$umail;
            $quiry="select custid,fname from bms_customertbl where email='".$umail."'";
            $result= mysql_query($quiry);
            while($row =  mysql_fetch_array($result))
            {
                    $_SESSION["id"]=$row['custid'];
                    $_SESSION["name"]=$row['fname'];
            }
            
           if(isset($_SESSION["redirurl"])) 
             $url = $_SESSION["redirurl"]; // holds url for last page visited.
            else 
            $url = "movie_test.php"; // default page for
            header("Location:$url");
     
        
          
    } 
    else 
    {
        $msg="User Name Or Password invailid";
        header('Location:signin.php?msg='.$msg);  
        exit();
     }

}
?>



<html>
<head>
<?php include 'File_Include.php'; ?>
    
   <link rel="stylesheet" type="text/css" href="../css/register.css"/>
    <link href="loginpopup/css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="loginpopup/js/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="loginpopup/js/vpb_script.js"></script>
    <style>
        .button {
   border-top: 1px solid #96d1f8;
   background: #65a9d7;
   background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
   background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
   background: -moz-linear-gradient(top, #3e779d, #65a9d7);
   background: -ms-linear-gradient(top, #3e779d, #65a9d7);
   background: -o-linear-gradient(top, #3e779d, #65a9d7);
   padding: 8px 16px;
   -webkit-border-radius: 13px;
   -moz-border-radius: 13px;
   border-radius: 13px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: #1ec938;
   font-size: 18px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   }
.button:hover {
   border-top-color: #782852;
   background: #782852;
   color: #ffffff;
   }
.button:active {
   border-top-color: #6a8596;
   background: #6a8596;
   }
    </style>
    <style>
        .mon{
            position: absolute;
            margin: 160px 20px;
           
        }
        .orat{
            position: absolute;
            border: 1px solid background;
            width: 315px;
            height: 60px; background: #ffffff;
            border-top-left-radius: 10px;
              -webkit-border-bottom-left-radius: 10px;
        }
        .hrt{
            margin: 10px 80px;
        }
        .hrt img{
                width: 30px;
        }
        
        .rat{
            position: absolute;
            margin: 0 316px;
              border: 1px solid background;
               width: 343px;
            height: 60px; background: #ffffff;
             border-top-right-radius: 10px;
              -webkit-border-bottom-right-radius: 10px;
        }
        .rat img{
            height: 30px;
            width: 250px;
           
        }
         .g{
            margin: 9px 40px;
        }
        .rat1{
            position: absolute;
            margin: 0 660px;
              border: 1px solid background;
               width: 280px;
            height: 60px; background: #ffffff;
            
        }
        .moinfo{
            position: absolute;
            margin: 240px 20px;
        }
        .mimg{
            position: absolute;
              border: 1px solid background;
              
            width: 280px;
            height: 300px;
            border-top-left-radius: 10px;
            -webkit-border-bottom-left-radius: 10px;
           
            
        }
        .mimg img{
            width: 277px;
            height: 298px;
            border: 1px solid #ffffff;
            border-radius: 10px; 
        }
       
        .minfo{
            position: absolute;
             border: 1px solid background;
             margin: 0 281px;
              width: 658px;
              height: 300px;
              border-top-right-radius: 10px;
              -webkit-border-bottom-right-radius: 10px;
        }
        .bd{
             font-weight: 600;
             text-align: left;
             color: #666600;
        }
        .bd1{
              color: #666600;
            text-align: center;
             font-weight: 600;
        }
        .dsc{
            color: #666666;
            width: 150px;
            font-size: 16px;
        }
    </style>
    
</head>
<body>
  
<div class="bms_city"></div>
        <!--main Start-->
	<div class="bms_back2">
            <div class="bms_logo"> <img src="../images/bms_logo.png"></div>
					<div  class="bms_search">
						<form>
							<input type="text" placeholder="movie,offer,sport" name="search1">
							
						</form>	
					</div>
					
				<!--Menu bar-->
				<div class="bms_menu">

                <ul id="css3menu1" class="topmenu" style="margin-left: 0px;">
                    <li class="topfirst"><a href="index.php" style="width:78px;height:34px;line-height:30px;"><img src="../images/home.png" alt=""/>&nbsp</a></li>
                    <li class="topmenu"><a href="movie_test.php" style="width:78px;height:34px;line-height:34px;"><span>MOVIES</span></a>
                    </li>
                    <li class="topmenu"><a href="eventpage.php" style="width:78px;height:34px;line-height:34px;">EVENTS</a></li>
                     <li class="topmenu"><a href="sportspage.php" style="width:78px;height:34px;line-height:34px;">SPORTS</a></li>
                    <li class="topmenu"><a href="feed.php" style="width:78px;height:34px;line-height:34px;">FEEDBACK</a></li>
                   
                    <?php
                if(isset($_SESSION['name'])){
                echo '<li class="topmenu"><a href="signout.php" style="width:77px;height:34px;line-height:34px;">SIGN OUT</a></li>';
                //echo '<li><a rel="#">';
                echo '<li class="topmenu"><a href="#" style="width:110px;height:34px;line-height:34px;">';
                echo " Welcome: ";
                echo @$_SESSION['name']; 
                }
                else{
                echo '<li class="topmenu"><a href="signin.php" style="width:77px;height:34px;line-height:34px;">SIGN IN</a></li>';
                }
                echo '</a></li>';
                ?>     
                    
                </ul>	

            </div>
				<!--	End-->


<?php

include 'config.php';
$md=@$_GET['a'];
$me=$md;
$query="select * from bms_movietbl where movie_id=$me";
$result=  mysql_query($query);  
while($row =  mysql_fetch_array($result))
  {
    $mid=$row['movie_id'];
   $mtype = $row['movie_type'];
  $mname = $row['movie_name'];
  $mrd = $row['release_date'];
  $mdu = $row['duration'];
  $mdir = $row['director'];
   $mg = $row['genre'];
  $mcc = $row['cast_crew'];
  $mdesc = $row['description'];
  
  $mor = $row['overall_rating'];
  $mr = $row['rating'];
  $_SESSION['or']=$row['overall_rating'];
  $_SESSION['r']=$row['rating'];
  
  $mimg = $row['img1'];

  echo "                        <div class='mon'>
                                    <div class='orat'><div class='hrt'>
                                                <img src='../images/heart.gif'><span style='font-size:40px; color: #666666;margin:0 0;'>$mor</span>
                                                
                                       </div>
                                    </div>
                                    ";?>
                                <?php if($mr==0){?>
                                    <div class='rat'>
                                        <img class='g' src='../images/ratingimages/0.jpg'>
                                </div><?php }else if($mr==1){?>
                                        <div class='rat'>
                                            <img class='g' src='../images/ratingimages/1star.jpg'>
                                        </div><?php }else if($mr==2){?>
                                        <div class='rat'>
                                            <img class='g' src='../images/ratingimages/2star.jpg'>
                                        </div><?php }else if($mr==3){?>
                                        <div class='rat'>
                                            <img class='g' src='../images/ratingimages/3star.jpg'>
                                        </div><?php }else if($mr==4){?>
                                        <div class='rat'>
                                            <img class='g' src='../images/ratingimages/4star.jpg'>
                                        </div><?php }else{?>
                                        <div class='rat'>
                                            <img class='g' src='../images/ratingimages/5star.jpg'>
                                        </div>
                                        <?php }?>
                                <?php echo " 
                                     
                                </div>
                                
                            <div class='moinfo'>
                                    <div class='mimg'>
                                        <img src='$mimg'>
                                    </div>
                                    <div class='minfo'>
                                        <div style='height:50px;'><div style='height: 40px;margin:0 80px;'>
                                            <table>
                                                <tr>
                                                    <th><font size='6'>$mname</font></th> 
                                                </tr>
                                            </table>
                                        </div>
                                        </div>
                                        <div style='width: 685px;margin:0 10px; '>
                                            <table border='1'>
                                                <tr>
                                                <th class='bd' width='130' height='30'>Release Date :</th>
                                                <td> $mrd</td>
                                                <th class='bd1' width='200' >Duration :</th>
                                                <td class='dsc'> $mdu</td>
                                                </tr>
                                                <tr>
                                                <th class='bd' width='130' height='30'>Director :</th>
                                                <td class='dsc'> $mdir</td>
                                                <th class='bd1' width='200' >Language :</th>
                                                <td class='dsc'> $mtype</td>
                                                </tr>
                                                <tr>
                                                <th class='bd' width='130'height='40' >Genre :</th>
                                                <td class='dsc'>$mg </td>
                                                </tr>
                                                <tr>
                                                <th class='bd' width='130'height='40' >Cast Crew :</th>
                                                <td colspan='3' class='dsc'>$mcc 
                                                </td>
                                                </tr>
                                                <tr>
                                                   <th class='bd' width='130'height='30' >description :</th>
                                                    <td width='300' colspan='3' class='dsc'>$mdesc
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>";
  
}   
                  if(isset($_SESSION['name'])){
                echo "<div style='margin:570px 400px;position: absolute; '><form action=mcdetail.php>";
                echo "<input type='hidden' name='mid' value=$mid ><input type='submit' class='button' value='Book' >";
                  echo "</form></div>";}
                else {
                                    echo "<div style='margin:570px 400px;position: absolute;>
                                    <a href='javascript:void(0);' class='vpb_general_button' onClick='vpb_show_login_box();'>Book</a>
                                      </div>";
                }
?>
                    <div id="vpb_pop_up_background"></div><!-- General Pop-up Background -->
                    <!-- Login Box Starts Here -->
                                    <div id="vpb_login_pop_up_box" >
                                        <div align="center" valign="middle" style="font-family:Verdana, Geneva, sans-serif; font-size:15px;color: #cc0066;font-weight:bold;background-color: #cccccc;border-radius: 10px;height: 25px;">Please  Login First...</div><br clear="all">
                                        <form name="" action="" method="post">
                                            <table>
                                                 <tr><td><label><b>Email id : </b></label></td>
                                                 <td><input placeholder="Enter valid email" type="email" size="40" id="email1" name="umail" class="textbox" required></td></tr>
                                                 <tr><td>&nbsp;</td></tr>
                                                 <tr><td><label for="password" class="label"><b>Password : </b></label></td>
                                                 <td><input placeholder="Enter Password" class="textbox" required maxlength="15" type="password" name="upass" id="password1"/></td></tr>
                                                <tr><td colspan="2" align="center"><br/><input type="reset" class="button" value="Reset"/>&nbsp;&nbsp;&nbsp;<input type="submit" name="signin" value="Sign In" class="button"/></td></tr>
                                            </table> 
                                            <br>
                                            <div>New User?<font color="#3333ff" ><a href="registerPage.php"  style="text-decoration: none;"> Click Here</a></font></div>
                                         </form>
                                     </div>             
                                
        <div style="margin: 640px 0px;position: absolute;">
                                        <?php
                               include 'footer.php';
               ?>
                                   </div>
        </div>



