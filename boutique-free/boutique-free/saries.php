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
</table>
</div>
</div>
<?php
include "footer.php";
?>