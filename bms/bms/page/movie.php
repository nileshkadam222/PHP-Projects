<html>
<head>
<?php include 'File_Include.php'; ?>
</head>
<body>
   
<div class="bms_city"></div>
        <!--main Start-->
	<div class="bms_back1">
            <div class="bms_logo"> <img src="../images/bms_logo.png"></div>
					<div  class="bms_search">
						<form>
							<input type="text" placeholder="movie,offer,sport" name="search1">
							<span class="search_tbutton"><input type="button" ></span>
						</form>	
					</div>
					
				<!--Menu bar-->
				<div class="bms_menu">

                <ul id="css3menu1" class="topmenu" style="margin-left: 0px;">
                    <li class="topfirst"><a href="main.php" style="width:78px;height:34px;line-height:30px;"><img src="../images/home.png" alt=""/>&nbsp</a></li>
                    <li class="topmenu"><a href="movie.php" style="width:78px;height:34px;line-height:34px;"><span>MOVIES</span></a>
                    </li>
                    <li class="topmenu"><a href="eventpage.php" style="width:78px;height:34px;line-height:34px;">EVENTS</a></li>
                     <li class="topmenu"><a href="sportspage.php" style="width:78px;height:34px;line-height:34px;">SPORTS</a></li>
                    <li class="topmenu"><a href="feed.php" style="width:78px;height:34px;line-height:34px;">FEEDBACK</a></li>
                    
                    <?php
                if(isset($_SESSION['auth'])){
                echo '<li class="topmenu"><a href="signout.php" style="width:77px;height:34px;line-height:34px;">SIGN OUT</a></li>';
                //echo '<li><a rel="#">';
                echo '<li><a href="#" style="width:77px;height:34px;line-height:34px;">';
                echo " Welcome: ";
                echo @$_SESSION['auth']; 
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
        $query="select img1 from bms_movietbl";
        $result=  mysql_query($query);
//        $num= mysql_num_rows($result);
        
  
			                           while($row =  mysql_fetch_array($result)){?>
                                                 <div class="gallery__item">
                                                    <ul>
                                                    <li> <a href="#" class="gallery__link" >
                                                        <?php 
                                                          echo ' <img src="'.$row['img1'].'" class="gallery__img" alt=""  /> '
                                                        ?>
                                                        </a></li>
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
                                   
                                   
                                   
                                 
                                   <div id="slide_name1" >English</div>
                                 <div id="content1">
                                    <div class="gallery-wrap">
                                        <div class="gallery__controls clearfix">
                                             <div class="gallery clearfix">
			                          
                                                 <div class="gallery__item">
                                                    <ul>
                                                    <li> <a href="#" class="gallery__link" >
                                                          <img src="../images/hindi/h1.jpg" class="gallery__img" alt=""  /> '
                                                         </a></li>
                                                    </ul>
                                                  </div>
                                                
				                   </div> <!-- .gallery -->
                                                    <div href="#" class="gallery__controls-prev">
                                                        <img src="slide1/right_arrow.png" alt="" />
                                                     </div>
                                                    <div href="#" class="gallery__controls-next">
                                                        <img src="slide1/left_arrow.png" alt="" />
                                                     </div>  
                                            </div> <!-- .gallery__controls -->
                                        </div> <!-- .gallery-wrap -->
                                 </div> <!-- #content -->
                                   <!--End -->
                                   
                                         
                             
                               
                               
	</div>
	<!--main End-->
       
        
            
</body>
</html>

