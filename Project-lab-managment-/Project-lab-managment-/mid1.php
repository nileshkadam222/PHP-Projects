<?php
ob_start();

include("connect.php");
?>

<?php


if(@isset($_GET['todo'])&&@$_POST['h1']!=="login")
{
$mm="Login Again";
@$qwe=$_GET['a'];
}
if(isset($_POST['h1'])&&$_POST['h1']=="login")
{ 
$q = mysql_query("select * from employee where usernme ='".$_POST['un']."' and  password ='".$_POST['up']."' ");  
	$num = mysql_num_rows($q);
	if($num>0)
		{ 
			$row = mysql_fetch_array($q);
			 $_SESSION['sid'] = $row['id'];
			 $_SESSION['sname'] = $row['usernme'];
			 $_SESSION['reset']=$row;
			 $m=$row['status'];
			 if($m=="active.jpg")
{
			header("location:home.php");
			exit();
}else
{
$msg4="Account Deactivated";
}

		}

		if(empty($_POST['un'])&&!empty($_POST['up']))
		{
		$msg1="Plz fill user name";
		}
		if(empty($_POST['up'])&&!empty($_POST['un']))
		{
		$msg2="Plz fill password";
		}
		if(empty($_POST['un'])&&empty($_POST['up']))
		{
		$msg3="Plz Fill Both Field";
		}
		if(!empty($_POST['un'])&&!empty($_POST['up']))
		{
			if($num==0)
			{
				$msg="Plz Fill Fields Correctly";
				
			}
		}
}
	if(isset($_GET['todo'])&&$_GET['todo']=="logout")
		{
			session_unset();
		}
?>
<link href="css/style.css" rel="stylesheet" type="text/css" />





<form action="" method="post">
<div id="content">
  <h2>&nbsp;</h2>
	
	<table width="100%" border="0"  cellpadding="0" cellspacing="0">
	<tr>
    <td colspan="2" align="center"><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGIN FACULTY</h1>
    
    
    </td>
    
  <tr></tr>
  <tr></tr>
  <tr></tr>
  <tr></tr>
  <tr>
    <td colspan="2" align="center" class="bottomlinksred">
	<?php echo @$msg3;?> <?php echo @$msg2;?> <?php echo @$msg1;?> <?php echo @$msg;?> <?php echo @$msg4;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$qwe; ?></td>
    </tr>
  
  <tr>
    <td colspan="2" align="center"><div align="center"><span class="head4">&nbsp;User Name</span>&nbsp;&nbsp;&nbsp;
      <input name="un" type="text" class="sublink" />
    </td>
    </tr>
  <tr>
    <td width="16%" align="right" class="sublink">&nbsp;</td>
    <td width="84%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><span class="head4">Password</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input name="up" type="password" class="sublink" />
    </td>
    </tr>
  <tr>
    <td align="right" class="sublink">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      &nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;
      <input name="Submit" type="image" src="images/enter.jpg" value="submit"/>
      <input type="hidden" name="h1" value="login" />
    </td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="lefthead"><center>
      <span class="head4">New Employee</span><a href="fsignup.php"> Click Here </a>
    </center></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
			
  
&nbsp;</div>
</form>
