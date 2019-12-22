<?php
session_start();
?>
<?php
$_SESSION["redirurl"]=$_SERVER['PHP_SELF'];
if ($_SESSION["name"] == "")
{
header('Location: index.php');
}

?>


<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/moviebook.css"/>
    <link href="loginpopup/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="loginpopup/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="loginpopup/js/vpb_script.js"></script>
<?php include 'File_Include.php'; ?>
                            <link rel="stylesheet" type="text/css" href="../css/register.css"/>
<style type="text/css">
.tg-left { text-align: left; } .tg-right { text-align: right; } .tg-center { text-align: center; }
.tg-bf { font-weight: bold; } .tg-it { font-style: italic; }
.tg-table-plain { border-collapse: collapse; border-spacing: 0; font-size: 100%; font: inherit; width: 930px; }
.tg-table-plain td { border: 0px #555 solid; padding: 10px; vertical-align: top; }
#evdisplay{
    position: absolute;
    margin: 180px 22px;    
    border: 2px solid #660066;
   border-radius: 5px;
}
#bd{
    position: absolute;
    margin: 700px 150px;
    background-color: #999999;
    
    width: 700px;
   
}
  .bms_back10{
		background-color: #f2f1f1;
                box-shadow: 0 0 13px #868686 ;
                border-radius: 10px 10px 0 0;
                height:140px;
                width:985px;
                margin-top:40px;
                margin-left:185px;
                }
                
                
                /* booking details outside*/
                .outbd{
                    
                    background-color: #f2f1f1;
                    box-shadow: 0 0 13px #868686 ;
                    border-radius: 10px 10px 0 0;
                    position: absolute;
                    margin: 5px 185px;
                    width: 986px;
                    
                }
                 /*title of booking details */
                .bd{
                    width: 600px;
                    margin: 50 150px;
                    height: 50px;
                    background: #009999;
                    font-size: 40px;
                    text-align: center;
                    border-radius: 15px;
                }
                #whole{
                    margin-top: 10px;
                    margin-left: 150px;
                }
                 
                .wd{
                    width: 150px;
                    
                }
               
               
                
</style>
</head>
<body>
   
<div class="bms_city"></div>
        <!--main Start-->
	<div class="bms_back10">
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
                echo '<li><a href="#" style="width:77px;height:34px;line-height:34px;">';
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
            </div>   
        
        <?php
         include 'config.php';
         
          $cid=$_SESSION['cid'];
           $mid=$_SESSION['mid'];
           
            $custid=@$_SESSION['id'];
            $name=@$_SESSION['name'];
            $cust_email=@$_SESSION['auth'];
            
            $city=$_SESSION['city'];
            $venue1= $_SESSION['ven'];
            $tname1= $_SESSION['theaternm'];
            $movie_name=$_SESSION['mov'];
            
            $bprice= $_SESSION['bprice'];
            $sprice= $_SESSION['sprice'];
            $price1=$_POST['st'];
            
            $qty1=$_POST['qty1'];
             $qty2=$_POST['qty2'];
             
             $remainb2=$_SESSION['remainb'];
             $qty22=(int)$remainb2-(int)$qty2;
             
             $remains1=$_SESSION['remains'];
             $qty11=(int)$remains1-(int)$qty1;
             
             
             $total1=$_POST['price1'];
             
             $showtime=$_POST['time1'];
             $showdate=$_POST['showd'];
        ?>
        <script type="text/javascript">
                var d=new Date();
                var weekday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday",
                            "Friday","Saturday");
                var month=new Array('January','February','March','April','May','June','July',
            'August','September','October','November','December');
        </script>
       
        
        
        <div class="outbd">
            
            <div class="outbdBorder">
                
                <div class="bd">Movie Ticket</div>
                            <div id="whole">
    
        <table>
                <tr><td>&nbsp;</td></tr>
                <tr><td class="wd"><label for="password" class="label"><b>User Name : </b></label></td>
                    <td><?php echo $name; ?></td></tr>
              <tr><td>&nbsp;</td></tr>
              <tr><td>&nbsp;</td></tr>
             <tr><td class="wd"><label for="password" class="label"><b>Movie Name : </b></label></td>
                 <td><?php echo $movie_name; ?></td></tr>
              <tr><td>&nbsp;</td></tr>
               <tr><td>&nbsp;</td></tr>
             <tr><td class="wd"><label><b>Theater Name : </b></label></td>
                 <td><?php echo $tname1  ;?></td></tr>
             <tr><td>&nbsp;</td></tr>
              <tr><td>&nbsp;</td></tr>
             <tr><td class="wd"><label><b>Venue : </b></label></td>
                 <td><?php echo $venue1;echo '&nbsp;&nbsp;&nbsp;';echo $city ;?></td></tr>
             <tr><td>&nbsp;</td></tr>
              <tr><td>&nbsp;</td></tr>
             
             <tr><td class="wd"><label><b>Show date : </b></label></td>
                  <?php if($showdate == 1) { ?>
                                <script>
                           var dayname=weekday[d.getDay()];
                           var date1=d.getDate();
                           var monthname=month[d.getMonth()];
                           var year1=d.getFullYear();
                           var readDate=dayname+' '+date1+'th '+monthname+' '+year1;
                            </script>
        
                  <td><?php $dat='<script>document.write(readDate)</script>'; 
                             echo $dat;
                  }else {?></td>
                            <script>
                           var dayname=weekday[d.getDay()+1];
                           var date1=d.getDate()+1;
                           var monthname=month[d.getMonth()];
                           var year1=d.getFullYear();
                           var readDate=dayname+' '+date1+'th '+monthname+' '+year1;
                            </script>
                  <td><?php $dat='<script>document.write(readDate)</script>'; }
                             echo $dat;
                  ?></td>
        
        </tr>
              <tr><td>&nbsp;</td></tr>
              <tr><td>&nbsp;</td></tr>
             <tr><td class="wd"><label><b>Show Time : </b></label></td>
                 <td><?php echo $showtime ?></td></tr>
                
                <tr><td>&nbsp;</td></tr>
                 <tr><td>&nbsp;</td></tr>
                 <?php if($price1==1){ ?>
                 <tr><td class="wd"><label><b>Price : </b></label></td>
                     <td><?php echo 'Silver Rs. '; echo $sprice;  ?></td></tr> 
                  <tr><td>&nbsp;</td></tr>
                 <tr><td>&nbsp;</td></tr>
               <tr><td class="wd"><label><b>Quantity : </b></label></td>
                   <td><?php echo $qty1; ?></td></tr> 
                 <tr><td>&nbsp;</td></tr>
                 <tr><td>&nbsp;</td></tr><?php } else {?>
                  <tr><td class="wd"><label><b>Price : </b></label></td>
                     <td><?php echo 'Bronze Rs. '; echo $bprice;  ?></td></tr> 
                  <tr><td>&nbsp;</td></tr>
                 <tr><td>&nbsp;</td></tr>
                  <tr><td class="wd"><label><b>Quantity : </b></label></td>
                   <td><?php echo $qty2; ?></td></tr> 
                 <tr><td>&nbsp;</td></tr>
                 <tr><td>&nbsp;</td></tr>
                 <?php }?>
             <tr><td td class="wd"><label><b>Total Price : </b></label></td>
                 <td><?php echo $total1; ?></td></tr>
             <tr><td>&nbsp;</td></tr>
              <tr><td>&nbsp;</td></tr>
              <tr>
               <td colspan='2'><p align='center'><a href='#' onclick='window.print()'>Print</a></p>
               <div style='visibility:hidden;display:none'>
               </td>
             </tr>
                         
        </table> 
                  
          <?php        if($price1==1){
                         $query="insert into bms_moviebooktbl
                        (cust_id,movie_id,theater_id,cust_email,movie_name,theatre_name,
                       showtime,price,quantity,totalprice,venue) 
                        values('".$custid."','".$mid."','".$cid."','".$cust_email."',
                            '".$movie_name."','".$tname1."','".$showtime."',
                                '".$sprice."','".$qty1."','".$total1."','".$venue1."')";
                
                              $result= mysql_query($query) or die("query failed".mysql_error());
                            $query1="update bms_cinematbl set remaining_sseat='".$qty11."' where cinema_id='".$cid."'";
                            $result1= mysql_query($query1) or die("query failed".mysql_error());
          }
          else{
              
                        $query="insert into bms_moviebooktbl
                        (cust_id,movie_id,theater_id,cust_email,movie_name,theatre_name,
                       showtime,price,quantity,totalprice,venue) 
                        values('".$custid."','".$mid."','".$cid."','".$cust_email."',
                            '".$movie_name."','".$tname1."','".$showtime."',
                                '".$bprice."','".$qty2."','".$total1."','".$venue1."')";
                
                    $result= mysql_query($query) or die("query failed".mysql_error());
                     $query1="update bms_cinematbl set remaining_bseat='".$qty22."' where cinema_id='".$cid."'";
                            $result1= mysql_query($query1) or die("query failed".mysql_error());
          }
                ?>
   
                            </div>
                   <div style="margin:30px 0px 0 0px;">
                <?php
                               include 'footer.php';
               ?></div>
            </div>
            
        </div>
                             
                                
                                
      
