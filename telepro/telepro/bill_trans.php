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
    
                #trans{
                width: 100%;
		font-family: Lucida sans;
                border-collapse: collapse;
                
                }
                #trans #tdcaption
                {
                border-bottom:1px solid #545C64;
                font-size:14px;
                padding:8px;
                }
                #trans #head{
                font-weight:bold;
                background-color: #545C64;
                color:white;
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
    <span id='tbhead'>Transaction History</span>
<div>
    
    
    <?php
    
                if(isset($username)){
                $date=date("Y-m-d");
		include('my_con.php');
		$result = mysqli_query($conn,"SELECT * FROM transactions WHERE ca_number=$username ");
                
		$num=mysqli_num_rows($result);
		if($num==""){
		    
		    echo "<h2>Transaction History not available</h2>";
		}
		else{
		echo "<div id='trans_div'><table id='trans'>";
                echo "<tr><td id='head'>Transaction ID</td><td id='head'>CA Number</td><td id='head'>Bill ID</td>
                <td id='head'>Amount</td><td id='head'>Card Number</td><td id='head'>Date</td></tr>";
		
		while($row = mysqli_fetch_array($result))
		  {
		
		  echo "<tr>";
		  echo "<td id='transtd'>" . $row['t_id'] . "</td>"; 
		
		  echo "<td id='transtd'>" . $row['ca_number'] . "</td>";	 
		  
		  echo "<td id='transtd'>" . $row['bill_id'] . "</td>";		  
	
		  echo "<td id='transtd'>" . $row['amount'] . "</td>";
                  
                  echo "<td id='transtd'>" . $row['card_no'] . "</td>";
                  
                  echo "<td id='transtd'>" . $row['date'] . "</td>";
                                
                  
                  echo "</tr>";
		
		  
		  }
		echo "</table></div>";}
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