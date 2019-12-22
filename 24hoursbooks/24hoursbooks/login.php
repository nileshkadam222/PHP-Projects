<?php 
session_start();
?> 
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="css" href="cssfiles/index-page.css">
        <title></title>
        <script type="text/javascript" src="imgslider/jquery.nivo.slider.js"></script>
        <link rel="stylesheet" href="imgslider/nivo-slider.css" type="text/css" media="screen" />
        <script language="javascript">
            function setBorderColor(id)
            {
                if(id.value!="") 
                    {
                        id.style.borderColor="silver";
                        document.getElementById('login-id-error').innerHTML="";
                        document.getElementById('password-error').innerHTML="";
                        document.getElementById('name-error').innerHTML="";
                        document.getElementById('email-error').innerHTML="";
                        document.getElementById('pwd-error').innerHTML="";
                        document.getElementById('cpwd-error').innerHTML="";
                    }
            }
            function login()
            {
                
                if(document.getElementById('login-id').value=="")
                    {
                        document.getElementById('login-id').style.borderColor="red";
                        document.getElementById('login-id-error').innerHTML="Please enter login id";
                        document.getElementById('login-id').focus();
                    }
                else if(document.getElementById('password').value=="")
                    {
                        document.getElementById('password').style.borderColor="red";
                        document.getElementById('password-error').innerHTML="Please enter login password";
                        document.getElementById('password').focus();
                    }
                else
                    {                   
                        document.forms[0].submit();
                    }
               
            }
            function createAccount()
            {
                if(document.getElementById('user-name').value=="")
                    {
                        document.getElementById('user-name').style.borderColor="red";
                        document.getElementById('name-error').innerHTML="Please enter your name";
                        document.getElementById('user-name').focus();
                    }
                else if(document.getElementById('email-id').value=="")
                    {
                        document.getElementById('email-id').style.borderColor="red";
                        document.getElementById('email-error').innerHTML="Please enter your email-id";
                        document.getElementById('email-id').focus();
                    }
               else if(document.getElementById('pwd').value=="")
                    {
                        document.getElementById('pwd').style.borderColor="red";
                        document.getElementById('pwd-error').innerHTML="Please enter your password";
                        document.getElementById('pwd').focus();
                    }
              else if(document.getElementById('cpwd').value=="")
                    {
                        document.getElementById('cpwd').style.borderColor="red";
                        document.getElementById('cpwd-error').innerHTML="Please enter confirm passsword";
                        document.getElementById('cpwd').focus();
                    }
              else
                  {
                      if(document.getElementById('pwd').value==document.getElementById('cpwd').value)
                      {
                         document.forms[1].submit(); 
                      }
                      else
                      {
                         document.getElementById('cpwd-error').innerHTML="Password & Confirm password does not match";
                         document.getElementById('pwd').value="";
                         document.getElementById('cpwd').value="";
                         document.getElementById('pwd').focus();
                      }
                  }
            }
            function checkEmail()
            {
                var email = document.getElementById('email-id');
                var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if(document.getElementById('email-id').value!="")
                    {
                        if (!filter.test(email.value)) 
                        {
                            document.getElementById('email-id').style.borderColor="red";
                            document.getElementById('email-error').innerHTML="Invalid email-id please enter a valid email-id";
                            document.getElementById('email-id').value="";
                            document.getElementById('email-id').focus();
                         }
                         else
                         {
                             document.getElementById('email-loading').style.display="block";
                             checkExistingEmail();    
                         }
                    }                
            }
            function checkExistingEmail()
            {
                var emailid=document.getElementById("email-id").value;
                var xmlhttp;
                if (window.XMLHttpRequest)
                  {// code for IE7+, Firefox, Chrome, Opera, Safari
                  xmlhttp=new XMLHttpRequest();
                  }
                else
                  {// code for IE6, IE5
                  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                xmlhttp.onreadystatechange=function()
                  {
                    if (xmlhttp.readyState==4)
                    {            
                        document.getElementById('email-loading').style.display="none";
                        if(xmlhttp.responseText=='Email ID already exist try another email-id')
                        {
                            document.getElementById("email-error").innerHTML=xmlhttp.responseText;
                            document.getElementById('email-id').style.borderColor="red";
                            document.getElementById("email-id").value="";
                            document.getElementById("email-id").focus();
                        }
                    }
                  }
                xmlhttp.open("GET","lib/check-existing-email.php?email="+emailid,true);
                xmlhttp.send();
                
            }
            function checkLengthOfPwd(id)
            {
                if((id.value).length!=0)
                {
                    if((id.value).length<6)
                    {    
                        if(id.name=='pwd')
                           {
                               document.getElementById('pwd-error').innerHTML="Password length should be 6-30 character";
                           }
                       else if(id.name=='cpwd')
                           {
                               document.getElementById('cpwd-error').innerHTML="Password length should be 6-30 character";
                           }
                        id.focus(); 
                    }
                }
            }
           function submit_me(id,event)
           {
               
               keyvalue=event.charCode;
               if(keyvalue==13)
                   {
                       if(id.name=='password')
                           {
                               login();
                           }
                       else if(id.name=='cpwd')
                           {
                               createAccount();
                           }
                   }
           }
        </script>
        <style>
        #login-id ,#password
        {
            width:250px;
            padding: 5px;
            border-radius: 5px;
        }
        #user-name, #email-id, #pwd, #cpwd
        {
            width:230px;
            padding: 5px;
            border-radius: 5px;
        }
            #cart
        {
            background-color:silver;
        }
        #cart:hover
        {
            background-color:#ddd;
            cursor: pointer;
        }
        #close-btn:hover
        {
            cursor: pointer;
        }
        </style>
    </head>
    <body>
        <div class="MainContainer">
            <div class="HeaderContainer">
               <?php
		include("includes/header.inc.php");
		?> 
            </div>
            <form method="POST" action="verify.php">
            <div class="SignIn">
                <h2>Login to your Account</h2><h4>We are happy to see you return! Please log in to continue.</h4>
                <table>
                    <tr><td><span>Login ID</span><br><input id="login-id" onkeyup="setBorderColor(this)" name="loginid" type="text" maxlength="50" required>
                            <div style="height:20px;font-size:13px;">
                                <span id="login-id-error" style="color:red;"></span>
                            </div>
                        </td>
                    </tr>
                    <tr><td><span>Password</span><br><input id="password" onkeypress="submit_me(this,event)" onkeyup="setBorderColor(this)" name="password" type="password" maxlength="30" required>
                            <div style="height:20px;font-size:13px;">
                                <span id="password-error" style="color:red;"></span>
                            </div>
                        </td>
                    </tr>
                </table>

                <input id="remember-me" type="checkbox" value="Remember me" style="width:15px;"  />Remember me<br><br>
                <input id="login-now" onclick="login()" type="button" style="border-radius: 25px;width:150px;height: 35px;background-image: url('Images/login-icon.png');" /><br>&nbsp;
                <hr>  
            </div>
            </form>
            <form method="POST" action="login.php">
            <div class="SignUp">
                <h2>Not a user yet ?</h2><h4>Create an account! It's quick, free and gives you access to special features.</h4>
                <table>
                    <tr><td><span>Name</span><br><input id="user-name" name="username" onkeyup="setBorderColor(this)" type="text" maxlength="30" >
                            <div style="height:20px;font-size:13px;">
                                <span id="name-error" style="color:red;"></span>
                            </div>
                        </td>
                        <td><span>Email ID</span><br><input id="email-id" name="emailid" onblur="checkEmail()" onkeyup="setBorderColor(this)" type="text" maxlength="50" >
                            <div style="height:20px;font-size:13px;">
                                <span id="email-error" style="color:red;"></span>
                            </div>
                        </td><td><div hidden id="email-loading" style="height:25px;width:25px;background-size:25px 25px;background-image: url('images/loading.gif');"></div></td>
                    </tr>
                    <tr><td><span>Password</span><br><input id="pwd" name="pwd" onkeyup="setBorderColor(this)" onblur="checkLengthOfPwd(this)" type="password" maxlength="30" >
                            <div style="height:20px;font-size:13px;">
                                <span id="pwd-error" style="color:red;"></span>
                            </div>
                        </td>
                        <td><span>Confirm password</span><br><input id="cpwd" name="cpwd" onkeypress="submit_me(this,event)"  onkeyup="setBorderColor(this)" onblur="checkLengthOfPwd(this)" type="password" maxlength="30" >
                            <div style="height:20px;font-size:13px;">
                                <span id="cpwd-error" style="color:red;"></span>
                            </div>
                        </td>
                    </tr>
                </table>
                <h5>By clicking this button you agree and accept our <span style="font-size:12px"><a href="">User Agreement</a></span> and <span style="font-size:12px"><a href="">Privacy Policy</a></span>.</h5>
                <input id="create-account" onClick="createAccount()" type="Button" style="border-radius: 25px; width:200px;height: 40px;background-image: url('Images/create-account-icon.png');"  /><br>
                <img src="Images/bg.jpg">
            </div><br>
            </form>
    </div>
       
    <div class="Footer">
        <?php
        include("includes/footer.inc.php");
        ?>&nbsp;
    </div>
       
<?php
        

        
// Start Code for sign up --------------------------------------------------------------------------------------------------
        
if(isset($_POST["username"]) and isset($_POST["emailid"]) and isset($_POST["pwd"]) and isset($_POST["cpwd"]))
{
    include ('includes/connect_db.inc.php');
    $uname=$_POST[username];
    $email=$_POST[emailid];
    $pswd=$_POST[pwd];
    $result=mysql_query("insert into login values('$uname','$email','$pswd','0')");
    $result= mysql_query("insert into user_profile values ('$email','$uname','','','','',0,0)");
    $_SESSION['loggedUserEmail']=$email;
    $_SESSION['loggedUserName']=$uname;
    $_SESSION['loggedUserType']='customer';
    echo "<script>location.href='myaccount.php?view=my-profile&account=created';</script>";
}
// End Code for sign up --------------------------------------------------------------------------------------------------


// Display error message when login id or password are not matched--------------------------------------------------------
if(isset($_POST["login"]))
{
    if($_POST["login"]=='false')
    {
        echo "<script> document.getElementById('display-message').style.display='block'; </script>";
    }
    
}
        
?>
    </body>
</html>
