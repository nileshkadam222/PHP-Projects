<?php
session_start();
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
include('includes/connect_db.inc.php');
$recently_sold=mysql_query("select * from recently_sold");
if($recently_sold)
{ 
    for($i=0;$i<20;$i++)
    {
        $row=mysql_fetch_array($recently_sold);
        $list_of_recently_sold_product[$i]=$row['product_no'];
    }
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="css" href="cssfiles/index-page.css" />
        <script src="JavaScript/myjquery.js"></script>
        <title>Books</title>
        <style>
        div.BookContainer:hover
        {
            box-shadow:0px 0px 15px #888888;   
        }
        div.BookContainer #image
        {
            height: 120px;
            width:100px;
            margin-left: 40px;
            margin-top:20px;
            background-size: 100px 120px;
            /*background-image:url('BookStore/ugc-net.png');*/
        }
        div.BookContainer #discount
        {
            height: 60px;
            width:60px;
            font-size: 16px;
            text-align: center;
            margin-left:130px;
            margin-top:-140px;
            background-size: 60px 60px;
            background-image:url('BookStore/discount.png');
            /*background-image:url('BookStore/special-offer.png');*/
        }
        div.BookContainer #title
        {        
            text-align: center;
            font-size:11px;
            width:160px;
            margin-left:10px;
            margin-top:100px;
        }
        div.BookContainer #author
        {
            font-size: 11px;
            width:160px;
            margin-left:10px;
            margin-top:5px;
            color: red;
        }
        div.BookContainer #price
        {
            font-size:20px;
            width:160px;
            margin-left:10px;
            margin-top:5px;
            color:darkgreen;
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
    </head>
    <body>
        <div class="MainContainer">
            <div class="HeaderContainer">
               <?php
		include("includes/header.inc.php");
		?> 
           </div>
           <div class="MainBody">
               <div  id="home-page-displayer" class="HomePageDisplayer">
                    <div class="SideBarMenu">
                        <img src="Images/books-categories.jpg">
                        <table style="padding: 0px 10px;width: 180px;" >
                            <tr><td><a href="books.php?view=children-books">Children</a><hr></td></tr>
                            <tr><td><a href="books.php?view=computer-books">Computer</a><hr></td></tr>
                            <tr><td><a href="books.php?view=history-books">History</a><hr></td></tr>
                            <tr><td><a href="books.php?view=polities-books">Polities</a><hr></td></tr>
                            <tr><td><a href="books.php?view=science-books">Science</a><hr></td></tr>
                            <tr><td><a href="books.php?view=management-books">Management</a><hr></td></tr>
                            <tr><td><a href="books.php?view=indian-languages-books">Indian Languages</a><hr></td></tr>
                            <tr><td><a href="books.php?view=entrance-exams-books">Entrance Exams</a><hr></td></tr>
                            <tr><td><a href="books.php?view=all-books">View All</a><hr></td></tr>
                        </table>
                    </div>
                    <?php
                    $display=false;
                    if(isset($_GET["view"]))
                    {
                        $display=true;
                        include('includes/show-books.inc.php');
                    }
                    if($display==FALSE)
                    {
                        echo "<div id='books-displayer' class='BooksDisplayer' >";
                        echo "<script> document.getElementById('sort-by').style.display='none';</script>";
                        echo "<b style='margin-left:300px;font-size:20px;color:red;'>Error in this page</b>"; 
                        echo "</div>";
                    }
                    ?>
               </div>
           </div>
        </div>
        <div id="footer" class="Footer">
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
