

<html>
<head>
<title>
CPTL Admin
</title>
<link rel="stylesheet" type="text/css" href="main_div.css">
<link rel="stylesheet" type="text/css" href="middle_tb.css">
<link rel="stylesheet" type="text/css" href="body.css">
 <style>
            #tb_head{
            font-weight:bold;
            font-size: 18px;
            
            
            }
            #news{
              width:400px;
              font-family:Lucida sans;
              font-size:16px;
              border:1px solid black;
              padding:20px;
            }
            </style>
</head>
<body>
<center>
 <?php

 
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
        $title=$_POST['ad_title'];
        $details=$_POST['ad_details'];
        $date=date("Y-m-d");
        if($title!="" & $details!=""){
            include('my_con.php');
            $query=mysqli_query($conn,"INSERT INTO news (title,details,start_date,end_date) VALUES ('$title','$details','$date','')");
            $num = mysqli_affected_rows($conn);
            if($num==1)
            {
                $NewsErr= "Ad posted successfully";
                mysqli_close($conn);
                
            }
            else{
                
                $NewsErr= "Error occured !!";
                mysqli_close($conn);
            }
           
            }
            else{ $NewsErr= "Please enter title and Description !!"; }
           
        }
        else{
            $NewsErr='';
        }
 
 
    echo "
<div id='main_div' name='main_div'>
<table>
<tr>
<td>";
include('banner.php');

if(isset($_SESSION['username']))
 {
echo
"</td>
<tr>
<tr>
<td>";
include('admin_nav.php');
echo"
</td>
</tr>
<tr>
<td>
<!-- ########-->
<table id='middle_tb' name='middle_tb' >
<tr>
<td>
   
    <div id='news'>
            <form action=";
            echo htmlspecialchars($_SERVER['PHP_SELF']); echo" method='POST' name='news_fr'>
                <table>
                    <tr>
                        <td id='tb_head' colspan='2' >Post new News</td>
                    </tr>
                    
                    <tr>
                        <td>Title</td><td><input type='text' name='ad_title' id='ad_title' size='41' /></td>
                    </tr>
                    <tr>
                        <td>Description</td><td><textarea cols='32' rows='5' name='ad_details' id='ad_details'></textarea></td>
                    </tr>
                    <tr>
                        <td colspan='2'><input type='submit' value='submit' /></td>
                    </tr>
                    <tr>
                        <td colspan='2' style='color:red'>";echo $NewsErr; echo "</td>
                    </tr>
                </table>                
            </form>
            
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
</html>";

}
else{


 include('unauth.php'); 
}
?>