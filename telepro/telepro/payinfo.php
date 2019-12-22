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
	#payinfodiv,#pay_detail{
	padding-top:10px;
	font-family:lucida sans;
	}
	
	#payment_details,#payinfo{padding-top:5px;}
	
	#payinfo td{
	padding:3px;
	font-size:14px;
	}
	#save_btn{
	font-size:14px;
	font-family:lucida sans;font-weight:bold;
	width:80px;
	height:30px;
	}
	#span_style{
	    font-family:lucida sans;
	    font-size:18px;
	    font-weight:bold;
	    color: #545C64;
	}
	#acc_links{
        color: blue;
        font-size:18px;
        
        font-family:lucida sans;
	font-weight:bold;
	padding-top:20px;
        }
	#payment_details #head{
	font-weight:bold;
	background-color: #545C64;
	color:white;
	}
	#payment_details td,#head
	{
	border-bottom:1px solid #545C64;
	font-size:14px;
	font-family: Lucida sans;
	padding:5px;
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
<span style='font-family:lucida sans;font-size:25px;font-weight:bold;color: #545C64;'>Payment Information</span>


<div id='pay_detail'>
    <span id='span_style'>Your Credit / Debit Card Information</span>
    
    <?php
		    include('my_con.php');
		    $ca_number = $_SESSION['username'];
		    
		    $result = mysqli_query($conn,"SELECT * from payment_info WHERE ca_number=$ca_number");
		    echo "<table id='payment_details' width='100%'>";
		    echo "<tr><td id='head'>Bank name</td><td id='head'>Card Number</td></tr>";
		    while($row = mysqli_fetch_array($result))
		    {
		    echo "<tr>";
		    echo "<td id=''>" . strtoupper($row['bank']) . "</td>";
		 
		    echo "<td id=''>" . $row['cardno'] . "</td>";
		    echo "</tr>";
		    }
		    echo "</table>";
		    
    ?>
    <div id='acc_links'>
	<a id='acc_links' href='payinfo.php?add_card=yes'>Add Credit / Debit card information</a>
    </div>
    
</div>
<?php
if(isset($_GET['add_card'])){   ?>
<div id="payinfodiv" >
<table id='payinfo'>
<tr><td>
<form action="payinfo.php" method="GET" id="payinfo_fr" name="payinfo_fr" >
Select bank name</td><td>
<select name='bank' >
  <option value="">--------   Select Bank   -------</option>
  <option value="SBI">STATE BANK OF INDIA</option>
  <option value="hdfc">HDFC</option>
  <option value="BOI">BANK OF INDIA</option>
  <option value="icici">ICICI</option>
  <option value="axis">AXIS</option>
  <option value="KOTAK">KOTAK</option>  
</select>
</td></tr>

<tr><td>Credit/Debit Card Number</td><td><input name="cardno" maxlength="16" type='text' size='30'></td></tr>
<tr><td>Name on card</td><td><input name="cardname" maxlength="10" type='text' size='30'></td></tr>
<tr><td>Expiry Date</td><td>
<select name="month">
  <option value="">MONTH</option>
  <option value="1">JAN</option>
  <option value="2">FEB</option>
  <option value="3">MAR</option>
  <option value="4">APR</option>
  <option value="5">MAY</option>
  <option value="6">JUNE</option>  
  <option value="7">JULY</option>
  <option value="8">AUG</option>
  <option value="9">SEPT</option>
  <option value="10">OCT</option>
  <option value="11">NOV</option>
  <option value="12">DEC</option>
 </select>

<select name="year">
  <option value="">YEAR</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>  
  <option value="2021">2021</option>
  <option value="2022">2022</option>
  <option value="2023">2023</option> 
</select>



</td></tr>
<tr><td>CVV Number</td><td><input name='cvv' type='text' maxlength="3" size='5'></td></tr>
<tr><td colspan=2><input type='submit' id='save_btn' name='save_btn' value='Save'></form></td></tr>

</table>
<?php   } ?>

<?php
if(isset($_GET['save_btn'])){
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
	$bank=$_GET['bank'];
	$cardno=$_GET['cardno'];
	$cardname=$_GET['cardname'];
	$month=$_GET['month'];
	$year=$_GET['year'];
	$expire=$month."/".$year;
	$cvv=$_GET['cvv'];
	if($bank !='' || $cardno !='' || $cardname !='' || $expire !='' || $cvv !=''){
		$ca_number=$_SESSION['username'];
		include('my_con.php');
		$result=mysqli_query($conn,"INSERT INTO payment_info(ca_number,bank,cardno,cardname,expire,cvv) VALUES($ca_number,'$bank',$cardno,'$cardname','$expire',$cvv)");
		$num=mysqli_affected_rows($conn);
		if($num==1){
		echo "<h2 style='font-family:lucida sans'>Payment details saved !!!!!!!</h2>";
		$name = $ca = $contact = $email = $query = "";
		mysqli_close($conn);
		}
		else{
		echo "<h3>Details not saved..try again !!!!!!!</h3>";
		}
	
	    
	}
	else{
	    echo "<h3>Filed cannot left blank..try again !!!!!!!</h3>";
	}
		
	
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