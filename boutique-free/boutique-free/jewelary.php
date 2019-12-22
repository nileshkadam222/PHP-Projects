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
$link=mysql_connect("localhost","root","") or exit("Not connect");
$db=mysql_select_db("boutique") or exit ("Not found");
$q=mysql_query("select * from item_detail where description='Jewelry'");
$nro=mysql_num_rows($q);
$pg=$HTTP_GET_VARS['id'];
$f=0;
$cnt=1;
$l=0;
$num=4;
$no=0;
echo "<div id='image'>";
echo "<a href='jewelary.php'> <br>* Jewelry...</a>";
echo "</div>";

echo "<div id='pageno'><br><br>Page  : ";
$pages=$nro/4;
for($k=1; $k<$pages+1; $k++)
echo "         <a href='Jewelary.php?id=$k'>$k</a>";
echo "</div>";

echo "<table align='center' border=1 width=100% bordercolordark='#CC0099'>";
$no=0;
while($d=mysql_fetch_array($q))
{
	$l=$l+1;
	if(!isSet($pg) || $pg==1)
		if($l<=$num)
		{
		if($no==0)
		{	echo "<tr align=center>";	}
		echo "<td>";
		echo "<form name='f1' action='addtocart.php' method='get'>";
		echo "<input type='hidden' value='$d[1]' name='id'>";
		echo "<br><b>Item Code : </b>$d[1]<br>";
		echo "<img src='$d[3]' height=200 width=200><br>";
		echo "<b>Fairy Boutique Price :<br>";
		echo "Rs.  <font color=#CC0000 size=3>$d[5] - </font>";
		echo "  Qty : <input type='text' name='qty'  size=6 onkeypress='onlynum(event)'><br>";
		echo "<div id='buynow1'><input type='image' src='images/buynow.jpg' class='button' /></div>";
		echo "</form>";
		$no=$no+1;
		if($no==2) $no=0;
		echo "</tr>";
		}
	if($pg==$cnt)
	{
		if($l>$num && $l<=($num*$cnt))
		{
		if($no==0)
		{	echo "<tr align=center>";	}
		echo "<td>";
		echo "<form name='f1' action='addtocart.php' method='get'>";
		echo "<input type='hidden' value='$d[1]' name='id'>";
		echo "<br><b>Item Code : </b>$d[1]<br>";
		echo "<img src='$d[3]' height=200 width=200><br>";
		echo "<b>Fairy Boutique Price :<br>";
		echo "Rs.  <font color=#CC0000 size=3>$d[5] - </font>";
		echo "  Qty : <input type='text' name='qty' size=6 onkeypress='onlynum(event)'><br>";
		echo "<div id='buynow1'><input type='image' src='images/buynow.jpg' class='button' /></div>";
		echo "</form>";
		$no=$no+1;
		if($no==2) $no=0;
		echo "</tr>";
		}
	}
	if($l>=($cnt*$num))
		$cnt=$cnt+1;
}
echo "</table><br><br>";
?>
</div>
<?
include "footer.php";
?>