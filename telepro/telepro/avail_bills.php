<html>
<head>
    <link rel="shortcut icon" href="./images/favicon.png" />
<title>
CPTL 
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
    #admin_panel img {
    padding-top:60px;
    border: 1px dotted black;
    }
    #admin_panel img:hover {
        width: 260px;
        height: 200px;
        opacity: 0.8;
        
    }
    #pay_btn,#action{
        color:blue;
    }
	
	#bills{
                width: 100%;
				font-family: Lucida sans;
                border-collapse: collapse;
                }
                #bills #tdcaption
                {
                border-bottom:1px solid #545C64;
                font-size:14px;
                padding:8px;
                }
                #bills #head{
                font-weight:bold;
                background-color: #545C64;
                color:white;
                }
				#bills #tdstatus{ color:red; }
				
	#bill_tb{
			width: 100%;
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
			
			color: ;
			padding: 8px;
			padding-left: 20px;
			border-bottom:1px solid black;
		}
		.total{
			font-weight:bold;
			color:red;
		}
		#payment_tb{
		    font-family:lucida sans;
		    font-size:16px;			    
		}
		#payment_tb td{
		    padding:5px;
		}
		#payment_tb #head{
		    
		    font-weight:bold;
		}
		#tbhead{
                font-weight:bold;
                font-family: Lucida sans;
                font-size:25px;
		color: #545C64;
		}
    </style>
   
<style>

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
<td><?php include('customer_nav.php') ?></td>
</tr>
<tr>
<td>
<!-- ########-->
<table id="middle_tb" name="middle_tb" style="">
<tr>
<td>
    <span id='tbhead' >Available Bills</span>
<div>
    <?php
    /////////// Available Bills //////////////////////////////////////////////////
		if(isset($username)){
                $date=date("Y-m-d");
		include('my_con.php');
		$result = mysqli_query($conn,"SELECT * FROM bill WHERE ca_number=$username AND bill_date<='$date' AND status='unpaid'");
		$num=mysqli_num_rows($result);
		if($num==""){
		    
		    echo "<h2>No unpaid bills found</h2>";
		}
		else{
		echo "<div id='bill'><table id='bills'>";
                echo "<tr><td id='head'>Bill ID</td><td id='head'>CA Number</td><td id='head'>Landline</td>
                <td id='head'>Due Date</td><td id='head'>View Bill</td><td id='head'>Status</td></tr>";
		
		while($row = mysqli_fetch_array($result))
		  {
		
		  echo "<tr>";
		  echo "<td id='billstd'>" . $row['bill_id'] . "</td>"; 
		
		  echo "<td id='billstd'>" . $row['ca_number'] . "</td>";	 
		  
		  echo "<td id='billstd'>" . $row['landline'] . "</td>";		  
	
		  echo "<td id='billstd'>" . $row['due_date'] . "</td>";
                  
                  echo "<td ><a id='action' href='avail_bills.php?viewbill=".$row['bill_id']."'>View Bill</a></td>";
				  echo "<td id='tdstatus'>" . $row['status'] . "</td>";
                  
                  
                  echo "</tr>";
		
		  
		  }
		echo "</table></div>";}
    }
    ///////////////////////////////////////////////////////////////////////////////
		?>	
	
</div>
<div>
    
<?php
////////////////////////////////////////// View Bill ///////////////////////////
    if(isset($_GET['viewbill'])){
    $viewbill=$_GET['viewbill'];
    $date=date("Y-m-d");
		include('my_con.php');
		$result = mysqli_query($conn,"SELECT * FROM bill WHERE bill_id=$viewbill");
		echo "<div id='bill'><table id='bill_tb'>
		<tr><td colspan='2'><img src='./images/bill_logo.png' width='50px' height='50px'/></td></tr>
		
		";
		
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
                  
                  echo "<tr>";
		  echo "<td colspan='2' id='tdcaption'><a id='pay_btn' href='avail_bills.php?pay=".$row['total_bill']."&&bid=".$row['bill_id']."'>Pay Bill</a></td>";
		  echo "</tr>";
                  
		  
                  
		}
		echo "</table></div>";
		 
    /////////////////////////////////////////////////////////////////////////////
    }
?>
<?php
///////////////////// Bill Payment ////////////////////////////////////////////// 
    if(isset($_GET['pay'])){
    $amount= $_GET['pay'];
    $bill_id=$_GET['bid'];
    $ca_number=$_SESSION['username'];
    
    $_SESSION['amount']=$amount;
    $_SESSION['ca_number']=$ca_number;
    $_SESSION['bill_id']=$bill_id;
    
    ?>
   <h2 style="font-size:18px;font-family:lucida sans;font-weight:bold;">Payment Information</h2>
   <?php
		include('my_con.php');
		$result = mysqli_query($conn,"select * from payment_info where ca_number=$ca_number");
		$num=mysqli_num_rows($result);
		
		if($num !=0 )
		{
		echo "<form action='avail_bills.php' method='get'>";
		echo "Please select your Credit / Debit card ";
		echo "<select name='bank_name'>";
		while($row=mysqli_fetch_array($result))
		{	    
		    echo "<option value=".$row['bank'].">".strtoupper($row['bank'])."</option>";
		    
		}
		echo "</select></br>"; 
		echo "<input type='submit' name='bn_btn' value='Next'></form>";
		
		}
		
		  
   
}
///////////////////////////////////////////////////////////////////////////////////////////

if(isset($_GET['bn_btn']))
		{
		    $bank_name=$_GET['bank_name'];
		    
		    $ca_number=$_SESSION['ca_number'];
		    $amount=$_SESSION['amount'];
		    $bill_id=$_SESSION['bill_id'];
		    
		  
		    $result = mysqli_query($conn,"SELECT bank,cardno FROM payment_info WHERE ca_number=$ca_number AND bank='$bank_name'");
		    echo "<table id='payment_tb'>";
		    echo "<tr><td id='head'>Bank name</td><td id='head'>Card Number</td><td id='head'>Bill ID</td><td id='head'>Amount</td><td id='head'>Action</td></tr>";
		    while($row = mysqli_fetch_array($result))
		    {
		    echo "<tr>";
		    echo "<td id=''>" . strtoupper($row['bank']) . "</td>";
		 
		    echo "<td id=''>" . $row['cardno'] . "</td>";
		    $_SESSION['card_no']=$row['cardno'];
		  
		    echo "<td id=''>" . $bill_id . "</td>";
		
		    echo "<td id=''>" . $amount. "</td>";
		 
		    echo "<td colspan='2' id=''><a style='color:blue;' id='payment_btn' href='avail_bills.php?status=paid'>Pay Now</a></td>";
		    echo "</tr>";
		  }
		  
		}
		
///////////////////////////////////////////////////////////////////////////////////////////
if(isset($_GET['status']))
{
    $ca_number=$_SESSION['username'];
    $bill_id=$_SESSION['bill_id'];
    $amount=$_SESSION['amount'];
    $card_no=$_SESSION['card_no'];
    $date=date("Y-m-d");

		include('my_con.php');
		$result=mysqli_query($conn,"INSERT INTO transactions(ca_number,bill_id,amount,card_no,date) VALUES($ca_number,$bill_id,$amount,$card_no,'$date')");
		$num=mysqli_affected_rows($conn);
		if($num==1){
		echo "<h3>Payment Sucessful </h3>";
		mysqli_query($conn,"UPDATE bill set status='paid' where bill_id=$bill_id");
		mysqli_close($conn);
		}   

   
   
   }
   
?>



</div>
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