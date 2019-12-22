<html>
<head>
	<link rel="shortcut icon" href="./images/favicon.png" />
<title>Quick Pay</title>
<link rel="stylesheet" type="text/css" href="main_div.css">
<link rel="stylesheet" type="text/css" href="middle_tb.css">
<link rel="stylesheet" type="text/css" href="body.css">


	<style>
	#quickpay_fr
	{
	font-family:sans-serif;
	font-size:16px;
	font-weight:;
	padding:10px;
	}
	#submit_btn{
	border:0;
	background-image: url("./images/submit_btn.png");
	width:93px;
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
<table>
<tr>
<td><?php include('banner.php') ?></td>
<tr>
<tr>
<td><?php include('navigation.php') ?></td>
</tr>
<tr>
<td>
<img width="1000px" src="./images/quickpay.jpg" style="border-bottom:1px solid black;">

<table width="100%" id="middle_tb"  name="middle_tb">
<tr><td>
<!-- CODE HERE -->

<form action="" method="" id="quickpay_fr" name="quickpay_fr">
<table cellpadding="2px" cellspacing="5px" >
<tr>
<td>
<img src="./images/quickpaylogo_tb.png">
</td>
<td>
<h1 style="">Pay Without Login</h1>
<table>

<tr>
<td>Landline Number</td><td><input type="text" size="25" id="ln_txt" name="ln_txt"></td>
</tr>

<tr>
<td>CA Number</td><td><input type="text" size="25" id="ca_txt" name="ca_txt"></td>
</tr>

<tr>
<td>Mobile Number</td><td><input type="text" size="25" id="mn_txt" name="mn_txt"></td>
</tr>

<tr>
<td>Email ID</td><td><input type="text" size="25" id="ei_txt" name="ei_txt"></td>
</tr>

<tr>
<td style="padding-top:10px"><input type="submit" value="" size="" id="submit_btn" name="submit_btn"></td>
<td style="padding-top:10px"><input type="reset" value="" size="" id="reset_btn" name="reset_btn"></td>
</tr>
</table>
</td>
</tr>



</table>
</form>



<!-- CODE HERE -->




</td>
</tr>
</table>
<?php include('footer.php') ?></td>
<div>
</body>
</html>
