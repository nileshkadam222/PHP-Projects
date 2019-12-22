<?php
include'header.php';
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// make a note of the location of the upload handler script
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'reg.php';

// set a max file size for the html upload form
$max_file_size = 50000; // size in bytes

// now echo the html page
?>
<html>
<head>
       <title>Title here!</title>
      <center> <h3 class="suck">Student Registration Form</h3></center>
</head>
<body>
<link rel="stylesheet" href="st4.css">
<center><form name="p1" action="<?php echo $uploadHandler ?>" enctype="multipart/form-data"  method="POST" onSubmit="return validate1()">
<table class="reg">
<tr>
<td class="reg1">
<p>Name:</p>
</td>
<td><input type="text" name="f1" value="" placeholder="Student name" required>
</td>
</tr>
<tr>
<td class="reg1">
<p>GurdaintName:</p>
</td>
<td><input type="text" name="f2" value="" placeholder="Gurdaint name" required>
</td>
</tr>
<tr>
<td class="reg1"><p>Adress:</p></td>
<td><textarea width="50px" height="50px" name="f3" value="" placeholder="parmanent Address" required>
</textarea>
</td>
</tr>
<tr>
<td class="reg1"><p>D.O.B:</td>
<td>
<select name="f4">
<option value="">DD</option>
<?php for($i=1;$i<=31;$i++)
{?>
   <option value="<?php echo $i; ?>">
    <?php echo$i;
   ?></option>
   <?php
}
?>
</select>
</td>
<td>
<select name="s4">
<option value="">MM</option>
<option >
<?php $b=array('january','febrary','march','april','may','june','july','august','septembar','october','november','december');

foreach($b as $d)
{ ?>
   <option value="<?php echo$d;?>">
   <?php echo $d;?> </option>
   <?php
}
?>
</select>
 </td>
<td>
<select name="s5">
<option value="">YYYY</option>
<option select>
<?php for($y=1980;$y<=2014;$y++)
{ ?>

 <option value="<?php echo$y;?>">
 <?php echo$y;?> </option>
 <?php
}
?>
</select>
</td>
</tr>
<tr>
<td class="reg1"><p>Sex:</p></td>
<td><select name="dropdowlist">
<option >
<?php $b=array('male','female');

foreach($b as $d)
{ ?>
   <option value="<?php echo$d;?>">
   <?php echo $d;?> </option>
   <?php
}
?>
</select>
</td>
</tr>
<tr>
<td class="reg1">
<p>Catagore:</p>
</td>
<td>
<select name="f5">
<option value=""></option>
<option >
<?php $e=array('Gen','Sc','St','OBC');

foreach($e as $z)
{ ?>
   <option value="<?php echo$z;?>">
   <?php echo $z;?> </option>
   <?php
}
?>
</select>
</td>
</tr>
<tr>
<td class="reg1"><p>Age:</p></td>
<td>
<select name="f6">
<option value="">00</option>
<?php for($i=18;$i<=31;$i++)
{?>
   <option value="<?php echo $i; ?>">
    <?php echo$i;
   ?></option>
   <?php
}
?>
</select>
</td>
</tr>
<tr><td class="reg1"><p>uploadimage:</p></td>
<td><input  type="file" name="file" placeholder="imag required" required></td><td class="wo"><?php echo"**Image size max 11 K.B"?></td></tr>
<tr><td class="reg1"><p>emailid:</p></td>
<td><input type="text" id="emailid" name="f7" value="" placeholder=" email id" required></td></tr>
<tr><td class="reg1"><p>ContactNo:</p></td>
<td><input type="text" name="f8" value="" placeholder=" contact no" required></td></tr>
<tr><td class="reg1"><p>State:</p></td>
<td>
<select name="f9">
<option value="">web</option>
<option >
<?php $o=array('westbengal','bihar','orissa','up');

foreach($o as $z1)
{ ?>
   <option value="<?php echo$z1;?>">
   <?php echo $z1;?> </option>
   <?php
}
?>
</select></td></tr>
<tr><td class="reg1"><p>password:</p></td>
<td><input type="password" name="f10" value="" placeholder="pleace give password(10digit)" required></td></tr>
<tr><td><p>
            <label for="submit"></label></p></td>
            <td><p><input id="submit" type="submit" name="submit" size="4" value="Next">
        </p></td>
        <td><input type="reset" size="4" value="Reset"></td></tr>
<script language="javascript">
function validate1()
{

	var e,e1,db,db1,db2,sex,cata,age;
	db=document.p1.f4.value;
	db1=document.p1.s4.value;
    db2=document.p1.s5.value;
    sex=document.p1.dropdowlist.value;
    cata=document.p1.f5.value;
    age=document.p1.f6.value;
	e=document.getElementById('emailid')
	e1=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if( db=='')
	{
		alert("DATE OF BIRTH CANNOT BE BLANK....");

		return false;
	}
        else if( db1=='')
	{
		alert("DATE OF BIRTH IS MANDETORY....");

		return false;
	}
	else if(db2=='')
	{
		alert("DATE OF BIRTH MANDATORY...");

		return false;
	}
    else if(sex=='')
	{
		alert("SEX FILD IS BLANK....");

		return false;
	}
    else if(cata=='')
	{
		alert("PLEASE PROVIDE CATEGORY...");

		return false;
	}
    else if(age=='')
	{
		alert("PLEASE PROVIDE AGE...");

		return false;
	}
	else if(!e1.test(e.value))
	{
		alert("Please provide a valid email address");
		return false;
	}

	else
		return true;


}
</script>
</table>

    </form></center>


    </body>

</html>
<?php
include'footer.php'?>


