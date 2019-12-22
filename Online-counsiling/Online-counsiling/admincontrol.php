<?php
include'header.php';
?>
<html>
<body>
<link rel="stylesheet" href="st3.css">
<center>
<table class="adcontrol">
<tr>
<td>
<?php
//session_start();
$type='back';
$type = $_POST['ee1'];
?>
<html>
<head>
<h2 class="ad">
<?php
echo"Welcome Admin!!! $type";
?>
</h2>
<td>
</tr>
<tr><td class="ad1"><input type="button" value="studentlist" onclick="document.location='studentlist.php';"></td>
<td class="ad1"><input type="button" value="reporting centers" onclick="document.location='reporting.php';"></td>
<td class="ad1"><input type="button" value="addinstitue name" onclick="document.location='institue.php';"></td>
</tr>
<tr>
<td class="ad1"><input type="button" value="Update avilable sheat" onclick="document.location='institute.php';"></td>
<td class="ad1"><input type="button" value="Allocate sheat" onclick="document.location='allot.php';"></td>
<td class="ad1"><input type="button" value="Enter Rank" onclick="document.location='rank.php';"></td>
</tr>
</table>
</center>
</html>
<?php include'footer.php'
?>
