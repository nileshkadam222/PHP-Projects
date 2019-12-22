<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Lab Managment</title>
</head>


<body>

<center><table border="1" width="75%" cellpadding="1" cellspacing="1">
	<tr>
		<td><center><table border="1" width="100%" height="5%" cellpadding="0" cellspacing="0">
						<tr>
							<td><div><img src="images/as.jpg" width="1330" height="200"/></div></td></tr>

</table></center></td>
	</tr>
</table>





<form name="memlogin" method="post" action="?">
    
<br>
<br>
<br><br>

<?php
		session_start();
		include("connect.php");
  if(!isset($_SESSION['aid'])  && $_SESSION['uname']=="")
  	{
		header("location:index.php");
		exit();
	}else{
			echo  "Welcome ".$_SESSION['fid'];
			echo "<br>";
			echo  date("Y-m-d");
			if(isset($_REQUEST['b1']))
						{
						header("location:atimetable.php");
				 exit();
				 }
			
				 
				 
				if(isset($_REQUEST['b2']))
						{
						header("location:aupdatenews.php");
				exit();
				}
				if(isset($_REQUEST['b3']))
						{
						header("location:alabitems.php");
				exit();
				}if(isset($_REQUEST['b4']))
						{
						header("location:afeedback.php");
				exit();
				}
				if(isset($_REQUEST['b5']))
						{
						header("location:afcheck.php");
				exit();
				}
				
				


?>


			



<form name="asd" action="?" method="post">
<table width="60%" border="0" align="center">
  <tr>
    <td><label>
      <input type="submit" name="b1" value="Allocate Lab Time Table">
    </label></td>
  </tr>
  <tr>
    <td><input type="submit" name="b2" value="News Update"></td>
  </tr>
  <tr>
    <td><input type="submit" name="b3" value="Check Lab Items"></td>
  </tr>
  <tr>
    <td><input type="submit" name="b4" value="Check Feedback"></td>
  </tr>
  <tr>
    <td><input type="submit" name="b5" value="Faculty Details"></td>
  </tr>
  </table>













</form>			
			
<br>
<br>
<br>
<br>
<br>
	<center>
    		<a href="index.php?todo=logout">
   					Log Out
      </a>
</center>
			
<?php
	}
?>			
			
			