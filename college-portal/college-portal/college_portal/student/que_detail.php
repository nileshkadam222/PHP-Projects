<?
	include("./config.php");
	include("./function.php");
	chk_user();
	$id=$_GET['id'];
	$result=mysql_query("select * from questionbank where queid=$id");
	$row=mysql_fetch_array($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>College Portal</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #990000}
.style2 {color: #990000; font-weight: bold; }
-->
</style>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="main">
  <tr>
    <td id="top"><table width="100%" height="32" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="98%"><div align="right">Welcome <strong><? echo $_SESSION['cuser']; ?> - <a href="./logout.php">Logout</a></strong></div></td>
        <td width="2%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td id="head">&nbsp;</td>
  </tr>
  <tr>
    <td id="menu"><? include("menu.php"); ?></td>
  </tr>
  <tr>
    <td id="mid" valign="top"><table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">
          <table width="902" border="0" cellspacing="0" cellpadding="0" style="margin:10px;">
            <tr>
              <td id="profile_top"></td>
            </tr>
            <tr>
              <td id="profile_mid" valign="top"><div align="center">
                  <table width="900" height="353" border="0" align="center" cellpadding="0" cellspacing="0">
            
            <tr>
              <td colspan="3" id="head_txt">Question Detail</td>
            </tr>
            <tr>
              <td colspan="3" id="head_txt3"><hr color="#CCCCCC" size="1px" /></td>
            </tr>
            <tr>
              <td width="375"><div align="right" class="style1"><strong>Question Subject :&nbsp;</strong></div></td>
              <td width="488"><div align="left"><?=$row['quesubject']; ?></div></td>
              <td width="37">&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right" class="style2">Question Text :&nbsp; </div></td>
              <td><div align="left">
                  <?=$row['quetext']; ?>
              </div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right"><strong>Option 1 :&nbsp; </strong></div></td>
              <td><div align="left">
                 <?=$row['queans1']; ?>
              </div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right"><strong>Option 2 :&nbsp; </strong></div></td>
              <td><div align="left">
                 <?=$row['queans2']; ?>
              </div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right"><strong>Option 3 :&nbsp; </strong></div></td>
              <td><div align="left">
                  <?=$row['queans3']; ?>
              </div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right"><strong>Option 4 :&nbsp; </strong></div></td>
              <td><div align="left">
                  <?=$row['queans4']; ?>
              </div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right"><strong>Answer :&nbsp; </strong></div></td>
              <td><div align="left"><?=$row['queansfinal']; ?></div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="37" colspan="3"><div align="center">
                <input type="button" name="button2" id="but_sub" value="BACK" onclick="location.href='./exam.php'" />
              </div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
              </div></td>
            </tr>
            <tr>
              <td id="profile_bot">&nbsp;</td>
            </tr>
            <tr>
              <td valign="top"><div align="center">
                <form action="./que_add_db.php" method="post" name="form1" >
                  <table width="100%" height="353" border="0" align="center" cellpadding="0" cellspacing="0">
                    </table>
                </form>
              </div></td>
            </tr>
          </table>	    
	      
	    </div></td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td><hr color="#FFDCB9" size="1px" width="98%"></td>
  </tr>
    <tr>
    <td id="footer"><? include("./footer.php"); ?></td>
  </tr>
</table>
</body>
</html>
