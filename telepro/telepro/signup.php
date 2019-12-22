	<html>
	<head>
		<link rel="shortcut icon" href="./images/favicon.png" />
	<title>
	Sign up
	</title>
	<link rel="stylesheet" type="text/css" href="main_div.css">
	<link rel="stylesheet" type="text/css" href="middle_tb.css">
	<link rel="stylesheet" type="text/css" href="body.css">
	
	
		<style>
		#signup_fr
		{
		font-family:sans-serif;
		font-size:16px;
		padding:10px;
		}
		#fr_process{
		font-family:sans-serif;
		color: #333333;
		}
		#err{
		font-family:sans-serif;
		font-size:14px;
		padding:2px;
		color:red;
		}
		#register_btn{
		border:0;
		background-image: url("./images/register_btn.png");
		width:105px;
		height:32px;
		cursor:pointer;
		}
		#reset_btn{
		border:0;
		background-image: url("./images/reset_btn.png");
		width:93px;
		height:32px;
		cursor:pointer;
		}
		</style>
	
	
	
	</head>
	<body>
	<center>
	<div id="main_div" name="main_div" >
	<table width="">
	<tr>
	<td><?php include('banner.php') ?></td>
	</tr>
	<tr>
	<td><?php include('navigation.php') ?></td>
	</tr>
	<tr>
	<td>
	<img width="1000px" height="180px;" src="./images/register.jpg" />
	<table width="1000px" id="middle_tb" name="middle_tb">
	<tr>
	<td width="" height="">
	<!-- CODE HERE-->
	
	<?php include('validation.php'); ?>
	<span id="fr_process">
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($NameErr =="" && $MnErr=="" && $LnErr =="" && $EmailErr =="" && $AddressErr =="" && $CAErr =="")
	{
	$name = $ca = $mn = $ln = $email = $address = "";
	
	echo "<style>#signup_fr{display:none;}</style>";
	
	$cname=$_POST['name_txt'];
	$ca_number=$_POST['ca_txt'];
	$clandline=$_POST['ln_txt'];
	$cmobile=$_POST['mn_txt'];
	$cemail=$_POST['ei_txt'];
	$caddress=$_POST['address_txt'];
		
	include('my_con.php');
	$date=date("Y-m-d");

	$query="INSERT INTO customer_info(name,ca_number,landline,mobile,email,address,reg_date) values('$cname',$ca_number,$clandline,$cmobile,'$cemail','$caddress','$date');";
	$result=mysqli_query($conn,$query);
	mysqli_query($conn,"INSERT INTO customer_login(ca_number,password) values($ca_number,'$clandline');");
	$num=mysqli_affected_rows($conn);
	
	if($num==1)
	{
	echo "<h2>Form submitted successfully !!</h2></br>";
	echo "You may <a style='color:blue;' href='login.php'>login</a> now";
	}
	else{
		echo "Something went wrong";
		
	}
	
	
	
	}	
	}
	?>
	</span>
	
	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="" name="" >
	<table id="signup_fr" class="signup_fr" width="" cellpadding="5px;">
	<tr>
	<td>Name</td><td colspan="2"><input type="text" size="20" id="name_txt" maxlength="14" name="name_txt" value="<?php echo $name; ?>"/><span id="err"><?php echo $NameErr; ?></span></td>
	</tr>
	
	<tr>
	<td>CA Number</td><td colspan="2"><input type="text" size="20" maxlength="4" id="ca_txt" name="ca_txt" value="<?php echo $ca; ?>"/>
	<span id="err"><?php echo $CAErr; ?></span></td>
	</tr>
	
	<tr>
	<td>Landline Number</td><td colspan="2"><input type="text" size="20" maxlength="10" id="ln_txt" name="ln_txt" value="<?php echo $ln; ?>">
	<span id="err"><?php echo $LnErr; ?></span></td>
	</tr>
	<tr>
	<td>Mobile Number</td><td colspan="2"><input type="text" size="20" maxlength="10" id="mn_txt" name="mn_txt" value="<?php echo $mn; ?>">
	<span id="err"><?php echo $MnErr; ?></span></td>
	</tr>
	<tr>
	<td>Email ID</td><td colspan="2"><input type="text" size="20"  maxlength="30" id="ei_txt" name="ei_txt" value="<?php echo $email; ?>">
	<span id="err"><?php echo $EmailErr; ?></td>
	</tr>
	<tr>
	<td>Address</td><td><textarea name="address_txt" maxlength="200" cols="30" rows="5"><?php echo $address; ?></textarea></td>
	<td><span id="err"><?php echo $AddressErr; ?></td>
	</tr>
	<tr>
	<td><input type="submit" size="" id="register_btn" value="" name="register_btn"></td>
	<td colspan="2"><input type="reset" size="" id="reset_btn" value="" name="reset_btn"></td>
	</tr>
	</table>
	</form>
	
	
	
	
	
	
	<!---->
	</table>
	<?php include('footer.php') ?>
	</div>
	</body>
	</html>
