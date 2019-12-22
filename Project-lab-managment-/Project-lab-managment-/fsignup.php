<?php
include("connect.php");
?>
<?php
if(isset($_POST['Submit']))
{
$m="active.jpg";

$target ="upload/";
$doj=date('y-m-d');
if(!is_dir("upload"))
{
mkdir("upload",0777);
}
$target_path=$target . basename(@$_FILES['uploadfile']['name']);


move_uploaded_file($_FILES['uploadfile']['tmp_name'], $target_path);
mysql_query("insert into employee set name='".$_POST['n']."',
fname='".$_POST['fn']."',
usernme='".$_POST['un']."',
password='".$_POST['pw']."',
email='".$_POST['ei']."',
sex='".$_POST['RadioGroup1']."',
tempadd='".$_POST['tmpa']."',
padd='".$_POST['pera']."',
post='".$_POST['po']."',
mno='".$_POST['mobn']."',
image='".$target_path."',
jdate='".$doj."'
");
$a=mysql_insert_id();
if($a!=="0")
{
$b="successfully submitted";
}
header("location:index.php");
exit();
}

?>






<html>
<head>
<title>Lab Managment</title>
</head>
<body>
<center><table border="1" width="75%" cellpadding="1" cellspacing="1">
<tr>
<td><center><table border="1" width="100%" height="100%" cellpadding="0" cellspacing="0">
<tr>
<td><div><img src="images/as.jpg" width="1330" height="200" /></div></td></tr>

	<form action="?" method="post" name="frm_kreg" id="frm_kreg">
<table width="38%" border="0" height="30px;" align="center">

  	<tr>
    <td colspan="2" align="center" class="head4" ><span class="head1">Faculty Registration Enter Here &nbsp;&nbsp;</span></td>
    </tr>
  		<tr>
    	<td width="35%" align="left" class="head4">Name</td>
    	<td width="34%" align="left" class="bottomlink"><label>
      	<input type="text" name="n" onBlur="return validate_alpha(this);">
      	*
      		<div id="err_n" ></div>
    		</label></td>
  		</tr>
   			<tr>
    		<td align="left" class="head4">Father's Name </td>
    		<td align="left"><label>
      		<input type="text" name="fn"  onblur="return validate_alpha(this);">*<div id="err_fn" ></div>
    		</label></td>
  			</tr>
  				<tr>
    			<td align="left" class="head4">Username</td>
    			<td align="left"><label>
      			<input type="text" name="un"  onblur="return validate_alpha(this);">*<div id="err_un" ></div>
     			</label></td>
  				</tr>
  
  				<tr>
    			<td align="left" class="head4">Password</td>
    			<td align="left" class="bottomlink"><label>
      			<input type="password" name="pw">
    			*</label></td>
  				</tr>
  
  <tr>
    <td align="left" class="head4">Email Id </td>
    <td align="left" class="bottomlink"><label>
      <input name="ei" type="text"  />
    </label></td>
  </tr>
  
  <tr>
    <td align="left" class="head4">Sex</td>
    <td align="left">
      <label>
        <input type="radio" name="RadioGroup1" value="M" checked="checked">
        <span class="head4">Male</span></label>
      <label>
        <input type="radio" name="RadioGroup1" value="F">
        <span class="head4">Female</span></label>
      <span class="lefthead">
      <label></label>
      </span>
      <label></label></td>
  </tr>
  
    <tr>
    <td align="left" class="head4">Temporary Address </td>
    <td align="left" class="bottomlink"><label>
      <textarea name="tmpa"></textarea>
    </label></td>
  </tr>
  <tr>
    <td align="left" class="head4">Permanent Address </td>
    <td align="left" class="bottomlink"><label>
      <textarea name="pera"></textarea>
    </label></td>
  </tr>
   <tr>
    <td align="left" class="head4">Join Date</td>
    <td align="left" class="bottomlink"><label>
      <input name="doj" type="text"  onblur="return validate_alpha(this);">*<div id="err_po" ></div>
    </label>      </td>
  </tr>
  
   <tr>
    <td align="left" class="head4">Post</td>
    <td align="left" class="bottomlink"><label>
      <input name="po" type="text"  onblur="return validate_alpha(this);">*<div id="err_po" ></div>
    </label>      </td>
  </tr>
   <tr>
    <td align="left" class="head4">Image Upload </td>
    <td align="left" class="bottomlink"><input type="file" name="uploadfile" />*</td>
  </tr>
  <tr>
    <td align="left" class="head4">Mobile No </td>
    <td align="left" class="bottomlink"><label>
      <input type="text" name="mobn" onBlur=" return validate_num(this);" ><div id="err_mobn" ></div>
    </label></td>
  <tr>
    <td colspan="2" align="center"><label>
      <input name="Submit" type="submit" value="Submit">
	  <a href="index.php" class="head4">
	  <input name="Submit" type="button" value="Back"></a>
    </label>
	</td>
    </tr>
</table>
</form>

</table>
</center>
</td>
</tr>
</table>
</body>
</head>
</html>

	
<div id="layer05_holder">
  <div align="center">Copyright © 2013-14(CLMS)</div>
</div>
</div>
</td></tr></table></td>
	</tr>
</div>
