<html>

<head>

<link rel=STYLESHEET href="style1.css" type="text/css">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Music Store</title>

<meta name="Title" content="Music Store">
<meta name="Description" content="Music Store, powered by Shop-Script">
<meta name="KeyWords" content="Music Store, powered by Shop-Script">

<script>
<!--

	function open_window(link,w,h) //opens new window
	{
		var win = "width="+w+",height="+h+",menubar=no,location=no,resizable=yes,scrollbars=yes";
		newWin = window.open(link,'newWin',win);
		newWin.focus();
	}

	function confirmDelete() //unsubscription confirmation
	{
		temp = window.confirm('');
		if (temp) //delete
		{
			window.location="index.php?killuser=yes";
		}
	}

	function validate_custinfo() //validate customer information
	{
		if (document.custinfo_form.first_name.value=="" || document.custinfo_form.last_name.value=="")
		{
			alert("Please input your name");
			return false;
		}
		if (document.custinfo_form.email.value=="")
		{
			alert("Please input your email address");
			return false;
		}
		if (document.custinfo_form.country.value=="")
		{
			alert("Please input country");
			return false;
		}
		if (document.custinfo_form.state.value=="")
		{
			alert("Please input state");
			return false;
		}
		if (document.custinfo_form.zip.value=="")
		{
			alert("Please input ZIP");
			return false;
		}
		if (document.custinfo_form.city.value=="")
		{
			alert("Please input city");
			return false;
		}


		return true;
	}

-->
</script>

</head>
<body marginwidth="0" marginheight="0" leftmargin="0" topmargin="0">

<script type="text/javascript" src="images/niftycube.js"></script>

<center>
<table width="780" border="0" cellspacing="0" cellpadding="0">
 <tr>
    <td bgcolor="white"><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
		<a href="index.php"><img src="images/companyname.gif" border="0" alt="Music Store"></a>

    </tr>
    <tr>
    <td valign="middle" width="220">

	</td>
	<td valign="bottom" width="380">
				<table id="tabnav" border="0" cellspacing="0" cellpadding="0">
					<tr valign="top"> 
					  <td><div  class="topmenu_notselected"><a href="index.php" class="menu">Home</a></div></td>
					  <td>&nbsp;</td>
					  <td><div  class="topmenu_notselected"><a href="index.php?show_price=yes" class="menu">Price list</a></div></td>
					  <td>&nbsp;</td>
					  <td><div  class="topmenu_notselected"><a href="index.php?aux_page=aux1" class="menu"><nobr>About us</nobr></a></div></td>
					  <td>&nbsp;</td>
					  <td><div  class="topmenu_notselected"><a href="index.php?aux_page=aux2" class="menu">Shipping and delivery</a></div></td>
					</tr>
				</table>
	</td>
    <td valign="middle" align="right" style="background: #ffffff  background-position: right; height:70px; width:170px;">

				  

                  
<table cellspacing=0 cellpadding=1 border=0>

<form action="index.php" method=get>

<tr>
<td><input type="text" name="searchstring" size="15" style="color:#3E578F;" value="Search products" onclick="this.value='';this.style.color='#000000';"></td>
<td><nobr>&nbsp;<input type="image" border=0 src="images/search.gif">&nbsp;&nbsp;&nbsp;</nobr></td>
</tr>

</form>
</table>
                  <a href="index.php?search_with_change_category_ability=yes" class="lightsmall"></a>
	</td>
  </tr>
  <tr>
	<td bgcolor="white" height="6" align="right"></td>
	<td bgcolor="#808080" colspan="2" height="6"></td>
  </tr>
  <tr> 
    <td width="220" valign="top" align="right">
	 <table cellspacing="0" cellpadding="0" border="0"><tr><td style="background: white url(images/gradientbg2.gif) repeat-y; background-position: right;width:220px;height:100%;">

		<p style="padding:10px;">
        
		<table width="200" border="0" align="right" cellpadding="0" cellspacing="0">
		            <tr> 
            <td align="left" valign="top" bgcolor="#808080" class="topcorners">
				<div style="padding:5px;font-size:130%;">
					<a href="index.php?shopping_cart=yes" class="menu">My shopping cart</a>
				</div>
			</td>
		  </tr>
		  <tr>  
            <td style="background: #A6A6A6; background-position: right; padding: 10px;" class="bottomcorners"> 
                            
<table cellpadding="0" cellspacing="0">
 <form name="shopping_cart_form">
 <tr><td>

 	<input class=cart type=text name=gc value="(no items)" readonly><br>
	<input type=text class=cart name=ca value="" readonly>
 
	<nobr><a href="index.php?shopping_cart=yes">Proceed to checkout</a></nobr>

 </td></tr>
 </form>
</table>            </td>
          </tr>
		  <tr>
			<td>&nbsp;</td>
		  </tr>
		            <tr> 
            <td align="left" valign="top" bgcolor="#808080" class="topcorners">
				<div style="padding:5px;font-size:130%;">
					<a href="index.php#catalog" class="menu">Catalog</a>
				</div>
			</td>
          </tr>
          <tr> 
                  <td align="left" valign="top" style="background: #A6A6A6; background-position: right; padding: 10px;" class="bottomcorners"> 
                          

  
  		<a href="index.php?categoryID=84" >DJ Kits</a><br>

  
  
  		<a href="index.php?categoryID=82" >DJ Lights</a><br>

  
  
  		<a href="index.php?categoryID=79" >Drums</a><br>

  
  
  		<a href="index.php?categoryID=85" >Electronics</a><br>

  
  
  		<a href="index.php?categoryID=78" >Guitars</a><br>

  
  
  		<a href="index.php?categoryID=83" >Keyboards</a><br>

  
  
  		<a href="index.php?categoryID=80" >Pianos</a><br>

  
  
  		<a href="index.php?categoryID=81" >Synthesizers</a><br>

                    </td>
          </tr>

		

        </table>
		</p>

		</td></tr>
		<tr><td align="right"><img src="images/gradientbg3.gif" border="0" width="200" height="121"></td></tr>
		</table>
      </td>
      <td width="100%" align="left" valign="top" style="padding:10px;" colspan="2">

            
<h1>Terms & Conditions</h1>
<p>1. The User certifies that he/she is at least 18 (eighteen) years of age or has the consent of a parent or legal guardian.</p>

<p>2. These terms and conditions supersede all previous representations, understandings, or agreements and shall prevail notwithstanding any variance with any other terms of any order submitted. By using the Shopping services of MusicStore you agree to be bound by the Terms and Conditions.</p>



<p>3. All prices, unless indicated otherwise are in Australlian Dollar.</p>



<p>4.By indicating User’s acceptance to purchase any product or service offered on the site, user is obligated to complete such transactions. Users shall prohibit from indicating its acceptance to purchase products and services where it does not intend to complete such transactions.</p>



<p>5.You are advised to independently verify the bona fides of any particular User that you choose to deal with on the Website and use your best judgement in that behalf. MusicStore, accepts no liability for any errors or omissions, whether on behalf of itself or its Sellers or third parties.</p>
<p>&nbsp;</p>

  <tr>
	<td>&nbsp;</td>
	<td colspan="2" align="center">

				<hr width="300" align="center" size="1" style="margin-top:0px;">

				<p class="small" align="center" style="margin-top:-5px;"><i>Copyright &copy; <a href=""> <u>Music Store</u></a>. All rights reserved.</i><br>
                <a href="contactus.php">Contact Us</a> | <a href="privacy.php">Priivacy Policy</a> | <a href="tc.php">Terms & Conditions</a></p>

				  
	</td>
  </tr>
  </table></td>
 </tr>
</table>

<!--
	following javascript code creates rounded corners for top menu, shopping cart and categories section
	using Nifty library (http://www.html.it/articoli/niftycube/index.html)
-->
<script type="text/javascript">

	if ( ! (navigator.userAgent.indexOf('Opera') != -1) )
	{
		Nifty("div.topmenu_notselected,div.topmenu_selected","top transparent");

		Nifty("td.topcorners","tl transparent");
		var tt_layers= getElementsBySelector("td.topcorners");
		for(var k=0, len=tt_layers.length; k<len; k++)
		{
			tt_layers[k].parentNode.style.backgroundColor = "#808080";
		}
		Nifty("td.topcorners","tr transparent");
		
		Nifty("td.bottomcorners","bl transparent");
		var tt_layers= getElementsBySelector("td.bottomcorners");
		for(var k=0, len=tt_layers.length; k<len; k++)
		{
			tt_layers[k].parentNode.style.backgroundColor = "#808080";
		}
		Nifty("td.bottomcorners","br transparent");
	}

</script>
<!--
	end of Nifty code
-->

</body>
</html>