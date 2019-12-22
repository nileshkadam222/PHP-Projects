


<html>
<head>
<title>Lab Managment</title>
</head>
<body>
<center><table border="1" width="50%" cellpadding="1" cellspacing="1">
	<tr>
		<td><center><table border="0" width="100%" height="5%" cellpadding="0" cellspacing="0">
						<tr>
	<td><div><img src="images/as.jpg" width="1300" height="200"  /></div></td></tr>



<table width='25%' border='1' align='center' cellpadding='0' cellspacing='0'>
<?php
	include("connect.php");
						mysql_query ("insert into atimetable set
										uname = '".@$_POST['t1']."' ,
										day = '".@$_POST['t2']."' ,
										time  =  '".@$_POST['t3']."'   ,
										semester  = '".@$_POST['t4']."',
										subject  = '".@$_POST['t5']."' 
										  ");
							
	$id =  mysql_insert_id();     //  Return Row ID
								if(isset($id)   && $id!=0)
									{
											echo "Record Submitted @  $id  <br>";
									}else{
											//echo  "<br>No insertion !!!";
									}		
?>
 <form name="memlogin" method="post" action="?">
 <fieldset style="background-image:url(images/reWalls.com-32446.jpg); height:600; width:1271">
  <p><strong>Faculty  Name</strong> 
      <input name="t1" type="text" />
    
    
      <br />
      <br />
      <strong>Day </strong>
        <select name="t2">
          <option>MONDAY</option>
          <option>TUESDAY</option>
          <option>WEDNESDAY</option>
          <option>THURSDAY</option>
          <option>FRIDAY</option>
          <option>SATURDAY</option>
        </select>
        <br />
        <br />
        <strong>Timing</strong> 
        <input name="t3" type="text" />
    
    
        <br />
        <br />
    
        <strong>Semester</strong> 
        <input name="t4" type="text" />
    
    
        <br />
        <br />
    
        <strong>Subject</strong> 
        <input name="t5" type="text" />
    
    
        <br />
        <br />
    
    
        <input type="submit" name="b1" value="Upload File" />
		<a href="admininbox.php" class="head4">
	  <input name="Submit" type="button" value="Back"></a>
   
   </p>
  </fieldset>
</form>
