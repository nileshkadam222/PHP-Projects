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
                font-weight:bold;
                }
        
        
                 #pay_btn,#action{
                color:blue;
                }
            
                    #bills{
                            width: 100%;
                            font-family: Lucida sans;
                            border-collapse: collapse;
                    }
                    
                    #bills #tdcaption{
                            border-bottom:1px solid #545C64;
                            font-size:14px;
                            padding:8px;
                    }
                    
                    #bills #head{
                            font-weight:bold;
                            background-color: #545C64;
                            color:white;
                    }
                    #bills #tdstatus{
                            color:red; }
                                    
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
                            padding: 8px;
                            padding-left: 20px;
                            border-bottom:1px solid black;
                            }
                    .total{
                            font-weight:bold;
                            color:red;
                            }
                            
                            #shortcuts img:hover {    opacity: 0.8;   }
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
<td id='shortcuts'>
<a href='personalinfo.php'><img width='250px' height='200px' src='./images/personal1.png' /></a>
<a href='payinfo.php'><img width='250px' height='200px' src='./images/payment.png' /></a>
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