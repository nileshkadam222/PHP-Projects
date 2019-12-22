<html>
<head>
<title>Lab Managment</title>
</head>
<body>
<center><table border="1" width="50%" cellpadding="1" cellspacing="1">
	<tr>
		<td><center><table border="1" width="100%" height="5%" cellpadding="0" cellspacing="0">
						<tr>
	<td><div><img src="images/as.jpg" width="1300" height="200"  /></div></td></tr>




<center><table width='25%' border='0' align='center' cellpadding='0' cellspacing='0'>
 
       
        </div>
























<form action="" method="post">
<table width="60%" border="1">
  <tr>
    <td colspan="5"></td>
   
  </tr>
  
  
 
  <tr bgcolor="#CCCCCC" align="center">
    <th>S.No</th>
    
	<th>Name</th>
	<th>Comment</th>
 
 </tr>
  <?php
               include("connect.php");
			  $q =  mysql_query("select * from feedback");
			  $num = mysql_num_rows($q);
			   if($num)
			   {
				   while($row = mysql_fetch_array($q))
				     {
 ?>
  <tr align="center">
    <td><?php echo $row[0];?></td>
    <td><?php echo $row[1];?></td>
    <td><?php echo $row[2];?></td>
   
	
    
	<?php
	
					 }
			   }else{
	?>
  </tr>
 
  <tr>
    <td colspan="5">&nbsp;<center><blink>No Record Found !!!</blink></center></td>
    </tr>
    <?php
			   }
?>
  		<a href="admininbox.php" class="head4">
	  <input name="Submit" type="button" value="Back"></a>



</table>


</form>