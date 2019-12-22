        
<html>
<head>
    <link rel="shortcut icon" href="./images/favicon.png" />
<title>
CPTL Admin
</title>
<link rel="stylesheet" type="text/css" href="main_div.css">
<link rel="stylesheet" type="text/css" href="middle_tb.css">
<link rel="stylesheet" type="text/css" href="body.css">
    <style>
    #heading{
    font-family:lucida sans;
    font-size:30px;
    font-color:;
    font-weight:bold;
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
		#ca_btn{
			
			background:white;
		}
		#admin_link{
		float:right;
		color:blue;
		#bill_fr{
			font-family: lucida sans;
		}
    }
    </style>
  
</head>
<body>
<center>

<div id="main_div" name="main_div">
<table>
<tr>
<td><?php include('banner.php') ?></td>
<tr>
<tr>
<td><?php include('admin_nav.php') ?></td>
</tr>
<tr>
<td>
<!-- ########-->
<table id="middle_tb" name="middle_tb" style="">
<tr>
<td>
	<a id='admin_link' href='Welcome_admin.php'>Back to Admin Panel</a>
       
	<table id="create_bill_fr" class="create_bill_fr" cellpadding="5px">
	
	
	<td style="font-weight:bold;font-size:20px;padding-bottom:10px;" colspan="2">
	
	
	<span id="fr_process">
	
	<?php
	$land_num="";
	$ca_num="";
	$msg="";
	$err_msg="";
	if(isset($_GET['ca_btn'])){
		$ca_num=$_GET['ca_txt'];
		if($ca_num !=''){
		$_SESSION['ca_number']=$ca_num;
		include('my_con.php');
		
		$result = mysqli_query($conn,"SELECT landline FROM customer_info WHERE ca_number=$ca_num");
		$num=mysqli_num_rows($result);
		
		if($num==0){
		$err_msg="Incorrect CA number";	
		}
		if(!$result)
		{
		$err_msg="Incorrect CA number";
		}
		else{
		while($row = mysqli_fetch_array($result))
		{
		$land_num=$row['landline'];
 		}	
		}	
		}
		else{
		$err_msg="Please enter CA Number";		
		}
		
		
		
				
	}
	
	?>
	
	</span></td>
	</tr>
	<td>
	
	<h2 style="font-family:lucida sans" >Create Bill</h2>
	</td>
	</tr>
	
	
	<tr>
	<td style='padding-top:20px;'>
		<form action='create_bill.php' method='GET'>CA Number</td><td><input type="text" size="20" id="ca_txt" maxlength="4" name="ca_txt" value="<?php echo $ca_num; ?>"/><input type='submit' id='ca_btn' value='Check' name='ca_btn'></form></td>
	
	
	<tr>
	
	<td style='padding-top:20px;'>
	<!-- /////////////////////////////////////////////////////////////////////////////////////////-->
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
                
		$ca_number=$_SESSION['ca_number'];
                $landline=$_POST['ln_txt'];
                $bill_date=date("Y-m-d");
                $time = strtotime($bill_date);
                $call_charge=$_POST['cc_txt'];
                $plan=$_POST['plan_txt'];
                $service_tax=(12/100)*($call_charge+$plan);
		$due_date =date("Y-m-d", strtotime("+1 month", $time));
		$total_bill=($call_charge+$plan+$service_tax);
		
		if($ca_number !='' && $landline !='' && $call_charge !='' && $plan !='' && $service_tax !=''){
		include('my_con.php');
		
		############################################
		#    Checking and Inserting bill	   #
		############################################
		$bill_month=date("m", strtotime($bill_date));
		
		$result=mysqli_query($conn,"select * from bill where ca_number=$ca_number AND month(bill_date)=$bill_month");
		$num=mysqli_num_rows($result);
		
		if($num<1){
		$query="INSERT INTO bill(ca_number,landline,bill_date,call_charge,plan,service_tax,due_date,total_bill,status) VALUES($ca_number,$landline,'$bill_date',$call_charge,$plan,$service_tax,'$due_date',$total_bill,'unpaid')";
		$result=mysqli_query($conn,$query);
						
                if($result)
                {
                $num=mysqli_affected_rows($conn);
		if($num==1){
		$msg= "Bill Created !!!!!!!";
		mysqli_close($conn);
                }
		else{
		$err_msg="Record not saved..Try again";	
		}
		
                
		}
                else{ $err_msg= "Something Went wrong...Try again !!";
                    
                } 
		}
		
		else{
		$err_msg="Cannot generate bill..Bill is already generated..";	
		}
		
                ///////////////////////////////////////////////
		
		}
		else{
			$err_msg="Text field cannot be left empty";
		}
                
		
		}	
	
	?>
	<!-- /////////////////////////////////////////////////////////////////////////////////////////-->
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="bill_fr" name="" >
	
	Landline</td><td><input type="text" size="20" id="ln_txt" maxlength="10" name="ln_txt" value="<?php echo $land_num; ?>"/></td>
	</tr>
	
	<tr>
	<td>Call Charges</td><td><input type="text" size="20" id="" maxlength="4" name="cc_txt" ></td>
	</tr>
        
        <tr>
	<td>Tarrif Plan</td><td><input type="text" size="20" id=""  maxlength="4" name="plan_txt" ></td>
	</tr>
        
        <tr>
	<!--<td>Service Tax(%)</td><td><input type="text" size="20" id="" maxlength="2" name="st_txt" ></td>-->
	</tr>
           
        <tr>
	<td><input type="submit" value="" size="" id="submit_btn" name="create_bill_fr"></td>
	<td><input type="reset" value="" size="" id="reset_btn" name="reset_btn"></td>
	
	</table>
	<div>
	<?php echo "<span style='font-size:18px;padding:5px;font-family:lucida sans;'>".$msg."</span>"; ?>
	<?php echo "<span style='font-size:18px;color:red;font-family:lucida sans;'>".$err_msg."</span>"; ?>
	</div>
	</form>
    
    
</td>
</tr>
</table>
<!-- ########-->
</td>
</tr>
<tr>
<td></td>
</tr>
</table>
<div>
</body>
</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	