<?php
session_start();
if(isSet($_SESSION['user']))
{
	include "header1.php";
}
else
{
	include "header.php";
}
?>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<div id="product">
<table align="center" border=1 width=100% bordercolordark="#CC0099">
<tr align=center>
<td><img src="/fairyboutique/all/bollywood1.jpg" height=250 width=200>
<td><img src="/fairyboutique/all/wedding.jpg" height=250 width=200>
<td><img src="/fairyboutique/all/fancy.jpg" height=250 width=200>

<tr align=center>
<td><a href="/fairyboutique/bollywood.php">Bollywood Sari</a>
<td><a href="/fairyboutique/wedding.php">Wedding sari</a>
<td><a href="/fairyboutique/fancy.php">Fancy sari</a>
</tr>

<tr align=center>
<td><img src="/fairyboutique/all/Designer.jpg" height=250 width=200>
<td><img src="/fairyboutique/all/traditional.jpg" height=250 width=200>
<td><img src="/fairyboutique/all/silk.jpg" height=250 width=200>

<tr align=center>
<td><a href="/fairyboutique/designer.php">Designer Sari</a>
<td><a href="/fairyboutique/traditional.php">Traditional Sari</a>
<td><a href="/fairyboutique/silk.php">Silk Sari</a>
</tr>

<tr align=center>
<td><img src="/fairyboutique/all/dress.jpg" height=250 width=200>
<td><img src="/fairyboutique/all/choli.jpg" height=250 width=200>
<td><img src="/fairyboutique/all/jewelary.jpg" height=200 width=200>

<tr align=center>
<td><a href="/fairyboutique/dress.php">Dress</a>
<td><a href="/fairyboutique/choli.php">Choli</a>
<td><a href="/fairyboutique/jewelary.php">Jewelary</a>
</tr>
</table>
</div>
<marquee>
<font face="Arial" color="#336633" size="+1">Created By :- </font>
<font face="Monotype Corsiva" color="#FF6600" size="+2"> Vidhi,Dhruvi
</marquee>
<br>
</div>
<?php
include "footer.php"?>