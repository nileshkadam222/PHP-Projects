





<html>
<head>
<title>Lab Managment</title>
</head>
<body>
<center><table border="1" width="50%" cellpadding="1" cellspacing="1">
	<tr>
		<td><center><table border="1" width="100%" height="100%" cellpadding="0" cellspacing="0">
						<tr>
	<td><div><img src="images/as.jpg" width="1300" height="200"  /></div></td></tr>




<center><table width='25%' border='0' align='center' cellpadding='0' cellspacing='0'>
 
       
        </div></td>



<center><table width='25%' border='0' align='center' cellpadding='0' cellspacing='0'>
    
	<tr> 
      <td height='21' colspan='2'> <div align='center'> 
          <hr>
        </div></td>
























<form action="" method="post">
<table width="60%" border="1">
  <tr>
    <td colspan="5"></td>
   
  </tr>
  
  
 
  <tr bgcolor="#CCCCCC" align="center">
    <th>S.No</th>
	    <th> Faculty Name.</th>

    <th> Room No.</th>
    <th>No. Of Desktop</th>
    <th>No. Of Keyboard</th>
    <th>No. Of Mouse</th>
	<th>No. Of Headphone</th>
	<th>Present LanCable</th>
	<th>Operating System</th>
	    <th> Date</th>

 
 </tr>
  <?php
               include("connect.php");
			  $q =  mysql_query("select * from flabitems");
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
    <td><?php echo $row[3];?></td>
	<td><?php echo $row[4];?></td>
	<td><?php echo $row[5];?></td>
	<td><?php echo $row[6];?></td>
	<td><?php echo $row[7];?></td>
	<td><?php echo $row[8];?></td>
	<td><?php echo $row[9];?></td>
		 
 
	
    
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