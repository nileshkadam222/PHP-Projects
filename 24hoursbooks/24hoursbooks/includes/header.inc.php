<a href="index.php"><div class="Logo"></div></a>
            <div class="HeaderContent">
                <div style="text-align: right;padding: 0px 5px;font-size: 18px;height:35px;">
                    <span>24 Hours Customer Support | </span>
                    <a id="header-contactus-link" href="">Contact us</a><span> | </span>
                    <?php
                        if(isset($_SESSION['loggedUserEmail']))
                        {
                            echo "<a id='header-myaccount-link' href='myaccount.php?view=my-profile'>My Account</a><span id='link-saparetor'> | </span>".
                                 "<a id='header-logout-link' href='logout.php'>Logout</a>";
                            if($_SESSION['loggedUserType']=='operator')
                                echo "<script>$('#header-myaccount-link').attr('href','dataentry.php')</script>";
                        }
                        else
                        {
                            echo "<a id='header-signup-link' href='login.php'>Sign Up</a><span id='link-saparetor'> | </span>".
                                 "<a id='header-signin-link' href='login.php'>Sign In</a>";
                        }
                echo "</div>";
                if(isset($_SESSION['loggedUserEmail']))
                {
                    echo "<div class='LogedUserContent'><span id='loged-user'>Welcome $_SESSION[loggedUserName]</span></div>";
                }
                else
                {
                    echo "<div class='LogedUserContent'><span id='loged-user'>Welcome Guest</span></div>";
                }
                ?>
            <div class="SearchContent">
                
                <table padding="5px"><tr>
                  <td>
                      <select id="select-category" name="category" style="height:30px;width:180px;color: blue;background-color:buttonface; font-size:14px;padding: 5px;">
                          <option value="all">All Category</option>
                          <option value="children">Children</option>
                          <option value="computer">Computer</option>
                          <option value=history">History</option>
                          <option value="polities">Polities</option>
                          <option value="science">Science</option>
                          <option value="management">Management</option>
                          <option value="indian languages">Indian Languages</option>
                          <option value="entrance exams">Entrance Exams</option>
                     </select>
                  </td>
                <td><input id="search-field" name="searchField" type="text" onkeypress="search(this,event)" style="width:350px;color:blue;border-color: blue;background-color:buttonface;border-radius: 5px; font-size:14px;padding: 5px;" /></td>
                <td><input id="search" type="Button" onclick="searchBook()" style="text-align: right;width:30px;padding: 5px;border-radius: 5px;  background-image: url(Images/search-icon.png);" /></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="cart" type="Button" onclick="window.location='shopping-cart.php'" value="Cart ( <?php if(isset($_SESSION['cart'])) echo count($_SESSION['cart']); else echo 0;?> )" style="width:160px;border-radius: 5px;color: blue; font-size:14px;padding: 10px; background-image: url(Images/Cart-Icon.png);" /></td>
                </tr>
                </table>
                
            </div>
            </div>
            
            
            <div class="MenuContainer">
                <div id="menu">
                    <ul>
                    <li><a href="index.php" class="first">Home</a></li>	
                    <li><a href="books.php?view=offers">Offer Zone</a></li>				
                    <li><a href="books.php?view=magazines">Magazines</a></li	
                    <li><a href="books.php?view=recently-sold">Recently Sold</a></li>	
                    </ul>
                </div>
            
            </div>
            
            
            <div class="Banner">
                <table>
                    <tr><td><img src="Images/book-logo.png"></td><td>Genuine brand</td>
                        <td><img src="Images/book-logo.png"></td><td>Low price</td>
                        <td><img src="Images/book-logo.png"></td><td>Great selection</td>
                        <td><img src="Images/book-logo.png"></td><td>Fast delivery</td>
                        <td><img src="Images/book-logo.png"></td><td>Easy replacement</td>
                        <td><img src="Images/book-logo.png"></td><td>Buyer protection and More....</td>
                    </tr>
                </table>
            </div>
            <div id="display-message" class="DisplayMessages" hidden  >
                <div style="position: absolute; height:20px;width:1050px;margin:15px;">
                    <div id="image-icon" style="float: left;height:20px;width:20px;background-image: url('images/red-info.png');"></div>
                    <div style="margin-left:10px;float: left"><span id="message" style="color:darkred;">Login id and password are invalid</span></div>
                </div>
                <div id="close-btn" onclick="document.getElementById('display-message').style.display='none'" style="font-size:10px;height:12px;width:12px;text-align:center;margin-left:1065px;margin-top:17px;border:1px solid white;color:red">X
                </div>
            </div>
            <?php
            if(isset($_POST['orderNo']))
            {
                if($_POST['orderNo']=='payment-fail')
                {
                    echo "<script>document.getElementById('display-message').style.display='block';".
                             "document.getElementById('message').style.color='darkred';".
                             "document.getElementById('display-message').style.backgroundColor='#FFA07A';".
                             "document.getElementById('image-icon').style.backgroundImage='url(images/wrong-info.png)';".
                             "document.getElementById('display-message').style.borderColor='darkred';".
                             "document.getElementById('message').innerHTML='Sorry ! Your payment has been failed due to wrong information try again.'".
                     "</script>";
                }
                else
                {
                echo "<script>document.getElementById('display-message').style.display='block';".
                             "document.getElementById('message').style.color='green';".
                             "document.getElementById('display-message').style.backgroundColor='lightgreen';".
                             "document.getElementById('image-icon').style.backgroundImage='url(images/right-info.png)';".
                             "document.getElementById('display-message').style.borderColor='green';".
                             "document.getElementById('message').innerHTML='Congratulates ! Your have successfully placed your order. Your Order No is: '+$_POST[orderNo];".
                     "</script>";
                }
            }
            if(isset($_GET['action']))
            {
                if($_GET['action']=='signIn')
                {
                    echo "<script>document.getElementById('display-message').style.display='block';".
                             "document.getElementById('message').style.color='green';".
                             "document.getElementById('display-message').style.backgroundColor='lightgreen';".
                             "document.getElementById('image-icon').style.backgroundImage='url(images/right-info.png)';".
                             "document.getElementById('display-message').style.borderColor='green';".
                             "document.getElementById('message').innerHTML='Sorry ! You have to Sign-in first.';".
                     "</script>";
                }
            }
            ?>