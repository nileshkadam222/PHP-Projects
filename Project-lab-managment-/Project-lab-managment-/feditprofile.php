<?php



if(isset($_POST["b6"]))
{
mysql_query("UPDATE employee SET usernme='$_POST[un]',password='$_POST[pw]'
WHERE id= '$_SESSION[id]'");

mysql_query("UPDATE profile SET employee ='name='$_POST[n]','usernme='$_POST[un]'
WHERE usernme='$_SESSION[un]'");
$updrec = "Record Updated Successfully"; 
}
$conrec = mysql_query("SELECT * FROM aitajmer");
?>
<script language="javascript">

 function edt()
{
	
	if(document.edit.fname.value=="")
	{
		alert("Please enter first name");
		document.edit.fname.focus();
		document.edit.fname.select();
		return false;
	}
	else if(document.edit.lname.value=="")
	{
		alert("Please enter last name");
		document.edit.lname.focus();
		document.edit.lname.select();
		return false;
	}
	else if(document.edit.img.value=="")
	{
		alert("Please insert image");
		document.edit.img.focus();
		document.edit.img.select();
		return false;
	}
		
	else
		{
		return true;
		}	
}
	</script>


<center>

    <tr>
      <th colspan="2" scope="row"><p>Update Profile</p>
      <p>&nbsp;</p></th>
      </tr>
    
    <tr>
      <th scope="row"><p>&nbsp;</p>
      <p>Name</th>
      <td><input name="fname" type="text" id="fname" size="40" value="<?php echo $name ;?>"/>
      </p>
      <p>&nbsp;</p></td>
      </tr>
    <tr>
      <th scope="row">User Name</th>
      <td><input name="lname" type="text" id="lname" size="40" value="<?php echo $fanme;?>"/></td>
      </tr>
    <tr>
	<p>
      <th scope="row">Gender</th>
      <td><?php echo $RadioGroup1 ;?></td>
      </tr></p>
	  
     </table>
   

</div>
<center>