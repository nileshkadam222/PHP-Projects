

<?php session_start();?>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
</div>
<div id="logo-wrap">
<div id="logo">
		<?php
			include("includes/logo.inc.php");
		?>
</div>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<center>
		<div id="content">
		<div class="post">
			<h1 class="title">My profile</h1>
			<div class="entry">
				
					

					<?php
					
					
$num=$_SESSION['unm'];	
$id=$_SESSION['u_id'];
$type='teacher';					 mysql_connect("localhost", "root", "") or die ("could not connect t the server");
						 mysql_select_db("shop") or die("this database was not found");
     $userquery = mysql_query("SELECT * FROM user WHERE u_unm='$num' && type='$type' ") or die("the query could be fale please try again");
    if(mysql_num_rows($userquery) != 1){
        die("that username could not be found!");
    }
    while($row = mysql_fetch_array($userquery, MYSQL_ASSOC)){
       $userid = $row['u_id'];
	   $firstname = $row['u_fnm'];
       $rollno = $row['roll_no'];
       $dob = $row['dob'];
       $username = $row['u_unm'];
       $gender = $row['u_gender'];
       $email = $row['u_email'];
	   $contact = $row['u_contact'];
	   $add = $row['u_address'];
	   $city = $row['u_city'];
	   $issue = $row['issue_date'];
	   $valid = $row['valid_till'];
	   $pic=$row['photo'];
       }
       if($username != $username){
         die ("there has been a fatal error please try again. ");
       }
       
       

       
?>
<h2>Your login as <?php echo $username; ?></h2>
<table>
<tr>
<td>Name:</td><td><?php echo $firstname; ?></td>
<td><img src="<?php echo $pic; ?>"></img></td>
</tr>
<tr>
<td>Roll no:</td><td><?php echo $rollno; ?></td>
</tr>
<tr>
<td>Date of birth:</td><td><?php echo $dob; ?></td>
</tr>
<tr>
<td>username:</td><td><?php echo $username; ?></td>
</tr>
<tr>
<td>user id:</td><td><?php echo $userid; ?></td>
</tr>
<tr>
<td>Gender:</td><td><?php echo $gender; ?></td>
</tr>
<tr>
<td>Email-id:</td><td><?php echo $email; ?></td>
</tr>
<tr>
<td>Contact:</td><td><?php echo $contact; ?></td>
</tr>
<tr>
<td>Address:</td><td><?php echo $add; ?></td>
</tr>
<tr>
<td>City:</td><td><?php echo $city; ?></td>
</tr>
<tr>
<td>Issue-date:</td><td><?php echo $issue; ?></td>
</tr>
<tr>
<td>Valid-till:</td><td><?php echo $valid; ?></td>
</tr>


</table>
</center>


			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div>
<!-- end footer -->
</body>
</html>
