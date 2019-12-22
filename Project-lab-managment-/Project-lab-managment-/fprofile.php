<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab Managment</title>
<link href="stylelog.css" rel="stylesheet" type="text/css" />


<body>
<center><table border="0" width="75%" cellpadding="1" cellspacing="1">
	<tr>
		<td><center><table border="0" width="100%" height="5%" cellpadding="0" cellspacing="0">
						<tr>
<td><div><img src="images/flash4.jpg" width="1027" height="154" longdesc="http://localhost/NIPSS/images/banner.JPG" /></div></td></tr></table></center></td>
	</tr>
</table>
</body>


</head>
</html>

<div id="asd" style="background-image:url(images/textures-wallpapers-18-textures-simple1680x1050-textures-simple-background-photo.jpg)">

	






<?php
		session_start();
		include("connect.php");
  if(!isset($_SESSION['fid'])  && $_SESSION['uname']=="")
  	{
		header("location:index.php");
		exit();
	}else{
			echo  "Welcome ".$_SESSION['uname'];
			echo "<br>";
			echo  date("Y-m-d");
            
			
?>




    		<a href="index.php?todo=logout">
   					Log Out
      </a>

</td>




 
















</div>
</div>				
<?php
	}
?>



