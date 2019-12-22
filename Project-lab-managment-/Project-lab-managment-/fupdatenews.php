<html">
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

       
    <?php
				include("connect.php");
?>
  
<marquee direction="up" scrollamount="5" scrolldelay="20"  style="background-image:url(images/earth-from-space-wallpaper-1366x768-015.jpg); width:1320; height:500;" onMouseOver="this.stop();" onMouseOut="this.start(); ">
							
					
				
									<ul>
										
									  <p>
									  
									    <?php
													$q = mysql_query("select * from uptest 
																		where location = '1' 
																				and status = 'A' ");
																				$num  = mysql_num_rows($q);
													if($num)
														{
															
																while($data  = mysql_fetch_array($q))
																{	
																?>
									  </p>
									  <p>
								    <a href="<?php echo $data[2]?><?php echo $data[1]?>" target="<?php   echo $data[5]?>">
								      <?php  echo $data[3]?>
									  </a></p>
									  <p>
									    <?php
																}
													}
										?>
								      </p>
									</ul>
    </marquee>
</td>
  </tr>
</table>    
</table>
<form name="sad" method="post" action="?">
<table align="center">
<tr>
<td>
 <a href="inbox.php" class="head4">
	  <input name="Submit" type="button" value="Back"></a>
    </label>
	</td>
    </tr>
	</table>
	</form>
