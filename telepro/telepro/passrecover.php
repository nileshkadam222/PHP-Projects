            
    <html>
<head>
<link rel="shortcut icon" href="./images/favicon.png" />
<title>CPTL</title>
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
<td >
<div style='font-family:lucida sans'>
<span style='font-size:20px;font-weight:bold;'>Password Recovery</span>

        <form metho='GET' action='passrecover.php' name=''>
		  Please enter your CA Number <input type='text' name="ca_number" maxlength="4" size='15' />
		  <input type='submit' name='forgot_btn' value='Submit' />
		</form>
</div>
<div>
    <?php
        $err_msg="";
        if(isset($_GET['forgot_btn'])){
            
	$ca_number=$_GET['ca_number'];
        if($ca_number !=""){
        include('my_con.php');
        
        $result=mysqli_query($conn,"select question from customer_login where ca_number=$ca_number");
        $num=mysqli_num_rows($result);
        if($num==0){
           $err_msg="Incorrect CA Number";
            
        }
	echo "<form action='passrecover.php' method='GET'><table cellpadding='10px'>";
	while($row = mysqli_fetch_array($result))
		  {
		  echo "<tr>";
		  echo "<td style='font-weight:bold;padding-right:5px;padding-bottom:10px;'>Security question  </td><td style='color:red;padding-bottom:10px;'>" . $row['question'] ." </td>"; 
			$_SESSION['ques']=$row['question'];
		  echo "</tr>";
		  echo "<tr>";
		  echo "<td style='font-weight:bold;padding:5px;'>Type answer  </td><td><input type='text' size='20' name='answer'/>";
		  echo "</tr>";
		  echo "<tr><td colspan=2><input type='submit' name='show_pass' value='Get Password'></td></tr>";
		  }
		  echo "</table>"; 
        }
        else{
            $err_msg="Please enter CA Number";
        }
	
    }
    ?>
	<?php
	if(isset($_GET['show_pass'])){
	$answer=$_GET['answer'];
	$question=$_SESSION['ques'];
	include('my_con.php');
	$result=mysqli_query($conn,"select password from customer_login where question='$question' AND answer='$answer'");
        $num=mysqli_num_rows($result);
        if($num==0){
           $err_msg="Record Not Found";
            
        }
	while($row = mysqli_fetch_array($result))
	{
		  echo "<h3>Your password is </h3><h3 style='color:red'>".$row['password']."</h3>";
		  echo "You can <a style='color:blue' href='login.php'>Login Now</a>";
	}
	}
        echo "<span style='font-size:16px;color:red;font-family:lucida sans;'>".$err_msg."</span>";
	?>
</div>
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
            
            
            
            