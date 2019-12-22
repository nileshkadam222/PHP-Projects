<html>
<body>
<script language="javascript">
function char()
{
	str=f1.ides.value;
	n=str.length;
	if(str.charAt(n-1)>=0 && str.charAt(n-1)<=9)
	f1.ides.value=str.substr(0,n-1);
}
function lastchar()
{
	str=f1.ides.value;n=str.length;
	if(str.charAt(n-1)>=0 && str.charAt(n-1)<=9)
	f1.ides.value=str.substr(0,n-1);		
}
function fun()
{
	f1.action="itemdata.php";
	f1.method="POST";
	f1.submit();
}
function check()
{
	v=f1.elements.length;
	t2=true;
	for(i=0;i<v;i++)
	{
		if(f1.elements[i].value==""){    t2=false;break;  }
		else{	t2=true;     }
	}	
	if(t2==false)
	{
			alert("You have to fill all fields");
			f1.action="additem.php";			
			f1.method="POST";
			f1.submit();
	}
}
</script>
<form action="saveitem.php" method="POST" name="f1" onsubmit="check()">
<img src="image/basics.gif">
<font size=4 face='arial' color='#EE43A0'>&nbsp;&nbsp;Product Detail</font>
<center>
<font size=5 face='Monotype Corsiva' color='#CC0000'>&nbsp;&nbsp;<b>Add New Product</b></font><br><br>
<input type='hidden' name='h' value='save'>
<br><br>
<table border=0>
<tr><td align=right><font face='Arial' size=4 color="#6600CC">Item name  : <td><input type="text" value="" name="inm"></tr>
<tr><td align=right><font face='Arial' size=4 color="#6600CC">Description  : <td><input type="text" value="" name="ides" onkeypress='char()' onblur='lastchar()'></tr>
<tr><td align=right><font face='Arial' size=4 color="#6600CC">Picture path  : <td><input type="text" value="" name="ipic"></tr>
<tr><td align=right><font face='Arial' size=4 color="#6600CC">Item Category  : <td><input type="text" value="" name="icet" onkeypress='char()' onblur='lastchar()'></tr>
<tr><td align=right><font face='Arial' size=4 color="#6600CC">Price  : <td><input type="text" value="" name="ipri"></tr>
</table>
<br><br>
<table border=0 width=20%>
<tr align="center">
<td><input type="image" src="image/greenshd.gif"></td>
<td><img src="image/redshd.gif" onClick="fun()"></td>
</tr>
<tr align="center">
<td><font face='Monotype Corsiva' size=5 color="#006633"><b>Save
<td><font face='Monotype Corsiva' size=5 color="#006633"><b>Cancle
</tr>
</table>
</body>
</html>