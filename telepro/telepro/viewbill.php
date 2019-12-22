	<html>
	<head>
		<link rel="shortcut icon" href="./images/favicon.png" />
	<title>View Bill</title>
	<link rel="stylesheet" type="text/css" href="main_div.css">
	<link rel="stylesheet" type="text/css" href="middle_tb.css">
	<link rel="stylesheet" type="text/css" href="body.css">
	
	
		<style>
		#viewtb{
		font-family:sans-serif;
		font-size:16px;
		margin-top:30px;
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
		#viewheader{
		font-family:sans-serif;
		font-size:25px;
		font-weight:bold;
		}
		#viewbl{
		margin-top:20px;
		padding-left:50px;
		}
		#viewbill_btn{
		border:0px;
		background-image: url("./images/viewbill_btn.png");
		width:130px;
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
		#bill{
			
			vertical-align: center;
			
			
		}
		#bill_tb{
			width: 80%;
			paddin:0px;
			border: 1px solid black;
			font-family:lucida sans;
			vertical-align: middle;
			
			
			
			}
		#tdcaption{
				
			font-size:16px;
			font-weight:bold;
			background-color:#D2D2D2;
			padding: 8px;
			width: 200px;
			
			border-bottom:1px solid black;
		}
		#tdvalue{
			font-size:16px;
			background-color:#F2F2F2;
			//background-color:#9BE6FF;
			color: ;
			padding: 8px;
			padding-left: 20px;
			border-bottom:1px solid black;
		}
		.total{
			font-weight:bold;
			color:red;
		}
		</style>
	
	
	</head>
	<body>
	<center>
	<div id="main_div" name="main_div" >
	<table >
	<tr>
	<td><?php include('banner.php') ?></td>
	<tr>
	<tr>
	<td><?php include('navigation.php') ?></td>
	</tr>
	<tr>
	<td>
	<img width="1000px" style="border-bottom:1px solid black;" src="./images/viewbill_header.png"/>
	<table id="middle_tb" name="middle_tb">
	<tr>
	<td>
	
	<!--   View Bill Form -->
	<?php include('validation.php'); ?>
	
	<div id="viewbl" name="viewbl">
	<span id="viewheader" >View Your Telephone Bill Online</span>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" name="" id="">
	<table id="viewtb" cellpadding="3px">
	
	<tr>
	<td>CA Number</td><td><input type="text" size="20" id="ca_txt" maxlength="4" name="ca_txt" value="<?php echo $ca; ?>"></td>
	<td><span id="err"><?php echo $CAErr; ?></span></td>
	</tr>
	<tr>
	<td>Landline Number</td><td><input type="text" size="20" maxlength="10" id="ln_txt" name="ln_txt" value="<?php echo $ln; ?>"></td>
	<td><span id="err"><?php echo $LnErr; ?></span></td>
	
	</tr>
	<tr>
	<td style="padding-top:10px"><input type="submit" value="" size="" id="viewbill_btn" name="viewbill_btn"></td>
	<td colspan="2" style="padding-top:10px;"><input type="reset" value="" size="" id="reset_btn" name="reset_btn"></td>
	</tr>
	<tr>
	<td colspan="3">
	
	</td>
	</tr>
	</table>
	</form>
	<span id="fr_process">
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if($LnErr=="" && $CAErr =="")
		{
		echo "<style> #viewtb{ display:none; }</style>";
		$landline=$_POST['ln_txt'];
		$ca_number=$_POST['ca_txt'];
		$date=date("Y-m-d");
		include('my_con.php');
		$result = mysqli_query($conn,"SELECT * FROM bill WHERE ca_number=$ca_number AND status='unpaid'");
		$num=mysqli_num_rows($result);
		if($num>0){
			echo "<div id='bill'><table id='bill_tb'>
		<tr><td colspan='2'><img src='./images/bill_logo.png' width='50px' height='50px'/></td></tr>";
		
		while($row = mysqli_fetch_array($result))
		  {
		
		  echo "<tr>";
		  echo "<td id='tdcaption'>Bill ID</td><td id='tdvalue'>" . $row['bill_id'] . "</td>";
		  echo "</tr>";
		  
		  echo "<tr>";
		  echo "<td id='tdcaption'>CA Number</td><td id='tdvalue'>" . $row['ca_number'] . "</td>";
		  echo "</tr>";
		  
		  echo "<tr>";
		  echo "<td id='tdcaption'>Landline</td><td id='tdvalue'>" . $row['landline'] . "</td>";
		  echo "</tr>";
		  
		  echo "<tr>";
		  echo "<td id='tdcaption'>Bill Date</td><td id='tdvalue'>" . $row['bill_date'] . "</td>";
		  echo "</tr>";
		  
		  echo "<tr>";
		  echo "<td id='tdcaption'>Call Charges</td><td id='tdvalue'>" . $row['call_charge'] . "</td>";
		  echo "</tr>";
		  
		  echo "<tr>";
		  echo "<td id='tdcaption'>Plan</td><td id='tdvalue'>" . $row['plan'] . "</td>";
		  echo "</tr>";
		  
		  echo "<tr>";
		  echo "<td id='tdcaption'>Service Tax</td><td id='tdvalue'>" . $row['service_tax'] . "</td>";
		  echo "</tr>";
		  
		  echo "<tr>";
		  echo "<td id='tdcaption'>Due Date</td><td id='tdvalue'>" . $row['due_date'] . "</td>";
		  echo "</tr>";
		  
		  echo "<tr>";
		  echo "<td id='tdcaption'>Amount Payable</td><td id='tdvalue' class='total'>" . $row['total_bill'] . "</td>";
		  echo "</tr>";
		  
		}
		echo "</table></div>";
			
		}
		else{
			echo "<h2>No unpaid bills found<h3>";
		}
		
		
		}	
		}
		?>	
		</span>
	</div>
	<!-- END-->
	
	</td>
	
	</tr>
	
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