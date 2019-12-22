<?php
session_start();
?>
<html>
<head>
    
    <style>
      .te a{
            text-decoration: none;
        }
    </style>
    <script type="text/javascript" src="tablestyle/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="tablestyle/sorttable.js"></script>
<link href="tablestyle/table.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/interface.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<center><div class="dock" id="dock">
  <div class="dock-container">
  <a class="dock-item" href="admin.php"><img src="images/home.png" alt="home" /><span>Home</span></a> 
  <a class="dock-item" href="adminprofile.php"><img src="images/ap.png" alt="Admin Profile" /><span>Admin Profile</span></a> 
  
  <?php
                if(isset($_SESSION['admin'])){
                echo '<a class="dock-item" href="logout.php"><img src="images/logout1.png" alt="Log Out" /><span>Log Out</span></a>';
                echo '<li><a href="#">';
                echo '<a class="dock-item" href="#"><img src="images/adm1.png" alt="Welcome:"  '.@$_SESSION['admin'].'  /><span>Welcome:  '.@$_SESSION['admin'].' </span></a>';
                
                }
                else{
                echo '<a class="dock-item" href="ragistration.php"><img src="images/login1.png" alt="Login" /><span>Login</span></a> ';
                }
                ?>  
</div>
</div>

</center>

<script type="text/javascript">
	
	$(document).ready(
		function()
		{
			$('#dock').Fisheye(
				{
					maxWidth: 10,
					items: 'a',
					itemsText: 'span',
					container: '.dock-container',
					itemWidth: 100,
					proximity: 120,
					halign : 'center'
				}
			);
		}
	);

</script>
<div style="margin-top: 100px;">
     <table border="0" align="center" width="980">
               <tr><td valign="top" align="center"><br/><br/>
                   
           <div class="CSS-Generators_Table">
                        <table border="0" class="sortable">
                            
                               <tr>
                                   <td class="te"><a href="../admin/CutomerDetail.php">View Customer</a></td>
                                <td class="te" colspan="2" ><a href="../admin/CustFeed.php">View Customer Feedback</a></td>
                                <tr>
                               <tr>
                                 <td class="te"><a href="../admin/bookmovie.php">View Book Movie</a></td>   
                                <td class="te"><a href="../admin/booksport.php">View Book Sports</a></td>
                                <td class="te"><a href="../admin/bookevent.php">View Book Event</a></td>
                               </tr>
                               <tr>
                                <td class="te"><a href="../admin/sporttbl.php">View Sports Table</a></td>
                                <td class="te"><a href="../admin/eventtbl.php">View Event Table</a></td>
                                 <td class="te"><a href="../admin/movietbl.php">View Movie Table</a></td>
                               </tr>
                              
                           
                        </table>
            </div>
               
                </td></tr>
        </table>
</div>
</body>
</html>
