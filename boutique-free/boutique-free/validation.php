<script language="javascript">
function check()
{
	v=f1.elements.length;
	t2=true;
	for(i=0;i<v;i++)
	{	
		if(f1.elements[i].value=="")
		{
                                        if(i!=5)
		    	t2=false;break;  
		}
		else{	t2=true;     }
	}	
	if(t2==false)
	{
			alert("You have to fill all fields");
			f1.action="new_user.php";
			f1.method="POST";
			f1.submit();
	}
	else
	{
		alert("Your Account is Created Successfully");
		f1.action="submit.php";
			f1.method="POST";
			f1.submit();
	}
}
function onlynum(event)
{
	var num=0;
	if(window.event)
	{
		num=event.keyCode;
		if(!((num==32)||(num>=48 && num<=57)))
			event.keyCode=0;
	}
}
function onlychar(event)
{
	var num=0;
	if(window.event)
	{
		num=event.keyCode;
		if(!(num>=97 && num<=122)||(num>=65 && num<=90)||(num==32)||(num>=48 && num<=57))
			event.keyCode=0;
	}
}
</script>
