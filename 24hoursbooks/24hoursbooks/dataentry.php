<?php
session_start();
include ('includes/connect_db.inc.php');
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="css" href="cssfiles/dataentry-page.css">
        <!--<link rel="stylesheet" type="css" href="cssfiles/index-page.css">-->
        <title>Data Entries</title>
        
        <script language="javascript">
            function setBorder(id)
            {
                id.style.border='1px solid silver';
            }
            function checkProductNo(id)
            {
                if((id.value).length!=0)
                {
                    if((id.value).length!=10)
                    {                               
                        document.getElementById("row1").innerHTML="Product No should be 10 digits";
                        id.value="";
                        id.focus(); 
                    }
                    else
                        {
                            document.getElementById("row1").innerHTML="";
                            document.getElementById('check-pno-loading-image').style.display="block";
                            check_product_no();
                        }
                }
            }
            function checkISBN(id)
            {
                if((id.value).length!=0)
                {
                    if((id.value).length!=10)
                    {                               
                        alert("ISBN No should be 10 digits");
                        id.focus(); 
                    }
                }
            }
            
            function storeNewBooks()
            {
                if(document.getElementById('product-no').value=="")
                    {
                        alert('Product no field can not be left empty');
                        document.getElementById('product-no').focus();
                    }
                else if(document.getElementById('isbn-no').value=="")
                    {
                        alert('ISBN no field can not be left empty');
                        document.getElementById('isbn-no').focus();
                    }
                else if(document.getElementById('title').value=="")
                    {
                        alert('Title of book field can not be left empty');
                        document.getElementById('title').focus();
                    }
                else if(document.getElementById('publisher').value=="")
                    {
                        alert('Publisher field can not be left empty');
                        document.getElementById('publisher').focus();
                    }
               else if(document.getElementById('year-of-publication').value=="")
                    {
                        alert('Publication year field can not be left empty');
                        document.getElementById('year-of-publication').focus();
                    }
               else if(document.getElementById('price').value=="")
                    {
                        alert('Price field can not be left empty');
                        document.getElementById('price').focus();
                    }
               else if(document.getElementById('author').value=="")
                    {
                        alert('Author field can not be left empty');
                        document.getElementById('author').focus();
                    }
                else if(document.getElementById('no-of-pages').value=="")
                    {
                        alert('No of Pages field can not be left empty');
                        document.getElementById('no-of-pages').focus();
                    }
                else if(document.getElementById('no-of-books').value=="")
                    {
                        alert('No of books field can not be left empty');
                        document.getElementById('no-of-books').focus();
                    }
               else if(document.getElementById('discount').value=="")
                    {
                        alert('Discount field can not be left empty');
                        document.getElementById('discount').focus();
                    }
               else if(document.getElementById('uploaded-image').value=="")
                    {
                        alert('Please upload an image of book');
                        document.getElementById('uploaded-image').focus();
                    }
               else
                   {
                       document.forms[0].submit();
                   }
               
            }
            function updateBook()
            {
                 if(document.getElementById('isbn-no').value=="")
                    {
                        alert('ISBN no field can not be left empty');
                        document.getElementById('isbn-no').focus();
                    }
                else if(document.getElementById('title').value=="")
                    {
                        alert('Title of book field can not be left empty');
                        document.getElementById('title').focus();
                    }
                else if(document.getElementById('publisher').value=="")
                    {
                        alert('Publisher field can not be left empty');
                        document.getElementById('publisher').focus();
                    }
               else if(document.getElementById('year-of-publication').value=="")
                    {
                        alert('Publication year field can not be left empty');
                        document.getElementById('year-of-publication').focus();
                    }
               else if(document.getElementById('price').value=="")
                    {
                        alert('Price field can not be left empty');
                        document.getElementById('price').focus();
                    }
               else if(document.getElementById('author').value=="")
                    {
                        alert('Author field can not be left empty');
                        document.getElementById('author').focus();
                    }
                else if(document.getElementById('no-of-pages').value=="")
                    {
                        alert('No of Pages field can not be left empty');
                        document.getElementById('no-of-pages').focus();
                    }
                else if(document.getElementById('no-of-books').value=="")
                    {
                        alert('No of books field can not be left empty');
                        document.getElementById('no-of-books').focus();
                    }
               else if(document.getElementById('discount').value=="")
                    {
                        alert('Discount field can not be left empty');
                        document.getElementById('discount').focus();
                    }
               
               else
                   {
                       document.frmUpdateBookInfo.submit();
                   }
               
            }
            function displayBookInfo()
            {
                if(document.getElementById('enter-product-no').value=="")
                    {
                        document.getElementById('enter-product-no').style.border='1px solid red';
                        alert('Enter product no first');
                        document.getElementById('enter-product-no').focus();
                    }
                else if((document.getElementById('enter-product-no').value).length!=10)
                    {
                        document.getElementById('enter-product-no').style.border='1px solid red';
                        alert('Enter a valid product no');
                        document.getElementById('enter-product-no').focus();
                    }
               else
                   {
                       document.frmUpdateBook.submit();
                   }
            }
            function searchBooks()
            {
                if(document.getElementById('by-pno').value=='')
                    {
                        document.getElementById('by-pno').style.border='1px solid red';
                        document.getElementById('by-pno').focus();
                    }
                else
                    {
                        document.frmSearchBook.submit();
                    }
                
            }
            
            
            function check_product_no()
            {
                
                var product_no=document.getElementById('product-no').value;                
                var xmlhttp;
                //document.getElementById('check-pno-loading-image').style.display="block";
                document.getElementById('check-pno-loading-image').style.display="block";
                if (window.XMLHttpRequest)
                  {// code for IE7+, Firefox, Chrome, Opera, Safari
                  xmlhttp=new XMLHttpRequest();
                  }
                else
                  {// code for IE6, IE5
                  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                xmlhttp.onreadystatechange=function()
                  {
                    if (xmlhttp.readyState==4)
                    {          
                        document.getElementById("check-pno-loading-image").style.display="none";
                        if(xmlhttp.responseText=='Given product number already exist')
                            {
                                document.getElementById("row1").innerHTML=xmlhttp.responseText;
                                document.getElementById("product-no").value="";
                                document.getElementById("product-no").focus();
                            }
                        
                    }
                  }
                xmlhttp.open("GET","lib/check_product_number.php?prod_no="+product_no,true);
                xmlhttp.send();
            }
        </script>
        <style>
            div.MiniScreen input
            {
                padding: 4px;
                font-size: 14px;
                color: green;
                /*border-radius: 5px;*/
                /*border-color: green;*/
            }
            /*#store-new-books, #search-books, #update-books, #orders
            {
                display: none;
            }*/
        </style>
    </head>
    <body>
        <div class="MainContainer">
            <div class="HeaderContainer">
                <a href="index.php"><div class="Logo"></div></a>
                <div style="background-image: url(Images/data.png);height: 120px;margin-left: 330px">
                    <div style="text-align: right;padding:0px 10px;font-size: 18px ">
                        <?php
                        if(isset($_SESSION['loggedUserName']))
                        {
                            echo "<span id='loged-operator' style='color: cornflowerblue;'>Welcome $_SESSION[loggedUserName]</span> | <a id='myaccount-link' href='dataentry.php'>My Account</a> | <a id='logout-link' href='logout.php'>Logout</a>";
                        }
                        ?>
                    </div>
                
                </div>
            </div>
            
            
            <div class="MenuContainer">
                <div id="menu">
                    <ul>
                    <li><a href="index.php">Home</a></li>	
                    <li><a href="dataentry.php?action=store-new-book">Store new Book</a></li>				
                    <li><a href="dataentry.php?action=update-book">Update Book</a></li>			            
                    <li><a href="dataentry.php?action=search-book">Search Book</a></li>
                    <li><a href="dataentry.php?action=show-orders">Show Orders</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="Banner" style="text-align:right;" >
                <input id="sidebar-search-by-isbn-no" name="sidebarSearchbyIsbnNo" type="text" maxlength="10" placeholder="enter product no to search books" style="padding:2px;width:200px;">
                <input id="banner-search-books" type="Button" style="width:25px;height: 25px;border-radius: 5px; padding: 4px; background-image: url(Images/search-icon-20x20.png);"> &nbsp;
            </div>
            
            <div id="display-message" class="DisplayMessages" hidden>
                <div style="position: absolute; height:20px;width:1050px;margin:15px;">
                    <span id="message" style="color:darkred;">Login id and password are invalid</span>
                </div>
                <div style="height:20px;width:20px;margin-left:1065px;margin-top:15px;">
                    <input type="button" onclick="document.getElementById('display-message').style.display='none'" style="height: 20px;width: 20px;border-radius:10px;background-image: url(Images/close-red-btn.png)"/>
                </div>
            </div>
            <div class="BodyContainer">
<!--Start code for My Profile---------------------------------------------------------------------------------------->
            <?php
                if(isset($_GET['action']))
                {
                    if($_GET['action']=='show-profile')
                    { ?>
                <div id="profile" class="MiniScreen" style="background-image: url(Images/b.png);">
                    <div style="margin-top: 10px;margin-left: 10px;height: 150px;width:540px;position: absolute;">
                        <img src="Images/my-profile.png"></div>
                    <div class="ProfilePhoto"></div><hr>
                    
                    Ranjan kumar<br>
                    +91-9031203635<br>
                    ranjankumar1231@gmail.com<br><br><br>
                    Room No-16 Tagore Hostel <br>
                    Pondicherry University.<br>
                    R.V.Nagar Kalapet Pondicherry 605014.
                </div>
                <?php } } ?>
<!--End code for My Profile------------------------------------------------------------------------------------------>               
<!--Start code for Store new books----------------------------------------------------------------------------------->
                <?php
                if(isset($_GET['action']))
                {
                    if($_GET['action']=='store-new-book')
                    { ?>
                <div id="store-new-books" class="MiniScreen" > 
                    <form enctype="multipart/form-data" action="dataentry.php?store-new-book=success" method="post">
                        
                    <span style="color: green;font-size: 30px;"><b>Store New Books</b></span><hr><br>
                    <table  style="font-size:14px;color:darkgreen;">
                            
                        <tr><td>Product no<span style="color:red">*</span></td><td>:</td><td><input onblur="checkProductNo(this)" id="product-no" name="productNo" type="text" maxlength="10" style="width:180px;"></td>
                            <td colspan="3" ><div hidden id="check-pno-loading-image"  style="float:left;height: 20px;width: 20px;background-size: 20px 20px;background-image: url('images/loading.gif');"></div>
                                <div id="row1"  style="float:left;color:red;height: 20px;width: 210px;"></div>
                            </td>
                        </tr>   
                            <tr><td>ISBN no<span style="color:red">*</span></td><td>:</td><td><input onblur="checkISBN(this)" id="isbn-no" name="isbnNo" type="text" maxlength="10" style="width:180px;"></td></tr>
                            
                            <tr><td>Title of Book<span style="color:red">*</span></td><td>:</td><td colspan="4"><input  id="title" name="title" type="text" maxlength="100" style="width:405px;"></td></tr>  
                            <tr>
                                <td>Publisher<span style="color:red">*</span></td><td>:</td><td colspan="4"><input id="publisher" name="publisher" type="text" maxlength="50" style="width:405px;"></td>
                            </tr>
                            <tr>
                                <td>Category<span style="color:red">*</span></td><td>:</td>
                                    <td><select id="category" name="category" style="width:190px;color:green;font-size:14px;padding: 5px;">
                                        <option value="children">Children</option>
                                        <option value="computer">Computer</option>   
                                        <option value="history">History</option>
                                        <option value="polities">Polities</option>
                                        <option value="science">Science</option>
                                        <option value="management">Management</option>
                                        <option value="magazine">Magazine</option>
                                        <option value="indian languages">Indian Languages</option>
                                        <option value="entrance exams">Entrance Exams</option>
                                        <option value="others">Others</option>
                                        </select>
                                    </td>
                                <td>Year Of Publication<span style="color:red">*</span></td><td>:</td><td><input id="year-of-publication" name="yearOfPublication" type="text" maxlength="4" style="width:80px;"></td>
                            </tr>
                            <tr>
                                <td>Language<span style="color:red">*</span></td><td>:</td>
                                    <td><select id="language" name="language"  style="width:190px;color:green;font-size:14px;padding: 5px;">
                                        <option value="Hindi">Hindi</option>
                                        <option value="English">English</option>                          
                                        </select>
                                    </td>
                                <td>Price<span style="color:red">*</span></td><td>:</td><td><input id="price" name="price" type="text" style="width:80px;"></td>
                            </tr>
                            
                            <tr>
                                <td>Author<span style="color:red">*</span></td><td>:</td><td><input id="author" name="author" type="text" style="width:180px;"></td>
                                <td>No of Pages<span style="color:red">*</span></td><td>:</td><td><input id="no-of-pages" name="noOfPages" type="text" style="width:80px;"></td>
                            </tr> 
                            <tr>
                                <td>No Of Books<span style="color:red">*</span></td><td>:</td><td><input id="no-of-books" name="noOfBooks" type="text" style="width:180px;"></td>
                                <td>Discount<span style="color:red">*</span></td><td>:</td><td><input id="discount" name="discount" type="text" style="width:80px;"> %</td>
                            </tr> 
                            <tr><td>Upload an Image of book<span style="color:red">*</span></td><td>:</td><td colspan="3"><input id="uploaded-image" name="uploadedImage" type="file" style=" height: 25px;width:300px;"></td></tr>
                    </table><br>
                    <input onclick="storeNewBooks()" id="store" name="store" type="button" value="Store" style="width:90px;margin-left: 510px">
                    </form>
                </div><?php }} 
                    if(isset($_GET['store-new-book']))
                    {
                        if($_GET['store-new-book']=='success')
                        {
                            
                            // Your file name you are uploading 
                            $new_file_name=$_POST['productNo'].".jpg";

                            //set where you want to store files
                            $path= "BookStore/".$new_file_name;
                            if(move_uploaded_file($_FILES['uploadedImage']['tmp_name'], $path))
                            {
                                include('includes/connect_db.inc.php'); 
                                $user=mysql_query("select * from book_details");
                                $isFound=FALSE;
                                if($user)
                                {                
                                    while($check=mysql_fetch_array($user))
                                    {  
                                        if($check['product_no']==$_POST['productNo'])
                                        {                      
                                            $isFound=TRUE;
                                            echo "<script> alert('Product No already exist try another');</script>";
                                            break;
                                        }
                                    }
                                    if($isFound==FALSE)
                                    {
                                        $result=mysql_query("insert into book_details values('$_POST[productNo]','$_POST[isbnNo]','$_POST[title]','$_POST[publisher]','$_POST[category]','$_POST[yearOfPublication]','$_POST[noOfPages]','$_POST[language]','$_POST[author]','$_POST[price]','$_POST[noOfBooks]','$_POST[discount]','$path')");
                                    }
                                }
                                
                            }
                        }
                    }
                    
                 ?> 
<!--End code for Store new books----------------------------------------------------------------------------------->
<!--Start code for Update books----------------------------------------------------------------------------------->
                <?php
                if(isset($_GET['action']))
                {
                    if($_GET['action']=='update-book')
                    { ?>
                <form name="frmUpdateBook" method="post" action="dataentry.php">
                <div id="update-books" class="MiniScreen" >
                    <span style="color: green;font-size: 30px;"><b>Update Books</b></span><hr><br>
                    <table  style="font-size:14px;color:darkgreen;">
                            <tr><td>Enter product no</td><td>:</td><td><input id="enter-product-no" name="enterPno" type="text" maxlength="10" style="width:200px;">
                                    <input onclick="displayBookInfo()" id="display" name="display" type="button" value="Display" style="width:60px;">
                                </td>
                            </tr>
                            
                    </table>
                </div>
                </form>
                <?php } } ?>
                <?php
                if(isset($_POST['enterPno']))
                {
                    $result=  mysql_query("select * from book_details where product_no='$_POST[enterPno]'");
                    $row=  mysql_fetch_array($result);
                    if($row)
                    {
                     ?>
                    <div id="store-new-books" class="MiniScreen" > 
                    <form name="frmUpdateBookInfo" enctype="multipart/form-data" action="dataentry.php" method="post">
                        
                    <span style="color: green;font-size: 30px;"><b>Update Book Information</b></span><hr><br>
                    <table  style="font-size:14px;color:darkgreen;">
                            <tr><td>ISBN no<span style="color:red">*</span></td><td>:</td>
                                <td><input value="<?php echo $row['isbn']; ?>" onblur="checkISBN(this)" id="isbn-no" name="isbnNo" type="text" maxlength="10" style="width:180px;"></td></tr>
                            
                            <tr><td>Title of Book<span style="color:red">*</span></td><td>:</td>
                                <td colspan="4"><input value="<?php echo $row['title']; ?>" id="title" name="title" type="text" maxlength="100" style="width:405px;"></td></tr>  
                            <tr>
                                <td>Publisher<span style="color:red">*</span></td><td>:</td>
                                <td colspan="4"><input value="<?php echo $row['publisher']; ?>" id="publisher" name="publisher" type="text" maxlength="50" style="width:405px;"></td>
                            </tr>
                            <tr>
                                <td>Category<span style="color:red">*</span></td><td>:</td>
                                    <td><select id="category" name="category" style="width:190px;color:green;font-size:14px;padding: 5px;">
                                        <option value="children">Children</option>
                                        <option value="computer">Computer</option>   
                                        <option value="history">History</option>
                                        <option value="polities">Polities</option>
                                        <option value="science">Science</option>
                                        <option value="management">Management</option>
                                        <option value="magazine">Magazine</option>
                                        <option value="indian languages">Indian Languages</option>
                                        <option value="entrance exams">Entrance Exams</option>
                                        <option value="others">Others</option>
                                        </select>
                                    </td><?php echo"<script>document.getElementById('category').value='$row[category]';</script>"; ?>
                                <td>Year Of Publication<span style="color:red">*</span></td><td>:</td>
                                <td><input value="<?php echo $row['year_of_publication']; ?>" id="year-of-publication" name="yearOfPublication" type="text" maxlength="4" style="width:80px;"></td>
                            </tr>
                            <tr>
                                <td>Language<span style="color:red">*</span></td><td>:</td>
                                    <td><select id="language" name="language"  style="width:190px;color:green;font-size:14px;padding: 5px;">
                                        <option value="Hindi">Hindi</option>
                                        <option value="English">English</option>                          
                                        </select>
                                    </td><?php echo"<script>document.getElementById('language').value='$row[language]';</script>"; ?>
                                <td>Price<span style="color:red">*</span></td><td>:</td>
                                <td><input value="<?php echo $row['price']; ?>" id="price" name="price" type="text" style="width:80px;"></td>
                            </tr>
                            
                            <tr>
                                <td>Author<span style="color:red">*</span></td><td>:</td>
                                <td><input value="<?php echo $row['author']; ?>" id="author" name="author" type="text" style="width:180px;"></td>
                                <td>No of Pages<span style="color:red">*</span></td><td>:</td>
                                <td><input value="<?php echo $row['no_of_pages']; ?>" id="no-of-pages" name="noOfPages" type="text" style="width:80px;"></td>
                            </tr> 
                            <tr>
                                <td>No Of Books<span style="color:red">*</span></td><td>:</td>
                                <td><input value="<?php echo $row['no_of_books']; ?>" id="no-of-books" name="noOfBooks" type="text" style="width:180px;"></td>
                                <td>Discount<span style="color:red">*</span></td><td>:</td>
                                <td><input value="<?php echo $row['discount']; ?>" id="discount" name="discount" type="text" style="width:80px;"> %</td>
                            </tr> 
                            <tr><td>Change an Image of book<span style="color:red">*</span></td><td>:</td>
                                <td colspan="3"><input id="uploaded-image" name="uploadedImage" type="file" style=" height: 25px;width:300px;"></td></tr>
                    </table><br>
                    <input type="hidden" name="productNo" value="<?php echo $row['product_no']; ?>">
                    <input type="hidden" id="image-path" name="imagePath" value="<?php echo $row['image']; ?>">
                    <input onclick="updateBook()" id="update" name="update" type="button" value="Update" style="width:90px;margin-left: 510px" >
                    </form>
                </div>
                <?php }} 
                    if(isset($_POST['imagePath']))
                    {
                        $pno=$_POST['productNo'];
                        $isbn=$_POST['isbnNo'];
                        $title=$_POST['title'];
                        $publisher=$_POST['publisher'];
                        $category=$_POST['category'];
                        $yop=$_POST['yearOfPublication'];
                        $nop=$_POST['noOfPages'];
                        $language=$_POST['language'];
                        $author=$_POST['author'];
                        $price=$_POST['price'];
                        $nob=$_POST['noOfBooks'];
                        $discount=$_POST['discount'];
                        if($_FILES['uploadedImage']['tmp_name']=='')
                        {
                            $imagePath=$_POST['imagePath'];
                        }
                        else
                        {
                            // Your file name you are uploading 
                            $new_file_name=$_POST['productNo'].".jpg";
                            //set where you want to store files
                            $imagePath= "BookStore/".$new_file_name;
                        }
                            $result=mysql_query("UPDATE book_details SET product_no='$pno',isbn='$isbn',title='$title',publisher='$publisher',category='$category',year_of_publication='$yop',no_of_pages='$nop',language='$language',author='$author',price='$price',no_of_books='$nob',discount='$discount',image='$imagePath' WHERE product_no='$pno'");
                            if($result)
                            {
                                move_uploaded_file($_FILES['uploadedImage']['tmp_name'], $imagePath);
                                echo "<script>document.getElementById('display-message').style.display='block';".
                                             "document.getElementById('message').style.color='green';".
                                             "document.getElementById('display-message').style.backgroundColor='lightgreen';".
                                             //"document.getElementById('image-icon').style.backgroundImage='url(images/right-info.png)';".
                                             "document.getElementById('display-message').style.borderColor='green';".
                                             "document.getElementById('message').innerHTML='Book information updated successfully.';".
                                     "</script>";
                            }
                            else
                            {
                                echo "<script> alert('Book Information Not Updated successfully');</script>";
                            }
                        }
                                        
                 ?> 
<!--End code for Update books------------------------------------------------------------------------------------->
<!--Start code for Search books----------------------------------------------------------------------------------->
                <?php
                if(isset($_GET['action']))
                {
                    if($_GET['action']=='search-book')
                    { ?>
                <form method="post" action="dataentry.php" name="frmSearchBook">
                <div id="search-books" class="MiniScreen" >
                    <span style="color: green;font-size: 30px;"><b>Search Books</b></span><hr><br>
                    <table  style="font-size:14px;color:darkgreen;">
                            <tr><td>Enter Product no</td><td>:</td><td><input id="by-pno" name="byPno" onkeyup="setBorder(this)" type="text" maxlength="10" style="width:200px;"><input onclick="searchBooks()"  type="button" value="Search" style="width:60px;"></td></tr>
                            <!--<tr><td>By Title of Book</td><td>:</td><td><input id="by-title" name="byTitle" type="text" style="width:200px;"><input onclick="searchBooks(1)" type="button" value="Search" style="width:60px;"></td></tr>-->
                            <!--<tr><td>By Price</td><td>:</td><td><input id="by-price" name="byPrice" type="text" style="width:200px;"><input onclick="searchBooks(2)" type="button" value="Search" style="width:60px;"></td></tr>-->
                            <!--<tr><td>By Author</td><td>:</td><td><input id="by-author" name="byAuthor" type="text" style="width:200px;"><input onclick="searchBooks(3)" type="button" value="Search" style="width:60px;"></td></tr>-->
                            <!--<tr><td>By Language</td><td>:</td><td><input id="by-language" name="byLanguage" type="text" style="width:200px;"><input onclick="searchBooks(4)" type="button" value="Search" style="width:60px;"></td></tr>-->
                            <!--<tr><td>By Publisher</td><td>:</td><td><input id="by-publisher" name="byPublisher" type="text" style="width:200px;"><input onclick="searchBooks(5)" type="button" value="Search" style="width:60px;"></td></tr>-->
                    </table>
                </div>
                </form>
                <?php } } ?>
                <?php
                if(isset($_POST['byPno']))
                { 
                    
                    $result=  mysql_query("select * from book_details where product_no='$_POST[byPno]'");
                    $row=  mysql_fetch_array($result);
                    if($row)
                    {
                    ?>
                    <div id="search-books" class="MiniScreen" >
                    <span style="color: green;font-size: 30px;"><b>Search Result</b></span><hr><br>
                    <div style="float:left;height:320px;width:250px;background-size:250px 320px;background-image: url(<?php echo $row['image']; ?>)"></div>
                    <div style="float:left;margin-left:20px;height:auto;width:380px;">
                        <table >
                            <tr><td>Title</td><td>:</td><td><?php echo $row['title']; ?></td></tr>
                            <tr><td>Publisher</td><td>:</td><td><?php echo $row['publisher']; ?></td></tr>
                            <tr><td>Author</td><td>:</td><td><?php echo $row['author']; ?></td></tr>
                            <tr><td>Category</td><td>:</td><td><?php echo $row['category']; ?></td></tr>
                            <tr><td>Year of Publication</td><td>:</td><td><?php echo $row['year_of_publication']; ?></td></tr>
                            <tr><td>Language</td><td>:</td><td><?php echo $row['language']; ?></td></tr>
                            <tr><td>Product No</td><td>:</td><td><?php echo $row['product_no']; ?></td></tr>
                            <tr><td>ISBN No</td><td>:</td><td><?php echo $row['isbn']; ?></td></tr>
                            <tr><td>Number of Pages</td><td>:</td><td><?php echo $row['no_of_pages']; ?></td></tr>
                            <tr><td>Unit Price</td><td>:</td><td><?php echo $row['price']; ?></td></tr>
                            <tr><td>Discount</td><td>:</td><td><?php echo $row['discount']; ?></td></tr>
                            <tr><td>Available stock</td><td>:</td><td><?php echo $row['no_of_books']; ?></td></tr>
                        </table>
                    </div>
                    </div>
                <?php 
                
                }
                else
                {
                   echo "No any Result"; 
                }
                }
                ?>
<!--End code for Search books------------------------------------------------------------------------------------->
<!--Start code for Show Orders---------------------------------------------------------------------------------------->
                <?php
                if(isset($_GET['action']))
                {
                    if($_GET['action']=='show-orders')
                    { 
                        $result=  mysql_query("select * from orders");
                        $row=  mysql_fetch_array($result);
                        ?>
                <div id="orders" class="MiniScreen" >
                    <span style="color: green;font-size: 30px;"><b>Orders</b></span>
                    <div style="height:500px;width:650px; overflow: scroll;">
                        <table style="border-spacing:0px 20px;">
                            <tr><td colspan="3"><hr></td></tr>
                            <tr><td width="150"><b>ORDER NO</b></td><td width="300"><b>ORDER DATE & TIME</b></td><td width="200"><b>ORDER STATUS</b></td></tr>
                            <tr><td colspan="3"><hr></td></tr>
                            <?php 
                            while($row=mysql_fetch_array($result))
                            {
                            ?>
                            <tr><td width="150"><a href="<?php echo $row['order_no']; ?>"><?php echo $row['order_no']; ?></a></td><td width="300" style="color:green;"><?php echo $row['order_date']." , ".$row['order_time']; ?></td><td width="200" style="color:green"><?php echo $row['order_status']; ?></td></tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
                <?php } } ?>
<!--End code for Show Orders------------------------------------------------------------------------------------------>       
            </div>
            <div class="SideBarContainer">
                <div class="QuickLinksBoard">
                    <span style="color:red;font-size: 20px;margin-left: 120px">Quick Links</span>
                    <marquee height="110" onmouseover="this.stop()" onmouseout="this.start()" behavior="scroll" direction="up" scrollamount="2"> 
                        <a href="index.php" style="color:green;font-size:14px;">Goto Home Page</a><br>
                        <a href="dataentry.php?action=show-profile" style="color:green;font-size:14px;">My profile</a><br>
                        <a href="dataentry.php?action=store-new-book" style="color:green;font-size:14px;">Store New Book</a><br>
                        <a href="dataentry.php?action=update-stored-book" style="color:green;font-size:14px;">Update Stored Book</a><br>
                        <a href="dataentry.php?action=search-book" style="color:green;font-size:14px;">Search Book By Product-No</a><br>
                        <a href="dataentry.php?action=show-orders" style="color:green;font-size:14px;">Show All Orders</a><br>
                        <a href="" style="color:green;font-size:14px;">Show Orders By Date</a><br>
                        <a href="" style="color:green;font-size:14px;">Show Delivered Orders</a><br>
                        <a href="" style="color:green;font-size:14px;">Show Processing Orders</a><br>
                        
                    </marquee>
                </div><br>
                <img style="border: 1px solid green;margin-left:8px" src="Images/operator.png">
                
            </div>
        </div>
        <div class="Footer">
            <span style="margin-left: 550px;color: white;">Copyright © 2011-2013 24hoursbooks.com</span>
            <br>
        </div>
 <?php 
     if(isset($_GET["q"]))
     {
        if($_GET["q"]==0)
        {
            echo "<script> document.getElementById('profile').style.display='block';</script>";
            echo "<script> document.getElementById('store-new-books').style.display='none';</script>";
            echo "<script> document.getElementById('update-books').style.display='none';</script>";
            echo "<script> document.getElementById('search-books').style.display='none';</script>";
            echo "<script> document.getElementById('orders').style.display='none';</script>";
        }
        else if($_GET["q"]==1)
        {
            echo "<script> document.getElementById('profile').style.display='none';</script>";
            echo "<script> document.getElementById('store-new-books').style.display='block';</script>";
            echo "<script> document.getElementById('update-books').style.display='none';</script>";
            echo "<script> document.getElementById('search-books').style.display='none';</script>";
            echo "<script> document.getElementById('orders').style.display='none';</script>";
        }
        else if($_GET["q"]==2)
        {
            echo "<script> document.getElementById('profile').style.display='none';</script>";
            echo "<script> document.getElementById('store-new-books').style.display='none';</script>";
            echo "<script> document.getElementById('update-books').style.display='block';</script>";
            echo "<script> document.getElementById('search-books').style.display='none';</script>";
            echo "<script> document.getElementById('orders').style.display='none';</script>";
        }
        else if($_GET["q"]==3)
        {
            echo "<script> document.getElementById('profile').style.display='none';</script>";
            echo "<script> document.getElementById('store-new-books').style.display='none';</script>";
            echo "<script> document.getElementById('update-books').style.display='none';</script>";
            echo "<script> document.getElementById('search-books').style.display='block';</script>";
            echo "<script> document.getElementById('orders').style.display='none';</script>";
        }
        else if($_GET["q"]==4)
        {
            echo "<script> document.getElementById('profile').style.display='none';</script>";
            echo "<script> document.getElementById('store-new-books').style.display='none';</script>";
            echo "<script> document.getElementById('update-books').style.display='none';</script>";
            echo "<script> document.getElementById('search-books').style.display='none';</script>";
            echo "<script> document.getElementById('orders').style.display='block';</script>";
        }
        
     }
    ?>
    </body>
</html>