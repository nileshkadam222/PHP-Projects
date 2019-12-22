<html>
<head>
<?php include 'File_Include.php'; ?>
    <link rel="stylesheet" type="text/css" href="../css/register.css">
    
    
</head>
<body>
  
<div class="bms_city"></div>
        <!--main Start-->
	<div class="bms_back3">
            <div class="bms_logo"> <img src="../images/bms_logo.png"></div>
					
					
				<!--Menu bar-->
				<div class="bms_menu">

                <ul id="css3menu1" class="topmenu" style="margin-left: 0px;">
                    <li class="topfirst"><a href="main.php" style="width:78px;height:34px;line-height:30px;"><img src="../images/home.png" alt=""/>&nbsp</a></li>
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
				<!--	End-->
                                
 <?php
$msg=@$_GET['msg'];
        
if(isset($_POST['register']))
  {
    
    if($_POST["upass"] != $_POST["ucpass"])
        {
        $msg="Confirm Password Doesn't Match";
        header('Location:registerPage.php?msg='.$msg);
        
        }
else {
    
    
   $ufn=$_POST['ufname'];
   $uln=$_POST['ulname'];
   $umob=$_POST['umob'];
   $uemail=$_POST['umail'];
   $upass=$_POST['upass'];
   $ucpass=$_POST['ucpass'];
   include 'config.php';
// $cnn=mysql_connect("localhost","root","") or die("cannot connect to database");
// mysql_select_db("db_bookmyshow",$cnn) or die("cannot select database");
 $sql= "select count(*) from bms_customertbl where email ='".$uemail."'"; 
$result=mysql_query($sql); 
$query_data=mysql_fetch_row($result); 
if($query_data[0]>0) { 
$msg= "Email Already Exist"; 
}

else{ 
 $query="insert into bms_customertbl(fname,lname,mob,email,pass,cpass)values('".$ufn."','".$uln."','".$umob."','".$uemail."','".$upass."','".$ucpass."')";
 $result= mysql_query($query) or die("query failed".mysql_error());
 if($result!="")
 {
    $msg= "Register Successfully";
    header ('Location:registerPage.php?msg='.$msg); 
}  
    mysql_close($cnn);
}
  }
  }
?> 
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="reg" style="border: 2px  double  #990099; background: #cccccc">
                                    <div id="reg_out">
                                        <div id="regname"><font size="5>"><font color=ff0000>R</font><font color=cc0000>e</font><font color=990000>g</font><font color=660000>i</font><font color=330000>s</font><font color=000000>t</font><font color=003300>r</font><font color=006600>a</font><font color=009900>t</font><font color=00cc00>i</font><font color=00ff00>o</font><font color=00cc00>n</font></font>
                                        </div>
                                        <div id="errormsg">
                                        <font color="red">
                                        <?php 
                                        echo $msg;
                                        ?></font>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <form name="" action="" method="post">
                         

                                            <table>
                                                 <tr><td>&nbsp;</td></tr>
                                                  <tr><td>&nbsp;</td></tr>
                                                <tr><td><label><b>First Name : </b></label></td>
                                                    <td><input type="text" placeholder="First name" required name="ufname" class="textbox" id="username" title="Please Enter your First name"/></td></tr><br>
                                                <tr><td>&nbsp;</td></tr>
                                                <tr><td><label><b>Last Name : </b></label></td>
                                                    <td><input type="text" placeholder="Last Name" required name="ulname" class="textbox" id="username" title="Please Enter your Last Name"/></td></tr><br>
                                               <tr><td>&nbsp;</td></tr>
                                                <tr><td><label><b>Mobile No. : </b></label></td>
                                                    <td><input type="text" placeholder="Mobile" name="umob"  maxlength="10" class="textbox"  pattern="[0-9]{10}" title="Enter your mobile number"required></td></tr>
                                               <tr><td>&nbsp;</td></tr>
											   
											   
											   
                                                <tr><td><label><b>Email id : </b></label></td>
                                                    <td><input placeholder="Enter valid email" type="email" size="40" id="email1" name="umail" class="textbox" required></td></tr>
                                               <tr><td>&nbsp;</td></tr>
                                                <tr><td><label for="password" class="label"><b>Password : </b></label></td>
                                                    <td><input placeholder="Enter Password" class="textbox" required maxlength="15" type="password" name="upass" id="password1"/></td></tr>
                                                <tr><td>&nbsp;</td></tr>
                                                <tr><td><label for="confirm_password"><b>Confirm Password : </b></label></td>
                                                    <td><input placeholder="Re-Type Password" class="textbox" required type="password" maxlength="15" name="ucpass" id="password2" onInput="checkPasswords();"/></td></tr>
                                        <tr><td>&nbsp;</td></tr>
                                                <tr><td colspan="2" align="center"><br/><input type="submit" name="register"class="button" value="Submit"/>&nbsp;&nbsp;&nbsp;<input type="reset" class="button"/></td></tr>
                                            <tr><td>&nbsp;</td></tr>
                                               <tr><td>&nbsp;</td></tr>
                                            </table> 
                                         </form>
                                    </div>
                                </div>
                                  <div style="margin: 700px 0px;position: absolute;">
                                        <?php
                               include 'footer.php';
                                        ?>
                                   </div>
        </div>                 
                             
                                   
