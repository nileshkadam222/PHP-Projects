<?php
				include("connect.php");
				if(isset($_REQUEST['b1']))
						{
							mysql_query (" insert into flabitems set
															fname =  ' ".$_REQUEST['t1']." ' ,
															roomno =  ' ".$_REQUEST['t2']." ' ,
															desktop =  '".$_REQUEST['t3']."'  ,
															keyboard	 =  '".$_REQUEST['t4']."'  ,
															mouse =  '".$_REQUEST['t5']."'  ,
															headphone	 =  '".$_REQUEST['t6']."'  ,
															lancable=  '".$_REQUEST['t7']."'  ,
															os=  '".$_REQUEST['t8']."',
						    								date=  '".$_REQUEST['t9']."'
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

	
	
	
	<form name="ads" action="?" method="get">
	<table width="40%" border="0" align="center">
  <tr>
    <td colspan="2" align="center">LAB ITEMS </td>
    </tr>
	
  <tr>
    <td width="67%">Name Of Faculty </td>
    <td width="33%"><label>
      <input type="text" name="t1">
    </label></td>
  </tr>
  
  <tr>
    <td>Room No. </td>
    <td><label>
      <input type="text" name="t2">
    </label></td>
  </tr>
  <tr>
    <td>No. Of Desktop </td>
    <td><input type="text" name="t3"></td>
  </tr>
  <tr>
    <td>No. Of KeyBoard </td>
    <td><input type="text" name="t4"></td>
  </tr>
  <tr>
    <td>No. Of Mouse </td>
    <td><input type="text" name="t5"></td>
  </tr>
  <tr>
    <td>No. Of HeadPhone </td>
    <td><input type="text" name="t6"></td>
  </tr>
  <tr>
    <td>Lan Cable </td>
    <td><p>
      <label>
        <input type="radio" name="t7" value="Y">
        Yes</label>
      <label>
        <input type="radio" name="t7" value="N">
        No</label>
      <br>
    </p></td>
  </tr>
  <tr>
    <td>Select O.S. </td>
    <td><label>
      <select name="t8">
	  <option selected="selected">--Select O.S.--</option>
	  <option>Window Xp</option>
	  <option>Window 7</option>
	  <option>Window 8</option>
	  <option>Linux</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Date</td>
    <td><label>
      <input type="text" name="t9">
    </label></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><label>
      <input type="submit" name="b1" value="Submit Data">
	   <a href="inbox.php" class="head4">
	  <input name="Submit" type="button" value="Back"></a>
    </label></td>
    </tr>
</table>

	
	
	
	</form>