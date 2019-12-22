<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include("../includes/connect_db.inc.php");
$prod=$_GET['prod_no'];
$query="select product_no from book_details";
$result=mysql_query($query);
$found=0;
if($result)
{
    while($product=mysql_fetch_array($result))
    {
        if($product[0]==$prod)
        {
            $found=1;
            break;
        }
    }
    if($found==1)
        echo "Given product number already exist";
    
}
?>
