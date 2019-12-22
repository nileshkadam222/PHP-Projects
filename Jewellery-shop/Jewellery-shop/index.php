<? 
include("fckeditor/fckeditor.php");;
?>
<?php 
	include("include/config.php");
	if($_REQUEST['form_mode']==1)
	{
		$sql="SELECT * FROM user WHERE UserId='".trim($_REQUEST["username"])."'and Password='".trim($_REQUEST["password"])."'";
		$result=mysql_query($sql);
		if(mysql_num_rows($result) > 0)
		{
		    $row=mysql_fetch_array($result);
	 		if ($row["active"]=="Y")
			{
			$_SESSION["id"]=$row["id"];
			$_SESSION["name"]=$row["name"];
			$f="?";
			if($_REQUEST['Ptype']!="")
				$f.="Ptype=".$_REQUEST['Ptype']."&";
			if($_REQUEST['cat']!="")
				$f.="cat=".$_REQUEST['cat']."&";
			if($_REQUEST['scat']!="")
				$f.="scat=".$_REQUEST['scat'];
			header("location:index.php".$f);
			}
			else
			{
			$_SESSION["id"]=0;
			$_SESSION["name"]="";
			header("location:index.php?Ptype=login&loginresult=unauthorise");
			}
		}
		else
	    {
			$_SESSION["id"]=0;
		    $_SESSION["name"]="";
		    header("location:index.php?Ptype=login&loginresult=unauthorise");

		}
	}
?>
<html dir="ltr">
<head>
	<title>Jwellery Shop</title>
	<link href="css/index.css" rel="stylesheet" type="text/css">
    <link href="css/menu.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
    function log_out()
	{
		 ht = document.getElementsByTagName("body");
		 ht[0].style.filter = "progid:DXImageTransform.Microsoft.BasicImage(grayscale=1)";
		 if(confirm('Are you sure you want to log out?'))
		 {
		 	return true;
  		}
	    else
		{
		  ht[0].style.filter = "";
		  return false;
		  }
	}
	function SubmitSearch()
	{
	
	document.search_jwel.submit();
	}
	</script>
</head>
<body>
<center>
<table width="80%" cellpadding="0" cellspacing="0">
	<tr>
	   	<td bgcolor="#000066" colspan="2" height="145" background="images/head.gif" align="center"><font color="#FFFFFF"
        face="MS Serif, New York, serif","Verdana, Geneva, sans-serif","Courier New, Courier, monospace" size="+6"
        style="font-style:italic; font-family:">
        Jweller Shop </font></td>
	</tr>
    <tr>
    	<td colspan="2">
        <div id="menu">
    <ul class="menu">
    	    <li><a	><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </span></a></li>
            <li><a href="index.php?Ptype=home" class="parent"><span>Home</span></a></li>
            <li><a href="index.php?Ptype=about"><span>About Us</span></a> </li>
            <li><a href="index.php?Ptype=login"><span>Login</span></a></li>
            <li class="last"><a href="index.php?Ptype=contact"><span>Contacts
              Us</span></a></li>
    </ul>
</div>

        </td>
    </tr>
    <tr>
		<td width="196px" valign="top"<?php include("slidebar.php");?></td>
		<td valign="top" width="100%">
	        <table border="0" width="100%" >
            <tr><td >
	            <table width="100%" border="0" cellspacing="0" cellpadding="0" height="30" >
				<tr>
			    <td width="50%" bgcolor="#9999FF" ><?php if($_SESSION['id']>0)
				{
					?> <a href='index.php?Ptype=viewcart'><font face="Verdana, Geneva, sans-serif" color="#FFCC00" size="2" style="padding-left:20px; font-weight:bold;" >View Cart</font></a> <?php
				}
								?></td>
		    	<td width="50%" bgcolor="#9999FF" valign="middle"><p><font color="#FFFFFF">
              <?php $h="";
				if($_REQUEST['cat']!="") $h.="&cat=".$_REQUEST['cat']."";
				if($_REQUEST['scat']!="") $h.="&scat=".$_REQUEST['scat'];
				?>
	            <a href="index.php?Ptype=login<?php echo $h; ?>" style="color: #FFFF99; font-size:12px; font-family:Verdana, Geneva, sans-serif;" >Logged In</a>:<font style="color: #FFF; font-size:12px; font-family:Verdana, Geneva, sans-serif">
				<?php if($_SESSION['name']!="") echo $_SESSION['name']; else echo " Guest"; ?></font><strong>&nbsp;&nbsp;l&nbsp;</strong></font><?php $g="?"; if($_REQUEST['Ptype']!="") $g.="Ptype=".$_REQUEST['Ptype']."&";
				if($_REQUEST['cat']!="") $g.="cat=".$_REQUEST['cat']."&";
				if($_REQUEST['scat']!="") $g.="scat=".$_REQUEST['scat'];
				?>
				<a href="logout.php<?php echo $g; ?>" title="logout" style="color: #FFFF99; font-size:12px; font-family:Verdana, Geneva, sans-serif" onClick="return log_out()"><strong>Logout</strong>
            	</a></p></td>
			  	</tr>
				</table>
			</td></tr>
            <?php if($_REQUEST['buy']=="y")
			{ ?>
            <tr><td class="infomsg" height="20px">
            <img src="images/icon_info.gif" align="left" />&nbsp;Successfully Insert Item Into Cart
            </td></tr> <? } ?>
    	    <tr>
        	<td valign="top">

	        <?
			if($_REQUEST['Ptype']!="login")
			{
			$result=mysql_query("select * from jewellery where category=".$_REQUEST['scat']);
			$i=0;
			while($row1=mysql_fetch_array($result))
			{

			?>
			  <DIV style="WIDTH: 250px; FLOAT:left;COLOR: #464646;
            BORDER-BOTTOM: #e5e5e5 1px solid; POSITION: relative; BORDER-LEFT:#e5e5e5 1px solid; MARGIN: 20px 0px 0px 15px;BORDER-TOP: #e5e5e5 1px solid; BORDER-RIGHT: #e5e5e5 1px solid; height:140px">
                <img class="left" src="./<?php if (file_exists("photos/".$row1["path"])) echo "photos/".$row1["path"]; else echo "images/nophoto.gif"; ?>" height="110" width="95" align="top"/>
                <P><B>Price:</B> <B><?php echo $row1['price']; ?></B>.</P>
                <P><B>Description:</B><?php echo $row1['desc']; ?></P>
                <P><B>Availability:</B> Usually ships within 24 hours</P>
                <P align="center"><A href="buy.php?cat=<?php echo $_REQUEST['cat']."&amp;scat=".$_REQUEST['scat']."&amp;id=".$row1["id"]; ?>" ><font color="#FF9966">BUY
                  <B>NOW</B></font></A></P>
              </DIV>
              <!-- end .leftbox -->

			<?			} }
		?>
		<?php if($_REQUEST['scat']=="")
		{
			$site=$_REQUEST['Ptype'];
			if($site=="")
			$site="home";
			include($site.".php");

		}
		else
		{
			if($_REQUEST['Ptype']=="login")
			include("login.php");
		}
		?>
    	</td>
        	</tr>
	        </table>
    	    <br/><br/>
	        </td>
    </tr>
    <tr>
    	<td colspan="2" bgcolor="#999999" background="images/dt_bg.gif" height="25px">
        <font color="#FFFFFF" style="margin-left:20px; float:left"><B>Home</B></font>
        <font color="#FFFFFF" style="margin-right:50px; float:right;"><B>Copyright Support@Jwellery.com </B></font></td>
    </tr>
</table>
</center>
<br/>
<br/>
<br/>
<br/>
</body>
</html>