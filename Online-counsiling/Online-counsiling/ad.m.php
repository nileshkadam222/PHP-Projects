
<html>
<head>
       <title>Title here!</title>
</head>
<body>
<link rel="stylesheet" href="st2.css">

<form name="f1" action="admincontrol.php"  method="POST" onSubmit="return validate()">
<center>
<table class="admin" border="2">
<tr>
<td>
<p class="admin1">Admin_id:</p>
</td>
<td ><input type="text" name="ee1" value="" placeholder=" Admin id" required>
</td>
</tr>
<tr>
<td>
<p class="admin1">Password:</p>
</td>
<td><input type="password" name="t11" value="" placeholder="Admin password "required>
</td>
</tr>
<tr>
<td><input type="submit" value="submit">
</td>
<td><input type="reset" value="reset">
</td>
</tr>
<script language="javascript">
function validate()
{

	var id,pass,pass1;
	id=document.f1.ee1.value;
        pass=document.f1.t11.value;


	if(id=='satyajit' && pass=='satya123')
	{

		return true;
	}
    else if(id=='rahul' && pass=='rahul123')
	{

		return true;
	}
   else if(id=='saikat' && pass=='saikat123')
	{

		return true;
	}

	else
	alert("please check the Id/password");
		return false;


}
</script>

</table>
</center>
</form>
</body>
</html>
