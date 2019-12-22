<html>
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="images/iconNHP.png" media="screen" type="image/png" title="NHP" />
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NHP- Login Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" />    
<SCRIPT language=Javascript>
			  <!--
			  function isNumberKey1(evt)
			  {
				 var charCode = (evt.which) ? evt.which : event.keyCode
				 if (charCode > 31 && (charCode < 48 || charCode > 57))
				return false;

			  }
			  //-->
		</SCRIPT>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />



  </script>
<script type="text/javascript">
$(function() {
    $('#map a').lightBox();
});



function verify(){
	var use=reg.re.value;
	if(use!='Password Matched'){
		alert("Password not matched!");
		return false;
		}
	}

</script>
 <link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="js/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'images/loading.gif',
        closeImage   : 'images/closelabel.png'
      })
    })

  </script>
<SCRIPT src="js/dnn.js"></SCRIPT>
</head>
<body>
<div id="tooplate_body_wrapper">
<div id="tooplate_wrapper">
	

    <div id="tooplate_header">
        <div id="site_title"><h1><a href="#"></a></h1></div>

        <div id="tooplate_menu" align="center">
      <ul>
                  <li><a href="index.php">Home</a></li>
                <li><a href="javascript:alert('This is for complete version only')">About Us</a></li>
                <li><a href="javascript:alert('This is for complete version only')">Policy</a></li>
                <li><a href="javascript:alert('This is for complete version only')">Products</a></li>
                <li><a href="javascript:alert('This is for complete version only')">Contact</a></li>
                                     
                    <li><a href="forum.php">Forum</a></li>
                    <li><a href="javascript:alert('This is for complete version only')">Customize</a></li>
                    <li><a href="javascript:alert('This is for complete version only')">Account</a></li>
                   <?php
				  require "connect.php";
				   session_start();
if(!isset($_SESSION['CustomerID'])){ echo'<li><a href="register_login.php" class="current">Login</a></li>'; $ied=0;}
else{$ied=$_SESSION['CustomerID'];
					$resu= mysql_query("SELECT * FROM customerinfo where CustomerID='$ied'");
					while($row = mysql_fetch_array($resu)){ 
					$myusername=$row['Username'];
					if((strlen($myusername))>10){
					echo'<li><a href="logout.php">Logout ('.substr($myusername,0,10).'..)</a></li>';  
					}
					else{ echo'<li><a href="logout.php">Logout ('.$myusername.')</a></li>';  }
					
					 } 
			
					 
    }

?>    <a class="social_btn facebook" href="http://www.facebook.com">&nbsp;</a>
        <a class="social_btn twitter" href="http://www.twitter.com">&nbsp;</a>
            </ul>     	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->	
 
 <img src="images/logo.png" style="alignment-adjust:central">
     <div class="sun"><OBJECT width="100" height="60" type="application/x-shockwave-flash" data="<?php echo'images/glow.swf';?>">
        								
                                         <PARAM name="wmode" value="transparent"/> 
                                         <PARAM name="quality" value="high"/> 
                                         <param name="swfversion" value="9.0.115.0">
   										 <param name="expressinstall" value="Scripts/expressInstall.swf">
                             	<img src="images/butterfly.gif" width="90" height="90" id="dsc"/>
                     </OBJECT></div>  
    <div id="tooplate_middle_subpage">
    
    
    
    	<h2>Sign Up Here!</h2>
        <p></p>	
	</div> <!-- end of middle -->
    
    <div id="tooplate_main">
    <div class="col_w450 float_l">
                
<div CLASS="left">
				<h2>Login Form</h2>
        <div id="contact_form">   <!--   A   J    A    X          C   O   D   E-->                 
<script language="javascript" type="text/javascript">
function ajax_post(){

	//create our xmlHttpRequest object
var hr = new XMLHttpRequest();

	//create some variables we need to send our PHP file
var url="signin.php";

var user=document.getElementById("user").value;
var password=document.getElementById("password").value;


var vars="user="+user+"&password="+password;

hr.open("POST", url, true);

// set content type header information for sending url encoded variables in the request.
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//access the onreadystatechange event for the XMHttpRequest object
hr.onreadystatechange=function(){
	if(hr.readyState==4 && hr.status==200){
		var return_data=hr.responseText;
		document.getElementById("status").innerHTML=return_data;
	}
	
	}
	
// send the data to php now and wait for response to update the status div.
hr.send(vars);
document.getElementById("status").innerHTML="Processing...";
}

</script>
     
        <label>Username</label><br/>
		<input type="text" name="user" id="user"  style="
    box-shadow:0 0 2px 0 blue;
	width:80%;
	padding: 5px;
	border: 3px solid #ccc;
	border-radius:3px;
	color: #000; 
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
	margin-top: 15px;"/><br/>
        <label>Password</label><br/>
        <input type="password" name="password" id="password" style="
    box-shadow:0 0 2px 0 blue;
	width:80%;
	padding: 5px;
	border: 3px solid #ccc;
	border-radius:3px;
	color: #000; 
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
	margin-top: 15px;"/>
        <input type="submit" onClick="javascript:ajax_post();" value="Log-in" name="login" style="
    box-shadow:0 0 2px 0 blue;
	width:80%;
	padding: 5px;
	background:url(images/body.png);
	border: 3px solid #ccc;
	border-radius:3px;
	color: #fff; 
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
	margin-top: 15px;"/>  
        <div id="status"></div>
      </div>
        <br><i><a href="javascript:alert('Not for now!');" style="color:blue">Forgot password?</a></i>
<BR>NOTE: Add questions to recover your password.<bR> Goto Account &lt; Account, and enter your questions and answers.<br> If you don't have the questions, <br>the <strong> Forgot Password </strong> link will be worthless.   <hr align="left">        
</div>
           
    <div id="contact_form">
        <div class="RIGHT">
					<h2>Registration Form</h2>
					
	<form method="post" action="register1.php" name="reg" onSubmit="return verify()">
<label>&nbsp;</label>
<label>First Name</label><input type="text" name="name1" class="input_field" placeholder="ex: Juan" required/>
<label>Last Name</label><input type="text" name="name2" class="input_field" placeholder="ex: Dela Cruz"required />
<label>Middle Name</label><input type="text" name="name3" class="input_field" placeholder="ex: Labay" />
<label>Gender</label>
<select name="gender" class="iselect">
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
<label>Street</label><input type="text" name="add1" placeholder="ex: Panfilo. St"class="input_field" required/>
<label>Barangay</label><input type="text" name="add2" placeholder="ex: Tanza"class="input_field" required />
<label>Municipality</label><input type="text" name="add3" placeholder="ex: Boac"class="input_field" required/>
<label>Province</label><input type="text" name="add4" placeholder="ex: Marinduque" class="input_field" required/>
<label>Email Address</label><input type="email" name="con1" placeholder="example@yahoo.com"class="input_field" required/>

<label>Contact No.</label><input type="text" maxlength="11" minlength="11" name="con2" placeholder="11 digit mobile no."class="input_field" onKeyPress="return isNumberKey1(event)" required/>

<label>Username</label><input type="text" name="user" placeholder="6 characters minimuim." min="6"class="input_field" required/>
<label>Password</label><input type="password" name="pass1" placeholder="" onChange="matching()"class="input_field" required/>
<script> 

  function isNumberKey(evt){}


function OnChange(value){
	var n1=reg.pass1.value;
	var n2=reg.pass2.value;
	if((n1!="")&&(n2!="")){
	
	if(((n2==n1)&&(n1==n2))&&((n2==n1)||(n1==n2))){reg.re.value="Password Matched";
	reg.re.style.color='green';
	reg.re.style.font='italic';}
	else{reg.re.value="Password not Matched!";
	reg.re.style.color='red';
	reg.re.style.font='italic';}
	}else{reg.re.value="Please input your Password to verify!";
	reg.re.style.color='red';
	reg.re.style.font='italic';}
}

</script>
<label>Verify Password</label>
<input type="password" name="pass2" placeholder="" onKeyUp="OnChange(this.value)" onKeyPress="return isNumberKey(event)"class="input_field" required/>
<input type="text" name="re" readonly class="hiddenko" value="*"/>
<label>Birth Date</label><input type="date" name="birth" placeholder="mm/dd/yyyy"class="input_field" required/>
<label>Occupation</label><input type="text" name="occup" placeholder="ex: Engineer"class="input_field" required/>
	<br />			
						<input type="submit" value="Register" name="register" class="isub_l" />
						<input type="reset" value="Reset"  name="reset" class="isub_r" />
						
					</form>
					</div>
				</div><font style="color:#FFF; visibility:hidden">
LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL LLLLLLLLLLL LLLLLLLLLL </font>    

                <div class="cleaner"></div>
            </div>
    
   
        
        <div class="cleaner"></div>
   <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
    	<div class="col_w200 float_l">
        	<h4>Pages</h4>
            <ul class="tooplate_list">
                <li><a href="#">Home</a></li>
                <li><a href="#">Terms & Condition</a></li>
                <li><a href="#">My Account</a></li>
            </ul>
        </div>
        <div class="col_w200 float_l">
        	<h4>Cool Links</h4>
            <ul class="tooplate_list"> 
				<li><a href="#">Customize Flower arrangement</a></li>
                <li><a href="#">View customized products</a></li>
               
            </ul>
        </div>
		<div class="col_w200 float_l">
        	<h4>Other source </h4>
            <ul class="tooplate_list">
	            <li><a href="#">Orchidarium</a></li>
                <li><a href="#">Manila Seedling </a></li>
                <li><a href="#"> Cartimar </a></li>
         
            </ul>
        </div>
        <div class="col_w200 float_r col_last">
        	<h4>Contact Us</h4>
            <p>Email: lelianarvas65@gmail.com, <br />
            Phone: 09092488688 (smart)</p>
            <p>
            </p>
        </div>
        <div class="cleaner"></div>
    </div>
</div>

<div id="tooplate_copyright_wrapper">
	<div id="tooplate_copyright">
    	
	Created by Matthew Mascarenas © 2015 <a href="#">NHP</a>
		
    </div>
</div>
</body>
</html>
