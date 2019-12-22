<?php
session_start();
include_once("../includes/connect_db.inc.php");
// functions
function checkCardDetails()
{
    $cno=$_SESSION['card-no'];
    $cname=$_SESSION['card-name'];
    $cvvno=$_SESSION['cvv-no'];
    $month=$_SESSION['month'];
    $year=$_SESSION['year'];
    $pwd=$_SESSION['pwd'];
    $amount=$_SESSION['payable-amount'];
    $result=  mysql_query("select * from card_details where card_no='$cno'");
    if($result)
    {
        $row=  mysql_fetch_array($result);
        if($row['card_name']==$cname && $row['cvv_no']==$cvvno && $row['expiry_month']==$month && $row['expiry_year']==$year && $row['password']==$pwd && $row['balance']>=$amount)
        {
            $availbleBalance=$row['balance']-$amount;
            $result=mysql_query("UPDATE card_details SET balance=$availbleBalance WHERE card_no='$cno'");
            return true;
        }
        else
            return false;
    }
    else
    {
        return false;
    }
    
}
function createPassword()
{
    $i=0;
    $pwd=null;
    while (1==1)
    {
        $no=  rand(48,122);
        if($no < 58 or $no >64 and $no <91 or $no>96)
        {
            $pwd=$pwd.chr($no);
            $i++;
            if($i==6)
                break;
        }
    }
    return $pwd;
}
function getAddress()
{
    if(isset($_GET['shipping-add']) and isset($_GET['billing-add']))
    {
        if($_GET['shipping-add']!="")
        {
            $add=$_GET['shipping-add'];
            $max=strlen($add);
            $p=0;
            $_SESSION['shippingAdd']="";
            $str="";
            for($i=0;$i<$max;$i++)
            {
                if($add[$i]!="~")
                {
                   $str=$str.$add[$i]; 
                }
                else
                {
                    if($p==6)
                        $_SESSION['shippingAdd']=$_SESSION['shippingAdd']." Mob No: ".$str;
                    else
                        $_SESSION['shippingAdd']=$_SESSION['shippingAdd']." ".$str;
                    $_SESSION['siAddress'][0][$p]=$str;
                    $str="";
                    $p++;
                }
            }
        }
        $_SESSION['billingAdd']="";
        if($_GET['billing-add']!="")
        {
            $add=$_GET['billing-add'];
            $max=strlen($add);
            $p=0;
            $str="";
            for($i=0;$i<$max;$i++)
            {
                if($add[$i]!="~")
                {
                   $str=$str.$add[$i]; 
                }
                else
                {
                    if($p==6)
                        $_SESSION['billingAdd']=$_SESSION['billingAdd']." Mob No: ".$str;
                    else
                        $_SESSION['billingAdd']=$_SESSION['billingAdd']." ".$str;
                    $_SESSION['biAddress'][0][$p]=$str;
                    $str="";
                    $p++;
                }
            }
        }
    }
}
function getShippingCost()
{
    if(isset($_SESSION['cart']))
    {
        $max=count($_SESSION['cart']);
        $total=0;
        for($i=0;$i<$max;$i++)
        {
            $total=$total+$_SESSION['cart'][$i]['sp'];
            if($total>299)
                return 0;
        }
        return 30;
    }
}
function getOrderNo()
{
    $result=mysql_query("select * from generate_order_no");
    $row=mysql_fetch_array($result);
    $newOrderNo=$row['order_no'];
    $result=mysql_query("UPDATE generate_order_no SET order_no=$newOrderNo+1 WHERE order_no=$newOrderNo");
    return $newOrderNo;
}
function updateStock()
{
    $max=count($_SESSION['cart']);
    for($i=0;$i<$max;$i++)
    {
        $pno=$_SESSION['cart'][$i]['pno'];
        $query=  mysql_query("select no_of_books from book_details where product_no=$pno");
        $row=  mysql_fetch_array($query);
        $availbleBooks=$row['no_of_books']-$_SESSION['cart'][$i]['qty'];
        $result=mysql_query("UPDATE book_details SET no_of_books=$availbleBooks WHERE product_no=$pno");
    }
    unset($_SESSION['cart']);
    
}

function updateRecentlySold()
{
    $result=mysql_query("select * from recently_sold");
}
function createNewAccount()
{
    $name=$_SESSION['siAddress'][0][0];
    $addLine1=$_SESSION['siAddress'][0][1];
    $addLine2=$_SESSION['siAddress'][0][2];
    $city=$_SESSION['siAddress'][0][3];
    $state=$_SESSION['siAddress'][0][4];
    $pinCode=$_SESSION['siAddress'][0][5];
    $mobNo=$_SESSION['siAddress'][0][6];
    $email=$_SESSION['shippingEmail'];
    $password=createPassword();
    $result1= mysql_query("insert into login values('$name','$email','$password','0')");
    $result2= mysql_query("insert into user_profile values('$email','$name','$addLine1','$addLine2','$city','$state','$pinCode','$mobNo')");
    $_SESSION['loggedUserEmail']=$email;
    $_SESSION['loggedUserName']=$name;
    $_SESSION['loggedUserType']='customer';
}
//end functions

if(isset($_GET['checkout-step']))
{
    if($_GET['checkout-step']=='step-one')
    {
        if(isset($_SESSION['loggedUserEmail']))
        {
            $_SESSION['checkout-step']='step-two';
            $_SESSION['shippingEmail']=$_SESSION['loggedUserEmail'];
        }
        else
            $_SESSION['checkout-step']='step-one';
    }        
    else if($_GET['checkout-step']=='step-two')
    {
        $_SESSION['checkout-step']='step-two';
        $_SESSION['shippingEmail']=$_GET['email'];
    }        
    else if($_GET['checkout-step']=='step-three')
    {
        $_SESSION['checkout-step']='step-three';
        getAddress();
        //if(isset($_GET['shipping-add']))
            //$_SESSION['shippingAdd']=$_GET['shipping-add'];
        //if(isset($_GET['billing-add']))
            //$_SESSION['billingAdd']=$_GET['billing-add'];
    }
    else if($_GET['checkout-step']=='step-four')
    {
        $_SESSION['checkout-step']='step-four';
        $_SESSION['paymentMethod']='Cash On Delivery';
        if(isset($_GET['cno']))
        {
            $_SESSION['paymentMethod']='Debit Card';
            $_SESSION['card-no']=$_GET['cno'];
            $_SESSION['card-name']=$_GET['cname'];
            $_SESSION['cvv-no']=$_GET['cvvno'];
            $_SESSION['month']=$_GET['month'];
            $_SESSION['year']=$_GET['year'];
            $_SESSION['pwd']=$_GET['pwd'];
        }
        
    }
    else if($_GET['checkout-step']=='step-over')
    {
        
        if($_SESSION['paymentMethod']=='Debit Card')
        {
            $valid=checkCardDetails();
            if($valid==true)
            {
                $email=$_SESSION['shippingEmail'];
                $orderNo=getOrderNo();
                $orderDate= gmdate("Y-m-d");//getDate();
                $orderTime=gmdate("h-i-s");//getTime();
                $shippingAdd=$_SESSION['shippingAdd'];
                $billingAdd=$_SESSION['billingAdd'];
                $paymentMethod=$_SESSION['paymentMethod'];
                $shippingCost=getShippingCost();
                $orderStatus='Processing';
                $result=mysql_query("insert into orders values('$email','$orderNo','$orderDate','$orderTime','$shippingAdd','$billingAdd','$paymentMethod','$shippingCost','$orderStatus')");

                if(isset($_SESSION['cart']))
                {
                    $max=  count($_SESSION['cart']);
                    for($i=0;$i<$max;$i++)
                    {
                        $pno=$_SESSION['cart'][$i]['pno'];
                        $productName=$_SESSION['cart'][$i]['pname'];
                        $quantity=$_SESSION['cart'][$i]['qty'];
                        $sellingPrice=$_SESSION['cart'][$i]['sp'];
                        $result=mysql_query("insert into sub_orders values('$orderNo','$orderDate','$pno','$productName','$quantity','$sellingPrice')");
                    }
                updateStock();
                if(!isset($_SESSION['loggedUserEmail']))
                    createNewAccount();
                }
                echo "$orderNo";
            }
            else
            {
                echo "payment-fail";
            }
        }
        else 
        {
            $email=$_SESSION['shippingEmail'];
            $orderNo=getOrderNo();
            $orderDate= gmdate("Y-m-d");//getDate();
            $orderTime=gmdate("h-i-s");//getTime();
            $shippingAdd=$_SESSION['shippingAdd'];
            $billingAdd=$_SESSION['billingAdd'];
            $paymentMethod=$_SESSION['paymentMethod'];
            $shippingCost=getShippingCost();
            $orderStatus='Processing';
            $result=mysql_query("insert into orders values('$email','$orderNo','$orderDate','$orderTime','$shippingAdd','$billingAdd','$paymentMethod','$shippingCost','$orderStatus')");

            if(isset($_SESSION['cart']))
            {
                $max=  count($_SESSION['cart']);
                for($i=0;$i<$max;$i++)
                {
                    $pno=$_SESSION['cart'][$i]['pno'];
                    $productName=$_SESSION['cart'][$i]['pname'];
                    $quantity=$_SESSION['cart'][$i]['qty'];
                    $sellingPrice=$_SESSION['cart'][$i]['sp'];
                    $result=mysql_query("insert into sub_orders values('$orderNo','$orderDate','$pno','$productName','$quantity','$sellingPrice')");
                }
            updateStock();
            if(!isset($_SESSION['loggedUserEmail']))
                createNewAccount();
            }
            echo "$orderNo";
        }
    }
    if($_GET['checkout-step']=='change-address')
    {        
        $_SESSION['checkout-step']='step-two';
    }
}
?>
