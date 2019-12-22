<?php
include('includes/connect_db.inc.php');
echo "<div id='books-displayer' class='BooksDisplayer' style='display:none'>".
     "<div id='sort-by' class='SortBy' style='display:none'>".
        "<b style='color:black;'>Sort By :</b>".
        "<span ><a href=''>Price Low to High</a> | </span>".
        "<span ><a href=''>Price High to Low</a> | </span>".
        "<span ><a href=''>Discounts</a> | </span>".
     "</div>";
if($_GET["view"]=='offers')
{
    echo "<script> document.getElementById('books-displayer').style.display='block';</script>";
    $ok=mysql_query("select * from book_details where discount>49");
    if($ok)
    {   
        $total_books=0;
        while($result=mysql_fetch_array($ok))
        {  
            echo "<div class='BookContainer'>";
            echo "<a href='bookdetails.php?product-no=$result[product_no]'><div id='image' style='background-image:url($result[image]);' ></div></a>";
            if($result['discount']>0)
                echo "<div id='discount'><br><b style='color:white;'>$result[discount]%</b></div>";
            else
                echo "<div id='discount' style='background-image:url(BookStore/blank.png)'></div>";
            echo "<div id='title' ><b><a href='bookdetails.php?product-no=$result[product_no]'>$result[title]</a></b></div>";
            echo "<div id='author' ><b>By- </b>$result[author]</div>";
            echo "<div id='price' ><b>Rs- </b> $result[price]</div>";
            echo "</div>";
            $total_books++;
            if($total_books==2)
                echo "<script> document.getElementById('sort-by').style.display='block';</script>";
            if($total_books>12)
                echo "<script> document.getElementById('books-displayer').style.height='1500px';</script>";
            if($total_books==20)
                break;

        }
        if($total_books==0)
            echo "<br><span style='color:red;font-size:20px;margin-left:270px'>Currently No Any Stock Available.</span>";
    }
    echo "</div>";
}
else if($_GET["view"]=='magazines')
{
    echo "<script> document.getElementById('books-displayer').style.display='block';</script>";
    $ok=mysql_query("select * from book_details where category='magazine'");
    if($ok)
    {   
        $total_books=0;
        while($result=mysql_fetch_array($ok))
        {  
            echo "<div class='BookContainer'>";
            echo "<div id='image' style='background-image:url($result[image]);' ></div>";
            if($result['discount']>0)
                echo "<div id='discount'><br><b style='color:white;'>$result[discount]%</b></div>";
            else
                echo "<div id='discount' style='background-image:url(BookStore/blank.png)'></div>";
            echo "<div id='title' ><b><a href='bookdetails.php?product-no=$result[product_no]'>$result[title]</a></b></div>";
            echo "<div id='author' ><b>By- </b>$result[author]</div>";
            echo "<div id='price' ><b>Rs- </b> $result[price]</div>";
            echo "</div>";
            $total_books++;
            if($total_books==2)
                        echo "<script> document.getElementById('sort-by').style.display='block';</script>";
            if($total_books>12)
                echo "<script> document.getElementById('books-displayer').style.height='1500px';</script>";
            if($total_books==20)
                break;

        }
        if($total_books==0)
            echo "<br><span style='color:red;font-size:20px;margin-left:270px'>Currently No Any Stock Available.</span>";
    }
    
    echo "</div>";
}
else if($_GET["view"]=='recently-sold')
{
    echo "<script> document.getElementById('books-displayer').style.display='block';</script>";
    $ok=mysql_query('select * from book_details');
    if($ok)
    {   
        $total_books=0;
        while($result=mysql_fetch_array($ok))
        {  
            for($i=0;$i<20;$i++)
            {
                if($result['product_no']==$list_of_recently_sold_product[$i])
                {  
                    echo "<div class='BookContainer'>";
                    echo "<a href='bookdetails.php?product-no=$result[product_no]'><div id='image' style='background-image:url($result[image]);' ></div></a>";
                    if($result['discount']>0)
                        echo "<div id='discount'><br><b style='color:white;'>$result[discount]%</b></div>";
                    else
                        echo "<div id='discount' style='background-image:url(BookStore/blank.png)'></div>";
                    echo "<div id='title' ><b><a href='bookdetails.php?product-no=$result[product_no]'>$result[title]</a></b></div>";
                    echo "<div id='author' ><b>By- </b>$result[author]</div>";
                    echo "<div id='price' ><b>Rs- </b> $result[price]</div>";
                    echo "</div>";
                    $total_books++;
                    if($total_books==2)
                        echo "<script> document.getElementById('sort-by').style.display='block';</script>";
                    if($total_books>12)
                        echo "<script> document.getElementById('books-displayer').style.height='1500px';</script>";
                    break;
                }
            }
        }
        if($total_books==0)
            echo "<br><span style='color:red;font-size:20px;margin-left:270px'>Currently No Any Stock Available.</span>";
    }
    echo "</div>";
}
else if($_GET["view"]=='children-books')
{
    echo "<script> document.getElementById('books-displayer').style.display='block';</script>";
    $ok=mysql_query("select * from book_details where category='children'");
    if($ok)
    {   
        $total_books=0;
        while($result=mysql_fetch_array($ok))
        {  
            echo "<div class='BookContainer'>";
            echo "<div id='image' style='background-image:url($result[image]);' ></div>";
            if($result['discount']>0)
                echo "<div id='discount'><br><b style='color:white;'>$result[discount]%</b></div>";
            else
                echo "<div id='discount' style='background-image:url(BookStore/blank.png)'></div>";
            echo "<div id='title' ><b><a href='bookdetails.php?product-no=$result[product_no]'>$result[title]</a></b></div>";
            echo "<div id='author' ><b>By- </b>$result[author]</div>";
            echo "<div id='price' ><b>Rs- </b> $result[price]</div>";
            echo "</div>";
            $total_books++;
            if($total_books==2)
                        echo "<script> document.getElementById('sort-by').style.display='block';</script>";
            if($total_books>12)
                echo "<script> document.getElementById('books-displayer').style.height='1500px';</script>";
            if($total_books==20)
                break;

        }
        if($total_books==0)
            echo "<br><span style='color:red;font-size:20px;margin-left:270px'>Currently No Any Stock Available.</span>";
    }
    
    echo "</div>";
}
else if($_GET["view"]=='computer-books')
{
    echo "<script> document.getElementById('books-displayer').style.display='block';</script>";
    $ok=mysql_query("select * from book_details where category='Computer'");
    if($ok)
    {   
        $total_books=0;
        while($result=mysql_fetch_array($ok))
        {  
            echo "<div class='BookContainer'>";
            echo "<div id='image' style='background-image:url($result[image]);' ></div>";
            if($result['discount']>0)
                echo "<div id='discount'><br><b style='color:white;'>$result[discount]%</b></div>";
            else
                echo "<div id='discount' style='background-image:url(BookStore/blank.png)'></div>";
            echo "<div id='title' ><b><a href='bookdetails.php?product-no=$result[product_no]'>$result[title]</a></b></div>";
            echo "<div id='author' ><b>By- </b>$result[author]</div>";
            echo "<div id='price' ><b>Rs- </b> $result[price]</div>";
            echo "</div>";
            $total_books++;
            if($total_books==2)
                        echo "<script> document.getElementById('sort-by').style.display='block';</script>";
            if($total_books>12)
                echo "<script> document.getElementById('books-displayer').style.height='1500px';</script>";
            if($total_books==20)
                break;

        }
        if($total_books==0)
            echo "<br><span style='color:red;font-size:20px;margin-left:270px'>Currently No Any Stock Available.</span>";
    }
    
    echo "</div>";
}
else if($_GET["view"]=='history-books')
{
    echo "<script> document.getElementById('books-displayer').style.display='block';</script>";
    $ok=mysql_query("select * from book_details where category='history'");
    if($ok)
    {   
        $total_books=0;
        while($result=mysql_fetch_array($ok))
        {  
            echo "<div class='BookContainer'>";
            echo "<div id='image' style='background-image:url($result[image]);' ></div>";
            if($result['discount']>0)
                echo "<div id='discount'><br><b style='color:white;'>$result[discount]%</b></div>";
            else
                echo "<div id='discount' style='background-image:url(BookStore/blank.png)'></div>";
            echo "<div id='title' ><b><a href='bookdetails.php?product-no=$result[product_no]'>$result[title]</a></b></div>";
            echo "<div id='author' ><b>By- </b>$result[author]</div>";
            echo "<div id='price' ><b>Rs- </b> $result[price]</div>";
            echo "</div>";
            $total_books++;
            if($total_books==2)
                        echo "<script> document.getElementById('sort-by').style.display='block';</script>";
            if($total_books>12)
                echo "<script> document.getElementById('books-displayer').style.height='1500px';</script>";
            if($total_books==20)
                break;

        }
        if($total_books==0)
            echo "<br><span style='color:red;font-size:20px;margin-left:270px'>Currently No Any Stock Available.</span>";
    }
    
    echo "</div>";
}
else if($_GET["view"]=='polities-books')
{
    echo "<script> document.getElementById('books-displayer').style.display='block';</script>";
    $ok=mysql_query("select * from book_details where category='polities'");
    if($ok)
    {   
        $total_books=0;
        while($result=mysql_fetch_array($ok))
        {  
            echo "<div class='BookContainer'>";
            echo "<div id='image' style='background-image:url($result[image]);' ></div>";
            if($result['discount']>0)
                echo "<div id='discount'><br><b style='color:white;'>$result[discount]%</b></div>";
            else
                echo "<div id='discount' style='background-image:url(BookStore/blank.png)'></div>";
            echo "<div id='title' ><b><a href='bookdetails.php?product-no=$result[product_no]'>$result[title]</a></b></div>";
            echo "<div id='author' ><b>By- </b>$result[author]</div>";
            echo "<div id='price' ><b>Rs- </b> $result[price]</div>";
            echo "</div>";
            $total_books++;
            if($total_books==2)
                        echo "<script> document.getElementById('sort-by').style.display='block';</script>";
            if($total_books>12)
                echo "<script> document.getElementById('books-displayer').style.height='1500px';</script>";
            if($total_books==20)
                break;

        }
        if($total_books==0)
            echo "<br><span style='color:red;font-size:20px;margin-left:270px'>Currently No Any Stock Available.</span>";
    }
    
    echo "</div>";
}
else if($_GET["view"]=='science-books')
{
    echo "<script> document.getElementById('books-displayer').style.display='block';</script>";
    $ok=mysql_query("select * from book_details where category='science'");
    if($ok)
    {   
        $total_books=0;
        while($result=mysql_fetch_array($ok))
        {  
            echo "<div class='BookContainer'>";
            echo "<div id='image' style='background-image:url($result[image]);' ></div>";
            if($result['discount']>0)
                echo "<div id='discount'><br><b style='color:white;'>$result[discount]%</b></div>";
            else
                echo "<div id='discount' style='background-image:url(BookStore/blank.png)'></div>";
            echo "<div id='title' ><b><a href='bookdetails.php?product-no=$result[product_no]'>$result[title]</a></b></div>";
            echo "<div id='author' ><b>By- </b>$result[author]</div>";
            echo "<div id='price' ><b>Rs- </b> $result[price]</div>";
            echo "</div>";
            $total_books++;
            if($total_books==2)
                        echo "<script> document.getElementById('sort-by').style.display='block';</script>";
            if($total_books>12)
                echo "<script> document.getElementById('books-displayer').style.height='1500px';</script>";
            if($total_books==20)
                break;

        }
        if($total_books==0)
            echo "<br><span style='color:red;font-size:20px;margin-left:270px'>Currently No Any Stock Available.</span>";
    }
    
    echo "</div>";
}
else if($_GET["view"]=='management-books')
{
    echo "<script> document.getElementById('books-displayer').style.display='block';</script>";
    $ok=mysql_query("select * from book_details where category='management'");
    if($ok)
    {   
        $total_books=0;
        while($result=mysql_fetch_array($ok))
        {  
            echo "<div class='BookContainer'>";
            echo "<div id='image' style='background-image:url($result[image]);' ></div>";
            if($result['discount']>0)
                echo "<div id='discount'><br><b style='color:white;'>$result[discount]%</b></div>";
            else
                echo "<div id='discount' style='background-image:url(BookStore/blank.png)'></div>";
            echo "<div id='title' ><b><a href='bookdetails.php?product-no=$result[product_no]'>$result[title]</a></b></div>";
            echo "<div id='author' ><b>By- </b>$result[author]</div>";
            echo "<div id='price' ><b>Rs- </b> $result[price]</div>";
            echo "</div>";
            $total_books++;
            if($total_books==2)
                        echo "<script> document.getElementById('sort-by').style.display='block';</script>";
            if($total_books>12)
                echo "<script> document.getElementById('books-displayer').style.height='1500px';</script>";
            if($total_books==20)
                break;

        }
        if($total_books==0)
            echo "<br><span style='color:red;font-size:20px;margin-left:270px'>Currently No Any Stock Available.</span>";
    }
    
    echo "</div>";
}
else if($_GET["view"]=='indian-languages-books')
{
    echo "<script> document.getElementById('books-displayer').style.display='block';</script>";
    $ok=mysql_query("select * from book_details where category='indian languages'");
    if($ok)
    {   
        $total_books=0;
        while($result=mysql_fetch_array($ok))
        {  
            echo "<div class='BookContainer'>";
            echo "<div id='image' style='background-image:url($result[image]);' ></div>";
            if($result['discount']>0)
                echo "<div id='discount'><br><b style='color:white;'>$result[discount]%</b></div>";
            else
                echo "<div id='discount' style='background-image:url(BookStore/blank.png)'></div>";
            echo "<div id='title' ><b><a href='bookdetails.php?product-no=$result[product_no]'>$result[title]</a></b></div>";
            echo "<div id='author' ><b>By- </b>$result[author]</div>";
            echo "<div id='price' ><b>Rs- </b> $result[price]</div>";
            echo "</div>";
            $total_books++;
            if($total_books==2)
                        echo "<script> document.getElementById('sort-by').style.display='block';</script>";
            if($total_books>12)
                echo "<script> document.getElementById('books-displayer').style.height='1500px';</script>";
            if($total_books==20)
                break;

        }
        if($total_books==0)
            echo "<br><span style='color:red;font-size:20px;margin-left:270px'>Currently No Any Stock Available.</span>";
    }
    
    echo "</div>";
}
else if($_GET["view"]=='entrance-exams-books')
{

    echo "<script> document.getElementById('books-displayer').style.display='block';</script>";
    $ok=mysql_query("select * from book_details where Category='Entrance Exams'");
    if($ok)
    {   
        $total_books=0;
        while($result=mysql_fetch_array($ok))
        {  
            echo "<div class='BookContainer'>";
            echo "<div id='image' style='background-image:url($result[image]);' ></div>";
            if($result['discount']>0)
                echo "<div id='discount'><br><b style='color:white;'>$result[discount]%</b></div>";
            else
                echo "<div id='discount' style='background-image:url(BookStore/blank.png)'></div>";
            echo "<div id='title' ><b><a href='bookdetails.php?product-no=$result[product_no]'>$result[title]</a></b></div>";
            echo "<div id='author' ><b>By- </b>$result[author]</div>";
            echo "<div id='price' ><b>Rs- </b> $result[price]</div>";
            echo "</div>";
            $total_books++;
            if($total_books==2)
                        echo "<script> document.getElementById('sort-by').style.display='block';</script>";
            if($total_books>12)
                echo "<script> document.getElementById('books-displayer').style.height='1500px';</script>";
            if($total_books==20)
                break;
         }
         if($total_books==0)
            echo "<br><span style='color:red;font-size:20px;margin-left:270px'>Currently No Any Stock Available.</span>";
    }
    echo "</div>";
}
else if($_GET["view"]=='all-books')
{
    echo "<script> document.getElementById('books-displayer').style.display='block';</script>";
    $ok=mysql_query("select * from book_details");
    if($ok)
    {   
        $total_books=0;
        while($result=mysql_fetch_array($ok))
        {  
            echo "<div class='BookContainer'>";
            echo "<div id='image' style='background-image:url($result[image]);' ></div>";
            if($result['discount']>0)
                echo "<div id='discount'><br><b style='color:white;'>$result[discount]%</b></div>";
            else
                echo "<div id='discount' style='background-image:url(BookStore/blank.png)'></div>";
            echo "<div id='title' ><b><a href='bookdetails.php?product-no=$result[product_no]'>$result[title]</a></b></div>";
            echo "<div id='author' ><b>By- </b>$result[author]</div>";
            echo "<div id='price' ><b>Rs- </b> $result[price]</div>";
            echo "</div>";
            $total_books++;
            if($total_books==2)
                        echo "<script> document.getElementById('sort-by').style.display='block';</script>";
            if($total_books>12)
                echo "<script> document.getElementById('books-displayer').style.height='1500px';</script>";
            if($total_books==20)
                break;

        }
        if($total_books==0)
            echo "<br><span style='color:red;font-size:20px;margin-left:270px'>Currently No Any Stock Available.</span>";
    }
    
    echo "</div>";
}
else 
{
    echo "<script> document.getElementById('books-displayer').style.display='block';</script>";
    echo "<script> document.getElementById('sort-by').style.display='none';</script>";
    echo "<b style='margin-left:300px;font-size:20px;color:red;'>Error in this page</b>"; 
    echo "</div>";
}
mysql_close($con);
?>