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
        #cus_tras{
            font-family: Lucida sans;
            
        }
                #trans{
                width: 100%;
		font-family: Lucida sans;
                border-collapse: collapse;
                }
                #tdcaption
                {
                font-family: Lucida sans;
                font-size:25px;
                font-weight:bold;
                 }
                #trans #head{
                font-weight:bold;
                background-color: #545C64;
                color:white;
                }
                 #admin_link{
                    float:right;
                    color:blue;
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
<td><?php include('admin_nav.php') ?></td>
</tr>
<tr>
<td>
<!-- ########-->
<table id="middle_tb" name="middle_tb" style="">
<tr>
<td>
<div id='cus_trans'>
     <?php
                echo "<a id='admin_link' href='Welcome_admin.php'>Back to Admin Panel</a>";
                echo "<h2 id='tdcaption'>Today's Customer Transaction History<h2>";
                if(isset($username)){
                $date=date("Y-m-d");
		include('my_con.php');
		$result = mysqli_query($conn,"SELECT * FROM transactions WHERE date='$date'");
                
		$num=mysqli_num_rows($result);
		if($num==""){
		    
		    echo "<h3 style='font-family:lucida sans' >Transaction History not available</h3>";
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