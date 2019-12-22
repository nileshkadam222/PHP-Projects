<?php
session_start();
 include 'config.php';
?>
<html>
    <head>
        <style>
           
        </style>
        <link rel="stylesheet" href="../css/style_menu.css" type="text/css" />

        <link rel="stylesheet" type="text/css" href="Home_slider/style.css" />
        <script type="text/javascript" src="Home_slider/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="Home_slider/logic.js"></script>

        <link rel="stylesheet" href="../css/coin-slider-styles.css" type="text/css" />

        <link rel="stylesheet" type="text/css" href="../css/top.css"  />
        <script type="text/javascript" src="../js/jquery-1.3.2.js" ></script>
        <script type="text/javascript" src="../js/jquery-1.7.2.min.js" ></script>
        <script type="text/javascript" src="../js/jquery.min.js" ></script>
        <script type="text/javascript" src="../js/coin-slider.min.js" ></script>


        <script type="text/javascript" src="../js/jquery.quickflip.js" ></script>
        <link rel="stylesheet" type="text/css" href="../css/styles.css" />
        
          <link rel="stylesheet" type="text/css" href="../css/register.css"/>
          
        <script type="text/javascript" >
            $('document').ready(function() {
                $('#flip-container').quickFlip();

                $('#flip-navigation li a').each(function() {
                    $(this).click(function() {
                        $('#flip-navigation li').each(function() {
                            $(this).removeClass('selected');
                        });
                        $(this).parent().addClass('selected');
                        var flipid = $(this).attr('id').substr(4);
                        $('#flip-container').quickFlipper({}, flipid, 1);

                        return false;
                    });
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#coin-slider').coinslider({width: 630, height: 300, navigation: true, delay: 2000, spw: 7, sph: 5, sDelay: 30, opacity: 0.7, titleSpeed: 500, effect: 'swirl', links: true, hoverPause: true});
            });
        </script>
       
        
    </head>
    <body>
        <div id="wrapper1"></div>
       
        <div class="bms_city"></div>
        <!--main Start-->
        <div class="bms_back">
            <div class="bms_logo"> <img src="../images/bms_logo.png"></div>
            <div  class="bms_search">
               
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

            <!--Flipping tabs -->
            <div style="position:absolute;width:320px;margin:157px 15px;font-weight:bold;font-size:20px;border-bottom:1px solid;-webkit-box-shadow: 0 9px 10px -9px black;">
                Instant Ticket Booking</div>

            <div style="position:absolute;width:370px;height:300px;background-color:none;border-color:orange;margin:185px 0px;">
                <div id="flip-tabs" style="border-color:orange;" >
                    <ul id="flip-navigation" >
                        <li class="selected"><a href="#" id="tab-0"  >Movies</a></li>
                        <li><a href="#" id="tab-1" >Events</a></li>
                        <li><a href="#" id="tab-2" >Sports</a></li>
                    </ul>
                    <div id="flip-container" >
                        <div>
                            <ul class="orange" id="orange1">

                                             <form method="post" action="moviecheck.php">
                                            <table>
                                             
                                                <tr>
                                                    <td><select name="movie1" >
                                                            <option>AKIRA</option>
                                                            <option>MS DHONI</option>
                                                            <option>TAFREE</option>
                                                            <option>BANJO</option>
                                                            <option>PARCHED</option>
                                                            <option>DHISHOOM</option>
                                                            <option>PINK</option>
                                                            <option> RAAZ REBOOT</option>
                                                            <option>FLYING JATT</option>
                                                            <option>SULTAN</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr><td>&nbsp;</td></tr>
                                             <tr><td><input type="submit" value="Search" name="movie" class="button"></td></tr>
                                        
                                         </table> 
                                            </form>
                                
                                
                               

                            </ul>
                        </div>
                        <div>
                            <ul class="green" id="orange1">
                                 <form method="post" action="eventcheck.php">
                                            <table>
                                             
                                                <tr>
                                                    <td><select name="movie1" >
                                                    <option>Double bill</option>
                                                            <option>Great Golden Circus</option>
                                                            <option>Back Benchers</option>
                                                            <option>Moving Platform`s SALESMAN RAMLAL</option>
                                                            <option>Kenneth Sebastian, Neville Shah, Aditi Mittal (A)</option>
                                                            <option>Mental Martians Live Set + AlgoRhythm + Mnkyslt</option>
                                                            
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr><td>&nbsp;</td></tr>
                                             <tr><td><input type="submit" value="Search" name="event" class="button"></td></tr>
                                        
                                         </table> 
                                            </form>
                              	
                            </ul>
                        </div>
                        <div>
                            <ul class="blue" id="orange1">
                                <form method="post" action="sportcheck.php">
                                    
                                     <table>
                                             
                                                <tr>
                                                    <td><select name="movie1" >
                                                            <option>BOWLING AT PRIME TIME</option>
                                                            <option>EVEREST BASE CAMP</option>
                                                            <option>PISTAL SHOOT</option>
                                                            <option>FOOT BALL HALLA BOL</option>
                                                           <
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr><td>&nbsp;</td></tr>
                                             <tr><td><input type="submit" value="Search" name="sport" class="button"></td></tr>
                                        
                                         </table> 
                                   
                                </form>			
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End-->

            <!--Coin slider -->
            <div id="bmstop" style="width:615px;height:310px;position:absolute;margin:144px 370px 0px;">
                <div id="coin-slider">
                    <a href="#">
                        <img src="../images/s1.jpg"><span>SunburnGoa2016</span>
                    </a>
                    <a href="#">
                        <img src="../images/s2.jpg"><span>Hardwall</span>
                    </a>
                    <a href="#">
                        <img src="../images/s3.jpg"><span>Cold Play</span>
                    </a>
                    <a href="#">
                        <img src="../images/s4.jpg"><span>Afrojack</span>
                    </a>
                    <a href="#">
                        <img src="../images/s5.jpg"><span>Arjit sigh</span>
                    </a>
                   
                </div>
                <!--End-->
            </div>
            
            
            <?php 
            $query="select * from bms_eventtbl";
               $result=  mysql_query($query);
                while($row =  mysql_fetch_array($result)){
                    $img[]=$row['img1'];
                    $_SESSION["ie"]=$row['event_id'];
                    $mid[]= $_SESSION["ie"];
                }
            ?>
            
            <!--Events -->
            <div id="event">
                <div id="bms_ename">Events</div>
                <div class="bms_event">
                    <ul>
                        <?php for($i=0;$i<6;$i++){
                            echo'<li><a href="event_test.php?a='.$mid[$i].' "title=""><img class="pic" src="'.$img[$i].'" alt="bookmyshow" /></a></li>';
                        }?>
                      
                    </ul>
                </div>
            </div>
            <!--End -->
            
            <?php 
            $query1="select * from bms_movietbl";
               $result1=  mysql_query($query1);
                while($row =  mysql_fetch_array($result1)){
                    $img1[]=$row['img1'];
                    $mor[]= $row['overall_rating'];
                    $mname[] = $row['movie_name'];
                    $_SESSION["ie"]=$row['movie_id'];
                    $mid1[]= $_SESSION["ie"];
                }
            ?>
            
            <!--Top Movies -->
            <div class="listDemo" style="margin: 0px 0px;">

                <div id="topmovie">Top Movies In Your Region</div>
                <div class="list1">
                    <?php for($i=0;$i<10;$i++){
                    echo'<ul id="">
                        <li><img src="../images/8359.gif" height="12px"></li>
                        <li id="percent">'.$mor[$i].'</li>
                        <li><a href="movieinfo.php?a='.$mid1[$i].' "title="">'.$mname[$i].'</a></li>

                    </ul>';}?>
                    
                </div>

            </div>
            <!--End-->

             <?php 
            $query2="select * from bms_movietbl";
               $result2=  mysql_query($query2);
                while($row =  mysql_fetch_array($result2)){
                    $img2[]=$row['img1'];
                    
                }
            ?>
            
            
            <!--slider-->
            <div id="bms_nowshowing">Now Showing</div>
            <div id="content">
                <div class="gallery-wrap">
                    <div class="gallery__controls clearfix">
                        <div class="gallery clearfix">
                             <?php for($i=0;$i<10;$i++){?>
                           <div class="gallery__item">
                              <ul>
                                    <li> 
                                        <?php echo '<a href="movieinfo.php?a='.$mid1[$i].'" >
                                        <img src="'.$img2[$i].'" class="gallery__img" alt=""  /></a>';?>
                                    </li>
                                </ul>
                             </div><?php } ?>
                            
                        </div> <!-- .gallery -->
                        <div href="#" class="gallery__controls-prev">
                            <img src="Home_slider/right_arrow.png" alt="" />
                        </div>
                        <div href="#" class="gallery__controls-next">
                            <img src="Home_slider/left_arrow.png" alt="" />
                        </div>
                    </div> <!-- .gallery__controls -->
                </div> <!-- .gallery-wrap -->
            </div> <!-- #content -->

            <!--end-->

            
            
            <?php 
            $query3="select * from bms_sporttbl";
               $result3=  mysql_query($query3);
                while($row =  mysql_fetch_array($result3)){
                    $img3[]=$row['img1'];
                    $_SESSION["ie"]=$row['sport_id'];
                    $mid3[]= $_SESSION["ie"];
                }
            ?>

            <!--Sports -->
            <div id="sport">
                <div id="bms_ename">Sports</div>
                <div class="bms_event">
                    <ul>
                        <?php for($i=0;$i<4;$i++){
                            echo'<li><a href="sport_test.php?a='.$mid3[$i].' "title=""><img class="pic" src="'.$img3[$i].'" alt="bookmyshow" /></a></li>';
                        }?>
                        
                       
                    </ul>
                </div>
            </div>
            <!--End -->
           
            
            
            
            <div class="footer_main">
               <?php
                               include 'footer.php';;
               ?>
            </div>


        </div>
        <!--main End-->



    </body>
</html>

