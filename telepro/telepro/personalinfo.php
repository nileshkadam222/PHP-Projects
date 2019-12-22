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
    h2,#per_info,#personal_info{
        font-family:lucida sans;
        padding-top:10px;
        
    }
    #save_btn,#update_personal{
	font-size:14px;
	font-family:lucida sans;font-weight:bold;
	width:80px;
	height:30px;
	}
    #acc_links{
        color: blue;
        font-size:20px;
        text-decoration:none;
        font-family:lucida sans;
        padding:10px;
        
        
    }
    #tbhead{
                font-weight:bold;
                font-family: Lucida sans;
                font-size:25px;
		color: #545C64;
		}
    #links_div ul{
                list-style-image:url('sqpurple.gif');
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
    <span id='tbhead' >Account Information</span>
    <div id='links_div'>
        <ul>
           <!-- <li><a id='acc_links' href='personalinfo.php?personal_set=show'>Personal Details</a></li>-->
            <li><a id='acc_links' href='personalinfo.php?pass_set=show'>Password Settings</a></li>
        </ul>
    
    
    </div>
    
 <?php
 $pass_msg="";
 $info_msg="";
 if(isset($_SESSION['username'])){
    $ca_number=$_SESSION['username'];
    
if(isset($_GET['pass_set']))
 {
 ?>
<div id='per_info' style='border:1px solid black;padding:10px;'>
    <table>
        <tr>
            <td>
            <form action='personalinfo.php' method='get'>
            <h2 style='font-weight:bold;font-size:20px;'>Change password</h2>
            <table>
            <tr><td>Current password</td><td><input type='password' size='20' name='current_pass'/></td></tr>
            <tr><td>New password</td><td><input type='password' size='20' name='new_pass'/></td></tr>
            <tr><td>Confirm password</td><td><input type='password' size="20" name='confirm_pass'/></td></tr>
            <tr><td colspan=2><input type='submit' id='save_btn' value='Save' name='changepass_btn'/></td></tr>
            </table>
            </form>
            
            </td>
        </tr>    
        <tr>   
            <td>
            <form action='personalinfo.php' method='get'>
            <h2 style='font-weight:bold;font-size:20px;'>Security Settings for password<h2>
            <table>
            <tr><td>Security Question </td><td><input type='text' size='30' name='sec_ques'/></td></tr>
            <tr><td>Answer</td><td><input type='text' size='30' name='ans'/></td></tr>
            <tr><td colspan=2><input type='submit' id='save_btn' value='Save' name='sec_btn'/></td></tr>
            </table>
            </form>
            </td>
        </tr>
        
    </table>
    
   
    
    
</div>
<?php }
if(isset($_GET['changepass_btn']))
{               $img="<img src='./images/error.png' width='35px' height='35px'/><span style='font-family:lucida sans;font-weight:bold;font-size:15px;'>";
                $current_pass=$_GET['current_pass'];
                $new_pass=$_GET['new_pass'];
                $confirm_pass=$_GET['confirm_pass'];
                $ca_number=$_SESSION['username'];
                if($current_pass!='' && $new_pass!='' && $new_pass!=''){
                include('my_con.php');
                $result=mysqli_query($conn,"select * from customer_login where ca_number=$ca_number AND password='$current_pass'");
                $num= mysqli_num_rows($result);
                if($num==1){
                if($new_pass==$confirm_pass){    
                
                
		$result=mysqli_query($conn,"UPDATE customer_login set password='$new_pass' where ca_number=$ca_number");
		$num=mysqli_affected_rows($conn);
                
		if($num==1){
                    
                    $pass_msg="Password Changed";
                  
		
		mysqli_close($conn);
		}   
               
                }
                else{
                $pass_msg=$img."Password not matched try again";
                }
                    
                    
                }
                else{
                 $pass_msg=$img."Current password was wrong";
                }
                    
                
                    
                }
                else{
                    $pass_msg=$img."Password was not entered try again";
                   
                }
                
    }
        if(isset($_GET['sec_btn'])){

                $question=mysql_real_escape_string($_GET['sec_ques']);
                $answer=mysql_real_escape_string($_GET['ans']);
                $ca_number=$_SESSION['username'];
                                
                if($question!='' && $answer!=''){
                include('my_con.php');
                
                $result=mysqli_query($conn,"UPDATE customer_login set question='$question',answer='$answer' where ca_number=$ca_number");
		$num=mysqli_affected_rows($conn);
		if($num==1){
		 $info_msg="Security settings changed"   ;
		
		mysqli_close($conn);
		}   
                
                }
                else{
                    $info_msg="Please enter question and answer" ;
                }
                
    
 
        }
        
        
        
        
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
        if(isset($_GET['personal_set'])){
            
            include('my_con.php');
            $result=mysqli_query($conn,"select name,mobile,email,address from customer_info where ca_number=$ca_number");
            $row=mysqli_fetch_array($result);
            $name=$row['name'];
            $mobile=$row['mobile'];
            $email=$row['email'];
            $address=$row['address'];      
            
            ?>
        
        
        <div id='personal_info' style='border:1px solid black;padding:10px;'>
            <form action='personalinfo.php' method='get'>
            <h2 style='font-weight:bold;font-size:20px;'>Change/Update personal information</h2>
            <table cellspacing="5px;">
                <tr><td>Name</td><td><input type='text' size='25' name='name_txt' value="<?php echo $name; ?>" /></td></tr>
                <tr><td>Mobile</td><td><input type='text' maxlength="10" size='25' name='mn_txt' value="<?php echo $mobile;?>" /></td></tr>
                <tr><td>Email</td><td><input type='text' size='25' name='email_txt' value="<?php echo $email; ?>" /></td></tr>
                <tr><td>Address</td><td><textarea rows="" cols="" name="address_txt"><?php echo $address; ?></textarea></td></tr>
                <tr><td colspan="2"><input type="submit" value=" Update " id="update_personal" name="update_personal"></td></tr>
                
            </table>
        </div>
            
            
        <?php
            
        }
        if(isset($_GET['update_personal']))
        {
            $name=$_GET['name_txt'];
            $mobile=$_GET['mn_txt'];
            $email=$_GET['email_txt'];
            $address=$_GET['address_txt'];
            
            if($name !='' || $mobile !='' || $email !='' || $address !='')
            {
            include('my_con.php');
            $result=mysqli_query($conn,"update customer_info set name='$name',mobile=$mobile,email='$email',address='$address' where ca_number=$ca_number");
            $num=mysqli_affected_rows($conn);
            if($num == 1)
            {
                $info_msg="Personal Information Updated";
                
            }
            else{
                $info_msg="Updation failed Old record retained try again";
            }  
            }
            else{
                $info_msg="Field cannot left empty..try again !!";
            }
            
        }
        
   /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////     
        }
        ?>
</td>
</tr>
<tr>
    <td style='padding-left:20px;color:red;font-family:lucida sans;'>
         <?php echo $pass_msg;?>
         <?php echo $info_msg;?>
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