<?php 
session_start();
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$book_title=$_POST['book_title'];
$category_id=$_POST['category_id'];
$author=$_POST['author'];
$book_copies=$_POST['book_copies'];
$book_pub=$_POST['book_pub'];
$publisher_name=$_POST['publisher_name'];
$isbn=$_POST['isbn'];
$copyright_year=$_POST['copyright_year'];
/* $date_receive=$_POST['date_receive'];
$date_added=$_POST['date_added']; */
$status=$_POST['status'];

$id=$_SESSION['id'];
$avi="under process";




mysql_query("insert into wishlist(user_id,book_title,category_id,author,publisher_name,isbn,copyright_year,status,avilable)values('$id','$book_title','$category_id','$author','$publisher_name','$isbn','$copyright_year','$status','$avi')");


								
								
 header('location:books.php');
}
?>	,