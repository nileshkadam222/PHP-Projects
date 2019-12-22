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
    <link rel="stylesheet" type="text/css" href="profile_cards/css/theatre.css"/>
    <script src="profile_cards/prefixfree.min.js"></script>
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
            margin: 2px 185px;
            width: 986px;
             background-color: #f2f1f1 ;
			box-shadow: 0 0 13px #868686;
                        
                       
			border-radius: 0px  0px 10px 0;
        }
        .bms_back5{
			
                        background-color: #f2f1f1 ;
			box-shadow: 0 0 13px #868686;
			border-radius: 10px 10px 0 0;
			height:235px;
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
					<div  class="bms_search">
						<form>
							<input type="text" placeholder="movie,offer,sport" name="search1">
							<span class="search_tbutton"><input type="button" ></span>
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
                     <?php       
                        $mor =  $_SESSION['or'];
                        $mr =$_SESSION['r'];
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
                                       
                                
        </div>    ";?>            
                    <div class="showimages">
                     <div id="bms_en" style="margin: 10px 15px;">Selected Movie Available In Theater</div>
                                 <ul id="explode" class="profiles cf">
                                      <?php 
                                              include 'config.php';
                                               $md=@$_GET['mid'];
                                    $query="SELECT bms_movietbl.movie_name,bms_movietbl.overall_rating,
                                    bms_cinematbl.cinema_id,bms_cinematbl.venue,
                                    bms_cinematbl.theatre_name,bms_cinematbl.t1,bms_cinematbl.t2,bms_cinematbl.t3,bms_cinematbl.t4,
                                    bms_cinematbl.t5,bms_cinematbl.t6,bms_cinematbl.t7,
                                    bms_cinematbl.t8 FROM bms_movietbl INNER JOIN bms_cinematbl ON movie_id=mov_id
                                    WHERE bms_cinematbl.mov_id=$md";
                                            $result=  mysql_query($query);  
			                    
                                             while($row =  mysql_fetch_array($result)){
                                                 $mov=$row['movie_name'];
                                                 $_SESSION['mov']=$row['movie_name'];
                                                 $venue=$row['venue'];
                                                 $tname=$row['theatre_name'];
                                                 $idc=$row['cinema_id'];
                                                 ?>
                                     <?php  echo '   <li>
                                        <div class="pic">
                                            <div style="font-size:22px;text-align:center;  color: #ffffff;">Theater Name</div>
                                            <br>->'.$tname.'
                                                <br>
                                                <br>
                                                <div style="font-size:22px;text-align:center;  color: #ffffff">Venue</div>
                                                <br>->'.$venue.'
                                        </div>
                                         <ul class="info">
                                             
                                              <br>
                                             <li>Theater Name : '.$tname.'</li>
                                             <li>Venue : '.$venue.'</li>
                                                 <li><br><br><br><br><br><br>
                                                 <center>
                                                 <a href="mfinalbook.php?a='.$idc.'   "button">Book</a>
                                                <center>
                                              </li>
                               </ul>
                           </li>';
                                             }?>   
                       </ul>
                      <div style="margin: 15px 0;">
                                    <?php include 'footer.php'; ?>
                                </div>
                    </div>
                                
                                
      