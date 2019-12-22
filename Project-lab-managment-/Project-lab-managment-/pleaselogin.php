<?php 
	session_start();
	include("connect.php");
	if(isset($_POST['b1']))
		{
$q = mysql_query("select * from finfo
				   where uname = '".$_POST['t1']."' 
					  and
				    upass = '".$_POST['t2']."' ");	
 $num = mysql_num_rows($q);
	if($num>0)
		{
				$row = mysql_fetch_array($q);	
				$_SESSION['fid'] = $row['1'];
				$_SESSION['uname'] = $row['2'];
				header("location:inbox.php");
				exit();
		}else{
echo "<blink>uname and Passwd Not Matched!! </blink>";	
		}
	}

  if(isset($_GET['todo']) && $_GET['todo']=="logout")
  	{
			session_destroy();
	} 
?>


<?php 
	@session_start();
	include("connect.php");
	if(isset($_POST['b2']))
		{
$q = mysql_query("select * from ainfo
				   where uname = '".$_POST['t3']."' 
					  and
				    upass = '".$_POST['t4']."' ");	
 $num = mysql_num_rows($q);
	if($num>0)
		{
				$row = mysql_fetch_array($q);	
				$_SESSION['sid'] = $row['aid'];
				$_SESSION['uname'] = $row['uname'];
				header("location:admininbox.php");
				exit();
		}else{
echo "<blink>uname and Passwd Not Matched!! </blink>";	
		}
	}

  if(isset($_GET['todo']) && $_GET['todo']=="logout")
  	{
			session_destroy();
	} 
?>










<html>
<head><title>Lab Managment</title></head>
<body>
<center><table border="0" width="75%" cellpadding="1" cellspacing="1">
	<tr>
		<td><center><table border="0" width="100%" height="5%" cellpadding="0" cellspacing="0">
						<tr>
							<td><div><img src="images/flash4.jpg" width="990" height="110" longdesc="http://localhost/NIPSS/images/banner.JPG" /></div></td></tr></table></center></td>
</table></center>
	</tr><center>
	<div id="asd" style="background-image:url(images/border.jpg); height:300; width:670;">
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<h1> Thank You </h1>

<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>

<a href="index.php"><img src="images/home.gif"></a>






</center>
</div>