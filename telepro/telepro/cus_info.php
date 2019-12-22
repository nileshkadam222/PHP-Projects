<html>

<title>
CPTL Admin
</title>
<link rel="stylesheet" type="text/css" href="main_div.css">
<link rel="stylesheet" type="text/css" href="middle_tb.css">
<link rel="stylesheet" type="text/css" href="body.css">
<style>
    
    #customer_tb{
    width: 100%;
    border-collapse: collapse;
    }
    #customer_tb td,#td_head
    {
    border-bottom:1px solid #545C64;
    font-size:14px;
    font-family: Lucida sans;
    padding:8px;
    }
    #customer_tb #tb_head{
    font-weight:bold;
    background-color: #545C64;
    color:white;
    }
    #action{
        color: blue;
        font-size:14px;
        
    }
    #customer{
    background-color:#ADD6FF;
    height:400px;
    overflow:scroll;
    }
    #tid{
        border-right:1px solid black;
    }
    #del_msg{
    font-size:16px;
    font-family: Lucida sans;
    color: red;
        
    }
    #admin_link{
        float:right;
        color:blue;
    }
    
 </style>
 

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
<?php
if(isset($_SESSION['username']))
 {
$del_msg="";
include('my_con.php');
echo "<a id='admin_link' href='Welcome_admin.php'>Back to Admin Panel</a>";
echo "<h2 style='font-family:lucida sans' >Customer Information</h2> ";
$result = mysqli_query($conn,"SELECT ca_number,landline,mobile,email,reg_date FROM customer_info WHERE reg_date!='0000-00-00'");
echo "<div id='customer'><table id='customer_tb'>
<tr id='tb_head'>
<td>CA Number</td>
<td>Landline</td>
<td>Mobile</td>
<td>Email</td>
<td>Date</td>
<td>Status</td>
</tr>

";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['ca_number'] . "</td>";
  echo "<td>" . $row['landline'] . "</td>";
  echo "<td>" . $row['mobile'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['reg_date'] . "</td>";
  echo "<td ><a id='action' href='cus_info.php?check=".$row['ca_number']."'>Delete</a></td>";
  echo "</tr>";
  }

  

if(isset($_GET['check'])){

$check=$_GET['check'];
$result=mysqli_query($conn,"UPDATE customer_info set reg_date = '0000-00-00' where ca_number=$check") or mysqli_error();
$num=mysqli_affected_rows($conn);
if($num==1)
{
$del_msg="Record Deleted refresh page to view changes"; 
}
}

  
  
  
  
  
  
echo "</table></div>";
echo "<br><span id='del_msg'>".$del_msg."</span>";
 }
 else{
    
     include('unauth.php'); 
 }
?>


  
    
    
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