<?php session_start(); 

?>


<html>
<head>
<?php include 'File_Include.php'; ?>
    <style type="text/css">
.tg-left { text-align: left; } .tg-right { text-align: right; } .tg-center { text-align: center; }
.tg-bf { font-weight: bold; } .tg-it { font-style: italic; }
.tg-table-plain { border-collapse: collapse; border-spacing: 0; font-size: 100%; font: inherit;width:900px; }
.tg-table-plain td { border: 0px #555 solid; padding: 10px; vertical-align: top; }
</style>
    <style>
        #eventb{
            position: absolute;
            margin: 150px 30px;
            border: 2px solid #660066;
   
    border-radius: 5px;
        }
        #res1{
            
        }
    </style>
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
                 include 'config.php';
                 
                 $custid=@$_SESSION['id'];
                 $name=@$_SESSION['name'];
                
                $ei=@$_SESSION['eid'];
                $ena=@$_SESSION['en'];
                
                $l=@$_SESSION['la'];
                $dur=@$_SESSION['du'];
                
                $v=@$_SESSION['ve'];
                $sdt=@$_SESSION['sd'];
                $sft=@$_SESSION['fd'];
                
                $im1=@$_SESSION['im'];
                $quantity=$_POST['qty'];
                $price=@$_SESSION['p'];
                
                $total= $_POST['total'];
                
                /*$q = insert into bms_eventbooktbl(custid,event_id,cust_name,event_name,quantity,total_price) values('".$custid."');
                */
                $query="insert into bms_sportbooktbl
                    (custid,sport_id,cust_name,sport_name,quantity,total_price) 
                    values('".$custid."','".$ei."','".$name."','".$ena."','".$quantity."','".$total."')";
                
                $result= mysql_query($query) or die("query failed".mysql_error());
                
                 /*$query="select * from bms_eventtbl where cust_id=$custid";*/
                
                ?>  
                                
    <?php                        echo "    <div id='eventb'>
                                    <div id='res1'>
                                       
                                            <table class='tg-table-plain'>
                                              <tr>
                                                <th colspan='3'><font size='6'>$ena</font></th>
                                              </tr>
                                              <tr class='tg-even'>
                                                <td rowspan='10'><p align='center'><img src='$im1' width='250' height='390' ></p></td>
                                                <td>Name :  </td>
                                                <td>$name</td>
                                              </tr>
                                              <tr>
                                                <td>EventName:</td>
                                                <td>$ena</td>
                                              </tr>
                                              
                                                <td>Price :  </td>
                                                <td>$price</td>
                                              </tr>
                                              <tr class='tg-even'>
                                                <td>Venue : </td>
                                                <td>$v</td>
                                              </tr>
                                              <tr>
                                                <td>Start Date:</td>
                                                <td>$sdt</td>
                                              </tr>
                                              <tr class='tg-even'>
                                                <td>Finish Date:</td>
                                                <td>$sft</td>
                                              </tr>
                                             <tr class='tg-even'>
                                                <td>Quantity :</td>
                                                <td>$quantity</td>
                                              </tr>
                                             <tr class='tg-even'>
                                                <td>Total Price:</td>
                                                <td>$total</td>
                                              </tr>
                                             
                                              <tr>
                                                <td colspan='2'><p align='center'><a href='#' onclick='window.print()'>Print</a></p>
                                                <div style='visibility:hidden;display:none'>
                                                </td>
                                              </tr>
                                            </table>
                                        
                                    </div> 
                                </div>       ";?>  
                                
        </div>