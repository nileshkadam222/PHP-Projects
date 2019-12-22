	<html>
	<head>
	<link rel="shortcut icon" href="./images/favicon.png" />
	<title>
	Customer Care
	</title>
	<link rel="stylesheet" type="text/css" href="main_div.css">
	<link rel="stylesheet" type="text/css" href="middle_tb.css">
	<link rel="stylesheet" type="text/css" href="body.css">
	
	
		<style>
		#tb_caption
		{
		font-family:sans-serif;
		font-size:20px;
		font-weight:bold;
		
		}
		#tb_caption2
		{
		font-family:sans-serif;
		font-size:12px;
		}
		
		#customercare_fr
		{
		font-family:sans-serif;
		font-size:16px;
		padding:10px;
		}
		#fr_process
		{
		color: red;
		}
		#err{
		font-family:sans-serif;
		font-size:14px;
		padding:2px;
		color:red;
		}
		#submit_btn{
		border:0px;
		background-image: url("./images/submit_btn.png");
		width:93px;
		height:32px;
		cursor:pointer;
		}
		#reset_btn{
		border:0px;
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
	<img width="1000px" height="160px;" src="./images/customercarebanner.jpg" >
		
	<table width="1000px" id="middle_tb" name="middle_tb">
	<tr>
	<td width="" height="">
	
	
	
	<!-- Form Submit -->
	
	
	<?php include('validation.php'); ?>
	
	
	
	<!-- Form Submit -->
	
	<span id="tb_caption">Please fillout the form below, We will get in touch with you as soon as possible.</br>
	<span id="tb_caption2">*Note: All fields are mandatory.</span>
	</span>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="" name="" >
	<table id="customercare_fr" class="customercare_fr" cellpadding="2px">
	
	
	<td style="padding-bottom:20px;" colspan="2">
	
	
	<span id="fr_process">
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$date=date("Y-m-d");
		if($NameErr =="" && $ContactErr=="" && $EmailErr =="" && $QueryErr =="" && $CAErr =="")
		{
		include('my_con.php');
		$result=mysqli_query($conn,"INSERT INTO feedback (name,ca_number,contact,email,query,f_date) VALUES ('$name',$ca,$contact,'$email','$query','$date')");
		$num=mysqli_affected_rows($conn);
		if($num==1)
		echo "<h2>Response submitted !!!!!!!</h2>";
		$name = $ca = $contact = $email = $query = "";
		mysqli_close($conn);
		}	
	}
	?>	
	</span>
	
	
	</td>
	
	
	
	<tr>
	<td>Name</td>
	<td>
	<input type="text" size="20" id="name_txt" name="name_txt" maxlength="14" value="<?php echo $name; ?>"><span id="err"><?php echo $NameErr; ?></span>
	</td>
	</tr>
	
	
	<tr>
	<td>CA Number</td><td><input type="text" size="20" id="ca_txt" maxlength="4" name="ca_txt" value="<?php echo $ca; ?>">
	<span id="err"><?php echo $CAErr; ?></span></td>
	</tr>
	
	<tr>
	<td>Contact Number</td><td><input type="text" size="20" id="cn_txt" maxlength="10" name="cn_txt" value="<?php echo $contact; ?>">
	<span id="err"><?php echo $ContactErr; ?></span></td>
	</tr>
	
	
	<tr>
	<td>Email ID</td><td><input type="text" size="20" id="ei_txt" maxlength="30" name="ei_txt" value="<?php echo $email; ?>">
	<span id="err"><?php echo $EmailErr; ?></span></td>
	</tr>
	
	
	<tr>
	<td>Query</td><td><textarea cols="36" rows="5" name="query_txt" maxlength="100" id="query_txt" ><?php print $query; ?></textarea>
	<span id="err"><?php echo $QueryErr; ?></span></td>
	</tr>
	
	
	<tr>
	<td><input type="submit" value="" size="" id="submit_btn" name="submit_btn"></td>
	<td><input type="reset" value="" size="" id="reset_btn" name="reset_btn"></td>
	</tr>
	</table>
	</form>
	
	
	
	
	<!---->
	</table>
	<?php include('footer.php') ?>
	</div>
	</body>
	</html>
