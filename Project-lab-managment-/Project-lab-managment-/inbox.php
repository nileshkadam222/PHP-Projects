<html>
<head>
<title>Lab Managment</title>
</head>
<body>
<center><table border="1" width="80%" cellpadding="1" cellspacing="1">
	<tr>
		<td><center><table border="1" width="100%" height="5%" cellpadding="0" cellspacing="0">
		<tr>
	<td><div><img src="images/as.jpg" width="1348" height="200"/></div>
	</td>
	</tr>
</table>
</center></td>
	</tr>
</table>
</body>
</head>
</html>






<?php
		session_start();
		include("connect.php");
  if(!isset($_SESSION['id'])  && $_SESSION['usernme']=="")
  	{
		header("location:index.php");
		exit();
	}else{
			echo  "Welcome  ".$_SESSION['id'];
			
			echo "<br>";
			echo "<br>";
			echo  date("Y-m-d");
			echo "<br>";
			echo "<br>";
			
		
	if(isset($_REQUEST['b5']))
						{
						 

						header("location:gallery.php");
				 exit();
				 }
				




		if(isset($_REQUEST['b1']))
						{
						 

						header("location:ftimetable.php");
				 exit();
				 }
			
				 
				 
				if(isset($_REQUEST['b2']))
						{
						header("location:fupdatenews.php");
				exit();
				}
				if(isset($_REQUEST['b3']))
						{
						header("location:flabitems.php");
				exit();
				}if(isset($_REQUEST['b4']))
						{
						header("location:ffeedback.php");
				exit();
				}
				
				
				


?>















  <tr>

    <td><form id="form1" name="form1" method="post" action="?">
  
      <label>
	  
        <input type="submit" name="b1" value="Check Time Schedule"/>
        </label>
    </form>
    </td>
    	<tr>&nbsp;</tr>
  <tr>&nbsp;</tr>

  <tr>
    <td><form id="form1" name="form1" method="post" action="?">
      <label>
        <input type="submit" name="b2" value="Update News" />
        </label>
    </form>
    </td>
  	<tr>&nbsp;</tr>
  <tr>&nbsp;</tr>



  <tr>
    <td><form id="form1" name="form1" method="post" action="?">
      <label>
        <input type="submit" name="b3" value="Lab Items" />
        </label>
    </form>
    </td>
  	<tr>&nbsp;</tr>
  <tr>&nbsp;</tr>



  <tr>
    <td><form id="form1" name="form1" method="post" action="?">
      <label>
        <input type="submit" name="b4" value="Feedback" />
        </label>
    </form>
    </td>
  	<tr>&nbsp;</tr>
  <tr>&nbsp;</tr>



<tr>
    <td><form id="form1" name="form1" method="post" action="?">
     </td>



  	
	</form>
    
	
	
<td>
    		<td> <a href="index.php?todo=logout">
   					Log Out
      </a>

</td>


 </table>
<?php
	}
?>
</div>



