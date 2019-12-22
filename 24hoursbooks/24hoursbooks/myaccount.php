<?php 
session_start();
include_once('includes/connect_db.inc.php');
function getWishlistProducts()
{
    $email=$_SESSION['loggedUserEmail'];
    $result=  mysql_query("select * from wishlist where email_id='$email'");
    if($result)
    {
        $i=0;
        $products=null;
        while($row=  mysql_fetch_array($result))
        {
            $products[$i++]=$row['product_no'];
        }
        return $products;
    }
}
function getOrderedProducts($orderNo,$orderDate)
{
    $products="";
    $result=  mysql_query("select * from sub_orders where order_no='$orderNo' and order_date='$orderDate'");
    if($result)
    {
        while($row=  mysql_fetch_array($result))
        {
            $products=$products.$row['product_name']."  (Qty: ".$row['quantity']." )<br>";
        }
        return $products;
    }
}
function getAmountPaid($orderNo,$orderDate)
{
    $total=0;
    $result=  mysql_query("select * from sub_orders where order_no=$orderNo and order_date='$orderDate'");
    if($result)
    {
        while($row=  mysql_fetch_array($result))
        {
            $total=$total+$row['selling_price']*$row['quantity'];
        }
        return $total;
    }
}
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="css" href="cssfiles/index-page.css">
        <link rel="stylesheet" type="css" href="cssfiles/myaccount-page.css">
        <script src="JavaScript/myjquery.js"></script>
        <title></title>
        <script language="JavaScript">
            $(document).ready(function()
             {			                
               /* $("#header-signup-link").html("Logout");
                $("#header-signup-link").attr("href","logout.php");
                $("#header-signin-link").hide();
                $("#link-saparetor").hide();
                
                */
            });
        </script>
        <style>
            div.WishlistBox
            {
                float:left;
                margin-top:10px;
                height:150px;
                width:890px;
                border:1px solid silver;
                background-color:white;
            }
            #update-profile
            {
                height: auto;
                width: 900px;
                /*background-color: green;*/
            }
        #update-profile #change-password, input
        {
            padding: 5px;
            border-radius: 5px;
            border:1px solid silver;
            color: darkblue;
            width: 250px;
            font-size: 14px;
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
        #change-password-btn, #track-btn, #edit-profile-btn
        {
            width:110px;
            background-color:skyblue;
        }
        #change-password-btn:hover, #track-btn:hover, #edit-profile-btn:hover
        {
            cursor: pointer;
            background-color:lightblue;
        }
        #order-history td
        {
            border: none;
        }
        #close-btn:hover
        {
            cursor: pointer;
        }
        </style>
        <script>
            var xmlhttp;
            function createXmlHttpObject()
            {                
                if (window.XMLHttpRequest)
                {
                    xmlhttp=new XMLHttpRequest();
                }
                else
                {
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
            }
            function editProfile()
            {
                name=document.getElementById('name').value;
                addLine1=document.getElementById('add-line1').value;
                addLine2=document.getElementById('add-line2').value;
                city=document.getElementById('city').value;
                state=document.getElementById('state').value;
                pinCode=document.getElementById('pin-code').value;
                mobNo=document.getElementById('mob-no').value;
                if(name!="" && addLine1!="" && addLine2!="" && city!="" && state!="" && pinCode!="" && mobNo!="")
                {
                    createXmlHttpObject();
                    xmlhttp.onreadystatechange=function()
                    {
                        if (xmlhttp.readyState==4)
                        {  
                            if(xmlhttp.responseText=='profile-updated')
                            { 
                                document.getElementById('display-message').style.display='block';
                                document.getElementById('display-message').style.backgroundColor='lightgreen';
                                document.getElementById('display-message').style.borderColor='green';
                                document.getElementById('message').style.color='green';
                                document.getElementById('image-icon').style.backgroundImage='url(images/right-info.png)';
                                document.getElementById('message').innerHTML='Your profile successfully Updated.';
                            }
                        }
                    }
                    xmlhttp.open("GET","lib/user-profile-setting.php?name="+name+"&add-line1="+addLine1+"&add-line2="+addLine2+"&city="+city+"&state="+state+"&pin-code="+pinCode+"&mob-no="+mobNo,true);
                    xmlhttp.send();
                }
            }
            function changePassword()
            {
                currentPwd=document.getElementById('current-pwd').value;
                newPwd=document.getElementById('new-pwd').value;
                confirmPwd=document.getElementById('confirm-pwd').value;
                if(currentPwd!="" && newPwd!="" && confirmPwd!="")
                {
                    if(newPwd.length>5 && newPwd.length <31 && confirmPwd.length>5 && confirmPwd.length <31)
                    {
                        if(newPwd==confirmPwd)
                        {
                            createXmlHttpObject();
                            xmlhttp.onreadystatechange=function()
                            {
                                if (xmlhttp.readyState==4)
                                {            
                                    if(xmlhttp.responseText=='password-changed')
                                    { 
                                        document.getElementById('display-message').style.display='block';
                                        document.getElementById('display-message').style.backgroundColor='lightgreen';
                                        document.getElementById('display-message').style.borderColor='green';
                                        document.getElementById('message').style.color='green';
                                        document.getElementById('image-icon').style.backgroundImage='url(images/right-info.png)';
                                        document.getElementById('message').innerHTML='Your password successfully changed.';
                                        
                                    }
                                    else if(xmlhttp.responseText=='password-not-changed')
                                    {
                                        document.getElementById('display-message').style.display='block';
                                        document.getElementById('display-message').style.backgroundColor='#FFA07A';
                                        document.getElementById('display-message').style.borderColor='darkred';
                                        document.getElementById('message').style.color='darkred';
                                        document.getElementById('image-icon').style.backgroundImage='url(images/wrong-info.png)';
                                        document.getElementById('message').innerHTML='Sorry ! You have entered wrong current password. Try again.';
                                    }
                                    document.getElementById('current-pwd').value="";
                                    document.getElementById('new-pwd').value="";
                                    document.getElementById('confirm-pwd').value="";
                                }
                            }
                            xmlhttp.open("GET","lib/user-profile-setting.php?current-pwd="+currentPwd+"&new-pwd="+newPwd,true);
                            xmlhttp.send();
                        }
                        else
                        {
                            document.getElementById('display-message').style.display='block';
                            document.getElementById('display-message').style.backgroundColor='#FFA07A';
                            document.getElementById('display-message').style.borderColor='darkred';
                            document.getElementById('message').style.color='darkred';
                            document.getElementById('image-icon').style.backgroundImage='url(images/red-info.png)';
                            document.getElementById('message').innerHTML='New password and Confirm password does not match.';
                        }
                    }
                    else
                    {
                        document.getElementById('display-message').style.display='block';
                        document.getElementById('image-icon').style.backgroundImage='url(images/wrong-info.png)';
                        document.getElementById('message').innerHTML='Password suould be 6-30 charactor';
                    }
                }
                else
                {
                    if(currentPwd=="")
                        document.getElementById('current-pwd').style.borderColor='red';
                    if(newPwd=="")
                        document.getElementById('new-pwd').style.borderColor='red';
                    if(confirmPwd=="")
                        document.getElementById('confirm-pwd').style.borderColor='red';
                }
                
            }
            
            function setBorderColor(id)
            {
                if(id.value!="") 
                    {
                        id.style.borderColor="silver";
                    }
            }
        </script>
    </head>
    <body>
        <div class="MainContainer">
            <div class="HeaderContainer">
               <?php
		include("includes/header.inc.php");
                if(isset($_GET['account']))
                {
                    if($_GET['account']=='created')
                    {
                        echo "<script>document.getElementById('display-message').style.display='block';".
                             "document.getElementById('message').style.color='green';".
                             "document.getElementById('display-message').style.backgroundColor='lightgreen';".
                             "document.getElementById('image-icon').style.backgroundImage='url(images/right-info.png)';".
                             "document.getElementById('display-message').style.borderColor='green';".
                             "document.getElementById('message').innerHTML='Congratulates ! Your account successfully created.'".
                     "</script>";
                    }
                }
		?> 
           </div>
           <div class="AccountDetailsMenu">
                <img src="Images/account-details.jpg">
                <table style="padding: 0px 10px;width: 180px;" >
                    <tr><td><a id="my-account-link" href="myaccount.php?view=my-profile">My Account</a><hr></td></tr>
                    <tr><td><a id="edit-profile-link" href="myaccount.php?setting=edit-profile" >Edit Profile</a><hr></td></tr>
                    <tr><td><a id="change-password-link" href="myaccount.php?setting=change-password" >Change Password</a> <hr></td></tr>
                    <tr><td><a id="order-history-link" href="myaccount.php?view=order-history" >Order History</a><hr></td></tr>
                    <tr><td><a id="wishlist-link" href="myaccount.php?view=wishlist" >Wishlist</a><hr></td></tr>
                    <tr><td><a id="track-order-link" href="myaccount.php?view=track-order" >Track Order</a><hr></td></tr>
                    <tr><td><a id="Logout-link" href="logout.php" >Logout</a><hr></td></tr>
                </table>
           </div>
            <div class="AccountDetailsDisplayer">
                

               
<!--Start My profile------------------------------------------------------------------------------------>
                <?php
                if(isset($_GET['view']))
                {
                    if($_GET['view']=='my-profile')
                    {
                        echo "<div id='profile' style='height:auto;color:darkblue' >".
                             "<span id='account-title' style='font-size: 20px'>My Profile</span><hr>"; 
                            
                            if(isset($_SESSION['loggedUserEmail']))
                            {
                                $loged_user_email_id=$_SESSION['loggedUserEmail'];

                                $result=mysql_query('select * from User_Profile',$con);
                                while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                                {
                                    if(strcasecmp($row['email_id'], $loged_user_email_id)==0)
                                    {

                                        echo "<b>{$row['user_name']}</b><br>";
                                        if($row['mob_no']!=0) 
                                        {
                                            echo "+91-{$row['mob_no']}<br> ";
                                        }
                                        echo "{$row['email_id']}<br><br> ";
                                        echo "---------------------------------------------<br><br> ";
                                        echo "<b>Shipping Address</b><br> ";
                                        if($row['add_line1']!=NULL)
                                        {
                                             echo "{$row['add_line1']}<br> ".
                                                  " {$row['add_line2']} <br> ".
                                                  " {$row['city']} <br> ".
                                                  " {$row['state']} - {$row['pin_code']} ";
                                        }
                                        else
                                        {
                                              echo "Not Available";
                                        }
                                    }
                                } 
                                mysql_close($con);
                                if(isset($_GET['account']) and isset($_SESSION['loggedUserEmail']))
                                {
                                    if($_GET['account']=='created')
                                    {
                                        echo "<script> document.getElementById('display-message').style.display='block'; </script>";
                                        echo "<script> document.getElementById('display-message').style.backgroundColor='lightgreen'; </script>";
                                        echo "<script> document.getElementById('display-message').style.borderColor='green'; </script>";
                                        echo "<script> document.getElementById('image-icon').style.backgroundImage='url(Images/right-info.png)'; </script>";
                                        echo "<script> document.getElementById('message').style.color='green'; </script>";
                                        echo "<script> document.getElementById('message').innerHTML='Your Account successfully created'; </script>";
                                    }
                                }
                            }
                            echo "</div>";
                        }   
                    }
                
                ?>
                
<!--End My profile------------------------------------------------------------------------------------------>

<!--Start Update profile------------------------------------------------------------------------------------>
                <?php
                if(isset($_GET['setting']))
                {
                    if($_GET['setting']=='edit-profile')
                    {
                        if(isset($_SESSION['loggedUserEmail']))
                        {
                            $result=  mysql_query("select * from user_profile where email_id='$_SESSION[loggedUserEmail]'");
                            $row=  mysql_fetch_array($result);
                            if($row)
                            {
                    ?>
                <div id="edit-profile" >
                    <span id="account-title" style="font-size: 20px">Edit Profile</span><hr><br> 
                    <div>
                        <table  style="font-size:14px;">
                            <tr><td>Name<span style="color:red">*</span></td><td>:</td><td><input id="name" type="text" value="<?php echo $row['user_name'] ?>"></td></tr>
                            <tr><td>Address line 1<span style="color:red">*</span></td><td>:</td><td><input id="add-line1" type="text" value="<?php echo $row['add_line1'] ?>"></td></tr>
                            <tr><td>City<span style="color:red">*</span></td><td>:</td><td><input id="city" type="text" value="<?php echo $row['city'] ?>"></td></tr>
                            <tr><td>Pin code<span style="color:red">*</span></td><td>:</td><td><input id="pin-code" type="text" value="<?php echo $row['pin_code'] ?>"></td></tr>                        
                        </table>
                    </div>
                    <div style="margin-left:380px;margin-top: -110px;width:600px;">
                        <table  style="font-size:14px;">
                            <tr><td>Address line 2</td><td>:</td><td><input id="add-line2" type="text" value="<?php echo $row['add_line2'] ?>"></td></tr>
                            <tr><td>State<span style="color:red">*</span></td><td>:</td>
                                <td><select id="state" onchange="setBorderColor(this)" style="padding:4px;border-radius:5px;color:darkblue;font-size:14px;border-color: silver;width:260px">
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
                                    <?php echo "<script>document.getElementById('state').value='$row[state]';</script>"; ?>
                                </td>
                            </tr>
                            <tr><td>Mobile no<span style="color:red">*</span></td><td>:</td><td> +91<input id="mob-no" type="text" style="width:230px" value="<?php echo $row['mob_no'] ?>"></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td><input id="edit-profile-btn" onclick="editProfile()" type="button" value="Save" /></td>
                            </tr>
                        </table>
                    </div>
                </div>
               <?php }} } }?>

<!--End Update profile--------------------------------------------------------------------------------------->

<!--Start Change Password------------------------------------------------------------------------------------>
                <?php
                if(isset($_GET['setting']))
                {
                    if($_GET['setting']=='change-password')
                        echo "<div id='change-password' >";
                    else
                        echo "<div id='change-password' hidden>";
                    
                    echo "<span id='account-title' style='font-size: 20px'>Change Password</span><hr><br>".
                         "<table  style='font-size:14px;'>".
                            "<tr><td>Current password<span style='color:red'>*</span></td><td>:</td><td><input id='current-pwd' onkeyup='setBorderColor(this)' type='password' maxlength='30'></td></tr>".
                            "<tr><td>New password<span style='color:red'>*</span></td><td>:</td><td><input id='new-pwd' onkeyup='setBorderColor(this)' type='password' maxlength='30'></td></tr>".
                            "<tr><td>Confirm password<span style='color:red'>*</span></td><td>:</td><td><input id='confirm-pwd' onkeyup='setBorderColor(this)' type='password' maxlength='30'></td>".
                                "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>".
                                "<td><input id='change-password-btn' onclick='changePassword()' type='button' value='Change' /></td>".
                            "</tr>".
                        "</table>".
                "</div>";
                } 
                ?> 
<!--End Change Password-------------------------------------------------------------------------------------->

<!--Start Order History-------------------------------------------------------------------------------------->
                <?php
                if(isset($_GET['view']))
                {
                    if($_GET['view']=='order-history')
                    {
                       echo "<div id='order-history' >".
                            "<span id='account-title' style='font-size: 20px;'>My Orders History</span><br><br>";                             
                            if(isset($_SESSION['loggedUserEmail']))
                            {
                                $query=  mysql_query("select * from orders where email_id='$_SESSION[loggedUserEmail]'");
                                if($query)
                                {
                                    $found=0;
                                    echo "<table id='order-history' border='1' style='text-align:center;font-size:16px;'>";
                                    echo "<tr style='background-color:lightblue;height:30px;' ><td width='90px'><b>Order No</b></td>".
                                         "<td width='160px'><b>Order Date</b></td>".
                                         "<td width='360px'><b>Ordered Product(s)</b></td>".
                                         "<td width='100px'><b>Amount Paid</b></td>".
                                         "<td width='150px'><b>Status</b></td></tr>";
                                    while($row=  mysql_fetch_array($query))
                                    {         
                                        $found=1;
                                        $products=getOrderedProducts($row['order_no'],$row['order_date']);
                                        $amountPaid=getAmountPaid($row['order_no'],$row['order_date']);
                                        echo "<tr style='color:gray;background-color:#ddd;' ><td width='90px'><a href='myaccount.php?order-no=$row[order_no]'>$row[order_no]</a></td>".
                                         "<td width='160px'>$row[order_date]</td>".
                                         "<td width='360px' style='text-align:left;padding:5px 10px;'>$products</td>".
                                         "<td width='100px'>Rs: $amountPaid</td>".
                                         "<td width='150px'>$row[order_status]</td></tr>";
                                    }
                                    echo "</table>";
                                    if($found==0)
                                    {
                                        echo "<br><br><span style='margin-left:300px;font-size:18px;color:gray'>--------- No any orders yet --------</span>";
                                    }
                                }
                            }
                       echo "</div>";
                    }
                }
                ?>
<!--End Order History---------------------------------------------------------------------------------------->

<!--Start Wishlist ---------------------------------------------------------------------------------------->
                <?php
                if(isset($_GET['view']))
                {
                    if($_GET['view']=='wishlist')
                        echo "<div id='wishlist'>";
                    else
                        echo "<div id='wishlist' hidden>";
                    
                    echo "<span style='font-size: 20px'>Your wishlist Items</span><hr>";
                    if(isset($_SESSION['loggedUserEmail']))
                    {
                        $pno=getWishlistProducts();
                        $found=0;
                        for($i=0;$i< count($pno);$i++)
                        {
                            $result=  mysql_query("select * from book_details where product_no='$pno[$i]'");
                            if($result)
                            {
                                $found=1;
                                $row=  mysql_fetch_array($result);
                                
                                echo "<div class='WishlistBox'>";
                                    echo "<div style='float:left;margin:10px;height:130px;width:100px;background-size:100px 130px;background-image:url($row[image]);'></div>";
                                    echo "<div style='float:left;margin:10px;height:130px;width:520px;font-size:20px;'><a href='bookdetails.php?product-no=$row[product_no]'>$row[title]</a><br>".
                                            "<div style='margin:10px 0px;height:30px;width:520px;font-size:20px;>";
                                                if($row['no_of_books']>0)
                                                    echo "<span style='color:green;'>In Stock</span>";
                                                else 
                                                    echo "<span style='color:red;'>Out Of Stock</span>";
                                            echo "</div>".
                                         "</div>";
                                    echo "<div style='float:left;margin:10px;height:130px;width:200px'>".
                                            "<div style='padding-top:10px;text-align:center;height:30px;width:200px;font-size:30px;color:green'><b>Rs.-$row[price]</b></div><br>".
                                            "<div style='margin-left:40px;height:40px;width:120px;border-radius:5px;background-size:120px 40px;background-image:url(images/buy-now.png);'></div>".
                                         "</div>";
                                echo "</div>";
                            }
                        }
                        if($found==0)
                            echo "No any product";
                    }
                echo "</div>";
               }?>
<!--End Wishlist ---------------------------------------------------------------------------------------->

<!--Start Track Order ---------------------------------------------------------------------------------------->
                <?php
                if(isset($_GET['view']))
                {
                    if($_GET['view']=='track-order')
                        echo "<div id='track-order'>";
                    else
                        echo "<div id='track-order' hidden>";
                    ?>
                    <span id="account-title" style="font-size: 20px">Track An Order</span><hr><br>
                    <table  style="font-size:14px;">
                            <tr><td>Order no<span style="color:red">*</span></td><td>:</td><td><input type="text"></td></tr>
                            <tr><td>Email id<span style="color:red">*</span></td><td>:</td><td><input type="text"></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td><input id="track-btn"  type="button" value="Track" ></td>
                            </tr>
                        </table>
                </div>
              <?php }?>
<!--End Track Order ---------------------------------------------------------------------------------------->


            </div>    
         </div>
         <div class="Footer">
        <?php
        include("includes/footer.inc.php");
        ?>
        &nbsp;
        </div>
    </body>
</html>