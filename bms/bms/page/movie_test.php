<?php session_start();  ?>


<html>
<head>
<?php include 'File_Include.php'; ?>
</head>
<body>
   
<div class="bms_city"></div>
        <!--main Start-->
	<div class="bms_back1">
            
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
				<!--	End-->

                    

                                
                

                                <!--slider -->
                                <div id="slide_name" >Hindi</div>
                                
                                <div id="content">
                                    <div class="gallery-wrap">
                                        <div class="gallery__controls clearfix">
                                             <div class="gallery clearfix">
                                              <?php 
                                              include 'config.php';
                                            $query="select * from bms_movietbl";
                                            $result=  mysql_query($query);  
			                    
                                             while($row =  mysql_fetch_array($result)){
                                                 $mid=$row['movie_id'];
                                                 $_SESSION['im']=$row['movie_id'];
                                                 $img=$row['img1'];
                                                 ?>
                                                 <div class="gallery__item">
                                                    <ul>
                                                    <li>  <?php
                                                        echo '<a href="movieinfo.php?a='.$mid.'" class="gallery__link" >';
                                                        
                                                          echo ' <img src="'.$img.'" class="gallery__img" alt=""  /> ';
                                                          echo ' </a>';
                                                        ?>
                                                       </li>
                                                    </ul>
                                                  </div>
                                                  <?php }?>

				                   </div> <!-- .gallery -->
                                                    <div href="#" class="gallery__controls-prev">
                                                        <img src="side/right_arrow.png" alt="" />
                                                     </div>
                                                    <div href="#" class="gallery__controls-next">
                                                        <img src="side/left_arrow.png" alt="" />
                                                     </div>  
                                            </div> <!-- .gallery__controls -->
                                        </div> <!-- .gallery-wrap -->
                                 </div> <!-- #content -->
                                   <!--End -->
                                   
                                   
                                   
                                 
                                   
                                   <div style="margin: 500px 0px;position: absolute;">
                                        <?php
                               include 'footer.php';
               ?>
                                   </div>
                                         
                             
                               
                               
	</div>