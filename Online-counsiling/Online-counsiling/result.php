<?php
 include'header.php';?>
 <html>
<body>
<link rel="stylesheet" href="st00.css">
<center>
<form name="f00001" action="result1.php"  method="POST" >
<table width="100" height="10" border="2" bordercolor="black" class="midle" aligin="left">
<tr>
<td>
<p class="mn">Rollno:</p>
</td>
<td>
<input type="text" name="s1" value=""  placeholder="enter user Roll no" required>
</td>
</tr>
<tr>
<td>
<p class="mn">Password:</p>
</td>
<td>
<input type="password" name="s2" value="" placeholder="enter user password" required>
</td>
</tr>
<tr height="10px">
<td>
<input type="submit" name="ee" size="1"  value="submit">
</td>
<td align="center">
<input type="reset" name="ee" size="1"  value="refresh">
</td>
</tr>
</table>
</form>
</center>
</body>
</html>
<?php include 'footer.php' ?>

