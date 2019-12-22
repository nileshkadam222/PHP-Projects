<html>
<head>
<?php include 'File_Include.php'; ?>
    <link rel="stylesheet" type="text/css" href="registration/register.css"/>
</head>
<body>
  
<div class="bms_city"></div>
        <!--main Start-->
	<div class="bms_back1">
            <div class="bms_logo"> <img src="../images/bms_logo.png"></div>
					<div  class="bms_search">
						<form>
							<input type="text" placeholder="movie,offer,sport" name="search1">
							
						</form>	
					</div>
					
				<!--Menu bar-->
				<div class="bms_menu">
				
                                    <ul id="css3menu1" class="topmenu" style="margin-left: 0px;">
						<li class="topfirst"><a href="main.php" style="width:78px;height:34px;line-height:30px;"><img src="../images/home.png" alt=""/>&nbsp</a></li>
                                        <li class="topmenu"><a href="movie.php" style="width:78px;height:34px;line-height:34px;"><span>MOVIES</span></a>
						</li>
						<li class="topmenu"><a href="#" style="width:78px;height:34px;line-height:34px;">THEATRE</a></li>
						<li class="topmenu"><a href="#" style="width:78px;height:34px;line-height:34px;">EVENTS</a></li>
						<li class="topmenu"><a href="#" style="width:77px;height:34px;line-height:34px;">OFFERS</a></li>
						
                                    </ul>	
				
				</div>
                                <ul id="css3menu1" class="topmenu" style="margin:110px 888px 0px;position: absolute;z-index: 500">
                                     <li class="topmenu"><a href="#" style="width:77px;height:34px;line-height:34px;">SIGN UP</a></li>
                                 </ul>	
				<!--	End-->
                                
 
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="reg">
                                    <div id="reg_out">
                                        <center><div id="regname">REGISTER</div>
                                        <br><font color="red">
                                        <?php 
                                        echo $msg;
                                        ?></font>
                                        </center>
                                        <br>
                                        <form name="" action="" method="post">
                         

                                            <table>
                                                <tr><td><label><b>First Name : </b></label></td>
                                                    <td><input type="text" placeholder="First name" required name="ufname" class="textbox" id="username" title="Please Enter your First name"/></td></tr><br>
                                                <tr><td><label><b>Last Name : </b></label></td>
                                                    <td><input type="text" placeholder="Last Name" required name="ulname" class="textbox" id="username" title="Please Enter your Last Name"/></td></tr><br>
                                                <tr><td><label><b>Mobile No. : </b></label></td>
                                                    <td><input placeholder="Mobile Number" type="test" required name="umob"  maxlength="13" class="textbox" title="Enter mobile number."></td></tr>
                                                <tr><td><label><b>Email id : </b></label></td>
                                                    <td><input placeholder="Enter valid email" type="email" size="40" id="email1" name="umail" class="textbox" required></td></tr>
                                                <tr><td><label for="password" class="label"><b>Password : </b></label></td>
                                                    <td><input placeholder="Enter Password" class="textbox" required maxlength="15" type="password" name="upass" id="password1"/></td></tr>
                                                <tr><td><label for="confirm_password"><b>Confirm Password : </b></label></td>
                                                    <td><input placeholder="Re-Type Password" class="textbox" required type="password" maxlength="15" name="ucpass" id="password2" onInput="checkPasswords();"/></td></tr>
                                        <tr><td colspan="2" align="center"><br/><input type="submit" name="register"class="button" value="Submit"/>&nbsp;&nbsp;&nbsp;<input type="reset" class="button"/></td></tr>
                                         </table> 
                                         </form>
                                    </div>
                                </div>
        </div>                 
                             
                                   

