<?php
session_start();
include_once("includes/connect_db.inc.php");
if(isset($_GET['pno']) and isset($_SESSION['cart']))
{
    removeItemFromCart($_GET['pno']);
}

if(isset($_POST['productNo']) and isset($_POST['noOfProducts']) and isset($_POST['productName']) and isset($_POST['sellingPrice']))
{
    
    $pno=$_POST['productNo'];
    $qty=$_POST['noOfProducts'];
    if($qty=='' or $qty<1)
        $qty=1;
    $pname=$_POST['productName'];
    $sp=$_POST['sellingPrice'];
    addItemToCart($pno, $qty ,$pname ,$sp);
    if(isset($_SESSION['loggedUserEmail']))
    {
        //writeCartItemToUserAccount();
    }
}

function addItemToCart($pno,$qty ,$pname ,$sp)     // function for adding items to cart
{
    if(isset($_SESSION['cart']))
    {
        $max=count($_SESSION['cart']);
        $flag=0;
        for($i=0;$i<$max;$i++)
        {
            if($pno==$_SESSION['cart'][$i]['pno'])
            {
                $flag=1;
                break;
            }
        }
        if($flag==1)
        {
            $_SESSION['cart'][$i]['qty']=$_SESSION['cart'][$i]['qty']+$qty;
        }
        else 
        {
            $_SESSION['cart'][$max]['pno']=$pno;
            $_SESSION['cart'][$max]['qty']=$qty; 
            $_SESSION['cart'][$max]['pname']=$pname;
            $_SESSION['cart'][$max]['sp']=$sp; 
        }
    }
    else
    {
        $_SESSION['cart'][0]['pno']=$pno;
        $_SESSION['cart'][0]['qty']=$qty; 
        $_SESSION['cart'][0]['pname']=$pname;
        $_SESSION['cart'][0]['sp']=$sp; 
    } 
}

function removeItemFromCart($pid)   // function for removing items from cart
{
    $pid=$pid;
    $max=count($_SESSION['cart']);
    if($max==1)
    {
        unset($_SESSION['cart']);
    }
    else
    {
        for($i=0;$i<$max;$i++)
        {
            if($pid==$_SESSION['cart'][$i]['pno'])
            {
                unset($_SESSION['cart'][$i]);
                break;
            }
        }
        $_SESSION['cart']=array_values($_SESSION['cart']);
    }
}

function writeCartItemToUserAccount()
{
    $userid=$_SESSION['loggedUserEmail'];
    $max=count($_SESSION['cart']);
    for($i=0;$i<$max;$i++)
    {
        $pno=$_SESSION['cart'][$i]['pno'];
        $qty=$_SESSION['cart'][$i]['qty'];
        
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="css" href="cssfiles/index-page.css">
        <title>My shopping cart</title>
        
        <style>
         div.Title
         {
             margin-top:5px;
             height:30px;
             width:1100px;
             background-image:url('Images/menu-hover-background.jpg');
         }
         div.CartItem
         {
             padding:20px;
             height:110px;
             width:1058px;
             border-left:1px solid silver;
             border-right:1px solid silver;
             border-bottom:1px dotted silver;
             background-color: ivory;
         }
         div.TotalAmountDisplay
         {
             margin-top: 20px;
             padding:20px 20px 0px;
             width:1058px;
             border:1px solid silver;
             background-color: ivory;
         }
         #recycle-bin:hover
         {            
             cursor: pointer;
             position:relative;
             top:2px;
         }
         #change-quantity:hover
         {
             cursor: pointer;
             color:red;
             position: relative;
             top:1px;
         }
         #proceed-to-pay,#continue-shopping
         {
             height: 40px;
             width: 200px;
             font-size:16px;
             border-radius:10px;
             box-shadow:0px 0px 5px blue;
             background-image:url(images/btn.jpg);
         }
         #proceed-to-pay:hover, #continue-shopping:hover
         {
             color:white;
             box-shadow:0px 0px 3px blue;
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
        </style>
        <script>
            function continueShopping()
             {
                 location.href='index.php';
             }
             
             function proceedToPay()
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
                        location.href='checkout.php?process=step-one';
                    }
                }
                xmlhttp.open("GET","lib/setSession.php?checkout-step=step-one",true);
                xmlhttp.send();
             }
             
         function show(i)
         {
             //id.style.borderColor="red";
             //if(id.name=='aaa')
             //id.style.borderColor="red";
             alert(i);
         }
         
         function deleteItem()
         {
             document.getElementById('123').style.display='none';
         }
         
        </script>
    </head>
    <body>
        <div class="MainContainer">
            <div class="HeaderContainer">
               <?php
		include("includes/header.inc.php");
		?> 
           </div>
            <div id="main-body" class="MainBody">
                <span style="font-size:20px;color:darkred;">Your shopping cart</span><hr color="green">
                <?php
                if(isset($_SESSION['cart']))
                {
                    $totalPayableAmount=0;
                    echo "<div class='Title'>".
                            "<table width='1050' style='margin-left: 20px;font-size:20px;color:white;'>".
                                "<tr><td width='500'>Description</td><td>Unit Price</td><td>Quantity</td><td>Remove</td><td>Total</td></tr>".
                            "</table>".                    
                          "</div>";
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
                        $totalPayableAmount=$totalPayableAmount+$total;
                        $_SESSION['payable-amount']=$totalPayableAmount;
                        echo "<div class='CartItem'>".
                             "<div style='float:left;height:110px;width:80px;background-size:80px 110px;background-image: url($row[image]);'></div>".
                             "<div style='float:left;font-size:20px;color:green;margin-left:30px;width:350px;'>$row[title]</div>".
                             "<div style='float:left;font-size:24px;color:red;text-align:center;margin-left:10px;width:150px;'><b>₹ $sellingPrice</b></div>".
                             "<div style='float:left;font-size:24px;color:green;text-align:center;margin-left:10px;width:170px;'><b>$quantity</b><br><span style='font-size:14px' id='change-quantity'>change</span></div>".
                             "<div style='float:left;text-align:center;margin-left:10px;width:85px;'>".
                                "<a  href='shopping-cart.php?pno=$row[product_no]'><div id='recycle-bin' style='margin-left:30px;height:30px;width:20px;background-image: url(images/black-recycle-bin.png);'></div></a>".
                            "</div>".
                            "<div style='float:left;font-size:24px;text-align:center;color:red;margin-left:20px;height:110px;width:140px;'><b>₹ $total</b></div>".
                        "</div>";
                     }
                     echo "<div class='TotalAmountDisplay'>".
                                "<table width='1020'>".
                                    "<tr><td style='text-align:left;font-size:20px;color:silvar'>Shipping Charges :</td><td style='text-align:right;color:green'>";
                                    if($totalPayableAmount>299)
                                        echo "<b>FREE</b></td><tr>";
                                    else
                                        echo "<b>₹ 30</b></td><tr>";
                                    echo "<tr style='font-size:26px;color:darkred'><td style='text-align:left;'>Net Amount Payable :</td><td style='text-align:right;'><b>₹ $totalPayableAmount</b></td><tr>".
                                    "</table>".
                            "</div>";
                     echo "<div style='text-align:right;margin-top:20px'>".
                             "<input onclick='continueShopping()' id='continue-shopping' type='button' value='Continue shopping' >".
                             "&nbsp;&nbsp<input onclick='proceedToPay()' id='proceed-to-pay' type='button' value='Proceed to pay' >".
                          "</div>";
                }
                else
                {
                    echo "<script>document.getElementById('main-body').style.height='500px';</script>";
                    echo "<span style='font-size:24px;color:blue;'>Your cart is empty</span><br>&nbsp";
                    echo "<div style='text-align:right;width:1100px;'>".
                            "<input onclick='continueShopping()' id='continue-shopping' type='button' value='Continue shopping' >".
                         "</div>";
                }
                ?>
            </div>
        </div><br><br>
        <div class="Footer" style="margin-top: 10px">
        <?php
        include("includes/footer.inc.php");
        ?>
        &nbsp;
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
