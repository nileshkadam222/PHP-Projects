<?php
session_start();
include("../includes/connect_db.inc.php");
function checkExistingProduct($pno)
{
    $email=$_SESSION['loggedUserEmail'];
    $result=mysql_query("select * from wishlist where product_no=$pno and email_id='$email'");
    $row=mysql_fetch_array($result);
    if($row>0)
        return 1;
    else
        return 0;
}
if(isset($_GET['action']))
{
    if($_GET['action']=='getAvailableQtyOfBook')
    {
        $pno=$_GET['pno'];
        $query="select no_of_books from book_details where product_no=$pno";
        $result=mysql_query($query);
        $qty=mysql_fetch_array($result);
        if($qty)
            echo $qty['no_of_books'];
    }
    
    if($_GET['action']=='addProductIntoWishlist')
    {
        $pno=$_GET['pno'];        
        if(!isset($_SESSION['loggedUserEmail']))
        {
           echo "UserNotLogged"; 
        }
        else
        {
            $email=$_SESSION['loggedUserEmail'];
            $found=checkExistingProduct($pno);
            if($found==1)
                echo "ProductAllreadyAdded";
            else
            {
                $result=  mysql_query("insert into wishlist values('$email','$pno')");
                echo "ProductAddedSuccessfully";
            }
        }
    }
    
}
?>
