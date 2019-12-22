<?php
session_start();
?>
<!DOCTYPE html>
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
$book_details=mysql_query("select * from book_details");
if($book_details)
{
    $i=0;
    while($row=mysql_fetch_array($book_details))
    {
        for($j=0;$j<20;$j++)
        {
            if($list_of_recently_sold_product[$j]==$row['product_no'])
            {
                $recently_sold_product[$i][0]=$row['image'];
                $recently_sold_product[$i][1]=$row['discount'];
                $recently_sold_product[$i][2]=$row['title'];
                $recently_sold_product[$i][3]=$row['author'];
                $recently_sold_product[$i][4]=$row['price'];
                $recently_sold_product[$i][5]=$row['product_no'];
                $i++;
                break;
            }
        }
        if($i==4)
            break;
    }
}
//mysql_close($con);


?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="css" href="cssfiles/index-page.css" />
        <script src="JavaScript/myjquery.js"></script>
        <link rel="stylesheet" href="imgslider/nivo-slider.css" type="text/css" media="screen" />
        <script type="text/javascript" src="imgslider/jquery.nivo.slider.js"></script>
        <title>Online Shopping India</title>
        

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
        #close-btn:hover
        {
            cursor: pointer;
        }
        #buy-now:hover
        {
            position: relative;
            top:1px;
        }
        </style>
        <script>
            function searchBook()
            {
                if(document.getElementById('search-field').value!="")
                {
                    document.getElementById('search-string').value=document.getElementById('search-field').value;
                    document.getElementById('search-category').value=document.getElementById('select-category').value;
                    document.frmSearchBooks.submit();
                }
            }
            function search(id,event)
           {
               
               keyvalue=event.charCode;
               if(keyvalue==13)
                   {
                       
                       if(id.value!="")
                           {
                               
                               document.getElementById('search-string').value=document.getElementById('search-field').value;
                               document.getElementById('search-category').value=document.getElementById('select-category').value;
                               document.frmSearchBooks.submit();
                               //alert('sssss');
                           }
                   }
           }
            $(window).load(function()
            {
                $("#slider").nivoSlider();
            });
        </script>
    </head>
    <body>
        <form name="frmSearchBooks" action="index.php" method="post">
                    <input type="hidden" id="search-category" name="searchCategory">
                    <input type="hidden" id="search-string" name="searchString">
                    </form> 
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
                   if(isset($_POST['searchString']))
                   { ?>
                   
                   <div class="BannersDisplayer" style="height:2000px;">
                       <span style="font-size:20px;color:green;">Search Results</span><hr>
                       <?php
                       $category=$_POST['searchCategory'];
                       $str=$_POST['searchString'];
                       $substring=trim($_POST['searchString']," ");
                       $substring=strtoupper($substring);
                       if($category=='all')
                            $result=  mysql_query("select * from book_details");
                        else 
                            $result=  mysql_query("select * from book_details where category='$category'");
                       $i=0;
                       while($row=  mysql_fetch_array($result))
                       {
                           $string=$row['title']." ".$row['publisher']." ".$row['author']." ".$row['language'];
                           $string=strtoupper($string);
                           if (strpos($string,$substring) == true)
                           {
                               echo "<div class='SearchResultBox'>";
                                    echo "<a href='bookdetails.php?product-no=$row[product_no]'><div style='float:left;margin:10px;height:130px;width:100px;background-size:100px 130px;background-image:url($row[image]);'></div></a>";
                                    echo "<div style='float:left;margin:10px;height:400px;width:520px;font-size:20px;'><a href='bookdetails.php?product-no=$row[product_no]'>$row[title]</a><br>".
                                            "<div style='color:darkred;margin-top:10px;height:20px;width:520px;font-size:14px;'>Author- $row[author]</div>".
                                            "<div style='color:darkred;margin-top:10px;height:20px;width:520px;font-size:14px;'>Publisher- $row[publisher]</div>".
                                            "<div style='color:green;margin:5px 0px;height:30px;width:520px;font-size:20px;'>";
                                                if($row['no_of_books']>0)
                                                    echo "<span style='color:green;'>In Stock</span>";
                                                else 
                                                    echo "<span style='color:red;'>Out Of Stock</span>";
                                            echo "</div>".
                                         "</div>";
                                    echo "<div style='float:left;margin:10px;height:130px;width:200px'>".
                                            "<div style='padding-top:10px;text-align:center;height:30px;width:200px;font-size:30px;color:green'><b>Rs.-$row[price]</b></div><br>".
                                            "<a href='bookdetails.php?product-no=$row[product_no]'><div id='buy-now' style='margin-left:40px;height:40px;width:120px;border-radius:5px;background-size:120px 40px;background-image:url(images/buy-now.png);'></div></a>".
                                         "</div>";
                                echo "</div>";
                                $i++;
                                if($i==12)
                                    break;
                           }
                       }
                       if($i==0)
                           echo "<span>No any result found of </span> -<i>$str</i>";
                       ?>
                   </div>
                   <?php 
                   }
                   else
                   { ?>
                    <div id="banners-displayer" class="BannersDisplayer" >                
                        <div class="Banner1">
                            <div id="slider" class="nivoSlider">
                                <!--<img src="images/image2.png" />-->
                                <a href="index.php"><img src="images/image1.png" /></a>
                                <img src="images/image3.png" />
                                <img src="images/image4.png" />
                                <img src="images/image5.png" />
                                <img src="images/image6.png" />
                                <img src="images/image7.png" />
                            </div>	
                        </div>
                
                        <div class="Banner2"></div>
                        <div class="Banner3"></div>
                        <div class="Banner4">
                            <span style="color:red;font-size:24px;">Offer zone</span>
                            <a style="margin-left: 720px;font-size:16px;" href="books.php?view=offers">View All</a>
                            <?php
                            include('includes/connect_db.inc.php');
                            $ok=mysql_query('select * from book_details');
                            if($ok)
                            {    
                                $i=0;
                                while($result=mysql_fetch_array($ok))
                                {  
                                    
                                    if($result['discount']>15)
                                    {  
                                        echo "<div class='BookContainer'>";
                                        echo "<div id='image' style='background-image:url($result[image]);' ></div>";
                                        echo "<div id='discount'><br><b style='color:white;'>$result[discount]%</b></div>";
                                        echo "<div id='title' ><b><a href='bookdetails.php?product-no=$result[product_no]'>$result[title]</a></b></div>";
                                        echo "<div id='author' ><b>By- </b>$result[author]</div>";
                                        echo "<div id='price' ><b>Rs- </b> $result[price]</div>";
                                        echo "</div>";
                                        $i++;
                                        if($i==4)
                                            break;
                                    }
                                }
                            }
                            mysql_close($con);
                            ?>
                        </div>
                        <div id="recently-sold" class="Banner4">
                            <span style="color:red;font-size:24px;">Magazines</span>
                            <a id="view-all-recently-sold" style="margin-left: 720px;font-size:16px;" href="books.php?view=magazines">View All</a>
                            <?php                
                                for($i=0;$i<4;$i++)
                                {   
                                    echo "<div class='BookContainer'>";
                                    $image=$recently_sold_product[$i][0];
                                    echo "<div id='image' style='background-image:url($image);' ></div>";
                                    $discount=$recently_sold_product[$i][1];
                                    if($discount>0)
                                        echo "<div id='discount'><br><b style='color:white;'>$discount%</b></div>";
                                    else
                                        echo "<div id='discount' style='background-image:url(BookStore/blank.png)'></div>";
                                    $title=$recently_sold_product[$i][2];
                                    $product_no=$recently_sold_product[$i][5];
                                    echo "<div id='title' ><b><a href='bookdetails.php?product-no=$product_no'>$title</a></b></div>";
                                    $author=$recently_sold_product[$i][3];
                                    echo "<div id='author' ><b>By- </b>$author</div>";
                                    $price=$recently_sold_product[$i][4];
                                    echo "<div id='price' ><b>Rs- </b> $price</div>";
                                    echo "</div>";                                  
                                }                           
                            ?>
                        </div>
                        <div class="Banner4">
                            <span style="color:red;font-size:24px;">Recently Sold</span>
                            <a style="margin-left: 690px;font-size:16px;" href="books.php?view=recently-sold">View All</a>
                            <?php                
                                for($i=0;$i<4;$i++)
                                {   
                                    echo "<div class='BookContainer'>";
                                    $image=$recently_sold_product[$i][0];
                                    echo "<div id='image' style='background-image:url($image);' ></div>";
                                    $discount=$recently_sold_product[$i][1];
                                    if($discount>0)
                                        echo "<div id='discount'><br><b style='color:white;'>$discount%</b></div>";
                                    else
                                        echo "<div id='discount' style='background-image:url(BookStore/blank.png)'></div>";
                                    $title=$recently_sold_product[$i][2];
                                    $product_no=$recently_sold_product[$i][5];
                                    echo "<div id='title' ><b><a href='bookdetails.php?product-no=$product_no'>$title</a></b></div>";
                                    $author=$recently_sold_product[$i][3];
                                    echo "<div id='author' ><b>By- </b>$author</div>";
                                    $price=$recently_sold_product[$i][4];
                                    echo "<div id='price' ><b>Rs- </b> $price</div>";
                                    echo "</div>";                                  
                                }                           
                            ?>
                        </div><br><br>
                    </div>
                   <?php 
                   } ?>
                </div>
           </div>
        </div>
        <div id="footer" class="Footer">
            <?php
            include("includes/footer.inc.php");
            ?>
            &nbsp;
        </div>       
    </body>
    
</html>
