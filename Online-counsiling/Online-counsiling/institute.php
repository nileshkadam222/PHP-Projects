<html>
<center>
<head><h4 class="suck">Update collage details</h4>
<p><?php
//session_start();
//$type = $_POST['ee1'];
?>
<html>
<head>
<h2 class="ad">
<?php
echo"Welcome Admin!!!";
?>
</p>
</head>
<body bgcolor="#99CC33">
<link rel="stylesheet" href="st00.css">
<link rel="stylesheet" href="st4.css">
<form name="f1" action="update.php"  method="POST" >
<table width="100" height="10" border="2" bordercolor="black" class="midle" aligin="left">
<tr>
<td>
<p class="mn">Id:</p>
</td>
<td>
<input type="text" name="a1" value=""  placeholder="enter collage Id" required>
</td>
</tr>
<tr>
<td>
<p class="mn">Collage_name:</p>
</td>
<td>
<input type="text" name="a2" value="" placeholder="Collage name " required>
</td>
</tr>
<tr>
<td>
<p class="mn">CSdeptseat:</p>
</td>
<td>
<input type="text" name="a3" value="" >
</td>
</tr>
<tr><td></td><td><input type="submit" size="2" value="NEXT"></td>
<td><input type="button" value="BACK" onclick="document.location='admin.php';"></td></tr>
</table>
</form>
</body>
</center>
</html>


