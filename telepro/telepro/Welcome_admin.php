<html>
<head>
    <link rel="shortcut icon" href="./images/favicon.png" />
<title>
DPTL Admin
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
    
    }
    #admin_panel img:hover {
        
        opacity: 0.8;
        
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
<div id="admin_panel">
    <span id='heading'><center>Admin Panel</center></span><br/>
    <table>
        <tr>
            <td><a href='cus_info.php'><img id='im' src='./images/customerdetails.jpg' width='210' height='180'/></a></td>
            <td><a href='cus_feed.php'><img width='250' height='180' src='./images/customerfeedback.jpg'/></a></td>
            <td><a href='create_bill.php'><img width='250' height='180' src='./images/billicon.jpg'/></a></td>
            <td><a href='cus_transactions.php'><img width='250' height='180' src='./images/cus_trans.jpg'/></a></td>
        </tr>
    </table>
   
    
    
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