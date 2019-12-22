<?php session_start(); 
 ?>
<html>
<head>
<?php include 'File_Include.php'; ?>
    <link rel="stylesheet" type="text/css" href="profile_cards/css/style.css"/>
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
                                              <img src="../images/h3.jpg" alt="Snowalker"/>
                                          </a>
                                          <div class="tooltip">
                                          <h1>Flying Jatt</h1>
                                          </div>
                                          </li>

                                          <li id="second" class="secondanimation">
                                          <a href="#">
                                              <img src="../images/h2.jpg" alt="Lions"/>
                                          </a>
                                          <div class="tooltip">
                                          <h1>Dishoom</h1>
                                          </div>
                                          </li>

                                          <li id="third" class="thirdanimation">
                                          <a href="#">
                                              <img src="../images/h1.jpg" alt="Cougar"/>
                                          </a>
                                          <div class="tooltip">
                                          <h1>Akira</h1>
                                          </div>
                                          </li>

                                          <li id="fourth" class="fourthanimation">
                                          <a href="#">
                                          <img src="../images/h4.jpg" alt="Howling"/>
                                          </a>
                                          <div class="tooltip">
                                          <h1>Banjo</h1>
                                          </div>
                                          </li>

                                          <li id="fifth" class="fifthanimation">
                                          <a href="#">
                                          <img src="../images/h5.jpg" alt="Sunbathing"/>
                                          </a>
                                          <div class="tooltip">
                                          <h1>MS Dhoni</h1>
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
                        <div id="bms_ename" style="margin: 5px 15px;">Events</div>
                                 <ul id="push" class="profiles cf">
                                      <?php 
                                              include 'config.php';
                                            $query="select * from bms_eventtbl";
                                            $result=  mysql_query($query);  
			                    
                                             while($row =  mysql_fetch_array($result)){
                                                 
                                                 $img=$row['img1'];
                                                 $_SESSION["ie"]=$row['event_id'];
                                                 $mid= $_SESSION["ie"];
                                                 $ename=$row['event_name'];
                                                 $estart=$row['start_date'];
                                                 $efinish=$row['finish_date'];
                                                 ?>
                                     <?php  echo '   <li>
                                        <img class="pic" src="'.$img.'" alt="bookmyshow" />
                                         <ul class="info">
                                             <li><a href="event_test.php?a='.$mid.' "title="">'.$ename.'</a></li>
                                              <br>
                                             <li>Start date : '.$estart.'</li>
                                             <li>Finish Date : '.$efinish.'</li>
                               </ul>
                           </li>';
                                             }?>   
                       </ul>
                      <div style="margin: 15px 0;">
                                    <?php include 'footer.php'; ?>
                                </div>
                    </div>
                                
                                
        </div>