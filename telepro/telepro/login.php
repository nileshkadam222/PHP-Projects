<html>
<head>
<link rel="shortcut icon" href="./images/favicon.png" />
<title>Pay Online</title>
<!-- ########################## -->

<link rel="stylesheet" type="text/css" href="main_div.css">
<link rel="stylesheet" type="text/css" href="middle_tb.css">
<link rel="stylesheet" type="text/css" href="body.css">
<style>
	
</style>
<!-- ########################## -->
</head>
<?php
$abc="";
?>

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

<table id="middle_tb" name="middle_tb" >
<tr>
<td id="customer" style="display:block;">
<?php include('customerlogin.php') ?>
</td>
</tr>
<tr>

<td id="admin" style="display:none;">
<?php
include('admin_login.php');
?>
</td>
</tr>


<tr>
<td id="link"style="text-align:center;font-size:16px;font-family:Lucida sans;font-weight:bold;">
Are you a Admin ?? <a style="color:blue;" href="login.php?abc=admin" >Login here</a>

<?php
if(isset($_GET['abc']))
{
$abc=$_GET['abc'];
if($abc=="admin")
	{

echo "
<script>
document.getElementById('customer').style.display='none';
document.getElementById('admin').style.display='block';
document.getElementById('link').style.display='none';
</script>
";
}
}
?>
</td>
</tr>
</table>

</td>
</tr>
<tr>
<td><?php include('footer.php')?></td>
</tr>
</table>
<div>



</body>
</html>