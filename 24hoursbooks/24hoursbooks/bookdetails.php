<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="css" href="cssfiles/index-page.css">
        <link rel="stylesheet" type="css" href="cssfiles/bookdetails-page.css">
        <script src="JavaScript/myjquery.js"></script>
        <title>Online Shopping India</title>
        
        
        <style>
        #cart
        {
            background-color:silver;
        }
        #cart:hover
        {
            background-color:#ddd;
            cursor: pointer;
        }
        #view-more:hover,#hide-details:hover
        {
            text-decoration: underline;
            cursor:pointer;
        }
        #close-btn:hover
        {
            cursor: pointer;
        }
        </style>
        <script>
         var xmlhttp;
         function createXmlObject()
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
         function addProductIntoWishlist()
         {
            var pNo=document.getElementById('product-no').value;
            createXmlObject();                
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4)
                { 
                    if(xmlhttp.responseText=='UserNotLogged')
                    {
                        window.location.href='login.php?action=signIn';
                    }
                    if(xmlhttp.responseText=='ProductAllreadyAdded')
                    {
                        document.getElementById('display-message').style.display='block';
                        document.getElementById('display-message').style.backgroundColor='#FFA07A';
                        document.getElementById('display-message').style.borderColor='darkred';
                        document.getElementById('message').style.color='darkred';
                        document.getElementById('image-icon').style.backgroundImage='url(images/wrong-info.png)';
                        document.getElementById('message').innerHTML='Sorry ! You have alredy added this product into your wishlist.';
                    }
                    if(xmlhttp.responseText=='ProductAddedSuccessfully')
                    {
                        document.getElementById('display-message').style.display='block';
                        document.getElementById('display-message').style.backgroundColor='lightgreen';
                        document.getElementById('display-message').style.borderColor='green';
                        document.getElementById('message').style.color='green';
                        document.getElementById('image-icon').style.backgroundImage='url(images/right-info.png)';
                        document.getElementById('message').innerHTML='Congratulates ! Your have successfully added this product into your wishlist.';
                    }
                }
            }
            xmlhttp.open("GET","lib/request-for-response.php?action=addProductIntoWishlist&pno="+pNo,true);
            xmlhttp.send();
         }
         function buy()
         {
            var no;
            //alert('ranjan');
            var pNo=document.getElementById('product-no').value;
            createXmlObject();                
            xmlhttp.onreadystatechange=function()
              {
                if (xmlhttp.readyState==4)
                { 
                    no=xmlhttp.responseText;
                    if(no >= document.getElementById('quantity').value)
                    {
                        document.getElementById('no-of-products').value=document.getElementById('quantity').value;
                        document.frmCart.submit();
                    }
                    else
                    {
                        document.getElementById('display-message').style.display='block';
                        document.getElementById('display-message').style.backgroundColor='#FFA07A';
                        document.getElementById('display-message').style.borderColor='darkred';
                        document.getElementById('message').style.color='darkred';
                        document.getElementById('image-icon').style.backgroundImage='url(images/wrong-info.png)';
                        document.getElementById('message').innerHTML='Sorry ! Only '+no+' books available for this product.';
                    }

                }
              }
                xmlhttp.open("GET","lib/request-for-response.php?action=getAvailableQtyOfBook&pno="+pNo,true);
                xmlhttp.send();
         }
         $(document).ready(function()
             {			                
                $("#view-more").click(function()
                {
                    $("#book-details").slideDown(1000);
                    $("#view-more").hide();
                    $("#hide-details").show();
                });
                $("#hide-details").click(function()
                {
                    $("#book-details").slideUp(1000);
                    $("#hide-details").hide();
                    $("#view-more").show();
                });
            });
        </script>
        
    </head>
    <body>
        <form name="frmCart" action="shopping-cart.php" method="post">
            <input type="hidden" id="product-no" name="productNo">
            <input type="hidden" id="no-of-products" name="noOfProducts" >
            <input type="hidden" id="product-name" name="productName" value="ranjan product">
            <input type="hidden" id="selling-price" name="sellingPrice" >
        </form>
        <div class="MainContainer">
            <div class="HeaderContainer">
               <?php
		include("includes/header.inc.php");
		?> 
           </div>
           <div class="MainBody">
               
               <div class="BookDetailsDisplayer">
                   <?php
                   include("includes/connect_db.inc.php");
                   $ok=mysql_query('select * from book_details');
                   if($ok)
                   {                
                        while($result=mysql_fetch_array($ok))
                        { 
                            if($result['product_no']==$_GET['product-no'])
                            {
                            
                            echo "<div class='Image'>";
                                echo "<div id='image' style='background-image:url($result[12])' ></div>";
                                if($result['discount']>0)
                                    echo "<div id='discount'><br><b style='color:white;'>$result[11]%</b></div>";
                                else
                                    echo "<div id='discount' style='background-image:url(BookStore/blank.png)'></div>";
                            echo "</div>";
                            echo "<div class='BookInfo'>";
                                echo "<table width='500px'><tr><td><span style='color:darkblue;font-size: 24px;'>$result[title]</span></td></tr>".
                                         "<tr><td><span style='color:red;'><b>By</b>- $result[author]</span></td></tr>".
                                         "<tr><td><span style='color:#ddd;'>Product code : $result[product_no]</span></td></tr>".
                                         "<tr><td>&nbsp;</td></tr>";
                                if($result['discount']>0)
                                {
                                    $sellingPrice=round($result['price']-$result['price']*$result['discount']/100);
                                    echo "<tr><td><span style='color:silver;text-decoration:line-through;'><i>₹$result[price]</i></span>".
                                             "&nbsp;&nbsp;<span style='color:darkred;font-size:24px'><b>₹ $sellingPrice</b></span>";
                                    
                                }
                                else
                                {
                                    echo "<tr><td><span style='color:darkred;font-size:24px'><b>₹ $result[price]</b></span>";
                                    $sellingPrice=$result['price'];
                                    
                                }
                                if($sellingPrice>299)
                                {
                                    echo "&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:stateblue;'> with <span style='color:green;'><b>FREE</b></span> Shipping</span></tr></td>";
                                }
                                else
                                {
                                   echo "&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:stateblue;'> with Shipping charge <b>₹30</b></span></tr></td>"; 
                                }
                                echo "<tr><td><span style='color:darkgray;'> (Prices are inclusive of all taxes)</span></td></tr><br><tr><td>&nbsp;</td></tr>";
                                if($result['no_of_books']>0)
                                {
                                    echo "<tr><td><span style='color:green;'>In Stock</span></td></tr>";
                                    echo "<tr><td><span style='color:stateblue;'>Delivered in 3-5 Business Days</span></td></tr>";
                                    echo "<tr><td><span style='color:stateblue;'>Quantity : </span><input id='quantity' type='text' value='1' style='color:skyblue;width:30px;padding:2px;'></td></tr>";
                                }
                                else
                                {
                                    echo "<tr><td><span style='color:red;'>Out Of Stock</span></td></tr>";
                                    echo "<tr><td><span style='color:stateblue;'>Delivered in 3-5 Business Days</span></td></tr>";
                                }
                                
                                echo "</table>";
                           echo "</div>";
                           echo "<script>document.getElementById('product-no').value=$result[product_no];</script>";
                           echo "<script>document.getElementById('product-name').value='$result[title]';</script>";
                           echo "<script>document.getElementById('selling-price').value=$sellingPrice;</script>";
                           echo "<div class='Bynow'>".
                                     "<div style='height:300px;width:240px;margin-top:40px;background-color:lightblue'>";
                                     if($result['no_of_books']>0)
                                        echo "<input id='buy-now' type='button' onclick='buy()'>";
                                     else
                                        echo "<input disabled id='buy-now' type='button' onclick='buy()'>";
                                     echo "<input id='add-to-wishlist' type='button' onclick='addProductIntoWishlist()'>".
                                          "<div style='text-align:center;height:90px;width:240px;margin-top:20px;background-color:skyblue'>".
                                                "<br><span style='color:green;'>check deliverable area</span>".
                                                "<input id='check-pincode' maxlength='6' placeholder='Enter your PINCODE' type='text'>".
                                          "</div>".
                                          "<div style='text-align:center;height:50px;width:238px;margin:3px 0px;background-color:darkblue;border:1px solid lightskyblue;'>".
                                          "<span style='color:white;font-size:20px;'><b>Need help to buy ?</b></span>".
                                          "<br><span style='color:white;font-size:12px;'>Call +918148437880 (Open 24Hrs)</span>".
                                          "</div>".
                                     "</div>".
                                "</div>";
                           echo "<div class='ViewDetails'><span id='view-more'>view more >></span><span id='hide-details' hidden>hide details >></span></div>";
                           echo "<div id='book-details' class='BookDetails' hidden>".
                                   "<table cellspacing='20' width='1000' style='font-size:20px;color:green'>".
                                        "<tr><td>Title of Book</td><td> : </td><td><span style='color:darkred;'>$result[title]</span></td></tr>".
                                        "<tr><td>Author</td><td> : </td><td><span style='color:darkred;'>$result[author]</span></td></tr>".
                                        "<tr><td>Publication</td><td> : </td><td><span style='color:darkred;'>$result[publisher]</span></td></tr>".
                                        "<tr><td>Pages</td><td> : </td><td><span style='color:darkred;'>$result[no_of_pages]</span></td></tr>".
                                        "<tr><td>Year Of Publication</td><td> : </td><td><span style='color:darkred;'>$result[year_of_publication]</span></td></tr>".
                                        "<tr><td>Product Code</td><td> : </td><td><span style='color:darkred;'>$result[product_no]</span></td></tr>".
                                        "<tr><td>ISBN No</td><td> : </td><td><span style='color:darkred;'>$result[isbn]</span></td></tr>".
                                        "<tr><td>Category</td><td> : </td><td><span style='color:darkred;'>$result[category]</span></td></tr>".
                                        "<tr><td>Language</td><td> : </td><td><span style='color:darkred;'>$result[language]</span></td></tr>".
                                   "</table>".
                                "</div>";
                           break;
                            }
                        }
                    }
                   ?>
               </div>
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

