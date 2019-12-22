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
            $url = "sportspage.php"; // default page for
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
<link rel="stylesheet" type="text/css" href="../css/register.css"/>
    <link href="loginpopup/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="loginpopup/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="loginpopup/js/vpb_script.js"></script>
<?php include 'File_Include.php'; ?>
                            <link rel="stylesheet" type="text/css" href="../css/register.css"/>
<style type="text/css">
.tg-left { text-align: left; } .tg-right { text-align: right; } .tg-center { }

.tg-table-plain { border-collapse: collapse; border-spacing: 0; font-size: 100%; font: inherit; width: 930px; }
.tg-table-plain td { border: 0px #555 solid; padding: 15px;  }
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
  .bms_back6{
			
                        background-color: #f2f1f1;
			box-shadow: 0 0 13px #868686 ;
			border-radius: 10px 10px 0 0;
			height:800px;
			width:985px;
			margin-top:40px;
			margin-left:185px;
                        
                        
		}
               
                
</style>
</head>
<body>
   
<div class="bms_city"></div>
        <!--main Start-->
	<div class="bms_back6">
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
                                
      
<?php

    include 'config.php';
    $md=@$_GET['a'];
    $s=$md;
    $query="select * from bms_sporttbl where sport_id=$s";
    $result=  mysql_query($query);  
    while($row =  mysql_fetch_array($result))
    {
       $evid=$row['sport_id']; 
       $evname=$row['sport_name']; 
        $evp=(int)$row['price'];
        $evv=$row['venue'];
        $ag=$row['age_limit'];
       $evsd=$row['start_date'];
       $evfd=$row['finish_date'];
       $evdes=$row['description'];
       $evimg=$row['img1'];
       
        $_SESSION['eid']=$row['sport_id'];
         $_SESSION['en']=$row['sport_name'];   
        $_SESSION['im']=$row['img1'];
       $_SESSION['ve']=$row['venue'];
       $_SESSION['sd']=$row['start_date'];
       $_SESSION['fd']=$row['finish_date'];  
         $_SESSION['p']=$row['price']; 
       
       echo"       <div id='evdisplay'>    
                    <table class='tg-table-plain'>
                        <tr>
                          <th colspan='4'><font color='#330033' size='6'>$evname</font></th>
                        </tr>
                        <tr class='tg-even'>
                          <td colspan='4'><img src='$evimg'  width='900' height='200' ></td>
                        </tr>
                        
                        <tr >
                          <th width='50'><b>Price :</b> </th>
                          <td  width='200'>$evp</td>
                          <th>Venue : </th>
                          <td>$evv</td>
                        </tr>
                        <tr class='tg-even'>
                          <th>Age : </th>
                          <td  width='80'>$ag</td>
                          <th>Date : </th>
                          <td>$evsd &nbsp;to&nbsp;$evfd</td>
                        </tr>
                        <tr>
                          <th colspan='2' align='left'>&nbsp;&nbsp;&nbsp;<b>Description : </b></th>
                          <td colspan='2' wdth='100'>$evdes</td>
                        </tr>
                        <tr class='tg-even'>
                        <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td colspan='2'  >";
                            if(isset($_SESSION['name'])){
                                ?>
                              
                                <div style="alignment-adjust: baseline" ><a href="javascript:void(0);" class="vpb_general_button" onClick="vpb_show_login_box1();">Book</a>
                                    </div>
                                   
                                    <?php }else{?>
                             
                                    <div style="alignment-adjust: central;">
                                    <a href="javascript:void(0);" class="vpb_general_button" onClick="vpb_show_login_box();">Book</a>
                                    </div>
                                   
                                 <?php }
                                ?>
                           </td>
                        </tr>
                        </table></div>
                    <?php }   ?>         
        
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
                    
                       <!-- Select quantity Starts here Starts Here -->                 
                                    <div id="vpb_login_pop_up_box1" >
                                        <div align="center" valign="middle" style="font-family:Verdana, Geneva, sans-serif; font-size:15px;color: #cc0066;font-weight:bold;background-color: #cccccc;border-radius: 10px;height: 25px;">Select Quantity</div><br clear="all">
                                        <form name="" action="sportbooked.php" method="post">
                                            <table>
                                                 <tr><td><label><b>Price : </b></label></td>
                                                     <td><input placeholder="" type="text" readonly size="40" value="<?php echo $evp ?>" id="price" name="price1" class="textbox"></td></tr>
                                                 <tr><td>&nbsp;</td></tr>
                                                 <tr><td><label for="password" class="label"><b>Age : </b></label></td>
                                                     <td><input placeholder="" class="textbox"  type="number" required  min="18" max="30" name="qty" id="qty1"/></td></tr>
                                                  <tr><td>&nbsp;</td></tr>
                                                 <tr><td><label for="password" class="label"><b>No. of people : </b></label></td>
                                                     <td><input placeholder="" class="textbox"  type="number" required  min="1" max="5"  name="qty" id="qty"/></td></tr>
                                                  <tr><td>&nbsp;</td></tr>
                                                 <tr><td><label for="password" class="label"><b>Total : </b></label></td>
                                                 <script type="text/javascript">
                                                  
                                                   $('#qty').on("input",function () {
                                                        var a=<?php echo $evp; ?>;
                                                      //  var n = jQuery.trim($("#qty").val());
                                                    if($("#qty").val().length > 0)
                                                    {
                                                        $("#total").val(parseInt($("#qty").val())*  a)
                                                    }
                                                    else
                                                    {
                                                        $("#total").val(0);
                                                    }
                                                    });
                                                 </script>
                                                 <td><input placeholder="" class="textbox"  type="text" readonly name="total"  id="total"/></td></tr>
                                                <tr><td colspan="2" align="center"><br/>&nbsp;&nbsp;&nbsp;<input type="submit" name="signin" value="Confirm" class="button"/></td></tr>
                                            </table> 
                                            <br>
                                            
                                         </form>
                                     </div>
        
        
                                <div style="position: absolute; margin: 750px 0;">
                                    <?php include 'footer.php'; ?>
                                </div>
                                
        </div>
				<!--	End-->
                      















<!--gsanjaykum@gmail.com-->