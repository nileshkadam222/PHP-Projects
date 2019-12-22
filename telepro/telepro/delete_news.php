<html>

<title>
CPTL Admin
</title>
<link rel="stylesheet" type="text/css" href="main_div.css">
<link rel="stylesheet" type="text/css" href="middle_tb.css">
<link rel="stylesheet" type="text/css" href="body.css">
<style>
    
    #news_tb{
    width: 100%;
    border-collapse: collapse;
    }
    #news_tb td,#td_head
    {
    border-bottom:1px solid #545C64;
    font-size:14px;
    font-family: Lucida sans;
    padding:8px;
    }
    #news_tb #tb_head{
    font-weight:bold;
    background-color: #545C64;
    color:white;
    }
    #action{
        color: blue;
        font-size:14px;
        
    }
    #news{
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
$result = mysqli_query($conn,"SELECT news_id,title,details,start_date FROM news where end_date='000-00-00' ORDER BY news_id DESC");
echo "<div id='news'>
<table id='news_tb'>
<tr id='tb_head'>
<td id='tid'>ID</td>
<td>Title</td>
<td>Details</td>
<td>Posted on</td>
<td>Action</td>
</tr>

";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td id='tid'>" . $row['news_id'] . "</td>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['details'] . "</td>";
  echo "<td>" . $row['start_date'] . "</td>";
  echo "<td ><a id='action' href='delete_news.php?check=".$row['news_id']."'>Delete</a></td>";
  echo "</tr>";
  }
  

if(isset($_GET['check'])){
$date=date("Y-m-d");
$check=$_GET['check'];
$result=mysqli_query($conn,"update news set end_date = '$date' where news_id=$check") or mysqli_error();
$num=mysqli_affected_rows($conn);
if($num==1)
{
$del_msg="Record Deleted refresh page to view changes"; 
}
}

  
  
  
  
  
  
echo "</table></div>";
echo "<span id='del_msg'>".$del_msg."</span>";
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