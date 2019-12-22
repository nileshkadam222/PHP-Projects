<html>
<head>
	<link rel="shortcut icon" href="./images/favicon.png" />
<title>
Online Services
</title>
<link rel="stylesheet" type="text/css" href="main_div.css">
<link rel="stylesheet" type="text/css" href="middle_tb.css">
<link rel="stylesheet" type="text/css" href="body.css">


	<style>
	img{
	text-decoration:none;
	border:0px;
	}
	#onlineservices{
	font-family:sans-serif;
	color:#333333;
	font-weight:bold;
	font-size:25px;
	padding-top:20px;
	padding-bottom:20px;
	}
	</style>


</head>
<body>
<center>
<div id="main_div" name="main_div" width="1000px">
<table width="">
<tr>
<td><?php include('banner.php') ?></td>
<tr>
<tr>
<td><?php include('navigation.php') ?></td>
</tr>
<tr>
<td>
<img width="1000px" src="./images/online_header.png" style="border-bottom:1px solid black;">
<table width="1000px" id="middle_tb" name="middle_tb">
<!--- Center -->
<tr><td colspan="3" id="onlineservices">Choose your service from below </td></tr>
<tr>
<td><center><a href="viewbill.php"><img src="./images/viewbill.png" /></a></center></td>
<td><center><a href="payonline.php"><img src="./images/payonline.png" /></a></center></td>

</tr>
<!-- END -->
</table>

</td>
</tr>
<tr>
<td><?php include('footer.php') ?></td>
<tr>

</table>
<div>
</body>
</html>
