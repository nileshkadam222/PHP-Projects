 

<html>
<head><title>Lab Managment</title></head>
<body>
<center><table border="0" width="75%" cellpadding="1" cellspacing="1">
	<tr>
		<td><center><table border="1" width="100%" height="8%" cellpadding="0" cellspacing="0">
						<tr>
							<td><div><img src="images/as.jpg" width="1320" height="200" longdesc="http://localhost/NIPSS/images/banner.JPG" /></div></td></tr></table></center></td>
	</tr>
	


























<form action="?" method="post" >
<table width="60%" border="1">
  <tr>
    <td colspan="5"></td>
   
  </tr>
  
  
 
  <tr bgcolor="#CCCCCC" align="center">
    <th>S.No</th>
    <th> Name</th>
    <th>Father Name</th>
   <th>User Name</th>
    <th>Email Id</th>
    <th>Sex</th>
    
	<th> Temporary Address </th>

	<th>Parmanent Address </th>
 	<th> Post </th>
	<th> Join Date </th>
 	
<th> Image </th>
<th> Mobile No. </th>

 </tr>
  <?php
               include("connect.php");
			  $q =  mysql_query("select * from employee");
			  $num = mysql_num_rows($q);
			   if($num)
			   {
				   while($row = mysql_fetch_array($q))
				     {
 ?>
  <tr align="center">
    <td><?php echo $row[0];?></td>
    <td><?php echo $row[1];?></td>
    <td><?php echo $row[3];?></td>
    <td><?php echo $row[4];?></td>
	<td><?php echo $row[5];?></td>
	<td><?php echo $row[6];?></td>
	<td><?php echo $row[7];?></td>
	<td><?php echo $row[8];?></td>
	<td><?php echo $row[9];?></td>
	<td><?php echo $row[10];?></td>



  
    <td><img src="<?=$row['image']?>" width="60" height="60"/></td>
  
	
	<td><?php echo $row[12];?></td>
		 
 
	
    
	<?php
	
					 }
			   }else{
	?>
  </tr>
 
  <tr>
    <td colspan="5">&nbsp;<center><blink>No Record Found !!!</blink></center></td>
    </tr>
	

</td>	
	
	
    <?php
			   }
?>


	  <tr>
    <td colspan="2"><label>
      <a href="admininbox.php"><img src="images/goback.jpg"></a>
    </label></td>
    </tr>

</table>


</form>