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
    
    
    
    <link rel="stylesheet" type="text/css" href="../css/register.css"/>
    <link href="loginpopup/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="loginpopup/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="loginpopup/js/vpb_script.js"></script>
<?php include 'File_Include.php'; ?>
                            <link rel="stylesheet" type="text/css" href="../css/register.css"/>
                            
                            
<script>
	$(function() {
		$( "#datepicker" ).datepicker({ minDate: -20, maxDate: "+1M +10D" });
	});
	</script>
        
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
                echo '<li class="topmenu"><a href="#" style="width:77px;height:34px;line-height:34px;">';
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
             $md=@$_GET['a'];
                $query="select * from bms_cinematbl where cinema_id=$md";
                $result=  mysql_query($query);
                while($row =  mysql_fetch_array($result))
                {
                    $ceid=$row['cinema_id'];
                    $_SESSION['cid']=$row['cinema_id'];
                    
                    $moid=$row['mov_id'];
                    $_SESSION['mid']=$row['mov_id'];
                    
                    $mcity=$row['city'];
                    $_SESSION['city']=$row['city'];
                    
                    $mvenue=$row['venue'];
                    $_SESSION['ven']=$row['venue'];
                    
                    $mt_name=$row['theatre_name'];
                    $_SESSION['theaternm']=$row['theatre_name'];
                    
                    $mov1=$_SESSION['mov'];
                    
                    $priceb=$row['price_bronze'];
                    $_SESSION['bprice']=$row['price_bronze'];
                    
                    $totalb=$row['total_bseat'];
                    $remainb=$row['remaining_bseat'];
                    $_SESSION['remainb']=$row['remaining_bseat'];
                
                    $prices=$row['price_silver'];
                    $_SESSION['sprice']=$row['price_silver'];
                    
                    $totals=$row['total_sseat'];
                    $remains=$row['remaining_sseat'];
                    $_SESSION['remains']=$row['remaining_sseat'];
                    
                    $t1=$row['t1']; $t2=$row['t2']; $t3=$row['t3']; $t4=$row['t4'];
                     $t5=$row['t5']; $t6=$row['t6']; $t7=$row['t7']; $t8=$row['t8'];
                     
                    
                }
        ?>
        
        
        
        
        <div class="outbd">
            
            <div class="outbdBorder">
                
                <div class="bd">Booking Details</div>
                            <div id="whole">

                                <form name="" action="mbookresult.php" method="post">
        <table>
             <tr><td class="wd"><label><b>Theater Name : </b></label></td>
                 <td><input placeholder="" type="text" readonly size="40" value="<?php echo $mt_name; ?>" id="tn" name="tn1" class="textbox"></td></tr>
             <tr><td>&nbsp;</td></tr>
             <tr><td><label for="password" class="label"><b>Movie Name : </b></label></td>
                 <td><input placeholder="" class="textbox"  type="text" readonly value="<?php echo $mov1; ?>"  name="mn" id="mn1"/></td></tr>
              <tr><td>&nbsp;</td></tr>
              <tr><td><label><b>Select Date :  </b></label></td>
                 <td>
                     <select name="showd" id="" required>
                          <option value="">select show date</option>
                          <option value="1">Today</option>
                          <option value="2">Tomorrow</option>
                     </select>
                     &nbsp; &nbsp;<br>
                     
                 </td>
             </tr>
             <tr><td>&nbsp;</td></tr>
             <tr><td><label><b>Seat Type :  </b></label></td>
                 <td>
                     <select name="st" id="number" >
                          <option value="">Select Type</option>
                          <option value="1">Silver Rs. <?php echo $prices; ?></option>
                          <option value="2">Bronze Rs. <?php echo $priceb;?></option>
                     </select>
                     &nbsp; &nbsp;<br>
                     
                 </td>
             </tr>
            
             <tr ><td>&nbsp;</td></tr>
             <tr id="section1" style="display: none;">
                 <td><label for="password" class="label"><b>Quantitys : </b></label></td>
                 <td>
                     <input placeholder="" class="textbox"  type="number" required min="1"  max="<?php echo $remains; ?>" title="All seats are book" name="qty1" id="qty1"/>
                     
                    
                 </td>
                 
             </tr>
             
             <tr id="section2" style="display: none;">
                 <td><label for="password" class="label"><b>Quantityb : </b></label></td>
                 <td>
                     <input placeholder="" class="textbox"  type="number" required min="1"  max="<?php echo $remainb; ?>" title="All seats are book" name="qty2" id="qty2"/>
                 
                 </td>
             </tr>
               <tr ><td>&nbsp;</td></tr>
              <script type="text/javascript">
               $('#number').change(function() {
                    var selected = $(this).val();
                        if(selected == '1'){
                            $('#section2').hide();
                          $('#section1').show(2);
                        }
                        else if(selected == '2'){
                            $('#section1').hide();
                          $('#section2').show();
                        }
                        else{
                            $('#section1').hide();
                             $('#section2').hide();
                        }
                    });
             </script>
             <tr><td><label><b>Total Price : </b></label></td>
                  <script type="text/javascript">
                                                  
                                                   $('#qty1').on("input",function () {
                                                        var a=<?php echo $prices; ?>;
                                                      //  var n = jQuery.trim($("#qty").val());
                                                    if($("#qty1").val() > 0)
                                                    {
                                                        $("#total").val(parseInt($("#qty1").val())*  a);
                                                    }
                                                    
                                                    });
                                                    
                                                    $('#qty2').on("input",function () {
                                                        var a=<?php echo $priceb; ?>;
                                                      //  var n = jQuery.trim($("#qty").val());
                                                    if($("#qty2").val() > 0 )
                                                    {
                                                        $("#total").val(parseInt($("#qty2").val())*  a);
                                                    }
                                                  
                                                    });
                                                 </script>
                 
                 <td><input placeholder="" type="text" readonly size="40" value="" id="total" name="price1" class="textbox"></td></tr>
             <tr><td>&nbsp;</td></tr>
              <tr><td>&nbsp;</td></tr>
              <tr><td><label for="password" class="label"><b>Show time : </b></label></td>
              <table>
                  <tr><td rowspan="3">
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      </td>
                      <td><input width="30" placeholder=""   type="radio"  value="<?php echo $t1?>"  name="time1" id="mn1"/><?php echo $t1?></td>
                      <td><input placeholder="" required   type="radio"  value="<?php echo $t2?>"  name="time1" id="mn1"/><?php echo $t2?></td>
                  <td><input placeholder="" required  type="radio"  value="<?php echo $t3?>"  name="time1" id="mn1"/><?php echo $t3?></td></tr>
                  <tr>
                  <td><input width="30" placeholder="" required  type="radio"  value="<?php echo $t4?>"  name="time1" id="mn1"/><?php echo $t4?></td>
                  <td><input placeholder="" required  type="radio"  value="<?php echo $t5?>"  name="time1" id="mn1"/><?php echo $t5?></td>
                  <td><input placeholder="" required  type="radio"  value="<?php echo $t6?>"  name="time1" id="mn1"/><?php echo $t6?></td>
                  </tr>
                  <tr>
                  <td><input width="30" placeholder="" required  type="radio"  value="<?php echo $t7?>"  name="time1" id="mn1"/><?php echo $t7?></td>
                  <td><input placeholder="" required  type="radio"  value="<?php echo $t8?>"  name="time1" id="mn1"/><?php echo $t8?></td>
                 
                  </tr>
              </table>
                  
              </tr>
                <tr><td>&nbsp;</td></tr>
                 <tr><td>&nbsp;</td></tr>
             <tr><td colspan="2" >
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <h4 id="msg" style="marin:25px 0 0 0;display:none;color: red;">ALL TICKECTS ALL BOOKED</h4>
                     
                     <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <input type="submit" name="signin" value="Confirm" id="sub" class="button"/>
                     
                 </td></tr>
        </table> 
        <br>

     </form>
                            </div>
                <div style="margin:30px 0px 0 0;">
                <?php
                               include 'footer.php';
               ?></div>
            </div>
            
        </div>
                             
                                
                                
      
