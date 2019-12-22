<?php 
	session_start();
	include("connect.php");
	if(isset($_POST['b1']))
		{
$q = mysql_query("select * from employee
				   where usernme = '".$_REQUEST['t1']."' 
					  and
				    password = '".$_REQUEST['t2']."' ");	
 $num = mysql_num_rows($q);
	if($num>0)
		{
				$row = mysql_fetch_array($q);	
				$_SESSION['id'] = $row['usernme'];
				$_SESSION['usernme'] = $row['password'];
				header("location:inbox.php");
				exit();
		}else{
echo "<blink>uname and Passwd Not Matched!! </blink>";	
		}
	}

  if(isset($_GET['todo']) && $_GET['todo']=="logout")
  	{
			@session_destroy();
	} 
?>
<html">
<head>
<title>Lab Managment</title>
</head>
<body>
<center><table border="" width="80%" cellpadding="1" cellspacing="1">
	<tr>
		<td><center><table border="1" width="100%" height="10%" cellpadding="0" cellspacing="0">
		<tr>
	<td><div><img src="images/as.jpg".jpg" width="1348" height="200"/></div>
	</td>
	</tr>
</table>
</center></td>
	</tr>
</table>
</body>
</head>
</html>


<div id="layer03_holder">
  <div id="left"></div>
  <div id="center">
    <table width="96%" height="141" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>SIGN IN HERE</td>
      </tr>
      <tr>
        <td height="126"><form id="form1" name="form1" method="post" action="">
            <label>Name
              <input name="t1" type="text" id="t1"/>
            </label>
            <label>Password
              <input type="password" name="t2" id="t2" style="margin-top:5px;" />
            </label>
            <label>
            <input type="submit" name="b1" id="button" value="Login" />
            </label>
        </form></td>
      </tr>
    </table>
  </div>
  <div id="right"></div>
</div>

<div id="layer04_holder">
  <div id="left"></div>
  <div id="center"></div>
 
  <div id="right"></div>
</div>
<a href="index.php"><img src="images/goback.jpg"; width="60" height="20"></a>
</body>
</html>