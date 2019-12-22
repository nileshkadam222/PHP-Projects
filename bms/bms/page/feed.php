<?php session_start(); 
     $_SESSION["redirurl"]=$_SERVER['PHP_SELF'];
if ($_SESSION["auth"] == "")
{
header('Location: signin.php');
} 


?>



<html>
<head>
<?php include 'File_Include.php'; ?>
    <link rel="stylesheet" type="text/css" href="profile_cards/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../css/register.css"/>
    <script src="profile_cards/prefixfree.min.js"></script>
    <style>
        .outslide{
            margin: 144px 0px;
            position: absolute;
            width: 985px;
            height: 355px;
            background: #357ae8;
            background-color: #f2f1f1 ;
			box-shadow: 0 0 13px #868686;
                        
                       
			border-radius: 0px  0px 0px 0;
        }
        .slideshow1{
            
        }
        .showimages{
            position: absolute;
            margin: 500px 0px;
            width: 986px;
             background-color: #f2f1f1 ;
			box-shadow: 0 0 13px #868686;
                        
                       
			border-radius: 0px  0px 10px 0;
        }
        .bms_back5{
			
                        background-color: #f2f1f1 ;
			box-shadow: 0 0 13px #868686;
			border-radius: 10px 10px 0 0;
			height:130px;
			width:985px;
			margin-top:40px;
			margin-left:185px;
		}
                #bms_ename3{
    margin-top:0px;
     border-bottom:  2px solid #CE4912;
    border-radius: 8px;
    padding-bottom: 4px;
      font-size: 19px;
        font-weight: bolder;
        width: 100px;
        z-index: 1;
        letter-spacing: 2px;
}
#im{
    margin-left: 0px;
    margin-top: 5px;
     border: 2px  double  #990099; background: #cccccc
     
    
}
#im th{
     text-align: center;    
    width:200px;
    height: 30px;
    font-weight: bolder;
}

#im1{
    margin-left: 0px;
    font-size: 30px;
    color: #cc3300;
    background: #cccccc;
}
    </style>
</head>
<body>
   
<div class="bms_city"></div>
        <!--main Start-->
	<div class="bms_back5">
            <div class="bms_logo"> <img src="../images/bms_logo.png"></div>
			 <?php include './adminloginpopup.php'; ?>
             <div style="position: absolute;margin-top:75px ;margin-left: 850px ;">
                 <a href="#" class='vpb_general_button' onClick='vpb_show_login_box();'>Admin</a></div>		
					
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
                                       
                                
                    <div class="outslide">    
                        <div class="slideshow1">
                                                    <div class="container">
                                      <div id="content-slider">
                                      <div id="slider">
                                              <div id="mask">
                                          <ul>
                                              <li id="first" class="firstanimation">
                                          <a href="#">
                                              <img src="../images/h1.jpg" alt="Cougar"/>
                                          </a>
                                          <div class="tooltip">
                                          <h1>AKIRA</h1>
                                          </div>
                                          </li>

                                          <li id="second" class="secondanimation">
                                          <a href="#">
                                              <img src="../images/h2.jpg" alt="Lions"/>
                                          </a>
                                          <div class="tooltip">
                                          <h1>DHISHOOM</h1>
                                          </div>
                                          </li>

                                          <li id="third" class="thirdanimation">
                                          <a href="#">
                                              <img src="../images/h3.jpg" alt="Snowalker"/>
                                          </a>
                                          <div class="tooltip">
                                          <h1>FLYING JATT</h1>
                                          </div>
                                          </li>

                                          <li id="fourth" class="fourthanimation">
                                          <a href="#">
                                          <img src="../images/h4.jpg" alt="Howling"/>
                                          </a>
                                          <div class="tooltip">
                                          <h1>BANJO</h1>
                                          </div>
                                          </li>

                                          <li id="fifth" class="fifthanimation">
                                          <a href="#">
                                          <img src="../images/h5.jpg" alt="Sunbathing"/>
                                          </a>
                                          <div class="tooltip">
                                          <h1>MS DHONI</h1>
                                          </div>
                                          </li>
                                          </ul>
                                          </div>
                                          <div class="progress-bar"></div>
                                      </div>
                                  </div>
                              </div>
                    </div>
                     </div>
                    <div class="showimages">
                        <div  style=" margin-left: 0px;border: 2px  double  #990099; background: #cccccc">
                            <div style="margin-left: 300px">
                       <?php echo '<div id="im1">Feedback by User</div>';?>
                        <br>
                        <form name="" action="insertfeedback.php" method="post">
                                  <table border="0">
                            <tr><td><label>Enter Your Name :</label></td>
                                <td><input type="text" name="ucname" id="name" class="textbox" required title="Please enter your name"/><br/><br/></td></tr>
                                <tr><td ><label valign="top">Comments :</label></td>
                                    <td valign="down"><textarea name="comment" id="comments" cols="35" rows="5" class="textbox" required title="Please enter your valuable comment"></textarea> <br/><br/></td></tr>
                                <tr><td>&nbsp;</td></tr>
                                <tr><td align="right"><input type="Submit" class="button" value="Submit" name="feedback"/></td>
                                    <td align="center"><input type="reset" class="button" value="Reset"/></td></tr>
                               <tr><td>&nbsp;</td></tr>   <tr><td>&nbsp;</td></tr>   
                               
                            </table>
                        </form>
                        </div>
                        </div>
                        <?php
                
                        include('config.php');
                                $result = mysql_query("SELECT * FROM bms_feedbacktbl");
                                $c=0;
                                 
                                while($row = mysql_fetch_array($result))
                                {
                                echo '<div id="im">';
                               echo '<table border="1">
                                       <tr><th>Username : </th><td>'.$row['name'].'</td></tr>
                                        <tr><th>Feedback : </th><td>'.$row['feedback'].'</td></tr>    
                                         <tr><th>Date Of Feedback :</th><td>'.$row['dateFeed'].'</td></tr>
                                        </table>
                                    ';
                                echo '</div>';
                                $c++;
                                }
                        ?>
                      <div style="margin: 12px 0 0 0;">
                                    <?php include 'footer.php'; ?>
                                </div>
                    </div>
                                
                                
        </div>
       
        