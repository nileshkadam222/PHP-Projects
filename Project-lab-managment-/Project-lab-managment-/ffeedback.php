<?php
				include("connect.php");
				if(isset($_REQUEST['b1']))
						{
							mysql_query (" insert into feedback set
															uname =  ' ".$_REQUEST['t1']." ' ,
															comment =  '".$_REQUEST['t2']."'  
															");
								$id =  mysql_insert_id();     //  Return Row ID
								if(isset($id)   && $id!=0)
									{
											echo "Record Submitted @  $id  <br>";
									}else{
											echo  "<br>No insertion !!!";
									}		
					// ----- URL REDIRECT to select Page------															
						header("location:thankyou.php");
						exit();
						}
?>













<html>
<head>
<title>Lab Managment</title>
</head>
<body>
<center><table border="1" width="80%" cellpadding="1" cellspacing="1">
	<tr>
		<td><center><table border="1" width="100%" height="5%" cellpadding="0" cellspacing="0">
		<tr>
	<td><div><img src="images/as.jpg" width="1320" height="200"/></div>
	</td>
	</tr>
</table>
</center></td>
	</tr>
</table>
</body>
</head>
</html>

	
	
<form name="memlogin" method="post" action="?">


<table width="40%" border="1" align="center">
  <tr>
    <td>Name</td>
    <td><label>
      <input type="text" name="t1">
    </label></td>
  </tr>
  <tr>
    <td>Comment</td>
    <td><label>
      <textarea name="t2"></textarea>
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><label>
      <input type="submit" name="b1" value="Thank You">
    <a href="inbox.php" class="head4">
	  <input name="Submit" type="button" value="Back"></a>
       
	</label></td>
    </tr>
</table>













<label></label>
</form>
