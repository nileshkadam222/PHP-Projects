 
<?php  

if (isset($_POST['signin']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
     $cnn=mysql_connect("localhost","root","") or die("cannot connect to database");
 mysql_select_db("db_bookmyshow",$cnn) or die("cannot select database");
    $sql = "SELECT * FROM adminlogin WHERE UserName='".$username."' AND Password='".$password."' LIMIT 1";
    $res = mysql_query($sql);
    if (mysql_num_rows($res) == 1) 
    {
          $_SESSION["admin"]=$username;
 
        if(isset($_SESSION["aurl"])) 
        $url = $_SESSION["aurl"]; // holds url for last page visited.
        else 
        $url = "../admin/admin.php"; // default page for
        header("Location:$url");
    } 
    else 
    {
        echo '<script language="javascript" type="text/javascript">
     alert("User Name Or Password invailid");
     </script>';
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
                                        <form name="" action="" method="post">
                                            <table>
                                                 <tr><td><label><b>User Name : </b></label></td>
                                                 <td><input placeholder="Enter User name" type="text" size="40" id="email1" name="username" class="textbox" required></td></tr>
                                                 <tr><td>&nbsp;</td></tr>
                                                 <tr><td><label for="password" class="label"><b>Password : </b></label></td>
                                                 <td><input placeholder="Enter Password" class="textbox" required maxlength="15" type="password" name="password" id="password1"/></td></tr>
                                                <tr><td colspan="2" align="center"><br/><input type="reset" class="button" value="Reset"/>&nbsp;&nbsp;&nbsp;<input type="submit" name="signin" value="Sign In" class="button"/></td></tr>
                                            </table> 
                                            <br>
                                            
                                         </form>
                                     </div>    