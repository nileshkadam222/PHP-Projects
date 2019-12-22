<? 
include("../fckeditor/fckeditor.php");
include("../include/config.php");

if($_REQUEST['form_mode']==1)
{
	$sql="SELECT * FROM user 
	WHERE 
		UserId='".trim($_POST["username"])."' and 
		Password='".trim($_POST["password"])."' and 
		Type='Admin' and 
		active='Y'";
	$result=mysql_query($sql);
	if(mysql_num_rows($result) > 0)
	{
	    $row=mysql_fetch_array($result);
 		$_SESSION["sess_id2"]=$row["id"];
		$_SESSION["sess_name2"]=$row["name"];
		header("location:index.php");
	}
	else
	{
		header("location:index.php?loginresult=unauthorise");
		$_SESSION["sess_id2"]=0;
	}
} 
/******************************   Category Page ***********************************/
if($_REQUEST['frmweb_mode']==1)
{
		$insertweb="insert into category(cate_name) values('".$_POST['txtPagename']."')";
		$Insertresultweb=mysql_query($insertweb);
		$path=realpath ("../Photos/")."\\".$_POST['txtPagename'];
		mkdir($path);
		$msg=2;
}
if($_REQUEST['frmweb_mode']==2)
{
		$sqlSe="select * from category where  id=".$_REQUEST['id'];
		$rowSe=mysql_fetch_array(mysql_query($sqlSe));
		$Bpath=realpath("../Photos/")."\\".$rowSe['cate_name'];
		$Cpath=realpath ("../Photos/")."\\".$_REQUEST['txtPagename'];
		rename($Bpath,$Cpath);
		$updateForum="update category set cate_name='".$_REQUEST['txtPagename']."'		
		where id=".$_REQUEST['id'];
		$updateresultForum=mysql_query($updateForum);
		if($updateresultForum==1)
		{
		$msg=1;
		}
		else
		{
		$msg=3;
		}

}
if($_REQUEST['_Pa']=="Delete_cat" and $_REQUEST['id'] !="")
{	
	$sqlSeD="select * from category where  id=".$_REQUEST['id'];
	$rowSeD=mysql_fetch_array(mysql_query($sqlSeD));
	rmdir(realpath ("../Photos/")."\\".$rowSeD['cate_name']);

	$delweb="delete from category where id=".$_REQUEST['id'];
	$redel=mysql_query($delweb);
	$msg=5;
}

/*********************************** End Category Page *****************************/
/******************************   Sub Category Page ***********************************/
if($_REQUEST['frmsub_cat']==1)
{		$sqlSe="select * from category where  id=".$_POST['parentid'];
		$rowSe=mysql_fetch_array(mysql_query($sqlSe));
		$insertweb="insert into sub_category(scate_name,parent_id) values('".$_POST['txtPagename']."','".$_POST['parentid']."')";
		$Insertresultweb=mysql_query($insertweb);
		$path=realpath ("../Photos/".$rowSe['cate_name']."/")."\\".$_POST['txtPagename'];
		mkdir($path);
		$msg=2;
}
if($_REQUEST['frmsub_cat']==2)
{
		$sqlSe="SELECT c. * , s. *
				FROM sub_category s, category c
				WHERE s.parent_id = c.id
				AND s.id = '".$_REQUEST['id']."';";
		$rowSe=mysql_fetch_array(mysql_query($sqlSe));
		
		$Bpath=realpath("../Photos/")."\\".$rowSe['cate_name']."\\".$rowSe['scate_name'];
		$Cpath=realpath ("../Photos/")."\\".$rowSe['cate_name']."\\".$_REQUEST['txtPagename'];
		rename($Bpath,$Cpath);
		$updateForum="update sub_category set scate_name='".$_REQUEST['txtPagename']."' , parent_id='".$_REQUEST['parentid']."'		
		where id=".$_REQUEST['id'];
		$updateresultForum=mysql_query($updateForum);
		if($updateresultForum==1)
		{
		$msg=1;
		}
		else
		{
		$msg=3;
		}

}
if($_REQUEST['_Pa']=="Delete_scat" and $_REQUEST['id'] !="")
{	
	$sqlSeD="SELECT c. * , s. *
				FROM sub_category s, category c
				WHERE s.parent_id = c.id
				AND s.id = '".$_REQUEST['id']."';";
	$rowSeD=mysql_fetch_array(mysql_query($sqlSeD));
	rmdir(realpath ("../Photos/")."\\".$rowSeD['cate_name']."\\".$rowSeD['scate_name']);

	$delweb="delete from sub_category where id=".$_REQUEST['id'];
	$redel=mysql_query($delweb);
	$msg=5;
}

/*********************************** End Sub Category Page *****************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jwellery Shop</title>
<link href="../css/A_Index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<script type="text/javascript" language="javascript">
var xmlHttp
function showSubcategory(urlofsite,str)
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Your browser does not support AJAX!");
  return;
  }
var url=urlofsite;
url=url+"?q="+str;
xmlHttp.onreadystatechange=stateChanged;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}

function stateChanged()
{
if (xmlHttp.readyState==4)
{
document.getElementById("txtHint").innerHTML=xmlHttp.responseText;

//alert(document.getElementById("txtHint").innerHTML);

}
}

function GetXmlHttpObject()
{
var xmlHttp=null;
try
  {
  // Firefox, Opera 8.0+, Safari
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
return xmlHttp;
}

function delete_web()
{
	if(confirm('Are you sure you want to Delete?'))
	{
		return true;
	}
	else
	{
	  	return false;
  	}
 }
function submitForm()
{
	
	document.loginform.form_mode.value = 1;
	document.loginform.submit();
}
function showHighlight(name)
{
	if (name.className != "rowselect")
	{
		name.style.	groundColor = "";
		name.className = 'rowhighlight';
	}
}

function clearHighlight(name, classname, bgcolor)
{
	if (name.className != "rowselect")
	{
		name.style.backgroundColor = bgcolor;
		name.className = classname;
	}
}


</script>
<? if($_SESSION['sess_id2']<=0) { ?>
<form name="loginform" action="index.php" method="POST">
<input type="hidden" name="form_mode" />
<center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table border="0" cellspacing="0" cellpadding="3" >
   <tr>
    <td colspan="2" align="center" valign="top" width="300"><img src="../images/Jwellery_Head.jpg" width="275" height="53" /></td>
  </tr>
   <tr>
    <td colspan="2"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr bgcolor="#E2E1E1">
        <td height="2"><img src="../images/space.gif" width="1" height="1"></td>
      </tr>
      <tr bgcolor="#A9A9A9">
        <td height="3"><img src="../images/space.gif" width="1" height="3"></td>
      </tr>
      <tr>
        <td><table width="100%"  border="0" cellpadding="1" cellspacing="0" bgcolor="#939393">
          <tr>
            <td><table width="100%"  border="0" cellspacing="0" cellpadding="3">
              <tr bgcolor="#F8F8F8">
                <td width="37%" align="left" valign="top"><span class="mediumtext">Username:</span></td>
                <td width="63%" align="left" valign="top"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
                  <input type="text" name="username" id="username" class="logintext" value="" size="25" />
                </font></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td align="left" valign="top"><span class="mediumtext">Password:</span></td>
                <td align="left" valign="top"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
                  <input type="password" name="password" id="password" class="loginpassword" value="" size="25" />
                </font></td>
              </tr>
              <tr align="center" bgcolor="#FFFFFF">
                <td colspan="2"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
                  <input type="submit" class="bluebuttonbig" value="Login" onClick="javascript:submitForm()" /> 
                  </font></td>
              </tr>
              <? if($_REQUEST['loginresult']=="unauthorise") { ?>
              	<tr class="rowerror">
				<td align="center" valign="" colspan="2" width="">Invalid Username or Password
				</td>
				</tr> <? } ?>
                 <? if($_REQUEST['loginresult']=="logout") { ?>
              	<tr class="rowerror">
				<td align="center" valign="" colspan="2" width="">Logged out successfully 
				</td>
				</tr> <? } ?>
							</table></td>
          </tr>
        </table></td>
      </tr>
      <tr bgcolor="#A9A9A9">
        <td height="3"><img src="../images/space.gif" width="1" height="3"></td>
      </tr>
      <tr bgcolor="#E2E1E1">
        <td height="2"><img src="../images/space.gif" width="1" height="2"></td>
      </tr>
    </table></td>
  </tr>
</table>
</center>
</form>
<center>
<span class="smalltext"><font color="#333333">Powered by Jwellery Shop<br/>
Copyright &copy; 2001-2010 Jwellery Shop</font></span><br />
</center>
<? } if($_SESSION['sess_id2']>0) { 

?>

<!--  Main Page -->
  <div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td rowspan="2" width="30%" align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/Jwellery_Head.jpg" border="0"></td>
    <td align="right" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="bottom"><span class="smalltext"><font color="#333333">Logged In: <?=$_SESSION['sess_name2'];?> |</font> <a href="Logout.php" id="blue" title="Logout"><strong>Logout</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></td>
  </tr>
</table></td>
  </tr>
  <tr height="4">
    <td><img src="..//images/space.gif" width="1" height="4"></td>
  </tr>
  <tr height="1">
    <td bgcolor="#C6C3C6"><img src="..//images/space.gif" width="1" height="1"></td>
  </tr>
  <tr height="4">
    <td bgcolor="#F0F0F0"><img src="..//images/space.gif" width="1" height="4"></td>
  </tr>
    <tr>
    <td>
	</td>
  </tr>
 
  <tr height="1">
    <td bgcolor="#C6C3C6" colspan="6" id="popupRef"><img src="..//images/space.gif" width="1" height="1"></td>
  </tr>
   <tr >
    <td valign="top" align="left">
  <table border="0" cellspacing="0" cellpadding="0" width="100%"><tr>
			<td width="145px" valign="top" align="left" bgcolor="#F0EADE" class="staffnavbar">

				<table width="91%"  border="0" cellspacing="0" cellpadding="2">
				  <tr height="1">
					<td><img src="..//images/space.gif" border="0" width="145" height="1"></td>
				  </tr>

								  <tr>
					<td>
					<div class="navsection" id="itemoptionsnav"><div class="navsub">
					<div class="navtitle"><strong><img src="../images/doublearrows.gif" /> Site Editing</strong></div>
  <table width="100%"  border="0" cellspacing="0" cellpadding="2">
										  <tr class="smalltext" onMouseOver="this.className='hlrow';" onMouseOut="this.className='smalltext';" style="CURSOR: pointer;" id="itemoption0" onClick="javascript:window.location.href='index.php?_Pt=Home';" >
						<td width="1"><img src="../images/icon_newsitem.gif" /></td>
						<td>Home</td>
      </tr>
					  					  <tr class="smalltext" onMouseOver="this.className='hlrow';" onMouseOut="this.className='smalltext';" style="CURSOR: pointer;" id="itemoption1" onClick="javascript:window.location.href='index.php?_Pt=Category';">
						<td width="1"><img src="../images/icon_topicdraft.gif" /></td>
						<td>Category</td>
					    </tr>
					  					  <tr class="smalltext" onMouseOver="this.className='hlrow';" onMouseOut="this.className='smalltext';" style="CURSOR: pointer;" id="itemoption2" onClick="javascript:window.location.href='index.php?_Pt=Sub Category';">
						<td width="1"><img src="../images/icon_alertrules.gif" /></td>
						<td>Sub Category</td>
					    </tr>
					  					  <tr class="smalltext" onMouseOver="this.className='hlrow';" onMouseOut="this.className='smalltext';" style="CURSOR: pointer;" id="itemoption3" onClick="javascript:window.location.href='index.php?_Pt=Product';">
						<td width="1"><img src="../images/icon_public.gif" /></td>
						<td>Product</td>
					    </tr>
					  					  <tr class="smalltext" onMouseOver="this.className='hlrow';" onMouseOut="this.className='smalltext';" style="CURSOR: pointer;" id="itemoption4" onClick="javascript:window.location.href='index.php?_Pt=About';">
						<td width="1"><img src="../images/icon_topicprivate.gif" /></td>
						<td>About Us</td>
					    </tr>
					  					  <tr class="smalltext" onMouseOver="this.className='hlrow';" onMouseOut="this.className='smalltext';" style="CURSOR: pointer;" id="itemoption6" onClick="javascript:window.location.href='index.php?_Pt=Contact';">
					  					    <td width="1"><img src="../images/icon_newsitem.gif" /></td>
					  					    <td>Contact Us</td>
  					    </tr>
					  					  <tr class="smalltext" onMouseOver="this.className='hlrow';" onMouseOut="this.className='smalltext';" style="CURSOR: pointer;" id="itemoption7" onClick="javascript:window.location.href='index.php?_Pt=User';">
						<td width="1"><img src="..//images/icon_user.gif"></td>
						<td> User</td>
					    </tr>
  					  </table></div>
					</div>
					</td>
				  </tr>
				  				  							  												  <tr>
					<td><div class="navsection" id="itemoptionsnav2">
					  <div class="navsub">
					    <div class="navtitle"><strong><img src="../images/doublearrows.gif" /> Admin Editing</strong></div>
					    <table width="100%"  border="0" cellspacing="0" cellpadding="2">
					      <tr class="smalltext" onmouseover="this.className='hlrow';" onmouseout="this.className='smalltext';" style="CURSOR: pointer;" id="itemoption15" onclick="javascript:window.location.href='index.php?_Pt=Admin User';">
					        <td width="1"><img src="../images/icon_Staff.gif" /></td>
					        <td>Admin User</td>
				          </tr>
					      <tr class="smalltext" onmouseover="this.className='hlrow';" onmouseout="this.className='smalltext';" style="CURSOR: pointer;" onclick="javascript:window.location.href='index.php?_m=core&amp;_a=insertuser';">
					        <td>&nbsp;</td>
					        <td>&nbsp;</td>
				          </tr>
				        </table>
				      </div>
					  </div></td>
				  </tr>
				  								  				  <tr>
					<td>&nbsp;</td>
				  </tr>
				  
				</table>

			</td>
			<td width="1" valign="top" align="left" bgcolor="#CDCDCD"><img src="..//images/space.gif" width="1" height="1"></td>
			<td width="8" valign="top" align="left"><img src="..//images/space.gif" width="8" height="1"></td>
			<td valign="top" align="left" width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
			    <td align="left" valign="top"><div class="dashboardtitle"><?=$_REQUEST['_Pt'];?>&nbsp;</div>
			      <table cellspacing="0" cellpadding="0" border="0" width="100%" id="caltableopt">
			        <tr style="height: 1em;">
			          <td align="left"><div id="tab_main" style="DISPLAY: block;" class="tabcontent">
			            <table width="100%" border="0" cellpadding="4" cellspacing="0" class="dashborder">
			              <tr style="height: 1em">
			                <td width="100%" align="left" valign="top"><table cellspacing="0" cellpadding="2" height="400" border="0" class="dashcontent">
			                  <tr>
			                    <td align="left" valign="top">
     	 <!---------------------- Detail -------------->
            <? if($_REQUEST['_Pt']=="Home" || $_REQUEST['_Pt']=="About" || $_REQUEST['_Pt']=="Contact")  {  
				include("home.php");
			}
			else if($_REQUEST['_Pt']=="Category")  { include("Category.php");  }
			else if($_REQUEST['_Pt']=="Sub Category")  { include("sub_category.php");  }
			else if($_REQUEST['_Pt']=="Product")  { include("product.php");  }
			else if($_REQUEST['_Pt']=="User")  { include("user.php");  }
			else if($_REQUEST['_Pt']=="Success")  {?>
            <table border="0" width="100%">
				 <tr class="infomsg" height="22">
           <td colspan="2" class="smalltext"><img src="../images/icon_info.gif" width="16" height="16" align="absmiddle" />&nbsp;&nbsp;<strong><font color="#999999">Successfully Save Page</font></strong></td>
           </tr>
           </table>
				<?
				}
			else { }
			?>
         <!-------------------End Detail--------------->
                                  
                                  
                                  </td>
			                    </tr>
			                  </table></td>
			                </tr>
			              </table>
			            </div></td>
		            </tr>
			        <tr style="height: 1em">
			          <td align="left">&nbsp;</td>
		            </tr>
		          </table></td>
			    <td align="right" valign="top" width="5"><img src="..//images/space.gif" border="0" width="5" height="5" /></td>
		      </tr>
	      </table></td>
			<td width="8" valign="top" align="left"><img src="..//images/space.gif" width="8" height="1"></td>
		</tr></table>
	</td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="5" bgcolor="#E1E1E1"><img src="..//images/space.gif" width="1" height="5"></td>
      </tr>
      <tr>
        <td height="8" bgcolor="#707070"><table width="100%"  border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td align="left" valign="middle"><span class="smalltext">&nbsp;<a href="index.php" id="lightgray">Home</a></span>
						</td>
            <td align="right"><span class="smalltext"><font color="#EFEFEF">Copyright &copy; 2001-2009 Jwellery Shop.</font></span></td>
            <td width="1" align="right"><img src="..//images/space.gif" width="1" height="15"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="2" bgcolor="#4E4E4E"><img src="..//images/space.gif" width="1" height="2"></td>
      </tr>
    </table></td>
  </tr>
</table>
</center>
<? } ?>
</body>
</html>