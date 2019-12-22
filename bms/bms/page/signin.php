<?php  session_start();  
include("config.php");
$msg=@$_GET['msg'];
$mssg=@$_GET['mssg'];

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
            $url = "index.php"; // default page for
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
<?php include 'File_Include.php'; ?>
    <link rel="stylesheet" type="text/css" href="../css/register.css"/>
    
</head>
<body>
  
<div class="bms_city"></div>
        <!--main Start-->
	<div class="bms_back4">
            <div class="bms_logo"> <img src="../images/bms_logo.png"></div>
					
            
					
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
				<!--	End-->
                                
 
                                
                                <div id="reg" style="border: 2px  double  #990099; background: #cccccc">
                                    <div id="reg_out">
                                    <div id="signin"><font color=ff0000>C</font><font color=cc0000>u</font><font color=990000>s</font><font color=660000>t</font><font color=330000>o</font><font color=000000>m</font><font color=003300>e</font><font color=660000>r</font> <font color=006600>L</font><font color=009900>o</font><font color=00cc00>g</font><font color=00ff00>i</font><font color=00cc00>n</font></font></div><br>
                                        <div id="signin_error"><font color="red">
                                        <?php 
                                        echo $msg;
                                        ?>
                                            <?php 
                                        echo $mssg;
                                        ?></font>
                                        </div>
                                          <br><br><br>     <br> 
                                        <form name="" action="" method="post">
                                           
                                            <table>
                                             
                                                <tr><td><label><b>Email id : </b></label></td>
                                                    <td><input placeholder="Enter valid email" type="email" size="40" id="email1" name="umail" class="textbox" required></td></tr>
                                                <tr><td>&nbsp;</td></tr>
                                                <tr><td><label for="password" class="label"><b>Password : </b></label></td>
                                                    <td><input placeholder="Enter Password" class="textbox" required maxlength="15" type="password" name="upass" id="password1"/></td></tr>
                                               
                                        <tr><td colspan="2" align="center"><br/><input type="reset" class="button" value="Reset"/>&nbsp;&nbsp;&nbsp;<input type="submit" name="signin" value="Sign In" class="button"/></td></tr>
                                        <tr><td>&nbsp;</td></tr>
                                                  <tr><td>&nbsp;</td></tr>
                                         </table> 
                                            <br>
                                            <div>New User?<font><a href="registerPage.php"  style="text-decoration: none; color: #ff3333"> Click Here</a></font></div>
                                            <?php include 'forgetpassword.php'; ?>
                                            <div ><a href="#"  onClick='vpb_show_login_box();'>Forget Password</a></div>
                                         <tr><td>&nbsp;</td></tr>
                                                  <tr><td>&nbsp;</td></tr>
                                        </form>
                                    </div>
                                </div>
                                  <div style="margin: 500px 0px;position: absolute;">
                                        <?php
                               include 'footer.php';
               ?>
                                   </div>
        </div> 
        
        
        
        
        
        
        
        <?php
        
$host = "localhost";
$user ="root";
$pass = "";
$db ="db_bookmyshow";
mysql_connect($host, $user, $pass);
mysql_select_db($db) or die("database could not connect ");
if (isset($_POST['fpwd']))
{
    if($_POST["upass"] != $_POST["ucpass"])
        {
        $msg="Confirm Password Doesn't Match";
        header('Location:signin.php?mssg='.$msg);
        
}
else {
    $email = $_POST['mail'];
    $password = $_POST['ucpass'];
	
	
    $sql = "SELECT * FROM bms_customertbl WHERE email='".$email."'";
    $res = mysql_query($sql);
    if (mysql_num_rows($res) == 1) 
    {
       $query="update bms_customertbl set pass='$password',cpass='$password' where email='$email'";
       mysql_query($query) or die("query failed".mysql_error());
       {
         $mssg="Password Reset Successfully";
        header('Location:signin.php?mssg='.$mssg);  
       }
      
    } 
    else 
    {
        $mssg="User name Doesn't Exist";
        header('Location:signin.php?mssg='.$mssg); 
        
     }
}  
}
?>



<link rel="stylesheet" type="text/css" href="../css/register.css"/>
    <link href="loginpopup/css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="loginpopup/js/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="loginpopup/js/vpb_script.js"></script>


<div id="vpb_pop_up_background"></div><!-- General Pop-up Background -->
                    <!-- Login Box Starts Here -->
                                    <div id="vpb_login_pop_up_box" >
                                        <div align="center" valign="middle" style="font-family:Verdana, Geneva, sans-serif; font-size:15px;color: #cc0066;font-weight:bold;background-color: #cccccc;border-radius: 10px;height: 25px;">Please  Login First...</div><br clear="all">
                                        <form method="post">
                                            <table>
                                                 <tr><td><label><b>Enter email-id : </b></label></td>
                                                     <td><input placeholder="Enter email-id" type="email" size="40" id="email1" name="mail" class="textbox" required></td></tr>
                                                 <tr><td>&nbsp;</td></tr>
                                                 <tr><td><label for="password" class="label"><b>Password : </b></label></td>
                                                 
                                                <td><input placeholder="Enter Password" class="textbox" required maxlength="15" type="password" name="upass" id="password1"/></td></tr>
                                                <tr><td><label for="password" class="label"><b>Confirm Password : </b></label></td>
                                                <td><input placeholder="Confirm Password" class="textbox" required maxlength="15" type="password" name="ucpass" id="password1"/></td></tr> 
                                                 
                                                <tr><td colspan="2" align="center"><br/><a href="bms/page/signin.php"></a>&nbsp;&nbsp;&nbsp;<input type="submit" name="fpwd" value="Reset" class="button"/></td></tr>
                                            </table> 
                                            <br>
                                            
                                         </form>
                                     </div>   
                             
                                   

