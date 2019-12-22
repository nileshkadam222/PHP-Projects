<?php
session_start();
include_once("includes/connect_db.inc.php");
//unset($_SESSION['checkout-step']);
//echo $_SESSION[checkout-step];

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="css" href="cssfiles/index-page.css">
        <script src="JavaScript/myjquery.js"></script>
        <title>Checkout</title>
        <style>
            div.Loading
            {
                position:absolute;
                margin-left:130px;
                height:25px;
                width:150px;
            }
            div.LoadingImage
            {
                position: absolute;
                height:25px;
                width: 25px;
                background-size:25px 25px;
                background-image:url('images/ve.gif');
            }
            div.LoadingText
            {
                color: crimson;
                text-align: left;
                margin-left:25px;
                padding:3px;
            }
            div.Process
            {
                float:left;
                text-align: center;
                padding:5px;
                height: 20px;
                width: 20px;
                border-radius: 15px;
                background-color:#ddd;
            }
            div.ProcessNo
            {
                font-size:20px;
                color:white;
            }
            div.ProcessName
            {
                padding:5px 16px 0px;;
                font-size: 16px;
                float:left;
                height: 30px;
                width: auto;
                color:green;
            }
            div.Arrow
            {
                float: left;
                height: 30px;
                width: 30px;
                background-size: 30px 30px;
                background-image: url('images/arrow.jpg');
            }
            div.CheckoutProcess
            {
                height: 1000px;
                width:1100px;
                background-color:silver;
            }
            div.LeftContainer
            {
                position:absolute;
                /*background-color: green;*/
                height: auto;
                width: 550px;
                /*border-right:1px double silver;*/
            }
            div.LeftContent
            {
                padding:10px 10px 10px 0px;
                height:auto;
                /*background-color: yellow;*/
            }
            
            div.PaymentOption
            {
                margin:5px 0px 0px 20px;
                padding:10px;
                width: 110px;
                border:1px solid silver;
                background-color:#ddd;
                border-top-left-radius:5px;
                border-bottom-left-radius:5px;
            }
            div.PaymentOption:hover
            {
                color:blue;
                cursor: pointer;
            }
            div.PaymentOptionContent
            {
                color: crimson;
                margin-top:-240px;
                margin-left:151px;
                padding:10px;
                width: 320px;
                height:300px;
                border:1px solid silver;
                border-radius:10px;
                background-color:white;
            }
            div.RightContainer
            {
                padding:10px 10px;
                margin-left:550px;
                /*background-color: blue;*/
                height:auto;
                width: 530px;
            }
            div.RightContent
            {
                padding:10px 10px 10px 0px;
                height:auto;
                /*background-color: yellow;*/
            }
            #shipping-address #billing-address , input
            {
                padding:5px;
                border-radius: 4px;
                border:1px solid silver;
                /*background-color:  #FFA07A*/
            }
            #use-shipping-add-link:hover,#add-new-add-link:hover,#change-shipping-add-link:hover,#change-billing-add-link:hover
            {
                cursor: pointer;
                text-decoration: underline;
            }
            #continue-btn-1,#continue-btn-2,#continue-btn-3,#place-order-btn
            {
                background-color: lightblue;
                box-shadow:2px 2px 5px black;
            }
            #continue-btn-1:hover ,#continue-btn-2:hover ,#continue-btn-3:hover ,#place-order-btn:hover
            {
                cursor: pointer;
                background-color:skyblue;
            }
        </style>
        <script language="JavaScript">
            $(document).ready(function()
             {	
                 
                 $("#credit-card-option").click(function () 
                 {
                    document.getElementById('cod').checked=false;
                    $("#credit-card-option").css('background-color','skyblue');
                    $("#debit-card-option").css('background-color','#ddd');
                    $("#cash-card-option").css('background-color','#ddd');
                    $("#net-banking-option").css('background-color','#ddd');
                    $("#cod-option").css('background-color','#ddd');
                    $("#debit-card-option-content").hide();
                    $("#cash-card-option-content").hide();
                    $("#net-banking-option-content").hide();
                    $("#cod-option-content").hide();
                    $("#credit-card-option-content").fadeIn(500);
                 });
                 $("#debit-card-option").click(function () 
                 {
                    document.getElementById('cod').checked=false;
                    $("#debit-card-option").css('background-color','skyblue');
                    $("#credit-card-option").css('background-color','#ddd');
                    $("#cash-card-option").css('background-color','#ddd');
                    $("#net-banking-option").css('background-color','#ddd');
                    $("#cod-option").css('background-color','#ddd');
                    $("#credit-card-option-content").hide();
                    $("#cash-card-option-content").hide();
                    $("#net-banking-option-content").hide();
                    $("#cod-option-content").hide();
                    $("#debit-card-option-content").fadeIn(500);
                 });
                 $("#cash-card-option").click(function () 
                 {
                    document.getElementById('cod').checked=false;
                    $("#cash-card-option").css('background-color','skyblue');
                    $("#debit-card-option").css('background-color','#ddd');
                    $("#credit-card-option").css('background-color','#ddd');
                    $("#net-banking-option").css('background-color','#ddd');
                    $("#cod-option").css('background-color','#ddd');
                    $("#debit-card-option-content").hide();
                    $("#credit-card-option-content").hide();
                    $("#net-banking-option-content").hide();
                    $("#cod-option-content").hide();
                    $("#cash-card-option-content").fadeIn(500);
                 });
                 $("#net-banking-option").click(function () 
                 {
                    document.getElementById('cod').checked=false;
                    $("#net-banking-option").css('background-color','skyblue');
                    $("#debit-card-option").css('background-color','#ddd');
                    $("#cash-card-option").css('background-color','#ddd');
                    $("#credit-card-option").css('background-color','#ddd');
                    $("#cod-option").css('background-color','#ddd');
                    $("#debit-card-option-content").hide();
                    $("#cash-card-option-content").hide();
                    $("#credit-card-option-content").hide();
                    $("#cod-option-content").hide();
                    $("#net-banking-option-content").fadeIn(500);
                 });
                 $("#cod-option").click(function () 
                 {
                    document.getElementById('display-message').style.display='none';
                    $("#cod-option").css('background-color','skyblue');
                    $("#debit-card-option").css('background-color','#ddd');
                    $("#cash-card-option").css('background-color','#ddd');
                    $("#net-banking-option").css('background-color','#ddd');
                    $("#credit-card-option").css('background-color','#ddd');
                    $("#debit-card-option-content").hide();
                    $("#cash-card-option-content").hide();
                    $("#net-banking-option-content").hide();
                    $("#credit-card-option-content").hide();
                    $("#cod-option-content").fadeIn(500);
                 });
            });
        </script>
        <script>
            var cardno="";
            var cardname="";
            var pwd="";
            var cvvno="";
            var month="";
            var year="";
            var shipping_add="";
            var billing_add="";
            function submit(id,event)
            {
               
               keyvalue=event.charCode;
               if(keyvalue==13)
               {
                    if(id.name=='email' || id.name=='password')
                    {
                        continueProcess('step-one');
                    }
               }
            }
            function continueProcess(step)
            {
                if(step=='step-one')
                {
                    if(document.getElementById('without-pwd-option').checked==true)
                    {
                        if(document.getElementById('email').value=="" || checkEmail()==false)
                        {
                            document.getElementById('email').style.borderColor='red';
                        }
                        else
                        {
                            verifyUser('without-password');
                        }
                    }
                    if(document.getElementById('with-pwd-option').checked==true)
                    {
                        if(document.getElementById('email').value=="" || checkEmail()==false)
                        {
                            document.getElementById('email').style.borderColor='red';
                        }
                        else if(document.getElementById('password').value=="")
                        {
                            document.getElementById('password').style.borderColor='red';
                        }
                        else
                        {
                            verifyUser('with-password');
                        }
                            
                    }
                    
                }
                else if(step=='step-two')
                {
                    var si_name=document.getElementById('si-name').value;
                    var si_add_line1=document.getElementById('si-add-line1').value;
                    var si_add_line2=document.getElementById('si-add-line2').value;
                    var si_city=document.getElementById('si-city').value;
                    var si_state=document.getElementById('si-state').value;
                    var si_pin_code=document.getElementById('si-pin-code').value;
                    var si_mob_no=document.getElementById('si-mobile-no').value;
                    
                    if(document.getElementById('use-shipping-add-checkbox').checked==true)
                    {                       
                        if(si_name!="" && si_add_line1!="" && si_city!="" && si_state!="" && si_pin_code.length==6 && si_mob_no.length==10)
                        {
                            shipping_add=si_name+"~"+si_add_line1+"~"+si_add_line2+"~"+si_city+"~"+si_state+"~"+si_pin_code+"~"+si_mob_no+"~";
                            loadPage('step-three');
                        }
                        else
                        {
                            if(si_name=="")
                                document.getElementById('si-name').style.borderColor='red';
                            if(si_add_line1=="")
                                document.getElementById('si-add-line1').style.borderColor='red';
                            if(si_city=="")
                                document.getElementById('si-city').style.borderColor='red';
                            if(si_state=="")
                                document.getElementById('si-state').style.borderColor='red';
                            if(si_pin_code.length!=6)
                                document.getElementById('si-pin-code').style.borderColor='red';
                            if(si_mob_no.length!=10)
                                document.getElementById('si-mobile-no').style.borderColor='red';
                        }
                    }
                    else
                    {
                        var bi_name=document.getElementById('bi-name').value;
                        var bi_add_line1=document.getElementById('bi-add-line1').value;
                        var bi_add_line2=document.getElementById('bi-add-line2').value;
                        var bi_city=document.getElementById('bi-city').value;
                        var bi_state=document.getElementById('bi-state').value;
                        var bi_pin_code=document.getElementById('bi-pin-code').value;
                        var bi_mob_no=document.getElementById('bi-mobile-no').value;

                        if(si_name!="" && si_add_line1!="" && si_city!="" && si_state!="" && si_pin_code.length==6 && si_mob_no.length==10 && bi_name!="" && bi_add_line1!="" && bi_city!="" && bi_state!="" && bi_pin_code.length==6 && bi_mob_no.length==10)
                        {
                            shipping_add=si_name+"~"+si_add_line1+"~"+si_add_line2+"~"+si_city+"~"+si_state+"~"+si_pin_code+"~"+si_mob_no+"~";
                            billing_add=bi_name+"~"+bi_add_line1+"~"+bi_add_line2+"~"+bi_city+"~"+bi_state+"~"+bi_pin_code+"~"+bi_mob_no+"~";
                            loadPage('step-three');
                        }
                        else
                        {
                            if(si_name=="")
                                document.getElementById('si-name').style.borderColor='red';
                            if(si_add_line1=="")
                                document.getElementById('si-add-line1').style.borderColor='red';
                            if(si_city=="")
                                document.getElementById('si-city').style.borderColor='red';
                            if(si_state=="")
                                document.getElementById('si-state').style.borderColor='red';
                            if(si_pin_code.length!=6)
                                document.getElementById('si-pin-code').style.borderColor='red';
                            if(si_mob_no.length!=10)
                                document.getElementById('si-mobile-no').style.borderColor='red';
                            
                            if(bi_name=="")
                                document.getElementById('bi-name').style.borderColor='red';
                            if(bi_add_line1=="")
                                document.getElementById('bi-add-line1').style.borderColor='red';
                            if(bi_city=="")
                                document.getElementById('bi-city').style.borderColor='red';
                            if(bi_state=="")
                                document.getElementById('bi-state').style.borderColor='red';
                            if(bi_pin_code.length!=6)
                                document.getElementById('bi-pin-code').style.borderColor='red';
                            if(bi_mob_no.length!=10)
                                document.getElementById('bi-mobile-no').style.borderColor='red';
                        }
                    }
                }
                else if(step=='step-three')
                {
                    if(document.getElementById('cod-option-content').style.display=='none')
                    {
                        cardno=document.getElementById('card-no').value;
                        cardname=document.getElementById('card-name').value;
                        pwd=document.getElementById('card-password').value;
                        cvvno=document.getElementById('cvv-no').value;
                        month=document.getElementById('month').value;
                        year=document.getElementById('year').value;
                        if(cardno!="" && cardname!="" && pwd!="" && cvvno!="" && month!="" && year!="")
                        {
                            loadPage('step-four');
                        }
                        else
                        {
                            document.getElementById('display-message').style.display='block';
                            document.getElementById('message').innerHTML='Please fill all field, then only you will continue.';
                        }
                    }
                    else
                    {
                        if(document.getElementById('cod').checked==true)
                        {
                            loadPage('step-four');
                        }
                        else
                        {
                            alert('please checked');
                        }
                    }
                    
                }
                else if(step=='step-four')
                {
                    if(document.getElementById('captcha-box').value!="")
                    {
                        if(document.getElementById('captcha').value==document.getElementById('captcha-box').value)
                        {
                            loadPage('step-over');
                        }
                        else
                        {
                            window.location.reload();
                        }
                    }
                    else
                    {
                        document.getElementById('captcha-box').style.borderColor='red';
                    }
                }
                
            }
            function verifyUser(action)
            {
                var email=document.getElementById("email").value;
                var pwd=document.getElementById("password").value;
                var xmlhttp;
                document.getElementById('loading').style.display='block';
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
                        if(xmlhttp.responseText=='email-exist')
                        {
                            document.getElementById('loading').style.display='none';
                            document.getElementById('display-message').style.display='block';
                            document.getElementById('message').innerHTML='Sorry ! This Email-id already exist. You continue with this Email-id only by giving correct password. Otherwise try anoter Email-id.';
                        }
                        if(xmlhttp.responseText=='valid-user')
                        {
                            loadPage('step-two');
                        }
                        if(xmlhttp.responseText=='invalid-user')
                        {
                            document.getElementById('loading').style.display='none';
                            document.getElementById('display-message').style.display='block';
                            document.getElementById('message').innerHTML='Email-id and password are invalid. Please try again';
                        }
                    }
                  }
                if(action=='with-password')
                    xmlhttp.open("GET","lib/verify-user.php?email="+email+"&pwd="+pwd+"&action="+action,true);
                if(action=='without-password')
                    xmlhttp.open("GET","lib/verify-user.php?email="+email+"&action="+action,true);
                xmlhttp.send();
                
            }
            function loadPage(step)
            {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                  xmlhttp=new XMLHttpRequest();
                }
                else
                {
                  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState==4)
                    {   
                        
                        if(step=='step-over')
                        { 
                        orderno=xmlhttp.responseText;
                        //location.href='index.php?order=confirm&orderno='+orderno; 
                        document.getElementById('order-no').value=orderno;
                        document.frmOrder.submit();
                        }
                        else
                        {
                        document.getElementById('loading').style.display='none';
                        location.href='checkout.php?process='+step;
                        }
                    }
                }
                if(step=='step-two')
                {
                    email=document.getElementById('email').value;
                    xmlhttp.open("GET","lib/setSession.php?checkout-step="+step+"&email="+email,true);
                }
                else if(step=='step-three')
                {
                    xmlhttp.open("GET","lib/setSession.php?checkout-step="+step+"&shipping-add="+shipping_add+"&billing-add="+billing_add,true);
                }
                else if(step=='step-four')
                {
                    if(document.getElementById('cod-option-content').style.display!='none')
                    {
                        xmlhttp.open("GET","lib/setSession.php?checkout-step="+step,true);
                    }
                    else
                        {
                        
                        
                        xmlhttp.open("GET","lib/setSession.php?checkout-step="+step+"&cno="+cardno+"&cname="+cardname+"&cvvno="+cvvno+"&month="+month+"&year="+year+"&pwd="+pwd,true);   
                        }
                }
                else if(step=='step-over' || step=='change-address')
                {
                    xmlhttp.open("GET","lib/setSession.php?checkout-step="+step,true);
                }
                xmlhttp.send();

            }
            function setBorderColor(id)
            {
                if(id.value!="") 
                    {
                        id.style.borderColor="silver";
                    }
            }
            
            function checkEmail()
            {
                var email = document.getElementById('email');
                var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if(document.getElementById('email').value!="")
                    {
                        if (!filter.test(email.value)) 
                        {
                            return false;
                         }
                         else
                         {
                             return true; 
                         }
                    }                
            }
            function showBillingAddress()
            {
                if(document.getElementById('billing-address').style.display=='block')
                    {
                       document.getElementById('billing-address').style.display='none'; 
                       document.getElementById('use-shipping-add-checkbox').checked=true;
                    }                    
                else
                    {
                    document.getElementById('billing-address').style.display='block';
                    document.getElementById('use-shipping-add-checkbox').checked=false;
                    }
            }
            function setChecked()
            {
                if(document.getElementById('use-shipping-add-checkbox').checked==true)
                    document.getElementById('billing-address').style.display='none';
                else
                    document.getElementById('billing-address').style.display='block';
            }
            
        </script>
    </head>
    <body>
        <form action="checkout.php" method="post">
            <input type="hidden" id="process-no" name="process" value="step-one">
        </form>
        <form name="frmOrder" action="index.php" method="post">
            <input type="hidden" id="order-no" name="orderNo">
        </form>
        <div class="MainContainer" >
            <div class="HeaderContainer">
                <a href="index.php" ><div id="logo" class="Logo" style="height:100px;width:328px;background-size: 328px 100px;"></div></a>
                <div class="HeaderContent">
                    <div style="text-align: right;padding: 0px 5px;font-size: 18px;height:35px;">
                        <div id="loading" class="Loading" hidden><div class="LoadingImage"></div><div class="LoadingText">Verifying...</div></div>
                        <?php
                        $cart=0;
                        if(isset($_SESSION['cart']))
                            $cart=count($_SESSION['cart']);
                        if(isset($_SESSION['loggedUserEmail']))
                        {
                            echo "<span style='color:darkred'> Welcome $_SESSION[loggedUserName] | </span><a id='header-myaccount-link' href='myaccount.php?view=my-profile'>My Account</a><span> | </span>".
                                 "<a id='header-cart-link' href='shopping-cart.php'>Cart(".$cart.")</a>";
                        }
                        else
                        {
                            echo "<a id='header-signup-link' href='login.php'>Sign Up</a><span> | </span>".
                                 "<a id='header-signin-link' href='login.php'>Sign In</a><span> | </span>".
                                 "<a id='header-cart-link' href='shopping-cart.php'>Cart(".$cart.")</a>";
                        }
                        ?>
                    </div>    
                    <div style="margin-left:40px;height:50px;width: 772px;padding-top:10px;">
                        <div id="process-1" class="Process"><div class="ProcessNo"><b>1</b></div></div><div class="ProcessName">User information</div><div class="Arrow"></div>
                        <div id="process-2" class="Process"><div class="ProcessNo"><b>2</b></div></div><div class="ProcessName">Address</div><div class="Arrow"></div>
                        <div id="process-3" class="Process"><div class="ProcessNo"><b>3</b></div></div><div class="ProcessName">Payment Options</div><div class="Arrow"></div>
                        <div id="process-4" class="Process"><div class="ProcessNo"><b>4</b></div></div><div class="ProcessName">Review and Place Order</div>
                    </div>
                    <?php
                    if(isset($_SESSION['checkout-step']))
                    {
                        if($_SESSION['checkout-step']=='step-one')
                        {
                            echo "<script>document.getElementById('process-1').style.backgroundColor='black';</script>";
                        }
                        else if($_SESSION['checkout-step']=='step-two')
                        {
                           echo "<script>document.getElementById('process-1').style.backgroundColor='lightgreen';</script>"; 
                           echo "<script>document.getElementById('process-2').style.backgroundColor='black';</script>"; 
                        }
                        else if($_SESSION['checkout-step']=='step-three')
                        {
                            echo "<script>document.getElementById('process-1').style.backgroundColor='lightgreen';</script>"; 
                            echo "<script>document.getElementById('process-2').style.backgroundColor='lightgreen';</script>"; 
                            echo "<script>document.getElementById('process-3').style.backgroundColor='black';</script>"; 
                        }
                        else if($_SESSION['checkout-step']=='step-four')
                        {
                            echo "<script>document.getElementById('process-1').style.backgroundColor='lightgreen';</script>"; 
                            echo "<script>document.getElementById('process-2').style.backgroundColor='lightgreen';</script>"; 
                            echo "<script>document.getElementById('process-3').style.backgroundColor='lightgreen';</script>"; 
                            echo "<script>document.getElementById('process-4').style.backgroundColor='black';</script>"; 
                        }
                    }
                    ?>
                </div>
                
           </div>            
            <div class="BodyContainer" style="margin-top:-35px;">
                <div id="display-message" class="DisplayMessages" hidden>
                    <div style="position: absolute; height:20px;width:1050px;margin:15px;">
                        <span id="message" style="color:darkred;"></span>
                    </div>
                    <div style="height:20px;width:20px;margin-left:1065px;margin-top:15px;">
                        <input type="button" id="close-btn" onclick="document.getElementById('display-message').style.display='none'" style="height: 20px;width: 20px;border-radius:10px;background-image: url(Images/close-red-btn.png)"/>
                    </div>
                </div>
                <?php 
                if(isset($_SESSION['checkout-step']))
                {
                    if($_SESSION['checkout-step']=='step-one')
                        echo "<div id='checkout-process-1' class='CheckoutProces' >";
                    else
                        echo "<div id='checkout-process-1' class='CheckoutProces'hidden >";
                }
                else
                    echo "<div id='checkout-process-1' class='CheckoutProces'hidden >";                
                ?>
                    <div class="LeftContainer">
                        <div  class="LeftContent">
                            <span style="font-size:20px;color:black"><b>1. Please Sign in</b></span><br><br>
                            <table style="margin-left:20px" cellspacing="10">
                                <tr><td><span>Email : </span><div style="height:20px;"></div></td>
                                    <td><input id="email"  name="email" onkeyup="setBorderColor(this)" onkeypress="submit(this,event)" type="text" maxlength="50" style="width:260px" value="<?php if(isset($_SESSION['loggedUserEmail'])) echo $_SESSION['loggedUserEmail'] ?>">
                                        <div style="height:20px;font-size:13px;">
                                            <span style="color:silver;">(Your order details will be sent to this email address)</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr><td></td><td><input id="without-pwd-option" onclick="document.getElementById('password-container').style.display='none'" name="passwordOption" type="radio" checked >Continue without password</td></tr>
                                <tr><td></td><td><input id="with-pwd-option" onclick="document.getElementById('password-container').style.display='block'" name="passwordOption" type="radio"  >I have a password</td></tr>
                                <tr><td></td>
                                    <td><div hidden id="password-container" class="PasswordContainer" >
                                            <span>Password : </span><input id="password"  name="password" type="password" onkeypress="submit(this,event)" style="width:260px"  ><br>
                                            <span style="font-size:12px;margin-left:70px"><a style="text-decoration:none" href="">Forgot Password?</a></span>
                                        </div>
                                        <input id="continue-btn-1" onclick="continueProcess('step-one')" name="" type="button" value="Continue" style="margin-left:250px;width:95px;">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <?php 
                if(isset($_SESSION['checkout-step']))
                {
                    if($_SESSION['checkout-step']=='step-two')
                        echo "<div id='checkout-process-2' class='CheckoutProces' >";
                    else
                        echo "<div id='checkout-process-2' class='CheckoutProces'hidden >";
                }
                else 
                    echo "<div id='checkout-process-2' class='CheckoutProces'hidden >";
                ?>
                <!--<div id="checkout-process-2" class="CheckoutProces" hidden >-->
                    <div class="LeftContainer">
                        <div id="shipping-address" class="LeftContent">
                           <span style="font-size:20px;color:black"><b>2. Address</b></span><br><br>
                           <span style="font-size:18px;color:black">Shipping address</span>
                           <hr  style="border:1px dotted silver;width:450px;margin-left: 0px">
                           <table  style="font-size:14px;" cellspacing="10">
                               <tr><td colspan="2">Name<span style="color:red">*</span><br><input id="si-name" onkeyup="setBorderColor(this)" type="text" style="width:200px"></td></tr>
                               <tr><td colspan="2">Address line 1<span style="color:red">*</span><br><input id="si-add-line1" onkeyup="setBorderColor(this)" type="text" style="width:400px"></td></tr>  
                               <tr><td colspan="2">Address line 2<br><input id="si-add-line2" onkeyup="setBorderColor(this)" type="text" style="width:400px"></td></tr>
                               <tr><td>City<span style="color:red">*</span><br><input id="si-city" onkeyup="setBorderColor(this)" type="text" style="width:200px"></td>
                                   <td>State<span style="color:red">*</span><br>
                                       <select id="si-state" onchange="setBorderColor(this)" style="padding:4px;border-radius:5px;border-color: silver;width:200px">
                                            <option value="">- Select state -</option>
                                            <option  value="AN">Andaman &amp; Nicobar</option>
                                            <option  value="AP">Andhra Pradesh</option>
                                            <option  value="AC">Arunachal Pradesh</option>
                                            <option  value="AS">Assam</option>
                                            <option  value="BH">Bihar</option>
                                            <option  value="CH">Chandigarh</option>
                                            <option  value="CG">Chattisgarh</option>
                                            <option  value="DN">Dadar &amp; Nagar Haveli</option>
                                            <option  value="DD">Daman &amp; Diu</option>
                                            <option  value="NCR">Delhi</option>
                                            <option  value="GA">Goa</option>
                                            <option  value="GJ">Gujarat</option>
                                            <option  value="HR">Haryana</option>
                                            <option  value="HP">Himachal Pradesh</option>
                                            <option  value="J&K">Jammu &amp; Kashmir</option>
                                            <option  value="JR">Jharkhand</option>
                                            <option  value="KR">Karnataka</option>
                                            <option  value="KL">Kerala</option>
                                            <option  value="LD">Lakshadweep</option>
                                            <option  value="MP">Madhya Pradesh</option>
                                            <option  value="MH">Maharashtra</option>
                                            <option  value="MN">Manipur</option>
                                            <option  value="MG">Meghalaya</option>
                                            <option  value="MR">Mizoram</option>
                                            <option  value="NG">Nagaland</option>
                                            <option  value="OR">Orissa</option>
                                            <option  value="PD">Pondicherry</option>
                                            <option  value="PB">Punjab</option>
                                            <option  value="RJ">Rajasthan</option>
                                            <option  value="SK">Sikkim</option>
                                            <option  value="TN">Tamil Nadu</option>
                                            <option  value="TR">Tripura</option>
                                            <option  value="UP">Uttar Pradesh</option>
                                            <option  value="UK">Uttarakhand</option>
                                            <option  value="WB">West Bengal</option>
                                        </select>
                                   </td>
                               </tr>
                               <tr><td>Pin code<span style="color:red">*</span><br><input id="si-pin-code" name="siPinCode" onkeyup="setBorderColor(this)" onblur="checkValue(this)" type="text" style="width:200px"></td>
                                   <td>Mobile no<span style="color:red">*</span><br>+91<input id="si-mobile-no" name="siMobNo" onkeyup="setBorderColor(this)" onblur="checkValue(this)" type="text" style="width:165px"></td>
                               </tr>                        
                           </table>
                           <?php
                           if(isset($_SESSION['loggedUserEmail']))
                           {
                                $result=  mysql_query("select * from user_profile where email_id='$_SESSION[loggedUserEmail]' ");
                                $row=  mysql_fetch_array($result);
                                echo "<script>document.getElementById('si-name').value='$row[user_name]';".
                                             "document.getElementById('si-add-line1').value='$row[add_line1]';".
                                             "document.getElementById('si-add-line2').value='$row[add_line2]';".
                                             "document.getElementById('si-city').value='$row[city]';".
                                             "document.getElementById('si-state').value='$row[state]';".
                                             "document.getElementById('si-pin-code').value='$row[pin_code]';".
                                             "document.getElementById('si-mobile-no').value='$row[mob_no]';".
                                     "</script>";
                           }
                           ?>
                        </div>
                    </div>
                    <div  class="RightContainer">
                        <div  class="RightContent"><br><br>
                            <span style="font-size:18px;color:black">Billing address</span><hr style="border:1px dotted silver;width:460px;margin-left: 0px">
                            <input id="use-shipping-add-checkbox" onclick="setChecked()" type="checkbox" checked> <span onclick="showBillingAddress()" id="use-shipping-add-link" style="font-size:14px;color:blue">Use my shipping address</span>
                            <div id="billing-address" class="RightContainer" style="margin-left:-10px;" hidden>                               
                               <table  style="font-size:14px;" cellspacing="10">
                                   <tr><td colspan="2">Name<span style="color:red">*</span><br><input id="bi-name" onkeyup="setBorderColor(this)" type="text" style="width:200px"></td></tr>
                                   <tr><td colspan="2">Address line 1<span style="color:red">*</span><br><input id="bi-add-line1" onkeyup="setBorderColor(this)" type="text" style="width:400px"></td></tr>  
                                   <tr><td colspan="2">Address line 2<br><input id="bi-add-line2" type="text" style="width:400px"></td></tr>
                                   <tr><td>City<span style="color:red">*</span><br><input id="bi-city" onkeyup="setBorderColor(this)" type="text" style="width:200px"></td>
                                       <td>State<span style="color:red">*</span><br>
                                       <select id="bi-state" onchange="setBorderColor(this)" style="padding:4px;border-radius:5px;border-color: silver;width:200px">
                                            <option value="">- Select state -</option>
                                            <option  value="AN">Andaman &amp; Nicobar</option>
                                            <option  value="AP">Andhra Pradesh</option>
                                            <option  value="AC">Arunachal Pradesh</option>
                                            <option  value="AS">Assam</option>
                                            <option  value="BH">Bihar</option>
                                            <option  value="CH">Chandigarh</option>
                                            <option  value="CG">Chattisgarh</option>
                                            <option  value="DN">Dadar &amp; Nagar Haveli</option>
                                            <option  value="DD">Daman &amp; Diu</option>
                                            <option  value="NCR">Delhi</option>
                                            <option  value="GA">Goa</option>
                                            <option  value="GJ">Gujarat</option>
                                            <option  value="HR">Haryana</option>
                                            <option  value="HP">Himachal Pradesh</option>
                                            <option  value="J&K">Jammu &amp; Kashmir</option>
                                            <option  value="JR">Jharkhand</option>
                                            <option  value="KR">Karnataka</option>
                                            <option  value="KL">Kerala</option>
                                            <option  value="LD">Lakshadweep</option>
                                            <option  value="MP">Madhya Pradesh</option>
                                            <option  value="MH">Maharashtra</option>
                                            <option  value="MN">Manipur</option>
                                            <option  value="MG">Meghalaya</option>
                                            <option  value="MR">Mizoram</option>
                                            <option  value="NG">Nagaland</option>
                                            <option  value="OR">Orissa</option>
                                            <option  value="PD">Pondicherry</option>
                                            <option  value="PB">Punjab</option>
                                            <option  value="RJ">Rajasthan</option>
                                            <option  value="SK">Sikkim</option>
                                            <option  value="TN">Tamil Nadu</option>
                                            <option  value="TR">Tripura</option>
                                            <option  value="UP">Uttar Pradesh</option>
                                            <option  value="UK">Uttarakhand</option>
                                            <option  value="WB">West Bengal</option>
                                        </select>
                                   </tr>
                                   <tr><td>Pin code<span style="color:red">*</span><br><input id="bi-pin-code" name="biPinCode" onkeyup="setBorderColor(this)" onblur="checkValue(this)" type="text" style="width:200px"></td>
                                       <td>Mobile no<span style="color:red">*</span><br>+91<input id="bi-mobile-no" name="biMobNo" onkeyup="setBorderColor(this)" onblur="checkValue(this)" type="text" style="width:165px"></td>
                                   </tr>                        
                               </table><br>
                           </div>
                           <input id="continue-btn-2" type="button" onclick="continueProcess('step-two')" style="width:100px;margin-left:360px;" value="Continue">
                      </div>
                </div>
            </div>
                <?php 
                if(isset($_SESSION['checkout-step']))
                {
                    if($_SESSION['checkout-step']=='step-three')
                        echo "<div id='checkout-process-3' class='CheckoutProces' >";
                    else
                        echo "<div id='checkout-process-3' class='CheckoutProces' hidden >";
                }
                else 
                    echo "<div id='checkout-process-3' class='CheckoutProces' hidden >";
                ?>
                <!--<div id="checkout-process-3" class="CheckoutProces" hidden>-->
                    <div class="LeftContainer">
                        <div  class="LeftContent">
                            <span style="font-size:20px;color:black"><b>3. Payments Options</b></span><br>
                            <span style="margin-left: 20px;font-size:18px;color:black">Select a Payment Method</span>
                            <hr  style="border:1px dotted silver;width:470px;margin-left:20px"><br>
                            <div id="credit-card-option" class="PaymentOption"  >Credit Card</div>
                            <div id="debit-card-option" class="PaymentOption"  >Debit Card</div>
                            <div id="cash-card-option" class="PaymentOption"  >Cash Card</div>
                            <div id="net-banking-option" class="PaymentOption"  >Net Banking</div>
                            <div id="cod-option" class="PaymentOption" style="background-color:skyblue" >Cash On Delivery</div>
                            <div class="PaymentOptionContent">
                                <div id="credit-card-option-content"  hidden>
                                    <span style="color:skyblue;font-size:20px"><b>Credit Card</b></span><br><br>
                                    This payment option currently not supported by us. Try another options.
                                </div>
                                <div id="debit-card-option-content" style="color: #888888" hidden>
                                    <span style="color:skyblue;font-size:20px"><b>Debit Card</b></span><br><br>
                                    Card Number<br><input id="card-no" type="text" style="width:250px" ><br>
                                    Name on card<br><input id="card-name" type="text" style="width:200px" ><br>
                                    Password<br><input id="card-password" type="password" style="width:200px" ><br>
                                    CVV No.<br><input id="cvv-no" type="password" style="width:50px" ><br>
                                    Expiry date<br><select id="month" style="padding:5px;"><option value="">Month</option><?php for($i=1;$i<=12;$i++) echo "<option value='$i'>$i</option>"; ?></select>
                                                   &nbsp;&nbsp;<select id="year" style="padding:5px;width:100px;"><option value="">Year</option><?php for($i=2013;$i<=2050;$i++) echo "<option value='$i'>$i</option>"; ?></select><br>
                                    
                                </div>
                                <div id="cash-card-option-content"  hidden>
                                    <span style="color:skyblue;font-size:20px"><b>Cash Card</b></span><br><br>
                                    This payment option currently not supported by us. Try another options.
                                </div>
                                <div id="net-banking-option-content" hidden>
                                    <span style="color:skyblue;font-size:20px"><b>Net Banking</b></span><br><br>
                                    This payment option currently not supported by us. Try another options.
                                </div>
                                <div id="cod-option-content" >
                                    <span style="color:skyblue;font-size:20px"><b>Cash On Delivery</b></span><br>
                                    <span style="color:gray;">Please click on the button below to select Cash on Delivery.</span><br><br>
                                    <input  id="cod" type="radio"> <span style="color:gray;"> I agree to pay Cash for this order when this order is delivered to me.</span>
                                </div>
                           </div><br>
                           <span style="margin-left: 20px;font-size:18px;color:black">Apply promotion codes</span>
                           <hr style="border:1px dotted silver;width:470px;margin-left:20px"><br>
                           <span style="margin-left: 20px;font-size:14px;color:black">Coupon Code : </span><input type="text" placeholder="Enter Coupon Code and click Apply" style="width:300px"> <a style="margin-left:10px;text-decoration: none;" href=""> Apply</a>
                        </div>
                    </div>
                    <div  class="RightContainer">
                        <div id="right-process-3" class="RightContent">
                            <span style="font-size:18px;color:black">Products in your order</span>
                            <hr style="border:1px solid green;width:500px;margin-left: 0px">
                            <?php
                            $subTotal=0;
                            $shippingCost=0;
                            $totalPayableAmount=0;
                            echo "<table width='500'>";
                                if(isset($_SESSION['cart']))
                                {
                                    $max=count($_SESSION['cart']);
                                    for($i=0;$i<$max;$i++)
                                    {
                                        $productNo=$_SESSION['cart'][$i]['pno'];
                                        $quantity=$_SESSION['cart'][$i]['qty'];
                                        $result=mysql_query("select * from book_details where product_no=$productNo");
                                        $row=mysql_fetch_array($result);
                                        if($row['discount']>0)
                                        {
                                             $sellingPrice=round($row['price']-$row['price']*$row['discount']/100);
                                        }
                                        else
                                        {
                                             $sellingPrice=$row['price'];
                                        }
                                        $total=$quantity*$sellingPrice;
                                        $subTotal=$subTotal+$total;
                                        
                                        echo "<tr><td width='320' style='color:gray'>$row[title]</td><td>Quantity: $quantity</td><td style='text-align:right'>Rs. $total</td></tr>";
                                        if($i<$max-1) echo "<tr><td colspan=3><hr style='border:1px dotted #ddd;'></td><tr>";
                                    }
                                    if($subTotal<300)
                                            $shippingCost=30;
                                        $totalPayableAmount=$subTotal+$shippingCost;
                                }
                                else
                                {
                                    echo "<tr><td width='320'>No any products</td></tr>";
                                }
                                                              
                            echo "</table>";
                            echo "<hr style='border:1px solid green;width:500px;margin-left: 0px'>".
                                 "<table width='500' style='text-align:right'>".
                                 "<tr><td width='320'>Subtotal :</td><td>Rs. $subTotal</td></tr>";
                                 if($shippingCost==0) 
                                     echo "<tr><td width='320'>Shipping Cost :</td><td style='color:green'><b>FREE</b></td></tr>";
                                 else
                                     echo "<tr><td width='320'>Shipping Cost :</td><td>Rs. $shippingCost</td></tr>";
                                 echo "<tr style='color:darkred;font-size:24px;'><td width='320' ><b>Total :</b></td><td><b>Rs. $totalPayableAmount</b></td></tr>";
                            ?>
                                <tr><td >&nbsp;</td><td>&nbsp;</td></tr>
                                <tr ><td ></td><td><input id="continue-btn-3" type="button" onclick="continueProcess('step-three')" style="width:100px;" value="Continue"></td></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <?php 
                if(isset($_SESSION['checkout-step']))
                {
                    if($_SESSION['checkout-step']=='step-four')
                        echo "<div id='checkout-process-4' class='CheckoutProces' >";
                    else
                        echo "<div id='checkout-process-4' class='CheckoutProces'hidden >";
                }
                else 
                    echo "<div id='checkout-process-4' class='CheckoutProces'hidden >";
                ?>
                <!--<div id="checkout-process-4" class="CheckoutProces" hidden>-->
                    <div class="LeftContainer">
                        <div  class="LeftContent" >
                            <span style="font-size:20px;color:black"><b>4. Review and Place Order</b></span><br><br>
                            <div style="margin-left:20px">
                                <span style="font-size:16px;color:black"><b>Shipping Address:</b></span><br>
                                <div style="margin-left:140px;color:gray;margin-top:-20px;height:auto;width:300px;">
                                    <?php
                                    if(isset($_SESSION['shippingAdd']))
                                        echo $_SESSION['shippingAdd'];
                                    else 
                                        echo "Not Available";
                                    ?>
                                    <br><span id="change-shipping-add-link" onclick="loadPage('change-address')" style="color:blue">Change</span><br><br>
                                </div>                            
                                <span style="font-size:16px;color:black"><b>Billing Address:</b></span><br>
                                <div style="margin-left:140px;color:gray;margin-top:-20px;height:auto;width:300px;">
                                    <?php
                                    if(isset($_SESSION['billingAdd']))
                                    {
                                        if($_SESSION['billingAdd']!="")
                                            echo $_SESSION['billingAdd'];
                                        else
                                            echo "Same as the shipping address.";
                                    }
                                    ?>
                                    <br><span id="change-billing-add-link" onclick="loadPage('change-address')" style="color:blue">Change</span><br><br>
                                </div>
                                <span style="font-size:16px;color:black"><b>Payment Method:</b>&nbsp;&nbsp;&nbsp;</span > <span style="color:gray">Cash On Delivery</span><br><br>
                                <hr  style="border:1px dotted silver;width:450px;margin-left: 0px">
                                <span style="font-size:16px;color:black"><b>Type the characters you see in the picture below:</b></span><br><br>&nbsp;
                                <input id="captcha-box" type="text" onkeyup="setBorderColor(this)" style="padding:10px;width:150px">
                                <div style="float:left;padding:4px;font-size:24px;text-align:center;height:30px;width:150px;background-image:url('images/captcha-background.jpg');border:1px solid green;">
                                    <?php
                                    if(isset($_SESSION['checkout-step']))
                                    {
                                        if($_SESSION['checkout-step']=='step-four')
                                        {
                                            $i=0;
                                            $captcha=null;
                                            $captchaValue=null;
                                            while (1==1)
                                            {
                                                $no=  rand(48,122);
                                                if($no < 58 or $no >64 and $no <91 or $no>96)
                                                {
                                                    $captcha=$captcha.chr($no)." ";
                                                    $captchaValue=$captchaValue.chr($no);
                                                    $i++;
                                                    if($i==4)
                                                        break;
                                                }
                                            }
                                            echo "<input type='hidden' id='captcha' value='$captchaValue'>";
                                            echo $captcha;
                                        }
                                    }                                    
                                    ?>
                                </div>
                                <a href="" style="margin-left:10px">Change Picture</a>
                            </div>
                        </div>
                    </div>
                    <div  class="RightContainer">
                        <div  class="RightContent">
                            <span style="font-size:18px;color:black">Products in your order</span>
                            <hr style="border:1px dotted silver;width:500px;margin-left: 0px">
                            <?php
                            $subTotal=0;
                            $shippingCost=0;
                            $totalPayableAmount=0;
                            echo "<table width='500'>";
                                if(isset($_SESSION['cart']))
                                {
                                    $max=count($_SESSION['cart']);
                                    for($i=0;$i<$max;$i++)
                                    {
                                        $productNo=$_SESSION['cart'][$i]['pno'];
                                        $quantity=$_SESSION['cart'][$i]['qty'];
                                        $result=mysql_query("select * from book_details where product_no=$productNo");
                                        $row=mysql_fetch_array($result);
                                        if($row['discount']>0)
                                        {
                                             $sellingPrice=round($row['price']-$row['price']*$row['discount']/100);
                                        }
                                        else
                                        {
                                             $sellingPrice=$row['price'];
                                        }
                                        $total=$quantity*$sellingPrice;
                                        $subTotal=$subTotal+$total;
                                        
                                        echo "<tr><td width='320' style='color:gray'>$row[title]</td><td>Quantity: $quantity</td><td style='text-align:right'>Rs. $total</td></tr>";
                                        if($i<$max-1) echo "<tr><td colspan=3><hr style='border:1px dotted #ddd;'></td><tr>";
                                    }
                                    if($subTotal<300)
                                            $shippingCost=30;
                                        $totalPayableAmount=$subTotal+$shippingCost;
                                }
                                else
                                {
                                    echo "<tr><td width='320'>No any products</td></tr>";
                                }
                                                              
                            echo "</table>";
                            echo "<hr style='border:1px solid green;width:500px;margin-left: 0px'>".
                                 "<table width='500' style='text-align:right'>".
                                 "<tr><td width='320'>Subtotal :</td><td>Rs. $subTotal</td></tr>";
                                 if($shippingCost==0) 
                                     echo "<tr><td width='320'>Shipping Cost :</td><td style='color:green'><b>FREE</b></td></tr>";
                                 else
                                     echo "<tr><td width='320'>Shipping Cost :</td><td>Rs. $shippingCost</td></tr>";
                                 echo "<tr style='color:darkred;font-size:24px;'><td width='320' ><b>Total :</b></td><td><b>Rs. $totalPayableAmount</b></td></tr>";
                            ?>
                                <tr><td >&nbsp;</td><td>&nbsp;</td></tr>
                                <tr ><td ></td><td><input id="place-order-btn" type="button" onclick="continueProcess('step-four')" style="width:100px;" value="Place Order"></td></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div name="footer" style="position:absolute;background-color: blue;color: white;width:1100px;height:20px;text-align:center;margin-top:500px">
                Copyright © 2011-2013 24hoursbooks.com
            </div>
            </div>
            
        </div>
        
        <?php
        
        ?>
    </body>
</html>
