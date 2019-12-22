<?php
include("../includes/connect_db.inc.php");
$pno=$_GET['productNo'];
$query="select no_of_books from book_details where product_no=$pno";
$result=mysql_query($query);
if($result)
{
    $row=mysql_fetch_array($result);
    echo "$row[0]";
}
?>
